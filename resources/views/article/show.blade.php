<x-layout>

    <x-masthead title="Articolo con id {{$article->id}}"></x-masthead>

    <div class="container">
        <div class="row my-3">

                <div class="col-12 col-md-4 mb-4">
                    <x-card_article_show :article="$article" />
                </div>

        </div>
    </div>
</x-layout>
