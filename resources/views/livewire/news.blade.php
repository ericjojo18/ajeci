<section class="background-11 ">
    <div class="container">
         <div class="row">
             
            <div class="col-12 mb-4">
                <div class="overflow-hidden" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div data-zanim='{"delay":0}'>
                        <a class="d-inline-block color-7" ></a>, &nbsp;<a class="d-inline-block color-7" >{{$post->created_at}}</a>
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
                                <img class="radius-round" data-zanim='{"delay":0}' src="assets/images/portrait-8.jpg" alt="">
                                <h5 class="text-capitalize mt-3 mb-0" data-zanim='{"delay":0.1}'>thomas been</h5>
                                <p class="mb-0 mt-3" data-zanim='{"delay":0.2}'>Flattering high rise easy care flared fit - cut straight leg that flares at the ankle comfy tight. Regular fit viscose elastane leather black wool.</p>
                                <div class="pt-4" data-zanim='{"delay":0.3}'>
                                    <a class="d-inline-block" href="#">
                                        <span class="fa fa-linkedin-square fs-2 mx-2 color-8"></span>
                                    </a>
                                    <a class="d-inline-block" href="#">
                                        <span class="fa fa-twitter-square fs-2 mx-2 color-8"></span>
                                    </a>
                                    <a class="d-inline-block" href="#">
                                        <span class="fa fa-facebook-square fs-2 mx-2 color-8"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 px-2">
                    <div class="col">
                        <h5 class="mb-3">Related Articles</h5>
                        <div class="background-white pb-7 radius-secondary">
                            <div class="owl-carousel owl-theme owl-nav-outer owl-dot-round mt-4" data-options='{"items":1}'>
                                <div class="item">
                                    <div class="background-white pb-4 h-100 radius-secondary">
                                        <img class="w-100 radius-tr-secondary radius-tl-secondary" src="assets/images/9.jpg" alt="Featured Image">
                                        <div class="px-4 pt-4"><a href="news.html">
                                            <h5>Tax impacts of lease mean accounting change</h5>
                                        </a>
                                        <p class="color-7">By Paul O'Sullivan</p>
                                        <p class="mt-3">HMRC released a consultation document to flag some potential tax impacts that a forthcoming change...</p>
                                        <a href="#">Learn More &xrarr;</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="background-white pb-4 h-100 radius-secondary">
                                    <img class="w-100 radius-tr-secondary radius-tl-secondary" src="assets/images/10.jpg" alt="Featured Image">
                                    <div class="px-4 pt-4">
                                        <a href="news.html">
                                            <h5>What brexit means for data protection law</h5>
                                        </a>
                                        <p class="color-7">By Enrico Ambrosi</p>
                                        <p class="mt-3">Assuming that the referendum is not ignored completely, there are two possible futures for the UK...</p>
                                        <a href="#">Learn More &xrarr;</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="background-white pb-4 h-100 radius-secondary">
                                    <img class="w-100 radius-tr-secondary radius-tl-secondary" src="assets/images/11.jpg" alt="Featured Image">
                                    <div class="px-4 pt-4">
                                        <a href="news.html">
                                            <h5>The growing meanace of social engineering fraud</h5>
                                        </a>
                                        <p class="color-7">By Robson</p>
                                        <p class="mt-3">Social engineering involves the collection of information from various sources about a target...</p>
                                        <a href="#">Learn More &xrarr;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row px-2 mt-5">
                <div class="col">
                    <div class="background-white p-5 radius-secondary">
                        <h5>Tags</h5>
                        <ul class="nav tags mt-3 fs--1">
                            <li>
                                <a class="btn btn-sm btn-outline-primary m-1 p-2" href="#">Advisory</a>
                            </li>
                            <li>
                                <a class="btn btn-sm btn-outline-primary m-1 p-2" href="#">Finance</a>
                            </li>
                            <li>
                                <a class="btn btn-sm btn-outline-primary m-1 p-2" href="#">Ideas</a>
                            </li>
                            <li>
                                <a class="btn btn-sm btn-outline-primary m-1 p-2" href="#">Data</a>
                            </li>
                            <li>
                                <a class="btn btn-sm btn-outline-primary m-1 p-2" href="#">Market</a>
                            </li>
                            <li>
                                <a class="btn btn-sm btn-outline-primary m-1 p-2" href="#">Tax</a>
                            </li>
                            <li>
                                <a class="btn btn-sm btn-outline-primary m-1 p-2" href="#">Consulting</a>
                            </li>
                            <li>
                                <a class="btn btn-sm btn-outline-primary m-1 p-2" href="#">Accounting</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
        </div><!--/.row-->
    </div><!--/.container-->
</section>
