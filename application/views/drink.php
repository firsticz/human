

<body>

  

<!-- Page Content -->
<div class="container" style="padding-top:5%">

  <div class="row">

    <div class="col-lg-3">

      <h1 class="my-4"><img class='illustration' src="<?php echo base_url() ?>assets/img/logos.png" alt="" ></h1>
      <div class="list-group">
        <a href="<?php echo base_url() ?>welcome/food" class="list-group-item">อาหาร</a>
        <a href="<?php echo base_url() ?>welcome/drink" class="list-group-item active">เครื่องดื่ม</a>
        <a href="#" class="list-group-item">ประวัติการสั่งอาหาร</a>
      </div>

    </div>
    <!-- /.col-lg-3 -->

    <div class="col-lg-9">

      <div class="row">

        <?php
          foreach ($drink->result() as $row) {
            ?>
            <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href=""><img class="card-img-top" src="<?php echo base_url() ?>assets/img/<?php echo $row->pic ?>" alt=""></a>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="#"><?php echo $row->drinkname ?></a>
                </h3>
                <h5><?php echo $row->price ?> Bath</h5>
                <p class="card-text">
                  <button class="btn btn-info btn-lg" onclick="conferm()">
                    <span class="right txt"><i class="fa fa-shopping-basket"></i></span>
                  </button>
                </p>
              </div>
              <div class="card-footer">
                <?php
                  $i = 0;
                  for($i;$i<$row->rating;$i++){
                    echo '<span class="fa fa-star checked"></span>';
                  }
                  while($i != 5){
                    echo '<span class="fa fa-star"></span>';
                    $i++;
                  }
                ?>
              </div>
            </div>
          </div>
          <?php
          }
        ?>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.col-lg-9 -->

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->


