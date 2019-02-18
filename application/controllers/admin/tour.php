<?php
  /**
   *
   */
class Tour extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('tour_model');
        $this->load->model('image_model');
    }

    public function index()
    {
    	$id_delete = $this->input->get('id');
		$this->tour_model->delete($id_delete);
        $data = $this->tour_model->get('*', array(), array(), 0, 10, array('id_tour'=>'DESC'));
        parent::_render_backend_view('backend/admin/index', array('data'=>$data));
    }

    public function add()
    {
        if (isset($_POST['submit'])) {
            $name_tour = $this->input->post('name_tour');
            $price = $this->input->post('price');
            $address = $this->input->post('address');
            
            $noi_khoi_hanh = $this->input->post('noi_khoi_hanh');
            $diem_den = $this->input->post('diem_den');
            $ngay_khoi_hanh = $this->input->post('ngay_khoi_hanh');
            $loai_tuyen = $this->input->post('loai_tuyen');
            $data =array(
                'tentour'=>$name_tour,
                'gia'=>$price,
                
                'diadiem'=>$address,
                'noi_khoi_hanh'=>$noi_khoi_hanh,
                'diem_den'=>$diem_den,
                'ngay_khoi_hanh'=>$ngay_khoi_hanh,
                'loai_tuyen'=>$loai_tuyen
            );
            $id_folder = $this->tour_model->get_lastid();   

            if(!empty($_FILES['picture']['name']) ){
                if (!is_dir('uploads/'.$id_folder)) {
                    mkdir('./uploads/'.$id_folder, 0777, true);
                }
                $config['upload_path'] = './uploads/'.$id_folder;
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = '10000';
                $config['max_width']  = '10240';
                $config['max_height']  = '7680';
                $config['file_name'] = $_FILES['picture']['name'];
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('picture')) {
                    $uploadData = $this->upload->data();
                    $data['image'] = $data2['path'] = base_url().'uploads/'.$id_folder.'/'.$uploadData['file_name'];
                 
                } else{
                    echo $this->upload->display_errors();exit();
                    $data['image'] = $data2['path'] = '';
                }
            } 
            else {
                $data['image'] = $data2['path']  = '';
            }
            if(!empty($_FILES['img1']['name']) ){
                if (!is_dir('uploads/'.$id_folder)) {
                    mkdir('./uploads/'.$id_folder, 0777, true);
                }
                $config['file_name'] = $_FILES['img1']['name'];
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('img1')) {
                    $uploadData = $this->upload->data();
                    $data2['img1'] = base_url().'uploads/'.$id_folder.'/'.$uploadData['file_name'];
                 
                } else{
                    echo $this->upload->display_errors();exit();
                    $data2['img1'] = '';
                }
            } 
            else {
                $data2['img1'] = '';
            }
            if(!empty($_FILES['img2']['name']) ){
                if (!is_dir('uploads/'.$id_folder)) {
                    mkdir('./uploads/'.$id_folder, 0777, true);
                }
                $config['file_name'] = $_FILES['img2']['name'];
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('img2')) {
                    $uploadData = $this->upload->data();
                    $data2['img2'] = base_url().'uploads/'.$id_folder.'/'.$uploadData['file_name'];
                 
                } else{
                    echo $this->upload->display_errors();exit();
                    $data2['img2'] = '';
                }
            } 
            else {
                $data2['img2'] = '';
            }
            if(!empty($_FILES['img3']['name']) ){
                if (!is_dir('uploads/'.$id_folder)) {
                    mkdir('./uploads/'.$id_folder, 0777, true);
                }
                $config['file_name'] = $_FILES['img3']['name'];
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('img3')) {
                    $uploadData = $this->upload->data();
                    $data2['img3'] = base_url().'uploads/'.$id_folder.'/'.$uploadData['file_name'];
                 
                } else{
                    echo $this->upload->display_errors();exit();
                    $data2['img3'] = '';
                }
            } 
            else {
                $data2['img3'] = '';
            }
            if(!empty($_FILES['img4']['name']) ){
                if (!is_dir('uploads/'.$id_folder)) {
                    mkdir('./uploads/'.$id_folder, 0777, true);
                }
                $config['file_name'] = $_FILES['img4']['name'];
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('img4')) {
                    $uploadData = $this->upload->data();
                    $data2['img4'] = base_url().'uploads/'.$id_folder.'/'.$uploadData['file_name'];
                 
                } else{
                    echo $this->upload->display_errors();exit();
                    $data2['img4'] = '';
                }
            } 
            else {
                $data2['img4'] = '';
            }
            if(!empty($_FILES['img5']['name']) ){
                if (!is_dir('uploads/'.$id_folder)) {
                    mkdir('./uploads/'.$id_folder, 0777, true);
                }
                $config['file_name'] = $_FILES['img5']['name'];
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('img5')) {
                    $uploadData = $this->upload->data();
                    $data2['img5'] = base_url().'uploads/'.$id_folder.'/'.$uploadData['file_name'];
                 
                } else{
                    echo $this->upload->display_errors();exit();
                    $data2['img5'] = '';
                }
            } 
            else {
                $data2['img5'] = '';
            }
            if(!empty($_FILES['img6']['name']) ){
                if (!is_dir('uploads/'.$id_folder)) {
                    mkdir('./uploads/'.$id_folder, 0777, true);
                }
                $config['file_name'] = $_FILES['img6']['name'];
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('img6')) {
                    $uploadData = $this->upload->data();
                    $data2['img6'] = base_url().'uploads/'.$id_folder.'/'.$uploadData['file_name'];
                 
                } else{
                    echo $this->upload->display_errors();exit();
                    $data2['img6'] = '';
                }
            } 
            else {
                $data2['img6'] = '';
            }
            
            
            $id=$this->tour_model->insert($data);
            $id2 = $this->image_model->insert($data2);
            if ($id>0 && $id2 > 0) {
                $this->session->set_flashdata('code', '1');
                $this->session->set_flashdata('message', 'Adding Successfully !!!!');
            } else {
                $this->session->set_flashdata('code', '0');
                $this->session->set_flashdata('message', 'Adding Failed');
            }
            redirect(base_url().'admin/tour/add');
        }
        parent::_render_backend_view('backend/admin/add', null);
    }

    function edit(){
        $id_update = $this->input->get('id');
        $data = $this->tour_model->get_one('*', array('id_tour'=>$id_update), array(), array(''));
         if (isset($_POST['submit'])) {
            $name_tour = $this->input->post('name_tour');
            $price = $this->input->post('price');
            $address = $this->input->post('address');
            
            $data =array(
                'tentour'=>$name_tour,
                'gia'=>$price,
                'diadiem'=>$address
            );
            if(!empty($_FILES['picture']['name'])){
                if (!is_dir('uploads/'.$name_tour)) {
                    mkdir('./uploads/'.$name_tour, 0777, true);
                }
                $config['upload_path'] = './uploads/'.$name_tour;
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = '10000';
                $config['max_width']  = '10240';
                $config['max_height']  = '7680';
                $config['file_name'] = $_FILES['picture']['name'];
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!is_dir('uploads')) {
                    mkdir('./uploads', 0777, true);
                }
                if ($this->upload->do_upload('picture')) {
                  $uploadData = $this->upload->data();
                  $data['image'] = base_url().'uploads/'.$name_tour.'/'.$uploadData['file_name'];
                 
                } else{
                    echo $this->upload->display_errors();exit();
                  $data['image'] = '';
                }
            } 
            else {
                $data['image'] = '';
            }
            
            $id=$this->tour_model->update($data,$id_update);
            
            if ($id>0) {
                $this->session->set_flashdata('code', '1');
                $this->session->set_flashdata('message', 'Adding Successfully !!!!');
            } else {
                $this->session->set_flashdata('code', '0');
                $this->session->set_flashdata('message', 'Adding Failed');
            }
            redirect(base_url().'admin/tour/edit');
        }
        parent::_render_backend_view('backend/admin/edit', array('data'=>$data));
    }
    

    function image(){
        $data = $this->tour_model->get_all('*', array(), array(), array('id_tour'=>'DESC'));
        $data2 = $this->image_model->get_all('*', array(), array(), array('id_tour'=>'DESC'));
        parent::_render_backend_view('backend/admin/image', array('data'=>$data, 'data2'=>$data2));
    }

}
