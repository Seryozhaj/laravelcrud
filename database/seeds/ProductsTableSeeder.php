<?php

use App\Models\Product as ModelsProduct;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsProduct::create([
            'user_id' => 1,
            'title' => 'Test product',
            'url'   => 'testUrl'
        ]);
    }
}
