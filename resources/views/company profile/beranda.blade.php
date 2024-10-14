*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scrollbar-width: thin;
    scrollbar-color: #a3a3a3 #cccccc;
}

/* 
html ::-webkit-scrollbar-track{
    background: transparent;
}

html ::-webkit-scrollbar-thumb{
    background: rgb(255, 255, 255);
    border-radius: 10px;
}

html ::-webkit-scrollbar{
    width: 100%;
} */

/* font */
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


body {
    overflow-x: hidden;
}

/* Navbar start */
.awal {
  background-color: rgb(240, 18, 18);
  padding: 20px 3rem;
  font-family: "Poppins", sans-serif;
  position: relative;
  z-index: 999999 ;
  display: flex;
  justify-content: space-between;
  align-items: center;
} 

.logo {
  margin: 0 !important;
}

.logo img{
  width: 100%;
}

.list {
  width: 100%;
  height: fit-content;
  display: flex;
  align-items: center;
  justify-content: center;
}

.navbar-1945  {
  display: flex;
  gap: 2rem;
  text-decoration: none;
  justify-content: center;
  margin: 0 !important;
  height: 25px;
}

.aktif {
  border-bottom: 3px solid #0B192C; 
  padding-bottom: 5px; 
}

li {
  color: white;
  font-size: 20px;
  font-family: "Poppins", sans-serif;
  font-weight: 400;
}


ul a {
  text-decoration: none;
  z-index: 1;
}

ul li:hover{
  color: #172554;
}

.icon-navbar {
font-size: 15px;
display: none;
}

@media screen and (max-width: 750px) {
.navbar-1945 {
  position: absolute;
  top: 100%;
  right: 0;
  display: none;
  height: 300px;
  width: 100%;
  align-items: center;
  flex-direction: column;
  background: rgb(202, 35, 35);
  padding-block: 20px;
  padding-inline: 50px;
  transition: 0.5s;
}

  .navbar-1945.active{
    display: flex;
    border-top: 1px solid rgba(255, 255, 255,0.2);
}

.icon-navbar{ 
  display: block;
  cursor: pointer;
  }
}
/* navbar end */

/* home section stanurt */
#home {
    width: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 88%;
}

#home .content{
   padding-top: 210px;
   margin-left: 56px;
   position: relative;
}

#home .content h3{
    font-size: 45px;
    font-family: "Raleway", Sans-serif;
    font-weight: normal;
    color: rgb(255, 255, 255);
}

#home .content p{
    margin-top: 10px;
    font-family: 'Karla', sans-serif;
    font-optical-sizing: auto;
    font-weight: normal;
    font-size: 22px;
    color: white;
}

#btn{
    width: 150px;
    height: 36px;
    margin-top: 20px;
    background: rgb(240, 18, 18);
    border-radius: 7px;
    font-weight: bold;
    font-family: "Poppins", sans-serif;
    font-size: 17px;
    border: none;
    transition: 0.5s ease;
    cursor: pointer;
    color: white;
}

#btn:hover{
    background: rgb(255, 255, 255);
    color: rgb(13, 11, 11);
}
/* home section end */

/* keunggulan section start */
#keunggulan {
    background-color: rgb(255, 255, 255);
}
 
@media screen and(min-width:550px){
  #keunggulan h5.display-3{
    font-size: 65px;
  }
}
@media screen and(min-width:400px){
  #keunggulan h5.display-3{
    font-size: 45px;
  }
}
#keunggulan h6 {
  font-size: 19px;  
  font-weight: 70;
  font-family: 'Karla', sans-serif;
  color: black;  
} 

#keunggulan h5.display-3 {
  font-family: "Raleway", Sans-serif;
  font-size: 40px;
}

.keunggulan {
  display: flex;
}

.lingkaran{
    display: inline-block;
    border-radius: 50%;
    width: 150px;
    margin: auto;
    height: 150px;
    color: rgb(255, 255, 255);
    background-color: rgb(240, 18, 18);
}

.lingkaran i{
    position: relative;
    top: 33px;
    gap: 1rem;
}

.card-title {
  font-family: "Poppins", sans-serif;
  font-size: 17px;
  font-weight: 600;
  margin-top: 20px;
}

@media (max-width: 768px) {
  .pt-2.keunggulan {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
}
/* keunggulan section end */

/* media-partner section start */
#media-partner{
    background-color: rgb(255, 255, 255);
    font-size: 40px;
    font-family: "Raleway", Sans-serif;
}

#media-partner.display-3 {
  margin-top: 50px;
  font-size: 45px;
}
/* media-partner section end */

/* logo media-partner section start */
@keyframes slide {
    from {
      transform: translateX(0);
    }
    to {
      transform: translateX(-100%);
    }
  }

.logos {
    overflow: hidden;
    padding: 60px 0;
    background: white;
    white-space: nowrap;
    position: relative;
}

.logos-slide {
    display: inline-block;
    animation: 10s slide infinite linear;
  }
  
  .logos-slide img {
    height: 50px;
    margin: 0 50px;
  }
/* logo media-partner section end */

/* maps section start */
#maps {
  background-color: rgb(255, 255, 255);
    font-size: 35px;
    font-family: "Raleway", Sans-serif;
    color: #000;
}

#map {
  height: 60vh;
  width: 100%;
  border: 2px solid #555;
  border-radius: 8px;
}

.legend {
  margin-top: 20px;
  font-size: 17px;
}

.legend span {
  display: inline-block;
  width: 15px;
  height: 15px;
  margin-right: 5px;
  border-radius: 50%;
}

.legend-green {
  background-color: green;
}
/* maps section end */

/* footer section start */
footer {
    width: 100vw;
    bottom: 0;
    background: linear-gradient(to right, rgb(240, 18, 18), #7f1d1d) ;
    color: #fff;
    padding: 20px 0 20px;
    font-size: 19px;
    line-height: 1.5;
}

.row {
    width: 80%;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: space-between;
}

.col {
    flex-basis: 25%;
    padding: 10px;
}

.logo {
    width: 170px;
    margin-bottom: 0px;
}

.col h3 {
    width: fit-content;
    margin-bottom: 40px;
    position: relative;
}

.email-id {
    width: fit-content;
    border-bottom: 1px solid #ccc;
    margin: 20px 0;
}

ul li {
    list-style: none;
    margin-bottom: 12px;
}

ul li a {
    text-decoration: none;
    color: #fff;
}
  
  .footer-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  
  .footer-section {
    flex: 1;
    padding: 20px;
    min-width: 250px;
  }
  
  .footer-logo {
    width: 150px;
    margin-bottom: 20px;
  }
  
  .about p {
    margin-bottom: 20px;
  }
  
  .contact span {
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-bottom: 10px;
    gap: 10px;
  }

  .contact>span:nth-child(2)>div{
    transform: translateY(-2px);
  }
  
  .socials a {
    display: inline-block;
    width: 35px;
    height: 35px;
    background: white;
    color: black;
    border-radius: 50%;
    text-align: center;
    line-height: 35px;
    margin-right: 10px;
    transition: all 0.3s;
    margin-top: 20px;
  }
  
  .socials a:hover {
    background: #fff;
    color: #ef4444;
  }
  
  .links ul {
    list-style: none;
    padding: 0;
  }
  
  .links ul li {
    margin-bottom: 10px;
  }
  
  .links ul li a {
    color: #fff;
    text-decoration: none;
    transition: all 0.3s;
  }
  
  .links ul li a:hover {
    color: #ffd900;
    padding-left: 5px;
  }
  
  .contact-form .contact-input {
    background: rgb(255, 255, 255); 
    color: #d6c2c2;
    margin-bottom: 10px;
    line-height: 1.5rem;
    padding: 0.9rem 1.4rem;
    border: none;
    width: 100%;
  }

  .btn-warning {
    font-weight: bold; /* Menggunakan bold */
    font-family: "Poppins", sans-serif;
    font-size: 17px;
    color: #000;
    border: none;
    padding: 20px 20px;
    cursor: pointer;
    transition: all 0.3s;
}

  .btn-warning:hover {
    background:#fff;
  }
  
  .footer-bottom {
    text-align: center;
    padding-top: 20px;
    font-size: 15px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
  }
  
  @media screen and (max-width: 768px) {
    .footer-section {
      flex-basis: 100%;
    }
  }
/* footer section end */
