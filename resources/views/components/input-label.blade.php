@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm text-gray-700 font-bold uppercase mb-3']) }}>
    {{ $value ?? $slot }}
</label>
