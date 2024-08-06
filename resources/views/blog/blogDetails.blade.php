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
                        <h2 class="title">Single Article</h2>
                        <nav aria-label="Breadcrumbs">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/home1"><span>Home</span></a>
                                </li>
                                <li class="breadcrumb-item"><span>Blog details</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- blog-area -->
    <section class="blog-details-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-post-item blog-details-wrap">
                        <div class="blog-post-thumb">
                            <img src="assets/img/blog/blog_img01.jpg" alt="">
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="/blogDetails"><i class="far fa-user"></i>Alextina</a></li>
                                    <li><i class="far fa-clock"></i>Dec 28, 2022</li>
                                    <li><a href="/blogDetails"><i class="fas fa-comment-dots"></i>(04) Comments</a></li>
                                </ul>
                            </div>
                            <h2 class="title">New trends in UI/UX Design World of crypto Integration of this year</h2>
                            <p>Laboratories used for scientific research take many forms because of the differing requirements of specialists in the various fields of science and engineering. A physics laboratory</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, aperiam ipsquae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim voluptatem voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, aperiam ipsquae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                            <div class="bd-approach-wrap">
                                <div class="row align-items-center">
                                    <div class="col-46">
                                        <div class="bd-approach-content">
                                            <h4 class="title">Our Approach</h4>
                                            <p>Must explain to you how all praising uts pain was born and I will gives you a itself completed account of the
                                                system, and sed expounds the ut actual teachings of that greater</p>
                                            <ul>
                                                <li><i class="fas fa-check"></i>Extramural Funding</li>
                                                <li><i class="fas fa-check"></i>Bacteria Markers</li>
                                                <li><i class="fas fa-check"></i>Nam nec mi euismod euismod</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-54">
                                        <div class="bd-approach-img">
                                            <img src="assets/img/blog/blog_details01.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bd-technology-content">
                                <h2 class="title">What Is A Business Technology Roadmap?</h2>
                                <p>Unlike detailed blueprints that lay out all tasks, deadlines, bug reports, and more along the way, technology roadmaps  are high-level visual summaries highlighting a company’s vision or plans.</p>
                                <p>In an Agile approach, a technology roadmap feeds the sprint and grooming processes, providing insight into how the product will travel from start to finish. It makes it easier for development teams to:</p>
                            </div>
                            <div class="blog-details-img">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/img/blog/blog_details02.jpg" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="assets/img/blog/blog_details03.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="blog-details-bottom">
                                <div class="blog-details-tags">
                                    <ul>
                                        <li class="tag-title">Tag</li>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">apps</a></li>
                                        <li><a href="#">data</a></li>
                                    </ul>
                                </div>
                                <div class="blog-details-social">
                                    <ul>
                                        <li class="social-title">Share</li>
                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-wrap">
                        <h4 class="title">(04) Comment</h4>
                        <div class="latest-comments">
                            <ul class="list-wrap">
                                <li>
                                    <div class="comments-box">
                                        <div class="comments-avatar">
                                            <img src="assets/img/blog/comment_avatar01.png" alt="">
                                        </div>
                                        <div class="comment-text">
                                            <div class="avatar-name">
                                                <h5 class="title">Kristin Watson <a href="#" class="comment-reply-link"><i class="fas fa-reply-all"></i></a>
                                                </h5>
                                                <span>19th August 2022</span>
                                            </div>
                                            <p>Patient Comments are a collection of comments submitted by viewers in response to a question posed by a
                                                MedicineNet doctor.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <ul class="children">
                                        <li>
                                            <div class="comments-box">
                                                <div class="comments-avatar">
                                                    <img src="assets/img/blog/comment_avatar02.png" alt="">
                                                </div>
                                                <div class="comment-text">
                                                    <div class="avatar-name">
                                                        <h5 class="title">Brooklyn Simmons <a href="#" class="comment-reply-link"><i class="fas fa-reply-all"></i></a>
                                                        </h5>
                                                        <span>19th August 2022</span>
                                                    </div>
                                                    <p>Include anecdotal examples of your experience, or things you took notice of that you feel others would find useful.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="post-comments-form">
                        <div class="post-comment-content">
                            <h4 class="title">Leave a Reply</h4>
                            <p>Your email address will not be published. Required fields are marked *</p>
                        </div>
                        <div class="comment-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" placeholder="Enter your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="email" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" placeholder="Enter your number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" placeholder="Enter your website">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grp">
                                    <textarea name="comment" placeholder="Type your comment"></textarea>
                                </div>
                                <button type="submit" class="btn btn-two">Post comment</button>
                            </form>
                        </div>
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