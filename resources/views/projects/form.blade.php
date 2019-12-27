<?php 
    if ($project->id) {
        $route = ['url' => route('projects.update', $project), 'method' => 'PUT'];
    }else {
        $route = ['url' => route('projects.store'), 'method' => 'POST'];
    }
?>

{{ Form::model($project, $route) }}
@csrf
    <div class="py-3">
        {{ Form::text('name', null, ['class' => 'bg-form', 'placeholder' => 'Nom du projet...']) }}
        
        {!! $errors->first('name', '<p class="text-red-700 text-lg font-bold">:message</p>') !!}
    </div>

    <div class="py-3">
            {{ Form::textarea('description', null, ['class' => 'bg-form', 'rows' => '3', 'placeholder' => 'description du projet...']) }}

            {!! $errors->first('description', '<p class="text-red-700 text-lg font-bold">:message</p>') !!}
    </div>
    <div class="py-3">
            {{ Form::dateTimeLocal('published_at', $project->published_at, ['class' => 'bg-form', 'rows' => '3', 'placeholder' => 'description du projet...']) }}

            {!! $errors->first('published_at', '<p class="text-red-700 text-lg font-bold">:message</p>') !!}
    </div>

    <div>
        <button class="bg-green-700 py-3 px-6 text-white">
            Enregistrer
        </button>
    </div>

{{ Form::close() }}

