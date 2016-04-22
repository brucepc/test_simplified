<?php
function SimpleCustomAutoload($className)
{
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    include(__DIR__.DIRECTORY_SEPARATOR.$className.".php");
}

spl_autoload_register('SimpleCustomAutoload');