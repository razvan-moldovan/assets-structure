<?php

class HomeController
{
    public function indexAction() {
        $this->View->loadCss('/assets/css/home.css');
    }
}