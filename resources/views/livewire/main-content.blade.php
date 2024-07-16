<div class="py-4">
    <div class="px-6 md:px-8 lg:px-12 xl:px-64 ">
        <!--Piedavatie pakalpojumi-->
        <div class="flex flex-col md:gap-0 lg:gap-8">

            <!--Text-->
            <div class="flex flex-col gap-3 md:gap-6">
                <div
                    class="flex gap-2 justify-center items-center text-[#FFCF00] font-bold text-base md:text-lg xl:text-xl">
                    <img src="{{ asset('images/icons/horizontal-line.svg') }}">
                    <h3 class="text-center">Piedāvātie pakalpojumi</h3>
                    <img src="{{ asset('images/icons/horizontal-line.svg') }}">
                </div>
                <div
                    class="flex justify-center items-center text-center font-normal text-base md:text-3xl lg:text-3xl xl:text-4xl uppercase leading-10">
                    <div class="relative">
                        <img class="absolute bottom-0 z-0" src="{{ asset('images/aircraft.svg') }}">
                        <h1 class="relative z-10">DODIES BURVĪGĀ PIEDZĪVOJUMĀ </br></br></h1>
                    </div>

                </div>
            </div>

            <!--Boxes with services-->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="md:border md:p-6 flex flex-col items-center text-center gap-2">
                    <img src="{{ asset('images/services/agent.svg') }}">
                    <div class="flex flex-grow flex-col gap-3">
                        <h2 class="text-sm md:text-xl font-normal uppercase">ATSAUCĪGI UN IEINTERESĒTI AĢENTI </h2>
                        <p class="text-sm md:text-base font-normal">Palīdzēsim atrast Jūsu prasībām
                            atbilstošāko ceļojumu.</p>
                    </div>

                </div>
                <div class="md:border md:p-6 flex flex-col items-center text-center gap-4">
                    <img src="{{ asset('images/services/contact.svg') }}">
                    <div class="flex flex-grow flex-col gap-3">
                        <h2 class="text-sm md:text-xl font-normal uppercase">PERSONĪGĀ PIEREDZE UN KONTAKTI</h2>
                        <p class="text-sm md:text-base font-normal">Mēs mīlam ko darām un tādēl
                            zinām labākās ceļojumu
                            pieredzes.</p>
                    </div>
                </div>
                <div class="md:border md:p-6 flex flex-col items-center text-center gap-2">
                    <img src="{{ asset('images/services/support.svg') }}">
                    <div class="flex flex-grow flex-col gap-3 md:gap-10">
                        <h2 class="text-sm md:text-xl font-normal uppercase">24/7 ATBALSTS</h2>
                        <p class="text-sm md:text-base font-normal">Mēs piedāvajam atbalstu
                            24/7, lai mēs būtu droši, ka Jūsu ceļojums
                            ir izdevies lielisks!</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--Kas mes esam-->
    <div class="bg-gradient-to-b from-white via-yellow-50 to-white md:py-10">
        <div class="my-10 grid grid-cols-1 md:grid-cols-5 gap-8 md:h-[400px] lg:h-[470px] xl:h-[510px] px-6 md:px-8 lg:px-12 xl:px-64 md:py-4">
            <div class="md:col-span-2">
                <img class="rounded-[50px] w-full md:h-full" src="{{ asset('images/palms.png') }}">
            </div>
            <div class="md:col-span-3 flex flex-col justify-between gap-6">
                <div class="flex gap-2 justify-start items-center text-[#FFCF00] font-bold text-base lg:text-xl">
                    <img src="{{ asset('images/icons/horizontal-line.svg') }}">
                    <h3>Kas mēs esam</h3>
                </div>
                <h4 class="text-base lg:text-xl xl:text-3xl font-normal leading-5 md:leading-10">Nirvana Travel ir
                    ceļojumu
                    aģentūra ar
                    spilgtu pievienoto vērtību. Tavs smaids ir
                    mūsu spogulis, Tavs prieks ir mūsu pateicība,
                    Tavas mirdzošās acis padara mūsu dienu
                    saulaināku!
                </h4>
                <p class="text-sm lg:text-base">Katrs ceļojums un ceļotājs nāk ar savu vēstījumu. Mūsu mērķis ir prast
                    to
                    sadzirdēt un
                    uzklausīt, tādā veidā radot atbilstošāko atpūtu tieši Tev. Nav noslēpums, ka ikdienā
                    komunicējam ar desmitiem ceļotgribētāju, taču katrs klients ienes savu puzles gabaliņu
                    Nirvana Travel krāšņajā kartē, to bagātinot un izgreznojot.</p>
                <p class="text-sm lg:text-base">Mēs augam, plaukstam un attīstamies, tā soli pa solim pārvēršot tūrismu
                    dzīvesveidā.</p>
                <p class="text-sm lg:text-base">Ne mirkli neesam gatavi apstāties pie sasniegtā, jo, gluži tāpat kā
                    horizonts,
                    arī pilnība ir
                    nesasniedzama.</p>
            </div>
        </div>
    </div>
    
    <div class="px-6 md:px-8 lg:px-12 xl:px-64">
        <livewire:main-content-destinations />
    </div>
    <livewire:main-content-end />
    
</div>
