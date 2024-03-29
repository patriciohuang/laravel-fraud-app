<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Scan extends Model
{
    use HasFactory;
    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }
    protected $table = 'scans';
    protected $fillable = ['fraudulent_count'];
}
