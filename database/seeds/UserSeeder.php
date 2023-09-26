<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        factory(User::class, 50)->create();
        User::create(['name'=>'Cons Sorto', 'Email' => 'cons@gmail.com', 'password' => bcrypt('12345678')]);
    }
}
