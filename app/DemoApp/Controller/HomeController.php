<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 12/08/2015
 * Time: 14:48
 */
namespace DemoApp\Controller;


use Syph\Controller\BaseController;
use Syph\View\View;
use Syph\View\Renderer;

class HomeController extends BaseController
{

    public function index(){
        $renderer = $this->get('view.renderer');
        //$renderer->run('DemoApp:pages/index.html.twig');
        $renderer->run('DemoApp:pages/index.php');


        return View::render($renderer,array());

    }



}