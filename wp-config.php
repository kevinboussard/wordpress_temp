<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('FS_METHOD','direct');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Wn.fGf}e#QW0bR-B$`>tj:3oJ9+}<O^;}V:|WA(wS&!{/tV!~-}M;nMS297S?U@l');
define('SECURE_AUTH_KEY',  '3;>5p|HLu>,mfn0=be5g5>wx/94S;ux3#KKFVC5!wR{Zz^h@w9zX2{)cqo]c#uZB');
define('LOGGED_IN_KEY',    'tXLSsnYqzg2OQrP)#{/ay+lmcCPyX|V:(:MFbs$;j}(Q{Sq/Bn=x;H46~Es;XsAu');
define('NONCE_KEY',        ':.<3h~3<Y1-87w*v@|@C&hwzf_Hh;D6wAYb#g[eQ31/[_4K r&c#Qs*5V.6!#LI]');
define('AUTH_SALT',        '+(]tFL@+Gk^Y/64NeD2@Rkz{v4p=le09.h9]p`+CmwC7J!IFp2366d9RR#|LSt3,');
define('SECURE_AUTH_SALT', 'gkLoOx5g.XOT7bxxiP<}Lu4C<5*yr,P,=o_ql$nKmoAkt{`C&H,}W@+=*cOm?t{+');
define('LOGGED_IN_SALT',   'g< ts&BI]lV8CMvFnNbo]:^{s7pcYSht@X=P)WpiL$dUv*25(3aXKPcqf+s?2@<H');
define('NONCE_SALT',       '~.-T=T2$uGPFRs}`??I=mEn9]0mf46U@z^*ueBL b6gV?[^/S4G|1_1(0:l0M$q^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
