<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>UPDATE</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>UPDATE</h1>
            <div>
            <a href="login.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        
        <form action="process.php" method="post">
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="username" placeholder="username:">
            </div>
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="email" placeholder="email:">
            </div>
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="password" placeholder="password:">
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" value="Add Book" class="btn btn-primary">
            </div>
        </form>
        
        
    </div>
</body>
</html>