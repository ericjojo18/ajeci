
<section class="background-11">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header" style="color:">
                        <h3> Contactez-Nous</h3>
                    </div>
                </div>
                <div class="col-12 mt-4">                     
                        <div class="card-body">
                                <form wire:submit.prevent="submit">
                                        <div>
                                            @if (session()->has('success'))
                                                <div class="alert alert-success">
                                                    {{ session('success') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div >
                                            <div class="form-group">
                                                <label for="Name">Nom et Prénom</label>
                                                <input type="text" class="form-control" id="name" placeholder="Entrer votre nom" wire:model="name" />
                                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    
                                        <div class="">
                                            <div class="form-group">
                                                <label for="Email">Email</label>
                                                <input type="text" class="form-control" id="email" placeholder="Entrer votre email" wire:model="email" />
                                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class="form-group">
                                                <label for="phone">Téléphone</label>
                                                <input type="text" class="form-control" id="phone" placeholder="Entre votre numéro" wire:model="phone" />
                                                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class="form-group">
                                                <label for="subject">Object</label>
                                                <input type="text" class="form-control" id="subject" placeholder="Object" wire:model="subject" />
                                                @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    
                                        <div class="">
                                            <div class="form-group">
                                                <label for="message">Message</label>
                                                <textarea class="form-control" id="message" placeholder="votre préoccupation" wire:model="message"></textarea>
                                                @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    
                                        <button type="submit" class="btn btn-primary">Envoyer</button>
                                </form>
                        </div>
                </div>
            </div>
        </div>
  </div>
</section>