<?php
/**
 * AxShell Bulma Walker Nav
 *
 * @link
 *
 * @package AxShell
 */

class ax_Bulma_Walker_Nav_Hero extends Walker_Nav_Menu {

    function start_lvl(&$output, $depth = 0, $args = array() ){
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0 ) ? 'sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth-$depth\">\n";
    }

    // function start_el(&$output, $depth = 0, $args = array()){

    // }

    // function end_el(&$output, $depth = 0, $args = array()){
        
    // }

    function end_lvl(&$output, $depth = 0, $args = array()){
        
    }
}




?>