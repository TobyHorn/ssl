<div class="container">

    <div>

        <h1>Update Item</h1>
        <form class="form-inline" action="/about/updateItem" method="post">

            <input class="form-control" type="number" name="id" value="<? echo @$_REQUEST['id']; ?>" readonly/>
            <input class="form-control" type="text" name="name" value="<? echo @$_REQUEST['fruitName']; ?>"/>
            <button class="btn btn-primary" type="submit"><span style='margin-right: 0.5em;' class='glyphicon glyphicon-floppy-disk' aria-hidden='true'></span>Save</button>

        </form>

    </div>

</div>