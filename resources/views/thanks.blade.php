<!DOCTYPE html>
<html lang="ja">

@include('html_head')


<body>
    @include('header')

    <div id="container">


        <main>


            <section>

                <h2>Contact</h2>

                <form name="form1" enctype="multipart/form-data" method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
                    <input type="hidden" name="mode" value="finish" />
                    <p>送信が完了しました。</p>
                    <p>お問い合わせ誠にありがとうございます。</p>
                </form>

            </section>

        </main>

        @include('menu')
        @include('footer')

</body>

</html>