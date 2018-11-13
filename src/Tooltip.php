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

}
