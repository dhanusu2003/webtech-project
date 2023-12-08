<!DOCTYPE html>
<html>
<head>
	<style>
form
		{
			width: 40%;
 			margin: 50px auto 0px;
  			color: white;
  			background: #5F9EA0;
  			text-align: center;
 			border: 1px solid #B0C4DE;
  			border-bottom: none;
  			border-radius: 10px 10px 10px 10px;
  			padding: 20px;
		}  </style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<title>File upload</title>
</head>
<body>
	<div class="container mt-5">
		<h2 style="text-align:center">Upload a file</h2>
		 <form action="upload.php" method="POST" enctype="multipart/form-data"> 
			<form method="post" enctype="multipart/form-data" id="form">
                  <label id='f1'>Choose file</label>
                  <input type="file" name="fi" required><br><br>
				  <label id='f1'>Enter the Standard</label>
                  <input type="text" name="sd" required><br><br>
                  <label id='f1'>Enter the subject</label>
                  <input type="text" name="sj" required><br><br>
                  <label id='f1'>Enter the Discription</label>
                  <input type="text" name="dis" required> <br><br>
				  <input type="submit" name="submit" id="but" autocomplete="off"><br>
		</form>
	</div>
</body>
</html>