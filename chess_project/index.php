<?php

	session_start();

	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{

	}
/////////////////////////////////////////////////////////////////////////////////////////

	$jsString= 'testing';

	if (isset($_SESSION['modal_s1']))
		{
			$jsString = $_SESSION['modal_s1'];
			unset($_SESSION['modal_s1']);
		}

	if (isset($_SESSION['modal_s2']))
		{
			$jsString = $_SESSION['modal_s2'];
			unset($_SESSION['modal_s2']);
		}
?>


<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="chrome=1, IE=edge"/>
		<title>szachyamator</title>
		<meta name="keywords" content="szachy, chess, nauka szachów, otwarcia szachowe"/>
		<meta name="description" content="Amatorska strona o szachach."/>

		<meta name="viewport" content="initial-scale=1.0,width=device-width" />

		<link href="style-m.css" rel="stylesheet" type="text/css"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
		<link rel="stylesheet" href="fontello/css/fontello.css" type="text/css" />
		<script src='https://www.google.com/recaptcha/api.js'></script>

	</head>

	<body>
		<div class="wrapper">

			<div id="myModal_1" class="modal">
  				<!-- Modal content -->
			  <div class="modal-content">
			    <div class="modal-header">
			      <button id="close_1" class="close">X</button>
			      <!--<h2>Zaloguj się</h2>-->
			    </div>
			    <div class="modal-body">
			     <img src="img/human.png" style="width: 50%; margin-bottom: 20px;">
			      <form action="zaloguj.php" method="post">
						<p>Login:</p>
						<br/>
						<input type="text" placeholder="Enter Username" class="my_input" name="login">
						<br/><br/>
						<p>Hasło:</p>
						<br/>
						<input type="password" placeholder="Enter Password" class="my_input" name="haslo">
						<br/><br/>
						<input type="submit" value="zaloguj się" class="button">
					</form>

					<?php
						if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
					?>

			    </div>
			    <div class="modal-footer">
			      <p>Zapomniałeś <span style="text-decoration: underline;"> hasła?</span></p>
			    </div>
			  </div>
			</div>

		<!--	.88b  d88.  .d88b.  d8888b.  .d8b.  db              .d888b.
			88'YbdP`88 .8P  Y8. 88  `8D d8' `8b 88              VP  `8D
			88  88  88 88    88 88   88 88ooo88 88                 odD'
			88  88  88 88    88 88   88 88~~~88 88               .88'
			88  88  88 `8b  d8' 88  .8D 88   88 88booo.         j88.
			YP  YP  YP  `Y88P'  Y8888D' YP   YP Y88888P C88888D 888888D*/-->


			<div id="myModal_2" class="modal">
  				<!-- Modal content -->
			  <div class="modal-content">
			    <div class="modal-header">
			       <button id="close_2" class="close">X</button>
			      <!--<h2>Zaloguj się</h2>-->
			    </div>
			    <div class="modal-body">
			     <!--<img src="img/human.png" style="width: 20%; margin-bottom: 20px;">-->
			       <form action="rejestracja.php" method="post">
							Nickname: <br /> <input type="text" placeholder="Enter Username" class="my_input" value="<?php
							if (isset($_SESSION['fr_nick']) )
							{
								echo $_SESSION['fr_nick'];
								unset($_SESSION['fr_nick']);
							}
						?>" name="nick" /><br />

						<?php
							if (isset($_SESSION['e_nick']))
							{
								echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
								unset($_SESSION['e_nick']);
							}
						?>
						<br/>

						E-mail: <br /> <input type="text" placeholder="Enter E-mail" class="my_input" value="<?php
							if (isset($_SESSION['fr_email']))
							{
								echo $_SESSION['fr_email'];
								unset($_SESSION['fr_email']);
							}
						?>" name="email" /><br />

						<?php
							if (isset($_SESSION['e_email']))
							{
								echo '<div class="error">'.$_SESSION['e_email'].'</div>';
								unset($_SESSION['e_email']);
							}
						?>
						<br/>

						Twoje hasło: <br /> <input type="password" placeholder="Enter Password" class="my_input" value="<?php
							if (isset($_SESSION['fr_haslo1']))
							{
								echo $_SESSION['fr_haslo1'];
								unset($_SESSION['fr_haslo1']);
							}
						?>" name="haslo1" /><br />

						<?php
							if (isset($_SESSION['e_haslo']))
							{
								echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
								unset($_SESSION['e_haslo']);
							}
						?>
						<br/>

						Powtórz hasło: <br /> <input type="password" placeholder="Enter Password" class="my_input" value="<?php
							if (isset($_SESSION['fr_haslo2']))
							{
								echo $_SESSION['fr_haslo2'];
								unset($_SESSION['fr_haslo2']);
							}
						?>" name="haslo2" /><br />
						<br/

						<label>
							<input type="checkbox" name="regulamin" <?php
							if (isset($_SESSION['fr_regulamin']))
							{
								echo "checked";
								unset($_SESSION['fr_regulamin']);
							}
								?>/> Akceptuję regulamin
						</label>

						<?php
							if (isset($_SESSION['e_regulamin']))
							{
								echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
								unset($_SESSION['e_regulamin']);
							}
						?>

						<div align="center" class="g-recaptcha"  data-sitekey="6LcP4BoTAAAAAAzpZ1w1vCoZJxN7UQMYknMOHS7F">
						</div>


						<?php
							if (isset($_SESSION['e_bot']))
							{
								echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
								unset($_SESSION['e_bot']);
							}
						?>

						<br />

						<input type="submit" class="button" value="Zarejestruj się" />
					</form>


			    </div>
			    <div class="modal-footer">
			      <p>Zapomniałeś <span style="text-decoration: underline;"> hasła?</span></p>
			    </div>
			  </div>
			</div>
<!--
			  ####  #    # ######   ##   #####  ###### #####
			 #    # #    # #       #  #  #    # #      #    #
			 #      ###### #####  #    # #    # #####  #    #
			 #      #    # #      ###### #    # #      #####
			 #    # #    # #      #    # #    # #      #   #
			  ####  #    # ###### #    # #####  ###### #    #-->

			<div class="cheader">
				<div class="logo">
					<a href="index.php" class="image_link">
						<img src="img/chess_logo.png"/>
					</a>
				</div>
			</div>

			<div class="nav">
				<div id="DropB" class="element">

					<img src="img/new_option.png" onclick="show_on()">
					<ol>
						<li><a href="#"></a>
							<ul id="ul1">
								<li><button style="width: 100%;" class="button">Rejestracja</button></li>
								<li><button style="width: 100%;" class="button">Logowanie</button></li>
							</ul>
						</li>
					</ol>
				</div>

				<!--<button class="element b_element" id="myBtn_1">
						<img src="img/human.png">
				</button>-->

				<button class="button" id="myBtn_1" style="background-color: #008CBA; margin-left: 10px;">Logowanie</button>
				<button class="button" id="myBtn_2">Rejestracja</button>


				<div class="logo_element">
					<a href="index.php" class="image_link">
						<img src="img/chess_logo2.png" />
					</a>
				</div>

			</div>

			<div class="main_container">

					<div class="section l_c pad">
						<div class="post2 l_c2">
							<h3><span class="light_span_color">Witaj</span>, czieszę się że tu jesteś!</h3>
							<p>-Jeśli <span class="light_span_color">niedawno zacząłeś</span> swoją przygode z szachami lub chcesz to zrobić teraz, to dobrze trafiłeś.</p>
							<p>-Na stronie znajdziesz omówione: podstawowe ruchy, zasady, <span class="light_span_color">rady dla początkującyh</span>, będziesz mógł spróbować swoich sił w walce z komputerem i człowiekiem.</p>
							<img src="img/knight_icon.png">
							<img src="img/chess_lern.png">
						<!--	<p style="font-family: 'Source Sans Pro', sans-serif; font-size: 40px;">Ucz się wytrwale i bądź cierpliwy.</br> Przecierz robisz to dla siebie</p>-->
						</div>
					</div>

				<div class="section l_c">
					<div class="image_link_container">

						<div class="image_link_button col-3">
							<a href="omówienie zasad gry.html" class="image_link">
								<img src="img/chess-icon1.png" style="width: 50%; margin-bottom: 5%;
								margin-left: 20%; float: left;"/>
								<div style="clear: both;"></div>

								<b>Nauka:</b> <br/><br/>
								- zasady <br/>
								- podstawowe ruchy <br/>
								- wskazówki dla początkujących <br/>
							</a>
						</div>

						<div class="image_link_button">
							<a href="Rozpoczęcia parti.html" class="image_link">
								<img src="img/chess-icon2.png" style="width: 50%; margin-bottom: 5%;
								margin-left: 25%; float: left;"/>
								<div style="clear: both;"></div>

								<b>Rozpoczęcia partii:</b> <br/><br/>
								- najbardziej popularne openingi <br/>
								- omówienie <br/>
								- częste błędy <br/>
							</a>
						</div>

						<div class="image_link_button">
							<a href="zagraj.html" class="image_link">
								<img src="img/chess-icon3.png" style="width: 50%; margin-bottom: 5%;
								margin-left: 25%;float: left;"/>
								<div style="clear: both;"></div>

								<b>Zagraj:</b> <br/><br/>
								- z komputerem <br/>
								- z człowiekiem <br/>
								<br/>
							</a>
						</div>

						<div class="image_link_button" style="margin-top: 50px; height: 200px; width: 200px;">
							<a href="zagraj.html" class="image_link">
								<img src="img/social_icon.png" style="width: 30%; margin-bottom: 5%;"/>
								<div style="clear: both;"></div>

								<p>Omówienie zasad gry w szachy</p>
							</a>
						</div>
					</div>
				</div>

			<!--
			  ####  #   # #####   ##   ##### #   #
			 #    #  # #    #    #  #    #    # #
			 #        #     #   #    #   #     #
			 #        #     #   ######   #     #
			 #    #   #     #   #    #   #     #
			  ####    #     #   #    #   #     #
		-->

				<div class="section l_c" style="padding: 30px; background-color: #1D2126;" >
						<h2 style="margin-top: 3%; margin-bottom: 3%;"> <span class="light_span_color">
							Cytaty</span> znanych graczy o szachach </h2>
					<!--</div>-->
				</div>

				<div class="section d_c pad">
					<div class="post">
						<img src="img/rook.png" class="l">
						<p>"Zawsze istnieje właściwe posunięcie. Trzeba je tylko znaleźć."</p>
						<p style="margin-top: 0;"><span class="light_span_color">Ksawery Tartakower</span></p>
					</div>
				</div>

				<div class="section l_c2 pad">
					<div class="post">
						<p>"Spokojne posunięcie często działa jak trzęsienie ziemi."</p>

					</div>
				</div>

				<div class="section d_c pad">
					<div class="post">
						<img src="img/king.png" class="r">
						<p>"(...) szachistę bardziej obchodzi proces osiągania celu, niż cel sam w sobie"</p>
						<p style="margin-top: 0;"><span class="light_span_color">Fiodor Dostojewski</span></p>
					</div>
				</div>

				<div class="section l_c2 pad">
					<div class="post">
						<img src="img/knight.png" class="l">
						<p>"Tylko ja potrafię wygrać partie w pierwszym ruchu"</p>
						<p style="margin-top: 0;"><span class="light_span_color">Chuck Norris</span></p>
					</div>
				</div>

				<div class="section d_c pad">
					<div class="post">
						<p>"Gdy widzisz dobre posunięcie - poczekaj ! Nie wykonuj go ! Może znajdziesz lepsze."</p>
						<p style="margin-top: 0;"><span class="light_span_color">Emanuel Lasker</span></p>

					</div>
				</div>

				<div class="section l_c2 pad">
					<div class="post">
						<img src="img/bishop.png" class="l">
						<p>"W szachach - podobnie jak w każdym innym konflikcie - sukces opiera się na ataku."</p>
						<p style="margin-top: 0;"><span class="light_span_color">Max Euwe</span></p>
					</div>
				</div>

				<div class="section d_c pad">
					<div class="post">
						<img src="img/queen.png" class="r">
						<p>"Błędy są wszędzie, one czyhają jedynie na to, by je popełnić."</p>

					</div>
				</div>

			</div>

			<div class="footer">
						2016 | Szachy amator, &nbsp; Piotr Paszko	&copy; &nbsp;&nbsp;&nbsp;&nbsp; Dziękuję za uwagę!
			</div>


			<!--
			      #  ####
			      # #
			      #  ####
			      #      #
			 #    # #    #
			  ####   ####
		-->


		<script src="jquery-1.12.3.min.js"></script>

		<script>
			$(document).ready(function() {
			   var stickyNavTop = $('.nav').offset().top;

			   var stickyNav = function(){
			   var scrollTop = $(window).scrollTop();

			   if (scrollTop > stickyNavTop) {
			      $('.nav').addClass('sticky');
			   } else {
			      $('.nav').removeClass('sticky');
			    }
			   };

			   stickyNav();

			   $(window).scroll(function() {
			      stickyNav();
			   });
			   });
/////////////////////////////////////////////////////////////////////////////////////////

			$(document).ready(function() {
				if(<?php echo json_encode($jsString); ?>=="modal_s1")
			   {
			   		modal_1.style.display = "block";
			   }

				if(<?php echo json_encode($jsString); ?>=="modal_s2")
			   {
			   		modal_2.style.display = "block";
			   }
			});
/////////////////////////////////////////////////////////////////////////////////////////

							// Get the modal
				var modal_1 = document.getElementById('myModal_1');
				var modal_2 = document.getElementById('myModal_2');

				// Get the button that opens the modal
				var btn1 = document.getElementById("myBtn_1");
				var btn2 = document.getElementById("myBtn_2");

				// Get the <span> element that closes the modal
				var span1 = document.getElementById("close_1");
				var span2 = document.getElementById("close_2");

				// When the user clicks the button, open the modal
				btn1.onclick = function() {
				    modal_1.style.display = "block";
				}

				btn2.onclick = function() {
				    modal_2.style.display = "block";
				}

				// When the user clicks on <span> (x), close the modal

				span1.onclick = function() {
				    modal_1.style.display = "none";
				}

				span2.onclick = function() {
				    modal_2.style.display = "none";
				}


				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
				    if (event.target == modal_1 || event.target == modal_2) {
				        modal_1.style.display = "none";
						modal_2.style.display = "none";
				    }
				}


/////////////////////////////////////////////////////////////////////////////////////////
				function show_on()
				{
					ul1.classList.toggle("show1");
				}

		</script>

	</body>
</html>
