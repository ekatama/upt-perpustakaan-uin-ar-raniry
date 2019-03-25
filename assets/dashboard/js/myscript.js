//Sweetalert2 function
//sweetalert album
const flashDataAlbum = $('.flash-data-album').data('flashdata');

if (flashDataAlbum) {
	Swal.fire({
		title: 'Album',
		text: 'Berhasil ' + flashDataAlbum + ' :)',
		type: 'success'
	});
}

//sweetalert artikel
const flashDataArtikel = $('.flash-data-artikel').data('flashdata');

if (flashDataArtikel) {
	Swal.fire({
		title: 'Artikel atau Event',
		text: 'Berhasil ' + flashDataArtikel + ' :)',
		type: 'success'
	});
}

//sweetalert artikel
const flashDataFoto = $('.flash-data-foto').data('flashdata');

if (flashDataFoto) {
	Swal.fire({
		title: 'Foto',
		text: 'Berhasil ' + flashDataFoto + ' :)',
		type: 'success'
	});
}

//tombol logout
$('.tombol-logout').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah anda yakin?',
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: 'btn btn-primary',
		cancelButtonColor: 'btn btn-secondary',
		confirmButtonText: 'Logout'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
})

//tombol hapus
$('.tombol-hapus').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah anda yakin?',
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#e74a3b',
		cancelButtonColor: 'btn btn-secondary',
		confirmButtonText: 'Hapus'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
})

//Boostrap validation function
window.addEventListener('load', function () {
	// Fetch all the forms we want to apply custom Bootstrap validation styles to
	var forms = document.getElementsByClassName('needs-validation');
	// Loop over them and prevent submission
	var validation = Array.prototype.filter.call(forms, function (form) {
		form.addEventListener('submit', function (event) {
			if (form.checkValidity() === false) {
				event.preventDefault();
				event.stopPropagation();
			}
			form.classList.add('was-validated');
		}, false);
	});
}, false);

//Bootstrap upload file name function
$(document).ready(function () {
	bsCustomFileInput.init()
})

// Drag n drop function
$("#dragndrop").dropzone({
	maxFilesize: 4,
	acceptedFiles: "image/*"
});
