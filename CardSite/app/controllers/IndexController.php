<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $string = "Hello World!";
        $this->view->setVar("string", $string);
    }

}

