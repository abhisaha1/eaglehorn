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
        'method'        => '',
        'active'        => 0
    ),

    'post_controller' => array(
        'class'         => 'Hooks',
        'namespace'     => 'hooks',
        'method'        => '',
        'active'        => 0
    ),

    'pre_model' => array(
        'class'         => 'Hooks',
        'namespace'     => 'hooks',
        'method'        => '',
        'active'        => 0
    ),

    'post_model' => array(
        'class'         => 'Hooks',
        'namespace'     => 'hooks',
        'method'        => '',
        'active'        => 0
    ),

    'pre_worker' => array(
        'class'         => 'Hooks',
        'namespace'     => 'hooks',
        'method'        => '',
        'active'        => 0
    ),

    'post_worker' => array(
        'class'         => 'Hooks',
        'namespace'     => 'hooks',
        'method'        => '',
        'active'        => 0
    ),

    'pre_template'  => array(
        'class'         => 'Hooks',
        'namespace'     => 'hooks',
        'method'        => '',
        'active'        => 0
    ),

    'pre_view'          => array(
        'class'         => 'Hooks',
        'namespace'     => 'hooks',
        'method'        => '',
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
