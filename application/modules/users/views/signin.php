<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><?php echo lang('signin_page_header');?></h3>
        </div>
        <div class="panel-body">
          <?php echo form_open(
            'signin',
            array(
              'class'=>'form-signin',
              'role'=>'form',
              'autocomplete'=>'off'
              ));
          ?>
            <?php if(!empty($sign_in_error)){
              echo '<div class="alert alert-danger">'.$sign_in_error.'</div>';
            }?>
            <?php echo form_fieldset();?>
              <div class="form-group">
                <?php echo form_error('email','<div class="alert alert-danger">','</div>'); ?>
                <?php echo form_input(array(
                  'type'  =>  'email',
                  'name'  =>  'email',
                  'class' =>  'form-control',
                  'placeholder' => lang('signin_email_placeholder'),
                  'autofocus'
                ));?>
              </div>
              <div class="form-group">
                <?php echo form_error('password','<div class="alert alert-danger">','</div>'); ?>
                <?php echo form_password(array(
                  'name'  =>  'password',
                  'class' =>  'form-control',
                  'placeholder' => lang('signin_password_placeholder')
                ));?>
              </div>
              <?php echo form_button(array(
                'name'    => 'signin',
                'type'    => 'submit',
                'class'   => 'btn btn-success btn-lg btn-block',
                'content' => lang('signin_button_login').' <i class="fa fa-sign-in"></i>'
              ));?>
            <?php echo form_fieldset_close();?>
          <?php echo form_close();?>
        </div>
      </div>
    </div>
  </div>
</div>