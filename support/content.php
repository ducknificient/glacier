<?php

if (!isset($_GET["directory1"]))
{
	echo "<div clas='row'>";
	echo "    <div class='col-md-12 mt-md-0 mt-3'>";
	echo "      	<h5 class='text-uppercase font-weight-bold'>GLACIER Support</h5>";
	echo "    </div>";
	echo "</div>";
	echo "<div class='alert alert-primary row' role='alert'>";
	echo "<div class='col-md-11'> A simple primary alert—check it out!</div>";
	echo "<div class='col-md-1'></div>";
	echo "</div>";

echo "<div id='help_home_block'>";
echo "";
echo "	<div class='help_intro_text'>";
echo "					What do you need help with?			</div>";
echo "";
echo "";
echo "					<div class='help_login_nag'>";
echo "			<div class='help_login_nag_intro'>";
echo "				Sign in to your Steam account to review purchases, account status, and get personalized help.			</div>";
echo "			<div class='help_login_nag_buttons'>";
echo "				<div class='help_login_nag_left'>";
echo "					<a href='https://help.steampowered.com/en/wizard/Login?redir=%2Fen%2F' class='btn_medium btnv6_blue_hoverfade btn_login_nag_left'>";
echo "						<span>Sign in to Steam</span>";
echo "					</a>";
echo "				</div>";
echo "				<div class='help_login_nag_right'>";
echo "					<a href='https://help.steampowered.com/en/wizard/HelpWithLogin' class='btn_medium btnv6_blue_hoverfade btn_login_nag_right'>";
echo "						<span>Help, I can't sign in</span>";
echo "					</a>";
echo "				</div>";
echo "			</div>";
echo "			<div style='clear: both;'></div>";
echo "		</div>";
echo "			";
echo "	";
echo "	";
echo "	";
echo "	";
echo "			<div class='help_section_text'>Popular products</div>";
echo "";
echo "		";
echo "		<a href='https://help.steampowered.com/en/wizard/HelpWithGame/?appid=578080' class='help_wizard_button help_wizard_arrow_right'>";
echo "							<img src='https://steamcdn-a.akamaihd.net/steamcommunity/public/images/apps/578080/93d896e7d7a42ae35c1d77239430e1d90bc82cae.jpg'>";
echo "						<span>";
echo "				PLAYERUNKNOWN'S BATTLEGROUNDS							</span>";
echo "		</a>";
echo "	";
echo "		<a href='https://help.steampowered.com/en/wizard/HelpWithGame/?appid=570' class='help_wizard_button help_wizard_arrow_right'>";
echo "							<img src='https://steamcdn-a.akamaihd.net/steamcommunity/public/images/apps/570/0bbb630d63262dd66d2fdd0f7d37e8661a410075.jpg'>";
echo "						<span>";
echo "				Dota 2							</span>";
echo "		</a>";
echo "	";
echo "		<a href='https://help.steampowered.com/en/wizard/HelpWithGame/?appid=730' class='help_wizard_button help_wizard_arrow_right'>";
echo "							<img src='https://steamcdn-a.akamaihd.net/steamcommunity/public/images/apps/730/69f7ebe2735c366c65c0b33dae00e12dc40edbe4.jpg'>";
echo "						<span>";
echo "				Counter-Strike: Global Offensive							</span>";
echo "		</a>";
echo "	";
echo "		<a href='https://help.steampowered.com/en/wizard/HelpWithGame/?appid=359550' class='help_wizard_button help_wizard_arrow_right'>";
echo "							<img src='https://steamcdn-a.akamaihd.net/steamcommunity/public/images/apps/359550/43a47cd1ff04838e19d829559544c88715ed74cd.jpg'>";
echo "						<span>";
echo "				Tom Clancy's Rainbow Six Siege							</span>";
echo "		</a>";
echo "		";
echo "	<div class='help_divider'></div>";
echo "";
echo "				";
echo "	<a href='https://help.steampowered.com/en/wizard/HelpWithGame' class=' help_wizard_button help_wizard_button_large help_wizard_arrow_right'>";
echo "		<span>Games, Software, etc.</span>";
echo "	</a>";
echo "";
echo "	<a href='https://help.steampowered.com/en/wizard/HelpWithPurchase' class='help_wizard_button help_wizard_button_large help_wizard_arrow_right'>";
echo "		<span>Purchases</span>";
echo "	</a>";
echo "";
echo "	";
echo "	<a href='https://help.steampowered.com/en/wizard/HelpWithAccount' class='help_wizard_button help_wizard_button_large help_wizard_arrow_right'>";
echo "		<span>My Account</span>";
echo "	</a>";
echo "";
echo "	<a href='https://help.steampowered.com/en/wizard/HelpWithEcon' class='help_wizard_button help_wizard_button_large help_wizard_arrow_right'>";
echo "		<span>Trading, Gifting, Items, Community Market</span>";
echo "	</a>";
echo "";
echo "	<a href='https://help.steampowered.com/en/wizard/HelpWithSteam' class='help_wizard_button help_wizard_button_large help_wizard_arrow_right'>";
echo "		<span>Steam Client</span>";
echo "	</a>";
echo "";
echo "	<a href='https://help.steampowered.com/en/wizard/HelpWithCommunity' class='help_wizard_button help_wizard_button_large help_wizard_arrow_right'>";
echo "		<span>Steam Community</span>";
echo "	</a>";
echo "";
echo "	<a href='https://help.steampowered.com/en/wizard/HelpWithSteamHardware' class='help_wizard_button help_wizard_button_large help_wizard_arrow_right'>";
echo "		<span>Steam Hardware</span>";
echo "	</a>";
echo "";
echo "	";
echo "			<!-- special options for anonymous users -->";
echo "		<div class='help_divider'></div>";
echo "";
echo "		<a href='https://help.steampowered.com/en/wizard/HelpWithUnknownCharges' class='help_wizard_button help_wizard_button_large help_wizard_arrow_right'>";
echo "			<span>I have charges from Steam that I didn't make</span>";
echo "		</a>";
echo "	";
echo "	<div style='padding-top: 60px'></div>";
echo "</div>";
echo "";
}
else
{	

	if(!isset($_GET["directory2"]))
	{		
		$directory1 = $_GET["directory1"];
		echo "<nav aria-label='breadcrumb'>";
		echo "  <ol class='breadcrumb'>";
		echo "    <li class='breadcrumb-item'><a href='index.php?show=support'>Home</a></li>";
		echo "    <li class='breadcrumb-item active' aria-current='page'>$directory1</li>";
		echo "  </ol>";
		echo "</nav>";		
	}
	else
	{
		$directory1 = $_GET["directory1"];
		$directory2 = $_GET["directory2"];
		echo "<nav aria-label='breadcrumb'>";
		echo "  <ol class='breadcrumb'>";
		echo "    <li class='breadcrumb-item'><a href='index.php?show=support'>Home</a></li>";
		echo "    <li class='breadcrumb-item'><a href='index.php?show=support&directory1=$directory1'>$directory1</a></li>";
		echo "    <li class='breadcrumb-item active'>$directory2</li>";
		echo "  </ol>";
		echo "</nav>";		
	}
}

?>