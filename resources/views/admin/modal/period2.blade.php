<div class="modal fase" id="modal-period" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered justify-content-center" role="document">
        <form action="{{ route('admin.period.update', Auth::user()->period->id) }}" method="post">
            @csrf
            <input name="_method" type="hidden" value="PATCH">
            <input type="hidden" value="escape" name="escape">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="h6 modal-title"><span class="fas fa-fw fa-hourglass-half mr-2"></span>Change Period</h2>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label for="">Period</label>
                        <input type="text" name="period" id="period" class="form-control" min="1"
                            value="{{ Auth::user()->period->name2 }}">
                    </div>
                    <div class="mb-2">
                        <label for="">Shop (set jadi 0 kalo mau di offin)</label>
                        <input type="text" name="board_shop" id="board_shop" class="form-control" min="1"
                            value="{{ Auth::user()->period->board_shop }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
