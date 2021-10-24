<?php

class NavBarMatiereModuleFrontController extends ModuleFrontController{


    public function initContent()
    {
        parent::initContent();

        $this->context->smarty->assign(array(
            'hello' => 'Hello World!!!',
        ));
        $this->setTemplate('module:navbar/views/templates/front/matiere.tpl');
    }



}