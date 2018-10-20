<?php

/**
 * Used to store website configuration information.
 *
 * @var string
 */
function config($key = '')
{
    $config = [
        'name' => 'Haaah! Finnally Crontab is not easy',
        'nav_menu' => [
            '' => 'Crontab',
            'about-us' => 'About crontab',
            'products' => 'Products crontab',
            'contact' => 'Contact Scripting',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'pretty_uri' => true,
        'version' => 'v2.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
