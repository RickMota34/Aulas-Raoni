<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PlayGround</title>
  </head>
  <body>

    <table id="records_table" border='1'>
      <tr>
          <th>Nome</th>
          <th>Trabalho</th>
          <th>Email</th>
          <th>cidade</th>
      </tr>
    </table>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="app.js"></script>
    <script>
      $(function(){


        var Ajax = new AjaxClass();

        var getUser = Ajax.get("data2.json", function(response){
          //console.log(response[0].users);
          /*$.each(response[0].users, function (i, item) {
            $('<tr>').append(
            $('<td>').text(item.name),
            $('<td>').text(item.work),
            $('<td>').text(item.email)).appendTo('#records_table');
          });*/
          var row = '';
          row += '<tr>';
          for (var i in response[0].users) {
            row += '<td>' + response[0].users[i].name + '</td>';
            row += '<td>' + response[0].users[i].work + '</td>';
            row += '<td>' + response[0].users[i].email + '</td>';
            row+= '<td>' + response[0].users[i].city + '</td>';
            row += '</tr>';
        }
        $(row).appendTo('#records_table');


        });
        //console.log(getUser);


        //console.log("The length of data is: " + Object.keys(data).length);

        /*var $Ajax2 = new AjaxClass();
        var data2 = $Ajax2.load("data2.php")
        console.log("The length of data2 is: " + data2[0].users[0].name);

        $.each(data2[0].users, function (index, value) {
          console.log(value.name);
        });*/
      });
    </script>
  </body>
</html>
