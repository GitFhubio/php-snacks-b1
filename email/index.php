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
    //   var_dump(count($_GET));

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

// function areAllFieldsFilled()
// {if(count($_GET)==3){
//   return true;
// } else {return false;}
// }
function areAllFieldsFilled($name,$email,$age)
{if(!empty($name) && !empty($email) && !empty($age)){
  return true;
} else {return false;}
}

if (areAllFieldsFilled($_GET["name"],$_GET["email"],$_GET["age"]) && isValidName($_GET["name"]) && isValidEmail($_GET["email"]) && is_numeric($_GET["age"])) {

      $message = 'Accesso riuscito' ;}
     else
       {$message = 'Accesso negato';}

    ?>
    
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title></title>
      </head>
      <body>
        <p><?php echo $message ?></p>
      </body>
    </html>
</body>
</html>
