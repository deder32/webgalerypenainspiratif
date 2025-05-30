<nav id="Navbar" class="max-w-[1130px] mx-auto flex justify-between items-center mt-[30px]">
			<div class="logo-container flex gap-[30px] items-center">
				<a href="index.html" class="flex shrink-0">
					<img src="{{asset('assets/images/logos/penainspiratif.png')}}" alt="logo" 
					width="200"/>
				</a>
				<div class="h-12 border border-[#E8EBF4]"></div>
				<form method="GET" action="{{ route('front.search') }}" 
            class="w-[450px] flex items-center rounded-full border border-[#E8EBF4] p-[12px_20px] gap-[10px] focus-within:ring-2 focus-within:ring-[#FF6B18] transition-all duration-300">
        

            @csrf
            
            <button type="submit" class="flex w-5 h-5 shrink-0">
                <img src="{{ asset('assets/images/icons/search-normal.svg') }}" alt="icon" />
            </button>
            <input type="text" name="keyword" id=""
                class="appearance-none outline-none w-full font-semibold placeholder:font-normal placeholder:text-[#A3A6AE]"
                placeholder="Search hot trendy news today..." />
        </form>

			</div>
			<div class="flex items-center gap-3">
				<a href="{{route('front.contact')}}" class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#2563eb]">contact</a>
				<a href="{{route('front.allpost')}}" class="rounded-full p-[12px_22px] flex gap-[10px] font-bold transition-all duration-300 bg-blue-500 text-white hover:shadow-[0_10px_20px_0_rgba(59,130,246,0.5)]">
					<div class="w-6 h-6 flex shrink-0">
						<img src="{{asset('assets/images/icons/favorite-chart.svg')}}" alt="icon" />
					</div>
					<span>All Post</span>
				</a>
			</div>
		</nav>