$(document).ready(function(){
  $("#addfoto").change(function(){
    var reader = new FileReader();
    reader.onload = function(e) {
      $("#foto").attr('style', "width: 200px; height: 190px;");
      $("#foto").attr('src', e.target.result);
    }
    reader.readAsDataURL(this.files[0]);
  });

});
