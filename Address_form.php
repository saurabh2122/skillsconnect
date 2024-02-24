<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Address</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2>Add Address</h2>
    <form action="/add-address" method="post">
      <div class="mb-3">
        <label for="add_line1" class="form-label">Address Line 1</label>
        <input type="text" class="form-control" id="add_line1" name="add_line1">
      </div>
      <div class="mb-3">
        <label for="add_line2" class="form-label">Address Line 2</label>
        <input type="text" class="form-control" id="add_line2" name="add_line2">
      </div>
      <div class="mb-3">
        <label for="Country" class="form-label">Country</label>
        <input type="text" class="form-control" id="Country" name="Country">
      </div>
      <div class="mb-3">
        <label for="state" class="form-label">State</label>
        <input type="text" class="form-control" id="state" name="state">
      </div>
      <div class="mb-3">
        <label for="pincode" class="form-label">Pincode</label>
        <input type="text" class="form-control" id="pincode" name="pincode">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
