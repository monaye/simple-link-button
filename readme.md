## Nova Simple Link Button

Inspired by Nova Button (https://github.com/dillingham/nova-button) but only focus on displaying HTML Links and allowing all attributes to be passed.

![screenshot of nova simple link button](https://user-images.githubusercontent.com/1147313/91624658-53c37880-e956-11ea-9e34-c9f31c480c3e.png)

### Installation

```bash
composer require monaye/simple-link-button
```

### Usage

```php
use Monaye\SimpleLinkButton\SimpleLinkButton;
```

```php
public function fields(Request $request)
{
    return [
        SimpleLinkButton::make('Google', 'https://google.com'),
    ];
}
```

---

### Type & Style

Default type of the button is `fill` &  default style is `primary`.
type and style can be mismatch.

```php
SimpleLinkButton::make('Google', 'https://google.com')->type('fill'),
SimpleLinkButton::make('Google', 'https://google.com')->type('outline'),
SimpleLinkButton::make('Google', 'https://google.com')->type('link'),
```

```php
SimpleLinkButton::make('Google', 'https://google.com')->style('primary'),
SimpleLinkButton::make('Google', 'https://google.com')->style('success'),
SimpleLinkButton::make('Google', 'https://google.com')->style('warning'),
SimpleLinkButton::make('Google', 'https://google.com')->style('danger'),
SimpleLinkButton::make('Google', 'https://google.com')->style('info'),
SimpleLinkButton::make('Google', 'https://google.com')->style('grey'),
```

Mismatch type and style.

```php
SimpleLinkButton::make('Google', 'https://google.com')
  ->type('outline')  // fill, outline, link
  ->style('danger'),  // primary, success, warning, danger, info, grey
```

### Custom Type & Style

All the style class is defined in the configuration file.

```php
php artisan vendor:publish --tag=simple-link-button
```

```php
// config/simple-link-button.php
'buttons' => [

    'fill' => [
        // Fill
        'primary' => 'dim btn btn-default btn-primary',
        'success' => 'dim btn btn-default bg-success text-white',
        'warning' => 'dim btn btn-default bg-warning text-white',
        'danger'  => 'dim btn btn-default bg-danger text-white',
        'info'    => 'dim btn btn-default bg-info text-white',
        'grey'    => 'dim btn btn-default bg-60 text-white',
    ],

    'outline' => [
        // Outline
        'primary' => 'dim btn btn-default border border-primary text-primary',
        'success' => 'dim btn btn-default border border-success text-success',
        'warning' => 'dim btn btn-default border border-warning text-warning ',
        'danger'  => 'dim btn btn-default border border-danger text-danger ',
        'info'    => 'dim btn btn-default border border-info text-info ',
        'grey'    => 'dim btn btn-default border border-60 text-80 ',
    ],

    'link' => [
        // Link
        'primary' => 'dim btn btn-link text-primary',
        'success' => 'dim btn btn-link text-success',
        'warning' => 'dim btn btn-link text-warning',
        'danger'  => 'dim btn btn-link text-danger',
        'info'    => 'dim btn btn-link text-info',
        'grey'    => 'dim btn btn-link text-80',
    ],
]
```

**Just add additional config to define your own `type` and `style`**

```php
// config/simple-link-button.php
'buttons' => [

  ...

  'myown' => [
      'primary' => 'dim btn btn-default bg-90 text-white',
      'neutral' => 'dim btn btn-default bg-30 text-70',
  ]
```

```php
  SimpleLinkButton::make('Google', 'https://google.com')
    ->type('myown'), // default to primary style

  SimpleLinkButton::make('Google', 'https://google.com')
    ->type('myown')
    ->style('neutral'),
```

### Visiblity

You can show or hide the button by passing boolean to the `visible` method.

```php
SimpleLinkButton::make('Google', 'https://google.com')->visible($this->is_active == false),
SimpleLinkButton::make('Google', 'https://google.com')->visible($this->is_active == true),
```

### Classes
If you need to dynamically pass the class, pass class name to the `classes` method. **Notes: `classes` method will overwrite the `type` and `style` classes.**

```php
SimpleLinkButton::make('Google', 'https://google.com')->classes('my-own-class second-class'),

// to add additional class you will need to combine with pre config classes
// get classes from config file out slide of
$defaultClasses = Arr::get(config('simple-link-button'), "buttons.fill.primary")

// add additional class
SimpleLinkButton::make('Google', 'https://google.com')->classes("myClass ${defaultClass}"),
```

### Attributes
You are free to pass any attributes to the HTML Link by passing `key => value` array to the `attributes` method.


```php
SimpleLinkButton::make('Google', 'https://google.com')->attributes(['target' => '_blank']),
SimpleLinkButton::make('Download Pic', '/my-image.png')->attributes(['download'=>'download-image.png', 'title' => 'Download Image']),
```


# Author

Hope you find it useful. Feel free to reach out with feedback.

Follow me on twitter: [@winmonaye](https://twitter.com/winmonaye)

# Special Thanks

This package is heavily influenced by the https://github.com/dillingham/nova-button.
If you need more robust feature please checkout the original package.
