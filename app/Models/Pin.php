<?php

// app/Models/Pin.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
    use HasFactory;

    protected $table = 'course_form_pin'; // Adjust this if your actual table name is different
    protected $primaryKey = 'pin_id';
    public $timestamps = false; // Assuming you don't need timestamps for this model

    protected $fillable = [
        'pin_num', 'is_used', 'created_admin_id'
    ];

    protected $attributes = [
        'is_used' => 2, // Default value for is_used
    ];

    // If you have additional methods or relationships, you can define them here
}

