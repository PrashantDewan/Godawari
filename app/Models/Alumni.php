<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;
    protected $fillable=['alumni_name','alumni_testimonial','alumni_image'];

    protected $table = 'alumnis';

    public $primaryKey='id';

    public $timestamps = true;

}
