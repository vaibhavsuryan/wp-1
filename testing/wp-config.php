<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gitwp');

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
define('AUTH_KEY',         'M1u1B)L7L01b!`@0kf|%,K2o9HesGpk~$cFhRb9wp;= %han&v%!,xtFhk@?2~sy');
define('SECURE_AUTH_KEY',  '-e;yzXAa_4`f~e=^V)BU2V<7;AC9>`W$-Uu[<[7bz.V?2!aJ.,*}Y+|)CFFd1f[0');
define('LOGGED_IN_KEY',    '$6rRES+WQmu{/pg>*)b^lco45.had)1;tgtE#O{)uh8K`s$8YKGX~[Lp^vZ)r9`Y');
define('NONCE_KEY',        '{`d5ip`5q3$s.1BUz>@rv& b-bMkb[2jk)uQY`.:M(;kNT0}*e@uNP+;niOup1+W');
define('AUTH_SALT',        '?L3Z*#M|Y(nT?^p?zlk?UFM35f(wY OA)o$KP$$;/nbA;W8<Sz!KWe>+4/>ikO5&');
define('SECURE_AUTH_SALT', ':yXGAi=goE:>ac!RboCA@+D;yOVB97y5+ v}gd`(sSwR5%n:[:+d`r 6OK5gHi#u');
define('LOGGED_IN_SALT',   '-Pp?E/xrKcoz&?69<4nNXGP+Km)0<d{xI]B$mf+>,.?J}2tH4F9f-1~]<:#]AeG ');
define('NONCE_SALT',       'jbX>>$t;PpBa+|~p8f!NQXG[/;3yrc>^%6nWaHg7*{?0PT(*Azj<R/g{YR7mlzuw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
