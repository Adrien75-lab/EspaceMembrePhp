let btnModifMail = document.querySelector("#btnModifMail");
let btnValidModifMail = document.querySelector("#btnValidModifMail");
let divmail = document.querySelector("#mail");
let divModificationMail = document.querySelector("#modificationMail");

btnModifMail.addEventListener("click",function(){
    divmail.classList.add("d-none");
    divModificationMail.classList.remove("d-none");
})
