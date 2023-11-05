<?php

namespace App\Http\Controllers;
use App\Providers\AlphanumericProvider;

use Illuminate\Http\Request;

class PinController extends Controller
{
    //
    public function createForm()
    {
        return view('admin.course-form-pin.create');
    }
    public function generatePins(Request $request)
    {
        $numToGenerate = $request->input('num_to_generate');
        $pins = [];

        for ($i = 0; $i < $numToGenerate; $i++) {
            $pin = [
                'pin_num' =>  AlphanumericProvider::generateAlphanumeric(29),
                'is_used' => 2,
                'create_admin_id' => auth()->user()->id,
            ];

            Pin::create($pin);
            $pins[] = $pin['pin_num'];
        }

        return view('admin.course-form-pin.create', ['pins' => $pins]);
    }

}
