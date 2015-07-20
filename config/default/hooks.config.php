<?php
$config['hooks'] = array(

    'logger' => array(
        'class'         => 'logger',
        'namespace'     => 'hooks\logger',
        'active'        => 0
    ),

    'pre_controller' => array(
        'class'         => 'Hooks',
        'namespace'     => 'hooks',
        'method'        => 'preload',
        'active'        => 0
    ),

    'post_controller' => array(
        'class'         => 'Hooks',
        'namespace'     => 'hooks',
        'method'        => 'postload',
        'active'        => 0
    ),

    'pre_template'  => array(

        'class'         => 'Hooks',
        'namespace'     => 'hooks',
        'method'        => 'pretemplate',
        'active'        => 0

    ),

    'error' => array(
        'class'         => 'Hooks',
        'namespace'     => 'hooks',
        'method'        => 'error',
        'active'        => 0
    ),

    '404' => array(
        'class'         => 'Hooks',
        'namespace'     => 'hooks',
        'method'        => 'notFound',
        'active'        => 1
    )
);
