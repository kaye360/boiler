<?php

$page = 'contact';
$pageTitle = 'Contact Us';
$pageDescription = 'Contact Us Description';

include('./php/header.php');

?>


<section class="page-header text-center">
    <h1>Contact Us</h1>
</section>

<section class="container-ex-sm pyd">
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ullam eaque quos totam, sunt temporibus ab soluta commodi modi ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, ex.
    </p>
</section>


<section class="contact-form">


    <div class="even-columns-2 gap-1 container">
        
        <div>
            <form action="send-email.php" method="post">
        
            <label>
                Your Name:
                <input type="text" name="name" id="name" required>
            </label>
        
            <label>
                Your Email:
                <input type="email" name="email" id="email" required>
            </label>
        
            <label>
                Your Phone Number:
                <input type="tel" name="tel" id="tel">
            </label>
        
            <label>
                Subject:
                <select name="subject" id="subject">
                    <option value="newProject" default>New Project</option>
                    <option value="question">Question</option>
                    <option value="billing">Billing</option>
                </select>
            </label>
        
            <label>
                One:
                <input type="radio" name="radios" id="radios1" value="1">
            </label>
        
            <label>
                Two:
                <input type="radio" name="radios" id="radios2" value="2">
            </label>
            
            <label>
                Three:
                <input type="radio" name="radios" id="radios3" value="3">
            </label>    
        
            <label>
                Your Message:
                <textarea name="message" id="message"></textarea>
            </label>
        
            <label>
                Type A
                <input type="checkbox" name="check" id="checka" value="a">
            </label>
        
            <label>
                Type B
                <input type="checkbox" name="check" id="checkb" value="b">
            </label>
        
            <label>
                Type C
                <input type="checkbox" name="check" id="checkc" value="c">
            </label>
        
            <input type="submit" value="Send Email">
        
            </form>
        </div>

        <div>
            <img src="https://source.unsplash.com/random/300×300?lights" class="cover-image">
        </div>

    </div>


</section>


<?php


include('./php/footer.php');

?>