<?php

$config['hooks'] = array(

        'logger' => array(
            'class'         => 'logger',
            'namespace'     => 'hooks\logger',
            'active'        => 1
        ),

        'pre_controller' => array(
            'class'         => 'PreController',
            'namespace'     => 'hooks',
            'method'        => 'preload',
            'active'        => 1
        ),

        'post_controller' => array(
            'class'         => 'PreController',
            'namespace'     => 'hooks',
            'method'        => 'postload',
            'active'        => 1
        ),




);
