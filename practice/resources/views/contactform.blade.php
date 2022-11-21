@extends('layout')

@section('title')
Contact Form
@endsection

@section('container')
<div class="container-fluid bg-primary">
     <div class="row  p-5">
         <div class="col-md-7  bg-light p-5">
            <div >
                <p class="h1">Get in touch</p>
            </div>
            <form action="" method="get">
                <div class="row ">
                    <div class="col-md-6 pt-3">
                        <label >Full name*</label>
                            <div class="p-2">
                                 <input type="text" name="fname" placeholder="Full name" class="form-control">
                            </div>
                    </div>
                <div class="col-md-6">
                    <label >Email*</label>
                        <div class="p-2">
                            <input type="email" name="email" placeholder="Email" class="form-control">
                        </div>
                    </div>
                </div>
                <label >Subject*</label>
                    <div class="p-2">
                        <input type="text" name="subject" placeholder="What is subject" class="form-control">
                    </div>
                <label >Message</label>
                    <div class="p-2">
                        <textarea name="message" id="msg" placeholder="What your messages" class="form-control"></textarea>
                    </div>
                    <div class="p-3">
                        <input type="checkbox" name="agree">By contacting, you agree to our <span class="text-success">privacy.</span>
                    </div>
                    <div class="p-2">
                        <button type="submit" name="Send message" >Send message</button>
                    </div>
            </form>
</div>
    
    <div class="col-md-5 bg-info text-white">
        <div class="p-5 text-center">
            Contact information
        </div>
        <div class="mx-5">
            <div class="pb-3">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
                 New Baneshwor
                 <div>
                 Kathmandu,Nepal
                 </div>
            </div>
            <div class="pb-3">
            <i class="fa fa-phone"></i>
                    (+977)123-7864535
                    <div>
                    (+977)123-8764537
                    </div>
                    </i>
            </div>
            <div >
            <i class="fa fa-envelope"></i>contact@yourdomain.com
            <div>
                   info@yourdomain.com
            </div>
        </div>
            <div class="mt-5">
            Follow us on:
            </div>
            <i class="fab fa-facebook"></i>
            
        </div>
    </div>
    </div>
</div>
</div>


@endsection