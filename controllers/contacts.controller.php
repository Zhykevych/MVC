<?php
/**
 * Created by PhpStorm.
 * User: Exon
 * Date: 28.02.2016
 * Time: 16:09
 */

class ContactsController extends Controller{

    public function __construct($data = array())
    {
        parent::__construct($data);
        $this->model = new Message();
    }

    public function index(){
        if ( $_POST){
            if ( $this->model->save($_POST) ){
                Session::setFlash('Thank you! Your message was sent successfully');
            }
        }

    }

    public function admin_index(){
        $this->data = $this->model->getList();
    }
}