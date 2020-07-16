<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(SC_DB_PREFIX.'shop_product')->insert([
            ['id' => 1, 'sku' => 'ABCZZ','alias' => 'demo-alias-name-product-1', 'image' => '/data/product/img-1.jpg', 'brand_id' => '1', 'supplier_id' => '1', 'price' => '15000', 'cost' => '10000', 'stock' => '99',  'status' => '1', 'kind' => 0, 'tax_id' => 'auto', 'date_available' => date("Y-m-d", strtotime("+1 month")), 'sold' => '1', 'minimum' => '0'],
            ['id' => 2, 'sku' => 'LEDFAN1','alias' => 'demo-alias-name-product-2', 'image' => '/data/product/img-4.jpg', 'brand_id' => '1', 'supplier_id' => '1', 'price' => '15000', 'cost' => '10000', 'stock' => '100',  'status' => '1', 'kind' => 0, 'tax_id' => 'auto', 'date_available' => null, 'sold' => '0', 'minimum' => '0'],
            ['id' => 3, 'sku' => 'CLOCKFAN1','alias' => 'demo-alias-name-product-3', 'image' => '/data/product/img-11.jpg', 'brand_id' => '2', 'supplier_id' => '1', 'price' => '15000', 'cost' => '10000', 'stock' => '100',  'status' => '1', 'kind' => 0, 'tax_id' => 'auto', 'date_available' => null, 'sold' => '0', 'minimum' => '0'],
            ['id' => 4, 'sku' => 'CLOCKFAN2','alias' => 'demo-alias-name-product-4', 'image' => '/data/product/img-14.jpg', 'brand_id' => '3', 'supplier_id' => '1', 'price' => '15000', 'cost' => '10000', 'stock' => '100',  'status' => '1', 'kind' => 0, 'tax_id' => 'auto', 'date_available' => null, 'sold' => '0', 'minimum' => '10'],
            ['id' => 5, 'sku' => 'CLOCKFAN3','alias' => 'demo-alias-name-product-5', 'image' => '/data/product/img-15.jpg', 'brand_id' => '1', 'supplier_id' => '1', 'price' => '15000', 'cost' => '10000', 'stock' => '100',  'status' => '1', 'kind' => 0, 'tax_id' => 'auto', 'date_available' => null, 'sold' => '0', 'minimum' => '0'],
            ['id' => 6, 'sku' => 'TMC2208','alias' => 'demo-alias-name-product-6', 'image' => '/data/product/img-16.jpg', 'brand_id' => '1', 'supplier_id' => '1', 'price' => '15000', 'cost' => '10000', 'stock' => '100',  'status' => '1', 'kind' => 0, 'tax_id' => 'auto', 'date_available' => null, 'sold' => '0', 'minimum' => '0'],
            ['id' => 7, 'sku' => 'FILAMENT','alias' => 'demo-alias-name-product-7', 'image' => '/data/product/img-17.jpg', 'brand_id' => '2', 'supplier_id' => '1', 'price' => '15000', 'cost' => '10000', 'stock' => '100',  'status' => '1', 'kind' => 0, 'tax_id' => 'auto', 'date_available' => null, 'sold' => '0', 'minimum' => '0'],
            ['id' => 8, 'sku' => 'A4988','alias' => 'demo-alias-name-product-8', 'image' => '/data/product/img-18.jpg', 'brand_id' => '2', 'supplier_id' => '1', 'price' => '15000', 'cost' => '10000', 'stock' => '100',  'status' => '1', 'kind' => 0, 'tax_id' => 'auto', 'date_available' => null, 'sold' => '0', 'minimum' => '0'],
            ['id' => 9, 'sku' => 'ANYCUBIC-P','alias' => 'demo-alias-name-product-9', 'image' => '/data/product/img-20.jpg', 'brand_id' => '2', 'supplier_id' => '1', 'price' => '15000', 'cost' => '10000', 'stock' => '100',  'status' => '1', 'kind' => 0, 'tax_id' => 'auto', 'date_available' => null, 'sold' => '0', 'minimum' => '0'],
            ['id' => 10, 'sku' => '3DHLFD-P','alias' => 'demo-alias-name-product-10', 'image' => '/data/product/img-21.jpg', 'brand_id' => '4', 'supplier_id' => '1', 'price' => '15000', 'cost' => '10000', 'stock' => '100',  'status' => '1', 'kind' => 0, 'tax_id' => 'auto', 'date_available' => null, 'sold' => '0', 'minimum' => '0'],
            ['id' => 11, 'sku' => 'SS495A','alias' => 'demo-alias-name-product-11', 'image' => '/data/product/img-22.jpg', 'brand_id' => '2', 'supplier_id' => '1', 'price' => '15000', 'cost' => '10000', 'stock' => '100',  'status' => '1', 'kind' => 0, 'tax_id' => 'auto', 'date_available' => null, 'sold' => '0', 'minimum' => '0'],
            ['id' => 12, 'sku' => '3D-CARBON1.75','alias' => 'demo-alias-name-product-12', 'image' => '/data/product/img-23.jpg', 'brand_id' => '2', 'supplier_id' => '1', 'price' => '15000', 'cost' => '10000', 'stock' => '100',  'status' => '1', 'kind' => 0, 'tax_id' => 'auto', 'date_available' => null, 'sold' => '0', 'minimum' => '5'],
            ['id' => 13, 'sku' => '3D-GOLD1.75','alias' => 'demo-alias-name-product-13', 'image' => '/data/product/img-34.jpg', 'brand_id' => '3', 'supplier_id' => '1', 'price' => '10000', 'cost' => '5000', 'stock' => '0',  'status' => '1', 'kind' => 0, 'tax_id' => 'auto', 'date_available' => null, 'sold' => '0', 'minimum' => '0'],
            ['id' => 14, 'sku' => 'LCD12864-3D','alias' => 'demo-alias-name-product-14', 'image' => '/data/product/img-13.jpg', 'brand_id' => '3', 'supplier_id' => '1', 'price' => '15000', 'cost' => '10000', 'stock' => '100',  'status' => '1', 'kind' => 0, 'tax_id' => 'auto', 'date_available' => null, 'sold' => '0', 'minimum' => '0'],
            ['id' => 15, 'sku' => 'LCD2004-3D','alias' => 'demo-alias-name-product-15', 'image' => '/data/product/img-41.jpg', 'brand_id' => '3', 'supplier_id' => '1', 'price' => '15000', 'cost' => '10000', 'stock' => '100',  'status' => '1', 'kind' => 1, 'tax_id' => 'auto', 'date_available' => null, 'sold' => '0', 'minimum' => '10'],
            ['id' => 16, 'sku' => 'RAMPS1.5-3D','alias' => 'demo-alias-name-product-16', 'image' => '/data/product/img-42.jpg', 'brand_id' => '2', 'supplier_id' => '1', 'price' => '0', 'cost' => '0', 'stock' => '0',  'status' => '1', 'kind' => 2, 'tax_id' => 'auto', 'date_available' => null, 'sold' => '0', 'minimum' => '0'],
            ['id' => 17, 'sku' => 'ALOKK1-AY','alias' => 'demo-alias-name-product-17', 'image' => '/data/product/img-26.jpg', 'brand_id' => '3', 'supplier_id' => '1', 'price' => '15000', 'cost' => '10000', 'stock' => '100',  'status' => '1', 'kind' => 0, 'tax_id' => 'auto', 'date_available' => null, 'sold' => '0', 'minimum' => '5'],
        ]);

        DB::table(SC_DB_PREFIX.'shop_product_description')->insert([
            ['product_id' => '1', 'lang' => 'en', 'name' => 'Easy Polo Black Edition 1', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '2', 'lang' => 'en', 'name' => 'Easy Polo Black Edition 2', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '3', 'lang' => 'en', 'name' => 'Easy Polo Black Edition 3', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '4', 'lang' => 'en', 'name' => 'Easy Polo Black Edition 4', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '5', 'lang' => 'en', 'name' => 'Easy Polo Black Edition 5', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '6', 'lang' => 'en', 'name' => 'Easy Polo Black Edition 6', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '7', 'lang' => 'en', 'name' => 'Easy Polo Black Edition 7', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '8', 'lang' => 'en', 'name' => 'Easy Polo Black Edition 8', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '9', 'lang' => 'en', 'name' => 'Easy Polo Black Edition 9', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '10', 'lang' => 'en', 'name' => 'Easy Polo Black Edition 10', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '11', 'lang' => 'en', 'name' => 'Easy Polo Black Edition 11', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '12', 'lang' => 'en', 'name' => 'Easy Polo Black Edition 12', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '13', 'lang' => 'en', 'name' => 'Easy Polo Black Edition 13', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '14', 'lang' => 'en', 'name' => 'Easy Polo Black Edition 14', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '15', 'lang' => 'en', 'name' => 'Easy Polo Black Edition 15', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '16', 'lang' => 'en', 'name' => 'Easy Polo Black Edition 16', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '17', 'lang' => 'en', 'name' => 'Easy Polo Black Edition 17', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '1', 'lang' => 'vi', 'name' => 'Easy Polo Black Edition 1', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '2', 'lang' => 'vi', 'name' => 'Easy Polo Black Edition 2', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '3', 'lang' => 'vi', 'name' => 'Easy Polo Black Edition 3', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '4', 'lang' => 'vi', 'name' => 'Easy Polo Black Edition 4', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '5', 'lang' => 'vi', 'name' => 'Easy Polo Black Edition 5', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '6', 'lang' => 'vi', 'name' => 'Easy Polo Black Edition 6', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '7', 'lang' => 'vi', 'name' => 'Easy Polo Black Edition 7', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '8', 'lang' => 'vi', 'name' => 'Easy Polo Black Edition 8', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '9', 'lang' => 'vi', 'name' => 'Easy Polo Black Edition 9', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '10', 'lang' => 'vi', 'name' => 'Easy Polo Black Edition 10', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '11', 'lang' => 'vi', 'name' => 'Easy Polo Black Edition 11', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '12', 'lang' => 'vi', 'name' => 'Easy Polo Black Edition 12', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '13', 'lang' => 'vi', 'name' => 'Easy Polo Black Edition 13', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '14', 'lang' => 'vi', 'name' => 'Easy Polo Black Edition 14', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '15', 'lang' => 'vi', 'name' => 'Easy Polo Black Edition 15', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '16', 'lang' => 'vi', 'name' => 'Easy Polo Black Edition 16', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
            ['product_id' => '17', 'lang' => 'vi', 'name' => 'Easy Polo Black Edition 17', 'keyword' => '', 'description' => '', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<img alt="" src="/data/product/img-21.jpg" style="width: 262px; height: 262px; float: right; margin: 10px;" /></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'],
        ]);

        DB::table(SC_DB_PREFIX.'shop_category')->insert([
            ['id' => '1', 'alias'=> 'electronics', 'image' => '/data/category/img-40.jpg', 'parent' => '0', 'top' => '1', 'sort' => '0', 'status' => '1'],
            ['id' => '2', 'alias'=> 'clothing-wears', 'image' => '/data/category/img-44.jpg', 'parent' => '0', 'top' => '1', 'sort' => '0', 'status' => '1'],
            ['id' => '3', 'alias'=> 'mobile', 'image' => '/data/category/img-42.jpg', 'parent' => '1', 'top' => '1', 'sort' => '0', 'status' => '1'],
            ['id' => '4', 'alias'=> 'accessaries-extras', 'image' => '/data/category/img-18.jpg', 'parent' => '0', 'top' => '1', 'sort' => '0', 'status' => '1'],
            ['id' => '5', 'alias'=> 'computers', 'image' => '/data/category/img-14.jpg', 'parent' => '1', 'top' => '1', 'sort' => '0', 'status' => '1'],
            ['id' => '6', 'alias'=> 'tablets', 'image' => '/data/category/img-14.jpg', 'parent' => '1', 'top' => '0', 'sort' => '0', 'status' => '1'],
            ['id' => '7', 'alias'=> 'appliances', 'image' => '/data/category/img-40.jpg', 'parent' => '1', 'top' => '0', 'sort' => '0', 'status' => '1'],
            ['id' => '8', 'alias'=> 'men-clothing', 'image' => '/data/category/img-14.jpg', 'parent' => '2', 'top' => '0', 'sort' => '0', 'status' => '1'],
            ['id' => '9', 'alias'=> 'women-clothing', 'image' => '/data/category/img-18.jpg', 'parent' => '2', 'top' => '1', 'sort' => '0', 'status' => '1'],
            ['id' => '10', 'alias'=> 'kid-wear', 'image' => '/data/category/img-14.jpg', 'parent' => '2', 'top' => '0', 'sort' => '0', 'status' => '1'],
            ['id' => '11', 'alias'=> 'mobile-accessaries', 'image' => '/data/category/img-40.jpg', 'parent' => '4', 'top' => '0', 'sort' => '0', 'status' => '1'],
            ['id' => '12', 'alias'=> 'women-accessaries', 'image' => '/data/category/img-42.jpg4', 'parent' => '4', 'top' => '0', 'sort' => '3', 'status' => '1'],
            ['id' => '13', 'alias'=> 'men-accessaries', 'image' => '/data/category/img-40.jpg', 'parent' => '4', 'top' => '0', 'sort' => '3', 'status' => '1'],
        ]);
        DB::table(SC_DB_PREFIX.'shop_category_description')->insert([
            ['category_id' => '1', 'lang' => 'en', 'title' => 'Electronics', 'keyword' => '', 'description' => ''],
            ['category_id' => '2', 'lang' => 'en', 'title' => 'Clothing & Wears', 'keyword' => '', 'description' => ''],
            ['category_id' => '3', 'lang' => 'en', 'title' => 'Mobile', 'keyword' => '', 'description' => ''],
            ['category_id' => '4', 'lang' => 'en', 'title' => 'Accessaries & Extras', 'keyword' => '', 'description' => ''],
            ['category_id' => '5', 'lang' => 'en', 'title' => 'Computers', 'keyword' => '', 'description' => ''],
            ['category_id' => '6', 'lang' => 'en', 'title' => 'Tablets', 'keyword' => '', 'description' => ''],
            ['category_id' => '7', 'lang' => 'en', 'title' => 'Appliances', 'keyword' => '', 'description' => ''],
            ['category_id' => '8', 'lang' => 'en', 'title' => 'Men\'s Clothing', 'keyword' => '', 'description' => ''],
            ['category_id' => '9', 'lang' => 'en', 'title' => 'Women\'s Clothing', 'keyword' => '', 'description' => ''],
            ['category_id' => '10', 'lang' => 'en', 'title' => 'Kid\'s Wear', 'keyword' => '', 'description' => ''],
            ['category_id' => '11', 'lang' => 'en', 'title' => 'Mobile Accessaries', 'keyword' => '', 'description' => ''],
            ['category_id' => '12', 'lang' => 'en', 'title' => 'Women\'s Accessaries', 'keyword' => '', 'description' => ''],
            ['category_id' => '13', 'lang' => 'en', 'title' => 'Men\'s Accessaries', 'keyword' => '', 'description' => ''],

            ['category_id' => '1', 'lang' => 'vi', 'title' => 'Thiết bị điện tử', 'keyword' => '', 'description' => ''],
            ['category_id' => '2', 'lang' => 'vi', 'title' => 'Quần áo', 'keyword' => '', 'description' => ''],
            ['category_id' => '3', 'lang' => 'vi', 'title' => 'Điện thoại', 'keyword' => '', 'description' => ''],
            ['category_id' => '4', 'lang' => 'vi', 'title' => 'Phụ kiện ', 'keyword' => '', 'description' => ''],
            ['category_id' => '5', 'lang' => 'vi', 'title' => 'Máy tính', 'keyword' => '', 'description' => ''],
            ['category_id' => '6', 'lang' => 'vi', 'title' => 'Máy tính bảng', 'keyword' => '', 'description' => ''],
            ['category_id' => '7', 'lang' => 'vi', 'title' => 'Thiết bị', 'keyword' => '', 'description' => ''],
            ['category_id' => '8', 'lang' => 'vi', 'title' => 'Quần áo nam', 'keyword' => '', 'description' => ''],
            ['category_id' => '9', 'lang' => 'vi', 'title' => 'Quần áo nữ', 'keyword' => '', 'description' => ''],
            ['category_id' => '10', 'lang' => 'vi', 'title' => 'Đồ trẻ em', 'keyword' => '', 'description' => ''],
            ['category_id' => '11', 'lang' => 'vi', 'title' => 'Phụ kiện điện thoại', 'keyword' => '', 'description' => ''],
            ['category_id' => '12', 'lang' => 'vi', 'title' => 'Phụ kiện nữ', 'keyword' => '', 'description' => ''],
            ['category_id' => '13', 'lang' => 'vi', 'title' => 'Phụ kiện nam', 'keyword' => '', 'description' => ''],
        ]);
    }
}
