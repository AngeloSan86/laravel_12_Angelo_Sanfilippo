<x-layout>
    <header class="header">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <h1 class="text-center mt-5">I miei articoli:</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row my-3">
            @foreach($articles as $article)
                <div class="col-12 col-md-4 mb-4">
                    <x-card_article :article="$article" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
