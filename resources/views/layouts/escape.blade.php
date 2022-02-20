<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('head')
</head>

<body class="font-audiowide text-white tracking-widest">
    @yield('modals')
    <div class="w-screen h-screen flex justify-center bg-e-grid-black pt-8 font-raleway-regular">
        <div class="relative border-2 border-eternity-6-gray " style="width: 1280px; height: 720px;">
            <div class="bg-black z-40 absolute" id="fade-black"
                style="width: 1260px; height: 700px; margin-left: 10px; margin-top: 10px;"></div>
            <div id="game-container" class="absolute z-20"
                style="width: 1260px; height: 700px; margin-left: 10px; margin-top: 10px;">
                @yield('content')
                <div class="bg-black opacity-40 w-full h-full absolute top-0 hidden" id="hud-background"
                    onclick="closeHUD();"></div>
                <div id="game-hud">
                    <div id="hud-foreground">
                        @yield('puzzles')
                        <div id="question"
                            class="absolute inset-x-0 mx-auto bg-eternity-6-black border-2 border-eternity-6-gray top-0 hidden"
                            style="width: 1000px; height: 600px;">
                            <div class="flex flex-col items-center justify-center" style="height: 600px;">
                                <div class="flex items-center justify-center mb-8">
                                    <div class="text-3xl text-center" id="question-text"></div>
                                </div>
                                <div class="grid grid-cols-4 gap-x-2 items-center justify-evenly mb-4"
                                    id="question-choices">
                                    <div class="text-md text-center font-montserrat" id="choice-a"></div>
                                    <div class="text-md text-center font-montserrat" id="choice-b"></div>
                                    <div class="text-md text-center font-montserrat" id="choice-c"></div>
                                    <div class="text-md text-center font-montserrat" id="choice-d"></div>
                                </div>
                                <div class="items-center justify-center mb-8 hidden" id="easy-2-q">
                                    <img src="{{ asset('png/easy-2-q.png') }}" class="w-36">
                                </div>
                                <div class="flex items-center justify-center mb-8">
                                    <textarea style="resize: none; width: 800px;" id="answer"
                                        class="bg-eternity-6-black border-2 border-eternity-6-gray p-4" type="text"
                                        name="answer"></textarea>
                                </div>
                                <div class="flex items-center justify-center mb-8">
                                    <div class="hover-button cursor-pointer" onclick="submitAnswer();">Submit</div>
                                </div>
                            </div>
                        </div>
                        <div id="inventory"
                            class="absolute inset-x-0 mx-auto bg-eternity-6-black border-2 border-eternity-6-gray top-0 hidden pt-4"
                            style="width: 1000px; height: 600px;">
                            <div id="map-true" @if (Auth::user()->period->name2 == 3 && Auth::user()->referral == 0) class="hidden" @endif>
                                @if (Auth::user()->map_type == 1)
                                    <img src="{{ asset('png/1a.png') }}"
                                        class="absolute imap1 @if (Auth::user()->map1 == 0) hidden @endif">
                                    <img src="{{ asset('png/2a.png') }}"
                                        class="absolute imap2 @if (Auth::user()->map2 == 0) hidden @endif">
                                    <img src="{{ asset('png/3a.png') }}"
                                        class="absolute imap3 @if (Auth::user()->map3 == 0) hidden @endif">
                                    <img src="{{ asset('png/4a.png') }}"
                                        class="absolute imap4 @if (Auth::user()->map4 == 0) hidden @endif">
                                    <img src="{{ asset('png/5a.png') }}"
                                        class="absolute imap5 @if (Auth::user()->map5 == 0) hidden @endif">
                                    <img src="{{ asset('png/6a.png') }}"
                                        class="absolute imap6 @if (Auth::user()->map6 == 0) hidden @endif">
                                    <img src="{{ asset('png/7a.png') }}"
                                        class="absolute imap7 @if (Auth::user()->map7 == 0) hidden @endif">
                                    <img src="{{ asset('png/6a.png') }}"
                                        class="absolute imap6 @if (Auth::user()->map6 == 0) hidden @endif">
                                    <img src="{{ asset('png/8a.png') }}"
                                        class="absolute imap8 @if (Auth::user()->map8 == 0) hidden @endif">
                                    <img src="{{ asset('png/9a.png') }}"
                                        class="absolute imap9 @if (Auth::user()->map9 == 0) hidden @endif">
                                    <img src="{{ asset('png/10a.png') }}"
                                        class="absolute imap10 @if (Auth::user()->map10 == 0) hidden @endif">
                                    <img src="{{ asset('png/11a.png') }}"
                                        class="absolute imap11 @if (Auth::user()->map11 == 0) hidden @endif">
                                    <img src="{{ asset('png/12a.png') }}"
                                        class="absolute imap12 @if (Auth::user()->map12 == 0) hidden @endif">
                                    <img src="{{ asset('png/13a.png') }}"
                                        class="absolute imap13 @if (Auth::user()->map13 == 0) hidden @endif">
                                    <img src="{{ asset('png/14a.png') }}"
                                        class="absolute imap14 @if (Auth::user()->map14 == 0) hidden @endif">
                                    <img src="{{ asset('png/15a.png') }}"
                                        class="absolute imap15 @if (Auth::user()->map15 == 0) hidden @endif">
                                    <img src="{{ asset('png/16a.png') }}"
                                        class="absolute imap16 @if (Auth::user()->map16 == 0) hidden @endif">
                                    <img src="{{ asset('png/17a.png') }}"
                                        class="absolute imap17 @if (Auth::user()->map17 == 0) hidden @endif">
                                    <img src="{{ asset('png/18a.png') }}"
                                        class="absolute imap18 @if (Auth::user()->map18 == 0) hidden @endif">
                                    <img src="{{ asset('png/19a.png') }}"
                                        class="absolute imap19 @if (Auth::user()->map19 == 0) hidden @endif">
                                    <img src="{{ asset('png/20a.png') }}"
                                        class="absolute imap20 @if (Auth::user()->map20 == 0) hidden @endif">
                                @else
                                    <img src="{{ asset('png/1b.png') }}"
                                        class="absolute imap1 @if (Auth::user()->map1 == 0) hidden @endif">
                                    <img src="{{ asset('png/2b.png') }}"
                                        class="absolute imap2 @if (Auth::user()->map2 == 0) hidden @endif">
                                    <img src="{{ asset('png/3b.png') }}"
                                        class="absolute imap3 @if (Auth::user()->map3 == 0) hidden @endif">
                                    <img src="{{ asset('png/4b.png') }}"
                                        class="absolute imap4 @if (Auth::user()->map4 == 0) hidden @endif">
                                    <img src="{{ asset('png/5b.png') }}"
                                        class="absolute imap5 @if (Auth::user()->map5 == 0) hidden @endif">
                                    <img src="{{ asset('png/7b.png') }}"
                                        class="absolute imap7 @if (Auth::user()->map7 == 0) hidden @endif">
                                    <img src="{{ asset('png/6b.png') }}"
                                        class="absolute imap6 @if (Auth::user()->map6 == 0) hidden @endif">
                                    <img src="{{ asset('png/8b.png') }}"
                                        class="absolute imap8 @if (Auth::user()->map8 == 0) hidden @endif">
                                    <img src="{{ asset('png/9b.png') }}"
                                        class="absolute imap9 @if (Auth::user()->map9 == 0) hidden @endif">
                                    <img src="{{ asset('png/10b.png') }}"
                                        class="absolute imap10 @if (Auth::user()->map10 == 0) hidden @endif">
                                    <img src="{{ asset('png/11b.png') }}"
                                        class="absolute imap11 @if (Auth::user()->map11 == 0) hidden @endif">
                                    <img src="{{ asset('png/12b.png') }}"
                                        class="absolute imap12 @if (Auth::user()->map12 == 0) hidden @endif">
                                    <img src="{{ asset('png/13b.png') }}"
                                        class="absolute imap13 @if (Auth::user()->map13 == 0) hidden @endif">
                                    <img src="{{ asset('png/14b.png') }}"
                                        class="absolute imap14 @if (Auth::user()->map14 == 0) hidden @endif">
                                    <img src="{{ asset('png/15b.png') }}"
                                        class="absolute imap15 @if (Auth::user()->map15 == 0) hidden @endif">
                                    <img src="{{ asset('png/16b.png') }}"
                                        class="absolute imap16 @if (Auth::user()->map16 == 0) hidden @endif">
                                    <img src="{{ asset('png/17b.png') }}"
                                        class="absolute imap17 @if (Auth::user()->map17 == 0) hidden @endif">
                                    <img src="{{ asset('png/18b.png') }}"
                                        class="absolute imap18 @if (Auth::user()->map18 == 0) hidden @endif">
                                    <img src="{{ asset('png/19b.png') }}"
                                        class="absolute imap19 @if (Auth::user()->map19 == 0) hidden @endif">
                                    <img src="{{ asset('png/20b.png') }}"
                                        class="absolute imap20 @if (Auth::user()->map20 == 0) hidden @endif">
                                @endif
                            </div>
                            <div id="map-false" @if (Auth::user()->period->name2 != 3 || Auth::user()->referral == 1) class="hidden" @endif>
                                <div style="top: 250px;"
                                    class="p-2 flex flex-col items-center justify-center gap-y-2 absolute mx-auto inset-x-0">
                                    <span class="underline">Referral Code</span>
                                    <span>{{ Auth::user()->referral_code }}</span>
                                </div>
                                @if (Auth::user()->map_type == 1)
                                    <img src="{{ asset('png/1b.png') }}"
                                        class="absolute imap1 @if (Auth::user()->map1 == 0) hidden @endif">
                                    <img src="{{ asset('png/2b.png') }}"
                                        class="absolute imap2 @if (Auth::user()->map2 == 0) hidden @endif">
                                    <img src="{{ asset('png/4b.png') }}"
                                        class="absolute imap4 @if (Auth::user()->map4 == 0) hidden @endif">
                                    <img src="{{ asset('png/5b.png') }}"
                                        class="absolute imap5 @if (Auth::user()->map5 == 0) hidden @endif">
                                    <img src="{{ asset('png/6b.png') }}"
                                        class="absolute imap6 @if (Auth::user()->map6 == 0) hidden @endif">
                                    <img src="{{ asset('png/10b.png') }}"
                                        class="absolute imap10 @if (Auth::user()->map10 == 0) hidden @endif">
                                    <img src="{{ asset('png/12b.png') }}"
                                        class="absolute imap12 @if (Auth::user()->map12 == 0) hidden @endif">
                                    <img src="{{ asset('png/13b.png') }}"
                                        class="absolute imap13 @if (Auth::user()->map13 == 0) hidden @endif">
                                    <img src="{{ asset('png/14b.png') }}"
                                        class="absolute imap14 @if (Auth::user()->map14 == 0) hidden @endif">
                                    <img src="{{ asset('png/15b.png') }}"
                                        class="absolute imap15 @if (Auth::user()->map15 == 0) hidden @endif">
                                    <img src="{{ asset('png/20b.png') }}"
                                        class="absolute imap20 @if (Auth::user()->map20 == 0) hidden @endif">
                                @else
                                    <img src="{{ asset('png/7a.png') }}"
                                        class="absolute imap7 @if (Auth::user()->map7 == 0) hidden @endif">
                                    <img src="{{ asset('png/6a.png') }}"
                                        class="absolute imap6 @if (Auth::user()->map6 == 0) hidden @endif">
                                    <img src="{{ asset('png/8a.png') }}"
                                        class="absolute imap8 @if (Auth::user()->map8 == 0) hidden @endif">
                                    <img src="{{ asset('png/9a.png') }}"
                                        class="absolute imap9 @if (Auth::user()->map9 == 0) hidden @endif">
                                    <img src="{{ asset('png/10a.png') }}"
                                        class="absolute imap10 @if (Auth::user()->map10 == 0) hidden @endif">
                                    <img src="{{ asset('png/11a.png') }}"
                                        class="absolute imap11 @if (Auth::user()->map11 == 0) hidden @endif">
                                    <img src="{{ asset('png/15a.png') }}"
                                        class="absolute imap15 @if (Auth::user()->map15 == 0) hidden @endif">
                                    <img src="{{ asset('png/16a.png') }}"
                                        class="absolute imap16 @if (Auth::user()->map16 == 0) hidden @endif">
                                    <img src="{{ asset('png/17a.png') }}"
                                        class="absolute imap17 @if (Auth::user()->map17 == 0) hidden @endif">
                                    <img src="{{ asset('png/18a.png') }}"
                                        class="absolute imap18 @if (Auth::user()->map18 == 0) hidden @endif">
                                    <img src="{{ asset('png/19a.png') }}"
                                        class="absolute imap19 @if (Auth::user()->map19 == 0) hidden @endif">
                                    <img src="{{ asset('png/20a.png') }}"
                                        class="absolute imap20 @if (Auth::user()->map20 == 0) hidden @endif">
                                @endif
                            </div>
                            @if (Auth::user()->period->name2 == 3 && Auth::user()->referral == 0)
                                <input type="text" style="resize: none; width: 400px; bottom: -36px;" id="referral"
                                    class="bg-eternity-6-black border-2 border-eternity-6-gray absolute inset-x-0 mx-auto"
                                    type="text" name="referral" placeholder="Input Code Here">
                                <div class="flex items-center justify-center hover-button cursor-pointer absolute inset-x-0 mx-auto"
                                    id="referral-button" style="bottom: -93px; width: 145px;"
                                    onclick="submitReferral();">
                                    Submit</div>
                            @endif
                        </div>
                        <div class="nplc-item bg-eternity-6-black border-2 border-eternity-6-gray flex items-center gap-x-4"
                            style="width: 150px; height:50px; bottom:0; right:0;" onclick="openHUD('#inventory');">
                            <div class="bg-map-9b w-12 h-12 bg-no-repeat bg-cover bg-center" style="margin-top: 25px;">
                            </div>
                            <span class="text-lg">x <span id="map-count">{{ Auth::user()->map }}</span></span>
                        </div>
                        <div class="nplc-item bg-logout-button hover:bg-logout-button-hover"
                            style="width: 100px; height:100px; bottom:0; left:0;" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    </script>
    <script>
        $(function() {
            $(".draggable").draggable({
                containment: 'parent',
            });
        });
    </script>
    <script>
        $("#fade-black").animate({
            opacity: "0"
        }, 300);
        setTimeout(function() {
            $("#fade-black").css("display", "none");
        }, 300);
    </script>
    <script>
        function closeHUD() {
            $('#hud-background').removeClass('block').addClass('hidden');
            $('#inventory').removeClass('block').addClass('hidden');
            $('#question').removeClass('block').addClass('hidden');
            $('.puzzle').removeClass('block').addClass('hidden');
        }

        function openHUD(cssClass) {
            $('#hud-background').removeClass('hidden').addClass('block');
            $(cssClass).removeClass('hidden').addClass('block');
        }

        function checkDatabase(column) {
            return $.post('{{ config('app.url') }}' + "/user/check-database", {
                _token: CSRF_TOKEN,
                column: column,
            });
        }

        function checkAnswer(puzzle, answer) {
            return $.post('{{ config('app.url') }}' + "/user/check-answer", {
                _token: CSRF_TOKEN,
                puzzle: puzzle,
                answer: answer,
            });
        }

        function changeScene(before, after) {
            $("#fade-black").css("display", "block");
            $("#fade-black").animate({
                opacity: "1"
            }, 300);
            setTimeout(function() {
                $(before).css("display", "none");
                $(after).css("display", "block");
                setTimeout(function() {
                    $("#fade-black").animate({
                        opacity: "0"
                    }, 300);
                    setTimeout(function() {
                        $("#fade-black").css("display", "none");
                    }, 300);
                }, 300);
            }, 300);
        }
        var acquiredItem = "";

        function getItem(name) {
            $('.' + name).addClass('hidden');
            $('.i' + name).removeClass('hidden');
            closeHUD();
            addItem(name)
        }

        function addItem(item) {
            return $.post('{{ config('app.url') }}' + "/escape/add-item", {
                _token: CSRF_TOKEN,
                item: item,
                id: {{ Auth::id() }}
            }).done(function(result) {
                $('#map-count').html(result);
            });
        }
    </script>
    <script>
        function openModal(type) {
            $('#' + type + '-modal').removeClass('hidden').addClass('flex');
        }

        function closeModal() {
            $('.modal').removeClass('flex').addClass('hidden');
        }
    </script>
    <script>
        var questions = {};
        var easy = {};
        var medium = {};
        var hard = {};
        var easy_choices = {};
        easy['1'] = ['Puncak gunung manakah yang tertinggi di bumi sebelum puncak everest ditaklukkan?',
            'Di foto, aku selalu berada diatas presiden dan wakil presiden, tetapi aku tidak memiliki peran apapun di pemerintahan, siapakah aku?',
            '2 pria harus menyebrangi sungai dengan 1 perahu yang hanya bisa menampung 1 orang. Namun, keduanya tetap berhasil menyeberangi sungai. Bagaimana itu bisa terjadi?',
            'Semakin banyak kamu mengambil, semakin banyak yang tersisa. Apakah itu?',
            'Aku adalah makhluk ciptaan tuhan, jawabanku selalu benar. Siapakah aku?',
            'Aku dibeli untuk makanan namun aku tidak pernah dimakan, apakah aku?',
            'Manakah yang lebih dulu, ayam atau telur?',
            'Ada 5 orang yang berjalan di satu payung kecil, tetapi anehnya tidak seorangpun dari mereka kehujanan, kenapa?',
            'Siapakah menteri ekonomi Indonesia?',
            'Sebutkan contoh Tradeoff dalam kehidupan sehari-hari!'
        ];
        easy_choices['1a'] = ['A. Everest', 'A. Burung Garuda',
            'A. Orang pertama menyeberang terlebih dahulu, kemudian orang pertama mengoper perahu tersebut dan orang kedua menyeberang',
            'A. Pasir', 'A. Perempuan', 'A. Kerupuk', 'A. Telur', 'A. Karena hujannya di tempat lain', '', ''
        ];
        easy_choices['1b'] = ['B. K2', 'B. Foto Presiden', 'B. Mereka berada di dua tepi sungai yang berbeda',
            'B. Air', 'B. Panitia eternity', 'B. Plastik', 'B. Ayam ', 'B. Karena mereka berjalan di dalam rumah',
            '', ''
        ];
        easy_choices['1c'] = ['C. Makalu', 'C. Peci',
            'C. Orang pertama menyeberang menggunakan perahu, orang kedua menyeberang dengan berenang',
            'C. Es batu mencair', 'C. Wanita', 'C. Tisu', 'C. Peternak Ayam', 'C. Karena tidak hujan ', '', ''
        ];
        easy_choices['1d'] = ['D. Cho Oyu', 'D. Jam dinding',
            'D. Orang pertama menggendong orang kedua dan menyeberang bersama menggunakan perahu', 'D. Sidik jari',
            'D. Orang tua ', 'D. Piring', 'D. Semua jawaban benar', 'D. Karena orangnya kecil-kecil', '', ''
        ];
        easy['2'] = ['Kenapa kaca spion ada dua?',
            'Mobil apa yang bikin galau?',
            'Budi punya 3 apel, diambil dua. Sisa berapa?',
            'Apa yang ada di akhir pelangi?',
            'Negara apa yang kaya akan teh hijau?',
            'Apa yang terjadi 4 tahun sekali?',
            'Apa nama daerah yang sangat beracun?',
            'Cicak cicak apa yang banyak maunya?',
            'Siapakah ini?',
            'Apa perbedaan ekonomi mikro dan ekonomi makro?'
        ];
        easy_choices['2a'] = ['A. Agar pengendara dapat melihat kondisi di belakang kiri dan kanan kendaraan',
            'A. Mobil tanpa penumpang di kiri',
            'A. 3', 'A. Emas ', 'A. Papua nugreentea', 'A. Piala dunia ', 'A. Tasikmalaya', 'A. Cicak labil', '', ''
        ];
        easy_choices['2b'] = ['B. Supaya bisa liat doi', 'B. Mobilang sayang tapi bukan pacar ', 'B. 4',
            'B. Leprechaun (kurcaci ijo)', 'B. Papua Nugenea', 'B. Piala Thomas ', 'B. Tasikasik',
            'B. Cicak cicak demanding', '', ''
        ];
        easy_choices['2c'] = ['C. Karena kalau cuma satu kesepian', 'C. Mobil belum lunas cicilannya', 'C. 5', 'C. i',
            'C. Papua Nugrinti', 'C. Piala presiden', 'C. Toxicmalaysia', 'C. Cicak betina', '', ''
        ];
        easy_choices['2d'] = ['D. Karena sudah kodratnya', 'D. Mobil mantan', 'D. 6', 'D. Kentang',
            'D. Papua New Guinea',
            'D. Piala Gubernur', 'D. Toxicmalaya ', 'D. Cicak kelaparan', '', ''
        ];
        easy['3'] = [
            'Ada seseorang yang berjalan di tepi pantai. Ketika ia menoleh ke belakang, ia tidak menemukan jejak kakinya. Mengapa?',
            'Siapa presiden paling unyu?',
            'Kaki seribu kalo belok kiri kakinya berapa?',
            'Kesenian apa yang biasa dilakukan oleh nasabah bank?',
            'Kenapa matahari bisa tenggelam?',
            'Buku buku apa yang buat keringatan dan pakai alat?',
            'Siapa penyanyi dangdut yang mempunyai surel (surat elektronik)?',
            'Meja meja apa yang sudah punah?',
            'Sebutkan 10 prinsip ekonomi',
            'Berikan contoh pasar monopolistik!'
        ];
        easy_choices['3a'] = ['A. Karena dia berjalan mundur ', 'A. Xi Jinping', 'A. 1001', 'A. Tari jaipong',
            'A. Karena matahari bisanya terbit ', 'A. Buku hantam', 'A. Saiful jamil', 'A. Merak', '', ''
        ];
        easy_choices['3b'] = ['B. Karena dia tidak menoleh', 'B. Kim Jong Unch', 'B. 2000', 'B. Tari tunai ',
            'B. Karena matahari tidak bisa berenang', 'B. Buku tangkis', 'B. Ayu ting ting', 'B. Quangga', '', ''
        ];
        easy_choices['3c'] = ['C. Karena dia menutup matanya', 'C. Jokowi', 'C. 500', 'C. Tari torsetor',
            'C. Karena matahari terbit dari timur', 'C. Buku sulap', 'C. Via valen', 'C. Burung dodo', '', ''
        ];
        easy_choices['3d'] = ['D. Karena jejak kakinya terhapus oleh air laut', 'D. Joe Biden', 'D. 1000',
            'D. Tari piring', 'D. Karena matahari bisa berenang', 'D. Buku anak', 'D. Lesti kejora', 'D. Mejalodon',
            '', ''
        ];
        medium['1'] = ['Berdasarkan sumbernya, inflasi dibagi menjadi dua. Sebutkan dan jelaskan!',
            'Sebutkan dan jelaskan kebijakan perdagangan internasional di bidang ekspor!',
            'Sebutkan dan jelaskan fungsi dan peran dana pensiun!',
            'Perhatikan data komponen pendapatan nasional negara X berikut: GNP Rp. 30.000, Penyusutan Rp. 4.500, Pajak langsung Rp. 2.750, Pajak tidak langsung Rp. 3.300, Subsidi Rp. 1.000, Besarnya NNI (Net National Income) negara X adalah',
            'Sebutkan dan jelaskan jenis tenaga kerja menurut tingkat kualitasnya!', 'Siapa saja pelaku ekonomi?'
        ];
        medium['2'] = ['Sebutkan hal-hal yang mempengaruhi permintaan!',
            'Sebutkan fungsi dan peran perusahaan asuransi!', 'Sebutkan syarat-syarat sistem pengupahan yang baik!',
            'Ada tiga pendekatan yang digunakan dalam menghitung pendapatan nasional yaitu pendekatan produksi, pendapatan, dan pengeluaran. Tuliskan rumus masing-masing pendekatan!',
            'Sebutkan dan jelaskan 5 fungsi bank sentral!', 'Sebutkan faktor-faktor yang mempengaruhi kebutuhan!'
        ];
        medium['3'] = ['Sebutkan fungsi turunan uang!', 'Sebutkan peranan utama BUMD terhadap perekonomian indonesia!',
            'Jelaskan mengapa ilmu ekonomi sangat bermanfaat bagi manusia!',
            'Sebutkan faktor-faktor penyebab kelangkaan!', 'Sebutkan hal-hal yang mempengaruhi penawaran!',
            'Diketahui negara Y memiliki data dalam satu tahun: sewa  Rp800.000, upah  Rp500.000, investasi Rp100.000, bunga Rp30.000, konsumsi Rp900.000, ekspor Rp20.000, impor Rp15.000, Belanja pemerintah Rp700.000, Besarnya pendapatan nasional negara Y dihitung dengan menggunakan pendekatan pengeluaran adalah'
        ];
        hard['1'] = ['ga cukup jadi butuh link. saranku QR Code trus di scan gitu kykny bagus'];
        hard['2'] = ['ga cukup jadi butuh link. saranku QR Code trus di scan gitu kykny bagus'];
        hard['3'] = ['ga cukup jadi butuh link. saranku QR Code trus di scan gitu kykny bagus'];
    </script>
    <script>
        var c_diff = '';
        var c_type = '';
        var c_num = '';

        function openQ(diff, type, num) {
            if (diff == 'easy' && type == 2 && num == 9) {
                $('#easy-2-q').removeClass('hidden').addClass('flex');
            } else {
                $('#easy-2-q').removeClass('flex').addClass('hidden');
            }
            if (diff == 'easy') {
                $('#question-choices').removeClass('hidden').addClass('grid');
                $('#choice-a').html(easy_choices[type + 'a'][num - 1]);
                $('#choice-b').html(easy_choices[type + 'b'][num - 1]);
                $('#choice-c').html(easy_choices[type + 'c'][num - 1]);
                $('#choice-d').html(easy_choices[type + 'd'][num - 1]);
            } else {
                $('#question-choices').removeClass('grid').addClass('hidden');
            }
            $('#answer').val(null);
            c_diff = diff;
            c_type = type;
            c_num = num;
            if (diff == 'easy') {
                questions = easy;
            } else if (diff == 'medium') {
                questions = medium;
            } else if (diff == 'hard') {
                questions = hard;
            }
            if (diff == 'hard') {
                //ganti qr code seems gud
                $('#question-text').html(questions[type][num - 1]);
            } else {
                $('#question-text').html(questions[type][num - 1]);
            }
            openHUD('#question');
        }

        function submitAnswer() {
            $.post('{{ config('app.url') }}' + "/escape/submit-answer", {
                _token: CSRF_TOKEN,
                answer: $('#answer').val(),
                difficulty: c_diff,
                number: c_num,
                id: {{ Auth::id() }}
            }).done(function(result) {
                closeHUD();
                $('#paper-' + c_diff + c_num).addClass('hidden');
            });
        }

        function submitReferral() {
            $.post('{{ config('app.url') }}' + "/escape/submit-referral", {
                _token: CSRF_TOKEN,
                code: $('#referral').val(),
                id: {{ Auth::id() }}
            }).done(function(result) {
                if (result == 1) {
                    $('#referral-button').html('CORRECT');
                    $('#referral-button').css('background-color', '#1db954');
                    $('#referral-button').prop('disabled', true);
                    $('#map-false').addClass('hidden');
                    $('#map-true').removeClass('hidden').addClass('block');
                } else {
                    $('#referral-button').html('WRONG')
                    $('#referral-button').prop('disabled', true);
                    setTimeout(function() {
                        $('#referral-button').html('Submit')
                        $('#referral-button').prop('disabled', false);
                    }, 1000);
                }
            });
        }
    </script>
    @yield('scripts')
</body>

</html>
