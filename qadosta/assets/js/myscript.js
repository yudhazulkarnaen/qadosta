$('.tombol-save').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');
	// var action = document.getElementById("myForm").action;

	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "Data yang akan disimpan tidak akan bisa kembali!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, save it!'
	}).then((result) => {
		if (result.value) {
			$('#formSave').submit();
		}
	})
});

$('.tombol-password').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');
	// var action = document.getElementById("myForm").action;

	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "Password yang baru akan disimpan, anda akan logout setelah ini!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, save it!'
	}).then((result) => {
		if (result.value) {
			$('#formPassword').submit();
		}
	})
});

$('.tombol-input').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');
	// var action = document.getElementById("myForm").action;

	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "Pastikan data yang anda masukan benar!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, Input data!'
	}).then((result) => {
		if (result.value) {
			$('#formInputProject').submit();
		}
	})
});

$('.tombol-input-user').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');
	// var action = document.getElementById("myForm").action;

	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "Pastikan data yang anda masukan benar!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, Input data!'
	}).then((result) => {
		if (result.value) {
			$('#formInputUser').submit();
		}
	})
});