@extends('layouts.master')


@section('content')

<div class="main">



  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
                {{session('sukses')}}
          </div>
        @endif
        <div class="col-md-12">
          <form action="/user/{{$users->id}}/update" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
              <input name="name" type="text" class="form-control" id="name" aria-describedby="name" value="{{$users->name}}">
              
              <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$users->email}}">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input name="password" type="password" class="form-control" id="exampleInputPassword1" value="{{$users->password}}">
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
          </form>



        </div>
      </div>
    </div>
  </div>
</div>

@stop

@section('contenttt')
<div class="main-content">
  <div class="container-fluid">
    <div class="row">
      

      
<div class="col-12 lg">
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
                {{session('sukses')}}
          </div>
        @endif
        <h1>Edit</h1>
    

        <div class="col-12 lg">
            <form action="/user/{{$users->id}}/update" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                  <input name="name" type="text" class="form-control" id="name" aria-describedby="name" value="{{$users->name}}">
                  
                  <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$users->email}}">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input name="password" type="password" class="form-control" id="exampleInputPassword1" value="{{$users->password}}">
                </div>
                <button type="submit" class="btn btn-warning">Update</button>
              </form>
        </div>
      <!-- Button trigger modal -->
</div>
      </div>
    </div></div></div>
      
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
@endsection
