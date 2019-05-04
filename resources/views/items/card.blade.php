<div class="row">
  <div class="col-3">
    <p>名前</p>
  </div>
  <div class="col-9">
    <p>{{ $item->name }}</p>
  </div>
</div>
<div class="row">
  <div class="col-3">
    <p>年齢</p>
  </div>
  <div class="col-9">
    <p>{{ $item->age }}</p>
  </div>
</div>
<div class="row">
  <div class="col-3">
    <p>性別</p>
  </div>
  <div class="col-9">
    @if($item->sex === 1)
      <p>男性</p>
    @elseif($item->sex === 2)
      <p>女性</p>
    @elseif($item->sex === 3)
      <p>指定なし</p>
    @else
      <p></p>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-3">
    <p>備考</p>
  </div>
  <div class="col-9">
    <p>{{ $item->memo }}</p>
  </div>
</div>
<div class="row">
  <div class="col-3">
    <p>登録日</p>
  </div>
  <div class="col-9">
    <p>{{ $item->created_at }}</p>
  </div>
</div>
<div class="row">
  <div class="col-3">
    <p>更新日</p>
  </div>
  <div class="col-9">
    <p>{{ $item->updated_at }}</p>
  </div>
</div>
