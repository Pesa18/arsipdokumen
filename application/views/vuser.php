<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row page-title-header mb-0">
	<div class="col-12">
		<div class="page-header">
			<h3 class="page-title">Master User</h3>
			<div class="quick-link-wrapper d-md-flex flex-md-wrap">
				<div class="quick-links">
					<?php if (isset($_SESSION['akses_modul']['user']) && $_SESSION['akses_modul']['user'] == 'on') : ?>
						<a class="btn btn-primary" href="#" data-toggle="modal" data-target="#adduser"><i class="fa fa-plus"></i> Tambah User Baru</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="card">


	<div class="card-header py-3">
		<a href="<?php echo base_url('/home'); ?>">
			<i class="fa fa-arrow-left"></i>&ensp;Kembali
		</a>
	</div>

	<div class="card-body">
		<div id="table"></div>

	</div>
</div>



<div class="modal fade" id="adduser">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header py-3">
				<h4 class="modal-title">Tambah User</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="fadduser" class="form-horizontal" role="form" method="post" action="<?php echo site_url("/admin/adduser"); ?>">
					<div class="form-group">
						<label class="control-label" for="username">username</label>
						<div class="">
							<input type="text" class="form-control" id="username" name="username" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label" for="password">password</label>
						<div class="">
							<input type="password" class="form-control" id="password" name="password" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label" for="conf_password">Konfirmasi password</label>
						<div class="">
							<input type="password" class="form-control" id="conf_password" name="conf_password" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label" for="username">Hak Akses Klasifikasi</label>
						<div class="">
							<input type="text" class="form-control" id="akses_klas" name="akses_klas" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label" for="username">Hak Akses Modul</label>
						<div class="">
							<div class="">
								<label for="modul1">
									<input tabindex="5" type="checkbox" id="modul1" name="modul[entridata]">
									Entri Data
								</label>
								<label for="modul2">
									<input type="checkbox" id="modul2" name="modul[sirkulasi]">
									Sirkulasi
								</label>
								<label for="modul3">
									<input type="checkbox" id="modul3" name="modul[klasifikasi]">
									Klasifikasi
								</label>
								<label for="modul4">
									<input type="checkbox" id="modul4" name="modul[pencipta]">
									Pencipta Arsip
								</label>
								<label for="modul5">
									<input type="checkbox" id="modul5" name="modul[pengolah]">
									Pengolah Arsip
								</label>
								<label for="modul6">
									<input type="checkbox" id="modul6" name="modul[lokasi]">
									Lokasi Arsip
								</label>
								<label for="modul7">
									<input type="checkbox" id="modul7" name="modul[media]">
									Media Arsip
								</label>
								<label for="modul8">
									<input type="checkbox" id="modul8" name="modul[user]">
									User
								</label>
								<label for="modul9">
									<input type="checkbox" id="modul9" name="modul[import]">
									Import Data
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label" for="tipe">Tipe</label>
						<div class="">
							<select id="tipe" name="tipe" class="form-control">
								<option value="admin">Admin</option>
								<option value="operator">Operator</option>
								<option value="user">User</option>
							</select>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				<button type="button" class="btn btn-primary" id="addusergo">Simpan</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="edituser">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header py-3">
				<h4 class="modal-title">Edit User</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form id="feduser" class="form-horizontal" role="form" method="post" action="<?php echo site_url("/admin/eduser"); ?>">
					<input type="hidden" name="id" id="ediduser" value="">
					<div class="form-group">
						<label class="control-label" for="username">username</label>
						<div class="">
							<input type="text" class="form-control" id="eusername" name="username" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label" for="password">password</label>
						<div class="">
							<input type="password" class="form-control" id="epassword" name="password" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label" for="username">Hak Akses Klasifikasi</label>
						<div class="">
							<input type="text" class="form-control" id="eakses_klas" name="akses_klas" />
						</div>
					</div>



					<div class="form-group">
						<label class="control-label" for="tipe">Tipe</label>
						<div class="">
							<select id="etipe" name="tipe" class="form-select">
								<option value="admin">Admin</option>
								<option value="operator">Operator</option>
								<option value="user">User</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label" for="tipe">Akses Modul</label>
						<div class="">
							<select id="selectdua" name="test" class="form-control" multiple="multiple" style="width: 100%">
								<option id="emodul1" value="entridata">Entridata</option>
								<option id="emodul2" value="sirkulasi">Sirkulasi</option>
								<option id="emodul3" value="klasifikasi">Klasifikasi</option>
								<option id="emodul4" value="pencipta">Pencipta</option>
								<option id="emodul5" value="pengolah">Pengolah</option>
								<option id="emodul6" value="lokasi">Lokasi</option>
								<option id="emodul7" value="media">Media</option>
								<option id="emodul8" value="user">User</option>
								<option id="emodul9" value="import">Import</option>
							</select>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" id="getVal">Tutup</button>
				<button type="button" class="btn btn-primary" id="editusergo">Simpan</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="deluser">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header py-3">
				<h4 class="modal-title">Delete User</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="fdeluser" class="form-horizontal" role="form" method="post" action="<?php echo site_url("/admin/deluser"); ?>">
					<h4 class="modal-title">Yakin ingin Hapus data ini?</h4>
					<input type="hidden" name="id" id="deliduser" value="">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" id="getVal">Tutup</button>
				<button type="button" class="btn btn-primary" id="delusergo">Hapus</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<script>
	var json = JSON.parse(`<?= json_encode($user, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>`);

	new gridjs.Grid({
		columns: [{
			id: 'id',
			name: 'No',
			width: '50px'

		}, {
			id: 'username',
			name: 'Username'
		}, {
			id: 'tipe',
			name: 'Tipe'
		}, {
			id: 'akses_modul',
			name: 'Akses',
			width: '200px',
			formatter: (cell, row) => {
				let html = '';

				// Melakukan perulangan pada objek cell
				for (const key in cell) {
					// Mengecek apakah key adalah properti objek dan bukan fungsi atau properti lainnya
					if (cell.hasOwnProperty(key)) {
						// Menggunakan data dari objek cell untuk membuat elemen HTML yang sesuai
						html += `<span class="badge rounded-pill bg-primary m-1">${key}</span>`;
					}
				}

				// Mengembalikan HTML yang dihasilkan
				return gridjs.html(`<div class="col "> ${html}</div>`);
			}
		}, {
			name: 'Aksi',
			width: "7%",
			formatter: (_, row) => {
				return gridjs.html(`<div class=" col d-flex justify-content-around">
			<button type="button" id="edit_user" data-id="${row.cells[0].data}" class=" btn rounded-pill btn-icon btn-primary ">
                              <span class="tf-icons bx bx-pencil"></span>
                            </button>
                            <button type="button" id="hapusUser" class="btn rounded-pill btn-icon btn-danger">
                              <span class="tf-icons bx bx-trash"></span>
                            </button>
</div>`)
			}

		}],
		data: json
	}).render(document.getElementById('table'));



	$(document).ready(function() {
		$("#selectdua").select2({
			placeholder: "Select a state",
			dropdownParent: $('#edituser'),
			tags: true

		});



		$('#getVal').click(function(e) {
			e.preventDefault();
			console.log($('#selectdua').val())
		});
	});
</script>