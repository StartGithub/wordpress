<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_github_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y6|%c1MtCsvbXF#qc:-*G:zR6pa(-opt[=vEj+Lv|D}F+uLx#Mb*Av*)^@a]$;Jz');
define('SECURE_AUTH_KEY',  '4<k*nll{z{96>qL:Qk7~o32+^gY]amzV-*<^:ITrK;?UULRgL&q_l/k?]`$|l_oc');
define('LOGGED_IN_KEY',    '*mKs?0UsL2p8h8+!YH*NS@ecr`G esOrbW&hAXzvgU_(jB_VnsYprt!,gI>Ifw`!');
define('NONCE_KEY',        'jHR%lg0tXZ4&Ogg,z,fXsN)^B`W^|ay+^&;F|t-|/dT#_46tVPs 4PnD8Uy2/PaI');
define('AUTH_SALT',        '$]7R(.$)mcH=%:&L9&m7K(Gte?1;UURGZb:D+%33lr*{!1@pDcwn]k0]LPkkzaZ7');
define('SECURE_AUTH_SALT', '5Uh`@- )G?!hA|}T<-~zBSL>5{`*E.f<A|:+_.}NUSn fam{2xbX4w|vn)Z<3c@X');
define('LOGGED_IN_SALT',   'B7j$8,Tj;pXSVQ^P+aFes&FQZXfzDf^D^pPpZZ-nrRjJcwrzqG(an0B=]5-jMo[g');
define('NONCE_SALT',       '-F1^d(?>:jH-B-l(2LER9wnK&A:R9JUaV|pQo!FHF-cJGly5qd[l;0>);M>j{ZBS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
