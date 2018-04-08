<!DOCTYPE html>
<html>

<head>
	 <?php 
        
        session_start();
        if(! isset($_SESSION['logged_in'])){
            
            header("Location:../login.html");
        }
    ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <?php include '../includes/admin-header-path.php';?>


</head>

<body>

<div class="wrapper">

    <div class="sidebar" data-background-color="white" data-active-color="danger">
<!-- Sidebar start -->
       <?php include 'sidebar.php';?>
<!-- Sidebar end -->
    </div>

    <div class="main-panel">
        <div class="content">
            <div class="container-fluid ">
                <div class="row">
                   




                    
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 nopad">
                            <div id="table_div"></div>
                        </div>
                    </div>
                </div>     
                
                </div>
            </div>
    


        <footer class="footer">
           <!-- footer start -->
       <?php include 'footer.php';?>
<!-- footer end -->
        </footer>

    </div>
</div>



	<!-- Include JQuery - A JS library to make life easier -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	 crossorigin="anonymous"></script>

	<script type="text/javascript" src="../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>

	<!-- Include our app.js file, this will contain the logic on frontend -->
	<script src="../js/path.js"></script>
	<script src="../js/app_create.js"></script>

</body>

</html>