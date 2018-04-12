<?php

Class Calculator
{

    public function __construct()
    {

//        echo '<pre>';
//        print 'constructor is called';
//        echo '</pre>';
    }

    public function calculate()
    {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
        exit;
    }

}
