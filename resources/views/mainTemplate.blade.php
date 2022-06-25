<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>

<style>
    body {
        background-color: #dff9fb !important;
    }
</style>

<body>

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container p-2">
            <div class="">
                <h2 class="navbar-brand">Vaksin</h2>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="ms-auto">
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-3">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="">Form</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    {{-- carousel --}}
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSoyhLlmuGtzhioCC8G5c7ffZNYLtX7ZoENg&usqp=CAU"
                    class="d-block" width="100%" height="700" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSoyhLlmuGtzhioCC8G5c7ffZNYLtX7ZoENg&usqp=CAU"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSoyhLlmuGtzhioCC8G5c7ffZNYLtX7ZoENg&usqp=CAU"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    {{-- search --}}
    {{-- <div class="p-3" style="background-color: #81ecec">
        <h1 class="text-center p-2" style="color: ">Data Vaksinasi 2022</h1>
        <div class="container mb-3">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div> --}}


    <div class="container mx-5 px-5 py-5">
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSoyhLlmuGtzhioCC8G5c7ffZNYLtX7ZoENg&usqp=CAU"
                                class="d-block" width="300" height="300" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSoyhLlmuGtzhioCC8G5c7ffZNYLtX7ZoENg&usqp=CAU"
                                class="d-block" width="300" height="300" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSoyhLlmuGtzhioCC8G5c7ffZNYLtX7ZoENg&usqp=CAU"
                                class="d-block" width="300" height="300" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <h3>WELCOME</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis numquam repellat ad, cumque vero
                    pariatur alias blanditiis eveniet quisquam laboriosam earum nihil dolore laudantium fugiat expedita!
                    Voluptates soluta ipsa nisi animi, ab ullam optio dicta sint cum omnis sit exercitationem labore
                    voluptas fugit ad aspernatur, neque provident molestias delectus libero.</p>
            </div>
        </div>
    </div>

    {{-- info --}}
    <div class="my-5"></div>

    <div class="container-fluid" style="background-color: #dff9fb">
        <div class="px-5">
            <div class="row p-5">
                <div class="col-md-4">
                    <div class="text-center mt-5">
                        <h3>APAKAH KALIAN TAU COVID ?</h3>
                    </div>
                </div>
                <div class="col-md-8">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure perspiciatis ex
                    quas
                    est inventore molestiae sapiente, voluptate nihil illum libero assumenda possimus. Debitis, incidunt
                    saepe possimus optio tenetur vel, delectus eaque velit necessitatibus repellat odit nam. Illum ipsam
                    tempora recusandae blanditiis beatae vel aut reiciendis voluptatum veniam hic! Quasi quod possimus
                    voluptates. Consequuntur possimus maiores enim ipsum et magnam nostrum qui, illo recusandae mollitia
                    ipsa, eum perspiciatis autem soluta eligendi sint repellat commodi. Aliquam consequatur obcaecati,
                    debitis voluptate nisi quae explicabo maiores quasi illum fuga sequi a possimus. Ullam mollitia
                    aspernatur maiores velit saepe quidem aut doloribus exercitationem voluptate harum!</div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #c7ecee">
        <div class="px-5">
            <div class="row p-5">
                <div class="col-md-4">
                    <div class="text-center mt-5">
                        <h3>APA YANG PENTING DI COVID ?</h3>
                    </div>
                </div>
                <div class="col-md-8">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure perspiciatis ex
                    quas
                    est inventore molestiae sapiente, voluptate nihil illum libero assumenda possimus. Debitis, incidunt
                    saepe possimus optio tenetur vel, delectus eaque velit necessitatibus repellat odit nam. Illum ipsam
                    tempora recusandae blanditiis beatae vel aut reiciendis voluptatum veniam hic! Quasi quod possimus
                    voluptates. Consequuntur possimus maiores enim ipsum et magnam nostrum qui, illo recusandae mollitia
                    ipsa, eum perspiciatis autem soluta eligendi sint repellat commodi. Aliquam consequatur obcaecati,
                    debitis voluptate nisi quae explicabo maiores quasi illum fuga sequi a possimus. Ullam mollitia
                    aspernatur maiores velit saepe quidem aut doloribus exercitationem voluptate harum!</div>
            </div>
        </div>
    </div>


    {{-- ifrmae yt --}}
    <div class="container my-5">
        <h6 class="mb-2">Video Edukasi Covid</h6>
        <div class="row">
            <div class="col-md-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hsls6DzwVGE"></iframe>
                </div>
            </div>
            <div class="col-md-8 ">
                <h3>Bagaimana Penceghan Covid ?</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi iste, ab perspiciatis expedita et
                    eius blanditiis enim libero mollitia illum, saepe corrupti asperiores consectetur quas eum at
                    aliquid, omnis hic voluptatum delectus amet aspernatur illo voluptatibus aut. Ipsam, assumenda
                    possimus! Ea enim magnam qui tenetur ipsam ipsa minus temporibus est.</p>
            </div>
        </div>
    </div>


    {{-- card info --}}
    <div class="container p-3">
        <h3 class="text-center my-3 mb-5">INFORMASI UNTUK ANDA</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSoyhLlmuGtzhioCC8G5c7ffZNYLtX7ZoENg&usqp=CAU"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        {{-- <h5 class="card-title text-center">{{ $data['Title'] }}</h5>
                        <p class="card-text">{{ $data['Plot'] }}</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSoyhLlmuGtzhioCC8G5c7ffZNYLtX7ZoENg&usqp=CAU"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSoyhLlmuGtzhioCC8G5c7ffZNYLtX7ZoENg&usqp=CAU"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSoyhLlmuGtzhioCC8G5c7ffZNYLtX7ZoENg&usqp=CAU"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- text ajakan peduli covid --}}
    <div class="container mt-4 py-5 mb-5 px-3" style="background-color: #c7ecee">
        <div class="row">
            <div class="col-md-10">
                <h3 class="text-left">HIDUP SEHAT MULAI DARI KAMU, DENGAN CARA VAKSIN COVID SEKARANG ! INGAT COVID
                    BELUM HILANG
                </h3>
            </div>
            <div class="col-md-2">
                <h1>
                    <i class="fa-solid fa-virus-covid"></i>
                </h1>
            </div>
        </div>
    </div>


    {{-- footer --}}
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fa-solid fa-virus-covid"></i> COVID-19
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
