<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>PHP project</title>
</head>

<body>
    
    
    <form action="process.php" method="post" enctype="multipart/form-data">

    <div class="icon">
        <i class="glyphicon glyphicon-user"></i>
    </div>

        <div class="form-group">
            <label for="Firstname">نام</label>
            <input type="text" class="form-control" id="Firstname" placeholder="Firstname" name="frm[name]">
        </div>

        <div class="form-group">
            <label for="Lastname">نام خانوادگی</label>
            <input type="text" class="form-control" id="Lastname" placeholder="Lastname" name="frm[lastname]">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">ایمیل</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email" name="frm[email]">
            <small id="emailHelp" class="form-text text-muted">لطفا ایمیل خود را با رعایت قالب ایمیل وارد کنید</small>
        </div>

        <div class="form-group">
            <label for="pic">عکس</label>
            <input type="file" class="form-control" name="image">

        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">رمز عبور</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">با قوانین شرکت موافقم</label>
        </div>

        <button type="submit" class="btn btn-primary">ثبت نام</button>
    </form>

</body>

</html>