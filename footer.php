<?php 

        $adress = esc_attr(get_option('footer_adress'));
        $mail = esc_attr(get_option('footer_mail'));
        $phone = esc_attr(get_option('footer_phone'));
        $twitter = esc_attr(get_option('footer_twitter'));
        $face = esc_attr(get_option('footer_facebook'));
        $inst = esc_attr(get_option('footer_instagram'));
        $link = esc_attr(get_option('footer_link'));
        $github = esc_attr(get_option('footer_github'));
        $youtube = esc_attr(get_option('footer_youtube'));


?>
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Güncellemeleri almak için abone olun!</h2>
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="E-mail Adresi Giriniz..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                                <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Notify Me!</button></div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3 mt-2 text-white">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Adres</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><?php echo $adress; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!"><?php echo $mail; ?></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Telefon</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><?php echo $phone; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <?php 

                        if(!empty($twitter)){echo '<a class="mx-2" href="'.$twitter.'"><i class="fab fa-twitter"></i></a>';}else{}
                        if(!empty($face)){echo '<a class="mx-2" href="'.$face.'"><i class="fab fa-facebook-f"></i></a>';}else{}
                        if(!empty($inst)){echo '<a class="mx-2" href="'.$inst.'"><i class="fa-brands fa-instagram"></i></a>';}else{}
                        if(!empty($link)){echo '<a class="mx-2" href="'.$link.'"><i class="fa-brands fa-linkedin-in"></i></a>';}else{}
                        if(!empty($github)){echo '<a class="mx-2" href="'.$github.'"><i class="fab fa-github"></i></a>';}else{}
                        if(!empty($youtube)){echo '<a class="mx-2" href="'.$youtube.'"><i class="fa-brands fa-youtube"></i></a>';}else{}
                    ?>
                    

                </div>
            </div>
        </section>

        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Bootstrap 2022</div></footer>
        <?php wp_footer(); ?>
    </body>
</html>
