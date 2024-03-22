(function ($) {
	"use strict";
	$(function () {
		$("#FormEdit").validate({
			errorClass: "is-invalid",
			validClass: "is-valid",
			rules: {
				noarsip: {
					required: true,
					minlength: 2,
				},
				nama_dokumen: {
					required: true,
				},
				tanggal: {
					required: true,
				},
				pencipta: {
					required: true,
				},
				unitpengolah: {
					required: true,
				},
				kode: {
					required: true,
				},
				uraian: {
					required: true,
				},
				lokasi: {
					required: true,
				},
				media: {
					required: true,
				},
				filepond_file: {
					required: true,
				},
			},
			messages: {
				noarsip: {
					required: "No Arsip harus diisi",
					minlength: "Minimal 2 karakter",
				},
				nama_dokumen: {
					required: "Nama Dokumen Harus diisi",
				},
				tanggal: {
					required: "Tanggal harus dipilih",
				},
				pencipta: {
					required: "Pencipta harus dipilih",
				},
				unitpengolah: {
					required: "Unit Pengolah harus dipilih",
				},
				kode: {
					required: "Kode Klasifikasi harus dipilih",
				},
				uraian: {
					required: "Uraian harus diisi",
				},
				lokasi: {
					required: "Lokasi harus dipilih",
				},
				media: {
					required: "Media harus dipilih",
				},
				filepond_file: {
					required: "Media harus dipilih",
				},
			},
			success: function (label, element) {
				if (element.id == "filepond_file") {
					$(".filepond--panel-root").removeClass("border-danger");
					$(".filepond--panel-root").addClass("border border-success");
				}
			},
			errorPlacement: function (label, element) {
				if (element[0].id == "filepond_file") {
					$(".filepond--panel-root").addClass("border border-danger");
					$(".filepond--drop-label label").text("File harus diisi!");
				} else {
					label.addClass("invalid-feedback");
					label.insertAfter(element);
				}
			},
			highlight: function (element, errorClass) {
				$(element).addClass(errorClass);
			},
			unhighlight: function (element, errorClass, validClass) {
				$(element).removeClass(errorClass).addClass(validClass);
			},
		});
		// validate signup form on keyup and submit
		$("#entriForm").validate({
			errorClass: "is-invalid",
			validClass: "is-valid",
			rules: {
				noarsip: {
					required: true,
					minlength: 2,
				},
				nama_dokumen: {
					required: true,
				},
				tanggal: {
					required: true,
				},
				pencipta: {
					required: true,
				},
				unitpengolah: {
					required: true,
				},
				kode: {
					required: true,
				},
				uraian: {
					required: true,
				},
				lokasi: {
					required: true,
				},
				media: {
					required: true,
				},
				filepond_file: {
					required: true,
				},
			},
			messages: {
				noarsip: {
					required: "No Arsip harus diisi",
					minlength: "Minimal 2 karakter",
				},
				nama_dokumen: {
					required: "Nama Dokumen Harus diisi",
				},
				tanggal: {
					required: "Tanggal harus dipilih",
				},
				pencipta: {
					required: "Pencipta harus dipilih",
				},
				unitpengolah: {
					required: "Unit Pengolah harus dipilih",
				},
				kode: {
					required: "Kode Klasifikasi harus dipilih",
				},
				uraian: {
					required: "Uraian harus diisi",
				},
				lokasi: {
					required: "Lokasi harus dipilih",
				},
				media: {
					required: "Media harus dipilih",
				},
				filepond_file: {
					required: "Media harus dipilih",
				},
			},
			success: function (label, element) {
				if (element.id == "filepond_file") {
					$(".filepond--panel-root").removeClass("border-danger");
					$(".filepond--panel-root").addClass("border border-success");
				}
			},
			errorPlacement: function (label, element) {
				if (element[0].id == "filepond_file") {
					$(".filepond--panel-root").addClass("border border-danger");
					$(".filepond--drop-label label").text("File harus diisi!");
				} else {
					label.addClass("invalid-feedback");
					label.insertAfter(element);
				}
			},
			highlight: function (element, errorClass) {
				$(element).addClass(errorClass);
			},
			unhighlight: function (element, errorClass, validClass) {
				$(element).removeClass(errorClass).addClass(validClass);
			},
		});
	});
})(jQuery);
