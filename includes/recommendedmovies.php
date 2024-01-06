<?php
$jsonData = '{"Title":"Animal","Year":"2023","Rated":"N/A","Released":"01 Dec 2023","Runtime":"204 min","Genre":"Action, Crime, Drama","Director":"Sandeep Reddy Vanga","Writer":"Suresh Bandaru, Saurabh Gupta, Pranay Reddy Vanga","Actors":"Ranbir Kapoor, Anil Kapoor, Bobby Deol","Plot":"A father, who is often away due to work, is unable to comprehend the intensity of his son\'s love. Ironically, this fervent love and admiration for his father and family creates conflict between the father and son.","Language":"Hindi","Country":"India","Awards":"N/A","Poster":"https://m.media-amazon.com/images/M/MV5BNGViM2M4NmUtMmNkNy00MTQ5LTk5MDYtNmNhODAzODkwOTJlXkEyXkFqcGdeQXVyMTY1NDY4NTIw._V1_SX300.jpg","Ratings":[{"Source":"Internet Movie Database","Value":"6.9/10"}],"Metascore":"N/A","imdbRating":"6.9","imdbVotes":"48,728","imdbID":"tt13751694","Type":"movie","DVD":"N/A","BoxOffice":"$13,647,140","Production":"N/A","Website":"N/A","Response":"True"}';

$movie = json_decode($jsonData, true);

$title = $movie['Title'];
$year = $movie['Year'];
$genre = $movie['Genre'];
$rating = $movie['imdbRating'];
$poster = $movie['Poster'];

$html = "
    <a href='dfdf' class=\"swiper-slide movie\">
        <div class='top'>
            <img src='$poster' class='img-fluid' loading='lazy' />

            <div class='rating'>
                $rating
            </div>
        </div>
    </a>
";
?>
<div class='recommendedmovies'>
     
    <?php
    heading('Recommended Movies' , 'recmov','black')
    ?>
 
    <div class="swiper recmovies_carousel">
        <div class="swiper-wrapper">
            <?php 
            echo $html;
            echo $html;
            echo $html;
            echo $html;
            echo $html;
            echo $html;
            echo $html;
            echo $html;
            ?>
        </div>
    </div>
</div>

<style>
     .recommendedmovies {
        margin-top : 20px;
    }
    .recmovies_carousel .swiper-wrapper .movie p {
        margin:unset;
    }
    .recmovies_carousel .swiper-wrapper a {
        text-decoration : none;
        color : #000;
    }
    .recmovies_carousel .swiper-wrapper .movie .top{
        position : relative;        
    }
    .recmovies_carousel .swiper-wrapper .movie .top .rating {
        position : absolute;
        top:5px;
        left : 10px;
        background-color : green;
        color : #fff;   
        padding : 2px 10px;    
        font-size : 16px;  
    }

</style>
<script>
    var swiper = new Swiper(".recmovies_carousel", {
        slidesPerView: 4,
        spaceBetween: 25,
        autoplay: {
            delay: 3000,
        }
    });
</script>