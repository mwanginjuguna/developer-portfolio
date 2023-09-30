@php(
    $classes = "py-12"
)

<p {{ $attributes->merge(["class" => $classes]) }}>
    {{ $slot }}
</p>
