<?php

    session_start();
    if(isset($_POST['updateSeries'])){
        include('../db.php');


        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $realese = $_POST['realese'];
        $season = $_POST['season'];
        $episode = $_POST['episode'];
        $synopsis = $_POST['synopsis'];
        $id = $_POST['id'];

        $query = mysqli_query($con, "UPDATE  series SET name='$name', genre='$genre', realese='$realese', season='$season', episode='$episode' ,synopsis='$synopsis' WHERE id = '$id'") or
        die(mysqli_error($con));


            if($query){
                echo
                '<script>
                alert("Update Success"); 
                window.location = "../page/listSeriesPage.php"
                </script>';
                
            }else{
                echo
                '<script>
                alert("Update failed"); 
                window.location = "../page/listSeriesPage.php"
                </script>';
            }

    }else{
        echo
        '<script>
        
        window.history.back()
        </script>';
    }

    ?>