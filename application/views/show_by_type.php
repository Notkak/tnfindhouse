<style>
    .list-group {border-radius: 0;}
    .list-group .list-group-item {background-color: transparent;overflow: hidden;border: 0;border-radius: 0;padding: 0 16px;}
    .list-group .list-group-item .row-picture,
    .list-group .list-group-item .row-action-primary {float: left;display: inline-block;padding-right: 16px;padding-top: 8px;}
    .list-group .list-group-item .row-picture img,
    .list-group .list-group-item .row-action-primary img,
    .list-group .list-group-item .row-picture i,
    .list-group .list-group-item .row-action-primary i,
    .list-group .list-group-item .row-picture label,
    .list-group .list-group-item .row-action-primary label {display: block;width: 56px;height: 56px;}
    .list-group .list-group-item .row-picture img,
    .list-group .list-group-item .row-action-primary img {background: rgba(0, 0, 0, 0.1);padding: 1px;}
    .list-group .list-group-item .row-picture img.circle,
    .list-group .list-group-item .row-action-primary img.circle {border-radius: 100%;}
    .list-group .list-group-item .row-picture i,
    .list-group .list-group-item .row-action-primary i {background: rgba(0, 0, 0, 0.25);border-radius: 100%;text-align: center;line-height: 56px;font-size: 20px;color: white;}
    .list-group .list-group-item .row-picture label,
    .list-group .list-group-item .row-action-primary label {margin-left: 7px;margin-right: -7px;margin-top: 5px;margin-bottom: -5px;}
    .list-group .list-group-item .row-content {display: inline-block;width: calc(100% - 92px);min-height: 66px;}
    .list-group .list-group-item .row-content .action-secondary {position: absolute;right: 16px;top: 16px;}
    .list-group .list-group-item .row-content .action-secondary i {font-size: 20px;color: rgba(0, 0, 0, 0.25);cursor: pointer;}
    .list-group .list-group-item .row-content .action-secondary ~ * {max-width: calc(100% - 30px);}
    .list-group .list-group-item .row-content .least-content {position: absolute;right: 16px;top: 0px;color: rgba(0, 0, 0, 0.54);font-size: 14px;}
    .list-group .list-group-item .list-group-item-heading {color: rgba(0, 0, 0, 0.77);font-size: 20px;line-height: 29px;}
    .list-group .list-group-separator {clear: both;overflow: hidden;margin-top: 10px;margin-bottom: 10px;}
    .list-group .list-group-separator:before {content: "";width: calc(100% - 90px);border-bottom: 1px solid rgba(0, 0, 0, 0.1);float: right;}

    .bg-profile{background-color: #3498DB !important;height: 150px;z-index: 1;}
    .bg-bottom{height: 100px;margin-left: 30px;}
    .img-profile{display: inline-block !important;background-color: #fff;border-radius: 6px;margin-top: -50%;padding: 1px;vertical-align: bottom;border: 2px solid #fff;-moz-box-sizing: border-box;box-sizing: border-box;color: #fff;z-index: 2;}
    .row-float{margin-top: -40px;}
    .explore a {color: green; font-size: 13px;font-weight: 600}
    .twitter a {color:#4099FF}
    .img-box{box-shadow: 0 3px 6px rgba(0,0,0,.16),0 3px 6px rgba(0,0,0,.23);border-radius: 2px;border: 0;}
</style>
<div class="container" style="margin-top:10px">
  <div class="jumbotron" style="background-color:white">
    <div class="row">
      <div class="col-md-8">
        <h4>รายการ<?php echo $title;?>ล่าสุด</h4>
        <?php for($i=0;$i<8;$i++){ ?>
        <div class="row">
                    <div class="col-md-4">
                        <a href="#">
                            <img src="http://wanderluxe.theluxenomad.com/wp-content/uploads/2014/10/http-www.urchinbali.comgallery.jpg" class="img-responsive img-box img-thumbnail">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="row-picture">
                                    <a href="#" title="sintret">
                                        <img class="circle img-thumbnail img-box" src="http://sintret.com/img/andy.jpg" alt="sintret">
                                    </a>
                                </div>
                                <div class="row-content">
                                    <div class="list-group-item-heading">
                                        <a href="#" title="sintret">
                                            <small>sintret</small>
                                        </a>
                                    </div>
                                    <small>
                                        <i class="glyphicon glyphicon-time"></i> 3 days ago via <span class="twitter"> <i class="fa fa-twitter"></i> <a target="_blank" href="https://twitter.com/sintret" alt="sintret" title="sintret">@sintret</a></span>
                                        <br>
                                        <span class="explore"><i class="glyphicon glyphicon-th"></i> <a href="#">Explore 2 places </a></span>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <h5><a href="#">5 of Bali’s Spanking New Haunts - WanderLuxe Magazine</a></h5>
                    </div>
                </div>
                <hr>
                <?php }?>
              </div>
      <div class="col-md-4">
        right
      </div>
    </div>
  </div>
</div>
