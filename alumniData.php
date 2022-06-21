<html>
    <head></head>
    <body>
        <?php
        $host = "localhost";
        $dbUser = "root";
        $dbPass = "";
        $dbname = "feza";
        
        $conn = new mysqli($host,$dbUser,$dbPass,$dbname);
        if(mysqli_connect_error()){
          die('connect error('. mysqli_connect_errno().')'. mysqli_connect_error());
        }else{
            $result = mysqli_query($conn,"SELECT * FROM alumni");
        }
        ?>
        <h1 style="text-align:center">Alumni</h1>
        <table border="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>address</th>
    <th>alumni</th>
    <th>email</th>
    <th>famous teacher</th>
    <th>headmaster during enrollment</th>
    <th>headmaster during graduation</th>
    <th>occupation</th>
    <th>phone</th>
    <th>results</th>
    <th>yoe</th>
    <th>yog</th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   
   <td><?php echo $data['address']; ?> </td>
   <td><?php echo $data['alumni']; ?> </td>
   <td><?php echo $data['email']; ?> </td>
   <td><?php echo $data['famousTeach']; ?> </td>
   <td><?php echo $data['headEnroll']; ?> </td>
   <td><?php echo $data['headGraduate']; ?> </td>
   <td><?php echo $data['occupation']; ?> </td>
   <td><?php echo $data['phone']; ?> </td>
   <td><?php echo $data['results']; ?> </td>
   <td><?php echo $data['yoe']; ?> </td>
   <td><?php echo $data['yog']; ?> </td>
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
  </table>
      
</body>
</html>