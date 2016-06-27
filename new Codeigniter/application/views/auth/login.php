<!DOCTYPE html>
<html lang="en">

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <?php echo $message;?>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <?php echo form_input($identity);?>
                                </div>
                                <div class="form-group">
                                    <?php echo form_input($password);?>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="index.html" class="btn btn-lg btn-success btn-block btn-danger">Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
