<?php

namespace Monaye\SimpleLinkButton;

use Illuminate\Support\Arr;
use Laravel\Nova\Fields\Field;

class SimpleLinkButton extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    const BUTTON_PRIMARY = 'primary';
    const BUTTON_SUCCESS = 'danger';
    const BUTTON_WARNING = 'warning';
    const BUTTON_INFO = 'info';
    const BUTTON_GREY = 'grey';

    const BUTTON_TYPE_FILL = 'fill';
    const BUTTON_TYPE_OUTLINE = 'outline';
    const BUTTON_TYPE_LINK = 'link';

    public $component = 'simple-link-button';
    public $linkText;
    public $url;
    public $attributes;
    public $style = self::BUTTON_PRIMARY;
    public $type = self::BUTTON_TYPE_FILL;
    public $visible = true;
    public $classes = null;

    public function __construct($linkText, $url = null)
    {
        $this->linkText = $linkText;
        $this->url = $url;
    }

    public function resolve($resource, $attribute = null)
    {
        parent::resolve($resource, $attribute);

        $classes = $this->classes;

        if ($classes === null) {
            $classes = Arr::get(config($this->component), "buttons.{$this->type}.{$this->style}");
        }

        $url = is_callable($this->url) ? call_user_func($this->url) : $this->url;

        $visible = is_callable($this->visible) ? call_user_func($this->visible) : $this->visible;

        $this->withMeta([
            'linkText' => $this->linkText,
            'url' => $url,
            'attributes' => $this->attributes,
            'classes' => $classes,
            'visible' => $visible,
        ]);
    }

    /**
     * Set the attributes to link tag
     *
     * @param  array  $attributes
     * @return $this
     */
    public function attributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    public function classes($classes)
    {
        $this->classes = $classes;

        return $this;
    }

    public function style($style)
    {
        $this->style = $style;

        return $this;
    }

    public function type($type)
    {
        $this->type = $type;

        return $this;
    }

    public function visible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    public function url($url)
    {
        $this->url = $url;

        return $this;
    }
}
