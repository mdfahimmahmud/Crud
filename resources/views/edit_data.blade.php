<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container">


        <a href="{{ url('/') }}" class="btn btn-primary my-4">Show Data</a>


     


        <form action="{{ url('store_data') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="{{$editdata->name}}" class="form-control" placeholder="Enter your name">

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="text" name="email" value="{{$editdata->email}}" class="form-control" placeholder="Enter your email">

                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror




            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="phone" name="phone" value="{{$editdata->phone}}" class="form-control" placeholder="Enter your phone number">

                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror




            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" value="{{$editdata->address}}" class="form-control" placeholder="Address">

                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror




            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
