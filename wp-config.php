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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '}~ijhs)m/X)siB{NmJ:9Q]cW}AY,D,)zB1rq`pYW|q=Q+!WQE^P4)`A];)!cP%Tw' );
define( 'SECURE_AUTH_KEY',  '_dZ duTAu )dP}|tI4kP:gTh=wW$d&/2Oh;ar?>^UySLu}6{~~_{pt,W,f/Mq~.g' );
define( 'LOGGED_IN_KEY',    'N!oU#T/=HO]-x@{6&&A)9.:{GdVaqVgEm7PYGaS8-k+vN9GF(xPa|Lxh#^GbZZsE' );
define( 'NONCE_KEY',        '>zA@V~h@soQX `JOi^lfelHfnrj9oSPf(|tCI+QEP&m7OX+9}NAdjT:g5KT$zrqc' );
define( 'AUTH_SALT',        'Ck=#I7M|guGNp bz]SPi6#io^d^2=GO6iet($&t&gy%q+EC %~(yo&~,7x6o57m1' );
define( 'SECURE_AUTH_SALT', 'wkC(QA,y4Ap*N&97sFx1BU/xnh+sInoLQ7j+ 1aIiDw*folUFKSo?o^KemNOI^=7' );
define( 'LOGGED_IN_SALT',   'PNGdic,,4&:zsSGHph;}aHQ2Bd+<W;4RLT3VzVNtq{D-`/!2=Gnxsy+2$x uVFj<' );
define( 'NONCE_SALT',       'BY92fsc*}V2Cs!wQ_kN7Q?vs@ATJ#i2))sUG976IW]awGO6|Z>oAn,qKC:.6pOO&' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp';

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
