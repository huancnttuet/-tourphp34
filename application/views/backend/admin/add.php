
<div class="content">
    <div class="left">
        <div class="card">
            <div class="header">
                <h4 class="title">Thêm tour</h4>
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
                ?>
                <form method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Tên tour</label>
                                <input type="text" class="form-control" name="name_tour" placeholder="Tên tour" value="">
                            </div>
                        </div>
                       <div class="col-md-3">
                            <div class="form-group">
                                <label>Giá</label>
                                <input type="text" class="form-control" name="price" placeholder="Company" value="0.000.000VNĐ">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nơi khởi hành</label>
                                <input type="text" class="form-control" name="noi_khoi_hanh" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Điểm đến</label>
                                <input type="text" class="form-control" name="diem_den" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Loại tuyến</label>
                                <select name="loai_tuyen" class="form-control">
                                    <option value="1">Trong nước</option>
                                    <option value="2">Nước ngoài</option>
                                </select>
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Ngày khởi hành</label>
                                <input type="date" class="form-control" name="ngay_khoi_hanh" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Địa điểm</label>
                                <input type="text" class="form-control" name="address" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Ảnh đại diện</label>
                                <input type="file" class="form-control" name="picture">
                            </div>
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Ảnh1</label>
                                <input type="file" class="form-control" name="img1">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Ảnh2</label>
                                <input type="file" class="form-control" name="img2">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Ảnh3</label>
                                <input type="file" class="form-control" name="img3">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Ảnh4</label>
                                <input type="file" class="form-control" name="img4">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Ảnh5</label>
                                <input type="file" class="form-control" name="img5">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Ảnh6</label>
                                <input type="file" class="form-control" name="img6">
                            </div>
                        </div>
                       
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" name="mota"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Lịch trình</label>
                                <div>Ngày 1 <input type="text" class="form-control" name="" value="" placeholder=""></div>
                                <div>Ngày 2 <input type="text" class="form-control" name="" value="" placeholder=""></div>
                                <div>Ngày 3 <input type="text" class="form-control" name="" value="" placeholder=""></div>
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




