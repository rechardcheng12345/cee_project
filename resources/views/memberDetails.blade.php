<html>
<header>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</header>
<title>Member</title>
<body>
  <div class="container">
    <div>
      @include('navbar')
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Date Joined</th>
          <td scope="col">7/10/2020</td>
        </tr>
        <tr>
          <th scope="col">Name</th>
          <td scope="col">Choo Jing Yuan</td>
        </tr>
        <tr>
          <th scope="col">I.C No./ PassportNo.</th>
          <td scope="col">940000-00-0000</td>
        </tr>
        <tr>
          <th scope="col">Address</th>
          <td scope="col">Sg Long</td>
        </tr>
        <tr>
          <th scope="col">Postcode</th>
          <td scope="col">43200</td>
        </tr>
        <tr>
          <th scope="col">State</th>
          <td scope="col">Selangor</td>
        </tr>
        <tr>
          <th scope="col">Mobile No.</th>
          <td scope="col">012-3456789</td>
        </tr>
        <tr>
          <th scope="col">Email</th>
          <td scope="col">sampleEmail@gmail.com</td>
        </tr>
      </thead>
    </table>
    <a href="addProgrammeForm" type="addProgramme" class="btn btn-primary">Add Programme</a>
    <a href="javascript:history.go(-1)" type="back" class="btn btn-primary">Back</a>
  </div>
</body>
