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
