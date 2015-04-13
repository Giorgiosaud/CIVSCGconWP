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
define('DB_NAME', 'civscg');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         'B=g_.&0VVF=#D*(u==#D~s|>WsS%q(39X3OI3PCu*6- #@C|.Fg}EwVIy%3sh%h7');
define('SECURE_AUTH_KEY',  'shq$0#M ,a(X7A9wmNg](Qvw5}9Rco!;n!7Vf*CoXq_;H*_|R(8p@yK(,%iOWDl!');
define('LOGGED_IN_KEY',    'O<s?rNMMx}!R1G/oTbfYO8/;eI8w3m&0okfS>6Vq@%xB(f]LM^daIWt/P891k,6x');
define('NONCE_KEY',        'Oqkq=n*3<-A^)/!/6tlrGb5l/<Aash<%Dx2:lravjM6ZHx/]N#Msew-A)&7QlI1&');
define('AUTH_SALT',        '@bP}bb(q$wFVAc=aH;4}`FVE<{^ i.Vy3t:jf!&.<R%+v|jDTzqE#bdPaw!M9A0v');
define('SECURE_AUTH_SALT', 'hI`|@(I=I^#[z*uHa0t,N5-=xYfz!I]WYoqxh&yI`n[!m0G|y%S~gD{i0uKLT:LV');
define('LOGGED_IN_SALT',   '(:;B6p39lTOk<yy<sCPAhAXs3?2)0W+iIG5%,7hj~;MNkL<%fy~cwPnHx)z-#}CZ');
define('NONCE_SALT',       ')?qS-;TZ:.V7-*dAiQY*7~N0(>O> }(NyvW_kXfUGZ?N*sr1MoI|Y|1ZPNt:g74l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'civscg_';

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
