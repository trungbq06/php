<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache



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
define('DB_NAME', 'dothidmc_dt');

/** MySQL database username */
define('DB_USER', 'dothidmc_dt');

/** MySQL database password */
define('DB_PASSWORD', 'M9sqOTOl');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'uMnrzz$n}5L/~^/`4)*x}mN;0atga2hrTrgw<Wh>1-cF|=qFby<ktYp5rTQuJJD(');
define('SECURE_AUTH_KEY',  'Vy]gVeV09zT.`QG;CT&8b:7|xw=Q,=EjPPA[U~~v=G]N}o_>:4#9yNB/sv@aZdZ`');
define('LOGGED_IN_KEY',    'R#^3XPdsFlH|?X8E0UKyJSo70I~0oBv#uiUSX2Mq-ySS$7Dfe@^.dn^t?u0aU_h^');
define('NONCE_KEY',        '%d psc_gLasC(lP{-8#Q4hJEU=s>X+UjpqUJYK,jFB+o^d(vUKQf/d?D*QL v[we');
define('AUTH_SALT',        'V<Q`#:?Ce~!}HZbaf$02pP5RZWnyt:NS@{v922D{0=/HuARZF((nvhV2+Dd+p)8$');
define('SECURE_AUTH_SALT', '!;8c ojMdWGHk@/~J/yYWuS4G&6tQ5~a`fP>LJ:/I0{^:|.z=Agjl[_&Iv_J7f;M');
define('LOGGED_IN_SALT',   'a(qH?pb:DBnG-;P2I:?IGnna{+di(aXslt#Z+}FM k^:SNT<|@HidS(X+y,(MAS)');
define('NONCE_SALT',       'J=[Qa6dc5 [R&%IU5QRv<xnM5=dWJ*d};9N<C}Q_V(=xr`nJ^+[67^bR?hNku*e`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vin_';

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
