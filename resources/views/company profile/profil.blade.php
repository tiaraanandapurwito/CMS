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
    border-bottom: 3px solid #433878; 
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
  
  /* tentang kami start */
  #tentang-kami {
    width: 100%;
    background-color: white; 
    padding: 30px 0px;
  }
  
  #tentang-kami .container {
    padding-top: 20px;
  }
  
  .heading {
    text-align: center;
    font-family: "Raleway", Sans-serif;
    margin-bottom: 30px;
    color: #000;
    font-size: 40px; 
  }
  
  .bungkus {
    display: flex;
    flex-wrap: nowrap; 
    justify-content: center;
    align-items: center;
    text-align: center;
    gap: 25px; 
  }
  
  .bungkus img{
    width: 50%;
  }
  
  #tentang-kami .col-md-5 {
    margin:0 auto;
  }
  #tentang-kami .card {
    border-radius: 10px;
    width: 100%;
    max-width: 600px; 
    overflow: hidden; 
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1); 
  }
  
  .ratakanan {
    text-align: start;
    font-family: 'Karla', sans-serif;
    font-size: 17px;
    line-height: 1.6; 
    /* max-width: 500px;   */
    margin: 0 45px;
    color: #000;
  }
  
    @media screen and (max-width: 768px){
      #tentang-kami .bungkus img {
        padding:0 5rem;
      }
  
      .bungkus {
        flex-wrap: wrap;
      }
      .bungkus img {
        width: 100%;
      }
    }
  @media (max-width: 640px) {
    .bungkus {
      flex-direction: column; 
      text-align: center;
    }
    
    #tentang-kami {
      padding: 2rem;
    }
  
    #tentang-kami .bungkus img {
      padding: 0;
    }
    
    #tentang-kami .card {
      width: 90%; 
    }
    
    .ratakanan {
      margin: 0;
    }
  }
  
  /* tentang kami end */
  
  /* visi misi start */
  #visi-misi {
    background-color: #ffffff; 
  }
  
  #visi-misi h2 {
    font-size: 35px;
    color: #000000;
    font-weight: 500;
    text-transform: uppercase;
    font-family: "Raleway", Sans-serif;
    padding-top: 2rem;
  }
  
  #visi-misi .card {
    border: none;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }
  
  .card-text.text-center {
    padding-top: 20px;
    font-family: "Poppins", sans-serif;
  }
  
  #visi-misi .card:hover {
    transform: translateY(-10px);
  }
  
  #visi-misi .card-body {
    padding: 30px;
  }
  
  #visi-misi .icon-box {
    font-size: 3rem;
    color: #d50202;
    margin-bottom: 20px;
  }
  
  #visi-misi .card-title {
    font-size: 1.8rem;
    color: #000000;
    font-weight: 600;
  }
  
  #visi-misi .card-text, 
  #visi-misi .mission-list {
    font-size: 1.1rem;
    color: #000000;
    line-height: 1.6;
  }
  
  #visi-misi .mission-list {
    padding-left: 20px;
    margin-top: 20px;
  }
  
  #visi-misi .mission-list li {
    margin-bottom: 10px;
    position: relative;
    padding-left: 20px;
  }
  
  #visi-misi .mission-list li:before {
    content: "\2022";
    color: #000000;
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 0;
  }
  
  .box-visimisi {
    padding: 0 2rem;
    display: flex;
    /* flex-wrap: wrap; */
    gap: 24px;
    justify-content: center;
    align-items: center;
  }
  
  #visi-misi .box-visimisi .card-visimisi {
    width: 50%;
  }
  
  .mission-list > li {
    color: black;
  }
  
  @media screen and (max-width: 768px){
    .box-visimisi {
      flex-wrap: wrap;
    }
  
    .card-visimisi {
      width: 100%;
    }
  
    .box-visimisi {
      padding: 0 2rem;
    }
  
    #visi-misi .card {
      width: 100% !important;
    }
  }
  /* visi misi end */
  
  /* testimoni start */
  .testimoni {
    background-color: white;
    padding: 60px;
  }
  
  .section-header .title {
    font-size: 27px;
    font-weight: 500;
    font-family: "Raleway", Sans-serif;
    text-align: center;
    margin-bottom: 30px;
  
  }
  
  .testimoni-content {
    width: 100%;
    margin: 0;
  }
  
  .swiper-wrapper {
    display: flex;
  }
  
  .testimoni-items {
    background: #fff;
    padding: 20px;
    margin: 10px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
  }
  
  .testimoni-items img {
    border-radius: 50%;
    width: 80px;
    height: 80px;
    object-fit: cover;
    margin-bottom: 10px;
  }
  
  .text-box {
    margin-bottom: 10px;
  }
  
  .text-box .name {
    font-size: 18px;
    font-weight: bold;
    font-family: "Poppins", sans-serif;
  }
  
  .text-box .job {
    font-size: 14px;
    color: #000000;
    font-family: "Poppins", sans-serif;
  }
  
  .testimoni-items p {
    font-size: 16px;
    color: #555;
    line-height: 1.5;
    margin-bottom: 15px;
    font-family: "Poppins", sans-serif;
  }
  
  .rating i {
    color: #f39c12;
  }
  /* testimoni end */
  
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
    