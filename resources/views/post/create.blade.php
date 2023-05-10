<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un post ') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 mt-4 sm:px-6 lg:px-8">
        <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data" class="bg-white shadow-lg rounded-lg px-8 py-6">
          <div class="mb-4">
            <x-label for="title" value="Titre du Post" class="block font-semibold text-gray-700 mb-2" />
            <x-input id="title" name="title" class="block w-full py-2 px-3 border rounded-lg bg-gray-50 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" />
          </div>
          <div class="mb-4">
            <x-label for="content" value="Contenu du Post" class="block font-semibold text-gray-700 mb-2" />
            <textarea id="content" name="content" class="block w-full py-2 px-3 border rounded-lg bg-gray-50 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"></textarea>
          </div>
          <div class="mb-4">
            <x-label for="image" value="Image du Post" class="block font-semibold text-gray-700 mb-2" />
            <x-input id="image" type="file" name="image" class="block w-full py-2 px-3 border rounded-lg bg-gray-50 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" />
          </div>
          <div class="mb-4">
            <x-label for="category" value="Catégorie du Post" class="block font-semibold text-gray-700 mb-2" />
            <select name="category" id="category" class="block w-full py-2 px-3 border rounded-lg bg-gray-50 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
              @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="flex justify-end">
            <x-button class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-700">Créer mon post</x-button>
          </div>
        </form>
      </div>


</x-app-layout>
