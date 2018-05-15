@extends('layouts.app')

@section('content')

    <h1>id = {{ $tasklist->id }} のタスク詳細ページ</h1>
    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $tasklist->id }}</td>
        </tr>
        <tr>
            <th>タスク内容</th>
            <td>{{ $tasklist->content }}</td>
        </tr>
        <tr>
            <th>状態</th>
            <td>{{ $tasklist->status }}</td>
        </tr>
    </table>

    
    {!! link_to_route('tasklists.edit', 'このタスクを編集', ['id' => $tasklist->id], ['class' => 'btn btn-default']) !!}
    
    {!! Form::model($tasklist, ['route' => ['tasklists.destroy', $tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-default']) !!}
    {!! Form::close() !!}


@endsection