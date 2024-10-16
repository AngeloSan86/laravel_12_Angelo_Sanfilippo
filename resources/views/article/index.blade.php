<x-layout>
<x-masthead title="I miei articoli"></x-masthead>

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
