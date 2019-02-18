<div class="container-fluid">
                <div class="row">
                    <?php 
                    
                    if(isset($data) && $data!=null){
                        foreach ($data as $key => $r){              
                    ?>  
                    <div class="col-md-4">
                        <div class="card">

                            <div class="header">
                                <a href=""><h4 class="title"> <?php echo $r->tentour;?></h4>
                                <p class="category"> <?php echo $r->gia; ?></p>
                                </a>
                            </div>
                            <div class="content">
                                <div class="image">
                                    <a href="" title="">
                                    <img src="<?php echo $r->image ?>" alt="">
                                    </a>
                                </div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Bounce
                                        <i class="fa fa-circle text-warning"></i> Unsubscribe
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Khởi hành ngày: <?php echo $r->ngay_khoi_hanh?>
                                    </div>
                                    <a href="" class="btn btn-info">
                                        <span class="pe-7s-paper-plane"></span>Đặt vé
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                    }
                }
                ?>