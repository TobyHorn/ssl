<div class="container" style="padding-top:75px;">

    <div>

        <h1>Google Books</h1>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Books by Henry David Thoreau</h3>
            </div>
            <div class="panel-body">
                <ul class="list-unstyled">
                <?
                    foreach ($data as $item){
                        echo "<li>".$item["volumeInfo"]["title"]."</li>";
                    }
                ?>
                </ul>
            </div>
        </div>

    </div>

</div>