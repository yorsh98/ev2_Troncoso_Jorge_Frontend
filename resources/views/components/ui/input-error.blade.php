@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'mt-2 text-sm font-semibold text-red-700']) }} id="{{ $for }}-error" role="alert">
        {{ $message }}
    </p>
@enderror
