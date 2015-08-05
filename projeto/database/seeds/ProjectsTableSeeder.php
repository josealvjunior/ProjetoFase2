<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\project\Entities\Projects::truncate();
        factory(\project\Entities\Projects::class, 10)->create();
    }
}
