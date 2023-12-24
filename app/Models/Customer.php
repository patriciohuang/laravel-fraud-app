<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'scan_id';
    protected $fillable = [
       'customer_id',
       'first_name',
       'last_name',
       'fraudulent',
       'reasons',
       'scan_id'
    ];
}
