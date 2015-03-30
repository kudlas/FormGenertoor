<?php
spl_autoload_register(function ($name) {
	require_once 'php/'.$name.'.php';	
});