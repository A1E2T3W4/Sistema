
@extends('layouts.main')

@section('title', 'Nova Triagem')
@section('page-title', 'Nova Triagem')

@section('content')

<div class="app-body">

    <div class="row gx-3">
        <div class="col-sm-12">

            <div class="card">

                <div class="card-header">
                    <h5 class="card-title mb-0">Registar Nova Triagem</h5>
                </div>

                <div class="card-body p-4">

                    <form action="#" method="POST">

                        {{-- Identificação do Paciente --}}
                        <div class="mb-4">
                            <h6 class="mb-3">
                                <i class="ri-user-line me-2 text-primary"></i>
                                Identificação do Paciente
                            </h6>

                            <div class="row gx-3">

                                <div class="col-xxl-4 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="patient_id" class="form-label">
                                            Nome do Paciente
                                        </label>

                                        <select name="patient_id" id="patient_id"
                                            class="form-select">
                                            <option value="">Seleccionar Paciente</option>
                                            <option value="1">Maria José</option>
                                            <option value="2">João Manuel</option>
                                            <option value="3">Ana Paula</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="triage_date" class="form-label">
                                            Data da Triagem
                                        </label>

                                        <input type="date" name="triage_date"
                                            id="triage_date" class="form-control">
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="triage_time" class="form-label">
                                            Hora da Triagem
                                        </label>

                                        <input type="time" name="triage_time"
                                            id="triage_time" class="form-control">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <hr>

                        {{-- Sinais Vitais --}}
                        <div class="mb-4">
                            <h6 class="mb-3">
                                <i class="ri-heart-pulse-line me-2 text-danger"></i>
                                Sinais Vitais
                            </h6>

                            <div class="row gx-3">

                                <div class="col-xxl-3 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="temperature" class="form-label">
                                            Temperatura (°C)
                                        </label>

                                        <input type="number" step="0.1"
                                            name="temperature" id="temperature"
                                            class="form-control" placeholder="Ex.: 36.5">
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="blood_pressure" class="form-label">
                                            Pressão Arterial (mmHg)
                                        </label>

                                        <input type="text" name="blood_pressure"
                                            id="blood_pressure" class="form-control"
                                            placeholder="Ex.: 120/80">
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="heart_rate" class="form-label">
                                            Frequência Cardíaca (bpm)
                                        </label>

                                        <input type="number" name="heart_rate"
                                            id="heart_rate" class="form-control"
                                            placeholder="Ex.: 80">
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="respiratory_rate" class="form-label">
                                            Frequência Respiratória (rpm)
                                        </label>

                                        <input type="number" name="respiratory_rate"
                                            id="respiratory_rate" class="form-control"
                                            placeholder="Ex.: 18">
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="oxygen_saturation" class="form-label">
                                            Saturação de Oxigénio (%)
                                        </label>

                                        <input type="number" name="oxygen_saturation"
                                            id="oxygen_saturation" class="form-control"
                                            placeholder="Ex.: 98">
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="weight" class="form-label">
                                            Peso (kg)
                                        </label>

                                        <input type="number" step="0.1"
                                            name="weight" id="weight"
                                            class="form-control" placeholder="Ex.: 70">
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="height" class="form-label">
                                            Altura (cm)
                                        </label>

                                        <input type="number" step="0.1"
                                            name="height" id="height"
                                            class="form-control" placeholder="Ex.: 170">
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="blood_glucose" class="form-label">
                                            Glicemia (mg/dL)
                                        </label>

                                        <input type="number" step="0.1"
                                            name="blood_glucose" id="blood_glucose"
                                            class="form-control" placeholder="Opcional">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <hr>

                        {{-- Avaliação Inicial --}}
                        <div class="mb-4">
                            <h6 class="mb-3">
                                <i class="ri-file-text-line me-2 text-primary"></i>
                                Avaliação Inicial
                            </h6>

                            <div class="row gx-3">

                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label for="main_complaint" class="form-label">
                                            Queixa Principal
                                        </label>

                                        <textarea name="main_complaint"
                                            id="main_complaint"
                                            class="form-control" rows="3"
                                            placeholder="Descreva o motivo principal da procura pelo atendimento"></textarea>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="symptoms_duration" class="form-label">
                                            Duração dos Sintomas
                                        </label>

                                        <input type="text" name="symptoms_duration"
                                            id="symptoms_duration"
                                            class="form-control"
                                            placeholder="Ex.: 2 dias">
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="pain_level" class="form-label">
                                            Intensidade da Dor (0 a 10)
                                        </label>

                                        <select name="pain_level" id="pain_level"
                                            class="form-select">
                                            <option value="">Seleccionar Intensidade</option>
                                            <option value="0">0 - Sem dor</option>
                                            <option value="1">1 - Muito ligeira</option>
                                            <option value="2">2</option>
                                            <option value="3">3 - Ligeira</option>
                                            <option value="4">4</option>
                                            <option value="5">5 - Moderada</option>
                                            <option value="6">6</option>
                                            <option value="7">7 - Intensa</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10 - Dor máxima</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="allergies" class="form-label">
                                            Alergias Conhecidas
                                        </label>

                                        <input type="text" name="allergies"
                                            id="allergies" class="form-control"
                                            placeholder="Indicar alergias ou nenhuma conhecida">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label for="initial_observation" class="form-label">
                                            Observações da Avaliação
                                        </label>

                                        <textarea name="initial_observation"
                                            id="initial_observation"
                                            class="form-control" rows="3"
                                            placeholder="Outras informações relevantes da avaliação inicial"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <hr>

                        {{-- Classificação de Risco --}}
                        <div class="mb-4">
                            <h6 class="mb-3">
                                <i class="ri-alarm-warning-line me-2 text-warning"></i>
                                Classificação de Risco
                            </h6>

                            <div class="row gx-3">

                                <div class="col-xxl-4 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="risk_level" class="form-label">
                                            Nível de Prioridade
                                        </label>

                                        <select name="risk_level" id="risk_level"
                                            class="form-select">
                                            <option value="">Seleccionar Classificação</option>
                                            <option value="emergency">Emergência</option>
                                            <option value="very_urgent">Muito Urgente</option>
                                            <option value="urgent">Urgente</option>
                                            <option value="less_urgent">Pouco Urgente</option>
                                            <option value="non_urgent">Não Urgente</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="department_id" class="form-label">
                                            Departamento de Encaminhamento
                                        </label>

                                        <select name="department_id" id="department_id"
                                            class="form-select">
                                            <option value="">Seleccionar Departamento</option>
                                            <option value="1">Urgência</option>
                                            <option value="2">Medicina Geral</option>
                                            <option value="3">Cardiologia</option>
                                            <option value="4">Pediatria</option>
                                            <option value="5">Ortopedia</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="triage_status" class="form-label">
                                            Estado da Triagem
                                        </label>

                                        <select name="triage_status" id="triage_status"
                                            class="form-select">
                                            <option value="pending">Pendente</option>
                                            <option value="in_progress">Em Avaliação</option>
                                            <option value="completed">Concluída</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <hr>

                        {{-- Responsável --}}
                        <div class="mb-4">
                            <h6 class="mb-3">
                                <i class="ri-user-heart-line me-2 text-primary"></i>
                                Responsável pela Triagem
                            </h6>

                            <div class="row gx-3">

                                <div class="col-xxl-4 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="professional_name" class="form-label">
                                            Enfermeiro / Técnico Responsável
                                        </label>

                                        <input type="text" name="professional_name"
                                            id="professional_name"
                                            class="form-control"
                                            placeholder="Nome do profissional">
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- Botões --}}
                        <div class="d-flex gap-2 justify-content-end">

                            <a href="#" class="btn btn-outline-secondary">
                                <i class="ri-close-line me-1"></i>
                                Cancelar
                            </a>

                            <button type="submit" class="btn btn-primary">
                                <i class="ri-save-line me-1"></i>
                                Registar Triagem
                            </button>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
