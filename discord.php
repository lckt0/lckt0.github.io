<?php
  $json = file_get_contents('https://discord.com/api/guilds/852431438413561866/widget.json');
  $obj = json_decode($json);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $obj->name; ?></title>
</head>
<body>
    <script>
        window.location.replace("<?php echo $obj->instant_invite; ?>");
    </script>
</body>
</html>
