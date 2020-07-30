<html>
<title>Application Form</title>
<header>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</header>
<form action = "/create" method = "post">
  <div class="container">
    <h1>Application Form</h1>
    <div>
      <p>Categories of Applicant:</p>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="category" id="public" value="public" checked>
        <label class="form-check-label" for="public">
          Public
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="category" id="utarStudent" value="utarStudent">
        <label class="form-check-label" for="utarStudent">
          UTAR Student
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="category" id="utarStaff" value="utarStaff">
        <label class="form-check-label" for="utarStaff">
          UTAR Staff
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="category" id="utarAlumni" value="utarAlumni">
        <label class="form-check-label" for="utarAlumni">
          UTAR Alumni
        </label>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <input type="text" class="form-control" name="name" placeholder="Name">
      </div>
      <div class="col">
        <input type="text" class="form-control" name="nric/passport" placeholder="NRIC No./ Passport No.">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <input type="email" class="form-control" placeholder="Email" name="email">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Password" name="password">
      </div>
    </div>
    <input type="text" class="form-control" placeholder="Mobile" name="mobile">
    <p>Race:</p>
    <div class="race">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="race" id="malay" value="malay">
        <label class="form-check-label" for="malay">
          Malay
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="race" id="indian" value="indian">
        <label class="form-check-label" for="indian">
          Indian
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="race" id="chinese" value="chinese">
        <label class="form-check-label" for="chinese">
          Chinese
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="race" id="others" value="others">
        <label class="form-check-label" for="others">
          Others
        </label>
      </div>
    </div>
    <div>
      <input type="text" class="form-control" placeholder="Address" name="address">
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Postcode" name="postcode">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="State" name="state">
        </div>
      </div>
    </div>
    <p></p>
    <input type="submit" class="btn btn-primary"/>
    <a href="/" type="cancel" class="btn btn-primary">Cancel</a>
  </div>
</form>
</html>
