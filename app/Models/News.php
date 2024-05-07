<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected $fillable = [
        'subject',
        'news_description',
        'date',
        'news_image',
        'news_category_id',
    ];

    protected $table='news';

    public $primaryKey = 'id';

    public $timestamps = true;


    public function newsCategory()
    {
        return $this->belongsTo(NewsCategory::class);
    }
}
