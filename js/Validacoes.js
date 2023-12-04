function mascara(telefone){
	
	telefone.value = telefone.value.replace(/[^\d]/g, '');
    
    if (telefone.value.length > 0)
    {
    telefone.value = "(" + telefone.value;
        
        if (telefone.value.length > 3)
        {
            telefone.value = [telefone.value.slice(0, 3), ") ", telefone.value.slice(3)].join('');  
        }
        if (telefone.value.length > 11)
        {      
            if (telefone.value.length > 12) 
                telefone.value = [telefone.value.slice(0, 10), "-", telefone.value.slice(10)].join('');
            else
                telefone.value = [telefone.value.slice(0, 9), "-", telefone.value.slice(9)].join('');
        }                 
            if (telefone.value.length > 14)                
               telefone.value = telefone.value.substr(0,14);
    }
}


function isCPFCNPJ(campo,pType){
   if( isEmpty( campo ) ){return false;}

   var campo_filtrado = "", valor_1 = " ", valor_2 = " ", ch = "";
   var valido = false;
        
   for (i = 0; i < campo.length; i++){
      ch = campo.substring(i, i + 1);
      if (ch >= "0" && ch <= "9"){
         campo_filtrado = campo_filtrado.toString() + ch.toString()
         valor_1 = valor_2;
         valor_2 = ch;
      }
      if ((valor_1 != " ") && (!valido)) valido = !(valor_1 == valor_2);
   }
   if (!valido) campo_filtrado = "12345678912";

   if (campo_filtrado.length < 11){
      for (i = 1; i <= (11 - campo_filtrado.length); i++){campo_filtrado = "0" + campo_filtrado;}
   }

	if(pType <= 1){
		if ( ( campo_filtrado.substring(9,11) == checkCPF( campo_filtrado.substring(0,9) ) ) && ( campo_filtrado.substring(11,12)=="") ){return true;}
	}

	if((pType == 2) || (pType == 0)){
		if (campo_filtrado.length >= 14){
			if ( campo_filtrado.substring(12,14) == checkCNPJ( campo_filtrado.substring(0,12) ) ){ return true;}
		}
	}
	
	return false;
}

function checkCNPJ(vCNPJ){
   var mControle = "";
   var aTabCNPJ = new Array(5,4,3,2,9,8,7,6,5,4,3,2);
   for (i = 1 ; i <= 2 ; i++){
      mSoma = 0;
      for (j = 0 ; j < vCNPJ.length ; j++)
         mSoma = mSoma + (vCNPJ.substring(j,j+1) * aTabCNPJ[j]);
      if (i == 2 ) mSoma = mSoma + ( 2 * mDigito );
      mDigito = ( mSoma * 10 ) % 11;
      if (mDigito == 10 ) mDigito = 0;
      mControle1 = mControle ;
      mControle = mDigito;
      aTabCNPJ = new Array(6,5,4,3,2,9,8,7,6,5,4,3);
   }
   return( (mControle1 * 10) + mControle );
}

function checkCPF(vCPF){
   var mControle = ""
   var mContIni = 2, mContFim = 10, mDigito = 0;
   for (j = 1 ; j <= 2 ; j++){
      mSoma = 0;
      for (i = mContIni ; i <= mContFim ; i++)
         mSoma = mSoma + (vCPF.substring((i-j-1),(i-j)) * (mContFim + 1 + j - i));
      if (j == 2 ) mSoma = mSoma + ( 2 * mDigito );
      mDigito = ( mSoma * 10 ) % 11;
      if (mDigito == 10) mDigito = 0;
      mControle1 = mControle;
      mControle = mDigito;
      mContIni = 3;
      mContFim = 11;
   }
   return( (mControle1 * 10) + mControle );
}

function isEmpty(pStrText){
	var	len = pStrText.length;
	var pos;
	var vStrnewtext = "";

	for (pos=0; pos<len; pos++){
		if (pStrText.substring(pos, (pos+1)) != " "){
			vStrnewtext = vStrnewtext + pStrText.substring(pos, (pos+1));
		}
	}

	if (vStrnewtext.length > 0)
		return false;
	else
		return true;
}

function valida(CPFCNPJ,tipo) {
	var msg = ""
	if(tipo == 1)
		msg = "CPF"
	else
		msg = "CNPJ"
	if(isCPFCNPJ(CPFCNPJ,tipo)) {
		alert(msg + ' OK');
	}
	else {
		alert(msg + ' INVALIDO');
	}

}

function validacaoEmail(field) { 
	if(field.value == "")
	return true;
	
	usuario = field.value.substr(0, field.value.indexOf("@")); 
	dominio = field.value.substr(field.value.indexOf("@")+ 1, field.value.length); 
	
	if ((usuario.length >=1) && (dominio.length >=3) && (usuario.search("@")==-1) && (dominio.search("@")==-1) && (usuario.search(" ")==-1) && (dominio.search(" ")==-1) && (dominio.search(".")!=-1) && (dominio.indexOf(".") >=1)&& (dominio.lastIndexOf(".") < dominio.length - 1)) { 
		return true;
	} else{
		return false;
	} 
}

function moeda(v){
	v.value=v.value.replace(/\D/g,"") // permite digitar apenas numero 
	v.value=v.value.replace(/(\d{1})(\d{13})$/,"$1.$2") // coloca ponto antes dos ultimos digitos 
	v.value=v.value.replace(/(\d{1})(\d{10})$/,"$1.$2") // coloca ponto antes dos ultimos 11 digitos 
	v.value=v.value.replace(/(\d{1})(\d{7})$/,"$1.$2") // coloca ponto antes dos ultimos 8 digitos 
	v.value=v.value.replace(/(\d{1})(\d{4})$/,"$1.$2") // coloca ponto antes dos ultimos 5 digitos 
	v.value=v.value.replace(/(\d{1})(\d{1,1})$/,"$1,$2") // coloca virgula antes dos ultimos 2 digitos 
} 

function upperCase(string){
	string.value = string.value.toUpperCase();
}