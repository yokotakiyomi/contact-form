@extends('layouts.app')

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="last_name" placeholder="例 山田" value="{{ old('last_name') }}" />
                    <input type="text" name="first_name" placeholder="例 太郎" value="{{ old('first_name') }}" />
                </div>
                <div class="form__error">
                    @error('first_name')
                    {{ $message }}
                    @enderror
                    @error('last_name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>

            <div class="form__group-content">
                <br class="form__input--radio">
                <input type="radio" name="gender" value="男性" id="gender1" checked /><label for="gender1">男性</label>
                <input type="radio" name="gender" value="女性" id="gender2" /><label for="gender2">女性</label>
                <input type="radio" name="gender" value="その他" id="gender3" /><label for="gender3">その他</label>
            </div>
            <div class="form__error">
                @error('gender')
                {{ $message }}
                @enderror
            </div>
        </div>
</div>
<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--text">
            <input type="email" name="email" placeholder="例 test@example.com" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
            @error('email')
            {{ $message }}
            @enderror
        </div>
    </div>
</div>
<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--tel">
            <input type=”tel” name=”tel1” size=10 placeholder="080" value="{{ old('tel1') }}" /><a>-
                <input type=”tel” name=”tel2” size=10 placeholder="1234" value="{{ old('tel2') }}" /><a>-
                    <input type=”tel” name=”tel3” size=10 placeholder="5678" value="{{ old('tel3') }}" />
        </div>
        <div class="form__error">
            @error('tel')
            {{ $message }}
            @enderror
        </div>
    </div>
</div>
<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--text">
            <input type="text" name="address" placeholder="例 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
        </div>
        <div class="form__error">
            @error('address')
            {{ $message }}
            @enderror
        </div>
    </div>
</div>
<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">建物名</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--text">
            <input type="text" name="building" placeholder="例 千駄ヶ谷マンション101" value="{{ old('building') }}" />
        </div>
        <div class="form__error">
            <!--バリデーション機能を実装したら記述-->
        </div>
    </div>
</div>
<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">問い合わせの種類</span>
        <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--text">
            <select name="content">
                <option value="選択してください">選択してください</option>
                <option value="商品のお届けについて">商品のお届けについて</option>
                <option value="商品の交換について">商品の交換について</option>
                <option value="商品トラブル">商品トラブル</option>
                <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                <option value="その他">その他</option>
            </select>
        </div>
        <div class="form__error">
            @error('content')
            {{ $message }}
            @enderror
        </div>
    </div>
</div>
<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">お問い合わせの内容</span>
        <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--text">
            <textarea name="detail" cols='70' rows='6' placeholder="お問い合わせ内容を記載してください" value="{{ old('detail') }}"></textarea>
        </div>
        <div class="form__error">
            @error('detail')
            {{ $message }}
            @enderror
        </div>
    </div>
</div>
<div class="form__button">
    <button class="form__button-submit" type="submit">確認画面</button>
</div>
</form>
</div>
@endsection