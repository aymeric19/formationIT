<?php
/*
Author : Aymeric aymericherchuelz19
Created Date : 2020-08-27
Aim : learn toto php and html
*/
session_start();
$titre="Connexion";
//include("connect/identifiants.php");
//include("connect/debut.php");
//include("connect/menu.php");
?>

<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8" />
		<link href="bleuetnoir.css" rel="stylesheet">
		<link rel="stylesheet" href="border.css">
		<link rel="stylesheet" href="lien.css">
        <title>motivation</title>
        <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">

    </head>

    <body>
      <h1>Bienvenue <?php echo $_SERVER['REMOTE_ADDR'];?> </h1>
			<h2>Il est actuellement:</h2>
			<?php
			echo date('Y-m-d H:i:s');
			if (!isset($_POST['pseudo'])) //On est dans la page de formulaire
			{
				echo '
				<form method="post" action="MOTIVATION.php">
				<fieldset>
				<legend>Connexion</legend>
				<p>
				<label for="pseudo">Pseudo :</label><input name="pseudo" type="text" id="pseudo" /><br />
				<label for="password">Mot de Passe :</label><input type="password" name="password" id="password" />
				</p>
				</fieldset>
				<p><input type="submit" value="Connexion" /></p>
				</form>
				<a href="./register.php">Pas encore inscrit ?</a>';
			}
			else{
			?>
<h3>Bienvenue <?php echo $_POST['pseudo'];?> </h3>
        <!-- header start -->
        <div id="header" class="section">
            <img alt="" class="img-circle" src=>
            <p></p>
        </div>
        <!-- header end -->
		<img alt="wordpress" src="Circuit Board, Circuit Diagram, Motherboard PNG Transparent Clipart Image and PSD File for Free Download.jpg"/>

        <!-- About Me section start -->
        <div class="section">
            <h1><span>Mes motivation</span></h1>
            <?php
        echo '<p></p>';
        echo date("d/m/y");
        ?>
            <p>
                <FONT size="5pt"> Je me presente je m'appelle <strong>Herchuelz Aymeric</strong><br>
                  Depuis quelques temps, je suis fortement interesse par l'informatique. D'abord attiré, comme beaucoup de mes congenere par les jeux vidéo, j'ai été séduit par les possibilités infinies de création et d'exploration qu'offre l'informatique et ses outils ainsi que des objets connectés aux outils de bureautiques utilisés quotidiennement, en passant par les produits et logiciels.

Se rencontrer, partager, apprendre, aider, collaborer, simplifier la vie des gens sont autant des choses auxquels j'aimerais prendre part et y apportais ma contributions c'est ce qui pour moi m'apporterais un grand epanouisment et l'aboutisement d un projet de vie.<br> Ma grande motivation et d'etre au service des gens, de leur donner de l'aide, etre a leur ecoute, leur rendre la vie agreable et pratique et rien de tel que l'informatique a notre epoque qui est l'un des lien des plus important entre les individus. Un lien qui pronne le savoir et la transmition. <br/>  Je vous écris donc aujourd'hui afin de solliciter une place dans votre ecole afin de mettre toutes les chances de côté pour réaliser mes projet.Mon intérêt personnel se porte vers les metiers de l'informatique et du funeraire j aimerais utiliser ces savoir que cest metier mapporte pour aider les gens et leur symplifier la vie.<i></i>
            </FONT></p>


            <p><FONT size = "5pt"> Let me introduce myself, my name is <strong> Herchuelz Aymeric </strong> <br>
                  For some time now, I have been very interested in IT. First attracted, like many of my congenere by video games, I was seduced by the endless possibilities of creation and exploration offered by IT and its tools as well as objects connected to the office tools used daily , through products and software.

Meeting, sharing, learning, helping, collaborating, simplifying people's lives are all things in which I would like to take part and to make my contribution is what for me would bring me great fulfillment and the culmination of a life project. <br> My great motivation is to be at the service of people, to give them help, to listen to them, to make their life pleasant and practical and nothing like computers in our time which is one of the most important link between individuals. A link that embodies knowledge and transmission. <br/> I am writing to you today in order to apply for a place in your school in order to put all the chances aside to carry out my projects.My personal interest is in the fields of IT and funeral I would like to use this knowledge that this job gives me to help people and make their lives more symplified. <i> </i>
            </FONT> </p>

	   <div class="section">
	        <h2><span>Citation</span></h2>
        <p class="quote"><FONT size="5pt">“Les hommes ont créé des cimetières afin de se fixer dans le temps et, malgré la décomposition dans l'espace.”<br/>
De Emile Marcel / L'Ombre et le silence"</FONT></p>

<p class="quote"><FONT size="5pt">“
Men have created cemeteries in order to fix themselves in time and, despite the decomposition in space. »<br/>
By Emile Marcel / The Shadow and the Silence"</FONT></p>
        </div>
        <!-- About Me section end -->

        <!-- My Schedule section start -->



        <!-- My Skills section start -->
        <div class="bleuetnoir.css">
            <h1><span>My Skills</span></h1>
            <ul>
                <li>HTML <br />
                    <progress min="0" max="100" value="80"></progress>
                </li>
                <li>CSS <br />
                    <progress min="0" max="100" value="60"></progress>
                </li>
                <li>php <br />
                    <progress min="0" max="100" value="40"></progress>
                </li>
                <li>javascript <br />
                    <progress min="0" max="100" value="40"></progress>
                </li>
                <li>SQL <br />
                    <progress min="0" max="100" value="20"></progress>
                </li>
                <li>wordpress <br />
                    <progress min="0" max="100" value="60"></progress>
                </li>
            </ul>
        </div>
        <!-- My Skills section end -->


         <!-- Media section start -->
        <div class="section">
            <h1><span>My Media</span></h1>
            <iframe height="150" width="300" src= allowfullscreen frameborder="0"></iframe>
        </div>
        <!-- Media section end -->

        <!-- Form section start -->
       <div class="section">
            <h1><span>Contact Me</span></h1>
            <img border="0" src="12.gif"style="float:left;width:100px;height:100PX;">
            <form>
                <input name="name" placeholder="Name" type="text" required /><br/>
                <input name="email" placeholder="Email" type="email" required /><br/>
                <textarea name="message" placeholder="Message" required ></textarea>
                <input type="submit" value="SEND" class="submit" />
            </form>
        </div>
        <!-- Form section end -->

        <!-- Contacts section start -->
        <div class="section" id="contacts">
            <h1><span>Follow Me</span></h1>
            <div>
                <a href="https://www.sololearn.com/Profile/19037741" target="_blank">
                    <img alt="SoloLearn" src="https://www.sololearn.com/Uploads/icons/sololearn.png" />
                </a>
                <a href="https://www.facebook.com/people/Aymeric-Herchuelz/100014054297317">
                    <img alt="Facebook" src="https://www.sololearn.com/Uploads/icons/facebook.png"/>
                </a>
                <a href="https://aymericherchuelz19.wordpress.com/">
                    <img alt="wordpress" src="wordpress-com-web-development-responsive-web-design-blog-wordpress.jpg"/>
                </a>
            </div>
        </div>
        <!-- Contacts section end -->

        <div class="btn">

        <img src="gy.gif" class="icone">
        <script src="ja.js"></script>
        FLECHE
        </div>
			<?php } ?>
    </body>
</html>
