<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login | Inventaris</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font & SB Admin -->
    <link href="/sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">
    <link href="/sbadmin/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        /* === BACKGROUND INVENTARIS === */
        body {
            background:
                linear-gradient(135deg, #1e3c72, #2a5298),
                repeating-linear-gradient(
                    45deg,
                    rgba(255,255,255,0.03),
                    rgba(255,255,255,0.03) 10px,
                    transparent 10px,
                    transparent 20px
                );
        }

        body.dark-mode {
            background:
                linear-gradient(135deg, #0f2027, #203a43, #2c5364);
        }

        /* === CARD === */
        .card {
            border-radius: 15px;
        }

        .dark-mode .card {
            background: #1e1e1e;
            color: #fff;
        }

        .dark-mode .text-gray-900,
        .dark-mode .text-gray-700 {
            color: #fff !important;
        }

        .dark-mode .text-muted {
            color: #bbb !important;
        }

        .dark-mode .form-control,
        .dark-mode .input-group-text {
            background: #2a2a2a;
            border-color: #444;
            color: #fff;
        }

        .dark-mode .form-control::placeholder {
            color: #aaa;
        }

        /* === LOGO === */
        .login-logo {
            width: 350px;
            filter: drop-shadow(0 6px 12px rgba(0,0,0,.3));
        }

        /* === TOGGLE === */
        .toggle-mode {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 999;
        }
    </style>
</head>

<body id="body">

<!-- Toggle Mode -->
<div class="toggle-mode">
    <button class="btn btn-sm btn-light" id="toggleMode">
        <i class="fas fa-moon"></i>
    </button>
</div>

<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height:100vh">
        <div class="col-lg-5 col-md-7">

            <div class="card shadow-lg border-0">
                <div class="card-body p-5">

                    <!-- Logo -->
                    <div class="text-center mb-4">
                        <img src="/sbadmin/logo.png" class="login-logo mb-3">
                        <h4 class="font-weight-bold">LOGIN INVENTARIS</h4>
                        <p class="text-muted small">
                            Sistem Manajemen Barang & Aset
                        </p>
                    </div>

                    <!-- Form -->
                    <form action="/login" method="POST">
                        @csrf

                        <!-- Username -->
                        <div class="form-group">
                            <label class="small font-weight-bold">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white">
                                        <i class="fas fa-user text-primary"></i>
                                    </span>
                                </div>
                                <input type="text" name="username" class="form-control"
                                       placeholder="Masukkan username" required>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label class="small font-weight-bold">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white">
                                        <i class="fas fa-lock text-primary"></i>
                                    </span>
                                </div>
                                <input type="password" id="password" name="password"
                                       class="form-control"
                                       placeholder="Masukkan password" required>
                                <div class="input-group-append">
                                    <span class="input-group-text bg-white" style="cursor:pointer"
                                          onclick="togglePassword()">
                                        <i class="fas fa-eye" id="eyeIcon"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <button type="submit"
                                class="btn btn-primary btn-block font-weight-bold mt-4">
                            <i class="fas fa-sign-in-alt mr-2"></i> Login
                        </button>
                    </form>

                </div>
            </div>

            <p class="text-center text-white small mt-4">
                © {{ date('Y') }} Sistem Inventaris
            </p>

        </div>
    </div>
</div>

<!-- JS -->
<script src="/sbadmin/vendor/jquery/jquery.min.js"></script>
<script src="/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
    function togglePassword() {
        const p = document.getElementById('password');
        const i = document.getElementById('eyeIcon');
        if (p.type === 'password') {
            p.type = 'text';
            i.classList.replace('fa-eye', 'fa-eye-slash');
        } else {
            p.type = 'password';
            i.classList.replace('fa-eye-slash', 'fa-eye');
        }
    }

    const toggleBtn = document.getElementById('toggleMode');
    const body = document.getElementById('body');

    if (localStorage.getItem('mode') === 'dark') {
        body.classList.add('dark-mode');
        toggleBtn.innerHTML = '<i class="fas fa-sun"></i>';
    }

    toggleBtn.onclick = () => {
        body.classList.toggle('dark-mode');
        localStorage.setItem('mode', body.classList.contains('dark-mode') ? 'dark' : 'light');
        toggleBtn.innerHTML = body.classList.contains('dark-mode')
            ? '<i class="fas fa-sun"></i>'
            : '<i class="fas fa-moon"></i>';
    };
</script>

</body>
</html>
