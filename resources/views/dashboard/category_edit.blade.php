 @include('sidebar')
  <!-- Button to Open the Modal -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
<div class="container">
    <div class="alert alert-info">Edit category details below</div>
    <div style="width: 50%">
        
        @foreach($category as $categories)
      <form method="post" action="{{url('/edit-category', $categories->id)}}" >
          {{ method_field('PUT') }}
         @csrf
        <input type="text" class="form-control" name="category_name" value={{$categories->category_name}} /><br>
        <button type="submit" class="btn btn-primary btn-lg">Update</button>
      </form>
      @endforeach
    </div>
</div>
</body>