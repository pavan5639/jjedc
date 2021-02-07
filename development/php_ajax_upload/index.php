<!DOCTYPE html>
 <html>
 <head>
  <title></title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

   <!-- jquery links -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   <h3 align="center">Ajax File Upload Progress Bar using PHP JQuery</h3>
   <br />
   <div class="panel panel-default">
    <div class="panel-heading"><b>Ajax File Upload Progress Bar using PHP JQuery</b></div>
    <div class="panel-body">
     <form id="uploadImage" action="upload.php" method="post">
      <div class="form-group">
       <label>File Upload</label>
       <input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png" />
      </div>
      <div class="form-group">
       <input type="submit" id="uploadSubmit" value="Upload" class="btn btn-info" />
      </div>
      <div class="progress">
       <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div id="targetLayer" style="display:none;"></div>
     </form>
     <div id="loader-icon" style="display:none;"><img src="loader.gif" /></div>
    </div>
   </div>
  </div>
  <script>
  
$(document).ready(function(){
 $('#uploadImage').submit(function(event){
  if($('#uploadFile').val())
  {
   event.preventDefault();
   $('#loader-icon').show();
   $('#targetLayer').hide();
   $(this).ajaxSubmit({
    target: '#targetLayer',
    beforeSubmit:function(){
     $('.progress-bar').width('50%');
    },
    uploadProgress: function(event, position, total, percentageComplete)
    {
     $('.progress-bar').animate({
      width: percentageComplete + '%'
     }, {
      duration: 1000
     });
    },
    success:function(){
     $('#loader-icon').hide();
     $('#targetLayer').show();
    },
    resetForm: true
   });
  }
  return false;
 });
});
</script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

 </body>
</html>