<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Login</title>
  <meta charset="utf-8">
  <link href="logo.png" rel="icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<button style="background-color:red" onclick="window.close()">Close page</button>
<hr>


<center><?php echo "custemer_loginId_Creation";?></center>
<hr>

<div class="container mt-3">
<form  action="cretver.php" method="post" class="was-validated">
    <div class="mb-3 mt-3">
      <label for="uname" class="form-label">UserName:</label>
      <input type="text" class="form-control" id="uname" placeholder="Create username" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3 mt-3">
      <label for="uname" class="form-label">UserId:</label>
      <input type="text" class="form-control" id="uname" placeholder="Create userid" name="uid" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Password:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Create password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
      <label class="form-check-label" for="myCheck">I agree </label>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
</div>

</body>
<script type = "text/javascript" >
function preventBack() { window.history.forward(); }
setTimeout("preventBack()", 100);
window.onunload = function () { null };
</script>
</html>
