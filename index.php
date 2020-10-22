<?php
  class User {
    public $name;
    public $lastname;
    public $username;
    public $email;
    public $tel;
    public $password;

    public function __construct($_username, $_email, $_tel, $_password) {
      $this->username = $_username;
      $this->email = $_email;
      $this->tel = $_tel;
      $this->password = $_password;
    }
  }

  $user1 = new User("dcesare", "dcesare@mail.com", "1234567890", "123");
  $user2 = new User("mrossi", "mrossi@mail.com", "1237894560", "456");
  $user3 = new User("gverdi", "gverdi@mail.com", "4567891230", "789");
  $user4 = new User("mbianchi", "mbianchi@mail.com", "9876543210", "147");
  $user5 = new User("ohciao", "ohciao@mail.com", "3692581470", "258");

  $users = [$user1, $user2, $user3, $user4, $user5];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP OOP</title>
</head>
<body>
  <div class="list_main">
    <?php foreach ($users as $user) { ?>
      <ul class="list_users">
        <li>USERNAME: <?php echo $user->username ?></li>
        <li>EMAIL: <?php echo $user->email ?></li>
        <li>TEL: <?php echo $user->tel ?></li>
        <li>PASSWORD: <?php echo $user->password ?></li>
      </ul>
    <?php } ?>
  </div>
</body>
</html>
