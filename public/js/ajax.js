const input=document.getElementById('search');

input.addEventListener('input',function(){
    const valeur=this.value;
    console.log(valeur)
    const xrh=new XMLHttpRequest();
    xrh.open("GET",'/serche-house?id='+valeur);
    xrh.onload=function(){
        if(xrh.status===200){
            console.log(xrh.responseText)
            console.log(xrh.responseType)
            const data=JSON.parse(xrh.responseText);
            const titre=document.getElementById('titre');
            data.forEach( person =>{
                if(person.boost=="oui"){

                const h6=document.createElement('h6');
                h6.textContent="sponsorisé"
               const row=document.getElementById("sponsorise");
                    row.appendChild(h6);
               const divElement=document.createElement('div');
               const text=document.getElementById('')
               divElement.classList.add('element');
               divElement.classList.add('col-sm-12');
               divElement.classList.add('col-md-4');
               divElement.classList.add('col-lg-4');
               const a=document.createElement("a");
               const id=person.id
               a.setAttribute('href','voir-la-proprieté/'+person.id)
               const sponsoirise=document.createElement("div")
               //div div qui va contenir les elements enfants
               // div pour la photo
               const photos=document.createElement("div")
               photos.classList.add('photo')
               //image width: ; objectif-fit:cover; height:200px
               const img=document.createElement('img');

               photos.appendChild(img);
               fetch('/getImg/'+person.photo2)
               .then(response => response.text())
               .then(url => {
                img.setAttribute('src',url);

               })

               sponsoirise.appendChild(photos);
               a.appendChild(sponsoirise);
                img.style.width="200px";
                img.style.objectifFit="200px";
                img.style.height="200px";
               sponsoirise.classList.add('sponsoirise')

               //container qui contiendra les info
               const rows=document.createElement('div')
               rows.classList.add("row")

               const Prixs=document.createElement("div");
               Prixs.classList.add("col-6");
               Prixs.classList.add("prix");

               const span=document.createElement('span');
               span.textContent=person.prix;
               Prixs.appendChild(span);
               rows.appendChild(Prixs);

               // usages
               const usages=document.createElement("div");
               usages.classList.add("col-6");
               usages.classList.add("usage");

               const spans=document.createElement('span');
               spans.textContent=person.usages;
               usages.appendChild(spans);
               rows.appendChild(usages);

               //desc
               const desc=document.createElement("div");
               desc.classList.add("col-12");
               desc.classList.add("desc");

               const spansx=document.createElement('span');
               spansx.textContent=person.description;
               desc.appendChild(spansx);
               rows.appendChild(desc);
               sponsoirise.appendChild(rows);

               //identifiant
               const ids=document.createElement("div");
               ids.classList.add("col-5");
               ids.classList.add("desc");

               const spanid=document.createElement('span');
               spanid.textContent="Num :"+person.id;
               ids.appendChild(spanid);
               rows.appendChild(ids);
                //numero
                const num=document.createElement("div");
                num.classList.add("col-7");
                num.classList.add("desc");

                const spannum=document.createElement('span');
                spannum.textContent="+243 821 248 030";
                num.appendChild(spannum);
                rows.appendChild(num);

                // adresse
                //numero
                const ad=document.createElement("div");
                ad.classList.add("col-12");
                ad.classList.add("desc");

                const spanv=document.createElement('span');
                spanv.textContent="V."+person.ville;
                const spanc=document.createElement('span');
                spanc.textContent="C."+person.communie;
                const spanq=document.createElement('span');
                spanq.textContent="Q."+person.quartier;
                ad.appendChild(spanv);
                ad.appendChild(spanc);
                ad.appendChild(spanq);
                rows.appendChild(ad);

                //date
                const d=document.createElement("div");
                d.classList.add("col-12");
                d.classList.add("desc");

                const spand=document.createElement('span');

                spand.textContent="Date & heure de publication:"+person.created_at;
                d.appendChild(spand);

                rows.appendChild(d);





               sponsoirise.appendChild(rows);

               divElement.appendChild(a);
               row.append(divElement)
                console.log(person.description);
            }
            if(person.boost=="non"){


                const row=document.getElementById("sponsorise");

                const divElement=document.createElement('div');
                const text=document.getElementById('')
                divElement.classList.add('element');
                divElement.classList.add('col-sm-12');
                divElement.classList.add('col-md-4');
                divElement.classList.add('col-lg-4');
                const a=document.createElement("a");
                const id=person.id
                a.setAttribute('href','voir-la-proprieté/'+person.id)
                const sponsoirise=document.createElement("div")
                //div div qui va contenir les elements enfants
                // div pour la photo
                const photos=document.createElement("div")
                photos.classList.add('photo')
                //image width: ; objectif-fit:cover; height:200px
                const img=document.createElement('img');

                photos.appendChild(img);
                fetch('/getImg/'+person.photo2)
                .then(response => response.text())
                .then(url => {
                 img.setAttribute('src',url);

                })

                sponsoirise.appendChild(photos);
                a.appendChild(sponsoirise);
                 img.style.width="200px";
                 img.style.objectifFit="200px";
                 img.style.height="200px";
                sponsoirise.classList.add('sponsoirise')

                //container qui contiendra les info
                const rows=document.createElement('div')
                rows.classList.add("row")

                const Prixs=document.createElement("div");
                Prixs.classList.add("col-6");
                Prixs.classList.add("prix");

                const span=document.createElement('span');
                span.textContent=person.prix;
                Prixs.appendChild(span);
                rows.appendChild(Prixs);

                // usages
                const usages=document.createElement("div");
                usages.classList.add("col-6");
                usages.classList.add("usage");

                const spans=document.createElement('span');
                spans.textContent=person.usages;
                usages.appendChild(spans);
                rows.appendChild(usages);

                //desc
                const desc=document.createElement("div");
                desc.classList.add("col-12");
                desc.classList.add("desc");

                const spansx=document.createElement('span');
                spansx.textContent=person.description;
                desc.appendChild(spansx);
                rows.appendChild(desc);
                sponsoirise.appendChild(rows);

                //identifiant
                const ids=document.createElement("div");
                ids.classList.add("col-5");
                ids.classList.add("desc");

                const spanid=document.createElement('span');
                spanid.textContent="Num :"+person.id;
                ids.appendChild(spanid);
                rows.appendChild(ids);
                 //numero
                 const num=document.createElement("div");
                 num.classList.add("col-7");
                 num.classList.add("desc");

                 const spannum=document.createElement('span');
                 spannum.textContent="+243 821 248 030";
                 num.appendChild(spannum);
                 rows.appendChild(num);

                 // adresse
                 //numero
                 const ad=document.createElement("div");
                 ad.classList.add("col-12");
                 ad.classList.add("desc");

                 const spanv=document.createElement('span');
                 spanv.textContent="V."+person.ville;
                 const spanc=document.createElement('span');
                 spanc.textContent="C."+person.communie;
                 const spanq=document.createElement('span');
                 spanq.textContent="Q."+person.quartier;
                 ad.appendChild(spanv);
                 ad.appendChild(spanc);
                 ad.appendChild(spanq);
                 rows.appendChild(ad);

                 //date
                 const d=document.createElement("div");
                 d.classList.add("col-12");
                 d.classList.add("desc");

                 const spand=document.createElement('span');

                 spand.textContent="Date & heure de publication:"+person.created_at;
                 d.appendChild(spand);

                 rows.appendChild(d);





                sponsoirise.appendChild(rows);

                divElement.appendChild(a);
                row.append(divElement)
                 console.log(person.description);
             }

            })
        }
        else{
            console.error("Erreur :",xrh.status)
        }
    }
    xrh.send();
})
