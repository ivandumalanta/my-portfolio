<style>
    .vh-70 {
        height: 80vh;
    }
    .title {
    font-family: 'Inter', sans-serif;
    font-weight: 700;
    background: #5773CF;
background: linear-gradient(to right, #5773CF 20%, #1FCFBD 100%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;

}
</style>
<x-layout title="Ivan - Web Developer">
    <div class="container">
        <div class="row vh-70 d-flex justify-content-center align-items-center">
            <div class="col d-flex text-center flex-column justify-content-center align-items-center" data-aos="fade-up"
            data-aos-duration="3000">
                <div class="p-1 border border-0 fw-bold d-flex justify-content-center align-items-center rounded-pill welcome" style="font-size: 11px; width: 10rem;">
                    👋 Hi! I'm Ivan Christian D.
                </div>
                <div class="p-2 fs-1  text-light title" >
                    ASPIRING FULL STACK DEVELOPER
                </div>
                    <div class="quote fs-3" >
                        Walking into the code path, where logic meets magic.
                    </div>
                    <div class="btn d-flex gap-3">
                        <a class="btn mt-3 border-light text-light p-2 px-5 " href="#" role="button">Reach Out</a>
                        <a class="btn mt-3 border-light text-light p-2 px-5 " href="#" role="button">Resume</a>
                   
                    </div>
                    
            </div>
           
        </div>
        <div class="recent-works vh-100 mt-5">
            <div class="header d-flex mb-4">
            <div class="fs-1 ">
                Recent Works
            </div>
            <div class="btn-work ms-auto">
                <a class="btn mt-3 border-light text-light p-2 px-5 " href="#" role="button">View All</a>
            </div>
            </div>
            <div class="card mb-3" >
                <div class="row g-0">
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                  <div class="col-md-4 bg-primary">
                  </div>
                </div>
              </div>
              <div class="card mb-3" >
                <div class="row g-0">
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                  <div class="col-md-4 bg-primary">
                  </div>
                </div>
              </div>
              
        </div>
    </div>
</x-layout>