


<html>

<head>
    <link href="styles/css/bootstrap.css" rel="stylesheet" />
    <script src="styles/js/bootstrap.js"></script>
    <title>Home | FreeFood4U</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3 py-2" width="100%">
        <a href="indexN.html" class="navbar-brand">
            <img src="images/logo.png" alt="FreeFood4U" width="30" height="24" class="d-inline-block align-text-top" />
            FF4U 2.0
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar"
            aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="bdNavbar">
            <ul class="navbar-nav ms-auto text-center">
                <li>
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li>
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li>
                    <a href="#services" class="nav-link">Services</a>
                </li>
                <li>
                    <a href="#news" class="nav-link">News</a>
                </li>
                <li>
                    <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#signInModal">Sign In</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="h-100 bg-image d-flex justify-content-sm-start align-items-center" id="home"
        style="background-image: url('images/index-cover.jpg');">
        <div class="mx-5">
            <h2 class="text-light fw-bold fs-1">Hello, we are <br><span>
                    <h1 class="display-1 fw-bold">FreeFood4U.</h1>
            </h2>
            <h3 class="text-light fs-2">and we are here to help.</h3>
            <button type="button" class="btn my-3 fw-bold"
                style="background-color: orange;"><a href="#about" style="text-decoration: none; color: white;">About Us</a></button>
        </div>
    </div>

    <div class="mb-5 h-100" id="about">
        <div class="w-100 mb-3 mt-4">
            <h2 class="text-center fw-bold"> About Us</h2>
        </div>
        <div class="d-flex justify-content-sm-start mt-5 px-5">
            <div class="w-50">
                <h3 class="h-3 fw-bold mb-4">We are FreeFoodForYou. <br> Here to help you.</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam egestas dui et aliquet venenatis.
                    Aliquam at aliquam ante. Duis mauris magna, auctor id pulvinar vel, aliquam vel nisl. Donec at enim
                    vitae lorem ornare euismod. Vestibulum aliquam elit vel bibendum hendrerit. Aenean volutpat commodo
                    hendrerit. Sed urna ipsum, fermentum vel enim non, vestibulum vestibulum felis. In hac habitasse
                    platea dictumst. Pellentesque posuere dignissim nisl. In sollicitudin varius consequat. Nulla
                    facilisi. Maecenas bibendum sem et lacinia fermentum. Nulla condimentum urna at velit rutrum
                    ullamcorper. Pellentesque et quam ante.
                    <br><br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam egestas dui et aliquet venenatis.
                    Aliquam at aliquam ante. Duis mauris magna, auctor id pulvinar vel, aliquam vel nisl. Donec at enim
                    vitae lorem ornare euismod. Vestibulum aliquam elit vel bibendum hendrerit. Aenean volutpat commodo
                    hendrerit. Sed urna ipsum, fermentum vel enim non, vestibulum vestibulum felis. In hac habitasse
                    platea dictumst. Pellentesque posuere dignissim nisl. In sollicitudin varius consequat. Nulla
                    facilisi. Maecenas bibendum sem et lacinia fermentum. Nulla condimentum urna at velit rutrum
                    ullamcorper. Pellentesque et quam ante.
                    <br><br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam egestas dui et aliquet venenatis.
                    Aliquam at aliquam ante. Duis mauris magna, auctor id pulvinar vel, aliquam vel nisl. Donec at enim
                    vitae lorem ornare euismod. Vestibulum aliquam elit vel bibendum hendrerit. Aenean volutpat commodo
                    hendrerit. Sed urna ipsum, fermentum vel enim non, vestibulum vestibulum felis. In hac habitasse
                    platea dictumst. Pellentesque posuere dignissim nisl. In sollicitudin varius consequat. Nulla
                    facilisi. Maecenas bibendum sem et lacinia fermentum. Nulla condimentum urna at velit rutrum
                    ullamcorper. Pellentesque et quam ante.
                </p>
            </div>
            <div class="w-50">
                <img src="images/foodbank-1.jpg" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="p-5" style="background-color: orange;" id="services">
        <div class="text-white text-center">
            <h2>Our Services</h2>
            <p>Providing help to those in need.</p>
        </div>
        <div class="text-white d-flex justify-content-center flex-wrap">
            <div class="mx-5 my-2 p-2 text-center" style="background-color: gray; max-width: 20%;">
                <img src="images/gps-icon.png" style="max-width: 80%; filter: invert(1);">
                <span class="border-bottom border-white">
                    <h2>Location</h2>
                    <p>Find the nearest foodbank with ease!</p>
            </div>
            <div class="mx-5 my-2 p-2 text-center" style="background-color: gray; max-width: 20%;">
                <img src="images/foodbox-icon.png" style="max-width: 80%; filter: invert(1);">
                <h2>Foodbank information</h2>
                <p>Know what your foodbank is providing.</p>
            </div>
            <div class="mx-5 my-2 p-2 text-center" style="background-color: gray; max-width: 20%;">
                <img src="images/application-icon.png" style="max-width: 80%; filter: invert(1);">
                <h2>Apply provisions</h2>
                <p>Apply for provision from the comfort of your home.</p>
            </div>
        </div>
    </div>

    <div style="background-color: #777777;" id="news">
        <div class="w-100 pb-3 pt-4 border-bottom">
            <h2 class="text-center fw-bold text-white">Related News</h2>
        </div>
    </div>
    <div id="myCarousel" class="carousel slide h-75" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button
                type="button"
                data-bs-target="#myCarousel"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"></button>
            <button
                type="button"
                data-bs-target="#myCarousel"
                data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button
                type="button"
                data-bs-target="#myCarousel"
                data-bs-slide-to="2"
                aria-label="Slide 3"></button>
                <button
                type="button"
                data-bs-target="#myCarousel"
                data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img
                    src="images/carousel-1.jpg"
                    style="opacity: 0.75;"
                    width="100%"
                    height="100%"
                    preserveAspectRatio="xMidYMid slice"
                    focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </img>

                <div class="container">
                    <div class="carousel-caption text-start bg-secondary p-3">
                        <h1>FF4U donations</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam egestas dui et aliquet
                            venenatis. Aliquam at aliquam ante. Duis mauris magna, auctor id pulvinar vel, aliquam vel
                            nisl. Donec at enim vitae lorem ornare euismod. Vestibulum aliquam elit vel bibendum
                            hendrerit. Aenean volutpat commodo hendrerit. Sed urna ipsum, fermentum vel enim non,
                            vestibulum vestibulum felis. In hac habitasse platea dictumst. Pellentesque posuere dignissim
                            nisl. In sollicitudin varius consequat. Nulla facilisi. Maecenas bibendum sem et lacinia
                            fermentum. Nulla condimentum urna at velit rutrum ullamcorper. Pellentesque et quam ante.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="carousel-item">
                <img
                    src="images/carousel-2.jpg"
                    style="opacity: 0.75;"
                    width="100%"
                    height="100%"
                    preserveAspectRatio="xMidYMid slice"
                    focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </img>

                <div class="container">
                    <div class="carousel-caption text-start bg-secondary p-3">
                        <h1>FreeFood4U donations 2</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam egestas dui et aliquet
                            venenatis. Aliquam at aliquam ante. Duis mauris magna, auctor id pulvinar vel, aliquam vel
                            nisl. Donec at enim vitae lorem ornare euismod. Vestibulum aliquam elit vel bibendum
                            hendrerit. Aenean volutpat commodo hendrerit. Sed urna ipsum, fermentum vel enim non,
                            vestibulum vestibulum felis. In hac habitasse platea dictumst. Pellentesque posuere dignissim
                            nisl. In sollicitudin varius consequat. Nulla facilisi. Maecenas bibendum sem et lacinia
                            fermentum. Nulla condimentum urna at velit rutrum ullamcorper. Pellentesque et quam ante.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="carousel-item">
                <img
                    src="images/carousel-3.jpg"
                    style="opacity: 0.75;"
                    width="100%"
                    height="100%"
                    preserveAspectRatio="xMidYMid slice"
                    focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </img>

                <div class="container">
                    <div class="carousel-caption text-start bg-secondary p-3">
                        <h1>FreeFood4U donations 3</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam egestas dui et aliquet
                            venenatis. Aliquam at aliquam ante. Duis mauris magna, auctor id pulvinar vel, aliquam vel
                            nisl. Donec at enim vitae lorem ornare euismod. Vestibulum aliquam elit vel bibendum
                            hendrerit. Aenean volutpat commodo hendrerit. Sed urna ipsum, fermentum vel enim non,
                            vestibulum vestibulum felis. In hac habitasse platea dictumst. Pellentesque posuere dignissim
                            nisl. In sollicitudin varius consequat. Nulla facilisi. Maecenas bibendum sem et lacinia
                            fermentum. Nulla condimentum urna at velit rutrum ullamcorper. Pellentesque et quam ante.
                        </p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img
                    src="images/carousel-4.jpg"
                    style="opacity: 0.75;"
                    width="100%"
                    height="100%"
                    preserveAspectRatio="xMidYMid slice"
                    focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </img>

                <div class="container">
                    <div class="carousel-caption text-start bg-secondary p-3">
                        <h1>FreeFood4U donations 4</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam egestas dui et aliquet
                            venenatis. Aliquam at aliquam ante. Duis mauris magna, auctor id pulvinar vel, aliquam vel
                            nisl. Donec at enim vitae lorem ornare euismod. Vestibulum aliquam elit vel bibendum
                            hendrerit. Aenean volutpat commodo hendrerit. Sed urna ipsum, fermentum vel enim non,
                            vestibulum vestibulum felis. In hac habitasse platea dictumst. Pellentesque posuere dignissim
                            nisl. In sollicitudin varius consequat. Nulla facilisi. Maecenas bibendum sem et lacinia
                            fermentum. Nulla condimentum urna at velit rutrum ullamcorper. Pellentesque et quam ante.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide="prev">
            <span
                class="carousel-control-prev-icon"
                aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide="next">
            <span
                class="carousel-control-next-icon"
                aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark text-muted">
        <!-- Section: Links  -->
        <section class="pt-2">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            FreeFood4U
                        </h6>
                        <p>
                            Here you can use rows and columns to organize
                            your footer content. Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p>Malaysia, MY</p>
                        <p>customer_support@ff4u.com</p>
                        <p>+ 60 12 345 6788</p>
                        <p>+ 60 13 355 6188</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05)">
            © 2022 Copyright:
            <a class="text-reset fw-bold">FreeFood4U</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- Modal -->
    <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                        <h1 class="fw-bold mb-0 fs-2">Sign up for free</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body p-5 pt-0">
                        <form method="POST" action="signUp.php">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control rounded-3" id="floatingInput" name="emailS"
                                    placeholder="name@example.com" />
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control rounded-3" id="floatingPassword" name="passwordS"
                                    placeholder="Password" />
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-check py-1">
                                <input class="form-check-input" type="radio" name="user" value="receiver" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Register for receiver
                                </label>
                            </div>
                            <div class="form-check py-1">
                                <input class="form-check-input" type="radio" name="user" value="donator">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Register for donator
                                </label>
                            </div>
                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">
                                Sign up
                            </button>
                            <small class="text-muted">By clicking Sign up, you agree to the terms
                                of use.</small>
                            <hr class="my-4" />
                            <h2 class="fs-5 fw-bold mb-3">
                                Or if you have an account with us
                            </h2>
                            <button type="button" class="btn btn-primary" data-bs-target="#signInModal"
                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                Sign In
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                        <h1 class="fw-bold mb-0 fs-2">Sign in</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body p-5 pt-0">
                        <form method="POST" action="login.php">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control rounded-3" id="floatingInput" name="email"
                                    placeholder="name@example.com" />
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control rounded-3" id="floatingPassword" name="password"
                                    placeholder="Password" />
                                <label for="floatingPassword">Password</label>
                            </div>
                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">
                                Sign in
                            </button>
                            <hr class="my-4" />
                            <h2 class="fs-5 fw-bold mb-3">
                                Or if you don't have an account with us
                            </h2>
                            <button type="button" class="btn btn-primary" data-bs-target="#signUpModal"
                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                Sign Up
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>