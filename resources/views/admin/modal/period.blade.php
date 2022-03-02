<div class="modal fase" id="modal-period" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered justify-content-center" role="document">
        <form action="{{ route('admin.period.update', Auth::user()->period->id) }}" method="post">
            @csrf
            <input name="_method" type="hidden" value="PATCH">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="h6 modal-title"><span class="fas fa-fw fa-hourglass-half mr-2"></span>Change Period</h2>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label for="">Period</label>
                        <input type="number" name="period" id="period" class="form-control" min="1" value="{{Auth::user()->period->name}}">
                    </div>
                    <div class="mb-2">
                        <label for="">Close Start (0 = Close | 1 = Open)</label>
                        <input type="number" name="close_start" id="close-start" class="form-control" value="{{Auth::user()->period->close_start}}">
                    </div>
                    <div class="mb-2">
                        <label for="">Close Final (1 = Close)</label>
                        <input type="number" name="close_final" id="close-final" class="form-control" value="{{Auth::user()->period->close_final}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
