/**
 * Config
 * -------------------------------------------------------------------------------------
 * ! IMPORTANT: Make sure you clear the browser local storage In order to see the config changes in the template.
 * ! To clear local storage: (https://www.leadshook.com/help/how-to-clear-local-storage-in-google-chrome-browser/).
 */

"use strict";

// JS global variables
let config = {
	colors: {
		primary: "#124076",
		secondary: "#8592a3",
		success: "#71dd37",
		info: "#03c3ec",
		warning: "#ffab00",
		danger: "#ff3e1d",
		dark: "#233446",
		black: "#000",
		white: "#fff",
		body: "#f4f5fb",
		headingColor: "#566a7f",
		axisColor: "#a1acb8",
		borderColor: "#eceef1",
	},
};

(function ($) {
	"use strict";

	function initActiveMenu() {
		// === following js will activate the menu in left side bar based on url ====
		$(".menu-item a").each(function () {
			console.log(this);
			var pageUrl = window.location.href.split(/[?#]/)[0];
			if (this.href == pageUrl) {
				$(this).parent().addClass("active open"); // add active to li of the current link
				$(this).parent().parent().addClass("mm-show");
				$(this).parent().parent().prev().addClass("active"); // add active class to an anchor
				$(this).parent().parent().parent().addClass("active open");
				$(this).parent().parent().parent().parent().addClass("mm-show"); // add active to li of the current link
				$(this).parent().parent().parent().parent().parent().addClass("active");
			}
		});
	}

	function init() {
		initActiveMenu();
	}
	init();

	document.addEventListener("keydown", function (event) {
		// Mendapatkan tombol yang ditekan
		var keyPressed = event.keyCode || event.which;

		// Mendapatkan tombol yang ditekan bersamaan dengan Ctrl
		var ctrlPressed = event.ctrlKey || event.metaKey; // Untuk menangani Ctrl di Mac

		// Cek apakah tombol Ctrl + K ditekan
		if (ctrlPressed && keyPressed === 75) {
			// 75 adalah kode untuk tombol K
			// Mencegah perilaku default
			event.preventDefault();
			// Menambahkan log atau melakukan tindakan apa pun yang Anda butuhkan
			console.log("Ctrl + K ditekan, tetapi diabaikan.");
		}
	});

	FilePond.registerPlugin(
		FilePondPluginFileValidateSize,
		FilePondPluginFileValidateType,
		FilePondPluginPdfPreview
	);

	const pond = FilePond.create(document.getElementById("filepond"), {
		allowImagePreview: true,
		allowMultiple: false,
		allowFileEncode: false,
		allowFileSizeValidation: true,
		name: "pdf",
		acceptedFileTypes: ["application/pdf"],
		fileValidateTypeDetectType: (source, type) =>
			new Promise((resolve, reject) => {
				// Do custom type detection here and return with promise
				resolve(type);
			}),
	});
	pond.setOptions({
		allowPdfPreview: true,
		pdfPreviewHeight: 320,
		pdfComponentExtraParams: "toolbar=0&view=fit&page=1",
	});
})(jQuery);
