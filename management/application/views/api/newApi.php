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
    <label for="url" class="col-md-2 col-form-label">File</label>
    <div class="col-md-1">
      <button type="button" class="btn btn-primary" id="btnFile">Check</button>
    </div>
    <div class="col-md-9">
      <select class="form-control" name="file" id="file">
        <?php foreach ($list1 as $l) { ?>
          <option value="<?php echo $l; ?>"><?php echo $l; ?> </option>
        <?php } ?>
        <?php foreach ($list2 as $l) { ?>
          <option value="<?php echo $l; ?>"><?php echo $l; ?> </option>
        <?php } ?>
        <?php foreach ($list3 as $l) { ?>
          <option value="<?php echo $l; ?>"><?php echo $l; ?> </option>
        <?php } ?>
    </div>
    </select>
  </div>
  </div>
  <div class="form-group row">
    <label for="url" class="col-md-2 col-form-label">Url</label>
    <div class="col-md-10">
      <input type="text" class="form-control" name="url" id="url" placeholder="Tekan tombol Check">
      <small class="form-text text-danger"><?= form_error("apiName") ?></small>
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






<script type="text/javascript">
  function UpperCaseFirstLetter(str) {
    return str.replace(/\w\S*/g, function(txt) {
      return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
    });
  }

  $(document).ready(function() {
    $('#btnFile').click(function() {
      var file = $("#file").val();
      var type = $("#type").val();

      var split = file.split("/");
      var split2 = split[2].split(".");

      if (type == "GET") {

        $("#url").val("http://localhost/pkl/tugas/server/" + split[1] + "/" + split2[0]);

      } else if (type == "POST") {

        $("#url").val("http://localhost/pkl/tugas/client/" + split[1] + "/" + split2[0] + "_api/tambah");

      } else if (type == "DELETE") {

        $("#url").val("http://localhost/pkl/tugas/client/" + split[1] + "/" + UpperCaseFirstLetter(split[1]) + "Master/" + split2[0]);

      } else if (type == "PUT") {

        $("#url").val("http://localhost/pkl/tugas/client/" + split[1] + "/" + UpperCaseFirstLetter(split[1]) + "Master/" + split2[0]);

      }
    });
  });
</script>