<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row page-title-header mb-0">
	<div class="col-12">
		<div class="page-header">
			<h3 class="page-title">Edit Data</h3>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-header py-3">
		<a href="<?php echo base_url('/home/search'); ?>">
			<i class="fa fa-arrow-left"></i>&ensp;Kembali
		</a>
	</div>
	<div class="card-body">
		<form id="FormEdit" class="form-horizontal" data-toggle="validator" action="<?php echo site_url('/admin/edit'); ?>" method="post" enctype="multipart/form-data">
			<fieldset>
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<!-- Form Name -->
				<div class="row">
					<div class="col-md-6">
						<!-- 1st column -->
						<div class="form-group mb-3">
							<label class="col-md-4 control-label" for="noarsip">Nomor Arsip</label>
							<div class="col-md-12">
								<input id="noarsip" name="noarsip" class="form-control" type="text" value="<?php echo $noarsip ?>" required>
							</div>
						</div>

						<div class="form-group mb-3">
							<label class="col-md-4 control-label" for="nama_dokumen">Nama Dokumen</label>
							<div class="col-md-12">
								<input id="nama_dokumen" name="nama_dokumen" class="form-control" type="text" value="<?php echo $nama_dokumen ?>" required>
							</div>
						</div>

						<div class="form-group mb-3">
							<label class="col-md-4 control-label" for="tanggal">Tanggal Penciptaan</label>
							<div class="col-md-12">
								<input id="tanggal" name="tanggal" class="form-control" type="text" value="<?php echo date('Y-m-d', strtotime($tanggal)); ?>" required>
							</div>
						</div>

						<div class="form-group mb-3">
							<label class="col-md-4 control-label" for="pencipta">Pencipta Arsip</label>
							<div class="col-md-12">
								<select id="pencipta" name="pencipta" class="form-select" required>
									<?php
									if (isset($pencipta2)) {
										foreach ($pencipta2 as $k) {
											echo "<option value='" . $k['id'] . "'" . ($pencipta == $k['id'] ? "selected=selected" : "") . " >" . $k['nama_pencipta'] . "</option>";
										}
									}
									?>
								</select>
							</div>
						</div>

						<div class="form-group mb-3">
							<label class="col-md-4 control-label" for="unitpengolah">Unit Pengolah</label>
							<div class="col-md-12">
								<select id="unitpengolah" name="unitpengolah" class="form-select" required>
									<?php
									if (isset($unitpengolah2)) {
										foreach ($unitpengolah2 as $k) {
											echo "<option value='" . $k['id'] . "'" . ($unit_pengolah == $k['id'] ? "selected=selected" : "") . " >" . $k['nama_pengolah'] . "</option>";
										}
									}
									?>
								</select>
							</div>
						</div>

						<div class="form-group mb-3">
							<label class="col-md-4 control-label" for="kode">Kode Klasifikasi</label>
							<div class="col-md-12">
								<select id="kode" name="kode" class="form-select" required>
									<?php
									if (isset($kode2)) {
										foreach ($kode2 as $k) {
											echo "<option value='" . $k['id'] . "'" . ($kode == $k['id'] ? "selected=selected" : "") . " >" . $k['nama'] . " - " . $k['kode'] . "</option>";
										}
									}
									?>
								</select>
							</div>
						</div>

						<div class="form-group mb-3">
							<label class="col-md-4 control-label" for="uraian">Uraian</label>
							<div class="col-md-12">
								<textarea id="uraian" name="uraian" class="form-control" rows="3" required><?php echo $uraian ?></textarea>
							</div>
						</div>
					</div><!-- /1st column -->

					<div class="col-md-6">
						<!-- 2nd column -->
						<div class="form-group mb-3">
							<label class="col-md-4 control-label" for="lokasi">Lokasi Arsip</label>
							<div class="col-md-12">
								<select id="lokasi" name="lokasi" class="form-select" required>
									<?php
									if (isset($lokasi2)) {
										foreach ($lokasi2 as $k) {
											echo "<option value='" . $k['id'] . "'" . ($lokasi == $k['id'] ? "selected=selected" : "") . " >" . $k['nama_lokasi'] . "</option>";
										}
									}
									?>
								</select>
							</div>
						</div>

						<div class="form-group mb-3">
							<label class="col-md-4 control-label" for="media">Jenis Media</label>
							<div class="col-md-12">
								<select id="media" name="media" class="form-select" required>
									<?php
									if (isset($media2)) {
										foreach ($media2 as $k) {
											echo "<option value='" . $k['id'] . "'" . ($media == $k['id'] ? "selected=selected" : "") . " >" . $k['nama_media'] . "</option>";
										}
									}
									?>
								</select>
							</div>
						</div>

						<div class="form-group mb-3">
							<label class="col-md-4 control-label" for="ket">Keterangan Keaslian</label>
							<div class="col-md-12">
								<select class="form-select" name="ket" id="ket" required>
									<option value="asli" <?php echo ($ket == 'asli' ? "selected=selected" : "") ?>>Asli</option>
									<option value="copy" <?php echo ($ket == 'copy' ? "selected=selected" : "") ?>>Copy</option>
								</select>
							</div>
						</div>

						<div class="form-group mb-3">
							<label class="col-md-4 control-label" for="jumlah">Jumlah</label>
							<div class="col-md-12">
								<input id="jumlah" name="jumlah" class="form-control" type="text" value="<?php echo $jumlah ?>" required>
							</div>
						</div>

						<div class="form-group mb-3">
							<label class="col-md-4 control-label" for="nobox">Nomor Box</label>
							<div class="col-md-8">
								<input id="nobox" name="nobox" class="form-control input-md" type="text" value="<?php echo $nobox ?>">
							</div>
						</div>

						<div class="form-group mb-3">
							<label class="col-md-4 control-label" for="nobox">File</label>
							<div class="col-md-12">
								<input type="file" name="file" class="dropify" id="filepondEdit" data-pdf-preview-height="320" data-pdf-component-extra-params="toolbar=0&navpanes=0&scrollbar=0&view=fitH" required>
								<small class="form-text text-muted">Ukuran Maksimal <?php echo number_format(ceil(max_file_upload_in_bytes() / 1000)); ?> MB</small>

							</div>
							<input type="file" id="filepond_file" name="filepond_file">
						</div>

					</div><!-- /2nd column -->
				</div><!-- /.row -->

				<div class="form-group mb-3">
					<div class="col-md-12 d-flex justify-content-end">
						<button type="submit" id="kirim" class="btn btn-primary btn-lg"><i class="fa fa-save"></i> Simpan</button>
					</div>
				</div>

			</fieldset>
		</form>
	</div>
</div><!-- card -->

<div class="modal fade" id="delfile">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header py-3">
				<h4 class="modal-title">Hapus File</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="fdelfile" class="form-horizontal" role="form" method="post" action="<?php echo site_url("/admin/delfile"); ?>">
					<h4 class="modal-title">Yakin ingin Hapus File ini?</h4>
					<input type="hidden" name="id" id="delidfile" value="<?php echo $id ?>">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				<button type="button" class="btn btn-primary" id="delfilego">Hapus</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php
function return_bytes($val)
{
	$val = trim($val);
	$last = strtolower($val[strlen($val) - 1]);
	$val = (int)trim($val);
	switch ($last) {
		case 'g':
			$val *= 1024;
		case 'm':
			$val *= 1024;
		case 'k':
			$val *= 1024;
	}
	return $val;
}

function max_file_upload_in_bytes()
{
	//select maximum upload size
	$max_upload = return_bytes(ini_get('upload_max_filesize'));
	//select post limit
	$max_post = return_bytes(ini_get('post_max_size'));
	//select memory limit
	$memory_limit = return_bytes(ini_get('memory_limit'));
	// return the smallest of them, this defines the real limit
	return min($max_upload, $max_post, $memory_limit);
}
?>

<script>
	$("#tanggal").flatpickr({
			locale: "id"
		}

	)



	$(document).ready(function() {
		const pondEdit = FilePond.create(document.getElementById("filepondEdit"), {
			allowImagePreview: true,
			allowMultiple: false,
			allowFileEncode: false,
			allowFileSizeValidation: true,
			name: "pdf",
			acceptedFileTypes: ["application/pdf", ""],
			fileValidateTypeDetectType: (source, type) =>
				new Promise((resolve, reject) => {
					// Do custom type detection here and return with promise
					resolve(type);
				}),
			onaddfile: function(error, file) {


				console.log(file);
				const input = document.getElementById("filepond_file");
				const blob = file.file;
				const fileName = file.filename; // Nama file yang diinginkan


				const fileAsFile = new File([blob], fileName, {
					type: blob.type
				});

				// Membuat objek DataTransferItemList
				const dataTransfer = new DataTransfer();

				// Menambahkan file ke DataTransferItemList
				dataTransfer.items.add(fileAsFile);

				// Set properti files dari elemen input file dengan DataTransferItemList
				input.files = dataTransfer.files;
			},
			onremovefile: (error, file) => {

				Swal.fire({
					title: "Apakah Anda Yakin?",
					text: "Anda tidak akan dapat mengembalikan tindakan ini!",
					icon: "warning",
					showCancelButton: true,
					confirmButtonColor: "#3085d6",
					cancelButtonColor: "#d33",
					confirmButtonText: "Ya, Hapus File!"
				}).then((result) => {
					if (result.value) {
						$.ajax({
							type: "post",
							url: "<?php echo site_url("/admin/delfile"); ?>",
							data: {
								id: "<?= $id ?>"
							},
							dataType: "json",
							success: function(response) {
								if (response.status == 'success') {
									Swal.fire({
										position: "top-end",
										icon: "success",
										title: "Your work has been saved",
										showConfirmButton: false,
										timer: 1500
									}).then((result) => {
										const input = document.getElementById("filepond_file");
										input.value = null;

									});

								}


							}
						});
					} else {
						pondEdit.addFile(file.file)
					}



				});
			}

		});

		pondEdit.setOptions({
			allowPdfPreview: true,
			pdfPreviewHeight: 320,
			pdfComponentExtraParams: "toolbar=0&view=fit&page=1",
		});


		var file = "<?= $file ?>";
		if (file) {
			pondEdit.addFile('<?= base_url('files/' . $file) ?>')
		};


	});
</script>