    <div id="page-contents">
    	<div class="container">
    		<div class="row">

          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<div class="col-md-3 static">
            <div class="profile-card">
            	<img src="<?= ($user["profile_picture"] != null) ? base_url('uploads/profiles/').$user["profile_picture"] : base_url('assets/')."images/users/user-1.jpg"; ?>" alt="user" class="profile-photo" />
            	<h5><p class="text-white"><?= $user['name'] ?></p></h5>
            	<p class="text-white"><i class="ion ion-android-person-add"></i> 1,299 Friends</p>
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
              <li><i class="icon ion-ios-paper"></i><div><a href="newsfeed.html">My Newsfeed</a></div></li>
              <li><i class="icon ion-ios-people-outline"></i><div><a href="<?= base_url('content/friends'); ?>">Friends</a></div></li>
            </ul><!--news-feed links ends-->
          </div>
    			<div class="col-md-7">

            <!-- Friend List
            ================================================= -->
            <div class="friend-list">
            	<div class="row">
            		<div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?= base_url('assets/'); ?>images/covers/1.jpg" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?= base_url('assets/'); ?>images/users/user-3.jpg" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                        <a href="#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="timeline.html" class="profile-link">Sophia Lee</a></h5>
                      	<p>Student at Harvard</p>
                      </div>
                    </div>
                  </div>
                </div>
            		<div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?= base_url('assets/'); ?>images/covers/3.jpg" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?= base_url('assets/'); ?>images/users/user-4.jpg" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                        <a href="#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="timeline.html" class="profile-link">John Doe</a></h5>
                      	<p>Traveler</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?= base_url('assets/'); ?>images/covers/4.jpg" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?= base_url('assets/'); ?>images/users/user-10.jpg" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                        <a href="timeline.html" class="pull-right text-green">My Friend</a>
                      	<h5><a href="#" class="profile-link">Julia Cox</a></h5>
                      	<p>Art Designer</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?= base_url('assets/'); ?>images/covers/5.jpg" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?= base_url('assets/'); ?>images/users/user-7.jpg" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                        <a href="#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="timelime.html" class="profile-link">Robert Cook</a></h5>
                      	<p>Photographer at Photography</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?= base_url('assets/'); ?>images/covers/6.jpg" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?= base_url('assets/'); ?>images/users/user-8.jpg" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                        <a href="#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="timeline.html" class="profile-link">Richard Bell</a></h5>
                      	<p>Graphic Designer at Envato</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?= base_url('assets/'); ?>images/covers/7.jpg" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?= base_url('assets/'); ?>images/users/user-2.jpg" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                        <a href="#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="timeline.html" class="profile-link">Linda Lohan</a></h5>
                      	<p>Software Engineer</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?= base_url('assets/'); ?>images/covers/8.jpg" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?= base_url('assets/'); ?>images/users/user-9.jpg" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                        <a href="#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="timeline.html" class="profile-link">Anna Young</a></h5>
                      	<p>Musician</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?= base_url('assets/'); ?>images/covers/9.jpg" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?= base_url('assets/'); ?>images/users/user-6.jpg" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                        <a href="#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="timeline.html" class="profile-link">James Carter</a></h5>
                      	<p>CEO at IT Farm</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?= base_url('assets/'); ?>images/covers/10.jpg" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?= base_url('assets/'); ?>images/users/user-5.jpg" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                        <a href="#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="timeline.html" class="profile-link">Alexis Clark</a></h5>
                      	<p>Traveler</p>
                      </div>
                    </div>
                  </div>
                </div>
            	</div>
            </div>
          </div>

    		</div>
    	</div>
    </div>