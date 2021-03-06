<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- for nav icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Document</title>
</head>
<body>


<div class="MaincontainerNav">

    
    <div class="logo"> < ERLANO <span class="iocolor">b.g</span> 
    </div>

    <nav>
    <input type="checkbox" id="check">

    <label for="check" class="checkbtn">
    
        <i class="fa fa-bars" style=" text-align:center; font-size:23px; text-align:center;"></i>

    </label>

    <ul>
    <li><a href="" class="Active">My project</a></li>
    <li><a href="container2">Objective</a></li>
    <li><a href="">Contact</a></li>
    <li><a href="">Category</a></li>
    </ul>
    </nav>
</div>

<style>
/* --------navbar css */
.Active{
   
    border-bottom:4px solid #FF00FF;
}
.checkbtn{
    float:right;
    display:none;
}
#check{
    display:none;
}

@media screen and (max-width: 600px){
    .checkbtn{
        display:block;
        margin-right:39px;
    }

ul{
    position:fixed;
    height:100vh;
    width:100%;
    background-color:white;
    top:50px;
    left:100%;
    transition:all .5s;
    text-align:center;
}

    nav ul li{
        display:block;
    }


    #check:checked ~  ul{
        left:0px;
    }
}




*{
    list-style: none;
    text-decoration: none;
    box-sizing: 0px;
    margin: 0px;
    padding: 0;
}

ul{
    line-height:50px;
    float:right;
    margin-right:30px;
}
ul li{
    margin:0px 10px  0px;
    display:inline-block;
    line-height:60px;
    
    
}

a{ 
    font-weight:bold;
    color:black;
    font-size:17px;
    
}

ul li a:hover{
 border-bottom:4px solid #FF00FF;
 transition: 2ms;
 padding:1px;
 
}

.MaincontainerNav{
    /* background-color:#990099; */
    background-color:white;
    line-height:50px;
    height:50px;
    position:fixed;
    width:100%;
    margin: 0px 1px 0px;
}
.logo{
    margin:0px 30px 0px;
    color:#FF00FF;
    font-weight:bold;
    font-size:24px;
    position: absolute;
}
.iocolor{
    color:black;
    font-size:26px;
}

</style>




    
<div class="container1">

    <div class="box1">
    
         <div class="slidercontainer1">
            
            <div class="caption1">
                 <h2 class ="mynametxt"> <span class="Hitxt">Hi !</span> BENEDICK ERLANO</h2>
                <P class="slidertxt"> GRADUATE BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY IN UNIVERSITY OF CALOOCAN CITY (UCC) 2017-2021.AND THIS IS MY 1ST PORTFOLIO</P>
            </div>

        
            <div class="btnlearn"> <button class="Btnlearn" id="btnlearn">Learn More</button> </div>

        </div>

    </div>
                    <div class="box2">  <img src="img/benedick.jpg" alt="" class="imgrightside">

                 </div>

</div>

<!-- for  box1 box 2 -->

<style>



.container1{
     height:100vh;
     max-width:100rem;
     margin: 0 auto;
     /* background-color:red;  */
     display:flex;
     flex-wrap:wrap;
     align-items:center;
     justify-content:space-around;
 }

.box1{
    text-align:center;
    height:200px;
    width:500px;
    margin:0px 10px 0px;
    /* border:1px solid black; */
    display:flex;
    line-height:20px;
    flex-wrap:wrap;
}

.box2{
    overflow:hidden;
    height:220px;
    width:190px;
    display:flex;
    justify-content:center;
    align-items:center;
    /* border-radius:100%; */
    margin:0px 10px 0px; 
    
    /* align-items:center; */
    
}

.imgrightside{
    margin-top:10px;    
    height: 180px;
    border-radius:101%;
    max-width:20rem;
    margin:0px 10px 0px;
    opacity: .9;
}
.imgrightside:hover{
    opacity: .5;
}

.Hitxt{
    color:#FF00FF;
}
.slidertxt{
    padding: 18px 4px ;
    font-size:15px;
}

.mynametxt{
    font-size:27px;
}
.Btnlearn{
    border:none;
    
    border:2px solid #FF00FF;
    background:white;
    /* background-color:#FF00FF; */
    padding:5px;
    color:black;
    cursor: pointer;
    border-radius:10%;
}                                                                                                                                                                         

#btnlearn:hover{
    transition: 1s;
    color: white;
    background-color:#FF00FF;

}
#btnlearn{
    
}

@media screen and (max-width:750px){
    .box1{
        margin:170px 10px 0px;
    }
}

</style>



<!-- -----------------------------------------------------body2 -->

<div class="container2">
    <div class="sample1txtcontainer">

        <div class="sampletxt">
            <div class="txtsample1"> MY <span  class="portfoliotxt">PORTFOLIO</span> </div>
        </div>

        <div class="twobox1">
            <div class="objectivecontainer">
                <div></div>

                <div class="objectivecontainertxt">
                    <H4 class="objectivetxt">OBJECTTIVE</H4>
                    <P class="objectivetxtparagraph">As Frontend developer web developer my objective is to grow <span class="exponentiallytxt"> exponentially </span>in terms of web designing in industry/company 
                                    that recognize the value of hardwork.And secure a responsible career opportunity to fully utilize my training and skill.</P>
                </div>
            </div>

            <div class="contacttxtbox1" >
                <div class="circleimage">  <img src="img/benedick.jpg" alt="" class="contactimg"></div>

                <div class="contacticoncontainer">
                    <div class="icon1"><i class='fas fa-phone-volume'></i></div>
                    <div class="icon1"><i class='fab fa-google'></i></div>
                    <!-- <div class="icon1"><i class='fab fa-facebook-f'></i></div> -->
                </div>


                <div class="contacticoncontainer1"> 
                    <div class="contacttxt1">+639658629717</div>
                    <div class="contacttxt1">lanlenlen78@gmail.com</div>
                    <!-- <div class="contacttxt1">+639658629717</div> -->
                </div>

                <div class="contacticoncontainer2"> 
                    <div class="fbicon"><i class='fab fa-facebook-f'></i></div>
                    <div class="fbtxt">Benedick Erlano</div>
                </div>


            </div>
        </div>

    </div>

</div>

<style>

.container2{
    
    height:100vh;
     max-width:100rem;
     margin: 0 auto;

}

.sampletxt{
    height:100px;
    max-width:100rem;
    display:flex;
    align-items:flex-end;
    justify-content:flex-start;
}

.txtsample1{    
    margin-left:117px;
    font-size:27px;
    border-width: 0px;
    border-bottom: 4px solid #FF00FF;
    font-weight:bold;
}
.portfoliotxt{
    color:#FF00FF;
}

.twobox1{
    height:100vh;
    max-width:100rem;
    display: flex;
    flex-wrap:wrap;
    align-items: center; 
    justify-content:space-evenly;
    background-color:white;
}
.objectivecontainer{
    height:300px;
    width:700px;
    /* border: 1px solid black; */
    margin:0px 10px 0px;
    background-color:white;
}


.contacttxtbox1{
    height:300px;
    width:300px;
    display: flex;
    flex-direction: column;
    align-items: center;
    border: 1px solid #FF00FF;
    flex-wrap: wrap;
    margin:0px 10px 0px;


    box-shadow: 0 18px 20px rgba(0,0,0,0.20),  0 10px 11px rgba(0,0,0,0.22);
    /* background-color:#FF00FF; */
}

.contacttxtbox1:hover
{
    height:300px;
    width:300px;
    border: 2px solid #FF00FF;
    box-shadow: 0 18px 20px rgba(0,0,0,0.20),  0 10px 11px rgba(0,0,0,0.22);
    
}
.objectivecontainertxt{
    margin:70px 5px 0px;

}

.objectivetxtparagraph{
    font-size:18px;
    padding:10px 0px 0px;
    margin:10px 0px 0px;
    line-height:28px;

}
.objectivetxt{
    font-size:20px
}

.exponentiallytxt{
    color:#FF00FF;
    cursor: pointer;
}
.exponentiallytxt:hover{
    color:DEEPPINK;
}
.circleimage{
    display: flex;
    align-items: center;
    justify-content: center;   
    height:99px;
    width:99px;
    overflow: hidden;
    border:5px solid white; 
    border-radius:100%;
    margin-top: -50px;
}

.contactimg{
    border-radius:100%;
    height:100px;
    width:100px;
    
}

.contacticoncontainer{
    margin: 20px  5px 0px;
    display: flex;
    align-items: flex-start;
    justify-content: space-around;
    height: 0 auto;
    max-width: 100vh;
}
.icon1{
    flex-direction:column;
    margin: 5px 60px 5px;
    color: #FF00FF;
    cursor: pointer;
    font-size: 25px;
    font-weight: bold;
}

.contacticoncontainer1{
    margin: 5px  5px 0px;
    display: flex;
    align-items: flex-start;
    justify-content: space-around;
    height: 0 auto;
    max-width: 100vh;
    background-color:white;
}

.contacttxt1{
    flex-direction:column;
    margin: 10px 10px 10px;
    color: black;
    font-size:15px;
    
}

.contacticoncontainer2{
    margin:20px 1px 0px;
    align-content: center;
    text-align: center;
    flex-direction: column;
}

.fbicon{
    color: #FF00FF;
    font-size: 25px;
    margin:1px;
    cursor: pointer;
}

.fbtxt{
    margin:14px 1px 0px;
    font-size: 15x;
}
@media screen and (max-width: 600px){

    .objectivecontainer{
        margin: 5px 5px 0px;
        display:flex;
 
        width:100%;
        align-items: center;
        justify-content: center;
        background-color: white;

    }
    .objectivecontainertxt{
        
        margin: 1px 20px -20px;

    }


    }

</style>

<!-- container 3 -->
<div class="extersionbg"></div>
<style>
    .extersionbg{
        height: 30vh;
        max-width: 100rem;
        
    }
</style>
<div class="container3">
    
<div class="whatido">
            <div class="whatidotxt"> What i <span  class="dotxt">do</span> </div>
        </div>

    <div class="boxcontainer1">
        <div class="designcontainer">
            <h3 class="designicon"><i class='fas fa-wrench' id="designicon"></i> <span class="buildPortfoliotxt">Build/Portfolio</span> </h3>
            <p class="designtxt">As Frontend developer web developer my objective is to grow exponentially in terms of web designing. This is my first portfolio i've done and i want to make more </p>
        </div>
        <div class="designcontainer">
        <h3 class="designicon"><i class='fas fa-tablet-alt' id="designicon"></i> <span class="buildPortfoliotxt">Mobile/Responsive</span> </h3>
            <p class="designtxt">As Frontend developer web developer my objective is to grow  exponentially in terms of web designing in industry/company 
                                    that recognize the value of hardwork.And secure a responsible career opportunity to fully utilize my training and skill.</p>
        </div>

    </div>

    
    <div class="boxcontainer2">
        <div class="designcontainer2">
        <h3 class="designicon"><i class='fas fa-edit' id="designicon"></i>  <span class="buildPortfoliotxt">Design</span> </h3>
            <p class="designtxt"> Designing a web interface  is one of my favorite activity. I like to explore and get inspired, and grow exponentially in terms of desingning.<p>
    
        </div>
        <div class="designcontainer2">
        <h3 class="designicon"><i class='fab fa-wpforms' id="designicon"></i><span class="buildPortfoliotxt">Development</span> </h3>
            <p class="designtxt">In terms of web design, spcially  the user interface which is need create user freindly. I create basic and readable web design interface which result a good respons from the user. </p>
    
        </div>
    </div>

<style>

.buildPortfoliotxt{
    font-size: 17px;
}
.dotxt{
    color:#FF00FF;
    border: none;

}.whatido{
    height:100px;
    max-width:100rem;
    display:flex;
    background-color:white;
    align-items:flex-end;
    justify-content:flex-start;
}

.whatidotxt{    
    margin-left:117px;
    font-size:20px;
    border-width: 0px;
    border-bottom: 4px solid #FF00FF;
    font-weight:bold;
}
    #designicon{
        color:#FF00FF;
        font-size: 30px;
        margin: 0px  10px 0px  3px;
    }
.container3{
    max-width: 100rem;
    height: 100vh;
    margin: 0 auto;
    background-color:white;
}
.boxcontainer1{
    flex-wrap: wrap;
    display: flex;
    align-items:center;
    justify-content: space-evenly;
    max-width: 100rem;
    height: 50vh;    
    background-color: white;

}
.designcontainer{
    height: 120px;
    width:35rem;
    background-color: white;

}

.boxcontainer2{
    flex-wrap: wrap;
    display: flex;
    align-items: flex-start;
    justify-content: space-evenly;
    max-width: 100rem;
    height: 50vh;
    background-color:white;

}
.designcontainer2{
    height: 120px;
    width:35rem;
    background-color: white;

}

.designtxt{
    font-size: 17px;
    margin: 10px 1px 2px  40px;
}
@media screen and (max-width:640px){

   
.designtxt{
    
    font-size: 13px;
    margin: 13px 1px 2px  26px;
} 

#designicon{
    font-size: 20px;
}
}
</style>


</body>
</html>