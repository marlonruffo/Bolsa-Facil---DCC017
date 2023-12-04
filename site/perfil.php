<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa fácil</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/perfil.css">

</head>
<body>
    <Section class="perfil">
        <h1 class="titulo">Perfil</h1>
        <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150" src="/img/contato.png" alt="Imagem de perfil">
                    <span class="font-weight-bold">Nome</span>
                    <span class="font-weight-sem-bold">Email</span>
                </div>
            </div>
            <div class="col-md-9">
                <div class="p-3 py-5">
                    <h2 class="mb-4">Informações Pessoais</h2>
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Nome</label>
                                <input type="text" class="form-control " id="inputName" placeholder="Seu nome">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Seu email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="inputMatricula" class="form-label">Matrícula</label>
                                <input type="text" class="form-control" id="inputMatricula" placeholder="Sua matrícula">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCurso" class="form-label">Curso</label>
                                <input type="text" class="form-control" id="inputCurso" placeholder="Seu curso">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="inputTelefone" class="form-label">Telefone</label>
                                <input type="text" class="form-control" id="inputTelefone" placeholder="Seu telefone">
                            </div>
                            <div class="col-md-6">
                                <label for="inputIdade" class="form-label">Idade</label>
                                <input type="text" class="form-control" id="inputIdade" placeholder="Sua idade">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="inputPeriodo" class="form-label">Período Atual</label>
                                <input type="text" class="form-control" id="inputPeriodo" placeholder="Seu período atual">
                            </div>
                            <div class="col-md-6">
                                <label for="profileImage" class="form-label">Imagem de Perfil</label>
                                <input type="file" class="form-control alinhar" id="profileImage" accept="image/*">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="resume" class="form-label">Currículo</label>
                                <input type="file" class="form-control alinhar" id="resume" accept=".pdf, .doc, .docx">
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <button type="submit" class="btn btn-primary btnsalvar">Salvar Perfil</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    </Section>
</body>
</html>