
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Dropdowns within a Navbar</title>
<link rel="shortcut icon" href="DSC_0209.JPG">

<link rel = "stylesheet" href = "style.css">
<link rel="stylesheet" href="bootstrap-3.2.0-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-theme.min.css">
<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<script src="bootstrap-3.2.0-dist/js/jquery-1.11.1.js"></script>
<script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="bootstrap-3.2.0-dist/js/jquery-1.11.1.js"></script>
  <script src="bootstrap-3.2.0-dist/js/jquery_ui.js"></script>
  <script src = "../Readmore/readmore.js"></script>
  <script src="../Readmore/readmore.min.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <!--<a href = "images/bck.jpg"--</a>-->
  <style>
      .bs-example
      {
          margin:20px;
      }
      #car
      {
                    background-image:url('images/bck4.jpg ');
                    width:300px;
                    height:100px;
                  bo
                    padding:15px;
                   
                     margin-left:963px;
                     margin-top:120px;
          
      }
      #mar
      {
          width:300px;
          height:705px;
          background:green;
          padding:15px;
          
         /*border-radius:5px;*/
        
          background-image:url('images/bck14.jpg ');
          /*overflow-x: scroll;*/
          overflow-y: scroll;
          margin-left:963px;
          
          margin-top:-5px;
          margin-bottom:-20px;
          
          
      }
      
      #video
      {
          margin-left:300px;
      }
      video controls preload
      {
          width: 200px;
      }
      #center
      {   margin:auto;
          display:block;
          padding:10px;
      }
      #font
      {
          
      }
      /*p:hover
      {
         /* font-size:20px;
          color: red;
          background: yellow;
          height: 25px;
      }*/
      b
      {
          font-family:"Times New Roman", Times, serif;
          
      }
    /* table-hover.active tr td:hover
      {
          background: grey;
      }*/
     
     #slider {
    height:296px;
    overflow:hidden;
    width:822px;
    position:absolute;
    left:50%;
    margin-left:-211px;
    top:87px;
    z-index:20;
}
#slider img{
position: absolute;
    top: 0;
    display: none;
}
#slider-back {
    position:absolute;
    left:50%;
    margin-left:-411px;
    height:296px;
    z-index:29;
    top:87px;
    width:822px;
    background: url("/test/backimage.png") no-repeat scroll 0px 0px transparent;
  
}

  </style>
  <script>
      
  </script>
  <body>
    

<!-- 4:3 aspect ratio -->

      
      
      
<div class="bs-example">
    <nav id="myNavbar" class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" id="change" ><b id = "jel"><span class="glyphicon glyphicon-home">Rishanth's</span></b></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#mymodal" id = "change" >Rankings</a></li>
                    <li><a href="sop.php" id = "change" >Sop</a></li>
                    <li><a href = "#" id="change" class="revenge">Documentation</a></li>
                    <li><a hreff = "#" id = "change">ProfileEvaluator</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle" id= "change">F-1 visa <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" id="change">Visa slots</a></li>
                            <li><a href="#" id="change">Visa experiences</a></li>
                            
                            
                         </ul>
                    </li>
                </ul>
                    <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default btn-success "><span class="glyphicon glyphicon-search">Search</span></button>
      </form>
                <!--<ul class="nav navbar-nav navbar-left">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle" id="change">Profile Evaluator <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" id="change">Action</a></li>
                            <li><a href="#" id="change">Another action</a></li>
                            <li class="divider"></li>
                            <li><a href="#" id="change">Settings</a></li>
                        </ul>
                    </li>
                </ul>-->
   <div id = "logout">
   <a href="login.html" class="btn btn-danger btn-large"><span class="glyphicon glyphicon-off"></span> Logout</a>
   </div>

            </div><!-- /.navbar-collapse -->
        </div>
        
    </nav>
    
</div>

<div>
    
</div>


<div id="slider"> <a href="#">
 <a href="#"><img src="images/application.jpg" id="image2" height = "400" width="500"/></a>
 <a href="#"><img src="images/reco.jpg" id="image3" height = "400" width="500" /></a>
 <a href = "#"><img src = "images/GRE.jpg" id = "image1" height = "400" width = "500"/></a>
<a href = "#"><img src = "images/toefl.jpg" id = "image4" height = "400" width = "500"/></a>
<a href = "#"><img src = "images/Transcript.jpg" id = "image5" height = "400" width = "500"/></a>
<a href = "#"><img src = "images/10th.jpg" id = "image6" height = "400" width = "500"/></a>
<a href = "#"><img src = "images/12th.jpg" id = "image7" height = "400" width = "500"/></a>
<a href = "#"><img src = "images/bank.jpg" id = "image8" height = "400" width = "500"/></a>
<a href = "#"><img src = "images/job.jpg" id = "image9" height = "300" width = "500"/></a>
<a href = "#"><img src = "images/sopp.jpg" id = "image10" height = "300" width = "500"/></a>
<a href = "#"><img src = "images/passport.jpg" id = "image11" height = "300" width = "500"/></a>
<a href = "#"><img src = "images/extra.jpg" id = "image12" height = "300" width = "500"/></a>







</div>
<div id="slider-back"></div>


<script>
 $(document).ready(function () {

     var imgs = $('#slider > a > img');
     var z = 0;
     var previousImageId = "";

     $(imgs[0]).show();

     function loop(ev) {
         $(imgs[z]).slideUp("slow");
         check = z != imgs.length - 1 ? z++ : z = 0;         
         $(imgs[z]).slideDown("slow");
         setTimeout(loop, 2500);         
     }
     loop();
 });
    
</script>

  
<div id = "lette1">
  <h3 ><font size=5px color="black"><b><i><p id = "lor">Letter of Recommendation(Head of Department)</p></i></b></font></h3>
  <div>
  <p align="justify" id = "ccc">
 As the Head Of Department (HOD) for Information Technology, it gives me great pleasure to recommend
  __________for pursuing his higher studies in your esteemed institution. He is one of the most promising students
   I have come across. 

           I have known him since _______ 
           and taught him Formal Language & Finite Automata Theory, 
           Design and Analysis of Algorithms, Compiler Design, Object Oriented Analysis
            & Design and found him to be a student who is endowed with the rare traits of a strong knowledge 
            
            of the fundamentals and the ability to visualize a problem in a panoramic view and applies the concepts. He has learnt with ease and thereby emerges as a successful student among his classmates. He has consistently performed well and stands within the top 10 in the class of 66 and I believe that he has a high potential for success in graduate school. ______________had been extremely active as a student volunteer in the Organizing of Techfleet’09 National conference conducted at our Institute. 

        During my interaction with him, I found him to be attentive, intelligent and enthusiastic learner. He is sincere in his academics and was always eager to come up with novel methods to solve problems. Three years of interaction has been an ample time for me to note his sharp analytical and mathematical skills coupled with an excellent grasp of the concepts.

      He has good imagination for planning to study and determination to carry it out. His excellent command over the subject will definitely suit for education and research. He is a student who will work very hard towards the fulfillment of any responsibility he undertakes. He bears excellent character and conduct and is simple and energetic with initiatives and drive.

        I am fully confident that he will prove himself worth enough at your institution and fulfill all the requirements that expected from a prospective student. He has the capacity to work effectively and efficiently in a group as well as alone. I therefore, recommended him enthusiastically for graduate studies in your university with all the necessary aid that he deserves. I am certain that he will keep up to his potential and bring laurels to your institution .
        I wish him all the success in his future endeavors. 
</p>
<p id = "ccc">
    
    Please contact me for any further information.
</p>
<p id = "vcc">
    Yours sincerely
</p>
</div>
<h3 ><font size=5px color="black"><b><i><p id = "lor">Letter of Recommendation(Professor)</p></i></b></font></h3>
  <div>
  <p align="justify">

<p align="justify" id = "ccc"> 
<b>ON THE COLLEGE OR PROFESSOR’S LETTER HEAD</b>
</p>
<p align="justify" id = "ccc">
    <b> 
Letter of Recommendation 
</b>
</p>
<p align="justify" id = "ccc"> 
It is a pleasure to write a letter of recommendation for Miss. Annie David I have 
tutored her for two years, where I taught her Microprocessor based system 
Design in III rd year and Modern Communications in the Final year. Through my 
observation, I would like to say that she is attentive, studious and articulate. She 
always has a positive attitude towards study. 
</p>
<p align="justify" id = "ccc"> 
Annie is hard working student. Her assignments have been neat and precise to 
the points. Given a task she is able to complete it within the stipulated period. 
She has never given one an opportunity to rebuke her for anything. 
</p>
<p align="justify" id = "ccc"> 
Although timid and placid, her friendly and optimistic attitude, always ready to 
lend a helping hand towards her friends in times of difficulties makes her popular. 
She is always attentive to whatever has been taught in the class. She is always 
well prepared with her course work. 
</p>
<p align="justify" id = "ccc"> 
Annie had presented a very good seminar on ‘BEOWULF IN 
SUPERCOMPUTING’ during her final semester in B.Tech. She presented it with 
confidence and in a lucid manner. I graded her 46/50. Her proficiency in her 
subjects and English shows that she has the potential to be a good teacher. She 
had also presented a project titled ‘CHAT SERVER’ during B.TECH using HTML, 
JAVA SERVLETS/APPLETS in Windows NT and MS Access as back-end. She 
also had a very good knowledge in computer. 
</p>
<p align="justify" id = "ccc"> 
I have a strong opinion that she has incorporated the right aptitude to do well in 
Graduate studies and hence strongly recommend her for an admission as well as 
all the necessary financial assistantship. 
</p>
 
<p align="justify" id = "ccc"><b>I wish her grand success in all her future endeavors. 
</b></p>
<p align="justify" id = "jill">
Sincerely, 
</p>
<p align="justify" id = "jack"> 
Prof. Umesh Raj. 
</p>
</p>
</div>
<h3 ><font size=5px color="black"><b><i><p id = "lor">Letter of Recommendation(Team Lead)</p></i></b></font></h3>
  <div>
<p align="justify" id = "ccc">
I understand that Ms. Ruchi Tengse is applying to your Masters Program in Computer Science.
 As the Lead of Project Management in ZEDO Inc, I have had numerous opportunities to interact with and 
 observe her in the past two years. I find Ms. Tengse to be a talented software engineer.
 I would like to offer evaluation of her potential for your consideration.
</p>
<p align="justify" id = "ccc">  
Ms. Tengse's selection in ZEDO Inc was based on a written aptitude test, 
subsequently a technical interview. In addition to her basic aptitude, I was impressed by her proficiency
 in Software Engineering, which she had developed on her own inventiveness. 
</p>
<p align="justify" id = "ccc">  
Ms. Tengse was of great help in software projects of ZEDO Inc, thanks to her
 efficiency and knowledge of Computer Science. She also made her mark in learning databases 
 like PostgreSQL and other programming languages like Adobe Flex and PHP. Her strong concepts
  of Mathematics help her to develop a logical thinking in technical projects.
</p>
<p align="justify" id = "ccc">
Based on her expertise she is involved in discussions regarding groundwork of the scope
 documents and finalization of design of the software project. From the feedback of clients, 
 I can say that by asset of her technical familiarity and communication skills, she handles the 
 tasks assigned to her very professionally.
</p>
<p align="justify" id = "ccc">
In her work, Ms. Ruchi Tengse has shown herself to be a very bright and diligent young software engineer,
 one who is able to take hold of new concepts very speedily. 
 Her performance is brilliant in all the assignments designated to her. 
 Her most remarkable quality is the dedication she shows in whatever she does.
</p>
<p align="justify" id = "ccc">
Ms. Ruchi Tengse also acts as an effectual channel of communication between her team and senior management. She has ability to converse evidently, accurately and this has proved to be a great asset in the speedy implementation of her work.

Considering her potential, talent and eagerness to learn, I feel that Ms. Ruchi Tengse is a vigorous candidate to pursue higher studies in computer science. I strongly support her application for admission in <University> and also request you to consider her for financial assistance. I wish her success in her future endeavors. In case of any query or confirmation feel free to contact me any time.
</p>
</div>
<h3 ><font size=5px color="black"><b><i><p id = "lor">Letter of Recommendation(Electrical Engineering)</p></i></b></font></h3>
<div>
  <div id = "adjustments">
  <b><p align="center"><u>LETTER OF RECOMMENDATION</u></p></b>
<br><b>Professor name/Title,</b></b><br>
<br><b><p id = "up">College Name.</p></b></br> 
</div>
<div id = "down">
<p align="justify" id = "ccc">
It gives me great pleasure to introduce MR. XXXXX whom I know for the past few years as student at XXXXX college. 
During this period, I was his teacher for Radar Engineering. 
</p>
<p align="justify" id = "ccc">
In this long association I had ample opportunity to assess his professional and personal abilities and
 I must say Mr. XXXXX has shown excellent interest in all his scholastic pursuits. 
 He is a person with very good grasping and analyzing capabilities.
  He designed the hardware circuit for his final year project named 
  MICRO CONTROLLER BASED REMOTE SWITCHING USING A TELEPHONE LINE.
</p>
<p align="justify" id = "ccc">
Other than his academics he is also one of the best student in the extra-curricular activities. 
He is successful in implementing mini-projects during his second year. He also represented the college in various inter college competitions. He has very good Oratorical powers and is excellent manager, which was instrumental in his arranging many social parties like the Fresher Day in the second year and the Farewell Party in the final year. 

As a student he was dedicated to his assignments given to him and finished them on time. 
Perseverance, sincerity and thirst for knowledge have always been the hallmark of his personality. 
He has also taken seminars in his college days. Proficiency in English through knowledge of the subject coupled 
with the style of his teaching in a clear and lucid manner made his seminars very interesting and informative. 
</p>
<p align="justify" id = "ccc">
Mr. XXXXX, is a reliable and disciplined person. Further he has the capacity of adapting himself to the new and challenging environment. With these strengths and his co-operative nature, I firmly believe you would make him a successful candidate for pursuing higher studies in your University. 

With full confidence in his abilities, I strongly recommend XXXXX for his studies in your esteemed University, preferably with a suitable financial aid.
 </p>
 </div>
 </div>  
 <h3 ><font size=5px color="black"><b><i><p id = "lor">Letter of Recommendation(Mechanichal Engineering)</p></i></b></font></h3>
<div>
  <div id = "adjustments">
  <b><p align="center"><u>LETTER OF RECOMMENDATION</u></p></b>
<br><b>Professor name/Title,</b></b><br>
<br><b><p id = "up">College Name.</p></b></br> 
</div>
<div id = "down">
<p align="justify" id = "ccc">
I know the applicant Ms.ROHINI YERRAM, for the last three years of her Under Graduate course work. I taught her Strength Of Materials-I, Dynamics Of Machines, Design Of Machine Elements-II, Advanced Strength Of Materials & Finite Element Method, and guided him in Machine Drawing-II Lab and CAD & CAM Lab. I have found her to be attentive and industrious. Her remarkable grasp of fundamentals and her ability to analyze and solve problems are praiseworthy. she is good at Mechanical packages like Auto Cad and Catia and has enough Mathematical skills.

</p>
<p align="justify" id = "ccc">
In his final year of UG course work, she presented five National Level Technical Papers with in the state and out of the state in four different universities in the fields of Nano-Technology, Robotics, CAD/CAM and Pollution Control and organized one Symposium in our college in the rank of a student coordinator. she also participated in Two-Day workshops entitled “Finite Element Analysis” and “Entrepreneurship and Awareness Programme”. This approach of participating in the technical events indirectly shows her interest towards research field.
</p>
<p align="justify" id = "ccc">
On the whole, I would like to rank her top 1% in my subjects and strongly recommend her for admission into Masters Program of your Esteemed University to explore new frontiers. I wish her all success
</p>
<p align="right">
  <b>Signature with Date</b><br>
  <b>Professor Name/Title</b><br>

    
</p>
 
 </div>
 </div>    
 </div>
 <style type="text/css">
    .bs{
    
        /*  margin-left:700px;
         margin-top:-100px;
    */
   margin-left:700px;
   margin-top:120px;
    }
    
    .gs
    {
         margin-left:700px;
    /*margin-top:-830px;*/
      margin-top:-800px;
    }
    #gcc
    {
       font-family:"Times New Roman", Times, serif; 
       padding:15px;
       font-size:15px;
    }
    
    #man
    {
        margin-left:15px;
        margin-top:-20px;
         /*font-family:"Times New Roman", Times, serif;*/
    }
    #h
    {
        height:5px;
    }
    #fan
    {
        margin-top:-10px;
        font-family:"Times New Roman", Times, serif;
    }
    #rani
    {
        font-family:"Times New Roman", Times, serif;
    }
    .as
    {
        margin-left:700px;
        margin-top:-300px;
        background-color: black;
        width:500px;
        
        padding:15px;
        height:280px;
        background-image:url(' http://antona.files.wordpress.com/2011/01/4001435523_d0088f0c6a.jpg?w=627');
        /*border-radius: 5px;*/
        
    }
    
    #hange
{
    margin-left:700px;
    margin-top: -200px;
}
#downloads
{
    padding:10px;
    width:200px;
    margin-left:10px;
    
   
}
.ik
{
    margin-left:698px;
    margin-top:222px;
}
#toefl
{
    padding:10px;
    margin-left:10px;
    width:200px;
}
#ielts
{
    padding:10px;
    margin-left:10px;
    width:200px;
    margin-top:10px;
}
#barrons
{
    padding:10px;
    margin-left:0px;
    margin-top:10px;
   width:200px;
}
.kishi
{
    margin-top:100px;
}
  
</style>
</head>
<body>
    
  
    <div class = "as">
    <input type="button"   class = "btn  btn-primary" id = "downloads" title = "download  GRE latest software here!!" value="Download GRE Software here" onClick="window.location.href='softwares/power.exe'">
       <input type="button"  class = "btn  btn-primary" id = "toefl"   title = "download Torrent for TOEFL barrons!!" value="TOEFL Torrent" onClick="window.location.href='softwares/toefl.torrent'">

       <input type="button"  class = "btn  btn-primary" id = "ielts"   title = "download IELTS software here!! " value="IELTS software" onClick="window.location.href='softwares/IELTS.rar'">
       <a   id = "barrons" href = "http://mechcareerfetcher2010.yolasite.com/resources/Vocab%20word%20list.pdf" ><input type = "button" title = "barrons wordlists" id = "barrons" value="Barrons word list" class = "btn btn-primary"></a>
      <input type="button"  class = "btn  btn-primary" id = "ielts"   title = "Get some Speaking practice here " value="TOEFL Speaking Questions!!" onClick="window.location.href='softwares/Toeflsample.doc'">
      <input type="button"  class = "btn  btn-primary" id = "ielts"   title = "Get some writing practice here " value="TOEFL Writing Questions!!" onClick="window.location.href='softwares/Toeflwriting.doc'">

     </div>
     

    
  
    <div class = "gs">
     <a href="#myModal" class="btn btn-info" data-toggle="modal" id = "chn">Expenses for GRE,TOEFL and  sending TRANSCRIPTS without VISA FEE</a>
         <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Expenses</h4>
                </div>
                <div class = "modal-body" align="center">
                    
           
      <p align="justify"  class="glyphicon  glyphicon-asterisk" id = "gcc">
    
    <font color = "red">                          
   Inorder to increase the number of Testtakers for GRE as well as  for TOEFL,ETS has 
   </font>
   </p>
   
   <p  id = "man">
   <font color="red">
   exempted students from charging the mandatory score report fee i.e(GRE - $27 && TOEFL - $19)    for four universities of the test taker's choice!
   </font>
  </p>
  
   <table id = "fan" border="4px">
       <tr>
  <td id = "f">
 
     <p  class="glyphicon glyphicon-warning-sign"> While this offer is valid only at the time  of registering for the test(GRE and TOEFL)!
  
  </p>
       </td>
       </tr>
      </table>
     </p>

   
     
              
                    <table class=" table">
                     
                     <tr>
                         <td>
                             <b>Online Application fee </b>
                         </td>
                         <td>
                             US$30 - US$100 
                         </td>
                         
                     </tr>
                     
                     
                     <tr>
                         <td>
                    <b>GRE</b>  
                    </td>
                    <td>
                        US$195
                    </td>
                    </tr>
                    <tr>
                        <td>
                    <b>TOEFL</b> 
                    </td>
                    <td>
                        US$165 - US$250 (varies between countries)
                    </td>
                    <tr>
                    <td>
                        <b>Ordering GRE Score reports</b>
                    </td>
                    
                    <td>
                        US$27(each)
                    </td>
                    </tr>
                    <tr>
                       <td>
                           <b>Ordering TOEFL score reports </b>
                           </td>
                           <td>
                               US$19(each)
                               </td> 
                    </tr>
                    
                    <tr>
                        <td>
                            <b>Cost it takes for sending Transcripts and all the other stuff </b>
                        </td>
                        <td>
                            US$50 - US$80 (Depends)
                        </td>
                    </tr>
                  <tr>
                      <td><b>Amount charged by Courier Services to send I-20 safely to the student
                      </b>
                      </td>
                                  
                  <td>
                      US$50
                  </td>
                   </tr>
                   <tr>
                       <td>
                       <b>
                        Recommended courier Services
                        </b>
                        </td>
                        <td>
                        <img src = "http://www.skying-freight.com/en/pic/express.jpg" width = "200" height = "100">
                      </td>                   
                    </p>
                       </td>
                   </tr>
                    </table>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <style type="text/css">
        #dcc
        {
            
            margin-left:150px;
        }
    </style>
    
    <div class="bs">
    <!-- Button HTML (to Trigger Modal) -->
     <a href="#myModel" class="btn btn-primary" data-toggle="modal" id = "chn">Bank Statement For Graduate School Admissions in U.S.</a>
    
    <!-- Modal HTML -->
    <div id="myModel" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Genral Questions</h4>
                </div>
                <div class="modal-body">
                    <p align="justify" id = "ccc">
 <h4 class = "modal-title">Question 1</h4>
<b> <p id = "ccc" align="justify">I am applying for fall 2014, for Graduate program (Masters) in Computer Science.<br> 
I would like to know about the Bank Statements as i need to show loans as my source of Finance.
As Banks say they cant give a statement till the University confirms the admission,
how can i send my Application to the University without the Bank Statements,
as it is one of the requirement of the Application Kit that needs to be sent. <br>
Please advise me for both UK and US Universities?</p></b><br>

<p id = "kcc" align="justify"><b>Please also tell me what other Financial statement can be presented.</b>

<p>
    <ul>
    <b><li>Does property papers can be shown?</li>
<li>Can my Brother who is in US,show his savings as Financial statement for my studies?</li>
</b>
</ul>
</p>
<p align="justify" id = "ccc">
    <h4 class = "modal-title">Answer</h4>
    <legend align="center"><font size="5px" color="red"> Balance Statement – Funding Source</font></legend>
    <p align="justify" id = "ccc">
        Bank statement and Bank loan are different. 
        Bank statement [sample bank statement] will show current bank balance, name of the account holder, 
        when bank account was opened.
    </p>
<p align="justify" id = "ccc">
Bank is right, 
they don’t give student  loan before Universities issues I-20. 
But, universities in U.S. will ask International students to send financial affidavit form along with bank statement.
</p>
<p align="justify" id = "ccc">
For International students graduate school admission, universities will have a document, 
that would specify required bank balance. If that information is not displayed, 
the rough estimate is the total expenses for 1 year, that includes tuition fees and living expenses.
</p>
<p align="justify" id = "ccc">
For instance, 
University of Texas at Dallas requires $25,000 for first year, then bank balance should be more than $25,000. 
I-20 [sample I-20] will be issued to the student only if you send bank statement showing minimum amount.
</p>
<legend>
Property Papers
</legend>
<p align="justify" id = "ccc">
Nope, I don’t think so, you will need to show bank balance in the form of cash.
 From the sample bank statements in above links, you will see USD equivalent of Indian Rupees. 
 Property can be used for immovable property during student visa interview.
</p>
<legend>
Brother Sponsoring education
</legend>
<p align="justify" id = "ccc">
Yes, brother and relatives can be sponsors. 
He has to fill financial affidavit form that university provides or get bank statement sin his name.
 When I-20 is issued, his name will be listed as the sponsor.  When appearing for visa, 
 your brother has to send one more bank statement and affidavit form. 
 You can read more information about borrowing money from relatives for student visa.
</p>
<legend>
Can I say my brother lives in U.S.?
</legend>
<p align="justify" id = "ccc">
I have seen few students who try not to disclose relatives who live in U.S. 
because it might lower the chances to get visa. If you are not disclosing the information,
 you are lying in the visa application, it doesn’t take long for U.S. consulate to find out that 
 you haven’t disclosed the right information. For siblings, same last name, address willbe  same on the passport.
  Do, you want to take that risk?
</p>
<legend>
How to get bank statement?
</legend>
<p align="justify" id = "ccc">
Usually, students when applying for
 Graduate School admission in U.S. Universities they will collect money from relatives, 
 friends and deposit in bank account for 1 or 2 days, then get bank statement from the manager, 
 and re-distribute the money back.
</p>

<p align="justify" id = "ccc">
    <b>Hope the suggestions and answers
     will help you with your questions. Good luck, let me know if you have any further questions!!!!
</b></p>
    </p>
    <p align="justify" id = "ccc" >
        <img src = "http://happyschools.41squarellc.netdna-cdn.com/wp-content/uploads/2008/06/bank-statement.jpg"  height = "500px"   width="500px"></img>
        
    </p>
</p>
                </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>   
  <div class = "ik">
        <img src = "images/banner-downloads.jpg" width = "502" height = "100">
    </div> 

    <div id = "hange" >
    <a href="#mymodal" data-toggle="modal"><input type = "button" id = "chn" class = "btn btn-danger" value = " Please  click here  to know the format of  a sample Affidavit"/></a>

<div id="mymodal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" align="center"><b>FORMAT OF AFFIDAVIT BY SPONSOR ON STAMP PAPER OF Rs.10.00 AND ATTESTED BY NOTARY PUBLIC.</b></h4>
                </div>
                  <div class="modal-body">
                    <p align="justify" id = "ccc">
                        

I______________________________ s/o/w/o___________________________.<br>


R/o________________________ do hereby solemnly swear and declare as under:<br>


1. That my citizenship/nationality is ___________. My passport/voter card/driving<br>


License number is ___________issued at _______________on ____________.<br>


2. That I am employed as/ in business ___________________since_________ and<br>


My annual income is Rs.__________(Rupees________________________) as <br>


Per income tax return.<br>


3. That I am sponsoring my son/daughter Mr./Ms______________________ r/o <br>


__________________________________________________ ________Who is <br>


Undertaking higher studies in (Name of the country)____________________at <br>


(Name of the University)_______________________________________ __ in <br>


(Course)___________________________ Duration____ years beginning from <br>


_______ 200 to _______200.<br>


4. That I undertake to provide full financial support during his/her stay in<br>


_____________ including his tuition fees of _______________per annum and <br>


Living expenses of up to ___________per annum.<br>


Signature of sponsor:<br>


Sworn before me at ______________on this ________day of ____________-200<br>
                    </p>
                </div>
              
     <div class="modal-footer">
     <button type="button" class="btn btn-primary" data-dismiss="modal" id= "jek">Close</button>   
    </div>
    </div>
    </div>
</div>
</div>
  <!--<div class = "vs">
    
     <a href="#myModal" class="btn btn-primary" data-toggle="modal" id = "chn">Bank Statement For Graduate School Admissions in U.S.</a>
     <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Genral Questions</h4>
                </div>
                <div class="modal-body">
                    </div>  
  </div>  
    
    <style>
        .ns
        {
            margin-top:500px;
        }
    </style>
    
    <!--<div class= "ns">
    <!--Button HTML (to Trigger Modal) 
    <a href="#myModel" class="btn btn-primary" data-toggle="modal" id = "chn">Bank Statement For Graduate School Admissions in U.S.</a>
    
  <div id="myModel" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Genral Questions</h4>
                 </div>
                <div class="modal-body">
                    <p align="justify" id = "ccc">
                <h4 class = "modal-title">Question 1</h4>
              <b> 
 <p id = "ccc" align="justify">I am applying for fall 2014, for Graduate program (Masters) in Computer Science.<br> 
I</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>   -->
 

    
           
    
    
<script>
    $('#lette1').accordion();
    
</script>
<style>
.ns
{
    margin-top:900px;
}
#kcc

legend
{
    font-family:"Agency FB";
}

#kcc
{
    margin-top:-40px;
    margin-left:20px;
}
#hange2
{
    margin-left:700px;
    margin-top: -890px;
} 

#chn
{
    width:500px;
}


#down
{
    margin-top:-40px;
}
#adjustments
{
    margin-top:120px;
    margin-left:20px;
}
#lette1
{
    margin-top:400px;
    margin-bottom:20px;
    width:500px;
    margin-left:50px;
}
#ccc
{
    padding:20px;
}
#lor
{
    padding:15px;
    font-size:20px;
}
#vcc
{
    margin-left:300px;
}

#up
{
    margin-top:-15px;
}
#jack
{
    margin-left:300px;
}
#jill
{
    margin-left:300px;
}
    
</style>





