<?php

if (!defined('_PS_VERSION_')) {
    exit;
}
use \PrestaShop\PrestaShop\Core\Module\WidgetInterface;
require_once(_PS_MODULE_DIR_."categorietest/Classes/CategorieClass.php");
class Categorietest extends Module implements WidgetInterface {
    private $templateFile;

    public function __construct()

    {
        $this->name='categorietest';
        $this->author='NY';
        $this->version='1.0.0';
        $this->bootstrap=true;

        parent::__construct();
        $this->displayName=$this->trans('categorietest',array(),'Modules.categorie.Admin');
        $this->description=$this->trans('Allow admin to add categories',array(),'Modules.categorie.Admin');
        $this->ps_versions_compliancy=array('min'=>'1.7','max'=>_PS_VERSION_);

        $this->templateFile = 'module:categorietest/views/templates/hook/categorietest.tpl';
    }

    public function install()

    {
        $sql="
        CREATE TABLE IF NOT EXISTS ps_categorie(
              cat_id int(11) NOT NULL AUTO_INCREMENT,
              cat_ref VARCHAR(255) NOT NULL,
              cat_name VARCHAR(255) NOT NULL,
              cat_desc VARCHAR(255) NOT NULL,
              cat_img VARCHAR(255) NOT NULL,
              PRIMARY KEY (cat_id)
            )
        ";
        return parent::install() &&
            Db::getInstance()->execute($sql);
    }

    public function uninstall()
    {
        return parent::uninstall() &&
           Db::getInstance()->execute('DROP TABLE IF EXISTS`'._DB_PREFIX_.'categorie`');
    }

    public function renderWidget($hookName, array $configuration)
    {
        $this->smarty->assign($this->getWidgetVariables($hookName,$configuration));
        return $this->fetch($this->templateFile);
    }



    public function getWidgetVariables($hookName, array $configuration)
    {
        $message=null;
        $categorieList=null;
        $categorieId=null;
        //update data
        $id=null;
        $ref=null;
        $nom=null;
        $desc=null;
        $img=null;

        if(Tools::isSubmit('cat_ref','cat_name','cat_desc','cat_img')){
            $categorietest=new CategorietestClass();
            $categorietest->cat_ref=Tools::getValue('cat_ref');
            $categorietest->cat_name=Tools::getValue('cat_name');
            $categorietest->cat_desc=Tools::getValue('cat_desc');
            $categorietest->cat_img=Tools::getValue('cat_img');
            if($categorietest->save()){
                $categorieList= array(
                    'message'=>$message.' '.$categorietest->cat_name
                );
                //Tools::redirect('http://localhost/prestafab/prestashop/module/navbar/categorie');

            }
            echo '  <div class="alert alert-success shadow" role="alert" style="border-left:#155724 5px solid; border-radius: 0px">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" style="color:#155724">&times;</span>
                    </button>
                    <div class="row">
                        <div class="col-md-2">
                            <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" class="m-1 bi bi-shield-fill-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm2.854 6.354a.5.5 0 0 0-.708-.708L7.5 8.793 6.354 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                            </svg>
                        </div>
                        <div class="col-md-10">
                            <p style="font-size:18px" class="mb-0 font-weight-light"><b class="mr-1">Succès !</b> La catégorie '.$categorietest->cat_name.' a été ajoutée avec succès !</p>
                        </div>      
                    </div>
                </div>
        ';

        }
            if(Tools::isSubmit('delete','id')){
                $categorieId=(int)Tools::getValue('id');
                $res = Db::getInstance()->executeS('SELECT `cat_id` FROM `'._DB_PREFIX_.'categorie` where cat_id =' .$categorieId);
               if ($res) {
                   foreach ($res as $row) {
                       $p = new CategorietestClass($row['cat_id']);
                       $p->delete();
                   }
               }
            }
            if(Tools::isSubmit('catRef','catName','catDesc')){
                $id=(int)Tools::getValue('id');
                //echo "$id";
                $ref =Tools::getValue('catRef');
                //echo "$ref";
                $nom =Tools::getValue('catName');
                $desc =Tools::getValue('catDesc');
                $img=Tools::getValue('catImg');
                $query = "UPDATE `"._DB_PREFIX_."categorie` SET cat_ref ='$ref', cat_name='$nom', cat_desc='$desc', cat_img='$img' WHERE cat_id ='$id'";
                Db::getInstance()->Execute($query);
            }
        $categories = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'categorie`');
        return ['categories'=>$categories,'categorieList'=>$categorieList];
    }
}
