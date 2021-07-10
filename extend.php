<?php

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__ . '/resources/less/forum.less'),
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {

            $config->BBCodes->addCustom(
                '[bcustom]link={link} size={size} name={name}[/bcustom]',
                '<a href="{link}"><div class="ButtonGroup dadadownload"><div class="Button hasIcon Button--icon Button--primary dadadownload"><i class="fas fa-download"></i></div><div class="Button Button--primary">{name}</div><div class="Button">{size}</div></div></a>'
            );

        })
];
