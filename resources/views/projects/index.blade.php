@extends('layouts.default')
@section('css')
    
@stop

@section('content')
    <div class="max-w-3xl mx-auto">
        <div class="my-10">
        <a href="{{route('projects.create')}}" 
                class="py-3 px-4 bg-blue-700 no-underline ">
                Ajouter un projet
         </a>
            @foreach ($projects as $project)
                <div class="p-3">
                    <h3 class="text-1xl mb-1">
                    <a href="{{ route('projects.show', $project) }}" class="no-underline text-indigo-700">
                        {{$project->name}} 
                    </a>
                    </h3>
                    <p class="text-l">
                        {{$project->description}}
                    </p>
                </div>
            @endforeach
        </div>
    </div>

@stop

@section('js')
    
@stop
 