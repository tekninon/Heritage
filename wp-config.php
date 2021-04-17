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
 * 
 * 
 */

 define('FS_METHOD','direct'); 

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'dbs1823041' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'dbu532686' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'W95raufr*' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'db5002261701.hosting-data.io' );

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
define( 'AUTH_KEY',         '`FdtoxG%ZE)^+V1TOBx-5S$~7c4z.:8{:]!_YCfl1TaF?5K:(+dj{4s)<5VfDuBD' );
define( 'SECURE_AUTH_KEY',  'L5crG $R?Am}!mHuj+[Ug^Q*yvsT<`e<LM%~{jj/(CuJ8YUz7R/[Db@2T%tAP/-4' );
define( 'LOGGED_IN_KEY',    'skSnAg3(?rb_#_^hL& Mu^$0<$|K(jF@6~]Gu]H[{yveA zrTbdIfvh7ojRH~Kah' );
define( 'NONCE_KEY',        '>kR&R0CE4_jkup^7Z{;.PPr{,yzw5V[vP]iN<XLmXdP7aZ%g4i,9uF=1Nrp:4$4V' );
define( 'AUTH_SALT',        'Yfs>6g~GTwV7+-a=fxL_&.t*-Jf+{wh;M}*!L<[S:^;AqD]4bx2IxWLVm77>#wHJ' );
define( 'SECURE_AUTH_SALT', 'VPQ?f;&YB<#s82o|oF,mfc?DQF=A>9q?GGUu&mCYr^G>=UUVBeAH.>Mm|mU$m^=I' );
define( 'LOGGED_IN_SALT',   'nGhP%jY@<pzOuhWQYQ#7FirCu|aRjD%G|CdcIl79hipIVr/@rp-0x BmWPl3A^.@' );
define( 'NONCE_SALT',       'gMJABok:x*6Fozz3:AAV,+RMz0]O/i4i((S()}k/-Wt=ToWb:W|np6fDLjVbutJ0' );
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
