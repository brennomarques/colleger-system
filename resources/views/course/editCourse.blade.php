@extends('simples')
@section('content')
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg>

    @if($errors->any())
        <div class="alert alert-danger d-flex justify-content-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    @if (count($errors->all()) > 1)
                        Todos os campos são obrigatórios
                    @else
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    @endif

                </div>
            </div>
    @endif

    <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
        <h1>Atualizar curso {{$course->coursename}}</h1>
    </div>

    <div class="container mt-5">
        <form action="{{route('updateCourse', $course->id)}}" method="post" class="row g-3 shadow-lg p-3 mb-5 bg-body rounded">

            @csrf
            @method('PUT')


            <div class="col-md-4">
              <label class="form-label">Nome do curso</label>
              <input type="text" class="form-control" name="coursename" value="{{ $course->coursename }}">
            </div>

            <div class="col-md-4">
              <label class="form-label">Quantidade máxima</label>
              <input type="number" class="form-control" name="qntmax" value="{{ $course->qntmax }}">
            </div>

            <div class="col-md-4">
              <label class="form-label">Data de criação</label>
              <input type="text" class="form-control" name="createdate" value="{{ $course->createdate }}">
            </div>

            <div class="col-md-3">
              <label class="form-label">Data de atualização</label>
              <input type="text" class="form-control" name="updatedate" value="{{ $course->updatedate }}">
            </div>

            <div class="col-md-3">
                <label class="form-label">Categoria</label>
                <input type="text" class="form-control" name="category" value="{{ $course->category }}">
            </div>

            <div class="col-md-3">
                <label class="form-label">Mensalidade</label>
                <input type="text" class="form-control" name="monthlypayment" value="{{ $course->monthlypayment}}">
            </div>

            <div class="col-12 d-flex justify-content-end mt-5">
              <button type="submit" class="btn btn-primary" title="Salvar informações">Salvar</button>
            </div>

        </form>
    </div>

@endsection
