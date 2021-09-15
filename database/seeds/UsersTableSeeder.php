<?php

use App\Models\User as ModelsUser;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsUser::create([
            'name'  => 'Test User',
            'email' => 'test@test.com',
            'password'  => '123456'
        ]);
    }
}
