<?php

/* :admin/dashboard:index.html.twig */
class __TwigTemplate_53a194f467fcd277edc5a2a4ebd2fe535ac5adf3101af6376681949448f0e529 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@EasyAdmin/default/layout.html.twig", ":admin/dashboard:index.html.twig", 1);
        $this->blocks = array(
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'head_javascript' => array($this, 'block_head_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/dashboard:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/dashboard:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.dashboard"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "


<script>

var signinCallback = function (result){
  if(result.access_token) {
    var uploadVideo = new UploadVideo();
    uploadVideo.ready(result.access_token);
  }
};

var STATUS_POLLING_INTERVAL_MILLIS = 60 * 1000; // One minute.


/**
 * YouTube video uploader class
 *
 * @constructor
 */
var UploadVideo = function() {
  /**
   * The array of tags for the new YouTube video.
   *
   * @attribute tags
   * @type Array.<string>
   * @default ['google-cors-upload']
   */
  this.tags = ['youtube-cors-upload'];

  /**
   * The numeric YouTube
   * [category id](https://developers.google.com/apis-explorer/#p/youtube/v3/youtube.videoCategories.list?part=snippet&regionCode=us).
   *
   * @attribute categoryId
   * @type number
   * @default 22
   */
  this.categoryId = 22;

  /**
   * The id of the new video.
   *
   * @attribute videoId
   * @type string
   * @default ''
   */
  this.videoId = '';

  this.uploadStartTime = 0;
};


UploadVideo.prototype.ready = function(accessToken) {
  this.accessToken = accessToken;
  this.gapi = gapi;
  this.authenticated = true;
  this.gapi.client.request({
    path: '/youtube/v3/channels',
    params: {
      part: 'snippet,statistics',
      mine: true
    },
    callback: function(response) {
      if (response.error) {
        console.log(response.error.message);
      } else {  
        \$('#channel-name').text(response.items[0].snippet.title);
        \$('#channel-thumbnail').attr('src', response.items[0].snippet.thumbnails.default.url);

        var id_youtube=response.items[0].id;
        var title_youtube=response.items[0].snippet.title;
        var subscriber_count= response.items[0].statistics.subscriberCount;
        var view_count= response.items[0].statistics.viewCount;
        var video_count= response.items[0].statistics.videoCount;
        var channel_description= response.items[0].snippet.description;
        var channel_customUrl=response.items[0].snippet.customUrl;
        var pseudo='";
        // line 84
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
        echo "';

      
        \$.ajax({
        type: 'post',
        url: 'https://platform-media.herokuapp.com/insertyoutube',
        data: { id_youtube: id_youtube,
                title_youtube: title_youtube,
                subscriber_count: subscriber_count,
                view_count: view_count,
                video_count: video_count,
                channel_description: channel_description,
                channel_customUrl: channel_customUrl,
                pseudo
        },
        success: function( data )
        {
        console.log( data );
        }
    });


        \$('.pre-sign-in').hide();
        \$('.post-sign-in').show();
      }
    }.bind(this)
  });
  \$('#button').on(\"click\", this.handleUploadClicked.bind(this));
};

/**
 * Uploads a video file to YouTube.
 *
 * @method uploadFile
 * @param {object} file File object corresponding to the video to upload.
 */
UploadVideo.prototype.uploadFile = function(file) {
  var metadata = {
    snippet: {
      title: \$('#title').val(),
      description: \$('#description').text(),
      tags: this.tags,
      categoryId: this.categoryId
    },
    status: {
      privacyStatus: \$('#privacy-status option:selected').text()
    }
  };
  var uploader = new MediaUploader({
    baseUrl: 'https://www.googleapis.com/upload/youtube/v3/videos',
    file: file,
    token: this.accessToken,
    metadata: metadata,
    params: {
      part: Object.keys(metadata).join(',')
    },
    onError: function(data) {
      var message = data;
      // Assuming the error is raised by the YouTube API, data will be
      // a JSON string with error.message set. That may not be the
      // only time onError will be raised, though.
      try {
        var errorResponse = JSON.parse(data);
        message = errorResponse.error.message;
      } finally {
        alert(message);
      }
    }.bind(this),
    onProgress: function(data) {
      var currentTime = Date.now();
      var bytesUploaded = data.loaded;
      var totalBytes = data.total;
      // The times are in millis, so we need to divide by 1000 to get seconds.
      var bytesPerSecond = bytesUploaded / ((currentTime - this.uploadStartTime) / 1000);
      var estimatedSecondsRemaining = (totalBytes - bytesUploaded) / bytesPerSecond;
      var percentageComplete = (bytesUploaded * 100) / totalBytes;

      \$('#upload-progress').attr({
        value: bytesUploaded,
        max: totalBytes
      });

      \$('#percent-transferred').text(percentageComplete);
      \$('#bytes-transferred').text(bytesUploaded);
      \$('#total-bytes').text(totalBytes);

      \$('.during-upload').show();
    }.bind(this),
    onComplete: function(data) {
      var uploadResponse = JSON.parse(data);
      this.videoId = uploadResponse.id;
      \$('#video-id').text(this.videoId);
      \$('.post-upload').show();
      this.pollForVideoStatus();
    }.bind(this)
  });
  // This won't correspond to the *exact* start of the upload, but it should be close enough.
  this.uploadStartTime = Date.now();
  uploader.upload();
};

UploadVideo.prototype.handleUploadClicked = function() {
  \$('#button').attr('disabled', true);
  this.uploadFile(\$('#file').get(0).files[0]);
};

UploadVideo.prototype.pollForVideoStatus = function() {
  this.gapi.client.request({
    path: '/youtube/v3/videos',
    params: {
      part: 'status,player',
      id: this.videoId
    },
    callback: function(response) {
      if (response.error) {
        // The status polling failed.
        console.log(response.error.message);
        setTimeout(this.pollForVideoStatus.bind(this), STATUS_POLLING_INTERVAL_MILLIS);
      } else {
        var uploadStatus = response.items[0].status.uploadStatus;
        switch (uploadStatus) {
          // This is a non-final status, so we need to poll again.
          case 'uploaded':
            \$('#post-upload-status').append('<li>Upload status: ' + uploadStatus + '</li>');
            setTimeout(this.pollForVideoStatus.bind(this), STATUS_POLLING_INTERVAL_MILLIS);
            break;
          // The video was successfully transcoded and is available.
          case 'processed':
            \$('#player').append(response.items[0].player.embedHtml);
            \$('#post-upload-status').append('<li>Final status.</li>');
            break;
          // All other statuses indicate a permanent transcoding failure.
          default:
            \$('#post-upload-status').append('<li>Transcoding failed.</li>');
            break;
        }
      }
    }.bind(this)
  });
};
</script>
 
 <!-- Header -->
    <div class=\"mdl-layout mdl-js-layout mdl-layout--fixed-header\">
        <header class=\"mdl-layout__header\">
          <div class=\"mdl-layout__header-row\">
            <!-- Title -->
            <span class=\"mdl-layout-title\">YouTube With VertinGo Website
            <a href=\"http://web-autosurf.com/?ref=8185\" target=\"_blank\"><img src=\"http://web-autosurf.com/promo/web-autosurf.gif\" alt=\"Web Autosurf Echange de Trafic, Facebook Fan Like, youtube vue , ptp\" border=\"0\" /></a><script language=\"javascript\" src=\"https://web-autosurf.com/reflink.js\"></script>

            
            </span>
            <!-- Add spacer, to align navigation to the right -->
            <div class=\"mdl-layout-spacer\">
            
            </div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class=\"mdl-navigation\">
            <!--  <a class=\"mdl-navigation__link\" href=\"#\"><b>Demo</b></a>-->
            <!--  <a class=\"mdl-navigation__link\" href=\"youtube/player_control.html\">Player Controls and Data</a>-->
            <!--  <a class=\"mdl-navigation__link\" href=\"youtube/event_listeners.html\">Event Listeners</a>-->
            </nav>
          </div>
        </header>
        ";
        // line 248
        if (($context["ACCESS_TOKEN_FROM_SERVICE_ACCOUNT"] ?? $this->getContext($context, "ACCESS_TOKEN_FROM_SERVICE_ACCOUNT"))) {
            // line 249
            echo "        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Site Traffic <i>Sessions vs. Users - last 30 days</i></div>
                    <div class=\"panel-body\">
                        <div id=\"chart-1-container\" class=\"text-center\"><img src=\"";
            // line 254
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/default.gif"), "html", null, true);
            echo "\" alt=\"\"/></div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Most Popular Demos/Tools <i>Pageviews - last 30 days</i></div>
                    <div class=\"panel-body\">
                        <div id=\"chart-2-container\" class=\"text-center\"><img src=\"";
            // line 262
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/default.gif"), "html", null, true);
            echo "\" alt=\"\"/></div>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        // line 268
        echo "        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Recherche et YouTube Analytics</i></div>
                    <div class=\"panel-body\">
                        <div id=\"buttons\">
                        <label> <input id=\"query\" value='cats' type=\"text\"/><button id=\"search-button\" disabled onclick=\"search()\">Search</button></label>
                        <script src=\"https://apis.google.com/js/api.js\"></script>
                        <script>
                        function authenticate() 
                        {
                              return gapi.auth2.getAuthInstance()
                            .signIn({scope: \"https://www.googleapis.com/auth/yt-analytics.readonly\"})
                            .then(function() { console.log(\"Sign-in successful\"); },
                            function(err) { console.error(\"Error signing in\", err); });
                        }

                        function loadClient() 
                        {
                              return gapi.client.load(\"https://youtubeanalytics.googleapis.com/\$discovery/rest?version=v2\")
                            .then(function() { console.log(\"GAPI client loaded for API\"); },
                            function(err) 
                            { 
                            console.error(\"Error loading GAPI client for API\", err); 
                            });
                        }

                        function convertDate(inputFormat) 
                        {
                              function pad(s) { return (s < 10) ? '0' + s : s; }
                              var d = new Date(inputFormat);
                              return [d.getFullYear(),pad(d.getMonth()+1),pad(d.getDate())].join('-');
                        }

                        // Make sure the client is loaded and sign-in is complete before calling this method.
                        function execute() 
                        {
                          var d = new Date();

                          return gapi.client.youtubeAnalytics.reports.query({
                          \"ids\": \"channel==MINE\",
                          \"start-date\": \"30daysAgo\",
                          \"end-date\": \"yesterday\",
                          //\"startDate\": \"2018-07-01\",
                          //\"endDate\": convertDate(d),
                          \"metrics\": \"views,estimatedMinutesWatched,averageViewDuration,averageViewPercentage,subscribersGained,likes,dislikes,shares\",
                          \"dimensions\": \"day\",
                          \"sort\": \"day\"
                          })
                          .then(function(response) 
                          {
                          // Handle the results here (response.result has the parsed body).
                          
                          console.log(\"Response\",response);

                              \$.ajax({
                              type: 'post',
                              url: 'https://platform-media.herokuapp.com/insertyoutubeanalytics',
                              data: { 
                                response: response.result.rows
                                },
                              success: function (response, request) {}
                          });
                          },
                          function(err) 
                          { 
                          console.error(\"Execute error\", err); 
                          });

                      }

                      gapi.load(\"client:auth2\", function() 
                      {
                          gapi.auth2.init({client_id: '882069140224-tna2rbns6nr1m409s6so4etpcao9dju5.apps.googleusercontent.com'});
                      });

                      </script>
                  
                      <button onclick=\"authenticate().then(loadClient)\">Authorize First And Load</button>
                      <button onclick=\"execute()\">Load YouTube Analytics</button>
                        </div>
                        <div id=\"search-container\">
                        </div>
                    </div>

                    <div class=\"panel-heading\">Synchroniser avec le TopSiteApp</i></div>
                    <div class=\"panel-body\">
                        <a href='https://play.google.com/store/apps/details?id=com.vertin_go.topsiteapp'><img src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/github/topsiteapp_demo.gif"), "html", null, true);
        echo "\" width='580px' height='270px'></a>
                        <a href='https://play.google.com/store/apps/details?id=com.vertin_go.topsiteapp'><img src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/github/Disponible-sur-App-Store-Logo.jpg"), "html", null, true);
        echo "\" width='600px' height='100px'></a>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Football LiveScore </i></div>
                    <div class=\"panel-body\">
                     <div style=\"width: 550px; height: 470px; overflow-y: scroll;\">
                     ";
        // line 366
        if ((isset($context["fctables"]) || array_key_exists("fctables", $context))) {
            // line 367
            echo "                     <iframe frameborder=\"0\"  scrolling=\"no\" width=\"530\" height=\"520\" src=\"https://www.fctables.com/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["fctables"] ?? $this->getContext($context, "fctables")), "championnat_favori", array()), "ranking", array()), "html", null, true);
            echo "&time=24&po=1&ma=1&wi=1&dr=1&los=1&gf=1&ga=1&gd=1&pts=1&ng=1&form=1&width=530&height=500&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&ths=1&thb=1&thba=FFFFFF&thc=000000&bc=dddddd&hob=f5f5f5&hobc=ebe7e7&lc=333333&sh=1&hfb=1&hbc=3bafda&hfc=FFFFFF\"></iframe><div style=\"text-align:center;\"></div>
                     <iframe frameborder=\"0\"  scrolling=\"no\" width=\"530\" height=\"440\" src=\"https://www.fctables.com/";
            // line 368
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["fctables"] ?? $this->getContext($context, "fctables")), "championnat_favori", array()), "live", array()), "html", null, true);
            echo "&time=24&width=520&height=440&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&scoreb=f4454f&scorefc=FFFFFF&sgdcoreb=8f8d8d&sgdcorefc=FFFFFF&sh=1&hfb=1&hbc=3bafda&hfc=FFFFFF\"></iframe><div style=\"text-align:center;\"></div>
                     <iframe frameborder=\"0\"  scrolling=\"no\" width=\"530\" height=\"290\" src=\"https://www.fctables.com/";
            // line 369
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["fctables"] ?? $this->getContext($context, "fctables")), "championnat_favori", array()), "topscorer", array()), "html", null, true);
            echo "&time=24&limit=10&ppo=1&pte=1&pgo=1&pma=1&pas=1&ppe=1&width=530&height=700&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&ths=1&thb=1&thba=FFFFFF&thc=000000&bc=dddddd&hob=f5f5f5&hobc=ebe7e7&lc=333333&sh=1&hfb=1&hbc=3bafda&hfc=FFFFFF\"></iframe><div style=\"text-align:center;\"></div>
                     <a href=\"https://www.fctables.com/players/lionel_messi-271592/\" title=\"Lionel Messi stats\"><img src=\"https://www.fctables.com/uploads/infographics/profil/";
            // line 370
            echo twig_escape_filter($this->env, $this->getAttribute(($context["fctables"] ?? $this->getContext($context, "fctables")), "joueur_favori", array()), "html", null, true);
            echo "\" alt=\"Lionel Messi stats\" width=\"530\"/></a>
                     <iframe frameborder=\"0\"  scrolling=\"no\" width=\"530\" height=\"200\" src=\"https://www.fctables.com/teams/";
            // line 371
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["fctables"] ?? $this->getContext($context, "fctables")), "club_favori", array()), "last", array()), "html", null, true);
            echo "&time=24&width=530&height=200&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&scfs=22&scfc=333333&scb=1&sclg=1&teamls=80&sh=1&hfb=1&hbc=3bafda&hfc=FFFFFF\"></iframe><div style=\"text-align:center;\"></div>
                     <iframe frameborder=\"0\"  scrolling=\"no\" width=\"530\" height=\"200\" src=\"https://www.fctables.com/teams/";
            // line 372
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["fctables"] ?? $this->getContext($context, "fctables")), "club_favori", array()), "next", array()), "html", null, true);
            echo "&time=24&width=530&height=200&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&scfs=22&scfc=333333&scb=1&sclg=1&teamls=80&sh=1&hfb=1&hbc=3bafda&hfc=FFFFFF\"></iframe><div style=\"text-align:center;\"></div>
                     ";
        }
        // line 374
        echo "                    </div>                 
                 </div>   
            </div>
        </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-6\">
          <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">Authentification YouTube</i></div>
                  <div class=\"panel-body\">
                    <div id=\"___ytsubscribe_0\" style=\"text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 168px; height: 48px; background-position: initial initial; background-repeat: initial initial;\"><iframe frameborder=\"0\" hspace=\"0\" marginheight=\"0\" marginwidth=\"0\" scrolling=\"no\" style=\"position: static; top: 0px; width: 168px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 48px;\" tabindex=\"0\" vspace=\"0\" width=\"100%\" id=\"I0_1480693990910\" name=\"I0_1480693990910\" src=\"https://www.youtube.com/subscribe_embed?usegapi=1&channelid=UC2g_-ipVjit6ZlACPWG4JvA&layout=full&count=false&origin=http%3A%2F%2Fvertin-go.com&gsrc=3p&ic=1&jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en_US.DCqkg4_f1cE.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCN29Itx_77YsW7KCcAVebosjZAOGA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&id=I0_1480693990910&parent=http%3A%2F%2Fvertin-go.com&pfname=&rpctoken=32231505\" data-gapiattached=\"true\"></iframe></div><div id=\"ytsubscribe-events-log\"></div>

      
                    <span id=\"signinButton\" class=\"pre-sign-in\">
                    <!-- IMPORTANT: Replace the value of the <code>data-clientid</code>
                    attribute in the following tag with your project's client ID. -->

                    <span
                    class=\"g-signin\"
                    data-callback=\"signinCallback\"
                    data-clientid=\"882069140224-tna2rbns6nr1m409s6so4etpcao9dju5.apps.googleusercontent.com\"
                    data-cookiepolicy=\"single_host_origin\"
                    data-scope=\"https://www.googleapis.com/auth/youtube.upload https://www.googleapis.com/auth/youtube\">
                    </span>
                    </span>
                    <div class=\"post-sign-in\">
                    <div>
                    <img id=\"channel-thumbnail\">
                    <span id=\"channel-name\"></span>
                    </div>

                    <div>
                    <label for=\"title\">Title:</label>
                    <input id=\"title\" type=\"text\" value=\"Default Title\">
                    </div>
                    <div>
                    <label for=\"description\">Description:</label>
                    <textarea id=\"description\">Default description</textarea>
                    </div>
                    <div>
                    <label for=\"privacy-status\">Privacy Status:</label>
                    <select id=\"privacy-status\">
                    <option>public</option>
                    <option>unlisted</option>
                    <option>private</option>
                    </select>
                    </div>

                    <div>
                    <input input type=\"file\" id=\"file\" class=\"button\" accept=\"video/*\">
                    <button id=\"button\">Upload Video</button>
                    <div class=\"during-upload\">
                    <p><span id=\"percent-transferred\"></span>% done (<span id=\"bytes-transferred\"></span>/<span id=\"total-bytes\"></span> bytes)</p>
                    <progress id=\"upload-progress\" max=\"1\" value=\"0\"></progress>
                    </div>

                    <div class=\"post-upload\">
                    <p>Uploaded video with id <span id=\"video-id\"></span>. Polling for status...</p>
                    <ul id=\"post-upload-status\"></ul>
                    <div id=\"player2\"></div>
                    </div>
                    <p id=\"disclaimer\">By uploading a video, you certify that you own all rights to the content or that you are authorized by the owner to make the content publicly available on YouTube, and that it otherwise complies with the YouTube Terms of Service located at <a href=\"http://www.youtube.com/t/terms\" target=\"_blank\">http://www.youtube.com/t/terms</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>  
                

          <div class=\"col-md-6\">
            <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Si vous avez des questions n'hésiter pas à demander au Chat-Bot Vertin Go Website! ;) <br>
                    Et le GitHub pour plus de détails sur comment déployer son propre Chat-Bot ==><a href='https://github.com/vertingo/Chat_Bot_VertinGo' target='_blank'>GitHub!</a></i></div>
                    <div class=\"panel-body\">
                    <iframe src='https://webchat.botframework.com/embed/luis-csharp-bot-vertingo?s=vVjzzYHmzS0.cwA.Iu0.r9AZEMcO4ljd1Wj4WN1YE8DRBTqTwJI0bB5oA7HCnso'  style='min-width: 400px; width: 100%; min-height: 500px;'></iframe>
                  </div>
              </div>
          </div>
    </div>



            <div class=\"col-md-14\">
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">YouTube Videos</i></div>
                  <div class=\"panel-body\">
    
      <main class=\"mdl-layout__content\">
        <div class=\"mdl-grid\">
          <div class=\"mdl-cell mdl-cell--5-col\">
            <!-- The iframe video player will replace this <div> tag. -->
            <div id=\"player\"></div>
          </div>
          <div class=\"mdl-cell mdl-cell--7-col\">
            <!-- This table contains editable video on the video in the iframe -->
            <table class=\"mdl-data-table\">
              <tr>
                <td  class=\"mdl-data-table__cell--non-numeric\">VideoID</td>
                <td id=\"video_id\"></td>
                <td class=\"mdl-data-table__cell--non-numeric\">
                  <input id=\"video_idOption\" type=\"text\">
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"loadNewVideo()\">Load</button>
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"cueNewVideo()\">Cue</button>
                </td>
              </tr><tr>
                <td  class=\"mdl-data-table__cell--non-numeric\">Status</td>
                <td id=\"status\"></td>
                <td class=\"mdl-data-table__cell--non-numeric\">
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"playVideo()\">Play</button>
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"pauseVideo()\">Pause</button>
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"stopVideo()\">Stop</button>
                </td>
              </tr><tr>
                <td  class=\"mdl-data-table__cell--non-numeric\">Current Progress</td>
                <td id=\"currentTime\"></td>
                <td  class=\"mdl-data-table__cell--non-numeric\">
                  <input id=\"currentTimeOption\" type=\"text\">
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"seekTo()\">Seek</button>
                </td>
              </tr><tr>
                <td  class=\"mdl-data-table__cell--non-numeric\">Volume (0-100)</td>
                <td id=\"volume\"></td>
                <td  class=\"mdl-data-table__cell--non-numeric\">
                  <input id=\"volumeOption\" type=\"text\">
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"setVolume()\">Set</button>
                </td>
              </tr><tr>
                <td  class=\"mdl-data-table__cell--non-numeric\">Muted?</td>
                <td id=\"mute\"></td>
                <td class=\"mdl-data-table__cell--non-numeric\">
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"mute()\">Mute</button>
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"unmute()\">Unmute</button>
                </td>
              </tr><tr>
                <td  class=\"mdl-data-table__cell--non-numeric\">Video Quality</td>
                <td id=\"quality\"></td>
                <td  class=\"mdl-data-table__cell--non-numeric\">
                  <select id=\"qualityOption\">
                  </select>
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"setQuality()\">Set</button>
                </td>
              </tr><tr>
                <td  class=\"mdl-data-table__cell--non-numeric\">Playback Rate</td>
                <td id=\"rate\"></td>
                <td  class=\"mdl-data-table__cell--non-numeric\">
                  <select id=\"rateOption\">
                  </select>
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"setRate()\">Set</button>
                </td>
              </tr>
            </table>
            </div>
        </div>
        <div class=\"mdl-grid\">
          <div class=\"mdl-cell mdl-cell--4-col\">
            <!-- This table contains metadata on the video in the iframe -->
            <table class=\"mdl-data-table\">
              <tr>
                <td class=\"mdl-data-table__cell--non-numeric\">Title</td>
                <td id=\"title\" class=\"mdl-data-table__cell--non-numeric\"></td>
              </tr><tr>
                <td class=\"mdl-data-table__cell--non-numeric\">Author</td>
                <td id=\"author\" class=\"mdl-data-table__cell--non-numeric\"></td>
              </tr><tr>
                <td class=\"mdl-data-table__cell--non-numeric\">Duration</td>
                <td id=\"duration\"></td>
              </tr><tr>
                <td class=\"mdl-data-table__cell--non-numeric\">% loaded</td>
                <td id=\"percentLoaded\"></td>
              </tr><tr>
                <td class=\"mdl-data-table__cell--non-numeric\">Embed Code</td>
                <td id=\"embedCode\"></td>
              </tr><tr>
                <td class=\"mdl-data-table__cell--non-numeric\">URL</td>
                <td id=\"url\"></td>
              </tr>
            </table>
          </div>
        </div>
      </main>
    </div>
    </div>
  </div>
</div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 563
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 564
        echo "    ";
        $this->displayParentBlock("head_javascript", $context, $blocks);
        echo "
    ";
        // line 565
        if (($context["ACCESS_TOKEN_FROM_SERVICE_ACCOUNT"] ?? $this->getContext($context, "ACCESS_TOKEN_FROM_SERVICE_ACCOUNT"))) {
            // line 566
            echo "        <script>
            (function (w, d, s, g, js, fs) {
                g = w.gapi || (w.gapi = {});
                g.analytics = {
                    q: [], ready: function (f) {
                        this.q.push(f);
                    }
                };
                js = d.createElement(s);
                fs = d.getElementsByTagName(s)[0];
                js.src = 'https://apis.google.com/js/platform.js';
                fs.parentNode.insertBefore(js, fs);
                js.onload = function () {
                    g.load('analytics');
                };
            }(window, document, 'script'));
        </script>

        <script>

            gapi.analytics.ready(function () {

                /**
                 * Authorize the user with an access token obtained server side.
                 */


                gapi.analytics.auth.authorize({
                    'serverAuth': {
                        'access_token': '";
            // line 595
            echo twig_escape_filter($this->env, ($context["ACCESS_TOKEN_FROM_SERVICE_ACCOUNT"] ?? $this->getContext($context, "ACCESS_TOKEN_FROM_SERVICE_ACCOUNT")), "html", null, true);
            echo "'
                    }
                });

                /**
                 * Creates a new DataChart instance showing sessions over the past 30 days.
                 * It will be rendered inside an element with the id \"chart-1-container\".
                 */
                var dataChart1 = new gapi.analytics.googleCharts.DataChart({
                    query: {
                        'ids': 'ga:187590147', // <-- Replace with the ids value for your view.
                        'start-date': '30daysAgo',
                        'end-date': 'yesterday',
                        'metrics': 'ga:sessions,ga:users',
                        'dimensions': 'ga:date'
                    },
                    chart: {
                        'container': 'chart-1-container',
                        'type': 'LINE',
                        'options': {
                            'width': '100%'
                        }
                    }
                });
                dataChart1.execute();

                /**
                 * Creates a new DataChart instance showing top 5 most popular demos/tools
                 * amongst returning users only.
                 * It will be rendered inside an element with the id \"chart-3-container\".
                 */
                var dataChart2 = new gapi.analytics.googleCharts.DataChart({
                    query: {
                        'ids': 'ga:187590147', // <-- Replace with the ids value for your view.
                        'start-date': '30daysAgo',
                        'end-date': 'yesterday',
                        'metrics': 'ga:pageviews',
                        'dimensions': 'ga:pagePathLevel1',
                        'sort': '-ga:pageviews',
                        'filters': 'ga:pagePathLevel1!=/',
                        'max-results': 7
                    },
                    chart: {
                        'container': 'chart-2-container',
                        'type': 'PIE',
                        'options': {
                            'width': '100%',
                            'pieHole': 4 / 9,
                        }
                    }
                });
                dataChart2.execute();

            });
        </script>
        ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":admin/dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  722 => 595,  691 => 566,  689 => 565,  684 => 564,  675 => 563,  478 => 374,  473 => 372,  469 => 371,  465 => 370,  461 => 369,  457 => 368,  452 => 367,  450 => 366,  437 => 356,  433 => 355,  344 => 268,  335 => 262,  324 => 254,  317 => 249,  315 => 248,  148 => 84,  69 => 7,  60 => 6,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@EasyAdmin/default/layout.html.twig' %}

{% block content_title %}{{ 'menu.dashboard'|trans }}{% endblock %}


{% block main %}



<script>

var signinCallback = function (result){
  if(result.access_token) {
    var uploadVideo = new UploadVideo();
    uploadVideo.ready(result.access_token);
  }
};

var STATUS_POLLING_INTERVAL_MILLIS = 60 * 1000; // One minute.


/**
 * YouTube video uploader class
 *
 * @constructor
 */
var UploadVideo = function() {
  /**
   * The array of tags for the new YouTube video.
   *
   * @attribute tags
   * @type Array.<string>
   * @default ['google-cors-upload']
   */
  this.tags = ['youtube-cors-upload'];

  /**
   * The numeric YouTube
   * [category id](https://developers.google.com/apis-explorer/#p/youtube/v3/youtube.videoCategories.list?part=snippet&regionCode=us).
   *
   * @attribute categoryId
   * @type number
   * @default 22
   */
  this.categoryId = 22;

  /**
   * The id of the new video.
   *
   * @attribute videoId
   * @type string
   * @default ''
   */
  this.videoId = '';

  this.uploadStartTime = 0;
};


UploadVideo.prototype.ready = function(accessToken) {
  this.accessToken = accessToken;
  this.gapi = gapi;
  this.authenticated = true;
  this.gapi.client.request({
    path: '/youtube/v3/channels',
    params: {
      part: 'snippet,statistics',
      mine: true
    },
    callback: function(response) {
      if (response.error) {
        console.log(response.error.message);
      } else {  
        \$('#channel-name').text(response.items[0].snippet.title);
        \$('#channel-thumbnail').attr('src', response.items[0].snippet.thumbnails.default.url);

        var id_youtube=response.items[0].id;
        var title_youtube=response.items[0].snippet.title;
        var subscriber_count= response.items[0].statistics.subscriberCount;
        var view_count= response.items[0].statistics.viewCount;
        var video_count= response.items[0].statistics.videoCount;
        var channel_description= response.items[0].snippet.description;
        var channel_customUrl=response.items[0].snippet.customUrl;
        var pseudo='{{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}';

      
        \$.ajax({
        type: 'post',
        url: 'https://platform-media.herokuapp.com/insertyoutube',
        data: { id_youtube: id_youtube,
                title_youtube: title_youtube,
                subscriber_count: subscriber_count,
                view_count: view_count,
                video_count: video_count,
                channel_description: channel_description,
                channel_customUrl: channel_customUrl,
                pseudo
        },
        success: function( data )
        {
        console.log( data );
        }
    });


        \$('.pre-sign-in').hide();
        \$('.post-sign-in').show();
      }
    }.bind(this)
  });
  \$('#button').on(\"click\", this.handleUploadClicked.bind(this));
};

/**
 * Uploads a video file to YouTube.
 *
 * @method uploadFile
 * @param {object} file File object corresponding to the video to upload.
 */
UploadVideo.prototype.uploadFile = function(file) {
  var metadata = {
    snippet: {
      title: \$('#title').val(),
      description: \$('#description').text(),
      tags: this.tags,
      categoryId: this.categoryId
    },
    status: {
      privacyStatus: \$('#privacy-status option:selected').text()
    }
  };
  var uploader = new MediaUploader({
    baseUrl: 'https://www.googleapis.com/upload/youtube/v3/videos',
    file: file,
    token: this.accessToken,
    metadata: metadata,
    params: {
      part: Object.keys(metadata).join(',')
    },
    onError: function(data) {
      var message = data;
      // Assuming the error is raised by the YouTube API, data will be
      // a JSON string with error.message set. That may not be the
      // only time onError will be raised, though.
      try {
        var errorResponse = JSON.parse(data);
        message = errorResponse.error.message;
      } finally {
        alert(message);
      }
    }.bind(this),
    onProgress: function(data) {
      var currentTime = Date.now();
      var bytesUploaded = data.loaded;
      var totalBytes = data.total;
      // The times are in millis, so we need to divide by 1000 to get seconds.
      var bytesPerSecond = bytesUploaded / ((currentTime - this.uploadStartTime) / 1000);
      var estimatedSecondsRemaining = (totalBytes - bytesUploaded) / bytesPerSecond;
      var percentageComplete = (bytesUploaded * 100) / totalBytes;

      \$('#upload-progress').attr({
        value: bytesUploaded,
        max: totalBytes
      });

      \$('#percent-transferred').text(percentageComplete);
      \$('#bytes-transferred').text(bytesUploaded);
      \$('#total-bytes').text(totalBytes);

      \$('.during-upload').show();
    }.bind(this),
    onComplete: function(data) {
      var uploadResponse = JSON.parse(data);
      this.videoId = uploadResponse.id;
      \$('#video-id').text(this.videoId);
      \$('.post-upload').show();
      this.pollForVideoStatus();
    }.bind(this)
  });
  // This won't correspond to the *exact* start of the upload, but it should be close enough.
  this.uploadStartTime = Date.now();
  uploader.upload();
};

UploadVideo.prototype.handleUploadClicked = function() {
  \$('#button').attr('disabled', true);
  this.uploadFile(\$('#file').get(0).files[0]);
};

UploadVideo.prototype.pollForVideoStatus = function() {
  this.gapi.client.request({
    path: '/youtube/v3/videos',
    params: {
      part: 'status,player',
      id: this.videoId
    },
    callback: function(response) {
      if (response.error) {
        // The status polling failed.
        console.log(response.error.message);
        setTimeout(this.pollForVideoStatus.bind(this), STATUS_POLLING_INTERVAL_MILLIS);
      } else {
        var uploadStatus = response.items[0].status.uploadStatus;
        switch (uploadStatus) {
          // This is a non-final status, so we need to poll again.
          case 'uploaded':
            \$('#post-upload-status').append('<li>Upload status: ' + uploadStatus + '</li>');
            setTimeout(this.pollForVideoStatus.bind(this), STATUS_POLLING_INTERVAL_MILLIS);
            break;
          // The video was successfully transcoded and is available.
          case 'processed':
            \$('#player').append(response.items[0].player.embedHtml);
            \$('#post-upload-status').append('<li>Final status.</li>');
            break;
          // All other statuses indicate a permanent transcoding failure.
          default:
            \$('#post-upload-status').append('<li>Transcoding failed.</li>');
            break;
        }
      }
    }.bind(this)
  });
};
</script>
 
 <!-- Header -->
    <div class=\"mdl-layout mdl-js-layout mdl-layout--fixed-header\">
        <header class=\"mdl-layout__header\">
          <div class=\"mdl-layout__header-row\">
            <!-- Title -->
            <span class=\"mdl-layout-title\">YouTube With VertinGo Website
            <a href=\"http://web-autosurf.com/?ref=8185\" target=\"_blank\"><img src=\"http://web-autosurf.com/promo/web-autosurf.gif\" alt=\"Web Autosurf Echange de Trafic, Facebook Fan Like, youtube vue , ptp\" border=\"0\" /></a><script language=\"javascript\" src=\"https://web-autosurf.com/reflink.js\"></script>

            
            </span>
            <!-- Add spacer, to align navigation to the right -->
            <div class=\"mdl-layout-spacer\">
            
            </div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class=\"mdl-navigation\">
            <!--  <a class=\"mdl-navigation__link\" href=\"#\"><b>Demo</b></a>-->
            <!--  <a class=\"mdl-navigation__link\" href=\"youtube/player_control.html\">Player Controls and Data</a>-->
            <!--  <a class=\"mdl-navigation__link\" href=\"youtube/event_listeners.html\">Event Listeners</a>-->
            </nav>
          </div>
        </header>
        {% if ACCESS_TOKEN_FROM_SERVICE_ACCOUNT %}
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Site Traffic <i>Sessions vs. Users - last 30 days</i></div>
                    <div class=\"panel-body\">
                        <div id=\"chart-1-container\" class=\"text-center\"><img src=\"{{ asset('img/default.gif') }}\" alt=\"\"/></div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Most Popular Demos/Tools <i>Pageviews - last 30 days</i></div>
                    <div class=\"panel-body\">
                        <div id=\"chart-2-container\" class=\"text-center\"><img src=\"{{ asset('img/default.gif') }}\" alt=\"\"/></div>
                    </div>
                </div>
            </div>
        </div>
        {% endif %}
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Recherche et YouTube Analytics</i></div>
                    <div class=\"panel-body\">
                        <div id=\"buttons\">
                        <label> <input id=\"query\" value='cats' type=\"text\"/><button id=\"search-button\" disabled onclick=\"search()\">Search</button></label>
                        <script src=\"https://apis.google.com/js/api.js\"></script>
                        <script>
                        function authenticate() 
                        {
                              return gapi.auth2.getAuthInstance()
                            .signIn({scope: \"https://www.googleapis.com/auth/yt-analytics.readonly\"})
                            .then(function() { console.log(\"Sign-in successful\"); },
                            function(err) { console.error(\"Error signing in\", err); });
                        }

                        function loadClient() 
                        {
                              return gapi.client.load(\"https://youtubeanalytics.googleapis.com/\$discovery/rest?version=v2\")
                            .then(function() { console.log(\"GAPI client loaded for API\"); },
                            function(err) 
                            { 
                            console.error(\"Error loading GAPI client for API\", err); 
                            });
                        }

                        function convertDate(inputFormat) 
                        {
                              function pad(s) { return (s < 10) ? '0' + s : s; }
                              var d = new Date(inputFormat);
                              return [d.getFullYear(),pad(d.getMonth()+1),pad(d.getDate())].join('-');
                        }

                        // Make sure the client is loaded and sign-in is complete before calling this method.
                        function execute() 
                        {
                          var d = new Date();

                          return gapi.client.youtubeAnalytics.reports.query({
                          \"ids\": \"channel==MINE\",
                          \"start-date\": \"30daysAgo\",
                          \"end-date\": \"yesterday\",
                          //\"startDate\": \"2018-07-01\",
                          //\"endDate\": convertDate(d),
                          \"metrics\": \"views,estimatedMinutesWatched,averageViewDuration,averageViewPercentage,subscribersGained,likes,dislikes,shares\",
                          \"dimensions\": \"day\",
                          \"sort\": \"day\"
                          })
                          .then(function(response) 
                          {
                          // Handle the results here (response.result has the parsed body).
                          
                          console.log(\"Response\",response);

                              \$.ajax({
                              type: 'post',
                              url: 'https://platform-media.herokuapp.com/insertyoutubeanalytics',
                              data: { 
                                response: response.result.rows
                                },
                              success: function (response, request) {}
                          });
                          },
                          function(err) 
                          { 
                          console.error(\"Execute error\", err); 
                          });

                      }

                      gapi.load(\"client:auth2\", function() 
                      {
                          gapi.auth2.init({client_id: '882069140224-tna2rbns6nr1m409s6so4etpcao9dju5.apps.googleusercontent.com'});
                      });

                      </script>
                  
                      <button onclick=\"authenticate().then(loadClient)\">Authorize First And Load</button>
                      <button onclick=\"execute()\">Load YouTube Analytics</button>
                        </div>
                        <div id=\"search-container\">
                        </div>
                    </div>

                    <div class=\"panel-heading\">Synchroniser avec le TopSiteApp</i></div>
                    <div class=\"panel-body\">
                        <a href='https://play.google.com/store/apps/details?id=com.vertin_go.topsiteapp'><img src=\"{{ asset('assets/images/github/topsiteapp_demo.gif') }}\" width='580px' height='270px'></a>
                        <a href='https://play.google.com/store/apps/details?id=com.vertin_go.topsiteapp'><img src=\"{{ asset('assets/images/github/Disponible-sur-App-Store-Logo.jpg') }}\" width='600px' height='100px'></a>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Football LiveScore </i></div>
                    <div class=\"panel-body\">
                     <div style=\"width: 550px; height: 470px; overflow-y: scroll;\">
                     {% if fctables is defined %}
                     <iframe frameborder=\"0\"  scrolling=\"no\" width=\"530\" height=\"520\" src=\"https://www.fctables.com/{{fctables.championnat_favori.ranking}}&time=24&po=1&ma=1&wi=1&dr=1&los=1&gf=1&ga=1&gd=1&pts=1&ng=1&form=1&width=530&height=500&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&ths=1&thb=1&thba=FFFFFF&thc=000000&bc=dddddd&hob=f5f5f5&hobc=ebe7e7&lc=333333&sh=1&hfb=1&hbc=3bafda&hfc=FFFFFF\"></iframe><div style=\"text-align:center;\"></div>
                     <iframe frameborder=\"0\"  scrolling=\"no\" width=\"530\" height=\"440\" src=\"https://www.fctables.com/{{fctables.championnat_favori.live}}&time=24&width=520&height=440&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&scoreb=f4454f&scorefc=FFFFFF&sgdcoreb=8f8d8d&sgdcorefc=FFFFFF&sh=1&hfb=1&hbc=3bafda&hfc=FFFFFF\"></iframe><div style=\"text-align:center;\"></div>
                     <iframe frameborder=\"0\"  scrolling=\"no\" width=\"530\" height=\"290\" src=\"https://www.fctables.com/{{fctables.championnat_favori.topscorer}}&time=24&limit=10&ppo=1&pte=1&pgo=1&pma=1&pas=1&ppe=1&width=530&height=700&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&ths=1&thb=1&thba=FFFFFF&thc=000000&bc=dddddd&hob=f5f5f5&hobc=ebe7e7&lc=333333&sh=1&hfb=1&hbc=3bafda&hfc=FFFFFF\"></iframe><div style=\"text-align:center;\"></div>
                     <a href=\"https://www.fctables.com/players/lionel_messi-271592/\" title=\"Lionel Messi stats\"><img src=\"https://www.fctables.com/uploads/infographics/profil/{{fctables.joueur_favori}}\" alt=\"Lionel Messi stats\" width=\"530\"/></a>
                     <iframe frameborder=\"0\"  scrolling=\"no\" width=\"530\" height=\"200\" src=\"https://www.fctables.com/teams/{{fctables.club_favori.last}}&time=24&width=530&height=200&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&scfs=22&scfc=333333&scb=1&sclg=1&teamls=80&sh=1&hfb=1&hbc=3bafda&hfc=FFFFFF\"></iframe><div style=\"text-align:center;\"></div>
                     <iframe frameborder=\"0\"  scrolling=\"no\" width=\"530\" height=\"200\" src=\"https://www.fctables.com/teams/{{fctables.club_favori.next}}&time=24&width=530&height=200&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&scfs=22&scfc=333333&scb=1&sclg=1&teamls=80&sh=1&hfb=1&hbc=3bafda&hfc=FFFFFF\"></iframe><div style=\"text-align:center;\"></div>
                     {% endif %}
                    </div>                 
                 </div>   
            </div>
        </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-6\">
          <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">Authentification YouTube</i></div>
                  <div class=\"panel-body\">
                    <div id=\"___ytsubscribe_0\" style=\"text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 168px; height: 48px; background-position: initial initial; background-repeat: initial initial;\"><iframe frameborder=\"0\" hspace=\"0\" marginheight=\"0\" marginwidth=\"0\" scrolling=\"no\" style=\"position: static; top: 0px; width: 168px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 48px;\" tabindex=\"0\" vspace=\"0\" width=\"100%\" id=\"I0_1480693990910\" name=\"I0_1480693990910\" src=\"https://www.youtube.com/subscribe_embed?usegapi=1&channelid=UC2g_-ipVjit6ZlACPWG4JvA&layout=full&count=false&origin=http%3A%2F%2Fvertin-go.com&gsrc=3p&ic=1&jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en_US.DCqkg4_f1cE.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCN29Itx_77YsW7KCcAVebosjZAOGA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&id=I0_1480693990910&parent=http%3A%2F%2Fvertin-go.com&pfname=&rpctoken=32231505\" data-gapiattached=\"true\"></iframe></div><div id=\"ytsubscribe-events-log\"></div>

      
                    <span id=\"signinButton\" class=\"pre-sign-in\">
                    <!-- IMPORTANT: Replace the value of the <code>data-clientid</code>
                    attribute in the following tag with your project's client ID. -->

                    <span
                    class=\"g-signin\"
                    data-callback=\"signinCallback\"
                    data-clientid=\"882069140224-tna2rbns6nr1m409s6so4etpcao9dju5.apps.googleusercontent.com\"
                    data-cookiepolicy=\"single_host_origin\"
                    data-scope=\"https://www.googleapis.com/auth/youtube.upload https://www.googleapis.com/auth/youtube\">
                    </span>
                    </span>
                    <div class=\"post-sign-in\">
                    <div>
                    <img id=\"channel-thumbnail\">
                    <span id=\"channel-name\"></span>
                    </div>

                    <div>
                    <label for=\"title\">Title:</label>
                    <input id=\"title\" type=\"text\" value=\"Default Title\">
                    </div>
                    <div>
                    <label for=\"description\">Description:</label>
                    <textarea id=\"description\">Default description</textarea>
                    </div>
                    <div>
                    <label for=\"privacy-status\">Privacy Status:</label>
                    <select id=\"privacy-status\">
                    <option>public</option>
                    <option>unlisted</option>
                    <option>private</option>
                    </select>
                    </div>

                    <div>
                    <input input type=\"file\" id=\"file\" class=\"button\" accept=\"video/*\">
                    <button id=\"button\">Upload Video</button>
                    <div class=\"during-upload\">
                    <p><span id=\"percent-transferred\"></span>% done (<span id=\"bytes-transferred\"></span>/<span id=\"total-bytes\"></span> bytes)</p>
                    <progress id=\"upload-progress\" max=\"1\" value=\"0\"></progress>
                    </div>

                    <div class=\"post-upload\">
                    <p>Uploaded video with id <span id=\"video-id\"></span>. Polling for status...</p>
                    <ul id=\"post-upload-status\"></ul>
                    <div id=\"player2\"></div>
                    </div>
                    <p id=\"disclaimer\">By uploading a video, you certify that you own all rights to the content or that you are authorized by the owner to make the content publicly available on YouTube, and that it otherwise complies with the YouTube Terms of Service located at <a href=\"http://www.youtube.com/t/terms\" target=\"_blank\">http://www.youtube.com/t/terms</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>  
                

          <div class=\"col-md-6\">
            <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Si vous avez des questions n'hésiter pas à demander au Chat-Bot Vertin Go Website! ;) <br>
                    Et le GitHub pour plus de détails sur comment déployer son propre Chat-Bot ==><a href='https://github.com/vertingo/Chat_Bot_VertinGo' target='_blank'>GitHub!</a></i></div>
                    <div class=\"panel-body\">
                    <iframe src='https://webchat.botframework.com/embed/luis-csharp-bot-vertingo?s=vVjzzYHmzS0.cwA.Iu0.r9AZEMcO4ljd1Wj4WN1YE8DRBTqTwJI0bB5oA7HCnso'  style='min-width: 400px; width: 100%; min-height: 500px;'></iframe>
                  </div>
              </div>
          </div>
    </div>



            <div class=\"col-md-14\">
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">YouTube Videos</i></div>
                  <div class=\"panel-body\">
    
      <main class=\"mdl-layout__content\">
        <div class=\"mdl-grid\">
          <div class=\"mdl-cell mdl-cell--5-col\">
            <!-- The iframe video player will replace this <div> tag. -->
            <div id=\"player\"></div>
          </div>
          <div class=\"mdl-cell mdl-cell--7-col\">
            <!-- This table contains editable video on the video in the iframe -->
            <table class=\"mdl-data-table\">
              <tr>
                <td  class=\"mdl-data-table__cell--non-numeric\">VideoID</td>
                <td id=\"video_id\"></td>
                <td class=\"mdl-data-table__cell--non-numeric\">
                  <input id=\"video_idOption\" type=\"text\">
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"loadNewVideo()\">Load</button>
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"cueNewVideo()\">Cue</button>
                </td>
              </tr><tr>
                <td  class=\"mdl-data-table__cell--non-numeric\">Status</td>
                <td id=\"status\"></td>
                <td class=\"mdl-data-table__cell--non-numeric\">
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"playVideo()\">Play</button>
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"pauseVideo()\">Pause</button>
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"stopVideo()\">Stop</button>
                </td>
              </tr><tr>
                <td  class=\"mdl-data-table__cell--non-numeric\">Current Progress</td>
                <td id=\"currentTime\"></td>
                <td  class=\"mdl-data-table__cell--non-numeric\">
                  <input id=\"currentTimeOption\" type=\"text\">
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"seekTo()\">Seek</button>
                </td>
              </tr><tr>
                <td  class=\"mdl-data-table__cell--non-numeric\">Volume (0-100)</td>
                <td id=\"volume\"></td>
                <td  class=\"mdl-data-table__cell--non-numeric\">
                  <input id=\"volumeOption\" type=\"text\">
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"setVolume()\">Set</button>
                </td>
              </tr><tr>
                <td  class=\"mdl-data-table__cell--non-numeric\">Muted?</td>
                <td id=\"mute\"></td>
                <td class=\"mdl-data-table__cell--non-numeric\">
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"mute()\">Mute</button>
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"unmute()\">Unmute</button>
                </td>
              </tr><tr>
                <td  class=\"mdl-data-table__cell--non-numeric\">Video Quality</td>
                <td id=\"quality\"></td>
                <td  class=\"mdl-data-table__cell--non-numeric\">
                  <select id=\"qualityOption\">
                  </select>
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"setQuality()\">Set</button>
                </td>
              </tr><tr>
                <td  class=\"mdl-data-table__cell--non-numeric\">Playback Rate</td>
                <td id=\"rate\"></td>
                <td  class=\"mdl-data-table__cell--non-numeric\">
                  <select id=\"rateOption\">
                  </select>
                  <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" onClick=\"setRate()\">Set</button>
                </td>
              </tr>
            </table>
            </div>
        </div>
        <div class=\"mdl-grid\">
          <div class=\"mdl-cell mdl-cell--4-col\">
            <!-- This table contains metadata on the video in the iframe -->
            <table class=\"mdl-data-table\">
              <tr>
                <td class=\"mdl-data-table__cell--non-numeric\">Title</td>
                <td id=\"title\" class=\"mdl-data-table__cell--non-numeric\"></td>
              </tr><tr>
                <td class=\"mdl-data-table__cell--non-numeric\">Author</td>
                <td id=\"author\" class=\"mdl-data-table__cell--non-numeric\"></td>
              </tr><tr>
                <td class=\"mdl-data-table__cell--non-numeric\">Duration</td>
                <td id=\"duration\"></td>
              </tr><tr>
                <td class=\"mdl-data-table__cell--non-numeric\">% loaded</td>
                <td id=\"percentLoaded\"></td>
              </tr><tr>
                <td class=\"mdl-data-table__cell--non-numeric\">Embed Code</td>
                <td id=\"embedCode\"></td>
              </tr><tr>
                <td class=\"mdl-data-table__cell--non-numeric\">URL</td>
                <td id=\"url\"></td>
              </tr>
            </table>
          </div>
        </div>
      </main>
    </div>
    </div>
  </div>
</div>
</div>

{% endblock %}

{% block head_javascript %}
    {{ parent() }}
    {% if ACCESS_TOKEN_FROM_SERVICE_ACCOUNT %}
        <script>
            (function (w, d, s, g, js, fs) {
                g = w.gapi || (w.gapi = {});
                g.analytics = {
                    q: [], ready: function (f) {
                        this.q.push(f);
                    }
                };
                js = d.createElement(s);
                fs = d.getElementsByTagName(s)[0];
                js.src = 'https://apis.google.com/js/platform.js';
                fs.parentNode.insertBefore(js, fs);
                js.onload = function () {
                    g.load('analytics');
                };
            }(window, document, 'script'));
        </script>

        <script>

            gapi.analytics.ready(function () {

                /**
                 * Authorize the user with an access token obtained server side.
                 */


                gapi.analytics.auth.authorize({
                    'serverAuth': {
                        'access_token': '{{ ACCESS_TOKEN_FROM_SERVICE_ACCOUNT }}'
                    }
                });

                /**
                 * Creates a new DataChart instance showing sessions over the past 30 days.
                 * It will be rendered inside an element with the id \"chart-1-container\".
                 */
                var dataChart1 = new gapi.analytics.googleCharts.DataChart({
                    query: {
                        'ids': 'ga:187590147', // <-- Replace with the ids value for your view.
                        'start-date': '30daysAgo',
                        'end-date': 'yesterday',
                        'metrics': 'ga:sessions,ga:users',
                        'dimensions': 'ga:date'
                    },
                    chart: {
                        'container': 'chart-1-container',
                        'type': 'LINE',
                        'options': {
                            'width': '100%'
                        }
                    }
                });
                dataChart1.execute();

                /**
                 * Creates a new DataChart instance showing top 5 most popular demos/tools
                 * amongst returning users only.
                 * It will be rendered inside an element with the id \"chart-3-container\".
                 */
                var dataChart2 = new gapi.analytics.googleCharts.DataChart({
                    query: {
                        'ids': 'ga:187590147', // <-- Replace with the ids value for your view.
                        'start-date': '30daysAgo',
                        'end-date': 'yesterday',
                        'metrics': 'ga:pageviews',
                        'dimensions': 'ga:pagePathLevel1',
                        'sort': '-ga:pageviews',
                        'filters': 'ga:pagePathLevel1!=/',
                        'max-results': 7
                    },
                    chart: {
                        'container': 'chart-2-container',
                        'type': 'PIE',
                        'options': {
                            'width': '100%',
                            'pieHole': 4 / 9,
                        }
                    }
                });
                dataChart2.execute();

            });
        </script>
        {% endif %}
{% endblock %}", ":admin/dashboard:index.html.twig", "C:\\xampp\\htdocs\\symfony-easyadmin-heroku\\app/Resources\\views/admin/dashboard/index.html.twig");
    }
}
