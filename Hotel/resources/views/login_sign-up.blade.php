
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Diamant - Hotel & Resort Booking</title>

        <!-- Favicon -->
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="{{ asset('assets') }}/images/favicon.ico"
        />
        <link rel="manifest" href="{{asset('assets')}}/favicon/site.webmanifest" />
        <meta name="application-TileColor" content="#da532c" />
        <meta name="theme-color" content="#ffffff" />

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('assets')}}/fonts/stylesheet.css" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/SignIn-Up.css" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        />
        <style>
            .alert {
            padding: 20px;
            background-color: #f44336;
            color: white;
            }

            .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
            }

            .closebtn:hover {
            color: black;
            }
            .fixed-bottom-right {
            position: fixed;
            bottom: 0;
            right: 0;
            margin: 20px;
            padding: 10px;
            }
        </style>
    </head>
    <body>
    <img style="position: fixed; /* Đặt ảnh ở vị trí cố định */
    top: 0;
    left: 0;
    width: 100%; /* Ảnh sẽ chiếm toàn bộ chiều rộng của trang */
    height: 100%; /* Ảnh sẽ chiếm toàn bộ chiều cao của trang */
    object-fit: cover; /* Đảm bảo ảnh không bị biến dạng */
    z-index: -1;" src="{{asset('assets')}}/img/coffee shop with warm atmosphere [ wallpaper 4k ].png" alt="Background Image"
    >
    <div class="container" id="container">
        <!-- Biểu mẫu đăng ký -->
        <form action="{{route('register')}}" method="POST" class="form-container register-container">
            @csrf
            <h1>Register here</h1>
            <div class="form-control">
                <input type="text" id="name" value="{{ old('name') }}" name="name" placeholder="Name" required />
                @error('name')
                    <div>{{ $message }}</div>
                @enderror
                <small id="username-error"></small>
                <span></span>
            </div>
            <div class="form-control">
                <input type="email" id="email" value="{{ old('email') }}" name="email" placeholder="Email" required />
                @error('email')
                    <div>{{ $message }}</div>
                @enderror
                <small id="email-error"></small>
                <span></span>
            </div>
            <div id="duplicate-error" style="color: red;"></div>
            <div class="form-control">
                <input type="password" id="password" value="{{ old('password') }}" name="password" placeholder="Password" required />
                @error('password')
                    <div>{{ $message }}</div>
                @enderror
                <small id="password-error"></small>
                <small id="password-error"></small><br>
                <span></span>
            </div>
            <button type="submit" value="submit">Register</button>
            <span>or use your account</span>
            <div class="social-container">
                <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
                <a href="#" class="social"><i class="fa-brands fa-tiktok"></i></a>
            </div>

        </form>

        <!-- Biểu mẫu đăng nhập -->
        <form action="{{route('login')}}" method="POST" class="form-container login-container">
            @csrf
            <h1>Login here.</h1>
            <div class="form-control2">
                <input type="email" name="email"  class="email-2" placeholder="Email" />
                <small class="email-error-2"></small>
                <span></span>
            </div>
            <div class="form-control2">
                <input type="password" name="password"  class="password-2" placeholder="Password" />
                @if ($message = Session::get('error'))
                        {{-- <strong>{{ $message }}</strong> --}}
                        <small id="error-messs" class="password-error-2">{{ $message }}</small>
                @endif
                <small class="password-error-2"></small>
                <span></span>
            </div>

            <div class="content">
                <div class="checkbox">
                    <input type="checkbox" name="checkbox" id="checkbox" />
                    <label for="checkbox">Remember me</label>
                </div>
                <div class="pass-link">
                    <a href="#">Forgot password</a>
                </div>
            </div>
            <button type="submit" value="submit">Login</button>
            <span>Or use your account</span>
            <div class="social-container">
                <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
                <a href="#" class="social"><i class="fa-brands fa-tiktok"></i></a>
            </div>
        </form>


        <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1 class="title">
                            <img
                                src="{{asset('assets')}}/img/booking-confirm/logo-white.png"
                                alt=""
                                style=""
                            />
                        </h1>

                        <p>If you have an account, login here and have fun</p>
                        <button class="ghost" id="login">
                            Login
                            <i class="fa-solid fa-arrow-left"></i>
                        </button>
                    </div>

                    <div class="overlay-panel overlay-right">
                        <h1 class="title">
                            <img
                                src="{{asset('assets')}}/img/booking-confirm/logo-white.png"
                                alt=""
                                style=""
                            />
                        </h1>
                        <p>
                            If you don't have an account yet, join us and start
                            your journey
                        </p>
                        <button class="ghost" id="register">
                            Register
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @if($errors->any())
            <div class="alert fixed-bottom-right">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong>Error!</strong> .{{ $errors->first() }}
            </div>
        @endif
    </body>
    <script src="{{asset('assets')}}/js/main.js"></script>
</html>
