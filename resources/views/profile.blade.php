@extends('layouts.app')
@section('content')
	<!--START header-->
    @include('components.headerComponent')

    <!--START profile-bg-->
    <section class="profile-bg">
        <img src="images/bg.jpg" alt="profile background">
        <button>
            <label>
                <i class="fas fa-camera"></i>
                <input type="file" name="" id="">
            </label>
        </button>
    </section><!--END profile-bg-->

    <!--START profile-page-->
    <section class="profile-page">
        <div class="container">
            <!--START profile box-->
            <div class="pnt-wrapper">
                <div class="profile-name-tabs clearfix">
                    <!--START img-->
                    <div class="img-wrapper">
                        <div class="img">
                            <img src="images/p2.jpg" alt="">
                        </div>
                        <button>
                            <label>
                                <i class="fas fa-camera"></i>
                                <input type="file" name="" id="">
                            </label>
                        </button>
                    </div><!--END img-->
    
                    <!--START name tabs-->
                    <div class="name-tabs">
                        <div class="name">
                            <h2>Johan Smith</h2>
                            <span><i class="fas fa-check-circle"></i> Blue Members</span>
                        </div>
    
                        <div class="tabs-header">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#About">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#Post">Post</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#Points">Points</a>
                                </li>
                            </ul>
                        </div>
                    </div><!--END name tabs-->
    
                </div>
            </div><!--END profile box-->

            <!--START profile data-->
            <div class="profile-data">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="About" class="tab-pane active">
                        <div class="tab-body">
                            <div class="about">
                                <div class="row">
                                    <!--left-->
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="about-inner">

                                            <div class="two-input form-group clearfix">
                                                <div class="input">
                                                    <label>First Name*</label>
                                                    <input type="text" value="Johan" placeholder="First Name" name="" id="">
                                                </div>
                                                <div class="input">
                                                    <label>Last Name*</label>
                                                    <input type="text" value="Smith" placeholder="Last Name" name="" id="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Profession</label>
                                                <input type="text" value="Student" placeholder="Profession" name="" id="">
                                            </div>
                                            <div class="form-group">
                                                <label>Email*</label>
                                                <input type="email" value="Johansmith@gmail.com" placeholder="Email" name="" id="">
                                            </div>
                                            <div class="two-input form-group clearfix">
                                                <div class="input">
                                                    <label>City*</label>
                                                    <input type="text" value="Indore" placeholder="City" name="" id="">
                                                </div>
                                                <div class="input">
                                                    <label>Country*</label>
                                                    <input type="text" value="India" placeholder="Country" name="" id="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Date of Birth*</label>
                                                <input type="date" value="26-Aug-20" placeholder="Date of Birth" name="" id="">
                                            </div>

                                        </div>
                                    </div><!--END left-->

                                    <!--right-->
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="about-inner">

                                            <div class="form-group">
                                                <label>Bio*</label>
                                                <textarea name="" id="" rows="10" placeholder="Type here...">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</textarea>
                                            </div>

                                            <div class="button">
                                                <button>Edit Details</button>
                                            </div>
                                        </div>
                                    </div><!--END right-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="Post" class="tab-pane fade">
                        <div class="post-section">
                            <div class="body">
                                <div class="row">
                                    <!--STARt single-post-->
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-post">
                                            <button class="delete-btn"><i class="fas fa-trash"></i></button>
                                            <a href="post_details.html">
                                                <div class="img-wrapper">
                                                    <div class="img">
                                                        <img src="images/04.jpg" alt="post image">
                                                        <label class="tag">Music</label>
                                                    </div>
                                                    <div class="img-txt clearfix">
                                                        <div class="inner-img">
                                                            <img src="images/p1.jpg" alt="Profile Image">
                                                        </div>
                                                        <div class="inner-txt">
                                                            <h2>Can Williamson</h2>
                                                            <span>20-Aug-20</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="txt">
                                                    <h2>How to write  amazing blog post in 5 step</h2>
                                                    <p>Reference siteout Lorem Ipsum, giving information on its origins</p>
            
                                                    <div class="like-view-share clearfix">
                                                        <div class="lvs">
                                                            <button class="like">
                                                                <label>
                                                                    <input type="checkbox" checked="" name="" id="">
                                                                    <span><i class="fas fa-thumbs-up"></i> 20</span>
                                                                </label>
                                                            </button>
                                                        </div>
                                                        <div class="lvs">
                                                            <button class="views"><i class="fas fa-eye"></i> 500</button>
                                                        </div>
                                                        <div class="lvs">
                                                            <button class="share"><i class="fas fa-share-alt"></i> 20</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div><!--END single-post-->
        
                                    <!--STARt single-post-->
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-post">
                                            <button class="delete-btn"><i class="fas fa-trash"></i></button>
                                            <a href="post_details.html">
                                                <div class="img-wrapper">
                                                    <div class="img">
                                                        <img src="images/05.jpg" alt="post image">
                                                        <label class="tag">Artical</label>
                                                    </div>
                                                    <div class="img-txt clearfix">
                                                        <div class="inner-img">
                                                            <img src="images/p1.jpg" alt="Profile Image">
                                                        </div>
                                                        <div class="inner-txt">
                                                            <h2>Can Williamson</h2>
                                                            <span>20-Aug-20</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="txt">
                                                    <h2>How to write  amazing blog post in 5 step</h2>
                                                    <p>Reference siteout Lorem Ipsum, giving information on its origins</p>
            
                                                    <div class="like-view-share clearfix">
                                                        <div class="lvs">
                                                            <button class="like">
                                                                <label>
                                                                    <input type="checkbox" checked="" name="" id="">
                                                                    <span><i class="fas fa-thumbs-up"></i> 20</span>
                                                                </label>
                                                            </button>
                                                        </div>
                                                        <div class="lvs">
                                                            <button class="views"><i class="fas fa-eye"></i> 500</button>
                                                        </div>
                                                        <div class="lvs">
                                                            <button class="share"><i class="fas fa-share-alt"></i> 20</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div><!--END single-post-->
        
                                    <!--STARt single-post-->
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-post">
                                            <button class="delete-btn"><i class="fas fa-trash"></i></button>
                                            <a href="post_details.html">
                                                <div class="img-wrapper">
                                                    <div class="img">
                                                        <img src="images/06.jpg" alt="post image">
                                                        <label class="tag">Music</label>
                                                    </div>
                                                    <div class="img-txt clearfix">
                                                        <div class="inner-img">
                                                            <img src="images/p1.jpg" alt="Profile Image">
                                                        </div>
                                                        <div class="inner-txt">
                                                            <h2>Can Williamson</h2>
                                                            <span>20-Aug-20</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="txt">
                                                    <h2>How to write  amazing blog post in 5 step</h2>
                                                    <p>Reference siteout Lorem Ipsum, giving information on its origins</p>
            
                                                    <div class="like-view-share clearfix">
                                                        <div class="lvs">
                                                            <button class="like">
                                                                <label>
                                                                    <input type="checkbox" checked="" name="" id="">
                                                                    <span><i class="fas fa-thumbs-up"></i> 20</span>
                                                                </label>
                                                            </button>
                                                        </div>
                                                        <div class="lvs">
                                                            <button class="views"><i class="fas fa-eye"></i> 500</button>
                                                        </div>
                                                        <div class="lvs">
                                                            <button class="share"><i class="fas fa-share-alt"></i> 20</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div><!--END single-post-->
        
                                    <!--STARt single-post-->
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-post">
                                            <button class="delete-btn"><i class="fas fa-trash"></i></button>
                                            <a href="post_details.html">
                                                <div class="img-wrapper">
                                                    <div class="img">
                                                        <img src="images/07.jpg" alt="post image">
                                                        <label class="tag">Artical</label>
                                                    </div>
                                                    <div class="img-txt clearfix">
                                                        <div class="inner-img">
                                                            <img src="images/p1.jpg" alt="Profile Image">
                                                        </div>
                                                        <div class="inner-txt">
                                                            <h2>Can Williamson</h2>
                                                            <span>20-Aug-20</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="txt">
                                                    <h2>How to write  amazing blog post in 5 step</h2>
                                                    <p>Reference siteout Lorem Ipsum, giving information on its origins</p>
            
                                                    <div class="like-view-share clearfix">
                                                        <div class="lvs">
                                                            <button class="like">
                                                                <label>
                                                                    <input type="checkbox" checked="" name="" id="">
                                                                    <span><i class="fas fa-thumbs-up"></i> 20</span>
                                                                </label>
                                                            </button>
                                                        </div>
                                                        <div class="lvs">
                                                            <button class="views"><i class="fas fa-eye"></i> 500</button>
                                                        </div>
                                                        <div class="lvs">
                                                            <button class="share"><i class="fas fa-share-alt"></i> 20</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div><!--END single-post-->
        
                                    <!--STARt single-post-->
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-post">
                                            <button class="delete-btn"><i class="fas fa-trash"></i></button>
                                            <a href="post_details.html">
                                                <div class="img-wrapper">
                                                    <div class="img">
                                                        <img src="images/08.jpg" alt="post image">
                                                        <label class="tag">Music</label>
                                                    </div>
                                                    <div class="img-txt clearfix">
                                                        <div class="inner-img">
                                                            <img src="images/p1.jpg" alt="Profile Image">
                                                        </div>
                                                        <div class="inner-txt">
                                                            <h2>Can Williamson</h2>
                                                            <span>20-Aug-20</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="txt">
                                                    <h2>How to write  amazing blog post in 5 step</h2>
                                                    <p>Reference siteout Lorem Ipsum, giving information on its origins</p>
            
                                                    <div class="like-view-share clearfix">
                                                        <div class="lvs">
                                                            <button class="like">
                                                                <label>
                                                                    <input type="checkbox" checked="" name="" id="">
                                                                    <span><i class="fas fa-thumbs-up"></i> 20</span>
                                                                </label>
                                                            </button>
                                                        </div>
                                                        <div class="lvs">
                                                            <button class="views"><i class="fas fa-eye"></i> 500</button>
                                                        </div>
                                                        <div class="lvs">
                                                            <button class="share"><i class="fas fa-share-alt"></i> 20</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div><!--END single-post-->
                                    
                                    <!--STARt single-post-->
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="single-post">
                                            <button class="delete-btn"><i class="fas fa-trash"></i></button>
                                            <a href="post_details.html">
                                                <div class="img-wrapper">
                                                    <div class="img">
                                                        <img src="images/09.jpg" alt="post image">
                                                        <label class="tag">Dance</label>
                                                    </div>
                                                    <div class="img-txt clearfix">
                                                        <div class="inner-img">
                                                            <img src="images/p1.jpg" alt="Profile Image">
                                                        </div>
                                                        <div class="inner-txt">
                                                            <h2>Can Williamson</h2>
                                                            <span>20-Aug-20</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="txt">
                                                    <h2>How to write  amazing blog post in 5 step</h2>
                                                    <p>Reference siteout Lorem Ipsum, giving information on its origins</p>
            
                                                    <div class="like-view-share clearfix">
                                                        <div class="lvs">
                                                            <button class="like">
                                                                <label>
                                                                    <input type="checkbox" checked="" name="" id="">
                                                                    <span><i class="fas fa-thumbs-up"></i> 20</span>
                                                                </label>
                                                            </button>
                                                        </div>
                                                        <div class="lvs">
                                                            <button class="views"><i class="fas fa-eye"></i> 500</button>
                                                        </div>
                                                        <div class="lvs">
                                                            <button class="share"><i class="fas fa-share-alt"></i> 20</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div><!--END single-post-->
                                </div>
                            </div>

                            <div class="load-more-post">
                                <a href="javascript:void(0);"><img src="images/loading.png" alt="loading"> Loading</a>
                            </div>

                        </div>
                    </div>

                    <div id="Points" class="tab-pane fade">
                        <div class="tab-body">
                            <div class="points">
                                <div class="row">
                                    <!--STARt left-->
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="left">
                                            <h2 class="heading">Insights</h2>
                                            <div class="total-data">
                                                <ul>
                                                    <li class="clearfix">
                                                        <h2>Posts</h2>
                                                        <label>50</label>
                                                    </li>
                                                    <li class="clearfix">
                                                        <h2>Views</h2>
                                                        <label>450</label>
                                                    </li>
                                                    <li class="clearfix">
                                                        <h2>Likes</h2>
                                                        <label>150</label>
                                                    </li>
                                                    <li class="clearfix">
                                                        <h2>Shares</h2>
                                                        <label>280</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!--END left-->

                                    <!--STARt left-->
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="right">
                                            <h2 class="heading">Levels</h2>
                                            <div class="Levels">
                                                <h2><i class="fas fa-check-circle"></i> Blue Members</h2>
                                                <ul>
                                                    <li>50 Posts</li>
                                                    <li>5,000 total views</li>
                                                    <li>1,000 total likes</li>
                                                    <li>100 total shares</li>
                                                </ul>
                                            </div>
                                            <div class="Levels">
                                                <h2><i class="fas fa-check-circle"></i> Blue Members</h2>
                                                <ul>
                                                    <li>50 Posts</li>
                                                    <li>5,000 total views</li>
                                                    <li>1,000 total likes</li>
                                                    <li>100 total shares</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!--END left-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--END profile data-->
            
        </div>
    </section><!--END profile-page-->
@endsection
@push('css')
@endpush
@push('js')
@endpush
