
    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg1");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
      modal.style.display = "block";
    }
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
      modal.style.display = "none";
    }

    // Get the modal2
    var modal1 = document.getElementById("myModal2");
    
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img1 = document.getElementById("myImg2");
    var captionText1 = document.getElementById("caption2");
    img1.onclick = function(){
      modal1.style.display = "block";
    }
    
    // Get the <span> element that closes the modal
    var span1 =document.getElementById("close2");[0];
    
    // When the user clicks on <span> (x), close the modal
    span1.onclick = function() { 
      modal1.style.display = "none";
    }

    // Get the modal2
    var modal3 = document.getElementById("myModal3");
    
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img3 = document.getElementById("myImg3");
    var captionText3 = document.getElementById("caption3");
    img3.onclick = function(){
      modal3.style.display = "block";
    }
    
    // Get the <span> element that closes the modal
    var span3 =document.getElementById("close3");[0];
    
    // When the user clicks on <span> (x), close the modal
    span3.onclick = function() { 
      modal3.style.display = "none";
    }
