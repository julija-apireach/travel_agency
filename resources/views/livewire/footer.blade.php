<div class="bg-gradient-to-t from-yellow-100 to-white">
    <!--Contacts and info-->
    <!--Large Screen-->
    <div class="relative hidden md:grid grid-cols-4 text-xl leading-6 px-6 md:px-8 lg:px-12 xl:px-64">
        <!--First block-->
        <div class="relative border-r border-black font-normal">
            <div class="absolute top-0 left-0">
                <img src="{{ asset('images/small-logo.svg') }}">
            </div>
            <div class="absolute bottom-4 left-0">
                <p>"Pasaule ir pilna ar brīnišķīgām
                    lietām, kuras jūs vēl neesat
                    redzējis. Nekad neatsakieties
                    no iespējas tās redzēt."
                    / Dž.K. Roulinga
                </p>
            </div>

        </div>
        <!--Second block-->
        <div class="flex flex-col gap-6 border-r border-black px-2">
            <h4 class="font-bold">Atbalsts:</h4>

            <div class="flex flex-col gap-1">
                <p>Tel: +371 26404522</p>
                <p>Tel: +371 29127960</p>
                <p>Epasts: info@nirvanatravel.eu</p>
                <p>Adrese: Rīga, Stabu iela 55 - 33,</p>
                <p>LV-1010</p>
            </div>

            <div class="flex flex-col gap-3 px-5">
                <p class="font-bold">Seko mums:</p>
                <div class="flex gap-8">
                    <a><img src="{{ asset('images/icons/facebook_footer.svg') }}"></a>
                    <a><img src="{{ asset('images/icons/instagram_footer.svg') }}"></a>
                </div>
            </div>
        </div>
        <!--Third block-->
        <div class="flex flex-col gap-6 border-r border-black px-2">
            <h4 class="font-bold">Informācija</h4>
            <div class="flex flex-col gap-2">
                <a href="#">FAQ</a>
                <a href="#">Mūsu komanda</a>
                <a href="#">Privātuma politika</a>
                <a href="#">Atgriešanas politika</a>
                <a href="#">Aģentūras nosacījumi</a>
                <a href="#">Affiliate programma</a>
            </div>
        </div>
        <!--Fouth block-->
        <div class="flex flex-col gap-6 px-2">
            <h4 class="font-bold">Lapas</h4>
            <div class="flex flex-col gap-2">
                <a href="#">Par mums</a>
                <a href="#">Kontakti</a>
                <a href="#">Ceļojumi</a>
                <a href="#">Mēs iesakam</a>
                <a href="#">Blogs</a>
            </div>
        </div>
        <!--Button Up-->
        <div class="absolute bottom-0 right-0 flex mr-2 mb-1"> 
            <a><img class="h-[47px] w-[47px]" src="{{asset('images/icons/arrow-up.svg')}}"></a>
        </div>
    </div>

    <!--Mobile version-->
    <div class="relative flex flex-col md:hidden gap-3 px-6">
        <!--Logo+text-->
        <div class="relative w-full h-56 flex flex-col justify-center items-center gap-0 font-normal text-base text-center">
            <div class="absolute top-0">
                <img src="{{asset('images/small-logo.svg')}}">
            </div>
            <div class="absolute bottom-2">
                <p>"Pasaule ir pilna ar brīnišķīgām
                lietām, kuras jūs vēl neesat 
                redzējis. Nekad neatsakieties 
                no iespējas tās redzēt."
                 / Dž.K. Roulinga</p>
                </div>
        </div>
        <!--Contact and info-->
        <!--Atbalsts-->
        <div class="flex flex-col gap-3">
            <div class="flex flex-col gap-2">
                <p class="font-bold text-base">Seko mums:</p>
                <div class="flex gap-5">
                    <a><img src="{{ asset('images/icons/facebook_footer.svg') }}"></a>
                    <a><img src="{{ asset('images/icons/instagram_footer.svg') }}"></a>
                </div>
            </div>
            <h4 class="text-base font-bold">Atbalsts</h4>
            <div class="flex flex-col gap-2 text-sm font-normal">
                <p>Tālrunis: +371 26404522, +371 29127960</p>
                <p>Epasts: info@nirvanatravel.eu</p>
                <p>Adrese: Rīga, Stabu iela 55 - 33, LV-101</p>
            </div>
        </div>
        <!--Info-->
        <div class="flex flex-col gap-3">
            <h4 class="text-base font-bold">Informācija</h4>
            <div class="flex flex-col gap-2 text-sm font-normal">
                <a href="#">FAQ</a>
                <a href="#">Mūsu komanda</a>
                <a href="#">Privātuma politika</a>
                <a href="#">Atgriešanas politika</a>
                <a href="#">Aģentūras nosacījumi</a>
            </div>
        </div>
        <!--Lapas-->
        <div class="flex flex-col gap-3">
            <h4 class="text-base font-bold">Lapas</h4>
            <div class="flex flex-col gap-2 text-sm font-normal">
                <a href="#">Par mums</a>
                <a href="#">Kontakti</a>
                <a href="#">Ceļojumi</a>
                <a href="#">Mēs iesakam</a>
                <a href="#">Blogs</a>
            </div>
        </div>
        <!--Bottom up-->
        <div class="absolute bottom-0 right-0 flex mr-1 mb-1"> 
            <a><img class="h-[24.84px] w-[25px]" src="{{asset('images/icons/arrow-up.svg')}}"></a>
        </div>
       

    </div>

    <!--Credit cards-->
    <!--Large Screen-->
    <div class="border-t border-black md:mt-8 md:pt-2">
        <div class="hidden md:flex items-end justify-between md:px-8 lg:px-12 xl:px-64 text-xs">
            <p>&copy;Copyright by Nirvana Travel</p>
            <div class="flex items-end space-x-2">
                <img src="{{ asset('images/icons/security.svg') }}">
                <p>Maksā droši ar: </p>
                <img src="{{ asset('images/icons/visa.svg') }}">
                <img src="{{ asset('images/icons/mastercard.svg') }}">
            </div>
        </div>
    </div>

    <!--Mobile version-->
    <div class="flex md:hidden border-t-1 border-black">
        <div class="flex flex-col w-full justify-center items-center text-center text-xs px-6">
            <p>&copy;Copyright by Nirvana Travel</p>
            <div class="flex gap-2">
                <img class="h-[15px] w-[15px]" src="{{ asset('images/icons/security.svg') }}">
                <p>Maksā droši ar: </p>
                <img class="h-[15px] w-[80px]" src="{{ asset('images/icons/visa.svg') }}">
                <img class="h-[15px] w-[80px]" src="{{ asset('images/icons/mastercard.svg') }}">
            </div>
        </div>
    </div>

</div>
