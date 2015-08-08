<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //\project\Entities\Client::truncate();
        //\project\Entities\Projects::truncate();

        $this->call(UserTableSeeder::class);
        $this->call(ClientTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ProjectNotesTableSeeder::class);
        Model::reguard();
    }
}
