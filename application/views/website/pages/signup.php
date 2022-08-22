<?php ?>

<div class="container py-4">
    <div class=" row justify-content-center ">
        <div class="card-body p-4">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1 ">
                <div class="card bg-transparent text-sendary o-hidden border-0 my-5">
                    <div class="row justify-content-center d-flex align-items-center ">
                        <div class="col-lg-6 d-md-block d-none p-5 text-center">
                            <img src="<?= assets('img/imglogin.svg') ?>" class="img-fluid" alt="login img">
                        </div>
                        <div class="col-lg-6">
                            <div class="justify-content-between align-items-end d-flex mb-3"><span class="fw-500" style="font-size: 18px;">Create an account</span><span style="font-size: 13px;">or <a href="/">log in</a></span></div>
                            <div class="d-grid gap-2">
                                <a href="#" class=" btn _black mb-1">
                                    <div class="row align-items-center"><div class="col-2 text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24.5" height="24.5" viewBox="0 0 48 48"><defs><path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"/><path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z"/><path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z"/><path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"/></svg></div><div class="fw-bold text-center col-10">Sign in with Google</div></div>
                                </a>
                                <a href="#" class=" btn _black mb-3">
                                    <div class="row align-items-center"><div class="col-2 text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24.5" height="24.5" fill="currentColor" class="bi bi-apple" viewBox="0 0 16 16"><path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"/><path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"/></svg></div><div class="fw-bold text-center col-10">Sign in with Apple</div></div>
                                </a>
                                <div class="hr-label text-center"><span clas="hr-label_text">or</span></div>
                            </div>
                            <form class="mt-3" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label text-muted">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label text-muted">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="justify-content-between align-items-center d-flex mb-3">
                                    <div class=" form-check mt-2">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Remenber me</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                            </form>
                            <a href="#" class="">Forgot your password?</a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>