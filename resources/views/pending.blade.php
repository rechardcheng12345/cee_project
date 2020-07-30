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
        <div class="row">
          <table class="table">
            <div class="nav-link">
              <a href="pending">Pending</a>
            </div>
            <div class="nav-link">
              <a href="#">Master List</a>
            </div>
            <div>
              <a class="nav-link dropdown-toggle" href="#" id="raceDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Race
              </a>
              <div class="dropdown-menu" aria-labelledby="raceDropdown">
                <a class="dropdown-item" href="#">Malay</a>
                <a class="dropdown-item" href="#">Chinese</a>
                <a class="dropdown-item" href="#">Indian</a>
                <a class="dropdown-item" href="#">Others</a>
              </div>
            </div>
            <div>
              <a class="nav-link dropdown-toggle" href="#" id="stateDropDown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                State
              </a>
              <div class="dropdown-menu" aria-labelledby="stateDropDown">
                <a class="dropdown-item" href="#">Johor</a>
                <a class="dropdown-item" href="#">Kelantan</a>
                <a class="dropdown-item" href="#">Melaka</a>
                <a class="dropdown-item" href="#">Perak</a>
              </div>
            </div>
            <div>
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Category of Participant
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Public</a>
                <a class="dropdown-item" href="#">UTAR Student</a>
                <a class="dropdown-item" href="#">UTAR Staff</a>
                <a class="dropdown-item" href="#">UTAR Alumni</a>
              </div>
            </div>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </table>
        </div>
        <div>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Membership No.</th>
                <th scope="col">Date Joined</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile No.</th>
                <th scope="col">Email</th>
                <th scope="col">Category</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="col">1</th>
                <th scope="col">1500982</th>
                <th scope="col">7/10/2020</th>
                <th scope="col"><a href="memberDetails">Choo Jing Yuan</a></th>
                <th scope="col">012-3456789</th>
                <th scope="col">sampleEmail@gmail.com</th>
                <th scope="col">public</th>
                <th scope="col"><button>Approve</button></th>
                <th scope="col"><button>Decline</button></th>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
