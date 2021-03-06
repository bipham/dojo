<?php

namespace Modules\Product\Http\Controllers\Admin;

use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Product\Repositories\ProductRepository;
use Modules\Product\Transformer\ProductTransformer;

class ProductController extends AdminBaseController
{
    /**
     * @var PageRepository
     */
    private $product;

    public function __construct(ProductRepository $product)
    {
        parent::__construct();

        $this->product = $product;
    }

    public function index()
    {
//        $data = ProductTransformer::collection($this->product->all());
//        dd($data);
        return view('product::product.index');
    }
}
