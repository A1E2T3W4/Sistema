@extends('layouts.main')

@section('title', 'Lista de Pacientes')

@section('content')

<div class="content">

    {{-- Título e botão --}}
    <div class="row">
        <div class="col-sm-4 col-3">
            <h4 class="page-title">Pacientes</h4>
        </div>

        <div class="col-sm-8 col-9 text-right m-b-20">
            <a href="{{ route('patients.create') }}" class="btn btn-primary btn-rounded float-right">
                <i class="fa fa-plus"></i> Adicionar Paciente
            </a>


        </div>
    </div>

    {{-- Tabela de pacientes --}}
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">

                <table class="table table-border table-striped custom-table datatable mb-0">

                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Idade</th>
                            <th>Endereço</th>
                            <th>Telefone</th>
                            <th>Email</th>
                            <th class="text-right">Acção</th>
                        </tr>
                    </thead>

                    <tbody>

                        @php
                        $patients = [
                        [
                        'name' => 'Jennifer Robinson',
                        'age' => 35,
                        'address' => '1545 Dorsey Ln NE, Leland, NC, 28451',
                        'phone' => '(207) 808 8863',
                        'email' => 'jenniferrobinson@example.com'
                        ],
                        [
                        'name' => 'Terry Baker',
                        'age' => 63,
                        'address' => '555 Front St #APT 2H, Hempstead, NY, 11550',
                        'phone' => '(376) 150 6975',
                        'email' => 'terrybaker@example.com'
                        ],
                        [
                        'name' => 'Kyle Bowman',
                        'age' => 7,
                        'address' => '5060 Fairways Cir #APT 207, Vero Beach, FL, 32967',
                        'phone' => '(981) 756 6128',
                        'email' => 'kylebowman@example.com'
                        ],
                        [
                        'name' => 'Marie Howard',
                        'age' => 22,
                        'address' => '3501 New Haven Ave #152, Columbia, MO, 65201',
                        'phone' => '(634) 09 3833',
                        'email' => 'mariehoward@example.com'
                        ],
                        [
                        'name' => 'Joshua Guzman',
                        'age' => 34,
                        'address' => '4712 Spring Creek Dr, Bonita Springs, FL, 34134',
                        'phone' => '(407) 554 4146',
                        'email' => 'joshuaguzman@example.com'
                        ],
                        [
                        'name' => 'Julia Sims',
                        'age' => 27,
                        'address' => '517 Walker Dr, Houma, LA, 70364, United States',
                        'phone' => '(680) 432 2662',
                        'email' => 'juliasims@example.com'
                        ],
                        [
                        'name' => 'Linda Carpenter',
                        'age' => 24,
                        'address' => '2226 Victory Garden Ln, Tallahassee, FL, 32301',
                        'phone' => '(218) 661 8316',
                        'email' => 'lindacarpenter@example.com'
                        ],
                        [
                        'name' => 'Melissa Burton',
                        'age' => 35,
                        'address' => '3321 N 26th St, Milwaukee, WI, 53206',
                        'phone' => '(192) 494 8073',
                        'email' => 'melissaburton@example.com'
                        ],
                        [
                        'name' => 'Patrick Knight',
                        'age' => 21,
                        'address' => 'Po Box 3336, Commerce, TX, 75429',
                        'phone' => '(785) 580 4514',
                        'email' => 'patrickknight@example.com'
                        ],
                        [
                        'name' => 'Denise Stevens',
                        'age' => 7,
                        'address' => '1603 Old York Rd, Abington, PA, 19001',
                        'phone' => '(836) 257 1379',
                        'email' => 'denisestevens@example.com'
                        ],
                        [
                        'name' => 'Judy Clark',
                        'age' => 22,
                        'address' => '4093 Woodside Circle, Pensacola, FL, 32514',
                        'phone' => '(359) 969 3594',
                        'email' => 'judy.clark@example.com'
                        ],
                        [
                        'name' => 'Dennis Salazar',
                        'age' => 34,
                        'address' => '891 Juniper Drive, Saginaw, MI, 48603',
                        'phone' => '(933) 137 6201',
                        'email' => 'dennissalazar@example.com'
                        ],
                        [
                        'name' => 'Charles Ortega',
                        'age' => 32,
                        'address' => '3169 Birch Street, El Paso, TX, 79915',
                        'phone' => '(380) 141 1885',
                        'email' => 'charlesortega@example.com'
                        ],
                        [
                        'name' => 'Sandra Mendez',
                        'age' => 24,
                        'address' => '2535 Linden Avenue, Orlando, FL, 32789',
                        'phone' => '(797) 506 1265',
                        'email' => 'sandramendez@example.com'
                        ],
                        ];
                        @endphp

                        @foreach ($patients as $patient)

                        <tr>
                            <td>
                                <img
                                    width="28"
                                    height="28"
                                    src="{{ asset('assets/img/user.jpg') }}"
                                    class="rounded-circle m-r-5"
                                    alt="">
                                {{ $patient['name'] }}
                            </td>

                            <td>{{ $patient['age'] }}</td>

                            <td>{{ $patient['address'] }}</td>

                            <td>{{ $patient['phone'] }}</td>

                            <td>{{ $patient['email'] }}</td>

                            <td class="text-right">

                                <div class="dropdown dropdown-action">

                                    <a
                                        href="#"
                                        class="action-icon dropdown-toggle"
                                        data-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">

                                        <a href="{{ url('/patients/edit') }}" class="dropdown-item">
                                            <i class="fa fa-pencil m-r-5"></i>
                                            Editar
                                        </a>

                                        <a
                                            class="dropdown-item"
                                            href="#"
                                            data-toggle="modal"
                                            data-target="#delete_patient">
                                            <i class="fa fa-trash-o m-r-5"></i>
                                            Eliminar
                                        </a>

                                    </div>
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

{{-- Modal de confirmação de eliminação --}}
<div id="delete_patient" class="modal fade delete-modal" role="dialog">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-body text-center">

                <img
                    src="{{ asset('assets/img/sent.png') }}"
                    alt=""
                    width="50"
                    height="46">

                <h3>Tem a certeza de que deseja eliminar este paciente?</h3>

                <div class="m-t-20">

                    <a href="#" class="btn btn-white" data-dismiss="modal">
                        Fechar
                    </a>

                    <button type="button" class="btn btn-danger">
                        Eliminar
                    </button>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection