<header>
<h1>Best_my_date</h1>
<h3>食材を無駄にしないようにしよう！</h3>

<div>
@if (Auth::check())
    <a href="{{ route('logout') }}">ログアウト</a>
@endif
</div>
<?php
 $time = date("Y年m月j日 Ah:i");
 print $time;
?>
</header>