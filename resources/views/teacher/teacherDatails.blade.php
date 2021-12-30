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
                        <th scope="col">Nome</th>
                        <th scope="col">Matricula</th>
                        <th scope="col">competence</th>
                        <th scope="col">schooling</th>
                        <th scope="col">Data de criação</th>
                        <th scope="col">Ação</th>

                </thead>

                    <tbody>
                        <th scope="row">{{$teacher['id']}}</th>
                        <td>{{$teacher['name']}}</td>
                        <td>{{$teacher['register']}}</td>
                        <td>{{$teacher['competence']}}</td>
                        <td>{{$teacher['schooling']}}</td>
                        <td>{{$teacher['created_at']}}</td>

                        <td>
                            <form action="{{route('deleteTeacher' , $teacher->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
                            </form>
                        </td>

                    </tbody>

            </table>

            <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
                <h2>Aulas ministradas</h2>
            </div>

            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Número</th>
                    <th scope="col">Tema</th>
    
                </thead>
                <tbody>
                    @foreach ($lessons as $lesson)
                        <tr>
                            <th scope="row">{{$lesson->id}}</th>
                            <td>{{$lesson->lessonnumber}}</td>
                            <td>{{$lesson->theme}}</td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
    
            <div class="d-flex justify-content-center mt-5 mb-5">
                <a href="{{route('listTeacher')}}" class="btn btn-outline-primary btn-lg" title="Voltar">Voltar</a>
            </div> 
        </div>
    </div>

@endsection
