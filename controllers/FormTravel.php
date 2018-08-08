<?php
use core\Cotroller\Controller;

class FormTravel extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $this->views('index/index', null);
    }

    public function FormTravelf($var)
    {
        switch ($var) {
            case 1:
                $this->views('form/form1', null);
                break;

            default:
                header('location:/index');
        }
    }

    public function test() {

    }

}
