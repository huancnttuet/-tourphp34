<div class="container-fluid">
	<div class="page-header">
		<h3><?php echo $data[0]->tentour ?></h3>
		<p> <?php echo $data[0]->mota ?></p>
	</div>
	<?php var_dump($data);
			var_dump($data2);
			 ?>
	<div class="row">
		<div class="col-lg-8">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			    <li data-target="#myCarousel" data-slide-to="3"></li>
			    <li data-target="#myCarousel" data-slide-to="4"></li>
			    <li data-target="#myCarousel" data-slide-to="5"></li>
			    <li data-target="#myCarousel" data-slide-to="6"></li>
			    
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
			      <img src="<?php echo $data2[0]->img1; ?>">
			    </div>

			    <div class="item">
			      <img src="<?php echo $data2[0]->img2; ?>" alt="Chicago">
			    </div>

			    <div class="item">
			      <img src="<?php echo $data2[0]->img3; ?>">
			    </div>
			    <div class="item">
			      <img src="<?php echo $data2[0]->img4; ?>">
			    </div>
			    <div class="item">
			      <img src="<?php echo $data2[0]->img5; ?>">
			    </div>
			    <div class="item">
			      <img src="<?php echo $data2[0]->img6; ?>">
			    </div>
			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="row bg-danger text-success text-center">
				<div class="col-lg-10">
					<h1>Giá từ: <?php echo $data[0]->gia ?> VNĐ</h1>
					<div class="form-group">
						<div class="input-group dropdown">
							<div class="input-group-addon bg-info ">
								<i class="fa fa-calendar text-success"></i>
								<input type="date" class=" text-success" name="" size="5" value="" placeholder="">
							</div>
						</div>
						<div class="input-group dropdown">
							<div class="input-group-addon bg-info">
								<i class="fa fa-users text-success"></i>
								<input type="text" class=" text-success" name="" size="5" value="" placeholder="">
								<span>người</span>
							</div>
						</div>
						<div class="btn btn-primary">
							Đặt vé
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<ul class="list-group list-group-item-info">
						<li class="list-group-item">
							<a href="">Lịch trình</a>
						</li>
						<li class="list-group-item">
							<a href="">Dịch vụ đi kèm</a>
						</li>
						<li class="list-group-item">
							<a href="">Lịch khởi hành</a>
						</li>
						<li class="list-group-item">
							<a href="">Ghi chú</a>
						</li>
						<li class="list-group-item">
							<a href="">Bình luận</a>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</div>
	<div class="row page-header">
		<h3>Lịch trình tour</h3>
	</div>
	<div class="content-row">
                    <h2 class="content-row-title">TimeLine</h2>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="timeline">
                              <dl>
                                <dt>Apr 2014</dt>
                                <dd class="pos-right clearfix">
                                  <div class="circ"></div>
                                  <div class="time">Apr 14</div>
                                  <div class="events">
                                    <div class="pull-left">
                                      <img class="events-object img-rounded" src="dist/img/photo-1.jpg">
                                    </div>
                                    <div class="events-body">
                                      <h4 class="events-heading">Bootstrap</h4>
                                      <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p>
                                    </div>
                                  </div>
                                </dd>
                                <dd class="pos-left clearfix">
                                  <div class="circ"></div>
                                  <div class="time">Apr 10</div>
                                  <div class="events">
                                    <div class="pull-left">
                                      <img class="events-object img-rounded" src="dist/img/photo-2.jpg">
                                    </div>
                                    <div class="events-body">
                                      <h4 class="events-heading">Bootflat</h4>
                                      <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p>
                                    </div>
                                  </div>
                                </dd>
                                <dt>Mar 2014</dt>
                                <dd class="pos-right clearfix">
                                  <div class="circ"></div>
                                  <div class="time">Mar 15</div>
                                  <div class="events">
                                    <div class="pull-left">
                                      <img class="events-object img-rounded" src="dist/img/photo-3.jpg">
                                    </div>
                                    <div class="events-body">
                                      <h4 class="events-heading">Flat UI</h4>
                                      <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p>
                                    </div>
                                  </div>
                                </dd>
                                <dd class="pos-left clearfix">
                                  <div class="circ"></div>
                                  <div class="time">Mar 8</div>
                                  <div class="events">
                                    <div class="pull-left">
                                      <img class="events-object img-rounded" src="dist/img/photo-4.jpg">
                                    </div>
                                    <div class="events-body">
                                      <h4 class="events-heading">UI design</h4>
                                      <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p>
                                    </div>
                                  </div>
                                </dd>

                              </dl>
                            </div>
                          </div>
                       </div>
                    </div>
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
