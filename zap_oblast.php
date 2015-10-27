<!DOCTYPE html>
<html>
<head id="head">
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>С приветом из Александровска <?php echo count(glob('fotos/zapoblast/*.jpg')); ?> фотографии</title>
    <link rel="stylesheet" type="text/css" href="css/afg.css">
</head>
<body id="body">
<script type="text/javascript">
    var number = <?php echo count(glob('fotos/zapoblast/*.jpg')); ?>;
    var dirr = 'zapoblast';
</script>
<script type="text/javascript" src="javascript/slider.js"></script>
</body>
</html>