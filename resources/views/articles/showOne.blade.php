<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Article {{ $article->id }}</title>
</head>
<body>
  <h2>{{ $article->title }}</h2>
  <p>{{ $article->body }}</p>
  <a href="/articles">back</a>
</body>
</html>