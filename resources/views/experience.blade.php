<style>
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
@media (max-width: 576px) {
  .main-timeline-5 {
    max-width: 100%;
  }

}

</style>

</style>

<x-layout title="experience">
  <div class="container vh-70 d-flex just-content-end align-items-end"">
    <div class="row">
        <div class="col-lg-6 d-flex just-content-end align-items-end"">
            <div class="p-1">Career Journey</div>
        </div>
        
        <div class="col-lg-2 col-md-2 col-2 d-flex just-content-end align-items-end mb-5 ">
            <div class="pointed-arrow-line-right"></div>

    </div>
        <div class="col-lg-4 col-md-4 col d-flex just-content-end align-items-end mb-2 fs-lg-3 fs-md-5 fs-5">Explore the projects that define my coding expertise.</div>
    </div>
    
</div>
</div>
<div class="py-4">
    <section class="gradient-custom-5">
        <div class="container py-lg-5 py-md-5 py-1">
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