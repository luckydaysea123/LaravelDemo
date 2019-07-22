<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                        <h2>Create Department</h2>
                    </div>
                    <p>Please fill this form and submit to add Department record to the database.</p>
                    <form action="/department/update/{{$department->id}}" method="POST">
                    {{ csrf_field()}}
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{$department->name}}">
                        </div>
                        <div class="form-group ">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo $department->phone?>">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="/departments" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>