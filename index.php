<!doctype html>
<html lang='en'>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Word Engine for ESL">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:400,700" rel="stylesheet">


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

	<link rel="stylesheet" href="style.css">
	<title>Word Engine</title>
</head>
<body>
	<main>
		<div class="logo">
			<h1>ESL Word Engine</h1>
		</div>

		<div class="searchBox">
			<input class="search-text" id="searchTerm" type="text" name="search" placeholder="Search..">
  			<a href="#" class="search-btn">
			<i class="fas fa-search"></i>
  			</a>
		</div>

		<div class="popUpPage">
			<div class="delete"><a href="#" id="x">x</a></div>
			<h2 class="theWord">Hello World</h2>

			<div class="description">
				<p class="definition">Definition: <span id="theDefinition" class="details">A "Hello, World!" program is a computer program that outputs or displays "Hello, World!" to a user. Being a very simple program in most programming languages, it is often used to illustrate the basic syntax of a programming language for a working program</span></p>
				<p class="connotation">Connotation: <span id="theConnotation" class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span></p>
				<p class="etymology">Etymology: <span id="theEtymology" class="details">Consectetur sed alias voluptatum laborum quod, quos, quasi repudiandae, aliquid voluptate doloremque quia. Impedit eos, unde quidem voluptatibus adipisci! Consectetur velit, expedita!</span></p>
			</div>
		</div>
	</main>
	<script src="jquery.js"></script>
	<script src="app.js"></script>
</body>
</html>
