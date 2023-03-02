<x-layout>
      <div class="container w-100 py-2">
        <div class="row">
          <div class="col-lg-8">
            <!-- Left column content here -->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://images.pexels.com/photos/5650044/pexels-photo-5650044.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/35550/ipad-tablet-technology-touch.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/5632371/pexels-photo-5632371.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

              <script>
                var myCarousel = document.querySelector('#carouselExampleSlidesOnly')
                var carousel = new bootstrap.Carousel(myCarousel, {
                  interval: 5000,
                  wrap: true,
                  keyboard: true,
                })
              </script>

          </div>
          <div class="col-lg-4">
            <!-- Right column content here -->
            <div class="card" style="width:18rem;">
              <a href="#"><img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title">Sale items</h5>
                <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                b5
              </div>
            </div>
          </div>
        </div>
      </div>





</x-layout>
