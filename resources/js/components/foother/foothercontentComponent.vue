<template>
    <footer class="footer">
        <div class="footer_content">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-lg-4 footer_col">
                        <div class="footer_about">
                            <div class="footer_logo">
                                <a href="#">
                                    <div class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="footer_logo_icon"><img src="images/logo_2.png" alt=""></div>
                                    <div>Little Closet</div>
                                    </div>
                                </a>
                            </div>
                            <div class="footer_about_text">
                                <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Fusce venenatis vel velit vel euismod.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Links -->
                    <div class="col-lg-4 footer_col">
                        <div class="footer_menu">
                            <div class="footer_title">Support</div>
                            <ul class="footer_list">
                                <li>
                                    <a href="#"><div>Customer Service<div class="footer_tag_1">online now</div></div></a>
                                </li>
                                <li>
                                    <a href="#"><div>Return Policy</div></a>
                                </li>
                                <li>
                                    <a href="#"><div>Size Guide<div class="footer_tag_2">recommended</div></div></a>
                                </li>
                                <li>
                                    <a  href="#"><div id="algo">Terms and Conditions</div></a>
                                </li>
                                <li>
                                    <a href="#"><div>Contact</div></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Contact -->
                    <div class="col-lg-4 footer_col">
                        <div class="footer_contact">
                            <div class="footer_title">Stay in Touch</div>
                            <div class="newsletter">
                                <form action="#" id="newsletter_form" class="newsletter_form">
                                    <input type="email" class="newsletter_input" placeholder="Subscribe to our Newsletter" required="required">
                                    <button class="newsletter_button">+</button>
                                </form>
                            </div>
                            <div class="footer_social">
                                <div class="footer_title">Social</div>
                                <ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footherbar-component></footherbar-component>
    </footer>
</template>