//inbuilt

///fetch
//xmhhttprequest


//third party library

//jquery


function sendDeleteRequest(position){


    $.ajax({
        url: "carsService.php",
        type: "DELETE",
        dataType: "json",
        data: { position: position },

        success: function(data) {
            const carDiv = document.getElementById("DATA");
            carDiv.innerHTML=""
            const tags = data.map((item,index)=>{
                return "<li>"+item+`<button onclick="sendDeleteRequest(${index})" >Delete</button></li>`
            })

            carDiv.innerHTML=tags.join("")


        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error("Error:", textStatus, errorThrown);
        }

    })

    
}


$(document).ready(function(){


    $.ajax({
        url: "carsService.php",
        type: "GET",
        dataType: "json",

        success: function(data) {
            const carDiv = document.getElementById("DATA");
            const tags = data.map((item,index)=>{
                return "<li>"+item+`<button onclick="sendDeleteRequest(${index})" >Delete</button></li>`
            })

            carDiv.innerHTML=tags.join("")


        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error("Error:", textStatus, errorThrown);
        }

    })



})