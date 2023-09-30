@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $vtuber->name }}の次のページ</h1>
        <!-- 他のVtuberの詳細情報も表示するならここに追加 -->

        <h2>会員証情報</h2>
        <p>ファンネーム: {{ $fanclubMember->fan_name }}</p>
        <p>推しの好きなところ: {{ $fanclubMember->likes }}</p>
        <p>応援コメント: {{ $fanclubMember->support_comment }}</p>
    </div>
@endsection
