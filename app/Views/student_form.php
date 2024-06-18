<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Control</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        h2{
            text-align: center;
            padding-top: 5px;
        }
        .box{
            display: flex;
            justify-content: space-between;
        } 
        .btn-add{
            width: 120;
            height: 40;
            border-radius: 8px 8px;
            border: white;
            color: white;
            font-size: 16;
            background-color: rgb(65,105,225);
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
            width: 50;
        }
        i{
            color: white;
            font-size: 16;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h2>List Student</h2>
            <a href="<?php echo site_url('student/create');?>"><button type="submit" class="btn-add" name="btn-add">+ Add New</button></a>
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
                        <a href="<?php echo base_url('student/edit/'.$row['id'])?>"><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button></a>
                        <a href="<?php echo base_url('student/delete/'.$row['id'])?>"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                    </th>
                </tr>
            <?php endforeach?>
        </table>
    </div>
</body>
</html>