<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <section class="d-flex align-items-center min-vh-100 py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <div class="lc-block">
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_kcsr6fcp.json"
                            background="transparent" speed="1" loop="" autoplay=""></lottie-player>
                    </div>
                </div>
                <div class="col-md-6 text-center text-md-start ">
                    <div class="lc-block mb-3">
                        <div editable="rich">
                            <!-- <h1 class="fw-bold h4">PAGE NOT FOUND!<br></h1> -->
                        </div>
                    </div>
                    <div class="lc-block mb-3">
                        <div editable="rich">
                            <h1 class="display-1 fw-bold text-muted">Error 404</h1>

                        </div>
                    </div>
                    <div class="lc-block mb-5">
                        <div editable="rich">
                            <p class="rfs-11 fw-light"> The page you are looking for was moved, removed or might never
                                existed.</p>
                        </div>
                    </div>
                    <div class="lc-block">
                        <a class="btn btn-lg btn-secondary" href="{{ route('posts.index') }}" role="button">Back to homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
