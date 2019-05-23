

<body>

  

<!-- Page Content -->
<div class="container" style="padding-top:5%;padding-bottom: 25px;">

  <div class="row">

    <div class="col-lg-3">

      <h1 class="my-4"><img class='illustration' src="<?php echo base_url() ?>assets/img/logos.png" alt="" ></h1>
      <div class="list-group">
        <a href="<?php echo base_url() ?>welcome/food" class="list-group-item">อาหาร</a>
        <a href="<?php echo base_url() ?>welcome/drink" class="list-group-item">เครื่องดื่ม</a>
        <a href="<?php echo base_url() ?>welcome/order" class="list-group-item active">ประวัติการสั่งอาหาร</a>
      </div>

    </div>
    <!-- /.col-lg-3 -->
    <div class="col-lg-1"></div>
    <div class="col-lg-7">

      <div class="row">
      <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ชื่อ</th>
                        <th>จำนวน</th>
                        <th class="text-center">ราคา</th>
                        <th class="text-center">รวม</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="<?php echo base_url() ?>assets/img/pat.png" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h5 class="media-heading"><a href="#">ข้าวผัด</a></h5>
                                
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="1">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>40</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>40</strong></td>
                        <td class="col-sm-1 col-md-1">
                        <!-- <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button> -->
                        </td>
                    </tr>
                    <tr>
                        <td class="col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="<?php echo base_url() ?>assets/img/jok.png" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">โจ๊ก</a></h4>
                            </div>
                        </div></td>
                        <td class="col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="2">
                        </td>
                        <td class="col-md-1 text-center"><strong>40</strong></td>
                        <td class="col-md-1 text-center"><strong>80</strong></td>
                        <td class="col-md-1">
                        <!-- <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>ราคารวม</h5></td>
                        <td class="text-right"><h5><strong>120</strong></h5></td>
                    </tr>
                    
                   
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> เลือกซื้อต่อ
                        </button></td>
                        <td>
                        <button type="button" class="btn btn-success">
                            เช็คบิล <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.col-lg-9 -->

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->


