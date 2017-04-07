<?php if(!empty($posts)): foreach($posts as $post): ?>
<div class="row">
            <div class="col-md-4">
                <a href="#">
                    <img src="<?php echo base_url().$post['image']?>" class="img-responsive img-box img-thumbnail">
                </a>
            </div>
            <div class="col-md-8">
                <div class="list-group">
                    <div class="list-group-item">
                        <div class="row-picture">
                            <a href="#" title="sintret">
                                <img class="circle img-thumbnail img-box" src="<?php echo base_url().$post['userimage']?>" alt="sintret">
                            </a>
                        </div>
                        <div class="row-content">
                            <div class="list-group-item-heading">
                                <a href="#" title="sintret">
                                    <small><?php echo $post['first_name']?> <?php echo $post['last_name']?></small>
                                </a>
                            </div>
                            <small>
                                <i class="glyphicon glyphicon-time"></i> <?php echo $post['created']?> </span>
                            </small>
                        </div>
                    </div>
                </div>
                <h5><a href="#"><?php echo $post['propertyname']?></a></h5>
            </div>
        </div>
        <hr>
        <?php endforeach; else: ?>
          <p>Post(s) not available.</p>
          <?php endif; ?>
          <?php echo $this->ajax_pagination->create_links(); ?>
