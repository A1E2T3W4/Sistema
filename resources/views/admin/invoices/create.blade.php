
@extends('layouts.main')

@section('title', 'Criar Factura')

@section('content')

<div class="content">

    {{-- Título --}}
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Criar Factura</h4>
        </div>
    </div>

    {{-- Formulário --}}
    <div class="row">
        <div class="col-sm-12">

            <form action="#" method="POST">
                @csrf

                <div class="row">

                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>Paciente <span class="text-danger">*</span></label>
                            <select class="select form-control">
                                <option>Seleccionar Paciente</option>
                                <option>Charles Ortega</option>
                                <option>Denise Stevens</option>
                                <option>Jennifer Robinson</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>Departamento <span class="text-danger">*</span></label>
                            <select class="select form-control">
                                <option>Seleccionar Departamento</option>
                                <option>Estomatologia</option>
                                <option>Neurologia</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email">
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>Imposto</label>
                            <select class="select form-control">
                                <option>Seleccionar Imposto</option>
                                <option>IVA</option>
                                <option>Sem Imposto</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>Endereço do Paciente</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>Endereço de Facturação</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>Data da Factura <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>Data de Vencimento <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" type="text">
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Itens da factura --}}
                <div class="row">
                    <div class="col-md-12 col-sm-12">

                        <div class="table-responsive">
                            <table class="table table-hover table-white">

                                <thead>
                                    <tr>
                                        <th style="width: 20px">#</th>
                                        <th class="col-sm-2">Item</th>
                                        <th class="col-md-6">Descrição</th>
                                        <th style="width:100px;">Preço Unitário</th>
                                        <th style="width:80px;">Quantidade</th>
                                        <th>Valor</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td>1</td>

                                        <td>
                                            <input class="form-control" type="text" style="min-width:150px">
                                        </td>

                                        <td>
                                            <input class="form-control" type="text" style="min-width:150px">
                                        </td>

                                        <td>
                                            <input class="form-control" style="width:100px" type="text">
                                        </td>

                                        <td>
                                            <input class="form-control" style="width:80px" type="text">
                                        </td>

                                        <td>
                                            <input class="form-control form-amt" readonly style="width:120px" type="text">
                                        </td>

                                        <td>
                                            <a href="javascript:void(0)" class="text-success font-18" title="Adicionar">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>

                                        <td>
                                            <input class="form-control" type="text" style="min-width:150px">
                                        </td>

                                        <td>
                                            <input class="form-control" type="text" style="min-width:150px">
                                        </td>

                                        <td>
                                            <input class="form-control" style="width:100px" type="text">
                                        </td>

                                        <td>
                                            <input class="form-control" style="width:80px" type="text">
                                        </td>

                                        <td>
                                            <input class="form-control form-amt" readonly style="width:120px" type="text">
                                        </td>

                                        <td>
                                            <a href="javascript:void(0)" class="text-danger font-18" title="Remover">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        {{-- Resumo dos valores --}}
                        <div class="table-responsive">
                            <table class="table table-hover table-white">

                                <tbody>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-right">Subtotal</td>
                                        <td style="text-align: right; padding-right: 30px; width: 230px">
                                            0,00 Kz
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="5" class="text-right">Imposto</td>
                                        <td style="text-align: right; padding-right: 30px; width: 230px">
                                            <input class="form-control text-right form-amt" value="0" readonly type="text">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="5" class="text-right">
                                            Desconto %
                                        </td>
                                        <td style="text-align: right; padding-right: 30px; width: 230px">
                                            <input class="form-control text-right" type="text">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="5" style="text-align: right; font-weight: bold">
                                            Total Geral
                                        </td>

                                        <td style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px; width: 230px">
                                            0,00 Kz
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        {{-- Outras informações --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Outras Informações</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Botões --}}
                <div class="text-center m-t-20">

                    <a href="{{ route('invoices.index') }}" class="btn btn-grey submit-btn m-r-10">
                        Cancelar
                    </a>

                    <button type="submit" class="btn btn-primary submit-btn">
                        Guardar Factura
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection
