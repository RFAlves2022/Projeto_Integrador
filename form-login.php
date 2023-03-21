<?php include_once "header.php" ?>

<main>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <form method="post" action="validar-login.php">
                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <br>
                                    <p>Preencha os campos para entrar</p>
                                    <br>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="typeEmailX">E-mail</label>
                                        <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="typePasswordX">Senha</label>
                                        <input type="password" name="senha" id="typePasswordX"
                                            class="form-control form-control-lg" />
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Entrar</button>

                                </form>
                            </div>

                            <div>
                                <p class="mb-0">Crie um perfil para entrar!<br><a href="form-cadastro.php"
                                        class="text-white-50 fw-bold">Cadastrar-se</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php include_once "footer.php" ?>