<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
    use HasFactory;
    protected $primaryKey = 'pin_id';
    protected $fillable = ['pin_num', 'is_used', 'create_admin_id','student_used_id','date_used','time_used'];

}
