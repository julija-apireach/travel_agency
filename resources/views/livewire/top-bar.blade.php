<div>
    <!--message for successfull login-->
    @if (session('status'))
        <div class="absolute z-10 py-2 w-full flex justify-center">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative flex items-center w-80 h-20"
                role="alert">
                <span class="block sm:inline">{!! session('status') !!}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500"
                        onclick="this.parentElement.parentElement.style.display='none';" role="button"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                    </svg>
                </span>
            </div>
        </div>
    @endif

    <div
        class="hidden md:flex md:px-8 lg:flex lg:px-12 xl:flex xl:px-64 py-1 justify-between  items-center font-medium text-sm leading-5">

        <!--Email, Phone-->
        <div class="flex gap-10">
            <!--Email-->
            <div class="flex gap-2 items-center">
                <img src="{{ asset('images/icons/email.svg') }}">
                <p class="hover:text-slate-400">info@nirvanatravel.eu</p>
            </div>
            <!--Phone-->
            <div class="flex gap-2 items-center">
                <img src="{{ asset('images/icons/phone.svg') }}">
                <p class="hover:text-slate-400">+371 26404522,</p>
                <p class="hover:text-slate-400">+371 29127960</p>
            </div>
        </div>

        <!--Register, Log in, Social media links, Language-->
        <div class="flex gap-10">

            <!--Registreties, login, logout-->
            <div>
                
                    <div class="flex gap-4">
                        <a href="/registrationform" class="border-r border-black px-4">Reģistrēties</a>
                        <a href="/loginform">Pieslēgties</a>
                    </div>
                
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Atslēgties</button>
                    </form>
                
            </div>

            <div class="flex items-center gap-2">
                <!--Social Media links-->
                <a href="#"><img src="{{ asset('images/icons/facebook.svg') }}"></a>
                <a href="#"><img src="{{ asset('images/icons/instagram.svg') }}"></a>

                <!--Language switcher-->
                <div class="flex gap-1">
                    <span>EN</span>
                    <img src="{{ asset('images/icons/arrow-down.svg') }}">
                </div>
            </div>

        </div>


    </div>
</div>
