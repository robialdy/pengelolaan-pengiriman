<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Searchable Select with Select2</title>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body>
	<div class="container mt-5">
		<div class="form-group">
			<label for="kota">Pilih Kota:</label>
			<select id="kota" class="form-control" style="width: 100%;">
				<option value="Bandung">Bandung</option>
				<option value="Jakarta">Jakarta</option>
				<option value="Surabaya">Surabaya</option>
				<option value="Jogjakarta">Jogjakarta</option>
				<option value="Cianjur">Cianjur</option>
			</select>
		</div>
	</div>

	<script>
		$(document).ready(function() {
			$('#kota').select2({
				placeholder: "Pilih kota",
				allowClear: true
			});
		});
	</script>
</body>

</html>
