<!DOCTYPE html>
<html>
<head>
	<title>Muaz Academy</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<style type="text/css">
		::selection{color: yellow;
			background-color: black;}
			ul {
			position: fixed;
			top: 0;
			width: 100%;
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;
		}
		li{
			float: left;
		}
		li a{
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}
		li a:hover:not(.active){
			background-color: green;
		}
		.active{
			background-color: black;
		}
	</style>
</head>
<body>
	<h1 style="text-align: center;">Assalomu Alaykum !!! Muaz Academy saytiga xush kelibsiz!</h1>
	<ul>
		<li ><a class="active" href="#home"><i class="fa fa-home">Asosiy</i></a></li>
		<li><a href="#about"><i class="fa fa-users">Biz haqimizda</i></a></li>
		<li><a href="#movies"><i class="fa fa-film">Kurslar</i></a></li>
		<li><a href="#contact"><i class="fa fa-address-book">Aloqa xizmati</i></a></li>
		<li><a href="#others"><i class="fa fa-th-large">Boshqalar</i></a></li>
	</ul>

	<div id="home"; style="padding: 20px; margin-top: 30px; background-color: lightblue; height: 1500px">
		<h1 style="text-align: center;">Online registratsiyadan o'tish uchun ma'lumotlaringizni kiriting!</h1>
        <form action="green.html" target="_blank" >
	    <fieldset>
		<legend>Ro'yxatdan o'tish</legend>
	   	F.I.O:<br>
	    <input type="text" name="name" placeholder="Full name" required><br>
	    Telefon: <br>
	    <input type="text" name="telephone" placeholder="Phone number" required>
	    <br>
	    Jins<br>
	    <input type="radio" name="Male" value="Male">Erkak<br>
	    <input type="radio" name="Female" value="Female">Ayol<br>
	    <br>
	    Kurslar: <br>
		<select name="Country">
		<option value="IT dasturlash">IT dasturlash</option>
		<option value="Ingliz tili">Ingliz tili</option>
		<option value="Rus tili">Rus tili</option>
		<option value="Arab tili">Arab tili</option>
		<option value="Ona tili">Ona tili</option>
		<option value="Matematika">Matematika</option>
		<option value="Fizika">Fizika</option>
		<option value="Kimyo">Kimyo</option>
		<option value="Biologiya">Biologiya</option>
		<option value="Maktabga tayyorlov">Maktabga tayyorlov</option>
		<option value="Pochemuchka">Pochemuchka</option>
		</select><br>
		<br>
		<input type="submit" name="send" value="Yuborish">
		</fieldset>
		</form>
	</div>

	<div id="about"; style="padding: 20px; margin-top: 30px; background-color: lightgrey; height: 1500px">
		<h1 style="text-align: center;">Muaz Academy</h1>
		<h1><img src="muaz.jpg" width="350" height="450" style= "float: left;"></h1>
		<p style="font-size: 40px">Hey mate, My full name is Bohodir Qosimjonov. I was born on the first of November in Tashkent and where I grew up there. My hometown is Tashkent the capital of Uzbekistan. There are many attractive places and namely those attracted tourists. My hobby is listen to music , so I'm captivating to computer programming. Also,  my major is that too.4 I study at school in the 9th grade.</p>
	</div>

	<div id="movies"; style="padding: 20px; margin-top: 30px; background-color: lightgrey; height: 1500px">
		<img src="thebeauty.jpg" width="450" height="520" style="float: left;">
		<h1 style="text-align: center;">The Beauty and the Beast</h1>
		<p style="font-size: 30px">Once upon a time as a merchant set off for market, he asked each of his three daughters what she would like as a present on his return. The first daughter wanted a brocade dress, the second a pearl necklace, but the third, whose name was Beauty, the youngest, prettiest and sweetest of them all, said to her father:
		"All I'd like is a rose you've picked specially for me!"
		beauty and the beastWhen the merchant had finished his business, he set off for home. However, a sudden storm blew up, and his horse could hardly make headway in the howling gale. Cold and weary, the merchant had lost all hope of reaching an inn when he suddenly noticed a bright light shining in the middle of a wood. As he drew near, he saw that it was a castle, bathed in light.Once upon a time as a merchant set off for market, he asked each of his three daughters what she would like as a present on his return. The first daughter wanted a brocade dress, the second a pearl necklace, but the third, whose name was Beauty, the youngest, prettiest and sweetest of them all, said to her father:
		"All I'd like is a rose you've picked specially for me!"
		beauty and the beastWhen the merchant had finished his business, he set off for home. However, a sudden storm blew up, and his horse could hardly make headway in the howling gale. Cold and weary, the merchant had lost all hope of reaching an inn when he suddenly noticed a bright light shining in the middle of a wood. As he drew near, he saw that it was a castle, bathed in light.</p>
	</div>

</body>
</html>