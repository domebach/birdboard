@extends('layouts.app')

@section('content')
    <div class="w-3/5 mx-auto">
        <div class="card py-10">
            <h1 class="text-center text-2xl font-normal mb-6">Edit Your Project</h1>
            <form method="POST" action="{{ $project->path() }}"
                  class="p-6 md:px-16">

                @method('PATCH')

                @include('projects._partial.form', ['buttonText' => 'Update Project'])
            </form>
        </div>
    </div>

@endsection
