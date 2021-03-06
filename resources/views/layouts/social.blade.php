<div class="content ">
<div class="social-wrapper">
            <div class="social " data-pages="social">
              <!-- START JUMBOTRON -->
              <div class="jumbotron" data-pages="parallax" data-social="cover">
                <div class="cover-photo">
                  <img alt="Cover photo" src="{{ asset('assets/img/social/cover.jpg') }}" />
                </div>
                <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
                  <div class="inner">
                    <div class="pull-bottom bottom-left m-b-40 sm-p-l-15">
                      <h5 class="text-white no-margin">welcome to pages social</h5>
                      <h1 class="text-white no-margin"><span class="semi-bold">social</span> cover</h1>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END JUMBOTRON -->
              <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
                <div class="feed">
                  <!-- START DAY -->
                  <div class="day" data-social="day">
                    <!-- START ITEM -->
                    <div class="card no-border bg-transparent full-width" data-social="item">
                      <!-- START CONTAINER FLUID -->
                      <div class="container-fluid p-t-30 p-b-30 ">
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="container-xs-height">
                              <div class="row-xs-height">
                                <div class="social-user-profile col-xs-height text-center col-top">
                                  <div class="thumbnail-wrapper d48 circular bordered b-white">
                                    <img alt="Avatar" width="55" height="55" data-src-retina="{{ asset('assets/img/profiles/avatar_small2x.jpg') }}" data-src="{{ asset('assets/img/profiles/avatar.jpg') }}" src="{{ asset('assets/img/profiles/avatar.jpg') }}">
                                  </div>
                                  <br>
                                  <i class="fa fa-check-circle text-success fs-16 m-t-10"></i>
                                </div>
                                <div class="col-xs-height p-l-20">
                                  <h3 class="no-margin p-b-5">{{ ucwords(Auth::user()->name) }}</h3>
                                  <p class="no-margin fs-16">small motivation and elevating caption from us
                                  </p>
                                  <p class="hint-text m-t-5 small">Address | CEO at Company Name
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <p class="no-margin fs-16">Hi My Name is (system admin), &amp; all we want is for your business to scale higher today. We've created some text captions to trill your customers, I hope you find them helpful and awesome. Remember <i><blockquote>we always remember.</blockquote></i></p>
                            <!-- <p class="hint-text m-t-5 small">I love reading people's about page especially those who are in the same industry as me.</p> -->
                          </div>
                          <div class="col-lg-4">
                            <p class="m-b-5 small">Do you have new contacts you'd like to add</p>
                            <button class="btn btn-primary btn-cons">Add Contact <i class="pg-contact_book"></i> </button>
                            <br>
                            <!-- <button class="btn btn-secondary btn-cons" >Broadcast</button> -->
                            <!--<p class="m-t-5 small">More friends</p> -->
                          </div>
                        </div>
                      </div>
                      <!-- END CONTAINER FLUID -->
                    </div>
                    <!-- END ITEM -->
                    
                    <!-- START ITEM -->
                    <div class="card social-card status col2" data-social="item">
                      <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                      </div>
                      <h5>David Nester updated his status
							<span class="hint-text">few seconds ago</span></h5>
                      <h2>Earned my first salary bonus for the best design of the year award.</h2>
                      <ul class="reactions">
                        <li><a href="#">5,345 <i class="fa fa-comment-o"></i></a>
                        </li>
                        <li><a href="#">23K <i class="fa fa-heart-o"></i></a>
                        </li>
                      </ul>
                    </div>
                    <!-- END ITEM -->
                    <!-- START ITEM -->
                    <div class="card social-card share  col1" data-social="item">
                      <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                      </div>
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" width="33" height="33" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg">
                        </div>
                        <h5>Shannon Williams</h5>
                        <h6>Shared a photo
								<span class="location semi-bold"><i
										class="fa fa-map-marker"></i> NYC, New York</span>
							</h6>
                      </div>
                      <div class="card-description">
                        <p>Inspired by : good design is obvious, great design is transparent</p>
                        <div class="via">via themeforest</div>
                      </div>
                      <div class="card-content">
                        <ul class="buttons ">
                          <li>
                            <a href="#"><i class="fa fa-expand"></i>
									</a>
                          </li>
                          <li>
                            <a href="#"><i class="fa fa-heart-o"></i>
									</a>
                          </li>
                        </ul>
                        <img alt="Social post" src="assets/img/social-post-image.png">
                      </div>
                      <div class="card-footer clearfix">
                        <div class="time">few seconds ago</div>
                        <ul class="reactions">
                          <li><a href="#">5,345 <i class="fa fa-comment-o"></i></a>
                          </li>
                          <li><a href="#">23K <i class="fa fa-heart-o"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- END ITEM -->
                    <!-- START ITEM -->
                    <div class="card social-card share  col1" data-social="item">
                      <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                      </div>
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" width="33" height="33" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg">
                        </div>
                        <h5>Jeff Curtis</h5>
                        <h6>Shared a Tweet
								<span class="location semi-bold"><i
										class="fa fa-map-marker"></i> SF, California</span>
							</h6>
                      </div>
                      <div class="card-description">
                        <p>What you think, you become. What you feel, you attract. What you imagine, you create - Buddha. <a href="#">#quote</a></p>
                        <div class="via">via Twitter</div>
                      </div>
                    </div>
                    <!-- END ITEM -->
                    <!-- START ITEM -->
                    <div class="card social-card share  col1" data-social="item">
                      <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                      </div>
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" width="33" height="33" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg">
                        </div>
                        <h5>Andy Young</h5>
                        <h6>Updated his status
								<span class="location semi-bold"><i class="icon-map"></i> NYC, New York</span>
							</h6>
                      </div>
                      <div class="card-description">
                        <p>What a lovely day! I think I should go and play outside.</p>
                      </div>
                    </div>
                    <!-- END ITEM -->
                    <!-- START ITEM -->
                    <div class="card social-card share share-other col1" data-social="item">
                      <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                      </div>
                      <div class="card-content">
                        <ul class="buttons ">
                          <li>
                            <a href="#"><i class="fa fa-expand"></i>
									</a>
                          </li>
                          <li>
                            <a href="#"><i class="fa fa-heart-o"></i>
									</a>
                          </li>
                        </ul>
                        <img alt="Quote" src="assets/img/social/quote.jpg">
                      </div>
                      <div class="card-description">
                        <p>Like if you agree</p>
                      </div>
                      <div class="card-footer clearfix">
                        <div class="time">few seconds ago</div>
                        <ul class="reactions">
                          <li><a href="#">5,345 <i class="fa fa-comment-o"></i></a>
                          </li>
                          <li><a href="#">23K <i class="fa fa-heart-o"></i></a>
                          </li>
                        </ul>
                      </div>
                      <div class="card-header clearfix last">
                        <div class="user-pic">
                          <img alt="Profile Image" width="33" height="33" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg">
                        </div>
                        <h5>Tracy Brooks</h5>
                        <h6>Shared a photo on your wall</h6>
                      </div>
                    </div>
                    <!-- END ITEM -->
                    <!-- START ITEM -->
                    <div class="card social-card share share-other col1" data-social="item">
                      <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                      </div>
                      <div class="card-content">
                        <ul class="buttons ">
                          <li>
                            <a href="#"><i class="fa fa-expand"></i>
									</a>
                          </li>
                          <li>
                            <a href="#"><i class="fa fa-heart-o"></i>
									</a>
                          </li>
                        </ul>
                        <img alt="Person photo" src="assets/img/social/person-1.jpg">
                      </div>
                      <div class="card-description">
                        <p><a href="#">#TBT</a> :D</p>
                      </div>
                      <div class="card-footer clearfix">
                        <div class="time">few seconds ago</div>
                        <ul class="reactions">
                          <li><a href="#">5,345 <i class="fa fa-comment-o"></i></a>
                          </li>
                          <li><a href="#">23K <i class="fa fa-heart-o"></i></a>
                          </li>
                        </ul>
                      </div>
                      <div class="card-header clearfix last">
                        <div class="user-pic">
                          <img alt="Avatar" width="33" height="33" data-src-retina="assets/img/profiles/avatar_small2x.jpg" data-src="assets/img/profiles/avatar.jpg" src="assets/img/profiles/avatar_small2x.jpg">
                        </div>
                        <h5>David Nester</h5>
                        <h6>Shared a link on your wall</h6>
                      </div>
                    </div>
                    <!-- END ITEM -->
                    <!-- START ITEM -->
                    <div class="card social-card share  col1" data-social="item">
                      <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                      </div>
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" width="33" height="33" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg">
                        </div>
                        <h5>Nathaniel Hamilton</h5>
                        <h6>Shared a Tweet
								<span class="location semi-bold"><i class="icon-map"></i>  NYC, New York</span>
							</h6>
                      </div>
                      <div class="card-description">
                        <p>Testing can show the presense of bugs, but not their absence.</p>
                        <div class="via">via Twitter</div>
                      </div>
                    </div>
                    <!-- END ITEM -->
                    <!-- START ITEM -->
                    <div class="card social-card share  col1" data-social="item">
                      <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                      </div>
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" width="33" height="33" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg">
                        </div>
                        <h5>Nathaniel Hamilton</h5>
                        <h6>Shared a Tweet
								<span class="location semi-bold"><i class="icon-map"></i> NYC, New York</span>
							</h6>
                      </div>
                      <div class="card-description">
                        <p>There is nothing new under the sun, but there are lots of old things we don't know yet.
                        </p>
                        <div class="via">via Twitter</div>
                      </div>
                    </div>
                    <!-- END ITEM -->
                    <!-- START ITEM -->
                    <div class="card social-card share  col1" data-social="item">
                      <div class="card-header ">
                        <h5 class="text-complete pull-left fs-12">News <i
									class="fa fa-circle text-complete fs-11"></i></h5>
                        <div class="pull-right small hint-text">
                          5,345 <i class="fa fa-comment-o"></i>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="card-description">
                        <h3>Ebola outbreak: Clinical drug trials to start next month as death toll mounts</h3>
                      </div>
                      <div class="card-footer clearfix">
                        <div class="pull-left">via <span class="text-complete">CNN</span>
                        </div>
                        <div class="pull-right hint-text">
                          Apr 23
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                    <!-- END ITEM -->
                    <!-- START ITEM -->
                    <div class="card social-card share  col1" data-social="item">
                      <div class="card-header clearfix">
                        <h5 class="text-success pull-left fs-12">Stock Market <i
									class="fa fa-circle text-success fs-11"></i></h5>
                        <div class="pull-right small hint-text">
                          5,345 <i class="fa fa-comment-o"></i>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="card-description">
                        <h5 class='hint-text no-margin'>Apple Inc.</h5>
                        <h5 class="small hint-text no-margin">NASDAQ: AAPL - Nov 13 8:37 AM ET</h5>
                        <h3>111.25 <span class="text-success"><i class="fa fa-sort-up small text-success"></i> 0.15 (0.13%)</span>
							</h3>
                      </div>
                      <div class="card-footer clearfix">
                        <div class="pull-left">by <span class="text-success">John Smith</span>
                        </div>
                        <div class="pull-right hint-text">
                          Apr 23
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                    <!-- END ITEM -->
                  </div>
                  <!-- END DAY -->
                </div>
                <!-- END FEED -->
              </div>
              <!-- END CONTAINER FLUID -->
            </div>
            <!-- /container -->
          </div>
          </div>