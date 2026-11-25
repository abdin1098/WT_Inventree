
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventree | Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background: #ffffff;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 40px 15px;
        }

        .login-wrapper {
            width: 100%;
            max-width: 480px;
        }

        .brand {
            text-align: center;
            margin-bottom: 40px;
        }

        .brand i {
            font-size: 38px;
            color: #202d49;
        }

        .brand h2 {
            font-size: 29px;
            color: #111827;
            margin-top: 2px;
            font-weight: 500;
        }

        .login-card {
            background: #f9fafb;
            border: 1px solid #e9ebef;
            border-radius: 11px;
            padding: 27px 48px 24px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.10);
        }

        .login-card h3 {
            text-align: center;
            font-size: 23px;
            font-weight: 700;
            margin-bottom: 32px;
            color: #111827;
        }

        .form-label {
            font-size: 14px;
            margin-bottom: 10px;
            color: #111827;
        }

        .form-control {
            height: 38px;
            background: #eaf1fc;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 14px;
            padding: 8px 12px;
        }

        .form-control:focus {
            background: #fff;
            border-color: #5145ed;
            box-shadow: 0 0 0 3px rgba(81,69,237,.10);
        }

        .password-group {
            margin-top: 27px;
        }

        .login-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 25px;
            margin-bottom: 26px;
        }

        .form-check-input:checked {
            background-color: #5145ed;
            border-color: #5145ed;
        }

        .forgot-link {
            color: #5145ed;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
        }

        .login-btn {
            height: 37px;
            width: 100%;
            background: #5145ed;
            border: none;
            border-radius: 6px;
            color: white;
            font-weight: 600;
            font-size: 14px;
        }

        .login-btn:hover {
            background: #4035d5;
        }

        @media(max-width: 500px) {
            .login-card {
                padding: 25px 22px;
            }

            .brand {
                margin-bottom: 30px;
            }
        }
    </style>
</head>

<body>

<div class="login-wrapper">

    <!-- Brand -->
    <div class="brand">
        <i class="bi bi-boxes"></i>
        <h2>Inventree</h2>
    </div>

    <!-- Login Card -->
    <div class="login-card">

        <h3>Sign in to your account</h3>

        @if($errors->any())
            <div class="alert alert-danger py-2 small">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email address</label>

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    value="{{ old('email', 'admin@test.com') }}"
                    required
                >
            </div>
            <div class="password-group">
                <label class="form-label">Password</label>

                <input
                    type="password"
                    name="password"
                    class="form-control"
                    value="password123"
                    required
                >
            </div>
            <div class="login-options">

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        id="remember"
                        checked
                    >

                    <label class="form-check-label" for="remember">
                        Remember me
                    </label>
                </div>

                <a href="#" class="forgot-link"
                   onclick="return false;">
                    Forgot password?
                </a>

            </div>
            <button type="submit" class="login-btn">
                Sign in
            </button>

        </form>

    </div>

</div>

</body>
</html>
