<?php
	require 'header.php';
?>
<title>Site of Khaly</title>
<link rel="stylesheet" href="css/passwordCsss.css">
<script src="./js/controlPassword.js" defer></script>
</head>
<body>
<div class="signup-form">
    <form action="../../Controller/Clasmain.php" method="post">
		<h1 style="text-align: center;">Inscription</h1>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="firstname" placeholder="Prenom" required="required" autocomplete="off"></div>
				<div class="col"><input type="text" class="form-control" name="lastname" placeholder="Nom" required="required" autocomplete="off"></div>
			</div>        	
        </div>
		<div class="form-group">
        	<input type="date" class="form-control" name="dateNaissance" placeholder="Date de naissance" required="required" autocomplete="off">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="ex:khd@gmail.com" required="required" autocomplete="off">
        </div>
		<div class="form-group">
        	<input type="text" class="form-control" name="address" placeholder="Adresse" required="required" autocomplete="off">
        </div>
		<div class="form-group">
        	<input type="radio"  name="sexe" required="required" value="Homme"> Homme
			<input type="radio"  name="sexe" required="required" value="Femme"> Femme
			<input type="radio"  name="sexe" required="required" value="Autre"> Autre
        </div>
		<div class="form-group">
            <input type="password" id="pwd" class="form-control" name="password" placeholder="Mot de passe"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Le mot de passe doit contenir au moins 8,1 M,1m" required="required" autocomplete="off">
    </div>
		<div class="form-group">
            <input type="password" id="pwdConfirm" class="form-control" name="confirm_password" placeholder="Confirmation du mot de passe" required="required" autocomplete="off">
        </div>        
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="./connexion.php">Sign in</a></div>
</div>

</body>
</html>