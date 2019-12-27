<?php

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
        $projects = factory('App\Project', 15)->create();

        /*foreach ($projects as $project) {
            
            factory('App\Task', 3)->create([
                'project_id' => $project->id,
            ]);
        }*/

        $projects->each(function($project){
            factory('App\Task', 3)->create([
                'project_id' => $project->id,
            ]);
        });
    }   
}   
