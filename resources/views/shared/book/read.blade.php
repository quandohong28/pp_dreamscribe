@extends('layouts.shared')

@section('title', $chapter->title)

@section('content')
    <div class="min-h-screen">

        {{-- content image - chưa render --}}
        {{-- <div class="lg:px-64 transition-all duration-300">
            <div class="mb-24">
                <img class="w-full" src="https://ddntcthcd.com/nettruyen/vo-dich-don-ngo/1/2.jpg" alt="">
            </div>
        </div> --}}

        {{-- content text - chưa render--}}
        <div class="p-4 lg:px-64 transition-all duration-300 text-gray-900 dark:text-gray-300">
            <h1 class="text-lg uppercase font-semibold mb-4">Chương {{ $chapter->order }} -
                {{ $chapter->title }}</h1>
            <p class="mb-24 text-base">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque blanditiis ea voluptatem consectetur illo
                reiciendis dolorum officiis, fugiat nam porro magnam impedit odio consequatur sint ab id. Nulla ad maiores
                temporibus sequi corrupti asperiores voluptas ducimus rem! Impedit laborum recusandae nostrum magni,
                deleniti sequi reiciendis maxime reprehenderit omnis facilis sit dolor eum nam eligendi, aspernatur dolorum
                autem. Ab nemo, eum minus sed id accusamus modi eveniet neque nulla nostrum dolorum nisi tempore officiis,
                odit aliquam alias similique dicta quibusdam impedit minima labore inventore. Repudiandae inventore voluptas
                accusamus vero quaerat deleniti deserunt amet hic quod doloribus. Quo nostrum repudiandae iste, quod, fugiat
                soluta cum beatae eveniet aspernatur, rerum repellendus magni reiciendis cupiditate esse consequatur
                voluptatibus quas provident illum consectetur hic porro. Hic facilis rerum nisi ducimus dolores eius ea,
                eveniet id laboriosam corrupti voluptate omnis aliquid doloremque vel quidem sit voluptas nobis perspiciatis
                aliquam porro harum ipsa. Ipsa est vero quae sunt inventore consequuntur natus cumque nulla, optio minus
                debitis sequi dignissimos excepturi at ipsam atque delectus modi! Explicabo sapiente non, eos delectus
                tempora inventore id ullam iure at dolorum sequi ipsum tenetur labore! Quaerat, perferendis assumenda illum,
                esse minus accusantium quos quod, totam nesciunt molestiae facilis cumque laudantium? Recusandae perferendis
                autem labore aliquam, placeat voluptatem adipisci dolore nesciunt, repellat sed a natus, molestias
                voluptatum mollitia officia dolor! Eum quas perspiciatis eveniet? Laborum aut sequi fugiat tempore
                reprehenderit et accusamus quidem consequatur dolore optio esse distinctio inventore architecto praesentium
                omnis expedita hic, maxime quis sit illo. Beatae iusto magnam praesentium earum, ea ducimus autem aut
                adipisci explicabo commodi tempora sint cum necessitatibus reprehenderit repudiandae incidunt, voluptas qui
                odio esse nisi, ad dolores sed unde aliquam. Quae quo, deserunt asperiores quasi dicta ex quam ipsam
                accusantium. Aperiam qui, unde quas perspiciatis laboriosam neque aliquam tempore iste. Voluptate quia
                natus, architecto in explicabo ducimus hic unde dicta ad tempora eveniet repudiandae pariatur, incidunt, quo
                quibusdam quasi reiciendis. Harum quod doloribus cupiditate illo, non nemo, autem repudiandae eos quaerat
                quidem reprehenderit necessitatibus omnis ea ab ipsa, consequuntur deserunt fugiat pariatur mollitia?
                Temporibus magnam saepe velit reprehenderit. Ad mollitia cumque quia tempore? Ea consequuntur quaerat
                tempore. Dolor quod est cum voluptas iusto aliquid dolores amet, sit voluptatem? Ut velit quos reprehenderit
                suscipit corporis iure aspernatur hic! Vitae maxime exercitationem fugit saepe eius, eveniet esse quis sunt
                reprehenderit et qui repellendus rem facilis reiciendis ad nemo? Molestiae distinctio dolores voluptates
                nulla quas veritatis quae architecto debitis non repellat incidunt animi eum suscipit consequuntur
                laudantium iure quia deserunt fugit, deleniti sapiente quo corrupti! Culpa voluptatem aut eos, possimus
                doloribus nesciunt dicta? Sit ratione sint alias, maxime culpa esse quaerat voluptatibus voluptas nihil
                voluptatum fugiat molestiae, tempore ea ut asperiores beatae aut accusantium dolore delectus ipsam ipsum
                vero laudantium. Asperiores molestias officia sint dolor explicabo! Aliquid aspernatur error ipsum nisi,
                culpa numquam similique officiis in. Doloribus veniam praesentium totam maxime explicabo ratione!
                Accusantium rerum aperiam maiores a cum voluptatibus assumenda quas ducimus nesciunt, consequatur earum
                tenetur non facere quibusdam vero expedita architecto eveniet, maxime libero magni. Omnis, corporis. Dolore,
                exercitationem? Possimus repellat ratione debitis molestiae sapiente eos quia minima et inventore! Dolorum
                labore dicta nam totam, nulla facilis quibusdam ullam ipsa sed tempore voluptatibus beatae temporibus ut
                iure soluta pariatur. Nulla sequi laborum atque et voluptatum nostrum vel a porro, praesentium officia rem,
                eligendi exercitationem nihil voluptatem facere rerum repudiandae ipsam eum. Aliquid tempore atque sed,
                distinctio odit ratione eum assumenda culpa voluptates iure ex quos, dolore omnis repudiandae ducimus dolor
                earum placeat vel magnam ipsum optio voluptas ea reiciendis! Repudiandae quis aliquid sequi. Enim temporibus
                dolore debitis. Rem beatae, maxime sit laboriosam enim earum totam nulla perspiciatis fuga dolor rerum ipsa
                consequuntur nobis quisquam ratione? Voluptas qui quidem, distinctio veritatis aspernatur illo accusamus
                reiciendis dicta consequuntur odit aperiam, eos repellat suscipit. Rerum aliquam officiis facilis id odio
                dolorum odit optio. Fugiat ab reprehenderit maxime iure reiciendis a adipisci officia. Perferendis ab quis
                placeat deleniti, nemo impedit sint, asperiores nihil nulla quas vero delectus quasi error. Eum tempora
                dolorum maiores sapiente voluptate recusandae minus iste fugiat illum odio sint neque laboriosam officia,
                possimus aliquid unde, facilis laudantium aperiam harum? Debitis, nam. Quam est cupiditate dolorum quasi
                dicta non, perferendis odio recusandae illo? Esse reiciendis nobis ex, repudiandae iure hic facilis iusto
                impedit optio doloremque rerum veritatis sapiente enim atque natus alias error corrupti placeat laborum
                molestias harum. Nobis placeat eveniet fuga non in exercitationem culpa labore. Dolores architecto, fuga hic
                quo dolorum illo tempora dignissimos incidunt quod et culpa, exercitationem aliquam aliquid temporibus atque
                sed fugiat quibusdam est, quidem nobis accusantium. Sint dolorem enim ipsum dolore ad accusamus amet modi
                voluptates saepe nam nisi eaque eius quas inventore quidem, perferendis autem magnam deleniti! Assumenda
                laborum enim dolore illo harum dolorem distinctio sunt doloremque officiis ab reprehenderit, a tempora
                officia, soluta libero. Debitis exercitationem possimus ea provident minus, distinctio magnam rerum
                voluptates incidunt mollitia saepe assumenda repellat veniam inventore amet dicta quaerat quam praesentium
                culpa. Totam repellendus voluptatem harum perferendis maxime repudiandae architecto quia consequatur ullam
                sit earum quidem mollitia id, reiciendis pariatur adipisci voluptate. Aspernatur excepturi deleniti
                dignissimos maiores, inventore amet velit ullam reprehenderit sint. Rerum, nemo. Quo accusantium
                voluptatibus eveniet odit quod, praesentium minus? Maiores quia temporibus modi fugit sed debitis dolore
                cumque totam quae nemo facere sapiente, tempore ullam voluptate nobis, et, reprehenderit repellat ducimus
                rerum eius tenetur. Suscipit asperiores exercitationem eum id voluptatem repudiandae ipsam est, quas
                numquam, ex iste pariatur. Nesciunt labore iste ipsum ea maxime nihil, esse nobis, laborum inventore, beatae
                incidunt ipsa alias earum temporibus praesentium ad iusto odio illum blanditiis quae necessitatibus eligendi
                veritatis deleniti? Quis, labore perspiciatis molestias iure molestiae maiores magni! Voluptate impedit
                placeat minus distinctio? Harum, velit? Minus nostrum odit harum reprehenderit? Eos quas libero deserunt
                quidem sint error veritatis perferendis asperiores, maxime fugit illo autem vitae odit voluptates nam, in
                aliquam accusantium iure eum eaque. Qui modi porro aperiam dolorum necessitatibus assumenda, eveniet, cumque
                non accusamus saepe quae, quisquam deleniti. Accusantium voluptate illum est aperiam, vitae nulla vero
                veritatis? Adipisci facilis nemo iure sed iste ad unde.
            </p>
        </div>

        {{-- content audio --}}
        {{-- <div
            class="fixed bottom-0 left-0 right-0 z-50 p-4 bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600">
            <p class="mb-8 font-semibold text-gray-700 text-center">Chap {{ $chapter->order }} - {{ $chapter->title }}</p>
            <div class="md:w-1/2 mx-auto transition-all duration-300">
                <div class="flex items-center justify-center mx-auto mb-1">
                    <button data-tooltip-target="tooltip-mute" type="button"
                        class="p-2.5 rounded-full hover:bg-gray-100 text-gray-600 dark:text-white dark:hover:text-black">
                        @svg('tabler-volume-2', 'w-5 h-5')
                    </button>
                    <div id="tooltip-mute" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        Tắt âm lượng
                    </div>
                    <button data-tooltip-target="tooltip-previous" type="button"
                        class="p-2.5 rounded-full hover:bg-gray-100  text-gray-600 dark:text-white dark:hover:text-black">
                        @svg('tabler-player-skip-back', 'w-5 h-5')
                    </button>
                    <div id="tooltip-previous" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        Tập trước
                    </div>
                    <button data-tooltip-target="tooltip-pause" type="button"
                        class="p-2.5 rounded-full bg-black text-white hover:bg-gray-700 dark:bg-white dark:text-black mx-4">
                        @svg('tabler-player-pause', 'w-5 h-5')
                    </button>
                    <div id="tooltip-pause" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        Tạm dừng
                    </div>
                    <button data-tooltip-target="tooltip-next" type="button"
                        class="p-2.5 rounded-full hover:bg-gray-100 text-gray-600 dark:text-white dark:hover:text-black">
                        @svg('tabler-player-skip-forward', 'w-5 h-5')
                    </button>
                    <div id="tooltip-next" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        Tập tiếp theo
                    </div>
                    <button data-tooltip-target="tooltip-restart" type="button"
                        class="p-2.5 group rounded-full hover:bg-gray-100 text-gray-600 dark:text-white dark:hover:text-black">
                        @svg('tabler-refresh', 'w-5 h-5')
                    </button>
                    <div id="tooltip-restart" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        Phát lại từ đầu
                    </div>
                </div>
                <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">3:45</span>
                    <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-800">
                        <div class="bg-black dark:bg-white h-1.5 rounded-full" style="width: 65%"></div>
                    </div>
                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">5:00</span>
                </div>
            </div>
        </div> --}}

        {{-- navigation
        - neu nhu la truyen audio thi an cai nay di va nguoc lai
        - chưa xử lý next, prev, yêu thích --}}
        <div class="flex justify-center">
            <div
                class="fixed bottom-4 bg-white dark:bg-slate-800 border dark:border-gray-500 rounded px-4 py-2 w-11/12 md:w-2/3 lg:w-1/2 font-normal transition-all duration-300">
                <div class="flex items-center justify-center gap-2">
                    <a href="{{ route('client.home') }}"
                        class="bg-white text-black border p-1.5 rounded hover:bg-gray-100 dark:bg-gray-100 dark:text-black">
                        @svg('tabler-home', 'h-5 w-5')
                    </a>
                    <button data-modal-target="configModal" data-modal-toggle="configModal"
                        class="bg-white text-black border p-1.5 rounded hover:bg-gray-100 dark:bg-gray-100 dark:text-black">
                        @svg('tabler-menu', 'h-5 w-5')
                    </button>
                    <a href=""
                        class="bg-black text-white p-1.5 rounded hover:bg-gray-700 dark:bg-gray-100 dark:text-black">
                        @svg('tabler-chevron-left', 'h-5 w-5')
                    </a>
                    <select
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded block w-full px-3 py-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                        @foreach ($book->chapters->all() as $chapter)
                            <option
                                value="{{ route('client.books.chapter', ['slug' => $book->slug, 'chapter' => $chapter->slug]) }}">
                                Chapter {{ $chapter->order }} - {{ $chapter->title }}
                            </option>
                        @endforeach
                    </select>
                    <a href=""
                        class="bg-black text-white p-1.5 rounded hover:bg-gray-700 dark:bg-gray-100 dark:text-black">
                        @svg('tabler-chevron-right', 'h-5 w-5')
                    </a>
                    <a href=""
                        class="bg-red-500 text-white p-1.5 rounded hover:bg-red-400 dark:bg-gray-100 dark:text-black">
                        @svg('tabler-heart', 'h-5 w-5')
                    </a>
                </div>
            </div>
        </div>

        {{-- config modal
        - phải mở cả cái này nữa nhé
        - chưa xử lý logic --}}
        <div id="configModal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between px-4 py-2 border-b rounded-t dark:border-gray-600">
                        <h3 class="uppercase font-semibold text-gray-900 dark:text-white">
                            Tuỳ chỉnh trình đọc
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="configModal">
                            @svg('tabler-x', 'h-5 w-5')
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 text-sm grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-8">
                        <div class="flex items-center justify-between">
                            <label for="themes" class="block text-sm font-medium text-gray-900 dark:text-white">Giao
                                diện</label>
                            <select id="themes"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 px-3 p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>Sáng</option>
                                <option>Tối</option>
                            </select>
                        </div>
                        <div class="flex items-center justify-between">
                            <label for="font-size" class="block text-sm font-medium text-gray-900 dark:text-white">Cỡ
                                chữ</label>
                            <select id="font-size"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 px-3 p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>12px</option>
                                <option>14px</option>
                                <option>16px</option>
                                <option>18px</option>
                                <option>20px</option>
                            </select>
                        </div>
                        <div class="flex items-center justify-between">
                            <label for="font-family" class="block text-sm font-medium text-gray-900 dark:text-white">Font
                                chữ</label>
                            <select id="font-family"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 px-3 p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>Montserrat</option>
                                <option>Jura</option>
                                <option>Space Grotesk</option>
                                <option>Time New Roman</option>
                            </select>
                        </div>
                        <div class="flex items-center justify-between">
                            <label for="line-height" class="block text-sm font-medium text-gray-900 dark:text-white">Giãn
                                dòng</label>
                            <select id="line-height"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 px-3 p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>1.5</option>
                                <option>1.6</option>
                                <option>1.7</option>
                                <option>1.8</option>
                                <option>1.9</option>
                            </select>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="configModal" type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm px-5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Lưu</button>
                        <button data-modal-hide="configModal" type="button"
                            class="py-1.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Huỷ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
