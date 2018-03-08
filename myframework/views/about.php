<body class="off-canvas-nav-left" style="padding-top:70px;">

<div class="container">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg center" data-toggle="modal" data-target="#myModal" style="margin-bottom:3em;">
       Click To Learn About Us
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">About Us</h4>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut augue sapien. Donec pretium non tortor ac aliquet. Nunc porttitor eu turpis ac efficitur. Nam luctus finibus ligula non pretium. Nunc dolor lorem, malesuada ac lectus ac, tristique sagittis sapien. Duis mattis libero ut tempor congue. Curabitur sed condimentum augue. Proin consectetur porttitor elit, vitae pulvinar odio mollis vel. Aenean vel varius dolor, vitae vulputate tortor. Aenean quis libero gravida, tempus velit ut, egestas nunc.</p>

                    <p>Nunc sagittis nibh massa. Donec consectetur auctor eleifend. Donec condimentum pulvinar lorem, nec tincidunt nisi viverra faucibus. Phasellus pellentesque vestibulum faucibus. Nunc mi urna, feugiat ut ligula ac, iaculis sodales purus. Cras scelerisque mauris magna, in mollis eros vehicula at. Mauris justo lacus, luctus vitae augue eu, tristique ullamcorper dui.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Carousel -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner " role="listbox">
            <div class="item active">
                <img src="../assets/imgs/slide1.svg">
                <div class="carousel-caption">
                    Slide 1
                </div>
            </div>
            <div class="item">
                <img src="../assets/imgs/slide2.svg" >
                <div class="carousel-caption">
                    Slide 2
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
    })
</script>
</body>