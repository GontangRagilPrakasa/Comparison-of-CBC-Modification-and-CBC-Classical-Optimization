 <div class="col-md-12 col-md-offset-2">
  <div class="col-md-8">

  <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Dekripsi Pesan</h3>
  </div>
  <div class="panel-body">
  <form class="form-horizontal" method="POST" action="index.php?rute=proses-d" name="myform" >
    <fieldset>

    <div class="form-group">
      <label  class="col-lg-4 control-label">Chipertext  CBC Modifikasi</label>
      <div class="col-lg-8">
          <textarea name="kata1" id="file-content1" class="form-control" rows="3"></textarea>
      </div>
    </div>
    <!-- <div class="form-group">
        <label  class="col-lg-4 control-label">Chipertext  CBC</label>
        <div class="col-lg-8">
            <textarea name="kata2" id="file-content" class="form-control" rows="3"></textarea>
        </div>
      </div> -->
      
    <div class="form-group">
      <label for="inputEmail" class="col-lg-4 control-label">Key</label>
      <div class="col-lg-8">
        <input type="text" name="kunci" class="form-control"  placeholder="masukan KEY" required>
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-8 col-lg-offset-4">
        <button type="reset" class="btn btn-danger">Cancel</button>
        <button name="kirim"  class="btn btn-primary" value="Kirim" id="kirim">Dekrip</button>
      </div>
    </div>
  </fieldset>
  </form>
  </div>
  </div>
