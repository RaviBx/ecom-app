@extends('master')
@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 offset-4 mt-10 pt-10">
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label"><b>Email address</b></label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                 
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label"><b>Password</b></label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>

@endsection



