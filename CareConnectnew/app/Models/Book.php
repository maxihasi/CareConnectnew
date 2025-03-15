<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable=[
        'caregiver_id',
        'caregiver_name',
        'caregiver_category',
        'caregiver_phone_number',
        'client_id',
        'client_name',
        'client_address',
        'client_phone_number',
        'title',
        'description',
        'charge_type',
        'amount',
        'city_id',
    ];
}
