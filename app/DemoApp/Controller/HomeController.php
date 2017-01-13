<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 12/08/2015
 * Time: 14:48
 */
namespace DemoApp\Controller;


use Jenssegers\Agent\Agent;
use Syph\Controller\BaseController;
use Syph\View\View;

class HomeController extends BaseController
{

    public function index(){
        $agent = new Agent();
        if($agent->isMobile()){
            return View::render($this->createView('DemoApp:frontend/index_mobile.html.twig'),array());
        }else{
            return View::render($this->createView('DemoApp:frontend/index.html.twig'),array());
        }
    }

    public function documentation(){

        return View::render($this->createView('DemoApp:docs/docs.html.twig'),[
            'class_active'=>'link-concept',
            'menu_active'=>'m1'
        ]);
    }

    public function installation(){

        return View::render($this->createView('DemoApp:docs/installation.html.twig'),[
            'class_active'=>'link-installation',
            'menu_active'=>'m1'
        ]);
    }

    public function webServerConfiguration()
    {
        return View::render($this->createView('DemoApp:docs/webServerConfiguration.html.twig'),[
            'class_active'=>'link-installation',
            'menu_active'=>'m1'
        ]);
    }

    public function structuresDirectories()
    {
        return View::render($this->createView('DemoApp:docs/structuresDirectories.html.twig'),[
            'class_active'=>'structures-directories',
            'menu_active'=>'m1'
        ]);
    }

    public function workWithRoutes(){

        return View::render($this->createView('DemoApp:docs/workWithRoutes.html.twig'),[
            'class_active'=>'link-work-with-routes',
            'menu_active'=>'m1'
        ]);
    }

    public function myFirstController(){

        return View::render($this->createView('DemoApp:docs/myFirstController.html.twig'),[
            'class_active'=>'link-first-controller',
            'menu_active'=>'m1'
        ]);
    }

    public function myFirstView(){

        return View::render($this->createView('DemoApp:docs/myFirstView.html.twig'),[
            'class_active'=>'link-first-view',
            'menu_active'=>'m1'
        ]);
    }

    public function connectingDatabase(){

        return View::render($this->createView('DemoApp:docs/connectingDatabase.html.twig'),[
            'class_active'=>'connecting-database',
            'menu_active'=>'m1'
        ]);
    }

    public function routerComponent(){

        return View::render($this->createView('DemoApp:components/routerComponent.html.twig'),[
            'class_active'=>'router',
            'menu_active'=>'m2'
        ]);
    }

    public function containerComponent(){

        return View::render($this->createView('DemoApp:components/containerComponent.html.twig'),[
            'class_active'=>'container',
            'menu_active'=>'m2'
        ]);
    }

    public function formComponent(){

        return View::render($this->createView('DemoApp:components/formComponent.html.twig'),[
            'class_active'=>'form',
            'menu_active'=>'m2'
        ]);
    }

    public function cacheComponent(){

        return View::render($this->createView('DemoApp:components/cacheComponent.html.twig'),[
            'class_active'=>'cache',
            'menu_active'=>'m2'
        ]);
    }

    public function logsComponent(){

        return View::render($this->createView('DemoApp:components/logsComponent.html.twig'),[
            'class_active'=>'logging',
            'menu_active'=>'m2'
        ]);
    }



}