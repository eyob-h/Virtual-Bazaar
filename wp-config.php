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
define( 'AUTH_KEY',         'Z[z3Z96zi&7z?nwvp}I(Wen#=G5ayGgup^xO;>_gM)z^XTN_Sa]bqD=+TTp=_S-g' );
define( 'SECURE_AUTH_KEY',  'au{:4vg%q7p&V{Qsat 4VPo-s(k=Mw*Yok$*=o/Ch{rm3Hq:%76E$9 _N&1G.3Et' );
define( 'LOGGED_IN_KEY',    '.m~0LIllmaPEG}Xx`G]HdPiq.,)9fL D%KL>22JhU=!NH-,~v[{4:gg:y^j<B2vP' );
define( 'NONCE_KEY',        '^@gswc}P+fEav_y;(B:u,ywTg8AsDZV(+Y&-z.?fnD#tnYZ;-1JC@{+C-qy=p ::' );
define( 'AUTH_SALT',        'b@MYRqH>7a/Vtv1pA<LZCbr=fr_F/DM?z;%b<ny^H%huD+t48!/7NSaf8]~~90kb' );
define( 'SECURE_AUTH_SALT', 'q9#Zyf~{VAc~^=V3I98qM5D/0q&^Nkt`scd`:}|.!cnG1}vu>*Dr!VhRL@{$kGmA' );
define( 'LOGGED_IN_SALT',   ')wL&sH}8@3?3JLi<l3IJN8w8hb=IY{U?X%.}exgUF{m3Aq(5zU[ iveWa_4&V{AY' );
define( 'NONCE_SALT',       'YkE[j&OrUt&:pV21YU~_2SwV,9R}ZnmljS$!-nw(~H5]XGYcd2W+]CZ,gIXI4FtS' );

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
