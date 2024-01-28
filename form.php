<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Application name : AAST_BIS class registration</h1>
    <h4 style="color: red;">* Required field</h4>
    <form action="" method="post">
        <label for="" >Name : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']):''  ?>">
        <span class="error">*</span> <span class="error"> <?php if(isset($_POST['submit'])){
         if(empty($_POST['name'])){
        echo "Name is required";
        }
      }?> </span>
        <br><br>
        <label for="" >Email : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']):''  ?>"> <span class="error">*</span>
        <span class="error"> <?php if(isset($_POST['submit'])){
         if(empty($_POST['email'])){
        echo "Email is required";
        }
      }?> </span><br><br>
        <label for="">Group : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="group" value="<?php echo isset($_POST['group']) ? htmlspecialchars($_POST['group']):''  ?>"><br><br>
        <label for="" >Class Details : &nbsp</label>
        <textarea name="textarea" id="" cols="15" rows="5" value="<?php echo isset($_POST['textarea']) ? htmlspecialchars($_POST['textarea']):''  ?>"></textarea><br><br>
        <label for="">Gender : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="radio" name="gender" value="male"> Male 
        <input type="radio" name="gender" value="female"> Female <span class="error">*</span>
        <span class="error"> <?php if(isset($_POST['submit'])){
         if(empty($_POST['gender'])){
        echo "Gender is required";
        }
      }?> </span><br><br>
        <label for="">Select courses : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <select name="selector" id="" multiple>
            <option value="PHP">PHP</option>
            <option value="Javascript">Javascript</option>
            <option value="MySQL">MySQL</option>
            <option value="HTML">HTML</option>
        </select><br><br>
        <label for="">Agree : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="checkbox" name="agree" ><span class="error">*</span>
        <span class="error"> <?php if(isset($_POST['submit'])){
         if(empty($_POST['agree'])){
        echo "You Must agree the terms";
        }
      }?> </span>
        <br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['group']) &&isset($_POST['gender']) &&  isset($_POST['textarea'])  && isset($_POST['selector']) && isset($_POST['agree'])){
    echo '<h4> Your given values are as : </h4> ';
    echo "Name :".$_POST['name']. '<br>';
    echo "Email : ".$_POST['email']. '<br>';
    echo "Group : ".$_POST['group']. '<br>';
    echo "Class details : ".$_POST['textarea']. '<br>';
    echo "Gender : ".$_POST['gender']. '<br>';
    echo "Your courses are ".$_POST['selector']. '<br>';
}elseif(isset($_POST['submit'])){
    $_POST['gender']='';
    $_POST['selector']='';
    echo '<h4> Your given values are as : </h4> ';
    echo "Name :".$_POST['name']. '<br>';
    echo "Email : ".$_POST['email']. '<br>';
    echo "Group : ".$_POST['group']. '<br>';
    echo "Class details : ".$_POST['textarea']. '<br>';
    echo "Gender : ".$_POST['gender']. '<br>';
    echo "Your courses are : ".$_POST['selector']. '<br>';   
}
?>