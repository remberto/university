<!-- BEGIN LOGIN FORM -->
<form class="form-vertical " action="<?php echo url_for('login/index'); ?>" method="post" name="adm_usuarios">
        <?php echo $form->renderHiddenFields(false) ?>
        <h3 class="form-title">Ingrese su Cuenta</h3>
        
        <?php if ($sf_user->hasFlash('notice')): ?>
            <div class="alert alert-error hide">
                <span>
                    <?php echo $sf_user->getFlash('notice'); ?>
                </span>
            </div>
        <?php endif; ?>
                
        <div class="control-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Usuario</label>
                <div class="controls">
                        <div class="input-icon left">
                                <i class="icon-user"></i>
                                <?php echo $form['username']->render(array('class'=>'m-wrap placeholder-no-fix', 'placeholder'=>'Usuario')) ?>
                        </div>
                </div>
        </div>
        <div class="control-group">
                <label class="control-label visible-ie8 visible-ie9">Contraseña</label>
                <div class="controls">
                        <div class="input-icon left">
                                <i class="icon-lock"></i>
                                <?php echo $form['password']->render(array('class'=>'m-wrap placeholder-no-fix', 'placeholder'=>'Contraseña')) ?>
                        </div>
                </div>
        </div>
        <div class="form-actions">
                <label class="checkbox">
                <input type="checkbox" name="remember" value="1"/> Recuerdame
                </label>
                <button type="submit" class="btn blue pull-right">
                Ingresar <i class="m-icon-swapright m-icon-white"></i>
                </button>            
        </div>
        <div class="forget-password">
                <h4>¿Olvido su Contraseña?</h4>
                <p>
                        no hay problema, haga click <a href="javascript:;" class="" id="forget-password">aqui</a>
                        para cambiar su Contraseña
                </p>
        </div>
</form>
<!-- END LOGIN FORM -->        
<!-- BEGIN FORGOT PASSWORD FORM -->
<form class="form-vertical forget-form" action="index.html">
        <h3 class="">Forget Password ?</h3>
        <p>Enter your e-mail address below to reset your password.</p>
        <div class="control-group">
                <div class="controls">
                        <div class="input-icon left">
                                <i class="icon-envelope"></i>
                                <input class="m-wrap placeholder-no-fix" type="text" placeholder="Email" name="email" />
                        </div>
                </div>
        </div>
        <div class="form-actions">
                <button type="button" id="back-btn" class="btn">
                <i class="m-icon-swapleft"></i> Back
                </button>
                <button type="submit" class="btn blue pull-right">
                Submit <i class="m-icon-swapright m-icon-white"></i>
                </button>            
        </div>
</form>
<!-- END FORGOT PASSWORD FORM -->
