<?php

namespace Pessoa\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Helper\ViewModel;

class PessoaController extends AbstractActionController{

    public function indexAction()
    {
        return new ViewModel();
    }

}