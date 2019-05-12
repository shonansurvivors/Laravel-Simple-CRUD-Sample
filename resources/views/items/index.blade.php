@extends('base')
@section('content')
  <div class="container">
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">検索条件</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="filter" method="get">
            <div class="modal-body">
              <form method="GET" action="{{ route('index') }}" id="myform">
                <div class="form-group">
                  <label>名前</label>
                  <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="sex">性別</label>
                  <select id="sex" name="sex" class="form-control">
                    <option value="">---------</option>
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                    <option value="3">指定無し</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>備考</label>
                  <textarea name="memo" class="form-control"></textarea>
                </div>
              </form>
            </div>
          </form>
          <div class="modal-footer">
            <a class="btn btn-outline-secondary" data-dismiss="modal">戻る</a>
            <button type="submit" class="btn btn-outline-secondary" form="filter">検索</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <a class="btn btn-secondary filtered" style="visibility:hidden" href="/?page=1">検索を解除</a>
        <div class="float-right">
          <a class="btn btn-outline-secondary" href="{{ action('ItemController@create') }}">新規</a>
          <a class="btn btn-outline-secondary" data-toggle="modal" data-target="#myModal" href="#">検索</a>
        </div>
      </div>
    </div>

    <div class="row" >
      <div class="col-12">
        {{ $items->links() }}
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <ul class="list-group">
          @if(!count($items))
            <li class="list-group-item">
              対象のデータがありません
            </li>
          @endif
          @foreach($items as $item)
            <li class="list-group-item">
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
                  <p>登録日</p>
                </div>
                <div class="col-9">
                  <p>{{ $item->created_at }}</p>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="float-right">
                    <a class="btn btn-outline-secondary " href="{{ route('show', ['id' => $item->id]) }}">詳細</a>
                    <a class="btn btn-outline-secondary " href="{{ route('edit', ['id' => $item->id]) }}">編集</a>
                    <a class="btn btn-outline-secondary " href="{{ route('delete', ['item' => $item]) }}">削除</a>
                  </div>
                </div>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="row" >
      <div class="col-12">
        <div class="float-right">
          <a class="btn btn-outline-secondary" href="{{ action('ItemController@create') }}">新規</a>
          <a class="btn btn-outline-secondary" data-toggle="modal" data-target="#myModal" href="#">検索</a>
        </div>
      </div>
    </div>
  </div>
@endsection
