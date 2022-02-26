@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <h2 class="h4">
                {{ $user->name }}
            </h2>
        </div>
        @include('admin.modal.easy1')
        @include('admin.modal.easy2')
        @include('admin.modal.easy3')
        @include('admin.modal.easy4')
        @include('admin.modal.easy5')
        @include('admin.modal.easy6')
        @include('admin.modal.easy7')
        @include('admin.modal.easy8')
        @include('admin.modal.easy9')
        @include('admin.modal.easy10')
        @include('admin.modal.medium1')
        @include('admin.modal.medium2')
        @include('admin.modal.medium3')
        @include('admin.modal.medium4')
        @include('admin.modal.medium5')
        @include('admin.modal.medium6')
        @include('admin.modal.hard1')
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-4">
        <div>
            <a class="btn btn-secondary text-dark mr-2 dropdown-toggle" href="{{ route('admin.escape') }}">
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
                            <h2 class="h4"><i class="fas fa-question-circle mr-2"></i>Question Pack -
                                {{ $user->question_pack }}</h2>
                        </div>
                    </div>
                </div>
                <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="border-0">Question</th>
                                <th class="border-0">Answer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Easy 01</td>
                                <td>
                                    @if ($user->easy1 != null)
                                        @if ($user->easy1_c == 0)
                                            <a data-toggle="modal" data-target="#modal-easy1"
                                                class="btn btn-sm btn-secondary mx-2"><span class="fas fa-fw fa-eye"></span>
                                                Check
                                            </a>
                                        @else
                                            <a data-toggle="modal" data-target="#modal-easy1"
                                                class="btn btn-sm btn-success mx-2"><span class="fas fa-fw fa-check"></span>
                                                Checked
                                            </a>
                                        @endif
                                    @else
                                        <a class="btn btn-sm btn-danger mx-2"><span class="fas fa-fw fa-times"></span>
                                            No Answer
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Easy 02</td>
                                <td>
                                    @if ($user->easy2 != null)
                                        @if ($user->easy2_c == 0)
                                            <a data-toggle="modal" data-target="#modal-easy2"
                                                class="btn btn-sm btn-secondary mx-2"><span class="fas fa-fw fa-eye"></span>
                                                Check
                                            </a>
                                        @else
                                            <a data-toggle="modal" data-target="#modal-easy2"
                                                class="btn btn-sm btn-success mx-2"><span class="fas fa-fw fa-check"></span>
                                                Checked
                                            </a>
                                        @endif
                                    @else
                                        <a class="btn btn-sm btn-danger mx-2"><span class="fas fa-fw fa-times"></span>
                                            No Answer
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Easy 03</td>
                                <td>
                                    @if ($user->easy3 != null)
                                        @if ($user->easy3_c == 0)
                                            <a data-toggle="modal" data-target="#modal-easy3"
                                                class="btn btn-sm btn-secondary mx-2"><span class="fas fa-fw fa-eye"></span>
                                                Check
                                            </a>
                                        @else
                                            <a data-toggle="modal" data-target="#modal-easy3"
                                                class="btn btn-sm btn-success mx-2"><span class="fas fa-fw fa-check"></span>
                                                Checked
                                            </a>
                                        @endif
                                    @else
                                        <a class="btn btn-sm btn-danger mx-2"><span class="fas fa-fw fa-times"></span>
                                            No Answer
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Easy 04</td>
                                <td>
                                    @if ($user->easy4 != null)
                                        @if ($user->easy4_c == 0)
                                            <a data-toggle="modal" data-target="#modal-easy4"
                                                class="btn btn-sm btn-secondary mx-2"><span class="fas fa-fw fa-eye"></span>
                                                Check
                                            </a>
                                        @else
                                            <a data-toggle="modal" data-target="#modal-easy4"
                                                class="btn btn-sm btn-success mx-2"><span class="fas fa-fw fa-check"></span>
                                                Checked
                                            </a>
                                        @endif
                                    @else
                                        <a class="btn btn-sm btn-danger mx-2"><span class="fas fa-fw fa-times"></span>
                                            No Answer
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Easy 05</td>
                                <td>
                                    @if ($user->easy5 != null)
                                        @if ($user->easy5_c == 0)
                                            <a data-toggle="modal" data-target="#modal-easy5"
                                                class="btn btn-sm btn-secondary mx-2"><span class="fas fa-fw fa-eye"></span>
                                                Check
                                            </a>
                                        @else
                                            <a data-toggle="modal" data-target="#modal-easy5"
                                                class="btn btn-sm btn-success mx-2"><span class="fas fa-fw fa-check"></span>
                                                Checked
                                            </a>
                                        @endif
                                    @else
                                        <a class="btn btn-sm btn-danger mx-2"><span class="fas fa-fw fa-times"></span>
                                            No Answer
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Easy 06</td>
                                <td>
                                    @if ($user->easy6 != null)
                                        @if ($user->easy6_c == 0)
                                            <a data-toggle="modal" data-target="#modal-easy6"
                                                class="btn btn-sm btn-secondary mx-2"><span class="fas fa-fw fa-eye"></span>
                                                Check
                                            </a>
                                        @else
                                            <a data-toggle="modal" data-target="#modal-easy6"
                                                class="btn btn-sm btn-success mx-2"><span class="fas fa-fw fa-check"></span>
                                                Checked
                                            </a>
                                        @endif
                                    @else
                                        <a class="btn btn-sm btn-danger mx-2"><span class="fas fa-fw fa-times"></span>
                                            No Answer
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Easy 07</td>
                                <td>
                                    @if ($user->easy7 != null)
                                        @if ($user->easy7_c == 0)
                                            <a data-toggle="modal" data-target="#modal-easy7"
                                                class="btn btn-sm btn-secondary mx-2"><span class="fas fa-fw fa-eye"></span>
                                                Check
                                            </a>
                                        @else
                                            <a data-toggle="modal" data-target="#modal-easy7"
                                                class="btn btn-sm btn-success mx-2"><span class="fas fa-fw fa-check"></span>
                                                Checked
                                            </a>
                                        @endif
                                    @else
                                        <a class="btn btn-sm btn-danger mx-2"><span class="fas fa-fw fa-times"></span>
                                            No Answer
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Easy 08</td>
                                <td>
                                    @if ($user->easy8 != null)
                                        @if ($user->easy8_c == 0)
                                            <a data-toggle="modal" data-target="#modal-easy8"
                                                class="btn btn-sm btn-secondary mx-2"><span class="fas fa-fw fa-eye"></span>
                                                Check
                                            </a>
                                        @else
                                            <a data-toggle="modal" data-target="#modal-easy8"
                                                class="btn btn-sm btn-success mx-2"><span class="fas fa-fw fa-check"></span>
                                                Checked
                                            </a>
                                        @endif
                                    @else
                                        <a class="btn btn-sm btn-danger mx-2"><span class="fas fa-fw fa-times"></span>
                                            No Answer
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Easy 09</td>
                                <td>
                                    @if ($user->easy9 != null)
                                        @if ($user->easy9_c == 0)
                                            <a data-toggle="modal" data-target="#modal-easy9"
                                                class="btn btn-sm btn-secondary mx-2"><span class="fas fa-fw fa-eye"></span>
                                                Check
                                            </a>
                                        @else
                                            <a data-toggle="modal" data-target="#modal-easy9"
                                                class="btn btn-sm btn-success mx-2"><span class="fas fa-fw fa-check"></span>
                                                Checked
                                            </a>
                                        @endif
                                    @else
                                        <a class="btn btn-sm btn-danger mx-2"><span class="fas fa-fw fa-times"></span>
                                            No Answer
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Easy 10</td>
                                <td>
                                    @if ($user->easy10 != null)
                                        @if ($user->easy10_c == 0)
                                            <a data-toggle="modal" data-target="#modal-easy10"
                                                class="btn btn-sm btn-secondary mx-2"><span class="fas fa-fw fa-eye"></span>
                                                Check
                                            </a>
                                        @else
                                            <a data-toggle="modal" data-target="#modal-easy10"
                                                class="btn btn-sm btn-success mx-2"><span class="fas fa-fw fa-check"></span>
                                                Checked
                                            </a>
                                        @endif
                                    @else
                                        <a class="btn btn-sm btn-danger mx-2"><span class="fas fa-fw fa-times"></span>
                                            No Answer
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Medium 1</td>
                                <td>
                                    @if ($user->medium1 != null)
                                        @if ($user->medium1_c == 0)
                                            <a data-toggle="modal" data-target="#modal-medium1"
                                                class="btn btn-sm btn-secondary mx-2"><span class="fas fa-fw fa-eye"></span>
                                                Check
                                            </a>
                                        @else
                                            <a data-toggle="modal" data-target="#modal-medium1"
                                                class="btn btn-sm btn-success mx-2"><span class="fas fa-fw fa-check"></span>
                                                Checked
                                            </a>
                                        @endif
                                    @else
                                        <a class="btn btn-sm btn-danger mx-2"><span class="fas fa-fw fa-times"></span>
                                            No Answer
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Medium 2</td>
                                <td>
                                    @if ($user->medium2 != null)
                                        @if ($user->medium2_c == 0)
                                            <a data-toggle="modal" data-target="#modal-medium2"
                                                class="btn btn-sm btn-secondary mx-2"><span class="fas fa-fw fa-eye"></span>
                                                Check
                                            </a>
                                        @else
                                            <a data-toggle="modal" data-target="#modal-medium2"
                                                class="btn btn-sm btn-success mx-2"><span class="fas fa-fw fa-check"></span>
                                                Checked
                                            </a>
                                        @endif
                                    @else
                                        <a class="btn btn-sm btn-danger mx-2"><span class="fas fa-fw fa-times"></span>
                                            No Answer
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Medium 3</td>
                                <td>
                                    @if ($user->medium3 != null)
                                        @if ($user->medium3_c == 0)
                                            <a data-toggle="modal" data-target="#modal-medium3"
                                                class="btn btn-sm btn-secondary mx-2"><span class="fas fa-fw fa-eye"></span>
                                                Check
                                            </a>
                                        @else
                                            <a data-toggle="modal" data-target="#modal-medium3"
                                                class="btn btn-sm btn-success mx-2"><span class="fas fa-fw fa-check"></span>
                                                Checked
                                            </a>
                                        @endif
                                    @else
                                        <a class="btn btn-sm btn-danger mx-2"><span class="fas fa-fw fa-times"></span>
                                            No Answer
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Medium 4</td>
                                <td>
                                    @if ($user->medium4 != null)
                                        @if ($user->medium4_c == 0)
                                            <a data-toggle="modal" data-target="#modal-medium4"
                                                class="btn btn-sm btn-secondary mx-2"><span class="fas fa-fw fa-eye"></span>
                                                Check
                                            </a>
                                        @else
                                            <a data-toggle="modal" data-target="#modal-medium4"
                                                class="btn btn-sm btn-success mx-2"><span class="fas fa-fw fa-check"></span>
                                                Checked
                                            </a>
                                        @endif
                                    @else
                                        <a class="btn btn-sm btn-danger mx-2"><span class="fas fa-fw fa-times"></span>
                                            No Answer
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Medium 5</td>
                                <td>
                                    @if ($user->medium5 != null)
                                        @if ($user->medium5_c == 0)
                                            <a data-toggle="modal" data-target="#modal-medium5"
                                                class="btn btn-sm btn-secondary mx-2"><span
                                                    class="fas fa-fw fa-eye"></span>
                                                Check
                                            </a>
                                        @else
                                            <a data-toggle="modal" data-target="#modal-medium5"
                                                class="btn btn-sm btn-success mx-2"><span
                                                    class="fas fa-fw fa-check"></span>
                                                Checked
                                            </a>
                                        @endif
                                    @else
                                        <a class="btn btn-sm btn-danger mx-2"><span class="fas fa-fw fa-times"></span>
                                            No Answer
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Medium 6</td>
                                <td>
                                    @if ($user->medium6 != null)
                                        @if ($user->medium6_c == 0)
                                            <a data-toggle="modal" data-target="#modal-medium6"
                                                class="btn btn-sm btn-secondary mx-2"><span
                                                    class="fas fa-fw fa-eye"></span>
                                                Check
                                            </a>
                                        @else
                                            <a data-toggle="modal" data-target="#modal-medium6"
                                                class="btn btn-sm btn-success mx-2"><span
                                                    class="fas fa-fw fa-check"></span>
                                                Checked
                                            </a>
                                        @endif
                                    @else
                                        <a class="btn btn-sm btn-danger mx-2"><span class="fas fa-fw fa-times"></span>
                                            No Answer
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Hard 1</td>
                                <td>
                                    @if ($user->hard1 != null)
                                        @if ($user->hard1_c == 0)
                                            <a data-toggle="modal" data-target="#modal-hard1"
                                                class="btn btn-sm btn-secondary mx-2"><span
                                                    class="fas fa-fw fa-eye"></span>
                                                Check
                                            </a>
                                        @else
                                            <a data-toggle="modal" data-target="#modal-hard1"
                                                class="btn btn-sm btn-success mx-2"><span
                                                    class="fas fa-fw fa-check"></span>
                                                Checked
                                            </a>
                                        @endif
                                    @else
                                        <a class="btn btn-sm btn-danger mx-2"><span class="fas fa-fw fa-times"></span>
                                            No Answer
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
