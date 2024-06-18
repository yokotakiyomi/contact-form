@extends('layouts.app')

@section('content')
<div class="thanks__content">
    <div class="thanks__heading">
        <h2>お問い合わせありがとうございます</h2>
    </div>
    <form class="thanks_form" action="/" method="get">
        @csrf
        <div class="form__button">
            <button class="form__button-submit" type="submit" name='home'>HOME</button>
        </div>
</div>
@endsection