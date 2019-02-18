
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="header">
								<h4 class="title">Danh sách các tour</h4>
								<p class="category">Here is a subtitle for this table</p>
							</div>
							<div class="content table-responsive table-full-width">
								<table class="table table-hover table-striped">
									<thead>
									<th>ID</th>
									<th>Tên tour</th>
									
									<th>Ảnh</th>
									<th>Ảnh1</th>
									<th>Ảnh2</th>
									<th>Ảnh3</th>
									<th>Ảnh4</th>
									<th>Ảnh5</th>
									<th>Ảnh6</th>
									<th>Ngày tạo</th>
									<th>Ngày sửa</th>
									</thead>
									<tbody>
									<?php
									if(isset($data) && $data!=null){
										foreach ($data as $key => $r){
											
									?>
									<tr>
										<td> <?php echo $r->id_tour; ?></td>
										<td> <?php echo $r->tentour; ?></td>
										
										<td> <img class="img-thumbnail img-circle" src="<?php echo $data2[$key]->path ?>"></td>
										<td> <img class="img-thumbnail img-circle" src="<?php echo $data2[$key]->img1 ?>"></td>
										<td> <img class="img-thumbnail img-circle" src="<?php echo $data2[$key]->img2 ?>"></td>
										<td> <img class="img-thumbnail img-circle" src="<?php echo $data2[$key]->img3 ?>"></td>
										<td> <img class="img-thumbnail img-circle" src="<?php echo $data2[$key]->img4 ?>"></td>
										<td> <img class="img-thumbnail img-circle" src="<?php echo $data2[$key]->img5 ?>"></td>
										<td> <img class="img-thumbnail img-circle" src="<?php echo $data2[$key]->img6 ?>"></td>
										

										<td> <?php echo $r->date_created; ?></td>
										<td> <?php echo $r->date_updated; ?></td>
										<td><a class="btn-danger btn" href="<?php echo base_url()?>admin/tour?id=<?php echo $r->id_tour; ?>">Xóa</a></td>
										<td><a class="btn-info btn" href="<?php echo base_url()?>admin/tour/edit?id=<?php echo $r->id_tour; ?>">Sửa</a></td>
									</tr>
									<?php } }?>
									</tbody>
								</table>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<style>
			.img-thumbnail{
				height: 180px;
				width: 180px;
			}
			.btn{
				color: #1f1d1d;
			}
		</style>






