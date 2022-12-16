<?php
use App\Models\User;
use App\Models\Order;
?>
<!DOCTYPE html>
<html lang="en">
<head>
@include('sidebar')
<div class="container">
  <h2>Registered Users</h2>
@php
$user=User::paginate(10);
@endphp
  
<div class="container" style="margin-left: 2%">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email Address</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
  @foreach($user as $users)
    <tr>
      <td>{{$users->id}}</td>  
      <td>{{$users->name}}</td>
      <td>{{$users->phone}}</td>
      <td>{{$users->email}}</td>
      <td>{{$users->role}}</td>
    </tr>
@endforeach
  </tbody>
</table>
<div class="pag" style="margin-left: 80%">{{ $user->links('pagination::bootstrap-4') }}</div>
</div>

</body>
</html>
