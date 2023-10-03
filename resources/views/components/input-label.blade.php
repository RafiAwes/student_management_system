@props(['value'])

<label {{ $attributes->merge(['class' => "#"]) }}>
    {{ $value ?? $slot }}
    <i class="zmdi zmdi-account material-icons-name"></i>
</label>
