<link rel="stylesheet" type="text/css" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<style>
.mySlides {display:none;}
</style>
  
  <div class="w3-content w3-section" style="max-width:80%;">
    <img class="mySlides" src="images/image1.jpg" style="width:100%">
    <img class="mySlides" src="images/im2.jpg" style="width:100%">
    <img class="mySlides" src="images/two.jpg" style="width:100%">
    <img class="mySlides" src="images/ab.jpg" style="width:100%">
</div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">




<script type="text/javascript">
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1} 
        if (n < 1) {slideIndex = x.length} ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none"; 
        }
        x[slideIndex-1].style.display = "block"; 
    }
    var slideIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none"; 
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1} 
        x[slideIndex-1].style.display = "block"; 
        setTimeout(carousel, 2000); // Change image every 2 seconds
        }
</script>  