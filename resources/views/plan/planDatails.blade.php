@extends('simples')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
            <h1>Detalhes do plano</h1>
        </div>
        <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Desconto%</th>
                        <th scope="col">Observação</th>
                        <th scope="col">Data de criação</th>
                        <th scope="col">Data de atualização</th>
                        <th scope="col">Ação</th>

                </thead>

                    <tbody>
                        <th scope="row">{{$plan['id']}}</th>
                        <td>{{$plan['name']}}</td>
                        <td>{{$plan['discount']}}</td>
                        <td>{{$plan['note']}}</td>
                        <td>{{$plan['created_at']}}</td>
                        <td>{{$plan['updated_at']}}</td>

                        <td>
                            <form action="{{route('deletePlan' , $plan->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
                            </form>
                        </td>

                    </tbody>

            </table>
            <div class="d-flex justify-content-center mt-5 mb-5">
                <a href="{{route('listPlan')}}" class="btn btn-outline-primary btn-lg" title="Voltar">Voltar</a>
            </div>

        </div>
    </div>

@endsection
