<x-guest-layout>
    @section('hero')
        <div class="flex flex-col gap-4 md:gap-6 px-6 md:px-8 lg:px-12 xl:px-64 md:pt-8 md:pb-20 xl:py-12">
            <h3 class="text-base md:text-xl font-medium pt-4 md:pt-0">Atsauksmes</h3>
            <!--Atsauksmju boxes-->
            <div class="container mx-auto">
                <!--
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2"> -->
                    <div class="columns-1 md:columns-2 gap-4">

                    <!--Atsauksmju box-1 - First for TEST without db-->
                    <!--
                    <div
                        class="break-inside-avoid-column flex flex-col gap-2 p-4 border border-red-100 md:border-yellow-200 shadow-sm md:shadow-xl shadow-yellow-200">
                        //Foto, vards uzvards
                        <div class="flex gap-6">
                            <img src="{ asset('images/review-foto.svg') }}">

                            <div>
                                <div class="flex gap-2 pt-8">
                                    <h3 class="text-base font-semibold md:text-2xl md:font-bold">Vards</h3>
                                    <h3 class="text-base font-semibold md:text-2xl md:font-bold">Uzvards</h3>
                                </div>
                                <span>zvaigznes</span>
                            </div>
                        </div>

                        //paragrafs
                        <div class="px-2">
                            <p class="text-sm md:text-xl font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.
                                Aenean ut hendrerit lacus. Sed dapibus nisi blandit,
                                tincidunt nibh eget, faucibus ante. Etiam interdum
                                vulputate nibh eget congue.</p>
                        </div>
                    </div>
                    -->

                    <!--atsauksmes no db-->
                    @foreach ($reviews as $review)
                        <!--Atsauksmju box-1-->
                        <div
                            class="mb-4 break-inside-avoid-column flex flex-col gap-2 p-4 border border-red-100 md:border-yellow-200 shadow-sm md:shadow-lg md:shadow-yellow-200">
                            <!--Foto, vards uzvards-->
                            <div class="flex gap-6">
                                <img src="{{ $review->photo }}" alt="Foto">

                                <div>
                                    <div class="flex gap-2 pt-8">
                                        <h3 class="text-base font-semibold md:text-2xl md:font-bold">
                                            {{ $review->first_name }}
                                        </h3>
                                        <h3 class="text-base font-semibold md:text-2xl md:font-bold">
                                            {{ $review->last_name }}
                                        </h3>
                                    </div>
                                    <div class="flex gap-1">
                                        @for ($i = 0; $i < $review->rating; $i++)
                                            <img src="{{ asset('images/icons/star.svg') }}">
                                        @endfor
                                    </div>
                                </div>
                            </div>

                            <!--paragrafs-->
                            <div class="px-2">
                                <p class="text-sm md:text-xl font-normal">{{ $review->review }}</p>
                            </div>
                        </div>
                        <!--End Box-1-->
                    @endforeach
                </div>

                <!-- Pagination links - if need
                <div class="mt-6">
                    {{-- {{ $reviews->links('pagination::tailwind') }} --}}
                </div>
                 -->
            </div>
        </div>
    @endsection
</x-guest-layout>
