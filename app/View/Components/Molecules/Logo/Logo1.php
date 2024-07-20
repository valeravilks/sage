<?php

namespace App\View\Components\Molecules\Logo;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Logo1 extends Component
{
    public string $siteName;
    public string $siteUrl;
    public string $siteIcon;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->siteName = get_bloginfo('name');
        $this->siteUrl = get_bloginfo('url');
        $this->siteIcon = get_site_icon_url();
    }

    public function isSiteIcon(): bool
    {
        return $this->siteIcon !== '';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.molecules.logo.logo1');
    }
}
