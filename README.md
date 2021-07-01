Creer un table:
prenom
nom
email
password
dateNaissance
Adresse
sexe

Inscription a la base de donnees
mot de passe 8 caractere(Min: Majuscule,minimal,chiffre,caractere Special)
l'utilisateur doit avoir min 18 ans
Connexion email/mot de passe

    #liste des personnes

modifier une personnes
#avoir les details d'une personne
Quand je suis connecte sur chaque page voir le nom et le prenom

    #Procedure:

Creer une base de donnees nommee devoir1 et importer la table users
qui se trouve dans le fichier ./Model/users.sql

<?php
				$bdd= new PDO('mysql:host=localhost;dbname=devoir1','root','');
				$req=$bdd->prepare("SELECT * from users ");
				$req->execute();
				?>

    		<table class="table table-striped table-hover">
    			<thead>
    				<tr>
    					<th>
    						<span class="custom-checkbox">
    							<input type="checkbox" id="selectAll">
    							<label for="selectAll"></label>
    						</span>
    					</th>
    					<th>Firstame</th>
    					<th>Lastname</th>
    					<th>date de Naissance</th>
    					<th>E-mail</th>
    					<th>Address</th>
    					<th>Genre</th>
    					<th>Actions</th>
    				</tr>
    			</thead>
    			<?php
    			while($donnees=$req->fetch(PDO::FETCH_ASSOC)){
    			?>
    			<tbody>
    				<tr>
    				<td><?php echo $donnees["firstname"]?></td>
    				<td><?php echo $donnees["lastname"]?></td>
    				<td><?php echo $donnees["dateNaissance"]?></td>
    				<td><?php echo $donnees["email"]?></td>
    				<td><?php echo $donnees["address"]?></td>
    				<td><?php echo $donnees["genre"]?></td>
    				</tr>
    				<?php
    				}
    				?>
    			</tbody>
