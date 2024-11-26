<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  <h3 class="mb-5">Login</h3>
                <form action="" method="POST">
                  @csrf
      
                  <div class="position-relative d-flex align-items-center mb-3">
                    <input type="text" id="username" name="username" class="form-control " required
                        placeholder="Username">
                    <i class="bi-person position-absolute me-2 end-0"></i>
                </div>
      
                <div class="position-relative d-flex align-items-center">
                  <input type="password" name="password" id="password" class="form-control pe-4"
                      placeholder="Password">
                  <i class="bi-eye-slash position-absolute end-0 me-2" style="cursor: pointer;"></i>
              </div>
              <button class="btn btn-primary form-control mt-4">Login</button>
                </form>
                </div>               
              </div>
            </div>
          </div>
        </div>
      </section>
      <script>
        document.querySelector("i.bi-eye-slash").addEventListener("click",()=>{
            let pw = document.getElementById('password')
            if(pw.type == "password"){
                pw.type ="text"
            }else{
                pw.type = "password"
            }
        })
      </script>
</body>
</html>