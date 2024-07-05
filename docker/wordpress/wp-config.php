<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '6P,1vsepL9zM;L t*s_PtcdY~<GxL.zOIYls*t^<NvpnypvF<zc$+7z<Ld6TgT]m' );
define( 'SECURE_AUTH_KEY',  'N^3oN/zD6JZ,jw43.=S=P`HhA}@e:5*b+kQ~6NJ|qh8JOD(`(Lql?p60OK*@f}O^' );
define( 'LOGGED_IN_KEY',    ':N8thWZfb-k[hFRDS`so$APVok)U@O[OXp1t/K^wUF9?0iGI-2DbIi{}fw-*=JX0' );
define( 'NONCE_KEY',        'Tunwzfp+,xD{8wiXy#[&1|N}l^Pr0VM}rgun}ZH>!{ff:D<BX0gJvv6YgBda,Mx|' );
define( 'AUTH_SALT',        ')4ZsI(~<=$|SbPcI27P5!B-~&WJh>9T@~P ]jDAK k6a>oy0I:<({xVf$?y=K~gh' );
define( 'SECURE_AUTH_SALT', 'qkY>G50l3CQ9;iu0Dwjn36NG?/Zm$6VIC?]F7vtj-Ds:u|wc/`BrIlf#Md?;#0O-' );
define( 'LOGGED_IN_SALT',   '5DO}O)&BT$hef:X!uPwsjB^w#p_zFd.?g]7)Kso?PSX?:{cH%tP^Bp@>A[4M)(Q5' );
define( 'NONCE_SALT',       'x/CfFU{eX%KNBF({J303e0iu*WOJB<fBd/qaOt)DK9Rb`f`}Wu9o:T:$?re8JAhx' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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