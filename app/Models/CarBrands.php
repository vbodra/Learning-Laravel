<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\PracticingRelatedTables;

class CarBrands extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'brand_name',
    ];

    protected $hidden = [
        'created_at',
        // 'deleted_at', // keeping some field out just to practice
        'updated_at'
    ];

    public function practicing_related_tables()
    {
        return $this->hasMany(PracticingRelatedTables::class);
    }
}
