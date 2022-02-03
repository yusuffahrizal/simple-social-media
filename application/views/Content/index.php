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

            <!-- Post Create Box
            ================================================= -->
            <div class="create-post">
              <?= form_open_multipart('content/post');?>
              
            	<div class="row">
            		<div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    <img src="<?= ($user["profile_picture"] != null) ? base_url('uploads/profiles/').$user["profile_picture"] : base_url('assets/')."images/users/user-1.jpg"; ?>" alt="" class="profile-photo-md" />
                    <textarea name="caption" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                  </div>
                  <?php if($this->session->flashdata('errorUpload') != NULL){ ?>
                    <p style="color: red;"><?= $this->session->flashdata('errorUpload'); ?></p>
                  <?php } ?>
                  <?php if($this->session->flashdata('success') != NULL){ ?>
                    <p style="color: green;"><?= $this->session->flashdata('success'); ?></p>
                  <?php } ?>
                </div>
            		<div class="col-md-5 col-sm-5">
                  <div class="tools">
                    <ul class="publishing-tools list-inline">
                      <li><input type="file" name="image"></li>
                      <li><a href="#"><i class="ion-images"></i></a></li>
                    </ul>
                    <button class="btn btn-primary pull-right" type="submit">Publish</button>
                  </div>
                </div>
            	</div>
              </form>
            </div>
            <!-- Post Create Box End-->
            
            <!-- Post Content Box End-->
            <?php foreach ($posts as $key) { ?>
              <div class="post-content">
              <?php if($key['image'] != null || $key['image'] != ""){ ?>
                <img src="<?= base_url('uploads/').$key['image']; ?>" alt="post-image" class="img-responsive post-image" />
              <?php } ?>
                <div class="post-container">
                  <img src="<?= ($user["profile_picture"] != null) ? base_url('uploads/profiles/').$user["profile_picture"] : base_url('assets/')."images/users/user-1.jpg"; ?>" alt="user" class="profile-photo-md pull-left" />
                  <div class="post-detail">
                    <div class="user-info">
                      <h5><a href="timeline.html" class="profile-link"><?= $key['profile_name']; ?></a> <span class="following">following</span></h5>
                      <p class="text-muted">Published at <?= $key['upload_time']; ?></p>
                    </div>
                    <div class="reaction">
                      <?php 
                        $i = 0; 
                        $hasLike = false; 
                        foreach($likes as $like){
                          if($like['id_post'] == $key['id']){ 
                            $i++;
                            if($like['id_user'] == $this->session->userdata('user')){
                              $hasLike = true;
                            }
                          }
                        }      
                      ?>
                      <?php if($hasLike){ ?>
                        <a class="btn text-red" href="#"><i class="icon ion-thumbsup"></i><?= $i; ?></a>
                      <?php }else{ ?>
                        <a class="btn text-green" href="<?= base_url('content/like/'.$key['id']); ?>"><i class="icon ion-thumbsup"></i><?= $i; ?></a>
                      <?php } ?>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-text">
                      <p><i class="em em-thumbsup"></i> <i class="em em-thumbsup"></i> <?= $key['caption']; ?></p>
                    </div>
                    <div class="line-divider"></div>
                    <?php foreach ($comments as $comment) { 
                      if($comment['id_post'] == $key['id']){ ?>
                        <div class="post-comment">
                          <img src="<?= ($comment["profile_picture"] != null) ? base_url('uploads/profiles/').$comment["profile_picture"] : base_url('assets/')."images/users/user-12.jpg"; ?>" alt="" class="profile-photo-sm" />
                          <p><a href="timeline.html" class="profile-link"><?= $comment['profile_name'] ?> </a> <?= $comment['comment']; ?> <i class="em em-muscle"></i></p>
                        </div>
                      <?php } } ?>
                    <form action="<?= base_url('content/comment') ?>" method="post">
                    <div class="post-comment">
                      <img src="<?= ($user["profile_picture"] != null) ? base_url('uploads/profiles/').$user["profile_picture"] : base_url('assets/')."images/users/user-1.jpg"; ?>" alt="" class="profile-photo-sm" />
                        <input type="hidden" value="<?= $key['id'] ?>" name="id">
                        <input type="text" class="form-control" placeholder="Post a comment" name="comment" required> &emsp;
                        <button class="btn btn-primary pull-right" type="submit">Publish</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            <?php } ?>

            <!-- End Post Content
            ================================================= -->
          </div>

          <!-- Newsfeed Common Side Bar Right
          ================================================= -->
    			<div class="col-md-2 static">
            <div class="suggestions" id="sticky-sidebar">
              <h4 class="grey">Who to Follow</h4>
              <div class="follow-user">
                <img src="<?= base_url('assets/'); ?>images/users/user-11.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.html">Diana Amber</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="<?= base_url('assets/'); ?>images/users/user-12.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.html">Cris Haris</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="<?= base_url('assets/'); ?>images/users/user-13.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.html">Brian Walton</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="<?= base_url('assets/'); ?>images/users/user-14.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.html">Olivia Steward</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="<?= base_url('assets/'); ?>images/users/user-15.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.html">Sophia Page</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
            </div>
          </div>
    		</div>
    	</div>
    </div>