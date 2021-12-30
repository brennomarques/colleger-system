@extends('simples')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
            <h1>Detalhes do aluno</h1>
        </div>
        <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Matricula</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Data de narcimento</th>
                        <th scope="col">Resp. financeiro</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Plano</th>
                        <th scope="col">Data de criação</th>
                        <th scope="col">Ação</th>

                </thead>

                    <tbody>
                        <th scope="row">{{$student['id']}}</th>
                        <td>{{$student['name']}}</td>
                        <td>{{$student['register']}}</td>
                        <td>{{$student['cpf']}}</td>
                        <td>{{$student['birth']}}</td>
                        <td>{{$student['financial_officer']}}</td>
                        <td>{{$student['id_course']}}</td>
                        <td>{{$student['id_plan']}}</td>
                        <td>{{$student['created_at']}}</td>

                        <td>
                            <form action="{{route('deleteStudent' , $student->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
                            </form>
                        </td>

                    </tbody>

            </table>

            <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
                <h2>Plano</h2>
            </div>
            <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Mensalidade sem desconto</th>
                            <th scope="col">Mensalidade com desconto</th>
                            <th scope="col">Desconto%</th>
                
                    </thead>
    
                        <tbody>
                            <th scope="row">{{$plan['id']}}</th>
                            <td>{{$monthlyPayment}}</td>
                            <td>{{$monthlyPayment*(1-$plan['discount']/100)}}</td>
                            <td>{{$plan['discount']}}</td>
    
                      
    
                        </tbody>
    
                </table>

            <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
                <h2>Aulas</h2>
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
                <a href="{{route('listStudent')}}" class="btn btn-outline-primary btn-lg" title="Voltar">Voltar</a>
            </div>

        </div>
    </div>

@endsection
