<form name="login_form" id="login_form" action="<?=SITE;?>/wp-login.php" method="post">
        <div class="row table-title">
            <div class="col text-end bottom-orange-border ps-0 pb-3 pt-2">
                <label for="user_login">Login/e-mail</label>
            </div>
            <div class="col text-start bottom-orange-border ps-0 pb-3 pt-2">
                <input type="text" name="log" id="user_login" autocomplete="username" class="panel-input" value="" size="20">
            </div>
        </div>
        <div class="row table-title">
            <div class="col text-end bottom-orange-border ps-0 pb-3 pt-2">
                <label for="user_pass">Hasło</label>
            </div>
            <div class="col text-start bottom-orange-border ps-0 pb-3 pt-2">
                <input type="password" name="pwd" id="user_pass" autocomplete="current-password" spellcheck="false" class="panel-input" value="" size="20">
            </div>
        </div>
        <div class="row">
            <div class="col text-end ps-0 pt-2 pb-2">
                <label><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Pamiętaj mnie</label>
            </div>
            <div class="col  text-start">
                
            </div>
        </div>
        <div class="row table-rows ps-4 pe-4">
            <div class="col text-end ps-0 pt-2 pb-2">
                <input type="submit" name="wp-submit" id="wp-submit" class="button-circle button-orange" value="Zaloguj">
                <input type="hidden" name="redirect_to" value="<?=SITE;?>/panel/portfel">
            </div>
            <div class="col"></div>
        </div>
	</form>