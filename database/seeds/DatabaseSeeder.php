<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(PetsTableSeeder::class);
        $this->call(BidsTableSeeder::class);
        $this->call(ContractsTableSeeder::class);
    }
}
