<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * Core translations are managed using Transifex. To create a new translation
 * or to help to maintain an existing one, please register at transifex.com.
 * 
 * @link http://help.transifex.com/intro/translating.html
 * @link https://www.transifex.com/projects/p/contao/language/fr/
 * 
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

$GLOBALS['TL_LANG']['tl_merge']['headline'] = 'Créer automatiquement les fichiers "autoload.php"';
$GLOBALS['TL_LANG']['tl_merge']['emptySelection'] = 'Sélectionner au moins un module !';
$GLOBALS['TL_LANG']['tl_merge']['autoloadExists'] = 'Le module "%s" a déjà un fichier "autoload.php". Voulez-vous  le remplacer ?';
$GLOBALS['TL_LANG']['tl_merge']['available'] = 'Modules disponibles';
$GLOBALS['TL_LANG']['tl_merge']['options'] = 'Options';
$GLOBALS['TL_LANG']['tl_merge']['override'] = 'Remplacer les fichiers "autoload" existants';
$GLOBALS['TL_LANG']['tl_merge']['ide_compat'] = 'Mettre à jour le fichier de compatibilité IDE';
$GLOBALS['TL_LANG']['tl_merge']['explain'] = 'Créer automatiquement les fichiers <em>config/autoload.php</em> requis par Contao 3, qui ajoutent toutes les lasse et modèles dans l\'autoloader. Si une commande <em>namespace</em> est trouvée dans la classe PHP, l\'espace de nom sera ajouté. ';
