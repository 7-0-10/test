<!DOCTYPE html>
<html lang="ja">

@include('html_head')


<body>
    @include('header')

    <div id="container">


        <main>

            <section>

                <h2>Contact</h2>
                <form method="POST" action="{{ url('/contact/confirm')}}">
                    @csrf
                    <table class="ta1">
                        <tr>
                            <th>お名前※</th>
                            <td><input type="text" size="30" class="ws" name="name" value="{{ old('name') }}"></td>
                            @if ($errors->has('name'))
                            <p class="error-message">{{ $errors->first('name') }}</p>
                            @endif
                        </tr>
                        <tr>
                            <th>メールアドレス※</th>
                            <td><input type="text" size="30" class="ws" name="email" value="{{ old('email') }}"></td>
                            @if ($errors->has('email'))
                            <p class="error-message">{{ $errors->first('email') }}</p>
                            @endif
                        </tr>
                        <tr>
                            <th>お問い合わせ詳細※</th>
                            <td><textarea cols="30" rows="10" class="wl" name="body">{{ old('body') }}</textarea></td>
                            @if ($errors->has('body'))
                            <p class="error-message">{{ $errors->first('body') }}</p>
                            @endif

                        </tr>
                    </table>

                    <p class="btn">
                        <input type="submit" value="内容を確認する">
                    </p>

            </section>

        </main>

        @include('menu')
        @include('footer')

</body>

</html>