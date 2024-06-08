<!doctype html>
<html>
    <head>
        @include('layout.head')
    </head>
    <body>
        @include('layout.navbar')

    <section class="hero" style="animation: fadeInAnimation ease 3s; animation-iteration-count: 1; animation-fill-mode: forwards;">
        <div class="row" style="background-color: #2D2F4A; margin-bottom:30px">
            <div class="col-md-4">

            </div>
            <div class="col-md-4  d-flex justify-content-center align-items-center">
                <button class="btn button " style="font-size: 30px; margin-top:40px; margin-bottom:40px; border-color:white">CONTACT US</button>
            </div>
            <div class="col-md-4">

            </div>
        </div>


    </section>
    <section>
        <div class="row justify-content-center">
            <div class="col-md-4  d-flex justify-content-center align-items-center">
                <span class="fa fa-phone" style="font-size: 50px; animation: upAndDown 1.2s ease infinite"></span>
            </div>
            <div class="col-md-4 ">
                <h3 class="mb-4  d-flex justify-content-center align-items-center">GET IN TOUCH WITH US</h3>
                <button class="btn button btn-block btn-sm mb-5  d-flex justify-content-center align-items-center">YOUR FEEDBACK</button>
                <div class=" d-flex justify-content-center align-items-center">
                    <span class="fa fa-arrow-down" style="font-size: 50px; animation: upAndDown 1.2s ease infinite"></span>

                </div>
            </div>

            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <span class="fa fa-envelope" style="font-size: 50px; animation: upAndDown 1.2s ease infinite"></span>


            </div>
        </div>


    </section>
    <section class="content" style="animation: fadeInAnimation ease 3s; animation-iteration-count: 1; animation-fill-mode: forwards;">
        <div class="contact">




                    <div class="form-group row mt-4">

                        <div class="col-sm-12">
                            <input type="text" placeholder="YOUR NAME" class="form-control" name="name" required>

                        </div>
                    </div>
                    <div class="form-group row mt-4">

                        <div class="col-sm-12">
                            <input type="text" placeholder="YOUR EMAIL" class="form-control" id="email" name="email" required>

                        </div>
                    </div>
                    <div class="form-group row mt-4">

                        <div class="col-sm-12">
                            <input type="text" placeholder="YOUR SUBJECT" class="form-control" id="email" name="email" required>

                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-sm-12">
                            <textarea class="form-control" id="password" name="password" placeholder="MESSAGE" ></textarea>

                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button  class="btn button mt-4">Submit</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <h6>we're happy to hear your feedback</h6>
                        </div>
                    </div>


        </div>
    </section>


    @include('layout.footer')
</body>
</html>

