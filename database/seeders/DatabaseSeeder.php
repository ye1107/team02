<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RecordsTableSeeder::class);
        $this->call(KeysTableSeeder::class);
        $this->call(UsernamesTableSeeder::class);
    }
}
