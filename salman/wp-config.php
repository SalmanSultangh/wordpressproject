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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'salmanapp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3306' );

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
define( 'AUTH_KEY',         'th!Yr8_uth0|GwnoI5hHX=%M]C8I7HYX=5EG}Ua{~t@63h E1O}2f{/}B9v|GI5]' );
define( 'SECURE_AUTH_KEY',  '<CDmC;_v$)Lz#6 *Y9xLCx+DHD/24lg-3fzBu}I^*VBLWJ9+Sy&u0;%33&$508PX' );
define( 'LOGGED_IN_KEY',    '+^.W+*a&FIAi:6^Za~DctEo2Kwn2)lbxhU}e)6@N<!28e^]IL1b>GLxS$d #6K?F' );
define( 'NONCE_KEY',        'n=F+7OoBo{GEv/)2vSvRmYCJ2dzy[:YbcY3A9N#.edb]L&r.PQL-@-:vPy==lk~=' );
define( 'AUTH_SALT',        '`+-I-g7VomJ/Wo0G2@Wl[o`q`qEmo] f%%JgYIiX9 .{i{hm}+ZvA~]C3<osT*e3' );
define( 'SECURE_AUTH_SALT', 'tYQPE/[aJpX|]QKK:Yyh1inKD!`7A`!MDbQ:Pko85|0G[vkW{wfohkp};|k!;J](' );
define( 'LOGGED_IN_SALT',   '~}S$h9g 2iZ~&PAM35gxB1^gNsHit*fG[h&NgK^o CF.]9HChk#So&LHcyfF2s`V' );
define( 'NONCE_SALT',       'z+Up$[gy#)Ua&4^MJq]:vcTi_9zfY&bdqPL!&1AKn@| oUII--!{9;h[7^?+@$#t' );

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
