<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;

class Block extends Model
{
    use HasFactory;
    protected $table='blocks';

    protected $fillable = [
        'id',
        'block_name',
        'area_id',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class,'area_id','id');
    }
    
}
