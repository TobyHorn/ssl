<div class="container" style="padding-top:75px;">

    <div>
        <h1>Register</h1>
        <form action="/auth/register" method="post" style="margin-top:3.5em;">

            <label for="regEmail">Email</label>
            <input class="form-control" style="width:25%;" type="text" name="regEmail" placeholder="Example@domain.com" />

            <label for="regPass" style="margin-top:2em;">Password</label>
            <input class="form-control" style="width:25%;" type="password" name="regPass" />

            <label for="confirmRegPass" style="margin-top:2em;">Confirm Password</label>
            <input class="form-control" style="width:25%;" type="password" name="confirmRegPass" />

            <button type='submit' id='regConfirm' class='btn btn-success' style="margin-top:1em;">Register</button>

        </form>
    </div>

</div>