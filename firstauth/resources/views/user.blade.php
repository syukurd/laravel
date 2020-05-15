@extends('layouts.master')
@section('content')

<div class="main">



  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          
          <!-- TABLE HOVER -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Hover Row</h3>
              <div class="right">
                
                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" ><i class="lnr lnr-plus-circle"></i></button>
    
              </div>
            </div>
            
            
            <div class="panel-body">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data_user as $user)
                  <tr>
                  <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                    <a href="/user/{{$user->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/user/{{$user->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            
            

          

          </div>
          <!-- END TABLE HOVER -->
        </div>
      </div>
     
    </div>
  </div>
  <!-- END MAIN CONTENT -->
</div>




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="/create" method="post">
              @csrf
              <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                <input name="name" type="text" class="form-control" id="name" aria-describedby="name">
                
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>





@stop
    

@section('content2')
    

      @if(session('sukses'))
      <div class="alert alert-success" role="alert">
         {{session('sukses')}}
        </div>
      @endif      
        
    

        <div class="col-6">
  

              
            <!-- Button trigger modal -->

  <!-- Modal -->

  
        </div>

{{-- 
    <table class="table table-hover">
        
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>aksi</td>
        </tr>


   
        @foreach ($data_user as $data)
        <tr>
            <td>{{$data->id}}</td>    
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td><a href="/user/{{$data->id}}/edit" class="btn btn-warning sm">Edit</a>
          <a href="/user/{{$data->id}}/delete" class="btn btn-danger sm">delete</a>
        
        </td>
        </tr>    
        @endforeach
        


    </table> --}}
 @endsection