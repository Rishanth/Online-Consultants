
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

<video width="640" height = "385"  src="../twitter/rishi/sop.mp4" id = "video"  controls preload="auto" poster=" images/sop.jpg" ></video>
<div id = "car">
    <!--<p align="center"><font size=+1 color="red"><b> Key points to be remembered!!!</p>
</b></font></p>-->
</div>    

<!--<table class="table table-hover">
<thead>
<tr>
<!--<th align="center">
<p align="center"><font size=+1 color="red"><b> Key points to be remembered!!!</p>
</b></font></p>
</th>-->
<div id = "mar">
<article>


<table class="table table-hover">
<tbody>
<tr>
<td><p><span class = " glyphicon  glyphicon-check"><b>Organization</b></span></p>
</td>
</tr>
<tr>
 <td> 
    <p><span class = "glyphicon  glyphicon-check"><b>Segué to your background in the field</b> </span></p><br> 
 </td>   
</tr>
<tr>
    <td>
        <p><span class = "glyphicon  glyphicon-check"> <b>Description of your academic background in the field </b></span></p><br>

    </td>
</tr>
<tr>
    <td>
        <p><span class = "glyphicon  glyphicon-check"><b>Specific classes you have taken, given by name </b></span></p><br>

    </td>
</tr>
<tr>
    <td>
        <p><span class = "glyphicon  glyphicon-check"><b>Specific professors you have had, especially if well-known in that field </b></span></p><br>

        
    </td>
</tr>
<tr>
    <td>
        <p><span class = "glyphicon  glyphicon-check"><b>Extracurricular activities in the field </b></span></p><br>

        
    </td>
</tr>
<tr>
    <td>
        <p><span class = "glyphicon  glyphicon-check"><b> Publications or other professional accomplishments in the field  </b></span></p><br>

        
    </td>
</tr>
<tr>
    <td>
        <p><span class = "glyphicon  glyphicon-check"><b> Explanations about problems in background (if needed) </b></span></p><br>

        
    </td>
</tr>
<tr>
    <td>
        <p><span class = "glyphicon  glyphicon-check"><b> Explanation of why you have chosen the specific grad school </b></span></p><br>

        
    </td>
</tr>
<tr>
    <td>
        <p><span class = "glyphicon  glyphicon-check"><b> Mention one or two professors in that school and what you know of and appreciate about their work </b></span></p><br>

        
    </td>
</tr>
<tr>
    <td>
        <p><span class = "glyphicon  glyphicon-check"><b> Get advice from several of your professors — philosophical advice as well as specific writing advice  </b></span></p><br>

        
    </td>
</tr>
<tr>
    <td>
        <p><span class = "glyphicon  glyphicon-check"><b> Proofread and copyedit; ask friends to proofread and copyedit as well  </b></span></p><br>

        
    </td>
</tr>
<tr>
    <td>
        <p><span class = "glyphicon  glyphicon-check"><b>keep working on the statement of purpose, even after you have already sent it to school(s) with earlier deadline(s)  </b></span></p><br>

        
    </td>
</tr>
</tbody>
</table>

 </article>
</div>
     
<!--<tr>
<p><span class = "glyphicon  glyphicon-check"><b>A "hook" that demonstrates your passion for the field</b></span></p>
</tr>
<br>-->
<!--<p><span class = "glyphicon  glyphicon-check"><b>Segué to your background in the field</b> </span></p><br>
<p><span class = "glyphicon  glyphicon-check"> <b>Description of your academic background in the field </b></span></p><br>
<p><span class = "glyphicon  glyphicon-check"><b>Specific classes you have taken, given by name </b></span></p><br>
<p><span class = "glyphicon  glyphicon-check"><b>Specific professors you have had, especially if well-known in that field </b></span></p><br>
<p><span class = "glyphicon  glyphicon-check"><b>Extracurricular activities in the field</b> </span></p><br>
<p><span class = "glyphicon  glyphicon-check"><b>Publications or other professional accomplishments in the field (perhaps conference presentations or public readings) </b> </span></p><br>
<p><span class = "glyphicon  glyphicon-check"> <b>Explanations about problems in background (if needed) </b></span></p><br>
<p><span class = "glyphicon  glyphicon-check"><b>Explanation of why you have chosen the specific grad school</b></span></p><br>
<p><span class = "glyphicon  glyphicon-check"><b>Mention one or two professors in that school and what you know of and appreciate about their work</b></span></b></p><br>
<p><span class = "glyphicon  glyphicon-check"><b>Get advice from several of your professors — philosophical advice as well as specific writing advice </b> </span></p><br>
<p><span class = "glyphicon  glyphicon-check"><b>Proofread and copyedit; ask friends to proofread and copyedit as well </b> </span></p><br>
<p><span class = "glyphicon  glyphicon-check"><b>Keep working on the statement of purpose, even after you have already sent it to school(s) with earlier deadline(s) </b> </span></p><br>
-->

   


 <!--   <div class="row">-->
     
     <style>
       ul.nav-tabs{
        width: 140px;
        margin-top: 20px;
        border-radius: 4px;
        border: 1px solid #ddd;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.067);
    }
    ul.nav-tabs li{
        margin: 0;
        border-top: 1px solid #ddd;
    }
    ul.nav-tabs li:first-child{
        border-top: none;
    }
    ul.nav-tabs li a{
        margin: 0;
        padding: 8px 16px;
        border-radius: 0;
    }
    ul.nav-tabs li.active a, ul.nav-tabs li.active a:hover{
        color: #fff;
        background: #0088cc;
        border: 1px solid #0088cc;
    }
    ul.nav-tabs li:first-child a{
        border-radius: 4px 4px 0 0;
    }
    ul.nav-tabs li:last-child a{
        border-radius: 0 0 4px 4px;
    }
    ul.nav-tabs.affix{
        top: 30px; /* Set the top position of pinned element */
    }
    .rishi
    {
       
       background:white;
        width:490px;
        margin:20px;
        border-radius:5px;
       padding:15px;
        overflow-x:scroll;
        overflow-y:scroll;
        height: 500px;
    
    margin-left:280px;
    margin-top:-500px;
    
    }
    .sop
    {  /*background-image:url('images/bck18.jpg')*/
        margin-left:140px;
        margin-top:-800px;
        background: white;
        width:800px;
        border-radius:5px;
        height:800px;
        margin-bottom:10px;
    }
    #title
    {
        padding:15px;
    }
    #myNav
    {
        margin-left:20px;
        margin-top:50px;
        height:500px;
        
    }
    .intro
    {   
        background-image:url('images/bck19.jpg');
        padding:100px;
        border-radius:5px;
    }
        /*margin-bottom:530px;
    }*/
</style>
<script type="text/javascript">
$(document).ready(function(){
    $("#myNav").affix({
        offset: { 
            top: 100
        }
        
        
    });
});
</script>
     
            
       
              
               <div class="sop" id="myScrollspy">
              
              <div class = "intro">
              </div>
            <ul class="nav nav-tabs nav-stacked" id="myNav">
            <li class="active"><a href="#section-1">Electronics and Communication Engineering</a></li>
                <li><a href="#section-2">ComputerScience</a></li>
                <li><a href="#section-3">Masters in Information Systems</a></li>
                <li><a href="#section-4">Mechanichal Engineering</a></li>
                <li><a href="#section-5">Civil Engineering</a></li>
                <li><a href="#section-6">Electrical and Electronics Engineering</a></li>
                <li><a href = "#section-7">Computer Engineering</a></li>
                
            </ul>
        <div class="rishi">
            <h2 id="section-1" align="justify"><b><font color = "red">Electronics and Communication Engineering</font></b></h2>
         <p align="justify">
             I believe that education is the most important asset and quality of a man and one should attempt his best to acquire it. I have been consistently scoring 1st class in all exams in the undergraduate course until now and I am confident that I have the ability to take up the Postgraduate course and complete with flying colors.

My fascination towards Electronics and its related areas from childhood had intrigued me to opt for Electronic and communication as my undergraduate course. I did My Intermediate at Ideal Junior College. Then I joined my Undergraduate in SPHOORTHY ENGINEERING COLLEGE, Hyderabad. My undergraduate program has exposed me to a stimulating academia.

During my college studies I always had an enthusiasm in observing the practical application of the subjects I studied. Studies of subjects like electronic devices and circuits ,pulse digital circuits ,linear integrated circuit analysis, cellular and mobile communication, microprocessor and interfacing etc., in my career gave me an ongoing interest in the field of Electronics and communication.

I had developed various projects and present in the events conducted in our college and in other colleges . I had represented the college at national level technical events conducted by other institutions. This real life experience helped me in understanding the importance of sequencing and optimizing a task in a better way. I also did a Real time project work on “Wireless gestures controlled robot with video and voice capture” using Embedded systems as Front end & Embedded C as Back end. I think I have a very good exposure in the field of Application Development using different tools.

At this point I feel that pursuing Postgraduate studies in Electronics and Communications engineering & related subjects would be the right thing to do, as it would put my abilities and interest together. Graduate studies in ECE will give me all-round exposure in engineering. I would thus be able to contribute towards the growth of the field and develop the best appropriate career for myself.

Your esteemed institution has a peerless reputation for emphasizing practical knowledge and innovation for its students and promotes an excellent industry-institute relationship. I am confident that your institution will help me contribute positively to the ever-changing industrial scenario. I look up graduate studies in the department of Electronic and communication engineering & Related Subjects at your esteemed institution as an opening to develop my skills and give a direction to my career & to fulfill my core ideas.
       </p>
       <hr>
            <h2 id="section-2"><b><font color = "red">ComputerScience</font></b></h2>
            <p align="justify">
                The constant increasing applications of computers in technological development demand more efficient networking. Coming from a background of Computer Science Engineering, I have developed a fascination to probe into the arena of Networking in general and Computer Networks in particular which posses a challenging task in interconnecting PC’s and Laptops. This cultivated my interest to take Computer Science Engineering as my major in my graduate studies.

I always put my endeavors and all out efforts to excel in every walk of my life. A good career in computer science and engineering can only be built above the firm foundation of a good education. Apart from the impressive infrastructure and research facilities offered at University of Texas, the courses like Database systems, Data Mining, Software Engineering and Operating Systems really interested me because I believe that I can specialize in databases and data mining concepts with the knowledge that I can gain from these courses. Above all, it would be a blessing to be able to learn under the guidance of the professors at University of Texas. I am excited about entering into this next phase of my life and it is my hope and belief that I would be able to make a positive contribution to the University.

There is a saying, which says,
<b><i> “The only thing Permanent in life is Change”.</b></i> This perfectly holds true to the world of Computer Science Engineering where novel ideas are not a novelty. It is this novelty that entices me to this field and gives me a deep sense of professional pride. In this context, I would like to pursue my graduation in Computer Science Engineering, which not only supplements the knowledge that I possess but also provides a strong platform for my future career aspirations and goals.

I have always believed that one should never give up the habit of asking questions and this habit has been an important facet of my creativity. I seek to invent new ideas by applying the basic principles of an existing theory in uncommon ways.

However, I found that I have no uncertainty in proceeding along a path that I have been planning over the last 5 years. I have originated from a family where the highest priority was always given to good education. Blessed with schooling from one of the premier institutions of India, the Satya Sai Vidya Vihar in Visakhapatnam, I was strongly motivated to pass my X class exams with over 79% marks.

After successful completion of my school studies, I got admitted to Narayana IIT Academy , which is one of the most reputed Colleges in Andhra Pradesh, to which State I belong .I obtained over 86.2 % marks in the Intermediate ( plus Two ) exams. Later I joined the GITAM Institute of Technology, affiliated to the GITAM University in Visakhapatnam, which is a top class University in India in general and my native state Andhra Pradesh in particular. I took Computer Science Engineering as my major in the undergraduate program. During the course of the study I was exposed to various subjects like ‘C’, Computer Networks, Java and Data Structures and gained a lot of expertise in them, etc.


The inter connection, management and maintenance of networks helped me to get acquainted with the subject of Networking at high levels. Having acquired reasonable knowledge after completing a course in Database 2 certification course, I am passionately eager to learn the subject in depth; I was fascinated to explore advanced knowledge in this Cyber World. My Cumulative Grade Point Average up to the VI Semester (III year II Semester) is 8.81 out of 10.


I worked in a group project titled “User Support Portal “for the Visakhapatnam Steel Plant under the guidance of Sri T.V.Kameswara Rao. This project centers on the creation of a portal which performs an array of tasks useful both for the management and also the users (or customers) of the Visakhapatnam Steel Plant which is a prime steel producing companies in India. For the back-end of the project, my team used Oracle 10g and for designing the front-end, we used JSP (Java Server Pages) and concepts of Java to execute the code.


My prodigious appetite for knowledge started from the moment, I was trained to write the series of English alphabets on the sands of the grounds of my kindergarten school. This thrust spurred me to work assiduously till this part of my career and this will perpetually continue to stir me in achieving greater goals. I am fully aware of the fact that I have miles to go in this long distance race for acquiring higher knowledge. Although I believe that there is no substitute for hard work and strong working knowledge. Training in a reputed university like yours will give a big boost to my aspirations and Academic Pursuits 

In addition to my regular studies at various levels from Primary till now; I am taking regular classes in Kuchipudi dancing, one of the oldest and most traditional forms of dancing in my Country. Especially during my School days at Satya Sai Vidya Vihar, I actively associated myself with various Community Service activities aimed at the amelioration of the oppressed, suppressed, depressed and the under - privileged sections of people , which was the main motto of my Alma Mater. During my Under Graduate studies, I allocate good time for the same purpose being a member of the National Service Scheme.

Coming from a family where everyone has excelled in academic achievements, I have developed a keen desire to pursue my graduate studies and research in Computer Science Engineering in a University of Excellence, which will provide me an opportunity to work with most modern and sophisticated equipment and intellectual environment by which I would be able to realize my dreams of exploring and contributing new vistas in the chosen field. Your institute, which is reputed to possess the above, besides having a host of eminent professors on its faculty, gives me wonderful opportunity to hone my skills and acquire knowledge.

I believe that <b><i>“Accomplishments lie within the reach of those who reach beyond themselves”.</i></b> I am confident of making my own humble contribution in enhancing the image and reputation of your Esteemed University in the years to come. Financial assistance from your University will give me a tremendous morale boost in this long pursuit to achieve excellence. I eagerly look forward to be a part of your Academic Community.
         </p>
         
            <hr>
            <h2 id="section-3"><b><font color = "red">Masters in Information Systems</font></b></h2>
            <p align="justify">
                 
                 There is an old paradigm that says,<b><i> "To stay where you are, keep running".</i></b> Today I realize how true it is because unless we keep track of the changes and advances being made we will be considered pariah. As I stand at the threshold of completing my undergraduate study, after carefully contemplating the various career options open to me I have decided to go in for graduate study that calls for personal commitment in fulfilling the crafts of independent research and dedicated involvement. In turn, I shall get intellectual satisfaction and gratification of becoming a contributor of knowledge with research, and the greater personal rewards of memory and discovery. Now, on the verge of completion of my Under-Graduate Studies, I realize that my present knowledge would not suffice. I feel that unless one is erudite in his field, one cannot be fully satisfied.

Any tryst with sciences, mathematics or any area that needed analytical thinking brought out the budding Engineer in me as I was not happy with just understanding a phenomenon but wanted a real time experience of the same. This interest in logical and computational thinking led me to take up Mathematics, Physics and Chemistry as my major subjects at the Pre-University level after completing my Schooling with 89%. I completed my pre-University education with 92.3%. 

For my under graduate studies, I have opted for “ Computer science and Engineering” in P S G College of technology, where I find my diligent study has brought home to me very strongly, that there is still a vast field that I must explore and master to achieve my goal of been the best. The economic ad technological liberalization that is taking place in my country would ensure that I would be able to use my expertise to make India a leader in the area of information science and technology. My expertise to the numerous Engineering subjects imbibed in me, an interest to pursue further education in this field.

During my undergraduate course, I was exposed to various subjects which included software engineering, database technology, networking concepts which lead me to do my final year project work in networks which included designing, performance and security of particular network. I am also introduced to management based subjects like engineering economics and Industrial management where I gained knowledge and understanding of the basic management concepts, which made me secure good scores in those subjects.
The essence of university education lies in the success of the symbolic relationship between the student and his department. It is with this in mind that I am looking forward to a long and rewarding relationship with your university. Your university is a confluence of people from varied culture, nationality, religion, race and ideology. I am sure that my exposure to these kinds of diverse influences would aid in the overall development of my personality and help me broaden my concept from the narrower confines of nationalism to internationalism. From the tremendous research options available here, I am confident that I will have the opportunity to work professionally with faculty on research projects and at the same time, I can make my research-work more meaningful. 

The hours of hard work that I put into excel in my education not only made me realize the beauty of attaining knowledge but also gave me the perseverance to look beyond and extend my boundaries, the time I have spent has only given me a brief glimpse of the vastness of knowledge, what I have seen has only aroused my curiosity and eagerness to explore the depths. I know that my goals are not mere wishes and I am aware that the path I am choosing is not a smooth horse ride. I understand that I have to put in painstaking hard work and compete with best in the world to achieve my goals. I am thoroughly prepared for it. To sum it up, I am prepared to go an “extra mile”-both figuratively and literally-add value to my qualification to realize my goals, I know that the competition is going to be tough but as it has been amply said.

<br><b><i>
    “Life’s battle does not always go to the stronger man,
Sooner or later, the man who wins
Is the man who thinks he can.” 
</i></b><br/>
Finally I take this opportunity to thank you for enabling me to express myself and I look forward for my admission into the Masters in Management Information Systems(MS in MIS) program of your esteemed university.

                 </p>
            <hr>
            <h2 id="section-4"><b><font color = "red">Mechanichal Engineering</font></b></h2>
            <p align="justify"> Technology is driven by need. Inventors often have an uncanny skill of resolving situations with their innovations. But what separates engineers from mere innovators is the ability to recognize the importance of sustainable technological solutions for the future. Although many of our needs and predicaments remain the same, the answers keep changing with time. My ability to be proactive in this matter makes me stand apart. In addition to finding out how a machine operates, I’ve always been interested in design aspects and monitoring the incipient faults occurring within machines. This urge has strengthened my ability to recognize the scope for improvement and also motivated me to look beyond the conventional functionalities of any machine.

Ever since my school days, I’ve been interested in the theoretical frameworks in Mathematics and Sciences, which drive the physical world. I have received grades with magna cum laude both in my 10th and 12th grade. Engineering, at this point of time, seemed as a natural extrapolation of my abilities and interests. The amazing task of moving the world is the monopoly of machines, so I made Mechanical engineering my choice. I successfully cleared the ‘All India Engineering Entrance Examination’ (AIEEE) which placed me within the top 2% bracket amongst over 800,000 takers. With a score of 98 percentile in AIEEE I enrolled in the discipline of Mechanical Engineering at National Institute of Technology, Rourkela (NITR). My undergraduate education at the National Institute of Technology, Rourkela (NITR) has provided a thorough exposure to the various specialties available in Mechanical Engineering, thus stimulating interest in advanced research. 

At the Indian Railways Coach Workshop I worked on Maintenance of Railway Coaches using NDT methods. The project involved the application and checking the viability of the present NDT methods for detecting flaws in the various mechanical components of the coaches. The first phase of the project involved the study of the various faults occurring in coach components and the NDT methods used to detect them. In the second phase I worked on introducing other prevalent NDT methods like Wear debris monitoring, infrared thermography and shock pulse method. While working on them, I proposed their use in different areas to determine faults. The applications of Wear debris monitoring for roller bearings, inspection of alternator bearings by shock pulse method, to name a few. The industrial project enabled me to appreciate the various techniques developed in fault determination and the impact cutting edge research has in developing better technologies. I continued my research in this field of NDT by undertaking academic project of Gear Drive Fault Detection through Vibration Analysis. Currently I am working on this project which involves investigating the various faults occurring in gears with the help of vibration analysis which is based on the fact that faults, when they begin to occur, alter the frequency spectrum of the gear vibration. The particular faults in the gear drive will be identified by recognizing the growth of distinctive sideband patterns in the spectrum. This project coupled with current study of Vibration & Noise Engineering allowed me to develop an understanding of vibration as an integral part of the design process and its role in determination of faults.

During my course of Engineering, I have not limited myself to a particular area of Mechanical Engineering. I have secured a GPA of 4.5 out of a scale of 5 in the field of Design. Also, my keen interest to stay abreast with the evolving methods of designing has helped me in gaining an appreciation for languages such as AutoCAD, Catia and Fluent. In “CAD Venture” event, a 3-D design contest, conducted as a part of Confluence2K9-a national level technical festival held in NITR, I was adjudged as the second best, amongst 500 other participants. My current project on CFD analysis of flow of fluids in channels and pipes is helping me to gain a deeper insight on the abilities and functions of Fluent.
My undergraduate engineering degree has left me with keen sense of appreciation for the need for evolution of engineering & technology. A Masters degree will further equip me with intellectual depth and breadth along with greater practical knowledge to face the professional and leadership challenges I will face in my career. After a good deal of self-evaluation, I’ve decided to pursue graduate studies in Mechanical Engineering. This decision naturally followed after carefully considering my academic background and areas of work.

The Mechanical Engineering program at your university provides……………………………………
……………………………………………………………………………………………………… ……..
……………………………………………………………………………………………………………
……………………………………………………………………………………………………………
……………………………………………………………………………………………………………
I strongly believe that I can match the high standards of your university and contribute fruitfully to the research endeavors at your university. 
I would be grateful to you, if I am accorded the opportunity to pursue my higher studies. 
 </p>
 <hr>
            <h2 id="section-5"><b><font color = "red">Civil Engineering</font></b></h2>
            <p align="justify"> <b><i>
                “Education is a tool that puts one on a fast track to acquiring knowledge and personality that
                 sets one apart from the crowd. It is one bottom less hole; no matter how much one pours himselfinto it,
                  he thirsts for more.”</i></b>

I can still vividly recall the memory of the day I saw the labs of civil engineering department in open house program at **** Institute , Guntur eight years ago. Its machinery and the testing machines interested me a lot. I believe that the best way to predict the future is to make it. With this belief, I always planned and executed my life towards predetermined goals. I worked towards and secured admission for an undergraduate program in civil engineering in ****, Guntur which is rated one among the best engineering college in south India.

Once I secured admission to one of the most competitive and rigorous civil engineering programs in India, I structured view of what I might do here. But I found civil engineering even more interesting and challenging than what I had imagined. Right from the second year, my kind of preparation was to gain knowledge and subject in depth rather than just getting marks though I was able to put up good marks on board. My uncle being a civil engineer added to my further inspiration to define my career goals.

About Undergraduate study, I feel is not a denouement of what I call a journey towards excellence and competence. Graduate study a sequel to undergraduate study opens up newer avenues to explore and gives one a wider range of career objectives. My schooling at elementary and high school has given and excellent command in basics of mathematics and science and more importantly ignited in me strong interest in civil engineering.

In this ever-changing world of Engineering and Technology, where each new day sees a spate of new concepts and applications and each passing day makes them obsolete, I want to attain the highest level of education and transcend new horizons in the chosen field. The vast application potential and tremendous scope for high career in civil engineering always fascinated me and I am keen to continue my academic pursuit in this field.

Civil engineering as I believe is the only field where one’s work can be seen and felt directly by the senses and anything done stays forever to the credit. I feel that this is the field which requires lot of patience, perseverance and management skills to be successful. These are qualities which need to be nurtured with lot of motivation and hard work and my college proved to me a right place for this objective.

Now at this junction of my career, I am confident that when I make the transition into masters program, I will be building on a strong foundation gained in the past years. My strategy for graduate study will, therefore, be a prolonged one where in I shall be consolidating my knowledge in a more specialized way and acquire the skills used for the research. My field of interest in civil engineering is Environmental engineering which has gained lot of prominence in recent years both in India and abroad. This interest has intuited me to take advanced courses like Environmental Science and Engineering and Waste Water Management in my final year as elective subjects.

I am applying for your college on an account of its excellent research facilities combined with distinguished and dedicated faculty. My admission into your esteemed institution is of paramount importance for my career. With my theoretical knowledge and practical skill I am well equipped to meet your expectations. I am confident that I would surely synchronize to your standards. I hope I will be favorably considered for admission for graduate study with possible financial assistance.

Having made this statement of my objectives it is my belief that what your university looks for, in a prospective student, is a strong academic background and the will to perform and deliver. An extremely distinguished faculty, a milieu replete with academic activity and the state of the art research facilities in the field of Civil Engineering are the most important factors, which motivated me to choose your university.

All knowledge is in human mind, it requires only an awakening. Since I strongly believe that your university would be an ideal place for me to pursue my graduate studies, I wish to canalize my knowledge and make my life significant by joining your university.
</br>
<br>
<b>Thanks for considering the application
</b>
</br>
<br>
<b>[Name]
</b>
</br>
 </p>
 <hr>
             <h2 id="section-6"><b><font color = "red">Electrical and  Electronics Engineering</font></b></h2>
             <p align="justify">
My decision to pursue graduate study in the United States is underscored by my desire to be a part of the graduate program at your institution. Purdue University offers the flexibility needed for such a vast and rapidly changing field. The research facilities and the faculty at the university are par excellent.
Communications is an industry that has changed our lives. In a very short period it has changed the way we have looked at things since centuries. It is one industry that is going to shape our future for centuries to come. Hence my desire to do masters in electrical engineering with communications as my major.
My interest in electronics blossomed during my high school years. It was the time when technology had begun to make an impact on the lives of people in India. Hence engineering with electronics as my major was the first choice for my undergraduate studies. Right since the beginning of my undergraduate study electronics is a subject that has fascinated me with its power of applications. The subjects that I have studied include Linear Electronics, Digital Electronics. These laid the foundation for my courses in Electronic Communication & Communication Systems at a later stage. My undergraduate studies already focus on the communications aspect of electronics. A masters degree in electrical engineering with communications as major field is the next logical step.
For the past four months I have been working as a project trainee at the Indian Institute for Advanced Electronics. I am working on the design and development of a "PC Controlled Digital Serial Data Generator". This short stint has given me invaluable practical experience. It has given me the confidence to pursue a masters degree and also kindled a desire to do research.
During the course of my work at IIAE, I have come across several scientists. Most of them work in different areas of communications. Interactions with them have made me realize the vastness and the scope of communications. My discussions with them convinced me that specializing in communications will suit me very well.
The subject of research which interests me very much is spread spectrum communication systems. Coding theory and combinations is another research subject which arouses my curiosity. The subject Communication Theory which I am studying at present introduces these topics in theory. I am eager to find out more about the applications of coding theory to spread spectrum communication systems.
In addition I have been a student member of the IEEE (Institute of Electrical and Electronics Engineers, Inc.) for the past three years. Through its workshops/seminars and publications like the 'The Spectrum' it has exposed me to a lot of emerging technologies in the field of communications.
It is a strong belief in my family that the American education system has the best to offer in the whole world. This belief arises out of the experience that my parents had when they did their Masters of Science in the University of Pennsylvania during the years 1967-69. If I can get an opportunity to be a part of that intellectually stimulating environment, I am sure my talents will be put to optimal use.
India is a developing country with an enormous potential in the information technology business. To serve the needs of this developing industry and more important its vast population, communications is going to become of utmost importance. Thus conditions here are very conducive to supplement my aspirations when I return after completing my graduate studies.
             </p>
             <hr>
                          <h2 id="section-7"><b><font color = "red">Computer Engineering</font></b></h2>
<p align="justify">
    
        The ever increasing applications of computers in technological development demand more efficient networking. Coming from a background of Electronics and Communication Engineering, I have developed a fascination to probe into the arena of Networking in general and Computer Networks in particular which posses a challenging task in interconnecting PC’s and Laptops. This cultivated my interest to take Computer Engineering as my major in my graduate studies.

There is a saying, which says, “The only thing permanent in life is change”. This perfectly holds true to the world of Computer Engineering where novel ideas are not a novelty. It is this novelty that entices me to this field and gives me a deep sense of professional pride. In this context, I would like to pursue my graduation in Computer Engineering, which not only supplements the knowledge that I possess but also provides a strong platform for my future career goals.

I have always believed that one should never give up the habit of asking questions and this habit has been an important facet of my creativity. I seek to invent new ideas by applying the basic principles of an existing theory in uncommon ways.

However, I found that I have no uncertainty in proceeding along a path that I have been planning over the last 3 years. I have originated from a family where the highest priority was always given to good education. Blessed with schooling from one of the premier institutions of India, I was strongly motivated to pass my senior school exams with honors.

After successful completion of my school studies, I got admitted to Sree Kavitha Engineering College affiliated to Jawharlal Technological University, which is one of the reputed universities at the global level. I took Electronics and Communication as my major in the undergraduate program. During the course of the study I was exposed to various subjects like ‘C’, Computer Networks, Java and Data Structures, etc.

My expertise in Computer programming could be seen from the fact that I got 93% in the practical lab of Programming and Data Structures. I took additional courses in programming languages like C, C++ and JAVA.

The inter connection; management and maintenance of networks helped me to get acquainted with the subject of Networking at high levels. Having acquired reasonable knowledge about the OSI reference model, I am passionately eager to learn the subject in depth. I was fascinated and got myself involved in this cyber world.

My prodigious appetite for knowledge started from the moment, I was trained to write the series of English alphabets on the sands of the grounds of my kinder garden school. This thrust spurred me to work assiduously till this part of my career and this will perpetually continue to stir me in achieving greater goals. I am fully aware of the fact that I have miles to go in this long distance race for acquiring higher knowledge. Although I believe that there is no substitute for hard work and strong working knowledge. Training in a reputed university like yours will give a big boost to my aspirations and academic pursuits 

Coming from a family where everyone has excelled in academic achievements, I have developed a keen desire to pursue my graduate studies and research in Computer Engineering in a university of excellence, which will provide me an opportunity to work with most modern and sophisticated equipment and intellectual environment by which I would be able to realize my dreams of exploring and contributing new vistas in the chosen field. Your institute, which is reputed to possess the above, besides having a host of eminent professors on its faculty, gives me wonderful opportunity to hone my skills and acquire knowledge.

I believe that
<b><i> “Accomplishments lie within the reach of those who reach beyond themselves”. </i></b>I am confident of making my own humble contribution in enhancing the image and reputation of your esteemed university in the years to come. Financial assistance from your university will give me a tremendous morale boost in this long pursuit to achieve excellence. I eagerly look forward to be a part of your academic community.
     
    </p>
    <hr>         
    </div>
    </div>
