<section class="background-11 ">
    <div class="container">
         <div class="row">
             
            <div class="col-12 mb-4">
                <div class="overflow-hidden" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div data-zanim='{"delay":0}'>
                        <a class="d-inline-block color-7" ></a> &nbsp;<a class="d-inline-block color-7" ></a>
                    </div>
                    <h4 data-zanim='{"delay":0.1}'>{{$post->titre}}</h4>
                </div>
            </div>
                 <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <img class="radius-tr-secondary radius-tl-secondary" src="{{ asset('storage/photos/'.$post->image) }}" alt="">
                        </div>
                        <div class="col-12">
                            <div class="background-white p-5 radius-secondary">
                                <p class="dropcap">{{$post->contenue}}
                                </p>
                                
                            </div>
                        </div>
                
                    </div>
                </div>
            <div class="col-lg-4 text-center ml-auto mt-5 mt-lg-0">
                <div class="row px-2">
                    <div class="col">
                        <div class="background-white p-5 radius-secondary">
                            <div class="overflow-hidden" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <img class="radius-round" data-zanim='{"delay":0}' src="{{ asset('storage/photos/'.$post->image) }}" alt="">
                                <h5 class="text-capitalize mt-3 mb-0" data-zanim='{"delay":0.1}'>{{$post->titre}}</h5>
                                <p class="mb-0 mt-3" data-zanim='{"delay":0.2}'>{{$post->description}}</p>
                                <div class="pt-4" data-zanim='{"delay":0.3}'>
                                    <a class="d-inline-block" href="https://www.linkedin.com/company/ajeci225/about/">
                                        <span class="fa fa-linkedin-square fs-2 mx-2 color-8"></span>
                                    </a>
                                    <a class="d-inline-block" href="#">
                                        <span class="fa fa-twitter-square fs-2 mx-2 color-8"></span>
                                    </a>
                                    <a class="d-inline-block" href="https://web.facebook.com/watch/JeunesEntrepreneursCI/">
                                        <span class="fa fa-facebook-square fs-2 mx-2 color-8"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
          </div>
        </div><!--/.row-->
    </div><!--/.container-->
</section>
