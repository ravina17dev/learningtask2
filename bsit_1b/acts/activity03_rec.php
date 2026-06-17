<html>
    <head>
        <title>ACTIVITY 03</title>
    </head>
    <body>
        
        <form method="post" action="activity03_rec.php">
            <label> First Name </label><br>
            <strong><?php echo $_POST["txtFirstName"] ?></strong><br>
              <label> Last Name </label><br>
              <strong><?php echo $_POST["txtLasttName"] ?></strong><br
              <label> Status</label><br>
              <strong><?php echo $_POST["status"] ?></strong><br>
               <label>DOB</label><br>
              <strong><?php echo $_POST["txtDOB"] ?></strong><br>
              <label>Address</label><br>
            <strong><?php echo $_POST["txtAddress"] ?></strong><br>
              <a href="activity03_post.php">Back</a>
        </form>
    </body>
</html>    