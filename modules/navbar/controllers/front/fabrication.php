<?php

class NavBarFabricationModuleFrontController extends ModuleFrontController{


    public function initContent()
    {
        $this->ajax=false;
        parent::initContent();
//        $this->context->smarty->assign(array(
//            'hello' => 'Hello World!!!',
//        ));
//        Media::addJsDef(array(
//            'fabrication' => $this->_path . 'module:navbar/controllers/front/fabrication.php'
//        ));
        $this->setTemplate('module:navbar/views/templates/front/fabrication.tpl');
    }

}
