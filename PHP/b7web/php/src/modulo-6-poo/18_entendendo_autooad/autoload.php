<?php
spl_autoload_register(function ($class){
  if('classes/'.$class.'.php'){
    require 'classes/'.$class.'.php';
  }
});