<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        {{-- <meta name="viewport" content="user-scalable=no"> --}}
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="App-domain" content="{{url('')}}">

        <title>
            convertEm
        </title>

		{{-- <link rel="fav icon" type="image/png" href="{{asset('site_assets/images/tab-icon.png')}}"> --}}
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

		<meta property="og:url" content="{{ url('') }}" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="convertEm" />

        {{-- <meta property="og:image" content="{{ asset('site_assets/images/tab-icon.png') }}" />
        <meta property="og:image:url" content="{{ asset('site_assets/images/tab-icon.png') }}" /> --}}
        <link rel="canonical" href="{{ url("") }}">


        <script>
            const asset_link = '{{asset('')}}';
            const url_link   = '{{url('')}}';
			const csrf_token = '{{csrf_token()}}';
        </script>
        <style>

        </style>


            @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
                @vite(['resources/css/app.css', 'resources/js/app.js'])
            @else
                <style>
                </style>
            @endif
	</head>
	<style>
	</style>

	<body class="relative">
		<div id="app" >
            @if ( $errors->any() )

			<div id="errors_messages_wrapper" class="z-[220] fixed  bg-[#e8e8e8d8] h-full" style="inset: 0 0 0 0;" >
				<div  class="flex justify-center items-center h-full">
					<div class=" bg-[#f2f2f2] w-[80%] sm:w-[70%] lg:w-[60%]  xl:w-[40%]  text-base md:text-lg font-light p-8 drop-shadow-md shadow-md ">

						<div class="flex flex-col justify-center items-center ">
							<img class="w-[100px]" width="100" height="100" src="{{ asset('site_assets/images/error_msg_icon.png') }}" alt="error icon">
							<ul class="text-[#3B3B3B]	text-center mt-3" >
								@foreach ($errors->all() as $error)
									<li class="text-center">{{$error}}</li>
								@endforeach
							</ul>
							<button  class=" py-1 md:py-3 px-8 sm:px-12 xl:px-14 mt-4 shadow-xl cursor-pointer text-lg transition-all text-white bg-[#A25ACE] hover:bg-white hover:text-[#A25ACE] hover:font-medium "
									onclick="close_errorMessage()"> ok
							</button>
						</div>
					</div>
				</div>
			</div>

			@endif


			{{-- success --}}
			@if (Session::has('success') )
				<div id="flash_message-container" class="fixed w-full  h-[100vh] bg-[#e8e8e8d8] opacity-100 z-[220]" style="inset: 0 0 0 0;" >
					<div  class="flex justify-center items-center h-full">
						<div class=" w-[80%] sm:w-[70%] lg:w-[60%]  xl:w-[45%]  bg-[#f2f2f2] opacity-100 text-center p-10 z-[100] custom-shadow  text-[#3B3B3B] flex flex-col justify-center items-center">
							<img class="w-[100px]" width="100" height="100" src="{{ asset('site_assets/images/success.png') }}" alt="success icon">
							<p class="text-base md:text-lg text-center mt-3"> {{Session::get('success')}} </p>
							<div class="flex justify-center items-center mt-2 ">
								<button  class="py-1 md:py-3 px-8 sm:px-12 xl:px-14 shadow-xl mt-4 cursor-pointer text-lg transition-all text-white bg-[#A25ACE] hover:bg-white hover:text-[#A25ACE] hover:font-medium"
										onclick="close_flash_message()"> ok
								</button>
							</div>
						</div>
					</div>
				</div>
			@endif


			@yield('content')



		</div>

		<script>
            function toggleBubble() {
				const bubbleOverlay = document.getElementById('bubble-overlay');
				bubbleOverlay.style.opacity = bubbleOverlay.style.opacity === '1' ? '0' : '1';
			}
            //Close the flash_message popup
            function close_flash_message(){
                document.getElementById('flash_message-container').style.display = 'none';
            }
            //Close the errors messages popup
            function close_errorMessage(){
                document.getElementById('errors_messages_wrapper').style.display = 'none';
            }

		</script>
		@yield('script')
	</body>
</html>
