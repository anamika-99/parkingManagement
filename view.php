<!DOCTYPE html>
<html>
<head>
   <title>Parking Lot</title>
</head>
<body>
<style>
   body
   {
       background: #4F4F4F;
       margin: 0 auto;
       padding: 0;
   }
   p{
      margin-left:20px;
   }
   .container
   {
      
       width: 100%;
       margin-left: 20px;
       display: -webkit-box;
       display: -ms-flexbox;
       display: flex;
       -ms-flex-wrap: wrap;
       flex-wrap: wrap;
       padding-top: 35px;
   }
   .container .col-6
   {
       -webkit-box-flex: 0;
       -ms-flex: 0 0 40%;
       flex: 0 0 40%;
       max-width: 40%;
       position: relative;
       margin-bottom: 50px;
       padding: 35px;
   }
   .container .col-6 .col
   {
       border-left: 2px solid #fff;
       padding: 15px;
       position: relative;
       min-height: 45px;
       height: 100%;
       max-height: 45px;
       width: 100%;
       text-align: center;
   }
   .container .col-6 .grids
   {
       display: flex;
       flex-direction: row;
       flex-wrap: nowrap;
       justify-content: center;
       align-items: stretch;
       align-content: stretch;

   }
   .container .col-6 .grids .col:after
   {
       content: "";
       height: 2px;
       width: 100%;
       background: #fff;
       position: absolute;
       display: block;
       bottom: 0;
       left: 0;
       right: 30;
   }
   .container .col-6 .grids:last-child .col:after
   {
       content: "";
       display: none;
   }
   .container .col-6 .col:last-child
   {
       border-right: 2px solid #fff;
       
   }
   .menu-btn {
   background-color: #7e32d4;
   color: white;
   padding: 12px;
   font-size: 15px;
   font-weight: bolder;
   font-family: 'Segoe UI';
   border: none;
}

 .menu-btn:hover .dropdown-menu {
   position: relative;
   display: inline-block;
} 
  .dropdown-menu .menu-content {
   display: none;
   position: absolute;
   background-color: #017575;
   min-width: 160px;
   z-index: 1;
}
.links {
   color: rgb(255, 255, 255);
   padding: 12px 16px;
   text-decoration: none;
   display: block;
   font-size: 18px;
   font-weight: bold;
   border-bottom: 1px solid black;
}
.links:hover {
   background-color: rgb(8, 107, 46);
}
.dropdown-menu:hover .menu-btn {
   background-color: #3e8e41;
}
   

   @media only screen and (max-width: 800px)
   {
       .container .col-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            padding: 10px;
       }
    } 
   
  
</style>
<p style="color:white;"> Click on Slot1</p><br>

<div class="container">

<div class="col-6">
<div class="grids" style="">
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot1 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot2 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot3 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot4 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot5 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
</div>
<div class="grids" >
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot6 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot7 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot8 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot9 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot10 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
</div>
</div>

<div class="col-6">
<div class="grids" style="">
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot11 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot12 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot13 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
  
   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot14 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot15 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
  
   </div>
</div>
<div class="grids" style="">
   <div class="col">   <div class="dropdown-menu">
<button class="menu-btn">Slot16 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot17 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

  
   </div>
   <div class="col">   <div class="dropdown-menu">
<button class="menu-btn">Slot18 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

  
   </div>
   <div class="col">  <div class="dropdown-menu">
<button class="menu-btn">Slot19 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

  
   </div>
   <div class="col">   <div class="dropdown-menu">
<button class="menu-btn">Slot20 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

  
   </div>
</div>
</div>

<div class="col-6">
<div class="grids" style="">
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot21 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
       
   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot22 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
   <div class="col">  <div class="dropdown-menu">
<button class="menu-btn">Slot23 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot24 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot25 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
</div>
<div class="grids" style="">
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot26 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot27 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot28 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

  
   </div>
   <div class="col">   <div class="dropdown-menu">
<button class="menu-btn">Slot29</button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot30</button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

  
   </div>
</div>
</div>

<div class="col-6">
<div class="grids" style="">
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot31 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot32 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot33 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot34 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot35 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
</div>
<div class="grids" style="">
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot36 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot37 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot38 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot39 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot40 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
</div>
</div>
<div class="col-6">
<div class="grids"  style="align:center">
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot41 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot42 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot43 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
  
   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot44 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot45 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
  
   </div>
</div>
<div class="grids" style="align:center">
   <div class="col">   <div class="dropdown-menu">
<button class="menu-btn">Slot46 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot47 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

  
   </div>
   <div class="col">   <div class="dropdown-menu">
<button class="menu-btn">Slot48 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

  
   </div>
   <div class="col">  <div class="dropdown-menu">
<button class="menu-btn">Slot49 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

  
   </div>
   <div class="col">   <div class="dropdown-menu">
<button class="menu-btn">Slot50 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
</div>
</div>
</div>
<div class="col-6">
<div class="grids" style="">
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot51 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
       
   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot52 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
   <div class="col">  <div class="dropdown-menu">
<button class="menu-btn">Slot53 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot54 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot55 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
</div>
<div class="grids" style="">
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot56 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot57 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>
   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot58 </button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

  
   </div>
   <div class="col">   <div class="dropdown-menu">
<button class="menu-btn">Slot59</button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

   </div>
   <div class="col">
   <div class="dropdown-menu">
<button class="menu-btn">Slot60</button>
<div class="menu-content">
<a class="links" href="add.php">Book Slot</a>
<a class="links" href="free.php">Free Slot</a>
   </div>
   </div>

  
   </div>
</div>
</div>
</div>


<script>
let dropdownBtn = document.querySelector('.menu-btn');
let menuContent = document.querySelector('.menu-content');
dropdownBtn.addEventListener('click',()=>{
   if(menuContent.style.display===""){
      menuContent.style.display="block";
   } else {
      menuContent.style.display="";
   }
})
</script>
</body>
</html>

