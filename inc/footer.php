
<footer>
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-3">
            <div class="f_block">
                <h3>SUBLIMATION</h3>
                <ul class="footer_menu">
                    <li><a href="#">CUSTOM CLOTHING</a></li>
                    <li><a href="#">FANNEL CLOTHING</a></li>
                    <li><a href="#">FOOTWEAR</a></li>
                    <li><a href="#">KIDS CLOTHING</a></li>
                    <li><a href="#">PROMOTIONAL CLOTHING</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="f_block">
                <h3>USEFUL LINK</h3>
                <ul class="footer_menu">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">PRODUCT</a></li>
                    <li><a href="#">BECOME A DISTRIBUTOR</a></li>
                    <li><a href="#">DESIGN YOUR OWN</a></li>
                    <li><a href="#">CATALOGUE</a></li>
                    <li><a href="#">CONTACT US</a></li>
                    <li><a href="#">BLOG</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-2 col-sm-2">
            <div class="f_block">
                <h3>LOCATIONS</h3>
                <ul class="footer_menu">
                    <li><a href="#">USA</a></li>
                    <li><a href="#">UK</a></li>
                    <li><a href="#">EUROPE</a></li>
                    <li><a href="#">AUSTRALIA</a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <div class="f_block">
                <h3>CONTACT US</h3>
                <form>
                    <div class="col-md-6 box1">
                        <input class="form-control" type="text" name="" placeholder="Name">
                    </div>
                    <div class="col-md-6 box2">
                        <input class="form-control" type="email" name="" placeholder="Email">
                    </div>
                    <div class="col-md-6 box1">
                        <input class="form-control" type="tel" name="" placeholder="Phone">
                    </div>
                    <div class="col-md-6 box2">
                        <input class="form-control" type="text" name="" placeholder="Company">
                    </div>
                    <div class="col-md-12 box3">
                        <textarea class="form-control" rows="4" cols="" placeholder="Message"></textarea>
                    </div>
                    <div class="col-md-12 box3">
                        <input type="submit" name="" value="SUBMIT">
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>
<div class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <p>© 2019 ALANIC CLOTHING. ALL RIGHT RESERVED</p>
            </div>
            <div class="col-md-6 col-sm-6">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</footer>


<!--  <a href="#0" class="cd-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>     -->
<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slimNav_sk78.min.js"></script>
<script src="js/owl.carousel.min.js"></script>


<script type="text/javascript">
$(document).ready(function() {	
	$('#navigation nav').slimNav_sk78();
	$('#nav-icon0').click(function(){
            $(this).toggleClass('open');
        });
	
});
</script>

<script type="text/javascript">
//Add drop down menu arrow indicators for categories with subcategories
$("li.cat-parent").children("a").after("<span class='dropDownMenu'></span>");

//Set current category to be expanded on page load if top level category is active
$("li.current-cat").children(".dropDownMenu").addClass("active");
$("li.current-cat").children(".children").addClass("active");

//Set current category to be expanded on page load if subcategory is active
$("li.current-cat").parent("ul.children").addClass("active");
$("ul.children.active").siblings(".dropDownMenu").addClass("active");

//When click on down arrow, reveal submenu
$(".dropDownMenu").click(function() {
  $( this ).toggleClass("active");
  $( this ).next().toggleClass("active");
});
</script>

<script type="text/javascript">


jQuery(document).ready(function() {
		
	var owl = $('.owl-carousel');
	owl.owlCarousel({
		animateOut: 'fadeOut',
	autoPlay: 5000, //Set AutoPlay to 5 seconds
	
	items:1,
	itemsMobile:[568,1],
	itemsTablet:[768,1],
	itemsTablet:[1024,1],
	navigation:true,
	navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
	loop:true,
	autoplay:true,
	autoplayTimeout:1000,
	autoplayHoverPause:true
	});
});

jQuery(document).ready(function() {
		
	var owl = $('.product_rolling');
	owl.owlCarousel({
	autoPlay: 5000, //Set AutoPlay to 5 seconds
	items:4,
	itemsMobile:[568,2],
	itemsTablet:[768,3],
	itemsTablet:[1024,3],
	navigation:true,
	navigationText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
	loop:true,
	autoplay:true,
	autoplayTimeout:1000,
	autoplayHoverPause:true
	});
});

jQuery(document).ready(function() {
        
    var owl = $('.brand_scroll');
    owl.owlCarousel({
    autoPlay: 5000, //Set AutoPlay to 5 seconds
    items:5,
    itemsMobile:[568,3],
    itemsTablet:[768,4],
    itemsTablet:[1024,4],
    // navigation:true,
    // navigationText: ["<i class='fas fa-caret-left'></i>", "<i class='fas fa-caret-right'></i>"],
    loop:true,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
    });
});
	
</script>

<script>
$('#clickme').click(function() {
    var $slider = $('.mydiv');
    $slider.animate({
    left: parseInt($slider.css('left'),10) == -$slider.outerWidth() ?
    0 : -$slider.outerWidth()
    });
});
</script>

</body>
</html>
