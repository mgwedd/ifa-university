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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KfrMRKMPTWrvyW36OFs9zJWKK8BRn5yG99Umd4JIHFf3fvCumigrEga0bj1CZaCwghqpU2BcEo+P65su5E81jw==');
define('SECURE_AUTH_KEY',  'Vni19ik4qIRxtpQY2YmGsgWECYyFTdGdMe3qYXeTyaf8cIb40XMixgyQD2V/RUwJTTCy32OPss+uu5IygOoMjQ==');
define('LOGGED_IN_KEY',    'K5wIRFbVbdstBafhLsSmisk3MUQdZFcuJRiukKCsA2EzF/WAfhjYm4mlFDsuFUTgePCd7N+hITRe8tuIn5JB8g==');
define('NONCE_KEY',        'QtOjzbL98NFa0+dWq6e5sM99g2o3wW44tZWkOXno/PPllADE7Atfg0VJtx54yc1X3pXXm7gfbZv0IZ9HX7wfaw==');
define('AUTH_SALT',        '7mgzsiF63AuX5peduVLo+0maWXW6OJSOdJoUVqPWPVQaLY4ADRD7dfn2s8c6n0gpOBU48trn9UtjX9Q5/MG3bQ==');
define('SECURE_AUTH_SALT', 'P0FUy93HmrKAZ0WGoPjrHbWepuxka+gBRZUHOl4jrt+PNnzlYB7A/WlnbRh/9Jh6giRxW1JtvrsHVC9Vjoq7fg==');
define('LOGGED_IN_SALT',   'mTcecPbf16qTzXw0TKw6ejuf0xE+dmvr0izbE0V9oQrB27jSvfwD3hn60qOQSLWg3YofgpU8hlEEacsGu1IgKw==');
define('NONCE_SALT',       'ets2RZWQFhHAnJL2X9MMyGzVq8notYAGqs0lXLDHNEO6ju2pZpOZq2ExHt1Sr/K3bcnM7MsAdn20On4nDFJIGA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
