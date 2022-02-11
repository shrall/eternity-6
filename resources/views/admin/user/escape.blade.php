@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <h2 class="h4"><span class="fa fa-fw fa-dice mr-2"></span>Add Random Item</h2>
        </div>
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
                <form action="{{ route('admin.user.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="escape" value="escape">
                    <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="border-0">Name</th>
                                    <th class="border-0">Toggle</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            {{ $user->name }}
                                        </td>
                                        <td>
                                            <select name="escape_{{ $user->id }}" class="form-control">
                                                <option value=0 @if ($user->escape == 0) selected @endif>Tidak Lolos</option>
                                                <option value=1 @if ($user->escape == 1) selected @endif>Lolos</option>
                                            </select>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-secondary mt-4">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
