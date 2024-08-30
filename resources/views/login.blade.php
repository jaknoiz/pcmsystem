<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="card mt-5 w-50 mx-auto">
            <h6 class="mx-3 mt-3"> ระบบจัดทำเอกสารจัดซื้อจัดจ้างอัตโนมัติ คณะวิทยาศาสตร์และนวัตกรรมดิจิทัล</h6>
            <div class="card-body">
                
           
        <form action= "{{ url('login') }}" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" name="email"  value="{{ old('email') }}">
              </div>
              <div class="mb-3">
                <label for="passwordLabel" class="form-label">Password</label>
                <input type="password" class="form-control" id="passwordLabel" name="password"  value="{{ old('email') }}">
              </div>
        </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>