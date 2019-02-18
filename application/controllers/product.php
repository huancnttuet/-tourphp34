<?php

  /**
   *
   */
class product extends MY_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
    }

    function index()
    {
      //$data = $this->product_model->get('*', array(), array(), 0, 10, array('id_tour'=>'DESC'));
      parent::_render_frontend_view('frontend/product_detail', null);
    }

   
}
