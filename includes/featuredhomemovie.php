<?php
$movieDataJson = '{"Title":"Animal","Year":"2023","Rated":"N/A","Released":"01 Dec 2023","Runtime":"204 min","Genre":"Action, Crime, Drama","Director":"Sandeep Reddy Vanga","Writer":"Suresh Bandaru, Saurabh Gupta, Pranay Reddy Vanga","Actors":"Ranbir Kapoor, Anil Kapoor, Bobby Deol","Plot":"A father, who is often away due to work, is unable to comprehend the intensity of his son\'s love. Ironically, this fervent love and admiration for his father and family creates conflict between the father and son.","Language":"Hindi","Country":"India","Awards":"N/A","Poster":"https://m.media-amazon.com/images/M/MV5BNGViM2M4NmUtMmNkNy00MTQ5LTk5MDYtNmNhODAzODkwOTJlXkEyXkFqcGdeQXVyMTY1NDY4NTIw._V1_SX300.jpg","Ratings":[{"Source":"Internet Movie Database","Value":"6.9/10"}],"Metascore":"N/A","imdbRating":"6.9","imdbVotes":"48,728","imdbID":"tt13751694","Type":"movie","DVD":"N/A","BoxOffice":"$13,647,140","Production":"N/A","Website":"N/A","Response":"True"}';

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