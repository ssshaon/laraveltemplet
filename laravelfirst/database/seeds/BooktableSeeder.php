<?php

use Illuminate\Database\Seeder;

class BooktableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Book::class, 50)->create();
    }
}
