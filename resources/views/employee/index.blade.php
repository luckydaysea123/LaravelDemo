<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper {
            width: 650px;
            margin: 0 auto;
        }

        .page-header h2 {
            margin-top: 0;
        }

        table tr td:last-child a {
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-100">
                    <div class="page-header clearfix">
                        <a href="../departments/">Department</a>
                    </div>
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Employees Details</h2>
                        <a href="/employee/create" class="btn btn-success pull-right">Add New employee</a>
                    </div>
                    <table class='table table-bordered table-striped'>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                            <tr>
                                <td><?php echo $employee->id; ?></td>
                                <td><?php echo $employee->name; ?></td>
                                <td><?php echo $employee->phone; ?></td>
                                <td><?php echo $employee->address; ?></td>
                                <td><?php echo ($employee->gender==1)?'Male':'Female'; ?></td>
                                <td><?php echo $employee->department['name']; ?></td>
                                <td>
                                    <a href='/employee/{{$employee->id}}' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                    <a href='/employee/edit/{{$employee->id}}' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                    <a href='/employee/delete/{{$employee->id}}' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>