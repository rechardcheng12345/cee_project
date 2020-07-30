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
    <div class="container">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Event Date</th>
            <th scope="col">Name</th>
            <th scope="col">Fee(RM)</th>
            <th scope="col">Discount(%)</th>
            <th scope="col">Category</th>
            <th scope="col">Remarks</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="col">1</th>
            <th scope="col">7/10/2020</th>
            <th scope="col"><a href="memberDetails">Choo Jing Yuan</a></th>
            <th scope="col">500.00</th>
            <th scope="col">-</th>
            <th scope="col">public</th>
            <th scope="col">...</th>
          </tr>
        </tbody>
      </table>
      <a href="" type="back" class="btn btn-primary">Add</a>
      <a href="javascript:history.go(-1)" type="back" class="btn btn-primary">Back</a>
    </div>
  </div>
</body>
