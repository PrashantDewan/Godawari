<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    use HasFactory;
    protected $fillable=['news_category'];

    protected $table='news_categories';

    public $primaryKey='id';

    public $timestamps=true;

    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
