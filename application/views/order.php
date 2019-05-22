

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
        <table class="table" >
            <thead class="thead-dark" align="center">
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อ</th>
                    <th></th>
                </tr>
            </thead>
            <tr align="center">
                <td>1</td>
                <td>order1</td>
                <td><button class="btn btn-info" onclick="myFunction()">ดูรายละเอียด</button></td>
            </tr>
            <tr align="center">
                <td>2</td>
                <td>order2</td>
                <td><button class="btn btn-info">ดูรายละเอียด</button></td>
            </tr>
            <tr align="center">
                <td>3</td>
                <td>order3</td>
                <td><button class="btn btn-info">ดูรายละเอียด</button></td>
            </tr>
            <tr align="center">
                <td>4</td>
                <td>order4</td>
                <td><button class="btn btn-info">ดูรายละเอียด</button></td>
            </tr>
            <tr align="center">
                <td>5</td>
                <td>order5</td>
                <td><button class="btn btn-info">ดูรายละเอียด</button></td>
            </tr>
            <tr align="center">
                <td>6</td>
                <td>order6</td>
                <td><button class="btn btn-info">ดูรายละเอียด</button></td>
            </tr>
            <tr align="center">
                <td>7</td>
                <td>order7</td>
                <td><button class="btn btn-info">ดูรายละเอียด</button></td>
            </tr>
            
        </table>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.col-lg-9 -->

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
<script>
    function myFunction() {
        window.location.href='orderdetail';
    }
</script>

