 <!-- End footer bottom area -->
 <!-- hover icon footer -->
 <div class="hover-icon" style="background: #000;text-align: center;padding-top: 100px;padding-bottom: 50px;">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="title">
                     <h1 style="color:white;">
                         PHONE SHOPPING
                     </h1>
                     <div class="col-sm-6">
                         <h5 style="color:white;">
                             Live: Tp.ThuDuc
                         </h5>
                         <p style="color:white;">
                             53 Vo Van Ngan , Phuong Linh Chieu
                         </p>
                     </div>
                     <div class="col-sm-6">
                         <h5 style="color:white;">
                             Phone : <span style="color:darkturquoise;">0939461842</span>
                         </h5>
                         <p style="color:white;">
                             Mail : <span
                                 style="color:darkturquoise;border-bottom: 1px solid;">ngoctam2303001@gmail.com</span>
                         </p>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-12">
                 <div class="wrappers">
                     <div class="icon facebook">
                         <a href="#" class="tooltip">Facebook</a>
                         <span><i class="fa fa-facebook-square" aria-hidden="true"></i></span>
                     </div>
                     <div class="icon twitter">
                         <div class="tooltip">Twitter</div>
                         <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
                     </div>
                     <div class="icon instagram">
                         <div class="tooltip">Instagram</div>
                         <span><i class="fa fa-instagram" aria-hidden="true"></i></span>
                     </div>
                     <div class="icon github">
                         <div class="tooltip">Github</div>
                         <span><i class="fa fa-github-alt" aria-hidden="true"></i></span>
                     </div>
                     <div class="icon youtube">
                         <div class="tooltip">Youtube</div>
                         <span><i class="fa fa-youtube-play" aria-hidden="true"></i></span>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="footer-bottom-area" style="padding-top: 50px;padding-bottom: 50px;background: #fff;">
     <div class="container">
         <div class="row">
             <div class="col-md-8">
                 <div class="copyright" style="color:black;font-size: large;
    font-weight: 500;">
                     <p>&copy;Đồ án wedsite nhóm 11 &copy design team</p>
                 </div>

             </div>
             <div class="col-md-4">
                 <div class="footer-card-icon" style="color:black;">
                     <i class="fa fa-cc-discover" aria-hidden="true"></i>
                     <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                     <i class="fa fa-paypal" aria-hidden="true"></i>
                     <i class="fa fa-cc-visa" aria-hidden="true"></i>
                 </div>

             </div>
         </div>
     </div>
 </div>


 <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
     <i class="fa fa-arrow-up" aria-hidden="true"></i>
 </button>
 <script>
//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 100 ||
        document.documentElement.scrollTop > 100
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
 </script>
 <!-- End hover -->
 <!-- jQuery sticky menu -->
 <script src="js/owl.carousel.min1.js"></script>
 <script src="js/jquery.sticky.js"></script>

 <script src="js/main.js"></script>

 <!-- jQuery easing -->
 <script src="js/jquery.easing.1.3.min.js"></script>

 <!-- Slider -->
 <script type="text/javascript" src="js/bxslider.min.js"></script>
 <script type="text/javascript" src="js/script.slider.js"></script>
 <!-- spimers -->

 </body>

 </html>