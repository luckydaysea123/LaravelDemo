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
            <div class="de$department">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <a href="../employees">Employees</a>
                    </div>
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Department Details</h2>
                        <a href="/department/create" class="btn btn-success pull-right">Add New Department</a>
                    </div>
                    <table class='table table-bordered table-striped'>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departments as $department)
                            <tr>
                                <td><?php echo $department->id; ?></td>
                                <td><?php echo $department->name; ?></td>
                                <td><?php echo $department->phone; ?></td>
                                <td>
                                    <a href='/department/{{$department->id}}' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                    <a href='/department/edit/{{$department->id}}' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                    <a href='/department/delete/{{$department->id}}' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
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