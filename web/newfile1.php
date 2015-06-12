<?php

$website_settings = [
    'title' => 'Dante and Tabata',
    'hone' => 'A Pitbulls Life',
    'page_title' => 'My Portfolio',
    'subheading' => 'Pitbulls',
    'copyright' => 'Copyright &copy; Dante and Tabata 2015',

];

$portfolio_collection = [
    [
        'container_class' => 'col-md-3 img-portfolio',
        'img_class' => 'img-responsive img-hover',
        'portfolio_link' => 'portfolio-item.php',
        'img_link' => 'http://lorempixel.com/g/750/450',
    ],
    [
        'container_class' => 'col-md-3 img-portfolio',
        'img_class' => 'img-responsive img-hover',
        'portfolio_link' => 'portfolio-item.php',
        'img_link' => 'http://lorempixel.com/g/750/450',
    ],
    [
        'container_class' => 'col-md-3 img-portfolio',
        'img_class' => 'img-responsive img-hover',
        'portfolio_link' => 'portfolio-item.php',
        'img_link' => 'http://lorempixel.com/g/750/450',
    ],
    [
        'container_class' => 'col-md-3 img-portfolio',
        'img_class' => 'img-responsive img-hover',
        'portfolio_link' => 'portfolio-item.php',
        'img_link' => 'http://lorempixel.com/g/750/450',
    ],
];

$portfolio_collection =array_merge(
    $portfolio_collection,
    $portfolio_collection,
    $portfolio_collection
);

$home_carousel = [];

$about_carousel = [
    [
        'img_url' => 'http://placehold.it/1900x1080&text=Slide One',
        'caption' => 'caption 1',
            ],
            [
                'img_url' => 'http://placehold.it/1900x1080&text=Slide One',
                'caption' => 'caption 2',
            ],
            [
                'img_url' => 'http://placehold.it/1900x1080&text=Slide One',
                'caption' => 'caption 3',
            ],
         ];

  ?>