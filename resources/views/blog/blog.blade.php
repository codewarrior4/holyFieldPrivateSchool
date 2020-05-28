@extends('layouts.app')

@section('content')

<body class="blog_1 mean-container">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>


    <header id="header">
        <div class="header-body">
            <nav class="navbar edu-navbar bg-light" >
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">

                            <li><a href="/index"><img src="images/logox.png" width="130" height="130" alt=""></a></li>
                            <li><a data-scroll="" href="/index">Home</a></li>
                            <li><a data-scroll="" href="/admission">Admission</a></li>
                            <li><a data-scroll="" href="/teacher">Teachers</a></li>
                            <li><a data-scroll href="/event">Event</a></li>
                            <li><a data-scroll href="/gallery">Gallery</a></li>
                            <li><a data-scroll href="/blog">Blog</a></li>
                            <li><a data-scroll href="/about">About</a></li>
                            <li><a data-scroll href="/contact">Contact</a></li>
						<li style="display:none"><a data-scroll href="/contact">Contact</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-text ">
                            <h1> School News</h1>
                            <p><span><a href="/index">Home <i class="fa fa-angle-right"></i></a></span> <span class="b-active">Blog</span></p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </header>


    <div class="blog-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 bolg_side-left">
                    <div class="col-sm-12 single-item-box">
                        <div class="single-item">
                            <div class="img-box">
                                <a href="/blog/{{1}}"><img src="images/blog/blog-02.jpg" alt="" class="img-responsive"></a>
                                <span><a href="/blog/{{1}}" class="overlay"></a></span>
                                <div class="img-caption">
                                    <p class="date"><span>22</span><span>Aug</span></p>
                                </div>
                            </div>
                            <div class="single-text-box">
                                <h3><a href="/blog/{{1}}">Students in Class Room</a></h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">By Admin</a></li>
                                    <li><a href="#">22Aug, 2019</a></li>
                                    <li><a href="#">20 comments</a></li>
                                    <li><a href="#">122 likes</a></li>
                                </ul>
                                <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quiaolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt. Minim veniam, quis nostrud exercitation ullamco laboris nisi…</p>
                                <div class="blog-btn-box">
                                    <a href="/blog/{{1}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 single-item-box">
                        <div class="single-item">
                            <div class="img-box">
                                <a href="/blog/{{1}}"><img src="images/blog/blog-04.jpg" alt="" class="img-responsive"></a>
                                <span><a href="/blog/{{1}}" class="overlay"></a></span>
                                <div class="img-caption">
                                    <p class="date"><span>22</span><span>Aug</span></p>
                                </div>
                            </div>
                            <div class="single-text-box">
                                <h3><a href="/blog/{{1}}">Cloud Computing Class</a></h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">Admin</a></li>
                                    <li><a href="#">22Aug, 2019</a></li>
                                    <li><a href="#">20 comments</a></li>
                                    <li><a href="#">122 likes</a></li>
                                </ul>
                                <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quiaolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt. Minim veniam, quis nostrud exercitation ullamco laboris nisi…</p>
                                <div class="blog-btn-box">
                                    <a href="/blog/{{1}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 single-item-box">
                        <div class="single-item">
                            <div class="img-box">
                                <a href="/blog/{{1}}"><img src="images/blog/blog-03.jpg" alt="" class="img-responsive"></a>
                                <span><a href="/blog/{{1}}" class="overlay"></a></span>
                                <div class="img-caption">
                                    <p class="date"><span>22</span><span>Aug</span></p>
                                </div>
                            </div>
                            <div class="single-text-box">
                                <h3><a href="/blog/{{1}}">Cloud Computing Class Discussion</a></h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">By Admin</a></li>
                                    <li><a href="#">22Aug, 2019</a></li>
                                    <li><a href="#">20 comments</a></li>
                                    <li><a href="#">122 likes</a></li>
                                </ul>
                                <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quiaolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt. Minim veniam, quis nostrud exercitation ullamco laboris nisi…</p>
                                <div class="blog-btn-box">
                                    <a href="/blog/{{1}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 single-item-box">
                        <div class="single-item">
                            <div class="img-box">
                                <a href="/blog/{{1}}"><img src="images/blog/blog-01.jpg" alt="" class="img-responsive"></a>
                                <span><a href="/blog/{{1}}" class="overlay"></a></span>
                                <div class="img-caption">
                                    <p class="date"><span>22</span><span>Aug</span></p>
                                </div>
                            </div>
                            <div class="single-text-box">
                                <h3><a href="/blog/{{1}}">Amaging Bolg Images Post</a></h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">By Admin</a></li>
                                    <li><a href="#">22Aug, 2019</a></li>
                                    <li><a href="#">20 comments</a></li>
                                    <li><a href="#">122 likes</a></li>
                                </ul>
                                <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quiaolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt Minim veniam, quis nostrud exercitation ullamco laboris nisi…</p>
                                <div class="blog-btn-box">
                                    <a href="/blog/{{1}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12 single-item-box">
                        <div class="blog-comment">
                            <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quiaolor sit amet, consectetur, adipisci velit, magnam dolor sit amet, consectetur adipisicing…</p>
                            <span>Jhone Done</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <nav aria-label="Page navigation">
                                  <ul class="pagination">
                                    <li class="page-item">
                                          <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                                            <span class="sr-only">Previous</span>
                                          </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                          <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                                            <span class="sr-only">Next</span>
                                          </a>
                                    </li>
                                  </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 blog_side-right">
                    <div class="sidebar-content">
                        <div class="col-sm-12 recent-post-01">
                            <h3>Student's News</h3>
                            <div class="row">
                                <div class="col-sm-12 recent-single">
                                    <div class="recent-content-item">
                                        <div class="img-box"><a href="/blog/{{1}}"><img src="images/blog/recent-01.jpg" alt=""></a></div>
                                        <div class="recent-text pull-right">
                                            <a href="/blog/{{1}}">There are many variaons of are many ...</a>
                                            <p>22Aug, 2019 <span class="content"><i class="fa fa-comments"></i>12</span></p>
                                        </div>
                                    </div>
                                </div><!-- /.recent-single-item -->

                                <div class="col-sm-12 recent-single">
                                    <div class="recent-content-item">
                                        <div class="img-box"><a href="/blog/{{1}}"><img src="images/blog/recent-01.jpg" alt=""></a></div>
                                        <div class="recent-text pull-right">
                                            <a href="/blog/{{1}}">There are many variaons of are many ...</a>
                                            <p>22Aug, 2019 <span class="content"><i class="fa fa-comments"></i>12</span></p>
                                        </div>
                                    </div>
                                </div><!-- /.recent-single-item -->

                                <div class="col-sm-12 recent-single">
                                    <div class="recent-content-item">
                                        <div class="img-box"><a href="/blog/{{1}}"><img src="images/blog/recent-01.jpg" alt=""></a></div>
                                        <div class="recent-text pull-right">
                                            <a href="/blog/{{1}}">There are many variaons of are many ...</a>
                                            <p>22Aug, 2019 <span class="content"><i class="fa fa-comments"></i>8</span></p>
                                        </div>
                                    </div>
                                </div><!-- /.recent-single-item -->

                                <div class="col-sm-12 recent-single">
                                    <div class="recent-content-item">
                                        <div class="img-box"><a href="/blog/{{1}}"><img src="images/blog/recent-01.jpg" alt=""></a></div>
                                        <div class="recent-text pull-right">
                                            <a href="/blog/{{1}}">There are many variaons of are many ...</a>
                                            <p>22Aug, 2019 <span class="content"><i class="fa fa-comments"></i>15</span></p>
                                        </div>
                                    </div>
                                </div><!-- /.recent-single-item -->
                            </div>
                        </div>

                        <div class="row">



                            <div class="col-sm-12 recent-post-01">
                                <h3>Recent Posts</h3>
                                <div class="row">
                                    <div class="col-sm-12 recent-single">
                                        <div class="recent-content-item">
                                            <div class="img-box"><a href="/blog/{{1}}"><img src="images/blog/recent-01.jpg" alt=""></a></div>
                                            <div class="recent-text pull-right">
                                                <a href="/blog/{{1}}">There are many variaons of are many ...</a>
                                                <p>22Aug, 2019 <span class="content"><i class="fa fa-comments"></i>12</span></p>
                                            </div>
                                        </div>
                                    </div><!-- /.recent-single-item -->

                                    <div class="col-sm-12 recent-single">
                                        <div class="recent-content-item">
                                            <div class="img-box"><a href="/blog/{{1}}"><img src="images/blog/recent-01.jpg" alt=""></a></div>
                                            <div class="recent-text pull-right">
                                                <a href="/blog/{{1}}">There are many variaons of are many ...</a>
                                                <p>22Aug, 2019 <span class="content"><i class="fa fa-comments"></i>12</span></p>
                                            </div>
                                        </div>
                                    </div><!-- /.recent-single-item -->

                                    <div class="col-sm-12 recent-single">
                                        <div class="recent-content-item">
                                            <div class="img-box"><a href="/blog/{{1}}"><img src="images/blog/recent-01.jpg" alt=""></a></div>
                                            <div class="recent-text pull-right">
                                                <a href="/blog/{{1}}">There are many variaons of are many ...</a>
                                                <p>22Aug, 2019 <span class="content"><i class="fa fa-comments"></i>8</span></p>
                                            </div>
                                        </div>
                                    </div><!-- /.recent-single-item -->

                                    <div class="col-sm-12 recent-single">
                                        <div class="recent-content-item">
                                            <div class="img-box"><a href="/blog/{{1}}"><img src="images/blog/recent-01.jpg" alt=""></a></div>
                                            <div class="recent-text pull-right">
                                                <a href="/blog/{{1}}">There are many variaons of are many ...</a>
                                                <p>22Aug, 2019 <span class="content"><i class="fa fa-comments"></i>15</span></p>
                                            </div>
                                        </div>
                                    </div><!-- /.recent-single-item -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
