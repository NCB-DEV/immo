const input=document.getElementById('search');
input.addEventListener('input',function(){
    const valeur=this.value;
    console.log(valeur)
    const xrh=new XMLHttpRequest();
    xrh.open("GET",'/serche-house?id='+valeur);
    xrh.onload=function(){
        if(xrh.status===200){
            const data=JSON.parse(xrh.responseText);
            const titre=document.getElementById('titre');
            const spo=document.getElementById('sponsorise');
            spo.innerHTML="";
            console.log(xrh.responseText);
            const div=document.getElementById('nosponsorise');
            div.innerHTML="";
            data.forEach( person =>{
                if(( person.avis=="nom vendu") && (person.boost=="oui") && (person.usages=="location")){
                    console.log("ok"+person.avis)
                    div.classList.add('row');
                    const divE=document.createElement('div');
                    divE.classList.add('col-sm-12');
                    divE.classList.add('col-md-6');
                    divE.classList.add('col-lg-4');
                    spo.appendChild(divE);
                    const elem=document.createElement('div');
                    elem.classList.add('element')
                    const h6=document.createElement('h6');
                    h6.textContent="sponsorisé";
                    elem.appendChild(h6);
                    const a=document.createElement('a');
                    const id=person.id
                    a.setAttribute('href','voir-la-proprieté/'+person.id);
                    const divSpo=document.createElement('div');
                    divSpo.classList.add('sponsoirise');
                    const divPhoto=document.createElement('div');
                    divPhoto.classList.add('photo');
                    const img=document.createElement('img');
                    img.style.width="100%";
                    img.style.objectifFit="conver";
                    img.style.height="200px";
                    img.src="http://127.0.0.1:8000/storage/"+person.photo2;
                    divPhoto.appendChild(img);

                    const divInfo=document.createElement('div');
                    divInfo.classList.add('row')
                    const divInfoEnf1=document.createElement('div');
                    divInfoEnf1.classList.add('col-6');
                    divInfoEnf1.classList.add('prix');
                    const spanPrix=document.createElement('span');
                    spanPrix.textContent=person.prix+"$"
                    divInfoEnf1.appendChild(spanPrix);
                    divInfo.appendChild(divInfoEnf1);

                    const divInfoEnf2=document.createElement('div');
                    divInfoEnf2.classList.add('col-6');
                    divInfoEnf2.classList.add('usage');
                    const spanusage=document.createElement('span');
                    spanusage.textContent=person.usages
                    divInfoEnf2.appendChild(spanusage);
                    divInfo.appendChild(divInfoEnf2);

                    const divInfoEnf3=document.createElement('div');
                    divInfoEnf3.classList.add('col-12');
                    divInfoEnf3.classList.add('desc');
                    const spandesc=document.createElement('span');
                    spandesc.textContent=person.description
                    divInfoEnf3.appendChild(spandesc);
                    divInfo.appendChild(divInfoEnf3);

                    const divInfoEnf4=document.createElement('div');
                    divInfoEnf4.classList.add('col-4');
                    divInfoEnf4.classList.add('desc');
                    const spanid=document.createElement('span');
                    spanid.textContent="numéro "+person.id
                    const p=document.createElement('p');
                    p.appendChild(spanid)
                    divInfoEnf4.appendChild(p);
                    divInfo.appendChild(divInfoEnf4);

                    const divInfoEnf5=document.createElement('div');
                    divInfoEnf5.classList.add('col-8');
                    divInfoEnf5.classList.add('desc');
                    const spannum=document.createElement('span');
                    spannum.textContent="+243 821 248 030"
                    const h5=document.createElement('h5');
                    h5.appendChild(spannum)
                    divInfoEnf5.appendChild(h5);
                    divInfo.appendChild(divInfoEnf5);

                    const divInfoEnf6=document.createElement('div');
                    divInfoEnf6.classList.add('col-12');
                    divInfoEnf6.classList.add('desc');
                    const spanad=document.createElement('span');
                    spanad.textContent="Adresse: V."+person.ville+", C."+person.communie+", Q."+person.quartier
                    const pad=document.createElement('p');
                    pad.appendChild(spanad)
                    divInfoEnf6.appendChild(pad);
                    divInfo.appendChild(divInfoEnf6);

                    const divInfoEnf7=document.createElement('div');
                    divInfoEnf7.classList.add('col-12');
                    divInfoEnf7.classList.add('desc');
                    const spandate=document.createElement('span');
                    spandate.textContent="Date & heure de publication"+person.created_at
                    const pdate=document.createElement('p');
                    pdate.appendChild(spandate)
                    divInfoEnf6.appendChild(pdate);
                    divInfo.appendChild(divInfoEnf7);

                    a.appendChild(divPhoto);
                    a.appendChild(divInfo);

                    elem.appendChild(a)

                    divE.appendChild(elem);

                    spo.appendChild(divE);
                }
                if(( person.avis=="nom vendu") && (person.boost=="non") &&(person.usages=="location")){
                    console.log(person.avis)
                    div.classList.add('row');
                    const divE=document.createElement('div');
                    divE.classList.add('col-sm-12');
                    divE.classList.add('col-md-6');
                    divE.classList.add('col-lg-4');
                    div.appendChild(divE);
                    const elem=document.createElement('div');
                    elem.classList.add('element')
                    const a=document.createElement('a');
                    const id=person.id
                    a.setAttribute('href','voir-la-proprieté/'+person.id);
                    const divSpo=document.createElement('div');
                    divSpo.classList.add('sponsoirise');
                    const divPhoto=document.createElement('div');
                    divPhoto.classList.add('photo');
                    const img=document.createElement('img');
                    img.style.width="100%";
                    img.style.objectifFit="conver";
                    img.style.height="200px";
                    img.src="http://127.0.0.1:8000/storage/"+person.photo2;
                    divPhoto.appendChild(img);

                    const divInfo=document.createElement('div');
                    divInfo.classList.add('row')
                    const divInfoEnf1=document.createElement('div');
                    divInfoEnf1.classList.add('col-6');
                    divInfoEnf1.classList.add('prix');
                    const spanPrix=document.createElement('span');
                    spanPrix.textContent=person.prix+"$"
                    divInfoEnf1.appendChild(spanPrix);
                    divInfo.appendChild(divInfoEnf1);

                    const divInfoEnf2=document.createElement('div');
                    divInfoEnf2.classList.add('col-6');
                    divInfoEnf2.classList.add('usage');
                    const spanusage=document.createElement('span');
                    spanusage.textContent=person.usages
                    divInfoEnf2.appendChild(spanusage);
                    divInfo.appendChild(divInfoEnf2);

                    const divInfoEnf3=document.createElement('div');
                    divInfoEnf3.classList.add('col-12');
                    divInfoEnf3.classList.add('desc');
                    const spandesc=document.createElement('span');
                    spandesc.textContent=person.description
                    divInfoEnf3.appendChild(spandesc);
                    divInfo.appendChild(divInfoEnf3);

                    const divInfoEnf4=document.createElement('div');
                    divInfoEnf4.classList.add('col-4');
                    divInfoEnf4.classList.add('desc');
                    const spanid=document.createElement('span');
                    spanid.textContent="numéro "+person.id
                    const p=document.createElement('p');
                    p.appendChild(spanid)
                    divInfoEnf4.appendChild(p);
                    divInfo.appendChild(divInfoEnf4);

                    const divInfoEnf5=document.createElement('div');
                    divInfoEnf5.classList.add('col-8');
                    divInfoEnf5.classList.add('desc');
                    const spannum=document.createElement('span');
                    spannum.textContent="+243 821 248 030"
                    const h5=document.createElement('h5');
                    h5.appendChild(spannum)
                    divInfoEnf5.appendChild(h5);
                    divInfo.appendChild(divInfoEnf5);

                    const divInfoEnf6=document.createElement('div');
                    divInfoEnf6.classList.add('col-12');
                    divInfoEnf6.classList.add('desc');
                    const spanad=document.createElement('span');
                    spanad.textContent="Adresse: V."+person.ville+", C."+person.communie+", Q."+person.quartier
                    const pad=document.createElement('p');
                    pad.appendChild(spanad)
                    divInfoEnf6.appendChild(pad);
                    divInfo.appendChild(divInfoEnf6);

                    const divInfoEnf7=document.createElement('div');
                    divInfoEnf7.classList.add('col-12');
                    divInfoEnf7.classList.add('desc');
                    const spandate=document.createElement('span');
                    spandate.textContent="Date & heure de publication"+person.created_at
                    const pdate=document.createElement('p');
                    pdate.appendChild(spandate)
                    divInfoEnf6.appendChild(pdate);
                    divInfo.appendChild(divInfoEnf7);

                    a.appendChild(divPhoto);
                    a.appendChild(divInfo);

                    elem.appendChild(a)

                    divE.appendChild(elem);

                    div.appendChild(divE);
                }

            })
        }
        else{
            console.error("Erreur :",xrh.status)
        }
    }
    xrh.send();
})
