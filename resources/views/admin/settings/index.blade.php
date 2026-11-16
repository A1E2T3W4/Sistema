
@extends('layouts.main')

@section('title', 'Configurações da Instituição')

@section('sidebar')
    @include('layouts.settings-sidebar')
@endsection

@section('content')

<div class="row gx-3">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">
                    Configurações da Instituição
                </h5>
            </div>

            <div class="card-body p-4">

                <form action="#" method="POST">
                    @csrf

                    <div class="row gx-4">

                        <div class="col-12 mb-4">
                            <h6 class="fw-semibold">Informações gerais</h6>
                            <p class="text-muted small mb-0">
                                Dados principais da instituição hospitalar.
                            </p>
                        </div>

                        <div class="col-lg-6 col-md-6 mb-3">
                            <label class="form-label">
                                Nome da Instituição <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="institution_name"
                                class="form-control"
                                placeholder="Nome do hospital">
                        </div>

                        <div class="col-lg-6 col-md-6 mb-3">
                            <label class="form-label">Responsável</label>
                            <input type="text" name="responsible"
                                class="form-control"
                                placeholder="Nome do responsável">
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Endereço</label>
                            <input type="text" name="address"
                                class="form-control"
                                placeholder="Endereço da instituição">
                        </div>

                        <div class="col-lg-3 col-md-6 mb-3">
                            <label class="form-label">País</label>
                            <select name="country" class="form-select">
                                <option value="Angola" selected>Angola</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Brasil">Brasil</option>
                            </select>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-3">
                            <label class="form-label">Cidade</label>
                            <input type="text" name="city"
                                class="form-control"
                                placeholder="Ex.: Luanda">
                        </div>

                        <div class="col-lg-3 col-md-6 mb-3">
                            <label class="form-label">Província</label>
                            <select name="province" class="form-select">
                                <option value="">Seleccione a província</option>
                                <option>Luanda</option>
                                <option>Benguela</option>
                                <option>Huambo</option>
                                <option>Huíla</option>
                                <option>Bié</option>
                                <option>Cuanza Sul</option>
                                <option>Cuanza Norte</option>
                                <option>Cabinda</option>
                                <option>Uíge</option>
                                <option>Malanje</option>
                                <option>Zaire</option>
                                <option>Lunda Norte</option>
                                <option>Lunda Sul</option>
                                <option>Moxico</option>
                                <option>Moxico Leste</option>
                                <option>Cuando</option>
                                <option>Cubango</option>
                                <option>Cunene</option>
                                <option>Namibe</option>
                                <option>Bengo</option>
                                <option>Icolo e Bengo</option>
                            </select>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-3">
                            <label class="form-label">Código Postal</label>
                            <input type="text" name="postal_code"
                                class="form-control"
                                placeholder="Código postal">
                        </div>

                        <div class="col-12 mt-4 mb-3">
                            <h6 class="fw-semibold">Contactos da instituição</h6>
                            <p class="text-muted small mb-0">
                                Informações utilizadas para comunicação.
                            </p>
                        </div>

                        <div class="col-lg-6 col-md-6 mb-3">
                            <label class="form-label">E-mail</label>
                            <input type="email" name="email"
                                class="form-control"
                                placeholder="instituicao@email.com">
                        </div>

                        <div class="col-lg-6 col-md-6 mb-3">
                            <label class="form-label">Telefone</label>
                            <input type="text" name="phone"
                                class="form-control"
                                placeholder="+244 900 000 000">
                        </div>

                        <div class="col-lg-6 col-md-6 mb-3">
                            <label class="form-label">Telemóvel</label>
                            <input type="text" name="mobile"
                                class="form-control"
                                placeholder="+244 900 000 000">
                        </div>

                        <div class="col-lg-6 col-md-6 mb-3">
                            <label class="form-label">Fax</label>
                            <input type="text" name="fax"
                                class="form-control"
                                placeholder="Número de fax">
                        </div>

                        <div class="col-12 mb-4">
                            <label class="form-label">Website</label>
                            <input type="url" name="website"
                                class="form-control"
                                placeholder="https://www.instituicao.ao">
                        </div>

                        <div class="col-12">
                            <div class="d-flex justify-content-end gap-2">
                                <button type="reset" class="btn btn-light">
                                    Cancelar
                                </button>

                                <button type="submit" class="btn btn-primary">
                                    <i class="ri-save-line me-1"></i>
                                    Guardar Configurações
                                </button>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
