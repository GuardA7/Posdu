<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="{{ asset('sb/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container py-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-2">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <form action="/register" method="post">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-md">
                                                <div class="form-floating mb-2 mb-md-0">
                                                    <input class="form-control @error('name')is-invalid @enderror"
                                                        id="nama" name="name" type="text"
                                                        placeholder="Masukan Nama Lengkap" required value="{{ old('name') }}"/>
                                                    <label for="nama">Nama Lengkap</label>
                                                    @error('name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md">
                                                <div class="form-floating mb-2 mb-md-0">
                                                    <input class="form-control @error('username')is-invalid @enderror"
                                                        id="username" name="username" type="text"
                                                        placeholder="Masukan Username" required value="{{ old('username') }}"/>
                                                    <label for="username">Username</label>
                                                    @error('username')s
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input class="form-control @error('email')is-invalid @enderror"
                                                id="inputEmail" type="email"
                                                placeholder="name@example.com" required value="{{ old('email') }}" name="email"/>
                                            <label for="inputEmail">Email</label>
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md">
                                                <div class="form-floating mb-2 mb-md-0">
                                                    <input class="form-control @error('password')is-invalid @enderror"
                                                        id="inputPassword" name="password" type="password"
                                                        placeholder="Create a password" required />
                                                    <label for="inputPassword">Password</label>
                                                    @error('password')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button class="btn btn-primary btn-block">Daftar
                                                    Akun</button></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.html">Sudah punya akun?</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-primary mt-auto">
                <div class="container-fluid px-2">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-white">Copyright &copy; Project 2024</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('sb/js/scripts.js') }}"></script>
</body>

</html>
