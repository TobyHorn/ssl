<body class="off-canvas-nav-left" style="padding-top:70px;">

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

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



<!--POPOVER COMPONENT
<div class="container">
    <button id="contactBtn" type="button" class="btn btn-lg btn-info" data-toggle="popover" data-placement="bottom" title="Contact Us" data-content="Contact form coming soon!">Click To Contact</button>
</div>
-->


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