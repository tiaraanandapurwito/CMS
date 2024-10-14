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
    border-bottom: 3px solid #006BFF; 
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
  
  /* paket start*/
  #layanan {
    font-family: "Raleway", Sans-serif;
    font-size: 34px;
  }
  
  #jenis {
    font-family: 'Karla', sans-serif;
    font-size: 18px;
  }
  
  #paket-section {
    padding: 60px 0;
    background-color: white;
  }
  
  #paket-section .container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 20px;
  }
  
  #paket-section .row {
    display: flex;
    justify-content: center;
    align-items: stretch;
    flex-wrap: nowrap;
    gap: 20px;
    margin: 0 auto;
  }
  
  #paket-section .col-lg-3 {
    flex: 1;
    min-width: 0;
    max-width: 25%;
  }
  
  .paket-card {
    height: 100%;
    display: flex;
    flex-direction: column;
    background-color: #ffffff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
  }
  
  .paket-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
  }
  
  .paket-card .card-header {
    padding: 15px 10px;
    text-align: center;
    font-size: 1.1rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: #ffffff;
  }
  
  .paket-card .card-body {
    padding: 20px 15px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  
  .card-price {
    font-size: 1.8rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 15px;
    text-align: center;
  }
  
  .card-price span {
    font-size: 0.9rem;
    font-weight: 400;
    color: #7f8c8d;
  }
  
  .paket-card .list-group {
    margin-bottom: 15px;
    flex-grow: 1;
  }
  
  .paket-card .list-group-item {
    border: none;
    padding: 6px 0;
    font-size: 0.85rem;
    color: black;
    background-color: transparent;
    font-family: 'Karla', sans-serif;
  }
  
  .paket-card .btn {
    width: 100%;
    padding: 10px;
    font-size: 0.9rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    border-radius: 50px;
    transition: all 0.3s ease;
    border: none;
    color: #ffffff;
  }
  
  /* Color schemes for different packages */
  .paket-card:nth-child(1) .card-header, .paket-card:nth-child(1) .btn { background-color: #3498db; }
  .paket-card:nth-child(2) .card-header, .paket-card:nth-child(2) .btn { background-color: #2ecc71; }
  .paket-card:nth-child(3) .card-header, .paket-card:nth-child(3) .btn { background-color: #e74c3c; }
  .paket-card:nth-child(4) .card-header, .paket-card:nth-child(4) .btn { background-color: #f39c12; }
  
  .paket-card .btn:hover {
    opacity: 0.9;
  }
  
  @media (max-width: 1200px) {
    #paket-section .row {
      flex-wrap: wrap;
    }
    #paket-section .col-lg-3 {
      flex: 0 0 calc(50% - 20px);
      max-width: calc(50% - 20px);
    }
  }
  
  @media (max-width: 768px) {
    #paket-section .col-lg-3 {
      flex: 0 0 100%;
      max-width: 100%;
    }
  }
  /* paket end */
  
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
  