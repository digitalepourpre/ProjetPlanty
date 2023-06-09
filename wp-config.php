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
define( 'DB_NAME', 'Projet-Planty' );

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
define( 'AUTH_KEY',         'Z-sj&yPjf?7,@:,@V@:jB5FuW-_Vcy|0K1* ;P%.INR1yHDNqwL]4tcaKz!ETLpj' );
define( 'SECURE_AUTH_KEY',  'wpq=OJ}#b{.aVojUch_1Leq12e]q=BlgN^`EIjMT*k^M<66CF?%)v3!7on@1H4*5' );
define( 'LOGGED_IN_KEY',    '-TGp-W@qQ}iRMhb J<G=nTb s^I$4Tp1@Jl0B15*u8P *T`t6-d4PqfU.lg8fnLl' );
define( 'NONCE_KEY',        'br;*VI/5d$w>&z+X bIE9;tHER(DQ{Zpxj@a8s8VlBA+`lgsBeR+x%^=)V=[g}ee' );
define( 'AUTH_SALT',        '!.fF5fa-0D**km?O 9OK8b41vEVwv~/wBN^bR#bwfM=3)T!z}2_:$sr71y_ll*|Z' );
define( 'SECURE_AUTH_SALT', 'VQ.K2*U48vP?Uwr9gD~1#(E2<<EMd]O]s_ehD]H|61^!6to9fm/FbQ?-fJ%1i`G?' );
define( 'LOGGED_IN_SALT',   's=fO4+XNm?V^Sk1DN2o[V:+)VW5?G][sCIvMQ[r^AVErOGi&E3@J>xY?=tj@fN/x' );
define( 'NONCE_SALT',       'Ik:_ztQu4t0WF}AKi (G8.=5Yi#9_a:I7*;na}$oWbW4_^P5]{QKq?c.zmBQ1fiI' );
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
