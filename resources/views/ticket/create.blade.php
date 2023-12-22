<x-app-layout>

    
    <x-guest-layout class="mt-0">
        <h1 style="font-size: 2em;color:green">Create A Support Ticket</h1>
        
        <form method="POST" action="{{ route('ticket.store') }}" enctype="multipart/form-data">
            @csrf
    
            <!-- Name -->
            <div>
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('name')" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
    
            <!-- Ticket description -->
            <div>
                <x-input-label for="description" :value="__('description')" class="mt-2"/>
                <textarea class="rounded-lg w-full" name="description" id="" cols="30" rows="2" >{{old('description')}} </textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-4" />
            </div>

            <!-- Ticket attachment -->
            <div>
                <x-input-label for="attachment" :value="__('Attachment (if any)')" />
                <input type="file" name="attachment" id="attachment" :value="old('attachment')">
                <x-input-error :messages="$errors->get('attachment')" class="mt-4" />
            </div>
    
    
                <x-primary-button class="ms-4 mt-4">
                         create
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>
    

</x-app-layout>