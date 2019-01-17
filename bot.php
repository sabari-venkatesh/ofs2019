<?php if($page === "Home"):?>
<div class="bot-content">
  <div class="bot-head">
    <img src="./img/Bot_Icon.png" alt="" class="mr-3"/>
    <span>
      Hey, My name is <strong>OFS Bot!</strong> I can guide you through our web content
    </span>
  </div>
  <div class="bot-body">
    <div class="bot-bubble is-bot">
      We have two <strong>Upcoming events</strong> this month. Would you like to register?
    </div>
    <div class="bot-bubble is-bot">
      <span class="bubble-title">Event</span>
      <ul class="bot-results">
        <li>
          <a href="">
            <span class="result-title">Big Data & Machine Learning Leaders Summit</span>
            <span class="result-body">December 20-22, 2018 | Santa Clara, CA</span>
          </a>
        </li>
        <li>
          <a href="./think19.php" class="action-item">
            <span class="result-title">Join us at Think 2019 - Expand your skill set with inspiring sessions</span>
            <span class="result-body">Februrary 20-22, 2018 | Santa Clara, CA</span>
          </a>
        </li>
        <li class="result-more">
          <a href="">View Past Events</a>
        </li>
      </ul>
    </div>
    <div class="bot-bubble is-human">
      Yes
    </div>
  </div>
</div>
<div class="bot-foot">
  <textarea rows="1" class="bot-input" placeholder="How can I help you?"></textarea>
  <button type="submit" class="bot-button"></button>
</div>




<?php elseif($page === "Blockchain"): ?>
<div class="bot-content">
  <div class="bot-head bg-light">
    <img src="./img/Bot_Icon.png" alt="" class="mr-3"/>
    <span>
      If you find our <strong>Blockchain Offering!</strong> is interesting, here are few related resources. I hope you find it useful.
    </span>
  </div>
  <div class="bot-body">
    <ul class="bot-offerings">
      <li><a href="">Topics (1)</a></li>
      <li><a href="">Case studies (1)</a></li>
      <li><a href="" disabled>Whitepapers (0)</a></li>
      <li><a href="">Blogs (1)</a></li>
      <li><a href="" disabled>Events (0)</a></li>
      <li><a href="">Media (1)</a></li>
    </ul>
    <div class="bot-bubble is-bot">
      <span class="bubble-title">Topics</span>
      <ul class="bot-results">
        <li>
          <a href="./cloud.php" class="action-item">
            <span class="result-title">Cloud Platform</span>
            <span class="result-body">
              <strong>Cloud Platform</strong> got me think, and that is likely one of the biggest reasons to know
            </span>
          </a>
        </li>
      </ul>
    </div>

    <div class="bot-bubble is-bot">
      <span class="bubble-title">Case studies</span>
      <ul class="bot-results">
        <li>
          <a href="">
            <span class="result-title">Big Data & Machine Learning Leaders Summit</span>
            <span class="result-body">December 20-22, 2018 | Santa Clara, CA</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="bot-bubble is-bot">
      <span class="bubble-title">Blogs</span>
      <ul class="bot-results">
        <li>
          <a href="./think19.php">
            <span class="result-title">Expand your skillset with inspiring sessions</span>
            <span class="result-body">Multicloud integration architecture provides secure gateway for data governance analytics</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="bot-bubble is-bot">
      <span class="bubble-title">Media</span>
      <ul class="bot-results">
        <li>
          <a href="./think19.php">
            <span class="result-title">Mercedes Benz delivers an ultimate experience</span>
            <span class="result-body">Watch how (04:57)</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="bot-foot">
  <textarea rows="1" class="bot-input" placeholder="How can I help you?"></textarea>
  <button type="submit" class="bot-button"></button>
</div>




<?php elseif($page === "Cloud Platform" || $page === "IAAS" || $page === "White paper"): ?>
<div class="bot-content">
  <div class="bot-head bg-light">
    <img src="./img/Bot_Icon.png" alt="" class="mr-3"/>
    <span>
      If you find our <strong>Cloud Platform</strong> is interesting, here are few related resources. I hope you find it useful.
    </span>
  </div>
  <div class="bot-body">
    <ul class="bot-offerings">
      <li><a href="#topics">Topics (1)</a></li>
      <li><a href="#cs">Case studies (5)</a></li>
      <li><a href="#wp">Whitepapers (4)</a></li>
      <li><a href="#blogs">Blogs (3)</a></li>
      <li><a href="#events">Events (4)</a></li>
      <li><a href="#media">Media (4)</a></li>
    </ul>
    <div class="bot-bubble is-bot">
      <span class="bubble-title" id="topics">Topics</span>
      <ul class="bot-results">
        <li>
          <a href="./cloud.php">
            <span class="result-title">CloudOps</span>
            <span class="result-body">
              <strong>Google Cloud Platform</strong> services guide aka Cloudops
            </span>
          </a>
        </li>
      </ul>
    </div>

    <div class="bot-bubble is-bot">
      <span class="bubble-title" id="cs">Case studies</span>
      <ul class="bot-results">
        <li>
          <a href="./caseStudy.php" class="action-item">
            <span class="result-title">Reinventing Processes by Smart Contracts</span>
            <span class="result-body">"Blockchain, Blockchain & Blockchain", a word, repeated N number of
              times from tech from astrologers!</span>
          </a>
        </li>
        <li>
          <a href="./caseStudy.php">
            <span class="result-title">Big Data & Machine Learning Leaders Summit</span>
            <span class="result-body">A cloud-enabled organization generally relies on a cloud provider for basic to enterprise grade IT</span>
          </a>
        </li>
        <li class="result-more">
          <a href="">View +3</a>
        </li>
      </ul>
    </div>

    <div class="bot-bubble is-bot">
      <span class="bubble-title" id="blogs">Blogs</span>
      <ul class="bot-results">
        <li>
          <a href="./think19.php">
            <span class="result-title">Expand your skillset with inspiring sessions</span>
            <span class="result-body">Multicloud integration architecture provides secure gateway for data governance analytics</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="bot-bubble is-bot">
      <span class="bubble-title" id="media">Media</span>
      <ul class="bot-results">
        <li>
          <a href="./think19.php">
            <span class="result-title">Mercedes Benz delivers an ultimate experience</span>
            <span class="result-body">Watch how (04:57)</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="bot-foot">
  <textarea rows="1" class="bot-input" placeholder="How can I help you?"></textarea>
  <button type="submit" class="bot-button"></button>
</div>






<?php elseif($page === "Think 19"): ?>
<div class="bot-content">
  <div class="bot-head bg-light">
    <img src="./img/Bot_Icon.png" alt="" class="mr-3"/>
    <span>
      Here are the few interesting assets related to <strong>IBM Think 2019</strong> event!!
    </span>
  </div>
  <div class="bot-body">
    <ul class="bot-offerings">
      <li><a href="#topics">Topics (1)</a></li>
      <li><a href="#cs">Case studies (4)</a></li>
      <li><a href="#wp">Whitepapers (2)</a></li>
      <li><a href="#blogs">Blogs (1)</a></li>
      <li><a href="#events">Events (1)</a></li>
      <li><a href="#media">Media (1)</a></li>
    </ul>
    <div class="bot-bubble is-bot">
      <span class="bubble-title" id="topics">Topics</span>
      <ul class="bot-results">
        <li>
          <a href="./think19.php">
            <span class="result-title">IBM Think 2019</span>
            <span class="result-body">
              <strong>IBM Think</strong> got me think, and that is likely one of the biggest reasons to know
            </span>
          </a>
        </li>
      </ul>
    </div>

    <div class="bot-bubble is-bot">
      <span class="bubble-title" id="cs">Case studies</span>
      <ul class="bot-results">
        <li>
          <a href="">
            <span class="result-title">Big Data & Machine Learning Leaders Summit</span>
            <span class="result-body">December 20-22, 2018 | Santa Clara, CA</span>
          </a>
        </li>
        <li>
          <a href="./think19.php">
            <span class="result-title">Join us at Think 2019 - Expand your skill set with inspiring sessions</span>
            <span class="result-body">Februrary 20-22, 2018 | Santa Clara, CA</span>
          </a>
        </li>
        <li class="result-more">
          <a href="">View +2</a>
        </li>
      </ul>
    </div>

    <div class="bot-bubble is-bot">
      <span class="bubble-title" id="wp">Whitepapers</span>
      <ul class="bot-results">
        <li>
          <a href="./think19.php">
            <span class="result-title">Unleash digital intelligence with data and apps</span>
            <span class="result-body">Multicloud integration architecture provides secure gateway for data governance analytics</span>
          </a>
        </li>
        <li>
          <a href="./think19.php">
            <span class="result-title">Expand your skillset with inspiring sessions</span>
            <span class="result-body">Februrary 20-22, 2018 | Santa Clara, CA</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="bot-bubble is-bot">
      <span class="bubble-title" id="blogs">Blogs</span>
      <ul class="bot-results">
        <li>
          <a href="./think19.php">
            <span class="result-title">Expand your skillset with inspiring sessions</span>
            <span class="result-body">Multicloud integration architecture provides secure gateway for data governance analytics</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="bot-bubble is-bot">
      <span class="bubble-title" id="events">Events</span>
      <ul class="bot-results">
        <li>
          <a href="./think19.php">
            <span class="result-title">Expand your skillset with inspiring sessions</span>
            <span class="result-body">Multicloud integration architecture provides secure gateway for data governance analytics</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="bot-bubble is-bot">
      <span class="bubble-title" id="media">Media</span>
      <ul class="bot-results">
        <li>
          <a href="./think19.php">
            <span class="result-title">Mercedes Benz delivers an ultimate experience</span>
            <span class="result-body">Watch how (04:57)</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="bot-foot">
  <textarea rows="1" class="bot-input" placeholder="How can I help you?"></textarea>
  <button type="submit" class="bot-button"></button>
</div>





<?php elseif($page === "Case study"): ?>
<div class="bot-content">
  <div class="bot-head bg-light">
    <img src="./img/Bot_Icon.png" alt="" class="mr-3"/>
    <span>
      Here are the few interesting assets related to <strong>IBM Think 2019</strong> event!!
    </span>
  </div>
  <div class="bot-body">
    <ul class="bot-offerings">
      <li><a href="#topics">Topics (1)</a></li>
      <li><a href="#cs">Case studies (4)</a></li>
      <li><a href="#wp">Whitepapers (2)</a></li>
      <li><a href="#blogs">Blogs (0)</a></li>
      <li><a href="#events">Events (1)</a></li>
      <li><a href="#media">Media (0)</a></li>
    </ul>
    <div class="bot-bubble is-bot">
      <span class="bubble-title">Topics</span>
      <ul class="bot-results">
        <li>
          <a href="./cloud.php">
            <span class="result-title">Cloud Platform</span>
            <span class="result-body">
              <strong>Cloud Platform</strong> to Provide Rapid-Deployment Blockchain Solutions. Combined with cloud computing ...
            </span>
          </a>
        </li>
      </ul>
    </div>

    <div class="bot-bubble is-bot">
      <span class="bubble-title">Case studies</span>
      <ul class="bot-results">
        <li>
          <a href="">
            <span class="result-title">Big Data & Machine Learning Leaders Summit</span>
            <span class="result-body">December 20-22, 2018 | Santa Clara, CA</span>
          </a>
        </li>
        <li>
          <a href="./think19.php">
            <span class="result-title">Join us at Think 2019 - Expand your skill set with inspiring sessions</span>
            <span class="result-body">Februrary 20-22, 2018 | Santa Clara, CA</span>
          </a>
        </li>
        <li class="result-more">
          <a href="">View +2</a>
        </li>
      </ul>
    </div>

    <div class="bot-bubble is-bot">
      <span class="bubble-title">Whitepapers</span>
      <ul class="bot-results">
        <li>
          <a href="./think19.php">
            <span class="result-title">Unleash digital intelligence with data and apps</span>
            <span class="result-body">Multicloud integration architecture provides secure gateway for data governance analytics</span>
          </a>
        </li>
        <li>
          <a href="./think19.php">
            <span class="result-title">Expand your skillset with inspiring sessions</span>
            <span class="result-body">Februrary 20-22, 2018 | Santa Clara, CA</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="bot-bubble is-bot">
      <span class="bubble-title">Events</span>
      <ul class="bot-results">
        <li>
          <a href="./think19.php">
            <span class="result-title">Expand your skillset with inspiring sessions</span>
            <span class="result-body">Multicloud integration architecture provides secure gateway for data governance analytics</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="bot-foot">
  <textarea rows="1" class="bot-input" placeholder="How can I help you?"></textarea>
  <button type="submit" class="bot-button"></button>
</div>


<?php endif; ?>