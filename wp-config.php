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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pronobis');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'NWh>CXu@Ma<z>.,|V#_l0qA(X+S5lVwGnaah?n]eWLrJNg~ }*zrl%_j,$D_[aXR');
define('SECURE_AUTH_KEY',  'Ze~O#Bi;7wtLd%P+I=ZHB1`+mHrz?&6_BtQ?HB2/I&?bc6fB00L6,#@k>dr6 OrI');
define('LOGGED_IN_KEY',    'dM7K;)mat$gJcP/U9HG%JK*9nK-7qVA(eokX>f*rrl6<j]B{,%O]*+w+VVK]7cXb');
define('NONCE_KEY',        '1uxJ;vk?X_#2|~w}b!DO[.bjU/-hSI29]P2XfL[z*~;qY{6tWYh#+vYj|S;har{H');
define('AUTH_SALT',        'ieBU~i!<.N<K2%t-}a,cR9!H2KI!1X5/h2%{S! >ppI*hpw+n-Z$+`J6;ks#5ihd');
define('SECURE_AUTH_SALT', 'jZfL]sIhu$.{lW,K&O^Ab?,] E|n.TUp@KYN0?MuM}.MQf_#$^pGk_Z<)Ic- DvA');
define('LOGGED_IN_SALT',   'VuJ!>/z6C{id):KC.ah:LRo|n8tzk?N1^0o4v I[lI$8LWr4^F?48 =x+Y3Rs9QL');
define('NONCE_SALT',       'rK=zC!:R8L@@9OU|][Ul7(Nz*Wx.GnHbX3b3=k6WB`u(mb=G:.l]P?}34u+6{%HM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
