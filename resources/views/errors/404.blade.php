@extends('layouts.shared')

@section('title', 'Trang không tồn tại')
@section('content')
    <div class="flex flex-col justify-center items-center px-6 mx-auto h-screen xl:px-0 dark:bg-gray-900">
        <div class="block md:max-w-lg">
            <img src="https://flowbite-admin-dashboard.vercel.app/images/illustrations/404.svg" alt="astronaut image">
        </div>
        <div class="text-center xl:max-w-4xl">
            <h1 class="mb-3 text-xl font-bold leading-tight text-gray-900 sm:text-3xl lg:text-4xl dark:text-white">Không tìm
                thấy trang</h1>
            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                Ối! Có vẻ như bạn đã truy cập vào một liên kết xấu. Nếu bạn cho rằng đây là vấn đề với chúng tôi, vui lòng
                cho chúng tôi biết.</p>
            <a href="https://flowbite-admin-dashboard.vercel.app/"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-3 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                @svg('tabler-home', 'w-4 h-4 mr-3')
                Về trang chủ
            </a>
        </div>
    </div>
@endsection
