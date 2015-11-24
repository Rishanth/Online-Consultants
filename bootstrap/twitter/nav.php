
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
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#accordion" ).accordion();
  
  });
  </script>
  <script>
    $(function () {
$("#decode").accordion();       
      });
  </script>
<style type="text/css">
    .bs-example{
        margin: 20px;
    }
    h2{
    margin: 0;     
    color:#666;
    padding-top: 90px;
    font-size: 52px;
    font-family:"Times New Roman", Times, serif;   
}
.item{
    background:orange;    
    text-align: center;
    height: 500px !important;
}
.carousel{
    margin-top: 20px;
}
.revenge
{
    background: yellow;
}

</style>
</head>
<body>
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
                    <li><a href="#mymodal" id = "change" data-toggle="modal">Rankings</a></li>
                    <li><a href="#" id = "change" >Sop</a></li>
                    <li><a href = "#" id="change" class="revenge">Documentation</a></li>
                    <li><a href = "profileEvaluator.php" id = "change">ProfileEvaluator</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle" id= "change">F-1 visa <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" id="change">Visa slots</a></li>
                            <li><a href="#" id="change">Visa experiences</a></li>
                            
                            
                         </ul>
                    </li>
                </ul>
                
                  <a href="login.html" class="btn btn-danger btn-large"><span class="glyphicon glyphicon-off"></span> Logout</a>

                    <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default btn-success "><span class="glyphicon glyphicon-search">Search</span></button>
      </form>
      
      
                <!--<ul class="nav navbar-nav navbar-left">
                    <li class="dropdown">
                        <a href="profileEvaluator.php" data-toggle="dropdown" class="dropdown-toggle" id="change">Profile Evaluator <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" id="change">Action</a></li>
                            <li><a href="#" id="change">Another action</a></li>
                            <li class="divider"></li>
                            <li><a href="#" id="change">Settings</a></li>
                        </ul>
                    </li>
                </ul>-->
 


            </div><!-- /.navbar-collapse -->
        </div>
        
    </nav>
    
</div>

<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
       <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="active item">
                <h2>Author</h2>
                <div class="carousel-caption">
                 <!-- <h3 align="center">Rishanth</h3>-->
                  <img src = "gly/IMG_2741.JPG" height="400" width="500"></img>
                  <p>My name is Rishanth kanakadri Chavali,I live in the United States</p>
                </div>
            </div>
            <div class="item">
                <h2 id = "change">Educational Status</h2>
                <div class="carousel-caption">
                  <h3 id = "change">Masters in Computer Science</h3>
                  <img src = "gly/umbc1.jpg"></img>
                  <p>I'm doing my masters in University of maryland Baltimore county.</p>
                </div>
            </div>
            <div class="item">
                <h2 id = "change">Online consultants for Abroad Studies</h2>
                <div class="carousel-caption">
                <div class = "test">
                  <img src = "gly/gre.jpg" id = "hi">
                  <img src = "gly/tution costs.jpg" id = "bye">
                  <img src = "gly/consu.jpg" id = "chalo">
                  <img src = "gly/toefl.jpg" id = "helloo">
                  <p align="center" id ="rishi">Providing good guidance for Gre and also assist students in the process of applying to various universites.</p>
               </div>
                </div>
            </div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    <div id="accordion">
  <h3 ><font size=5px color="orange"><b>United States Of America</b></font></h3>
  <div>
    <img src = "gly/the-united-states-of-america-map.gif"  height="700" width="1000" id="jelb"></img>

    <p id= "acc1" align="justify">
The American Dream is a national ethos of the United States, a set of ideals in which freedom includes the opportunity for prosperity and success, and an upward social mobility achieved through hard work. In the definition of the American Dream by James Truslow Adams in 1931, "life should be better and richer and fuller for everyone, with opportunity for each according to ability or achievement" regardless of social class or circumstances of birth.[1]
The idea of the American Dream is rooted in the United States Declaration of Independence which proclaims that "all men are created equal" and that they are "endowed by their Creator with certain inalienable Rights" including "Life, Liberty and the pursuit of Happiness."[2]
The meaning of the "American Dream" has changed over the course of history, and includes both personal components (such as home ownership and upward mobility) and a global vision. Historically the Dream originated in the mystique regarding frontier life. As the Royal Governor of Virginia noted in 1774, the Americans "for ever imagine the Lands further off are still better than those upon which they are already settled". He added that, "if they attained Paradise, they would move on if they heard of a better place farther west."[3]
The ethos today implies an opportunity for Americans to achieve prosperity through hard work. According to The Dream, this includes the opportunity for one's children to grow up and receive a good education and career without artificial barriers. It is the opportunity to make individual choices without the prior restrictions that limited people according to their class, caste, religion, race, or ethnicity. Immigrants to the United States sponsored ethnic newspapers in their own language; the editors typically promoted the American Dream.[4]    </p>
</p>
</div>
<h3><font size=5px color="orange"><b>Masters in United States</b></font></h3>
 <div>
    <img src="gly/umbcus.jpg" id="gelb" align="center"></img>
  <p align="justify" id="acc2">
  The US is home to some of the most prestigious universities in the world. It has an internationally renowned education system, and offers a huge variety of English-language courses and speciality degrees. It is well known for excellent research in a diverse, international environment. The US is the most popular country for international students, with over 800,000 international students enrolled in American universities between 2010-2011.
  Although its university system is probably best known for it’s academic heavyweights including Harvard, Stanford and MIT, the US offers a huge variety of higher education institutions all over the country. There are over 1,700 public and 2,500 private Universities, Colleges, Community Colleges and Institutes across the country.
  There are several different types of higher education institutions in the States.
 Universities offer undergraduate (Bachelor’s), graduate (Master’s) and post-graduate (Doctoral) studies (Note: this classification is different from European universities, as ‘graduate’ refers to someone with a degree, and ‘post-graduate’ refers to someone studying at Master’s or Doctoral level). Colleges are standalone institutions, where it is usually not possible to study beyond undergraduate level, although ‘college’ can also be used to refer to a particular part of a larger university, dealing with one area of study (e.g. the Arts). Community Colleges offer 2-year associate degrees (e.g. for trade or technical qualifications) that are the lowest academic degrees in the US, but allow the student to progress to a university to continue their studies. Institutes are comparable to Technical Universities in Europe and primarily offer studies with a strong research focus.

Undergraduate courses in the USA tend to be quite broad in subject matter, wheras Master’s courses focus on a particular theme of study. Most Master’s degrees in America are taught programmes, although you will usually have to write a thesis on a particular subject of personal research. Most undergraduate degrees in the States are 4 years long, and most Master’s degrees are 2 year
    
    Tuition fees

Tuition fees in the States tend to be higher than in Europe. Average tuition fees for international students are around $20,000 per year in public universities, and $28,000 at private universities, with some charging more than $40,000 a year. Living costs vary drastically according to the location and type of accommodation available. There are many scholarships available to international students, including merit-based scholarships for academically outstanding students, need-based financial aid for students from disadvantaged backgrounds and sports scholarships for exceptional sportspeople. Many scholarships have very early application deadlinesand there is often stiff competition, so it is vital to apply in plenty of time.

Accommodation

As an undergraduate, you will usually live on campus in university residences for the first two years of your course. The rooms are often shared between several students and contain basic furniture. Facilities in the dorms often include common rooms, a study lounge, a basic kitchen area and a laundry service. There is normally a meal plan in place, meaning that you have at least one catered meal per day, from a selection of different menus. One benefit of living in university accommodation is that all your utility bills are included in the cost.

Most graduates will need to find private accommodation, as it is not usually provided on campus. There are often university posting boards to help you find this. The cost varies greatly depending on the area and type of housing. All your food will be made independently and bills will cost extra on top of the cost of rent.

In some areas, there is the possibility of staying with a host family. This allows you to absorb the culture of the area you are staying in and experience the lifestyle of the locals.
    </p>
  </div>
  <h3><font size=5px color="orange"><b>Standard Tests to do Masters in the US</b></font></h3>
  <div>
    <legend><font size=5px color="orange"><b>Graduate Record Examination</b></font></legend>
    <p align="justify">
    The Graduate Record Examinations (GRE) is a standardised test that is an admissions requirement for most graduate schools in the United States.[7] Created and administered by Educational Testing Service (ETS) in 1949,[8] the exam aims to measure verbal reasoning, quantitative reasoning, analytical writing, and critical thinking skills that have been acquired over a long period of time and that are not related to any specific field of study. The GRE General Test is offered as a computer-based exam administered at Prometric testing centers.

In the graduate school admissions process, the level of emphasis that is placed upon GRE scores varies widely between schools and between departments within schools. The importance of a GRE score can range from being a mere admission formality to an important selection factor.

The GRE was significantly overhauled in August 2011, resulting in an exam that is not adaptive on a question-by-question basis, but rather by section, so that the performance on the first verbal and math sections determine the difficulty of the second sections presented. Overall, the test retained the sections and many of the question types from its predecessor, but the scoring scale was changed to a 130 to 170 scale (from a 200 to 800 scale). A minimum score of 260/340 is awarded on attempting the exam.[9]

The cost to take the test is US$ 195,[5] although ETS will reduce the fee under certain circumstances.[6] They also promote financial aid to those GRE applicants who prove economic hardship.[10] ETS does not release scores that are older than 5 years, although graduate program policies on the acceptance of scores older than 5 years will vary
    </p>
   <p align="justify">Gre has got two different variations</p>
    <ul>
      <li>Subject-based</li>
      <li>Computer-based</li></ul>
   <legend><font size=5px color="orange"><b>Test of English as a Foreign Language(TOEFL)</b></font></legend>
   <p>Test of English as a Foreign Language or TOEFL /ˈtoʊfəl/ toh-fəl, is a standardised test of English language proficiency for non-native English language speakers wishing to enroll in U.S. universities. The test is accepted by many English-speaking academic and professional institutions. TOEFL is one of the two major English-language tests in the world, the other being the IELTS.

TOEFL is a trademark of ETS (Educational Testing Service), a private non-profit organisation, which designs and administers the tests. The scores are valid for two years; then they are no longer reported.[5]</p>

   <h4><font size=5px color="orange"><b>Internet Based</b></font></h4>
<p align="justify"> 
    Since its introduction in late 2005, 
    the TOEFL Internet-based Test (iBT) format has progr
    essively replaced the computer-based tests (CBT) and 
    paper-based tests (PBT), although paper-based testing is still used in select areas. 
    The TOEFL iBT test has been introduced in phases, with the United States, Canada, France, Germany, 
    and Italy in 2005 and the rest of the world in 2006, with test centers added regularly.
     The CBT was discontinued in September 2006 and these scores are no longer valid.

Initially, the demand for test seats was higher than availability, and candidates had to wait for months. It is now possible to take the test within one to four weeks in most countries.[8] The four-hour test consists of four sections, each measuring one of the basic language skills (while some tasks require integrating multiple skills), and all tasks focus on language used in an academic, higher-education environment. Note-taking is allowed during the TOEFL iBT test. The test cannot be taken more than once every 12 days.[9]
<h3><font size=5px color="orange"><b>Reading</b></font></h3>
<p align="justify">
The Reading section consists of questions on 4–6 passages, each approximately 700 words in length.
 The passages are on academic topics; they are the kind of material that might be found in an undergraduate university
  textbook. Passages require understanding of rhetorical functions such as cause-effect, 
  compare-contrast and argumentation. Students answer questions about main ideas, details, 
  inferences, essential information, sentence insertion, vocabulary, rhetorical purpose and overall ideas. 
  New types of questions in the TOEFL iBT test require filling out tables or completing summaries.
   Prior knowledge of the subject under discussion is not necessary to come to the correct answer.
  </p>
<h3><font size=5px color="orange"><b>Listening</b></font></h3>
<p align="justify">The Listening section consists of questions on six passages,
     each 3–5 minutes in length. These passages include two student
      conversations and four academic lectures or discussions.
       The conversations involve a student and either a professor or a campus service provider.
        The lectures are a self-contained portion of an academic lecture, which may involve student participation 
        and does not assume specialized background knowledge in the subject area.
         Each conversation and lecture passage is heard only once. 
         Test-takers may take notes while they listen and they may refer to their notes when they answer the questions. 
         Each conversation is associated with five questions and each lecture with six.
          The questions are meant to measure the ability to understand main ideas, important details,
           implications, relationships between ideas, organization of information, speaker purpose and speaker attitude.
          </p>
<h3><font size=5px color="orange"><b>Speaking</b></font></h3>
<p align="justify">
The Speaking section consists of six tasks: two independent and four integrated.
 In the two independent tasks, test-takers answer opinion questions on familiar topics. 
 They are evaluated on their ability to speak spontaneously and convey their ideas clearly and coherently.
  In two of the integrated tasks, test-takers read a short passage, listen to an academic course lecture or
   a conversation about campus life and answer a question by combining appropriate information from the text and the talk
   . In the two remaining integrated tasks, test-takers listen to an academic course lecture or a conversation about 
   
   campus life and then respond to a question about what they heard. In the integrate
   d tasks, test-takers are evaluated on their ability to appropriately synthesize and effectively convey information 
   from the reading and listening material. Test-takers may take notes as they read and listen and may use their notes 
   to help prepare their responses. Test-takers are given a short preparation time before they have to begin speaking.
    The responses are digitally recorded, sent to ETS’s Online Scoring Network (OSN), and evaluated by three to six
     raters.
    </p>

<h3><font size=5px color="orange"><b>Writing</b></font></h3>

<p>
The Writing section measures a test taker's ability to write in an academic setting and consists of two tasks: one integrated and one independent. In the integrated task, test-takers read a passage on an academic topic and then listen to a speaker discuss it. The test-taker then writes a summary about the important points in the listening passage and explains how these relate to the key points of the reading passage. In the independent task, the test-taker must write an essay that states their opinion or choice, and then explain it, rather than simply listing personal preferences or choices. Responses are sent to the ETS OSN and evaluated by at least 3 different raters.[10]
</p>
</div>
<h3><font size=5px color="orange" id="hh"><b>Consultants</b></font></h3>
  
  
  <div>
    
    
    <img src = "gly/consu.jpg" id="cons" height="150">
    <img src = "gly/application.jpg" id = "app" width="400" height="150">
    <img src = "gly/scholar.jpg" id = "schol">
    <img src = "gly/people.jpg" id="people" width="700" height="250">
    
<p align="justify" id = "acc3">  
<font size = 5px color="red"><b><h3 align="center">"Applying through educational agencies and consultancies!!"</h3></b></font></br>
<font size= 5px color="red"><h3 align="center"><b>"Should I apply independently or through an agent or consultancy?"</b></h3></font></br>
</p>
<p id = "acc3" align="justify">
<h4 align="center"><b>Applying is not rocket science-you can do it yourself</b></h4>
<p align="justify">
It is much better if you submit your application independently.
Below you can find a few reasons why:
Sending your application through an agent or consultancy will not give you any advantage in the student selection process. The Finnish higher education institutions choose their students solely on the basis of the admission requirements, and no agency or consultancy can "secure" or "guarantee" you a study place. In other words, the agency or consultancy has no say whatsoever in the student selection procedures.
Information provided by this kind of agencies and consultancies may be unreliable, misleading, or even completely untrue and fraudulent. So if you let an agency or consultancy submit an application on your behalf, you are taking a big risk. You will not be fully in charge of your application yourself. For example, all the important communication from the Finnish higher education institutons' Admissions Offices might not reach you at all, but only goes to the agency or consultancy. The worst scenario is that the fraudulent agent or consultancy will blackmail "extra fees" from you during or even after the actual application process. That's why you should only use your own personal contact details in the application process and fill out all the required application forms yourself - if this is for some reason not possible for you, then please contact the Finnish university/UAS you are interested in applying to and ask how to use a legal repesentative.
Why should you pay for something that you can easily get for free? The Finnish higher education admission services are always free of charge. You do not need to pay any application fees, and you can always turn to the Finnish institutions' Admissions Offices for free advice relating to the application procedures, entry requirements etc.
Even though there is currently no application fee when applying to Finnish higher education, during the official application procedure you should still prepare to cover the following: postage charge of documents to Finland, (possible) entrance examination fee, insurance charge and visa/student residence permit application fee. Instead of paying some agent or consultancy for something you can do for free yourself, you might wish to save your money for these official and necessary costs.
If you apply via an agency or consultancy, you are not giving a good general impression of yourself as a prospective student. Think about it this way: if you let someone else handle your application, it implies that you'd rather not invest any time or effort into the application process (which is supposed to be an important step in your student career) - does this make you seem like an independently thinking and active student candidate?
What should you do then?

In short, we recommend that you always carry out the whole application process independently, without any third party between you as the applicant and the Finnish university/UAS you are applying to.
First and foremost, you should always check all the admission-related details on the admissions pages of the Finnish university / polytechnic (UAS) you are interested in. You can find the institutions' admissions pages listed in the 'Where to study?' section of this website. If you need to ask about some particular detail of your application, the institutions' Admissions Offices are the best place to ask. They do not charge any fees for their services.    
</p>
</p>

</div>
</div>
   
       <div id="mymodal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" align="center">Rankings</h4>
                </div>
                <div class="modal-body">
                   <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Rankings</title>
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
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style type="text/css">
    .bs-example{
        margin: 20px;
        margin-left:25px;
        margin-right:25px;
    }
    
    #stage
    {
        margin-left:30px;
        border-radius:10px;
    }
    #jek
    {
        margin-right:220px;
    }
</style>
<div class="bs-example">
    <script>
    $(document).ready(function(){
        var x = "<table class = 'table table-hover' border= '1'><thead><tr><th>Universityname</th><th>UniversityRanking</th></tr></thead>";
        $.getJSON("http://localhost/bootstrap/twitter/jsoncreating.php",function(ss){
            $.each(ss,function(k,v)
            { 
                x+= "<tr><td>"+v.univname+"</td><td>"+v.univrank+"</td></tr>";
});
  $("#stage").html(x);

        });
    });
    </script></head>
    <head>
       <!-- <h1 align="center">University Rankings</h1>-->
        <head>
    </head>
    <body>
        
      <div id = "stage"></div>
    </body>
                   
                   
                  
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id= "jek">Close</button>   
    

</body>
</html>                                     