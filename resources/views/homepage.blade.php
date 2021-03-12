<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container">

		<div class="row row-cols-1 row-cols-md-4 g-4">
			@foreach($show as $a)
  <div class="col">
    <div class="card shadow-lg">
      <img src="{{asset('uploads/products')}}/{{$a->product_image}}" class="card-img-top" alt="..." title="{{$a->product_name}}" height="200">

      <div class="card-body">
        <h5 class="card-title">{{$a->product_name}}</h5>
       
      </div>
    </div>
  </div>
  @endforeach
</div>

	</div>

</body>
</html>