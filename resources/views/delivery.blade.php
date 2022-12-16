<!DOCTYPE html>
<html lang="en">
<head>
  <title>Breetek Integrated Solutions-shopping cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<body>
    <div class="alert alert-success">Pay on delivery order was successful. You will be contacted between 3-5 working days.</div>
    <div class="alert alert-success">Thanks for shopping with Breetek Integrated Solutionss.</div>
        <div class="alert alert-info" style="color:white">Redirecting after 5 seconds...</div>
      <center>
        <a href="{{url('/')}}" class="btn btn-success">Return back to Home page</a>
    </center>

    <script>
      window.onload=setTimeout(function(){
        window.location.href="/";
      }, 5000);
    </script>
</body>

</html>