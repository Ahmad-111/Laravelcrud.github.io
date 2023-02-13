<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;
use App\Models\Block;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';

    protected $fillable = [
      'id',
      'student_name',
      'roll_no',
      'student_email',
      'contact_no',
      'area_id',
      'block_id',
    ];

    public function area()
    {
       return $this->belongsTo(Area::class,'area_id','id');
    }

    public function block()
    {
       return $this->belongsTo(Block::class,'block_id','id');
    }
}
