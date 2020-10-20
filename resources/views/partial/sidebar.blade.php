<a href="#" class="js-ideacat-nav-toggle ideacat-nav-toggle"><i></i></a>
<aside id="ideacat-aside" role="complementary" class="border js-fullheight">
  <div class="logo">
    <a href="/">
      <img id="logo" src="{{ url('images/logo.png') }}" alt="Razvan Iftode" width="120px" height="120px">
    </a>
  </div>
  <nav id="ideacat-main-menu" role="navigation">
    <ul>
      <li class="{{ Request::is('/') ? 'ideacat-active' : '' }}"><a href="{{ url('/')}}">Home</a></li>
      <li class="{{ Request::is('about') ? 'ideacat-active' : '' }}"><a href="{{ url('/about')}}">About</a></li>
      <li class="{{ Request::is('projects') ? 'ideacat-active' : '' }}"><a href="{{ url('/projects')}}">Projects</a></li>
      <li class="{{ Request::is('contact') ? 'ideacat-active' : '' }}"><a href="{{ url('/contact')}}">Contact</a></li>
    </ul>
  </nav>
  <div class="ideacat-footer">
      <ul class="ul-social-icon">
        <li class="li-social-icon"><a href="{{url('https://www.behance.net/RazvanIftode')}}"><svg class="icon-behance icon-social" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        	 width="97.75px" height="97.75px" viewBox="0 0 97.75 97.75" style="enable-background:new 0 0 97.75 97.75;" xml:space="preserve"
        	>
        <g>
        	<g>
        		<path d="M39.337,38.729c0-4.611-3.137-4.611-3.137-4.611h-1.661H23.294v9.894H35.4C37.492,44.011,39.337,43.342,39.337,38.729z"/>
        		<path d="M36.201,50.846H23.294v11.85h12.311c1.852-0.053,5.27-0.633,5.27-5.76C40.875,50.784,36.201,50.846,36.201,50.846z"/>
        		<path d="M69.243,44.011c-6.849,0-7.804,6.835-7.804,6.835h14.565C76.005,50.846,76.092,44.011,69.243,44.011z"/>
        		<path d="M48.875,0C21.882,0,0,21.883,0,48.875S21.882,97.75,48.875,97.75S97.75,75.867,97.75,48.875S75.868,0,48.875,0z
        			 M59.531,28.848h18.294v5.46H59.531V28.848z M50.285,57.486c0,13.533-14.084,13.088-14.084,13.088H23.294h-0.379h-9.787V26.236
        			h9.787h0.379H36.2c7.012,0,12.547,3.871,12.547,11.805c0,7.935-6.766,8.438-6.766,8.438C50.9,46.479,50.285,57.486,50.285,57.486z
        			 M69.33,64.479c7.37,0,7.109-4.77,7.109-4.77h7.803c0,12.659-15.172,11.792-15.172,11.792c-18.207,0-17.036-16.95-17.036-16.95
        			S52.02,37.517,69.068,37.517c17.947,0,15.434,19.245,15.434,19.245H61.527C61.527,65.001,69.33,64.479,69.33,64.479z"/>
        	</g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        </svg>
</a></li>
        <li class="li-social-icon"><a href="#"><svg class="icon-social icon-facebook" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        	 viewBox="0 0 167.657 167.657" style="enable-background:new 0 0 167.657 167.657;" xml:space="preserve">
        <g>
        	<path  d="M83.829,0.349C37.532,0.349,0,37.881,0,84.178c0,41.523,30.222,75.911,69.848,82.57v-65.081H49.626
        		v-23.42h20.222V60.978c0-20.037,12.238-30.956,30.115-30.956c8.562,0,15.92,0.638,18.056,0.919v20.944l-12.399,0.006
        		c-9.72,0-11.594,4.618-11.594,11.397v14.947h23.193l-3.025,23.42H94.026v65.653c41.476-5.048,73.631-40.312,73.631-83.154
        		C167.657,37.881,130.125,0.349,83.829,0.349z"/>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        </svg>
</a></li>
        <li class="li-social-icon"><a href="#"><svg class="icon-social icon-linkedin" height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm-74.390625 387h-62.347656v-187.574219h62.347656zm-31.171875-213.1875h-.40625c-20.921875 0-34.453125-14.402344-34.453125-32.402344 0-18.40625 13.945313-32.410156 35.273437-32.410156 21.328126 0 34.453126 14.003906 34.859376 32.410156 0 18-13.53125 32.402344-35.273438 32.402344zm255.984375 213.1875h-62.339844v-100.347656c0-25.21875-9.027343-42.417969-31.585937-42.417969-17.222656 0-27.480469 11.601563-31.988282 22.800781-1.648437 4.007813-2.050781 9.609375-2.050781 15.214844v104.75h-62.34375s.816407-169.976562 0-187.574219h62.34375v26.558594c8.285157-12.78125 23.109375-30.960937 56.1875-30.960937 41.019531 0 71.777344 26.808593 71.777344 84.421874zm0 0"/></svg>
</a></li>
      </ul>

      <!-- <div class="footer2">
        <p class="ideacat-developer" >developed by <a href="{{ url('https://wwww.ideacat.ro')}}" target="_blank">IdeaCat</a>
      </div> -->

  </div>

</aside>
