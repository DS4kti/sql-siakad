            <a style='color:#000' href='index.php?view=Santri'>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                <?php $Santri = mysqli_fetch_array(mysqli_query($koneksi,"SELECT count(*) as total FROM Santri")); ?>
                  <span class="info-box-text">Santri</span>
                  <span class="info-box-number"><?php echo $Santri[total]; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            </a>

            <a style='color:#000' href='index.php?view=Ustadz'>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box"> 
                <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>
                <div class="info-box-content">
                <?php $Ustadz = mysqli_fetch_array(mysqli_query($koneksi,"SELECT count(*) as total FROM Ustadz")); ?>
                  <span class="info-box-text">Ustadz</span>
                  <span class="info-box-number"><?php echo $Ustadz[total]; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            </a>

            <a style='color:#000' href='index.php?view=bahantugas'>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
                <div class="info-box-content">
                <?php $upload = mysqli_fetch_array(mysqli_query($koneksi,"SELECT count(*) as total FROM elearning")); ?>
                  <span class="info-box-text">Uploads</span>
                  <span class="info-box-number"><?php echo $upload[total]; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            </a>

            <a style='color:#000' href='index.php?view=forum'>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
                <div class="info-box-content">
                <?php $forum = mysqli_fetch_array(mysqli_query($koneksi,"SELECT count(*) as total FROM forum_topic")); ?>
                  <span class="info-box-text">Forum</span>
                  <span class="info-box-number"><?php echo $forum[total]; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            </a>