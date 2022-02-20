@extends('layouts.escape')

@section('content')
    <div class="w-full h-full bg-starting-point bg-cover relative">
        <div class="nplc-item @if (Auth::user()->easy == 0) bg-easy-red
        hover:bg-easy-red-hover @else bg-easy-green hover:bg-easy-green-hover @endif"
            style="width: 220px; height: 450px; bottom: 100px; right: 950px;"
            @if (Auth::user()->easy != 0) onclick="changeScene('.bg-starting-point',
            '.bg-easy-room');" @else onclick="openModal('locked-room');" @endif>
        </div>
        <div class="nplc-item @if (Auth::user()->medium == 0) bg-medium-red
        hover:bg-medium-red-hover @else bg-medium-green hover:bg-medium-green-hover @endif"
            style="width: 220px; height: 450px; bottom: 100px; right: 520px;"
            @if (Auth::user()->medium != 0) onclick="changeScene('.bg-starting-point',
            '.bg-medium-room');" @else onclick="openModal('locked-room');" @endif>
        </div>
        <div class="nplc-item @if (Auth::user()->hard == 0) bg-hard-red
        hover:bg-hard-red-hover @else bg-hard-green hover:bg-hard-green-hover @endif"
            style="width: 220px; height: 450px; bottom: 100px; right: 83px;"
            @if (Auth::user()->hard != 0) onclick="changeScene('.bg-starting-point',
            '.bg-hard-room');" @else onclick="openModal('locked-room');" @endif>
        </div>
    </div>
    <div class="w-full h-full bg-room bg-easy-room bg-cover hidden relative">
        <div class="nplc-item bg-eternity-6-black border-2 border-eternity-6-gray flex items-center justify-center gap-x-4"
            style="width: 100px; height:50px; top:0; left:0;" onclick="changeScene('.bg-room', '.bg-starting-point')">
            <span class="text-lg">Back</span>
        </div>
        @if (Auth::user()->map1 == 0)
            @if (Auth::user()->map_type == 1)
                <div class="e-map map1 bg-map-1a hover:bg-map-1a-hover w-12 h-12" style="top: 100px; left: 83px;"
                    onclick="getItem('map1');">
                </div>
            @else
                <div class="e-map map1 bg-map-1b hover:bg-map-1b-hover w-12 h-12 bg-right" style="top: 100px; left: 50px;"
                    onclick="getItem('map1');">
                </div>
            @endif
        @endif
        @if (Auth::user()->map2 == 0)
            @if (Auth::user()->map_type == 1)
                <div class="e-map map2 bg-map-2a hover:bg-map-2a-hover w-12 h-12" style="top: 210px; left: 54px;"
                    onclick="getItem('map2');">
                </div>
            @else
                <div class="e-map map2 bg-map-2b hover:bg-map-2b-hover w-12 h-12" style="top: 210px; left: 55px;"
                    onclick="getItem('map2');">
                </div>
            @endif
        @endif
        @if (Auth::user()->map3 == 0)
            @if (Auth::user()->map_type == 1)
                <div class="e-map map3 bg-map-3a hover:bg-map-3a-hover w-12 h-12" style="top: 605px; left: 432px;"
                    onclick="getItem('map3');">
                </div>
            @else
                <div class="e-map map3 bg-map-3b hover:bg-map-3b-hover w-12 h-12 bg-right" style="top: 605px; left: 432px;"
                    onclick="getItem('map3');">
                </div>
            @endif
        @endif
        @if (Auth::user()->map4 == 0)
            @if (Auth::user()->map_type == 1)
                <div class="e-map map4 bg-map-4a hover:bg-map-4a-hover w-12 h-12" style="top: 385px; left: 900px;"
                    onclick="getItem('map4');">
                </div>
            @else
                <div class="e-map map4 bg-map-4b hover:bg-map-4b-hover w-12 h-12 bg-right" style="top: 390px; left: 900px;"
                    onclick="getItem('map4');">
                </div>
            @endif
        @endif
        @if (Auth::user()->map5 == 0)
            @if (Auth::user()->map_type == 1)
                <div class="e-map map5 bg-map-5a hover:bg-map-5a-hover w-12 h-12" style="top: 513px; left: 73px;"
                    onclick="getItem('map5');">
                </div>
            @else
                <div class="e-map map5 bg-map-5b hover:bg-map-5b-hover w-12 h-12 bg-right" style="top: 513px; left: 73px;"
                    onclick="getItem('map5');">
                </div>
            @endif
        @endif
        @if (Auth::user()->map6 == 0)
            @if (Auth::user()->map_type == 1)
                <div class="e-map map6 bg-map-6a hover:bg-map-6a-hover w-12 h-12" style="top: 100px; left: 140px;"
                    onclick="getItem('map6');">
                </div>
            @else
                <div class="e-map map6 bg-map-6b hover:bg-map-6b-hover w-12 h-12" style="top: 100px; left: 160px;"
                    onclick="getItem('map6');">
                </div>
            @endif
        @endif
        @if (Auth::user()->map7 == 0)
            @if (Auth::user()->map_type == 1)
                <div class="e-map map7 bg-map-7a hover:bg-map-7a-hover w-12 h-12 bg-center" style="top: 450px; left: 483px;"
                    onclick="getItem('map7');">
                </div>
            @else
                <div class="e-map map7 bg-map-7b hover:bg-map-7b-hover w-12 h-12 bg-center" style="top: 450px; left: 483px;"
                    onclick="getItem('map7');">
                </div>
            @endif
        @endif
        @if (Auth::user()->map8 == 0)
            @if (Auth::user()->map_type == 1)
                <div class="e-map map8 bg-map-8a hover:bg-map-8a-hover w-12 h-12 bg-center" style="top: 427px; left: 818px;"
                    onclick="getItem('map8');">
                </div>
            @else
                <div class="e-map map8 bg-map-8b hover:bg-map-8b-hover w-12 h-12 bg-center" style="top: 427px; left: 818px;"
                    onclick="getItem('map8');">
                </div>
            @endif
        @endif
        @if (Auth::user()->map9 == 0)
            @if (Auth::user()->map_type == 1)
                <div class="e-map map9 bg-map-9a hover:bg-map-9a-hover w-12 h-12 bg-center" style="top: 210px; left: 980px;"
                    onclick="getItem('map9');">
                </div>
            @else
                <div class="e-map map9 bg-map-9b hover:bg-map-9b-hover w-12 h-12 bg-center" style="top: 210px; left: 980px;"
                    onclick="getItem('map9');">
                </div>
            @endif
        @endif
        @if (Auth::user()->map10 == 0)
            @if (Auth::user()->map_type == 1)
                <div class="e-map map10 bg-map-10a hover:bg-map-10a-hover w-12 h-12" style="top: 100px; left: 710px;"
                    onclick="getItem('map10');">
                </div>
            @else
                <div class="e-map map10 bg-map-10b hover:bg-map-10b-hover w-12 h-12" style="top: 100px; left: 710px;"
                    onclick="getItem('map10');">
                </div>
            @endif
        @endif
        @if (Auth::user()->easy1 == null)
            <div class="nplc-item bg-paper hover:bg-paper-hover" id="paper-1"
                onclick="openQ('easy',{{ Auth::user()->question_pack }}, 1);"
                style="width: 52px; height: 46px; top: 611px; left: 700px;">
            </div>
        @endif
        @if (Auth::user()->easy2 == null)
            <div class="nplc-item bg-paper hover:bg-paper-hover" id="paper-2"
                onclick="openQ('easy',{{ Auth::user()->question_pack }}, 2);"
                style="width: 52px; height: 46px; top: 75px; left: 546px;">
            </div>
        @endif
        @if (Auth::user()->easy3 == null)
            <div class="nplc-item bg-paper hover:bg-paper-hover" id="paper-3"
                onclick="openQ('easy',{{ Auth::user()->question_pack }}, 3);"
                style="width: 52px; height: 46px; top: 316px; left: 200px;">
            </div>
        @endif
        @if (Auth::user()->easy4 == null)
            <div class="nplc-item bg-paper hover:bg-paper-hover" id="paper-4"
                onclick="openQ('easy',{{ Auth::user()->question_pack }}, 4);"
                style="width: 52px; height: 46px; top: 486px; left: 822px;">
            </div>
        @endif
        @if (Auth::user()->easy5 == null)
            <div class="nplc-item bg-paper hover:bg-paper-hover" id="paper-5"
                onclick="openQ('easy',{{ Auth::user()->question_pack }}, 5);"
                style="width: 52px; height: 46px; top: 370px; left: 846px;">
            </div>
        @endif
        @if (Auth::user()->easy6 == null)
            <div class="nplc-item bg-paper hover:bg-paper-hover" id="paper-6"
                onclick="openQ('easy',{{ Auth::user()->question_pack }}, 6);"
                style="width: 52px; height: 46px; top: 275px; left: 1082px;">
            </div>
        @endif
        @if (Auth::user()->easy7 == null)
            <div class="nplc-item bg-paper hover:bg-paper-hover" id="paper-7"
                onclick="openQ('easy',{{ Auth::user()->question_pack }}, 7);"
                style="width: 52px; height: 46px; top: 398px; left: 1000px;">
            </div>
        @endif
        @if (Auth::user()->easy8 == null)
            <div class="nplc-item bg-paper hover:bg-paper-hover" id="paper-8"
                onclick="openQ('easy',{{ Auth::user()->question_pack }}, 8);"
                style="width: 52px; height: 46px; top: 250px; left: 715px;">
            </div>
        @endif
        @if (Auth::user()->easy9 == null)
            <div class="nplc-item bg-paper hover:bg-paper-hover" id="paper-9"
                onclick="openQ('easy',{{ Auth::user()->question_pack }}, 9);"
                style="width: 52px; height: 46px; top: 497px; left: 328px;">
            </div>
        @endif
        @if (Auth::user()->easy10 == null)
            <div class="nplc-item bg-paper hover:bg-paper-hover" id="paper-10"
                onclick="openQ('easy',{{ Auth::user()->question_pack }}, 10);"
                style="width: 52px; height: 46px; top: 316px; left: 535px;">
            </div>
        @endif
        <div class="nplc-item bg-easy-book-1 hover:bg-easy-book-1-hover draggable"
            style="width: 52px; height: 46px; top: 316px; left: 822px;">
        </div>
        <div class="nplc-item bg-easy-book-2 hover:bg-easy-book-2-hover draggable"
            style="width: 43px; height: 39px; top: 378px; left: 843px;">
        </div>
        <div class="nplc-item bg-easy-book-3 hover:bg-easy-book-3-hover draggable"
            style="width: 53px; height: 48px; top: 429px; left: 813px;">
        </div>
        <div class="nplc-item bg-easy-book-4 hover:bg-easy-book-4-hover draggable"
            style="width: 56px; height: 43px; top: 490px; left: 830px;">
        </div>
        <div class="nplc-item bg-easy-carpet hover:bg-easy-carpet-hover draggable"
            style="width: 795px; height: 50px; top: 610px; left: 140px;">
        </div>
        <div class="nplc-item bg-easy-curtain-left hover:bg-easy-curtain-left-hover draggable"
            style="width: 140px; height: 450px; top: 0px; left: 540px;">
        </div>
        <div class="nplc-item bg-easy-curtain-right hover:bg-easy-curtain-right-hover draggable"
            style="width: 127px; height: 579px; top: 0px; left: 139px;">
        </div>
        <div class="nplc-item bg-easy-frame-1 hover:bg-easy-frame-1-hover draggable"
            style="width: 80px; height: 100px; top: 75px; left: 25px;">
        </div>
        <div class="nplc-item bg-easy-frame-2 hover:bg-easy-frame-2-hover draggable"
            style="width: 80px; height: 100px; top: 200px; left: 25px;">
        </div>
        <div class="nplc-item bg-easy-frame-3 hover:bg-easy-frame-3-hover draggable"
            style="width: 90px; height: 105px; top: 393px; left: 975px;">
        </div>
        <div class="nplc-item bg-easy-mirror hover:bg-easy-mirror-hover draggable"
            style="width: 85px; height: 245px; top: 100px; left: 690px;">
        </div>
        <div class="nplc-item bg-easy-lamp hover:bg-easy-lamp-hover draggable"
            style="width: 45px; height: 100px; top: 395px; left: 915px;">
        </div>
        <div class="nplc-item bg-easy-plant hover:bg-easy-plant-hover draggable"
            style="width: 130px; height: 265px; top: 317px; left: 27px;">
        </div>
        <div class="nplc-item bg-easy-sofa hover:bg-easy-sofa-hover draggable"
            style="width: 450px; height: 185px; top: 400px; left: 330px;">
        </div>
        <div class="nplc-item bg-easy-tv hover:bg-easy-tv-hover draggable"
            style="width: 220px; height: 135px; top: 200px; left: 950px;">
        </div>
    </div>
    <div class="w-full h-full bg-room bg-medium-room bg-cover hidden relative">
        <div class="nplc-item bg-eternity-6-black border-2 border-eternity-6-gray flex items-center justify-center gap-x-4"
            style="width: 100px; height:50px; top:0; left:0;" onclick="changeScene('.bg-room', '.bg-starting-point')">
            <span class="text-lg">Back</span>
        </div>
        @if (Auth::user()->map11 == 0)
            @if (Auth::user()->map_type == 1)
                <div class="e-map map11 bg-map-11a hover:bg-map-11a-hover w-12 h-12 bg-center" style="top: 404px; left: 325px;"
                    onclick="getItem('map11');">
                </div>
            @else
                <div class="e-map map11 bg-map-11b hover:bg-map-11b-hover w-12 h-12 bg-right"
                    style="top: 396px; left: 325px;" onclick="getItem('map11');">
                </div>
            @endif
        @endif
        @if (Auth::user()->map12 == 0)
            @if (Auth::user()->map_type == 1)
                <div class="e-map map12 bg-map-12a hover:bg-map-12a-hover w-12 h-12 bg-right" style="top: 172px; left: 54px;"
                    onclick="getItem('map12');">
                </div>
            @else
                <div class="e-map map12 bg-map-12b hover:bg-map-12b-hover w-12 h-12" style="top: 172px; left: 55px;"
                    onclick="getItem('map12');">
                </div>
            @endif
        @endif
        @if (Auth::user()->map13 == 0)
            @if (Auth::user()->map_type == 1)
                <div class="e-map map13 bg-map-13a hover:bg-map-13a-hover w-12 h-12 bg-right" style="top: 206px; left: 432px;"
                    onclick="getItem('map13');">
                </div>
            @else
                <div class="e-map map13 bg-map-13b hover:bg-map-13b-hover w-12 h-12 bg-center"
                    style="top: 206px; left: 432px;" onclick="getItem('map13');">
                </div>
            @endif
        @endif
        @if (Auth::user()->map14 == 0)
            @if (Auth::user()->map_type == 1)
                <div class="e-map map14 bg-map-14a hover:bg-map-14a-hover w-12 h-12 bg-right" style="top: 330px; left: 1045px;"
                    onclick="getItem('map14');">
                </div>
            @else
                <div class="e-map map14 bg-map-14b hover:bg-map-14b-hover w-12 h-12 bg-right"
                    style="top: 352px; left: 1045px;" onclick="getItem('map14');">
                </div>
            @endif
        @endif
        @if (Auth::user()->map15 == 0)
            @if (Auth::user()->map_type == 1)
                <div class="e-map map15 bg-map-15a hover:bg-map-15a-hover w-12 h-12 bg-right" style="top: 225px; left: 623px;"
                    onclick="getItem('map15');">
                </div>
            @else
                <div class="e-map map15 bg-map-15b hover:bg-map-15b-hover w-12 h-12 bg-left"
                    style="top: 225px; left: 623px;" onclick="getItem('map15');">
                </div>
            @endif
        @endif
        @if (Auth::user()->map16 == 0)
            @if (Auth::user()->map_type == 1)
                <div class="e-map map16 bg-map-16a hover:bg-map-16a-hover w-12 h-12 bg-center" style="top: 150px; left: 1143px;"
                    onclick="getItem('map16');">
                </div>
            @else
                <div class="e-map map16 bg-map-16b hover:bg-map-16b-hover w-12 h-12" style="top: 150px; left: 1143px;"
                    onclick="getItem('map16');">
                </div>
            @endif
        @endif
        @if (Auth::user()->map17 == 0)
            @if (Auth::user()->map_type == 1)
                <div class="e-map map17 bg-map-17a hover:bg-map-17a-hover w-12 h-12 bg-center"
                    style="top: 247px; left: 1170px;" onclick="getItem('map17');">
                </div>
            @else
                <div class="e-map map17 bg-map-17b hover:bg-map-17b-hover w-12 h-12 bg-center"
                    style="top: 247px; left: 1170px;" onclick="getItem('map17');">
                </div>
            @endif
        @endif
        @if (Auth::user()->map18 == 0)
            @if (Auth::user()->map_type == 1)
                <div class="e-map map18 bg-map-18a hover:bg-map-18a-hover w-12 h-12 bg-center"
                    style="top: 170px; left: 1034px;" onclick="getItem('map18');">
                </div>
            @else
                <div class="e-map map18 bg-map-18b hover:bg-map-18b-hover w-12 h-12 bg-right"
                    style="top: 170px; left: 1034px;" onclick="getItem('map18');">
                </div>
            @endif
        @endif
        @if (Auth::user()->medium1 == null)
            <div class="nplc-item bg-paper hover:bg-paper-hover"
                onclick="openQ('medium',{{ Auth::user()->question_pack }}, 1);"
                style="width: 52px; height: 46px; top: 241px; left: 738px;">
            </div>
        @endif
        @if (Auth::user()->medium2 == null)
            <div class="nplc-item bg-paper hover:bg-paper-hover"
                onclick="openQ('medium',{{ Auth::user()->question_pack }}, 2);"
                style="width: 52px; height: 46px; top: 254px; left: 570px;">
            </div>
        @endif
        @if (Auth::user()->medium3 == null)
            <div class="nplc-item bg-paper hover:bg-paper-hover"
                onclick="openQ('medium',{{ Auth::user()->question_pack }}, 3);"
                style="width: 52px; height: 46px; top: 188px; left: 200px;">
            </div>
        @endif
        @if (Auth::user()->medium4 == null)
            <div class="nplc-item bg-paper hover:bg-paper-hover"
                onclick="openQ('medium',{{ Auth::user()->question_pack }}, 4);"
                style="width: 52px; height: 46px; top: 332px; left: 1148px;">
            </div>
        @endif
        @if (Auth::user()->medium5 == null)
            <div class="nplc-item bg-paper hover:bg-paper-hover"
                onclick="openQ('medium',{{ Auth::user()->question_pack }}, 5);"
                style="width: 52px; height: 46px; top: 401px; left: 888px;">
            </div>
        @endif
        @if (Auth::user()->medium6 == null)
            <div class="nplc-item bg-paper hover:bg-paper-hover"
                onclick="openQ('medium',{{ Auth::user()->question_pack }}, 6);"
                style="width: 52px; height: 46px; top: 250px; left: 380px;">
            </div>
        @endif
        <div class="nplc-item bg-medium-alarm hover:bg-medium-alarm-hover draggable"
            style="width: 47px; height: 51px; top: 397px; left: 888px;">
        </div>
        <div class="nplc-item bg-medium-basket hover:bg-medium-basket-hover draggable"
            style="width: 88px; height: 56px; top: 169px; left: 1029px;">
        </div>
        <div class="nplc-item bg-medium-basket hover:bg-medium-basket-hover draggable"
            style="width: 88px; height: 56px; top: 169px; left: 1132px;">
        </div>
        <div class="nplc-item bg-medium-frame-1 hover:bg-medium-frame-1-hover draggable"
            style="width: 150px; height: 105px; top: 200px; left: 367px;">
        </div>
        <div class="nplc-item bg-medium-frame-2 hover:bg-medium-frame-2-hover draggable"
            style="width: 150px; height: 105px; top: 200px; left: 560px;">
        </div>
        <div class="nplc-item bg-medium-frame-3 hover:bg-medium-frame-3-hover draggable"
            style="width: 43px; height: 48px; top: 402px; left: 333px;">
        </div>
        <div class="nplc-item bg-medium-frame-4 hover:bg-medium-frame-4-hover draggable"
            style="width: 220px; height: 135px; top: 200px; left: 740px;">
        </div>
        <div class="nplc-item bg-medium-books hover:bg-medium-books-hover draggable"
            style="width: 75px; height: 52px; top: 254px; left: 1032px;">
        </div>
        <div class="nplc-item bg-medium-books hover:bg-medium-books-hover draggable"
            style="width: 75px; height: 52px; top: 332px; left: 1032px;">
        </div>
        <div class="nplc-item bg-medium-books hover:bg-medium-books-hover draggable"
            style="width: 75px; height: 52px; top: 254px; left: 1138px;">
        </div>
        <div class="nplc-item bg-medium-books hover:bg-medium-books-hover draggable"
            style="width: 75px; height: 52px; top: 332px; left: 1138px;">
        </div>
        <div class="nplc-item bg-medium-book hover:bg-medium-book-hover draggable"
            style="width: 126px; height: 62px; top: 176px; left: 49px;">
        </div>
        <div class="nplc-item bg-medium-parfume hover:bg-medium-parfume-hover draggable"
            style="width: 52px; height: 53px; top: 188px; left: 190px;">
        </div>
        {{-- <div class="nplc-item bg-medium-shelf-open bg-medium-shelf-open-left hover:bg-medium-shelf-open-left-hover hidden"
            onclick="closeShelf();" style="width: 164px; height: 347px; top: 200px; left: 950px;">
        </div>
        <div class="nplc-item bg-medium-shelf-open bg-medium-shelf-open-right hover:bg-medium-shelf-open-right-hover hidden"
            onclick="closeShelf();" style="width: 164px; height: 347px; top: 200px; left: 950px;">
        </div>
        <div class="nplc-item bg-medium-shelf-closed hover:bg-medium-shelf-closed-hover" onclick="openShelf();"
            style="width: 348px; height: 348px; top: 100px; left: 950px;">
        </div> --}}
    </div>
@endsection

@section('modals')
    <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="locked-room-modal">
        <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal" onclick="closeModal();">
        </div>
        <div
            class="w-vw-60 bg-eternity-6-black border-2 border-eternity-6-gray p-8 absolute bg-contain bg-no-repeat flex flex-col">
            <div class="flex items-center justify-center">
                <div class="text-4xl">Room is Locked</div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function openShelf() {
            $('.bg-medium-shelf-closed').addClass('hidden').removeClass('block');
            $('.bg-medium-shelf-open').addClass('block').removeClass('hidden');
        }

        function closeShelf() {
            $('.bg-medium-shelf-open').addClass('hidden').removeClass('block');
            $('.bg-medium-shelf-closed').addClass('block').removeClass('hidden');
        }
    </script>
@endsection
