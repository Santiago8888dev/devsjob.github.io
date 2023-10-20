@php
    $clases = "text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900"
@endphp
<div>
    <a {{$attributes->merge(['class' => $clases])}} >
        {{$slot }}
    </a>
</div>
