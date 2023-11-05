<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationSetting extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'title', 'header_left', 'header_center', 'header_right', 'body', 'footer_left', 'footer_center', 'footer_right', 'logo_left', 'logo_right', 'background', 'status',
    ];

    // Application Status
    static public function status()
    {
        $status = ApplicationSetting::where('status', 1)->first();

        return $status;
    }
}
