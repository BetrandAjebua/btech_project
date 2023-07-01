<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <ul class="navbar-nav  justify-content-end">
        <li class="nav-item d-flex align-items-right">
          <button data-toggle="modal" data-target="#add_donation" class="nav-link text-body font-weight-bold px-0 btn-danger  btn-rounded-0 p-1">
            <i class="fa fa-plus me-sm-1 text-white"></i>
            <span class="d-sm-inline d-none text-white">Add donation</span>
          </button>
        </li>
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>
        <li class="nav-item px-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0">
            <i class="fa fa-cog text-danger fixed-plugin-button-nav cursor-pointer"></i>
          </a>
        </li>
        <li class="nav-item dropdown pe-2 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-bell text-danger cursor-pointer"></i>
          </a>
          <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
            <li class="mb-2">
              <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex py-1">
                  <div class="my-auto">
                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm font-weight-normal mb-1">
                      <span class="font-weight-bold">New message</span> from Laur
                    </h6>
                    <p class="text-xs text-secondary mb-0">
                      <i class="fa fa-clock me-1"></i>
                      13 minutes ago
                    </p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="modal fade" id="add_donation">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>Donation</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>

      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="/admin_panel/pages/action.php">
          <input type="hidden" class="catid" name="id">
          <div class="form-group">
            <label for="btype" class="col-sm-3 control-label">Donor Id</label>

            <div class="col-sm-9">
              <select name="d_id" id="btype">

                <?php
                $query = $db->prepare("SELECT * FROM donor");
                $query->execute();
                foreach ($query->fetchAll() as $key => $value) {
                  


                ?>
                  <option value="<?php echo $value['d_id'];?>"><?php echo $value['d_name'];?></option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="btype" class="col-sm-3 control-label">Blood Type</label>

            <div class="col-sm-9">
              <select name="btype" id="btype">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="qnt" class="col-sm-3 control-label">Quantity</label>

            <div class="col-sm-9">
              <input type="number" id="qnt" class="form-control" style='border: 2px solid black' id="remail" name="qnt">
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            <button type="submit" class="btn btn-danger btn-flat" id='send' name="edit"><i class="bi bi-send"></i>Send</button>
        </form>
      </div>
    </div>

  </div>
</div>
</div>