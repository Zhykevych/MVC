<?php
/**
 * Created by PhpStorm.
 * User: Exon
 * Date: 27.02.2016
 * Time: 19:22
 */

class Controller{
    protected $data;

    protected $model;

    protected $params;

    public function getData()
    {
        return $this->data;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function __construct($data = array()){
        $this->data = $data;
        $this->params = App::getRouter()->getParams();
    }
}