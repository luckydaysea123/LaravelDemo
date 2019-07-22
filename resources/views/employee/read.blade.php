<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Employee</h1>
                    </div>

                    <label>ID:</label>
                    <p class="form-control-static">{{$Employee->id}}</p>


                    <label>Name:</label>
                    <p class="form-control-static">{{$Employee->name}}</p>


                    <label>Phone:</label>
                    <p class="form-control-static">{{$Employee->phone}}</p>

                    <label>Address:</label>
                    <p class="form-control-static">{{$Employee->address}}</p>

                    <label>Gender:</label>
                    <p class="form-control-static">{{($Employee->gender==1)?'Male':'Female'}}</p>

                    <label>Department:</label>
                    <p class="form-control-static">{{$Employee->department->name}}</p>

                    <p><a href="/employees" class="btn btn-primary">Back</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>