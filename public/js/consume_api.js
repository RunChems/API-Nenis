const url = "https://hidden-shelf-08410.herokuapp.com/api/v1";
let htmlContent = "";
function fetchApi() {
    return new Promise(async (resolve, reject) => {
        const data = await fetch(`${url}/nenis`);
        const json = await data.json();
        resolve(json);
        console.log(json);

    });
}

const container = document.querySelector(".content");
fetchApi().then(
    (data) => {

        for (let i = 0; i < data['data']["Las nenis de chemaaaaa"].length; i++) {
            const name = data.data["Las nenis de chemaaaaa"][i]["Neni Nombre"];
            const img = data.data["Las nenis de chemaaaaa"][i]["Imagen de neni"];
            const description = data. data["Las nenis de chemaaaaa"][i]["Tipo de chems"]["Chems Descripcion"];
            const mainActivity = data.data["Las nenis de chemaaaaa"][0]["Actividad principal como neni"]


           
                
            htmlContent += `
                <div class= " col-sm-6  d-flex justify-content-center ">
                    <div class=" card card-neni col-6 mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4 contPicture">
                        <img src="${img}" class="img-fluid picNeni rounded-end" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">${name}</h5>
                          <p class="card-text">Descripcion: <br> ${description}</p>
                          <p class="card-text"> Actividad principal:<br> ${mainActivity}</p>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                 </div> 
                    `


            // for (let neni of Object.keys(data['data']["Las nenis de chemaaaaa"][i])) {
            //     const value = data['data']["Las nenis de chemaaaaa"][i][neni];
            //     //When is an object (When chems type is the field in this case)
            //     if (typeof value === "object") {
            //         for (const obj of Object.keys(value)) {
            //             container.innerHTML += obj + value[obj] + "<br>";
            //         }
            //     } else {
            //         container.innerHTML += neni + ":" + value + "<br>";
            //     }
            // }
        }
        container.innerHTML = htmlContent;
    }


)




// const url = 'https://hidden-shelf-08410.herokuapp.com/api/v1/nenis'
// let content = document.querySelector('#cards')
// let htmlContent ="";
// const chargeContent = async () => {
    
//        const result = await fetch(url);
//        const data = await result.json();

//        let nenis = data.data["Las nenis de chemaaaaa"];
   
       
//       for(let i = 0; i < 7 ; i++ ){
//         let name = data.data["Las nenis de chemaaaaa"][i]["Neni Nombre"];
//         console.log(name)
//         htmlContent += `

//         <div class="card card-neni col-sm mb-3" style="max-width: 540px;">
//         <div class="row g-0">
//           <div class="col-md-4 contPicture">
//             <img src="{{asset('images/ricardo.jpg')}}" class="img-fluid picNeni rounded-end" alt="...">
//           </div>
//           <div class="col-md-8">
//             <div class="card-body">
//               <h5 class="card-title">${name}</h5>
//               <p class="card-text"></p>
             
//             </div>
//           </div>
//         </div>
//       </div>
//         `

//       }



//       content.innerHTML = htmlContent;
//     //    for (let keyss of Object.keys(data.data["Las nenis de chemaaaaa"][1]) ){
//     //     console.log( keyss+": "+ data.data["Las nenis de chemaaaaa"][1][keyss])
//     //    }
       
//     //    for(let i = 0; i < nenis.len){

//     //    }  

    
// };

// chargeContent();