 <div class="col-md-12">
 <div class="col-md-6 col-md-offset-2">
 <div class="panel panel-primary">
 <div class="panel-heading">
   <h3 class="panel-title">Enkripsi Pesan</h3>
 </div>

 <div class="panel-body">
 <form class="form-horizontal" method="POST" action="index.php?rute=proses-e" name="myform" >
 <fieldset>

     <div class="form-group">
     <label for="textArea" class="col-lg-2 control-label">Isi Pesan</label>
     <div class="col-lg-10">
        <textarea name="kata" id="file-content" class="form-control" rows="3" placeholder="Pesan"></textarea>
     </div>
   </div>
   <div class="form-group">
     <label for="inputEmail" class="col-lg-2 control-label">Key</label>
     <div class="col-lg-10">
       <input type="text" name="kunci" class="form-control"  placeholder="Kunci" required>
     </div>
   </div>

   <div class="form-group">
     <div class="col-lg-10 col-lg-offset-2">
       <button type="reset" class="btn btn-danger">Cancel</button>
       <button name="kirim"  class="btn btn-primary" value="Kirim" id="kirim">Enkrip</button>
     </div>
   </div>
   
 </fieldset>
 </form>
 </div>
 </div>
