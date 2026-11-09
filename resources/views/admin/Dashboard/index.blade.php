
@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>98</h3>
                        <span class="widget-title1">Doctors <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>1072</h3>
                        <span class="widget-title2">Patients <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>72</h3>
                        <span class="widget-title3">Attend <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>618</h3>
                        <span class="widget-title4">Pending <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="chart-title">
                            <h4>Patient Total</h4>
                            <span class="float-right"><i class="fa fa-caret-up" aria-hidden="true"></i> 15% Higher than Last Month</span>
                        </div>
                        <canvas id="linegraph"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="chart-title">
                            <h4>Patients In</h4>
                            <div class="float-right">
                                <ul class="chat-user-total">
                                    <li><i class="fa fa-circle current-users" aria-hidden="true"></i>ICU</li>
                                    <li><i class="fa fa-circle old-users" aria-hidden="true"></i> OPD</li>
                                </ul>
                            </div>
                        </div>
                        <canvas id="bargraph"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title d-inline-block">Upcoming Appointments</h4>
                        <a href="appointments.html" class="btn btn-primary float-right">View all</a>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="d-none">
                                    <tr>
                                        <th>Patient Name</th>
                                        <th>Doctor Name</th>
                                        <th>Timing</th>
                                        <th class="text-right">Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @for ($i = 0; $i < 5; $i++)
                                        <tr>
                                            <td style="min-width: 200px;">
                                                <a class="avatar" href="profile.html">B</a>
                                                <h2>
                                                    <a href="profile.html">
                                                        Bernardo Galaviz <span>New York, USA</span>
                                                    </a>
                                                </h2>
                                            </td>

                                            <td>
                                                <h5 class="time-title p-0">Appointment With</h5>
                                                <p>Dr. Cristina Groves</p>
                                            </td>

                                            <td>
                                                <h5 class="time-title p-0">Timing</h5>
                                                <p>7.00 PM</p>
                                            </td>

                                            <td class="text-right">
                                                <a href="appointments.html" class="btn btn-outline-primary take-btn">Take up</a>
                                            </td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card member-panel">
                    <div class="card-header bg-white">
                        <h4 class="card-title mb-0">Doctors</h4>
                    </div>

                    <div class="card-body">
                        <ul class="contact-list">
                            @foreach ([
                                ['John Doe', 'MBBS, MD', 'online'],
                                ['Richard Miles', 'MD', 'offline'],
                                ['John Doe', 'BMBS', 'away'],
                                ['Richard Miles', 'MS, MD', 'online'],
                                ['John Doe', 'MBBS', 'offline'],
                                ['Richard Miles', 'MBBS, MD', 'away']
                            ] as $doctor)
                                <li>
                                    <div class="contact-cont">
                                        <div class="float-left user-img m-r-10">
                                            <a href="profile.html" title="{{ $doctor[0] }}">
                                                <img src="{{ asset('assets/img/user.jpg') }}" alt="" class="w-40 rounded-circle">
                                                <span class="status {{ $doctor[2] }}"></span>
                                            </a>
                                        </div>

                                        <div class="contact-info">
                                            <span class="contact-name text-ellipsis">{{ $doctor[0] }}</span>
                                            <span class="contact-date">{{ $doctor[1] }}</span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="card-footer text-center bg-white">
                        <a href="doctors.html" class="text-muted">View all Doctors</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title d-inline-block">New Patients</h4>
                        <a href="patients.html" class="btn btn-primary float-right">View all</a>
                    </div>

                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table mb-0 new-patient-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <img width="28" height="28" class="rounded-circle" src="{{ asset('assets/img/user.jpg') }}" alt="">
                                            <h2>John Doe</h2>
                                        </td>
                                        <td>Johndoe21@gmail.com</td>
                                        <td>+1-202-555-0125</td>
                                        <td><button class="btn btn-primary btn-primary-one float-right">Fever</button></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img width="28" height="28" class="rounded-circle" src="{{ asset('assets/img/user.jpg') }}" alt="">
                                            <h2>Richard</h2>
                                        </td>
                                        <td>Richard123@yahoo.com</td>
                                        <td>202-555-0127</td>
                                        <td><button class="btn btn-primary btn-primary-two float-right">Cancer</button></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img width="28" height="28" class="rounded-circle" src="{{ asset('assets/img/user.jpg') }}" alt="">
                                            <h2>Villiam</h2>
                                        </td>
                                        <td>Richard123@yahoo.com</td>
                                        <td>+1-202-555-0106</td>
                                        <td><button class="btn btn-primary btn-primary-three float-right">Eye</button></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img width="28" height="28" class="rounded-circle" src="{{ asset('assets/img/user.jpg') }}" alt="">
                                            <h2>Martin</h2>
                                        </td>
                                        <td>Richard123@yahoo.com</td>
                                        <td>776-2323 89562015</td>
                                        <td><button class="btn btn-primary btn-primary-four float-right">Fever</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="hospital-barchart">
                    <h4 class="card-title d-inline-block">Hospital Management</h4>
                </div>

                <div class="bar-chart">
                    <div class="legend">
                        <div class="item"><h4>Level1</h4></div>
                        <div class="item"><h4>Level2</h4></div>
                        <div class="item text-right"><h4>Level3</h4></div>
                        <div class="item text-right"><h4>Level4</h4></div>
                    </div>

                    <div class="chart clearfix">
                        @foreach ([
                            ['16%', 16, 'OPD Patient'],
                            ['71%', 71, 'New Patient'],
                            ['82%', 82, 'Laboratory Test'],
                            ['67%', 67, 'Treatment'],
                            ['30%', 30, 'Discharge']
                        ] as $item)
                            <div class="item">
                                <div class="bar">
                                    <span class="percent">{{ $item[0] }}</span>
                                    <div class="item-progress" data-percent="{{ $item[1] }}">
                                        <span class="title">{{ $item[2] }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
