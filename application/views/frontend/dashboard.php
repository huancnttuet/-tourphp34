


<div class="slide-wrapper">
    
   <div id="homepage-feature" class="carousel slide">
      <ol class="carousel-indicators">
         <li data-target="#homepage-feature" data-slide-to="0" class="active"></li>
         <li data-target="#homepage-feature" data-slide-to="1"></li>
         <li data-target="#homepage-feature" data-slide-to="2"></li>
         <li data-target="#homepage-feature" data-slide-to="3"></li>

      </ol>
     
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
          
         <div class="item active" style="background-image:url(http://dulichviet.com.vn/images/bandidau/banner/cover%20new.jpg.png)">
            <div class="carousel-caption">
               <h1><a href="">Sapa-Lũng Cú-Fansifan</a></h1>
               <p>Khám phá văn hóa, ẩm thực của miền núi Tây Bắc</p>
               <p><a class="btn btn-large btn-primary" href="#">Learn more</a>
               </p>

            </div>
         </div>
         <div class="item" style="background-image:url(http://dulichviet.com.vn/images/bandidau/CH%C3%82U%20%C3%82U/M%E1%BB%B8/%5EAFBD550180667DD3AC596C644426654997A6D472A8EB2E96BE%5Epimgpsh_fullsize_distr.png)">
            <div class="carousel-caption">
               <h1>Sapa-Lũng Cú-Fansifan</h1>
               <p>Khám phá văn hóa, ẩm thực của miền núi Tây Bắc</p>
               <p><a class="btn btn-large btn-primary" href="#">Learn more</a>
               </p>
            </div>
         </div>
         <div class="item" style="background-image:url(http://lorempixel.com/1500/600/abstract)">
            <div class="carousel-caption">
               <h1>Sapa-Lũng Cú-Fansifan</h1>
               <p>Khám phá văn hóa, ẩm thực của miền núi Tây Bắc</p>
               <p><a class="btn btn-large btn-primary" href="#">Learn more</a>
               </p>
            </div>
         </div>    
         <div class="item" style="background-image:url(http://placehold.it/1500x600)">
            <div class="carousel-caption">
               <h1>Percentage-based sizing</h1>
               <p>With "mobile-first" there is now only one percentage-based grid.</p>
               <p><a class="btn btn-large btn-primary" href="#">Browse gallery</a>
               </p>
            </div>
         </div>
             
      </div>
      <!-- /.carousel-inner -->
      <!-- Controls -->
      <a class="left carousel-control" href="#homepage-feature" data-slide="prev">
        <span class="fa fa-angle-left"></span>
      </a>
      <a class="right carousel-control" href="#homepage-feature" data-slide="next">
        <span class="fa fa-angle-right"></span>
      </a>
   </div>
   <!-- /#homepage-feature.carousel -->
   <div class="red">
     
     <div class="red-content">
        <form action="dashboard_submit" method="post" accept-charset="utf-8" class="fix">
            <div class=""><h3>Tìm kiếm chuyến bay</h3></div>
            <div class="">
                <label>Nơi khởi hành</label>
                <input class="form-control" type="text" name="" placeholder="Chọn thành phố, sân bay đi">
            </div>
            <div>
                <label>Nơi đến</label>
                <input class="form-control" type="text" name="" placeholder="Chọn thành phố, sân bay đến">
            </div>
            <div>
                <button class="btn-default" type="submit">Tìm kiếm</button>
            </div>
        </form>
     </div>
     
     
   </div>
          
</div>
<!-- /.container.slide-wrapper -->
</div>
<div class="container-fluid">
                <div class="row">
                    <?php 
                    
                    if(isset($data) && $data!=null){
                        foreach ($data as $key => $r){              
                    ?>
                    <div class="col-md-4">
                        <div class="card">

                            <div class="header">
                               <a href="<?php echo base_url().'home/detail?id='.$r->id_tour ;?>" ><h4 class="title"> <?php echo $r->tentour;?></h4>
                                <p class="category"> <?php echo $r->gia; ?> VNĐ</p>
                                </a>
                            </div>
                            <div class="content">
                                <div class="image">
                                    <a href="<?php echo base_url().'home/detail?id='.$r->id_tour ;?>">
                                    <img src="<?php echo $r->image ?>" alt="">
                                    </a>
                                </div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> <?php echo $r->noi_khoi_hanh; ?>
                                        <i class="fa fa-circle text-danger"></i> <?php echo $r->diem_den ?>
                                        <i class="fa fa-circle text-warning"></i> <?php echo $r->ngay_khoi_hanh ?>
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> <?php if($r->loai_tuyen == 2){
                                          echo 'Nước ngoài';
                                        } else 
                                        {
                                          echo 'Trong nước';
                                        }?>
                                    </div>
                                    <div class="right">
                                        <button type="button" class="btn btn-success ">Đặt vé</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                    }
                }
                ?>
             <!--        <div class="col-md-4">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Đồ sơn - Cát Bà</h4>
                                <p class="category">5.000.000 VNĐ</p>
                            </div>
                            <div class="content">
                                <div class="image">
                                    <img src="http://lavenderhotelvn.com/images/cat-ba-island-tours-with-8081.jpg" alt="">
                                </div>
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Bounce
                                        <i class="fa fa-circle text-warning"></i> Unsubscribe
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                    </div>
                                    <div class="right">
                                        <button type="button" class="btn btn-success ">Đặt vé</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Email Statistics</h4>
                                <p class="category">Last Campaign Performance</p>
                            </div>
                            <div class="content">
                                <div class="image">
                                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/0a/fb/67/02/cat-ba-sails-of-indochine.jpg" alt="">
                                </div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Bounce
                                        <i class="fa fa-circle text-warning"></i> Unsubscribe
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                    </div>
                                    <div class="right">
                                        <button type="button" class="btn btn-success ">Đặt vé</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                   
                </div>
            
</div>


<style type="text/css" media="screen">
    .right{
        float: right;
    }
    .slide-wrapper {
    position: relative
}

.red {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.red-content {
    width: 100%;
    height: 300px;
    background: red;
    color: #fff;
}
@media (min-width: 768px) { 
    .carousel-caption {
        text-align: left;
        padding-right: 300px;
    }
    .red {
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        padding: 20px 0;
        margin-left: -375px;
    }
    .red {
        width: 750px
    }
    .red-content {
        width: 300px;
        float: right;
        height: 100%;
        background: #8BC4F0;
        color: #fff;
        margin-right:15px;
    }
}
@media (min-width: 992px) { 
    .red {
        width: 970px;
        margin-left: -485px;
    }
}
@media (min-width: 1200px) { 
    .red {
        width: 1170px;
        margin-left: -585px;
    }
}

/* MISC */
#homepage-feature .item {
    overflow: hidden;
    height: 400px;
    background-color: transparent;
    background-size: cover;
}
#homepage-feature > .carousel-control {
    width: 30px;
    font-size: 40px;
    color: #fff;
    text-shadow: none;
    filter: none;
    opacity: 1;
}
#homepage-feature > .carousel-control span {
    position: absolute;
    top: 50%;
    margin-top: -30px;
    width: 100%;
    text-align: center;
    display: block;
}
.fix{
    padding: 5px;
    margin: 5px;
   
}
</style>