<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'fashionworld' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Gu1WG3V^zf+*?:Rk!*uLz=*PDCW@K{R,Pj$_ g0)o!=<b4C{XR3<)?@By[|b,FNm' );
define( 'SECURE_AUTH_KEY',  '2<!<Ja#C!OR^SVI8,?=0$ipUV^,KT@QNr=voPAK5bdMM^&|i+|vYodq< @ZONUs|' );
define( 'LOGGED_IN_KEY',    'wQoI`E(_.j<|oDa=n]Yj=3F$Fx}4H}y1i]3qK-PX-G<;iES`.D4w(Eebdy@^j|VU' );
define( 'NONCE_KEY',        'w |yml|]OyYYVCj_uUGCoV*u.sdc2D@pP+4C}/!P%rTab5F*vze&*3jt_ bN{dQ#' );
define( 'AUTH_SALT',        'gf*&D@;0l_i`w!4C?O|25M{7qzX[E{{*$BYnqr,Cev)L~9?Wkb_y_)+!_c|dHi0;' );
define( 'SECURE_AUTH_SALT', '$Yti ;(o)F=lL,P)oY=lSD(-v/2+2%~X|csR4D^4fjYxwox)(l6-?_w=zL./(-dS' );
define( 'LOGGED_IN_SALT',   'q4o_qK$R+=XUp[O66.rh66=wTGt;UxW;HTW5Y0:Dw))QD~8$5CJ$)>u|rDTtu3&)' );
define( 'NONCE_SALT',       '@=jZqxb&bl]Dd3<M/M<xG]R>mYm#KTv+/F=Kz##ceCLNWReA2o/?%UL7d8H>&}/s' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
