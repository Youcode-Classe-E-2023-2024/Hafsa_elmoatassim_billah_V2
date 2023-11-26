<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usersignup page</title>

<!-- le tableau qui affiche les info -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Roboto');
        *{
        margin:0;
        padding: 0;
        outline: 0;
        }
       .title{
        background-color: rgb(89, 89, 167);
        height: 100px;
       }
       .title h1{
        display: flex;
        justify-content: center;
        padding-top: 1em;
        color: #fafafa ;
        letter-spacing: 7px;
        font-family: 'Montserrat', sans-serif;
       }
    
       .addAnn button{
        background-color: rgb(102, 102, 177);
        border: none;
        border-radius: 10px;
        padding: 1em;
        margin-top: 25px;
        color: #fff;
        margin-left: 23em;
       }
        
        table{
        position: relative;
        z-index: 2;
        margin: 30px auto;
        max-width:700px; 
        border-collapse: collapse;
        border-spacing: 0;
        box-shadow: 0 2px 15px rgba(64,64,64,.7);
        border-radius: 12px 12px 0 0;
        overflow: hidden;

        }
        td , th{
        padding: 15px 20px;
        text-align: center;

        }

        .btn{
            background-color: rgba(117, 117, 244, 0.342);
        }

        th{
        background-color: rgb(89, 89, 167);
        color: #fafafa;
        font-family: 'Open Sans',Sans-serif;
        font-weight: 200;
        text-transform: uppercase;

        }
        tr{
        width: 100%;
        background-color: #fafafa;
        font-family: 'Montserrat', sans-serif;
        }
        tr:nth-child(even){
        background-color: #eeeeee;
        }
       
        /* Basic styling for the buttons */
        .main-button {
            background-color: rgb(89, 89, 167);
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .delete-button{
            background-color: #e74c3c;
            color: #fff;
            padding: 8px 15px;
            margin-left: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .update-button {
            background-color: rgb(37, 37, 155);
            color: #fff;
            padding: 8px 15px;
            margin-left: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <!-- creating the table to insert the info -->
    <table>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Confirm_Password</th>
                <th scope="col" class="main-button">Operation</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            require "connection.php";

            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo substr($row['password'], 0, 12) ; ?></td>  
                        <td><?php echo substr($row['confirm_password'], 0, 12) ; ?></td> 
                        <td>
                            <button class="delete-button">
                                <a href="./delete.php?id=<?php echo $row['id']; ?>" style="color: #fafafa; text-decoration:none;">Delete</a>
                            </button>
                            <button class="update-button">
                                <a href="./update.php?id=<?php echo $row["id"]; ?>" style="color: #fafafa; text-decoration:none;">Update</a>
                            </button>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='6'>No user found</td></tr>";
            }

            ?>
        </tbody>
    </table>
</body>
</html>