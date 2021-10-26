<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Insert Data Laundry</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
	<script>
		$( function() {
			$('#datepicker').datepicker({ dateFormat: 'yy-mm-dd' });
			$("#timepicker").timepicker({timeFormat:'HH:mm:ss'});
		} );
	</script>
</head>
<body>
	<header>
        @include('includes.header')
    </header>
	<div class="container" style="margin-bottom:30px">
		<div class="row">
			<div class="col">
			</div>
			<div class="col-8">
				<h3 class="text-center display-4">Tambah Data</h3>

				<form action="/data_laundry/store" method="post">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="tanggal">Tanggal</label>
						<input type="text"  class="form-control" name="tanggal" id="datepicker">
					</div>
					<div class="form-group">
						<label for="waktu">Waktu</label>
						<input type="text" class="form-control" name="waktu" id="timepicker">
					</div>
					<div class="form-group">
						<label for="berat">Berat</label>
						<input type="berat" class="form-control" name="berat" id="berat" placeholder="Berat">
					</div>

					<div class="form-group">
						<label for="inputState">Progres</label>
						<select id="progres" class="form-control" name="progres">
							<option selected>Choose...</option>
							<option value="cuci">Cuci</option>
							<option value="kering">Kering</option>
							<option value="setrika">Setrika</option>
						</select>
					</div>

					<button type="submit" class="btn btn-danger center">Tambah Data</button>
				</form>
			</div>
            <div class="col">
            </div>
		</div>
	</div>
	<footer class="footer">
        @include('includes.footer')
    </footer>
</body>
</html>