<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Nest Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("imgs/theme/favicon.svg") }}" />
    <!-- Template CSS -->
    <script src="{{ asset("js/vendors/color-modes.js") }}"></script>
    <link href="{{ asset("css/main.css") }}" rel="stylesheet" type="text/css" />
    <style>
        body {
            min-height: 0;
        }
    </style>
</head>

<body>
    <main>
        <section class="content-main">
            <div class="d-flex justify-content-center align-items-center vh-80">
                <div class="col-12">
                    <div class="card mx-auto card-login">
                        <div class="card-body">
                            {{-- <img src="" alt=""> --}}
                            <h2 class="text-center">{{ env("APP_NAME") }}</h2>
                            <h4 class="card-title mb-4">Sign in</h4>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route("login") }}" method="POST">
                                @csrf
                                @method("POST")
                                <div class="mb-3">
                                    <label for="">Enter email</label>
                                    <input class="form-control" type="text" id="email" name="email" />
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- form-group// -->
                                <div class="mb-3">
                                    <label for="">Enter password</label>
                                    <input class="form-control" type="password" name="password" />
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- form-group// -->
                                {{-- <div class="mb-3">
                                    <a href="#" class="float-end font-sm text-muted">Forgot password?</a>
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input" checked="" />
                                        <span class="form-check-label">Remember</span>
                                    </label>
                                </div> --}}
                                <!-- form-group form-check .// -->
                                <div class="mb-4">
                                    <button type="submit" class="btn btn-primary float-end">Login</button>
                                </div>
                                <!-- form-group// -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="{{ asset("js/vendors/jquery-3.6.0.min.js") }}"></script>
    <script src="{{ asset("js/vendors/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("js/vendors/jquery.fullscreen.min.js") }}"></script>
    <script src="{{ asset("js/main.js") }}" type="text/javascript"></script>
</body>

</html>
