<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>アプリケーション名</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">アプリケーション名</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false"
            aria-label="ナビゲーションの切替">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="Navber">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <!-- TODO:リンク先追加 -->
          <a class="nav-link" href="">管理サイト</a>
        </li>
        <li class="nav-item">
          <!-- TODO:リンク先追加 -->
          <a class="nav-link" href="">ログアウト</a>
        </li>
      </ul>
    </div>
  </nav>

@yield('content')

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
          crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
