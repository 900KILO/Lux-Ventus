<?php
function prinNavigation() : void{
    $links =[
        ['link' => 'Fashion',],
        ['link' => 'Lifestyle',],
        ['link' => 'Spiritual',],
        ['link' => 'Mental Health',],
        
    ];
    foreach($links as $link){
        echo '<a href="#" class="nav-link">' . $link['link'] . '</a>';
        
    };
}
