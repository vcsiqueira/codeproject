<?php

use Illuminate\Database\Seeder;

class ProjectNotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \App\Entities\ProjectNote::
        factory(\App\Entities\ProjectNote::class,50)->create();
    }
}
