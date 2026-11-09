
@extends('layouts.main')

@section('title', 'Configurações da Instituição')

@section('sidebar')
    @include('components.settings-sidebar')
@endsection

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <form>
                <h3 class="page-title">Configurações da Instituição</h3>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nome da Instituição <span class="text-danger">*</span></label>
                            <input class="form-control" type="text"
                                placeholder="Nome do hospital">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Responsável</label>
                            <input class="form-control" type="text"
                                placeholder="Nome do responsável">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Endereço</label>
                            <input class="form-control" type="text"
                                placeholder="Endereço da instituição">
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="form-group">
                            <label>País</label>
                            <select class="form-control select">
                                <option value="Angola">Angola</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Brasil">Brasil</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="form-group">
                            <label>Cidade</label>
                            <input class="form-control" type="text"
                                placeholder="Ex.: Luanda">
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="form-group">
                            <label>Província</label>
                            <select class="form-control select">
                                <option value="Luanda">Luanda</option>
                                <option value="Benguela">Benguela</option>
                                <option value="Huambo">Huambo</option>
                                <option value="Huíla">Huíla</option>
                                <option value="Bié">Bié</option>
                                <option value="Cuanza Sul">Cuanza Sul</option>
                                <option value="Cuanza Norte">Cuanza Norte</option>
                                <option value="Cabinda">Cabinda</option>
                                <option value="Uíge">Uíge</option>
                                <option value="Malanje">Malanje</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Lunda Norte">Lunda Norte</option>
                                <option value="Lunda Sul">Lunda Sul</option>
                                <option value="Moxico">Moxico</option>
                                <option value="Cuando">Cuando</option>
                                <option value="Cunene">Cunene</option>
                                <option value="Namibe">Namibe</option>
                                <option value="Bengo">Bengo</option>
                                <option value="Cubango">Cubango</option>
                                <option value="Icolo e Bengo">Icolo e Bengo</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="form-group">
                            <label>Código Postal</label>
                            <input class="form-control" type="text"
                                placeholder="Código postal">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="email"
                                placeholder="instituicao@email.com">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Telefone</label>
                            <input class="form-control" type="text"
                                placeholder="+244 900 000 000">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Telemóvel</label>
                            <input class="form-control" type="text"
                                placeholder="+244 900 000 000">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Fax</label>
                            <input class="form-control" type="text"
                                placeholder="Número de fax">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Website</label>
                            <input class="form-control" type="url"
                                placeholder="https://www.instituicao.ao">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 text-center m-t-20">
                        <button type="button" class="btn btn-primary submit-btn">
                            Guardar Configurações
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
