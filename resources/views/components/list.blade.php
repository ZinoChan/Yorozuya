@props(['listItems'])

@php
    $list = explode(',', $listItems);
@endphp


<ul>
    @foreach ($list as $l)
        <li class="text-gray-500 dark:text-gray-300 list-inside mb-2 list-disc">
            {{ $l }}
        </li>
    @endforeach
</ul>
