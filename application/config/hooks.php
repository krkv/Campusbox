<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/
// Compress html
$hook['display_override'][] = array(
    'class' => '',
    'function' => 'compresshtml',
    'filename' => 'compresshtml.php',
    'filepath' => 'hooks'
);

/* End of file hooks.php */
/* Location: ./application/config/hooks.php */