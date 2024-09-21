@extends('layouts.shared')

@section('title', 'Quên mật khẩu')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="{{ route('client.home') }}"
                class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-32" src="{{ asset('logo-light.svg') }}" alt="logo">
            </a>
            <div
                class="w-full sm:w-1/2 bg-white rounded-lg shadow
                    dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="font-bold uppercase text-gray-900 dark:text-white">
                        Khôi phục tài khoản
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="#">
                        <div>
                            <label for="email" class="block mb-2 font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="text" name="email" id="email"
                                class="bg-gray-50 text-sm border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Lấy
                            lại mật khẩu</button>
                        <p class=font-light text-gray-500 dark:text-gray-400">
                            <a href="{{ route('auth.login') }}"
                                class="font-medium text-blue-600 hover:underline dark:text-blue-500">Đăng nhập</a> với mật khẩu mới
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
