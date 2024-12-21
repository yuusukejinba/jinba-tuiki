<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeason extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'product_id' => '1', //キウイ
            'season_id' => '3',
            
        ];
        DB::table('products')->insert($param);

        $param = [
            'product_id' => '1', //キウイ
            'season_id' => '4',
            
        ];
        DB::table('products')->insert($param);

        $param = [
            'product_id' => '2', //ストロベリー
            'season_id' => '1',
            
        ];
        DB::table('products')->insert($param);


        $param = [
            'product_id' => '3', //オレンジ
            'season_id' => '4',
            
        ];
        DB::table('products')->insert($param);

        $param = [
            'product_id' => '4', //スイカ
            'season_id' => '2',
            
        ];
        DB::table('products')->insert($param);

        $param = [
            'product_id' => '5', //ピーチ
            'season_id' => '2',
            
        ];
        DB::table('products')->insert($param);

        $param = [
            'product_id' => '6', //シャインマスカット
            'season_id' => '2',
            
        ];
        DB::table('products')->insert($param);

        $param = [
            'product_id' => '6', //シャインマスカット
            'season_id' => '3',
            
        ];
        DB::table('products')->insert($param);

        $param = [
            'product_id' => '7', //パイナップル
            'season_id' => '1',
            
        ];
        DB::table('products')->insert($param);

        $param = [
            'product_id' => '7', //パイナップル
            'season_id' => '2',
            
        ];
        DB::table('products')->insert($param);

        $param = [
            'product_id' => '8', //ブドウ
            'season_id' => '2',
            
        ];
        DB::table('products')->insert($param);

        $param = [
            'product_id' => '8', //ブドウ
            'season_id' => '3',
            
        ];
        DB::table('products')->insert($param);

        $param = [
            'product_id' => '9', //バナナ
            'season_id' => '2',
            
        ];
        DB::table('products')->insert($param);

        $param = [
            'product_id' => '10', //メロン
            'season_id' => '1',
            
        ];
        DB::table('products')->insert($param);

        $param = [
            'product_id' => '10', //メロン
            'season_id' => '2',
            
        ];
        DB::table('products')->insert($param);



    }
}
