        <table border="1" style= "background-color: red; color: white; margin: 0 auto; font-size:150%;" >
      <thead>
        <tr>
          <th>Serial</th>
          <th>Name</th>
          <th>Address</th>
          <th>Gender</th>
          <th>Mobile</th>
	<th>Email</th>
         <th>Age</th>
	<th>Date</th>
                <th>Time</th>
</tr>
      </thead>
      <tbody>
 <?php
      $username = "root";
      $password = "";
      $host = "localhost";
      $connector = mysqli_connect($host,$username,$password)
          or die("Unable to connect");
        $selected = mysqli_select_db($connector,"contact")
        or die("Unable to connect");

      $result = mysqli_query($connector,"SELECT * FROM online_cons ");
      ?>
        <?php
          while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['serial']}</td>
              <td>{$row['name']}</td>
              <td>{$row['address']}</td>
              <td>{$row['gender']}</td>
              <td>{$row['mob']}</td>
              <td>{$row['email']}</td> 
	              <td>{$row['age']}</td> 
		              <td>{$row['date']}</td>
			<td>{$row['time']}</td> 

            </tr>\n";
          }
        ?>
     <?php mysqli_close($connector); ?>
