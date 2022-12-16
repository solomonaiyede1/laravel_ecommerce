<?php
use App\Models\User;
use App\Models\Order;
?>
@include('sidebar')
<div class="container">
  <center><h5 class="text-info" style="font-weight: 600; font-family: sans">Registered Users</h5></center>
@php
$user=User::paginate(10);
@endphp
  
<div class="container">
<table class="table table-hover table-responsive table-condensed">
    <thead>
        <tr class="bg-info" style="color: white">
          <th>User ID</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Email Address</th>
          <th>Role</th>
          <th>Edit Status</th>
        </tr>
    </thead>
  @foreach($user as $users)
  <tbody>
    <tr class="bg-light">
      <td>{{$users->id}}</td>  
      <td maxLength="20">{{$users->name}}</td>
      <td maxLength="20">{{$users->phone}}</td>
      <td maxLength="20">{{$users->email}}</td>
      <td>
          @if($users->role=='user')
          <button class="btn btn-danger btn-sm">{{$users->role}}</button>
          @elseif($users->role=='admin')
          <button class="btn btn-success btn-sm">{{$users->role}}</button>
          @endif
       </td>
      <td>
          <form method="post" action="{{url('/users', $users->id)}}">
             @csrf
             @method('PUT')
             @if($users->role=='user')
              <input type="hidden" name="role" value="admin" />
            <button type="submit" class="btn btn-info btn-sm">upgrade to admin</button>
            @elseif($users->role=='admin')
            <input type="hidden" name="role" value="user" />
            <button type="submit" class="btn btn-danger btn-sm">downgrade to user</button>
            @endif
          </form>
     </td>
    </tr>
   </tbody>
@endforeach
</table>
</div>
<div class="pag" style="margin-left: 10%">{{ $user->links('pagination::bootstrap-4') }}</div>
</div>

</body>
</html>
