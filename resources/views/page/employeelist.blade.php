
@extends('app')

@section('title', 'Todo')

@section('content1')
< <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Employee List</h3>
        </div>
        <div class="panel-body">
          <table class="table table-striped table-bordered">
            <tr>
              <th>Name</th>
              <th>Adress</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
    
    
            @foreach($employees as $es)

                <tr>
                    <td>{{$es->Name}}</td> 
                    <td>{{$es->Adress}}</td> 
                    <td>{{$es->Email}}</td> 
                    
                    <td> 
                     <form action="/DeleteEmployee" method="POST"> 
                      {{csrf_field()}}
                      <input type="hidden" name="id" value="{{ $es->id }}" >
                      <button type="submit" class="btn btn-default">Delete</button>
                    </form>
                    </td>
                </tr>
        
             @endforeach
             <a href="/CreateEmployee" class="btn btn-default">Create Employee<a/>
          </table>
        </div>
      </div>
    
    </div>

@endsection