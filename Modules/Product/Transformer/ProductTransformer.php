<?php
namespace Modules\Product\Transformer;

use Illuminate\Http\Resources\Json\Resource;

class ProductTransformer extends Resource {

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'category_id' => $this->category->name,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'sale_price' => $this->sale_price,
            'stock' => $this->stock,
            'image_feature' => $this->image_feature,
            'object' => $this->object,
            'is_published' => ($this->is_published ? 'true' : 'false'),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}