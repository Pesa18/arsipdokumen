<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row page-title-header mb-0">
	<div class="col-12">
		<div class="page-header">
			<h3 class="page-title mb-0">Dokumen</h3>
			<div class="row justify-content-end mb-2">
				<div class="col-4">
					<a href="#" role="button" data-toggle="modal" data-target="#advanced-search" aria-expanded="false" aria-controls="advanced-search" class="nav-link btn btn-secondary btn-sm mr-2"><i class="fa fa-search"></i> Pencarian Lanjut</a>
				</div>
				<div class="col-4">
					<a class="nav-link btn btn-success btn-sm" href="<?php echo site_url('/home/dl') . ($_SERVER['QUERY_STRING'] ? '?' . $_SERVER['QUERY_STRING'] : '') ?>"><i class="fa fa-file-excel-o"></i> Ekspor ke Excel (XLS)</a>

				</div>

			</div>

		</div>
	</div>
</div>

<div class="card">
	<div class="card-header py-3">
		<div class="w-100 d-md-flex flex-md-wrap">
			<div class="quick-links">
				<a href="<?= site_url('/admin/entr'); ?>" role="button" aria-expanded="false" aria-controls="advanced-search" class="nav-link btn btn-primary btn-sm mr-2"><i class="menu-icon mdi mdi-file-document-box-plus"></i> Entri Baru</a>
			</div>
		</div>
	</div>
	<!-- modal -->
	<div class="modal fade" id="advanced-search" tabindex="-1" role="dialog" aria-labelledby="advanced-search" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header py-3">
					<h4 class="modal-title">Pencarian Lanjut</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo site_url('/home/search'); ?>" method="get" id="srcmain">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Uraian</label>
									<div class="col-sm-9">
										<input id="uraian" name="uraian" class="form-control input-md" type="text" value="<?php echo $src['uraian'] ?>">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">No Arsip</label>
									<div class="col-sm-9">
										<input id="noarsip" name="noarsip" class="form-control input-md" type="text" value="<?php echo $src['noarsip'] ?>">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Retensi</label>
									<div class="col-sm-9">
										<select class="form-control" name="retensi" id="retensi">
											<option value="all">Semua</option>
											<option value="sudah" <?php echo ($src['retensi'] == 'sudah' ? 'selected=selected' : ''); ?>>Sudah</option>
											<option value="belum" <?php echo ($src['retensi'] == 'belum' ? 'selected=selected' : ''); ?>>Belum</option>
										</select>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">

								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Bagian</label>
									<div class="col-sm-9">
										<select class="form-control" name="penc" id="penc">
											<option value="all">Semua</option>
											<?php
											if (isset($penc)) {
												foreach ($penc as $p) {
													echo "<option value=\"" . $p['id'] . "\" " . ($src['penc'] == $p['id'] ? "selected=selected" : "") . ">" . " - " . $p['nama_pencipta'] . "</option>";
												}
											}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Unit</label>
									<div class="col-sm-9">
										<select class="form-control" name="peng" id="peng">
											<option value="all">Semua</option>
											<?php
											if (isset($peng)) {
												foreach ($peng as $p) {
													echo "<option value=\"" . $p['id'] . "\" " . ($src['peng'] == $p['id'] ? "selected=selected" : "") . ">" . " - " . $p['nama_pengolah'] . "</option>";
												}
											}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Lokasi</label>
									<div class="col-sm-9">
										<select class="form-control" name="lok" id="lok">
											<option value="all">Semua</option>
											<?php
											if (isset($lok)) {
												foreach ($lok as $p) {
													echo "<option value=\"" . $p['id'] . "\" " . ($src['lok'] == $p['id'] ? "selected=selected" : "") . ">" . " - " . $p['nama_lokasi'] . "</option>";
												}
											}
											?>
										</select>
									</div>
								</div>
							</div>

						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Tanggal</label>
									<div class="col-sm-9">
										<input id="tanggal" name="tanggal" class="form-control input-md" type="text" value="<?php echo $src['tanggal'] ?>">
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Ket</label>
									<div class="col-sm-9">
										<select class="form-control" name="ket" id="ket">
											<option value="all">Semua</option>
											<option value="asli" <?php echo ($src['ket'] == 'asli' ? 'selected=selected' : ''); ?>>Asli</option>
											<option value="copy" <?php echo ($src['ket'] == 'copy' ? 'selected=selected' : ''); ?>>Copy</option>
										</select>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Kode</label>
									<div class="col-sm-9">
										<select class="form-control" name="kode" id="zkode">
											<option value="all">Semua</option>
											<?php
											if (isset($kode)) {
												foreach ($kode as $p) {
													echo "<option value=\"" . $p['kode'] . "\" " . ($src['kode'] == $p['kode'] ? "selected=selected" : "") . ">" . $p['kode'] . " - " . $p['nama'] . "</option>";
												}
											}
											?>
										</select>
									</div>
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Media</label>
									<div class="col-sm-9">
										<select class="form-control" name="med" id="med">
											<option value="all">Semua</option>
											<?php
											if (isset($med)) {
												foreach ($med as $p) {
													echo "<option value=\"" . $p['id'] . "\" " . ($src['med'] == $p['id'] ? "selected=selected" : "") . ">" . " - " . $p['nama_media'] . "</option>";
												}
											}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">No. Box</label>
									<div class="col-sm-9">
										<input id="nobox" name="nobox" class="form-control input-md" type="text" value="<?php echo $src['nobox'] ?>">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<button class="btn btn-primary" type="submit" id="singlebutton" name="singlebutton"><i class="fa fa-search"></i> Cari</button>
								</div>
							</div>
						</div>

					</form>
				</div>
				<!-- ./modal body -->
				<!--<div class="modal-footer">
                           <button type="button" class="btn btn-success trigger-submit"><i class="fa fa-search"></i> Cari</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
                          </div>-->
			</div>
		</div>
	</div>
	<!-- ./modal -->

	<!-- Title -->

	<div class="card-body">
		<div id="data-grid"></div>



	</div>
</div>

<div class="modal fade" id="deldata">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header py-3">
				<h4 class="modal-title">Hapus Data</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="fdeldata" class="form-horizontal" role="form" method="post" action="<?php echo site_url("/admin/del1"); ?>">
					<h4 class="modal-title">Yakin ingin Hapus Data ini?</h4>
					<input type="hidden" name="id" id="deliddata" value="">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				<button type="button" class="btn btn-primary" id="deldatago">Hapus</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
	var data = JSON.parse(`<?= json_encode($data); ?>`)

	$(() => {

		var table = $('#data-grid').dxDataGrid({
			dataSource: data,
			showBorders: true,
			showColumnLines: true,
			showRowLines: true,
			columns: [{
				caption: "No",
				width: "auto",
				fixed: true,
				cellTemplate: (container, e) => {
					let index =
						table.pageIndex() * table.pageSize() + e.rowIndex + 1;

					container.text(index);
				}
			}, {
				dataField: "nama_dokumen",
				caption: "Nama Dokumen"

			}, {
				dataField: "tanggal",
				caption: "Tanggal",
				dataType: "date",
				format: "dd-MM-yyyy",
			}, {
				dataField: "username",
				caption: "User",
				cellTemplate(container, options) {
					$("<div/>")
						.addClass("badge rounded-pill bg-primary")
						.text(options.text)
						.appendTo(container);
				}
			}, {
				dataField: "url",
				caption: "File",
				cellTemplate(container, options) {
					var site_url = "<?= site_url() ?>"

					$("<a/>", {
						href: `${site_url}home/view/${options.text}`,
						html: $("<i/>", {
							class: "bx bx-file-find" // Kelas untuk elemen <i>
						})
					}).appendTo(container);
				}
			}]

		}).dxDataGrid("instance");
	})

	console.log(data);
</script>
<a href="link"><i class="fa fa search"></i></a>