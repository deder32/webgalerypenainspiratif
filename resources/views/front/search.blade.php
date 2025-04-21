<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="{{ asset('output.css') }}" rel="stylesheet" />
		<link href="{{ asset('main.css') }}" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
		<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
		<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
		<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

	</head>
	<body class="font-[Poppins]">
	<x-navbar/>
	<nav id="Category" class="max-w-[1130px] mx-auto flex justify-center items-center gap-4 mt-[30px]">
		@foreach ($categories as $category)
		<a href="{{ route('front.category', $category->slug) }}" class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18]">
			<div class="flex w-6 h-6 shrink-0">
				<img src="{{ Storage::url($category->icon) }}" alt="icon" />
			</div>
			<span>{{ $category->judul }}</span>
		</a>
		@endforeach
	</nav>
		
		<section id="search-result" class="max-w-[1130px] mx-auto flex items-start flex-col gap-[30px] mt-[70px] mb-[100px]">
			<h2 class="text-[26px] leading-[39px] font-bold">Search Result: <span>{{ ucfirst($keyword) }}</span></h2>
			<div id="search-cards" class="grid grid-cols-3 gap-[30px]">
				
				@forelse($posts as $post)
				<a href="{{ route('front.details', $post->slug) }}" class="card-news">
					<div class="rounded-[20px] ring-1 ring-[#EEF0F7] p-[26px_20px] flex flex-col gap-4 hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300 bg-white">
						<div class="thumbnail-container w-full h-[200px] rounded-[20px] flex shrink-0 overflow-hidden relative">
							<p class="badge-white absolute top-5 left-5 rounded-full p-[8px_18px] bg-white font-bold text-xs leading-[18px]">{{ $post->category->judul }}</p>
							<img src="{{ Storage::url($post->thumbnail) }}" class="object-cover w-full h-full" alt="thumbnail" />
						</div>
						<div class="card-info flex flex-col gap-[6px]">
							<h3 class="font-bold text-lg leading-[27px]">{{ $post->judul }}</h3>
							<p class="text-sm leading-[21px] text-[#A3A6AE]">{{ $post->created_at->format('M d, Y') }}</p>
						</div>
					</div>
				</a>
				@empty
				<div class="flex flex-col items-center justify-center p-6 min-h-[300px] text-center">
  				<!-- Animated Circle -->
  					<div class="w-20 h-20 mb-6 rounded-full bg-gray-100 flex items-center justify-center animate-pulse">
   	 					<span class="text-3xl">📝</span>
  					</div>
  
  					<h3 class="text-xl font-semibold text-gray-800 mb-1">Belum ada artikel</h3>
  					<p class="text-gray-500 text-sm mb-6">Konten sedang dalam persiapan</p>
  
  						<a href="{{route('front.allpost')}}" class="text-blue-500 hover:text-blue-600 font-medium text-sm flex items-center group">
    				<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
    				</svg>
    				Lihat artikel lainnya
					</a>
					</div>
				@endforelse
			</div>
		</section>
	</body>
	<footer>
		<x-footer/>
	</footer>
</html>