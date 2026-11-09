@extends('layouts.main')

@section('title', 'Pagamentos')

@section('content')

<div class="content">

    {{-- Título --}}
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Pagamentos</h4>
        </div>
    </div>

    {{-- Tabela de pagamentos --}}
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">

                <table class="table table-striped custom-table datatable mb-0">

                    <thead>
                        <tr>
                            <th>Nº da Factura</th>
                            <th>Paciente</th>
                            <th>Tipo de Pagamento</th>
                            <th>Data do Pagamento</th>
                            <th>Valor Pago</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>
                                <a href="{{ route('invoices.show') }}">
                                    #FAT-0001
                                </a>
                            </td>

                            <td>
                                <h2>
                                    <a href="#">Charles Ortega</a>
                                </h2>
                            </td>

                            <td>Transferência Bancária</td>

                            <td>08/08/2026</td>

                            <td>500.000 Kz</td>
                        </tr>

                        <tr>
                            <td>
                                <a href="{{ route('invoices.show') }}">
                                    #FAT-0002
                                </a>
                            </td>

                            <td>
                                <h2>
                                    <a href="#">Denise Stevens</a>
                                </h2>
                            </td>

                            <td>Multicaixa</td>

                            <td>08/08/2026</td>

                            <td>250.000 Kz</td>
                        </tr>

                        <tr>
                            <td>
                                <a href="{{ route('invoices.show') }}">
                                    #FAT-0003
                                </a>
                            </td>

                            <td>
                                <h2>
                                    <a href="#">Dennis Salazar</a>
                                </h2>
                            </td>

                            <td>Dinheiro</td>

                            <td>08/08/2026</td>

                            <td>150.000 Kz</td>
                        </tr>

                    </tbody>

                </table>

            </div>
        </div>
    </div>

</div>

@endsection