<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\CarBrands;

class CarModels extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'model',
        'car_brand_id'
    ];

    public function CarBrand()
    {
        return $this->belongsTo(CarBrands::class);
    }
}
