<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Web Designers Blog') }}
        </h2>
    </x-slot>

    <div class="bg-[#e6f0f5] min-h-screen">
        <div class="text-center mt-6">
            <h1 class="text-2xl font-semibold text-teal-600">
                WELCOME TO BLOG MANIA
            </h1>
        </div>

        <div class="max-w-2xl mx-auto mt-6 p-6 bg-white border border-gray-300 rounded-lg shadow">
            <p class="text-base text-gray-800 leading-relaxed mb-4">
                Welcome to Blog Mania, your one-stop destination for all things blogging! Whether you are a seasoned blogger or just starting out, 
                our platform offers a wide range of features to help you create, manage, and grow your blog. Connect with like-minded individuals, 
                share your thoughts, and discover new perspectives through our vibrant blogging community.
            </p>
            <p class="text-base text-gray-800 leading-relaxed mb-4">
                At Blog Mania, we believe in the power of words to inspire, inform, and entertain. Our user-friendly interface and robust tools make it 
                easy for you to focus on what you do best - writing amazing content. Join us today and be a part of a dynamic community that celebrates 
                creativity and the art of blogging.
            </p>
            <!-- Button to navigate to the blog page -->
            <button class="block mx-auto mt-4 px-4 py-2 bg-teal-600 text-white text-base font-semibold rounded hover:bg-teal-700 transition" onclick="window.location.href='{{ route('posts.index') }}'">
                Go to Blog Page
            </button>
        </div>
    </div>
</x-app-layout>
