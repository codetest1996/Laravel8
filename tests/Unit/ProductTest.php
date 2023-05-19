<?php

namespace Tests\Unit;
//use Tests\TestCase;
use PHPUnit\Framework\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function testModelProduct(){

        $product_list = new Product();
        $product_list->p_name = 'MSI筆電test';
        $product_list->p_label = '微星test';
        $product_list->o_price = 100000;
        $product_list->a_price = 300000;
        $product_list->created_at = now();
        $product_list->updated_at = now();
        $product_list->save();

    }
}
