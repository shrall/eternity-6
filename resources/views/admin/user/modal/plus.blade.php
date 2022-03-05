<div class="modal fase" id="modal-plus-{{ $user->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <form action="{{ route('admin.user.update', $user->id) }}" method="post">
            @csrf
            <input name="_method" type="hidden" value="PATCH">
            <input type="hidden" name="math" value="1">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="h6 modal-title"><span class="fas fa-fw fa-plus mr-2"></span>
                        {{ $user->name }}</h2>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label for="">Eternite - {{$user->eternite1}}</label>
                        <input type="number" name="eternite" id="eternite" class="form-control" min="0" value=0>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <label>Flour - {{$user->flour}}</label>
                            <input class="form-control" id="flour" name="flour" type="number" value=0 required>
                        </div>
                        <div class="col-md-3 mb-2">
                            <label>Egg - {{$user->egg}}</label>
                            <input class="form-control" id="egg" name="egg" type="number" value=0 required>
                        </div>
                        <div class="col-md-3 mb-2">
                            <label>Raw Meat - {{$user->meat}}</label>
                            <input class="form-control" id="meat" name="meat" type="number" value=0 required>
                        </div>
                        <div class="col-md-3 mb-2">
                            <label>Oil - {{$user->oil}}</label>
                            <input class="form-control" id="oil" name="oil" type="number" value=0 required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <label>Bread - {{$user->bread}}</label>
                            <input class="form-control" id="" name="bread" type="number" value=0 required>
                        </div>
                        <div class="col-md-3 mb-2">
                            <label>Bakpao - {{$user->bakpao}}</label>
                            <input class="form-control" id="" name="bakpao" type="number" value=0 required>
                        </div>
                        <div class="col-md-3 mb-2">
                            <label>Omelette - {{$user->omelette}}</label>
                            <input class="form-control" id="" name="omelette" type="number" value=0 required>
                        </div>
                        <div class="col-md-3 mb-2">
                            <label>Steak - {{$user->steak}}</label>
                            <input class="form-control" id="" name="steak" type="number" value=0 required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label>Iron - {{$user->iron}}</label>
                            <input class="form-control" id="" name="iron" type="number" placeholder="" value=0
                                required>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label>Wood - {{$user->wood}}</label>
                            <input class="form-control" id="" name="wood" type="number" placeholder="" value=0
                                required>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label>Cloth - {{$user->cloth}}</label>
                            <input class="form-control" id="" name="cloth" type="number" placeholder="" value=0
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <label>Sword - {{$user->sword}}</label>
                            <input class="form-control" id="" name="sword" type="number" placeholder="" value=0
                                required>
                        </div>
                        <div class="col-md-3 mb-2">
                            <label>Furniture - {{$user->furniture}}</label>
                            <input class="form-control" id="" name="furniture" type="number" placeholder="" value=0
                                required>
                        </div>
                        <div class="col-md-3 mb-2">
                            <label>Armor - {{$user->armor}}</label>
                            <input class="form-control" id="" name="armor" type="number" placeholder="" value=0
                                required>
                        </div>
                        <div class="col-md-3 mb-2">
                            <label>Ship Sail - {{$user->sail}}</label>
                            <input class="form-control" id="" name="sail" type="number" placeholder="" value=0
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mb-2">
                            <label>Ship A - Lv.{{$user->ship1}}</label>
                            <input class="form-control" id="" name="shipa" type="number" placeholder="" value=0
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Ship B - Lv.{{$user->ship2}}</label>
                            <input class="form-control" id="" name="shipb" type="number" placeholder="" value=0
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Ship C - Lv.{{$user->ship3}}</label>
                            <input class="form-control" id="" name="shipc" type="number" placeholder="" value=0
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Ship D - Lv.{{$user->ship4}}</label>
                            <input class="form-control" id="" name="shipd" type="number" placeholder="" value=0
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Ship E - Lv.{{$user->ship5}}</label>
                            <input class="form-control" id="" name="shipe" type="number" placeholder="" value=0
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Ship F - Lv.{{$user->ship6}}</label>
                            <input class="form-control" id="" name="shipf" type="number" placeholder="" value=0
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
