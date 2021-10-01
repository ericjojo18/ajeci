<div class="container mx-auto mt-10 ">
    <x-jet-banner />
        <div class="flex content-center m-2 p-6">
            <x-jet-button wire:click="showCreatePostModal" class="bg-green-500"> Créer un médiatheque</x-jet-button>
        </div>
<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
          <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Id</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Titre</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Statut</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Image</th>
            
            <th scope="col" class="relative px-6 py-3">Edit</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <tr></tr>
          @foreach($medias as $media)
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">{{ $media->id }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $media->titre }}</td>
            <td class="px-6 py-4 whitespace-nowrap">
            @if($media->active )
                 active
            @else
                 Désative
            @endif
            </td> 
            <td class="px-6 py-4 whitespace-nowrap">
              <img class="w-8 h-8 rounded-full" src="{{ asset('storage/photo/'.$media->image)}}" />
            </td>
            <td class="px-6 py-4 text-right text-sm">
                <x-jet-button wire:click="showEditPostModal({{ $media->id }})" class="bg-green-500">Voir </x-jet-button>
                <x-jet-button wire:click="deletePost({{ $media->id }})" class="bg-red-700">Supprimer</x-jet-button>
            </td>
          </tr>
          @endforeach
          <!-- More items... -->
        </tbody>
      </table>
      <div class="m-2 p-2">{{ $medias->links() }}</div>
    </div>
  </div>
</div>
<x-jet-dialog-modal wire:model="showModalForm">
    <x-slot name="title">Créer un médiatheque</x-slot>
    <x-slot name="content">
    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
  <form enctype="multipart/form-data">
    <div class="sm:col-span-6">
      <label for="title" class="block text-sm font-medium text-gray-700"> Titre du médiatheque </label>
      <div class="mt-1">
        <input type="text" id="titre" wire:model.lazy="titre" name="titre" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
      </div>
      @error('titre') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="sm:col-span-6">
        <div class="w-full m-2 p-2">
                  @if ($newImage)
                 Photo de l'article récent:
                <img src="{{ asset('storage/photo/'.$newImage)}}">
                @endif
                @if ($image)
                Photo Preview:
                <img src="{{ $image->temporaryUrl() }}">
                @endif
          </div>
      <label for="title" class="block text-sm font-medium text-gray-700"> Image de l'article </label>
      <div class="mt-1">
        <input type="file" id="image" wire:model="image" name="image" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
      </div>
      @error('image') <span class="error">{{ $message }}</span> @enderror
    </div>
  </form>
</div>
    </x-slot>
    <x-slot name="footer"> 
        @if($mediaId)
        <x-jet-button wire:click="updatePost" class="bg-green-500">modifier</x-jet-button>
        @else
        <x-jet-button wire:click="storePost" class="bg-red-700">Créer</x-jet-button>
        @endif
        
    </x-slot>
</x-jet-dialog-modal>
</div>

<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
