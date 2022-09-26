<?php


    if(isset($_POST['createSeries'])){
        include('../db.php');


        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $realese = $_POST['realese'];
        $season = $_POST['season'];
        $episode = $_POST['episode'];
        $synopsis = $_POST['synopsis'];

        $query = mysqli_query($con,"INSERT INTO series(name, genre, realese, season, episode, synopsis)
            VALUES
            ('$name', '$genre', '$realese', '$season', '$episode','$synopsis')")
                or die(mysqli_error($con));

            if($query){
                echo
                '<script>
                alert("Create Success"); 
                window.location = "../page/listSeriesPage.php"
                </script>';
                
            }else{
                echo
                '<script>
                alert("Create Success"); 
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