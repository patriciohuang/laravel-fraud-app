<?php

namespace App\Models;

use Attribute;
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

    public function getReasonsAttribute($value) {
        $reasons_codes = explode(",", $value);
        $reasons_strings = array();
        foreach ($reasons_codes as $code) {
            if ($code === "non_nl_number") {
                $reasons_strings[] = "Customer has non-NL phone number";
            } elseif ($code === "same_iban") {
                $reasons_strings[] = "Customer has same IBAN as other/s";
            } elseif ($code === "same_ip") {
                $reasons_strings[] = "Customer has same IP as other/s";
            } elseif ($code === "under_18") {
                $reasons_strings[] = "Customer is younger than 18 years old";
            }
        }
        return $reasons_strings;
    }
}
