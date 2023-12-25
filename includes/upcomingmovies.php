
<div class='upmovies'>
    <?php
    heading('Upcoming movies' , 'upcom' ,'black')
    ?>
    <div class='content'>
        <div class='list'>
                <a href=''>
                <p class='index'>1 .</p>
                <img src='https://m.media-amazon.com/images/M/MV5BNGViM2M4NmUtMmNkNy00MTQ5LTk5MDYtNmNhODAzODkwOTJlXkEyXkFqcGdeQXVyMTY1NDY4NTIw._V1_SX300.jpg' />
                <p class='title'>Titleddfsdcvsdcvsdcvdscvscsdcsd</p>
                <p class='release_date'>26 Dec</p>
                </a>
                <a href=''>
                <p class='index'>1 .</p>
                <img src='https://m.media-amazon.com/images/M/MV5BNGViM2M4NmUtMmNkNy00MTQ5LTk5MDYtNmNhODAzODkwOTJlXkEyXkFqcGdeQXVyMTY1NDY4NTIw._V1_SX300.jpg' />
                <p class='title'>Titleddfsdcvsdcvsdcvdscvscsdcsd</p>
                <p class='release_date'>26 Dec</p>
                </a>
                <a href=''>
                <p class='index'>1 .</p>
                <img src='https://m.media-amazon.com/images/M/MV5BNGViM2M4NmUtMmNkNy00MTQ5LTk5MDYtNmNhODAzODkwOTJlXkEyXkFqcGdeQXVyMTY1NDY4NTIw._V1_SX300.jpg' />
                <p class='title'>Titleddfsdcvsdcvsdcvdscvscsdcsd</p>
                <p class='release_date'>26 Dec</p>
                </a>
                <a href=''>
                <p class='index'>1 .</p>
                <img src='https://m.media-amazon.com/images/M/MV5BNGViM2M4NmUtMmNkNy00MTQ5LTk5MDYtNmNhODAzODkwOTJlXkEyXkFqcGdeQXVyMTY1NDY4NTIw._V1_SX300.jpg' />
                <p class='title'>Titleddfsdcvsdcvsdcvdscvscsdcsd</p>
                <p class='release_date'>26 Dec</p>
                </a>
                <a href=''>
                <p class='index'>1 .</p>
                <img src='https://m.media-amazon.com/images/M/MV5BNGViM2M4NmUtMmNkNy00MTQ5LTk5MDYtNmNhODAzODkwOTJlXkEyXkFqcGdeQXVyMTY1NDY4NTIw._V1_SX300.jpg' />
                <p class='title'>Titleddfsdcvsdcvsdcvdscvscsdcsd</p>
                <p class='release_date'>26 Dec</p>
                </a>
        </div>
        <div class='list'>
                <a href=''>
                <p class='index'>1 .</p>
                <img src='https://m.media-amazon.com/images/M/MV5BNGViM2M4NmUtMmNkNy00MTQ5LTk5MDYtNmNhODAzODkwOTJlXkEyXkFqcGdeQXVyMTY1NDY4NTIw._V1_SX300.jpg' />
                <p class='title'>Titleddfsdcvsdcvsdcvdscvscsdcsd</p>
                <p class='release_date'>26 Dec</p>
                </a>
                <a href=''>
                <p class='index'>1 .</p>
                <img src='https://m.media-amazon.com/images/M/MV5BNGViM2M4NmUtMmNkNy00MTQ5LTk5MDYtNmNhODAzODkwOTJlXkEyXkFqcGdeQXVyMTY1NDY4NTIw._V1_SX300.jpg' />
                <p class='title'>Titleddfsdcvsdcvsdcvdscvscsdcsd</p>
                <p class='release_date'>26 Dec</p>
                </a>
                <a href=''>
                <p class='index'>1 .</p>
                <img src='https://m.media-amazon.com/images/M/MV5BNGViM2M4NmUtMmNkNy00MTQ5LTk5MDYtNmNhODAzODkwOTJlXkEyXkFqcGdeQXVyMTY1NDY4NTIw._V1_SX300.jpg' />
                <p class='title'>Titleddfsdcvsdcvsdcvdscvscsdcsd</p>
                <p class='release_date'>26 Dec</p>
                </a>
                <a href=''>
                <p class='index'>1 .</p>
                <img src='https://m.media-amazon.com/images/M/MV5BNGViM2M4NmUtMmNkNy00MTQ5LTk5MDYtNmNhODAzODkwOTJlXkEyXkFqcGdeQXVyMTY1NDY4NTIw._V1_SX300.jpg' />
                <p class='title'>Titleddfsdcvsdcvsdcvdscvscsdcsd</p>
                <p class='release_date'>26 Dec</p>
                </a>
                <a href=''>
                <p class='index'>1 .</p>
                <img src='https://m.media-amazon.com/images/M/MV5BNGViM2M4NmUtMmNkNy00MTQ5LTk5MDYtNmNhODAzODkwOTJlXkEyXkFqcGdeQXVyMTY1NDY4NTIw._V1_SX300.jpg' />
                <p class='title'>Titleddfsdcvsdcvsdcvdscvscsdcsd</p>
                <p class='release_date'>26 Dec</p>
                </a>
        </div>
    </div>
</div>


<style>
    .upmovies {
        height: auto ;
    }

    .upmovies .content {
        display:flex;
        justify-content:space-evenly;

    }

    .upmovies .list {
        display : flex;
        flex-direction : column;
        width : 50%;
    }
    .upmovies .list p {
        margin : unset;
    }
    .upmovies .list {
        list-style-type: none;
    }
    .upmovies .list a {
        display : flex;
        align-items : center;
        gap:10px;
        /* border-bottom : 1px solid black; */
        padding :10px 0px;
        text-decoration : none;
        color : #000;
    }
    .upmovies .list a img {
        height : 60px;
    }
    .upmovies .list a .index {
        font-size : 20px;
    }
    .upmovies .list a .release_date {
        font-size : 20px;
    }
    .upmovies .list a .title {
        max-width : 100px;
        overflow : hidden;
    }
</style>