<!-- Footer-->
<footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; Todos os diretos reservados.</div>
                <a href="#!">Privacidade</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">Termos de uso</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">FAQ</a>
            </div>
        </div>
    </footer>
    <!-- Feedback Modal-->
    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body border-0 p-4">
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Nome completo</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">O nome é Obrigatório.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">E-mail</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">O email é obrigatório.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email invalido..</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="cep" type="text" placeholder="00000-00" data-sb-validations="required" />
                            <label for="email">Cep</label>
                            <div class="invalid-feedback" data-sb-feedback="cep:required">O Cep é obrigatório.</div>
                            <div class="invalid-feedback" data-sb-feedback="cep:cep">Cep invalido..</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="bairro" type="text" placeholder="00000-00" data-sb-validations="required" />
                            <label for="bairro">Bairro</label>
                            <div class="invalid-feedback" data-sb-feedback="bairro:required">O Bairro é obrigatório.</div>
                            <div class="invalid-feedback" data-sb-feedback="bairro:bairro">Bairro invalido..</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="logradouro" type="text" placeholder="00000-00" data-sb-validations="required" />
                            <label for="logradouro">Logradouro</label>
                            <div class="invalid-feedback" data-sb-feedback="logradouro:required">O Logradouro é obrigatório.</div>
                            <div class="invalid-feedback" data-sb-feedback="logradouro:logradouro">Logradouro invalido..</div>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Coloque sua mensagem aqui..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Mensagem</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Uma mensagem é obrigatório.</div>
                        </div>
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form enviado sucesso!</div>
                            </div>
                        </div>
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Erro ao enviar a mensagem!</div>
                        </div>
                        <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg disabled" id="submitButton" type="submit">Enviar</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>