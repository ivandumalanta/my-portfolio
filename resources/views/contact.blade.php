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

</style>
<x-layout title="Contact">
    <div class="container vh-70 d-flex just-content-end align-items-end mb-5">
        <div class="row">
            <div class="col d-flex just-content-end align-items-end"">
                <div class="p-1">Let's get in Touch</div>
            </div>
            <div class="col-2 d-flex just-content-end align-items-end mb-5"><div class="pointed-arrow-line-right"></div>

        </div>
            <div class="col-4 d-flex just-content-end align-items-end mb-2 fs-5">Feel free to send me an email or schedule a free consultation with me.

                bryllim@gmail.com</div>
        </div>
    </div>
</x-layout>