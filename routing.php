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

RouterCollection::route(
    'home',
    new Route('/', function(){
            $controller = 'DemoApp:HomeController:index';
            return array('controller'=>$controller,'args'=>array());
        }
    )
);

RouterCollection::route(
    'docs',
    new Route('/docs', function(){
            $controller = 'DemoApp:HomeController:documentation';
            return array('controller'=>$controller,'args'=>array());
        }
    )
);

RouterCollection::route(
    'download',
    new Route('/download', function(){
            $controller = 'DemoApp:HomeController:download';
            return array('controller'=>$controller,'args'=>array());
        }
    )
);
