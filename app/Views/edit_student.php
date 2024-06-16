<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        h2{
            text-align: center;
            padding-top: 5px;
        }
        .box{
            width: 400px;
            height: 500px;
            margin: 40px auto;
            background-color: while;
            box-shadow: 0px 0px 30px -10px grey; 
            border-radius: 10px 30px;
        }
        .header{
            width: 400px;
            margin: 40px auto;
        }
        .btn{
            width: 367px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Edit Student</h1>
        </div>
        <div class="box">
            <h2>Information Student</h2>
            <form action="<?php echo base_url('student/update/'.$student['id']);?>" method="post" class="form mx-3" >
                <input type="hidden" name="_method" value="PUT">
                <label for=""><h5>username</h5></label>
                <input type="text" name="name" id="name" value="<?= $student['name']?>" class="form-control p-2 my-1" placeholder="Enter username">
                <label for=""><h5>email</h5></label>
                <input type="email" name="email" id="email" value="<?= $student['email']?>" class="form-control p-2 my-1" placeholder="Enter email">
                <label for=""><h5>gender</h5></label> <br>
                <input type="radio" name="gender" id="gender" value="male" class="gender p-2 my-1 mx-2"> male &nbsp;
                <input type="radio" name="gender" id="gender" value="female" class="gender p-2 my-1 mx-2"> female &nbsp; <br>
                <label for=""><h5>major</h5></label>
                <input type="text" name="major" id="major" value="<?= $student['major']?>" class="form-control p-2 my-1" placeholder="Enter major">
                <label for=""><h5>school</h5></label>
                <input type="text" name="school" id="school" value="<?= $student['school']?>" class="form-control p-2 my-1" placeholder="Enter school">
                <button type="submit" class="btn btn-primary my-2" name="submit">Edit</button>
            </form>
        </div>
    </div>
</body>
</html>