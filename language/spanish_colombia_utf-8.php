<?php
/**
*   This is the Sapnish (CO) language page for the External Pages Plug-in.
*   @author     Lee Garner <lee@leegarner.com>
*   @author     Tom Willett <tomw@pigstye.net>
*   @copyright  Copyright (c) 2009 Lee Garner <lee@leegarner.com>
*   @copyright  Copyright (c) 2002 Tom Willett <tomw@pigstye.net>
*   @package    external
*   @version    0.1
*   @license    http://opensource.org/licenses/gpl-2.0.php 
*   GNU Public License v2 or later
*   @filesource
*
*   Based on the External Pages Plugin 1.0 for Geeklog 1.3.6
*   by Tom Willett.  Updated for glFusion 1.1.5 by Lee Garner
*/

$LANG_EX00 = array (
    'header'            => 'Páginas Externas',
    'version'           => 'Versión',
    'results'           => ' Resultados',
    'noextern'          => 'It appears that there are no external pagess on this site or no one has ever viewed them.',
    'topten'            => 'Top Ten ',
    'save'              => 'Guardar',
    'delete'            => 'Borrar',
    'cancel'            => 'Cancelar',
    'exidmsg'           => 'EXID',
    'titlemsg'          => 'Título',
    'urlmsg'            => 'URL',
    'hitsmsg'           => 'Hits',
    'info'              => 'Info',
    'addnew'            => 'Crear',
    'adminhome'         => 'Admin Home',
    'pageno'            => 'Página #',
    'pageurl'           => 'URL',
    'external'          => 'Externa',
    'externpages'       => 'Paginas Externas',
    'plugin'            => 'Extensión',
	'access_denied'     => 'Acceso Denegado',
	'access_msg'        => 'You do not have permission to access this page',
	'access_denied_msg' => 'Only Root Users have Access to this Page.  Your user name and IP have been recorded.',
	'admin'		        => 'Plugin Admin',
	'install_header'	=> 'Install/Uninstall Plugin',
	'installed'         => 'The Plugin is Installed',
	'uninstalled'       => 'The Plugin is Not Installed',
	'install_success'	=> 'Installation Successful',
	'install_failed'	=> 'Installation Failed -- See your error log to find out why.',
	'uninstall_msg'		=> 'Plugin Successfully Uninstalled',
	'install'           => 'Instalar',
	'uninstall'         => 'Desinstalar',
    'warning'           => 'Warning! Plugin is still Enabled',
    'enabled'           => 'Disable plugin before uninstalling.',
    'notavail'          => 'No disponible'
);

// Localization of the Admin Configuration UI
$LANG_configsubgroups['external'] = array(
    'sg_main' => 'General'
);

$LANG_fs['external'] = array(
    'fs_main' => 'Principal',
    'fs_permissions' => 'Permisos',
);

$LANG_configsections['external'] = array(
    'label' => 'Páginas Externas',
    'title' => 'Configuración P. Externas',
);

$LANG_confignames['external'] = array(
    'show' => 'Mostrar la lista de páginas externas a los usuarios',
    'defgrp' => 'Grupo Predeterminado',
    'default_permissions' => 'Permisos',
);

// Note: entries 0, 1, and 12 are the same as in $LANG_configselects['Core']
$LANG_configselects['external'] = array(
    0 => array('Sí' => 1, 'No' => 0),
    12 => array('Sin acceso' => 0, 'Solo-Lectura' => 2, 'Lectura-Escritura' => 3)
);
  
?>
