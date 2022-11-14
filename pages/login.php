 <!-- bootstrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 <style>
     <?php include "../styles/login.css" ?>
 </style>

 <div class="container row m-auto">
     <div class="col-6">
         <img src="../img/HCMUT_official_logo.png" alt="HCMUT logo" class="mx-auto d-block">
     </div>

     <div class="col-6">
         <div class="container">
             <h1 class="text-center">Log in</h1>
             <form method="POST" action="../utils/login_handling.php">
                 <div class="mb-3">
                     <label for="username" class="form-label">Username: </label></label>
                     <input type="text" name="username" class="form-control" id="username">
                 </div>
                 <div class="mb-3">
                     <label for="password" class="form-label">Password:</label>
                     <input type="password" name="password" class="form-control" id="password">
                 </div>
                 <button type="submit" name="login" class="btn btn-primary submit">Log in</button>
             </form>
         </div>
     </div>
 </div>