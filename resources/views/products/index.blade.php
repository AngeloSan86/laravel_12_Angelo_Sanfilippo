<x-layout>
    <header class="header">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <h1 class="text-center mt-5">I miei prodotti:</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-12 col-md-4 mb-4"> <!-- Colonna per 3 card -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-2">{{ $product->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary text-center mb-3">{{ $product->price }} €</h6>
                            <p class="card-text">{{ $product->description }}</p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
