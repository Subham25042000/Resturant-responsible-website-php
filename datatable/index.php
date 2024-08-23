
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
      <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">
	<title></title>
	<style>
      .thead-bg-color{
         background-color: #123071;
         color: #fff;
      }
      </style>
</head>
<body>
<table id="example" class="table table-striped" style="width:100%">
            <thead class="thead-bg-color">
                <tr>
                    <th>Name</th>
                    <th>Roll No</th>
                </tr>
            </thead>
            <tbody>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>11</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>12</td>
  </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Roll No</th>
                </tr>
            </tfoot>
        </table>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script>
    	$(document).ready(function() {
	$('#example').DataTable( {
		dom: 'Bfrtip',
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
	} );
} );
    </script>
</body>
</html>