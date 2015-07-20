<?php
/**
 * The Site URL will automatically be changed to the appropriate url
 * depending on the environment it is working on.
 *
 * You can add a new environment (key/value) pair.
 * Optionally, you can create different configurations. To create a new mail configuration for, say test environment,
 * you can add,
 *
 * 'test' => 'http://test-url'
 *
 * And then inside the config folder, create a folder by the name test.
 * And copy the mysql.config.php file from default folder inside the test folder
 * and configure accordingly.
 */
$config['environment'] = array(

        'default' => 'http://dev.eaglehorn/'

);

return $config;
