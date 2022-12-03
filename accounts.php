<?php 
include 'head.php';
include 'setup.php';

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: phplogin/login.php');
}

if ($_SESSION['admin'] <> 1) {
    header('Location: index.php');
	
}


?>

<body>
    <div class="container">

        <header class="availability-page-bg-img">
            
            <?php include 'admin-nav.php'; ?>

            <span class="header-title">
                <h1>Accounts</h1>
            </span>
        </header>   
        <main>
            <table id="dbtable">
                <tr>
                    <th>User Id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Activation Code</th>
                    <th>Admin</th>                    
                </tr>
                <?php 
                    $sql = "SELECT * FROM accounts";
                    $result = $conn->query($sql);
                
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        #debugging print_r($row);
                        $user_id=$row['user_id'];
                        $username=$row["username"];
                        $password=$row["password"];
                        $email=$row["email"];
                        $activation_code=$row["activation_code"];
                        $admin=$row["admin"];
                      ?>
                <tr>
                    <td><?php print $user_id; ?>
                    <a href='account_delete.php?id=<?php print $user_id; ?>'>Delete</a>
                    </td>
                    <td><?php print $username; ?></td>
                    <td><?php print $password; ?></td>
                    <td><?php print $email; ?></td>
                    <td><?php print $activation_code; ?></td>
                    <td><?php print $admin; ?></td>
                </tr>
                <?php
                    } 
                    } 
                    else {
                    
                        echo "0 results";
                    }
                $conn->close();
                ?>
            </table>

        </main>
<?php include 'bottom.php'; ?>