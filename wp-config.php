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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+=^BgzOO|:-[&B$!}|3mQ>G1dIth%-3f`lS1(}Gn6L3lDy~KSmNW1$n?&z*2 O(L' );
define( 'SECURE_AUTH_KEY',  'jE6?d(Bha@5H4l){Ussvk9oVWjBFPl0YTf<|,>(B|)H*>0ZYV[C8,;Ol4%{I,Tu=' );
define( 'LOGGED_IN_KEY',    'eqifG&=N!$j9Vn=Ny6JnPYO[7#C|zr-dp}Hjcbr4uem*HI|WJqKuQ(-h5KEJg=>P' );
define( 'NONCE_KEY',        '$`KG&{f*/ZBeb.HALX}t0|5RBNRd(FbhZB( 8Y6RZC:49r[LlQ&yb!/N&Q*8#[>r' );
define( 'AUTH_SALT',        'iNCZ{v{dv~.NLMq<h xP;(5{8QMQMbH<N8&*:bEno5LA6[~U+hAMf,GIdC5U()Ub' );
define( 'SECURE_AUTH_SALT', 'WBgU&UTgHk%N/|,[V?v$ZO#7Ntju}Y[JxTBhJDKqC%o$#/JxHFP>7zCqP)+]PWVr' );
define( 'LOGGED_IN_SALT',   'K/(B{W$j@TN@etYej#l+^:6]~ *cN@7x{,E5w`nLM7bf9U~BV/EuL!eYs/7sgsf7' );
define( 'NONCE_SALT',       '|^84d>kS_w0)X_>fu45q%knCan`dXI]aKPI+X@B]sj}g!]^]NJ.pl&H(dzsBIem8' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
