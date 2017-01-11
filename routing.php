<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 12/08/2015
 * Time: 12:47
 * Description: Arquivo de rotas do CRUD
 */
use Syph\Routing\Route;
use Syph\Routing\RouterCollection;

$router = new RouterCollection();

$router->addGet(['name'=>'home','path'=>'/'],'DemoApp:HomeController:index');
$router->addGet(['name'=>'docs','path'=>'/docs'],'DemoApp:HomeController:documentation');
$router->addGet(['name'=>'installation','path'=>'/installation'],'DemoApp:HomeController:installation');
$router->addGet(['name'=>'working-with-routes','path'=>'/working-with-routes'],'DemoApp:HomeController:workWithRoutes');
$router->addGet(['name'=>'my-first-controller','path'=>'/my-first-controller'],'DemoApp:HomeController:myFirstController');
$router->addGet(['name'=>'my-first-view','path'=>'/my-first-view'],'DemoApp:HomeController:myFirstView');
$router->addGet(['name'=>'router-component','path'=>'/router'],'DemoApp:HomeController:routerComponent');
$router->addGet(['name'=>'container-component','path'=>'/container'],'DemoApp:HomeController:containerComponent');
$router->addGet(['name'=>'form-component','path'=>'/form'],'DemoApp:HomeController:formComponent');
$router->addGet(['name'=>'cache-component','path'=>'/cache'],'DemoApp:HomeController:cacheComponent');
$router->addGet(['name'=>'logs-component','path'=>'/logging'],'DemoApp:HomeController:logsComponent');
