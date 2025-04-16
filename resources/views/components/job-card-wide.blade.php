@props(['job'])


<x-panel class="flex gap-x-6">
<!-- Image -->
<div>
    <x-employer-logo></x-employer-logo>
</div>

<!-- Text Section -->
<div class="flex-1 flex flex-col">
    <a class="text-sm text-gray-400 self-start">{{$job->employer->name}}</a>

    <h3 class="text-xl font-bold text-white mt-3">{{$job->title}}</h3>

    <p class="text-gray-400 text-sm mt-auto">{{$job->salary}}</p>
</div>

<!-- Tags -->
<div >
    @foreach ($job->tags as $tag)
    <x-tag :tag='$tag' ></x-tag>   
    @endforeach
</div>

</x-panel>
  

