@extends('global.body')

@section('content')
    <section class="l-banner h-section-padding bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Your Lightning Fast Delivery Partner</h1>
                    <p class="mb-5">Facere distinctio molestiae nisi fugit tenetur repellat non praesentium nesciunt optio quis sit odio nemo quisquam. eius quos reiciendis eum vel eum voluptatem eum maiores eaque id optio ullam occaecati odio est possimus vel reprehenderit</p>
                    <form class="d-flex mb-5 bg-white rounded-3 p-2" role="search">
                        <input class="form-control border-0 me-2" type="search" placeholder="ZIP code or City" aria-label="Search">
                        <button class="btn btn-primary btn-lg" type="submit">Search</button>
                    </form>
                    <div class="row">
                        <div class="l-banner__feature d-flex flex-wrap text-center">
                            <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                                <p class="c-feature__number fs-2 fw-bold mb-4">232</p>
                                <p class="mb-0">Clients</p>
                            </div>
                            <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                                <p class="c-feature__number fs-2 fw-bold mb-4">521</p>
                                <p class="mb-0">Projects</p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="c-feature__number fs-2 fw-bold mb-4">1453</p>
                                <p class="mb-0">Support</p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="c-feature__number fs-2 fw-bold mb-4">32</p>
                                <p class="mb-0">Workers</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ms-auto mb-5 mb-lg-0 order-first order-lg-last">
                    <img src="https://bootstrapmade.com/demo/templates/Logis/assets/img/hero-img.svg" class="img-fluid" alt="man delivering package">
                </div>
            </div>
        </div>
    </section>

    <section class="l-feature h-section-padding container">
        <div class="row">
            <div class="col-md-4">
                @component('components.feature-card')

                    @slot('icon')
                        fa-solid fa-cart-flatbed
                    @endslot

                    @slot('title')
                        Lorem Ipsum
                    @endslot
                    
                    Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident

                    @slot('href')
                        {{ $uri->path() }}article/article.html
                    @endslot

                    @slot('btn')
                        Learn More
                    @endslot

                @endcomponent
            </div>
            <div class="col-md-4">
                @component('components.feature-card')

                    @slot('icon')
                        fa-solid fa-truck
                    @endslot

                    @slot('title')
                        Dolor Sitema
                    @endslot
                    
                    Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata

                    @slot('href')
                        {{ $uri->path() }}article/article.html
                    @endslot

                    @slot('btn')
                        Learn More
                    @endslot

                @endcomponent
            </div>
            <div class="col-md-4">
                @component('components.feature-card')

                    @slot('icon')
                        fa-solid fa-truck-ramp-box
                    @endslot

                    @slot('title')
                        Sed ut perspiciatis
                    @endslot
                    
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur

                    @slot('href')
                        {{ $uri->path() }}article/article.html
                    @endslot

                    @slot('btn')
                        Learn More
                    @endslot

                @endcomponent
            </div>
        </div>
    </section>

    <section class="l-about h-section-padding container">
        <div class="row">
            <div class="col-lg-6">
                <div class="l-about__header mb-5">
                    <h3 class="text-secondary">About Us</h3>
                    <p>Dolor iure expedita id fuga asperiores qui sunt consequatur minima. Quidem voluptas deleniti. Sit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam ut eius incidunt reiciendis veritatis asperiores placeat.</p>
                </div>
                <div class="l-about__content">
                    <ul class="ps-0">
                        <li class="c-about-list d-flex align-items-center mb-5">
                            <i class="fa-regular fa-sitemap text-primary fs-1 text-center me-4"></i>
                            <div class="content">
                                <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                                <p class="mb-0">Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                            </div>
                        </li>
                        <li class="c-about-list d-flex align-items-center mb-5">
                            <i class="fa-regular fa-compress text-primary fs-1 text-center me-4"></i>
                            <div class="content">
                                <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                                <p class="mb-0">Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                            </div>
                        </li>
                        <li class="c-about-list d-flex align-items-center mb-5">
                            <i class="fa-regular fa-tower-broadcast text-primary fs-1 text-center me-4"></i>
                            <div class="content">
                                <h5>Voluptatem et qui exercitationem</h5>
                                <p class="mb-0">Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime veniam</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 position-relative align-self-start mb-5 mb-lg-0 order-first order-lg-last">
                <img src="https://bootstrapmade.com/demo/templates/Logis/assets/img/about.jpg" class="img-fluid" alt="our team members">
                <a href="#" class="c-btn-play bg-primary text-center text-white p-4 rounded-circle position-absolute top-50 start-50 translate-middle">
                    <i class="fa-solid fa-play fs-3"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="l-service h-section-padding container">
        <div class="row">
            @component('components.section-title') 
                our services
            @endcomponent
            <div class="col-md-6 col-lg-4">
                @component('components.service-card')
                    
                    @slot('src')
                        https://bootstrapmade.com/demo/templates/Logis/assets/img/storage-service.jpg
                    @endslot

                    @slot('alt')
                        storage-service
                    @endslot

                    @slot('title')
                        storage
                    @endslot
                    
                    Asperiores provident dolor accusamus pariatur dolore nam id audantium ut et iure incidunt molestiae dolor ipsam ducimus occaecati nisi

                @endcomponent
            </div>
            <div class="col-md-6 col-lg-4">
                @component('components.service-card')
                    
                    @slot('src')
                        https://bootstrapmade.com/demo/templates/Logis/assets/img/logistics-service.jpg
                    @endslot

                    @slot('alt')
                        logistics-service
                    @endslot

                    @slot('title')
                        logistics
                    @endslot
                    
                    Asperiores provident dolor accusamus pariatur dolore nam id audantium ut et iure incidunt molestiae dolor ipsam ducimus occaecati nisi

                @endcomponent
            </div>
            <div class="col-md-6 col-lg-4">
                @component('components.service-card')
                    
                    @slot('src')
                        https://bootstrapmade.com/demo/templates/Logis/assets/img/cargo-service.jpg
                    @endslot

                    @slot('alt')
                        cargo-service
                    @endslot

                    @slot('title')
                        cargo
                    @endslot
                    
                    Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque oluptatem aut et molestiae ut et nihil

                @endcomponent
            </div>
            <div class="col-md-6 col-lg-4">
                @component('components.service-card')
                    
                    @slot('src')
                        https://bootstrapmade.com/demo/templates/Logis/assets/img/trucking-service.jpg
                    @endslot

                    @slot('alt')
                        trucking-service
                    @endslot

                    @slot('title')
                        trucking
                    @endslot
                    
                    Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque oluptatem aut et molestiae ut et nihil

                @endcomponent 
            </div>
            <div class="col-md-6 col-lg-4">
                @component('components.service-card')
                    
                    @slot('src')
                        https://bootstrapmade.com/demo/templates/Logis/assets/img/packaging-service.jpg
                    @endslot

                    @slot('alt')
                        packaging-service
                    @endslot

                    @slot('title')
                        packaging
                    @endslot
                    
                    Illo consequuntur quisquam delectus praesentium modi dignissimos facere vel cum onsequuntur maiores beatae consequatur magni voluptates

                @endcomponent 
            </div>
            <div class="col-md-6 col-lg-4">
                @component('components.service-card')
                    
                    @slot('src')
                        https://bootstrapmade.com/demo/templates/Logis/assets/img/warehousing-service.jpg
                    @endslot

                    @slot('alt')
                        warehousing-service
                    @endslot

                    @slot('title')
                        warehousing
                    @endslot
                    
                    Quas assumenda non occaecati molestiae. In aut earum sed natus eatae in vero. Ab modi quisquam aut nostrum unde et qui est non quo nulla

                @endcomponent 
            </div>
        </div>
    </section>

    <section class="l-cta h-section-padding text-center text-white bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Call To Action</h2>
                    <p class="mb-4"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <button class="btn btn-outline-light btn-lg">Call To Action</button>
                </div>
            </div>
        </div>
    </section>

    <section class="l-speciality h-section-padding">
        <div class="container">
            <div class="row align-items-center my-5">
                <div class="col-md-5 mb-4">
                    <img src="https://bootstrapmade.com/demo/templates/Logis/assets/img/features-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 ps-4">
                    <div class="l-speciality__header mb-4">
                        <h3 class="text-secondary">Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                        <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <ul class="c-list ps-0">
                        <li class="d-flex align-items-center mb-3">
                            <i class="fa-solid fa-check text-primary pe-3"></i>
                            <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="fa-solid fa-check text-primary pe-3"></i>
                            <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="fa-solid fa-check text-primary pe-3"></i>
                            <span>Ullam est qui quos consequatur eos accusamus.</span>
                        </li>
                    </ul>  
                </div>
            </div>  
            <div class="row align-items-center flex-row-reverse my-5">
                <div class="col-md-5 mb-4">
                    <img src="https://bootstrapmade.com/demo/templates/Logis/assets/img/features-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pe-4">
                    <div class="l-speciality__header mb-4">
                        <h3 class="text-secondary">Corporis temporibus maiores provident</h3>
                        <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="l-speciality__body">
                        <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>  
                </div>
            </div>
            <div class="row align-items-center my-5">
                <div class="col-md-5 mb-4">
                    <img src="https://bootstrapmade.com/demo/templates/Logis/assets/img/features-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 ps-4">
                    <div class="c-speciality__header mb-4">
                        <h3 class="text-secondary">Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
                        <p class="fst-italic">Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
                    </div>
                    <ul class="c-list ps-0">
                        <li class="d-flex align-items-center mb-3">
                            <i class="fa-solid fa-check text-primary pe-3"></i>
                            <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="fa-solid fa-check text-primary pe-3"></i>
                            <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="fa-solid fa-check text-primary pe-3"></i>
                            <span>Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</span>
                        </li>
                    </ul>  
                </div>
            </div>
            <div class="row align-items-center flex-row-reverse my-5">
                <div class="col-md-5 mb-4">
                    <img src="https://bootstrapmade.com/demo/templates/Logis/assets/img/features-4.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pe-4">
                    <div class="l-speciality__header mb-4">
                        <h3 class="text-secondary">Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
                        <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="l-speciality__body">
                        <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>  
                </div>
            </div>
        </div> 
    </section>

    <section class="l-pricing h-section-padding">
        <div class="container">
            <div class="row">
            @component('components.section-title') 
                pricing
            @endcomponent
                <div class="col-lg-4">
                    @component('components.pricing-card')

                        @slot('title')
                            Free Plan
                        @endslot

                        @slot('price')
                            0
                        @endslot

                        @slot('list1')
                            Quam adipiscing vitae proin
                        @endslot

                        @slot('list2')
                            Nec feugiat nisl pretium
                        @endslot

                        @slot('list3')
                            Nulla at volutpat diam uteera
                        @endslot

                        @slot('list4')
                            Pharetra massa massa ultricies
                        @endslot

                        @slot('list5')
                            Massa ultricies mi quis hendrerit
                        @endslot

                        @slot('btn')
                            Buy Now
                        @endslot

                    @endcomponent
                </div>
                <div class="col-lg-4">
                    @component('components.pricing-card', ['position' => 'center', 'btn_style' => 'btn-primary'])

                        @slot('title')
                            Business Plan
                        @endslot

                        @slot('price')
                            29
                        @endslot

                        @slot('list1')
                            Quam adipiscing vitae proin
                        @endslot

                        @slot('list2')
                            Nec feugiat nisl pretium
                        @endslot

                        @slot('list3')
                            Nulla at volutpat diam uteera
                        @endslot

                        @slot('list4')
                            Pharetra massa massa ultricies
                        @endslot

                        @slot('list5')
                            Massa ultricies mi quis hendrerit
                        @endslot

                        @slot('btn')
                            Buy Now
                        @endslot

                    @endcomponent
                </div>
                <div class="col-lg-4">
                    @component('components.pricing-card')

                        @slot('title')
                            Developer Plan
                        @endslot

                        @slot('price')
                            49
                        @endslot

                        @slot('list1')
                            Quam adipiscing vitae proin
                        @endslot

                        @slot('list2')
                            Nec feugiat nisl pretium
                        @endslot

                        @slot('list3')
                            Nulla at volutpat diam uteera
                        @endslot

                        @slot('list4')
                            Pharetra massa massa ultricies
                        @endslot

                        @slot('list5')
                            Massa ultricies mi quis hendrerit
                        @endslot

                        @slot('btn')
                            Buy Now
                        @endslot

                    @endcomponent
                </div>
            </div>
        </div>
    </section>

    <section class="l-comment h-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div id="carouselComment" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-inner">
                            @component('components.comment-card')

                                @slot('src')
                                    https://bootstrapmade.com/demo/templates/Logis/assets/img/testimonials/testimonials-4.jpg
                                @endslot

                                @slot('alt')
                                    avatar
                                @endslot

                                @slot('title')
                                    Saul Goodman
                                @endslot
                                
                                @slot('subtitle')
                                    CEO & Founder
                                @endslot

                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.

                            @endcomponent
                        </div>
                        <div class="carousel-indicators position-relative mt-3">
                            <button type="button" data-bs-target="#carouselComment" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselComment" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="l-faq h-section-padding">
        <div class="container">
            <div class="row">
                @component('components.section-title') 
                    frequently asked questions
                @endcomponent
                <div class="col-lg-10 mx-auto">
                    @component('components.accordion')
                        @slot('title1')
                            Non consectetur a erat nam at lectus urna duis?
                        @endslot

                        @slot('body1')
                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        @endslot

                        @slot('title2')
                            Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                        @endslot

                        @slot('body2')
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                        @endslot

                        @slot('title3')
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                        @endslot
                            
                        @slot('body3')
                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                        @endslot

                        @slot('title4')
                            Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                        @endslot

                        @slot('body4')
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                        @endslot

                        @slot('title5')
                            Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                        @endslot

                        @slot('body5')
                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                        @endslot

                    @endcomponent
                </div>
            </div>            
        </div>
    </section>
@stop
