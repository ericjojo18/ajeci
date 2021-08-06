<div class="container mx-auto mt-10 ">
    <x-jet-banner />
        
<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
          <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Id</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Nom et prenom</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Téléphone</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Adresse Email</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Date</th>
            
            <th scope="col" class="relative px-6 py-3">voir les informations</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <tr></tr>
          @foreach($contactforms as $contactform)
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">{{ $contactform->id }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $contactform->name}}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $contactform->phone }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $contactform->email }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $contactform->created_at }}</td>
             
            <td class="px-6 py-4 text-right text-sm">
                <x-jet-button wire:click="showEditPostModal({{ $contactform->id }})" class="bg-green-500">Voir </x-jet-button>
                <x-jet-button wire:click="deletePost({{ $contactform->id }})" class="bg-red-700">Supprimer</x-jet-button>
            </td>
          </tr>
          @endforeach
          <!-- More items... -->
        </tbody>
      </table>
      <div class="m-2 p-2">{{ $contactforms->links() }}</div>
    </div>
  </div>
</div>
<x-jet-dialog-modal wire:model="showModalForm">
    <x-slot name="title">Créer un article</x-slot>
    <x-slot name="content">
    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
  <form enctype="multipart/form-data">
    <div class="sm:col-span-6">
      <label for="title" class="block text-sm font-medium text-gray-700"> Nom et prenom</label>
      <div class="mt-1">
        <input type="text" id="name" wire:model.lazy="name" name="name" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
      </div>
      @error('name ') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="sm:col-span-6">
      <label for="title" class="block text-sm font-medium text-gray-700"> Téléphone </label>
      <div class="mt-1">
        <input type="phone" id="phone" wire:model.lazy="phone" name="phone" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
      </div>
      @error('phone') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="sm:col-span-6">
      <label for="title" class="block text-sm font-medium text-gray-700"> Adresse email </label>
      <div class="mt-1">
        <input type="text" id="email" wire:model.lazy="email" name="email" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
      </div>
      @error('email') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="sm:col-span-6">
      <label for="title" class="block text-sm font-medium text-gray-700"> Object </label>
      <div class="mt-1">
        <input type="text" id="subject" wire:model.lazy="subject" name="subject" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
      </div>
      @error('subject') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="sm:col-span-6 pt-5">
      <label for="body" class="block text-sm font-medium text-gray-700">Message</label>
      <div class="mt-1">
        <textarea id="message" rows="3" wire:model.lazy="message" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
      </div>
      @error('message') <span class="error">{{ $message }}</span> @enderror
    </div>
  </form>
</div>
    </x-slot>
    <x-slot name="footer"> 
        @if($contactformId)
        <x-jet-button wire:click="updatePost" class="bg-green-500">Retour</x-jet-button>
        
        @endif
        
    </x-slot>
</x-jet-dialog-modal>
</div>

