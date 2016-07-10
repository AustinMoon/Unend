

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        if (isset($message))
                        {
                            echo '<div class="alert alert-danger" role="alert">';
                            echo $message;
                            echo '</div>';
                        }?>
                        <form  action="login" method="post">
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
                                <div class="form-group">
                                    <label>
                                        <?php echo anchor("auth/forgot_password/", 'Forgot Your Password?') ;?>
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block btn-danger">Login</button>
                                <p>If you don't have our Account<br/></p>
                                <a href="create_user" class="btn btn-lg btn-success btn-block btn-danger">Sign up</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
