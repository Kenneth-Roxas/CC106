<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="{{url('CSS/dashboard.css')}}">

    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
        }
    </style>
    </head>

    <body>

        <header><img src="{{url('Picture/lanmar.png')}}" alt="logo" class="bakery-img">
            <nav class="navbar">
                <a href="{{route('homePage')}}">Home</a>
                <a href="">Product</a>
                <a href="">About</a>
                <a href="">Contact</a>
                <span href="{{route('loginPage')}}">
                    <button class="btnLogin">Log In</button>
                </span>
            </nav>
        </header>

        <!-- Home Section -->

        <section class="home" id="home">
            <div class="section-with-overlay">
                <div class="homeContent">
                    <h2>Lan-Mar
                        Bake Shoppe</h2>
                    <p>For Tasty and Quality, and Cakes</p>
                    <div class="home-btn">
                        <a href="#"><button>DETAILS</button></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- End of Home Section -->

        <section class="product-section" id="product">
            <div class="secondOverlay">
                <h2>Product Category</h2>
                <div class="slider product-row">
                    <div class="swiper-wrapper">
                        <div class="box">
                            <div class="content">
                                <div class="product-grid">
                                    <div class="product">
                                        <img src="{{url('Picture/bananaCake.jpg')}}" alt="Banana Cake">
                                        <div class="image-text">
                                            <h3>Cupcakes</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="content">
                                <div class="product-grid">
                                    <div class="product">
                                        <img src="{{url('Picture/weddingCake.jpg')}}" alt="Banana Cake">
                                        <div class="image-text">
                                            <h3>Cakes</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="content">
                                <div class="product-grid">
                                    <div class="product">
                                        <img src="{{url('Picture/crinckles.jpg')}}" alt="Banana Cake">
                                        <div class="image-text">
                                            <h3>Cookies</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Product Section -->

        <section class="blogs" id="blogs">

            <div class=" swiper blogs-row">
                <div class="swiper-wrapper">
                    <div class=" swiper-slide box">
                        <div class="img">
                            <img src="{{url('Picture/blog-img1.png')}}" alt="">
                        </div>
                        <div class="content">
                            <h3>Breads and Cupcakes </h3>
                            <p>Basta Description to</p>
                            <p>Description ulet</p>
                            <a href="#blogs" class="btn">learn more</a>
                        </div>
                    </div>
                    <div class=" swiper-slide box">
                        <div class="img">
                            <img src="{{url('Picture/blog-img3.png')}}" alt="">
                        </div>
                        <div class="content">
                            <h3>Cakes </h3>
                            <p>Basta Description to</p>
                            <p>Description ulet</p>
                            <a href="#blogs" class="btn">learn more</a>
                        </div>
                    </div>
                    <div class=" swiper-slide box">
                        <div class="img">
                            <img src="{{url('Picture/blog-img2.png')}}" alt="">
                        </div>
                        <div class="content">
                            <h3>Cookies</h3>
                            <p>Basta Description to</p>
                            <p>Description ulet</p>
                            <a href="#blogs" class="btn">learn more</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>


        <!-- Footer -->

        <footer class="footer" id="contact">
            <div class="box-container">
                <div class="mainBox">
                    <div class="content">
                        <img src=".png" alt="">
                        <h1 class="logoName">Lan-Mar</h1>
                    </div>
                </div>
                <div class="box">
                    <h3>Quick Link</h3>
                    <a href="{{route('homePage')}}"><i class="fas fa-arrow-right"></i>Home</a>
                    <a href=""><i class="fas fa-arrow-right"></i>Product</a>
                    <a href=""><i class="fas fa-arrow-right"></i>About</a>
                    <a href=""><i class="fas fa-arrow-right"></i>Contact</a>
                    <a href="{{route('loginPage')}}"><i class="fas fa-arrow-right"></i>Login</a>
                </div>
                <div class="box">
                    <h3>Contact Info.</h3>
                    <a href=""><i class="fas fa-phone"></i>+63 970 626 5312</a>
                    <a href=""><i class="fas fa-envelope"></i>roxaskenneth508@gmail.com</a>
                </div>
            </div>
            <div class="share">
                <a href="https://www.facebook.com/profile.php?id=100063785664939" class="fab fa-facebook-f"></a>
                <a href="" class="fab fa-instagram"></a>
                <a href="" class="fab fa-twitter"></a>
            </div>
            <div class="credit">
                © LAN-MAR Bake Shoppe | All Right Reserved
            </div>
        </footer>




        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="{{url('JS/dashboard.js')}}"></script>
</div>
