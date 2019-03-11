//Sweetalert2 function
$('.tombol-logout').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah anda yakin?',
		text: 'Pilih "Logout" jika ingin keluar dari halaman ini',
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
