@extends('layouts.app')

@section('content')
{{--    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">--}}

    <form method="POST" action="/projects">
        @csrf

        <h1 class="heading is-1">Create a Project</h1>

        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" id="title" name="title" placeholder="Type in your title ..">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea class="textarea" id="description" name="description" placeholder="Type in your description .."></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
                <a href="/projects">Cancel</a>
          </div>
        </div>

    </form>
@endsection
