<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<header>
<h1 class="display-1">Best_my_date</h1>
<p class="h3">食材を無駄にしないようにしよう！</h3>

<div>
@if (Auth::check())
<button type="button" class="btn btn-warning"><a href="{{ route('logout') }}">ログアウト</a></button>
@endif
</div>
<?php
 $time = date("Y年m月j日 Ah:i");
 print '現在時刻：' . $time;
?>
</header>