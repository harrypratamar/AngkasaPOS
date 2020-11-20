<section class="content-header">
      <h1>
        Edit Pengguna
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?=site_url('user')?>"><i class="fa fa-users"> Pengguna</i></a></li>
        <li class="active">Edit Pengguna</li>
      </ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header">
					<div class="box-title">
						<h4>Form Edit pengguna</h4>
					</div>
				</div>
				<div class="box-body">
					<?php foreach ($user as $user) { ?>
						<form method="post" action="<?=base_url().'User/update_data'?>">
							<div class="form-group">
								<input type="hidden" name="id_user" class="form-control" readonly placeholder="ID User" value="<?php echo $user->id_user;?>">
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username" class="form-control" placeholder="Masukkan Username Baru." value="<?php echo $user->username ;?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Password</label>
									<input type="text" name="password" class="form-control" placeholder="Ubah password" value="<?php echo $user->password ;?>">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" name="nama" class="form-control" placeholder="Ganti Nama Pengguna" value="<?php echo $user->nama ;?>">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Level</label>
									<select name="level" class="form-control" value="<?php echo $user->level ;?>">
					                  <option value="Admin">Admin</option>
					                  <option value="Kasir">Kasir</option>
					                </select>
								</div>
							</div>
							<button type="submit" name="submit" class="btn btn-success fa fa-refresh">&nbsp UPDATE</button>&nbsp
	                        <?php echo anchor('User', '&nbsp KEMBALI', array('class' => "btn btn-danger fa fa-undo")) ?>
						</form>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</section>