@extends('layouts.login_master')

@section('content')
    <div class="page-content login-cover">

        <style>
            /*
   Removes white gap between slides
   */
            .carousel {
                background:#444;
            }

            /*
            Forces image to be 100% width and not max width of 100%
            */
            .carousel-item .img-fluid {
                width:100%;
                height:auto;
            }

            /*
            anchors are inline so you need ot make them block to go full width
            */
            .carousel-item a {
                display: block;
                width:100%;
            }

        </style>
        <!-- Main content -->
        <div class="content-wrapper">
            <!-- About Area -->
            <h1>Gestion decole</h1>
            <div id="carousel-2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-2" data-slide-to="1"></li>
                    <li data-target="#carousel-2" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <a href="https://bootstrapcreative.com/">

                            <img src="https://dummyimage.com/1000x400/444/" alt="responsive image" class="d-block img-fluid">

                            <div class="carousel-caption">
                                <div>
                                    <h2>Digital Craftsmanship</h2>
                                    <p>We meticously build each site to get results</p>
                                    <span class="btn btn-sm btn-outline-secondary">Learn More</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- /.carousel-item -->


                    <div class="carousel-item">
                        <a href="https://bootstrapcreative.com/">
                            <img src="https://dummyimage.com/1000x400/444/" alt="responsive image" class="d-block img-fluid">

                            <div class="carousel-caption justify-content-center align-items-center">
                                <div>
                                    <h2>Every project begins with a sketch</h2>
                                    <p>We work as an extension of your business to explore solutions</p>
                                    <span class="btn btn-sm btn-outline-secondary">Our Process</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item">
                        <a href="https://bootstrapcreative.com/">

                            <img src="https://dummyimage.com/1000x400/444/" alt="responsive image" class="d-block img-fluid">


                            <div class="carousel-caption justify-content-center align-items-center">
                                <div>
                                    <h2>meilleur Staff</h2>
                                    <p>On vous fournit le meillueur staff</p>
                                    <span class="btn btn-sm btn-secondary">Learn How</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- /.carousel-item -->
                </div>
                <!-- /.carousel-inner -->
                <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- /.carousel -->


            <div class="container-fluid">
                <p>Full width carousel</p>
            </div>
            <style>
                @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic);

                body {
                    font-family: 'Source Sans Pro', sans-serif;
                    line-height: 1.5;
                    color: #323232;
                    font-size: 15px;
                    font-weight: 400;
                    text-rendering: optimizeLegibility;
                    -webkit-font-smoothing: antialiased;
                    -moz-font-smoothing: antialiased;
                }
                .heading-title {
                    margin-bottom: 100px;
                }
                .text-center {
                    text-align: center;
                }
                .heading-title h3 {
                    margin-bottom: 0;
                    letter-spacing: 2px;
                    font-weight: normal;
                }
                .p-top-30 {
                    padding-top: 30px;
                }
                .half-txt {
                    width: 60%;
                    margin: 0 auto;
                    display: inline-block;
                    line-height: 25px;
                    color: #7e7e7e;
                }
                .text-uppercase {
                    text-transform: uppercase;
                }

                .team-member, .team-member .team-img {
                    position: relative;
                }
                .team-member {
                    overflow: hidden;
                }
                .team-member, .team-member .team-img {
                    position: relative;
                }

                .team-hover {
                    position: absolute;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    margin: 0;
                    border: 20px solid rgba(0, 0, 0, 0.1);
                    background-color: rgba(255, 255, 255, 0.90);
                    opacity: 0;
                    -webkit-transition: all 0.3s;
                    transition: all 0.3s;
                }
                .team-member:hover .team-hover .desk {
                    top: 35%;
                }
                .team-member:hover .team-hover, .team-member:hover .team-hover .desk, .team-member:hover .team-hover .s-link {
                    opacity: 1;
                }
                .team-hover .desk {
                    position: absolute;
                    top: 0%;
                    width: 100%;
                    opacity: 0;
                    -webkit-transform: translateY(-55%);
                    -ms-transform: translateY(-55%);
                    transform: translateY(-55%);
                    -webkit-transition: all 0.3s 0.2s;
                    transition: all 0.3s 0.2s;
                    padding: 0 20px;
                }
                .desk, .desk h4, .team-hover .s-link a {
                    text-align: center;
                    color: #222;
                }
                .team-member:hover .team-hover .s-link {
                    bottom: 10%;
                }
                .team-member:hover .team-hover, .team-member:hover .team-hover .desk, .team-member:hover .team-hover .s-link {
                    opacity: 1;
                }
                .team-hover .s-link {
                    position: absolute;
                    bottom: 0;
                    width: 100%;
                    opacity: 0;
                    text-align: center;
                    -webkit-transform: translateY(45%);
                    -ms-transform: translateY(45%);
                    transform: translateY(45%);
                    -webkit-transition: all 0.3s 0.2s;
                    transition: all 0.3s 0.2s;
                    font-size: 35px;
                }
                .desk, .desk h4, .team-hover .s-link a {
                    text-align: center;
                    color: #222;
                }
                .team-member .s-link a {
                    margin: 0 10px;
                    color: #333;
                    font-size: 16px;
                }
                .team-title {
                    position: static;
                    padding: 20px 0;
                    display: inline-block;
                    letter-spacing: 2px;
                    width: 100%;
                }
                .team-title h5 {
                    margin-bottom: 0px;
                    display: block;
                    text-transform: uppercase;
                }
                .team-title span {
                    font-size: 12px;
                    text-transform: uppercase;
                    color: #a5a5a5;
                    letter-spacing: 1px;
                }


            </style>
            <!--About Area -->
            <!--Team area  -->
            <div class="container">
                <div class="row">
                    <div class="heading-title text-center">
                        <h3 class="text-uppercase">Notre Equipe</h3>
                        <p class="p-top-30 half-txt">Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend. </p>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="team-member">
                            <div class="team-img">
                                <img src="https://image.freepik.com/free-photo/man-standing-with-a-black-t-shirt_1187-1045.jpg" alt="team member" class="img-responsive">
                            </div>
                            <div class="team-hover">
                                <div class="desk">
                                    <h4>Hi There !</h4>
                                    <p>I love to introduce myself as a hardcore Web Designer.</p>
                                </div>
                                <div class="s-link">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-title">
                            <h5>Martin Smith</h5>
                            <span>founder &amp; ceo</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="team-member">
                            <div class="team-img">
                                <img src="https://image.freepik.com/free-photo/elegant-man-with-thumbs-up_1149-1595.jpg" alt="team member" class="img-responsive">
                            </div>
                            <div class="team-hover">
                                <div class="desk">
                                    <h4>Hello World</h4>
                                    <p>I love to introduce myself as a hardcore Web Designer.</p>
                                </div>
                                <div class="s-link">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-title">
                            <h5>Franklin Harbet</h5>
                            <span>HR Manager</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="team-member">
                            <div class="team-img">
                                <img src="https://image.freepik.com/free-photo/well-dressed-executive-with-crossed-arms_1098-3930.jpg" alt="team member" class="img-responsive">
                            </div>
                            <div class="team-hover">
                                <div class="desk">
                                    <h4>I love to design</h4>
                                    <p>I love to introduce myself as a hardcore Web Designer.</p>
                                </div>
                                <div class="s-link">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-title">
                            <h5>Linda Anderson</h5>
                            <span>Marketing Manager</span>
                        </div>
                    </div>

                </div>

            </div>
            <!--Team area -->
            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Login card -->
                <div class="col-sm-6">
                <form class="login-form " method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <i class="icon-people icon-2x text-warning-400 border-warning-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
                                <h5 class="mb-0">Login to your account</h5>
                                <span class="d-block text-muted">Your credentials</span>
                            </div>

                                @if ($errors->any())
                                <div class="alert alert-danger alert-styled-left alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                                    <span class="font-weight-semibold">Oops!</span> {{ implode('<br>', $errors->all()) }}
                                </div>
                                @endif


                            <div class="form-group ">
                                <input type="text" class="form-control" name="identity" value="{{ old('identity') }}" placeholder="Login ID or Email">
                            </div>

                            <div class="form-group ">
                                <input required name="password" type="password" class="form-control" placeholder="{{ __('Password') }}">

                            </div>

                            <div class="form-group d-flex align-items-center">
                                <div class="form-check mb-0">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="remember" class="form-input-styled" {{ old('remember') ? 'checked' : '' }} data-fouc>
                                        Remember
                                    </label>
                                </div>

                                <a href="{{ route('password.request') }}" class="ml-auto">Forgot password?</a>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
                            </div>

                           {{-- <div class="form-group">
                                <a href="#" class="btn btn-light btn-block"><i class="icon-home"></i> Back to Home</a>
                            </div>--}}


                        </div>
                    </div>
                </form>
                </div>
                <div class="col-sm-6">
                    <style>
                        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);

                        #contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

                        #contact {
                            background:#F9F9F9;
                            padding:25px;
                            margin:50px 0;
                        }

                        #contact h3 {
                            color: #F96;
                            display: block;
                            font-size: 30px;
                            font-weight: 400;
                        }

                        #contact h4 {
                            margin:5px 0 15px;
                            display:block;
                            font-size:13px;
                        }

                        fieldset {
                            border: medium none !important;
                            margin: 0 0 10px;
                            min-width: 100%;
                            padding: 0;
                            width: 100%;
                        }

                        #contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
                            width:100%;
                            border:1px solid #CCC;
                            background:#FFF;
                            margin:0 0 5px;
                            padding:10px;
                        }

                        #contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
                            -webkit-transition:border-color 0.3s ease-in-out;
                            -moz-transition:border-color 0.3s ease-in-out;
                            transition:border-color 0.3s ease-in-out;
                            border:1px solid #AAA;
                        }

                        #contact textarea {
                            height:100px;
                            max-width:100%;
                            resize:none;
                        }

                        #contact button[type="submit"] {
                            cursor:pointer;
                            width:100%;
                            border:none;
                            background:#0CF;
                            color:#FFF;
                            margin:0 0 5px;
                            padding:10px;
                            font-size:15px;
                        }

                        #contact button[type="submit"]:hover {
                            background:#09C;
                            -webkit-transition:background 0.3s ease-in-out;
                            -moz-transition:background 0.3s ease-in-out;
                            transition:background-color 0.3s ease-in-out;
                        }

                        #contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

                        #contact input:focus, #contact textarea:focus {
                            outline:0;
                            border:1px solid #999;
                        }
                        ::-webkit-input-placeholder {
                            color:#888;
                        }
                        :-moz-placeholder {
                            color:#888;
                        }
                        ::-moz-placeholder {
                            color:#888;
                        }
                        :-ms-input-placeholder {
                            color:#888;
                        }

                    </style>

                    <div class="container">
                        <form id="contact" action="" method="post">
                            <h3>Quick Contact</h3>
                            <h4>Contact us today, and get reply with in 24 hours!</h4>
                            <fieldset>
                                <input placeholder="Your name" type="text" tabindex="1" required autofocus>
                            </fieldset>
                            <fieldset>
                                <input placeholder="Your Email Address" type="email" tabindex="2" required>
                            </fieldset>
                            <fieldset>
                                <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
                            </fieldset>
                            <fieldset>
                                <input placeholder="Your Web Site starts with http://" type="url" tabindex="4" required>
                            </fieldset>
                            <fieldset>
                                <textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
                            </fieldset>
                            <fieldset>
                                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                            </fieldset>
                        </form>


                    </div>

                </div>
            </div>


        </div>

    </div>
    @endsection
