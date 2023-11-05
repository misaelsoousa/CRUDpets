@extends('app')

@section('content')
<nav aria-label="breadcrumb" class="p-3 bg-custom-light">
    <div class="container">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item fs-sm"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item fs-sm"><a href="{{route('queroadotar')}}">Quero Adotar</a></li>
            <li class="breadcrumb-item active fs-sm" aria-current="page">{{ $pets->nome }}</li>
            
        </ol>
    </div>
</nav>

    <section class="bg-light py-5">
        <div class="container mb-5">
            <div class="row align-items-start">
                <div class="col-8 d-flex">
                    <div class="col-3 d-flex flex-wrap row-gap-3">
                        @foreach ($imagens as $imagem)
                        <div class="col-12 rounded overflow-hidden">
                            <img src="/storage/{{$imagem->imagem}}" alt="Tini" class="object-fit-cover w-100" height="120">
                        </div>
                        @endforeach
                    </div>

                    @if ($imagemPrincipal)
                    <div class="col-9 rounded overflow-hidden">
                        <img src="{{ $imagemPrincipal->imagem }}" alt="Tini" class="object-fit-cover w-100 ms-3" height="530">
                    </div>
                    @endif
                </div>
                
                <div class="py-3 col-4 d-flex flex-wrap row-gap-3">                   
                    <h2 class="col-12 d-flex align-items-center gap-2">
                    {{ $pets->nome }}
                        @if($pets->sexo == "Feminino")
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-gender-female" viewBox="0 0 16 16">
                            <path fill="#FF7373" fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5z"/>
                        </svg>
                        @endif
                        @if($pets->sexo == "Masculino")
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-gender-male" viewBox="0 0 16 16">
                            <path fill="#006AB0" fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/>
                        </svg>
                        @endif
                    </h2>

                    <div class="col-12">
                        <h3 class="fs-sm destaque m-0">Código</h3> 
                        <div>{{ $pets->id }}</div>
                    </div>

                    <div class="col-6">
                        <h3 class="fs-sm destaque m-0">Espécie</h3> 
                        <div>{{ $pets->especie }}</div>
                    </div>

                    <div class="col-6">
                        <h3 class="fs-sm destaque m-0">Porte</h3> 
                        <div>{{ $pets->porte }}</div>
                    </div>

                    <div class="col-12">
                        <h3 class="fs-sm destaque m-0">Raça</h3> 
                        <div>{{ $pets->porte }}</div>
                    </div>

                    <div class="col-6">
                        <h3 class="fs-sm destaque m-0">Peso</h3> 
                        <div>{{ $pets->peso }} Kg</div>
                    </div>

                    <div class="col-6">
                        <h3 class="fs-sm destaque m-0">Idade</h3> 
                        <div>{{ $pets->idade }} Anos</div>
                    </div>

                    <div class="col-12">
                        <h3 class="fs-sm destaque m-0">Local</h3> 
                        <div>{{ $pets->local }}</div>
                    </div>
                    
                    <div class="col-12">
                        <h3 class="fs-sm destaque m-0">Sobre</h3> 
                        <div>{{$pets->sobre}}</div>
                    </div>

                    <div class="col-12">
                        <a href="{{ route('formulario', ['idPet' => $pets->id, 'nome' => $pets->nome]) }}" class="btn btn-custom mt-5 w-100 d-flex align-items-center justify-content-center gap-2">
                            Solicitar adoção

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-custom py-3" style="background-color: #FFECCE;">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center gap-3">
                <div class="d-flex flex-column align-items-end">
                    <h2 class="bowlby-one text-uppercase h4 m-0">Alguma dúvida?</h2>

                    <a href="#" class="btn btn-custom">Entre em contato</a>
                </div>
                <img src="img_pets/cartoon-cat-3.webp" alt="Gato" width="150">
            </div>
        </div>
    </section>
    

@endsection