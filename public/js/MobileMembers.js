class MembersMobile
{
    constructor()
    {
        this.init();
    }
    init()
    {
        $('.miniature-img-team-mobile').each(function(){
            $(this).click(function(e){
                    console.log('mobile')
                    let member_id = $(this).attr('id');
                    $("#memberBioContainerMobile").html("");
                
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
    
                            member_mobile_obj.SetMembersMobile(response[0]); 
                            
                        }else{
                            // error no response
                            console.log('erreur aucune donnes reçu');
                        }
                    },
                });
            });
        });

    }

    SetMembersMobile(data)
    {
        const base_url = window.location.origin;
        let teammates = data.teammates;
        let job = data.job_title;
        let desc = data.desc;
        let image = data.image;
  
        let bioContainer = $("#memberBioContainerMobile");
        let imageContainer = $("#teamImageMobile");

        imageContainer.html("");
        bioContainer.html("");
        bioContainer.append('<h3 class="name-member">' +teammates+ '</h3>');
        bioContainer.append('<p class="fonction-member">' +job + '</p>');
        bioContainer.append('<p class="description-member">' +desc+ '</p>');
        // imageContainer.append(' <img class="w-full team-image relative" src="'+base_url+'/'+image+'" alt="">')
        imageContainer.append('<div id="{{$team->id}}" class="w-full team-image-mobile relative"  style="background: url('+image+')"></div>');
        
    }

}


