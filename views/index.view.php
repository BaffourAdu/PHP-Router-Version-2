<?php
    //This includes the Header
    require('partials/header.php') 
?>


<h1>Users</h1>

<?php
    foreach ($users as $user){

        echo $user->username;
        echo "<br>";
    }
?>
<h1>Submit Your Name</h1>

<form method="POST" action="/names">

    <input type="text" name="name">
    <input type="submit">
    
</form>

<?php
    //This includes the footer
    require('partials/footer.php') 
?>

