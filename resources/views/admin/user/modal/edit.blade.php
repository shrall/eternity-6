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
                    <div class="row justify-content-center">
                        <div class="col-md-2 mb-2">
                            <label>Map 1</label>
                            <input class="form-control" id="" name="map1" type="number" placeholder="" value={{$user->map1}}
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Map 2</label>
                            <input class="form-control" id="" name="map2" type="number" placeholder="" value={{$user->map2}}
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Map 3</label>
                            <input class="form-control" id="" name="map3" type="number" placeholder="" value={{$user->map3}}
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Map 4</label>
                            <input class="form-control" id="" name="map4" type="number" placeholder="" value={{$user->map4}}
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Map 5</label>
                            <input class="form-control" id="" name="map5" type="number" placeholder="" value={{$user->map5}}
                                required>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-2 mb-2">
                            <label>Map 6</label>
                            <input class="form-control" id="" name="map6" type="number" placeholder="" value={{$user->map6}}
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Map 7</label>
                            <input class="form-control" id="" name="map7" type="number" placeholder="" value={{$user->map7}}
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Map 8</label>
                            <input class="form-control" id="" name="map8" type="number" placeholder="" value={{$user->map8}}
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Map 9</label>
                            <input class="form-control" id="" name="map9" type="number" placeholder="" value={{$user->map9}}
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Map 10</label>
                            <input class="form-control" id="" name="map10" type="number" placeholder="" value={{$user->map10}}
                                required>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-2 mb-2">
                            <label>Map 11</label>
                            <input class="form-control" id="" name="map11" type="number" placeholder="" value={{$user->map11}}
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Map 12</label>
                            <input class="form-control" id="" name="map12" type="number" placeholder="" value={{$user->map12}}
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Map 13</label>
                            <input class="form-control" id="" name="map13" type="number" placeholder="" value={{$user->map13}}
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Map 14</label>
                            <input class="form-control" id="" name="map14" type="number" placeholder="" value={{$user->map14}}
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Map 15</label>
                            <input class="form-control" id="" name="map15" type="number" placeholder="" value={{$user->map15}}
                                required>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-2 mb-2">
                            <label>Map 16</label>
                            <input class="form-control" id="" name="map16" type="number" placeholder="" value={{$user->map16}}
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Map 17</label>
                            <input class="form-control" id="" name="map17" type="number" placeholder="" value={{$user->map17}}
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Map 18</label>
                            <input class="form-control" id="" name="map18" type="number" placeholder="" value={{$user->map18}}
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Map 19</label>
                            <input class="form-control" id="" name="map19" type="number" placeholder="" value={{$user->map19}}
                                required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Map 20</label>
                            <input class="form-control" id="" name="map20" type="number" placeholder="" value={{$user->map20}}
                                required>
                        </div>
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
