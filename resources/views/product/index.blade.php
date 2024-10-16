<x-layout>
<x-masthead title="I miei prodotti"></x-masthead>

    <div class="container">
        <div class="row mt-5">
            @foreach($products as $product)
                <div class="col-12 col-md-4 mb-4">
                    <x-card :product="$product" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
