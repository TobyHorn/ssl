<body class="off-canvas-nav-left" style="padding-top:75px;">

<!--Fruits table data-->
<div class="container">

    <h1>About</h1>
    <p><a href="/about/addForm" class="btn btn-success"><span style="margin-right:0.5em;" class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add New Fruit</a></p>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Fruit In Stock</h3>
        </div>
        <div class="panel-body">
            <ul class="list-unstyled">
            <?
                foreach ($data as $fruit){
                    echo "<li style='margin-top:1.5em;'><h4 style='display:inline; margin-right:1em;'>".ucfirst($fruit["name"])."</h4><a class='btn btn-info' href='/about/edit/".$fruit["id"]."'><span style='margin-right: 0.5em;' class='glyphicon glyphicon-pencil' aria-hidden='true'></span>Edit</a></li>";
                }
            ?>
            </ul>
        </div>
    </div>

</div>






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