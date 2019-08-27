<div class="card" style="height: 200px;">
    <h3 class="font-normal text-xl py-4 pl-4 -ml-5 mb-3 border-l-4 border-blue-light">
        <a href="{{ $project->path() }}" class="no-underline text-black">{{ $project->title }}</a>
    </h3>

    <div class="text-grey">{{ Str::limit($project->description, 100) }}</div>
</div>

