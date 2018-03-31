<?php

/** Database Name */
define( 'DB_NAME', 'cbosca_wpbundles' );

/** Database User */
define( 'DB_USER', 'cbosca_wpbundles' );

/** Database Password */
define( 'DB_PASSWORD', 'S/~+5)We-Ryg]' );

/** Database Host */
define( 'DB_HOST', 'localhost' );

/** Database table prefix (unique) */
$table_prefix  = 'bundle_';
// Keep the same for all environments for better compatibility.

/** Default Theme */
define( 'WP_DEFAULT_THEME', 'html5' );

/** */
define( 'SITE_DIR_STUB', '' );

/** */
define( 'SITE_ROOT_URL', 'https://wpbundles.ca' );

/** May be the same as the domain. */
define( 'SITE_CACHE_SLUG', '/wpbundles.ca' );

/** Default: false */
define( 'SITE_USE_ANALYTICS', false );

/** Values: UA00-0000-00 (Default: '' ) */
define( 'SITE_ANALYTICS_ID', '' );


/**#@+
 * Authentication Unique Keys and Salts. Change to force a re-login.
 * @link https://api.wordpress.org/secret-key/1.1/salt/
 */
define('AUTH_KEY',         'z0z%9-*7BTs=+ZR0pd4{#u1$_mftIqLsRI!B~h)((LicY5`ro=9L-Jw`{6 d? wi');
define('SECURE_AUTH_KEY',  'Yy-(bHD!M/n^W6?|X%|F7A@Y`;wcd}S:dAtUvKcuhgoaklo&x}[ xk@~Sb{US4YR');
define('LOGGED_IN_KEY',    '7-T]n$?l9Zr+jl4T9;hF+HHbt-MXionj)-O*A?Z#iW2#[R:Elw&rUpZn/f0A-lby');
define('NONCE_KEY',        '$#T|[:trz:(+.Kr*p|6_sj*>J{wkQi^aCy:{i QPW2wZ%D+A2V 9+s7=ruR=!hL)');
define('AUTH_SALT',        ')4|z[PGWvjXv;2EeRtw9nm$ll`^aPEAd|vWcdgXVe1hb`zjRP#*dQ8(=v.)1R.z0');
define('SECURE_AUTH_SALT', 'IDKn[3XzV-9|-0eiYPa@@c6F(iy[,uvS-K6YIA`YWgvIkDS`.3gqYOo9&U}2gpcE');
define('LOGGED_IN_SALT',   ' lT.E$BnCPtFHCle2o_4.Y+W936Qa6UOeH=;8hes!;_!O+kR~lZ[^4;q%1-N8{nk');
define('NONCE_SALT',       'dfjA1|$&/_:?&4(/U>`%Pyq.kf(6ZHBdjE]zc>iWG9^3Do&EP>l;=jT<ku%!)XiK');
/**#@-*/

/**
 * Notes: Copy this file to:
 *
 * config-db-local.php
 * config-db-staging.php
 * config-db-production.php
 *
 * as needed.
 * */
