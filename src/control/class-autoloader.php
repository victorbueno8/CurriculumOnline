<?php

spl_autoload_register(function($class){
  require $_SERVER['DOCUMENT_ROOT']."/src/model/dao/{$class}.php";
});

?>
