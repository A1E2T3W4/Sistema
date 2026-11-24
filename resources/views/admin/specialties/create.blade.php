
@extends('layouts.main')

@section('title', 'Adicionar Especialidade')

@section('content')

<div class="card" style="margin: 20px; height: 80vh;">

    {{-- Título --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2" style="padding: 20px; margin: 5px;">
            <h4 class="page-title">Adicionar Especialidade</h4>
        </div>
    </div>

    {{-- Formulário --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2" style="padding: 20px; margin-left:20px;">

            <form action="{{ route('specialties.store') }}" method="POST" >
                @csrf

                {{-- Nome da Especialidade --}}
                <div class="form-group" style=" margin: 5px; width: 100vh;">
                    <label>Nome da Especialidade <span class="text-danger">*</span></label>

                    <input
                        class="form-control @error('name') is-invalid @enderror"
                        type="text"
                        name="name"
                        placeholder="Digite o nome da especialidade"
                        value="{{ old('name') }}"
                        required
                        style=" margin: 5px; width: 900px;">
                    

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Descrição --}}
                <div class="form-group">
                    <label>Descrição</label>

                    <textarea
                        rows="4"
                        class="form-control @error('description') is-invalid @enderror"
                        name="description"
                        placeholder="Digite a descrição da especialidade"
                    >{{ old('description') }}</textarea>

                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Botões --}}
                <div class="m-t-20 text-center">

                    <button type="submit" class="btn btn-primary submit-btn" style="margin: 20px;">
                        Criar Especialidade
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>
@endsection
