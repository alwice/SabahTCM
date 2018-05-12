<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" conetent="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
		session_start();
		$_SESSION['pages']="tc.php";
		$page_title="information";
		include("menu.php");
	?>
	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		    if (document.body.scrollTop >20 || document.documentElement.scrollTop >20) {
		        document.getElementbyId("topBtn").style.display = "block";
		    } else {
		        document.getElementbyId("topBtn").style.display = "none";
		    }
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		    document.body.scrollTop = 0; // For Safari
		    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
		}
	</script>
	<title>服务条款 - SABAHTCM</title>	
</head>
<body>
	<div id="breadcrum">
		<a href="index.php"><i class="icon-home icon-large"></i>&nbsp;首页</a>&nbsp;&nbsp;>
		<a href="tc.php"><i class="icon-question icon-large"></i>&nbsp;服务条款</a>&nbsp;&nbsp;
	</div>
	</br>
	<button onclick="topFunction()" id="topBtn" title="Go to top">顶端</button>
	<div id="body">
		<div class="content">	
			<h3>服务条款</h3>
			<b>目录</b>
			
			<ol><li><a href='#purpose'>用意</a></li>
				<li><a href='#advice'>非保健忠告</a></li>
				<li><a href='#author'>权限</a></li>
				<li><a href='#usage'>修改和终止服务</a></li>
				<li><a href='#user'>用户内容和行为</a></li>
				<li><a href='#privacy'>隐私政策</a></li>
				<li><a href='#disclaimer'>免责声明</a></li>
				<li><a href='#indem'>赔偿</a></li>
				<li><a href='#cr'>版权，商标和其他知识产权</a></li>
				<li><a href='#agree'>协议</a></li>
				<li><a href='#sever'>分割;解释</a></li>
				<li><a href='#mis'>其它</a></li>
				<li><a href='#cu'>联系我们</a></li>
			</ol>
			<hr>

			<ol><b><li id='purpose'>用意</li></b>
				<p>欢迎来到SabahTCM网站（“本站”）。此SabahTCM 服务条款（“协议”）阐述SabahTCM，和SabahTCM开发部（一同“我们”或者“我们的”），和全管理员，和全用户（“您”或“您的”）之间的协议以便控制您对于本站的使用，以及SabahTCM隐私政策。请在使用本网站，或向我们透露任何个人信息之前仔细阅读本协议。</p>
				<p>通过使用本网站，或向我们透露任何个人信息：（i）您同意您已阅读并理解本协议的条款，（ii）您接受并同意接受本协议的条款，并 （iii）您接受并同意遵守适用于本协议主题事项的所有法律和法规。</p>
				<p>如果您不同意本协议的条款，请勿访问或以其他方式使用本网站，或向我们披露任何个人信息。</p>
				<p>本协议中包含的使用条款可能会定期更改，并且可能会随时更新，并可能会随时更新本帖。您应该时常访问此页面，以审查当时的使用条款，因为它们对您有约束力。您继续使用本网站即意味着您接受对本协议的任何更改或修改。如果任何修改对您不可接受，您唯一的方法是通过<a href="about.php">联系我们</a>终止本协议。本协议中包含的使用条款中的某些条款可能会被位于本站特定页面上的法律声明或条款所取代。</p></br>

				<b><li id='advice'>非保健忠告</li></b>
				<p>本站提供的信息和其他内容，包括可能直接在站上提供或通过链接到第三方网站提供的信息仅供参考。有关任何医疗或健康相关的诊断或治疗选择，请咨询医生或其他医疗保健专业人员。</p>
				<p>本站和链接上提供的信息，包括有关医疗和健康状况，治疗和草药的信息可能会以摘要形式提供。本站的信息不应被视为医疗保健专业人员建议的替代品。本站不建议对健康问题进行自我管理。本站的信息并不全面，并不涵盖所有疾病，身体状况或治疗。如果您有任何健康相关问题，请立即根据您在本站上阅读的信息联系您的医疗保健专业人员，切勿忽视或推迟医疗建议。</p>
				<p>链接或从任何第三方网站或资源访问不是任何信息的认可。我们不对任何第三方网站的内容或性能负责。使用任何第三方网站的风险由您自己承担。</p>
				<p>您不应使用网站上的信息来诊断或治疗任何健康问题或处方药物或其他治疗。在使用任何药物或草药之前，或者在开始治疗健康问题之前，您应该咨询您的医疗保健专业人员并阅读所提供的信息。不同个人对不同的草药有不同的反应。您应该咨询您的医生您正在服用的药物之间的相互作用。管理员或本站用户在网站上的任何论坛上发表的评论都严格按照他们自己的个人身份进行个人观点，而不是我们提出的声明或他们代表我们的立场或观点。</p>
				<p>对于本站提供的任何关于草药用于任何健康目的的建议，我们不承担任何责任。草药不是为了治疗，预防或治愈疾病。在开始任何治疗之前咨询医疗保健专业人员。即使我们已被告知发生问题的可能性，我们也不会对所提供信息触发的任何问题负责。</p></br>

				<b><li id='author'>权限</li></b>
				<p>通过使用我们的网站，您表示并同意您至少年满18周岁且完全有能力参与本协议中规定的条款，条件，陈述和保证;否则，请退出本站。本站的目的不是为了吸引未满18岁的用户。我们不会收集任何我们知道未满18岁的人的个人信息。如果您未满18岁，则不允许透露或发送给我们任何个人信息。</p>
				<p>本站仅为马来西亚沙巴大学（UMS）毕业报告（FYP）运作。所有发送给我们的个人信息都受到沙巴隐私政策的约束。我们不保证本站或其内容（包括但不限于网站上或通过本站提供的任何草药）适合或可用于其他地点。如果您从马来西亚沙巴境外访问本站，则您必须自行采取行动，并且必须承担遵守适用当地法律的全部责任。您同意您不会在任何国家或以任何适用法律，限制或规定禁止的方式使用网站内容。建议其他国家的用户不要向我们透露个人信息，除非您同意遵守沙巴法律并遵守我们的隐私政策使用和披露您的信息。</p></br>

				<b><li id='usage'>修改和终止服务</li></b>
				<p>您需要在网站上建立帐户才能使用某些功能，例如论坛。您同意根据本网站的提示提供关于您自己的准确，真实，完整和最新的信息，并及时更新此类信息以保持准确，真实，完整和最新的信息。如果您提供任何不准确，虚假，不完整或过时的信息，或我们全权酌情怀疑此类信息不准确，错误，不完整或过时，我们保留暂停或终止您的帐户的权利，并禁止任何及所有当前或未来的使用或本网站的任何部分。在注册过程中，您将创建一个用户名和密码。您有责任保护您的帐户和密码，并对您的帐户或密码下发生的所有活动负全部责任。您同意立即通知我们任何未经授权使用您的帐户或密码或任何其他安全漏洞，并确保您在每次会话结束时退出您的帐户。您同意对因在您的网站上使用您的帐户而产生的所有费用负责，包括因未经授权使用您的帐户而产生的费用。对于您未遵守本节所导致的任何损失或损害，我们不承担任何责任。</p>
				<p>您同意将本网站用于合法目的，并且您有责任对本网站的使用和通信负责。您同意不通过本网站发布或传播任何非法，侵权，诽谤，淫秽，猥亵，威胁，冒犯或其他令人反感的材料，包括鼓励非法行为或鼓励民事责任，侵害他人的材料 知识产权或以其他方式违反任何适用的地方，州，国家或国际法律。您同意不会以干扰正常操作或侵害他人使用本网站的方式使用本网站。</p>
				<p>您同意不通过我们提供的界面以外的任何方式访问本网站。未经我们事先授权，禁止在本网站以框架或其他网站上的类似方式显示或运行本网站或本网站上显示的任何信息或资料。任何获得许可的链接都必须遵守所有适用的法律，规则和条例。</p>
				<p>我们不保证网站上的材料或网站上描述的草药适合或可用于沙巴境外的司法管辖区，或者本协议符合任何其他国家/地区的法律。沙巴境外网站的用户主动承担风险并承担风险，并有责任遵守所有适用的法律和法规。您同意不从任何位置或领域访问本网站，而这些网站的内容是非法的，您而不是我们负责遵守所有适用的法律和法规。</p>
				<p>本协议在我们或您终止前一直有效。我们可以自行决定随时暂停或终止本协议，恕不另行通知，并且拒绝您访问本网站或其任何部分。您可以随时通过<a href="about.php">联系我们</a>终止本协议，并停止使用本网站。一旦我们或您终止，您必须销毁从本网站获得的所有材料，包括此类材料的所有副本，无论这些材料是根据本协议中包含的使用条款或其他方式制作的。我们保留在不事先通知的情况下暂时或永久修改或终止本网站或其任何部分的权利。我们对您或任何第三方对本网站的任何修改，暂停或终止不承担任何责任。</p>
				<p>如果您的订单被视为欺诈或信用卡收费有争议，我们保留终止任何帐户的权利。您同意，我们可以自行决定认为违反本协议，法律或法规的任何部分或者是否存在任何违反本协议任何部分的行为，无论是否通知，我们都可以终止或暂停您访问全部或部分网站的权利 对其他用户或我们或我们的附属公司有害。</p>
				<p>在我们或您终止本协议后，以下各项均不受任何影响： 隐私，免责声明，可分割性; 解释和杂项。</p></br>

				<b><li id='user'>用户内容和行为</li></b>
				<p>在本网站适用的情况下，您可以发布自己的内容（“用户内容”）。您了解自己对发布到网站的任何内容负全部责任。您一个人承担与您的内容相关的所有风险，包括任何人对其准确性，真实性或可靠性的依赖，或者您对内容中的信息的任何披露，使您可识别。发布后，您的内容可能无法撤消。您不得暗示您的内容得到我们的认可。如果您的内容虚假，诽谤，故意误导，侵犯包括版权，商标，专利，商业秘密，隐私权，公开权或任何其他知识产权或专有权利在内的任何第三方权利或违法，则您可能承担责任或违反或主张违反任何法律或法规。我们不能保证您的内容不会被其他用户滥用。如果您有要保密的信息和/或不希望他人使用的信息，请勿将其发布到本网站。我们不对任何用户内容承担责任，包括任何错误或遗漏，或以任何方式在网站上发布任何用户内容导致的任何损失或损害。对于任何用户使用或盗用您发布到本网站的任何内容，我们概不负责。</p>
				<p>通过在网站上发布用户内容，您特此授予（或保证此类权利的所有者已明确授予）我们永久，全球，免版税，不可撤销，非排他性的权利以及使用，托管，存储，复制，改编，发布翻译，编辑，再许可，修改，创作衍生作品，交流，发布，公开展示和分发此类内容或将此类内容纳入任何形式。上述授权包括但不限于您的用户内容中的任何版权和其他知识产权。您声明并保证您发布的内容不侵犯隐私或公开权利，版权，合同权利或任何其他权利，包括任何人的精神权利。您同意支付因您发布到本网站的任何内容而欠任何人的所有版税，费用和任何其他款项。即使您停止使用我们的网站，此许可也会继续。</p>
				<p>您明白我们可能会保留用户内容，并可能在法律要求的情况下披露用户内容，或者本着善意相信这种保全或披露对遵守法律程序，强制执行本协议，回应声明是合理必要的任何用户内容侵犯第三方的权利，或保护我们，我们的用户和公众的权利，财产或人身安全。您了解，本网站的技术处理和传输（包括您的用户内容）可能需要通过不同的网络进行传输和更改，以符合连接设备或网络的技术要求。</p>
				<p>您的内容张贴是自愿的，包括想法，意见和披露。通过发布您的内容或评论或使用您的内容，不存在任何机密或合约关系。我们不对任何用户内容披露负责，包括您发布到本网站的意见或建议。我们有权不受限制地使用其可能收到的任何用户内容，用于任何目的，商业或其他方面，而无需向您作为内容提供商作出赔偿。</p>
				<p>您同意不使用本网站于：</p>
				<ol type="a">
					<li>发布或以其他方式传送任何有害，虚假，非法，淫秽，诽谤或其他令人反感的用户内容。</li>
					<li>骚扰，追踪或以其他方式滥用他人。</li>
					<li>冒充任何实体或歪曲与任何个人或实体的关系。</li>
					<li>危害未成年人。</li>
					<li>尝试掩饰发布到网站的任何用户内容的来源。</li>
					<li>张贴或以其他方式传送您根据任何法律，合约或信托关系无权传送的任何用户内容。</li>
					<li>发布或以其他方式传输任何侵犯任何一方的专利，版权，商标或其他所有权（“权利”）的用户内容，或以其他方式传播本网站上的任何受保护资料。</li>
					<li>张贴或以其他方式传送任何未经请求的广告，宣传材料，垃圾邮件，垃圾邮件，传销或任何其他形式的请求。</li>
					<li>张贴或以其他方式传送任何含有病毒，特洛伊木马或其他有害，破坏性或破坏性材料的内容，以限制任何计算机软件，硬件或电信设备的功能，或干扰第三方使用本网站。</li>
					<li>收集有关其他网站用户的数据。</li>
					<li>访问本网站的未授权区域，包括服务器或网络。</li>
				</ol></br>
				<p>我们将终止账户和/或阻止违反本网站任何人的知识产权的网站用户。您了解，通过使用本网站，您可能会暴露于其他不雅或其他令人反感的用户内容。我们不认可或控制用户内容。用户内容在发布之前未经我们审查，并且不反映我们的意见。对于您可能从本网站获得的用户内容或任何其他材料或信息的准确性或可靠性，我们不作任何明示或暗示的陈述或保证。对于不适当的用户内容或行为，我们不负责监控本网站。如果我们在任何时候自行选择监督本网站，我们仍然不承担用户内容的责任，也没有义务修改或删除任何不适当的用户内容，也不对网站用户的行为负责提交任何此类用户内容。尽管有上述规定，我们有权自行决定删除任何违反本协议或其他令人反感的用户内容。您同意您必须评估并承担与使用任何用户内容相关的所有风险，包括依赖此类内容的准确性，完整性或实用性。在这方面，您承认您可能不会依赖任何用户内容。您完全负责与其他网站用户的互动。我们有自行决定权，但没有义务监控您与其他网站用户之间的通信，并终止您的网站访问。</p>
				<p>您同意就任何因您张贴任何内容或资料或您未遵守本协议而引起的任何或所有第三方索赔，损害，损失，责任和诉讼因由向我们作出赔偿。您同意在辩护任何索赔时尽可能合理地合作。我们保留权利承担您的任何赔偿责任的专属辩护和控制权，在这种情况下，您仍然需要赔偿我们的律师费和费用，以及由于任何损失，索赔，损害和责任我们。</p>
				<p>我们没有也不能审查所有通讯和内容用户张贴或上传到网站的互动区域。我们不负责发布或上传到网站的任何通讯或材料内容。我们保留全部或部分阻止，移动，删除或部分修改您提交给本网站的任何内容的权利，我们认为这些内容具有欺诈性，欺骗性，误导性，辱骂性，淫秽性，诽谤性或侵犯版权，商标或其他知识产权或我方全权决定不能接受的其他知识产权。发布到本网站互动区域的任何内容不应被视为专业医疗建议或指导。</p></br>

				<b><li id='privacy'>隐私政策</li></b>
				<p>您的隐私和安全是SabahTCM的重中之重。自2017年成立以来，我们从未出租，出租或出售过任何客户信息 - 永远不会。</p>
				<p>当您在网站上提交个人信息时，您同意我们将收集，使用，披露和以其他方式管理您的个人信息的方式，如下所述。</p>
				<ol type="a">
					<b><li>收集和使用个人信息：</li></b>
					<p>我们可能会收集您在下列情况下提供给我们的个人信息：（a）交换或索取有关我们产品和服务的某些信息; （b）与我们联系; （c）访问或注册我们的网站或参与我们网站的其他功能; （d）参加比赛或抽奖活动或回复我们的一项调查;或（e）向我们提供意见或建议。我们采取合理和适当的措施保护您的个人信息免受未经授权的泄露或访问。但是，没有任何通过互联网传输或存储在服务器上的数据可以100％保证安全。因此，尽管我们努力保护您的隐私和个人信息，但我们无法保证向我们在线传输或向我们披露的任何信息的安全性。我们不负责披露，破坏或盗用您的个人信息。如果您选择注册我们，您为您的账户建立了一个密码，在这种情况下，您的在线账户信息将受到您的密码保护。我们建议您不要向任何人透露您的密码。您有责任确保您的帐户和密码的机密性，并对您的帐户和密码下发生的所有活动负全部责任。我们建议创建具有挑战性的密码，例如使用字母数字组合的密码。</p>

					<b><li>cookies：</li></b>
					<p>我们使用“cookiess”，如果您允许使用，则在您访问本网站时将少量数据存储在您的计算机上。cookies可以帮助我们跟踪您最喜欢的网站的哪些功能。因此，cookies使我们能够根据您的偏好来定制我们的内容。您可以通过修改浏览器设置来接受或拒绝cookies。即使您在浏览器上禁用了cookies功能，我们的网站仍可查看。但是，如果您禁用cookies，则帐户登录和结帐等主要功能将无法正常运行。</p>
					<p>我们可能会将cookies用于多种用途，包括但不限于：跟踪您在使用网站时指定的偏好设置;提供与您的兴趣相关的广告和内容;提供一般的内部和客户分析;以可识别和匿名的形式保存信息;在“登录”时访问您的信息以向您提供定制内容;开展研究以改善我们的内容，产品和服务;支持安全措施，例如在一段时间过后需要重新登录网站;并协助确定可能的欺诈活动。</p>
					<p>这项技术的一部分利用互联网“cookies”。cookies以文本文件的形式存储在硬盘中。大多数cookies是“会话cookies”，意思是关闭浏览器时会自动删除。其他cookies被称为“持久性”，因为它们不会过期。通常这些cookiess允许我们提供有关产品和定价的定位信息。但是，您可以按照浏览器帮助文件中的说明轻松删除它们。收集这些统计数据时，请务必注意，我们不会出售，出租或出租您的任何个人信息。</p>

					<b><li>SabahTCM＆第三方：</li></b>
					<p>像大多数零售商一样，当您访问我们的网站时，我们正在收集有关该访问的信息。我们收集这些信息以改善我们向您提供的信息和服务。为了收集这些信息，我们利用了谷歌等第三方公司的技术。例如，我们利用Google Analytics帮助进行网站衡量。这个软件被用来匿名和综合评估人们如何使用SabahTCM网站。</p>
					<p>此软件提供关于您的设备（例如电脑，平板电脑，智能手机），浏览器类型（例如Chrome，Safari，Firefox）和操作系统（例如Windows，Macintosh，Android，iOS）的信息。我们收集这些信息以确保网站是基于大多数人用来访问我们网站的技术进行优化的。</p>

					<b><li>在法律程序中披露个人信息：</li></b>
					<p>如果我们或我们的任何服务提供商被执法人员或司法当局要求提供个人用户的个人信息，我们或适用的服务提供商可能会在未经您同意的情况下提供此类信息。在涉及个人或公共安全索赔的事宜中，我们或适用的服务提供商可能会在未经您同意或法庭程序的情况下向有关当局提供您的个人信息。我们或我们的服务提供商还会提供您的个人信息以回应搜查令或其他合法有效的查询或命令，或者在违反协议或违反法律或涉及我们的诉讼中向调查机构提供您的个人信息，适用的服务提供商或其他方式</p>
				</ol></br>

				<b><li id='disclaimer'>免责声明</li></b>
				<p>您同意，使用本网站的风险由您自行承担。除本协议另有明确规定外，本网站及其中包含的资料均按“原样”和“可用”的基础提供。SABAHTCM及其他管理人员及其他代表，继承者及其任何人员（统称“SABAHTCM实体”）明确拒绝任何形式的明示或暗示保证，包括但不限于对适销性，适用性的暗示保证特别的目的和非侵权。</p>
				<p>SABAHTCM实体不担保本网站将符合您的要求，本网站将是及时，安全，无错误或不间断的，从本网站获得的结果将是准确或可靠的，任何产品，服务，信息的质量或您通过本网站获得的其他材料将符合您的期望，并且任何网站错误都将得到纠正。通过本网站下载或以其他方式获得的任何材料由您自行承担风险，并且由于任何材料的下载导致您的计算机系统遭受任何损坏或数据丢失，您自行承担责任。您从SABAHTCM实体或通过本网站获得的任何信息都不会产生本协议中未明确声明的任何担保。</p>
				<p>在适用法律允许的最大范围内，在任何情况下，对于因使用或无法使用本网站而导致的任何形式的损害，SABAHTCM实体不承担任何责任，包括但不限于出版商信息，任何不正确的信息或不准确的信息，任何第三方在本网站的陈述或行为，或与本网站或任何第三方网站有关的任何其他事宜。这是一种全面的责任限制，适用于任何形式的所有损害，包括任何直接的，间接的，附带的，特殊的或后果性的损害赔偿（包括损失赔偿金，使用损失，数据丢失，购买替代信息的成本，诉讼或类似行为），无论是否违反合同，违反保证，民事侵权行为（包括疏忽），信息责任或其他方面，即使萨巴赫中学实体被告知可能发生此类损害。SABAHTCM的责任限制是SABAHTCM与您之间安排基础的基本要素。通过本网站提供的信息不会在没有此限制的情况下提供。尽管由于任何理由，沙特阿拉伯中小企业实体的上述唯一和全部最大责任，以及您对因任何原因或索赔所获得的唯一和排他性补偿将仅限于您从本网站向SABAHTCM提供的任何信息所支付的金额。p>
				<p>由于某些州和/或司法管辖区不允许免除某些担保或限制或排除对某些类型的损害的责任，因此，某些上述免责声明和限制可能不适用于您。如果您对本网站的任何部分或任何本协议中包含的任何使用条款不满意，您唯一的和唯一的补救措施是停止使用本网站。</p></br>

				<b><li id='indem'>赔偿</li></b>
				<p>您同意对因使用本网站或与本网站联系，使用或无法使用本网站或任何网站而产生的所有损失，费用，费用和损失（包括律师费）向SabahTCM提供赔偿，辩护和保护，您或他人与您的帐户相关的帖子或活动，您违反本协议的任何条款，您违反第三方的任何权利，或您违反任何适用法律，规则或条例。您同意在辩护任何索赔时尽可能合理地合作。我们保留权利承担您的任何赔偿责任的专属防御和控制权，在这种情况下，您仍然需要赔偿我们的律师费和费用，以及由于您的损失，索赔，损失和责任 我们。未经SabahTCM事先书面同意，您不得在任何情况下解决任何事宜。</p></br>

				<b><li id='cr'>版权，商标和其他知识产权</li></b>
				<p>您承认网站上的所有资料包括网站的设计，文字，图形，声音，图片，软件和其他文件及其选择和排列（统称为“材料”）的评论和奖励计划我们的财产并受美国和国际版权及其他知识产权法律和权利的保护。本网站所包含的商标，服务标志，商标名称和徽标（统称为“商标”）（包括但不限于SabahTCM®是SabahTCM的唯一财产，不得全部或部分复制或以其他方式使用，事先获得SabahTCM的书面授权。此外，所有页面标题，自定义图形和自定义图标均为SabahTCM标志，未经SabahTCM事先书面授权，不得复制或以其他方式使用全部或部分内容。其他版权，商标，产品名称，公司名称，标识或知识产权均为相应所有者的财产，并保留所有权利。对SabahTCM拥有的任何材料或商标的任何使用均被视为侵权或我们的知识产权（包括专利权），并将依法追究。</p>
				<p>同意本协议中包含的使用条款，您同意未经SabahTCM事先明确的书面同意，不会使用任何文字，图片，肖像或其他版权或受保护的SabahTCM或其他第三方的材料。</p></br>

				<b><li id='agree'>协议</li></b>
				<p>本协议构成我们与您之间就本协议主题事项达成的唯一协议。本协议取代所有之前或同期的关于本协议主题的书面或口头协议，陈述，保证和谅解。</p></br>

				<b><li id='sever'>分割;解释</li></b>
				<p>如果本协议的任何条款因任何原因被视为无效，非法或无法执行，则该条款将从本协议中断开，本协议的其余部分将继续有效。在本协议中使用时，术语“包括”将被视为后面加上“无限制”一词。</p></br>

				<b><li id='mis'>其它</li></b>
				<p>未经我们事先书面同意，您不得通过法律或其他方式转让本协议。受此限制，本协议将对当事人及其各自的继承人和受让人具有约束力，并对其有利并具有强制力。</p>
				<p>沙巴中华总商会未能严格执行本协议的任何条款并不构成对此条款的放弃，也不会被视为放弃或限制该方在此后坚持严格遵守该条款或任何本协议的其他条款。您同意，无论任何法律或法律有何相反规定，任何因使用本网站或本协议而引起或与之相关的诉因的索赔必须在此索赔或诉因发生后一（1）年内提交或将永久禁止。本协议中的“免责声明”条款是为了本协议中定义的沙巴中华实体的利益，并且这些个人或实体中的每一方都有权以自己的名义直接对您的行为主张并执行这些条款。</p></br>

				<b><li id='cu'>联系我们</li></b>
				<p>如有疑问，请<a href="about.php">联系我们</a>。</p>
			</ol>
		</div>
	</div>
	<?php
		include ("footer.php");
	?>
</body>
</html>