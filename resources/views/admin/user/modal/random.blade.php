<div class="modal fase" id="modal-random-{{ $user->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <form action="{{ route('admin.user.update', $user->id) }}" method="post">
            @csrf
            <input name="_method" type="hidden" value="PATCH">
            <input type="hidden" name="math" value="99">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="h6 modal-title"><span class="fas fa-fw fa-dice mr-2"></span>
                        {{ $user->name }}</h2>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label for="">Item</label>
                        <input type="number" name="random" id="random" class="form-control" min="1" max="7" value=0>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
