
@extends('layouts.main')

@section('title', 'Lista de Médicos')

@section('page-title', 'Lista de Médicos')

@section('content')

<div class="app-body">

    <div class="row gx-3">
        <div class="col-sm-12">

            <div class="card">

                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title">Lista de Médicos</h5>

                    <a href="#" class="btn btn-primary ms-auto">
                        <i class="ri-add-line me-1"></i>
                        Criar Fatura
                    </a>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table truncate m-0 align-middle">
                             <div class="col-12">
                                        <div class="mb-3">
                                            
                                            <div class="input-group">
                                               
                                                <input type="text" class="form-control"
                                                    placeholder="Pesquisar fatura...">
                                            </div>
                                        </div>
                                    </div>

                            <thead>
                                <tr>
                                    <th>Nº da Fatura</th>
                                    <th>Paciente</th>
                                    <th>Data de Emissão</th>
                                    <th>Data de Validade</th>
                                    <th>Valor</th>
                                    <th>Estado</th>
                                    <th>Acções</th>                               
                                </tr>
                            </thead>

                            <tbody>

                                @php
                                    $doctors = [
                                    
                                    ];
                                @endphp

                                @foreach ($doctors as $doctor)

                                    <tr>
                                        <td>#{{ $doctor['id'] }}</td>

                                        <td>
                                            <img src="{{ asset('assets/images/' . $doctor['image']) }}"
                                                class="img-shadow img-2x rounded-5 me-1"
                                                alt="Foto do médico">

                                            {{ $doctor['name'] }}
                                        </td>

                                        <td>{{ $doctor['specialty'] }}</td>

                                        <td class="text-center text-danger">-</td>

                                        @for ($i = 0; $i < 6; $i++)
                                            <td class="text-center">{{ $doctor['time'] }}</td>
                                        @endfor

                                        <td>
                                            <div class="d-inline-flex gap-1">

                                                <button type="button"
                                                    class="btn btn-outline-danger btn-sm"
                                                    onclick="alert('Exemplo: eliminar médico')"
                                                    title="Eliminar">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>

                                                <a href="#"
                                                    class="btn btn-outline-success btn-sm"
                                                    title="Editar">
                                                    <i class="ri-edit-box-line"></i>
                                                </a>

                                                <a href="#"
                                                    class="btn btn-outline-info btn-sm"
                                                    title="Ver perfil">
                                                    <i class="ri-eye-line"></i>
                                                </a>

                                            </div>
                                        </td>
                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
