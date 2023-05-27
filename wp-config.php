<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'M5L ($8$_5WE/q/E2R)/q!Mp[/f/=]_Yhu1>*_:KOH;>w?N`hEbMnDJNHmpnlEeW' );
define( 'SECURE_AUTH_KEY',  'nzx#^.js.,c51dXfTkXU+KzI5O[%BD;zSFSNIqKTM{X/j*~O<Z5$w3Xb4ES~67{X' );
define( 'LOGGED_IN_KEY',    'N+pNDV1S9X$`W6}#bj$)m?pQYOZcl`7xE(^ OdgL0b4csa6}s5VLeBcL1K7y3PbP' );
define( 'NONCE_KEY',        '-`#mt2b}T9oE<b&MlyhRmVpHwRW|KiFDLAbeF+QREK6KjBc%70!K7.pOzRE2r~m<' );
define( 'AUTH_SALT',        '2.6&5`hb3Et<SPJZ>T4ARK4c?x.oKd]?2?-lvl7IlC1fH6cqU#uz(K4L2Y{*h iR' );
define( 'SECURE_AUTH_SALT', 'Pve?h=xs;%1JI4<H>q*qbsf$-R9Sy0y@ h~3$:~3[PO*p%p[k.GdRI&z,M2l~.C.' );
define( 'LOGGED_IN_SALT',   '^x8bFR^U{Rmr!wLPwzF0aaNta%]41U;]PX9ntIHR~PFist|0TCY(i|^g0(4oLs(^' );
define( 'NONCE_SALT',       'z-ch;M(*cHS?7< ?AW^!eSwTeST@t;jh_)`j/|qPlWDN4GU(Tv>>hVvY_B^O#GQq' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
