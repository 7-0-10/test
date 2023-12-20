<?php

?>

<div id="menubar">

    <!--メインメニュー-->
    <nav>
        <ul>

            @if(isset($index) && $index=='true')
            <li class="current"><a href="">HOME</a></li>
            @else
            <li class="current"><a href="{{asset('./')}}">HOME</a></li>
            @endif
            <li><a href="{{asset('./company')}}">COMPANY</a></li>
            <li><a href="{{asset('./works')}}">WORKS</a></li>
            <li><a href="{{asset('./contact')}}">CONTACT</a></li>
        </ul>
    </nav>

</div>
<!--/#menubar-->