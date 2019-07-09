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
    <h1 class="h3 mb-2 text-gray-800">Get.</h1>
    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quis mollitia doloribus nam ipsum. Eligendi animi neque quo minima harum ullam itaque provident explicabo? Eaque inventore sed vel expedita aspernatur?</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
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
                <th>Url</th>
                <th>Status</th>
                <th class="text-center">Action</th>
              </tr>
            </tfoot>
            <tbody>

              <?php foreach ($table as $tbl) { ?>
                <tr>
                  <td>
                    <?= $tbl['id']; ?>
                  </td>
                  <td>
                    <?= $tbl['apiName']; ?>
                  </td>
                  <td>
                    <a href="<?= $tbl['url']; ?>"><?= $tbl['url']; ?></a>

                    <a class="float-right mr-1" rel='nofollow' href='https://www.facebook.com/sharer.php?u=URL'>
                      <img src='http://syam.eu.org/icon/fb.jpg' alt='' width='25' height='25'></a>

                    <a class="float-right mr-1" rel='nofollow' href='https://plus.google.com/share?url=URL'>
                      <img src='http://syam.eu.org/icon/g.jpg' alt='' width='25' height='25'></a>

                    <a class="float-right mr-1" rel='nofollow' href='http://www.linkedin.com/shareArticle?mini=true&url=URL'>
                      <img src='http://syam.eu.org/icon/in.jpg' alt='' width='25' height='25'></a>

                    <a class="float-right mr-1" rel='nofollow' href='https://twitter.com/share?url=URL'>
                      <img src='http://syam.eu.org/icon/tw.jpg' alt='' width='25' height='25'></a>

                  </td>
                  <td>
                    <?= $tbl['status']; ?>
                  </td>
                  <td class="text-center">
                    <a href="<?= base_url(); ?>Api/deleteApi/<?= $tbl["id"] ?>/get" onclick="return confirm('Delete this API?')" class="btn btn-danger w-auto">
                      Delete
                    </a>
                    <a href="<?= base_url(); ?>Api/editApi/<?= $tbl["id"] ?>/get" class="btn btn-warning w-auto">
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