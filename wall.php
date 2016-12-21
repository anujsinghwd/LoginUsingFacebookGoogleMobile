<?php 
session_start();
if (isset($_SESSION['name'])) :

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  	<script src="js/creatpost.js"></script>
 </head>

 <body>
<nav role="navigation" class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">TextBook</a>
    </div>
  
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
           
        </ul>
        <ul class="nav navbar-nav navbar-right">
        	<li style="padding: 11px;"><span style="font-size: 21px;">Welcome </span><span  id="name"><?php echo $_SESSION['name'];?></span> </li>
            <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> LogOut</a></li>
        </ul>
    </div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			 <form>
                              <div class="form-group">
                              		<textarea class="form-control" name="" id="textarea" cols="40" rows="5"></textarea>
                              </div>
              </form>
              <div>
              	<button type="button" class="btn btn-primary" id="createpost">Create Post</button>
              </div> 
              <?php require_once 'connect.php'; ?>
              <?php 
              $user_id = $_SESSION['id'];
              $sql = "SELECT *FROM posts WHERE user_id = '$user_id' "; 
              $rest = mysqli_query($db,$sql);
                while ($row = mysqli_fetch_array($rest)) :
              ?>
               <div class="panel panel-default" id="panel" style="margin: 8px;">
               			<div class="panel-heading" id="date">Created At : <?php echo $row['dayt'] ?></div>
			    		<div class="panel-body" id="taskList"> <?php echo $row['post']; ?> </div>
			  			</div>

            <?php endwhile; ?>
            <?php mysqli_close($db); ?>
				</div>              
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
<?php else:?>
	<?php header('Location:index.php'); ?>
 <?php endif; ?>
 </body>

 </html>
