<!DOCTYPE html>
<html lang="ja">

@include('html_head')


<body>
    @include('header')

    <div id="container">



        <main>

            <!--スライドショー-->
            <aside class="mainimg">
                <img src="{{asset('./images/1.jpg')}}" alt="" class="slide1">
                <img src="{{asset('./images/2.jpg')}}" alt="" class="slide2">
                <img src="{{asset('./images/3.jpg')}}" alt="" class="slide3">
            </aside>

            <section>

                <h2>News</h2>

                <dl id="new">
                    <dt>2022/08/25<span>その他</span></dt>
                    <dd>tp_biz58配布開始。</dd>
                    <dt>20XX/00/00<span class="icon-bg1">サービス</span></dt>
                    <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                    <dt>20XX/00/00<span class="icon-bg1">サービス</span></dt>
                    <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                    <dt>20XX/00/00</dt>
                    <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                    <dt>20XX/00/00<span>その他</span></dt>
                    <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                </dl>

            </section>



        </main>


        @include('menu')
        @include('footer')
</body>

</html>