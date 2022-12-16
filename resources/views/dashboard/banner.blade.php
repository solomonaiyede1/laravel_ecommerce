<!DOCTYPE html>
<html lang="en">
<head>
<?php
use App\Models\BannerModel;
?>
@include('sidebar')

<div class="container">
    
    @php
        $banner1=BannerModel::all();
    @endphp
    
    @if(session('update'))
         <alert class="alert alert-success" style="width: 100%">Banner Ads updated successfully.</alert>
    @endif
    
    @foreach($banner1 as $banner)
    <br>
    <form method="post" action="/banner">
        @csrf
        <textarea type="text" name="title" class="form-control" style="width: 50%" maxlength="70">{{$banner->title}}</textarea>
        <br>
        <button type="submit" class="btn btn-primary">Edit Banner</button><br><br>
    </form>
    @endforeach
    
      <div class="jumbotron">
          <h3>Digital services</h3>
          <p>Custom software design and supply</p>
        </div>
      </div>
    </div><br>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark container-fluid" style="color: white; padding-left: 20%">
      Copyright(2021) Breetek Integrated Solutions
    </nav>

</div>

</body>
</html>
