<?php

$page = 'about';
$pageTitle = 'About Us';
$pageDescription = 'Description of the owner of the website here';

include('./php/header.php');

?>




<section class="page-header text-center">
    <h1><?php echo $pageTitle; ?></h1>
</section>



<section class="container-ex-sm my3">
    <h2>Lorem ipsum dolor sit amet, consectetur adipisicing.</h2>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus delectus quidem dignissimos ducimus minus cumque, ipsum quaerat, aperiam sapiente facilis ullam! Veritatis nulla accusantium, cumque nobis quaerat id illo.
</section>


<section class="mid-contrast-theme pyd">

    <h2 class="text-center">Meet the Team</h2>

    <div class="container even-columns-4 justify-items-center gap-1">
        <div class="text-center">
            <img src="https://source.unsplash.com/random/300x300?person" class="avatar mb1">
            <div class="fs2">Person 1</div>
        </div>
        
        <div class="text-center">
            <img src="https://source.unsplash.com/random/300x300?man" class="avatar mb1">
            <div class="fs2">Person 2</div>
        </div>
                
        <div class="text-center">
            <img src="https://source.unsplash.com/random/300x300?woman" class="avatar mb1">
            <div class="fs2">Person 3</div>
        </div>
        
        <div class="text-center">
            <img src="https://source.unsplash.com/random/300x300?businessperson" class="avatar mb1">
            <div class="fs2">Person 4</div>
        </div>
        
    </div>

</section>



<section class="container even-columns-2 align-items-center gap2 my3">

    <div class="">
        <h2>
            <span class="clr-pri-4">Lorem, ipsum dolor</span><br>
            Opsum dolor sit amet consectetur adipisicing.
        </h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo nesciunt nam sed et atque. Voluptatum mollitia incidunt exercitationem delectus! Tempore!</p>
        <ul>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, corporis eaque? Fuga placeat error ratione?</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, fugit?</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab ducimus dolorem voluptatem!</li>
        </ul>

        <button class="btn btn-bg-pri">Learn More</button>
    </div>

    <div>
        <img src="https://source.unsplash.com/random/300x300?logo" class="width-100">
    </div>

</section>




<?php


include('./php/footer.php');

?>