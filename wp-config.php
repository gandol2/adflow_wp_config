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


// TEST..
// 190627_KSS 사이트 URL 설정 
//$MY_SITE_URL = 'http://.adflow.xyz/';
$MY_SITE_URL = 'http://' . $_SERVER['HTTP_HOST'] . '/';		// default


// 190627_KSS 사이트 URL 설정 
define( 'WP_SITEURL', $MY_SITE_URL );
define( 'WP_HOME', $MY_SITE_URL );

// 190627_KSS 사이트 쿠키 설정 
define( 'WP_SITEURL', $MY_SITE_URL );
define( 'WP_SITEURL', $MY_SITE_URL );
define('COOKIE_DOMAIN', $_SERVER['HTTP_HOST'] );

// 190701_KSS JWT 토큰 설정 
define('JWT_AUTH_SECRET_KEY', 'your-top-secret-key');

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp9941459' );

/** MySQL database username */
define( 'DB_USER', 'wpuser01073' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jF86E1d0dlNxhzk' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_ALLOW_REPAIR', true);

#define('WP_DEBUG', true);
#define('WP_DEBUG_LOG', true);

/** 190715_워드프레스 크론 제거*/
define('WP_CRON_LOCK_TIMEOUT', 300);
define('DISABLE_WP_CRON', true);

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '4c2RRN_6h,9Ef]Y^*0eC?:F,tT,o4|a+nGnGqjdw7=O#hd~&FJl_:.,7/M+87+uN' );
define( 'SECURE_AUTH_KEY',   'n,_q%N+sBDr1F&wfwN)f(m&e_Vq.JiMmSGpv=Q_2AM1m^bApf&)S.M#i1r [T4A~' );
define( 'LOGGED_IN_KEY',     '/T@.Wz1R2R/98$yfjS~6Dg7e?=d=)6A=:=R6]Cq2.(>;=O#1>nrW}a>>%1$c[2,H' );
define( 'NONCE_KEY',         '?!Z7/Zl5H]P<b(Zs MExjLLKjlN`XY3r<X@ Sq4 s=&(Xn}Lu]aq*]Zgf!W66w`G' );
define( 'AUTH_SALT',         'st/JAty{F}iHWq%eOfTtTY;bFc;b 6{ HNJrdq~ AXfK<_4i.IM]=)?)JJHlV=zF' );
define( 'SECURE_AUTH_SALT',  '  `z,h^ZSBSz(bKU=#oz^IsLN;(Ne&GH[Py=]&T1gHrmNC,V~1Oe3j&i^gR&LAE5' );
define( 'LOGGED_IN_SALT',    '-)*PBAuV[*Jvl}$%j!C>Pi9|;Z}sZ|KvOHO/xyOgKsq37zK%0vYk1(Q4<n]M_;&0' );
define( 'NONCE_SALT',        'GCT$)LyztSL-zVe7IE2,`!GSv(>S|vB/L7/Q]2aYCi0sHh<0OU?e:)AQuo%gZ$Zh' );
define( 'WP_CACHE_KEY_SALT', '~jm:0}9EyAgQI,x_Le1pZ?$b9XF<Qju;bwyJzRT|?.p3 d9|,:V*-e>^54O~4s2#' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'FORCE_SSL_ADMIN', false );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
