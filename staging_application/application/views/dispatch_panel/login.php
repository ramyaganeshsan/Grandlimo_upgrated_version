<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div class="loginWrapper">
    <div class="loginWrapper_inner">
        <div class="loginLogo">
            <img src="<?php echo URL_BASE; ?>public/uploads/site_logo/logo.png" border="0" alt="Logo" />
        </div>
        <div class="widget" style="float: left; margin-top:27px;">
            <div class="title">
                <h6>View Dispatcher Login</h6>
            </div>
            <?php if (!empty($error_login)) { ?>
                <span class="login_error"><?php echo $error_login; ?></span>
            <?php } ?>
            <form class="form" method="post" name="frmlogin" id="frmlogin">
                <fieldset>
                    <div class="formRow">
                        <label for="login">Email</label>
                        <div class="loginInput">
                            <input type="text" id="email" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" maxlength="50" />
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label for="pass">Password</label>
                        <div class="loginInput">
                            <input type="password" name="password" maxlength="15" />
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="loginControl">
                        <input type="submit" class="dredB logMeIn" value="Log me in" name="admin_login" />
                        <div class="clear"></div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
