<?php

namespace Application\Core;

class Controller
{
    protected $view;

    function __construct()
    {
        $this->view = new View();
    }

}
