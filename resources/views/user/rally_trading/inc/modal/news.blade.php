<div class="absolute w-screen h-screen hidden items-center justify-center modal" id="news-modal">
    <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal"
        onclick="closeModal();">
    </div>
    <div class="w-vw-60 h-vh-60 bg-lt-rb-frame pt-12 py-24 px-12 2xl:p-12 absolute bg-contain bg-no-repeat flex flex-col justify-between">
        <div class="text-3xl ml-12 2xl:mb-4">News</div>
        <div class="text-md 2xl:text-xl ml-12 mr-24 2xl:mr-48 font-montserrat">
            <div class="flex items-center justify-between gap-8 2xl:mb-4">
                {{Auth::user()->period->news}}
            </div>
        </div>
        <div class="flex items-center mr-8 2xl:mr-32">
            <button type="submit" class="hover-button ml-auto" onclick="closeModal();">Okay</button>
        </div>
    </div>
</div>
