<?= $this->extend("layout/base"); ?>

<?= $this->section("page content"); ?>
<section>
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->


      <!-- Sidebar Widgets Column -->
      <div class="col-md-3 pt-3">

        <div class="card my-4">
          <h5 class="card-header">Related Articles</h5>
          <div class="card-body">
            <nav class="nav flex-column">
              <a class="nav-link active" href="#">PHP Training</a>
              <a class="nav-link" href="#">CodeIgniter 4 Training</a>
              <a class="nav-link" href="#">Drupal 9 Development</a>
              <a class="nav-link" href="#">Laravel Training</a>
              <a class="nav-link" href="#">Wordpress Development Training</a>
              <a class="nav-link" href="#">More...</a>
            </nav>
          </div>
        </div>

      </div>

      <div class="col-lg-6">

        <!-- Title -->
        <h1 class="mt-4 text-primary"><i>Page title will goes here</i></h1>
        <hr>
        <!-- Date/Time -->
        <p>Posted on January 1, 2019 at 12:00 PM</p>
        <hr>
        <!-- Preview Image -->
        <img class="img-fluid rounded" src="assets/images/page_banner.jpg" alt="">
        <hr>

        <!-- Post Content -->
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>

        <blockquote class="blockquote">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in
            <cite title="Source Title">Source Title</cite>
          </footer>
        </blockquote>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

        <hr>


      </div>

      <!--Right sidebar-->
      <div class="col-md-3 pt-5">



        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>
        <div class="card my-4">
          <h5 class="card-header">Quick Links</h5>
          <div class="card-body">
            <nav class="nav flex-column">
              <a class="nav-link active" href="#">Vision & Mission </a>
              <a class="nav-link" href="#">Enquiry Now</a>
              <a class="nav-link" href="#">Donate Us</a>
              <a class="nav-link disabled" href="#">Disabled</a>
            </nav>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
</section>


<footer class="bg-primary px-2 py-2">
  <div>
    <p class="text-center">&copy; 2020 All Copy rights reserved</p>
  </div>
  <?= $this->endsection() ?>