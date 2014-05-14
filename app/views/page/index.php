<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hi there, <?php echo $user->username ?></title>
</head>
<body>
<H3>Hi there, <?php echo $user->username ?></H3>
<p>you are <?php echo $user->fullname ?>, and your email is <?php echo $user->email ?> </p>
</body>
</html>