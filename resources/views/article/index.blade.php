@extends('layouts.app')

@section('content')
    <small><a href="{{ route('articles.create') }}">Создать статью</a></small>
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2>
            <a href="{{ route('articles.show', ['id' => $article->id]) }}">{{$article->name}}</a>
            (
            <a href="{{ route('articles.edit', ['id' => $article->id]) }}">Редактировать</a>
            <a href="{{ route('articles.destroy', ['id' => $article->id]) }}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Удалить</a>
            )
        </h2>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
    <br>
    {{ $articles->links() }}
@endsection
