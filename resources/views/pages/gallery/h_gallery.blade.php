@include('pages.placements.top')

<div class="gallery">
    <div class="container-fluid">
        <h3 class="gal-head">Gallery</h3>
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/8.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>

            </div>
            <div class="col-lg-3 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/7.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>

            </div>
            <div class="col-lg-3 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/6.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>

            </div>
            <div class="col-lg-3 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/1.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>

            </div>
            <div class="col-lg-3 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/2.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>

            </div>
            <div class="col-lg-3 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/3.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/10.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/11.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/12.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/13.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/14.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/15.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/16.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/17.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/18.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/19.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <br><br><br>
            <div class="col-lg-3 col-6">
                <a href="{{ url('convocation') }}"><h2 class="convocation">CONVOCATION</h2></a>
                <hr>
                <a href="{{ url('convocation') }}"><div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/CONVOCATION BIT/.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div></a>
           
            <h3>CONVOCATION BIT</h3>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/Dignitaries/2.jpg') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/Dignitaries/1.jpg') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/Dignitaries/3.jpg') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/Dignitaries/4.jpg') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/FOR WEB/Dignitaries/5.jpg') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>

            
            


            <div id="modal01" class="detail" onclick="this.style.display='none'">
                <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                <div class="w3-modal-content w3-animate-zoom">
                    <img id="img01" style="width:100%">
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')
