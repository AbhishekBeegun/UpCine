<div class='latesttrailer'>
    <?php
    heading('Latest trailers' , '' ,'black')
    ?>

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
    .latesttrailer .content .trailer img {
        background-color : red;
        height : 150px;
        width : 300px;
        cursor :pointer ;
    }

    .latesttrailer .content .trailer  p {
        margin : unset;
    }

    .latesttrailer .content .trailer .title {
        font-weight : 700;
        font-size :16px;
        padding:2px 0px
    }
    .latesttrailer .content .trailer .genre  {
        font-weight : 500;
        font-size :13px;
        color : grey;
    }
</style>