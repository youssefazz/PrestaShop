<?php

class MatiereClass extends ObjectModel{

    public $mat_id;
    public $mat_name;
    public $mat_price;
    public $mat_img;
    public $mat_desc;
    public $cat_id;

    public static $definition = array(
        'table' => 'matiere',
        'primary' => 'mat_id',
        'multilang' => false,
        'fields' => array(
            'mat_name' => array('type' => self::TYPE_STRING,'required'=>true ),
            'mat_price' => array('type' => self::TYPE_FLOAT,'required'=>true ),
            'mat_img' => array('type' => self::TYPE_STRING,'required'=>true ),
            'mat_desc' => array('type' => self::TYPE_STRING,'required'=>true ),
            'cat_id' => array('type' => self::TYPE_INT,'required'=>true ),

        )
    );
}

