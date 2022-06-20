<?php include("header.php") ?>
<div class="container">
    <div class="row justify-content-md-center" style="margin-top:10%; margin-bottom:10%;">
        <form class="col-3" id="enviaremail" method="post">
            <h2>Restablecer Password</h2>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" id="email" name="cc_to" required>

            </div>
            <input type="submit" id="button" class="btn btn-primary" value="Restablecer">
        </form>
    </div>
</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

<script type="text/javascript">
    emailjs.init('y_ElvjYidj4L-FVn-')
    const btn = document.getElementById('button');

    document.getElementById('enviaremail')
        .addEventListener('submit', function(event) {
            event.preventDefault();

            btn.value = 'Enviando...';

            const serviceID = 'default_service';
            const templateID = 'template_8ji3fn8';

            emailjs.sendForm(serviceID, templateID, this)
                .then(() => {
                    btn.value = 'Restablecer';
                    window.location.replace("true_enviado.php");
                }, (err) => {
                    btn.value = 'Restablecer';
                    window.location.replace("false_enviado.php");
                });
        });
</script>
<?php include("footer.php") ?>