<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud</title>
</head>

<body>

    <div class="container">
        <a href="{{ url('add_data') }}" class="btn btn-primary my-4">Add Data</a>


        @if(session()->has('msg'))

        <div class="alert alert-success">
 
     
        {{session()->get('msg')}}
 
      </div>
 
        @endif
 

        <table class="table table-success table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Serial No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>


               @foreach($showdata as $key=>$data)




                <tr>

                    <td>{{$key+1}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->address}}</td>
                    <td>

                        <a href="{{url('/edit_data/'.$data->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{url('/delete_data/'.$data->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                    </td>

                </tr>

                @endforeach

            </tbody>
        </table>

        {{$showdata->links()}}
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
