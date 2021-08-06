<section class="background-11">
               <div class="container">
                   <div class="row">
                   @foreach($medias as $media) 
                       <div class="col-md-6 col-lg-4 py-0 mt-4 mt-lg-0">
                           <div class="background-white pb-4 h-100 radius-secondary">
                               <img class="w-100 radius-tr-secondary radius-tl-secondary" src="{{ asset('storage/photo/'.$media->image) }}" alt="Featured Image"/>
                                 <div class="px-4 pt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                     <div class="overflow-hidden">
                                         <a >
                                             <h5 data-zanim='{"delay":0}'>{{$media->titre}}</h5>
                                        </a>
                                     </div>
                                      <div class="overflow-hidden">
                                          <p class="color-7" data-zanim='{"delay":0.1}'></p>
                                      </div>
                                       <div class="overflow-hidden">
                                           <p class="mt-3" data-zanim='{"delay":0.2}'> </p>
                                      </div>                                    
                                </div>
                        </div>
                    </div>                     
                    @endforeach
                    <div class="col-auto mx-auto mt-4">
                        <nav class="font-1 mt-5" aria-label="Page navigation example">
                            <ul class="pagination pagination justify-content-center">
                            {{ $medias->links() }}
                            </ul>
                        </nav>
                    </div>                             
                </div>
                </div><!--/.row-->
            </div><!--/.container-->
</section>

<style>
    nav svg{
        height: 10px;
    }
</style>