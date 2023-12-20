<!DOCTYPE html>
<html lang="ja">

@include('html_head')


<body>
    @include('header')
    <div id="container">



        <main>

            <section>

                <h2>Contents</h2>

                <div class="list-container">

                    <div class="list">
                        <figure><img src="images/sample1.jpg" alt=""></figure>
                        <h4>Sample Title</h4>
                        <p>ここに説明を入れます。サンプルテキスト。</p>
                    </div>

                    <div class="list">
                        <figure><img src="images/sample1.jpg" alt=""></figure>
                        <h4>Sample Title</h4>
                        <p>ここに説明を入れます。サンプルテキスト。</p>
                    </div>

                    <div class="list">
                        <figure><a href="#"><img src="images/sample1.jpg" alt=""></a></figure>
                        <h4><a href="#">Sample Title</a></h4>
                        <p>ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。</p>
                    </div>

                    <div class="list">
                        <figure><a href="#"><img src="images/sample1.jpg" alt=""></a></figure>
                        <h4><a href="#">Sample Title</a></h4>
                        <p>ここに説明を入れます。サンプルテキスト。</p>
                    </div>

                    <div class="list">
                        <figure><img src="images/sample1.jpg" alt=""></figure>
                        <h4>Sample Title</h4>
                        <p>ここに説明を入れます。サンプルテキスト。</p>
                    </div>

                    <div class="list">
                        <figure><img src="images/sample1.jpg" alt=""></figure>
                        <h4>Sample Title</h4>
                        <p>ここに説明を入れます。サンプルテキスト。</p>
                    </div>

                    <div class="list">
                        <figure><a href="#"><img src="images/sample1.jpg" alt=""></a></figure>
                        <h4><a href="#">Sample Title</a></h4>
                        <p>ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。</p>
                    </div>

                    <div class="list">
                        <figure><a href="#"><img src="images/sample1.jpg" alt=""></a></figure>
                        <h4><a href="#">Sample Title</a></h4>
                        <p>ここに説明を入れます。サンプルテキスト。</p>
                    </div>

                </div>
                <!--/.list-container-->

                <h3>上のボックスを使う場合は</h3>
                <p>ボックス全体を、<br>
                    <span class="look">&lt;div class=&quot;list-container&quot;&gt;</span><br>
                    <span class="look">&lt;div&gt;</span><br>
                    で囲んで下さい。このスタイルがないとレイアウトが崩れます。
                </p>

                <h3>画面幅1200px以上で４列に、それ以下で２列レイアウトになります</h3>
                <p>編集したい場合は、cssフォルダのstyle.css内の.listをチェックして下さい。</p>

            </section>

        </main>

        @include('menu')
        @include('footer')

</body>

</html>