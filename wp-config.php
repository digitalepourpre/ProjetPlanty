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
define( 'DB_NAME', 'HelloPlanty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '&X&G#K5hg}[,kY;Ud_dLTJNX$;~_>OpD+IV0N^d7]5~hFTR|Z`?WQk!w)d`Vh bQ' );
define( 'SECURE_AUTH_KEY',  '(-fCRa^V$_v`34$A_RT:K>P)iG?Y=JGnQ3KK63^d}.OF*lFoa!Tsxdk2&) |`YgS' );
define( 'LOGGED_IN_KEY',    'j5uGZB:B},tZ^0xiIrU4&l_?>xUVwb3@h+y-;NIWd0]zxGl0uj)PPYmzB_/& b]d' );
define( 'NONCE_KEY',        'V0cpyEqLHF$$+|+}LlI 7!H<^JX@%|!]Wp]ZH_bR4YKH})AhIW[%d|d73!7g2,-B' );
define( 'AUTH_SALT',        'SP8?1>[5ZPaBE?x0JC2$Wt0u:XactpyHy_<Q@r_ e?wM%xKK8}X5F}f|-nP}TP&~' );
define( 'SECURE_AUTH_SALT', 'O}(Is?>3fu^[U&>47 p3ZRhhH3h]LeB+Z@#dLKq_eALr{{EQChGCVe%q4qcipVg(' );
define( 'LOGGED_IN_SALT',   'X )o!sMN{?6!UTgMn:B^ L0A W B}51jauu<o;]5JL~zKrc]~#mV9=Ch9Mme>#qK' );
define( 'NONCE_SALT',       't?R+,:iCZHuro=*}:P>5H,3=2EsfZAa,u1FJmiQWA&HMZK,@N[gEQ;nRm$(VVPz!' );
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
