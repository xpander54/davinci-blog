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
define('DB_NAME', 'davinci_blog');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'hd1412');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ' WM1X(*]/aUL*5K:!+*BeN|m#YMcf-I}7nujqi[rZjrgng{n_G9CH-7~iaL#*g$g');
define('SECURE_AUTH_KEY',  'k, Q:`^WI)lCC;^`Yv,5;G_O^TAc9IDqPH6X6(U-*$pBz,<4B9G~|Ko6b_hJ2OV7');
define('LOGGED_IN_KEY',    'RqK(-VuuEi2TK=h{+%c.xX[,`/ L}nOpS!pSkWK;6;qb*8,J3?gKSD[&#D4c6AWY');
define('NONCE_KEY',        'R2ulRSVbpM;58-{gRH$C1|Q^&A|]ziAy`T[/=SMnwj<O,VS9=O*M1:-R;4lTQa3K');
define('AUTH_SALT',        'dXT-w4$SG@x:KrS4QN|=E+ yr|O7dAmo/y=f52R&$?13z(Xhdq$;7e$F515kD^t{');
define('SECURE_AUTH_SALT', '|@KBOf|@-b!]K5YB-6VRVbtiNaM-zR38g9B}<4tUSy)O<F`byPp2F$q*y[X*oDv}');
define('LOGGED_IN_SALT',   'fu$nZ[5&hV)v;+?vr+++[+$Q;Y;/s`Uq 4>goh@]H<`s9}B-YR~H-Kx]zu!=Gwcl');
define('NONCE_SALT',       'p<s4{S>/.nu|(WqP?+#Xd|-6r?&Ht=u?|@W-P,;]=2u-/(@J.3l(lX$DNh}@Ke9<');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'dvb_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

