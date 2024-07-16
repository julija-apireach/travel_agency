<x-guest-layout>
    @section('hero')
    <div class="px-6 md:px-8 lg:px-12 xl:px-64 pt-6 md:py-8 md:mb-16">
        <h3 class="text-base md:text-xl font-medium mb-4 md:mb-10">Pieslēgties</h3>

        <div class="md:border border-yellow-200 md:px-20 md:py-4 ">
                <x-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('login.post') }}" class="flex flex-col gap-4 md:gap-5">
                    @csrf

                    <!--Epasts-->
                    <div class="md:mt-4">
                        <x-label for="email" value="{{ __('Email *') }}" class="text-sm font-semibold md:text-xl md:font-medium pl-3 md:pl-0" />
                        <x-input id="email"
                            class="md:bg-[#ffed9f] border border-yellow-200 md:border-none rounded-none block mt-1 w-full text-sm font-semibold md:text-xl md:font-normal  placeholder-slate-400/25 placeholder-font-normal md:placeholder-transparent" 
                            type="email" name="email" :value="old('email')" placeholder="Epasts *" required autocomplete="email" />
                    </div>

                    <!--Parole-->
                    <div class="md:mt-4">
                        <x-label for="password" value="{{ __('Parole') }}" class="text-sm font-semibold md:text-xl md:font-medium pl-3 md:pl-0" />
                        <x-input id="password"
                            class="md:bg-[#ffed9f] border border-yellow-200 md:border-none rounded-none block mt-1 w-full text-sm font-semibold md:text-xl md:font-normal"
                            type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <!--Button-->
                    <div class="flex items-center justify-center mt-4 md:mb-2">
                        <x-button class="md:border border-black  rounded-full bg-[#FFCF00] px-10 md:px-6 py-2 md:py-1 font-medium text-lg">
                            {{ __('Pieslēgties') }}
                        </x-button>
                    </div>
                </form>
            </div>

            <!--Links uz login-->
            <div class="flex flex-col gap-5 md:ap-4 justify-center items-center mt-4">
                <a class="font-semibold md:font-medium text-sm md:text-lg pt-2" href="{{ route('registration') }}">
                    {{ __('Neesmu reģistrējies') }}
                </a>

                <a class="md:border border-black  rounded-full bg-[#FFCF00] px-10 md:px-6 py-2 md:py-1 font-medium text-lg"
                    href="{{ route('registration') }}">
                    {{ __('Reģistrēties') }}
                </a>
            </div>

        </div>
    @endsection

</x-guest-layout>
