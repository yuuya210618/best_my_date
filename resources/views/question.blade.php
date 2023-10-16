<div class="p-3 mb-2 bg-light text-dark">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<h1>Q & A</h1>

<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">

    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        このアプリの使い方について
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">食材記録のボタンをクリックし、食品名・賞味期限を入力しましょう。トップページに食品と賞味期限・賞味期限があと何日で切れるか表示されます。</div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      賞味期限と消費期限の違い
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">賞味期限→おいしさの品質が保たれる期限、消費期限→安全に食べられる期限です。</div>
    </div>
  </div>
  

  </div>
</div>

<style>
        a {
            text-decoration: none;
            color: black; 
        }
    </style>

<button type="button" class="btn btn-warning"><a href="{{ route('welcome') }}">戻る</a></button>

      </div>