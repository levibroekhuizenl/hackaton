<DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' href='assets/style.css'>
</head>
<body>
  <div class='container matchbar'>
    <div class='row'>
      <div class='col-lg-12' id='content'>
		  <div class="container">
		    <h1>Login</h1>
		    <p>Vul de gevraagde gegevens in</p>
		    <hr>

		    <label for="email"><b>Gebruikersnaam</b></label>
		    <input type="text" placeholder="gebruikersnaam" name="username" id="username" required>

		    <label for="psw"><b>Wachtwoord</b></label>
		    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
		    <hr>
		        <button class="btn btn-outline-success my-2 my-sm-0 registerbtn" type='button' name='todo' value='search' onClick="loadPage('controller/accountsController.php?todo=login', sendToContent);"><a>Inloggen</a></button>
		  </div>
		  
		  <div class="container signin">
		    <p>Nog geen account? <a name='todo' onClick="loadPage('view/register.php', sendToContent);" class="nav-link" href="#">Registreren</a>.</p>
		  </div>
      </div>
    </div>
  </div>
</body>
</html>