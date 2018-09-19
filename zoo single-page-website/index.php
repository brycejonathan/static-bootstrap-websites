<?php require_once("templates/header.php"); ?>

<div class="jumbotron jumbotron-fluid" id="home-section">
	<img id="jumbotron-image" src="images/zoo.png" />
</div>

<div class="container-fluid" id="team-section">
	<div class="row">
		<div class="col-12 text-center">
			<h1>Team</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-3 col-sm-6 col-xs-12 member-container text-center">
			<img src="images/thumbnails/employee1.png" class="img-fluid img-circle" id="member-image" width="50%" height="50%">
			<h4>Steve</h4>

			<p class="text-muted">Curator</p>
			<p>The animals at the zoo are taken of by Steve. He's hardworking and has over 10 years in the industry!</p>
			<!--Social Links -->
			<div class="col-12 text-center">
				<a href="" target="_blank">
            		<img class="socialImages" src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
        		</a>
		        <a href="" target="_blank">
		            <img class="socialImages" src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
		        </a>
		        <a href="" target="_blank">
		            <img class="socialImages" src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
		        </a>
			</div>
		</div>

		<div class="col-lg-3 col-sm-6 col-xs-12 member-container text-center">
			<img src="images/thumbnails/employee2.png" class="img-fluid img-circle" id="member-image" width="50%" height="50%">
			<h4>Dorothy</h4>
			<p class="text-muted">Aquamarine Supervisor</p>
			<p>Our aquatic friends are looked after by Dorothy. Twenty years in the biz and still going strong!</p>
			<div class="col-12 text-center">
				<a href="" target="_blank">
            		<img class="socialImages" src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
        		</a>
		        <a href="" target="_blank">
		            <img class="socialImages" src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
		        </a>
		        <a href="" target="_blank">
		            <img class="socialImages" src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
		        </a>
			</div>
		</div>

		<div class="col-lg-3 col-sm-6 col-xs-12 member-container text-center">
			<img src="images/thumbnails/employee3.png" class="img-fluid img-circle" id="member-image" width="50%" height="50%">
			<h4>Jimmy</h4>
			<p class="text-muted">Field Researcher</p>
			<p>You can spot Jimmy any day of the week out and about with wildlife. The only thing Jimmy is afraid of is a bad cup of coffee!</p>
			<div class="col-12 text-center">
				<a href="" target="_blank">
            		<img class="socialImages" src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
        		</a>
		        <a href="" target="_blank">
		            <img class="socialImages" src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
		        </a>
		        <a href="" target="_blank">
		            <img class="socialImages" src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
		        </a>
			</div>
		</div>
	</div>


	<div class="container-fluid" id="contact-us">
		<div class="row">
			<div class="col-12 text-center">
				<h1>Contact Us</h1>
			</div>
		</div>
		<form>
			<div class="row">
				<div class="col-md-6">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="contactEmail" placeholder="Enter email address">
				</div>

				<div class="col-md-6">
					<label for="name">Name:</label>
					<input type="text" class="form-control" id="contactName" placeholder="Name">
				</div>

				<div class="col-12">
					<label for="message">Message</label>
					<textarea class="form-control" id="contactMessage" rows="5"></textarea>
				</div>

				<div class="col-12" id="contact-button">
					<button type="submit" class="btn btn-primary col-12">Send Message</button>
				</div>
			</div>
		</form>
	</div>	
</div>
</div>

<?php require_once("templates/footer.php"); ?>