    
<div class="content">
    <div class="left">
        <div class="card">
            <div class="header">
                <h4 class="title">Sửa tour</h4>
            </div>
            <div class="content">
                <?php
                    $CI =& get_instance();
                    if ($CI->session->flashdata('code')) {
                    if ($CI->session->flashdata('code')=='1') {
                        echo '<div class="alert alert-success" role="alert">'.$CI->session->flashdata('message').'</div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">'.$CI->session->flashdata('message').'</div>';
                    }
                    }
                    // $index = 0;
                    // foreach ($data as $key => $r) {
                    //     if($r->id_tour == )
                    // }
                ?>
                <form action="<?php echo base_url();?>admin/tour" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Tên tour</label>
                                <input type="text" class="form-control" name="name_tour" placeholder="Tên tour" value="<?php echo  $data[0]->tentour ?>">
                            </div>
                        </div>
                       
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Giá</label>
                                <input type="text" class="form-control" name="price" placeholder="0000000VND" value="<?php echo  $data[0]->gia ?>">
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Địa điểm</label>
                                <input type="text" class="form-control" name="address"placeholder="Home Address" value="<?php echo  $data[0]->diadiem?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Ảnh</label>
                                <img class="img-thumbnail" src="<?php echo base_url() ?>uploads/<?php echo $data[0]->image ?>">
                                <input type="file" class="form-control" name="picture">
                            </div>
                        </div>
                       
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Lịch trình</label>
                                <textarea rows="5" class="form-control" name="schedule" placeholder="Here can be your description"><?php    ?></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btn-fill pull-right" name="submit">Xác nhận</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>  
    </div>
</div>




