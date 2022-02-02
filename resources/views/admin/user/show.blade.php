@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <h2 class="h4">
                {{ $user->name }}
            </h2>
        </div>
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-4">
        <div>
            <a class="btn btn-secondary text-dark mr-2 dropdown-toggle" href="{{ route('admin.dashboard') }}">
                <span class="fas fa-arrow-left mr-2"></span>Back
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-light shadow-sm">
                <div class="card-header border-0 pb-2">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="h4"><i class="fas fa-clipboard-list mr-2"></i>Log List</h2>
                        </div>
                    </div>
                </div>
                <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="border-0" width="10%">No.</th>
                                <th class="border-0">Periode</th>
                                <th class="border-0">Amount</th>
                                <th class="border-0">Before</th>
                                <th class="border-0">After</th>
                                <th class="border-0">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user->logs as $log)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>Periode {{ $log->period }}</td>
                                    @if ($log->math == 1)
                                        <td class="text-success">
                                            <span class="fas fa-fw fa-plus mr-2"></span>{{ $log->amount }}
                                        </td>
                                    @elseif ($log->math == 0)
                                        <td class="text-danger">
                                            <span class="fas fa-fw fa-minus mr-2"></span>{{ $log->amount }}
                                        </td>
                                    @endif
                                    <td>{{ $log->before }}</td>
                                    <td>{{ $log->after }}</td>
                                    <td>{{ $log->description }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
