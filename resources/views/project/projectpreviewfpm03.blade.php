<div class="ideacat-work">
  <div class="ideacat-narrow-content">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
        <h2 class="ideacat-heading">FP M03</h2>
      </div>
    </div>
    <div class="row row-bottom-padded-md">
      <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
        <div class="project">
          <img class="project project-img hover-shadow cursor"  onclick="openModal();currentSlide(1)"  src="{{url('/images/FP-M03/fpmaster.jpg')}}" alt="">
        </div>
      </div>
      <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
        <div class="project">
        <img class="project project-img hover-shadow cursor"  onclick="openModal();currentSlide(2)"  src="{{url('/images/FP-M03/fp2.jpg')}}" alt="">
        </div>
      </div>
      <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
        <div class="project">
        <img class="project project-img hover-shadow cursor"  onclick="openModal();currentSlide(3)"  src="{{url('/images/FP-M03/fp3.jpg')}}" alt="">
          </div>
        </div>


       <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
        <div class="project">
        <img class="project project-img hover-shadow cursor"  onclick="openModal();currentSlide(4)"  src="{{url('/images/FP-M03/fp3.jpg')}}" alt="">
        </div>
      </div>

      <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
        <div class="project">
        <img class="project project-img hover-shadow cursor"  onclick="openModal();currentSlide(5)"  src="{{url('/images/FP-M03/fp4.jpg')}}" alt="">
        </div>
      </div>

      <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
        <div class="project">
        <img class="project project-img hover-shadow cursor"  onclick="openModal();currentSlide(6)"  src="{{url('/images/FP-M03/fp5.jpg')}}" alt="">
        </div>
      </div>

      <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
        <div class="project">
        <img class="project project-img hover-shadow cursor"  onclick="openModal();currentSlide(7)"  src="{{url('/images/FP-M03/fp6.jpg')}}" alt="">
        </div>
      </div>

      <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
        <div class="project">
        <img class="project project-img hover-shadow cursor"  onclick="openModal();currentSlide(8)"  src="{{url('/images/FP-M03/fp7.jpg')}}" alt="">
        </div>
      </div>
    <div class="row">
    </div>
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 7</div>
      <img src="{{url('/images/FP-M03/fpmaster.jpg')}}" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 7</div>
      <img src="{{url('/images/FP-M03/fp1.jpg')}}" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 7</div>
      <img src="{{url('/images/FP-M03/fp2.jpg')}}" style="width:100%">
    </div>

        <div class="mySlides">
          <div class="numbertext">4 / 7</div>
          <img src="{{url('/images/FP-M03/fp3.jpg')}}" style="width:100%">
        </div>

            <div class="mySlides">
              <div class="numbertext">5 / 7</div>
              <img src="{{url('/images/FP-M03/fp4.jpg')}}" style="width:100%">
            </div>

                <div class="mySlides">
                  <div class="numbertext">6 / 7</div>
                  <img src="{{url('/images/FP-M03/fp5.jpg')}}" style="width:100%">
                </div>

                    <div class="mySlides">
                      <div class="numbertext">7 / 7</div>
                      <img src="{{url('/images/FP-M03/fp6.jpg')}}" style="width:100%">
                    </div>
</div>
<div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
</div>

<script type="text/javascript">
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}
// Esccape triger to close modal
document.addEventListener('keydown', (event) => {
  if(event.key === 'Escape') {
    document.getElementById("myModal").style.display = "none";
  }
})

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

</script>
