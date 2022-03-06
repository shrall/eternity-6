@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <h2 class="h4"><span class="fab fa-fw fa-dashcube mr-2"></span>Dashboard</h2>
        </div>
        <div class="d-block mb-4 mb-md-0">
            <div class="btn btn-secondary" data-toggle="modal" data-target="#modal-period">
                <span class="fas fa-fw fa-hourglass-half mr-2"></span>Change Period
            </div>
        </div>
        @include('admin.modal.period2')
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-light shadow-sm">
                <div class="card-header border-0 pb-2">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="h4"><i class="fas fa-users"></i> Users</h2>
                        </div>
                    </div>
                </div>
                <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="border-0">Name</th>
                                <th class="border-0">Eternites 2</th>
                                <th class="border-0">Paket</th>
                                <th class="border-0">Map</th>
                                <th class="border-0">Tipe Map</th>
                                <th class="border-0">Referral</th>
                                <th class="border-0">Ch 3 Time</th>
                                <th class="border-0">Rank</th>
                                <th class="border-0">Finish Time</th>
                                <th class="border-0">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                @include('admin.user.modal.edit')
                                <tr>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <td>{{ $user->eternite2 }}</td>
                                    <td>{{ $user->question_pack }}</td>
                                    <td>{{ $user->map }}</td>
                                    <td>{{ $user->map_type == 1 ? 'A' : 'B' }}</td>
                                    <td>{{ $user->referral == 1 ? 'Sudah' : 'Belum' }}</td>
                                    <td>{{ $user->chl3_timestamp ?? 'Belum Ch 3' }}</td>
                                    <td>{{ $user->finish }}</td>
                                    <td>{{ $user->finish_timestamp ?? 'Belum Finish' }}</td>
                                    <td>
                                        <a data-toggle="modal" data-target="#modal-edit-{{ $user->id }}"
                                            class="btn btn-sm btn-secondary mx-2"><span
                                                class="fas fa-fw fa-edit"></span></a>
                                        <a href="{{ route('admin.user.answer', $user->id) }}"
                                            class="btn btn-sm btn-secondary mx-2">
                                            <span class="fa fa-fw fa-eye"></span> See Answers
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
