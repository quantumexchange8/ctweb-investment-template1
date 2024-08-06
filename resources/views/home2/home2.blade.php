@extends('layout.master')

@section('body_class', 'white-background')

@section('navbar')
    @include('home2.home2_Navbar')
@endsection
        
@section('content')
<main>

    <!-- banner-area -->
    <section class="banner-area-two">
        <div class="banner-bg-two"></div>
        <div class="container custom-container-four">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="banner-content text-center">
                        <h2 class="title wow fadeInDown" data-wow-delay=".2s">World’s Biggest ICO Cryptocurrency Platform for you</h2>
                        <img src="assets/img/banner/banner_img.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-social-wrap">
            <ul>
                <li><a href="#" class="banner-social-link"><i class="fab fa-linkedin-in"></i></a><span>LinkedIn</span></li>
                <li><a href="#" class="banner-social-link"><i class="fab fa-twitter"></i></a><span>Twitter</span></li>
                <li><a href="#" class="banner-social-link"><i class="fab fa-pinterest"></i></a><span>Pinterest</span></li>
                <li><a href="#" class="banner-social-link"><i class="fab fa-instagram"></i></a><span>Instagram</span></li>
            </ul>
        </div>
        <div class="banner-scroll">
            <span>Scroll down</span>
            <a href="#" data-target="#about"><img src="assets/img/icon/scroll_icon.svg" alt=""></a>
        </div>
    </section>
    <!-- banner-area-end -->

    <!-- countdown-area -->
    <section id="countdown" class="countdown-area-two">
        <div class="container custom-container-four">
            <div class="row">
                <div class="col-lg-12">
                    <div class="countdown-wrap">
                        <h2 class="title">ICO Will Start In..</h2>
                        <div id="countdown-gampang"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- countdown-area-end -->

    <!-- about-area -->
    <section id="about" class="about-area-two">
        <div class="container custom-container-four">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-two text-center wow fadeInLeft" data-wow-delay=".2s">
                        <img src="assets/img/images/h2_about_img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-two wow fadeInRight" data-wow-delay=".2s">
                        <div class="section-title section-title-two mb-15">
                            <span class="sub-title">ABOUT Crypto ICO</span>
                            <h2 class="title">Current Tech Theme is the best for your ICO</h2>
                        </div>
                        <p>The World’s 1st ICO Platform That Offers Rewards and The platform helps investors to make easy</p>
                        <div class="about-list">
                            <ul>
                                <li><i class="fas fa-check"></i>Mouthwatering leading how real formula also</li>
                                <li><i class="fas fa-check"></i>Locked-in have can mountain thought</li>
                            </ul>
                        </div>
                        <a href="assets/img/images/h2_about_img.png" download target="_blank" class="btn btn-two">Download Document</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape-wrap">
            <img src="assets/img/images/about_shape01.png" alt="" class="shape-one">
            <img src="assets/img/images/about_shape02.png" alt="" class="shape-two rotateme">
        </div>
    </section>
    <!-- about-area-end -->

    <!-- choose-area -->
    <section class="choose-area-two choose-bg pb-130">
        <div class="container custom-container-four">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-70">
                        <span class="sub-title">why Choose us</span>
                        <h2 class="title">Why you choose our Current Tech Token</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="choose-item-two wow fadeInUp" data-wow-delay=".2s">
                        <div class="choose-icon-two">
                            <img src="assets/img/icon/h2_choose_icon01.svg" alt="">
                        </div>
                        <div class="choose-content">
                            <h2 class="title"><a href="#">Mobile payment make easy</a></h2>
                            <p>Add new, trending and rare artwork to your collection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="choose-item-two wow fadeInUp" data-wow-delay=".4s">
                        <div class="choose-icon-two">
                            <img src="assets/img/icon/h2_choose_icon02.svg" alt="">
                        </div>
                        <div class="choose-content">
                            <h2 class="title"><a href="#">Lifetime free transaction</a></h2>
                            <p>Add new, trending and rare artwork to your collection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="choose-item-two wow fadeInUp" data-wow-delay=".6s">
                        <div class="choose-icon-two">
                            <img src="assets/img/icon/h2_choose_icon03.svg" alt="">
                        </div>
                        <div class="choose-content">
                            <h2 class="title"><a href="#">Protect the identity</a></h2>
                            <p>Add new, trending and rare artwork to your collection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="choose-item-two wow fadeInUp" data-wow-delay=".8s">
                        <div class="choose-icon-two">
                            <img src="assets/img/icon/h2_choose_icon04.svg" alt="">
                        </div>
                        <div class="choose-content">
                            <h2 class="title"><a href="#">Sercurity & control over money</a></h2>
                            <p>Add new, trending and rare artwork to your collection.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose-area-end -->

    <!-- counter-area -->
    <section class="counter-area">
        <div class="container custom-container-four">
            <div class="counter-inner">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="counter-item">
                            <div class="counter-icon">
                                <img src="assets/img/icon/counter_icon01.svg" alt="">
                            </div>
                            <div class="counter-content">
                                <h2 class="count"><span class="odometer" data-count="280"></span>K</h2>
                                <p>Active Installation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="counter-item">
                            <div class="counter-icon">
                                <img src="assets/img/icon/counter_icon01.svg" alt="">
                            </div>
                            <div class="counter-content">
                                <h2 class="count"><span class="odometer" data-count="250"></span>K</h2>
                                <p>Active Installation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="counter-item">
                            <div class="counter-icon">
                                <img src="assets/img/icon/counter_icon01.svg" alt="">
                            </div>
                            <div class="counter-content">
                                <h2 class="count"><span class="odometer" data-count="230"></span>K</h2>
                                <p>Active Installation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter-area-end -->

    <!-- roadmap-area -->
    <section id="roadmap" class="roadmap-area-two pt-130 pb-100">
        <div class="container custom-container-two">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-title section-title-two text-center mb-65">
                        <span class="sub-title">roadmap</span>
                        <h2 class="title">Current Tech Strategy and <br> Project Plan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="roadmap-wrap-two">
                        <div class="roadmap-item">
                            <span class="roadmap-title">Mid of Q4 2021</span>
                            <div class="roadmap-content">
                                <span class="dot"></span>
                                <h4 class="title">Concept</h4>
                                <p>EVM support for parachains SubQuery Academy Proof of indexing</p>
                            </div>
                        </div>
                        <div class="roadmap-item">
                            <span class="roadmap-title">Mid Q1 2022</span>
                            <div class="roadmap-content">
                                <span class="dot"></span>
                                <h4 class="title">App beta test</h4>
                                <p>Public testnet launch <br> SubQuery Network Explorer and dApp <br> Point-in-time indexing</p>
                            </div>
                        </div>
                        <div class="roadmap-item">
                            <span class="roadmap-title">Mid Q2 2022</span>
                            <div class="roadmap-content">
                                <span class="dot"></span>
                                <h4 class="title">Alpha test</h4>
                                <p>Launch of the SubQuery Foundation Finalise research for other Layer-1 chains Liquidity mining program</p>
                            </div>
                        </div>
                        <div class="roadmap-item">
                            <span class="roadmap-title">End of Q2 2022</span>
                            <div class="roadmap-content">
                                <span class="dot"></span>
                                <h4 class="title">Operational</h4>
                                <p>SubQuery launches its own parachainSubQuery Foundation</p>
                            </div>
                        </div>
                    </div>
                    <div class="roadmap-wrap-two bottom">
                        <div class="roadmap-item">
                            <span class="roadmap-title">Mid of Q4 2024</span>
                            <div class="roadmap-content">
                                <span class="dot"></span>
                                <h4 class="title">Concept</h4>
                                <p>EVM support for parachains SubQuery Academy Proof of indexing</p>
                            </div>
                        </div>
                        <div class="roadmap-item">
                            <span class="roadmap-title">Mid Q1 2025</span>
                            <div class="roadmap-content">
                                <span class="dot"></span>
                                <h4 class="title">App beta test</h4>
                                <p>Public testnet launch <br> SubQuery Network Explorer and dApp <br> Point-in-time indexing</p>
                            </div>
                        </div>
                        <div class="roadmap-item">
                            <span class="roadmap-title">Mid Q2 2026</span>
                            <div class="roadmap-content">
                                <span class="dot"></span>
                                <h4 class="title">Alpha test</h4>
                                <p>Launch of the SubQuery Foundation Finalise research for other Layer-1 chains Liquidity mining program</p>
                            </div>
                        </div>
                        <div class="roadmap-item">
                            <span class="roadmap-title">End of Q2 2030</span>
                            <div class="roadmap-content">
                                <span class="dot"></span>
                                <h4 class="title">Operational</h4>
                                <p>SubQuery launches its own parachainSubQuery Foundation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- roadmap-area-end -->

    <!-- team-area -->
    <section class="team-area-two team-bg">
        <div class="container custom-container-four">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-60">
                        <span class="sub-title">OUr team</span>
                        <h2 class="title">The Leadership <br> <span>Team</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-item team-item-two wow fadeInUp" data-wow-delay=".2s">
                        <div class="team-thumb">
                            <img src="assets/img/team/h2_team_img01.png" alt="">
                        </div>
                        <div class="team-content">
                            <h2 class="title">Cameron Williamson</h2>
                            <span>Founder & CO</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-item team-item-two wow fadeInUp" data-wow-delay=".4s">
                        <div class="team-thumb">
                            <img src="assets/img/team/h2_team_img02.png" alt="">
                        </div>
                        <div class="team-content">
                            <h2 class="title">Eleanor Pena</h2>
                            <span>Head of Design</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-item team-item-two wow fadeInUp" data-wow-delay=".6s">
                        <div class="team-thumb">
                            <img src="assets/img/team/h2_team_img03.png" alt="">
                        </div>
                        <div class="team-content">
                            <h2 class="title">Bessie Cooper</h2>
                            <span>Vp People</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-item team-item-two wow fadeInUp" data-wow-delay=".8s">
                        <div class="team-thumb">
                            <img src="assets/img/team/h2_team_img04.png" alt="">
                        </div>
                        <div class="team-content">
                            <h2 class="title">Darlene Robertson</h2>
                            <span>Product Manager</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-area-end -->

    <!-- download-area -->
    <section class="download-area pt-150 pb-140">
        <div class="container custom-container-four">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6 order-0 order-lg-2">
                    <div class="download-img text-center wow fadeInRight" data-wow-delay=".2s">
                        <img src="assets/img/images/download_img.png" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="download-content wow fadeInLeft" data-wow-delay=".2s">
                        <div class="section-title section-title-two mb-20">
                            <span class="sub-title">Download ICO App</span>
                            <h2 class="title">You can treding, control, buy and sell from your mobile</h2>
                        </div>
                        <p>The World’s 1st ICO Platform That Offers Rewards and The platform helps investors to make easy</p>
                        <div class="download-btn">
                            <a href="#"><img src="assets/img/images/download_btn01.png" alt=""></a>
                            <a href="#"><img src="assets/img/images/download_btn02.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- download-area-end -->

    <!-- faq-area -->
    <section id="faq" class="faq-area">
        <div class="container custom-container-four">
            <div class="faq-shape-wrap">
                <img src="assets/img/images/faq_shape01.png" alt="" class="img-one">
                <img src="assets/img/images/faq_shape02.png" alt="" class="img-two rotateme">
                <img src="assets/img/images/faq_shape03.png" alt="" class="img-three">
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title section-title-two text-center mb-60">
                        <h2 class="title">Frequently asked questions</h2>
                    </div>
                    <div class="faq-wrap wow fadeInUp" data-wow-delay=".2s">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Do I need to install any software?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>LessAccounting is 100% web-based, meaning it can be accessed from anywhere and there’s no software to install on your computer. You can easily use LessAccounting on your iPhone or any Android mobile device with our cloud accounting. That is what makes it the best small business accounting software options among accounting programs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Is my data safe?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>LessAccounting is 100% web-based, meaning it can be accessed from anywhere and there’s no software to install on your computer. You can easily use LessAccounting on your iPhone or any Android mobile device with our cloud accounting. That is what makes it the best small business accounting software options among accounting programs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How does the 30-day free software trial work?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>LessAccounting is 100% web-based, meaning it can be accessed from anywhere and there’s no software to install on your computer. You can easily use LessAccounting on your iPhone or any Android mobile device with our cloud accounting. That is what makes it the best small business accounting software options among accounting programs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        How does the 30-day free software trial work?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>LessAccounting is 100% web-based, meaning it can be accessed from anywhere and there’s no software to install on your computer. You can easily use LessAccounting on your iPhone or any Android mobile device with our cloud accounting. That is what makes it the best small business accounting software options among accounting programs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        How does the 30-day free software trial work?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>LessAccounting is 100% web-based, meaning it can be accessed from anywhere and there’s no software to install on your computer. You can easily use LessAccounting on your iPhone or any Android mobile device with our cloud accounting. That is what makes it the best small business accounting software options among accounting programs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-area-end -->

    <!-- contact-area -->
    <section id="contact" class="contact-aera contact-bg">
        <div class="container custom-container-four">
            <div class="contact-inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-info-wrap-two wow fadeInLeft" data-wow-delay=".2s">
                            <h2 class="title">Get in Touch</h2>
                            <div class="contact-list-item">
                                <div class="icon">
                                    <img src="assets/img/icon/contact_icon01.svg" alt="">
                                </div>
                                <div class="content">
                                    <p>Chevy Chase, Maryland 20815 Wisconsin Ave, Suite 700</p>
                                </div>
                            </div>
                            <div class="contact-list-item">
                                <div class="icon">
                                    <img src="assets/img/icon/contact_icon01.svg" alt="">
                                </div>
                                <div class="content">
                                    <p>support@figma.com</p>
                                </div>
                            </div>
                            <div class="contact-list-item">
                                <div class="icon">
                                    <img src="assets/img/icon/contact_icon01.svg" alt="">
                                </div>
                                <div class="content">
                                    <p>088 (778 886 664)</p>
                                </div>
                            </div>
                            <div class="contact-list-item">
                                <div class="icon">
                                    <img src="assets/img/icon/contact_icon01.svg" alt="">
                                </div>
                                <div class="content">
                                    <p>088 (778 886 664)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form-wrap-two wow fadeInRight" data-wow-delay=".2s">
                            <h2 class="title">Lets Get in touch with us</h2>
                            <form action="#">
                                <input type="text" placeholder="Name" required>
                                <input type="email" placeholder="Email Address" required>
                                <textarea name="massage" placeholder="Massage" required></textarea>
                                <button type="submit" class="btn btn-two">Send Massage</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

    <!-- newsletter-area -->
    <section class="newsletter-area">
        <div class="container custom-container-four">
            <div class="row">
                <div class="col-lg-12">
                    <div class="newsletter-wrap">
                        <div class="newsletter-content">
                            <h2 class="title">Subscribe Newsletters</h2>
                        </div>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="text" placeholder="Enter your email" required>
                                <button type="submit" class="btn btn-two">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter-area-end -->

</main>
@endsection

@section('footer')
    @include('home2.home2_Footer')
@endsection