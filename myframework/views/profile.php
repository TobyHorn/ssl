<div class="container">
    <div class="row panel" style="padding-top:75px;">

        <div class="col-md-12 col-sm-12">
            <img src="/assets/avatar.jpg" class="img-thumbnail" style="width: 186px; height: auto; margin-bottom: 1em;" />

            <form action="/profile/update" method="post" enctype="multipart/form-data">
                <label class="btn btn-default" style="width: 110px;">Browse
                <input name="img" type="file" style="display:none">
                </label>
                <input type="submit" value="Update" class="btn btn-primary">
            </form>

            <div class="header">
                <h1><?$info = explode("@", $_SESSION["user"][0]); echo $info[0];?></h1>
                <h4>Auto Mechanic</h4>
                <span><?echo $_SESSION["user"][2];?></span>
            </div>

        </div>

    </div>
</div>