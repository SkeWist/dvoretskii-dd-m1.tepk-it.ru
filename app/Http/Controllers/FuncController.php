<?php

namespace App\Http\Controllers;

use App\Models\MaterialType;
use App\Models\ProductType;
use Illuminate\Http\Request;

class FuncController extends Controller
{
    //Модуль 4:
    public function method_module_4(ProductType $productType, MaterialType $materialType, int $quantity, float $p1, float $p2, float $storage) {
        try {
            $need_quantity = ceil($p1 * $p2 * $productType->coefficient * $quantity * (1 + $materialType->defect / 100));

            return max(0, (int)($need_quantity - $storage));
        } catch (\Exception $e) {
            return -1;
        }
    }

}
