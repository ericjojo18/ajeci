<section>
            <div>
                <div class="background-holder overlay" style="background-image:url(assets/images/logo-2.png);background-position: center bottom;"></div><!--/.background-holder-->
            <div class="container">
                <div class="row pt-6" data-inertia='{"weight":1.5}'>
                        <div class="col-md-8 px-md-0 color-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                                <h1 class="color-white fs-4 fs-md-5 mb-0 zopacity" data-zanim='{"delay":0}'>Contact</h1>
                                <div class="nav zopacity" aria-label="breadcrumb" role="navigation" data-zanim='{"delay":0.1}'>
                                    <ol class="breadcrumb fs-1 pl-0 fw-700">
                                        <li class="breadcrumb-item">
                                            <a class="color-white" href="/">Accueil</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
</section>
<section class="background-11">
                <div class="container">
                    <div class="row align-items-stretch justify-content-center">
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="h-100 px-5 py-4 background-white radius-secondary">
                                <h5 class="mb-3">Localisation</h5>Abidjan Cocody 2 plateaux,<br> 7ème tranche
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="h-100 px-5 py-4 background-white radius-secondary">
                                <h5 class="mb-3">Adresse Email</h5>info@ajeci-org.ci
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="h-100 px-5 py-4 background-white radius-secondary">
                                <h5>Reseaux sociaux</h5>
                                <a class="d-inline-block mt-2" href="https://www.linkedin.com/company/ajeci225/about/">
                                    <span class="fa fa-linkedin-square fs-2 mr-2 color-primary"></span>
                                </a>
                                <a class="d-inline-block mt-2" href="https://web.facebook.com/watch/JeunesEntrepreneursCI/">
                                    <span class="fa fa-facebook-square fs-2 mx-2 color-primary"></span>
                                </a>                                
                            </div>
                        </div>
                       
                        <div class="col-12 mt-4">
                       
                           <div>
                            <form wire:submit.prevent="SendContact">
                                <div class="form-group">
                                    <label for="exampleInputName">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter name" wire:model="name">
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            
                                <div class="form-group">
                                    <label for="exampleInputEmail">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Enter name" wire:model="email">
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            
                                <div class="form-group">
                                    <label for="exampleInputbody">Body</label>
                                    <textarea class="form-control" id="message" placeholder="Enter Body" wire:model="message"></textarea>
                                    @error('body') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            
                                <button type="submit" class="btn btn-primary">Save Contact</button>
                            </form>
                            </div>
                        </div>
                    </div><!--/.row-->
                </div><!--/.container-->
</section>