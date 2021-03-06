<?php
/**
 * @package Xpert Captions
 * @version 1.1
 * @author ThemeXpert http://www.themexpert.com
 * @copyright Copyright (C) 2009 - 2011 ThemeXpert
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 */
// no direct access
defined( '_JEXEC' ) or die('Restricted access');

class JElementAssets extends JElement {

    var	$_name = 'Assets';

	function fetchTooltip($label, $description, &$node, $control_name, $name) {
		return;
	}
    
	function fetchElement($name, $value, &$node, $control_name)
	{
		$doc =& JFactory::getDocument();
        $doc->addScript(JURI::root(true).'/modules/mod_xpertcaptions/interface/js/jquery-1.6.1.min.js');
        $doc->addScript(JURI::root(true).'/modules/mod_xpertcaptions/admin/script.js');
        $doc->addStyleSheet(JURI::root(true).'/modules/mod_xpertcaptions/admin/style.css');

        return '';
	}
}