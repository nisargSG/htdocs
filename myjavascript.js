
setInterval(() => {


    xmlhttprequest , jquery

    fetch("carsData.php").then((dataStream) => dataStream.json()).then(json => {


        document.getElementById("DATA").innerText = JSON.stringify(json);


    })

}, 3000)
