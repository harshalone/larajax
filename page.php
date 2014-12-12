
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Basecamp clone</title> 
  <link data-asset-path="desktop.css" href="assets/css/style.css" media="all" rel="stylesheet" /> 

  <meta charset="utf-8">
  <meta name="viewport" content="width=1100"> 
  
</head>

<body class="">
  
 <header>
      <? include("components/topnav.inc.php"); ?>
    
    </header>

<div id="workspace" class="workspace">
      <div class="container stack_container" data-container-id="1" style="width: 980px;">
  <div class="panel sheet project active isnt_client_project inactive" data-behavior=" " data-creator-id="9828924" data-status="active"><header><h1><a data-restore-position="" href="/2807394/projects/7746654">CWH test project</a></h1></header><div class="panel sheet accesses" data-behavior=" prevent_reload_when_stacked" style="margin-left: 20px; margin-bottom: -20px;">
    <title>CWH test project: People on this project</title>

    <header>
      <h1 class="inactive_title">People on this project</h1>
      <div class="active_title">
          <h1>Here’s who’s on this project</h1>
          <p>
              Invite people from your team or from your client and start working together in seconds. Everyone you invite will receive a welcome email.
          </p>
      </div>
    </header>

    <div class="sheet_body">
        <div class="accesses_tabs">
  <ul>
    <li>
      <a href="#team" class="selected" data-behavior="toggle_accesses_list" data-accesses-list="team">Our Team</a>
    </li>
    <li>
      <a href="#client" data-behavior="toggle_accesses_list" data-accesses-list="client">The Client</a>
        <figure>Working with a client? Invite them here. Clients can’t see posts unless you say so.</figure>
    </li>
  </ul>
</div>

<section data-behavior="accesses_list" data-accesses-list="team" class="split_accesses" style="display: block;">
  <div class="columns">
    <div class="column">
      <section class="invite" data-new-team="">
  <header style="margin: 0; display: none">
    <h1>
      Add more people
    </h1>
  </header>

  <form accept-charset="UTF-8" action="/2807394/projects/7746654/accesses" class="invite" data-behavior="invite" data-remote="true" method="post"><div style="display:none"><input name="utf8" type="hidden" value="✓"></div>
    <div class="slider accesses" data-behavior="slider">
      <ul class="slides" style="width: 200%;">
        <li class="slide active" data-slide-index="0" style="width: 359px;">
          <h2>
              Type names or emails to invite people to your team:
          </h2>

          <p><a class="watch videothumb" data-behavior="open_videobox" data-video-src="//www.youtube-nocookie.com/embed/ZQwt7_R11gE?rel=0&amp;autoplay=1" href="#">Watch a quick video about inviting your team</a><img alt="Beacon" src="https://dash.37signals.com/beanstalk/beacon.gif?cohort[][experiment]=201401_OnrampVideos&amp;cohort[][group]=withVideos&amp;uuid=895194"></p>

          <div class="invitees" data-behavior="invitees" data-disabled-people-ids="[&quot;person_9828924&quot;]" data-disabled-group-ids="[&quot;group_1602434&quot;]" data-is-client="false"><div class="person invitee field blank"><div class="autocomplete_people">
  
    
      <input type="hidden" name="invitees[][email_address]" data-role="email_address_input" value="">
    
  
  <div class="icon"></div>
  <div class="input">
    
      <input type="text" value="" data-behavior="input_change_emitter" data-role="human_input" spellcheck="false">
    
  </div>
  <div class="suggestions" data-role="suggestions_view">
    <!-- templates/autocomplete_people_suggestions -->
  </div>
  
</div>
</div><div class="person invitee field blank"><div class="autocomplete_people">
  
    
      <input type="hidden" name="invitees[][email_address]" data-role="email_address_input" value="">
    
  
  <div class="icon"></div>
  <div class="input">
    
      <input type="text" value="" data-behavior="input_change_emitter" data-role="human_input" spellcheck="false">
    
  </div>
  <div class="suggestions" data-role="suggestions_view"></div>
  
</div>
</div><div class="person invitee field blank"><div class="autocomplete_people">
  
    
      <input type="hidden" name="invitees[][email_address]" data-role="email_address_input" value="">
    
  
  <div class="icon"></div>
  <div class="input">
    
      <input type="text" value="" data-behavior="input_change_emitter" data-role="human_input" spellcheck="false">
    
  </div>
  <div class="suggestions" data-role="suggestions_view"></div>
  
</div>
</div></div>

            	<p id="new_superpowers_prompt" style="display: none;">
	  Looks like you're inviting new people to Basecamp!<br>
	  <a href="#" data-behavior="slide" data-direction="forward" class="decorated">Decide who can create projects...</a>
	</p>



            <h2>
                Add a welcome message for your team:
            </h2>

              <textarea name="message">Hi there. We’ll be using Basecamp to share ideas, gather feedback, and track progress during this project.</textarea>
        </li>

          <li class="slide" data-slide-index="1" style="width: 359px;">
            <table class="header" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td></td>
    <td class="option projects">Can create projects?</td>
    <td class="option admin">Admin</td>
  </tr>
</tbody></table>

<div id="new_superpowers"> </div>

<p class="glossary">Admins can create projects, remove anyone from a project, remove users from your Basecamp account, and grant admin powers to other people. We recommend only granting admin powers to people you really trust.</p>

<p><a href="#" data-behavior="slide" data-direction="backward" class="decorated done_editing">← Back to the list of people</a></p>

          </li>
      </ul>
    </div>

    <p class="submit">
        <input class="button action_button green" name="commit" type="submit" value="Send invitation">
    </p>
</form></section>

    </div>

    <div class="column">
      <section class="accesses" id="team_accesses" data-behavior="infinite_page" data-infinite-page="4">
  <header>
    <p>
      Anyone on your team will see everything posted to this project.
      Every message, to-do list, file, event, and text document.
    </p>
  </header>

  <article class="access" id="access_56199147" data-person-id="9828924">
  <div class="wrapper">
    <a data-replace-stack="true" href="/2807394/people/9828924"><img alt="amy water" class="avatar" height="96" src="https://asset1.basecamp.com/2807394/people/9828924/photo/avatar.96.gif" title="amy water" width="96"></a>

      <h1>
        <a class="person_name" href="/2807394/people/9828924">amy water</a>
        
      </h1>

      <div class="email">
        <a href="mailto:amywater@vsell.co.uk">amywater@vsell.co.uk</a>
      </div>

            <div class="last_invitee_event">
              Active <time data-local="time-ago" datetime="2014-12-03T10:30:57Z" title="December 3, 2014 at 10:30am GMT">5 hours ago</time>
            </div>


    <div class="controls">

        <div class="intro">
            The account owner has access to all projects.
        </div>
    </div>
  </div>
</article>

  
  
</section>

    </div>
  </div>
</section>

<section data-behavior="accesses_list" data-accesses-list="client" class="split_accesses" style="display: none;">

  <section class="client_projects_prompt" data-behavior="opt_into_client_projects" style="">
  <figure class="initial_load">
    <figcaption>You’ll see a checkbox like this whenever you post something to a project with clients.</figcaption>
  </figure>

  <article>
        <h3>Working with a client on this project?</h3>
      <p>Basecamp lets you hide certain messages, to-dos, files, events, and text documents from people invited as clients. This is great for sharing unfinished work with your team before getting client feedback.</p>

        <p>You can turn this on now to start choosing what clients can see, even if you’re not ready to invite any clients yet.</p>

      <p><a class="watch videothumb" data-behavior="open_videobox" data-video-src="//www.youtube-nocookie.com/embed/crVgmqODzyY?rel=0&amp;autoplay=1" href="#">Watch a quick video about working with clients</a><img alt="Beacon" src="https://dash.37signals.com/beanstalk/beacon.gif?cohort[][experiment]=201401_OnrampVideos&amp;cohort[][group]=withVideos&amp;uuid=895194"></p>

      <p class="submit">
        <a class="button action_button big" data-behavior="confirm_opt_into_client_projects" data-method="put" data-remote="true" href="/2807394/projects/7746654/enable_clients" rel="nofollow">Yes, turn on client access for this project</a>
      </p>
  </article>
</section>


  <div class="columns hidden" data-behavior="clients_list">
    <div class="column">
      <section class="invite" data-new-client="">
  <header style="margin: 0; display: none">
    <h1>
      Add more people
    </h1>
  </header>

  <form accept-charset="UTF-8" action="/2807394/projects/7746654/accesses" class="invite" data-behavior="invite" data-remote="true" method="post"><div style="display:none"><input name="utf8" type="hidden" value="✓"></div>
    <div class="slider accesses" data-behavior="slider">
      <ul class="slides">
        <li class="slide" data-slide-index="0">
          <h2>
              Type names or emails to invite your clients:
          </h2>

          <p><a class="watch videothumb" data-behavior="open_videobox" data-video-src="//www.youtube-nocookie.com/embed/ZQwt7_R11gE?rel=0&amp;autoplay=1" href="#">Watch a quick video about inviting your team</a><img alt="Beacon" src="https://dash.37signals.com/beanstalk/beacon.gif?cohort[][experiment]=201401_OnrampVideos&amp;cohort[][group]=withVideos&amp;uuid=895194"></p>

          <div class="invitees" data-behavior="invitees" data-disabled-people-ids="[&quot;person_9828924&quot;]" data-disabled-group-ids="[&quot;group_1602434&quot;]" data-is-client="true"><div class="person invitee field blank"><div class="autocomplete_people">
  
    
      <input type="hidden" name="client_invitees[][email_address]" data-role="email_address_input" value="">
    
  
  <div class="icon"></div>
  <div class="input">
    
      <input type="text" value="" data-behavior="input_change_emitter" data-role="human_input" spellcheck="false">
    
  </div>
  <div class="suggestions" data-role="suggestions_view"></div>
  
</div>
</div><div class="person invitee field blank"><div class="autocomplete_people">
  
    
      <input type="hidden" name="client_invitees[][email_address]" data-role="email_address_input" value="">
    
  
  <div class="icon"></div>
  <div class="input">
    
      <input type="text" value="" data-behavior="input_change_emitter" data-role="human_input" spellcheck="false">
    
  </div>
  <div class="suggestions" data-role="suggestions_view"></div>
  
</div>
</div><div class="person invitee field blank"><div class="autocomplete_people">
  
    
      <input type="hidden" name="client_invitees[][email_address]" data-role="email_address_input" value="">
    
  
  <div class="icon"></div>
  <div class="input">
    
      <input type="text" value="" data-behavior="input_change_emitter" data-role="human_input" spellcheck="false">
    
  </div>
  <div class="suggestions" data-role="suggestions_view"></div>
  
</div>
</div></div>



            <h2>
                Add a welcome message for your clients:
            </h2>

              <textarea name="client_message">Hi there. We'll be using Basecamp to share ideas, gather feedback, and track progress during this project. Simply log in or create an account and you’ll be up and running in no time.</textarea>
        </li>

      </ul>
    </div>

    <p class="submit">
        <input class="button action_button green" name="commit" type="submit" value="Send invitation">
    </p>
</form></section>

    </div>

    <div class="column">
      <section class="accesses blank_slate" id="client_accesses">
  <header>
      <p>You can hide certain messages, to-do lists, files, events, and text documents from people invited as clients.</p>
  </header>

  <header class="blank_slate">
    <figure>
      <figcaption>Now you can choose what clients can see, even if you haven’t invited them to this project yet. Just check this box when you post. Easy!</figcaption>
    </figure>

    <p><a class="watch videothumb" data-behavior="open_videobox" data-video-src="//www.youtube-nocookie.com/embed/crVgmqODzyY?rel=0&amp;autoplay=1" href="#">Watch a quick video about working with clients in Basecamp</a><img alt="Beacon" src="https://dash.37signals.com/beanstalk/beacon.gif?cohort[][experiment]=201401_OnrampVideos&amp;cohort[][group]=withVideos&amp;uuid=895194"></p>

    <p class="submit">
      Not working with clients on this project? You can <a class="decorated" data-behavior="confirm_opt_out_of_client_projects" data-method="put" data-remote="true" href="/2807394/projects/7746654/disable_clients" rel="nofollow">turn this option off</a>
    </p>
  </header>

  
</section>

    </div>
  </div>
</section>

    </div>
  </div></div>  </div>

  </div>
  <div id="shade"></div>

  <div class="staff_only" style="margin: 20px 0 0; text-align: center; min-height: 20px;">
  <small id="runtime"><a href="" target="_blank"></a></small>
</div>

  
    <img alt="Test beacon" data-cdn="cloudfront" onerror="logCDNResult(false, this)" onload="logCDNResult(true, this)" src="https://d1kwjg6ihle0hs.cloudfront.net/test_beacon.gif" />
  <img alt="Test beacon" data-cdn="fastly" onerror="logCDNResult(false, this)" onload="logCDNResult(true, this)" src="https://basecamp.global.ssl.fastly.net/test_beacon.gif" />

  
  
</body>
</html>
