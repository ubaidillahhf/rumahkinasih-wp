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
define( 'DB_NAME', 'rumahkinasih_new' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0W1bP^c5[vJN85}=1I%NLTj.Xi]]3S}-wE6Ot|jfytf,ZC|lfhI4Po,&K<g`DIap' );
define( 'SECURE_AUTH_KEY',  'Kmsr?*8CI(4RiKI4JJAc/QYYc6ibY$ajS}J`&`|(Xedj!]80?:KXHxc{7:V8sRZ3' );
define( 'LOGGED_IN_KEY',    'Mf!%bb2JNT]K~KkHZfWK!(hkIfOb8H@>|>C,-U MNs<jtHyjLDyjW32X{Dr]?fza' );
define( 'NONCE_KEY',        'NT/k/i|H/My#-}H+{:psHK`<ed)HvwA.9pzL.LY&-fGRpa;84Y+:B=3,vv<c&=^?' );
define( 'AUTH_SALT',        '8YA:,DJBX10={ip<D^Mfg1zS<;kRP+;=I%WI`*@.DA:zsAa&Y6FW,J.X]FZrx~Y;' );
define( 'SECURE_AUTH_SALT', 's;AVBcUZB/sse&[o)?zASkyqsI^.v=<sErAFxrGcvu^d$t ,OKx:We2zWwIVe%qv' );
define( 'LOGGED_IN_SALT',   'w;-t,Kp0&7d}0?L:Oxi##1BZsDYq D`)HGGMem_*jIXoe(Tw.saknUW59nM0?`dC' );
define( 'NONCE_SALT',       'Eor6?02fxAU|2R:cxDQ&+1;@W|UZ0Gw1-L;%Xhzo}0rz#m@ox-T^%(9uX3UX_f/g' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
