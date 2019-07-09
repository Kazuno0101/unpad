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

<form method="post">
      <input type="hidden" name="id" value="<?= $api["id"] ?>">

      <?php if (validation_errors()) { ?>
            <div class="alert alert-danger" role="alert">
                  <?= validation_errors(); ?>
            </div>
      <?php } ?>

      <div class="form-group row">
            <label for="apiName" class="col-md-2 col-form-label">API Name</label>
            <div class="col-md-10">
                  <input type="text" class="form-control" name="apiName" id="apiName" value="<?= $api["apiName"] ?>">
            </div>
      </div>
      <div class="form-group row">
            <label for="type" class="col-md-2 col-form-label">Type</label>
            <div class="col-md-10">
                  <select class="form-control" id="type" name="type">
                        <?php foreach ($type as $tp) {
                              if ($tp == $api["type"]) { ?>
                                    <option value="<?= $tp ?>" selected><?= $tp ?></option>
                              <?php } else { ?>
                                    <option value="<?= $tp ?>"><?= $tp ?></option>
                              <?php }
                  } ?>
                  </select>
            </div>
      </div>
      <div class="form-group row">
            <label for="url" class="col-md-2 col-form-label">URl</label>
            <div class="col-md-10">
                  <input type="url" class="form-control" name="url" id="url" value="<?= $api["url"]; ?>">
            </div>
      </div>
      <div class="form-group row">
            <label for="status" class="col-md-2 col-form-label">Status</label>
            <div class="col-md-10">
                  <select class="form-control" id="status" name="status">
                        <?php foreach ($status as $s) {
                              if ($s == $api["status"]) { ?>
                                    <option value="<?= $s ?>" selected><?= $s ?></option>
                              <?php } else { ?>
                                    <option value="<?= $s ?>"><?= $s ?></option>
                              <?php }
                  } ?>
                  </select>
            </div>
      </div>
      <div class="form-group row">
            <div class="col-md-10">
                  <button type="submit" class="btn btn-primary">Edit</button>
            </div>
      </div>
</form>