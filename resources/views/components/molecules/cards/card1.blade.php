<div
  {{
  $attributes
    ->merge(['class' => 'p-5 bg-green-400'])
    ->merge(['data-component' => $componentName])
  }}
>
  <x-atoms.buttons.button1>
    {{ $button }}
  </x-atoms.buttons.button1>
  <x-atoms.title.title1>
    {{ $title }}
  </x-atoms.title.title1>
</div>
