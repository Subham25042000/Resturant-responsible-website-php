<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
      <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">
  <title>Book-Order</title>
  <style>
    
    /* table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f2f2f2;
      color: #333;
      font-weight: bold;
    }
    
    tr:hover {
      background-color: #f5f5f5;
    } */
    
    form {
      margin-bottom: 20px;
    }
    
    input[type="text"], select {
      padding: 6px;
      width: 150px;
    }
    
    input[type="submit"] {
      padding: 8px 16px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    
      .thead-bg-color{
         background-color: #123071;
         color: #fff;
      }
      
  </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark mb-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Cinnamon cafe Admin</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="Book.html">book-table</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.html">gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="subscriptionn.html">subscription</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.html">contact</a>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>

  <!-- <form id="teamForm m-5">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="number">Number:</label>
    <input type="number" id="number" name="number" required>
    
    <label for="guest">No of Guest</label>
    <input type="number" id="guest" name="guest" required>

    <label for="dob">Date</label>
    <input type="date" id="dob" name="dob" required>
    
    <input type="submit" value="Submit">
  </form> -->
  <div class="container">
  <table id="example" class="table table-striped" style="width:100%">
    <thead class="thead-bg-color">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>message</th>
            

        </tr>
    </thead>
    <tbody>
<tr>
<td>Alfreds Futterkiste</td>
<td>11</td>
<td>11</td>
<td>11</td>
</tr>
<tr>
<td>Centro comercial Moctezuma</td>
<td>12</td>
<td>11</td>
<td>11</td>
</tr>
    </tbody>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>NUmber</th>
            <th>Message</th>
        </tr>
    </tfoot>
</table>
</div>
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