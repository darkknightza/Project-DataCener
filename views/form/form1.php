<?php require_once 'views/layout/header.php'?>;
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <a class="navbar-brand" href="index.html">Start Bootstrap</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="index.html">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">บันทึกการลา</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="dash.html">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">Dashboard</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
        <a class="nav-link" href="charts.html">
          <i class="fa fa-fw fa-area-chart"></i>
          <span class="nav-link-text">Charts</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
        <a class="nav-link" href="tables.html">
          <i class="fa fa-fw fa-table"></i>
          <span class="nav-link-text">Tables</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-wrench"></i>
          <span class="nav-link-text">Components</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
          <li>
            <a href="navbar.html">Navbar</a>
          </li>
          <li>
            <a href="cards.html">Cards</a>
          </li>
        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-file"></i>
          <span class="nav-link-text">Example Pages</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseExamplePages">
          <li>
            <a href="login.html">Login Page</a>
          </li>
          <li>
            <a href="register.html">Registration Page</a>
          </li>
          <li>
            <a href="forgot-password.html">Forgot Password Page</a>
          </li>
          <li>
            <a href="blank.html">Blank Page</a>
          </li>
        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-sitemap"></i>
          <span class="nav-link-text">Menu Levels</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseMulti">
          <li>
            <a href="#">Second Level Item</a>
          </li>
          <li>
            <a href="#">Second Level Item</a>
          </li>
          <li>
            <a href="#">Second Level Item</a>
          </li>
          <li>
            <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
            <ul class="sidenav-third-level collapse" id="collapseMulti2">
              <li>
                <a href="#">Third Level Item</a>
              </li>
              <li>
                <a href="#">Third Level Item</a>
              </li>
              <li>
                <a href="#">Third Level Item</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
        <a class="nav-link" href="#">
          <i class="fa fa-fw fa-link"></i>
          <span class="nav-link-text">Link</span>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav sidenav-toggler">
      <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
          <i class="fa fa-fw fa-angle-left"></i>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-envelope"></i>
          <span class="d-lg-none">Messages
            <span class="badge badge-pill badge-primary">12 New</span>
          </span>
          <span class="indicator text-primary d-none d-lg-block">
            <i class="fa fa-fw fa-circle"></i>
          </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="messagesDropdown">
          <h6 class="dropdown-header">New Messages:</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <strong>David Miller</strong>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of
              the box so they don't overflow over to the sides!</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <strong>Jane Smith</strong>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <strong>John Doe</strong>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can
              discuss distribution.</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item small" href="#">View all messages</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-bell"></i>
          <span class="d-lg-none">Alerts
            <span class="badge badge-pill badge-warning">6 New</span>
          </span>
          <span class="indicator text-warning d-none d-lg-block">
            <i class="fa fa-fw fa-circle"></i>
          </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="alertsDropdown">
          <h6 class="dropdown-header">New Alerts:</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <span class="text-success">
              <strong>
                <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
            </span>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <span class="text-danger">
              <strong>
                <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
            </span>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <span class="text-success">
              <strong>
                <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
            </span>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item small" href="#">View all alerts</a>
        </div>
      </li>
      <li class="nav-item">
        <form class="form-inline my-2 my-lg-0 mr-lg-2">
          <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for...">
            <span class="input-group-append">
              <button class="btn btn-primary" type="button">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-fw fa-sign-out"></i>Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">My Dashboard</li>
    </ol>
    <!-- Icon Cards-->
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="btn-group dropright">
          <button type="button" class="btn btn-secondary">
            ขออนุมัติเดินทาง
          </button>
          <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <span class="sr-only">Toggle Dropright</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="leave-sick.html">ขออนุมัติเดินทางราชการไปต่างประเทศ/อบรม</a>
            <a class="dropdown-item" href="#">ขออนุมัติเดินทางราชการไปภายในประเทศ</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">อื่นๆ</a>
          </div>
        </div>
      </div>
    </div>

    <!-- /.container-fluid-->
    <div class="container">

      <div class="card-header">
        <center>แบบฟอร์มขออนุมัติเดินทาง</center>
      </div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">ส่วนงาน:</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="" value="คณะวิทยาศาสตร์ "
                  readonly="readonly">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">เรื่อง:</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="" value="แจ้งวันออกเดินทางไปราชการ ณ ต่างประเทศ "
                  readonly="readonly">
              </div>
              <div class="col-md-6">
                <label for="exampleInputName">เรียน:</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="" value="คณบดี/ผู้บังคับบัญชา"
                  readonly="readonly">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">ข้าพเจ้า:</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="" value="อ.ก ข" readonly="readonly">
              </div>
              <div class="col-md-6">
                <label for="exampleInputName">ประเภท:</label>
                <select class="form-control">
                  <option>ข้าราชการ</option>
                  <option>พนักงานมหาวิทยาลัย</option>
                  <option>พนักงานราชการ</option>
                  <option>ลูกจ้างประจำ</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">ตำแหน่ง:</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="" value="-" readonly="readonly">
              </div>
              <div class="col-md-6">
                <label for="exampleInputEmail1">สังกัดงาน</label>
                <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="" value="มหาวิทยาลัยแม่โจ้ คณะวิทยาศาสตร์"
                  readonly="readonly">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleConfirmPassword">กอง/ฝ่าย</label>
                <input class="form-control" id="exampleConfirmPassword" type="text" placeholder="" value="-" readonly="readonly">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">คณะ/สำนัก</label>
                <input class="form-control" id="exampleConfirmPassword" type="text" placeholder="" value="วิทยาศาสตร์" readonly="readonly">
              </div>
            </div>

          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleConfirmPassword">มีความประสงค์จะขออนุมัติเดินทางไปปฏิบัติงาน ณ ต่างประเทศ เพื่อ</label>
                <input class="form-control" id="exampleConfirmPassword" type="text" placeholder="" row="5">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleConfirmPassword">ประเทศ</label>
                <input class="form-control" id="exampleConfirmPassword" type="text" placeholder="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleConfirmPassword">ตั้งแต่วันที่</label>
                <input class="form-control" id="exampleConfirmPassword" type="date" placeholder="">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">ถึงวันที่</label>
                <input class="form-control" id="exampleConfirmPassword" type="date" placeholder="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleConfirmPassword">งบประมาณ</label>
                <br>
                <input id="exampleConfirmPassword" type="radio" placeholder="" name="dd" value="" onclick="show1();">
                <label for="exampleConfirmPassword">งบประมาณส่วนตัว </label>
                <input id="exampleConfirmPassword" type="radio" placeholder="" name="dd" value="" onclick="show2();">
                <label for="exampleConfirmPassword">งบประมาณภายนอกมหาวิทยาลัย</label>
              </div>
            </div>
          </div>

          <div id="div1">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="exampleConfirmPassword">ค่าเบี้ยเลี้ยง</label>
                  <input class="form-control" id="exampleConfirmPassword" type="text" placeholder="" value="250/วัน" readonly="readonly">
                </div>
                <div class="col-md-6">
                  <label for="exampleConfirmPassword">ค่าที่พัก</label>
                  <input class="form-control" id="exampleConfirmPassword" type="text" placeholder="" value="1500/คืน" readonly="readonly">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="exampleConfirmPassword">ค่าพาหนะ</label>
                  <input class="form-control" id="exampleConfirmPassword" type="number" placeholder="">
                </div>
                <div class="col-md-6">
                  <label for="exampleConfirmPassword">ค่าลงทะเบียน</label>
                  <input class="form-control" id="exampleConfirmPassword" type="number" placeholder="">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleConfirmPassword">เอกสารที่แนบมาด้วย</label>
                <input class="form-control" id="exampleConfirmPassword" type="file" placeholder="">
              </div>
            </div>
          </div>

          <button class="btn btn-primary btn-block" type="submit">ตกลง</button>
        </form>

      </div>
    </div>
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>

          </div>
        </div>
      </div>
    </div>
    <script>
      function show1() {
        document.getElementById('div1').style.display = 'none';
      }
      function show2() {
        document.getElementById('div1').style.display = 'block';
      }
    </script>
    <?php require_once 'views/layout/footer.php';