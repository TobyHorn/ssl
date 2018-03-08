<body class="off-canvas-nav-left" style="padding-top:70px;">

<div class="container">

    <!--Popover Component-->
    <button id="contactBtn" type="button" class="btn btn-lg btn-info" data-toggle="popover" data-placement="bottom" title="Contact Us" data-content="Contact form coming soon!">Click To Contact</button>

</div> <!-- /container -->


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