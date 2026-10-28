<!doctype html>
<html lang="pt-br" data-bs-theme="light">
    <head>
        <title>Sistema de Tarefas</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <?php include 'header.php'; ?>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <form>
                            <fieldset>
                                <legend>Nova Tarefa</legend>
                                <div class="mb-3">
                                    <label for="tarefa" class="form-label">Tarefa:</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="tarefa"
                                        id="tarefa"
                                        aria-describedby="helpId"
                                        placeholder="Coloque o nome da tarefa"
                                    />
                                    <small id="helpId" class="form-text text-body-secondary"
                                        >Digite o nome da tarefa</small
                                    >
                                <br/>

                                <input type="submit" class="btn btn-primary" value="Cadastrar" />
                                </div>
                                
                            </div>
                                
                            </fieldset>
                        </form>
                    </div>
                    
                </div>
            </div>
        </main>
        <footer>
            <?php include 'footer.php'; ?>
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
