<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u911921446_0ztDR' );

/** MySQL database username */
define( 'DB_USER', 'u911921446_cziLy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Fggq1DxaFD' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'vIiMVZs?D:Q){2c<jO_=W)7(5FyXls`|2G@S+wRP8Iu`w>wNv5a6@FsykuMcf/ob' );
define( 'SECURE_AUTH_KEY',   's=apqGqk_?bE0!hO6`]lqL<=_yT4g|8W,.q<&xABc_4C3r}M,BIWFwuh:.C#SLxF' );
define( 'LOGGED_IN_KEY',     'iu5zp4J4VFfJ+=6)HXG9EbZJH503vYJI1K}?[+[vJ Dv/2Zu{WwyTOlk9u4@fDuN' );
define( 'NONCE_KEY',         'CW$k,FY9GZsK`8$j2fY~/zp51RQF^$1yNdS$s,Jsn+fQ;(df3nt~c?O%0>r2-*DN' );
define( 'AUTH_SALT',         '25AOTUfsgeVAYPtXr=O0uD_k9klG)bl/e=j.T6-OCPjL8fw;]4?F)E-Ah[dd@bT4' );
define( 'SECURE_AUTH_SALT',  '0D#@2.CegN&PjQ=]VKEd?<ee {7S#J;8YROj+/{1ugW~[+l>1[!$)1#q:DWea5vq' );
define( 'LOGGED_IN_SALT',    'k|x3;tLB<+J5/5L~qfIXmzQHCk4b-+XTT,~u/MTvj%C5ezfZ6[D%rSzqF@!Mk!pZ' );
define( 'NONCE_SALT',        '.1{kH6>V*Gv.Mvc7HB%*)8o:JTd7GNbt+[{G>i+q/j%DuEs.;g.WS9U<_8|}Fgfv' );
define( 'WP_CACHE_KEY_SALT', '.W?Y[B!2t[nCEQWx9f#~?ZL+t?/iM3x{ _v0[UR,L!XuN^]=kmk5vvT/G7L%R^x?' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
