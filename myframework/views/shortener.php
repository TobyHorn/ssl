<div class="container" style="padding-top:75px;">

    <div>

        <h1>Google Link Shortener</h1>

        <!--Short Link-->
        <form action="/shortenerC/shorten" method="post" style="margin-top:3.5em;">
            <label class="h2" for="shortLink">Shorten Link</label>
            <input class="form-control" style="width:50%;" type="url" name="shortLink" placeholder="https://www.example.com/" />
            <button type='submit' id='shortenBtn' class='btn btn-success' style="margin-top:1em;">Shorten</button>
        </form>

        <!--Short Link Result-->
        <div class="form-inline">
            <label for="shortResult" style="margin-top:1.5em;">Result (Short Link)</label>
            <br>
            <input class="form-control" style="max-width=25px;" type="url" name="shortResult" value="<?=@$_REQUEST["shortened"]?$_REQUEST["shortened"]:'';?>" />
        </div>


        <!--Long Link-->
        <form action="/shortenerC/lengthen" method="post" style="margin-top:3.5em;">
            <label class="h2" for="longLink">Lengthen Link</label>
            <input class="form-control" style="width:25%;" type="url" name="longLink" placeholder="https://goo.gl/XYn4t1" />
            <button type='submit' id='lengthenBtn' class='btn btn-success' style="margin-top:1em;">Lengthen</button>
        </form>

        <!--Long Link Result-->
        <div class="form-inline">
            <label for="longResult" style="margin-top:1.5em;">Result (Long Link)</label>
            <br>
            <input class="form-control" style="width:50%;" type="url" name="longResult" value="<?=@$_REQUEST["lengthened"]?$_REQUEST["lengthened"]:'';?>" />
        </div>

    </div>

</div>