<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="{{asset('output.css')}}" rel="stylesheet" />
		<link href="{{asset('main.css')}}" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
		<!-- CSS -->
		<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
		<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
		
	</head>
	<div id="main-content">
	<body class="font-[Poppins] pb-[72px]">
		<x-navbar/>
		<nav id="Category" class="max-w-[1130px] mx-auto flex justify-center items-center gap-4 mt-[30px]">
				@foreach ($categories as $category)
			<a href="{{ route('front.category', $category->slug)}}" class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#2563eb]">
				<div class="w-6 h-6 flex shrink-0">
					<img src="{{ Storage::url($category->icon) }}" alt="icon" />
				</div>
				<span>{{$category->judul}}</span>
			</a>
			@endforeach
		</nav>
		<section id="Featured" class="mt-[30px]">
			<div class="w-full main-carousel">
				@forelse ($featured_posts as $post)
				<div class="featured-news-card relative w-full h-[550px] flex shrink-0 overflow-hidden">
					<img src="{{ Storage::url($post->thumbnail) }}" class="thumbnail absolute w-full h-full object-cover" alt="icon" />
					<div class="w-full h-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(0,0,0,0.9)] absolute z-10"></div>
					<div class="card-detail max-w-[1130px] w-full mx-auto flex items-end justify-between pb-10 relative z-20">
						<div class="flex flex-col gap-[10px]">
							<p class="text-white">Featured</p>
							<a href="{{ route('front.details', $post->slug) }}" class="font-bold text-4xl leading-[45px] text-white two-lines hover:underline transition-all duration-300">{{ $post->judul }}</a>
							<p class="text-white">{{$post->created_at->format('M d, Y')}} • {{ $post->category->judul}}</p>
						</div>
						<div class="prevNextButtons flex items-center gap-4 mb-[60px]">
							<button class="button--previous appearance-none w-[38px] h-[38px] flex items-center justify-center rounded-full shrink-0 ring-1 ring-white hover:ring-2 hover:ring-[#2563eb] transition-all duration-300">
								<img src="{{asset('assets/images/icons/arrow.svg')}}" alt="arrow" />
							</button>
							<button class="button--next appearance-none w-[38px] h-[38px] flex items-center justify-center rounded-full shrink-0 ring-1 ring-white hover:ring-2 hover:ring-[#2563eb] transition-all duration-300 rotate-180">
								<img src="{{asset('assets/images/icons/arrow.svg')}}" alt="arrow" />
							</button>
						</div>
					</div>
				</div>
				@empty
				<p>Belum ada featured post</p>
				@endforelse
			</div>
		</section>
		
		<section id="Up-to-date" class="max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-[70px]">
			<div class="flex justify-between items-center">
				<h2 class="font-bold text-[26px] leading-[39px]">
					Latest Hot News <br />
					Good for Curiousity
				</h2>
				<p class="badge-orange rounded-full p-[8px_18px] bg-blue-300 font-bold text-sm leading-[21px] text-white-100 w-fit">UP TO DATE</p>
			</div>
			<div class="grid grid-cols-3 gap-[30px]">
				@forelse ($posts as $post)
				<a href="{{route('front.details',$post->slug)}}" class="card-news">
					<div class="rounded-[20px] ring-1 ring-[#EEF0F7] p-[26px_20px] flex flex-col gap-4 hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300 bg-white">
						<div class="thumbnail-container w-full h-[200px] rounded-[20px] flex shrink-0 overflow-hidden relative">
							<p class="badge-white absolute top-5 left-5 rounded-full p-[8px_18px] bg-white font-bold text-xs leading-[18px]">{{ $post->category->judul }}</p>
							<img src="{{Storage::url($post->thumbnail)}}" class="object-cover w-full h-full" alt="thumbnail" />
						</div>
						<div class="card-info flex flex-col gap-[6px]">
							<h3 class="font-bold text-lg leading-[27px]">{{$post->judul}}</h3>
							<p class="text-sm leading-[21px] text-[#A3A6AE]">{{$post->created_at->format('M, d, Y')}}</p>
						</div>
					</div>
				</a>
				@empty
				<p>Tidak Ada Data Post</p>
				@endforelse
			</div>
		</section>
		<section id="Best-authors" class="max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-[70px]">
			<div class="flex flex-col text-center gap-[14px] items-center">
				<p class="badge-orange rounded-full p-[8px_18px] bg-blue-300 font-bold text-sm leading-[21px] text-[#2563eb] w-fit">BEST AUTHORS</p>
				<h2 class="font-bold text-[26px] leading-[39px]">
					Explore All Masterpieces <br />
					Written by People
				</h2>
			</div>
			<div class="grid grid-cols-6 gap-[30px]">
				@forelse ($authors as $author)
				<a href="{{ route('front.author', $author->slug) }}" class="card-authors">
					<div class="rounded-[20px] border border-[#EEF0F7] p-[26px_20px] flex flex-col items-center gap-4 hover:ring-2 hover:ring-[#2563eb] transition-all duration-300">
						<div class="w-[70px] h-[70px] flex shrink-0 rounded-full overflow-hidden">
							<img src="{{ Storage::url($author->avatar) }}" class="object-cover w-full h-full" alt="avatar" />
						</div>
						<div class="flex flex-col gap-1 text-center">
							<p class="font-semibold">{{ $author->username }}</p>
							<p class="text-sm leading-[21px] text-[#A3A6AE]">{{ $author->posts->count() }}</p>
						</div>
					</div>
				</a>
				@empty 
				<p>Belum Ada Data</p>
				@endforelse
			</div>
		</section>
		<section id="Advertisement" class="max-w-[1130px] mx-auto flex justify-center mt-[70px]">
			<div class="flex flex-col gap-3 shrink-0 w-fit">
				<a href="{{$banner_advertisements->link}}">
					<div class="w-[900px] h-[200px] flex shrink-0 border border-[#EEF0F7] rounded-2xl overflow-hidden">
						<img src="{{Storage::url($banner_advertisements->thumbnail)}}" class="object-cover w-full h-full" alt="ads" />
					</div>
				</a>
				<p class="font-medium text-sm leading-[21px] text-[#A3A6AE] flex gap-1">
					Our Advertisement <a href="#" class="w-[18px] h-[18px]"><img src="assets/images/icons/message-question.svg" alt="icon" /></a>
				</p>
			</div>
		</section>
		<section id="Latest-entertainment" class="max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-[70px] border-2 border-blue-400 rounded-[20px] p-6">
			<div class="flex justify-between items-center">
				<h2 class="font-bold text-[26px] text-blue-500 leading-[39px]">
					#Trending in Education <br />
				</h2>
				<a href="category/education" class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#2563eb]">Explore All</a>
			</div>
			<div class="flex justify-between items-center">
			<div class="featured-news-card relative w-full h-[424px] flex flex-1 rounded-[20px] overflow-hidden">
			<img id="education-image" src="{{asset('assets/images/photos/education.jpg')}}" alt="icon" />
			</div>

				<div class="h-[424px] w-fit px-5 overflow-y-scroll overflow-x-hidden relative custom-scrollbar">
					<div id="post-edu">
					<div class="w-[455px] flex gap-0.5 shrink-0">
						@forelse ($education_posts as $post)
						<a href="{{route('front.details', $post->slug)}}" class="card py-[2px]">
							<div class="rounded-[20px] border border-[#EEF0F7] p-[14px] flex items-center gap-5 hover:ring-2 hover:ring-[#bfdbfe] transition-all duration-300">
								<div class="w-[130px] h-[100px] flex shrink-0 rounded-[20px] overflow-hidden">
									<img src="{{Storage::url($post->thumbnail)}}" class="object-cover w-full h-full" alt="thumbnail" />
								</div>
								<div class="flex flex-col justify-center-center gap-[4px]">
									<h3 class="font-bold text-lg leading-[27px]">{{$post->judul}}</h3>
									<p class="text-sm leading-[21px] text-[#A3A6AE]">12 Jun, 2024</p>
								</div>
							</div>
						</a>
						@empty
						<p> Kosong </p>
						@endforelse
					</div>
					</div>
					<div class="sticky z-10 bottom-0 w-full h-[100px] bg-gradient-to-b from-[rgba(255,255,255,0.19)] to-[rgba(255,255,255,1)]"></div>
				</div>
			</div>
		</section>

		<div class="max-w-3xl mx-auto my-12 p-8 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-xl text-white">
  			<blockquote class="relative">
    		<p class="text-xl font-medium mb-4">
			"Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful."
    		</p>
    		<footer class="flex items-center">
     		 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
       			 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"/>
      		</svg>
     		 Albert Schweitzer
    		</footer>
  			</blockquote>
		</div>
		<script src="{{asset('customjs/two-lines-text.js')}}"></script>
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
		<!-- JavaScript -->
		<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
		<script src="{{asset('customjs/carousel.js')}}"></script>
</div>
<x-footer/>
	</body>
	
</html>
