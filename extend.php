<?php

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__ . '/resources/less/forum.less'),
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {

            $config->BBCodes->addCustom(
                '[downl link={URL} size={TEXT1} name={TEXT2}][/downl]',
                '<a href="{URL}"><div class="ButtonGroup dadadownload"><div class="Button hasIcon Button--icon Button--primary dadadownload"><i class="fas fa-download"></i></div><div class="Button">{TEXT2}</div><div class="Button Button--primary">{TEXT1}</div></div></a>'
            );

        })
];
