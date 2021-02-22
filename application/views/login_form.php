<?php
$this->view('loginheader');
?>
<div class="container" style="margin: 100px auto">
	<h1 align="center"><?php echo lang('welcome');?> <?php echo lang('to');?> <?php echo lang('site_name');?></h1>
	<form method="post"  action="<?php echo site_url()."librarian/validate"?>">
		<h4><?php echo lang('login_now');?></h4>
		<?php
		 if ($this->session->flashdata('error')) {
		?>
			<div class="alert alert-danger alert-dismissible">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <?php echo $this->session->flashdata('error');?>
			</div>
		<?php
		 }
		?>
		<div class="form-group">
			<label><?php echo lang('email');?></label>
			<input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control">
			<?php echo form_error('email'); ?>
		</div>
		<div class="form-group">
			<label><?php echo lang('password');?></label>
			<input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control">
			<?php echo form_error('password'); ?>
		</div>
		<div class="form-group">
			
			<input type="submit" name="submit" class="btn btn-primary">
		</div>
	</form>
</div>
<?php
$this->view('footer');
?>