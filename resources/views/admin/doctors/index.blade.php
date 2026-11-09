@extends('layouts.main')

@section('title', 'Médicos')

@section('content')

<div class="content">

    <div class="row">
        <div class="col-sm-4 col-3">
            <h4 class="page-title">Doctors</h4>
        </div>

        <div class="col-sm-8 col-9 text-right m-b-20">
            <a href="{{ route('doctors.create') }}" class="btn btn-primary btn-rounded float-right">
                <i class="fa fa-plus"></i> Add Doctor
            </a>
        </div>
    </div>

    <div class="row doctor-grid">

        @php
        $doctors = [
        ['Cristina Groves', 'Gynecologist', 'doctor-thumb-03.jpg'],
        ['Marie Wells', 'Psychiatrist', 'doctor-thumb-07.jpg'],
        ['Henry Daniels', 'Cardiologist', 'doctor-thumb-04.jpg'],
        ['Mark Hunter', 'Urologist', 'doctor-thumb-11.jpg'],
        ['Michael Sullivan', 'Ophthalmologist', 'doctor-thumb-12.jpg'],
        ['Linda Barrett', 'Dentist', 'doctor-thumb-02.jpg'],
        ['Ronald Jacobs', 'Oncologist', 'doctor-thumb-09.jpg'],
        ['Albert Sandoval', 'Neurologist', 'doctor-thumb-01.jpg'],
        ['Diana Bailey', 'General Surgery', 'doctor-thumb-05.jpg'],
        ['Shirley Willis', 'Radiologist', 'doctor-thumb-10.jpg'],
        ['Pamela Curtis', 'Pediatrics', 'doctor-thumb-08.jpg'],
        ['Justin Parker', 'Physical Therapist', 'doctor-thumb-06.jpg'],
        ];
        @endphp

        @foreach ($doctors as $doctor)

        <div class="col-md-4 col-sm-4 col-lg-3">
            <div class="profile-widget">

                <div class="doctor-img">
                    <a class="avatar" href="#">
                        <img alt="" src="{{ asset('assets/img/' . $doctor[2]) }}">
                    </a>
                </div>

                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle"
                        data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('doctors.edit') }}">
                            <i class="fa fa-pencil m-r-5"></i> Edit
                        </a>

                        <a class="dropdown-item" href="#"
                            data-toggle="modal" data-target="#delete_doctor">
                            <i class="fa fa-trash-o m-r-5"></i> Delete
                        </a>
                    </div>
                </div>

                <h4 class="doctor-name text-ellipsis">
                    <a href="#">{{ $doctor[0] }}</a>
                </h4>

                <div class="doc-prof">{{ $doctor[1] }}</div>

                <div class="user-country">
                    <i class="fa fa-map-marker"></i>
                    United States, San Francisco
                </div>

            </div>
        </div>

        @endforeach

    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="see-all">
                <a class="see-all-btn" href="javascript:void(0);">
                    Load More
                </a>
            </div>
        </div>
    </div>

</div>

{{-- Modal de confirmação de eliminação --}}
<div id="delete_doctor" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">

                <img src="{{ asset('assets/img/sent.png') }}"
                    alt="" width="50" height="46">

                <h3>Are you sure want to delete this Doctor?</h3>

                <div class="m-t-20">
                    <a href="#" class="btn btn-white" data-dismiss="modal">
                        Close
                    </a>

                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection