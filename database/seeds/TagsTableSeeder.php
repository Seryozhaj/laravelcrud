<?php

use App\Models\Tag as ModelsTag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsTag::create([
            'title' => 'Test tag',
        ]);
    }
}
