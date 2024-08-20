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
.mr-2 {
    margin-right: 3rem;
}
.vh-10 {
    height: 6rem;
}
.vw-10 {
    width: 6rem;
}
</style>
<x-layout title="About">
    <div class="container vh-70 d-flex just-content-end align-items-end"">
        <div class="row">
            <div class="col d-flex just-content-end align-items-end"">
                <div class="p-1">Get to know me</div>
            </div>
            <div class="col-2 d-flex just-content-end align-items-end mb-5"><div class="pointed-arrow-line-right"></div>

        </div>
            <div class="col-4 d-flex just-content-end align-items-end mb-2 fs-5 fw-bold">I'm Back-end Developer specialized in developing solutions with javascript and PHP.</div>
        </div>
    </div>
    <div class="container my-5 fs-5">
        <div class="row">
            <div class="col-5 mr-2 d-flex flex-column gap-4">
                <div class="profile-detail">
                    Lorem ipsum dolor sit amet consectetur adipisicing elitor sit amet consectetur adipisicing elit. Molestiae, similique.
                </div>
                <div class="contact">
                    <div class="title fw-bold">Contact</div>
                    <div class="detail mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit.</div>
                </div>
                <div class="social-links ">
                    <div class="title fw-bold">Social links</div>
                    <ul class="d-flex flex-column gap-4 mt-3">
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Linked</li>
                        <li>Github</li>
                    </ul>
                </div>
            </div>
            <div class="col d-flex flex-column gap-4">
                <div class="content">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit accusamus dignissimos itaque distinctio cupiditate minima consequatur ipsam! Accusantium cupiditate, hic incidunt esse totam quod. Nam, necessitatibus. Rerum commodi, saepe impedit, magnam voluptas laboriosam velit veniam vero, vitae porro corporis obcaecati.
                </div>
                <div class="tech-stack">
                    <div class="header">Technology Stack</div>
                </div>
                <div class="d-flex gap-3 flex-wrap">
                    <div class="box bg-primary vh-10 vw-10 rounded">

                    </div>
                    <div class="box bg-primary vh-10 vw-10 rounded">

                    </div>
                    <div class="box bg-primary vh-10 vw-10 rounded">

                    </div>
                    <div class="box bg-primary vh-10 vw-10 rounded">

                    </div>
                    <div class="box bg-primary vh-10 vw-10 rounded">

                    </div>
                    <div class="box bg-primary vh-10 vw-10 rounded">

                    </div>
                    <div class="box bg-primary vh-10 vw-10 rounded">

                    </div>
                    <div class="box bg-primary vh-10 vw-10 rounded">

                    </div>
                    <div class="box bg-primary vh-10 vw-10 rounded">

                    </div>
                    <div class="box bg-primary vh-10 vw-10 rounded">

                    </div>
                </div>

                    <div class="header">Tools</div>
                    <div class="d-flex gap-3 flex-wrap">
                        <div class="box bg-primary vh-10 vw-10 rounded">
    
                        </div>
                        <div class="box bg-primary vh-10 vw-10 rounded">
    
                        </div>
                        <div class="box bg-primary vh-10 vw-10 rounded">
    
                        </div>
                        <div class="box bg-primary vh-10 vw-10 rounded">
    
                        </div>
                        <div class="box bg-primary vh-10 vw-10 rounded">
    
                        </div>
                    </div>
                </div>

     
             
                     </div>
    </div>
</x-layout>