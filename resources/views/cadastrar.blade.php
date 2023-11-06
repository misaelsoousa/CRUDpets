<!DOCTYPE html> <html lang="pt-br" class="h-100"> <head> <meta charset="UTF-8"> <meta name="viewport"
    content="width=device-width, initial-scale=1.0"> <title>KBRTEC ADMIN </title> <link rel="icon" type="image/x-icon"
    href="img_admin/favicon.ico">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous"> <link href="css/style.css" rel="stylesheet"> </head> <body class="bg-dark h-100"> <header
    class="bg-light py-2 shadow">
<div class="container-fluid"> <div class="row"> <div style="width: 250px;">
    <a href="{{route('home')}}">
    <img src="img_admin/kbrtec.webp" alt="KBRTEC" height="60" width="150"
    class="object-fit-contain"> </div>
<div class="col dropdown d-flex align-items-center justify-content-end">
    <div class="d-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> Bem
    vindo Admin! <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=?bi
    bi-gear-fill ms-2 viewBox="0 0 16 16">
    </a>
    <path fill="#6c757D" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0
    1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872
    2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686
    1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0
    1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1
    .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0
    1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8
    10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" /> </svg>
    </div>


    <ul class="dropdown-menu">
        <li>
            <a class="dropdown-item text-end" href="#">
                <small>Alterar Senha</small>
            </a>
            <a class="dropdown-item text-end" href="{{route('login.form')}}">
                <small>Sair</small>
            </a>
        </li>
    </ul>
</div>
</div>
</div>
</header>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="d-flex" style="min-height: calc(100vh - 76px - 72px);">
    <aside class="bg-custom text-light py-4" style="width: 250px;">
        <div class="menu">
            <div class="item">
                <div class="w-100 d-flex align-items-center gap-2 link-light text-decoration-none mt-2 py-3 px-3 border-start border-light border-4"
                    type="button" data-bs-toggle="collapse" data-bs-target="#menu-usuario" aria-expanded="true"
                    aria-controls="menu-usuario">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg>

                    Pets
                </div>

                <div class="collapse show" id="menu-usuario">
                    <div class="bg-dark d-flex flex-column rounded mx-4 p-2 row-gap-1">
                        <a href="{{route('cadastrar')}}"
                            class="submenu-link link-light text-decoration-none rounded p-2 active">
                            <small class="d-flex justify-content-between align-items-center">
                                Cadastrar
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </small>
                        </a>
                        <a href="{{route('painel')}}" class="submenu-link link-light text-decoration-none rounded p-2 ">
                            <small class="d-flex justify-content-between align-items-center">
                                Listagem Pets

                            </small>
                        </a>
                        <a href="{{route('painel-solicitacoes')}}"
                            class="submenu-link link-light text-decoration-none rounded p-2 ">
                            <small class="d-flex justify-content-between align-items-center">
                                Listagem Solicitações
                            </small>
                        </a>
                    </div>
                </div>
            </div>

            <a href="{{route('login.logout')}}"
                class="w-100 d-flex align-items-center gap-2 link-light text-decoration-none mt-2 py-3 px-3 ms-1 icon-link icon-link-hover"
                style="--bs-icon-link-transform: translate3d(-.125rem, 0, 0);">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                    class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                    <path fill-rule="evenodd"
                        d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                </svg>

                Sair
            </a>
        </div>
    </aside>

    <main class="col h-100 text-light p-4">
        <div class="d-flex align-items-end justify-content-between mb-4">
            <h1 class="h3">Cadastrar Animal</h1>

        </div>
        <div class="d-flex ">
            <a href="{{ route('painel') }}" class="btn btn-light">Voltar</a>
        </div>



        <form action="{{route('cadastrar-store')}}" method="POST" enctype="multipart/form-data"
            class="bg-custom rounded p-4 mt-4 col-6 row">
            @csrf
            <div class="form-group py-2 col-5">
                <label for="nome" class="text-capitalize text-light">Nome:</label>
                <input type="text" pattern="[A-Za-z]+" class="form-control bg-dark text-light border-dark" name="nome" id="nome">
            </div>

            <div class="form-group py-2 col-5">
                <label for="especie" class="text-capitalize text-light">Espécie </label>
                <input type="text" pattern="[A-Za-z]+" class="form-control bg-dark text-light border-dark" name="especie" id="especie"
                    value="{{ request('nome') }}">
            </div>

            <div class="form-group py-2 col-5">
                <label for="raca" class="text-capitalize text-light">Raça:</label>
                <input type="text" class="form-control bg-dark text-light border-dark" name="raca" id="raca">
            </div>

            <div class="form-group py-2 col-5">
                <label for="idade" class="text-capitalize text-light">Idade:</label>
                <input type="text" class="form-control bg-dark text-light border-dark" name="idade" id="idade">
            </div>

            <div class="form-group py-2 col-5">
                <label for="peso" class="text-capitalize text-light">Peso:</label>
                <input type="text" class="form-control bg-dark text-light border-dark" required name="peso" id="peso">
            </div>

            <div class="form-group py-2 col-5">
                <label for="porte" class="text-capitalize text-light">Porte</label>
                <input type="text" class="form-control bg-dark text-light border-dark" required name="porte" id="porte">
            </div>

            <div class="form-group py-2 col-5">
                <label for="local" class="text-capitalize text-light">Local</label>
                <input type="text" class="form-control bg-dark text-light border-dark" required name="local" id="local">
            </div>

            <div class="form-group py-2 col-5">
                <label for="sobre" class="text-capitalize text-light">Sobre</label>
                <input type="text" class="form-control bg-dark text-light border-dark" required name="sobre" id="sobre">
            </div>

            <div class="form-group py-2 col-5">
                <label for="sexo" class="text-capitalize text-light">Sexo</label>
                <select name="sexo" class="form-control bg-dark text-light border-dark form-select" id="sexo">
                    <option value="" disabled selected>Selecione</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Masculino">Masculino</option>
                </select>
            </div>

            <div class="form-group py-2 col-5">
            <label for="status" class="text-capitalize text-light">Status</label>
                <select name="status" class="form-control bg-dark text-light border-dark form-select" id="status">
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Ativado</option>
                    <option value="0">Desativado</option>
                </select>
            </div>
            <br>
            <label for="imagem" class="custom-upload-button custom-upload-label">
                <input required enctype="multipart/form-data" multiple type="file" name="imagem" id="imagem">
            </label>

            <div class="col-12 d-flex  mt-4">
                <input type="submit" name="submit" class="btn btn-light" value="Cadastrar">
            </div>
        </form>

        <div class="bg-custom rounded overflow-hidden">

        </div>
    </main>
</div>


<footer class="bg-custom text-light text-center py-4">
    <small>© Copyright 2023 - KBR TEC - Todos os Direitos Reservados</small>
</footer>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var input = document.getElementById("idade");
    Inputmask({ mask: '99/99/9999' }).mask(input); // Substitua '99/99/9999' pela máscara desejada
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
    <script src="{{ asset('js/inputmask.js') }}"></script>
</body>

</html>