<?php
include 'foo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD приложение на PHP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col mt-1">
				<button class="btn btn-success mb-1" data-toggle="modal" data-target="#create"><i class="fa fa-user-plus"></i></button>
				<table class="table shadow ">
					<thead class="thead-dark">
						<tr>
							<th data-type="integer">ID</th>
							<th data-type="text">Name</th>
							<th data-type="text">Email</th>
							<th>Action</th>
						</tr>
						<tbody>
						<?php foreach($result as $res) { ?>
						<tr>
							<td><?php echo $res->id; ?></td>
							<td><?php echo $res->name; ?></td>
							<td><?php echo $res->email; ?></td>
							<td>
								<a href="?edit=<?php echo $res->id; ?>" class="btn btn-success btn-sm" class="fa fa-edit" data-toggle="modal" data-target="#edit<?php echo $res->id; ?>"></i></a> 
								<a href="?delete=<?php echo $res->id; ?>" class="btn btn-danger btn-sm" class="fa fa-trash" data-toggle="modal" data-target="#delete<?php echo $res->id; ?>"></i></a>
							</td>
						</tr>
						</tbody>
							<!-- Modal edit-->
						<div class="modal fade" tabindex="-1" role="dialog" id="edit<?php echo $res->id; ?>">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content shadow">
							<div class="modal-header">
								<h5 class="modal-title">Изменить пользователя</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="?id=<?php echo $res->id; ?>" method="post">
									<div class="form-group">
										<input type="text" class="form-control" name="edit_name" value="<?php echo $res->name; ?>" placeholder="Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="edit_email" value="<?php echo $res->email; ?>" placeholder="Email">
									</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
								<button type="submit" name="edit-submit" class="btn btn-primary">Изменить</button>
							</div>
								</form>
							</div>
						</div>
						</div>
							<!-- Modal delete -->
						<div class="modal fade" tabindex="-1" role="dialog" id="delete<?php echo $res->id; ?>">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content shadow">
							<div class="modal-header">
								<h5 class="modal-title">Удалить запись</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-footer">
								<form action="?id=<?php echo $res->id; ?>" method="post">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
								<button type="submit" name="delete" class="btn btn-danger">Удалить</button>
							</div>
								</form>
							</div>
						</div>
						</div>
						<?php } ?>
					</thead>
				</table>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="create">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content shadow">
	      <div class="modal-header">
	        <h5 class="modal-title">Добавить пользователя</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="" method="post">
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="name" value="" placeholder="Name">
	        	</div>
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="email" value="" placeholder="Email">
	        	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
	        <button type="submit" name="add" class="btn btn-primary">Добавить</button>
	      </div>
	  		</form>
	    </div>
	  </div>
	</div>


<script src="/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
</body>
</html>