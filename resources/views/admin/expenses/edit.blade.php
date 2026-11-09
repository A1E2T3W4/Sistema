
@extends('layouts.main')

@section('title', 'Editar Despesa')

@section('content')

<div class="content">

    {{-- Título --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Editar Despesa</h4>
        </div>
    </div>

    {{-- Formulário --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nome do Item</label>
                            <input class="form-control" type="text"
                                   value="Máquina de Anestesia">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Fornecedor</label>
                            <input class="form-control" type="text"
                                   value="Biomedical Equipment Inc">
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Data da Compra</label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker"
                                       type="text"
                                       value="22/06/2026">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Comprado Por</label>
                            <select class="select">
                                <option selected>Daniel Porter</option>
                                <option>Roger Dixon</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Valor</label>
                            <input class="form-control" type="text"
                                   value="37.488.000 Kz">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Forma de Pagamento</label>
                            <select class="select">
                                <option>Dinheiro</option>
                                <option selected>Cheque</option>
                                <option>Transferência Bancária</option>
                                <option>Multicaixa</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Estado</label>
                            <select class="select">
                                <option>Pendente</option>
                                <option selected>Aprovada</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Anexos</label>
                            <input class="form-control" type="file"
                                   name="attachments[]" multiple>
                        </div>
                    </div>

                </div>

                {{-- Anexos de exemplo --}}
                <div class="attach-files">
                    <ul>
                        <li>
                            <img src="{{ asset('assets/img/user.jpg') }}" alt="">
                            <a href="#" class="fa fa-close file-remove"></a>
                        </li>
                        <li>
                            <img src="{{ asset('assets/img/user.jpg') }}" alt="">
                            <a href="#" class="fa fa-close file-remove"></a>
                        </li>
                    </ul>
                </div>

                {{-- Botões --}}
                <div class="m-t-20 text-center">

                    <a href="{{ route('expenses.index') }}"
                       class="btn btn-secondary submit-btn">
                        Cancelar
                    </a>

                    <button type="submit" class="btn btn-primary submit-btn">
                        Guardar Alterações
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection
