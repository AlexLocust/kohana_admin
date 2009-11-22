<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * @package Admin
 * 
 * Administration interface modelu configuration
 * 
 * @author Arthur Chafonov
 */


/*
 * Navigation panel filled by this models, so models need to exist.
 * Order is important for rendering.
 * First child of array is group delimiter.
*/
$config['navigation'] = array(
	'Access' => array( // Group delimiter
		'user', // Model name
		'role',
	),
);

/*
 * Allows load unexisted administrators from ldap catalogue.
 */
$config['ldap'] = array(
	'enabled' => TRUE,
	'ldap_host' => 'ldap://ferrum.at.webstein.ru/',
	'ldap_rdn' => 'webstein_admin@at.webstein.ru',
	'ldap_pass' => 'websteinpass',
);
	

/*
 * Dependent modules
*/
$config['modules'] = array(
	'auth'
);

?>