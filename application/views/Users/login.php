


<div class="container" style="margin-top: 10px;">


    <?php echo form_open('Admin/index'); ?>

    <div class="class-form">
        <label for="email">Email</label>
        <?php echo form_input(['class'=>'form-control', 'placeholder'=>'Email','type'=>'email', 'id'=>'email']) ?>
    </div>

    <div class="class-form">
        <label for="password">Password</label>
        <?php echo form_password(['class'=>'form-control', 'placeholder'=>'Password','type'=>'password']) ?>
        <small id="passwordSpecs" class="form-text text-muted">Maximum 18 characters allowed</small>
    </div>
    
    <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','type'=>'submit','value'=>'Login'])?>

</div>






<script>
        $("#email").keypress(function(e) {
        $("#error_sp_msg").remove();
        var k = e.keyCode,
        $return = ((k >= 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 10 || k == 32 || k == 46 || k == 45 || k == 95 || (k >= 48 && k <= 57));
        if(!$return) {
            $("<span/>",{
                "id" : "error_sp_msg",
                "html" 	: "Special characters containing #$%^&*()+<>? are not allowed !!"
            }).insertAfter($(this));
            return false;
        }
        });
</script>






</body>
</html>