<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('output.css')}}" rel="stylesheet" />
	<link href="{{asset('main.css')}}" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
		rel="stylesheet" />
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-[Poppins]">
	<x-navbar/>
<section id="Up-to-date" class="max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-[70px]">
			<div class="flex justify-between items-center">
				<h2 class="font-bold text-[26px] leading-[39px]">
					Content Hub <br />
				</h2>
				<p class="badge-orange rounded-full p-[8px_18px] bg-blue-500 font-bold text-sm leading-[21px] text-white w-fit">UP TO DATE</p>
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
		<br> <br>
	<x-footer/>
</body>
</html>