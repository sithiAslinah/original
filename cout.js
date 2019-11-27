   $(document).ready(function()  
       {  
           var pur = "<p>To help our clients manage their companies better through our knowledge and experience.</p>";  
           var misi = "<p>To be a trusted & valuable advisor. To ensure the inherent potential of the companies we serve, are truly realized.</p>";  
           var val = "<p>Transparency, Integrity, Knowledge & Empathy</p>";
           var comit = "<p>We are blunt & straightforward. We don’t hide facts or polish them up. We tell you the truth because we believe in it.</p>";

            $(".container-right").html(pur);

            $("#one").click(function()  
            {  
                $(".container-right").html(pur); 
            });  
            $("#two").click(function() { 
                $(".container-right").html(misi);  
            });  
            $("#three").click(function() {  
                $(".container-right").html(val);  
            });
             $("#four").click(function() {  
                $(".container-right").html(comit);  
            });   
        });
$(document).ready(function(){
  $('.btn').click(function(){
    $('.btn').removeClass('work').addClass('notwork');
     $(this).removeClass('notwork').addClass('work');
    });
}); 

$(document).ready(function($){
       $('.counter').counterUp({
    delay:20,
    time:3000
});
  });