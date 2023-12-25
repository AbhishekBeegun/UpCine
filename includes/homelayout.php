<?php
// Array representing sidebar links with icons
$sidebarLinks = [
    'Home' => ['url' => 'index.php', 'icon' => 'https://img.icons8.com/fluency-systems-regular/150/home--v1.png'],
    'Online Cinema' => ['url' => 'online_cinema.php', 'icon' => 'https://img.icons8.com/ios-glyphs/150/play--v1.png'],
    'Movies' => ['url' => 'movies.php', 'icon' => 'https://img.icons8.com/fluency-systems-regular/150/film-reel.png" alt="film-reel'],
    'Series' => ['url' => 'series.php', 'icon' => 'https://img.icons8.com/material-rounded/150/tv.png'],
    'Sport' => ['url' => 'sport.php', 'icon' => 'https://img.icons8.com/ios-glyphs/150/football2--v1.png'],
    'Movie Tickets' => ['url' => 'tickets.php', 'icon' => 'https://img.icons8.com/material-outlined/150/two-tickets.png'],
];
?>



<div class='container'>
 <div class='row home_desktop'>
    <div class='col-3 fixed-sidebar'>
     <ul>
        <?php foreach ($sidebarLinks as $label => $data): ?>
        <li><a href="<?php echo $data['url']; ?>"><img src="<?php echo $data['icon']; ?>" alt="<?php echo $label; ?> Icon"> <?php echo $label; ?></a></li>
        <?php endforeach; ?>
     </ul>

     <div class='owner'>
        <a href="https://github.com/AbhishekBeegun" target="_blank">
            <img src='https://avatars.githubusercontent.com/u/108677392?v=4'  />
            <p>Abhishek Beegun 2023</p>
        </a>
     </div>
    </div>

    <div class='col home_contents'>

    </div>
 </div>
</div>


<style>
    .home_desktop {
        height : 1500px;
        border :1px solid #dddddd;
        boder-top : none;
        background-color : white;
    }

    .home_desktop .fixed-sidebar {
        position: -webkit-sticky;
        position: -moz-sticky;
        position: -ms-sticky;
        position: -o-sticky;
        position: sticky;
        padding: 30px 0;
        height : 400px;
        color: #000;
        top: 50px;
        bottom: auto;
    }

    .home_desktop .fixed-sidebar .owner {
        padding : 10px;
        border-top : 1px solid #eeeeee;
        border-bottom : 1px solid #eeeeee;
        background-color : #fff;
    }
    .home_desktop .fixed-sidebar .owner:hover {
        filter: invert(100%);-webkit-filter: invert(100%);  
  }

    .home_desktop .fixed-sidebar .owner a {
        display :flex;
        align-items : center;
        justify-content : center;
        gap :20px;
        text-decoration : none;
    }

    .home_desktop .fixed-sidebar .owner a img {
        height : 45px;
        width : 45px;
        border-radius : 60px;
    }

    .home_desktop .fixed-sidebar .owner a p {
        font-size : 13px;
        color : #AAAAAA;
        margin : unset;
    }

    .home_desktop .fixed-sidebar ul {
        list-style-type: none;
    }

    .home_desktop .fixed-sidebar ul li  {
      margin-bottom : 15px;
    }
    .home_desktop .fixed-sidebar ul li a {
        display : flex;
        align-items : center; 
        gap:10px;
        text-decoration : none;
        color : grey;
        font-size : 16px;
    }
    .home_desktop .fixed-sidebar ul li a:hover {
        color : #000;
    }

    .home_desktop .fixed-sidebar ul li a img {
        height :25px;
        width : 25px;
    }

    .home_desktop .home_contents {
        border-left : 1px solid #dddddd;
    }
</style>