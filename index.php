<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Resquest;

// include the Composer autoloader
require 'vendor/autoload.php';

$url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
$arrayUrl = explode("/",$url);
$controller = $arrayUrl[0];
$method = $arrayUrl[0];
$params = "";

if (!empty($arrayUrl[1]))
{
    if ($arrayUrl[1] != "")
    {
        $method = $arrayUrl[1];
    }
}

if (!empty($arrayUrl[2]))
{
    if ($arrayUrl[2] != "")
    {
        for ($i=2; $i < count($arrayUrl); $i++)
        {
            $params .= $arrayUrl[$i].',';
        }
        $params = trim($params,',');
    }
}
echo "<br>";
echo 'controlador: '.$controller.' - metodo: '.$method.' - params: '.$params;