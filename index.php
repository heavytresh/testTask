<!DOCTYPE html>
<html>
<head>
	<title>Test Task Webinse</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
        
	<script type="text/javascript">
    	 var url = "http://testtask.local.com/";
        </script>

        <script src="/js/item-ajax.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
		    <div class="col-lg-12 margin-tb">					
		        <div class="pull-left">
		            <h2>CRUD Information about people</h2>
		        </div>
		    </div>
		</div>
    <div class="pull-right">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">
					  Add people 
				</button>
		        </div>
		<table class="table table-bordered">
			<thead>
			    <tr>
				<th>First Name</th>
				<th>Second Name</th>
                                <th>E-mail</th>
				<th width="140px">Action</th>
			    </tr>
			</thead>
			<tbody>
			</tbody>
		</table>
            
          <!-- Create -->
		<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">Add people</h4>
		      </div>

		      <div class="modal-body">
		      		<form data-toggle="validator" action="api/create.php" method="POST">
		      			<div class="form-group">
							<label class="control-label" for="FirstName">First Name:</label>
                                                        <input type="text" maxlength="20" name="FirstName" class="form-control" data-error="Please enter first name." required />
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<label class="control-label" for="SecondName">Second Name:</label>
                                                        <input type="text" maxlength="20" name="SecondName" class="form-control" data-error="Please enter second name." required></input>
							<div class="help-block with-errors"></div>
						</div>

                                    <div class="form-group">
							<label class="control-label" for="Email">E-mail:</label>
                                                        <input type="email" maxlength="30" name="Email" class="form-control" data-error="Please enter e-mail." required></text>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn crud-submit btn-success">Submit</button>
						</div>
		      		</form>
		      </div>
		    </div>
		  </div>
		</div>

		<!-- Edit -->
		<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
		      </div>

		      <div class="modal-body">
		      		<form data-toggle="validator" action="api/update.php" method="put">
		      			<input type="hidden" name="id" class="edit-id">

		      			<div class="form-group">
							<label class="control-label" for="FirstName">First Name:</label>
                                                        <input type="text" maxlength="20" name="FirstName" class="form-control" data-error="Please enter first name." required />
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<label class="control-label" for="SecondName">Second Name:</label>
                                                        <input name="SecondName" maxlength="20" class="form-control" data-error="Please enter second name." required></input>
							<div class="help-block with-errors"></div>
						</div>
                                        
                                        <div class="form-group">
							<label class="control-label" for="Email">Email:</label>
                                                        <input name="Email" maxlength="30" class="form-control" data-error="Please enter e-mail." required></input>
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
						</div>
		      		</form>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
</body>
</html>