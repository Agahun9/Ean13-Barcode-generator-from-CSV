<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="icon" type="image/x-icon" href="../../img/crm.png" />
    <link href="{{ asset( '../css/global.css' ) }}" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/204a798f93.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>
<?php
session_start();
if($_SESSION["verify"]!=1){
?>

<style>
    html,body{
    background-image: url('/adminquery/login-bg.jpg');
    background-size: cover;
    height: 100%;
    }
    
    .container{
    height: 100%;
    align-content: center;
    }
    
    .card{
    height: 370px;
    margin-top: auto;
    margin-bottom: auto;
    width: 400px;
    background-color: rgba(0,0,0,0.5) !important;
    }
    
     
    .card-header h3{
    color: white;
    }
    
    
    .input-group-prepend span{
    width: 50px;
    background-color: #FFC312;
    color: black;
    border:0 !important;
    }
    

    
    

    </style>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Zaloguj się</h3>
			</div>
			<div class="card-body">
				<form action="/adminquery/login.php" method="post">
                  
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="login" class="form-control" placeholder="Login">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="haslo" class="form-control" placeholder="Hasło">
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn btn-warning float-right">
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>












<?php
}
if($_SESSION["verify"]==1){

?>
<body>

    <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow" style="position: relative;">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0 ml-3" href="{{ url('homepage') }}"><img class="img-responsive"
                style="width:110px;" src="https://funnycase.pl/img/funnycasepl-logo-15281125831.jpg"></a>
        <span class="text-white">Witaj</span>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">

                <a class="nav-link" href="/adminquery/logout.php">Sign out</a>
            </li>



        </ul>


    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-md-block bg-light sidebar h-100 d-inline-block">
                <div class="sidebar-sticky mt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="/adminquery/ean/">
                                <i class="fas fa-home h3"></i>
                                <span class="ml-2">Ean Generator</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/adminquery/index.php">
                                <i class="fas fa-cogs h3"></i>
                                <span class="ml-2">Admin Panel</span>
                            </a>
                        </li>
                        
                  
                    </ul>
                </div>
            </nav>

            </main>
            <div class="mt-5">
                <h2>Barcode generator 32x20mm</h2>
                <br>
            <form enctype="multipart/form-data" action="EAN.php" method="POST">
                <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="customFile" name="plik">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <input type="hidden" name="MAX_FILE_SIZE" value="50000" />
                <input type="submit" class="btn btn-danger" value="Wyślij plik" />
            </form>
            <br>
            <span>Download a example CSV file</span> <a href="example.csv">click here to download</a>
        </div>
        </div>
        
    </div>
    </div>
</body>

<script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        </script>
        
</html>
<?php
    }