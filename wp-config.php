<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_jareed' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?_^4dJ,y`*<v:;+Tdqm.c+#VPyGNj3f=cR7HvvNPMGia%ex6Rp2;R6dDa?YE?JYe' );
define( 'SECURE_AUTH_KEY',  'EQy7e-u?Vth}:?wq1M`&+X(TSG;YuXw>==P9w=Q(^tDAT,Uksk2`2os4`6}H&!Lz' );
define( 'LOGGED_IN_KEY',    'P&T5gm-}[=Nipg=C#vO9X;_VRR%IX?Tv&c5lrB#[XJ/&Q@qehn#-zF|hABc!hS%z' );
define( 'NONCE_KEY',        ':mi*~&]njn{T@_v.>Kc4RpiAOvj(fID8S{y$5FKFSjArAct#M4w5`7MM<?*bBDs)' );
define( 'AUTH_SALT',        '*ae5)L>K>g21=GvGA@ba_UjlYLt997)H}2 @i}vG)7uk6t*iN`:_H;+_=YyB],gf' );
define( 'SECURE_AUTH_SALT', '<?B5+iaH0L!|.Zj3(l2vXwT2Rh0e;y$-?vA>(j#O)8X)!{.0F>Kfd|!@s7QlT$)-' );
define( 'LOGGED_IN_SALT',   'QR6`<u/`=i<T.$_v94LA{P%ky[BEnadi&x!&fT;!A2e]D147 ?5:e?a%BEVy2PH$' );
define( 'NONCE_SALT',       ')K4c$.g-DM9slx.[sW8mi5jm&W/Klj [6!Zu;TgKP4AH=H`c$vWQ<vEDPq[~PBED' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
