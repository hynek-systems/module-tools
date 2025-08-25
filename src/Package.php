<?php

namespace Hynek\HynekModuleTools;

use Illuminate\Support\Str;

class Package extends \Spatie\LaravelPackageTools\Package
{
    public function shortName(): string
    {
        return Str::after($this->name, 'hynek-');
    }
}
