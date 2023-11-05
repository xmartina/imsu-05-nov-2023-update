@extends('student.layouts.master')
@section('title', $title)
@section('content')

    {{--    check for course registration--}}
    <!-- Modal Structure -->

    <div id="pinRegistrationModal" class="modal rounded form-bd bg-dark @if($isPinReg === 2) d-block @elseif($isPinReg === 1) d-none
@else
   <?php
    header("Location: error_in_reg_page");
    ?>
@endif h-100 py-5">
        <div class="form-sub bg-white rounded h-100 d-flex align-items-center mx-auto justify-content-center">
            <div class="fm-content-wr d-block">
                <div class="form-hd">
                    <div class="row">
                        <div class="col-5 d-flex align-items-center font-11 font-weight-bold">Need Help ?
                            <div
                                class="ml-2 form-icon-wr text-dark-blue bg-light-blue rounded-circle d-flex justify-content-center align-items-center p-3">
                                <span class="material-symbols-outlined font-9">support_agent</span>
                            </div>
                        </div>
                    </div>
                    <div class="my-3">
                        <h4>Course Registration Form</h4>
                        <p class="text-muted mb-3">use the form below to register your course form pin</p>
                    </div>
                </div>
                <div class="form-mn">
                    <form action="">
                        <div class="cours-form-input mb-2 d-flex align-items-center">Course form Pin
                            <span class="material-symbols-outlined ml-1 bg-dark text-white rounded-circle d-flex align-items-center justify-content-center cursor-pointer">info</span>
                        </div>
                        <input class="course-form w-100 py-2 rounded" type="text" name="" id="" placeholder="Enter Course form Pin">
                        <div class="spacer-12"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <button class="mt-3 py-2 px-3 w-100 bg-dark-blue text-white rounded">Submit Pin</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

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
                        <!-- [ Data table ] start -->
                        <div class="table-responsive">
                            <table id="basic-table" class="display table nowrap table-striped table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('field_isbn') }}</th>
                                        <th>{{ __('field_book') }}</th>
                                        <th>{{ __('field_issue_date') }}</th>
                                        <th>{{ __('field_due_return_date') }}</th>
                                        <th>{{ __('field_return_date') }}</th>
                                        <th>{{ __('field_status') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @isset($rows)
                                  @foreach( $rows as $key => $row )
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $row->book->isbn ?? '' }}</td>
                                        <td>{{ $row->book->title ?? '' }}</td>
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
                                            @if( $row->status == 0 )
                                            <span class="badge badge-pill badge-danger">{{ __('status_lost') }}</span>

                                            @elseif( $row->status == 1 )
                                            @if($row->due_date < date("Y-m-d"))
                                            <span class="badge badge-pill badge-danger">{{ __('status_delay') }}</span>
                                            @else
                                            <span class="badge badge-pill badge-primary">{{ __('status_issued') }}</span>
                                            @endif

                                            @elseif( $row->status == 2 )
                                            <span class="badge badge-pill badge-success">{{ __('status_returned') }}</span>
                                            @if($row->due_date < $row->return_date)
                                            <span class="badge badge-pill badge-danger">{{ __('status_delayed') }}</span>
                                            @endif
                                            @endif
                                        </td>
                                    </tr>
                                  @endforeach
                                  @endisset
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
