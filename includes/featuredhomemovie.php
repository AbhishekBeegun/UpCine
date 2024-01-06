<?php

$movieTitle = 'Animal';

$apiUrl = "http://www.omdbapi.com/?apikey=$apikey&t=" . urlencode($movieTitle);


$movieDataJson = $response = file_get_contents($apiUrl);

$movieData = json_decode($movieDataJson, true);

$title = $movieData['Title'];
$description = $movieData['Plot'];
$actors = $movieData['Actors'];

// <img src='{$movieData['Poster']}' class='img-fluid' />
$htmlContent = "
<section class='featuredmovie'>
    <img src='https://cinema.mu/wp-content/uploads/2023/11/animal-slider.jpg' class='img-fluid' />

    <div class='fm_details'>
        <h3>{$title}</h3>
        <p class='desc'>{$description}</p>

        <p>Starring: <span>{$actors}</span></p>

        <a href=''>Watch</a>
    </div>
</section>
";
?>

<?php echo $htmlContent; ?>

<!-- 
<section class='featuredmovie'>
    <img src='https://cinema.mu/wp-content/uploads/2023/11/animal-slider.jpg' class='img-fluid' />

    <div class='fm_details'>
        <h3>Animal</h3>
        <p class='desc'>A son’s love for his father. Often away due to work the father is unable to comprehend the intensity of his son’s love. Ironically, this fervent love and admiration for his father and family creates conflict between the father and son.</p>

        <p>Starring : <span>Ranbir Kapoor, Rashmika Mandanna, Bobby Deol</span> </p>

        <a href=''>Watch</a>
    </div>
</section> -->

<style>
    .featuredmovie {
        height :300px;
        background-color : red;
        margin-top : 20px;
        position : relative;
    }

    .featuredmovie img {
        height : 100%;
        width: 100%;
        object-fit : cover;
    }
    .featuredmovie .fm_details {
        position : absolute;
        top:0;
        width: 80%;
        height : 100%;
        background: rgb(0,0,0);
        background: linear-gradient(90deg, rgba(0,0,0,1) 45%, rgba(0,212,255,0) 100%);
        color : #fff;
        padding : 10px 30px;
        display:flex;
        flex-direction : column;
        justify-content : center;
    }

    .featuredmovie .fm_details h3 {
        font-size :30px;
        margin-bottom : 15px;
    } 

    .featuredmovie .fm_details .desc {
        width: 70%;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3; /* From which line on to truncate */
        overflow: hidden;
    }

    .featuredmovie .fm_details a {
        background-color : red;
        color : #fff;
        padding : 5px 15px;
        /* border-radius : 5px; */
        width: 90px;
        text-align : center;
        text-decoration : none;
        font-size : 20px;
        font-weight : 500
    }
    .featuredmovie .fm_details a:hover {
        scale : 1.1;
    }
</style>