<?php include_once "header.php" ?>

<main>
    <section class="vh-100 gradient-custom bg-secondary">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-danger text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <form method="post" action="cadastrar-usuario.php">
                                    <h2 class="fw-bold mb-2 text-uppercase">Crie sua conta</h2>
                                    
                                    <div class="form-outline mb-3 mt-md-5">
                                        <label class="form-label">Nome de usuario</label>
                                        <input type="text" name="username" class="form-control form-control-md" />
                                    </div>  

                                    <div class="form-outline mb-3">
                                        <label class="form-label">E-mail</label>
                                        <input type="email" name="email" class="form-control form-control-md" />
                                    </div>

                                    <div class="form-outline form-white mb-3">
                                        <label class="form-label">Senha</label>
                                        <input type="password" name="senha"
                                            class="form-control form-control-md" />
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Cadastrar-se</button>

                                </form>
                            </div>

                            <div>
                                <p class="mb-0">Ja é cadastrado? Entre<br><a href="form-login.php"
                                        class="text-white-50 fw-bold">Ir para login</a>
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