<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

use \PrestaShop\PrestaShop\Core\Module\WidgetInterface;
require_once(_PS_MODULE_DIR_."fabrication/Classes/FabricationClass.php");
class Fabrication extends Module implements WidgetInterface
{
    private $templateFile;


    public function __construct()
    {
        $this->name = 'fabrication';
        $this->author = 'NYM';
        $this->version = '1.0.0';
        $this->bootstrap = true;

        parent::__construct();
        $this->displayName = $this->trans('fabrication', array(), 'Modules.fabrication.Admin');
        $this->description = $this->trans('Fabrication Functionality', array(), 'Modules.fabrication.Admin');
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);

        $this->templateFile = 'module:fabrication/views/templates/hook/fabrication.tpl';

    }

    public function renderWidget($hookName, array $configuration)
    {
        $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));


        return $this->fetch($this->templateFile);

    }



    public function getWidgetVariables($hookName, array $configuration)
    {
        $matiereList = null;
        $categorieList=null;
        $id=null;

        $matieres = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'matiere`');
        // $tests = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'matiere` WHERE cat_id= ');
        $categories = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'categorie`');
        //$sql="select cat_name from ps_categorie c inner join ps_matiere m on c.cat_id=m.cat_id";
        //$catmat=Db::getInstance()->executeS($sql);
        if(Tools::getValue('name')=='SpongeBob'){
            echo "here";
            $id =(int)Tools::getValue('editbtn');
            echo "$id";
            $matieres = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'matiere` WHERE cat_id='.$id);
            Tools::redirect('http://localhost/prestashop/prestashop/module/calculcout/validation');

        }


        return ['categories'=>$categories,'matieres'=>$matieres,
            'matiereList'=>$matiereList,'categories'=>$categories];

    }
}