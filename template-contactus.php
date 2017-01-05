<?php
/*
** Template Name: WFC - Contact Us Layout
*/

get_header();


Mk_Static_Files::addAssets('mk_button');
Mk_Static_Files::addAssets('mk_audio');
Mk_Static_Files::addAssets('mk_swipe_slideshow');

mk_build_main_wrapper( mk_get_view('singular', 'wp-page', true) );

?>

<div id="theme-page" class="master-holder clear" role="main" itemprop="mainContentOfPage">
            <div class="mk-main-wrapper-holder">
                <div id="mk-page-id-5448" class="theme-page-wrapper mk-main-wrapper mk-grid full-layout no-padding ">
                      <div class="theme-content no-padding" itemprop="mainContentOfPage">
                          <div class="clearboth"></div>
		                      <form name="insightly_web_to_contact" action="https://ozzz1i6e.insight.ly/WebToContact/Create" method="post"><input type="hidden" name="formId" value="Cw0Bklk4JgHJdC+uXkjTsQ=="/><label for="insightly_firstName">First Name: *</label><input required id="insightly_firstName" name="FirstName" type="text"/><br/><label for="insightly_lastName">Last Name: *</label><input required id="insightly_lastName" name="LastName" type="text"/><br/><label for="insightly_organization">Organization: </label><input id="insightly_organization" name="Organization" type="text"/><br/><label for="insightly_role">Title: </label><input id="insightly_role" name="Role" type="text"/><br/><input type="hidden" name="emails[0].Label" value="Work"/><label for="email[0]_Value">Email (Work): *</label><input required id="emails[0]_Value" name="emails[0].Value" type="email"/><br/><input type="hidden" name="phones[0].Label" value="Work"/><label for="phones[0]_Value">Phone (Work): *</label><input required id="phones[0]_Value" name="phones[0].Value" type="tel"/><br/><label for="insightly_background">Additional background information: </label><br><textarea id="insightly_background" name="background"></textarea><br/><input type="submit" value="Submit"/></form>
                          <div class="clearboth"></div>
                      </div>
                </div>
            </div>
</div>

<form name="insightly_web_to_contact" action="https://ozzz1i6e.insight.ly/WebToContact/Create" method="post"><input type="hidden" name="formId" value="Cw0Bklk4JgHJdC+uXkjTsQ=="/><label for="insightly_firstName">First Name: *</label><input required id="insightly_firstName" name="FirstName" type="text"/><br/><label for="insightly_lastName">Last Name: *</label><input required id="insightly_lastName" name="LastName" type="text"/><br/><label for="insightly_organization">Organization: </label><input id="insightly_organization" name="Organization" type="text"/><br/><label for="insightly_role">Title: </label><input id="insightly_role" name="Role" type="text"/><br/><input type="hidden" name="emails[0].Label" value="Work"/><label for="email[0]_Value">Email (Work): *</label><input required id="emails[0]_Value" name="emails[0].Value" type="email"/><br/><input type="hidden" name="phones[0].Label" value="Work"/><label for="phones[0]_Value">Phone (Work): *</label><input required id="phones[0]_Value" name="phones[0].Value" type="tel"/><br/><label for="insightly_background">Additional background information: </label><br><textarea id="insightly_background" name="background"></textarea><br/><input type="submit" value="Submit"/></form>


<?php

get_footer();
