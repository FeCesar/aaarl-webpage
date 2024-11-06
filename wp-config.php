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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aaral' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'A1PHU`@O+^LYIEk2Yv8u7bV#dTXlUe^Y30nAa08Xi=RU5RrvgTI2+NxNKZlk}oqQ' );
define( 'SECURE_AUTH_KEY',  '>F: ;q[9cGJ5eOFci1DBqDrx*|R9!D0+,NL/M;yau,nmn!mM1BVvs0f~[;d/M3.:' );
define( 'LOGGED_IN_KEY',    ',|<bXqOHf4G_Ixiqn&A?$-gdo45V8l},zSxu9|L@1(/~|,gG6@Ej9@#(Bpk3nGMr' );
define( 'NONCE_KEY',        '~sahf=57,80e.N>K?+=6u<m%DC+81V?kBJMjXP6a-S%o(Kum%yMq(!aotiga$ol,' );
define( 'AUTH_SALT',        'idIA}Y(,A2,Q9:,z1e_R>hMD=nXVh9RH>>J6l|1EGnB`{ v51TNy~= }(s*y-7?>' );
define( 'SECURE_AUTH_SALT', '&Xp.ghV&W`;:RT>x6V3@G%nU.`NV`$oZ|0S2L/=t/f_[vPcP9T.O70H3+.%x9uP6' );
define( 'LOGGED_IN_SALT',   '0I.NowzxWlx2)[>P<sxC{oETbK<6e/-G#T=$_<a,:oCmRf_Db&KG^~mC0&;j1q91' );
define( 'NONCE_SALT',       'Wb,*%Tgso<PH|EK#yh7+Dwp(!dbiAlMdI6~c%<<r|J_>KZa=Y;`Jq8/AGC-XY`Dt' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
