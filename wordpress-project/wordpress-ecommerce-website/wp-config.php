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
define( 'DB_NAME', 'wordpress-ecommerce-website' );

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
define( 'AUTH_KEY',         '~.CVI56g$qeGi`-6{ovzmzVre>i8vx~$(6.{_K^`<pE;f&,z(IuH+E ELQVuqaDY' );
define( 'SECURE_AUTH_KEY',  'P(o|VhC;QSD*_<-9Vk!718:yw:-u-X_(!+TGz2~+MJ=LL#ay~TQA{j(k;2bJYvz#' );
define( 'LOGGED_IN_KEY',    'IfOv1`#oV|1hszd8.&f^PcVko*{erg6-8vb+E||[Ks$n{lcl)+2@N=~$D?+A.N_[' );
define( 'NONCE_KEY',        '|EE<52xK:Q(*NmeB|jxx]Fh*w:LtM*iC{zV%qx9sAsXonVMAdVjg=p>@l;)O.o,s' );
define( 'AUTH_SALT',        'OEda0=F/q5LLmiVJ.s.3cYPa}I@9(r@tAZ>f<Ko$|N7%jQ:Jcd^,svSvpdX!51N}' );
define( 'SECURE_AUTH_SALT', ']mcE~jZ!N&-%8?],z>={6D_ytK{JZnJ6JYLv{D%ZZw(7AKQ_PTJw0=v#uqSdZC/q' );
define( 'LOGGED_IN_SALT',   'qvM9cP9~hTTQ9:hM$0k/}p|c9l 5[vKv:ca%Gs+ape!-){$Ya`<zX^}aZT,--g%a' );
define( 'NONCE_SALT',       '> 2kw&nR4e a/w|UkwrogiQ:o4UnKlar?h){>tcoFB)Tk#;5K>wEL }@kpsvZ(od' );

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
