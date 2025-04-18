<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="{{asset('output.css')}}" rel="stylesheet" />
	<link href="{{asset('main.css')}}" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
		rel="stylesheet" />
</head>

<body class="font-[Poppins] pb-[83px]">
    @foreach ($categories as $item_category)
    @endforeach
	<nav id="Navbar" class="max-w-[1130px] mx-auto flex justify-between items-center mt-[30px]">
		<div class="logo-container flex gap-[30px] items-center">
			<a href="index.html" class="flex shrink-0">
				<img src="{{asset('assets/images/logos/penainspiratif.png')}}" alt="logo"
				width="200" />
			</a>
			<div class="h-12 border border-[#E8EBF4]"></div>
			<form action="searchPage.html"
				class="w-[450px] flex items-center rounded-full border border-[#E8EBF4] p-[12px_20px] gap-[10px] focus-within:ring-2 focus-within:ring-[#FF6B18] transition-all duration-300">
				<button type="submit" class="w-5 h-5 flex shrink-0">
					<img src="{{asset('assets/images/icons/search-normal.svg')}}" alt="icon" />
				</button>
				<input type="text" name="" id=""
					class="appearance-none outline-none w-full font-semibold placeholder:font-normal placeholder:text-[#A3A6AE]"
					placeholder="Search hot trendy news today..." />
			</form>
		</div>
		<div class="flex items-center gap-3">
			<a href=""
				class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18]">Upgrade
				Pro</a>
			<a href=""
				class="rounded-full p-[12px_22px] flex gap-[10px] font-bold transition-all duration-300 bg-[#FF6B18] text-white hover:shadow-[0_10px_20px_0_#FF6B1880]">
				<div class="w-6 h-6 flex shrink-0">
					<img src="{{asset('assets/images/icons/favorite-chart.svg')}}" alt="icon" />
				</div>
				<span>Post Ads</span>
			</a>
		</div>
	</nav>
	<nav id="Category" class="max-w-[1130px] mx-auto flex justify-center items-center gap-4 mt-[30px]">
		<a href="{{ route('front.author', $item_category->slug)}}"
			class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18]">
			<div class="w-6 h-6 flex shrink-0">
				<img src="{{Storage::url($item_category->icon)}}" alt="icon" />
			</div>
			<span>{{$item_category->judul}}</span>
		</a>
	</nav>
	<section id="author" class="max-w-[1130px] mx-auto flex items-center flex-col gap-[30px] mt-[70px]">
		<div id="title" class="flex items-center gap-[30px]">
			<h1 class="text-4xl leading-[45px] font-bold">Author News</h1>
			<h1 class="text-4xl leading-[45px] font-bold">/</h1>
			<div class="flex gap-3 items-center">
				<div class="w-[60px] h-[60px] flex shrink-0 rounded-full overflow-hidden">
					<img src="{{Storage::url($authors->first()->avatar)}}" alt="profile photo" />
				</div>
				<div class="flex flex-col">
					<p class="text-lg leading-[27px] font-semibold">{{$authors->first()->username}}</p>
					<span class="text-[#A3A6AE]">{{$authors->first()->occupation}}</span>
				</div>
			</div>
		</div>
		<div id="content-cards" class="grid grid-cols-3 gap-[30px]">
	@forelse ($authors->first()->posts as $post)
			<a href="{{route('front.details', $post->slug)}}" class="card">
				<div
					class="flex flex-col gap-4 p-[26px_20px] transition-all duration-300 ring-1 ring-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18] rounded-[20px] overflow-hidden bg-white">
					<div class="thumbnail-container h-[200px] relative rounded-[20px] overflow-hidden">
						<div
							class="badge absolute left-5 top-5 bottom-auto right-auto flex p-[8px_18px] bg-white rounded-[50px]">
							<p class="text-xs leading-[18px] font-bold">{{$post->category->judul}}</p>
						</div>
						<img src="{{ Storage::url($post->thumbnail)}}" alt="thumbnail photo"
							class="w-full h-full object-cover" />
					</div>
					<div class="flex flex-col gap-[6px]">
						<h3 class="text-lg leading-[27px] font-bold">{{$post->judul}}</h3>
						<p class="text-sm leading-[21px] text-[#A3A6AE]">{{$post->created_at->format('M d, Y')}}</p>
					</div>
				</div>
			</a>
            @empty
            <p>Belum ada artikel</p>
            @endforelse
		</div>
	</section>
	<section id="Advertisement" class="max-w-[1130px] mx-auto flex justify-center mt-[70px]">
		<div class="flex flex-col gap-3 shrink-0 w-fit">
			<a href="{{$banner_advertisements->link }}">
				<div class="w-[900px] h-[200px] flex shrink-0 border border-[#EEF0F7] rounded-2xl overflow-hidden">
					<img src="{{Storage::url($banner_advertisements->thumbnail) }}" class="object-cover w-full h-full" alt="ads" />
				</div>
			</a>
			<p class="font-medium text-sm leading-[21px] text-[#A3A6AE] flex gap-1">
				Our Advertisement <a href="#" class="w-[18px] h-[18px]"><img
						src="{{asset('assets/images/icons/message-question.svg')}}" alt="icon" /></a>
			</p>
		</div>
	</section>
</body>

</html>