<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'admin');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'YLtx:0ahFA~y0HW^p+SgOvCrK(R.je DpU3+m>?o2.{vkqV!)ec2<hVRGM:Q(mZ@');
define('SECURE_AUTH_KEY', 'ojp8r0EnKa<r]r&Kl{Jx$(wC6S.DdhO@[y@1:o{^F}6m{8mT[]6/l}5oHdj~&K5?');
define('LOGGED_IN_KEY', '<jj!wz5DV-ZHJ.u#kuA,[S=hny0zl7]S#,/yMN=4Ku%zh~0D)!cKY0H$/&#4@[E4');
define('NONCE_KEY', 'v:HqNPh9`,nmDS|UV~)pR sTc<`c(l|fnFYY~1i=d*^v;zLuV_,`bCC~o]v/p9fK');
define('AUTH_SALT', '!E=3hhRSUCEXl~@q}00ZR{Jb5$cXB!lY/XYwr/,pe`O!fJi0F$qBWa^5:I_[a4Gp');
define('SECURE_AUTH_SALT', '=Ch?OW*CU+(ST?,SiHI3Mi!|@L&?-f81eGsy^;H]do a%$BCyjrCu~w5@*[|^{hI');
define('LOGGED_IN_SALT', '&0S`-r!aX)$EIHvo5[5tcqhK8L=+!y0+bw&iun#,&21fI6tX}K)LEP3~>FYuM[!K');
define('NONCE_SALT', '~3UT/*Uf>I%?]4pr4SPIRE$h$jQ20 ~dQUjVKn>,JAe6d^s8BH-MH%[rPp7R4~Rc');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

