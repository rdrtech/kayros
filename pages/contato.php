<div class="wow container contact animate__animated animate__fadeIn" data-wow-duration="2s">
    <div class="row">
        <div class="col-md-3">
            <div class="contact-info">
                <img src="./img/envelope.png" alt="imagem_envelope" />
                <h2>Contato</h2>

            </div>
        </div>
        <div class="col-md-9">
        <form action="mail.php" method="post">
            <div class="contact-form">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="fname">Nome: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fname" placeholder="Nome" name="fname" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email: </label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="email@email.com" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="comment">Mensagem: </label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="5" id="msg" name="msg"
                            placeholder="Escreva aqui sua sugestão ou dúvida e entraremos em contato."></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">                        
                        <button type="submit" class="btn btn-default">Enviar</button>
                    </div>
                </div>
                <div name="sucesso" id="sucesso" hidden="true" class="alert alert-success" role="alert">
    Email enviado com sucesso!!!</div>
    </div>
            </div>
        </form>
        </div>
    </div>
    <div class="row">
    
</div>