<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;
    protected $table = "rooms";
    protected $fillable = ["property_id","room_no",'num_beds',"rent","min_stay","max_stay","images"];
}
