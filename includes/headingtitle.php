<?php
function heading($title,$link,$color){
    echo '<div class="py-3">
    <a class="d-flex align-items-center gap-2 text-decoration-none text-'. $color .'" href='. $link .'>
     <p class="m-0 fs-5 fw-semibold">'. $title .'</p>
     <img width="15" height="15" src="https://img.icons8.com/ios-filled/150/'. $color .'/forward--v1.png" alt="forward--v1"/>
    </a>
</div>' ; 
}
?>