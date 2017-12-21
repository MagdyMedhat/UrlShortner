<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
</head>
<body>
<div class="container">
    <div class="content">
     <?= Form::open(array('url' => '/generate', 'method' => 'POST'));  ?>
        <p> Please Enter your URL </p>
        <input type="text" name="url" />
        <input type="submit" name="Submit!" />
        <?=  Form::close();  ?>
    </div>
</div>
</body>
</html>
