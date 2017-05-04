<!--start content-->
  <div class="content">
    <div class="contact-section" id="contact">
      <div class="container">
        <div class="contact-section-head text-center">
          <h3>Login Internal Apps</h3>
          <span></span>
        </div>
        <div class="contact-form-bottom">
          <div class="col-md-3 address">
          </div>
          <div class="col-md-6 contact-form">
          <?php echo form_open("login/login");?>
              <div class="contact-form-row">
                <div>
                  <span>Username</span>
                   <input type="text" name="username" value="<?php echo set_value('username');?>">
                </div>
                <div>
                  <span>Password</span>
                  <input type="password" name="password" value="<?php echo set_value('password');?>">
                  </div>
                <?php echo form_submit('submit', 'Login');?>
                <div class="clearfix"> </div>
              </div>
          <?php echo form_close();?>
        </div>
        <div class="col-md-3 contact-form-row comments">
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    </div>
  </div>