<?php
/**
 * @package submenu plugin
 */

 namespace Inc\Base;
 class Activate{
    static function activate(){
        flush_rewrite_rules();
    }
 }