<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBRTEC ADMIN</title>

    <link rel="icon" type="image/x-icon" href="img_admin/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body class="bg-dark h-100">
    <header class="bg-light py-2 shadow">
        <div class="container-fluid">
            <div class="row">
                <div style="width: 250px;">
                    <img src="img_admin/kbrtec.webp" alt="KBRTEC" height="60" width="150" class="object-fit-contain">
                </div>

                <div class="col dropdown d-flex align-items-center justify-content-end">
                    <div class="d-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Bem vindo Admin!
    
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill ms-2" viewBox="0 0 16 16">
                            <path fill="#6c757D"  d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                        </svg>
                    </div>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item text-end" href="#">
                                <small>Alterar Senha</small>
                            </a>
                            <a class="dropdown-item text-end" href="{{route('login')}}">
                                <small>Sair</small>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="d-flex" style="min-height: calc(100vh - 76px - 72px);">
        <aside class="bg-custom text-light py-4" style="width: 250px;">
            <div class="menu">
                <div class="item">
                    <div class="w-100 d-flex align-items-center gap-2 link-light text-decoration-none mt-2 py-3 px-3 border-start border-light border-4" type="button" data-bs-toggle="collapse" data-bs-target="#menu-usuario" aria-expanded="true" aria-controls="menu-usuario">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
    
                        Usuários
                    </div>

                    <div class="collapse show" id="menu-usuario">
                        <div class="bg-dark d-flex flex-column rounded mx-4 p-2 row-gap-1">
                            <a href="{{route('cadastrar')}}" class="submenu-link link-light text-decoration-none rounded p-2">
                                <small class="d-flex justify-content-between align-items-center">
                                    Cadastrar
                                </small>
                            </a>
                            <a href="{{route('painel')}}" class="submenu-link link-light text-decoration-none rounded p-2">
                                <small class="d-flex justify-content-between align-items-center">
                                    Listagem
                                </small>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="{{route('login')}}" class="w-100 d-flex align-items-center gap-2 link-light text-decoration-none mt-2 py-3 px-3 ms-1 icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(-.125rem, 0, 0);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                    </svg>

                    Sair
                </a>
            </div>
        </aside>

        <main class="col h-100 text-light p-4">
            <div class="d-flex align-items-end justify-content-between mb-4">
                <h1 class="h3">Editar Usuário</h1>

                <a href="{{route('painel')}}" class="btn btn-light">Voltar</a>
            </div>

            <form action="{{ route('painel-update', ['id'=>$pets->id]) }}" method="POST" class="bg-custom rounded col-12 py-3 px-4">
            @csrf
            @method('PUT')
             <div class="mb-3 row">
                  <label for="nome" class="col-sm-1 col-form-label">Nome:</label>
             <div class="col-sm-2">
                <input type="text" name="nome" value="{{$pets->nome}}" class="form-control bg-dark text-light border-dark" id="nome" placeholder="Ex: Tini">
             </div>
                  <label for="especie" class="col-sm-1 col-form-label">Espécie:</label>
             <div class="col-sm-2">
                      <input type="text" name="especie" value="{{$pets->especie}}" class="form-control bg-dark text-light border-dark" id="especie">
             </div>
                   <label for="raca" class="col-sm-1 col-form-label">Raça:</label>
             <div class="col-sm-2">
                <input type="text" name="raca" value="{{$pets->raca}}" class="form-control bg-dark text-light border-dark" id="raca">
            </div>
            </div>

            <div class="mb-3 row">
            <label for="idade" class="col-sm-1 col-form-label">Idade:</label>
            <div class="col-sm-1">
                <input type="text" name="idade" value="{{$pets->idade}}" class="form-control bg-dark text-light border-dark" id="idade">
            </div>
            <label for="peso" class="col-sm-1 col-form-label">Peso:</label>
            <div class="col-sm-1">
                <input type="text" name="peso" value="{{$pets->peso}}" class="form-control bg-dark text-light border-dark" id="peso">
            </div>
            <label for="porte" class="col-sm-1 col-form-label">Porte:</label>
            <div class="col-sm-1">
                <input type="text" name="porte" value="{{$pets->porte}}" class="form-control bg-dark text-light border-dark" id="porte">
            </div>
            <label for="local" class="col-sm-1 col-form-label">Local:</label>
            <div class="col-sm-1">
                <input type="text" name="local" value="{{$pets->local}}" class="form-control bg-dark text-light border-dark" id="local">
            </div>
            <label for="sobre" class="col-sm-1 col-form-label">Sobre:</label>
            <div class="col-sm-1">
                <input type="text" name="sobre" value="{{$pets->sobre}}" class="form-control bg-dark text-light border-dark" id="sobre">
            </div>

            <label for="sexo" class="col-sm-1 col-form-label">Sexo:</label>
            <div class="col-sm-1">
                <input type="text" name="sexo" value="{{$pets->sexo}}" class="form-control bg-dark text-light border-dark" id="sexo">
            </div>
            </div>

            <div class="mb-3 row">
            <label for="status" class="col-sm-1 col-form-label">Status:</label>
            <div class="col-sm-1">
                <input type="text" name="status" value="{{$pets->status}}" class="form-control bg-dark text-light border-dark" id="status">
            </div>
            </div>


            <div class="d-flex justify-content-end">
            <input type="submit" value="Atualizar" class="btn btn-light">
            </div>
</form>

            <div class="bg-custom rounded overflow-hidden">

            </div>
        </main>
    </div>

    <footer class="bg-custom text-light text-center py-4">
        <small>© Copyright 2023 - KBR TEC - Todos os Direitos Reservados</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>