<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Employee Data</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4">Insert Employee Data</h2>
  <form action="/create" method="POST">
    <div class="mb-3">
      <label for="fname" class="form-label">First Name</label>
      <input type="text" class="form-control" id="fname" name="fname" required>
    </div>
    <div class="mb-3">
      <label for="mname" class="form-label">Middle Name</label>
      <input type="text" class="form-control" id="mname" name="mname">
    </div>
    <div class="mb-3">
      <label for="lname" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="lname" name="lname" required>
    </div>
    <div class="mb-3">
      <label for="gender" class="form-label">Gender</label>
      <select class="form-select" id="gender" name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="mail" class="form-label">Email</label>
      <input type="email" class="form-control" id="mail" name="mail" required>
    </div>
    <div class="mb-3">
      <label for="mobile_no" class="form-label">Mobile Number</label>
      <input type="text" class="form-control" id="mobile_no" name="mobile_no" required>
    </div>
    <div class="mb-3">
      <label for="date_of_birth" class="form-label">Date of Birth</label>
      <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
    </div>
    <div class="mb-3">
      <label for="photograph" class="form-label">Photograph</label>
      <input type="file" class="form-control" id="photograph" name="photograph">
    </div>
    <div class="mb-3">
      <label for="status" class="form-label">Status</label>
      <input type="number" class="form-control" id="status" name="status" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<div class="container mt-5">
  <a href="add-address" class="btn btn-primary">Add Address</a>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
