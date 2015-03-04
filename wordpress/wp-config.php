<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tropara');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SP>2N-%=UxKk$]mldBPlV:+U+=52,nec];x|mmbrdyS80:K:@P5iSpM%~wI.`)J.');
define('SECURE_AUTH_KEY',  'bzitvmRL`Y6-630dnh-d_sn3ML,}EAPk=T(EGP3nx|^:==Fb +!ot=Eqr#{rOyGQ');
define('LOGGED_IN_KEY',    'NVP+3Y!xpsn4g%sOa#QVk4t@i9CAi.v$sL_+{/QIxi<#xPBkAa*P=b2XWz@=oVVe');
define('NONCE_KEY',        '>|q:rY,;^GyFdk}|)6C6I9/Z+-:7Y?xL}xy(`=+W%c KYV=C9fK,k72Gu7/C}(Y&');
define('AUTH_SALT',        '<9v-1[kug4| 0`ehkx`jojD%k}tesxc*}B&%!_0OUprIf+hwsqRY;cc|7%V|Y+EN');
define('SECURE_AUTH_SALT', '@V6=1H*}XNYyGEZ1$bCHM1YXteOX{4nEiPpE)H7h:+]j31+frlU8rxVt<U,VG|0Z');
define('LOGGED_IN_SALT',   's=N/YqHO-^[)#w>[6S=tVL^^t Y<tQuIu[4O-Z.)Tr8sI>oHf86uzv:jVD1`p@iG');
define('NONCE_SALT',       'FJ&J]XTJ/pC(fz=-|r|>)dX06|DJ`*g?;dtDS[!E!L|83-80i`rHFc$1}$$U%,lG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
