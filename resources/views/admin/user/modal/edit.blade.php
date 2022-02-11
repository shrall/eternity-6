<div class="modal fase" id="modal-edit-{{ $user->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <form action="{{ route('admin.user.update', $user->id) }}" method="post">
            @csrf
            <input name="_method" type="hidden" value="PATCH">
            <input type="hidden" name="math" value="55">
            {{-- 55 berarti buat escape --}}
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="h6 modal-title"><span class="fas fa-fw fa-edit mr-2"></span>
                        {{ $user->name }}</h2>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label for="">Eternite (Escape Room) (Kalo mau dikurangin, tulis - aja. | Contoh: "-2")</label>
                        <input type="number" name="eternite" id="eternite" class="form-control" value=0>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label>Easy Room</label>
                            <input class="form-control" id="" name="easy" type="number" placeholder="" value={{$user->easy}}
                                required>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label>Medium Room</label>
                            <input class="form-control" id="" name="medium" type="number" placeholder="" value={{$user->medium}}
                                required>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label>Hard Room</label>
                            <input class="form-control" id="" name="hard" type="number" placeholder="" value={{$user->hard}}
                                required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
