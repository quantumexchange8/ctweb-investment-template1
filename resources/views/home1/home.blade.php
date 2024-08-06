@extends('layout.master')

@section('body_class', 'home-01')

@section('navbar')
    @include('home1.home_Navbar')
@endsection

@section('content')
<main class="fix">

    <!-- banner-area -->
    <section class="banner-area banner-bg">
        <div class="banner-shape-wrap">
            <img src="assets/img/banner/banner_shape01.png" alt="" class="img-one">
            <img src="assets/img/banner/banner_shape02.png" alt="" class="img-two">
            <img src="assets/img/banner/banner_shape03.png" alt="" class="img-three">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="banner-content text-center">
                        <img src="assets/img/icon/fire.png" alt="">
                        <h2 class="title">Join Future of Algorithmic <span>Crypto</span> Trading Strategies</h2>
                    </div>
                    <div class="banner-progress-wrap">
                        <ul>
                            <li>Pre Sell</li>
                            <li>Soft Cap</li>
                            <li>Bonus</li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="title">65% target raised <span>1 ETH = $1000 = 3177.38 CIC</span></h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="banner-countdown-wrap text-center">
                        <h2 class="title">ICO Will Start In..</h2>
                        <div class="coming-time" data-countdown="2023/1/29"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-area-end -->

    <!-- about-area -->
    <section id="about" class="about-area pt-130 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img wow fadeInLeft" data-wow-delay=".2s">
                        <img src="assets/img/images/about_img01.png" alt="">
                        <img src="assets/img/images/about_img02.png" alt="" class="img-two">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content wow fadeInRight" data-wow-delay=".2s">
                        <div class="section-title mb-30">
                            <span class="sub-title">Who we are</span>
                            <h2 class="title">The World’s <span>1st ICO</span> Platform That Offers Rewards</h2>
                        </div>
                        <p>The World’s 1st ICO Platform That Offers Rewards and The platform helps investors to make easy to purchase and sell
                            their tokens</p>
                        <a href="#" class="btn">Purchase Tokens</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- partner-area -->
    <div class="partner-area pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-10">
                        <span class="sub-title">Our top partner</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="partner-wrap">
                        <ul>
                            <li><img src="assets/img/partner/partner_img01.png" alt=""></li>
                            <li><img src="assets/img/partner/partner_img02.png" alt=""></li>
                            <li><img src="assets/img/partner/partner_img03.png" alt=""></li>
                            <li><img src="assets/img/partner/partner_img04.png" alt=""></li>
                            <li><img src="assets/img/partner/partner_img05.png" alt=""></li>
                            <li><img src="assets/img/partner/partner_img06.png" alt=""></li>
                            <li><img src="assets/img/partner/partner_img07.png" alt=""></li>
                            <li><img src="assets/img/partner/partner_img08.png" alt=""></li>
                            <li><img src="assets/img/partner/partner_img09.png" alt=""></li>
                            <li><img src="assets/img/partner/partner_img10.png" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partner-area-end -->

    <!-- choose-area -->
    <section class="choose-area pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title">why Choose us</span>
                        <h2 class="title">Why choose our Current Tech <span>Token</span></h2>
                    </div>
                </div>
            </div>
            <div class="row choose-active">
                <div class="col-lg-3">
                    <div class="choose-item">
                        <div class="choose-icon">
                            <img src="assets/img/icon/choose_icon01.svg" alt="">
                        </div>
                        <div class="choose-content">
                            <h2 class="title"><a href="#">Mobile payment make easy</a></h2>
                            <p>Add new, trending and rare artwork to your collection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="choose-item">
                        <div class="choose-icon">
                            <img src="assets/img/icon/choose_icon02.svg" alt="">
                        </div>
                        <div class="choose-content">
                            <h2 class="title"><a href="#">Lifetime free transaction</a></h2>
                            <p>Add new, trending and rare artwork to your collection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="choose-item">
                        <div class="choose-icon">
                            <img src="assets/img/icon/choose_icon03.svg" alt="">
                        </div>
                        <div class="choose-content">
                            <h2 class="title"><a href="#">Protect the <br> identity</a></h2>
                            <p>Add new, trending and rare artwork to your collection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="choose-item">
                        <div class="choose-icon">
                            <img src="assets/img/icon/choose_icon04.svg" alt="">
                        </div>
                        <div class="choose-content">
                            <h2 class="title"><a href="#">Sercurity & control over money</a></h2>
                            <p>Add new, trending and rare artwork to your collection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="choose-item">
                        <div class="choose-icon">
                            <img src="assets/img/icon/choose_icon02.svg" alt="">
                        </div>
                        <div class="choose-content">
                            <h2 class="title"><a href="#">Lifetime free transaction</a></h2>
                            <p>Add new, trending and rare artwork to your collection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="choose-item">
                        <div class="choose-icon">
                            <img src="assets/img/icon/choose_icon03.svg" alt="">
                        </div>
                        <div class="choose-content">
                            <h2 class="title"><a href="#">Protect the <br> identity</a></h2>
                            <p>Add new, trending and rare artwork to your collection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="choose-item">
                        <div class="choose-icon">
                            <img src="assets/img/icon/choose_icon04.svg" alt="">
                        </div>
                        <div class="choose-content">
                            <h2 class="title"><a href="#">Sercurity & control over money</a></h2>
                            <p>Add new, trending and rare artwork to your collection.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                <span class="slider__label sr-only"></span>
            </div>
        </div>
    </section>
    <!-- choose-area-end -->

    <!-- chart-area -->
    <section id="sales" class="chart-area chart-bg jarallax">
        <div class="container">
            <div class="chart-inner">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-10 order-0 order-lg-2">
                        <div class="chart-wrap wow fadeInRight" data-wow-delay=".2s">
                            <img src="assets/img/images/chart.png" alt="">
                            <ul>
                                <li>Contingency: 70%</li>
                                <li>Business Development: 10%</li>
                                <li>Investor: 30%</li>
                                <li>Poland</li>
                                <li>Legal & Regulation:10%</li>
                                <li>Czech Republic</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="chart-content wow fadeInLeft" data-wow-delay=".2s">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="funding-tab" data-bs-toggle="tab" data-bs-target="#funding" type="button"
                                        role="tab" aria-controls="funding" aria-selected="true">Funding Allocation</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="token-tab" data-bs-toggle="tab" data-bs-target="#token" type="button"
                                        role="tab" aria-controls="token" aria-selected="false">Token Allocation</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="funding" role="tabpanel" aria-labelledby="funding-tab">
                                    <div class="chart-content-inner">
                                        <h2 class="title">1 CNL = 0.0863 BTC</h2>
                                        <p>The World’s 1st ICO Platform That Offers Rewards and The platform helps investors to make easy to purchase and sell their tokens</p>
                                        <a href="#" class="btn">Buy Now</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="token" role="tabpanel" aria-labelledby="token-tab">
                                    <div class="chart-content-inner">
                                        <h2 class="title">2 CNL = 0.0967 BTC</h2>
                                        <p>The World’s 1st ICO Platform That Offers Rewards and The platform helps investors to make easy to purchase and sell their tokens</p>
                                        <a href="#" class="btn">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chart-area-end -->

    <!-- area-bg -->
    <div class="area-bg">

        <!-- roadMap-area -->
        <section id="roadmap" class="roadmap-area pt-130 pb-130">
            <div class="container custom-container-two">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-8">
                        <div class="section-title text-center mb-60">
                            <span class="sub-title">OUr Roadmap</span>
                            <h2 class="title">Current Tech Strategy and <br> Project <span>Plan</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bt-roadmap_x">
                            <div class="bt-roadmap-wrap">
                                <div class="bt-roadmap-item">
                                    <span class="roadmap-title">Mid of Q4 2021</span>
                                    <div class="roadmap-content">
                                        <span class="dot"></span>
                                        <h4 class="title">Concept</h4>
                                        <span>EVM support for parthians</span>
                                        <span>SubQuery Academy</span>
                                        <span>Proof of indexing</span>
                                    </div>
                                </div>
                                <div class="bt-roadmap-item">
                                    <span class="roadmap-title">Mid of Q4 2021</span>
                                    <div class="roadmap-content">
                                        <span class="dot"></span>
                                        <h4 class="title">Research</h4>
                                        <span>SubQuery Builders/Grants Program</span>
                                        <span>SQT Network contract internal MVP</span>
                                        <span>Coordinator and client SDK</span>
                                    </div>
                                </div>
                                <div class="bt-roadmap-item">
                                    <span class="roadmap-title">Mid of Q4 2021</span>
                                    <div class="roadmap-content">
                                        <span class="dot"></span>
                                        <h4 class="title">App beta test</h4>
                                        <span>Public testnet launch</span>
                                        <span>SubQuery Network Explorer and dApp</span>
                                        <span>Point-in-time indexing</span>
                                    </div>
                                </div>
                                <div class="bt-roadmap-item">
                                    <span class="roadmap-title">Mid of Q4 2021</span>
                                    <div class="roadmap-content">
                                        <span class="dot"></span>
                                        <h4 class="title">Token Test</h4>
                                        <span>SQT token generation event</span>
                                        <span>Public incentivize testnet launch</span>
                                        <span>Data traffic insights and reporting</span>
                                    </div>
                                </div>
                                <div class="bt-roadmap-item">
                                    <span class="roadmap-title">Mid of Q4 2021</span>
                                    <div class="roadmap-content">
                                        <span class="dot"></span>
                                        <h4 class="title">Alpha test</h4>
                                        <span>Launch of the SubQuery Foundation</span>
                                        <span>Finalise research for other Layer-1 chains</span>
                                        <span>Liquidity mining program</span>
                                    </div>
                                </div>
                                <div class="bt-roadmap-item">
                                    <span class="roadmap-title">Mid of Q4 2021</span>
                                    <div class="roadmap-content">
                                        <span class="dot"></span>
                                        <h4 class="title">Benefits</h4>
                                        <span>Mainnet launch</span>
                                        <span>Centralized exchange launch</span>
                                        <span>Public incentivize testnet</span>
                                    </div>
                                </div>
                                <div class="bt-roadmap-item">
                                    <span class="roadmap-title">Mid of Q4 2021</span>
                                    <div class="roadmap-content">
                                        <span class="dot"></span>
                                        <h4 class="title">Operational</h4>
                                        <span>SubQuery launches its <br> own parthian</span>
                                        <span>SubQuery Foundation</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- roadMap-area-end -->


        <!-- document-area -->
        <section class="document-area pt-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 order-2 order-lg-0">
                        <div class="document-img text-center wow fadeInUp" data-wow-delay=".2s">
                            <img src="assets/img/images/document_img.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-7">
                        <div class="document-content mt-50 wow fadeInRight" data-wow-delay=".2s">
                            <div class="section-title mb-35">
                                <span class="sub-title">Whitepaper</span>
                                <h2 class="title">Read Current Tech <span>Documents</span></h2>
                            </div>
                            <ul class="document-list">
                                <li>White Paper</li>
                                <li>Privaci & Policy</li>
                                <li>Terms Of Coin Sale</li>
                                <li>One Pager</li>
                            </ul>
                            <a href="#" class="btn">Download Doc</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- document-area-end -->


    </div>
    <!-- area-bg-end -->

    <!-- team-area -->
    <section class="team-area pt-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-title text-center mb-70">
                        <span class="sub-title">OUr team</span>
                        <h2 class="title">The Leadership <br> <span>Team</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team/team_img01.png" alt="">
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
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team/team_img02.png" alt="">
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
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team/team_img03.png" alt="">
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
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team/team_img04.png" alt="">
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
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team/team_img05.png" alt="">
                        </div>
                        <div class="team-content">
                            <h2 class="title">Jacob Jones</h2>
                            <span>Marketer</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team/team_img06.png" alt="">
                        </div>
                        <div class="team-content">
                            <h2 class="title">Courtney Henry</h2>
                            <span>Founder</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team/team_img07.png" alt="">
                        </div>
                        <div class="team-content">
                            <h2 class="title">Ronald Richards</h2>
                            <span>Account Manager</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team/team_img08.png" alt="">
                        </div>
                        <div class="team-content">
                            <h2 class="title">Theresa Webb</h2>
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
            </div>
        </div>
    </section>
    <!-- team-area-end -->

    <!-- contact-area -->
    <section id="contact" class="contact-area pt-70 pb-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-70">
                        <span class="sub-title">Contact</span>
                        <h2 class="title"><span>Contact</span> ICO Crypto</h2>
                    </div>
                </div>
            </div>
            <div class="contact-info-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-info-item">
                            <div class="icon">
                                <span class="icon-background"></span>
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="content">
                                <p>company@gmail.com <br> infoweb@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-info-item">
                            <div class="icon">
                                <span class="icon-background"></span>
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="content">
                                <p>+84 0977425031<br> +998 765 775 34</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-info-item">
                            <div class="icon">
                                <span class="icon-background"></span>
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <p>State/province/area: <br>Georgia 198</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form-wrap">
                <form action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-grp">
                                <input type="text" placeholder="Enter your Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <input type="email" placeholder="Enter you email" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-grp">
                        <textarea name="massage" placeholder="Enter your massage"></textarea>
                    </div>
                    <div class="submit-btn text-center">
                        <button type="submit" class="btn">Send Massage</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

</main>
@endsection

@section('navbar')
    @include('home1.home_Footer')
@endsection