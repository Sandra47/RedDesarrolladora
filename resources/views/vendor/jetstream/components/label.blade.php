@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-l text-white']) }}>
    {{ $value ?? $slot }}
</label>
