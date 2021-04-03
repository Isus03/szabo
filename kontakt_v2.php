<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONTAKT</title>
    <ul>
        <b>
        <li><a href="default.asp">Szabo.d.o.o</a></li>
        </b>
      </ul>
    
    






      
    <b>  
    <div class="row" id="title">          
        Zahtjev za ponudu
      </div>
      </b>
    <style>
        * {
  box-sizing: border-box;
}

body {
  background-image: url(slika123.jpg);
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

@media only screen and (max-width: 600px) {
  body {
    background-image: url(slika123.jpg);
    background-attachment: fixed;
  }
}


@media only screen and (max-width: 1000px) {
  .col25 {
    font-size: 15px;
  }
}


          .navbar {
              text-decoration: none;
              
          }

            ul {
         list-style-type: none;
         margin: 0;
         padding: 0;
         overflow: hidden;
         background-color:transparent;
         border-radius: 20px;
         float: right;
        

  
              
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */





#title {
  font-size: 30px;
  margin-bottom: 15px;
  margin-top: 100px;
  background-color: rgba(204, 204, 204, 0.445);
  border-radius: 12px;
  border: 1px;
  font-family: Arial, Helvetica, sans-serif;
  display: inline-block;
  padding: 10px;
  

}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  border-color: rgb(209, 113, 49);
               
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: rgb(121, 60, 20);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: rgb(167, 83, 28);
}

.container {
  border-radius: 5px;
  background-color: #f2f2f259;
  padding: 100px;
  padding-bottom: 150px;
  
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
  font-size: 20px;
  color: rgb(0, 0, 0);
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}


#row1 {
  margin-top: 100px;
}

@media screen and (max-width: 600px) {
  #row1 {
    margin-top: 150px;
  }
}





/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 1700px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
   
   
 


   
   
   
   
   
   
   
   </style>
</head>
<body>


<script>




    
</script>













    
    <div class="container">
        <form action="config.php">
          <div class="row">
            <div class="col-25">
                <b>
              <label for="Podaci o poslu">Podaci o poslu</label>
              </b>
              
            </div>
            <div class="col-75">
                <select onchange="$('input[name=categoryId]').val(this.value);checkDuplicates();loadTaskData(this.value);">
                    <option value="-1">Izaberi vrstu posla...</option>
                    <option value="211">Adaptacija kuće</option>
                    <option value="210">Adaptacija kupaonice</option>
                    <option value="209">Adaptacija stana</option>
                    <option value="181">Hidroizolacija temelja, podruma</option>
                    <option value="208">Uređenje potkrovlja</option>
                    <option value="182">Hidroizolacija ravnog &nbsp;krova</option>
                    <option value="35">Soboslikarski radovi</option>
                   </select>
            </div>
          </div>
          
          
          
          
          
          
          
          
          <div class="row">
            <div class="col-25">
                <b>
              <label for="Podaci o poslu">Podaci o poslu</label>
                </b>
            </div>
            <div class="col-75">
              <input type="text" id="lname" name="lastname" placeholder="Ukratko,sto trebate (5 riječi)?">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
                <b>
              <label for="Upišite okvirnu količinu ili kvadraturu: ">Upišite okvirnu količinu ili kvadraturu: </label>
              </b>
            </div>
            <div class="col-75">
            <input type="text" id="container5" name="Kvadratura" placeholder="kvadratura u m2" >
            </div>
          </div>
          <div class="row">
            <div class="col-25">
                <b>
              <label for="Kada želite početi s izvedbom? Izaberi...">Kada želite početi s izvedbom? Izaberi...</label> 
            </b>
            </div>
            <div class="col-75">
                <select onchange="$('input[name=categoryId]').val(this.value);checkDuplicates();loadTaskData(this.value);">
                    <option value="-1">Izaberi vrstu posla...</option>
                    <option value="211">Odmah</option>
                    <option value="210">do 1 mjeseca</option>
                    <option value="209">do 1-3 mjeseca</option>
                    <option value="181">Više od 6 mjeseca</option>
                    <option value="208">Zanima me samo okvirna cijena</option>
                   </select>
            </div>
          </div>
        <div class="row"></div>
          <div class="col-25">
              <b>
            <label for="Upišite lokaciju izvedbe radova:">Upišite lokaciju izvedbe radova:</label>
              </b>
          </div>
          <div class="col-75">
        <input type="text" id="container6" name=lokacija placeholder="Poštanski broj ili grad">  
        </div>
          


          
         
         
         <div class="row" id="row1">
         </div>
          <div class="col-25" id="col25">
            <b>
           <label for="ime">Ime</label>
           </b>
          </div>
          <div class="col-75">
            <input type="text" id="container7" name="I" style="text-align: left; " placeholder="Unesite Ime"> 
          </div>
      


        <div class="row">
        </div>
         <div class="col-25">
           <b>
          <label for="Prezime">Prezime</label>
          </b>
         </div>
         <div class="col-75">
           <input type="text" id="container8" name="P" placeholder="Unesite prezime"> 
         </div>
       </form>




       <div class="row">
         </div>
          <div class="col-25">
            <b>
           <label for="Email">Email</label>
           </b>
          </div>
          <div class="col-75">
            <input type="text" id="container9" name="E" placeholder="Vaš email"> 
          </div>
        


          <div class="row">
            <input type="submit" value="Submit" style="text-align: center; margin-top:20px;" >
          </div>



          


          <script>
            window.onscroll = function() {myFunction()};
            
            var navbar = document.getElementById("navbar");
            var sticky = navbar.offsetTop;
            
            function myFunction() {
              if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
              } else {
                navbar.classList.remove("sticky");
              }
            }
            </script>
      






















      </div>
</body>
</html>