<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    // A category may have many subcategories
    public function subcategories(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // A subcategory belongs to a parent category
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // A category (or subcategory) has many products
    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
