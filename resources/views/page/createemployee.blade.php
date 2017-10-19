@extends('app')

@section('title', 'Todo')

@section('content')


<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3" style="margin-top : 50px;">
    <div class="panel panel-default">
        <div class="panel-heading">
          <label>create employee<label>
        </div>
        <div class="panel-body">
        
        {{-- SaveEmployee redirect ke route  --}}
          <form action="/SaveEmployee" method="POST"> 
                {{csrf_field()}}
                <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="myName" >
                <label>Addres</label>
                <input type="text" class="form-control" name="myAdress" >
                <label>Email</label>
                <input type="text" class="form-control" name="myEmail" >
                </div>
                <input type="submit" value="Save" class="btn btn-default" >
              </div>
          </form>
      </div>
</div>
@endsection