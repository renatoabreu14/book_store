<?php

use Illuminate\Database\Seeder;

class EditorasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //\DB::statement('truncate editoras');
        factory(App\Editora::class, 30)->create();
    }
}
