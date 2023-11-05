@extends('admin.layouts.master')
@section('title', $title)
@section('content')

<!-- Start Content-->
<div class="main-body">
    <div class="page-wrapper">
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>{{ $title }} {{ __('list') }}</h5>
                    </div>
                    <div class="card-block">
                        @can($access.'-action')
                        <!-- Add modal button -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal"><i class="fas fa-plus"></i> {{ __('btn_issue') }}</button>
                        <!-- Include Add modal -->
                        @include($view.'.create')
                        @endcan

                        <a href="{{ route($route.'.index') }}" class="btn btn-info"><i class="fas fa-sync-alt"></i> {{ __('btn_refresh') }}</a>
                    </div>

                    <div class="card-block">
                        <form class="needs-validation" novalidate method="get" action="{{ route($route.'.index') }}">
                            <div class="row gx-2">
                                <div class="form-group col-md-3">
                                    <label for="book">{{ __('field_book') }}</label>
                                    <select class="form-control" name="book" id="book">
                                        <option value="">{{ __('all') }}</option>
                                        @foreach( $search_books as $book )
                                        <option value="{{ $book->id }}" @if($selected_book == $book->id) selected @endif>{{ $book->isbn }} | {{ $book->title }}</option>
                                        @endforeach
                                    </select>

                                    <div class="invalid-feedback">
                                      {{ __('required_field') }} {{ __('field_book') }}
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="member">{{ __('field_member') }}</label>
                                    <select class="form-control" name="member" id="member">
                                        <option value="">{{ __('all') }}</option>
                                        @foreach( $members as $member )
                                        <option value="{{ $member->id }}" @if($selected_member == $member->id) selected @endif>{{ $member->library_id }} | {{ $member->memberable->first_name ?? '' }} {{ $member->memberable->last_name ?? '' }}</option>
                                        @endforeach
                                    </select>

                                    <div class="invalid-feedback">
                                      {{ __('required_field') }} {{ __('field_member') }}
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="start_date">{{ __('field_from_date') }}</label>
                                    <input type="date" class="form-control date" name="start_date" id="start_date" value="{{ $selected_start_date }}" required>

                                    <div class="invalid-feedback">
                                      {{ __('required_field') }} {{ __('field_from_date') }}
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="end_date">{{ __('field_to_date') }}</label>
                                    <input type="date" class="form-control date" name="end_date" id="end_date" value="{{ $selected_end_date }}" required>

                                    <div class="invalid-feedback">
                                      {{ __('required_field') }} {{ __('field_to_date') }}
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <button type="submit" class="btn btn-info btn-filter"><i class="fas fa-search"></i> {{ __('btn_search') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card-block">
                        <!-- [ Data table ] start -->
                        <div class="table-responsive">
                            <table id="export-table" class="display table nowrap table-striped table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('field_library_id') }}</th>
                                        <th>{{ __('field_member') }}</th>
                                        <th>{{ __('field_isbn') }}</th>
                                        <th>{{ __('field_phone') }}</th>
                                        <th>{{ __('field_issue_date') }}</th>
                                        <th>{{ __('field_due_return_date') }}</th>
                                        <th>{{ __('field_return_date') }}</th>
                                        <th>{{ __('field_penalty') }}</th>
                                        <th>{{ __('field_status') }}</th>
                                        <th>{{ __('field_action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($rows as $key => $row)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>#{{ $row->member->library_id ?? '' }}</td>
                                        <td>
                                            @if($row->member->memberable_type == 'App\Models\Student')
                                            {{ __('field_student') }}
                                            @elseif($row->member->memberable_type == 'App\User')
                                            {{ __('field_staff') }}
                                            @elseif($row->member->memberable_type == 'App\Models\OutsideUser')
                                            {{ __('field_outsider') }}
                                            @endif
                                        </td>
                                        <td>{{ $row->book->isbn ?? '' }}</td>
                                        <td>{{ $row->member->memberable->phone ?? '' }}</td>
                                        <td>
                                            @if(isset($setting->date_format))
                                                {{ date($setting->date_format, strtotime($row->issue_date)) }}
                                            @else
                                                {{ date("Y-m-d", strtotime($row->issue_date)) }}
                                            @endif
                                        </td>
                                        <td>
                                            @if(isset($setting->date_format))
                                                {{ date($setting->date_format, strtotime($row->due_date)) }}
                                            @else
                                                {{ date("Y-m-d", strtotime($row->due_date)) }}
                                            @endif
                                        </td>
                                        <td>
                                            @if(!empty($row->return_date))
                                                @if(isset($setting->date_format))
                                                    {{ date($setting->date_format, strtotime($row->return_date)) }}
                                                @else
                                                    {{ date("Y-m-d", strtotime($row->return_date)) }}
                                                @endif
                                            @endif
                                        </td>
                                        <td>
                                            @isset($row->penalty)
                                            {{ round($row->penalty, $setting->decimal_place ?? 2) }} {!! $setting->currency_symbol !!}
                                            @endisset
                                        </td>
                                        <td>
                                            @if( $row->status == 0 )
                                            <span class="badge badge-pill badge-danger">{{ __('status_lost') }}</span>

                                            @elseif( $row->status == 1 )
                                            @if($row->due_date < date("Y-m-d"))
                                            <span class="badge badge-pill badge-warning">{{ __('status_delay') }}</span>
                                            @else
                                            <span class="badge badge-pill badge-primary">{{ __('status_issued') }}</span>
                                            @endif

                                            @elseif( $row->status == 2 )
                                            <span class="badge badge-pill badge-success">{{ __('status_returned') }}</span>
                                            @if($row->due_date < $row->return_date)
                                            <span class="badge badge-pill badge-info">{{ __('status_delayed') }}</span>
                                            @endif
                                            @endif
                                        </td>
                                        <td>
                                            @can($access.'-action')
                                            @if(empty($row->return_date) && $row->status == 1)
                                            <button class="btn btn-icon btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#returnModal-{{ $row->id }}"><i class="fas fa-reply"></i></button>
                                            @include($view.'.return')

                                            <button class="btn btn-icon btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#lostModal-{{ $row->id }}"><i class="fas fa-times"></i></button>
                                            @include($view.'.lost')
                                            @endif
                                            @endcan

                                            @can($access.'-delete')
                                            <button type="button" class="btn btn-icon btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $row->id }}">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                            <!-- Include Delete modal -->
                                            @include('admin.layouts.inc.delete')
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- [ Data table ] end -->
                    </div>

                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- End Content-->

@endsection