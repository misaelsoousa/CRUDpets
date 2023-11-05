@extends('app')

@section('content')

<nav aria-label="breadcrumb" class="p-3 bg-custom-light"> <div class="container">
    <ol class="breadcrumb m-0"> <li class="breadcrumb-item fs-sm"><a href="{{route('home')}}">Home</a></li> ?li
        class="breadcrumb-item fs-sm"><a href="{{route('queroadotar')}}">Quero Adotar</a></li> <li
        class="breadcrumb-item fs-sm"><a href="{{ route('adotar', ['id'=> request('id'),'nome'=> request('nome')
    ])}}">Tini</a></li>
    <li class="breadcrumb-item active fs-sm" aria-current="page">Formulário de Solicitação</li>
    </ol>
    </div>
    </nav>

    <section class="bg-light py-5"> <div class="container mb-5"> <h2
        class="m-0 bowlby-one text-uppercase h5 text-center">Solicitação de adoção</h2>

        <p class="text-center">Preencha aqui os dados da pessoa interessada em adotar o animal selecionado:</p>

        <form action=" {{route('formulario-store')}}" method="POST"
            class="bg-custom rounded p-4 mt-4 col-6 mx-auto row">
            @csrf
            <div class="form-group py-2 col-12">
            <label for="solicitante" class="text-capitalize text-light">Seu nome:</label>
            <input type="text" class="form-control" name="solicitante" id="solicitante">
            </div>

            <div class="form-group py-2 col-12">
            <label for="animal" class="text-capitalize text-light">Nome <span class="text-lowercase">do</span>
            animal:</label>
            <input type="text" class="form-control" name="animal" id="animal" value="{{ request('nome') }}" disabled>
            </div>

            <div class="form-group py-2 col-6">
            <label for="cpf" class="text-capitalize text-light">CPF:</label>
            <input type="text" class="form-control" name="cpf" id="cpf">
            </div>

            <input type="hidden" name="idPet" id="id" value="{{ request('id') }}">

            <div class="form-group py-2 col-6">
                <label for="email" class="text-capitalize text-light">E-mail:</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="form-group py-2 col-6">
                <label for="cel" class="text-capitalize text-light">Celular:</label>
                <input type="text" class="form-control" required name="celular" id="celular">
            </div>

            <div class="form-group py-2 col-6">
                <label for="nascimento" class="text-capitalize text-light">Data <span class="text-lowercase">de</span>
                    Nascimento:</label>
                <input type="datetime-local" class="form-control" required name="data_nas" id="data_nas">
            </div>

            <div class="mb-3">
                <div class="g-recaptcha @error('g-recaptcha-response') is-invalid @enderror"
                    data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                @if ($errors->has('g-recaptcha-response'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                </span>
                @endif
            </div>

            <div class="col-12 d-flex justify-content-center mt-4">
                <input type="submit" name="submit" class="btn btn-custom-2" value="Solicitar">
            </div>
            </form>
            </div>
            </section>


            @endsection