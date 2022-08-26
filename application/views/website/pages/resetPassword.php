<?php
    $this->session->userdata('user') != null && !empty($this->session->userdata('user')) ? redirect('/main') : '';
?>

<div class="container py-4">
    <div class=" row justify-content-center ">
        <div class="card-body p-4">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1 ">
                <div class="card bg-transparent text-sendary o-hidden border-0 my-5">
                        <?php if( $this->alert->has_alert('no-email') ): ?>
                            <div class="alert alert-danger alert-dismissible fade show mb-1" role="alert"><strong><span class="bi bi-info-circle"></span></strong> Adresse email invalide ou non enregistré  !<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                        <?php elseif( $this->alert->has_alert('mail_sent') ): ?>
                            <div class="alert alert-success alert-dismissible fade show mb-1" role="alert"><strong><span class="bi bi-info-circle"></span></strong> Good <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                        <?php endif; ?>
                    <div class="row justify-content-center d-flex align-items-center ">
                        <div class="col-md-10 offset-md-1">
                            <form action="/app/reset_password" class="mt-3" method="post" class="needs-validation" novalidate id="signin-form">
                                <div class="mb-2" style="font-size: 24px; font-weight: normal;">
                                    Mot de passe oublié ?
                                </div>
                                <div class="mb-4" style="font-size: 13px;">
                                    Saisissez votre adresse e-mail pour réinitialiser votre mot de passe. Vous devrez peut-être consulter votre dossier de spams ou ajouter l'adresse no-reply@dropbox.com à votre liste d'expéditeurs autorisés.
                                </div>
                                <div class="mb-3">
                                    <!-- <label for="email" class="form-label text-muted">Email</label> -->
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                                </div>
                                <div class="justify-content-end align-items-center d-flex mb-3">
                                    <button type="submit" id="submit-form" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                            <a href="#" class="">Une préocupation ?</a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    (() => {
        const form = document.getElementById('signin-form');

        $("#submit-form").click(function(){
            if (!form.checkValidity() ) {
                event.preventDefault()
                event.stopPropagation()
            }
            form.classList.add('was-validated')
        });
    })()
</script>
