<?php
namespace Modules\Product\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Modules\Core\Repositories\BaseRepository;

/**
 * Interface ProductRepository
 * @package Modules\Product\Repositories
 */
interface ProductRepository extends BaseRepository
{
    /**
     * Returns all the Products
     * @return object
     */
    /**
     * Paginating, ordering and searching through pages for server side index table
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function serverPaginationFilteringFor(Request $request) : LengthAwarePaginator;
}
