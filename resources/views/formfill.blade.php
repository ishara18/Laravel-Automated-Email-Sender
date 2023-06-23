<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <div class="text-center">
        <h1>Details Collect Form</h1>
    </div>

<form method="POST" action="collectdata">
@csrf

    <div class="row justify-content-md-center">
        <div class="form-outline col-sm-4">
            <input type="text" id="fname" class="form-control" name="fname" placeholder="First Name"/>
        </div>
    </div>
    <br>

    <div class="row justify-content-md-center">
        <div class="form-outline col-sm-4">
            <input type="text" id="lname" class="form-control" name="lname" placeholder="Last Name"/>
        </div>
    </div>
    <br>

    <div class="row justify-content-md-center">
        <div class="form-outline col-sm-4">
            <input type="email" id="email" class="form-control" name="email" placeholder="Email"/>
        </div>
    </div>
    <br>

  <div class="text-center">
    <button type="submit" class="btn btn-primary " style="padding-left: 50px; padding-right: 50px">Sign in</button>
  </div>

</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                    </div>
@endif
