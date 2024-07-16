<h1
  {{
    $attributes
      ->merge(['class' => 'text-3xl font-bold tracking-tight text-gray-900'])
      ->merge(['data-component' => $componentName])
  }}
>
  {{ $slot }}
</h1>
