<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Partial;

class Example extends Partial
{
    /**
     * The partial field group.
     */
    public function fields(): Builder
    {
        $example = Builder::make('example');

        $example
            ->addText('Button1')
            ->addText('Button2')
            ->addText('Button3')
            ->addText('Button4');

        return $example;
    }
}
