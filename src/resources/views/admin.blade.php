<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>admin form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
            <div class="header__login">
                <button type="button" name="login" value="login">login
            </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Admin</h2>
            </div>
            <form class="search-form" action="/admin/search" method="get">
                @csrf
                <div class="search-form__item">
                    <input type="text" name='text' placeholder="名前やメールアドレスを入力してください" />
                    <div class="search-form__item">
                        <select name='gender'>
                            <option value="男性">男性</option>
                            <option value="女性">女性</option>
                            <option value="その他">その他</option>
                        </select>
                    </div>
                    <div class="search-form__item">
                        <select name='contact' value="お問い合わせの種類">
                            <option value="選択してください">選択してください</option>
                            <option value="商品のお届けについて">商品のお届けについて</option>
                            <option value="商品の交換について">商品の交換について</option>
                            <option value="商品トラブル">商品トラブル</option>
                            <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                            <option value="その他">その他</option>
                        </select>
                    </div>
                    <div class="search-form__item">
                        <input type="date" id="start" name="trip-start" value="2024-06-1" min="2024-6-1" max="2025-12-31" />
                    </div>
                    <div class="search-form__item">
                        <button class="search-form__button-submit" type="submit">検索
                        </button>
                    </div>
                    <div class="search-form__item">
                        <button class="search-form__button-submit" type="submit">リセット
                        </button>
                    </div>
                    <div class="contact-form_user">
                        <table class="contact-form_user-table">
                            <tr>
                                <th>お名前</th>
                                <th>性別</th>
                                <th>メールアドレス</th>
                                <th>お問い合わせの種類</th>
                            </tr>


                    </div>
                </div>
    </main>
</body>

</html>