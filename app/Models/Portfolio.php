<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'thumbnail_image',
        'portfolio_images',
        'portfolio_link',
    ];

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }
    
}
