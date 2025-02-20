<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Repository\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        try {
            return ProductResource::collection($this->productRepository->index());
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function productEdit($id)
    {
        try {
            return ProductResource::make($this->productRepository->productEdit($id));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function productView(Request $request)
    {
        try {
            return ProductResource::collection($this->productRepository->productView($request->all()));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
