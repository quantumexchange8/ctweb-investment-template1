@extends('layout.master')

@section('body_class', 'white-background')

@section('navbar')
    @include('home2.home2_Navbar')
@endsection

@section('content')
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb-content">
                        <h2 class="title">Blog & Article</h2>
                        <nav aria-label="Breadcrumbs">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/home1"><span>Home</span></a>
                                </li>
                                <li class="breadcrumb-item"><span>Blog</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- blog-area -->
    <section class="blog-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-post-item">
                        <div class="blog-post-thumb">
                            <a href="/blogDetails"><img src="assets/img/blog/blog_img01.jpg" alt=""></a>
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="/blogDetails"><i class="far fa-user"></i>Alextina</a></li>
                                    <li><i class="far fa-clock"></i>Dec 28, 2022</li>
                                    <li><a href="/blogDetails"><i class="fas fa-comment-dots"></i>(04) Coments</a></li>
                                </ul>
                            </div>
                            <h2 class="title"><a href="/blogDetails">New trends in UI/UX Design World of crypto Integration of this year</a></h2>
                            <p>Laboratories used for scientific research take many forms because of the differing requirements of specialists in the various fields of science and engineering. A physics laboratory</p>
                            <a href="/blogDetails" class="btn btn-two">Read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-post-item">
                        <div class="blog-post-thumb">
                            <a href="/blogDetails"><img src="assets/img/blog/blog_img02.jpg" alt=""></a>
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="/blogDetails"><i class="far fa-user"></i>Alextina</a></li>
                                    <li><i class="far fa-clock"></i>Dec 28, 2022</li>
                                    <li><a href="/blogDetails"><i class="fas fa-comment-dots"></i>(04) Coments</a></li>
                                </ul>
                            </div>
                            <h2 class="title"><a href="/blogDetails">That Time We Burned Down Players’ <br> Houses in Ultima Online</a></h2>
                            <p>Laboratories used for scientific research take many forms because of the differing requirements of specialists in the various fields of science and engineering. A physics laboratory</p>
                            <a href="/blogDetails" class="btn btn-two">Read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-post-item">
                        <div class="blog-post-thumb">
                            <a href="/blogDetails"><img src="assets/img/blog/blog_img03.jpg" alt=""></a>
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="/blogDetails"><i class="far fa-user"></i>Alextina</a></li>
                                    <li><i class="far fa-clock"></i>Dec 28, 2022</li>
                                    <li><a href="/blogDetails"><i class="fas fa-comment-dots"></i>(04) Coments</a></li>
                                </ul>
                            </div>
                            <h2 class="title"><a href="/blogDetails">Why Your Next ‘Yes’ Hire Might Come From Someone Who Just Said</a></h2>
                            <p>Laboratories used for scientific research take many forms because of the differing requirements of specialists in the various fields of science and engineering. A physics laboratory</p>
                            <a href="/blogDetails" class="btn btn-two">Read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="pagination-wrap">
                        <ul class="list-wrap">
                            <li class="prv-next">
                                <a href="/blog"><i class="fas fa-angle-double-left"></i></a>
                            </li>
                            <li><a href="/blog">1</a></li>
                            <li><a href="/blog" class="current">2</a></li>
                            <li><a href="/blog">3</a></li>
                            <li><a href="/blog">...</a></li>
                            <li class="prv-right">
                                <a href="/blog"><i class="fas fa-angle-double-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="blog-sidebar">
                        <div class="blog-widget">
                            <h2 class="bw-title">Search Here</h2>
                            <form action="#" class="sidebar-search">
                                <input type="text" placeholder="Search post">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog-widget">
                            <h2 class="bw-title">Categories</h2>
                            <div class="category-list">
                                <ul>
                                    <li><a href="#">Chemistry <span>03</span></a></li>
                                    <li><a href="#">Forensic science <span>07</span></a></li>
                                    <li><a href="#">Gemological <span>09</span></a></li>
                                    <li><a href="#">Chemistry <span>01</span></a></li>
                                    <li><a href="#">UI/UX Deisgn <span>00</span></a></li>
                                    <li><a href="#">Gemological <span>26</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-widget">
                            <h2 class="bw-title">Pages</h2>
                            <div class="page-list">
                                <ul>
                                    <li><a href="#">Web Design<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">Branding Design<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">Photography<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">Business Statergy<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">UI/UX Deisgn<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">Web Development<i class="fas fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-widget">
                            <h2 class="bw-title">Recent Post</h2>
                            <div class="rc-post-wrap">
                                <div class="rc-post-item">
                                    <div class="rc-post-thumb">
                                        <a href="/blogDetails"><img src="assets/img/blog/rc_post_img01.jpg" alt=""></a>
                                    </div>
                                    <div class="rc-post-content">
                                        <span>4 March. 2022</span>
                                        <h4 class="title"><a href="/blogDetails">Don’t Underestimate The Software</a></h4>
                                    </div>
                                </div>
                                <div class="rc-post-item">
                                    <div class="rc-post-thumb">
                                        <a href="/blogDetails"><img src="assets/img/blog/rc_post_img02.jpg" alt=""></a>
                                    </div>
                                    <div class="rc-post-content">
                                        <span>4 March. 2022</span>
                                        <h4 class="title"><a href="/blogDetails">Designing Human-Machine Interfaces..</a></h4>
                                    </div>
                                </div>
                                <div class="rc-post-item">
                                    <div class="rc-post-thumb">
                                        <a href="/blogDetails"><img src="assets/img/blog/rc_post_img03.jpg" alt=""></a>
                                    </div>
                                    <div class="rc-post-content">
                                        <span>4 March. 2022</span>
                                        <h4 class="title"><a href="/blogDetails">Web Design Done Well: Excellent</a></h4>
                                    </div>
                                </div>
                                <div class="rc-post-item">
                                    <div class="rc-post-thumb">
                                        <a href="/blogDetails"><img src="assets/img/blog/rc_post_img04.jpg" alt=""></a>
                                    </div>
                                    <div class="rc-post-content">
                                        <span>4 March. 2022</span>
                                        <h4 class="title"><a href="/blogDetails">Don’t Underestimate The Software</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-widget">
                            <h2 class="bw-title">Popular Tag</h2>
                            <div class="tag-list">
                                <ul>
                                    <li><a href="#">landing</a></li>
                                    <li><a href="#">Charity</a></li>
                                    <li><a href="#">apps</a></li>
                                    <li><a href="#">Education</a></li>
                                    <li><a href="#">data</a></li>
                                    <li><a href="#">book</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">website</a></li>
                                    <li><a href="#">landing page</a></li>
                                    <li><a href="#">data</a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->

</main>
@endsection

@section('footer')
    @include('home2.home2_Footer')
@endsection