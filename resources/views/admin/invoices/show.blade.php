
@extends('layouts.main')

@section('title', 'Visualizar Factura')

@section('content')

<div class="content">

    {{-- Título e botões --}}
    <div class="row">
        <div class="col-sm-5 col-4">
            <h4 class="page-title">Factura</h4>
        </div>

        <div class="col-sm-7 col-8 text-right m-b-30">
            <div class="btn-group btn-group-sm">
                <button class="btn btn-white">CSV</button>
                <button class="btn btn-white">PDF</button>
                <button class="btn btn-white" onclick="window.print()">
                    <i class="fa fa-print fa-lg"></i> Imprimir
                </button>
            </div>
        </div>
    </div>

    {{-- Factura --}}
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">

                    {{-- Cabeçalho da factura --}}
                    <div class="row custom-invoice">

                        <div class="col-6 col-sm-6 m-b-20">
                            <img src="{{ asset('assets/img/logo-dark.png') }}"
                                 class="inv-logo" alt="Logo">

                            <ul class="list-unstyled">
                                <li>Hospital Preclinic</li>
                                <li>Luanda, Angola</li>
                                <li>Telefone: +244 900 000 000</li>
                                <li>NIF: 0000000000</li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 m-b-20">
                            <div class="invoice-details">

                                <h3 class="text-uppercase">
                                    Factura #FAT-0001
                                </h3>

                                <ul class="list-unstyled">
                                    <li>
                                        Data:
                                        <span>12 de Outubro de 2026</span>
                                    </li>

                                    <li>
                                        Data de vencimento:
                                        <span>25 de Outubro de 2026</span>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>

                    {{-- Dados do paciente e pagamento --}}
                    <div class="row">

                        <div class="col-sm-6 col-lg-6 m-b-20">

                            <h5>Factura para:</h5>

                            <ul class="list-unstyled">

                                <li>
                                    <h5><strong>Barry Cuda</strong></h5>
                                </li>

                                <li><span>Paciente</span></li>
                                <li>Luanda</li>
                                <li>Angola</li>
                                <li>Telefone: +244 900 000 000</li>

                                <li>
                                    <a href="#">barrycuda@example.com</a>
                                </li>

                            </ul>

                        </div>

                        <div class="col-sm-6 col-lg-6 m-b-20">

                            <div class="invoices-view">

                                <span class="text-muted">
                                    Detalhes do Pagamento:
                                </span>

                                <ul class="list-unstyled invoice-payment-details">

                                    <li>
                                        <h5>
                                            Total a pagar:
                                            <span class="text-right">
                                                288.200 Kz
                                            </span>
                                        </h5>
                                    </li>

                                    <li>
                                        Método:
                                        <span>Transferência Bancária</span>
                                    </li>

                                    <li>
                                        Banco:
                                        <span>Banco de Fomento Angola</span>
                                    </li>

                                    <li>
                                        País:
                                        <span>Angola</span>
                                    </li>

                                    <li>
                                        Estado:
                                        <span>Por pagar</span>
                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    {{-- Tabela de serviços --}}
                    <div class="table-responsive">

                        <table class="table table-striped table-hover">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ITEM</th>
                                    <th>DESCRIÇÃO</th>
                                    <th>PREÇO UNITÁRIO</th>
                                    <th>QUANTIDADE</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Check-up completo</td>
                                    <td>Exame médico geral</td>
                                    <td>150.000 Kz</td>
                                    <td>1</td>
                                    <td>150.000 Kz</td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Análise de sangue</td>
                                    <td>Análise laboratorial</td>
                                    <td>12.000 Kz</td>
                                    <td>1</td>
                                    <td>12.000 Kz</td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Consulta geral</td>
                                    <td>Consulta médica geral</td>
                                    <td>100.000 Kz</td>
                                    <td>1</td>
                                    <td>100.000 Kz</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                    {{-- Resumo financeiro --}}
                    <div>

                        <div class="row invoice-payment">

                            <div class="col-sm-7"></div>

                            <div class="col-sm-5">

                                <div class="m-b-20">

                                    <h6>Total a pagar</h6>

                                    <div class="table-responsive no-border">

                                        <table class="table mb-0">

                                            <tbody>

                                                <tr>
                                                    <th>Subtotal:</th>
                                                    <td class="text-right">
                                                        262.000 Kz
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>
                                                        Imposto:
                                                        <span class="text-regular">(10%)</span>
                                                    </th>

                                                    <td class="text-right">
                                                        26.200 Kz
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>Total:</th>

                                                    <td class="text-right text-primary">
                                                        <h5>288.200 Kz</h5>
                                                    </td>
                                                </tr>

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                        </div>

                        {{-- Outras informações --}}
                        <div class="invoice-info">

                            <h5>Outras Informações</h5>

                            <p class="text-muted">
                                Esta factura corresponde aos serviços médicos
                                prestados ao paciente. O pagamento deverá ser
                                efectuado até à data de vencimento indicada.
                            </p>

                        </div>

                    </div>

                    {{-- Botão voltar --}}
                    <div class="text-right m-t-20">
                        <a href="{{ route('invoices.index') }}"
                           class="btn btn-secondary">
                            Voltar
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
