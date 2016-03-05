<?php
/**
 * Created by PhpStorm.
 * User: Exon
 * Date: 28.02.2016
 * Time: 17:08
 */

class Model{

    protected $db;

    public function __construct(){
        $this->db = App::$db;
    }
}