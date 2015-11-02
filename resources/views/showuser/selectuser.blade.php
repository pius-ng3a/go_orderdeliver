@extends('app')
@section('header')
    @include('menu')
@stop
@section('content')
    <div class="container container-fluid">
        <br>
        <div class="row row-offcanvas row-offcanvas-right" >
            <div class="col-md-12 col-sm-12">
     {!! Form::open(['url'=>'admin/dashboard/showuser/selectuser', 'method'=>'post' ,'class'=>'form-inline','role'=>'form']) !!}
      <div class="form-group pull-center">   
       <select name="sort" class="form-control  input-lg">
          <option >Sort Users by</option>
          <option value="R">Retailers</option>
          <option value="w">Wholesallers</option>
          <option value="P">Producers</option>
          <option "C">Buyers</option>
        </select>  
   
     </div>
     &nbsp; &nbsp; &nbsp;

    {!! Form::submit('Get Users',['id'=>'register-submit', 'class'=>'btn btn-info pull-center']) !!}


    {!! Form::close() !!}
</div>
        </div><!--/span-->

  
 <br> 
       
      <dible-respgsive">
                    <table id="example1" class="table table-bordered table-striped">

                        @if(Session::has('delete'))
                            <div class="alert alert-danger">
                                {{Session::get('delete')}}
                            </div>
                        @endif
                        <thead>
                        <tr style="background-color: #0088CC">
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email address</th>
                            <th>Phone Number</th>
                             <th>Delete User</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name  }}</td>
                            <td>{{ $user->email  }}</td>
                            <td>{{ $user->user_phone  }}</td>
                       
                          
                             <td><a href="{{URL::to('users/'.$user->user_id)}}" class="btn btn-danger">Remove</a></td>
                        

                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr style="background-color: #0088CC" >
                            <th colspan="4">Total Users</th>
                            <th>{{ count($users) }}</th>
                        </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
<hr>
<hr>
</div>


@stop
@section('footer')
    @include('footer')
@stop