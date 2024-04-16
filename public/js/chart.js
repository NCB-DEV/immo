const canvas=document.getElementById('barCanvas');
const barchar=new Chart("canvas",{
    type:"bar",
    data:{
        labels:["Parcelles","Maison"],
        dataSets:[{
            data:["200","200"],
            backgroundColor:["red","green"]
        }],
        options:{
            scales:{
                y:{
                    sugegestedMax:500,
                    ticks:{
                        font:{
                            size:18,
                        }
                    }
                }
            }
        }
    }
});
