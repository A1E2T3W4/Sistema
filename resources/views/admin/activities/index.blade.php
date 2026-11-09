
@extends('layouts.main')

@section('title', 'Actividades')

@section('content')

<div class="content">

    {{-- Título --}}
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Actividades</h4>
        </div>
    </div>

    {{-- Histórico de actividades --}}
    <div class="row">
        <div class="col-md-12">

            <div class="activity">
                <div class="activity-box">

                    <ul class="activity-list">

                        <li>
                            <div class="activity-user">
                                <a href="#" title="Lesley Grauer"
                                   data-toggle="tooltip" class="avatar">
                                    <img alt="Lesley Grauer"
                                         src="{{ asset('assets/img/user.jpg') }}"
                                         class="img-fluid rounded-circle">
                                </a>
                            </div>

                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="#" class="name">Lesley Grauer</a>
                                    adicionou uma nova tarefa
                                    <a href="#">Administração Hospitalar</a>
                                    <span class="time">Há 4 minutos</span>
                                </div>
                            </div>

                            <a class="activity-delete" href="#" title="Eliminar">&times;</a>
                        </li>

                        <li>
                            <div class="activity-user">
                                <a href="#" class="avatar"
                                   title="Jeffery Lalor" data-toggle="tooltip">
                                    L
                                </a>
                            </div>

                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="#" class="name">Jeffery Lalor</a>
                                    adicionou
                                    <a href="#" class="name">Loren Gatlin</a>
                                    e
                                    <a href="#" class="name">Tarah Shropshire</a>
                                    ao projecto
                                    <a href="#">Marcação de consultas</a>

                                    <span class="time">Há 6 minutos</span>
                                </div>
                            </div>

                            <a class="activity-delete" href="#" title="Eliminar">&times;</a>
                        </li>

                        <li>
                            <div class="activity-user">
                                <a href="#" title="Catherine Manseau"
                                   data-toggle="tooltip" class="avatar">
                                    <img alt="Catherine Manseau"
                                         src="{{ asset('assets/img/user.jpg') }}"
                                         class="img-fluid rounded-circle">
                                </a>
                            </div>

                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="#" class="name">Catherine Manseau</a>
                                    concluiu a tarefa
                                    <a href="#">Marcação de consultas com pagamento</a>

                                    <span class="time">Há 12 minutos</span>
                                </div>
                            </div>

                            <a class="activity-delete" href="#" title="Eliminar">&times;</a>
                        </li>

                        <li>
                            <div class="activity-user">
                                <a href="#" title="Bernardo Galaviz"
                                   data-toggle="tooltip" class="avatar">
                                    <img alt="Bernardo Galaviz"
                                         src="{{ asset('assets/img/user.jpg') }}"
                                         class="img-fluid rounded-circle">
                                </a>
                            </div>

                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="#" class="name">Bernardo Galaviz</a>
                                    alterou o nome da tarefa
                                    <a href="#">Disponibilidade dos médicos</a>

                                    <span class="time">Há 1 dia</span>
                                </div>
                            </div>

                            <a class="activity-delete" href="#" title="Eliminar">&times;</a>
                        </li>

                        <li>
                            <div class="activity-user">
                                <a href="#" title="Mike Litorus"
                                   data-toggle="tooltip" class="avatar">
                                    <img alt="Mike Litorus"
                                         src="{{ asset('assets/img/user.jpg') }}"
                                         class="img-fluid rounded-circle">
                                </a>
                            </div>

                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="#" class="name">Mike Litorus</a>
                                    adicionou uma nova tarefa
                                    <a href="#">Videoconferência entre paciente e médico</a>

                                    <span class="time">Há 2 dias</span>
                                </div>
                            </div>

                            <a class="activity-delete" href="#" title="Eliminar">&times;</a>
                        </li>

                        <li>
                            <div class="activity-user">
                                <a href="#" title="Jeffery Lalor"
                                   data-toggle="tooltip" class="avatar">
                                    <img alt="Jeffery Lalor"
                                         src="{{ asset('assets/img/user.jpg') }}"
                                         class="img-fluid rounded-circle">
                                </a>
                            </div>

                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="#" class="name">Jeffery Lalor</a>
                                    adicionou
                                    <a href="#" class="name">Jeffrey Warden</a>
                                    e
                                    <a href="#" class="name">Bernardo Galaviz</a>
                                    à tarefa
                                    <a href="#">Módulo de mensagens privadas</a>

                                    <span class="time">Há 7 dias</span>
                                </div>
                            </div>

                            <a class="activity-delete" href="#" title="Eliminar">&times;</a>
                        </li>

                    </ul>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
