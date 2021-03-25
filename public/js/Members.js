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
        const base_url = window.location.origin;
        let teammates = data.teammates;
        let job = data.job_title;
        let desc = data.desc;
        let image = data.image;
  
        let bioContainer = $("#memberBioContainer");
        let imageContainer = $("#teamImage");

        imageContainer.html("");
        bioContainer.append('<h3 class="name-member">' +teammates+ '</h3>');
        bioContainer.append('<p class="fonction-member">' +job + '</p>');
        bioContainer.append('<p class="description-member">' +desc+ '</p>');
        imageContainer.append(' <img class="w-full team-image relative" src="'+base_url+'/'+image+'" alt="">')

        
    }

}