 <?= $this->extend("layout/base") ?>

 <?= $this->section("page content")?>
 <section>
 	<div class="container">
 		<div class="row">
 			<div class="col-lg-12">
 				<h1 class="mt-4 text-primary"><i>Contact Us</i></h1>
 				<form action="/action_page.php">
 					<div class="form-group">
 						<label for="pwd">Name</label>
 						<input type="text" class="form-control" placeholder="Enter password" id="name">
 					</div>
 					<div class="form-group">
 						<label for="email">Email address:</label>
 						<input type="email" class="form-control" placeholder="Enter email" id="email">
 					</div>
 					<div class="form-group">
 						<label for="email">Mobile</label>
 						<input type="text" class="form-control" placeholder="Enter email" id="mobile">
 					</div>

 					<div class="form-group">
 						<label for="email">Message</label>
 						<textarea class="form-control" id="msg"></textarea>
 					</div>

 					<button type="submit" class="btn btn-primary">Submit</button>

 				</form>
 				<div class='pb-5'></div>
 			</div>
 		</div>
 	</div>

 </section>
 <footer class="bg-primary px-2 py-2">
 	<div>
 		<p class="text-center">&copy; 2020 All Copy rights reserved</p>
 	</div>
	 <?= $this->endsection()?>