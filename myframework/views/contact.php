<body class="off-canvas-nav-left" style="padding-top:70px;">


<?
function create_image($cap) {

    if(file_exists("./assets/image1.png")) {

        unlink("./assets/image1.png");

    }

    global $image;

    $image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");

    $background_color = imagecolorallocate($image, 255, 255, 255);

    $text_color = imagecolorallocate($image, 0, 255, 255);

    $line_color = imagecolorallocate($image, 64, 64, 64);

    $pixel_color = imagecolorallocate($image, 0, 0, 255);

    imagefilledrectangle($image, 0, 0, 200, 50, $background_color);

    for ($i = 0; $i < 3; $i++) {

        imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);

    }

    for ($i = 0; $i < 1000; $i++) {

        imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);

    }

    $text_color = imagecolorallocate($image, 0, 0, 0);

    ImageString($image, 22, 30, 22, $cap, $text_color);

    /************************************/

    $_SESSION["captcha"]=$cap;

    imagepng($image, "./assets/image1.png");
}

create_image($data["cap"]);

?>

<!--FORM-->
<div class="container">
    <form action="/home/contactRec/" method="post">
        <div class="form-group">
            <label for="select">Inquiry Type</label>
            <select class="form-control" name="select">
                <option>Support</option>
                <option>Partnership</option>
                <option>Careers</option>
                <option>Concerns/Suggestions</option>
                <option>Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="contactEmail">Email address</label>
            <input type="email" class="form-control" name="contactEmail" id="contactEmail" placeholder="Email">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" rows="3" name="message" id="message" placeholder="Message"></textarea>
        </div>

        <div class="form-group">
            <div class="radio-inline">
                <label>
                    <input type="radio" name="optionsRadios" name="guest" id="guest" value="guest" checked>
                    Guest
                </label>
            </div>
            <div class="radio-inline">
                <label>
                    <input type="radio" name="optionsRadios" name="customer" id="customer" value="customer">
                    Customer
                </label>
            </div>
            <div class="radio-inline">
                <label>
                    <input type="radio" name="optionsRadios" name="partner" id="partner" value="partner">
                    Partner
                </label>
            </div>
        </div>

        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" id="terms" name="terms"> I agree to the terms and conditions
                </label>
            </div>
        </div>

        <div class="form-group">

            <!--Display the captcha image-->
            <? echo "<img src='/assets/image1.png'>";?>

            <div class="form-inline" style="margin-top:1em;">
                <label for="captchaInput">Enter Captcha: </label>
                <input class="form-control" name="captchaInput" type="captcha" id="captchaInput" placeholder="">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



<!--POPOVER COMPONENT-->
<div class="container">
    <button style="margin-top:4.5em;" id="contactBtn" type="button" class="btn btn-lg btn-info" data-toggle="popover" data-placement="bottom" title="Contact Us" data-content="Contact form added!">Click activate popover</button>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    })

    $('#contactBtn').click(function(){
        $('#contactBtn').popover('toggle');
    })
</script>
</body>