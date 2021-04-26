<?php

echo '
 <!DOCTYPE html>
 <html lang="bg">

 <head>
   <meta charset="utf-8" />
   <link rel="stylesheet" href="index.css" />
   <title>Участници</title>
 </head>

 <body>
   <header>
     <h4>Участници</h4>
   </header>
   <main>
     <section id="users-section">
       <table id="users-table">
         <thead>
           <tr>
             <th>Име</th>
             <th>Фамилия</th>
             <th>Id</th>
           </tr>
         </thead>
         <tbody id="users-table-body">
         ';

get_users();
echo '
         </tbody>
       </table>
     </section>
   </main>
 </body>

 </html>
';

function get_users(){
  $mysqli2 = new mysqli("mysql-service", "root", "mysql-pass");

  $mysqli2->query('USE sample_lamp_app;');
  $users = $mysqli2->query('SELECT FirstName,LastName,UserId FROM USERS');

  if ($users) {
    // output data of each row
    while($row = $users->fetch_assoc()) {
      echo '<tr><td>'.$row["FirstName"].'</td><td>'.$row["LastName"].'</td><td>'.$row["UserId"].'</td></tr>';
    }
  } else {
    echo "0 results";
  }

  $mysqli2->close();
}
 ?>
