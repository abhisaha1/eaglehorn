<?php
/**
 * Session related configurations
 * Only if you are using dbsession worker
 */

$config['session']['table_name'] = 'sessions';
$config['session']['security_code'] = 'S3cut!ty_C0d3';
$config['session']['session_lifetime'] = '';
$config['session']['lock_to_user_agent'] = true;
$config['session']['lock_to_ip'] = false;
$config['session']['gc_probability'] = '';
$config['session']['gc_divisor'] = '';
$config['session']['lock_timeout'] = 60;