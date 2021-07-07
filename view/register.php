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
		    <h1>Register</h1>
		    <p>Vul de gevraagde gegevens in</p>
		    <hr>

		    <label for="email"><b>Gebruikersnaam</b></label>
		    <input type="text" placeholder="gebruikersnaam" name="username" id="username" required>

		    <label for="psw"><b>Wachtwoord</b></label>
		    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

		    <label for="psw-repeat"><b>Wachtwoord bevestigen</b></label>
		    <input type="password" placeholder="Wachtwoord" name="psw-repeat" id="psw-repeat" required>
		    <hr>
		        <button class="btn btn-outline-success my-2 my-sm-0 registerbtn" type='button' name='todo' value='search' onClick="loadPage('controller/accountsController.php?todo=register', sendToContent);"><a>Registreren</a></button>
		  </div>
		  
		  <div class="container signin">
		    <p>Already have an account? <a href="#">Sign in</a>.</p>
		  </div>
      </div>
    </div>
  </div>
</body>
</html>