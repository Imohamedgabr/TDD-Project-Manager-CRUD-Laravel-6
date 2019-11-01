<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTasksTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_project_can_have_tasks()
    {
        // $this->withoutExceptionHandling();

        $this->signIn();
        $project = factory('App\Project')->create(['owner_id' => auth()->id() ] );

        $this->post($project->path() .'/tasks' , ['body' => 'new task']);

        $this->get($project->path())
            ->assertSee('new task');
    }

    /** @test */
    public function a_task_requires_a_body()
    {
        $this->signIn();

        $project = factory('App\Project')->create(['owner_id' => auth()->id() ] );

        $attributes = factory('App\Task')->raw(['body'=> '']);
        $this->post($project->path() .'/tasks' , $attributes )->assertSessionHasErrors('body');
    }
}
