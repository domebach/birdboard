@csrf

<div class="pb-8">
    <label class="label" for="title">Title</label>

    <div class="">
        <input type="text" class="mt-2 p-2 w-full border-2 border-grey-lightest
            rounded" id="title" name="title" placeholder="Type in your project name"
            value="{{ $project->title }}" required>
    </div>
</div>

<div class="pb-8">
    <label class="label" for="description">Description</label>

    <div class="">
         <textarea class="mt-2 p-2 w-full border-2 border-grey-lightest rounded" id="description"
            name="description" style="height: 200px;>" placeholder="Type in your project description" required
            >{{ $project->description }}

         </textarea>
    </div>
</div>

<div class="field">
    <div class="control">
        <button type="submit" class="button mr-3">{{ $buttonText }}</button>
        <a class="text-grey" href="{{ $project->path() }}">Cancel</a>
    </div>
</div>

@if($errors->any())
    <div class="field mt-8">

            @foreach($errors->all() as $error)
                <li class="text-sm text-red">{{ $error }}</li>
            @endforeach
    </div>
@endif


{{--<form method="POST" action="{{ $project->path() }}" class="mt-10 w-5/6 mx-auto">--}}
