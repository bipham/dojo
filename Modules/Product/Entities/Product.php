<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Product\Entities\Category;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['category_id', 'name', 'description', 'price', 'sale_price', 'stock', 'image_feature', 'object', 'is_published'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
