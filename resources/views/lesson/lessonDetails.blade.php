@extends('simples')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
            <h1>Detalhes do professor</h1>
        </div>
        <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Número</th>
                        <th scope="col">Tema</th>
                        <th scope="col">Duração</th>
                        <th scope="col">Anotações</th>
                        <th scope="col">Curso ID</th>
                        <th scope="col">Teacher ID</th>
                        <th scope="col">Data de criação</th>
                        <th scope="col">Data de atualização</th>
                </thead>

                    <tbody>
                        <th scope="row">{{$lesson['id']}}</th>
                        <td>{{$lesson['lessonnumber']}}</td>
                        <td>{{$lesson['theme']}}</td>
                        <td>{{$lesson['duration']}}</td>
                        <td>{{$lesson['note']}}</td>
                        <td>{{$lesson['courseid']}}</td>
                        <td>{{$lesson['teacherid']}}</td>
                        <td>{{$lesson['createdate']}}</td>
                        <td>{{$lesson['updatedate']}}</td>

                        <td>
                            <form action="{{route('deleteLesson' , $lesson->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
                            </form>
                        </td>

                    </tbody>

            </table>
            <div class="d-flex justify-content-center mt-5 mb-5">
                <a href="{{route('listLesson')}}" class="btn btn-outline-primary btn-lg" title="Voltar">Voltar</a>
            </div>

        </div>
    </div>

@endsection
