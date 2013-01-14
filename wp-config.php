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
define('DB_NAME', 'danhumphries');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'rx[)$Zo_@|!7=%|j8N#sU}L4`_v(o:R >M}y74caJmEdjT6p]3;M&km x$vd{o:b');
define('SECURE_AUTH_KEY',  'ZN&eVzJqvioWl|Y*c+#cLHISpD`U6iE%(wvAJQ]rjqFOwKS/f!|y+^B3>]/q`3,_');
define('LOGGED_IN_KEY',    'YY&j~r,nH_Cos+Fyep3gDu)+?hU6=|i+|x9/jBl/9YKHRixiL]%/6[jWyas>0+>-');
define('NONCE_KEY',        'I+c(=Uh,Y}VCJI261IQ+Wc^[Lt*-Sx-y.s_~4qsS7u.@-/:2t3n;$,LyX.X7)Vb(');
define('AUTH_SALT',        'KEF}{^Zo[2{!<|e>hW^nVe|~4PK-p<Hev-[,b3kyx]57!Gf5A5Z`+^VM7c#xm[R&');
define('SECURE_AUTH_SALT', 'I=0Gs$gG`<vzM^Ef)Csfy}r9QetH59hdvf2_4d8mZd)b3^UEPk2-}t5[<K]vo5Y+');
define('LOGGED_IN_SALT',   '3ED+YQ3z#a>7_:Z,>!c?nUL@|Rr;yo|+rSgZ@!;bOxsv),wlh-,+Y;[w-e_bROH|');
define('NONCE_SALT',       'r%yb_<dR1^Uj;X$T,J|Uz+(}1}Y&d >vG(}ELk<oPhPo~C[HuP7w/`yz2.6|T^8S');

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
