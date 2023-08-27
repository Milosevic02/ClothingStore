@props(['tagsCsv'])

@php
    $tags = explode(',',$tagsCsv);
@endphp

<ul class="list-inline">
    @foreach($tags as $tag)
        <li class="list-inline-item bg-dark text-white rounded-pill py-1 px-3 mr-2">
            <a href="/?tag={{$tag}}" style="color: white;">{{$tag}}</a>
        </li>
    @endforeach
</ul>