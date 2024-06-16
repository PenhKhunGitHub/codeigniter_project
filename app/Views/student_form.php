<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Control</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        h2{
            text-align: center;
            padding-top: 5px;
        }
        .box{
            display: flex;
            justify-content: space-between;
        } 
        .container{
            height: 800;
            width: 1200;
            margin-top: 50px;
        } 
        .table{
            box-shadow: 0px 0px 30px -10px grey; 
            border-radius: 50px 50px;
        }
        .btn{
            width: 100;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h2>List Student</h2>
            <a href="<?php echo site_url('student/create');?>"><button type="submit" class="btn btn-primary my-2" name="btn-add">add</button></a>
        </div>
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Major</th>
                <th>School</th>
                <th>Action</th>
            </tr>
            <?php foreach($student as $row): ?>
                <tr>
                    <th><?php echo $row['id'];?></th>
                    <th><?php echo $row['name'];?></th>
                    <th><?php echo $row['email'];?></th>
                    <th><?php echo $row['gender'];?></th>
                    <th><?php echo $row['major'];?></th>
                    <th><?php echo $row['school'];?></th>
                    <th>
                        <a href="<?php echo base_url('student/edit/'.$row['id'])?>"><button type="button" class="btn btn-primary">Edit</button></a>
                        <a href="<?php echo base_url('student/delete/'.$row['id'])?>"><button type="button" class="btn btn-danger">Delete</button></a>
                    </th>
                </tr>
            <?php endforeach?>
        </table>
    </div>
</body>
</html>