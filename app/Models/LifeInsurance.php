<?php

namespace App\Models;

use Carbon\Carbon;
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
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
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
    public function createdAt(): Attribute
    {
        return new Attribute(
            get: fn($value) => (new Carbon($value))->diffForHumans(),
        );
    }
    public function updatedAt(): Attribute
    {
        return new Attribute(
            get: fn($value) => (new Carbon($value))->diffForHumans(),
        );
    }
}
