<?php
    $this->session->userdata('user') != null && !empty($this->session->userdata('user')) ? redirect('/main') : '';
?>

<div class="container py-4">
    <div class=" row justify-content-center ">
        <div class="card-body p-4">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1 ">
                <div class="card bg-transparent text-sendary o-hidden border-0 my-5">
                    <div id="showalert"></div>
                        <?php if( $this->alert->has_alert('emailError') ): ?>
                            <div class="alert alert-danger alert-dismissible fade show mb-1" role="alert"><strong><span class="bi bi-info-circle"></span></strong> Adresse email deja utilisé ou invalide !<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                            <?php $this->alert->has_alert('emailError') = false ?>
                        <?php elseif( $this->alert->has_alert('error') ): ?>
                            <div class="alert alert-danger alert-dismissible fade show mb-1" role="alert"><strong><span class="bi bi-info-circle"></span></strong> Une erreur est survenue !<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                            <?php $this->alert->has_alert('error') = false ?>
                        <?php elseif( $this->alert->has_alert('passwordError') ): ?>
                            <div class="alert alert-danger alert-dismissible fade show mb-1" role="alert"><strong><span class="bi bi-info-circle"></span></strong> Mot de passe pas assez sécurisé !<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                            <?php $this->alert->has_alert('passwordError') = false ?>
                        <?php endif; ?>
                    <div class="row justify-content-center d-flex align-items-center ">
                        <div class="col-lg-6 d-md-block d-none p-5 text-center">
                            <img src="<?= assets('img/imglogin.svg') ?>" class="img-fluid" alt="login img">
                        </div>
                        <div class="col-lg-6">
                            <div class="justify-content-between align-items-end d-flex mb-3"><span class="fw-500" style="font-size: 18px;">Create an account</span><span style="font-size: 13px;">or <a href="/">log in</a></span></div>
                            <form action="/app/user/signup" method="post" class="needs-validation" novalidate id="signup-form">
                                <div class="mb-3">
                                    <label for="name" class="form-label text-muted">First name</label>
                                    <input name="name" tabindex="1" type="text" class="form-control" id="name" required>
                                    <div id="nameError"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="lastname" class="form-label text-muted">Last name</label>
                                    <input name="lastname" tabindex="2" type="text" class="form-control" id="lastname">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label text-muted">Email</label>
                                    <input tabindex="3" type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                                    <div id="emailError"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label text-muted">Password</label>
                                    <input tabindex="4" type="password" class="form-control" id="password" name="password" minlength="8" required>
                                    <div id="passwordError"></div>
                                    <span class="text-muted font-notice"><i class="bi bi-info-circle"></i> Doit contenir au moins 8 charactères</span>
                                </div>
                                <div class="justify-content-between align-items-center d-flex mb-3">
                                    <div class=" form-check mt-2">
                                        <div id="consentError"></div>
                                        <input tabindex="5" type="checkbox" class="form-check-input" name="consent" id="consent" value="true" role="switch" required> 
                                        <label class="form-check-label" for="consent"><span style="font-size: 13px;">I agree to the Dropbox <a href="https://www.dropbox.com/terms">Terms of Service.</a> To find out how we use and protect your data, see our <a href="https://www.dropbox.com/privacy">privacy policy</a>.</span></label>
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary mb-3" id="submit-form"><span style="font-size: 13px;" ><span id="spin" hidden></span> Create an account</span></button>
                                    <button type="button" class="btn btn-primary">
                                        <div class="row align-items-center">
                                            <div class="col-1"><i class="bi bi-google"> </i></div>
                                            <div class="col-11 text-center"><span style="font-size: 13px;" >Sign up via Google</span></div>
                                        </div>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <script>
    $(document).ready(function(){
        
    });
</script> -->

<!-- <script>
    // $(document).ready(function(){
    //     var alertmessage = '' ;
    //     var alert = '<div class="alert alert-danger alert-dismissible fade show" role="alert">' 
    //                     '<strong>' + alertmessage + '</strong>'
    //                     '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' 
    //                 '</div>';
    //     function signupForm() {    
    //                 var data = $("#login-form").serialize();
    //                 $.ajax({        
    //                 type : 'POST',
    //                 url  : 'request/user/signup',
    //                 dataType: "json",
    //                 data : data,
    //                 beforeSend: function(){  
    //                     $('#submit-form').attr('disabled', 'disabled');
    //                     $('#spin').attr('class','spinner-border spinner-border-sm');
    //                     $('#spin').removeAttr('hidden');
    //                 },
    //                 success : function(response){      
    //                     if(response.status == false){
    //                         if(response.error == "email-use"){
    //                             alertmessage = 'Adresse email non disponible !' ;
    //                             $("#showalert").html(alert);
    //                         }
    //                         if(response.error == "login-failed" ){
    //                             alertmessage = 'Une erreur est survenue !' ;
    //                             $("#showalert").html(alert);
    //                         }
    //                     }
    //                 }
    //                 });
    //     }

    //     let isPasswordValid = false;
    //     const passwordPattern = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}/;
    //     let isEmailValid = false;
    //     let isEmailDispo = true;
    //     const emailPattern =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/

    //     const form = document.getElementById('signup-form');

    //     const formData = new FormData(form);
    //     const password = formData.get('password');
    //     const email = formData.get('email');

    //     isPasswordValid = passwordPattern.test(password); 
    //     isEmailValid = emailPattern.test(email); 

    //     $("#submit-form").click(function(){
    //         $("#submit-form").click(function(){
    //             if (!form.checkValidity() || isPasswordValid != true || (isEmailValid != true && isEmailDispo != true)) {
    //                 event.preventDefault()
    //                 event.stopPropagation()
    //             }
    //             form.classList.add('was-validated')
    //         });

    // ---------------------------------------------------------------------------------------------------------------

            // $("#signup-form").validate({
            //     rules: {
            //     password: {
            //         required: true,
            //         minlength: 8,
            //         depends : isPasswordValid = passwordPattern.test(password),
            //     },
            //     email: {
            //         required: true,
            //         email: true,
            //     },
            //     name: {
            //         required: true,
            //     },
            //     consent : {
            //         required: true,
            //     },
            //     },
            //     messages: {
            //         password:{
            //             required: "veuillez entrer un mot de passe",
            //             minlength : "mot de passe trop court",
            //             depends : "mot de passe pas assez sécurisé",
            //         },
            //         email: { 
            //             required :"entrer votre email",
            //             email : "email invalide",
            //         },
            //         name : "renseigner votre nom",
            //         consent : "vous devez cocher cette case"
            //     },
            //     submitHandler: signupForm 
            // }); 
        });
    }); 
</script> -->





<script>
    (() => {
        var alertmessage = '' ;
        var iderror = '';
        var alert = '<div id="';
        var alert2 = '" class="alert alert-danger alert-dismissible fade show mt-1 p-1" style="font-size: 13px" role="alert">';
        var alert3 = '</div>';

        // let isPasswordValid = false;
        // const passwordPattern = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}/;
        // let isEmailValid = false;
        // let isEmailDispo = true;
        // const emailPattern =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/

        const form = document.getElementById('signup-form');

        // const formData = new FormData(form);
        // const password = formData.get('password');
        // const email = formData.get('email');

        // isPasswordValid = passwordPattern.test(password); 
        // isEmailValid = emailPattern.test(email); 

    $("#submit-form").click(function(){
        if (!form.checkValidity() /*|| isPasswordValid != true || (isEmailValid != true && isEmailDispo != true)*/) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.classList.add('was-validated')
        // if(isPasswordValid !== true){
        //     alertmessage = 'Mot de passe pas assez sécurisé' ;
        //     iderror = 'passworderror1';
        //     $('#passwordError').html(alert+iderror+alert2+alertmessage+alert3);
        // }else{$('#passworderror1').remove();}
        // if(isEmailValid != true || isEmailDispo != true){
        //     alertmessage = 'Adresse email invalide' ;
        //     iderror = 'emailerror1';
        //     $('#emailError').html(alert+iderror+alert2+alertmessage+alert3);
        // }else{$('#emailerror1').remove();}
    });
    })()
</script>
