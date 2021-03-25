class Members
{
    constructor()
    {
        let bioContainer = $("#memberBioContainer");
        this.C_Image = $('.product-miniature-img');
        this.init();
    }
    init()
    {
       
       this.C_Image.each(function(){
            $(this).click(function(e){
                
                    let member_id = $(this).attr('id');
                    bioContainer.html("");
                
                $.ajaxSetup({
                    // make the header special laravel  Ajax
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
                });
                e.preventDefault();
                $.ajax({
                    url: '/get/member',
                    type: "POST",
                    data:{
                        id:member_id,
                    },
                    success:function(response){
                        if(response) {
    
                            member_obj.SetMembers(response[0]); 
                            
                        }else{
                            // error no response
                            console.log('erreur aucune donnes reçu');
                        }
                    },
                });
            });
        });

    }

    SetMembers(data)
    {
        let firstname = data.firstname;
        let lastname = data.lastname;
        let job = data.job_title;
        let desc = data.desc;
        let image = data.image;
  
        let bioContainer = $("#memberBioContainer");
         bioContainer.append('<p>' +firstname+'</p>');

        
    }

}