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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',         'Py%pO6iloV&UA7[>5VZ<RHZ7B&AtE|c~VW=Y{BPe$mdOEt3!B6j,Xl:knRUJpQMi' );
define( 'SECURE_AUTH_KEY',  'LQYTHiWO4Qc)NC}>>pXpY2q4@5eKhXMX+q{:p7?jdW1;PiKW^ed]>wBz-WKN?)@U' );
define( 'LOGGED_IN_KEY',    '^{>.@NIG$n(ytqvP~*T{Ogr<jRgIO4gCu}i$:/a0G:4Rc^ JY62ZJ>wtq6s,]F*4' );
define( 'NONCE_KEY',        '6Z+~DstF6,?8_{l3PbFfSgA:~t6KMdRRixT!P]{KR Uj>%F4l>oJH|s^Za}S#WM+' );
define( 'AUTH_SALT',        'PqFH`JLqQDe/Dbi2l>OPGbn;d>(QJ/Fo=_LAh6%Ze*GI|1^.>|s<Cg7o~jKux!}<' );
define( 'SECURE_AUTH_SALT', 'pH&.,LL@77]VjKw!O&qb8mmkn95RZi7]fIyvkAThP[5]}3Q7f]=NQ<;ceO4( mnH' );
define( 'LOGGED_IN_SALT',   'UNmUDwoGIQ=2j7CBq]ZS.wQrqVA--c)Cd6kQnN1JT]_vT_iRy,`2ibmp4mZ?3XBc' );
define( 'NONCE_SALT',       'eQbS9r{IkrXxg{md9eGs1HlzFQH*YNnpv)#2`}6K&%Yyv,~TD>rY@G1j@kQ<%j!h' );

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
define( 'FS_METHOD', 'direct' );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
