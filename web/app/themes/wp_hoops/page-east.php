<?php

    
$context = Timber::context();

$query = array(
    'numberposts' => -1,
    'post_type' => 'teams',
);
$context['teams'] = new Timber\PostQuery($query);
$timber_post     = new Timber\Post();
$context['post'] = $timber_post;
Timber::render( 'pages/east.twig', $context );
