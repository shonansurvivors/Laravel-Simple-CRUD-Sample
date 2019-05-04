@extends('base')
@section('content')
  <div class="container">
    <h2 class="text-center">詳細表示</h2>
    <div class="row">
      <div class="col-12">
        <a class="btn btn-outline-secondary float-right" href="{{ route('index') }}">戻る</a>
      </div>
    </div>

    @include('items.card')

    <div class="row">
      <div class="col-12">
        <a class="btn btn-outline-secondary float-right" href="{{ route('index') }}">戻る</a>
      </div>
    </div>
  </div>
@endsection
