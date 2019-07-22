
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="depar$department">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Department</h1>
                    </div>
                    <div class="form-group">
                        <label>id</label>
                        <p class="form-control-static">{{$department->id}}</p>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <p class="form-control-static">{{$department->name}}</p>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <p class="form-control-static">{{$department->phone}}</p>
                    </div>
                    <p><a href="/departments" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>