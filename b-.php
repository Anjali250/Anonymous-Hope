
<!doctype html>
<html>
    <head>
        <title>

        </title>
        <?php include 'link.php'; ?>
        <?php include 'style.css'; ?>
</head>
<body>
    <div class="main-div">
        <h1>hospitals with B-</h1>
        <div class="center-div">
            <div class="table-wrapper">
                <table class=f1-table> 
                    <thead> 
                        <tr>
                            <th>Hospital Name</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php

                            include 'config.php';
                            $selectquery = "SELECT * FROM hospital h,plasmabank p where h.hid=p.hid and p.bloodgroup='B-' and p.availibility='YES' ";
                            $query = mysqli_query($con,$selectquery);

                            $num = mysqli_num_rows($query);



                            while($res=mysqli_fetch_array($query))
                            {
                                ?>
                            
                            
                        <tr>
                            <td><?php echo $res['hname'] ;?></td>
                            <td><?php echo $res['address'] ;?></td>
                            <td><?php echo $res['phno'];?></td>
                        </tr>
            


                        <?php

                            }
                        ?>


                    </tbody>
        

                </table>
            </div>
        </div>
    </div>