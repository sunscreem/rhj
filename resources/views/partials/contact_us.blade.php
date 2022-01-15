  <div class="general-title bg-color margin-bottom-20" id="contact">
            <h2>Contact Us</h2>
            <div class="title-devider"></div>
        </div>

        <!-- Site Wrapper -->
        <div class="site-wrapper">

            <!-- Contact -->
            <div class="container padding-bottom text-center contact-adress">
                <!-- All Contact Information (phone, street, email, website, working hours) -->
                <div class="row">
                    <!-- Description -->
                    <div class="col-md-8 col-md-offset-2">
                        <p>Please contact us for a free quote today.</p>
                    </div>
                    <!-- Adress -->
                    <div class="col-sm-4 col-md-4">
                        <h3>Address</h3>
                        <address>
                            <p>
                                35 Paisley Ave<br>
                                Edinburgh<br>
                                EH8 7LG
                            </p>
                        </address>
                    </div>
                    <!-- Contact Information -->
                    <div class="col-sm-4 col-md-4">
                        <h3>Contact Info</h3>
                        <address>
                            <p>

                                <a href="mailto:rhjcontracts@outlook.com"><i class="fa fa-envelope-o"></i>rhjcontracts@outlook.com</a><br>
                                <a href="tel:+447859015478"><i class="fa fa-phone"></i>07859 015478</a><br>
                                <a href="tel:+441316602187"><i class="fa fa-phone"></i>0131 660 2187</a>
                            </p>
                        </address>
                    </div>
                    <!-- Working Hours -->
                    <div class="col-sm-4 col-md-4">
                        <h3>Office Hours</h3>
                        <address>
                            <p>
                                Monday - Friday: 09:00 - 17:00 <br>
                                Saturday: 09:00 - 13:00<br>
                                Sunday: Closed
                            </p>
                        </address>
                    </div>
                </div><!-- /row -->
                <!-- End All Contact Information -->

            </div><!-- /container -->
            <!-- End Contact -->

        </div><!-- /site wrapper -->
        <!-- End Site Wrapper -->

        <!-- Contact Form (name, email, phone and message inputs for your email form "should change your email adress in contact.php file") -->
        <a id="cform"></a>
        <div class="bg-color">
            <div class="container">
                <div class="col-lg-12" id="contact">
                    @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <strong>Thank You!</strong> {{Session::get('message')}}</div>
                    @endif

                    <form method="POST" action="{{ route('homepage',['#cform']) }}" accept-charset="UTF-8">
                     {!! csrf_field() !!}
                     @foreach($errors->all() as $error)
                        @if ($error != 'validation.recaptcha')
                            <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <strong>Oops!</strong> {{ $error }}</div>
                        @endif
                        @if ($error == 'validation.recaptcha')
                            <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <strong>Oops!</strong> Please confirm you are human.</div>
                        @endif
                    @endforeach
                        <fieldset>
                            <div class="col-md-6">
                                <!-- Name -->
                                <input name="name" type="text" id="name" size="30" value="{{ old('name') }}" placeholder="Name"/>
                                <br />
                                <!-- Email -->
                                <input name="email" type="text" id="email" size="30" value="{{ old('email') }}" placeholder="Email (Optional)"/>
                                <br />
                                <!-- Phone -->
                                <input name="phone" type="text" id="phone" size="30" value="{{ old('phone') }}" placeholder="Phone"/>

                            </div>
                            <!-- Message -->
                            <div class="col-md-6">
                                <textarea name="comment" cols="40" rows="5" id="comments" placeholder="Message">{{ old('comment') }}</textarea>
                            </div>
                            <!-- Submit Button -->
                            <div class="col-md-12 text-center margin-bottom-20">
                                <div id="cap">
                                    {!! htmlFormSnippet() !!}
                                 </div>

                                <button type="submit"  class="btn btn-default btn-submit submit" id="submit" value="Submit">Submit</button>
                            </div>
                        </fieldset>
                </form>
                </div>
            </div>
        </div>
        <!-- End Contact Form -->