<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $table = "bookings";
    protected $fillable =["room_id","customer_id","check_in","check_out","total_amount"];
}
