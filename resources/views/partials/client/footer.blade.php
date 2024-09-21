<footer class="bg-white dark:bg-slate-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0 gap-4">
                <a href="{{ route('client.home') }}" class="flex items-center">
                    <img src="{{ asset('logo-light.svg') }}" class="h-8 me-3" alt="FlowBite Logo" />
                </a>
            </div>
            <div class="grid grid-cols-2 gap-4 sm:gap-16 sm:grid-cols-4">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Tài khoản</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://flowbite.com/" class="hover:underline">Đăng nhập</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://tailwindcss.com/" class="hover:underline">Cập nhật hồ sơ</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://tailwindcss.com/" class="hover:underline">Đổi mật khẩu</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://tailwindcss.com/" class="hover:underline">Đăng xuất</a>
                        </li>
                    </ul>
                </div>
                <div class="sm:col-span-2">
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Thể loại</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-gray-500 dark:text-gray-400 font-medium">
                        @foreach ($categories as $category)
                            <a href="{{ route('client.books.index', ['category' => $category->slug]) }}"
                                class="hover:underline">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Hợp pháp</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Chính sách bảo mật</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Điều khoản bản quyền</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#"
                    class="hover:underline">NetTruyen</a>
            </span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    @svg('tabler-brand-facebook', 'w-5 h-5')
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    @svg('tabler-brand-twitter', 'w-5 h-5')
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    @svg('tabler-brand-instagram', 'w-5 h-5')
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    @svg('tabler-brand-github', 'w-5 h-5')
                </a>
            </div>
        </div>
    </div>
</footer>
