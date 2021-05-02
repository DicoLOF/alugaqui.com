<?php
function carregar_classes($classes){
    require __DIR__.'/classes/'.$classes.'.php';   
}
spl_autoload_register('carregar_classes');
?>