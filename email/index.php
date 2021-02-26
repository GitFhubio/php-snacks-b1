<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>email</title>
</head>
<body>
    <?php
    // if ($_GET) {
    //   echo 'Ci sono elementi in get';
    // } else {
    // echo 'Non ci sono elementi in get';
    //
    //   }


function areValid($name,$email,$age)
{
  if ($_GET && strlen($name) >= 4 && strpos($email, '@') !==false && strpos($email, '.') !==false && is_numeric($age)) {
    return true;}
    else {
      return false;
    }
}

    ?>
     <div>
      <!-- potrebbe esserci problema se metto !=false o non metto proprio niente
      zero lo prenderà come un true -->
    <?php if (areValid($_GET["name"],$_GET["email"],$_GET["age"])) { ?>

      <div><p><?php echo 'Accesso riuscito' ?></p></div>
    <?php } else { ?>
      <div><p><?php echo 'Accesso negato'?></p></div>
      <?php } ?>
    </div>

</body>
</html>
