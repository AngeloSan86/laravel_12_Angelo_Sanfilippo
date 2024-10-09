<x-layout>

    <header class="header">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-md-6 d-flex justify-content-center">

                    <h1 class="text-center mt-5">
                        Modifica articolo
                    </h1>


                </div>
            </div>
        </div>
    </header>

    <x-display-message/>

    <x-display-errors/>

    <div class="container">
        <div class="row justify-content-center p-0">
            <div class="col-12 col-md-6 justify-content-center">

                <form class="mt-5 rounded-top-4 shadow bg-secondary-subtle p-3" action="{{route('article.update', compact('article'))}}" method="POST" enctype="multipart/form-data">


                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo articolo</label>
                        <input name="title" type="text" value="{{$article->title}}" class="form-control" id="title" >
                    </div>

                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo articolo</label>
                        <input name="subtitle" type="text" value="{{$article->subtitle}}" class="form-control" id="subtitle">
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'articolo</label>
                        <textarea name="body" class="form-control" id="body" cols="30" rows="10">{{$article->body}}</textarea>
                    </div>

                    <div class="mb-3">

                        <label for="img" class="form-label">Inserisci immagine</label>
                        <input name="img" type="file" class="form-control me-2" id="img">

                    </div>
                    
     

                    <button type="submit" class="btn btn-primary mt-2">Modifica articolo</button>

                   

                </form>



            </div>
            
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center p-0">
            <div class="col-12 col-md-6 justify-content-center">

            <form class="rounded-bottom-4 mb-5 shadow bg-secondary-subtle p-3" action="{{route('article.destroy', compact('article'))}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-primary mb-1">
                                
                        Elimina articolo

                    </button>


                </form>

            </div>
            
        </div>
    </div>



</x-layout>