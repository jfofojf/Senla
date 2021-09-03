<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Тестовое задание Senla</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
    <div class="container">
        <div class="header-contact">
            <p>Телефон: +1 332 900 62 51</p>
            <p>Email: <a href="mailto: sales@senlainc.com"> sales@senlainc.com</a></p>
        </div>
        <h1>Комментарии</h1>
    </div>
</header>
<main>
    <div class="container">
        <div class="comments">
            @foreach ($comments as $comment)
                <div class="comment-block">
                    <div class="comment-info">
                        <span class="comment-name">{{ $comment->name }}</span>
                        <span class="comment-time">{{ $comment->created_at->format('h:m') }}</span>
                        <span class="comment-year">{{ $comment->created_at->format('d.m.Y') }}</span>
                    </div>
                    <div class="comment-text">{{ $comment->body }}</div>
                </div>
            @endforeach
        </div>
        <form class="form clearfix" action="{{ route('store.index') }}" method="post">
            <h2>Оставить комментарий</h2>
            @csrf
            <label class="form-label">
                <span class="label-text">Ваше Имя</span>
                <input class="form-input" type="text" name="name" required>
            </label>
            <label  class="form-label">
                <span class="label-text">Ваш комментарий</span>
                <textarea class="form-input" name="body" rows="5" required></textarea>
            </label>
            <button class="btn" type="=submit">Отправить</button>
    </div>
</main>
<footer>
    <div class="container">
        <div class="footer-contact">
            <p>Телефон: +1 332 900 62 51</p>
            <p>Email: <a href="mailto: sales@senlainc.com"> sales@senlainc.com</a></p>
            <p>Адрес: <a href="https://clck.ru/XGSEn" rel="nofollow"></a>Тула, Клары Цеткин 6</p>
            <p class="copyright">&copy; 2021 Senlainc</p>
        </div>
    </div>
</footer>
</body>
</html>
