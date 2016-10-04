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

        return View::render($this->createView('DemoApp:docs/docs.html.twig'),['class_active'=>'link-concept']);
    }

    public function installation(){

        return View::render($this->createView('DemoApp:docs/installation.html.twig'),['class_active'=>'link-installation']);
    }

    public function workWithRoutes(){

        return View::render($this->createView('DemoApp:docs/workWithRoutes.html.twig'),['class_active'=>'link-work-with-routes']);
    }

    public function myFirstController(){

        return View::render($this->createView('DemoApp:docs/myFirstController.html.twig'),['class_active'=>'link-first-controller']);
    }

    public function myFirstView(){

        return View::render($this->createView('DemoApp:docs/myFirstView.html.twig'),['class_active'=>'link-first-view']);
    }



}