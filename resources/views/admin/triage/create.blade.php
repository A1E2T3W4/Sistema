
    @extends('layouts.main')

    @section('title', 'Nova Triagem')
    @section('page-title', 'Nova Triagem')

    @section('content')

    <div class="app-body">
        <div class="row gx-3">
            <div class="col-sm-12">

                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title mb-0">Triagem</h5>
                    </div>

                    <div class="card-body p-4">

                        {{-- Erros de validação --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Verifica os seguintes campos:</strong>
                                <ul class="mb-0 mt-2">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('triage.store') }}" method="POST">
                            @csrf

                            {{-- Identificação do Paciente --}}
                            <div class="mb-4">

                                <div class="row gx-3">

                                    <div class="col-xxl-4 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="patient_id" class="form-label">
                                                Nome do Paciente
                                            </label>

                                            <input type="text"
                                                name="patient_name"
                                                id="patient_name"
                                                class="form-control"
                                                value="{{ old('patient_name') }}"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-xxl-4 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="triageDate" class="form-label">
                                                Data da Triagem
                                            </label>

                                            <input type="date"
                                                name="triageDate"
                                                id="triageDate"
                                                class="form-control"
                                                value="{{ old('triageDate', date('Y-m-d')) }}"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-xxl-4 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="triagetime" class="form-label">
                                                Hora da Triagem
                                            </label>

                                            <input type="time"
                                                name="triagetime"
                                                id="triagetime"
                                                class="form-control"
                                                value="{{ old('triagetime', date('H:i')) }}"
                                                required>
                                        </div>
                                    </div>

                                </div>
                            </div>

                           

                            {{-- Sinais Vitais --}}
                            <div class="mb-4">

                               

                                <div class="row gx-3">

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="temperature" class="form-label">
                                                Temperatura (°C)
                                            </label>

                                            <input type="number" step="0.1"
                                                name="temperature"
                                                id="temperature"
                                                class="form-control"
                                                placeholder="Ex.: 36.5"
                                                value="{{ old('temperature') }}">
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="bloodPressure" class="form-label">
                                                Pressão Arterial (mmHg)
                                            </label>

                                            <input type="text"
                                                name="bloodPressure"
                                                id="bloodPressure"
                                                class="form-control"
                                                placeholder="Ex.: 120/80"
                                                value="{{ old('bloodPressure') }}">
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="heartRate" class="form-label">
                                                Frequência Cardíaca (bpm)
                                            </label>

                                            <input type="number"
                                                name="heartRate"
                                                id="heartRate"
                                                class="form-control"
                                                placeholder="Ex.: 80"
                                                value="{{ old('heartRate') }}">
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="respiratoryRate" class="form-label">
                                                Frequência Respiratória (rpm)
                                            </label>

                                            <input type="number"
                                                name="respiratoryRate"
                                                id="respiratoryRate"
                                                class="form-control"
                                                placeholder="Ex.: 18"
                                                value="{{ old('respiratoryRate') }}">
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="oxygenSaturation" class="form-label">
                                                Saturação de Oxigénio (%)
                                            </label>

                                            <input type="number" step="0.01"
                                                name="oxygenSaturation"
                                                id="oxygenSaturation"
                                                class="form-control"
                                                placeholder="Ex.: 98"
                                                value="{{ old('oxygenSaturation') }}">
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="weight" class="form-label">
                                                Peso (kg)
                                            </label>

                                            <input type="number" step="0.1"
                                                name="weight"
                                                id="weight"
                                                class="form-control"
                                                placeholder="Ex.: 70"
                                                value="{{ old('weight') }}">
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="height" class="form-label">
                                                Altura (cm)
                                            </label>

                                            <input type="number" step="0.1"
                                                name="height"
                                                id="height"
                                                class="form-control"
                                                placeholder="Ex.: 170"
                                                value="{{ old('height') }}">
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="bloodGlucose" class="form-label">
                                                Glicemia (mg/dL)
                                            </label>

                                            <input type="number" step="0.1"
                                                name="bloodGlucose"
                                                id="bloodGlucose"
                                                class="form-control"
                                                placeholder="Opcional"
                                                value="{{ old('bloodGlucose') }}">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <hr>

                            {{-- Avaliação Inicial --}}
                            <div class="mb-4">

                             

                                <div class="row gx-3">

                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="mainComplaint" class="form-label">
                                                Observacões do Paciente 
                                            </label>

                                            <textarea name="mainComplaint"
                                                id="mainComplaint"
                                                class="form-control"
                                                rows="3"
                                                placeholder="Descreva as observações do paciente"
                                                required>{{ old('mainComplaint') }}</textarea>
                                        </div>
                                    </div>


                               
                            </div>

                         

                            {{-- Classificação de Risco --}}
                            <div class="mb-4">

                                <div class="row gx-3">

                                    <div class="col-xxl-4 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="riskClassification" class="form-label">
                                                Nível de Prioridade
                                            </label>

                                            <select name="riskClassification" id="riskClassification" class="form-select">
                                                <option value="">Seleccionar Classificação</option>
                                                <option value="emergency" {{ old('riskClassification') == 'emergency' ? 'selected' : '' }}>Emergência</option>
                                                <option value="very_urgent" {{ old('riskClassification') == 'very_urgent' ? 'selected' : '' }}>Muito Urgente</option>
                                                <option value="urgent" {{ old('riskClassification') == 'urgent' ? 'selected' : '' }}>Urgente</option>
                                                <option value="less_urgent" {{ old('riskClassification') == 'less_urgent' ? 'selected' : '' }}>Pouco Urgente</option>
                                                <option value="non_urgent" {{ old('riskClassification') == 'non_urgent' ? 'selected' : '' }}>Não Urgente</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xxl-4 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="department_id" class="form-label">
                                                Departamento de Encaminhamento
                                            </label>

                                            <select name="department_id" id="department_id" class="form-select">
                                                <option value="">Seleccionar Departamento</option>
                                                <option value="1" {{ old('department_id') == '1' ? 'selected' : '' }}>Urgência</option>
                                                <option value="2" {{ old('department_id') == '2' ? 'selected' : '' }}>Medicina Geral</option>
                                                <option value="3" {{ old('department_id') == '3' ? 'selected' : '' }}>Cardiologia</option>
                                                <option value="4" {{ old('department_id') == '4' ? 'selected' : '' }}>Pediatria</option>
                                                <option value="5" {{ old('department_id') == '5' ? 'selected' : '' }}>Ortopedia</option>
                                            </select>
                                        </div>
                                    </div>

                                  

                                </div>
                            </div>

                           

                            {{-- Responsável pela Triagem --}}
                            <div class="mb-4">

                                <div class="row gx-3">

                                    <div class="col-xxl-4 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="professional_name" class="form-label">
                                                Enfermeiro / Técnico Responsável
                                            </label>

                                            <input type="text"
                                                name="professional_name"
                                                id="professional_name"
                                                class="form-control"
                                                placeholder="Nome do profissional"
                                                value="{{ old('professional_name') }}">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            {{-- Botões --}}
                            <div class="d-flex gap-2 justify-content-end">

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
