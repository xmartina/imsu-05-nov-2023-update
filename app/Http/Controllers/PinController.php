<?php
// app/Http/Controllers/PinController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pin;
use function random_int;


class PinController extends Controller
{
    public function create()
    {
        return view('admin.course-form-pin.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'pin_count' => 'required|integer|min:1|max:25',
        ]);

        $pinCount = $request->input('pin_count');
        $userId = auth()->user()->id; // Assuming you're using Laravel's authentication system

        $pins = [];

        for ($i = 0; $i < $pinCount; $i++) {
            $pins[] = [
                'pin_num' => $this->generateRandomPin(), // Implement your own method to generate random pins
                'is_used' => 2,
                'created_admin_id' => $userId,
            ];
        }

        Pin::insert($pins);

        return redirect()->route('pins.create')->with('success', 'Pins generated successfully.');
    }

    // Implement your own method to generate random pins
    private function generateRandomPin()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pinLength = 29;
        $pin = '';

        for ($i = 0; $i < $pinLength; $i++) {
            $pin .= $characters[random_int(0, strlen($characters) - 1)];
        }

        return $pin;
    }
}
