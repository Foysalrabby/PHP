<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Ajax Load More Pagination</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div id="main">
    <div id="header">
      <h1>PHP & Ajax Load More Pagination</h1>
    </div>

    <div id="table-data">
      <table id="loadData" border="1" width="100%" cellspacing="0" cellpadding="10px">
        <tr>
          <th>Id</th>
          <th>Name</th>
        </tr>

      </table>
    </div>

  </div>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script>
    $(document).ready(function() {
      // Load Data from Database with Ajax
      function loadTable(page){
       
          $.ajax({
        url: "ajax-pagination.php" ,
        type: "POST",
        data: {page_on:page},
        success:function(data){
           $("#loadData").append(data);

       }

        });

      }
      loadTable();

      // Add Click Event on ajaxbtn
       $(document).on("click","#ajaxbtn",function(){
        var pid=$(this).data('id');
        loadTable(pid);
      });

    });
  </script>

</body>

</html>