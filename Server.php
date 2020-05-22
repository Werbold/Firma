<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" type="text/css" href="Contact/Style-Contact.css" />
		<link rel="stylesheet" type="text/css" href="Contact/Style-Menu.css" />
	</head>
	<body>
		<article>
			<header>
				<div class="dropdown">
					<button onclick="myFunction()" class="dropbtn">Menu</button>
					<div id="myDropdown" class="dropdown-content">
						<a href="index.html">Domů</a>
						<a href="About_as.html">O nás</a>
						<a href="Contact.html" id="active">Kontakt</a>
					</div>
				</div>
				<h1>Kontaktuj nás prostřednictvím formuláře</h1>
			</header>
			<section>
				<div class="contact-form">
					<form id="contact-form" action="Send.php" method="POST">
						<input name="jmeno" type="text" class="form-control" placeholder="Vaše celé jméno"/>
						<input name="email" type="email" class="form-control" placeholder="Váš e-mail"/><br/>
						<textarea name="zprava" type="text" class="form-control" placeholder="Vaše zpráva" row="10"></textarea><br/>
						<input name="submit" class="form-control-submit" value="Odeslat"/>
					</form>
				</div>
			</section>
		</article>
		<footer>
		
		</footer>
	</body>
</html>