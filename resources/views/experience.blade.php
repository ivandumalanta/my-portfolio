<style>
    @import url('https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap');
    .p-1 {
        font-family: "Archivo", sans-serif;
        font-optical-sizing: auto;
        font-weight: 700;
        font-size: 5rem;
        background: #5773CF;
        background: linear-gradient(to right, #5773CF 20%, #1FCFBD 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
            }
            .pointed-arrow-line-right {
        display: inline-block;
        position: relative;
        height: 2px; /* Thickness of the line */
        width: 100px; /* Length of the line */
        background-color: white;
}

.pointed-arrow-line-right::after {
  content: '';
  position: absolute;
  top: 50%;
  right: -10px; /* Adjust to position the arrowhead */
  transform: translateY(-50%);
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 12px solid white;
}
.vh-70 {
    height: 70vh;
}
/* The actual timeline (the vertical ruler) */
.main-timeline-5 {
  position: relative;
  max-width: 50%;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.main-timeline-5::after {
  content: "";
  position: absolute;
  width: 2px;
  background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0.2) 100%);
  top: 0;
  bottom: 0;
  right: 0;
  margin-left: -3px;
}

/* Container around content */
.timeline-5 {
  position: relative;
  background-color: inherit;
  width: 100%;
}

/* The circles on the timeline */
.timeline-5::after {
  content: "";
  position: absolute;
  width: 13px;
  height: 13px;
  right: -7px;
  background-color: #fff;
  top: 18px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the right */
.right-5 {
  padding: 0px 40px 20px 0px;
  left: auto;

}

/* Add arrows to the right container (pointing right) */
.right-5::before {
    content: " ";
    position: absolute;
    top: 18px;
    z-index: 1;
    right: 30px; /* Adjust this value to position the arrow properly */
    border: medium solid #fff;
    border-width: 10px 0 10px 10px;
    border-color: transparent transparent transparent #fff;
}

/* Fix the circle for containers on the right side */
.right-5::after {
    right: -5px; /* Adjust this value to position the circle properly */
    left: auto; /* Override the default left positioning */
}


@media (max-width: 991px) {
  .main-timeline-5 {
    max-width: 100%;
  }
}

</style>
<x-layout title="Experience">
    <div class="container vh-70 d-flex just-content-end align-items-end"">
        <div class="row">
            <div class="col d-flex just-content-end align-items-end"">
                <div class="p-1">Work experience</div>
            </div>
            <div class="col-2 d-flex just-content-end align-items-end mb-5"><div class="pointed-arrow-line-right"></div>

        </div>
            <div class="col-4 d-flex just-content-end align-items-end mb-2 fs-5">Feel free to send me an email or schedule a free consultation with me.

                bryllim@gmail.com</div>
        </div>
    </div>
    <div class=" ">
        <section class="gradient-custom-5">
            <div class="container py-5">
              <div class="main-timeline-5">
                <div class="timeline-5 right-5">
                  <div class="card">
                    <div class="card-body p-4">
                        <div class="header d-flex justify-content-between">
                            <h5>Makerspace Innovhub</h5> <span class="small text-muted"><i class="fas fa-clock me-1"></i>07 August, 2024</span>
                        </div>
                    
                      <div class="position">Dev Role: <span>Backend Developer</span></div>
                      <p class="mt-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque
                        diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis
                        sagittis ligula in sodales vehicula....</p>
                    </div>
                  </div>
                </div>
                
                </div>
              </div>
            </div>
          </section>
    </div>
</x-layout>