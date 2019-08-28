@extends('layouts.app')

@section('content')
    <div class="w-3/5 mx-auto">
        <div class="card py-10">
            <h1 class="text-center text-2xl font-normal">Let's start something new</h1>
            <form method="POST" action="/projects"
                  class="p-6 md:px-16">

                @include('projects._partial.form', [
                    'project' => new App\Project,
                    'buttonText' => 'Create Project'
                ])
            </form>
        </div>
    </div>
{{--    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">--}}

    {{--<div class="w-3/5 mx-auto">
        <div class="card py-10">
            <h1 class="text-center text-2xl font-normal">Let's start something new</h1>

            <form method="POST" action="/projects" class="mt-10 w-5/6 mx-auto">
                @csrf


                <div class="pb-8">
                    <label class="label" for="title">Title</label>

                    <div class="">
                        <input type="text" class="mt-2 p-2 w-full border-2 border-grey-lightest
                                    rounded" id="title" name="title" placeholder="Type in your title ..">
                    </div>
                </div>

                <div class="pb-8">
                    <label class="label" for="description">Description</label>

                    <div class="">
                        <textarea class="mt-2 p-2 w-full border-2 border-grey-lightest rounded" id="description"
                                  name="description" style="height: 200px;" placeholder="Type in your description ..">

                        </textarea>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button mr-3">Create Project</button>
                        <a class="text-grey" href="/projects">Cancel</a>
                    </div>
                </div>

            </form>
        </div>
    </div>--}}
@endsection
