<?php

?>


<!DOCTYPE html>
<html lang="ja">

@include('html_head')

<style>
    .send_btn {
        display: inline-block;
        text-decoration: none;
        border: none;
        border-radius: 3px;
        padding: 10px 40px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        font-size: 1rem;
        background: #fff;
        letter-spacing: 0.1em;
        color: #000;
        transition: 0.3s;
    }
</style>

<body>
    @include('header')

    <div id="container">

        <main>

            <section>

                <h2>Contact</h2>

                <!-- フォームの情報はここからです -->
                <form name="form1" enctype="multipart/form-data" method="post" action="{{ url('/contact/thanks')}}">
                    @csrf
                    <input type="hidden" name="mode" value="confirm">
                    <table class="ta1">
                        <caption>確認画面</caption>
                        <!-- 入力／確認 -->
                        <tr>
                            <th width="150">お名前</th>
                            <td>
                                <input type="hidden" name="name" value="{{$inputs['name']}}">
                                {{$inputs['name']}}
                            </td>
                        </tr>
                        <tr>
                            <th width="150">メールアドレス</th>
                            <td>
                                <input type="hidden" name="email" value="{{$inputs['email']}}">
                                {{$inputs['email']}}
                            </td>
                        </tr>
                        <tr>
                            <th>お問い合わせ内容</th>
                            <td>
                                <input type="hidden" name="body" value="{{$inputs['body']}}">
                                {{$inputs['body']}}
                            </td>
                        </tr>
                    </table>

                    <p class="btn">
                        <button type="submit" name="action" value="submit" class="send_btn">
                            送信する
                        </button>
                        &nbsp;
                        <button type="submit" name="action" value="back" class="send_btn">
                            戻る
                        </button>

                </form>
                <!-- フォームの情報はここまでです -->

            </section>

        </main>
        @include('menu')
        @include('footer')

</body>

</html>