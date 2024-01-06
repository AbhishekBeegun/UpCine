<div class='movieposter'>
    <div class='movieposter_img'>
        <img src='https://avatars.mds.yandex.net/get-kinopoisk-image/10812607/6b21c342-f56b-413e-a93f-b0e8bef5742b/300x450' />
    </div>

    <div class='content'>
        <div class='trailer' data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <img src='' />
            <p class='title'>Title</p>
            <p class='genre'>2023, Drama</p>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
            </div>
        </div>
        </div>   
        <!-- modal end -->

    </div>

</div>

<style>
    .movieposter {
        margin-top : 110px;
        padding-bottom : 15px
    } 

    .movieposter .movieposter_img {
        margin-bottom :30px;
    }
    .movieposter .content .trailer img {
        background-color : red;
        height : 150px;
        width : 300px;
        cursor :pointer ;
    }

    .movieposter .content .trailer  p {
        margin : unset;
    }

    .movieposter .content .trailer .title {
        font-weight : 700;
        font-size :16px;
        padding:2px 0px
    }
    .movieposter .content .trailer .genre  {
        font-weight : 500;
        font-size :13px;
        color : grey;
    }
</style>