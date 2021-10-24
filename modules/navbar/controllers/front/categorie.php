<?php

class NavBarCategorieModuleFrontController extends ModuleFrontController{


    public function initContent()
    {
        parent::initContent();

        $this->context->smarty->assign(array(
            'hello' => 'Hello World!!!',
        ));
        $this->setTemplate('module:navbar/views/templates/front/categorie.tpl');
    }



}
