<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">

  
    <title>Product example · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/product/">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">

    <style>
.background {
  background-image: url('../img/posterbg1.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}
</style>


  </head>
  <body>

<?php 
include('../Component/Navbar.php');
?>


<div class="background">
<br><br><br>
<center><h2>Coronavirus disease (COVID-19): Home care for families and caregivers<span class="badge bg-secondary">New</span></h2></center>
<br>
<div class="accordion" id="accordionExample" style="width:70%;margin-left:auto;margin-right:auto;">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button 
        class="accordion-button bg-danger text-white"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#collapseOne"
        aria-expanded="true"
        aria-controls="collapseOne"
      >
Someone in my household tested positive for COVID-19. Is it safe to care for them at home?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-mdb-parent="#accordionExample">
      <div class="accordion-body">
        <p>People at high risk for severe illness and death from COVID-19 may require care that cannot be provided at home. Contact your healthcare provider for advice. People at high risk include:&nbsp;</p><ul><li>people aged 60 and older;&nbsp;</li><li>people who are pregnant and age 35 and older, and who are obese or have chronic medical conditions;</li><li>people&nbsp;of any age&nbsp;with chronic medical conditions (such as chronic cardiac, pulmonary, renal, metabolic, neurologic, liver or hematologic diseases); and&nbsp;</li><li>people with immunosuppressive conditions (such as HIV/AIDS, patients receiving chemotherapy or steroids, and people with cancer.)&nbsp;</li></ul><p>If you are in any high-risk groups and you are NOT vaccinated, you are at risk of more severe disease and death.</p><p>If you have recently tested positive for COVID-19 infection, have mild symptoms AND are at high risk of severe disease, contact your health provider. There may be effective treatments available to you.</p><p>If someone in your home is not at high risk for severe disease, tests positive for COVID-19, and has no <a href="https://www.who.int/multi-media/details/covid-19-coronavirus-symptoms">symptoms</a> or mild symptoms, they can usually be cared for safely at home. A quick guide to home care for people with COVID-19 infection can be found <a href="https://www.who.int/multi-media/details/home-care-for-covid-19-guide-for-family-and-caregivers">here</a>. As you take care of others, don’t forget to take care of yourself too. Wear a medical mask when sharing a space with someone with COVID-19. Everyone should follow prevention measures:<br></p><ul type="disc"><li>Stay at least 1 metre away from the sick person;</li><li>Where possible, open windows to bring fresh air into the sick person’s room;</li><li>Cough or sneeze into a bent elbow;</li><li>Clean your hands frequently; and</li><li>Get vaccinated as soon as it is your turn.</li></ul><p>Monitor the symptoms of the person with COVID-19 regularly, and call your healthcare provider immediately if you see any of these danger signs:</p><ul><li>Difficulty breathing</li><li>Chest pain</li><li>Confusion</li><li>Loss of speech or mobility</li></ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button
        class="accordion-button collapsed bg-danger text-white"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#collapseTwo"
        aria-expanded="false"
        aria-controls="collapseTwo"
      >
      Someone in my household tested positive for COVID-19. They have very mild symptoms, and our doctor says it is safe for me to care for them at home. What should I do to keep myself and others in the household healthy?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-mdb-parent="#accordionExample">
      <div class="accordion-body">
      <p>It’s hard when someone close to you is unwell. Even though you may want to provide comfort and company to your ill relative, it is important to reduce the likelihood that you or other family members catch COVID-19. For people with mild or moderate
symptoms, the best thing you can do is provide the care they need while also keeping a safe distance.</p>
<p><strong>First of all – protect the health of others in the household</strong></p><p>People with COVID-19 infection should (where possible) be isolated in a separate room, away from others in the home. If possible, close the door to stop air from moving from the infected person’s room into the rest of the home. If it’s safe,
open windows and turn on a fan in the room if you have one. No other visitors should be allowed in the home when someone in the household has COVID-19 infection. Follow guidance from your country’s health department or ministry about regarding
whether or not close contacts need to isolate at home.</p><p>If it is not possible to isolate the infected person in your home, try to move people at risk of severe disease to a household where they will not be exposed to possible infection.<br></p><p>If you have to share space in your home with someone with COVID-19, open windows to bring in fresh air if it’s safe to do so. COVID-19 spreads easily in places that are poorly ventilated. Learn more about <a href="https://www.who.int/news-room/questions-and-answers/item/coronavirus-disease-covid-19-ventilation-and-air-conditioning">ventilation</a>.<br><strong></strong></p>
<p><strong>Secondly - protect the health of the person caring for the person with COVID-19 infection</strong></p><p>The spread of the COVID-19 virus occurs most often when an infected person is in close or direct contact with another person. If possible, there should be only one person in the household providing care to the person who has COVID-19 infection.</p><p>If possible, choose someone to be the caregiver who is healthy and not at high risk. Caregivers should wash their hands before AND after any interaction with the person with COVID-19 infection. Both the caregiver and the person who is infected should
wear a medical mask whenever they share a space with each other. If possible, open windows when the caregiver is in the room with the person with COVID-19 infection.</p><p><strong>Monitor how you feel.</strong></p><p>Caregivers and others in a home with a person with COVID-19 infection should pay close attention to how they feel (even if they are vaccinated or are being careful). On average, if takes 5-6 days from when someone is infected for symptoms to show. However,
it can take up to 14 days.</p><p>Symptoms may vary. Monitor yourself and others in your home for any symptoms of COVID-19 -- including&nbsp;fever, cough, tiredness, loss of taste or smell, sore throat, muscle or body ache, headache, running nose, loss of appetite, nausea, diarrhea or
shortness of breath. Or altered mental status. &nbsp;Get tested if you have any of these symptoms.&nbsp;</p><p>Seek immediate medical care if you have any of these severe symptoms of COVID-19:&nbsp;</p><ul type="disc"><li>Difficulty breathing</li><li>Chest pain</li><li>Confusion</li><li>Loss of speech or mobility&nbsp;</li></ul><p>For young children, seek immediate medical care if you notice any of these symptoms:</p><ul><li>High fever</li><li>Rapid breathing</li><li>Lethargy or not interacting when awake</li><li>Difficulty in feeding (unable to drink or breastfeed) </li><li>Blue lips or face</li></ul><p>If you think you may have COVID-19 infection and are waiting for test results, avoid contact with other people if possible until you know whether or not you are infected.&nbsp;</p><p><strong>Watch for warning signs.</strong></p><p>Pay attention to any changes in the signs and symptoms a person with COVID-19 infection in your care. Some symptoms may be signals that more urgent medical care is needed. Depending on the age of the person in your care, their symptoms may look different.
Adults may look dehydrated, have shortness of breath or chest pains. They may also complain of light-headedness. Children may suddenly appear confused or refuse to eat. Their face or lips may turn blue. Babies may be unable to breastfeed. These symptoms
are warning signs that urgent care is needed.</p><p>If the person with COVID-19 infection under your care shows any of these signs, contact your healthcare provider immediately.&nbsp;</p><p><strong>Keep things clean.</strong></p><p>Any surfaces and household items touched by the person with COVID-19 infection should be cleaned and disinfected at least once a day. Household items include dishes, cups and flatware.&nbsp;</p><p>COVID-19 can spread from an infected person’s mouth or nose in small liquid particles when they cough, sneeze, speak, sing or breathe. These particles range from larger respiratory droplets to smaller aerosols.</p><p>Current evidence suggests that the virus spreads mainly between people who are in close contact with each other, typically within 1 metre. A person can be infected when aerosols or droplets containing the virus are inhaled or come directly into contact
with the eyes, nose, or mouth. The virus can also spread in poorly ventilated and/or crowded indoor settings, where people tend to spend longer periods of time. This is because aerosols remain suspended in the air or travel farther than 1 metre.</p><p>People may also become infected by touching surfaces that have been contaminated with the virus and then touching their eyes, nose or mouth without cleaning their hands.</p><p><strong>Continue to practice prevention measures</strong>.</p><ul><li>Keep a distance of at least 1 meter from others;</li><li>Wear a well-fitted mask over your mouth and nose;</li><li>Open windows</li><li>Cough or sneeze into a bent elbow;</li><li>Clean your hands frequently; and</li><li>Get vaccinated as soon as it’s your turn.</li></ul>

      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button
        class="accordion-button collapsed bg-danger text-white"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#collapseThree"
        aria-expanded="false"
        aria-controls="collapseThree"
      >
My child has tested positive for COVID-19. What should I do?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-mdb-parent="#accordionExample">
      <div class="accordion-body">
<p>If your child tests positive for COVID-19, contact your healthcare provider for guidance. You should seek immediate care if a baby is unable to breastfeed, or if a child is unable to drink, has high fever, rapid breathing, suddenly appears lethargic or doesn’t interact when they are awake, or if their face or lips turn blue.</p><p>It’s natural to feel concerned or anxious about your child’s health if they are infected with COVID-19.&nbsp; While some of the same <a href="https://www.who.int/multi-media/details/What-to-do-in-your-household-if-your-child-tests-positive-for-COVID-19">home care</a> guidance applies to children and adults, there are special considerations when taking care of child.</p><p><strong>Take care of the child with COVID-19 infection</strong></p><p>It is natural for children to be anxious and concerned after testing positive for COVID-19. Listen to their concerns, and help them understand why it’s important to rest and keep a distance from other family members. Encourage them to rest, to stay hydrated and to eat healthy foods. If they are old enough, talk to them about COVID-19 and share accurate information. Reassure your child that their health and safety is your top priority.</p><p>Be responsive to your child’s needs. Think up ways together for children to stay connected with other family members and friends. Make the space in which the child and caregiver are isolating as child-friendly as possible. Play and learning continue to be an important part of a child’s life.&nbsp;</p>Learn more about <a href="https://www.who.int/multi-media/details/helping-children-cope-with-stress-during-covid-19-outbreak">helping children hope with stress</a>.<p></p><p><strong>Reduce contact with others</strong></p><p>The spread of the COVID-19 virus occurs most often when a person with COVID-19 infection is in close or direct contact with another person.</p><p>WHO recommends that people with COVID-19 be isolated in a separate room away from other members of the household. However, children should not be isolated on their own. If possible, there should be only one person, who is healthy and not at high risk, in the household providing care to the child with infection. The designated caregiver should take care of the child at all times and monitor their symptoms and safety.</p><p>The caregiver should wear a medical mask when caring for the infected child and should wash their hands before AND after any interaction with the infected child. If it is possible and safe, keep the room or space well ventilated and open windows frequently. The child with COVID-19 infection should wear a medical mask in shared spaces, as long as the child can tolerate it.</p><p><strong>Prevent transmission to others</strong></p><p>If it is safe and possible, open windows to get fresh air into the room where the child with COVID-19 infection is staying. Where it is not possible to separate the child and caregiver from the rest of the family, try to separate those at high risk for severe disease from the child with infection and their caregiver.&nbsp;&nbsp;</p><p>Keep things clean: Any surfaces and household items, such as dishes, cups and cutlery, touched by the child with COVID-19 infection should be cleaned and disinfected at least once a day.&nbsp;Separate dishes and eating utensil should be used from the infected child.</p><p>Encourage members of the household to clean their hands frequently using soap and water or an alcohol-based hand sanitiser.</p><p><strong>Monitor the child with COVID-19 infection and others</strong></p><p>The caregiver and others in a home with a child with COVID-19 infection should pay close attention to how they feel (even if they are vaccinated or are being careful). On average, it takes 5-6 days from when someone is infected for symptoms to show. However, it can take up to 14 days.</p><p>The caregiver and others in your home should pay attention for any symptoms of COVID-19: including&nbsp;fever, cough, tiredness, loss of taste or smell, sore throat, muscle or body ache, diarrhoea or shortness of breath. Get tested if you have any of these symptoms.&nbsp;</p><p>Seek immediate medical care if you have any of these severe symptoms of COVID-19:&nbsp;</p><ul type="disc"><li>Difficulty breathing</li><li>Chest pain</li><li>Confusion</li><li>Loss of speech or mobility&nbsp;</li></ul><p>The caregiver should pay attention and monitor COVID-19 symptoms of the child with infection regularly and seek immediate medical care if notice any of these symptoms:</p><ul type="disc"><li>High fever</li><li>Rapid breathing</li><li>Lethargy or not interacting when awake</li><li>Difficulty in feeding (unable to drink or breastfeed)</li><li>Blue lips or face</li></ul><p></p><p></p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button
        class="accordion-button collapsed bg-danger text-white"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#collapseFour"
        aria-expanded="false"
        aria-controls="collapseFour"
      >
      Our healthcare provider has recommended that I use a pulse oximeter as part of the care I am providing at home to a COVID-19 patient. What is a pulse oximeter and what does it do?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-mdb-parent="#accordionExample">
      <div class="accordion-body">
      <p>A pulse oximeter is a small medical device used to measure the level of oxygen in the blood. People with COVID-19 may have low oxygen levels, which can be life-threatening.</p><p>To measure the level of oxygen in the blood, a pulse oximeter is usually placed on the finger or toe of the person who is sick. Using a pulse oximeter is painless and only takes a few minutes. If your healthcare provider recommends the use of a pulse oximeter, be sure to get instructions about how to use it and how to read and understand the results, and report them to your healthcare provider. Accurate measurements and readings from a pulse oximeter are important signs in determining if and when a COVID-19 patient at home may need urgent care at a healthcare facility. As a general rule, a decline below 90%, or a progressive downwards trend, can be an early warning of need for further medical assessment.</p><p>Most COVID-19 patients being cared for at home will not require a pulse oximeter. <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/media-resources/science-in-5/episode-33---medical-oxygen">Learn more about medical oxygen and pulse oximeters.</a></p>

      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button
        class="accordion-button collapsed  bg-danger text-white"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#collapseFive"
        aria-expanded="false"
        aria-controls="collapseFive"
      >
      What should I do if the symptoms of the person with COVID-19 infection in my care seem to be getting worse?
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-mdb-parent="#accordionExample">
      <div class="accordion-body">
      <p>If symptoms worsen, contact your healthcare provider immediately.<br></p><p>Some symptoms may be signals that more urgent medical care is needed. Depending on the age of the person in your care, their symptoms may look different. Adults may look dehydrated, have shortness of breath or chest pains. They may also complain of light-headedness. Children may suddenly appear confused or refuse to eat. Their face or lips may turn blue. Babies may be unable to breastfeed. These symptoms are warning signs that urgent care is needed.</p>

      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button
        class="accordion-button collapsed bg-danger text-white"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#collapseSix"
        aria-expanded="false"
        aria-controls="collapseSix"
      >How long does the person with COVID-19 infection need to stay in isolation?
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-mdb-parent="#accordionExample">
      <div class="accordion-body">
      <p>People with symptoms should stay isolated for a minimum of 10 days after the first day they developed symptoms, plus another 3 days after the end of symptoms – when they are without fever and without respiratory symptoms.&nbsp;&nbsp;</p><p>People without symptoms should stay isolated for a minimum of 10 days after testing positive.&nbsp;</p><p>Monitor the symptoms of the person with COVID-19 infection’s symptoms regularly, and call your healthcare provider immediately if you see any of these danger signs:</p><ul type="disc"><li>Difficulty breathing</li><li>Chest pain</li><li>Confusion</li><li>Loss of speech or mobility</li></ul><p>For young children, seek immediate medical care if you notice any of these symptoms:</p><ul type="disc"><li>High fever</li><li>Rapid breathing</li><li>Lethargy or not interacting when awake</li><li>Difficulty in feeding (unable to drink or breastfeed)</li><li>Blue lips or face</li></ul><p></p><p></p>

      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button
        class="accordion-button collapsed bg-danger text-white"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#collapseSeven"
        aria-expanded="false"
        aria-controls="collapseSeven"
      >
Someone in my household has COVID-19. Do other people in the household need to isolate?
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-mdb-parent="#accordionExample">
      <div class="accordion-body">
      <p>WHO recommends that people who have been in contact with a person with COVID-19 infection should quarantine themselves if they have had face-to-face or direct physical contact with someone who has COVID-19 infection or is suspected to have COVID-19 infection. People who have not used medical masks or appropriate personal protective equipment in caring for someone with COVID-19 infection should also quarantine, if possible.<o:p></o:p><br></p><p>Many countries and regions have their own policies about isolation and quarantine for people who have been in contact with people who have COVID-19 infection. Follow the guidance from your health department or ministry.<o:p></o:p></p>

      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingEight">
      <button
        class="accordion-button collapsed bg-danger text-white"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#collapseEight"
        aria-expanded="false"
        aria-controls="collapseEight"
      >
      If I have been vaccinated against COVID-19, can I safely care for someone with COVID-19 infection without risk?
      </button>
    </h2>
    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-mdb-parent="#accordionExample">
      <div class="accordion-body">
      <p>No. Even if you have been vaccinated, it is important to continue practicing all other prevention measures too. Vaccination does not fully protect you against infection, and you may still spread the virus to others if you are infected. WHO recommends that you should still wear a medical mask and follow prevention measures when you are caring for someone with COVID-19 infection, even if you are vaccinated. <br></p><p>Even though the COVID-19 vaccines are highly effective against serious disease and death, some people will still get infected or ill after they have been vaccinated. There is still a chance you could be infected with the virus and pass it on to other people around you who have not been vaccinated.</p>

      </div>
    </div>
  </div>




</div>
<br> &nbsp; <br> &nbsp; <br>  
</div>
  </body>
  <?php
include('../Component/Footer.php');
?>
</html>
