<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBRTEC ADMIN</title>
    <link rel="icon" type="image/x-icon" href="img_admin/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body class="bg-dark">
    <main class="py-5" style="min-height: calc(100vh - 72px);">
        <div class="container">
            <div class="bg-custom mx-auto row col-8 rounded shadow-sm overflow-hidden">
                <div class="col-6 d-flex align-items-center p-5">
                    <form method="POST" action="{{ route('recuperar-novasenha') }}" class="form w-100">
                        @csrf
                        <h2 class="h4 text-light mb-4">Recuperar senha</h2>
    
                        <div class="row row-gap-3">
                            <div class="col-12 form-group text-light">
                                <label for="senha">Nova senha:</label>
                                <input type="password" name="password" class="form-control bg-dark border-dark text-light" id="password" placeholder="example@kbrtec.com.br">
                            </div>
                            <input type="hidden" name="id" value="{{$id}}" class="form-control bg-dark border-dark text-light" id="id" placeholder="example@kbrtec.com.br">
                            <div class="col-12">
                                <button type="submit" class="btn btn-light mt-3">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>


    <footer class="bg-custom text-light text-center py-4">
        <small>© Copyright 2023 - KBR TEC - Todos os Direitos Reservados</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
