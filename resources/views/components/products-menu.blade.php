@props(['products'])

<x-layout>
    <div class="card-group min-vh-50 display-flex flex-wrap">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
             @foreach ($products as $product)
             <div class="col my-5">
                <div class="card h-100">
                  <a href=""><img src="https://picsum.photos/300?random={{ rand() }}" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                    <h5 class="card-title">{{ $product->product_name }}</h5>
                    <p class="card-text">{{ $product->product_desc }}</p>
                  </div>
                </div>
              </div>
             @endforeach
            </div>
          </div>

        {{-- <div class="card">
            <img class="card-img-top" src="holder.js/100x180/" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="holder.js/100x180/" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="holder.js/100x180/" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
            </div>
        </div> --}}
    </div>

</x-layout>
