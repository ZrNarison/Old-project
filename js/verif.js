$(document).ready(function(){
   $("#index_action").validate({
      rules:{
         site:{
            required:true
         },
         date:{
            required:true
         },
         a1:{
            required:true,
            number:true,
            minlength:1,
            maxlength:4
         },
         a2:{
            required:true,
            number:true,
            minlength:1,
            maxlength:4,
         }
      },
      messages:{
         site:{
            required:"site"
         },
         date:{
            required:"date"
         },
         a1:{
            required:"l'operationnelle",
            number:"en nombre",
            minlength:"minimale",
            maxlength:"maximale"
         },
         a2:{
            required:"L'ayant rapport",
            number:"en nombre",
            minlength:"minimale",
            maxlength:"maximale"
         }
      }
   }),
   $("#femmeenceinte").validate({
      rules:{
         sitefm:{
            required:true
         },
         datefm:{
            required:true
         },
         a1fm:{
            required:true,
            number:true,
            maxlength:3
         },
         a2fm:{
            equalTo:"#a1"
         },
         a3fm:{
            equalTo:"#a1"
         },
         a4fm:{
            equalTo:"#a1"
         }
      },
      messages:{
         sitefm:{
            required:"Merci de selectionné une site"
         },
         datefm:{
            required:"la date !"
         },
         a1fm:{
            required:"Femme resencé !",
            number:"en chiffre SVP !",
            maxlength:"nombre maximal sont en trois chiffre"
         },
         a2fm:{
            required:"référé pour ACP !",
            number:"en chiffre SVP !",
            maxlength:"nombre maximal sont en trois chiffre",
            equalTo:"Valeur incorrect !"
         },
         a3fm:{
            required:"participant EN !",
            number:"en chiffre SVP !",
            maxlength:"nombre maximal sont en trois chiffre",
            equalTo:"Valeur incorrect !"
         },
         a4fm:{
            required:"Accouchement assité par une assistant médicale !",
            number:"en chiffre SVP !",
            maxlength:"nombre maximal sont en trois chiffre",
            equalTo:"Valeur incorrect !"
         }
      }
   }),
   $("#editcopmte").validate({
      rules:{
         edituser:{
            required:true
         },
         ancien:{
            required:true,
            minlength:4,
            maxlength:12
         },
         new:{
            required:true,
            minlength:4,
            maxlength:12
         },
         confirm:{
            equalTo:"#newpass"
         }
      },
      messages:{
         edituser:{
            required:'Vous devez selectionner un utilisateur'
         },
         ancien:{
            required:"L'ancien mot de pass SVP!",
            minlength:"Mot de pass insuffisant",
            maxlength:"Mot de pass trop long"
         },
         new:{
            required:"Le nouveau mot de pass SVP!",
            minlength:"Mot de pass trop court",
            maxlength:"Mot de pass trop long"
         },
         confirm:{
            equalTo:"Mot de pass different"
         }
      }
   }),
   $("#formlogin").validate({
      rules:{
         pseudo:{
            required:true
         },
         password:{
            required:true,
            minlength:4,
            maxlength:12
         }
      },
      messages:{
         pseudo:{
            required:"Votre pseudo !"
         },
         password:{
            required:"Votre mot de pass SVP !",
            minlength:"Mot de pass trop court ",
            maxlength:"Mot de pass trop long "
         }
      }
   })
});
$(document).ready(function(){
   var ch =$("#checkbox");
   var psw =$("#passwordlogin");
   
   ch.click(function(){
      if(ch.prop("checked")){
         psw.attr("type","text");
      }else{
         psw.attr("type","password");
      }
   })
});
$(document).ready(function(){
   var op =parseInt(document.getElementById('a1site').value)
   var ar =parseInt(document.getElementById('a2site').value)
   var ayr = document.getElementById("a2site")
   if (op>ar) {
      alert(" operationnelle est + grand que ayant rapport")
   }else{alert("operationnelle est - grand que ayant rapport")}
});