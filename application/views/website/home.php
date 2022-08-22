<?php ?>
 
<div class="container py-4">
    <div class=" row justify-content-center ">
        <div class="card-body p-0">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1 ">
                <div class="card bg-transparent text-sendary o-hidden border-0 my-5">
                    <!--<h2 class="form-header text-primary text-center"> Welcome Back </h2>
                    <div class=" text-center alert alert-danger alert-dismissible fade show " role="alert">
                        a
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>-->
                    <div class="row justify-content-center d-flex align-items-center ">
                        <!-- <div class="col-lg-6 d-lg-block p-5 text-center d-none "> -->
                        <div class="col-lg-6 d-lg-block p-5 text-center">
                            <img src="<?= assets('img/imglogin.svg') ?>" class="img-fluid" alt="login img">
                        </div>
                        <div class="col-lg-6 p-5 text-secondary">
                            <div class="justify-content-between d-flex"><span class="fw-bold">Sign-in</span><span>or <a href="">create an acount</a></span></div>
                            <div class="d-grid gap-2">
                                <a href="" class="row btn btn-primary"><span class="fw-bold col-2 text-start"><i class="bi bi-google"></i></span><span class="fw-bold col-10 text-center">Sign in with google</span></a>
                            </div>
                            <form action="" method="post" enctype="multipart/form-data"   class="row needs-validation" class="needs-validation" novalidate>
                                <!-- <h2 class="form-header text-primary justify-content-left"> Welcome Back </h2> -->
                                <div class="form-floating mb-3">
                                    <input name="email" value="" id="email" type="email" class=" border-0 form-control" placeholder="Email address" required>
                                    <label class="" for="email">Email Adress</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input name="password" type="password" class=" border-0 form-control" placeholder="Password (6+ characters)" required>
                                    <label class="" for="password">Password</label>
                                </div>
                                <small class="text-center">
                                    By clicking login you agree to RupaSan 
                                    <a href="#" class="text-decoration-none">User Agreement,</a>
                                    <a href="#" class="text-decoration-none">Privacy Policy,</a> and
                                    <a href="#" class="text-decoration-none">Cookie Policy.</a>
                                </small>
                                <div class="d-grid gap-2 mt-3">
                                    <button type="submit" class="btn  btn-primary">
                                        <span class="fw-bold">Login</span>
                                    </button>
                                </div>
                                
                            </form>
                            <div class="row my-2">
                                <div class=" col-3">
                                    <hr class="featurette-divider">
                                </div>
                                <div class="text-center col-6">
                                    <small class="">Not registered yet?</small>
                                </div>
                                <div class="col-3">
                                    <hr class="featurette-divider">
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="" class="  btn btn-outline-primary">
                                    <span class="fw-bold">Sign up</span>
                                </a>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>