<div class="modal fase" id="modal-medium2" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered justify-content-center" role="document">
        <form action="{{ route('admin.user.correct') }}" method="post">
            @csrf
            <input type="hidden" name="id" value={{ $user->id }}>
            <input type="hidden" name="question" value="medium2_c">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="h6 modal-title"><span class="fas fa-fw fa-question-square mr-2"></span>Check Answer</h2>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        {{ $user->medium2 }}
                    </div>
                    @if ($user->medium2_c == 0)
                        <div class="mb-2">
                            <label for="">Eternite Reward</label>
                            <input type="number" name="eternite" id="eternite" class="form-control" value="0">
                        </div>
                    @endif
                </div>
                @if ($user->medium2_c == 0)
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                @endif
            </div>
        </form>
    </div>
</div>
