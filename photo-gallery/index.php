<?php require_once("templates/header.php"); ?>

<div class="container">
	<div class="row">
		<div class="col-12 text-center">
			<h1>Photo Gallery</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-2 col-md-3 col-sm-6 col-12 image-container">
			<img src="http://res.cloudinary.com/dmliyxggm/image/upload/v1511804166/photo1_bcjm1j.jpg" class="img-thumbnail thumbnail-img">
		</div>

		<div class="col-lg-2 col-md-3 col-sm-6 col-12 image-container">
			<img src="http://res.cloudinary.com/dmliyxggm/image/upload/v1511804166/photo1_bcjm1j.jpg" class="img-thumbnail thumbnail-img">
		</div>

		<div class="col-lg-2 col-md-3 col-sm-6 col-12 image-container">
			<img src="http://res.cloudinary.com/dmliyxggm/image/upload/v1511804166/photo1_bcjm1j.jpg" class="img-thumbnail thumbnail-img">
		</div>

		<div class="col-lg-2 col-md-3 col-sm-6 col-12 image-container">
			<img src="http://res.cloudinary.com/dmliyxggm/image/upload/v1511804166/photo1_bcjm1j.jpg" class="img-thumbnail thumbnail-img">
		</div>

		<div class="col-lg-2 col-md-3 col-sm-6 col-12 image-container">
			<img src="http://res.cloudinary.com/dmliyxggm/image/upload/v1511804166/photo1_bcjm1j.jpg" class="img-thumbnail thumbnail-img">
		</div>

		<div class="col-lg-2 col-md-3 col-sm-6 col-12 image-container">
			<img src="http://res.cloudinary.com/dmliyxggm/image/upload/v1511804166/photo1_bcjm1j.jpg" class="img-thumbnail thumbnail-img">
		</div>
	</div>

	<div class="row">
		<div class="col-12 text-center">
			<nav>
				<ul class="pagination" id="pagination-bar">
					<li class="page-item">
						<a href="#" class="page-link">Previous</a>
					</li>
					<li class="page-item">
						<a href="#" class="page-link">1</a>
					</li>
					<li class="page-item">
						<a href="#" class="page-link">2</a>
					</li>
					<li class="page-item">
						<a href="#" class="page-link">3</a>
					</li>
					<li class="page-item">
						<a href="#" class="page-link">Next</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>

<div class="modal fade" role="dialog" id="light-box-modal" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="image-title">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<img id="image-showcase" class="img-thumbnail">
			</div>
		</div>
	</div>
</div>

<?php require_once("templates/footer.php"); ?>