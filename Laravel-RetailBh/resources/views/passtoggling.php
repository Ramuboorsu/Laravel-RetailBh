<html>
<head>
  
<style>
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

.container{
  padding-top:50px;
  margin: auto;
}
</style>
<script>
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
</head>
<div class="container">
<div class="row">
  <div class="col-md-8 col-md-offset-2">

    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-horizontal" method="" action="">

          <div class="form-group">
            <label class="col-md-4 control-label">Email</label>
            <div class="col-md-6">
              <input type="email" class="form-control" name="email" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Password</label>
            <div class="col-md-6">
              <input id="password-field" type="password" class="form-control" name="password" value="secret">
              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</html>