<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LifeInsurance extends Model
{
    use HasFactory;

    protected $table="life_insurances";

    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'annual_payment' => 'int',
        'divided_payment' => 'int',
    ];
    // public function annualPayment(): Attribute
    // {
    //     return new Attribute(
    //         get: fn($value) => (int) $value,
    //     );
    // }
    // public function dividedPayment(): Attribute
    // {
    //     return new Attribute(
    //         get: fn($value) => (int) $value,
    //     );
    // }
}
