<DOCTYPE html>
<html>
<head>
  	<script>
    	tinymce.init({
      	selector: '#mytextarea'
    	});
  	</script>
</head>
<body>
	      	<form method='post' id='theform' name='handleData'>
	<nav class="navbar navbar-expand-lg navbar-light">
<?php
          session_start();
            if(isset($_SESSION['loggedin'])){
              if( $_SESSION['loggedin'] == true){
?>
        <a type='button' name='todo' value='search' class="nav-link" href="#">
          <?php
                echo $_SESSION['username'];
              }
            }else {
              ?>
        <a type='button' name='todo' value='search' onClick="loadPage('view/login.php', sendToContent);" class="nav-link" href="#">
          <?php
                echo 'login';
              }
          ?>    
        </a>    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a type='button' name='todo' value='search' onClick="loadPage('controller/matchesController.php?todo=', sendToContent);" class="nav-link" href="#">Wedstrijden</a>
      </li>
      <li class="nav-item">
          <?php
            if(isset($_SESSION['loggedin'])){
              if( $_SESSION['loggedin'] == true){
?>
        <a type='button' name='todo' value='search' class="nav-link" onClick="loadPage('controller/accountsController.php?todo=logout', sendToContent);" href="#">
          <?php
                echo 'uitloggen';
              }
            }else {
              ?>
        <a type='button' name='todo' value='search' onClick="loadPage('view/login.php', sendToContent);" class="nav-link" href="#">
          <?php
                
              }
          ?>    
        </a>      
      </li>
    </ul>
    <div class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 search" type="search" name='search' placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success my-2 my-sm-0" type='button' name='todo' value='search' onClick="loadPage('controller/matchesController.php?todo=search', sendToContent);"><a>Search</a></button>
    </div>
  </div>
</nav>
<br>
</body>
</html>
<script>
</script>