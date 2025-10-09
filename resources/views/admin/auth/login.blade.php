<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultra-Modern 3D Login</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Body & background */
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1f1c2c, #928dab);
            font-family: 'Segoe UI', sans-serif;
        }

        /* Glassmorphism login card */
        .login-card {
            backdrop-filter: blur(15px);
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
            padding: 50px 30px;
            width: 350px;
            text-align: center;
            transition: transform 0.4s, box-shadow 0.4s;
        }

        .login-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(0,0,0,0.7);
        }

        /* Heading */
        .login-card h2 {
            color: #fff;
            font-weight: bold;
            margin-bottom: 30px;
            text-shadow: 0 2px 5px rgba(0,0,0,0.5);
        }

        /* Inputs */
        .form-control {
            background: rgba(255,255,255,0.2);
            border: none;
            border-radius: 12px;
            padding: 15px;
            color: #fff;
            margin-bottom: 20px;
            box-shadow: inset 0 4px 6px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            box-shadow: 0 0 15px rgba(255,255,255,0.5);
            background: rgba(255,255,255,0.25);
            color: #fff;
        }

        ::placeholder {
            color: rgba(255,255,255,0.7);
        }

        /* Login button */
        .btn-primary {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            border: none;
            border-radius: 12px;
            padding: 12px;
            font-weight: bold;
            transition: transform 0.2s, box-shadow 0.3s;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.5);
            background: linear-gradient(135deg, #2575fc, #6a11cb);
        }

        /* Social buttons */
        .social-btns {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 25px;
        }

        .social-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-size: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .social-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.5);
        }

        .facebook { background: #3b5998; }
        .google { background: #db4437; }
        .twitter { background: #1da1f2; }

        /* Signup link */
        .form-text {
            color: #fff;
            margin-top: 20px;
        }

        .form-text a {
            color: #2575fc;
            text-decoration: none;
            font-weight: bold;
        }

        .form-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h2>Login</h2>
         <form action="{{ route('loginsubmit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Login</button>
            </div>
        </form>

      

        
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</body>
</html>
