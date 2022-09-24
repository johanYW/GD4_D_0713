<?php

include '../component/sidebar.php'


?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
    solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 
    0.19);" >
    <form class="row g-3">
        <div class="col-auto">
            <h4 ><b>PROFIL USER</b></h4>
        </div>
        <br><br>
        <div class="col-auto">
            <div></div>
             <i class="fa fa-gears" style="color: red"></i>
             <a href="../process/editProfilProcess.php" style="color: black; font-weight: bold" >Edit</a>
        </div>

    </form>
    
    <hr>

    <?php
    $query = mysqli_query($con, "SELECT * FROM users WHERE email='{$_SESSION["email"]}'") or
    die(mysqli_error($con));
    if(mysqli_num_rows($query)>0){
        while($dataProfil = mysqli_fetch_assoc($query)){
            
    ?>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input class="form-control" id="name" name="name"  placeholder="name" value="<?php echo $dataProfil['name']; ?>" required >
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Phone Number</label>
        <input class="form-control" id="phonenum" name="phonenum" placeholder="Phone Number" value="<?php echo $dataProfil['phonenum']; ?>" required >
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Membership</label>
        <select class="form-select" aria-label="Default select example" name="membership" id="membership" placeholder="membership" value="<?php echo $dataProfil['membership']; ?>" required disabled>
            <option value="Reguler">Reguler</option>
            <option value="Platinum">Platinum</option>
            <option value="Gold">Gold</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input class="form-control" id="email" name="email"  placeholder="email" value="<?php echo $dataProfil['email']; ?>" required >
    </div>
    <div>
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="password" value="<?php echo $dataProfil['password']; ?>" required >
    </div>

    
    <?php

        }
    }
    ?>
    <br>
    <div class="d-grip gap-2">
        <button type="submut" class="btn btn-primary" name="update">Save</button>
    </div>
 
    </div>
</div>
</aside>

<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
</body>
</html>