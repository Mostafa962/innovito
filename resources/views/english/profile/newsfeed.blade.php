@extends('english.layouts.master')

@section('page_title')
NewsFeed
@endsection

@section('content')
<div class="container">
	<div class="row">

		<!-- Main Content -->

		<main class="col col-lg-8 order-lg-1  col-md-12 col-sm-12  order-md-2 order-sm-2 order-xm-2 col-12">

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
										<svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>
									</a>


									<button class="btn btn-primary btn-md-2">Post Status</button>


								</div>

							</form>
						</div>


					</div>
				</div>

				<!-- ... end News Feed Form  -->			</div>

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
										<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
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
										<a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo">
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
										<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
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
									<a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo">
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
												<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
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
												<a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo">
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

			<a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html" data-container="newsfeed-items-grid"><svg class="olymp-three-dots-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

		</main>

		<!-- ... end Main Content -->


		<!-- Left Sidebar -->




		<!-- Right Sidebar -->

		<aside class="col col-lg-4 order-lg-2  col-sm-12 order-sm-1 order-xs-1 order-md-1">

			<div class="ui-block">
					<div class="w-calendar">
							<div class="calendar">
								<header>
									<h6 class="month">May</h6>
								</header>
								<table>
									<thead>
									<tr><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td><td>San</td></tr>
									</thead>
									<tbody>
									<tr>
										<td data-month="12" data-day="1">1</td>
										<td data-month="12" data-day="2">2</td>
										<td data-month="12" data-day="3">3</td>
										<td data-month="12" data-day="4">4</td>
										<td data-month="12" data-day="5">5</td>
										<td data-month="12" data-day="6">6</td>
										<td data-month="12" data-day="7">7</td>
									</tr>
									<tr>
										<td data-month="12" data-day="8">8</td>
										<td data-month="12" data-day="9">9</td>
										<td data-month="12" data-day="10">10</td>
										<td data-month="12" data-day="11">11</td>
										<td data-month="12" data-day="12">12</td>
										<td data-month="12" data-day="13">13</td>
										<td data-month="12" data-day="14">14</td>
									</tr>
									<tr>
										<td data-month="12" data-day="15">15</td>
										<td data-month="12" data-day="16">16</td>
										<td data-month="12" data-day="17">17</td>
										<td data-month="12" data-day="18">18</td>
										<td data-month="12" data-day="19">19</td>
										<td data-month="12" data-day="20">20</td>
										<td data-month="12" data-day="21">21</td>
									</tr>
									<tr>
										<td data-month="12" data-day="22">22</td>
										<td data-month="12" data-day="23">23</td>
										<td data-month="12" data-day="24">24</td>
										<td data-month="12" data-day="25">25</td>
										<td data-month="12" data-day="26">26</td>
										<td data-month="12" data-day="27">27</td>
										<td data-month="12" data-day="28">28</td>
									</tr>
									<tr>
										<td data-month="12" data-day="29">29</td>
										<td data-month="12" data-day="30">30</td>
										<td data-month="12" data-day="31">31</td>
										<td data-month="12" data-day="">  </td>
										<td data-month="12" data-day="">  </td>
										<td data-month="12" data-day="">  </td>
										<td data-month="12" data-day="">  </td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>


						<!-- ... end W-Calendar -->

				<!-- W-Birthsday-Alert -->

				</div>



			<div class="ui-block d-lg-block d-md-none d-sm-none d-xs-none">

				<div class="ui-block-title">
					<h6 class="title">Activity Feed</h6>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>


				<!-- W-Activity-Feed -->

				<ul class="widget w-activity-feed notification-list">
					<li>
						<div class="author-thumb">
							<img src="{{asset('assets/')}}/img/avatar49-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Marina Polson</a> commented on Jason Mark’s <a href="#" class="notification-link">photo.</a>.
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">2 mins ago</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="{{asset('assets/')}}/img/avatar9-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Jake Parker </a> liked Nicholas Grissom’s <a href="#" class="notification-link">status update.</a>.
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">5 mins ago</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="{{asset('assets/')}}/img/avatar50-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Mary Jane Stark </a> added 20 new photos to her <a href="#" class="notification-link">gallery album.</a>.
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">12 mins ago</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="{{asset('assets/')}}/img/avatar51-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Nicholas Grissom </a> updated his profile <a href="#" class="notification-link">photo</a>.
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">1 hour ago</time></span>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img src="{{asset('assets/')}}/img/avatar48-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Marina Valentine </a> commented on Chris Greyson’s <a href="#" class="notification-link">status update</a>.
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">1 hour ago</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="{{asset('assets/')}}/img/avatar52-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Green Goo Rock </a> posted a <a href="#" class="notification-link">status update</a>.
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">1 hour ago</time></span>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img src="{{asset('assets/')}}/img/avatar10-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Elaine Dreyfuss  </a> liked your <a href="#" class="notification-link">blog post</a>.
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">2 hours ago</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="{{asset('assets/')}}/img/avatar10-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Elaine Dreyfuss  </a> commented on your <a href="#" class="notification-link">blog post</a>.
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">2 hours ago</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="{{asset('assets/')}}/img/avatar53-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Bruce Peterson </a> changed his <a href="#" class="notification-link">profile picture</a>.
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">15 hours ago</time></span>
						</div>
					</li>

				</ul>

				<!-- .. end W-Activity-Feed -->
			</div>



		</aside>

		<!-- ... end Right Sidebar -->

	</div>
</div>


<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
	<div class="modal-dialog window-popup update-header-photo" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Update Header Photo</h6>
			</div>

			<div class="modal-body">
				<a href="#" class="upload-photo-item">
				<svg class="olymp-computer-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>

				<h6>Upload Photo</h6>
				<span>Browse your computer.</span>
			</a>

				<a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

			<svg class="olymp-photos-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>

			<h6>Choose from My Photos</h6>
			<span>Choose from your uploaded photos</span>
		</a>
			</div>
		</div>
	</div>
</div>


<!-- ... end Window-popup Update Header Photo -->

<!-- Window-popup Choose from my Photo -->

<div class="modal fade" id="choose-from-my-photo" tabindex="-1" role="dialog" aria-labelledby="choose-from-my-photo" aria-hidden="true">
	<div class="modal-dialog window-popup choose-from-my-photo" role="document">

		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>
			<div class="modal-header">
				<h6 class="title">Choose from My Photos</h6>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
							<svg class="olymp-photos-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
							<svg class="olymp-albums-icon"><use xlink:href="{{asset('assets/')}}/svg-icons/sprites/icons.svg#olymp-albums-icon"></use></svg>
						</a>
					</li>
				</ul>
			</div>

			<div class="modal-body">
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">

						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="{{asset('assets/')}}/img/choose-photo1.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="{{asset('assets/')}}/img/choose-photo2.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="{{asset('assets/')}}/img/choose-photo3.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>

						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="{{asset('assets/')}}/img/choose-photo4.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="{{asset('assets/')}}/img/choose-photo5.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="{{asset('assets/')}}/img/choose-photo6.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>

						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="{{asset('assets/')}}/img/choose-photo7.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="{{asset('assets/')}}/img/choose-photo8.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="{{asset('assets/')}}/img/choose-photo9.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>


						<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
						<a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

					</div>
					<div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="{{asset('assets/')}}/img/choose-photo10.jpg" alt="photo">
								<figcaption>
									<a href="#">South America Vacations</a>
									<span>Last Added: 2 hours ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="{{asset('assets/')}}/img/choose-photo11.jpg" alt="photo">
								<figcaption>
									<a href="#">Photoshoot Summer 2016</a>
									<span>Last Added: 5 weeks ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="{{asset('assets/')}}/img/choose-photo12.jpg" alt="photo">
								<figcaption>
									<a href="#">Amazing Street Food</a>
									<span>Last Added: 6 mins ago</span>
								</figcaption>
							</figure>
						</div>

						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="{{asset('assets/')}}/img/choose-photo13.jpg" alt="photo">
								<figcaption>
									<a href="#">Graffity & Street Art</a>
									<span>Last Added: 16 hours ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="{{asset('assets/')}}/img/choose-photo14.jpg" alt="photo">
								<figcaption>
									<a href="#">Amazing Landscapes</a>
									<span>Last Added: 13 mins ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="{{asset('assets/')}}/img/choose-photo15.jpg" alt="photo">
								<figcaption>
									<a href="#">The Majestic Canyon</a>
									<span>Last Added: 57 mins ago</span>
								</figcaption>
							</figure>
						</div>


						<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
						<a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- ... end Window-popup Choose from my Photo -->
@endsection
