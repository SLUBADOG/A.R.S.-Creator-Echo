﻿<html>
	<head>
		<title>A.R.S. Echo Creator</title>
		<link rel="icon" href="https://images-ext-1.discordapp.net/eyJ1cmwiOiJodHRwczovL2VjaG8ueHRjbGFicy5uZXQvZmF2aWNvbi5wbmcifQ.e8gkaoxk2ywaxuE7RGln3c2thxA" type="image/x-icon">
		<link rel="stylesheet" type="text/css" media="all" href="css/arscreator.css?v=<?=time();?>" />
		<link rel="stylesheet" type="text/css" media="all" href="css/fontstyles.css?v=<?=time();?>" />
		<link rel="stylesheet" media="all" href="https://fonticons-free-fonticons.netdna-ssl.com/kits/ffe176a3/ffe176a3.css" />
		<script src="https://use.fontawesome.com/f0f9521dc2.js"></script>
		<meta charset="UTF-8" />
		<meta charset="UTF-16" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
	</head>
	
	<body id="body">
		<div class="creator">
			<div id="Alert" class="alert" style="margin: -500% auto 0px; opacity: 0; transition: 0.2s;">
				<h3 style="float: left; padding: 0; margin: 0; color: rgb(226, 32, 32); margin-bottom: -20px;">Error:</h3><br>
				<span id="AlertMessage" style="position: absolute; float: left; padding: 0; padding-left: 0; padding-right: 50px; margin: 0;"></span><br><br><br>
				<button class="button" style="position: absolute; bottom: 13px; right: 10px;" onclick="CloseAlertDiv(); return false;">Ok</button>
			</div>
			<div id="Changelogdiv" style="opacity: 0; transition: 1s;">
				<div id="outerChangelog" class="outerChangelog" style="margin: -500% auto; transition: margin 0.5s; position: absolute;">
					<button class="buttonkeyscontent" onclick="CheckStyle(); CloseChangelogDiv(); return false;">Close ⨉</button>
					<h1>
						Changelog.
					</h1>
					<div class="Changelog" id="Changelog" style="background-color: rgba(51, 51, 51, 0.3); border: 2px solid rgba(51, 51, 51, 1); border-radius: 10px; height: auto !important; max-height: calc(80% - 121px);"></div>
				</div>
			</div>
			<div id="KeyList" style="opacity: 0; transition: 1s;" >
				<div id="KeyListContent" class="KeyListContent" style="margin: -500% auto; transition: margin 0.5s;">
					<button class="buttonkeyscontent" onclick="CheckStyle(); CloseKeyDiv(); return false;">Close ⨉</button>
					<h1>
						Pick a Key.
					</h1>
					<div class="KeyContent">
						<div class="innerKeyContent">
							<div class="KeyContentKey" id="AddParamsKeyDiv">
								<span class="bold" style="padding: 3px 0px 3px 0px;">Add a <label class="DCSL skipbold">{params}</label> key.</span><input type="button" id="AddParamsKey" class="addbutton" onclick="AddItem(1);" value="{params}" disabled="true" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{pm}</label> key.</span><input type="button" id="AddPMKey" class="addbutton" onclick="AddItem(2);" value="{pm}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{user}</label> key.</span><input type="button" id="AddMUserKey" class="addbutton" onclick="AddItem(3);" value="{user}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{/user}</label> key.</span><input type="button" id="AddNMUserKey" class="addbutton" onclick="AddItem(4);" value="{/user}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{role}</label> key.</span><input type="button" id="AddRoleKey" class="addbutton" onclick="AddItem(5);" value="{role}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{take}</label> key.</span><input type="button" id="AddTakeKey" class="addbutton" onclick="AddItem(6);" value="{take}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{kick}</label> key.</span><input type="button" id="AddKickKey" class="addbutton" onclick="AddItem(7);" value="{kick}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{ban}</label> key.</span><input type="button" id="AddBanKey" class="addbutton" onclick="AddItem(8);" value="{ban}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{req}</label> key.</span><input type="button" id="AddReqKey" class="addbutton" onclick="AddItem(9); setTimeout(function() {KeyDiv();}, 100);" value="{req}"/>
							</div>
							<br>
							<div class="KeyContentKey" id="AddNotReqKeyDiv">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{notreq}</label> key.</span><input type="button" id="AddNotReqKey" class="addbutton" onclick="AddItem(10);" value="{notreq}" disabled="true" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{exc}</label> key.</span><input type="button" id="AddExcKey" class="addbutton" onclick="AddItem(11); setTimeout(function() {KeyDiv();}, 100);" value="{exc}"/>
							</div>
							<br>
							<div class="KeyContentKey" id="AddIsExcKeyDiv">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{isexc}</label> key.</span><input type="button" id="AddIsExcKey" class="addbutton" onclick="AddItem(12);" value="{isexc}" disabled="true" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{alert}</label> key.</span><input type="button" id="AddAlertKey" class="addbutton" onclick="AddItem(13);" value="{alert}"/>
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{pref}</label> key.</span><input type="button" id="AddPrefKey" class="addbutton" onclick="AddItem(14);" value="{pref}"/>
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{greet}</label> key.</span><input type="button" id="AddGreetKey" class="addbutton" onclick="AddItem(15);" value="{greet}"/>
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{bye}</label> key.</span><input type="button" id="AddByeKey" class="addbutton" onclick="AddItem(16);" value="{bye}"/>
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{del}</label> key.</span><input type="button" id="AddDelKey" class="addbutton" onclick="AddItem(17);" value="{del}"/>
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{chan}</label> key.</span><input type="button" id="AddChanKey" class="addbutton" onclick="AddItem(18);" value="{chan}"/>
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{ismaster}</label> key.</span><input type="button" id="AddIsMasterKey" class="addbutton" onclick="AddItem(19);" value="{ismaster}"/>
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{listroles}</label> key.</span><input type="button" id="AddListRolesKey" class="addbutton" onclick="AddItem(20);" value="{listroles}"/>
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{allroles}</label> key.</span><input type="button" id="AddallrolesKey" class="addbutton" onclick="AddItem(21);" value="{allroles}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{joined}</label> key.</span><input type="button" id="AddJoinedKey" class="addbutton" onclick="AddItem(22);" value="{joined}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{channels}</label> key.</span><input type="button" id="AddChannelsKey" class="addbutton" onclick="AddItem(23);" value="{channels}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{meme}</label> key.</span><input type="button" id="AddMemeKey" class="addbutton" onclick="AddItem(24);" value="{meme}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{joke}</label> key.</span><input type="button" id="AddJokeKey" class="addbutton" onclick="AddItem(25);" value="{joke}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{ass}</label> key.</span><input type="button" id="AddAssKey" class="addbutton" onclick="AddItem(26);" value="{ass}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{boobs}</label> key.</span><input type="button" id="AddBoobsKey" class="addbutton" onclick="AddItem(27);" value="{boobs}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{sky}</label> key.</span><input type="button" id="AddSkyKey" class="addbutton" onclick="AddItem(28);" value="{sky}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{cats}</label> key.</span><input type="button" id="AddCatsKey" class="addbutton" onclick="AddItem(29);" value="{cats}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{wrecks}</label> key.</span><input type="button" id="AddWrecksKey" class="addbutton" onclick="AddItem(30);" value="{wrecks}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{space}</label> key.</span><input type="button" id="AddSpaceKey" class="addbutton" onclick="AddItem(31);" value="{space}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{dbz}</label> key.</span><input type="button" id="AddDBZKey" class="addbutton" onclick="AddItem(32);" value="{dbz}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{cute}</label> key.</span><input type="button" id="AddCuteKey" class="addbutton" onclick="AddItem(33);" value="{cute}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{cars}</label> key.</span><input type="button" id="AddCarsKey" class="addbutton" onclick="AddItem(34);" value="{cars}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{trucks}</label> key.</span><input type="button" id="AddTrucksKey" class="addbutton" onclick="AddItem(35);" value="{trucks}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{protect}</label> key.</span><input type="button" id="AddProtectKey" class="addbutton" onclick="AddItem(36);" value="{protect}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{timestamp}</label> key.</span><input type="button" id="AddTimeStampKey" class="addbutton" onclick="AddItem(37);" value="{timestamp}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{usernick}</label> key.</span><input type="button" id="AddUserNickKey" class="addbutton" onclick="AddItem(38);" value="{usernick}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{self}</label> key.</span><input type="button" id="AddSelfKey" class="addbutton" onclick="AddItem(39);" value="{self}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{getid}</label> key.</span><input type="button" id="AddGetIdKey" class="addbutton" onclick="AddItem(40);" value="{getid}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{rawid}</label> key.</span><input type="button" id="AddRawIdKey" class="addbutton" onclick="AddItem(41);" value="{rawid}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{usericon}</label> key.</span><input type="button" id="AddUserIconKey" class="addbutton" onclick="AddItem(42);" value="{usericon}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{membercount}</label> key.</span><input type="button" id="AddMemberCountKey" class="addbutton" onclick="AddItem(43);" value="{membercount}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{rolecount}</label> key.</span><input type="button" id="AddRoleCountKey" class="addbutton" onclick="AddItem(44);" value="{rolecount}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{channelcount}</label> key.</span><input type="button" id="AddChannelCountKey" class="addbutton" onclick="AddItem(45);" value="{channelcount}" />
							</div>
							<br>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{myperms}</label> key.</span><input type="button" id="AddMyPermsKey" class="addbutton" onclick="AddItem(46);" value="{myperms}" />
							</div>
							<br>
<!--
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{}</label> key.</span><input type="button" id="AddKey" class="addbutton" onclick="AddKey();" value="{}" />
							</div>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{}</label> key.</span><input type="button" id="AddKey" class="addbutton" onclick="AddKey();" value="{}" />
							</div>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{}</label> key.</span><input type="button" id="AddKey" class="addbutton" onclick="AddKey();" value="{}" />
							</div>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{}</label> key.</span><input type="button" id="AddKey" class="addbutton" onclick="AddKey();" value="{}" />
							</div>
							<div class="KeyContentKey">
								<span class="bold" style="padding: 3px 0px 3px 0px; margin-bottom: -3px;">Add a <label class="DCSL skipbold">{}</label> key.</span><input type="button" id="AddKey" class="addbutton" onclick="AddKey();" value="{}" />
							</div>
-->
							<br>
						</div>
					</div>
				</div>
			</div>
			<!--
			<div id="AutoAddKeyForType5Div" style="display:none;">
				<div class="KeyListContent">
					<h1>
						Pick a Key.
					</h1>
					<button class="buttonkeyscontent" onclick="CloseAutoAddKeyForType5(); return false;">Close ⨉</button>
					<div class="keycontent">
						<div class="keycontent1"><span class="bold">Add a <label class="DCSL skipbold">{params}</label> key in your <label class="DCSL skipbold">{role}</label> key.</span><input type="button" class="addbutton" id="AddKey1ToKey5" onclick="AddKeyToKey5(1);" value="{params}" disabled="true"></input></div><br>
					</div>
				</div>
			</div>
			-->
			<!-- Content should ALWAYS be visible -->
			<div id="Content" class="content" style="opacity: 1; transition: 0.2s; display: block !important; min-height: 80%;">
				<button class="ClearButton" onclick="CheckStyle(); ClearStorage();">Clear Creator</button>
				<div id="Log" style="opacity: 0; transition: opacity 1s; height: 0px;">
					<div id="outerLogContent" class="Log" style="display: none; transition: display 0.5s;">
						<button class="buttonkeyscontent" onclick="CheckStyle(); CloseLogDiv(); return false;">Close ⨉</button>
						<h1>
							Creator Log.
						</h1>
						<div class="LogContent">
							<div id="LogContent" class="innerLogContent"></div>
						</div>
					</div>
				</div>
				<div id="Creator" style="display: block;">
					<h1>Advanced A.R.S. Builder.</h1>
					<div class="bold trigger">Echo's Prefix<div class="ReqTip">*<div class="ReqTipText">This field is required. Filled in by default.</div></div>: <input class="prefix bold input" type="text" name="EchoPrefix" id="EchoPrefix" placeholder="." maxlength="3" value="." onchange="SetTrigger();" /></div>
					<div class="bold trigger">Your Prefix: <input class="prefix bold input" type="text" name="Prefix" id="Prefix" placeholder="." maxlength="3" value="" onchange="SetTrigger();" /></div>
					<div class="bold trigger">Trigger name<div class="ReqTip">*<span class="ReqTipText">This field is required.</span></div>: <input class="input" type="text" name="TriggerName" id="TriggerName" placeholder="Trigger name" value="" onblur="SetTrigger();" /></div>
					<div class="bold EnablePar trigger"><input type="text" class="input" name="TriggerNameAfterParams" id="TriggerNameAfterParams" placeholder="Trigger text after {params}" value="" onchange="SetTrigger();" onFocus="SetTrigger();" disabled="true" style="opacity: 0.5;" /><input class="EnableParBox" type="checkbox" name="UseParamsInTrigger" id="UseParamsInTrigger" value="UseParams" onchange="SetTrigger(); localStorage.setItem('UseParams', this.checked);" /><div class="ReqTip">!<span class="ReqTipTextBig">If enabled, <span class="DCSL skipbold">{params}</span> is required in your response. If <span class="DCSL skipbold">{params}</span> isn't found it will be automatically be added at the beginning of the response.</span></div> Enable <span class="DCSL skipbold">{params}</span> in your trigger.</div>
				<br>
				<br>
					<div id="KeysList" class="Keys">
						<label class="bold" style="padding-bottom: 4px;">Used Keys:</label>
						<div style="float: right; display: inline-block; height: 24px; padding: 0px 0px 6px; margin-top: -3px;">
							<button class="button" style="vertical-align: text-bottom; margin-bottom: 0px; height: 24px; line-height: 1.3;" onclick="KeyDiv(); return false;">Add a Key</button>
							<button id="AddTextFieldDiv" style="vertical-align: text-bottom; float: none; margin-bottom: 0px; height: 24px; line-height: 1.3;" class="addbutton" onclick="AddItem(0); return false;">Normal Text</button>
							<button id="AddLinebreakDiv" style="vertical-align: text-bottom; float: none; margin-bottom: 0px; height: 24px; line-height: 1.3;" class="addbutton" onclick="AddItem(100); return false;">Add Linebreak</button>
							<div id="SearchForKeysParentDiv" class="searcher" style="height: 24px; vertical-align: text-bottom;"><span class="bold">Search:</span><input type="text" id="SearchForKeysInput" class="input" style="vertical-align: top; margin-left: 2px; height: 17px; line-height: 1.3;" value="" placeholder="More info in settings." onkeyup="SearchForKeys(0, 0);"/></div><div class="searcher-button" style="height: 24px; vertical-align: text-bottom; width: 24px;" onclick="SearchForKeys(0, 0);"><i class="fa fa-search" style="padding: 3px 3px 3px 4px; font-size: 16px; display: inline-block;" aria-hidden="true"></i></div>
						</div>
						<hr style="margin-top: 6px; border: 1px solid rgba(51, 51, 51, 1);">
						<div id="Processing" style="">
							<div id="UsedItems" class="innerKeys" style></div>
						</div>
					</div>
					<div class="outputdiv">
						<label class="bold">Your Echo command:</label>
						<div id="Output" class="output"><label id="Trigger" style="cursor: text;"></label><label id="Response" style="cursor: text;"></label></div>
					</div>
				</div>
			</div>
		</div>
		<script>
			function CheckStyle() {
				if ($('#body').css('backgroundImage') != "radial-gradient(farthest-side at 10% 0px, rgb(21, 66, 101) 20%, rgb(115, 146, 194))") {
					$('#body').css('backgroundImage', "radial-gradient(farthest-side at 10% 0px, rgb(21, 66, 101) 20%, rgb(115, 146, 194))");
					document.getElementById("LogContent").innerHTML += "<span style='font-size: 15px; color: rgba(212, 134, 0, 1);'>&#9888</span>" + localStorage.getItem("DateAndTime") + "Client tried to change the background image of the body.<br>";
				}
				if ($('#body').css('backgroundColor') != "rgba(0, 0, 0, 0)") {
					$('#body').css('backgroundColor', "rgba(0, 0, 0, 0)");
					document.getElementById("LogContent").innerHTML += "<span style='font-size: 15px; color: rgba(212, 134, 0, 1);'>&#9888</span>" + localStorage.getItem("DateAndTime") + "Client tried to change the background color of the body.<br>";
				}
				if ($('#Content').css('backgroundColor') != "rgba(51, 51, 51, 0.498039)") {
					$('#Content').css('backgroundColor', "rgba(51, 51, 51, 0.498039)");
					document.getElementById("LogContent").innerHTML += "<span style='font-size: 15px; color: rgba(212, 134, 0, 1);'>&#9888</span>" + localStorage.getItem("DateAndTime") + "Client tried to change the background color of the div with id Content.<br>";
				}
				if ($('#KeysList').css('backgroundColor') != "rgba(51, 51, 51, 0.498039)") {
					$('#KeysList').css('backgroundColor', "rgba(51, 51, 51, 0.498039)");
					document.getElementById("LogContent").innerHTML += "<span style='font-size: 15px; color: rgba(212, 134, 0, 1);'>&#9888</span>" + localStorage.getItem("DateAndTime") + "Client tried to change the background color of the div with id KeysList.<br>";
				}
				if ($('#UsedKeys').css('backgroundColor') != "rgba(0, 0, 0, 0)") {
					$('#UsedKeys').css('backgroundColor', "rgba(0, 0, 0, 0)");
					document.getElementById("LogContent").innerHTML += "<span style='font-size: 15px; color: rgba(212, 134, 0, 1);'>&#9888</span>" + localStorage.getItem("DateAndTime") + "Client tried to change the background color of the div with id UsedKeys.<br>";
				}
			}
		</script>
		<div style="height: 75px;"></div>
		<div class="footer">
			<div>
				<p>2017 © xTech Labs. All Rights Reserved</p><br>
				 <a class="link" href="https://echo.xtclabs.net/home.php" target=_blank>Echo 2.0</a> by Proxy#0814. <button class="link" onclick="var X = window.pageXOffset; var Y = window.pageYOffset; SmoothScrollToTop(X, Y);">A.R.S. Creator</button> by JurrijnP#1676.
			</div>
		</div>
		<script src="/js/System.js?v=<?=time();?>" type="text/javascript"></script>
		<script src="/js/TrelloWidget2.js?v=<?=time();?>" type="text/javascript"></script>
		<script src="/js/Searcher.js?v=<?=time();?>" type="text/javascript"></script>
		<script src="/js/TimeDate.js?v=<?=time();?>" type="text/javascript"></script>
		<script src="/js/PageShow.js?v=<?=time();?>" type="text/javascript"></script>
		<script src="/js/Window.js?v=<?=time();?>" type="text/javascript"></script>
	</body>
</html>