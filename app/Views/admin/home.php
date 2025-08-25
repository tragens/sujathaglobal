 <?php include "common/header.php";?> 
 <?php include "common/sidebar.php";?> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Home Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Home Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Section Title</th>
                <th>Last Modified Date</th>
                <th>Last Modified User</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Slider</td>
                <td>2025-08-24 23:00:00</td>
                <td>Admin</td>
                <td class="text-center">
                  <a href="<?= base_url('Home/slider') ?>">
                    <span class="fa fa-eye"></span>
                  </a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Core Values</td>
                <td>2025-08-24 23:00:00</td>
                <td>Admin</td>
                <td class="text-center">
                  <a href="<?= base_url('Home/section_2') ?>">
                    <span class="fa fa-eye"></span>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>

 <?php include "common/footer.php";?> 
