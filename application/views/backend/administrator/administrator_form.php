
		<div id="page-wrapper" >
        <div id="page-inner">
        <h2 style="margin-top:0px">Administrator <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	   
	    <div class="form-group">
                <label for="varchar">Nama <?php echo form_error('nama') ?></label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="nama" value="<?php echo $nama; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">email <?php echo form_error('email') ?></label>
                <input type="text" class="form-control" name="email" id="email" placeholder="email" value="<?php echo $email; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">password <?php echo form_error('password') ?></label>
                <input type="text" class="form-control" name="password" id="password" placeholder="password" />
            </div>
		<div class="form-group">
				<label>user Level</label>
				<select class="form-control" name="user_level">
				<?php if ($user_level == NULL){ 
				echo '';
				}else{
				?>
				<option select="selected" value="<?php echo $user_level; ?>">
				<?php 
				$lev = $user_level; 
				if($lev == 1){
					echo 'Administrator';
				}elseif($lev == 2){
					echo 'Administrator SIMPeg';
				}elseif($lev == 3){
					echo 'Administrator Web Internal';
				}elseif($lev == 4){
					echo 'Pegawai SIMPeg';
				}
				?>
				</option>
				<?php } ?>
					<option value="1">Administrator</option>
					<option value="2">Administrator SIMpeg</option>
					<option value="3">Administrator Web Internal</option>
					<option value="4">Pegawai Simpeg</option>
				</select>
			</div>
	    <div class="form-group">
			<label>Status</label>
			<?php
				$stat1 = '';
				$stat2 = '';
				if($status == '0'){
					$stat1='checked="checked"';
				} elseif($status == '1'){
					$stat2='checked="checked"';
				}
			?>
			<div class="radio">
				<label>
					<input type="radio" name="status" id="stat1" value="0" checked <?php echo $stat1 ?> />Non Aktif
				</label>
				&nbsp &nbsp
				<label>
					<input type="radio" name="status" id="stat2" value="1" <?php echo $stat2 ?> />Aktif
				</label>
			</div>
		</div>
	    <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" /> 
	    <input type="hidden" name="hidden" value="<?php echo $password; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('administrator') ?>" class="btn btn-default">Cancel</a>
	</form>
	</div>
	</div>
    