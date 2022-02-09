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
        @include('admin.modal.period')
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
                                <th class="border-0">Eternites</th>
                                <th class="border-0">Points</th>
                                <th class="border-0">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                @include('admin.user.modal.plus')
                                @include('admin.user.modal.minus')
                                @include('admin.user.modal.random')
                                @php
                                    $ship1 = $user->ship1;
                                    $ship2 = $user->ship2;
                                    $ship3 = $user->ship3;
                                    $ship4 = $user->ship4;
                                    $ship5 = $user->ship5;
                                    $ship6 = $user->ship6;
                                    $power = 0;
                                    $ships = [$ship1, $ship2, $ship3, $ship4, $ship5, $ship6];
                                    foreach ($ships as $key => $element) {
                                        if ($element == 1) {
                                            $power += 150;
                                        } elseif ($element == 2) {
                                            $power += 380;
                                        } elseif ($element == 3) {
                                            $power += 1030;
                                        } elseif ($element == 4) {
                                            $power += 1930;
                                        } elseif ($element == 5) {
                                            $power += 3130;
                                        }
                                    }
                                @endphp
                                <tr>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <td>{{ $user->eternite1 }}</td>
                                    <td>{{ (($user->ration * 40 + $user->coal * 75 + $user->cannonball * 450 + $user->cannon * 3250) * 2) / 5 + ($power * 3) / 5 }}
                                    </td>
                                    <td>
                                        <a data-toggle="modal" data-target="#modal-plus-{{ $user->id }}"
                                            class="btn btn-sm btn-secondary mx-2"><span
                                                class="fas fa-fw fa-plus"></span></a>
                                        <a data-toggle="modal" data-target="#modal-minus-{{ $user->id }}"
                                            class="btn btn-sm btn-secondary mx-2"><span
                                                class="fas fa-fw fa-minus"></span></a>
                                        <a data-toggle="modal" data-target="#modal-random-{{ $user->id }}"
                                            class="btn btn-sm btn-secondary mx-2"><span
                                                class="fas fa-fw fa-dice"></span></a>
                                        <a href="{{ route('admin.user.show', $user->id) }}"
                                            class="btn btn-sm btn-secondary mx-2">
                                            <span class="fa fa-fw fa-eye"></span> See Logs
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
