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
    'installation',
    new Route('/installation', function(){
            $controller = 'DemoApp:HomeController:installation';
            return array('controller'=>$controller,'args'=>array());
        }
    )
);

RouterCollection::route(
    'working-with-routes',
    new Route('/working-with-routes', function(){
            $controller = 'DemoApp:HomeController:workWithRoutes';
            return array('controller'=>$controller,'args'=>array());
        }
    )
);

RouterCollection::route(
    'my-first-controller',
    new Route('/my-first-controller', function(){
            $controller = 'DemoApp:HomeController:myFirstController';
            return array('controller'=>$controller,'args'=>array());
        }
    )
);

RouterCollection::route(
    'my-first-view',
    new Route('/my-first-view', function(){
            $controller = 'DemoApp:HomeController:myFirstView';
            return array('controller'=>$controller,'args'=>array());
        }
    )
);

RouterCollection::route(
    'router-component',
    new Route('/router', function(){
            $controller = 'DemoApp:HomeController:routerComponent';
            return array('controller'=>$controller,'args'=>array());
        }
    )
);


RouterCollection::route(
    'container-component',
    new Route('/container', function(){
            $controller = 'DemoApp:HomeController:containerComponent';
            return array('controller'=>$controller,'args'=>array());
        }
    )
);

RouterCollection::route(
    'form-component',
    new Route('/form', function(){
            $controller = 'DemoApp:HomeController:formComponent';
            return array('controller'=>$controller,'args'=>array());
        }
    )
);

RouterCollection::route(
    'cache-component',
    new Route('/cache', function(){
            $controller = 'DemoApp:HomeController:cacheComponent';
            return array('controller'=>$controller,'args'=>array());
        }
    )
);

RouterCollection::route(
    'logs-component',
    new Route('/logging', function(){
            $controller = 'DemoApp:HomeController:logsComponent';
            return array('controller'=>$controller,'args'=>array());
        }
    )
);
