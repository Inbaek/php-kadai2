<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link rel="stylesheet" href="css/toroku.css">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">サイト一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ブックマーク登録</legend>
     <div id="a"><p>サイト名：</p><input type="text" name="name"></div>
     <div id="a"><p>　　URL：</p><input type="text" name="url"></div>
     <p><コメント></p><textArea name="comment" rows="4" cols="40"></textArea><br>
     <input id="b" type="submit" value="登録">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
