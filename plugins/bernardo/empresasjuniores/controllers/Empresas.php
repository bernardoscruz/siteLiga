<?php namespace Bernardo\EmpresasJuniores\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Empresas extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Bernardo.EmpresasJuniores', 'main-menu-item');
    }
}
