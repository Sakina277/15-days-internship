console.log("hello");
let login=document.getElementById('login');
		let register=document.getElementById('register');
		let loginbtn=document.getElementById('loginbtn');
		let registerbtn=document.getElementById('registerbtn');
		let btn=document.getElementById("btn");


		loginbtn.addEventListener("click",()=>{
			btn.classList.add("divbtn");
			btn.classList.remove("divbtnr");
			register.style.left="-20rem";
			login.style.left="3rem";
			  

		});

		registerbtn.addEventListener("click",()=>{
			  btn.classList.add("divbtnr");
			  btn.classList.remove("divbtn");
			  login.style.left="-20rem";
			  register.style.left="3rem";
			
		});

		let name=document.getElementById("name");
        let password=document.getElementById("password");
        let  lbtn=document.getElementById("lbtn");
        var validname=false;
        var validpassword=false
        var fachecks=document.getElementById("fachecks");
        var rfas=document.getElementById("rfas");

        name.addEventListener("blur",()=>{
        	let reg=/^([a-zA-Z@]+)/;
        	let str=name.value;
        	if(reg.test(str)==true){
        		fachecks.classList.remove("fa-times")
            fachecks.setAttribute("style","display:block; color:green");
            validname=true;
        		
        	}else{
        		    fachecks.classList.add("fa-times");
        		    fachecks.classList.remove("fa-check");
                    fachecks.setAttribute("style","display:block; color:red");
                   validname=false
        	}

        })

        password.addEventListener("blur",()=>{
        	let reg=/^[0-9]{10}$/;
        	let pass=password.value;
        	if(reg.test(pass)==true){
        		rfas.classList.remove("fa-times");
        		rfas.setAttribute("style","display:block; color:green");
        		validpassword=true;
        		
        		
        	}else{
        		rfas.classList.add("fa-times");
        		    rfas.classList.remove("fa-check");
                rfas.setAttribute("style","display:block; color:red");
                 
                 validpassword=false;
        	
        		

        	}

        });

        let regname=document.getElementById("regname");
        let regpass=document.getElementById("regpass");
        let regemail=document.getElementById("regemail");
        let rname=document.getElementById("rname");

        rname.addEventListener("blur",()=>{
        	let reg1=/^([a-zA-Z@]+)/;
        	let str1=rname.value;
        	if(reg1.test(str1)==true){
        	 regname.classList.remove("fa-times");
             regname.setAttribute("style","display:block; color:green");
            validname=true;
        		
        	}else{
        		    regname.classList.add("fa-times");
        		    regname.classList.remove("fa-check");
                    regname.setAttribute("style","display:block; color:red");
                   validname=false
        	}


        });


         rpassword.addEventListener("blur",()=>{
        	let reg=/^[0-9]{10}$/;
        	let pass=password.value;
        	if(reg.test(pass)==true){
        		regpass.classList.add("fa-check");
        		regpass.classList.remove("fa-times");
        		regpass.setAttribute("style","display:block; color:green");
        		validpassword=true;
        		
        		
        	}else{
        		regpass.classList.add("fa-times");
        		regpass.classList.remove("fa-check");
                regpass.setAttribute("style","display:block; color:red");
                 
                 validpassword=false;
        	
        		

        	}

        });

        let email=document.getElementById("email");
        email.addEventListener("blur",()=>{
        	let reg=/^([0-9a-zA-Z\_])+@(a-zA-z)+\.(a-z)+*$/;
        	let str=email.value;
        	if(reg.test(str)==true){
        		regemail.classList.remove("fa-times");
        		<!-- regemail.classList.add("fa-check"); -->

        		regemail.setAttribute("style","display:block; color:green");
        		validemail=true;
        		
        		
        	}else{
        		regemail.classList.add("fa-times");
        		regemail.classList.remove("fa-check");
                regemail.setAttribute("style","display:block; color:red");
                 
                 validemail=false;
        	
        	

        	}
        })
      