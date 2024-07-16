<button
  {{
    $attributes
      ->merge(['class' => 'px-2 py-1 bg-primary text-white hover:opacity-75'])
      ->merge(['data-component' => $componentName])
  }}
>
    {{ $slot }}
</button>
