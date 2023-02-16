<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">{{ __('Tags') }}</h2>
            <a class="inline-flex items-center rounded-md border border-transparent bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900"
                href="#"> {{ __('New Tag') }} </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Content --}}
                    <section class="bg-white">
                        <div class="mx-auto px-6 py-10">
                            <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                                @foreach ($tags as $tag)
                                    {{-- Tag Component --}}
                                    <div>
                                        <div class="mt-8">
                                            <h1 class=" text-xl font-semibold text-gray-800 text-center">
                                                {{ $tag->name }}
                                            </h1>
                                            <p class="mb-4 uppercase text-blue-500 text-center">
                                                {{ $tag->created_at }}
                                            </p>
                                            <div class="relative overflow-x-auto">
                                                {{-- Posts Table --}}
                                                <table class="w-full text-left text-sm text-gray-500">
                                                    <thead class="bg-blue-100 text-xs uppercase text-blue-600">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-2 w-[50px]">ID</th>
                                                            <th scope="col" class="px-6 py-2 w-full">Posts</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($tag->posts as $post)
                                                            <tr class="border-b bg-white">
                                                                <td class="px-6 py-2 w-[50px]">
                                                                    {{ $post->id }}
                                                                </td>
                                                                <td scope="row"
                                                                    class="whitespace-nowrap px-6 py-2 font-medium text-gray-90 w-full">
                                                                    {{ $post->name }}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                {{-- / Posts Table --}}
                                                <table class="w-full text-left text-sm text-gray-500">
                                                    <thead class="bg-yellow-100 text-xs uppercase text-yellow-600">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-2 w-[50px]">ID</th>
                                                            <th scope="col" class="px-6 py-2 w-full">Videos</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($tag->videos as $video)
                                                            <tr class="border-b bg-white">
                                                                <td class="px-6 py-2 w-[50px]">
                                                                    {{ $video->id }}
                                                                </td>
                                                                <td scope="row"
                                                                    class="whitespace-nowrap px-6 py-2 font-medium text-gray-90 w-full">
                                                                    {{ $video->name }}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                {{-- / Videos Table --}}
                                            </div>
                                        </div>
                                    </div>
                                    {{-- / Tag Component --}}
                                @endforeach
                            </div>
                        </div>
                    </section>
                    {{-- Ende of Content --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
