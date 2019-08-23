@extends('english.layouts.master')

@section('page_title')
Profile Page | {{Auth::user()->name}}
@endsection

@section('content')

<!-- Top Header Profile -->
@include('english.profile.partials.top_header_profile')
<!-- Top Header Profile -->

<div class="container">
	<div class="row">

		<!-- Main Content -->

		<div class="col  col-lg-8 order-lg-1  order-md-1 order-sm-2 order-xs-2 col-md-8 col-sm-12 col-12">

				<div class="ui-block">

						<!-- News Feed Form  -->

						<div class="news-feed-form">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link active inline-items" data-toggle="tab" href="#home-1" role="tab" aria-expanded="true">

										<svg class="olymp-status-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-status-icon"></use></svg>

										<span>Add Status</span>
									</a>
								</li>



							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane active" id="home-1" role="tabpanel" aria-expanded="true">
									<form>
										<div class="author-thumb">
											<img src="{{asset('assets/')}}/img/author-page.jpg" alt="author">
										</div>
										<div class="form-group with-icon label-floating is-empty">
											<label class="control-label">Share what you are thinking here...</label>
											<textarea class="form-control" placeholder=""></textarea>
										</div>
										<div class="add-options-message">
											<a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD PHOTOS">
												<svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-profile-photo"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>
											</a>


											<button class="btn btn-primary btn-md-2">Post Status</button>


										</div>

									</form>
								</div>


							</div>
						</div>

				<!-- ... end News Feed Form  -->
				</div>


			<div id="newsfeed-items-grid">

					<div class="ui-block">

						<article class="hentry post video">

							<div class="post__author author vcard inline-items">
								<img src="{{asset('assets/')}}/img/avatar7-sm.jpg" alt="author">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="#">Marina Valentine</a> shared a <a href="#">link</a>
									<div class="post__date">
										<time class="published" datetime="2004-07-24T18:18">
											March 4 at 2:05pm
										</time>
									</div>
								</div>

								<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
									<ul class="more-dropdown">
										<li>
											<a href="#">Edit Post</a>
										</li>
										<li>
											<a href="#">Delete Post</a>
										</li>
									</ul>
								</div>

							</div>

							<p>Hey <a href="#">Cindi</a>, you should really check out this new song by Iron Maid. The next time they come to the city we should totally go!</p>

							<div class="post-video">
								<div class="video-thumb">
									<img src="{{asset('assets/')}}/img/video-youtube1.jpg" alt="photo">
									<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
										<svg class="olymp-play-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-play-icon"></use></svg>
									</a>
								</div>

								<div class="video-content">
									<a href="#" class="h4 title">Iron Maid - ChillGroves</a>
									<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempor incididunt
										ut labore et dolore magna aliqua...
									</p>
									<a href="#" class="link-site">YOUTUBE.COM</a>
								</div>
							</div>

							<div class="post-additional-info inline-items">

								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-heart-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
									<span>18</span>
								</a>

								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="{{asset('assets/')}}/img/friend-harmonic9.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="{{asset('assets/')}}/img/friend-harmonic10.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="{{asset('assets/')}}/img/friend-harmonic7.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="{{asset('assets/')}}/img/friend-harmonic8.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="{{asset('assets/')}}/img/friend-harmonic11.jpg" alt="friend">
										</a>
									</li>
								</ul>

								<div class="names-people-likes">
									<a href="#">Jenny</a>, <a href="#">Robert</a> and
									<br>18 more liked this
								</div>

								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items comments-show">
										<svg class="olymp-speech-balloon-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>

										<span>0</span>
									</a>

								</div>


							</div>



						</article>


						<ul class="comments-list d-none">
								<li class="comment-item">
									<div class="post__author author vcard inline-items">
										<img src="{{asset('assets/')}}/img/author-page.jpg" alt="author">

										<div class="author-date">
											<a class="h6 post__author-name fn" href="#">James Spiegel</a>
											<div class="post__date">
												<time class="published" datetime="2004-07-24T18:18">
													38 mins ago
												</time>
											</div>
										</div>

										<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

									</div>

									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
										<span>3</span>
									</a>
									<a href="#" class="reply">Reply</a>
								</li>
								<li class="comment-item hiden d-none ">
									<div class="post__author author vcard inline-items">
										<img src="{{asset('assets/')}}/img/avatar1-sm.jpg" alt="author">

										<div class="author-date">
											<a class="h6 post__author-name fn" href="#">Mathilda Brinker</a>
											<div class="post__date">
												<time class="published" datetime="2004-07-24T18:18">
													1 hour ago
												</time>
											</div>
										</div>

										<a href="#" class="more "><svg class="olymp-three-dots-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

									</div>

									<p>Ratione voluptatem sequi en lod nesciunt. Neque porro quisquam est, quinder dolorem ipsum
										quia dolor sit amet, consectetur adipisci velit en lorem ipsum duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
									</p>

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
										<span>8</span>
									</a>
									<a href="#" class="reply">Reply</a>
								</li>
							</ul>

							<!-- ... end Comments -->

							<a  class="more-comments d-none">View more comments </a>


							<!-- Comment Form  -->

							<form class="comment-form inline-items d-none">

								<div class="post__author author vcard inline-items">
									<img src="{{asset('assets/')}}/img/author-page.jpg" alt="author">

									<div class="form-group with-icon-right ">
										<textarea class="form-control" placeholder=""></textarea>
										<div class="add-options-message">
											<a href="#" class="options-message" data-toggle="modal" data-target="#update-profile-photo">
												<svg class="olymp-camera-icon">
													<use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-camera-icon"></use>
												</svg>
											</a>
										</div>
									</div>
								</div>

								<button class="btn btn-md-2 btn-primary">Post Comment</button>

								<button class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>

							</form>
					</div>

					<div class="ui-block">


						<article class="hentry post">

							<div class="post__author author vcard inline-items">
								<img src="{{asset('assets/')}}/img/avatar10-sm.jpg" alt="author">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="#">Elaine Dreyfuss</a>
									<div class="post__date">
										<time class="published" datetime="2004-07-24T18:18">
											9 hours ago
										</time>
									</div>
								</div>

								<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
									<ul class="more-dropdown">
										<li>
											<a href="#">Edit Post</a>
										</li>
										<li>
											<a href="#">Delete Post</a>
										</li>
										<li>
											<a href="#">Turn Off Notifications</a>
										</li>
										<li>
											<a href="#">Select as Featured</a>
										</li>
									</ul>
								</div>

							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut
								labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.
							</p>

							<div class="post-additional-info inline-items">

								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-heart-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
									<span>24</span>
								</a>

								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="{{asset('assets/')}}/img/friend-harmonic7.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="{{asset('assets/')}}/img/friend-harmonic8.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="{{asset('assets/')}}/img/friend-harmonic9.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="{{asset('assets/')}}/img/friend-harmonic10.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="{{asset('assets/')}}/img/friend-harmonic11.jpg" alt="friend">
										</a>
									</li>
								</ul>

								<div class="names-people-likes">
									<a href="#">You</a>, <a href="#">Elaine</a> and
									<br>22 more liked this
								</div>


								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items comments-show">
										<svg class="olymp-speech-balloon-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
										<span>17</span>
									</a>


								</div>


							</div>



						</article>

						<!-- Comments -->
						<ul class="comments-list d-none">
								<li class="comment-item">
									<div class="post__author author vcard inline-items">
										<img src="{{asset('assets/')}}/img/author-page.jpg" alt="author">

										<div class="author-date">
											<a class="h6 post__author-name fn" href="#">James Spiegel</a>
											<div class="post__date">
												<time class="published" datetime="2004-07-24T18:18">
													38 mins ago
												</time>
											</div>
										</div>

										<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

									</div>

									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
										<span>3</span>
									</a>
									<a href="#" class="reply">Reply</a>
								</li>
								<li class="comment-item hiden d-none ">
									<div class="post__author author vcard inline-items">
										<img src="{{asset('assets/')}}/img/avatar1-sm.jpg" alt="author">

										<div class="author-date">
											<a class="h6 post__author-name fn" href="#">Mathilda Brinker</a>
											<div class="post__date">
												<time class="published" datetime="2004-07-24T18:18">
													1 hour ago
												</time>
											</div>
										</div>

										<a href="#" class="more "><svg class="olymp-three-dots-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

									</div>

									<p>Ratione voluptatem sequi en lod nesciunt. Neque porro quisquam est, quinder dolorem ipsum
										quia dolor sit amet, consectetur adipisci velit en lorem ipsum duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
									</p>

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
										<span>8</span>
									</a>
									<a href="#" class="reply">Reply</a>
								</li>
							</ul>

						<!-- ... end Comments -->

						<a  class=" more-comments d-none">View more comments <span>+</span></a>


						<!-- Comment Form  -->

						<form class="comment-form inline-items d-none">

							<div class="post__author author vcard inline-items">
								<img src="{{asset('assets/')}}/img/author-page.jpg" alt="author">

								<div class="form-group with-icon-right ">
									<textarea class="form-control" placeholder=""></textarea>
									<div class="add-options-message">
										<a href="#" class="options-message" data-toggle="modal" data-target="#update-profile-photo">
											<svg class="olymp-camera-icon">
												<use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-camera-icon"></use>
											</svg>
										</a>
									</div>
								</div>
							</div>

							<button class="btn btn-md-2 btn-primary">Post Comment</button>

							<button class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>

						</form>

						<!-- ... end Comment Form  -->
					</div>

					<div class="ui-block">

						<article class="hentry post has-post-thumbnail">

							<div class="post__author author vcard inline-items">
								<img src="{{asset('assets/')}}/img/avatar5-sm.jpg" alt="author">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="#">Green Goo Rock</a>
									<div class="post__date">
										<time class="published" datetime="2004-07-24T18:18">
											March 8 at 6:42pm
										</time>
									</div>
								</div>

								<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
									<ul class="more-dropdown">
										<li>
											<a href="#">Edit Post</a>
										</li>
										<li>
											<a href="#">Delete Post</a>
										</li>
										<li>
											<a href="#">Turn Off Notifications</a>
										</li>
										<li>
											<a href="#">Select as Featured</a>
										</li>
									</ul>
								</div>

							</div>

							<p>Hey guys! We are gona be playing this Saturday of <a href="#">The Marina Bar</a> for their new Mystic Deer Party.
								If you wanna hang out and have a really good time, come and join us. We’l be waiting for you!
							</p>

							<div class="post-thumb">
								<img src="{{asset('assets/')}}/img/post__thumb1.jpg" alt="photo">
							</div>

							<div class="post-additional-info inline-items">

								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-heart-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
									<span>49</span>
								</a>

								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="{{asset('assets/')}}/img/friend-harmonic9.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="{{asset('assets/')}}/img/friend-harmonic10.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="{{asset('assets/')}}/img/friend-harmonic7.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="{{asset('assets/')}}/img/friend-harmonic8.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="{{asset('assets/')}}/img/friend-harmonic11.jpg" alt="friend">
										</a>
									</li>
								</ul>

								<div class="names-people-likes">
									<a >Jimmy</a>, <a href="#">Andrea</a> and
									<br>47 more liked this
								</div>


								<div class="comments-shared">
										<a href="#" class="post-add-icon inline-items comments-show">
											<svg class="olymp-speech-balloon-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
											<span>264</span>
										</a>


									</div>



							</div>


						</article>
								<!-- Comments -->

								<ul class="comments-list d-none">
										<li class="comment-item">
											<div class="post__author author vcard inline-items">
												<img src="{{asset('assets/')}}/img/author-page.jpg" alt="author">

												<div class="author-date">
													<a class="h6 post__author-name fn" href="#">James Spiegel</a>
													<div class="post__date">
														<time class="published" datetime="2004-07-24T18:18">
															38 mins ago
														</time>
													</div>
												</div>

												<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

											</div>

											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>

											<a href="#" class="post-add-icon inline-items">
												<svg class="olymp-heart-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
												<span>3</span>
											</a>
											<a href="#" class="reply">Reply</a>
										</li>
										<li class="comment-item hiden d-none ">
											<div class="post__author author vcard inline-items">
												<img src="{{asset('assets/')}}/img/avatar1-sm.jpg" alt="author">

												<div class="author-date">
													<a class="h6 post__author-name fn" href="#">Mathilda Brinker</a>
													<div class="post__date">
														<time class="published" datetime="2004-07-24T18:18">
															1 hour ago
														</time>
													</div>
												</div>

												<a href="#" class="more "><svg class="olymp-three-dots-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

											</div>

											<p>Ratione voluptatem sequi en lod nesciunt. Neque porro quisquam est, quinder dolorem ipsum
												quia dolor sit amet, consectetur adipisci velit en lorem ipsum duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
											</p>

											<a href="#" class="post-add-icon inline-items">
												<svg class="olymp-heart-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
												<span>8</span>
											</a>
											<a href="#" class="reply">Reply</a>
										</li>
									</ul>

									<!-- ... end Comments -->

									<a  class="more-comments d-none">View more comments <span>+</span></a>


									<!-- Comment Form  -->

									<form class="comment-form inline-items d-none">

										<div class="post__author author vcard inline-items">
											<img src="{{asset('assets/')}}/img/author-page.jpg" alt="author">

											<div class="form-group with-icon-right ">
												<textarea class="form-control" placeholder=""></textarea>
												<div class="add-options-message">
													<a href="#" class="options-message" data-toggle="modal" data-target="#update-profile-photo">
														<svg class="olymp-camera-icon">
															<use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-camera-icon"></use>
														</svg>
													</a>
												</div>
											</div>
										</div>

										<button class="btn btn-md-2 btn-primary">Post Comment</button>

										<button class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>

									</form>

									<!-- ... end Comment Form  -->
					</div>



				</div>

			<a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html" data-container="newsfeed-items-grid">
				<svg class="olymp-three-dots-icon">
					<use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
				</svg>
			</a>
		</div>

		<!-- ... end Main Content -->


		<!-- Left Sidebar -->

		<div class="col  col-lg-4 order-lg-2  order-md-2 order-sm-1 col-md-4 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Profile Intro</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Personal-Info -->

					<ul class="widget w-personal-info item-block">
						<li>
							<span class="title">About Me:</span>
                            <span class="text">{{Auth::user()->little_description}}</span>
						</li>
						<!-- <li>
							<span class="title">Favourite TV Shows:</span>
							<span class="text">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy.</span>
						</li>
						<li>
							<span class="title">Favourite Music Bands / Artists:</span>
							<span class="text">Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a Revenge.</span>
						</li> -->
					</ul>

					<!-- .. end W-Personal-Info -->
					<!-- W-Socials -->

					<div class="widget w-socials">
						<h6 class="title">Other Social Networks:</h6>
						<a href="https://{{Auth::user()->facebook}}" class="social-item bg-facebook">
							<i class="fab fa-facebook-f" aria-hidden="true"></i>
							Facebook
						</a>
						<a href="https://{{Auth::user()->twitter}}" class="social-item bg-twitter">
							<i class="fab fa-twitter-f" aria-hidden="true"></i>
							Twitter
						</a>
						<a href="https://{{Auth::user()->linkedin}}" class="social-item bg-linked">
							<i class="fab fa-linkedin-in" aria-hidden="true"></i>
							LinkedIn
						</a>

					</div>


					<!-- ... end W-Socials -->
				</div>
			</div>

			<div class="ui-block d-md-block d-sm-none">
				<div class="ui-block-title">
					<h6 class="title">James’s Badges</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Badges -->

					<ul class="widget w-badges">
						<li>
							<a href="24-CommunityBadges.html">
								<img src="{{asset('assets/')}}/img/badge1.png" alt="author">
								<div class="label-avatar bg-primary">2</div>
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.html">
								<img src="{{asset('assets/')}}/img/badge4.png" alt="author">
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.html">
								<img src="{{asset('assets/')}}/img/badge3.png" alt="author">
								<div class="label-avatar bg-blue">4</div>
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.html">
								<img src="{{asset('assets/')}}/img/badge6.png" alt="author">
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.html">
								<img src="{{asset('assets/')}}/img/badge11.png" alt="author">
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.html">
								<img src="{{asset('assets/')}}/img/badge8.png" alt="author">
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.html">
								<img src="{{asset('assets/')}}/img/badge10.png" alt="author">
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.html">
								<img src="{{asset('assets/')}}/img/badge13.png" alt="author">
								<div class="label-avatar bg-breez">2</div>
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.html">
								<img src="{{asset('assets/')}}/img/badge7.png" alt="author">
							</a>
						</li>
						<li>
							<a href="24-CommunityBadges.html">
								<img src="{{asset('assets/')}}/img/badge12.png" alt="author">
							</a>
						</li>
					</ul>

					<!--.. end W-Badges -->
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Friends (86)</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Faved-Page -->

					<ul class="widget w-faved-page js-zoom-gallery">
						<li>
							<a href="#">
								<img src="{{asset('assets/')}}/img/avatar38-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{asset('assets/')}}/img/avatar24-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{asset('assets/')}}/img/avatar36-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{asset('assets/')}}/img/avatar35-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{asset('assets/')}}/img/avatar34-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{asset('assets/')}}/img/avatar33-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{asset('assets/')}}/img/avatar32-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{asset('assets/')}}/img/avatar31-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{asset('assets/')}}/img/avatar30-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{asset('assets/')}}/img/avatar29-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{asset('assets/')}}/img/avatar28-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{asset('assets/')}}/img/avatar27-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{asset('assets/')}}/img/avatar26-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{asset('assets/')}}/img/avatar25-sm.jpg" alt="user">
							</a>
						</li>
						<li class="all-users">
							<a href="#">+74</a>
						</li>
					</ul>

					<!-- .. end W-Faved-Page -->
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Courses</h6>
				</div>

				<!-- W-Friend-Pages-Added -->

				<ul class="widget w-friend-pages-added notification-list friend-requests">
					<li class="inline-items">
						<div class="author-thumb">
							<img src="{{asset('assets/')}}/img/avatar41-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">The Marina Bar</a>
							<span class="chat-message-item">Restaurant / Bar</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
							<a href="#">

								<svg class="olymp-play-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-play-icon"></use></svg>
							</a>
						</span>

					</li>

					<li class="inline-items">
						<div class="author-thumb">
							<img src="{{asset('assets/')}}/img/avatar42-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Tapronus Rock</a>
							<span class="chat-message-item">Rock Band</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
								<a href="#">

										<svg class="olymp-play-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-play-icon"></use></svg>
									</a>
						</span>

					</li>

					<li class="inline-items">
						<div class="author-thumb">
							<img src="{{asset('assets/')}}/img/avatar43-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Pixel Digital Design</a>
							<span class="chat-message-item">Company</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
								<a href="#">

										<svg class="olymp-play-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-play-icon"></use></svg>
									</a>
						</span>
					</li>


				</ul>

				<!-- .. end W-Friend-Pages-Added -->
			</div>


		</div>

		<!-- ... end Left Sidebar -->




	</div>
</div>


@endsection
