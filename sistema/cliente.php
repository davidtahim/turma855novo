<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
		include 'parts/header.php';
	?>

<body>
    <div class="wrapper">
        <?php
			include 'parts/nav.php';
		?>

        <div class="main">
            <?php
		include 'parts/topo.php';
		?>
            <main class="content">
                <div class="container-fluid">
                    <h1 class="h3 p-0">Clientes</h1>
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Formulário do Cliente</h5>
                                </div>
                                <div class="card-body">
                                    <form action="scripts/cadastrocliente.php" method="post">
                                        <div class="mb-3">
                                            <label for="nome" class="form-label">Nome Completo</label>
                                            <input type="text" class="form-control" name="nome" id="nome"
                                                placeholder="Digite seu nome" autocomplete="off" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">E-mail</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Digite seu e-mail" autocomplete="off" required>
                                        </div> 
                                    </form>
                                        <h4 class="card-title">Title</h4>
                                        <p class="card-text">Text</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">Column</div>
                    <div class="col-4">Column</div>
                </div>
        </div>

        </main>


        <?php
				include 'parts/footer.php';
			?>

    </div>
    </div>

    <script src="js/app.js"></script>

</body>

</html>