//Add uikit.min.css
//Add uikit.min.js
//Add uikit.icons.min.js


<style type="text/css">
	#home-video {
  position: relative;
  background: url("../img/people.jpeg");
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  min-height: 250px; 
    }
  #home-video .fa {
    font-size: 50px;
    }
  #home-video .dark-overlay {
    background: rgba(0, 0, 0, 0.7);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%; 
    }
</style>

  <section id="home-video" class="text-center text-light">
    <div class="dark-overlay">
      <div class="container">
        <div class="row py-5 my-3">
          <div class="col">
            <div uk-lightbox>
              <a href="https://youtu.be/aXRS-YzWyJw" class="text-light">
                <i class="fa fa-youtube-square"></i>
              </a>
            </div>
            <h2 class="mt-4">Bootstrap 4 Crash Course</h2>
          </div>
        </div>
      </div>
    </div>
  </section>