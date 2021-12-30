@extends('simples')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
            <h1>Detalhes do curso</h1>
        </div>
        <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome do curso</th>
                        <th scope="col">Quantidade maxima</th>
                        <th scope="col">Data de criação</th>
                        <th scope="col">Data de atualização</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Mensalidade</th>
                </thead>

                    <tbody>
                        <th scope="row">{{$course['id']}}</th>
                        <td>{{$course['coursename']}}</td>
                        <td>{{$course['qntmax']}}</td>
                        <td>{{$course['createdate']}}</td>
                        <td>{{$course['updatedate']}}</td>
                        <td>{{$course['category']}}</td>
                        <td>{{$course['monthlypayment']}}</td>

                        <td>
                            <form action="{{route('deleteCourse' , $course->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
                            </form>
                        </td>

                    </tbody>

            </table>

            <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
                <h2>Aulas do curso</h2>
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
                <a href="{{route('listCourse')}}" class="btn btn-outline-primary btn-lg" title="Voltar">Voltar</a>
            </div>

        </div>
    </div>

@endsection
