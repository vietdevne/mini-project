<form action="?act=login" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input name="remember" type="checkbox" class="form-check-input" id="exampleCheck1" checked>
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
  </div>
  <p class="text-danger"><?=$loginErr?></p>
  <button name="login" type="submit" class="btn btn-primary">Login</button>
</form>

