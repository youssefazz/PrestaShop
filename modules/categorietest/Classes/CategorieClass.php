<?php

class CategorieTestClass extends ObjectModel{

    public $cat_id;
    public $cat_ref;
    public $cat_name;
    public $cat_desc;
    public $cat_img;

    public static $definition = array(
        'table' => 'categorie',
        'primary' => 'cat_id',
        'multilang' => false,
        'fields' => array(
            'cat_ref' => array('type' => self::TYPE_STRING,'required'=>true ),
            'cat_name' => array('type' => self::TYPE_STRING,'required'=>true ),
            'cat_desc' => array('type' => self::TYPE_STRING,'required'=>true ),
            'cat_img' => array('type' => self::TYPE_STRING,'required'=>true ),
        )
    );
}
