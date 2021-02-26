<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>email</title>
</head>
<body>
    <?php
    if ($_GET) {
      echo 'Ci sono elementi in get';
    } else {
    echo 'Non ci sono elementi in get';

      }
      var_dump(count($_GET));

// function areValid($name,$email,$age)
// {
//   if ($_GET && strlen($name) >= 4 && strpos($email, '@') !==false && strpos($email, '.') !==false && is_numeric($age)) {
//     return true;}
//     else {
//       return false;
//     }
// }

function isValidName($name)
{
  if (strlen($name) >= 4) {
    return true;}
    else {
      return false;
    }
};

function isValidEmail($email)
{
  if (strpos($email, '@') !==false && strpos($email, '.') !==false) {
    return true;}
    else {
      return false;
    }
};

    ?>
     <div>
    <?php if (count($_GET)==3 && isValidName($_GET["name"]) && isValidEmail($_GET["email"]) && is_numeric($_GET["age"])) { ?>

      <div><p><?php echo 'Accesso riuscito' ?></p></div>
    <?php } else { ?>
      <div><p><?php echo 'Accesso negato'?></p></div>
      <?php } ?>
    </div>

</body>
</html>
