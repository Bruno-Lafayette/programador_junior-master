<?php

class Controller {

    public function loadView($nameView)
    {
        require 'View/' . $nameView . '.php';
    }

}