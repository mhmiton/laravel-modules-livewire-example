@props([
    'label' => null,
    'type' => 'text',
    'name' => null,
    'required' => false,
])

@php
    $name = $name ?? $attributes->get('wire:model');
@endphp

<div>
    @if ($label)
        <label for="{{ $name }}" class="form-label">
            {{ $label }}

            @if ($required) <i class="text-danger">*</i>@endif
        </label>
    @endif

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'form-control '.($errors->has($name) ? 'is-invalid' : '')]) }}
    />

    @error($name)
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
