<!-- Displays information about the dev team and allows users to send feedback via email -->
<!-- Written by: Christopher Tonkin & Kollin Labowski -->

<?php 
require 'includes/header.php'
?>
<main>
<link rel="stylesheet" href="css/about.css">
	<div class="about">
		<h1>About Us</h1>
		<p>We're a small team of student developers attending West Virginia University. Our focus is to connect students who are new to the Morgantown area to local restaurants and other eateries.</p>
	</div>
	<div class="row">
		<div class="column">
			<div class="card">
				<img src="images/morty.png">
				<div class="container">
					<h2>Developer</h2>
					<p>Abdullah Alqallaf</p>
					<p>Major: Computer Engineering</p>
					<p>aaa0065@mix.wvu.edu</p>
				</div>
			</div>
		</div>
		<div class="column">
			<div class="card">
				<img src="images/kollinpfp.png">
				<div class="container">
					<h2>Developer</h2>
					<p>Kollin Labowski</p>
					<p>Major: Computer Science</p>
					<p>Minor: Mathematics</p>
					<p>kkl0009@mix.wvu.edu</p>
				</div>
			</div>
		</div>
		<div class="column">
			<div class="card">
				<img src="images/malik.png">
				<div class="container">
					<h2>Developer</h2>
					<p>Malik Mukdadi</p>
					<p>Major: EE/CpE</p>
					<p>Minor: CS/Mathematics</p>
					<p>mm0339@mix.wvu.edu</p>
				</div>
			</div>
        </div>
        <div class="column">
			<div class="card">
				<img src="images/isiahNew.png">
				<div class="container">
					<h2>Developer</h2>
					<p>Isiah Phares</p>
					<p>Major: Computer Engineering</p>
					<p>itp0001@mix.wvu.edu</p>
				</div>
			</div>
		</div>
        <div class="column">
			<div class="card">
				<img src="images/ironiccrop.png">
				<div class="container">
					<h2>Developer</h2>
					<p>Christopher Tonkin</p>
					<p>Major: EE/CpE</p>
					<p>Minor: Computer Science</p>
					<p>cct0005@mix.wvu.edu</p>
				</div>
			</div>
		</div>
	</div>
    <div class="contact">
        <h3> Contact Us </h3>
        <p>Have any comments or concerns? Feel free to drop us an email!<p>
        <form class = "email" action="mailto:someone@somewhere.com" method="post" enctype="text/plain">
        Name:<br>
        <input type="text" name="name"><br>
        E-mail:<br>
        <input type="text" name="mail"><br>
        Comment:<br>
        <input type="text" name="comment" size="50"><br><br>
        <input type="submit" value="Send">
        <input type="reset" value="Reset">
        </form>
    </div>

</main>