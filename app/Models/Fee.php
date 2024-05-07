<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $primaryKey = 'id';

    public function classes()
    {
        return $this->belongsTo(Classes::class);
    }
}