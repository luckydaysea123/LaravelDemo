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
                        <h2>Edit Employee</h2>
                    </div>
                    <p>Please edit this form and submit to update employee record to the database.</p>
                    <form action="/employee/update/{{$employee->id}}" method="POST">
                    {{ csrf_field()}}
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{$employee->name}}">
                        </div>
                        <div class="form-group ">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo $employee->phone?>">
                        </div>
                        
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="{{$employee->address}}">
                        </div>
                        <label>Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value=1 <?php if ($employee->gender==1)echo 'checked';?>
                            <label class="form-check-label" for="gender1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value=0 <?php if ($employee->gender==0)echo 'checked';?>> 
                            <label class="form-check-label" for="gender2">
                                Female
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Department</label>
                            <select class="form-control" name='department_id'>
                                @foreach ($employee->departments as $department)
                                <option <?php if ($employee->department_id==$department->id)echo 'selected';?> value="{{$department->id}} ">{{$department->name}}</option >
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="/employees" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>