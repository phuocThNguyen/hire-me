<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Car extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    protected $table = 'cars';
    public $timestamps = false;

    protected $fillable = ['model', 'slug', 'brand_id', 'image_path', 'price', 'status'];

    public function car_brand()
    {
        return $this->belongsTo(CarBrand::class, 'brand_id');
    }
}
