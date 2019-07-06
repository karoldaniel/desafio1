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
define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'juntospodemos' );

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
define( 'AUTH_KEY',         'Nil%S7nzOjQ{oG;<JIh!e?hn-MvPeM12^/aX*&i!G/b~zfd:>#!1?mOr-uAlg__g' );
define( 'SECURE_AUTH_KEY',  'y}%.QUrA&k4XBoe}>at!kd}?l4o-1$XJm)/zW5k]fAk0uLu5|n-.]pYXR%ZENWnU' );
define( 'LOGGED_IN_KEY',    'He|*i 6e]J5Qjw&a%5HxrU!d.YRVRp9_idQD%Icve](;x%nU(,:<U[>Rp0H4)99z' );
define( 'NONCE_KEY',        '];A7p` D~G%9_kS7GZqh$+J|$JIX:^nm$!PA=2td7fU1mf|#?rE[l5YAk>X{=z|;' );
define( 'AUTH_SALT',        '@kXXwsO@{$-fK0M^7W0ri8g|E9dT4AFYg|5Hb-E%PD.zkKiVPgiP.o.#KrA+o2Fh' );
define( 'SECURE_AUTH_SALT', 'GmN;q|t@d(nigch[DK,{:<<P3J|S]d#:-N71]hydV_oqPx_7P.2v7+LgEc7Wz9NX' );
define( 'LOGGED_IN_SALT',   'Ln[1H=iKAK{+3a0JcgmSuTG8+gHW(0YMR47|xdhvFU[=+NwW9C-W^bVD2ul)AuBk' );
define( 'NONCE_SALT',       'Maga/<,@<(#OL3T*W<MDyZtXt6dS9?NHdnS0d6Y`O80tWURlPgmAFY[n$41~a,pf' );

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

