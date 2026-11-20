
@extends('layouts.main')

@section('title', 'Despesas')

@section('page-title', 'Despesas')

@section('content')

<div class="app-body">

    {{-- Título e botão --}}
    <div class="row gx-3 align-items-center mb-3">
        <div class="col-sm-6">
            <h4 class="mb-0">Despesas</h4>
            <p class="text-muted mb-0">Gestão dos despesas da instituição.</p>
        </div>

        <div class="col-sm-6 text-sm-end mt-3 mt-sm-0">
            <a href="{{ route('expenses.create') }}" class="btn btn-primary">
                <i class="ri-user-add-line me-1"></i>
                Adicionar Despesa
            </a>
        </div>
    </div>

    {{-- Filtros --}}
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="card-title mb-0">
                <i class="ri-filter-3-line me-2"></i>
                Pesquisar Despesas
            </h5>
        </div>

        <div class="card-body">
            <form action="#" method="GET">
                <div class="row gx-3 align-items-end">

                    <div class="col-md-3 col-sm-6 mb-3">
                        <label for="employee_code" class="form-label">
                            Código da Despesa
                        </label>

                        <input type="text"
                               name="employee_code"
                               id="despesa_code"
                               class="form-control"
                               placeholder="Ex.: DS-0001">
                    </div>

                    <div class="col-md-3 col-sm-6 mb-3">
                        <label for="nome" class="form-label">
                            Nome 
                        </label>

                        <input type="text"
                               name="name"
                               id="name"
                               class="form-control"
                               placeholder="Pesquisar por nome">
                    </div>

                    <div class="col-md-3 col-sm-6 mb-3">
                        <label for="role" class="form-label">
                            Pago Por
                        </label>

                        <select name="role" id="role" class="form-select">
                            <option value="">Todos</option>
                            <option value="Enfermeiro">Dinheiro</option>
                            <option value="Farmacêutico">Cheque</option>
                            <option value="Técnico de Laboratório">Transferencia</option>
                           
                        </select>
                    </div>

                    <div class="col-md-3 col-sm-6 mb-3">
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="ri-search-line me-1"></i>
                            Pesquisar
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>

    {{-- Tabela de despesa --}}
    <div class="card">

        <div class="card-header">
            <h5 class="card-title mb-0">
                Lista de Despesas
            </h5>
        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover align-middle">

                    <thead>
                        <tr>
                            
                            <th>Item</th>
                            <th>Fornecedor</th>
                            <th>Data da compra</th>
                            <th>Comprad por</th>
                            <th>Valor</th>
                            <th>Pago Por</th>
                            <th>Estado</th>
                            <th>Acções</th>
                        </tr>
                    </thead>

                    <tbody>

              

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Modal de confirmação --}}
    <div class="modal fade" id="delete_employee" tabindex="-1"
         aria-labelledby="deleteEmployeeLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body text-center p-4">

                    <div class="mb-3">
                        <i class="ri-error-warning-line text-danger"
                           style="font-size: 48px;"></i>
                    </div>

                    <h5 id="deleteEmployeeLabel" class="mb-2">
                        Eliminar Funcionário?
                    </h5>

                    <p class="text-muted">
                        Tem a certeza de que pretende eliminar este funcionário?
                        Esta acção não poderá ser desfeita.
                    </p>

                    <div class="d-flex justify-content-center gap-2 mt-4">

                        <button type="button"
                                class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">
                            Cancelar
                        </button>

                        <button type="button" class="btn btn-danger">
                            <i class="ri-delete-bin-line me-1"></i>
                            Eliminar
                        </button>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection
