<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'gener');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'O5S5o1t5Ab1va');

/** MySQL hostname */
define('DB_HOST', 'gener');

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
define('AUTH_KEY',         'G~6JC7t+%7<@25Mwkk_C0t!%8+UfI{m5/vG<!_qdS*+nCwkK&K75Au;z^pofF2P0');
define('SECURE_AUTH_KEY',  '49oB;uwl04Q|r+E` })NPRQqNoMNDVc[UECka}Tj1BCFZutsCeCMa5(vQRR:0Yn~');
define('LOGGED_IN_KEY',    '+]]j2aBKT{7KK,kD5[Nb]. jOh-X>u)=q41%EnV+3x=Kv}v2bNSFoLp-Y!-]O[[/');
define('NONCE_KEY',        'ah/TtD-K5=LtL9+ly<zfUqkPh5@dq7s| }Sw5B;#N#$[/-.jr|jC79U0|25LueCC');
define('AUTH_SALT',        'J*5>d_^q[w52-Tdv_0g(IG14d;68O*V,#XH- 8i]8-,Hi8=eR]X#U+%tyc hmW:|');
define('SECURE_AUTH_SALT', 'D)s{2D2mh$2O4|V|(_.J|rarBx_GWL;+o]ZX}!KsD@TS-Kl@cQkrxAwL9?k#R9E3');
define('LOGGED_IN_SALT',   'y}Q7Jpb}tA;_oU@- pzM[jKNKC0DwL%}R2<I8v}X.spR|E7$D?vz2bE8UA,WAE>J');
define('NONCE_SALT',       '-D/(N2}H=NfABCDr1Qgw#r>I)Ek3rdqY|gL6*/c ~h]3U}G}jowRP<^3qA%Xz.>a');

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
