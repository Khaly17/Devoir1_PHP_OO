<?php
	require 'header.php';
?>
<title>Site of Khaly</title>
<link rel="stylesheet" href="css/passwordCsss.css">
<script src="./js/controlPassword.js" defer></script>
</head>
<body>
<div class="signup-form">
    <form action="../../Controller/controlConnexion.php" method="post">
		<h1 style="text-align: center;">Authentification</h1>
		<p class="hint-text"></p>
		<div class="form-group">
            <input type="text" id="email" class="form-control" name="email" placeholder="e-mail"  required="required" autocomplete="off">
    </div>
		<div class="form-group">
            <input type="password" id="password" class="form-control" name="password" placeholder="password" required="required" autocomplete="off">
        </div>        
		<div class="form-group">
            <button type="submit" name="login" class="btn btn-success btn-lg btn-block">connecter</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="./register.php">creer un compte</a></div>
</div>
</body>
</html>