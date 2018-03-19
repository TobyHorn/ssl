<!-- Static navbar -->
<nav class='navbar navbar-default navbar-inverse navbar-fixed-top'>
    <div class='container'>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class='navbar-header'>
            <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
                <span class='sr-only'>Toggle navigation</span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
            </button>
            <a class='navbar-brand' href='#'>Brand</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
            <ul class='nav navbar-nav'>
        <?
            foreach ($data as $key => $item) {


                if ($_SERVER['REQUEST_URI'] == $key) {
                    echo "<li class='active'><a href='$key' alt='$item Page'>".$item."<span class='sr-only'>(current)</span></a></li>";
                } else {
                    echo "<li><a href='$key' alt='$item Page'>".$item."</a></li>";
                }

            }
        ?>

</ul>
<span style="color:red"><?=@$_REQUEST["msg"]?$_REQUEST["msg"]:'';?></span>
<?if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1){?>

            <!--//If session exists then show profile and logout menu items-->
            <form class='navbar-form navbar-right' style="margin: 0px">
                <ul class="nav navbar-nav navbar-right">

                    <?if(@$_SESSION["isadmin"] && @$_SESSION["isadmin"]==1){?>
                        <li><a href="/admin">Admin</a></li>
                    <?}?>

                    <li><a href='/profile'>Profile</a></li>
                    <li><a href='/auth/logout'>Logout</a></li>
                </ul>
            </form>

        <?}else{?>

            <!--//If session doesn't exist then show login form-->
            <form class='navbar-form navbar-right' action='/auth/login/' method='post'>
                <div class='form-group'>
                    <label for='loginEmail' style='color:#9d9d9d; margin-right:1em;'>Login:</label>
                    <input type='email' class='form-control' name='loginEmail' id='loginEmail' placeholder='Email'>
                </div>
                <div class='form-group'>
                    <input type='password' class='form-control' name='loginPass' id='loginPass' placeholder='Password'>
                </div>
                <button type='submit' id='loginBtn' class='btn btn-default'>Login</button>
            </form>
        <?}?>

        </div><!-- /navbar-collapse -->
    </div><!-- /container-fluid -->
</nav>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>
    $('#loginBtn').click(function(){
        $.ajax({
            method: 'POST',
            url:'/home/loginRec/',
            data:{'loginEmail':$('#loginEmail').val(),'loginPass':$('#loginPass').val()},
            success:function(msg){

                if(msg==='user_login') {
                    alert('Welcome user!');
                    window.location.href = '/profile';
                } else if(msg==='bad_login') {
                    alert('Bad Login');
                } else {

                }
            }
        });
    });
</script>