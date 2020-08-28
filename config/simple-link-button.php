<?php 

return [
    /*
    |--------------------------------------------------------------------------
    | Buttons Classes
    |--------------------------------------------------------------------------
    |
    | This key value pair allows you to override the default nova button styles
    | and add entirely new style key value pairs altogether that you need.
    | The css classes below are Tailwind-CSS that are come with Nova.
    |
    */

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

        'myown' => [
            'neutral' => 'dim btn btn-default bg-30 text-70',
        ]
    ],
];