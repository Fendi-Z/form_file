<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'contents',
        'featured_image'
    ];
    
    // protected $guarded = [];
}
