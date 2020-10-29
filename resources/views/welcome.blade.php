<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('landingpage/css/main.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

    
                                         <!--    header  -->
    <header>
      
        <div class="hero container "> 
            <h1 id="sizeup3"> Manage your time, reach your goals and get rewarded </h1>
            <h2 id="sizeup">“You're going to pay a price for every bloody thing you do and everything you don't do.
                 You don't get to choose to not pay a price. You get to choose which poison you're going to take.
                  That's it.”
                </h2> 
            <h3 id="sizeup2">― Jordan B. Peterson</h3>
            <div class="buttons">   
            <a type="button"  href="{{ route('login') }}" class="sub-btn">Login</a>
              <a type="button" href="{{ route('register') }}"  class="sub-btn">Register</a>
             </div>
        </div>
    </header>
                                     <!--    why section  -->
    <div class=" why container ">
      <h1> Why improve yourslef?  </h1>
      <iframe 
      src="https://www.youtube.com/embed/PE0u7-SX2hs">
      </iframe>
      <h2> “As human beings, our greatness lies not so much in being able to remake the world – that is the myth of the atomic age – as in being able to remake ourselves.” ― Mahatma Gandhi </h2>

    </div>
                                      <!--    tipingPoint section  -->
    <div class=" why container ">
      <h1> Now is your tipping point</h1>
      <img src="{{ asset('landingpage/images/tipping.jpg')}}" alt="">
      <h2> In time, your progress will become exponential.</h2>
      <div class="buttons">   
      <a type="button"  href="{{ route('login') }}" class="sub-btn">Login</a>
              <a type="button" href="{{ route('register') }}"  class="sub-btn">Register</a>
    </div>
    </div>
                                       <!--    Goals section  -->
    <div class=" why container goals ">
      <h1> Why goals are important? </h1>
      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="10000">
            <h2> Goals – manages your reality </h2>
            <h3>
              Reality is too complex for you mentality and sensory system. So your RAS(reticular activation system) focuses your limited resources on your goals. You don’t even see that have no impact on your goals.
              </h3>
          </div>
          <div class="carousel-item" data-interval="2000">
           
            <iframe  src="https://www.youtube.com/embed/vJG698U2Mvo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          
          </div>
          <div class="carousel-item">
            <h2> 
              Goals- manages your emotions.
              </h2>
              <h3> Moving towards your goals and encountering tools to help – gives positive emotions.</h3>
              <h3> Moving away your goal or encountering obstacles – gives you negative emotions.  </h3>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>


    <div class="why container  ">

      <h1 >Rewards/Dopamin</h1>
      <div class="services-content"> 

     <div class='servis'>
          
          <div class="line">
          <div class="top"></div>
          </div>
           <div class='head'> Driving forces </div>
           <div class='text'> Two things drive human actions: necessities — food, sleep, avoidance of pain; and rewards. Any object, event, or activity can be a reward if it motivates us, causes us to learn, or elicits pleasurable feelings.</div>
          </div> 
        <div class='servis'>
                    
            <div class="line">
            <div class="top"></div>
            </div>
            <div class='head'> Operant conditioning  </div>
            <div class='text'> is a type of associative learning process through which the strength of a behavior is modified by reinforcement or punishment. </div>
            </div> 
      <div class='servis'>

        <div class="line">
        <div class="top"></div>
        </div>
         <div class='head'> Reward System </div>
         <div class='text'>  When exposed to a rewarding stimulus, the brain responds by increasing release of the neurotransmitter dopamine and thus the structures associated with the reward system are found along the major dopamine pathways in the brain.</div>
        </div> 

   
          <div class='servis'>
           
            <div class="line">
            <div class="top"></div>
            </div>
             <div class='head'> Dopamine </div>
             <div class='text'>Dopamine is a neurotransmitter made in the brain. Basically, it acts as a chemical messenger between neurons.

              Dopamine is released when your brain is expecting a reward.</div>
            </div> 
          </div>
            <div class="buttons">   
              <a type="button"  href="{{ route('login') }}" class="sub-btn">Login</a>
              <a type="button" href="{{ route('register') }}"  class="sub-btn">Register</a>
          
             </div>
    </div>
    
    <footer></footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="{{ asset('landingpage/js/jquery.fittext.js')}}"></script>

<script>
  jQuery("#sizeup").fitText(4, { minFontSize: '20px', maxFontSize: '40px' });
  jQuery("#sizeup2").fitText(6, { minFontSize: '20px', maxFontSize: '40px' });
  jQuery("#sizeup3").fitText(2, { minFontSize: '30px', maxFontSize: '60px' });
</script>
</body>
</html>