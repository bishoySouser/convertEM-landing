@extends('app')

@section('content')
<main
    class="min-h-screen py-16 flex items-center justify-center relative overflow-hidden"
    style="
        background: radial-gradient(83.33% 83.33% at 50% 100%, rgba(96, 81, 255, 0.06) 0%, rgba(96, 81, 255, 0.00) 100%), #032423;
    "
>
    <div class="convertem-section text-center px-6 max-w-3xl mx-auto">

        <!-- Logo -->
        <div class="convertem-logo mb-6">
            <img
                src="{{asset('site_assets/images/convertem.svg')}}"
                alt="ConvertEm"
                class="mx-auto max-w-[220px] sm:max-w-[260px]"
            >
        </div>
        <!-- Status Badge -->
        <div class="convertem-badge mb-7 sm:mb-10">
            <span
                class="inline-flex items-center gap-2 px-6 py-3 rounded-full text-white text-sm font-semibold border border-[#29D3D3]/30 bg-[#0C7D81]"
            >
                <span class="w-2 h-2 rounded-full bg-white"></span>
                Status In Development
            </span>
        </div>

        <!-- Title -->
        <h1
            class="convertem-title text-white font-extrabold leading-tight
            text-[25px] sm:text-[30px] md:text-[35px]  lg:text-[42px]  xl:text-[50px] mb-5 sm:mb-8"
        >
            Something Powerful <br>
            Is Coming
        </h1>

        <!-- Description -->
        <p class="convertem-text font-light text-white text-[15px] md:text-[18px]">
            A new way to connect, qualify, and convert.
        </p>

        <p class="convertem-text font-light text-white text-[15px] md:text-[18px] mb-5">
            Built for businesses that expect more than clicks.
        </p>

        <!-- Launching -->
        <h2 class="convertem-launch text-white font-bold text-[17px] md:text-[20px] mb-8 sm:mb-12">
            Launching Soon
        </h2>

        <!-- Email Form -->
        <form class="flex flex-col sm:flex-row justify-center items-center gap-2 max-w-xl mx-auto">
            <input
                type="email"
                placeholder="Enter your email address"
                class="w-full sm:flex-1 h-10 sm:h-12 rounded-xl px-5 bg-white text-[13px] sm:text-[15px] outline-none text-[#666]"
            >

            <button
                type="submit"
                class="h-10 sm:h-12 px-8 rounded-xl text-white font-semibold
                bg-gradient-to-r from-[#44E8D7] to-[#5977F5]
                hover:opacity-90 transition"
            >
                Notify Me
            </button>
        </form>

    </div>
</main>
@endsection
