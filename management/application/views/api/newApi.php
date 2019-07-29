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
  <input type="hidden" name="id">

  <div class="form-group row">
    <label for="apiName" class="col-md-2 col-form-label">API Name</label>
    <div class="col-md-10">
      <input type="text" class="form-control" name="apiName" id="apiName" placeholder="API Name">
      <small class="form-text text-danger"><?= form_error("apiName") ?></small>
    </div>
  </div>
  <div class="form-group row">
    <label for="type" class="col-md-2 col-form-label">Type</label>
    <div class="col-md-10">
      <select class="form-control" id="type" name="type">
        <option value="GET">GET</option>
        <option value="POST">POST</option>
        <option value="DELETE">DELETE</option>
        <option value="PUT">PUT</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="url" class="col-md-2 col-form-label">URl</label>
    <div class="col-md-10">
      <input type="file" class="form-control" name="url" id="url" placeholder="Url">
      <small class="form-text text-danger"><?= form_error("url") ?></small>
    </div>
  </div>
  <div class="form-group row">
    <label for="status" class="col-md-2 col-form-label">Status</label>
    <div class="col-md-10">
      <select class="form-control" id="status" name="status">
        <option value="On">On</option>
        <option value="Off">Off</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-md-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>