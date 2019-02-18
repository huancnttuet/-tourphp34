<?php

  /**
   *
   */
class Home extends MY_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('tour_model');
        $this->load->model('image_model');
    }

    function index()
    {
      $data = $this->tour_model->get('*', array(), array(), 0, 10, array('id_tour'=>'DESC'));
      parent::_render_frontend_view('frontend/dashboard', array('data'=>$data));
    }

    function trong_nuoc(){
      $data = $this->tour_model->get_all('*', array('loai_tuyen'=>1), array(), array('id_tour'=>'DESC'));
      parent::_render_frontend_view('frontend/table_tours', array('data'=>$data));
    }
    function nuoc_ngoai(){
      $data = $this->tour_model->get_all('*', array('loai_tuyen'=>2), array(), array('id_tour'=>'DESC'));
      parent::_render_frontend_view('frontend/table_tours', array('data'=>$data));
    }

    function search(){
      $search = $this->input->post('search');
      $data = $this->tour_model->get_all('*', array(), array('tentour'=>$search), array());
      parent::_render_frontend_view('frontend/table_tours', array('data'=>$data));
    }

    function detail(){
      $id_tour = $this->input->get('id');
      $data = $this->tour_model->get_all('*', array('id_tour'=>$id_tour), array(), array());
      $data2 = $this->image_model->get_all('*', array('id_tour'=>$id_tour), array(), array());

      parent::_render_frontend_view('frontend/tour_detail', array('data'=>$data, 'data2'=>$data2));
    }
}
