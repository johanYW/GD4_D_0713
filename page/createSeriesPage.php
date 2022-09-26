<?php

include '../component/sidebar.php'


?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
    solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 
    0.19);" >
    <div class="body d-flex justify-content-between">
        <h4 ><b>CREATE SERIES</b></h4>
    </div>
    <hr>
    <div class="card-body">
        <form action="../process/createSeriesProcess.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input class="form-control" id="name" name="name"  placeholder="Masukkan Nama Series">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Genre</label>
                    <input class="form-control" id="genre" name="genre"  placeholder="Masukkan Genre Series">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Realese</label>
                    <input class="form-control" id="realese" name= "realese"  placeholder="Masukkan Tahun Realese">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Season</label>
                    <input class="form-control" id="season" name="season"  placeholder="Masukkan Season Series">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Episode</label>
                    <input class="form-control" id="episode" name="episode"  placeholder="Masukkan jumlah Episode">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Synopsis</label>
                    <textarea class="form-control" id="synopsis" name="synopsis" aria-label="With textarea" placeholder="Masukkan Synopsis Series"></textarea>
                </div>
                <div class="d-grip gap-2">
                    <a href="../process/createSeriesProcess.php">
                        <button type="submit" class="btn btn-primary" name="createSeries">Create</button></a>
                    
                </div>
            </form>
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