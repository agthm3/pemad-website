<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Dashboard for ShoSo Marketplace" />
    <meta name="author" content="Rachma | @rachmadzii" />

    <title>ShoSo Marketplace - Dashboard</title>

    <link rel="stylesheet" href="./css/styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/32f82e1dca.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/795e24dc42.js" crossorigin="anonymous"></script>
</head>

<body>
    <aside class="sidebar offcanvas-lg offcanvas-start">
        <div class="d-flex justify-content-end m-4 d-block d-lg-none">
            <button data-bs-dismiss="offcanvas" data-bs-target=".sidebar" class="btn p-0 border-0 fs-4"
                aria-label="Button Close">
                <i class="fas fa-close"></i>
            </button>
        </div>
        <div class="logo-brand mt-lg-5">
            <div>
                <h6 class="title-store">PéMad</h6>
                <p class="tagline-store">Jasa Terjemahan Profesional</p>
            </div>
        </div>
        <hr />

        <footer>
            <div class="d-flex gap-3 align-items-center mb-4">
                <img src="./assets/icons/ic_mode.svg" alt="Mode Display" />
                <p id="label-mode" class="flex-fill label-mode">Light Mode</p>
                <div>
                    <input id="checkbox" type="checkbox" class="toggle-theme" aria-label="Toggle Theme" />
                    <label for="checkbox" class="label-toggle">
                        <img src="./assets/icons/ic_moon.svg" width="50%" class="ic-theme" id="ic-dark"
                            alt="Icon Dark" />
                        <img src="./assets/icons/ic_sun.svg" width="50%" class="ic-theme" id="ic-light"
                            alt="Icon Light" />
                    </label>
                </div>
            </div>
            <p>©2024 PéMad. All rights reserved.</p>
        </footer>
    </aside>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Login</h3>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    aria-describedby="emailHelp" />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" />
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                        </form>
                        <div class="mt-4 text-center">
                            Don't have an account?
                            <span><a href="{{ route('register') }}">Register</a></span>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
