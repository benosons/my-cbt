<div class="login-box pt-5">
	<!-- /.login-logo -->
	<div class="login-box-body">
	<center>
	<a href="#" rel="noopener noreferrer" style="color: #dd4b39;">
	<!-- <img src="<?= base_url('assets/dist/img/gmni.png') ?>" width="30%" alt="" srcset=""> -->
	</center>
	<h3 class="text-center mt-0 mb-4">
		<b>C</b>omputer <b>B</b>ased <b>T</b>est
	</h3> </a>
	<p class="login-box-msg">Masukan akun anda</p>

	<div id="infoMessage" class="text-center"><?php echo $message;?></div>

	<?= form_open("auth/cek_login", array('id'=>'login'));?>
		<div class="input-group mb-3">
		<?= form_input($identity);?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-envelope" style="font-size: 14px;"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
		<?= form_input($password);?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span id="show-password" class="glyphicon glyphicon-eye-open" style="font-size: 14px;"></span>
            </div>
          </div>
        </div>
		
		<div class="row">
			<div class="col-xs-8">
			<div class="checkbox icheck">
				<label>
				<?= form_checkbox('remember', '', FALSE, 'id="remember"');?> Ingat saya
				</label>
			</div>
			</div>
			<!-- /.col -->
			<div class="col-xs-4">
			<?= form_submit('submit', lang('login_submit_btn'), array('id'=>'submit','class'=>'btn btn-danger btn-block btn-flat'));?>
			</div>
			<!-- /.col -->
		</div>
		<?= form_close(); ?>

		<a style="color: #dd4b39;" href="<?=base_url()?>auth/forgot_password" class="text-center"><?= lang('login_forgot_password');?></a>

	</div>
</div>

<script type="text/javascript">
	let base_url = '<?=base_url();?>';
</script>
<script src="<?=base_url()?>assets/dist/js/app/auth/login.js"></script>