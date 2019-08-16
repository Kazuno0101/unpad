<div class="row">
  <div class="col-md-12">

    <?php if ($this->session->flashdata("flash")) { ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
      Data <strong> Success </strong> <?= $this->session->flashdata("flash"); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <?php }; ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Delete.</h1>
    <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus provident beatae nulla iste, sequi asperiores minus consequuntur sapiente facilis deleniti dolor. A obcaecati sint in cupiditate vero! Fugiat, iure deserunt.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List API Delete</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Id</th>
                <th>API Name</th>
                <th>Url</th>
                <th>Status</th>
                <th class="text-center">Action</th>
            </thead>
            <tfoot>
              <tr>
                <th>Id</th>
                <th>API Name</th>
                <th class="w-50">Url</th>
                <th>Status</th>
                <th class="text-center">Action</th>
              </tr>
            </tfoot>
            <tbody>

              <?php $i = 1;
              foreach ($table as $tbl) { ?>
              <tr>
                <td>
                  <?= $i;
                    $i++; ?>
                <td>
                  <?= $tbl['apiName']; ?>
                </td>
                <td>
                  <input class="border-0 w-75 text" type="text" value="<?= $tbl['url']; ?>" id="pilih" readonly />
                  <a href="<?= $tbl['url']; ?>" target="_blank" rel="nofollow" title="Data API" class="btn btn-dark btn-sm float-right mr-1" onclick="copy_text()">Go To</a>
                  <button class="btn btn-dark btn-sm float-right mr-1" type="button" onclick="copy_text()">Copy</button>

                </td>
                <td>
                  <?= $tbl['status']; ?>
                </td>
                <td class="text-center">
                  <a href="<?= base_url(); ?>Api/deleteApi/<?= $tbl["id"] ?>/delete" onclick="return confirm('Delete this API?')" class="btn btn-danger w-auto">
                    Delete
                  </a>
                  <a href="<?= base_url(); ?>Api/editApi/<?= $tbl["id"] ?>/delete" class="btn btn-warning w-auto">
                    Edit
                  </a>
                </td>
              </tr>
              <?php }; ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function copy_text() {
    document.getElementById("pilih").select();
    document.execCommand("copy");
  }
</script>