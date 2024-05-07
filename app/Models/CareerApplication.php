<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Career;


class CareerApplication extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
