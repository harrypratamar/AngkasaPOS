<section class="content-header">
      <h1>
        Manajemen Pengguna
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?=site_url('user')?>"><i class="fa fa-users"> Pengguna</i></a></li>
        <li class="active">Manajemen Pengguna</li>
      </ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-warning">
				<div class="box-body">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
						Tambah Pengguna
					</button>
					<div class="modal fade" id="modal-default">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="close">
										<span area-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title">Tambahkan Pengguna</h4>
								</div>
								<div class="modal-body">
									<form  method="post" action="<?php echo base_url().'User/tambah_data'?>">
										<div class="form-group">
											<label>Username</label>
											<input type="text" name="username" class="form-control" required placeholder="Masukkan Username">
										</div>
										<div class="form-group">
											<label>Password</label>
											<input type="text" name="password" class="form-control" required placeholder="Masukkan Password">
										</div>
										<div class="form-group">
											<label>Nama Lengkap</label>
											<input type="text" name="nama" class="form-control" required placeholder="Nama Lengkap">
										</div>
										<div class="form-group">
											<label>Level</label>
											<select name="level" class="form-control" required value="<?php echo $user->level ;?>">
												<option value="Admin">Admin</option>
												<option value="Kasir">Kasir</option>
											</select>
										</div>
										<br>
										<br>
										<button type="reset" class="btn btn-warning fa fa-rotate-left" data-dismiss="modal"> Reset</button>&nbsp
										<button type="submit" class="btn btn-primary fa fa-save"> Simpan</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<br>
					<br>
					<br>
					<div class="table-responsive">
					<!-- Table view pengguna -->
					<table id="example1" class="table table-bordered table-striped" >
						<thead>
				            <th>ID User.</th>
				            <th>Username</th>
				            <th>Password</th>
				            <th>Nama Lengkap</th>
				            <th>Level</th>
				            <th>Aksi</th>
			            </thead>
			            <tbody>
			            <?php foreach ($user as $user) : ?>
			            <tr>
			                <td> <?php echo $user->id_user ?> </td>
			                <td> <?php echo $user->username ?> </td>
			                <td> <?php echo $user->password ?> </td>
			                <td> <?php echo $user->nama ?> </td>
			                <td> <?php echo $user->level ?> </td>
			                <td><?php echo anchor('User/edit_data/'.$user->id_user, '<button type="button" class="  fa fa-pencil btn btn-warning">&nbsp Edit</button>') ?>&nbsp&nbsp&nbsp&nbsp&nbsp
			                <!-- /.TAMBAH POP UP KONFIRMASI -->
			                <?php echo anchor('User/hapus_data/'.$user->id_user, '<button type="button" class="fa fa-trash btn btn-danger ">&nbsp Hapus</button>') ?></td>
			            </tr>
			            <?php endforeach; ?>
				        </tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>
