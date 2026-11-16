
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
                        Adicionar Médico
                    </a>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table truncate m-0 align-middle">

                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome do Médico</th>
                                    <th>Especialidade</th>
                                    <th class="text-center">Dom</th>
                                    <th class="text-center">Seg</th>
                                    <th class="text-center">Ter</th>
                                    <th class="text-center">Qua</th>
                                    <th class="text-center">Qui</th>
                                    <th class="text-center">Sex</th>
                                    <th class="text-center">Sáb</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>

                            <tbody>

                                @php
                                    $doctors = [
                                        ['id' => '0008', 'name' => 'Allan Stuart', 'specialty' => 'Oncologista', 'time' => '09h-14h', 'image' => 'user.png'],
                                        ['id' => '0021', 'name' => 'Smith White', 'specialty' => 'Neurologista', 'time' => '15h-17h', 'image' => 'user1.png'],
                                        ['id' => '0026', 'name' => 'Gilbert Sandoval', 'specialty' => 'Cardiologista', 'time' => '17h-21h', 'image' => 'user2.png'],
                                        ['id' => '0039', 'name' => 'Bernardo James', 'specialty' => 'Clínico Geral', 'time' => '07h-09h', 'image' => 'user3.png'],
                                        ['id' => '0044', 'name' => 'Ronald Sullivan', 'specialty' => 'Radiologista', 'time' => '15h-21h', 'image' => 'user4.png'],
                                        ['id' => '0083', 'name' => 'Amelia Bruklin', 'specialty' => 'Neurologista', 'time' => '18h-20h', 'image' => 'user5.png'],
                                        ['id' => '0067', 'name' => 'Bshton Cozei', 'specialty' => 'Pediatra', 'time' => '16h-19h', 'image' => 'user2.png'],
                                        ['id' => '0048', 'name' => 'George Bailey', 'specialty' => 'Pediatra', 'time' => '17h-20h', 'image' => 'user3.png'],
                                        ['id' => '0058', 'name' => 'Andrea Lalema', 'specialty' => 'Dentista', 'time' => '08h-16h', 'image' => 'user4.png'],
                                        ['id' => '0047', 'name' => 'Taylor Melon', 'specialty' => 'Terapeuta', 'time' => '09h-15h', 'image' => 'user3.png'],
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
