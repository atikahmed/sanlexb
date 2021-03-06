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
defined('_JEXEC') or die();

class JElementHelp extends JElement {

    var	$_name = 'Help';

	function fetchTooltip($label, $description, &$node, $control_name, $name) {
		return;
	}
    
	function fetchElement($name, $value, &$node, $control_name)
	{
		$link = 'http://demo.themexpert.com/extensions/free-extensions/xpert-captions';

        $html = "<a href='$link' target='_blank' class='help'>Click here to see the example configurations</a>";

        return $html;
    }
}
