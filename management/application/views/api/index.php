<div class="row">
  <div class="col-md-12">


    <?php if ($this->session->flashdata("flash")) { ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
      New data <strong> Success </strong> <?= $this->session->flashdata("flash"); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <?php }; ?>


  </div>
</div>


<div class="row">

  <div class="col-xl-12 col-md-12 mb-4">

    <a href="<?= base_url(); ?>api/newApi" class="btn btn-block border-left-dark shadow h-100 py-2 bg-white">
      <div class="row no-gutters align-items-center">
        <div class="col">
          <div class="h5 mb-0 font-weight-bold text-dark">New API</div>
        </div>
        <span class="icon text-white-50 col-auto">
          <i class="fas fa-newspaper fa-2x text-gray-300"></i>
        </span>
      </div>
    </a>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">

    <a href="<?= base_url(); ?>api/get" class="btn btn-block border-left-primary shadow h-100 py-2 bg-white">
      <div class="row no-gutters align-items-center">
        <div class="col mr-5">
          <div class="h5 mb-0 ml-n5 mr-5 font-weight-bold text-primary">GET</div>
        </div>
        <span class="icon text-white-50 col-auto">
          <i class="fas fa-arrow-left fa-2x text-gray-300"></i>
        </span>
      </div>
    </a>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
    <a href="<?= base_url(); ?>api/post" class="btn btn-block border-left-success shadow h-100 py-2 bg-white">
      <div class="row no-gutters align-items-center">
        <div class="col mr-4">
          <div class="h5 mb-0 ml-n5 mr-5 font-weight-bold text-success">POST</div>
        </div>
        <span class="icon text-white-50 col-auto">
          <i class="fas fa-arrow-right fa-2x text-gray-300"></i>
        </span>
      </div>
    </a>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
    <a href="<?= base_url(); ?>api/delete" class="btn btn-block border-left-danger shadow h-100 py-2 bg-white">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="h5 mb-0 ml-n5 mr-5 font-weight-bold text-danger">DELETE</div>
        </div>
        <span class="icon text-white-50 col-auto">
          <i class="fas fa-trash fa-2x text-gray-300"></i>
        </span>
      </div>
    </a>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
    <a href="<?= base_url(); ?>api/put" class="btn btn-block border-left-warning shadow h-100 py-2 bg-white">
      <div class="row no-gutters align-items-center">
        <div class="col mr-5">
          <div class="h5 mb-0 ml-n5 mr-5 font-weight-bold text-warning">PUT</div>
        </div>
        <span class="icon text-white-50 col-auto">
          <i class="fas fa-edit fa-2x text-gray-300"></i>
        </span>
      </div>
    </a>
  </div>

</div>
<div class="row">
  <div class="col-md-12">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List API</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Id</th>
                <th>API Name</th>
                <th>Type</th>
                <th>Url</th>
                <th>Status</th>
            </thead>
            <tfoot>
              <tr>
                <th>Id</th>
                <th>API Name</th>
                <th>Type</th>
                <th>Url</th>
                <th>Status</th>
              </tr>
            </tfoot>
            <tbody>

              <?php $i = 1;
              foreach ($table as $tbl) { ?>
              <tr>
                <td>
                  <?= $i ?>
                </td>
                <td>
                  <?= $tbl['apiName']; ?>
                </td>
                <td>
                  <?= $tbl['type']; ?>
                </td>
                <td>
                  <?= $tbl['url']; ?>
                </td>
                <td>
                  <?= $tbl['status']; ?>
                </td>
              </tr>
              <?php
                $i++;
              }; ?>

            </tbody>
          </table>
        </div>
      </div>

    </div>