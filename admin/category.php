<?php
include_one('category_backend.php'); 
 ?>
 	<div class="container">
 		<?php include_one('layout.php'); ?>
 		<div class="row mt-4">
 			<div class="col-md-10 alert fade <?php echo isset($_SESSION['sucess'])?'show alert-success':'alert-warning' ?>">
 				<button class="btn close" data-dismiss="alert">
 					&times;
 				</button>
 			</div>
 			<div class="col-md-2">
 				<button class="btn btn-primary" data-target="#createModel" data-toggle="model">
 					Create New Category
 				</button>
 				
 			</div>
 			
 		</div>
 		<div calss="row mt-4">
 			<div class="col-md-12">
 				<div class="table-responsive">
 					<table class="table table-hover">
 						<tr>
 							<th>Name</th>
 							<th>Name Myanmar</th>
 							<th>Action</th>
 						</tr>
 						<?php 
 							$num_row = mysqli_num_row($result);
 							if($num_rows>0);
 							while ($row = mysqli_fetch_assoc($result)): 
 							 	
 							  ?>
 							  <tr>
 							  		<td><?php echo $row['name']; ?></td>
 							  		<td><?php echo $row['name_mm']; ?></td>
 							  		<td>
 							  			<a href="<?php echo $_SERVER['PHP_SELF']. '?id='.$row['id'];?>">Edit</a>
 							  		</td>
 							  </tr>
 							<?php endwhile;endif;?>
 					</table>
 					
 				</div>
 				
 			</div>
 			
 		</div>
 		<div class="model fade" id="createModal">
 			<div class="modal-dialog">
 				<div class="modal-contact">
 					<div class="modal-body">
 						<h4>Category</h4>
 						<form class="form-horizontal" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
 							<div class="form-group-row">
 								<label class="control-label col-md-2" for="name">Name</label>
 								<div class="col-md-8">
 									<input class="form-control" type="text" name="name" id="name"/>
 								</div>	
 							</div>
 							<div class="form-group-row">
 								<label class="control-label col-md-2" for="name_mm">Name Myanmar</label>
 								<div class="col-md-8">
 									<input class="form-control" type="text" name="name_mm" id="name"/>
 								</div>	
 							</div>
 							<div class="form-group text-center">
 								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 							</div>
 						</form>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 	<?php 
 	//session_unset();
 	 ?>