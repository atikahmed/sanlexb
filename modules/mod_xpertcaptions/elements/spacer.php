<?php
/**
 * @package Xpert Captions
 * @version 1.1 January 27, 2011
 * @author ThemeXpert http://www.themexpert.com
 * @copyright Copyright (C) 2009 - 2011 ThemeXpert
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 */

// no direct access
defined( '_JEXEC' ) or die('Restricted access');

class JElementSpacer extends JElement
{
    /**
    * Element name
    *
    * @access    protected
    * @var        string
    */
    var    $_name = 'Spacer';

    function fetchElement($name, $value, &$node, $control_name)
    {
        if ($value) {
            
            $class = $node->attributes('class');
            $function = $node->attributes('function');
            
            $opensTable = "<table class='paramlist admintable' width='100%' cellspacing='1'><tbody><tr><td>";
            $closeTable = "</td></tr></tbody></table>";
            
            $title = '<h2 class="acc_trigger '.$class.'"><a href="#">'.JText::_($value).'</a></h2>';
            $paneOpen = '<div class="acc_container '.$class.'">';
            $paneCloses = '</div>';
                       
            $html = '';
                        
            if(!defined('TX_SPACER')){
                define('TX_SPACER',1);
                $html .= $closeTable.$title.$paneOpen.$opensTable;
            }
            else{
                $html .= $closeTable. $paneCloses . $title . $paneOpen . $opensTable;
            }
            return $html;
        } else {
            return '<hr />';
        }
    }
}
