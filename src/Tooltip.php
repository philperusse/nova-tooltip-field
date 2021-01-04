<?php

namespace philperusse\NovaTooltipField;

use Laravel\Nova\Fields\Field;

class Tooltip extends Field
{
    public $showOnIndex = true;
    public $showOnDetail = false;
    public $showOnCreation = false;
    public $showOnUpdate = false;

    public $component = 'nova-tooltip-field';

    /**
     * Allows the tootip to be added on a text.
     *
     * @param string  $text
     * @return $this
     */
    public function text($text)
    {
        return $this->withMeta(['text' => $text]);
    }

}
