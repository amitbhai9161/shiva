<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userdata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <style>
      h2{
        align-items: center;
      }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
            <ul class="list-group">
                    <li class="list-group-item">a</li>
                    <li class="list-group-item">b</li>
                    <li class="list-group-item">myo</li>
                    <li class="list-group-item">Splone</li>
                    <li class="list-group-item">dlclone</li>
                  </ul>
            </div>
           
            <div class="col-sm-10">
          
                <div class="row" style="height: 50px; background: gray;">
                <h2>User data</h2>
                    <div class="col-sm-10"></div>
              
                    <div class="col-sm-2">
                  


                    </div>
                </div>

               <div class="row">

                <table class="table table-bordered" border="1px solid">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Address</th>
                        <th scope="col">password</th>
             
                      </tr>
                    </thead>
                    <tbody>
                        <?php
$conn=mysqli_connect("localhost","root","","hbwebsite");
$sel="select * from s";
$r=mysqli_query($conn,$sel);
while($k=mysqli_fetch_array($r,MYSQLI_BOTH))
{
   ?>
   <tr>
    <td><?php echo $k['0']?></td>
    <td><?php echo $k['1']?></td>
    <td><?php echo $k['2']?></td>
    <td><?php echo $k['3']?></td>
    <td><?php echo $k['4']?></td>
    <td><?php echo $k['5']?></td>
    <td><?php echo $k['6']?></td>
   </tr>
<?php
}
  ?>
                     
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

            </div>
        </div>

    </div>
</body>
</html>