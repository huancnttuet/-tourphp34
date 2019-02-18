<?php 
/**
 * summary
 */
class book extends MY_Controller
{
    /**
     * summary
     */
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
}


 ?>