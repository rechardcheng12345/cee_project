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
      <div class="container">
        <input type="text" class="form-control" placeholder="Date of Event">
        <input type="text" class="form-control" placeholder="Event Title">
        <input type="text" class="form-control" placeholder="Fee (RM)">
        <input type="text" class="form-control" placeholder="Discount (%)">
        <input type="text" class="form-control" placeholder="Category">
        <input type="text" class="form-control" placeholder="Event Organiser">
        <a href="javascript:history.go(-1)" type="confirm" class="btn btn-primary">Done</a>
        <a href="javascript:history.go(-1)" type="cancel" class="btn btn-primary">Cancel</a>
      </div>
    </div>
  </div>
</body>
