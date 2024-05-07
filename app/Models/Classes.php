<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $fillable = ['class_name'];
    protected $primaryKey = 'class_id';
    public function fee()
    {
        return $this->hasMany(Fee::class);
    }
}