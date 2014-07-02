<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.1.0
*/error_reporting(6135);$Ec=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Ec||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$_h=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($_h)$$X=$_h;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃşÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ıÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒŞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Şn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1Ìs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŒFÃ©”vt2‚Ó!–r0Ïãã£t~½U'3M€ÉW„B¦'cÍPÂ:6T\rc£A¾zr_îWK¶\r-¼VNFS%~Ãc²Ùí&›\\^ÊrÀ›­æu‚ÅÃôÙ‹4'7k¶è¯ÂãQÔæhš'g\rFB\ryT7SS¥PĞ1=Ç¤cIèÊ:d”ºm>£S8L†Jœt.M¢Š	Ï‹`'C¡¼ÛĞ889¤È QØıŒî2#8Ğ­£’˜6mú²†ğjˆ¢h«<…Œ°«Œ9/ë˜ç:Jê)Ê‚¤\0d>!\0Z‡ˆvì»në¾ğ¼o(Úó¥ÉkÔ7½sàù>Œî†!ĞR\"*nSı\0@P\"Áè’(‹#[¶¥£@g¹oü­’znş9k¤8†nš™ª1´I*ˆô=Ín²¤ª¸è0«c(ö;¾Ã Ğè!°üë*cì÷>Î¬E7DñLJ© 1ÊJ=ÓÚŞ1L‚û?Ğs=#`Ê3\$4ì€úÈuÈ±ÌÎzGÑC YAt«?;×QÒk&ÇïYP¿uèåÇ¯}UaHV%G;ƒs¼”<A\0\\¼ÔPÑ\\Âœ&ÂªóV¦ğ\n£SUÃtíÅÇrŒêˆÆ2¤	l^íZ6˜ej…Á­³A·dó[İsÕ¶ˆJP”ªÊóˆÒŒŠ8è=»ƒ˜à6#Ë‚74*óŸ¨#eÈÀŞ!Õ7{Æ6“¿<oÍCª9v[–MôÅ-`Óõkö>lÙÚ´‹åIªƒHÚ3xú€›äw0t6¾Ã%MR%³½jhÚB˜<´\0ÉAQ<P<:šãu/¤;\\> Ë-¹„ÊˆÍÁQH\nv¡L+vÖÃ¦ì<ï\rèåvàöî¹\\* àÉçÓ´İ¢gŒnË©¸¹TĞ©2P•\r¨øß‹\"+z 8£ ¶:#€ÊèÃÎ2‹ºJ[i—‚£¨;z˜ûÑô¡rÊ3#¨Ù‰ :ãní\rã½ƒeÙpdİİ è2cˆê4²k¿Š£\rG•æE6_²ªÊØŞ‰b‹/Œ«HB%ò0ë¢>ÈÈğhoWÃnxlÖ æµƒCQ^€°ĞÔÿßñ\r„Š¾¶4lK{şZÆü:†ĞÜÃƒŸ.¦p¨§Ä‚éJóB-Å+B”´‘(ëTòŸ%®µJ›0ªlØT¶`+É-Á¾@BÚáÛ„Vá’Ä\0ÂÏC¼,ì¯0tâàŒF‡‰å?Ä Ë\na@ÉŒ>‚âZEC“ôO-æ›¤^Q€&ßÖù)I)®¤ÄÀR„]\r¡”9”7_ˆ¢\rÉF80µObù	€‘î>ºäı\nRı_ˆÑ8æ‚ØÙ«äov0¤bCA¸F!Ñt—–Äƒ%0”/‘zAYO(4«‹¡ˆ¨Ò	'Ÿ] Iéí8hHÂ05˜3ò@x&nˆ’|TÓ³³)`.“s6eY˜D¦z¸Œ®¥ƒJÑ“ô.„ñ{GEb¹Ó‹¡˜‹†2Õ×{\$**ı¾@İC-:zYHZIôà5F]¦²YúùCªOêAÂÚó`x'´.*9t'{ÿ(êšwP¶¾ Ñ=¢*‰†ú*üxwråÔ*c‚Ìc|„DŸ“ÚV—–\r†V.‡0âÆ™V¤dˆ?Ò€üê,EÍ`T¦É6Ûˆ-“Åì¾ÅÚT[Ñªz©‚.Ar±£Í€Pøºnƒc=aÔ9Fònß!ÙuáÎA©Şƒ0iPó¬”îºJ6eäT]VØ[\rXÌáaŸ–vkõ\n+EˆáÜ•*\0¶~¶Æù@g\"ÌNCI\$àÉŒƒ€êx@WÃy¼*vuDÙ\0ŞvœëŒ†V\0èV`Gç½uµE®Ö•ÂÁf“l˜h’@ï)0@šT•°7‹íÛÂ§RAÊÙ·ò´3Û˜Ğ«/QÇ]ª,sÖ{VR±¡öF«¡A˜„<¨v×¥î´%@9‚ÀF¢Õ5t‰%Ö+º/¢8;¾WÑäÚÇJïĞo:ÖNÿ`ø	•ÿš´hìÁ{Ü£•î ËÔ8ÔEuª&°W|É†„‰®Uú&\r\"ÔÁ»‰|-uÇ†…Në¶:nc²©fV­‹ÂÃè#U20å>\"®²Ç>Ì`œk]î-¯ÇxùSØÍ‡Ğ¢©‰‚êcâ¡óB’—}Ø&`ˆîr+E­“\$œyNıŒ±b,†´´Wx ş-9åÕrÓ,’ü`å+œïíËŠù’CœÓ)˜˜7Ûx\r¬şWµfMŒSR¼\\èz¦ÙQ²Ì“”uA¬ºê2±õ4îL&ËHi Âµ°²¹S\$)e³“æg rÈŒ©ƒ\$]ZëiYs¤õ×kW–n>µ7E1k8ĞdÃró®škÁı¢ëEŞÙÛwÂwcmTy¹•ë¿a›\$tx\rB´÷=Šö¢*”<Èƒ l¡fôKœ‘N/¶¼	ÃlÕáükH“õ8 .‘‘ù?f÷›Úÿã6†Ñ‡¼{gi/\"à@–K›ñ@2ãça|#,Z¤±‡	³ñwˆd¬™“²…¼å6w™^&Áêt™çœP±…¥Äù]À¼›.àãÚí¡TìîkroÀ‰÷\ro=—%æ×h`:\0á±‚ö«”|êŠ£«a“Ô®6*:ÍÓ*‡ÊrO-^–’ñén«Íó§MÆ}æ»÷ÆAya±İ\nƒu^ì–ÀrnO\r±»¡`şT~</ğ¶wÄyş}æ:›|£ÏĞûÖÌ¡6»¤×ø®Ÿvî\rc<·b#ûàô§†î–\$ùsµê|ç‡‡V)«h‹TCùñ(Ä½ñ£Ì]6¦Ş1´!1M±¸@a´/`Û>Ù¸üß£ğÕßÈÛC/ì6à´·#p@pá‘óÿ`Zÿôıchı°\0ïë\0oæ€ğ4OıOøi\0-\n«îÿ/ı\0£Dğ.ÿ ¾ˆ.“Ä\0fiŒÀÈ«£€˜\0Œ”IDüç\0§¬\rïı0f ßoãÿ€ÊGüˆğeJ|\r€¿ıl	¨3ê~ğiP›¦&“É¿/µ\09	^\0r•0]¯õ ¾Â›oõ.ı\"	°ĞÑM¥íğvÿP€ZĞÕmpËP°ùÚœĞŞ¹ïô{§†C?²Àk“Ï¼}ğ®şdöïÊ°~=‘.Ô- é	Ğm1>hûÏÛĞ•1;QI‘OPÈ\rºcßpApV«k\rQ*èQ}ÏçŸq>˜Ğu15BqQ[1fûñl«Â€apå¯ü\0Û‘*ŒJ©Q=ñÃ£Ù‘GÜäŠÕÁ±Ÿ±_ñ—ñbŒGHF.‚0Ôø	= 2P™Àó æòÏçP!ò#(3 \nÙ!1&72fª`Â/å\0°‡\"PÁUõ\$ñ\r0Ìğ,QrU&2fšÒ_²Xààò]ğ9\"’S'òƒ'²yğ8\r¨ú§òkW)Oõ)’*Ra%ã\\i—%ò‰&Ò³+r…’3ğS`…,ñvı¦&2×L–&Pu*›-ğ˜0\"Á%HÄ¬ÔïÏ@Ø“±°H‰B–P(ÃÉ\$p&ı,1MÂ ªØ­Ã®;\rnÁ.¯Ê I­.Õ',1ò)Ó4ı²å2°u+ó3æ `ÈSŠpL\nt§’_*²S3;6r'h35¤55äœ‹d2q+6ñ8‘O7sC\"pm8Ò­³“6³—9òm\n@e0É<8B8©<,( ¨8²Û\0è	Ó0šJÙ<@¦ĞI¤«ÀR6pÔ­mGË\"11¤6ËĞ.\"æÀ‚ï5Ì‚ûÇ:àÜ8bêA1±;ƒ';Â?<*\$È,³Ìo= òTÓÖ/3Û#«ºÒ†¬");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n0›†S‘Øa9œÅS`°Çˆ“Œ&Ó(°Ên0˜†QIìÒf‰›\$±At^ sG²Étf6eŒ§yŒÊ()LäSÁÀP'…ÂáÌR'Ífq]\"˜s>	)â‘`œH2ŠEq9ˆÊ?ˆ*)‰”t'°Ï§Ø\n	\ræs<ŒPi2INÆ*(=2ÌgXá¸è.3™N„Y4èB<’L—üîi©Ì¥2İ´z=š0HøĞ'·êŒšÃuÆtt:œÂ¡Èêe¹]`pX9ŒŞo5šgòóIœÜ,2O4ãŞÑ…MÆS¸(ˆa…Š#¾Äàç’ïø|¹G‚bèôüxœ^Z[Çä™G¼ÎuTvª(Òm@Vò¸(†¼ÈbN<ŠÈ`æâXä1É+Œä9J8Â2\r£K¶9ğhå	 Áè`…‹ÆëI8ä›±S±ãt÷2ƒ+,£ÆIºã £pæ9aèØÅ< \\8Czôã\rŠ¨^òÈ]Ä1\\7C8_Ep^ÂĞÀéM1Àw\"'4fSX9ES|ä›…Ãk3ÄB@ÊæXa=No4t7ƒdD3µpŞÑàæ:)\\;° ĞÔğ\r)8HÔÅ44Pc=\nÔ!pdÇÕQN\rÌHï'ô¸š2¢#\"Õ¥m-¶b,Ç	ƒM.¡‰-IKÓ)ÀÉe'•\"ƒ´¤>2XÑÅ“eÄj:9^²1c„»È:YÉ@ËuËã“›4òXÇ& Ò|£)Ñ’´±-K‘xŒëªÂSğè1Óó\$â¡@\\…!x]\0Œ£ÕÎÀÂñ¤áF†COÄ:à1K‡Å*†F4aˆ»¼k˜úÈKÏš¾‘»ö2l¬pÌ3J<Èâ,2Øà8#ã †Õ\rŒÜášÜî ó¤h¬„·áF±Œİ‰2PëèŒŠl(È\$Ö°\nJÛ·-ŞÊÇ°cc~¹FÔîrøátbŞû½m{hğ.‡{ƒtkÛBµKc£z4ŒCª9…Û«~>ƒØúÈÚ`Æ“¹C Âs:âİÔ!cÅÙ®Úµ”*WÉHX:WÌ;Nà ¨j*/(á_p3ª¡HIãKlÉn!trã£Gã­º¤tCƒ	vƒ?mã¤£¾ Ÿ¢–\0CÙö¨§oÜ¥cbf6Işû'\ríbåÅ7h§`‚È9½iìd5’—taMè={É©ğ»`NoK‰	!d4ĞƒzWXdmH°š*€ÆÛS ]ÏĞ3&\0Ú°	d%A´-²…	Âì(„šÙùQĞ}ø‚èU!t7°ä‹†˜>x‹‘t{mY¹„0Ş@^±€\"Ñ=‡³Î@t\r¡°ÎÄ+Y§.¼·¼X¿\n«I'KTŸ€^(ìD.@öÜø++@¼3•ÒÔX‹	aEì!,Yéö2-432ÔŒõMOàÖI\$q%	Ä‹G¦X9™‡Â[R\0nÁĞ¸Â PŒJy\r òBÈp\\HÃpgSÉ¼±Faejk—.4¸†C.^ yi‘ˆ9‡PÄˆe\"Î”NY¬¢BHÃ#8ÑB1\"¶j\\Ú©x‡ğ#¾â@G 9†2¨Âf.ĞŒpsršTJ xÚk˜–È4KIlÈfù8z¤¥KÈ‡>AKñŸ¡n^’Ø=&ŒƒAÀ*?'³^%;ğî4Ü€³†Œ9¤Q’“hâN‡™>MÊ=['vHIİJ§‘“ÙvÆâ’RÊtƒó<Ÿ”Ò²Å^¢¼zÔÂ‰B^öhâ'µ‚É©Ğ)-'#”¤9JTÁ)Ø@jO!¨Úc,e˜j–¤–‡@H,‰ÂØjˆa™©vZŒ>­¡Ò·µ)E`\0\n‡áTPó8L<‰c•:F˜æ‰\$\nƒííœ†ÃÏCHm\"j‹y·AÛS¶ ÜSªQ„ğœÎÎ{T']WªUÚ)_L¥˜i¬mˆOš‚¥è„şÔP:g¡{¸’ZÄ—ø.ÿ{”¨‡Dh\n»ÑÁ‡a­\r]9¥tÜà!XA½[È°¦ã—Cœ»×\n:•”haœÎÚå\"İ¢a2Lmƒ·Í\\	ûëp5÷@ú«@m£ì|Wö•ÀÂ%È|u®áÈ+hKÃL&¢Ï Ş3ü.XWÜÙººÈñ*qƒÛcÃé‡%.K¿“Š_”)®uÔ2W\$O]…d8’ê»gÁ?mFyúly¢%Ó‰ö²ÍÜDQÇ.uÄ²ñ‡Æ¹ø‚ÉÛL‚ı,Ş¬†è3ğæjƒ0t	a”<¬\0Pr•mNs8ÙŒk>M9, †á±ëBÁş±xÖáƒ£zoä¸™uB?`é¬§&ÂIÉ<¯¥ÍÑeÅYåsÊzÔ‡*±.'t»µõ‚zÛ)m*4X=—tI=ınÑ¦yÌŞšééc2¥¡`öääØ.Y¬¿Ö:éÎK“N’µr06Ó_rJ‘ØkÃtOè|^Íˆ¡çz\nÏ¿é±•ˆ<W‹1n.¨X·`•‚gúVG4Zÿ­rë!İÏÈY[ŞÓÅz:LäDˆÂ@T	¡0Ô`Üƒ˜pjSn\"YÁÈg	á`÷}Äšğ÷‘¬\n\nä4®ˆ\rg‚¹O7Ü¿b§è”y¡Ì)¹E¯Ãß)w>Ü~urš³Ş29h‚tgB#¹•°²ôF‚p(é@¥`u0÷Ñƒ(flG¥a0bZ7J@İI_PZ‹‹yq^Ëà7î°¸çG‰3dƒ˜ĞêÑ3¶é“„0ƒÛàŸïŸ{Ö¸»øˆa6½P¾ƒ4W	d:¿ü„W\nêt4ï‹¾.ñşDÉy°È§»85‡«AMôL’Xw5Ùese³Ü÷C	#ıİËrrYë	Ç®!Âî€Âå”Ÿ@/\rÌ ›0¥wEl\"›OéWŒ<Q‘ÄÛ ñEkÀSQiÿdŸı\\kÙ¬ëü8×ëşHŒ²\"ëbL}×%½	¬Ñ-^ğ _âh\nF-.í2nj¬ÔËVMàxnj¾¦m\\\$°¨¬ñ*\n¶ÈÖ'¢~à¶ Z@º€¶ Vâº€L\"ãˆ†p†Ø5€ğO, ÿË¹\0\nª-0¥\r4”pÔäbÕ0fÕp¶mg¤i©şO.(ÛP9ĞAPH+ĞNHpf¨§4?BàMğ®·ãJF¶.îô\0èà°Èà«Ôi…jÆ€Pş+(¯&æ»ãaŒÖ%l]'Üïl^@(œ5ƒN fs˜Ğûãô bz ÃÏe>îº¯p²¯øk éD\r4aNéÂY({ïD­ŒnÆ†ÏÕ¤>jÄ¨1€Ü	¨<çl-x³\rËGËO	Qw°•qw«c‚Pñb\r¤Ì¶ç­ê‹	Á½‘§âdñš6¢Ç€Ês‚à¢éæÁ Ğ¶±r½Äj>«¤J°âüÈ®±bâ3ê(F¦ÑzŞ¤Ğrª`Oñˆ¥ËX‘ÿ\rZ¶qü\r ì1\$ŸÏ¿gkìl­Ìr+°ñ†ækfì'ò5Ò8®4ë6Û\0Ê-´.i~4òE<\$²JÆlru2F;Bn<’%#lq%ˆû	b=âå#Lë(HJ1b%\rç¸¼ãz‹ô‹èG2£±^8wêñŒ‚^%¯” îş¾G­*g 7D\0^‘r²c„p’ÆL,€ó°ï* Xr§\$ Ê8ğ×,©*¨D‚ÓÀÔæ`Ğ\n„Á’Z¬“©s1lÏ1Ç\\{àÂ.I~`‡*3ÍÑì]1“FÍ‘1X	-£%#ËÀÁS3LÓl6\$Cr‰C/Âô\rÓ%,È|†“€ È†ÇŒ–Ü Êsu8«J˜©ä¬—9ò–æh¸ìNÅëÛÒë.ğüÉPôFtïÃ\$¾3\nğFB/ó=4÷-ìÌÍÔÍ9ì# O:Ió]#Å7Bº—,:ÉÍ< NâDñ@ÖRˆ®\n€Ò#ˆzÑ%8i:\0Úz“' Y‘*¯&Ôä¥/K¹Ö¦²«ÓU4 z€a>4‘\0 f*\0å*TK02Í<Í0SfòæÍ?Dôa4X-¶uÎj\$E6\0Næi´–ææ\nÿc9ñH’´²§HIb—ÈFÍÏÀ‹şs‚R~t»I”¾ 3úÒº‚Lè;%	0p.B®FBnMKÅÀR¢sDÆ'èa”èÅÔìÅÔóD\r1ÍOì\0œ²˜És´gL^Ì…àÌâO>lÚÀC<DôHº-4<àä™\"V]`¦/BŒğU&±Ó¹-#w;Ñ^›MĞürŠq±0œ-œo¨~pKÀ×‹	pšÎé\nqè,4ÁWÁ\$Fºnl\0ÙM‚Lš\n‰…-úm®\0¸)Z@ÏZ‰†˜ï•¢^@Î	 Â&ÕdÖäı]`¬ÆÖât\r¯„'\$^Rü'àO]©æSĞ¬Ø3î5â“˜F\"Q[uÉ[ÂH\$Ío`6Zuªğmo[•Í]ÍXÄTØ	™]µÒ•×\\c›b¶:–bæU\0ØW2Vb ëeˆ2/ºd%<YRt7ì'f§0‘uìruòhÇU@cTsÛVãÇgFÎ–{_-_P²E–‘T:{ÍVÖdüÉÂş-ˆIc¶ş°È¯ÍMëşÿiv¯ÿ J¡\0m3@JXµRMU_²ğºˆp²5)kçkl-\$,Æ“\r&›\rÜıO§(oÈûk+rê Õ\\àP7\"*^åP˜\rc <>³‚t#~Ræ\"»en‹ èƒsŠ„ã¶;·D	—ItÀËup t@À‚8d\0@ÔlTw×r —ww·~ b	¨ŒJ æóu®\n€ , u;jÖ·7s¦Ã{*„oÂ>q†<-\0 	à¦\n”œà‹|Â¹rcÆßv7µi7O{ECâ(èœ1Äp¶yÒ‡nØàğ¤²àZ‡à[r>8ÃX‚âç·á{¨¯~j…~¤î(à°¸(Y`È¯7_Â»z%vd™'‚%.‡\$w/.=Æpô&¶—¹…8V5R=ÃN„4†×(ˆøfuâç„øJlåjÜu`zXQ.–X!¾‹´‹—Økq—rpû˜~¦¸~T£ÀæiÂcÂfn¢x¸¾@S€Ë3*6Û¤b ÷ÜûØ¤İûrçppú¢n=)Æ­‹\0ğÈLú(L…ÆnË/§-88Çs\0zg½Ä\n‡ëL“KÉS!mÃ&–æŞç\"ÌÈ×b8}BXZy,Í¦d _X‹ğ€^\r1 zõªñ‘BuWŞ7Õ;s8ly^BªÂÀğ„fZ`Ş“ôä ø­‚FyYg–¬!–ñ	Plíš£O8ó„f<Ió,˜ ª\n@’‰ÀÛdp4j\0*¤\rl]œyÊ\rùÎ[=”İ?+À,'N¼˜}TYs\$w®fØÉ› Ô\räD(àM#\$İh¹_ey‘…Ê+²\"K4\0zYì DÆ]¢.Ê* xñÿ£Ï÷rLœĞ˜]\rj ^ç@éš)÷“¶\ròÀQrr'p0À¸à\\P¦,\"ª-sÉ’PÃŠøŸqôo‹w‹¸ñ¡ÅÅ¤'%ycÏÓvó,\rK«îÜP…U@èçˆÊAé2Ñå¢È¥q|ÒÒ	2\rœ\"ÃCi¯†?.¨šÉ@è‚<Ä€î0€ÜQôt‘ty=Dº[FÔpG\0RÙ³ü‚ÏÏ'Q@-6“2Á»*Á/@PÁÌÄd;7[ŠØ’!\"zÛS±-~o[„D!*–Æ®0N4	Š1ê—1ç8ñŸ{l\$DÖ	G¦|G\$v!ræ‚Ó-3Tm•Ä™‚\r°ïq0Ì½N˜·né™H”SF dùQRóå»Úc’ÂÍ‡Õ²S\rcC.nÀäiBx-l”v·@Üáá›!(“HçXÊc„g( ó#%ÁCnû(P‚G9Âì\"1Ü7ÀDGÛ²1ï€So8µÌSÄûqÜ.ˆ¤pôÏP h€e‚ª0Ö¬k+¸@ cÁRG§hÙ ¸LÈû†/âç`V.FA^\\lÜ¼öî5\0¸ `\0‚E|C®jImPtyÇAnGu'pÂd-åÄËÉ05püÓ&ÀIÄu%¢\nOÜ<|2\$úø@¨\rîFDRÎ^`1À±°f9Ğ`è/÷Ï ÊVÌü†;eø\0<<ğü€eÏdÏ²çÛ1Ò²‹Òè®¥kÏùêıD4V¤YÑƒÇÁÒì”åÂûw·¶ğ¡¬kpÖÇ;şrÃÆŠö^\niŒ™\0‘¬…¨c:˜¯)¼y¸\0zYvz9Ö]Üèâ«¡`WÃYÍëÖƒ…Í‹˜—‹Ø—Œpe«#ØÛ1ûñfãõİÚµŞ']Äµ€?]Ä‰-’Ööï=ôÏú˜æ8˜oT¨W=õàâ\rÔş\\Ñ­lÍÍy¶şİâœÕå¹àËÎÖŒq=!^„Ôâ…äfqêª€Z˜³”\0Vç]=ÏFæÉxšn`˜\rä?‚tğ XQÉ‘çştZnq<J\$cöàÜã<Â€íş’íàvñİkÀ¤•èeÖ®Ş\$¯^uë^ç)i¢íçŸ—ƒwÚnßª¿ªSÉ<˜>ÜæGŠ¥3À. é<•À7ŞİáÄœßmŞ¥Vşiw×î ó0ÿ/\n\r%1”\0yèKëñ¯EëÄ\ršúâ³šñŞ íü‰§¨Ş¸™eíNLêÇùæ:CÈ'?ê~óé6 €è\$}ıjf¬é•R\rõWD°÷.T\n¢èNÙTÿ}÷_÷E|í“—UÌ}ĞO'ÀØIŒ,Ê–7Í¿½€…:h±ØÚÌì„Ô\$ªZ0¸èDV”`t XnÒvójGÒsë9l°ÉËÒªB¸ã“€”rSF<;Øg%v(ªšÊ(Q¶×¥P(\nFlıè?j\0oİ€3±à{ÓdxìË¡‚üf—àbÄûW-Ş¸,QuÀ,+®Ëa.Y”Àñ‹l[¬õ%ÈWSxò²\\	¿D×G,„l”Ô]@LÄÂ\" ²|p…?l™Zaà8õÀ…0!Á/ôÂºoø\$vïÖáî`rß£îæG\0‚,Àë˜	Á0YPN€œ'0ˆÁUûWƒ0B˜ÄØ2Ag0gDÌMòB4Å&1Éšˆüá™w÷¤µ¶†Šô!™0¶„`-­7›F)+‚·(\0007(rË\$9­ LÅ€†¢‰üTãÁ…L€=\"°ÑKQ.N<X@¤}Í+ ˆ@‘È¦¡,…ˆ·…”áñf˜ø~½D/Å˜jhZÇŠ…ÀCp©Aš§2C‘ÀÃ f=`„*É|-ásÔK;,äê\rPxT\"}îöC5kÒ]OæµÓœ½Îùı!âmç_ÀF	P~ğ¡BRí½˜@\0l’wßó‘’œeŒÛmDjÕö°¦0%¯ùÍÀÖ P´§”Jx€Ö&%ÈB’:8Ct \nÊ!B'#ø–ÜşC61ÔMb\\€u`õß\0ö&Š7xJîy€Dà\rL~3`L&Ÿ‘É’Ä`ÑBìP¢ˆ‘Ä!õNcüSW}ò!«	ÈÍ\$P\0^ĞéÄ\rˆSŠàÀ^tq?	˜*GLèP™°úÎ+ÂmtY\"âøµÄ,šñ\r¬CÓ,˜Q¬ILĞb*\"(‹Äê/ñˆ'PZÄ¨\nµ™­µFá‹„X¡Äò\nø£èî7š<~æƒ7U´”[y*Çÿô–Ğå7\nh\nZ¾Ø•	1\0g-Ò8\0#˜F(ÌåAlúKcfOäÃœÁú€œ@Ñ\0p:@\\zÑÂ8ñ¹áÂBcğM‘+afßÆƒô…²b©\n¯PŒ\$µ‘ğâ {”û@%àw°í™TSÂ²È0ÓX‰œfê&=IÃŞŒ{\0äÀáš‹ÜahéX\\sŠò\$±@¸‚ò;È\$ò)oCârD¡œ·Ğ‘‘©Êq×%KcL\"vP#{+\0{¸±”±±-Ä…DLïHÁD‚T*ñD‚º Ú²D¤ĞZ9Z\n›æº?à”(<HÀ`D9îI%š?€Ä™õ½8€b~ÌQjÑÏUÒSE¡ÌÀÊE¥ğË²S’€ü›ì ”INJªQ9˜Ìôp.†œßÇY´äÔ©6Má“‹@Fï aîI‘f,ş)¬™£¥¨f#Š\nX!i/Â\$”´ª‰T¡”n,	;ÉZM²{,Q•®où:õnò™“Ì›™M)ĞòIRO2“Ô©äã'5lÉ1æçß?ZÕÊBbp‡ b,1„Ñ£!\$/µÖRD!ª·wÀğ(*E€Êğ€\n4Ár,\"Šİ]ö`î¿X‰17[JKJù!º©éÈ–ò…á!}\$}éÀgŠËÌL©G§#t@²Yá;ë(Ôä¼|?é­\r:(É~\"aŸªÊşÆ_\"qâ˜!8 •\0¸Ñ‹`cC}(­F_+8LYcª™^3.…U÷@]!şÆë.P-Ì|fAU¬Éí.#Š2&PD	zdîÀ¼àLHÀŠÀ)}\0X„µ\0Pû¦ĞÍc!¨™äÏ¡H7Rƒ^À(DdQÀJH(V*Æ[OœX1ÀØ9Áº„–WL¾I€JD†L\"kÓ7˜\nBë0ùˆàc3yÊjÌ0Øà|&›ˆ&ú@2¨ vä»\0/‡ Aàâ»g\"&e1šµ¡€'\r.åYÂdé!˜â¯fU2Ê²eÉ‡›	p…3p-‰PXTŠ<ßÃ\\\0LµDI™ˆ%á;2hÓ5áM@C5é™fÈÎ\ntØ¥»6D–\$ºv(œ¸\"\\Ç Â‰R&RòôğDÇTO\r†\0›¼l\\pä98‰êb˜QÅ%3Cx9d8I°„Ìo`'sªË¸Dâ(Ih¯!¬—\0C\0Š¹À„•`\"§†Öhp0…TáPØp°Ğ4“' €¦¢)©¢0z€o«á\0÷ĞDHÄÆ¹©„\\È ¼\0ÀE˜½Æ˜5é¬€€sZ#p¦\00000=ªœ]€Ë+cûLœ&x?3¾èFq\0ŞÍPg÷-²Ü€Zsı¬‡ñÑJâCøê…Pà[O¼Éöû£F'ÜoÃ€—Œ3\0ç§Lˆ¯—­#PĞ€ìœ3\\Û@À1!ŠMÆntnBÃ.š[1sjQ˜<©®\r=¤B!`PR‚÷­Â2÷!ĞĞbÀ+¡°WBÂ,<¡“ 0Ê¬å<”—Æeú“Ÿ—ŒéÑœÙ€É’£)ƒ\$ÊT>ğ³E¹	 s}*8é`)ªI\nò–ªÈ–,LÊ¶UÒ?ü¬D¶)ReÌ8µÖ‚ˆİ q¿\nÉş(>E@rŸøh7Z[„u­¡¦‰2'ı@.Sa´ÙVxJ)-0òÍdÃt‚aÀ@wJî+\"µ\\à8ñÂ ¸Ø”ó–Š³(p(xZt=>hp3hg?£œÚ„\0¦¢\0.¨ˆèô1¦mK]éÈ/˜ü‘ÂÇJ.€ü[cN•	fÏ 0-Ò©”´©¸ÀN‚‡§-jBu	d|2‹üiÁİ—qÑĞï)ıW˜Ú9H»²ÀºAeÒÏš(ÆiÑÇñt¼¹å„Œ*¤Rõ“¨\n<¾gp HF‘§ªÒ°Zyò7I 9tÈPI\n²†Õ(¨¨,2e#iV²ğ\"¬pÎ³ŒÕPŸì¶š§¤»XªSj‰W‰! ìrÕ8„d&ê±\$aÄKÕ!uUÚ2£UÔü/@_œÃ-8‘F°òÍP@ñV˜ÚUd·æv—z«ªéZÈU¸·Hªú@QV*²L„b ,«C+A4ur@„ús|ge©¡QvM«‘ß	\"d«QYÇ3R¶À[:(D\0¿ˆ>\0ŸuÃBJ5SVªÑ›l†LŒÕb”Vï˜%ux[hUÉ#Ÿ¦½CnÙ›%ÜÃJıKoJU eÎ²&\0ŸÕ0‡ÿRJ&T¼mcZ»-ŞtÿÓhy^P›Ñ\0ÙrwÕ{@ó^øtÉeÙP?2]KN¶q&~ä`.,¶dÿCºòÄ(/\$xùô*Y±š\\´TİFh±QšÖ9¬ ^AÈhñ[3=®®5ó|Åİxµ€ÔÎ¡U7‰ÙT-P<‹\\;b”°ñ‹Ì¢j%…:ŞÄ\n %ŠÂ«ÎËrÎ<Å¶©-@`;{-‰ò‰À6¢‹p'8’22ŞªE/§³&	àRJ«¼a\nW³i9¬ŞN˜OB“\$ù\n¨ÖåEã/25o(à›o)É“ìÊK\n<e Ï°+BÚñ,²e«f“³İµ™A’´Ll­Ëyg…1–›e¥+¦ï\"€ÊŠ³¨a	eøÆÿM¼öŸ&À¡ÊÂÖsÂ’S‰*¢ĞÏ°:ç×d’Ï ¸ÇpÎv™FÊŠgë³HÓ-EYöº\n¢ôŒzgÙ²2•ßv¼¶Ä¨ñtZ\0‚PR ©dpĞ4¹˜A„lôm3jKN–âÒÍçµÜx@ËgĞ€ˆL9Ãj·Œ à+s®İê)¸çpQ7@34IsŒI1‚G[ñÑ‰ø%V¦•¼ÌÇg£\\Ùò‹aúËÃËoØ7Û”Ò6ç\r­º@_lR¡lĞuÊ+…j‹zJÛ–÷¸Ø­‚:GŒÜr3ƒÀgårV—PÚÒ·0Y(EP\$´[P  ö%ŠÈÀÑD.Üîßä^È€È7n™?ánRÏµºí!h`Z\"â…¸³8×NI3Ñ)BUŠS{†sj”ºİ0÷Nzv°YÆÀÁ\rpª[5­¦\0İj2+ÛÅ,ü˜ã…îÔ¥*ÿİ¹%©,åŞÖÄ¹µ¾Ó -¡åa\0F£û¼\n‡ô‹+çè[±Zl ?š…—hLÉ¨Q9Ú²@ÈóøÀ9C ¤\\/_›ÙÎÄ!.oãáRP:”°şöF Cì’qIY,3Õ(´Išqã DG7=½æáÖû`¼]ÊéĞ:Mí	Ãb«Í×Í\$ÉA[qyº6^f³¤nõìhéĞ^†€@)½ B@u{€ÍB’NG#ÓPïiZÛÖŞÜ.³½cOœ‘{æ^Ìw¸¾áo‰}kjú‚”¼Şì‘d£Û±5 SiµB†E1»#8©1›nm]ï%P6Ÿ¬f”«ü\$Pt§5Ö.D%µÔˆ+#Yµ¶X5lXgSJkøHŞàW@.@G¹w'b†²PY‚²„Fã 4\$1ãCxÒ\\ÄŒ(±FáA&ØS|#ÑæBl\$¸+NMi}¼ŸER€,=Uö@·Ù3P	QÊ	‡ƒÑú€/@œ¾€>Lñ|³»¼%š'#ÁRRD@Ã‚¢‘xC!\\üE˜F®Ã/ÓÜ!tùsÔíüAW¿Õı­ø” _ÀÔáE€!Å&càµ“]eFKG.+@İ^iAÃÊ§'òZåOaãS52O¼ÿ÷ãEF1r·t-ã\0Ò8§½ë®ï~¸;V•õ†D¤+ğĞ7T ôV>¡ıì	^òÉdşÅ©â×¶õ­Š}òúDÂ\r*‡ƒª¢Ğø(òê¬R¥ïƒHáã¶µ(*¢5şæ Ğ ™¡˜ú(-[)ô(p>ÔÍo˜ÌuĞÓx¸6&Ï W˜Ú>…İè‹úøTÇ˜½Ç1÷›\"î\\‹gÁlº1çUz£ÿ¶qÇÈØ+V#L~XÅôY‹’Kˆ…4 ¢9A]\\q8‚ü„J÷ÕwÁu^¡'’˜K?û%ç„íq!9,Êê„â’Y4BMĞJ…W'¿úµÉ–B²AÇÂc:Š¹èá…y+iícpé'GL*ì²q²R—£Çc¨Ùğ‰€Ø?ª°D¤‰Ÿ0€ \\¯MMò\0Ê&I‡ÉƒKË)uË—”Ü')—úÈFÜaw»(Oåå\0Úe2èdùÁ!ŒÏ@#DG6ˆª½¢.LªÀFò!µ+ ]Ù>h½I\0ß+-€x^gĞt¨‡P^Ë0ê–•°œÀ­™nÈ¾4«ÀÃše£jÎ[OÓÁ°]êŠä4Í*°\0ÓìÔ¡O5”]¥áÓ‡“èU”|ót˜³Œ& \$8€EÀ…ôUdıj¿£\0q’Ñ³d@'<í—/ü¹kpö\rf7*IŒ‘ôØ˜@Ì-^j—‡ıÂWòÉHÜæ44‹Nğ&ZÊ–uóQ•Tå_'@;Ï€Úr~ƒ¡h/@:\r¬v2‘,ƒVH°¤º[«ÀĞk|Ó!6aú ÉÆV\$°jÎµ˜f3Ë­VqL„ãŸ#ù‚ ~a2†ÊmØèı™Æ¨]G&È)bä¥AA¦ÍBÈW}òC_Bàt˜¯]L.¹’¸ğ§Ae®™€¨®@È•W6ÅŞ›´àÂ8X§”\n\n†y':C@¨8K£(è2\"Ã_PÃÖD`èôó;ÁJ„Äü4ÌáHb§Z^l5âP( T(\0f§û\0t­ \0ó?¡îP´U~’é{\$Â‡—Ş'­¥÷`õv¡†4\0^ÚJ JÉª±ù€íè…tCmZá :LÍ ;²N³#€,ŞPÈºĞséÄ¥\0DÂêÑ¢>>ºŠj)àğNSòt8\n©ØÊ¢ç§ŒÍ#xi”è@Â¬â>zrªµèm{k`¯‰×Ød¤‘R¥ê¯E•F\n:B÷}F(Éa™HI>hÔl£î<\0'‰(†}‚¶1¤IÑØ¡Ç€eğ½~Ã£ÎhÛ()_ÂĞtv¿e-DÙaÃDz“0éÑgY‰J”ò½šQèòşÏ…s´Š•öA#è¶gK×Ìó¤4{î¶\n¡¶@Dò€1ìˆ‰PM ìŞ’@^:8¬nÑ‰äãDnhÚIAT¶a4íEO§ú7ÖÜT\0004	õ¡6_:<È\0[¯!vH‹h.'Ü\0’¶¶QX¤ù Eªu`v]çŠpôâŸÛşáÀO¸­¥ÑÎ+ÛÈ—h•¸\0íôf@)ÜÈ¯š)­Âî\0[ˆh¥6ã°¼y\$\"X>’>éÂq¹!Omwu[¬®PØö \"‚¢eœ¾¥ãã;²Tym„Æ»cvóvÍ6İ´_ô+§G`	2uEİmqUBÛm{5¹µm~'‘÷NŞŞëö¦ İğlm›‹ÛvÜÀË·\rÓ)l¬›ã:ŞßdŠgİ\0îú›°4Îã÷jâqT;nî,	D•TüÁÚ¼–ş÷yC?P{€w8\nz\rÌgs›zOÇo¾2@n'wàtŞœUd=t8›ƒ©à–å÷ZPİ…8Ÿ_ÛÛáv’±®0êÔ«/Pt(\n[NëªV¡~n»ÓP.º´…›gü)¼UÛ5ÄäS¤äcÒq®f½]­‚ø‹ÜVÖ¾¾5ô#áÄp§]r±—”¢^\0§ò§Šy@……è´>…T-à+àÜ»X‹´aÀ±ş±\0*D[–Qş>¹d*¦ã¦ŞrE@Íñâ+ ãç¸ÿÈ„ Lïg#·ÙèœQ&„úñŒFñƒ…Ñ¢§ç‡ŒAÚ£í}D[•\0fÀ*€¼ÙÒì,DêØ~D<\"“VB>@àT\$¦î@Ì€3Pä“F‹'¡ª×FHs«ñ««bÇ‡GÂ56®¢ØQ	íÒ3*;L#cÛ(Ò×^èË)ºH\\–Áaµ|ÍÀ!Å3bHÔ±g)‚02Õ;1bÇ“Ø&ÂğjnŒX¾½·V0XãÖ³µ¦××Fd\r ©‹HÈçgaL¢q	'S\n<¹¢8\n\nòööç7¹¥.x°º6í¸21¼P´J\"Öè\nÂt6eU\0´kÁ€9ÑzK¾v†Š¤P¸¦LON±Óªà€È]éğ P¸ï <×B_…~•³ZG•éxc÷AÓ0Ö\0ÿ¨šĞÂ‚íz·µL(tñ8>ÂĞİ HpØ÷<Ò×9ù¬E^{|O<íæpïRa>nº²ù4|9aÏœ±õÅ›x±ç\"ÊÆnã~b£—°—Hxú’^GŸ¸±kÎ¦¤s¼Ğô");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("v0œF£©ÌĞ==˜ÎFS	ĞÊ_6MÆ³˜èèr:™E‡CI´Êo:C„”Xc‚\ræØ„J(:=ŸE†¦a28¡xğ¸?Ä'ƒi°SANN‘ùğxs…NBáÌVl0›ŒçS	œËUl(D|Ò„çÊP¦À>šE†ã©¶yHchäÂ-3Eb“å ¸b½ßpEÁpÿ9.Š˜Ì~\n?Kb±iw|È`Ç÷d.¼x8EN¦ã!”Í2™‡3©ˆá\r‡ÑYÌèy6GFmY8o7\n\r³0¤÷\0DbcÓ!¾Q7Ğ¨d8‹Áì~‘¬N)ùEĞ³`ôNsßğ`ÆS)ĞOé—·ç/º<xÆ9o»ÔåµÁì3n«®2»!r¼:;ã+Â9ˆCÈ¨®‰Ã\n<ñ`Èó¯bè\\š?`†4\r#`È<¯BeãB#¤N Üã\r.D`¬«jê4ÿpéar°øã¢º÷>ò8Ó\$Éc ¾1Écœ ¡c êİê{n7ÀÃ¡ƒAğNÊRLi\r1À¾ø!£(æjÂ´®+Âê62ÀXÊ8+Êâàä.\rÍÎôƒÎ!x¼åƒhù'ãâˆ6Sğ\0RïÔôñOÒ\n¼…1(W0…ãœÇ7qœë:NÃE:68n+äÕ´5_(®s \rã”ê‰/m6PÔ@ÃEQàÄ9\n¨V-‹Áó\"¦.:åJÏ8weÎq½|Ø‡³XĞ]µİY XÁeåzWâü 7âûZ1íhQfÙãu£jÑ4Z{p\\AUËJ<õ†káÁ@¼ÉÃà@„}&„ˆL7U°wuYhÔ2¸È@ûu  Pà7ËA†hèÌò°Ş3Ã›êçXEÍ…Zˆ]­lá@MplvÂ)æ ÁÁHW‘‘Ôy>Y-øYŸè/«›ªÁî hC [*‹ûFã­#~†!Ğ`ô\r#0PïCË—f ·¶¡îÃ\\î›¶‡É^Ã%B<\\½fˆŞ±ÅáĞİã&/¦O‚ğL\\jF¨jZ£1«\\:Æ´>N¹¯XaFÃAÀ³²ğÃØÍf…h{\"s\n×64‡ÜøÒ…¼?Ä8Ü^p\"ë°ñÈ¸\\Úe(¸PƒNµìq[g¸Árÿ&Â}PhÊà¡ÀWÙí*Şír_sËP‡hà¼àĞ\nÛËÃomõ¿¥Ãê—Ó#§¡.Á\0@épdW ²\$Òº°QÛ½Tl0† ¾ÃHdHë)š‡ÛÙÀ)PÓÜØHgàıUş„ªBèe\r†t:‡Õ\0)\"Åtô,´œ’ÛÇ[(DøO\nR8!†Æ¬ÖšğÜlAüV…¨4 hà£Sq<à@}ÃëÊgK±]®àè]â=90°'€åâøwA<‚ƒĞÑaÁ~€òWšæƒD|A´††2ÓXÙU2àéyÅŠŠ=¡p)«\0P	˜s€µn…3îr„f\0¢F…·ºvÒÌG®ÁI@é%¤”Ÿ+Àö_I`¶ÌôÅ\r.ƒ N²ºËKI…[”Ê–SJò©¾aUf›Szûƒ«M§ô„%¬·\"Q|9€¨Bc§aÁq\0©8Ÿ#Ò<a„³:z1Ufª·>îZ¹l‰‰¹ÓÀe5#U@iUGÂ‚™©n¨%Ò°s¦„Ë;gxL´pPš?BçŒÊQ\\—b„ÿé¾’Q„=7:¸¯İ¡Qº\r:ƒtì¥:y(Å ×\nÛd)¹ĞÒ\nÁX; ‹ìêCaA¬\ráİñŸP¨GHù!¡ ¢@È9\n\nAl~H úªV\nsªÉÕ«Æ¯ÕbBr£ªö„’­²ßû3ƒ\rP¿%¢Ñ„\r}b/‰Î‘\$“5§PëCä\"wÌB_çÉUÕgAtë¤ô…å¤…é^QÄåUÉÄÖj™Áí Bvhì¡„4‡)¹ã+ª)<–j^<Lóà4U* õBg ëĞæè*nÊ–è-ÿÜõÓ	9O\$´‰Ø·zyM™3„\\9Üè˜.oŠ¶šÌë¸E(iåàœÄÓ7	tßšé-&¢\nj!\rÀyœyàD1gğÒö]«ÜyRÔ7\"ğæ§·ƒˆ~ÀíàÜ)TZ0E9MåYZtXe!İf†@ç{È¬yl	8‡;¦ƒR{„ë8‡Ä®ÁeØ+ULñ'‚F²1ıøæ8PE5-	Ğ_!Ô7…ó [2‰JËÁ;‡HR²éÇ¹€8pç—²İ‡@™£0,Õ®psK0\r¿4”¢\$sJ¾Ã4ÉDZ©ÕI¢™'\$cL”R–MpY&ü½Íiçz3GÍzÒšJ%ÁÌPÜ-„[É/xç³T¾{p¶§z‹CÖvµ¥Ó:ƒV'\\–’KJa¨ÃMƒ&º°£Ó¾\"à²eo^Q+h^âĞiTğ1ªORäl«,5[İ˜\$¹·)¬ôNô\n«[Ğb÷ƒà|;‘éîp»74ÍÜ”Â¢¨ĞIŠCË\\ŞX°ç\n%øhØIäç4Ïg‹P:< ôõk¦1Q™+\\ÚÈ^å’ ™VèøCàòôWàÃ`83B-9F@ànÃT>»ŞÀÇ‰-–¿öÊ&âÜ`9q¦…Çßä‘“PÜy6Üå\r.yñ&£ñ´ÎaÌ‰ÍÃE8Ÿ0 êÀõkAÁ×VÛT7ñpïÆxØ)Ş¡~¤M½ûÎß!áEt§ĞùP\\èÄÏ—m~c½Bğ\\\nímŠv{µÎù9`G[·¾~xsLî\\±Iõ®ïâXwy\nà¨çu¯áÁ™S£c»¬€1?A¼*‡ùÍ{œã½ÿ´óÍ¿á|9Ş¾/–òş¯Eúï4æÊ/¿Wÿ[È³>–á]ÄrÊı¯v¹~B£ PB`T¡H>0¤BÒ)ğ >¸N!4\"‡À¦xW-ÅX)„0BhA0à½J2P@>ÈAA)„SÎôn¼ìnìO˜Q¢¬ÇÎÊb®rõÔÒ¦âöàøïhèí@È‹’î®(–ğ\nì†FìÂ˜ñÏ–øÆ™…(ìÎ³¤ÛP\0÷NÂõo}¯‚l«<ønŞø®ˆâîlëoq\0/Q\0of*Ê‘NÑ½P\r/îpA°Y\0p\\ãï~³ĞbĞLh °!Îã	ĞPöîd÷.¿ïy\no\0áÌËĞ¶öPptùP¡ovĞ‚kn¸\0z+æ›l6÷°©¬Êø0’äğ¹P½oF€NìÏFô¯OpıàN`ÜĞÖ\rogğá0}PÍ\n¬–@°”ö15\r±9\$M\r \\©\nggìÀÂ Ø\$Q	\r‘“Dd‰ÆÊ8\$¶ªkşDâjÖ¢Ô†ö&€ÓÀÊ ¶àbÑ¬˜ê°¿‰›	ñ=\n0ÊÕÀúºÀPØ ~Ø¬6eö½¬2%Íx\"pß@XŠ±~«æ’?¬Ñ†Zelf\0ÒZ), ,^Ê`ß\0è8&´ì¨Ù©‘Ñr€© ©ÃkFJÂÂP>VÆœÔp¨²8%2>ÂBmÎóØ@ä’G(²ä¨s\$ dÕÌœv†\"Èp°wÇÆ6§æ}(VÌKË ‚K¬L Â¾¤éÄWñöqú\r‘şÃÌ¤Ê€QòL%’PÔdJ¨¦HÀNxK:\n ¤	 †%fn‹ã³%ÒŒ¿DÌMü À[#¢T\r©ÀrÂ.¦LLè&W/>h6@êE ÈãLP‚vÆC’ß6O:Yh^mn6£n¼j>7`z`Ní\\Ùj\rgô\rÈi2I\$\"@¾[`Â¢hMı3q3d’ş\0ÖµÈúys\$`ÖDÀæ\$\0äQOf1ƒ&‚\"~0€¸`ø£\"@ZG¼)	Y:S¨ê†D.S%Íˆ’ Ğ3¾à d¹ÀmÓU5‹æ¬ó<£SÒSZ3â%r “ÎãÆ{óe3Cu6³o73î—³ÀdÀL\"àc7ÄLN ÜY Ê÷k‘>²‚Ç.æpäì2øQôĞ÷“¼åÓ3ÀVØ°WBğDtCq#C@½I”P÷DT_D´:ÔQ<”UF²=’1ô@\$‚‰6Â<cÆrÅf%Ô¬,|“27#w7ÌTq´6sşl-1cPÕmğqªÊ\n@ÊàŠ5\0P!`\\\r@Ş\"CÆ-\0RRˆtFH8µ|NíÆ-€Ædòg€‡Ò\rÀ¾)FÆ*h—`ö €CK4Ã1‹ÊkMKCRf@w4BßJÁ2\"äŒ´Ó\r1Q4É2,\"ô¤'¼êx§Œy—R‚%RÄ“SÓ5K”¦IFz	#XP‡>¨âf­É-WX\ršÜê¤pU´ÕDÔt&7@¶ÂÑô?’©ÀÑ ªµ£}O1½2†‡2Õ#UK*¤)ôê¸‹Œ0o<> ]Hš„Æ¿rè›LGNª›ê˜W%–™M^’Õ9X:ÕÉ¥N”òÕêÔséE¥­@xy’(HêÆ™Md×5<52B– ğ–k!>\r^J`‹IS N¡¥4'Æš*œ*`ø>€—`|¢0,™DJ£Fxbèµí4lTØ•û[¨§[é•\\‡¦¨Ô –\\{­Ò6\\Ş–’ öß(#mJÔ£,ı`©I³ûJ‚Õ­ÊÜèlß ûj…jÖŸ?Ö£kG»k¬T9ÀÛ]3ohuJ©ê¢®ÑW•\rkÕÏ)\0İ3Õ€@xè¹,³-Ê	5B”¡¶˜=ÂÔà£#–gf¢¡&Üß·Z`ä#ÄoíæXf È\r ìJhô˜“À´5rqnzõ§­sÁ,6’oÓtD´y‡äÂb´àhş—Ctn˜9n‘ í`§X&¨\r'tpL7²Î—¤&—¨¼l¬Z-Í¬w£{r—¤@iUzM¿{rx×—mÒSBÀ\r@Â H*BD.7¹(Â‘3XCV Ç<WÔÑƒİ|d‡q*@”ş@ŞÀÊ+xø÷Ì¼`á€Ï^™Ì˜ß¬__•ND­X\0Q_D]}tõYÅúp¦f€wÔÚ\"â3øz¦nÂ«MYñùZR\0÷¬Q¤?¸{†M3†•£*×1 ,¨\"Øg*U¡*²¯ˆÌ«zÒŒW5NV2O-|€¾ÉÓñ,×]‚B×dí\rŠñ/OâtÎøÃï‚Ì0‹xÆ†ğ½Ğ®OCë8Ş-0Ò\r”ÿ0à·õ„@]¤XÌŠĞÎğ\\\0¾0NÈï£Ñƒ4ëi¨;ƒØAtê¼8X—x¤\r†…Š“‘ìÁ‡øİŠ×Ê7¬<ö@SlÈ'LÒø9W ÊÎ¸òÏ¬ÖËì¢ÍÄ±•ùRçÌğÌ\r¾Ï ÂÏò|ÜXĞÖa÷ø7y€Ù\rwe¸Œù„Y!ƒ˜Eƒù’´šÂcRIdBOkË28[‡mÌJŒ+L ÈÅÙ¸OXpføÓ9ÑDÏ›·¦ßªw“@Ë“—Y—…¢Õ÷\\yäAcÙ£ƒXgš™%šôó’Â1“ï“j	œX†9Ccİ‡àR¡¹‡”QFÇpdÒ= C˜÷ıš\n\r¥Õ‘ÔóšdjÙ«’xE¡Â2FX§¢x_¢ØÅ£Ú5£™—}q¨Åí¿¤M%¦ZM™:\nÏzWšX7¥åí¦:ĞZi¢npY;ù>Ê˜í£ÙÉ†:6Ú;£ZÎX0ƒ“Ì¢#ùıcàMyU…i2,q¹FËšÈb­J @ÓgGè|4ógÈÒmzWõäÊ	¬)™Èr|àX`Sc‚Õ§ÀË™„óc—¥‡û!²B²—±”»/}{4JÂ\0ÒÃn»Kuz @ÌmÚÑ®€ß­yÍÒyÖ\"º)u¹ÊÂÙã¶Yç˜s·c¶yë‘¶š‡··y¼—¹7Á|·±|—Å{Ï˜*)°Ê4Y`Ïµ[v¹‡¤­‡û^NX•†¸‰†ò‡W”©û·‚7†;¾_‚‹*x™ˆ¹Ú\rùß¼ß‰xm+¾mû¨Ú™	´»¹‹\$\n¾l˜);™²„|Ù ßÚ™¡:œNÚ :„‚Š_È8N³¸Uœ5;¨p+U–L‡ò\\‡9í¦Ùñ“›¡»ıO:I’šû zQºœ¡ƒ¡TëšÜ)ªXG¡æ»ÅJ{w8“¾ûÅ‰¸UÆù\$ôàÃøü›PxTY¾pjh·¾J×Ã€›˜JÙ{‹Âğ@îÇ‚³ øğZ‡ÌÙs•¹hË˜ç–XÌ\0Û–lÓ–ÌàÌÈÎ¸Îçìó‚Y}˜Ÿ®ü^Ğ@u2ÀSÚ#U‰ˆ;Ãˆ|¼¼•¥¼™P\\ŸÊ#ùÊ|ª<®İ\\³À›JÛ‚,öœÀ•\\ÅÌšEÌú…‚]WÍlÁÎ,£ÍìÉ–<åÎŒÛ>YnÎ),Î™rÎüûÔ¼å—âº]Èı	ª\$õĞç½Íq„DJí=•Ù÷•XI-ğÅ€äÅÌa‡llÃµ]\\“w(iÜCÄ×ƒtƒ‘<i-u[uVDÖ“¸QÂ¸€xb€kæLI­.kú›@ŞÀ„ÜN‹“[ñ¼l<o=-]1`è”¼ªdš ÜMÌ7‡@Û%C=]ú›êÀ/|-àÜˆ¾ÉŞáqÃã•âíùâ*¾C¾òO~ÊQâòså`·ç(âòãDÉßÉ²¿à[ãşæ>Éká¾R™uéŞ\\+>)3íûPÊßP§Óí6ÓËM%º¡¾pÔŒœÅAĞ3qmu2ÖfzƒÛ¯ì4s‹	´í`Û‘ì°-kÊS%6\"IT5½‹~Òì\"™íÂUt_	TuvàÖ½ä¶Yw¤†­0I7¤’L‡\$ú¿1Mí?íe@3Ûq{,çÀÏó\"&Vi·àÔIŸ?¾µmõˆ™¯UWR¾´\"uiT‹‘uƒq­Ÿj\"•GÃËõßò(™ï-½‚Byîê5øcİõ?Œàwñ®°ëTúî’`ei¾½Jtb‰gğU‹3ËëÉå@öá~ê+¾Íï\0MïGè7`ùïÍ\0¢_Ô-ùñ?\rîVÿµ?øFOÔ6á`\no†ÏšInª¼*pà™öeÙí\"T{[Ğ“p^÷ä\nlh@l0[/ö„poóJKÖX“ñ€ü<ª=€9{Ç¾6ç–<eßAxãÀùÇ‚¼Éá4x[ÍLò“~>!åOQxš{ZVFÔ`½éÈ~Iß–“øL)Q[ëTûôM›àşT²*BC¤~	æâ‚ä\nƒò¡gÃˆÅ…p9zKÉ–ówzO9di^›'‰+¹ßïDz4ägHAº¯Lyô¡\nr€<IêjKQó¸Snô==\r.Âo7Â½Êé%a;‰kÏãmX¿›Zi%P¨iÏ\r­€¾ıµ/©…L`pR0¤&õ—I (Øá\\.£*m„*(ÚÖõ—\$ä†ÆÀ÷\nw×ŠĞ¥…8a“\n&´Â‘ÍUmª MÖ¨P+\"Ly„ó?¡M\n€2’	L\nbS ¥NäùÇr¶!w¥jw`¼Â\$îôƒráè…Êaáv±^Ãq­F‰Ü6•Ó¨i*™Ÿæ„ì_xõØ\n‰fğIê:B&ù6@É“KED¡úú·QD(V`.1\0Q\$íøF­¹H®’Tş€zĞ†‹Ì\rªjkzM€ĞÀ®Y™À(61€”x‘+®%dj¸Æo\nÂ¦¬\rg°ï\"ÉŒ´ˆ—?Œ1- 3hÏXÖÁ)åyjÃ5r¢N±#Q¾¼Š¸w{_ş¡øG)ÂÎÙ1i‹Ì íç¤<Z‹ºpX³¡Ö\$â?¥=%.´€Ò®&¾­%\\±8w­!¤µa4œ<JB[ĞÄº¦u4‡%êŠ×47‹Ä%gÑä&¸€Z(@	€E¢{@’Ğ#¥–2Šh@Œ#ñŸø™ÑŸ¥£@\$8\n\0UŒìjãA(×2ÀO€Š8Ú€5‘¸Œ¨@†ğ&'´\n€D\$i#À#Ÿt\n PTs#]P*	àDÌuc› PÀO|pc—øËP	Ş¼i#Ô}ˆæ:<ñí\0\0¥ÀˆÅ¥lo#}ÏFÜR‰Tp@„À'	`Q¬ycTp(ÆŠ@€eh\0‹˜Õ8\nrx› cş<`Nˆã:)DY\n*Dı‘2{dZ)A‹Ú4±²¤€cZLğ2ÈÊ<ñò\\Œ\$r#ˆşÆö7ñÁ¥°!û€´ü€Nª{O¼@\$<	Ñ¢ğVƒZÒÆ52.Aù#D0 \0´ÀI¸û\"P'H	²_)¼x@Š€*úàAOh£hI)I²L1¦’ìƒäµ%áJI‚B‘ş’g¤i\"p÷§K2}’ä–Å(CËÉÍ=²t”xCøĞ&FÄ	r“ÒoÙÉ@@'”ñ€%	 ÛHŞT±áˆ	ãÔ˜:=¾)\0.ñ°]Îâ5 .ğæõ(pÈÀL!à8­\0ˆ¹	éR\0L‹YaÔbkÔ°ˆ6Ä)Y·éˆî •Ô®£	h³zZ¦õ±’IgÎVO3oœ­Lgà3ËY2ãÛ‰ÜDoPË`3Ì¸ec-‰r7í‡2Ô—Dº‚Şç‘B¼‰Z•¼¼%å/I{MÃ\0pĞÀÌ.`äÊİo*•Ô¯%T€ı\0 &–iR\n™+Éo€ì©–\rÀ^2q”Ë©\0\\¨I@‚	KÀ#peC*!>€/á%|È…Ì’ÁŞüô\$è)çÀ§1P30(\r¢+\nZÆz„))\0*®\0kà€ÙÅ2¼–Ï…(–E86å¶s—tºf&”™Š¡´“+;”Ø76&ãK–_(›9fÓ,@-ÃÉ4l\$Û‚e7\0ù±:l“LİæM7.\0ˆ³|›ğo–JÛ©ÀÎZ³u•ÌºŠ'Èy{ÅH,#\0vU@9!¼¥	Ñ'†¨&„òGôøß@_-Ù¿³ºt;Üê¡:©µ€²u¡<—ˆL†iÙÎš_ê€Ø£@U6°Îù#ä_€L'~ùæ/Öm`\\Të']=Iäât°Ç¸Âà)ÔÏqùsÉ9Âa<RPÂº|tút&5°äs©lî@¾	ŞKÆwS®èlÍ:9úN®wSø|·göÉØOùAĞŸ<ë‰BÈ€\0/àz@´	ÍÏÁ•Òå†=?=iŞO‘kÓŸ=\0E@iâĞ\$B× hO\0Á>DÖP´ó‹UäçÑ†j¥HìÂ9F¬BcCi‰é­BwM§tÓx€PÀÙM‚?p“®=—äì8ÜÔı‘Ïlg~¨˜tÁa©€%]b\$àØ\rˆr„èÄa,6ÅtŒàW)\0U¨›F˜	|æì“¢ˆvh¦Qú*¥Oƒl.C\$À\\ ĞÖRRÌ<lcù™&Cj3Ñı%ôZM¨öÀz9GpY’â¹£\0i\$Dµ‡d‡ñzt[')[)Q¤ØêŞkÁpi0·#cÃ¾‹ôNE¨ô(ºC2L	Æ@9hÑEJ5Ò,šh{&Jzö0n€vª©>[€j“£Û[œ]ƒK•ıRîJë>.;ù¨íF=RÚŒ<råÓM¡=—Ô’¤ÜhØ^Y\\RmnËĞğ Nn*g‘¦ôÒÅB¬·5^QÒ‰@O¢°x¨¡HIÊT ´â9½)(‘œ&µ‡}A)PÊ\\/êô…_Õ!ÌH şÚ‘¥¤ù\0éBá­\$z4ÓTYu‚J’v\0êƒ”¨…%@æ32\0Sôm€--Gi@¸úQÅ%Ñj©Yİ+FuzlS—”ÜW3ØÅ·OrŠU\$EÔè;¹M©¢\\€Ô±Äu/£õjeQªš¦§,#J¡ªXPÔ<UH•TVVé#Uê™ÔUbˆOU´DZ‘â¢µ£Í8êÕUJuS «À‘g)XDZK‚•¢Bî\n¼@2Š©ìx@d&ü ½eÜ«Ià@ÊFwì¬8“©\$Ù'IºV‚V†U\$²ETÎ_ğ*ˆd¸/áFCÓYdp§vGƒ‰3‰ ‹Ñš‹L^(ù`áj”÷2S¸ºcÛW¨ÜJQYiÖHB”£ckœRè\nş²U\$jê\n„ZAi€î»¢U*wKDRxW‰LÂò­ˆ€+fÚŒ@ã¨A4¢àGz…R\n²5‚b¬\\_²Ÿ ­ô‡¡á0¼C@¤\$X\0+Å]¤ÑÂè\"?‡n¦€+QIj\n»x\r€ôB`S¸âM‚ÈÑûŠ\r o°@‚À6XÀ\"{±\0µãb ¯)–ÁM¨cMğW ä¶D_áÎ±Ğv@{cĞ:¤®%[%‰C²ş1¼Ù;AÆˆÌTn› \0º a²páóe~ÙU5 s©V†İe|M9‡€9 hË@æ¦\0êÙ~É@.³	l€· Jv]©ºD§f€7¨FÌá±³ËùŒ,/+:¾‹íÚXIi­\0U¢â@Nµá´\r Ê¢,².½i¶‡ª³m_ûFŒàÖõäÀYiUÔÓJ¯!©gûLj‹ãÑú¬D“iKAà6²õª-U«KfÖ_N€\0ö-3©ìÀã3+¥dãiûD	\"ö¯µM¥ml‹L…XÜãã¯¸Œ>‹&|UÕÑõ`Ïh¾ù2¦ÑĞn6İ…·ÉI+ØnÃ©-nDÃ×`„µ†®°É”°@ã¬B!;X™smÈ¯·†pC`‘p5Á°¬¡O‰%Z/Õè5”³é#CK`‚XˆªÂcb°Q#«§Qa»–…ƒ¸q…èpÚİ÷)™®G+~Û–ß÷\"ğlM_^zò©šæ!ÌÉàE«”Ğ¥’®šÀ‡ïa úØp86ì„åˆn+oì’Jâ¶ö¥¾,¹¡ó‡¢ºw\n¢]ÍƒpëŠÛRÁõ'§eÖJÕqµ'Ü¨%£'€nlO‹h@>NBÈŠX5,ˆ‡‹¢ÊrGr¹ Z l\r(ªË‘jIù†±lŸ¬%b‡;s+±× ¤Wg7¨)’*e…¸1µ•ŞÑ3“L e@(»p\0 ĞÃèds®AñÖD\0Ã\\bD§\nuê/&1¬ŞXR×¥Eæ¥‚5¡Tœ\r§}7õ§”ªîÔş”AÙ¬áÉkâ\\–øöÍµ´ŸÇqà2Ü€öZ-wo´“tßZùƒ‹¯]ó-yq2j+Õ†¾Õ­Ã«¬€n¾XA«Û\0†\0º¾+S•+ïY6_BúV7z®nZ@Ì†²Ô·Æ´]´-UMJc*¢ü¸´®í¢s\"ß+\0·ï¯x´B3^«öà0\r÷ÜÀÎïÁcğÖ\\jÆÆ*¬P-\\Q8ˆÊ·…l•cË%XşÉVB‡}‘,€ş;(‰`*Qú	\$áïÛrßÂ{ÁKøìCúÖ%¬\r¥ˆx	ŞøQû…,¶Ø¾¥×/‰vàä\" pÁã¶ğ~ Óáã ÅJ5eãü®Eš-^âX;c²\\©¶×¬m‹´7£?˜6C*åº®†,7®HfÄ/Â9eÌ0[@ñ¤!bê®íÅşUĞ‘=›Äi.Jocñj;ø—B³\0¼ƒï]Õ”ÑúvÙGÃÜ8àO\\\0ÀÇŠüO©›\$•.&	p‘\\‹H1bØpø’:F\"8Å¶…ş‰ŠøVx©ÅıµR®–xä=À3Æf1Š+|Ò»\0ÂBÀ¼kbÌPÇLÑ’£ô\$zÌáàÎc	¢ÇĞi,Pcb,pÃn(¥Æ,¸ì`'/»~êÙkÖµ‚Îp€q-›ÁÈ±¹VÀÜÜ†Ü\rÙ	\0á‘‹dSˆÓÈÚÍ+º\"Šéˆ­1\0(Ä-’Ì1~útcªşfı¸àBÛ‘b}Ø ’Ã0<1\r°¨¨L’€»\$¸ˆ2d\"1&ì™Æ€BÃ³N…Ô\ràB\rrƒ«\"?vädäZá±.\".\0?wä¼9€oÃà\rÄ0¥Ñœ!¢ÍdR€‚ë¤¶\0‘ÃÇHëÜra%ĞŠØ+\0yrƒH¾sÏ’4W#œ,\$èô \0„*xBó\nPÌòü|„ 8@/ \0ø2U’°ábíİè¢ÂÎÎªxÀ!¨d§°óúNÿ3SÔ?£ÑP»…€(òg\n8·‡ppŸˆü€S9õ@‘'  Ç\0úyµÿ\0¦y46¡H<‚öÌ×ô\n`S’ˆ…¼ÈûCY¹’„”³jp:\0N(ÓŒáX4ŒkÌÈÓgßDy‹<–n4™£ØrS<ÒÏıˆó¯?¥\nÀÇBãúf('™Ì~dgÓ™SËÏ?<³ÓVg(1™éãæƒ2ù£­—²)ÕôŸf`éZ€¼a“>t{ÀœÉŸô’>ñø\0ŠìPû`O¼\\sŒ<õ?4äwŞ~³ÜÇf@z™ÿÍ~hBW Ìø³á´ŠxhA¡¡ÜO'=úPÖŒ×²Üö±ë=óúc[ysèÌûgâ|¹‹Ïæ³%™Mè,Q³ÆÒ8'X hlUs®…§Ù¢ú é4ËÃqDıÂx*8g§NLšBÈ–¨;§}%eû@YìŸv ho!\$æ›NcCXì³@Ğ;YH'Á°@^ à·Rf^x„\0^osÜ_fª—“;¨Ópj]²:’Ô¤ïõ.mLêl\rš®V¨\0ó@Ü€¶Ê\"ÓÕÄ1%Œ!_êô@-]8f¤ç -Õş±äa]Y¯WšÏˆh`(‘¬äJë@…ÁÖ\rˆ—õ€Y	kB(€xÖÂ:5˜B\\QkO[:Õ0˜Â¼¡­uk›X¥\\×P\0ë[öx¹ÀÅ®`ŠRIGÕĞk5°ğª§YzÍ×PÒ™¬=†l=áõÖe€\0ç•2=k` Å[K¼‡Bê½Ìû8¶C±Í}k«c{#ÖØ¢„ølŸdfF.Ìµü-›AºÿÙ6º†K­’•¤ĞÖ×Pàv„'¢lHiAİÚ8C¶“®	G„`GbyÙ¾·Í- 0•Ä¬;[*_ˆ¡ãmlH{(;Uo¶ÕÑ*Ä]Š,Ä‹åŒÖÆÈşôXË“¡80Cµ°K	­!N¼õÔ(I`¨³	V¾Dv½§íšwá·rpc,ğåŒÃÓ\0ää 9~s»Xnã¦‡¢Ÿr[ec·4dçpÅi	\\…Èe2âãl±ÄaZCk»gl÷bB„™¶7x%¿êè½í€Å»Ùk`ì\nÁ(@Åº«®„5åİ˜¥Ï­cÌ‡#t›–Ü–éãE½}Å„sñ–Lvö÷E¹ï\nQQÛ”Şæú76}õ‹Or»çj§b¯%@7‹˜àÛµßh³wÍ¹÷n£kÙ`Víq·±Íòï³~›™ß~ø„4{Œßşå÷ë¾óË;òßï8p2mP+ dÖaX8&,=Òn›}ü!/øK&\rŠÿt´H™Ó)/øYÜ”†6@å¯=}ğŠğEU§lKÃü\\kÓb[×â1Gø®­M­)™J¨xXÚEïTä¾	/¸\"-‘ë…<4ßxDˆ¥ÅíĞpÄ(¼3ŞÊŸ·ß´'È+Û\$\r†¶<rí×n`H\\t\"ş¶70=ä·Y×Wéhsğ­\rÏw¼~°!ù0@6l‹\\† •§/şBò7’¼‰–ßÏ>Fÿ‘Ü‰\\¶¼RÙ¾-Çn‡€şÜ§\n¸?F~†œaŞ×+xÉÁıëñ¨\rœl,fúCß+­îw•i¢GøÛËî.X!¼_à71ymÌ~ñ„œDå¦È7åÊé	÷š¼ÆåîûÅGÍ¾gówƒàb/89¯ËxÑ@!R–9¸eÍJq˜Y¼hß'3¹ÏÍÄ¬*÷ñXw‹Ë®^—ÛË	¾7ŸÎî5óÀûåÖ`ö:î#È+Û­0˜·œS¯ˆ@0óo7:&~r(Z·‘G1zĞşˆ€·¢pİÎñdNŒï“£›`ç¿/Fz@8Ñt0ŠZÌ_ ‰ªÎ0³™{Úè¿Lén•‡×‡oEËÃÑâ=rû¡‚Gj]õ H•¥›²Ò·…»ŞAf+ªÈèVº•º­mœ7ıåßB‹ÛÓî*q‚ş}cãwØ³=Û„g¥»wE¢-H·°€»·¦½&Rh4—ªMêZÕ_L½©]WV'ÁÕ¦§Íñ\"uŒ@-ÜaMÃsº@9êL:ÈÕ’]ù#‚İaëoybİ\n\0[Øêrğp*}Qí‚bwßÛÓ¦?†ºâÿ;Vc¾Ê°›»	«.Ûsç´¢XíÖ°ûy·R=§&d”ã·rûO«çõ2Åj!Ïux¥ÜÎÔ§R{NÖ&øµÑ»®5ö„}£ßvyÛ°1o8Z#ş{ÛNärû½İÑï‡Q:BÕHzW{òïW{:ìrŞ÷ó¶}D\$§j7)àP€÷ëÁĞİCvV¬X—¾ıdí¨D7óá®€·¼,Ôh»÷á_ø]·^í—qÏƒÜŸxO»]­ïŠö¬?p{Æ\"ˆğOŠ8Qáµ?xw}ùJâ?9kâŞüx½5buÛ&÷øÏo›ÅÆ^ñ†õ¼Ÿ¬>õw“g]çíh¼#ä?+÷‹ mï(³¼¹àÿ/ngŒ	é5â5<ù;‡ñüòÈ…¼Ë³½œxÍ%‡³‘;ì(³ŞVóŸ–;Çço-ìóË½ëòÿ.eänkpËÂÀ_ËFäXõ9ÓWjQ¥ÓàCBØ§åv3R=°ì†¦;aÙ][yËÈ»4Ş/¢|óÃ##v	@_Ç­}UçM>ùßÌş1§»\rC£MúqƒCŞÄÆåámc¿,kzy4Óí¡K˜¦Ş„ùçÑ>˜a‚­!i1çp\nA`çJà¦x V,‰\n}éKÚÀ+’”¦s¸JŸvŞî(S=Ö#:M>õ…°U¤ã zûŸÚêÀ· y4&=@MöàXÃ0P'{b6 E È #Ÿ”ú@M‡¿ã6uOuüKÛ_\röñ)Eî°)G9ìúZ>‘o#äGÓäl@¬ğ%ŸLê‚Ş´™Õîsñ0 Z/ºıôğ+¥¤ú@_“ÀÀ…Şô=Ãïãı||0§ÖÑOÑ~íy|OÛ~Şöï·ÃEî/rHjŸ\\>Ï×€t-ï™ıŒ,!`ù7ÕÀVoˆG9¿k“™ô¾Cö‘ı“îà÷è\nÀ }Ğ!üQ-GÛ>ıõÿv;Şğ¼½éïoÈ|@	2?(·¾ğÏjIÃŞ\0SÍì”>­øXØÈX|úïºş6	4ÉÈ?vø÷ã?öï¸~7‚ù/á½o||d\n_¬ûoºäÒ-ãëÆk7>ü÷_Áşğ¿’Sáÿı×Å~/ñ>~¿ö¿ ü‡Ü£÷P ~Cå?+Yÿ@‡òà*|À*ß2ıÑõ>mó}Ûç¹İ¡÷½üoÉ|OòŸ–øŸİ¿R“{ş£î€ ıpşØ#P“öoÂ¿¶+Ü \"¨’z3à\$¾ˆú0	ï¤>”+é\n¾ü	ï©¼ú£ôïß¾²ücù  €’ø#íà«>úKáP>›\0Ûê/©¤ë€¨“;İlâ£x>ƒô`\"³–ûÜHÔ3¦ûÓ:À«\0’š9ì³›\0ûÜiÀn?@\nïu¿>cîÈç€ªjCP'ÒùBOÔ>2û³Ü #¾&%(0£óÒùˆ3ÿ€°ù«ú€,@|ãç ,‰KÔ\n/È@¦û³ğéÀ|šS )€©¤,ã@xó9Læ\$¤û´Ãì€« 3@ëKîà*¿@ı¤pFA`&@{üïÂ€¬“	0J†¨÷C÷b0?ÃßéÌ?pş\0 ƒ	#ì`¾¢“3ao#¢z:`>Aa úor©Ü¨Í¿HşXƒı¤œO€ªÍÈıáo@Õ[ôÛ3¤øÈ[ÃøÀı*OÛ#~\\(ÍÁ´P\np+Áº?+öğ4\0u@ÿPUÚ?xş ÂAÊ\n´`\$Áj\n´ğ\\ÁŞÿ,¯šAîı¬oÄªûè¡oAù¢BÈÍ´°ı¤´€„?(€'·\0ĞtöÑpVƒÿ°\n´=ÊÑT#Ï>òÎ«Cğ‚­Ëñ \"?xûĞÀ;¤ 0z#¤>ü\$P|\0¥ô%ŒÁƒó7°Bbş\0ïáBkÿ£êBbÿ˜\ní\0°şR6 >=çX	\0>#¢Î“ELÛ¾\"ŒØúƒ÷€˜>ú60 ´U\nÊN/Ğ¼ŒĞ\n°14>P	ğ¤€—”I\0‚ÎÚãü¿<>ëá€«A¬÷KD`'ÂÖû€ÿ0ºÂï4\r°½BØXx\0ø›ã–€Wœ¯¨€¦Ñ36PÃ>d?Ì\"còÂ+l1ˆÔÁÇ¨ü >hşH	b®“<£şBéú3BC:÷#DÌæ=óä3ğ.Ãı«DÏ›¾r?2Bé!Ãh¤+ìß3€“â°G> ı\0)C\rğ*Ğ\r¿e	PğáÀ ôÂ4‘\$9P3‚¬?s7İAb“8üĞåÃ¦D3°C³hã¤IR6‰4Ã¢Îô:p€B#„PVC)\$<0õBoü=ø¾ºùãçĞúC×L\"÷A];Ü@'BÅ”;@¦>ì8PıB]\n„@¹CE, *ASİ3	¼A¯Ã\0™+1\n?Kç¨Í¾3Ì\"°“B©\"N1	DI\r<0Ãô@ıX/rDQTC/ÚÄgTB?…È\né9\0œŒ90úÌ÷Ãè#ó\$â”7öDY4%1%Db?+óI\rBºÿ\$,±\0øüÒJQ+€¡DJş†¨Ñ ûèÍÄù«İ/¶€ø¸	y?3D\0&ú0jä´SºDy¨³ï/â¿ şØğÄHlèÀ‡ô!q+#h	¯…ÁäÀ%Ào{öØ´T>ëôF¿~|‘HBÊûP0 ¤> \ncênD1ì°ÒÀTL8qSCÂÍº5ëAyø0°\"€W	23Dµ>Úô0D¶ûhjˆØÃ˜\$LQÃØü±_EO’5òC;\n  Á©”X‘3¾@[ÏÎ@÷(ìéAtpò€¾‹ë‰%Å`Dïš³iTP*X\n€+€Š÷(}Ed]ÑxB“”Ñn>€ÈüÀ'Ép\0±8\nÅÅğ\n²Mñ‚A¼ZoäC¸œğ\\>#<@\$¾sübÃòÆ¬bàÂÆ6>»ã0£´M\n8¥3èyAtøˆ‰4€øÂM/µ¤Bÿ¬DªC\0Cíd´Â ñ.«Ô#o¦#?\$h	F„ÍšN/Bêú¨ú1¡Æ–÷DhpDÆ” qÄÍ¤hñ(\0©ªJ¤Ç(0±IAzú³Üà!¿üPµ¾+„ecè>†?(ÿ]Û“Ü¬æ\$¡\rD!hñ¯*<°¦€…ãê£öÂ×\$*OìC©l.V\$>ªA\r#Ÿìˆä@®Ğü<@\">Îhú©)@üDRQÌÄê’dr 'A|ÑSöğ€Î\\gğáF]”QÖ3”>Ø ,€¾?A-ØGeHúÑÓ£~’“â£üGnŠ6†GbûüÑŞ¶ü3±½½°P\$/‹â‘ãÆæ³İ1DÄñ-CíÆ	#‘í€œ\0û°¢Â0>ÜY°M°?tM­=Êq±èÀ|ú«EŠÆÑPÃè4D23‘ô=ç°\n€B•P\n€B•toPFô,H¥Bá\nT]#é?E¨ûìÛ¾{‘4€@ñ¿Ÿäv€)\0¿Àû±âÆY ìƒñàµ!\$„OŠÄˆ÷Ü\rÕ@Ù	d\rm@ÙÄ+i\rFë¼5I\0c`\n€Hxœ‡‘ÿE% RP‡@ã€°94F„H%€ŒÑRS1DÈ øšNMÀÇôi`%Âë ¢A\0+È2KLƒo‹D ó9`&\0¿ò4ÑÙBƒğïÄÄ‘#kp¦Å ˆÍÇ;´x2Çs!KâÒ@1#à	¨í£L“\$`ĞEE“Œ°>—{êÅãLe¯yC±ÈûÑx@!Kè‘–¾;Ä	) úe°Ş>i!¤e±à©!¤†Ã£<sã\0D0oÄ?Ü0ì@…%²>\rB×ZN`\"@-kDÑüÃ;DÑ14D?\n5-\$8ü°Ö’ÒDÑd4>KL‚íC&pvFã!LRÇw`ÿ©\rHq“DìÜ@º?3ô°PÁ4ı\$•i1€†?3åRx#6Ãñ2MÄ²ÿB0É>Uè\nQÈ(ÿéÏ|\0¿üy²yHÚ>„j¨ñ¾!%ô|0á¾U ş/ĞJô ²2ÄŒ“’J³¢÷ÀÀ/ÂÉ\nL6ê£bûkâ­?³t£ow>¥Óæ‘<D øŒ!ÏÍ?9¤T1:CTÎãâ°EÅì‰°OÄ7|à)GÎ£æ’ €³\"lMxJ“ÜaˆõDÏ\0¼eñ—\0²>ÄƒÒ@¤I\nkèƒîÁi¢òDä€¸\$3CŠd†Êø\"@<‚\$²\n?I€ù+H8 ¬–N\$¢Å³€øñt ºÊå+º”MwÊÖJÈ.‚˜\$\r¼\$i*…á†:¨6£8´ ``…¢˜f\0>'ØİŠ`×–* 0¯æËˆ’²<Ãs²Ï^Ëoª®à:Ó»şéµ\0€ËVÌ¬€7\0ò×ø\rà1KbÈH’µ¤=-´·2º\0Ò¬¶’ÛK|¬·)*€Ï.“Àä4 êY8m@Âº’¼¶›ÊääéÜà¶\$:ÈàäJæ¬H*M¯Ë¾E¨E ØK²l¼›€Ù.ä»ÒéºFäƒâ=¨ŞŒg )Fvü oáÆÂ*\rà\"\0„ø°0#Æø°ş	4Ç\0˜\nĞ]J…LoÎ¤?DÏëËÂBÈÔ¥\0p0 &¾1 üÀ )Æ£7±\$G/”oïäA¦üdÄ)(BAcıQŠÀı1£Å…1,;q\rÀ±dÅ3LXó6ãóÌa1ÅpâÌZ÷¢NSøDÇó@—2İs\"?†ü,!X3j9ƒà7…¢ri•íå¢€)‚è±DËªQ8,|­³.è€èp3/…I3Pp!ªÎJ ÏÊö²ûÓ’®‚%ÇS0Ê˜£ó<u09\rºÍ\0Ú˜JÀ;‰TYˆÒæ‘k.h5f˜:¨é„]4Šà/“TŒÒ.™€ø0²”²	ï€‹‰<;P“À×,‚¾ÂCÆt\0¾\rxÎ\r±ó.IbOo,Á¡g<\$ Å!;Í ‰\\³\0ë,ƒ5ğ>³?	 àÅ²í)Á.ò[æW¶—+øò\0>–Ş¤ÙA{M5œÙÃ	…<N\nàSNÍ°\rb,À4ŒRY;æW™œY:-¢ÍÈ*]KRüÖÀ>\0ë5 5sNMÜPá%æ³‚.s³7R_`…ò˜è!²·Nt‡ÁEZu2G éC7ìĞ ‚r[2ĞOSFøà8Y¢O:ğ¹ 3È|ğ\$€¶v*Ü»SX“ä]+\"U,,Ãy€ÖNPdåáŒÎ#øSò·Y4!}‚ä™Ó,Ñ2ÎÍÂ€I =Lü³J1Ë;,ÓÄé :ñ!‡tË6/sŒò¿Î˜\$³rØ8BÊPSª†~±; 4N´3£ 5Î¿-  3F.ÊœÒ)¥8jÔœí\$ƒVH@°\0øœÕsMæø“ÇµÎ¯+˜ãàØÍ_5À>³¹\"VPgN\\‰X.ƒÎ¸<®eÇ€Ñ:ÉA ;‚Øİˆ`³¦Ë0=8G¤ÄÎ”àÊkŠ?.f2Ì„I£*Ë:ô®Œz\$³AòONÔœ³RÎ¸‰<Ûˆ’Ğù=¨IÎaN=ÂXÚ\nÁ;¨B_KE=LôaOŒ«:¸•@•Mu=•S·¼ı=ä´3°€ù;ïs°†;\"òì\0ù>Äì2Ó{4¢!ªuĞ‹ùÍæñ Taª9Èu\$¤ƒ\n	u:FY4ş†?œáÄ¶+{é…\0ÖËšØÈÈOì„ÿ0çYdÓù9Ù+˜€ÍˆaƒÍ‹@‰ÛSÑ¦Y9Zrƒ‹?ĞOSæĞ\0Üìÿ`ØÍ„!X0©\$v@’€9NÄblÒ‚\n>J£œƒ1Ka/ƒ»SA¶Öè…3§ˆJ8<Ó\".*Ø•Aº6Üµ.»Œ~·‘dîé€Ã.€@¨‚<ûÎ –P¼…\nrÔ7©/”³,6+;œØ-±NÄ\r€JÌ±†;Cz\0•P–œÕ`…Œ2µãĞLMÓ¾;PSøg™~²\nPCƒv²=€†„ğó(%“ƒ‚<İÄÃË0­Á;Œç9£®s7\0ìıfN]DŒã4H€ñ8È`”\$Q2È`N°C;›yƒ.c4ñ¾M´¤ôTT5 c&ÈĞè3à>V˜–ÜO;F‰üµ­Ì¶/-ËaÎré¾rØÎ¸\r`1LÜÁh@ñ\rşXH Â€ÚÚ­çùQvØJe4JåF˜³Î…IFœ¬óh:Ÿ+˜[n°\rM?‚@É˜•Ti\0`c´hÍ`P@“Š²ãF°;2æÑ´%Uª2Q¿G&“äÑÎfìúa²ÑÙ?P¡ O?9ø\0004:ú% Ì£3³ëK¼í\r³¥\n>çTç%Ğƒ±,4ÿë¤<åŠ:F!‰dágK0Ğ‹\0Lºs ßÒV:cs£8M;-‚ºrëQê:û	öRl6Ä»R³Îd¯½'t•¥ÑIXKÂË0¢ìÓÊ\0åJ/6¥Ğê}”¦…š—DĞá˜AÌ½Ó¬K\$¬½ÍÙ¨é\\¾	¤‚W-Ë¥t±\0Û.(6³Kzäí-Ræ7:Úı-´dÒß/].+ ÒwK¬»Tº&•-È@2RæÍ/¾ËÕL/ræRÀê‰¥Q‰-µ,´ÅQŠ\$õ-4ÇK…Ke2R¹ÒïL­/ô³SIè;4ÍSL3ÒÛRûLÍ2´ÁK·M\r\$.–\0ó/…\"SËÌ•Ô¼`K±M„½òRƒM¨#”ÁËºí(4İˆ+®òù“À_,SP‰Lû \r…ÌÒY®Ä½£F0~ˆİMZÅÈMÔ¤D¶ÎÌ€È!1\0š2¨{’à4MÔw|Ì4ìO,ä8Z\"Ã„-C¢C¯@±ËO+³F1¾ ºsu¸\r>íÓä	P\"SÒP¼,=\0004íLL5!´ö4¤:ı=@–QŸOÍ@t‚€Í3èfôö±Èe}@C°–-J1Ò-…B´Q„¿PØI®ŒSIåB®+ÍVX1Oè”Ô=P%×7[DêòË	ÌdTVEI€ƒB±ÅFõzhAtQñ/å?SV=8ƒÍTní=<Op°\"ï?'~ÚÕIbÿÓÔ8`µ…šQS¡‚8PåH‚2fÊ6‡9ÔWOøô;ÔB+´Ô0Ñ\0 åş€ÃP|ø%€İ8åBµ';Ot5ÔİSÓo¥ÑT)Sû4êTPLõBÔOuPtóTR0ÅäÕ:Á-Q 3½)E\rEÀTaQX’?Tú6à¯^€8ÕN<úSøKà¯ \níSˆ˜]BÕ'G%B­ÈıT…En€ØÏ±ñ®²8ˆr½B£#^ğà>´î„QX6ƒÓMõ¥õ7;BØNãŸ<<x\rHtó5S}Z´ø„.Ñ15R–çULkT‚_İc.ü\r\\4øĞŸ3Ã,@1œ485¤ˆaÀ\r’îŒyA@0 Öi‘*«yWàµ	†©WĞu€<X)‘/8X@¢åVQ¨Çµ}<=TµaT‘/]`tıTœ0jV»Ø«u†UüWÑÄ@Â•¦±*zí»À\rÍ6 4“°EôzÖ\$Ü\"14û…ş`H5Àú‰,¼èU‰É˜Jì ,íbSñÔZğháPÖ\$¾„×S—V%WX`€8JÌ\nÕ^€ÜÔ’3…iô?·\05f4<SõSMC\rµ\rˆj•ƒÖ\0é\ra†áXa1Õ†Úßôãµ‘%?P\"U'V~\rQ”STí[°Zõ¼UTíouBÕV|ô¼3sôû7Y½?µÅÑëY¥qAVnJ-_5U\n°*g\r6¼\$°¼ ÂÖÌdMcÕ€V+9SkÂ?Ö:]•Ò‡X“b†•4ua›Îi]}tÕÑ2•Dkµ†¿]Y‘5_‚C]ÂÄµ†\0æX*U†\n?U}s§øÔ0ñ´Úf=Rğ£ç\r,;ÆÕ	G‰1-m‚Tä…x\0‡«YPÿÕêÎÎ\rÛc²ºéidí<2}x`©Vº(ı8NÔVå9ut&DÍR%m-ÎÔû.ƒĞµ†SXèÑîrU,Õıy*†…_İ€U´¼¹+İNíüÖÙ4Õa×„ò½UıƒZL0T5s€óX`ß†V exs ØVÜC\"=Wb/ıG‹ W„É›n@à¯ ô©>@6V8á*ó>\0å`w€.Õ ô8SÖƒŒ(ı‡	½3Ğ 6Xp5]`ıŒïaÍHÓ¼‰Ì\nôï.<Wb6V^<ã5Ï€º(I6ÓSØ¬dKy\ntÖ\0[ıa€‚Ÿ1X\\sŠØ´m•d5€XÃb©ôµ‡‚ä@ÌÓÍa]ˆYÁ„c(QÒµ3ÄWŒÀCË‚Vë½†`ÊÆíÖù@¨•U[VØX5‰ûYK°…6Iœï4qdõ9ƒ5Xeu†8¯`4ÜJ¾Ù>dKp“¯OFÖõ“VS€º!qtE“×ˆ…e(£a\r“sWÛe¥ŒnŒ›^ +VYW‹edVQNe%V6ØÀëÕƒuƒ7òY=\r“HƒXcz&W…;cê´+=BÀ¹,oÔ§+‹\rÌÑ7+éAÅ\0¾7Åh,šQğ\riÃ3ONAÍ@İÙß<¹SVMÌÖİÕªÜÁÃUDNW5Ğ62Ùş62'ã\\M\r5WÒcÕ€S]0ş%QuTÜÊ±E˜×RtÎV‹Õ\nE¡u‰ÔãcìÕæ5–ÿ8«J£*äÙJãZ:Ø½N•ÑÚ;SH7BÏ’+öÓw~İ…52O§c˜‡5®Ø\0cÓÍvXXôó}¤AZ~óãÏÔzU\\A/.eÏH³Í…ÑƒƒU­akŸ©fy0À6BPÖ‰Öó`‹ª5±4ÅíTYfCqaü:£I%[Ì£P‰g”æ–±T +uwó¦N¢²Ä\"O>‹¬6Í\n¡ñ¶»Ë ËV®#R¥ƒVÂÚákM–ÁÕÑAv\0ŒÖò^\rgÂº£\\mrTz“-\rc3NÖ%SbÿÍ#ReMfW™MX\ré‚SõYá'M;m=p\nÌı4Š2Õ[d -¶„¬×¢ğ5”º£l<¬vÓ’<…¶V&ØaOMQåƒQ@è-C †Ú‘mdà‡Ô÷TÓm®“VH\rc9ƒ‚pÃd¶êÖPÜ\\ÿvïË@-º!+»×o`S¬YOôÊÅĞÙƒo+p˜×¼\nĞ6ôT\rkrôXB\"ı½¬ÛÑP¿ô]ÛĞã½UVı™_o-VÍ—ÛĞä£6÷Û¬İÅ]õ¾Ün±>TÛËB5”„Ä¼NíÂà‹ƒég8ÅBU[ËpUÄ`<‚Š	tÓaœ\0é:Í‡Õ«â¸\"(\\[3íÅö¹õb\$ü—Mƒe—Ñu6\r¢´\\}5Ñƒ¶LÃ[9Ò ÜˆG•”W|²\r©V‰\\hôƒ…Q8>Aº”üGEÊ£Z»r=ötVïn•UUm„õnÔ³1\\%n½\r•¼ÜÕZİ2Ã[R +<TSUUQ«[J€¦ô ¸\"€hRä·÷7U‰´/[PHY²ØZ0”¹5ª\\!m,Ö>ÕrÅ}—#1¹tàõ«‚”5SÖ@:ı{6«MwU=®AR—[…p7µ[Õ±\$ÄÜÍRoVpÖ»[ĞD š]5[Íp®][R[—NÚ’ôoõS–“S©8\"?ÔY[Ğ‘­ÆPD…,÷Y×\0êÃU']‚óõ •8¥q¶À]‹3¤Ï7m¹^zN¨ƒZ\nœëÕÀY¯tÕ×Õ8²•CÕî1Võ`ıM÷gJÍEİE”:QóuÅŞa[ŸvİÒ—|§wÕyîêñM7|‚XØr·^Ex-ßà–]ùr•W*55xiy \"3œ³‰İéW[	`šK\$)½{ ©_]İËï5Lóy%[–Òœ¯yC¬÷YŞIw…ÉòÉ!Ã@|×®Ù¢VÇ+s\"V0ÊÇAR;áy½ÇU=˜Ow\$Ø—›=EĞàKØäˆhõM‰_½äµ¼İ’€ù’—fÙÆaUíÓÚâ=#€Ô€Ê¨:·…MUAÍÑõWOıQGÜÇsœ¬wµ\\×<AS´7~²\ríÕ ^Óf`J÷5ÒI{­o\0;Óş‘´\"Í_tx‘·³Vò¸­^±\\ØÊ\rğá^£gõñÕ‹ËayH7DÄŞ!|k.vlãÄÙÁûÕÑhğšµ.[€² ×ª]-eôµX_NpÕ”—>=fHõUƒ‹Oôï5İnHÎ‡ÔsÜM-×3¥’æ1İp-¾–şW	CLÚö\\öÓ1Sš¶y{Ë&wç[¶\"í‰v°Ü%~•\rwÆVÁl`¬+ Õ¯Uµúß°j‘aOÕÇ\r}—*]_VìĞ5ÕÁ5å%iƒY8UşÇñD\r¯VÁZõ~e¿“Ù‹(ñb³ä·;u½Qñ¶.é²Å\0ë_|n\0­‹WÊSõğ¸ÚŸSÏÍÏ‚°üöcÛ¶×˜ÅôuŞØ²\rë–°¶².²7Q@’•’_-Ëd¶TPÅ§u\\ŸXé¶U·P–Ù~ÄÌÙU­`ENiÆ ©B¼†D–¼\n99!ê¯BNİ9ƒ^½8õcHÂC?HøÀƒ‚¨”ËÑòËòÍ('âgs>\nBÒ²€Ø.¡ºSMm¨Ñğ%‰è´€'B˜.†âÍM:GCnÍh*ÁİäĞ¨_m7´–†R \r`Ì‡Ş\r\rC4â‡ùh}¨y„>Ø9=‰‚ù¾˜0¨Gƒ ş˜A›[„+Klı€[ƒbzUàßƒáiö42ÓVÍ=aÔ[F;5?…*\"&MaNcÖÂ;µP	àà;ál§ğ“-5(hîÈ€æıÀì…j1£‚.Ë5Bì;Óx.½@Ôv¸[†Ù…Ê°Çáy…öoá„26¯T·¬2ğ­Ÿ¶U†æÎ%á¸gè£ç€üØÖ„taÌÎ\rÚµø‰şíu:kÈ¬¾8ÚŞ+X{8(ï«A…áäé3|-Æƒ‘‡ÓµÂe;»‡şî‡ØJFÍ‰:İ}™˜‚;ââæ\"N¢Ïˆ«Âò×â/ˆFv»— ğ!Î“aèö#\râÒ³‰(µİâPv_bP	>@<â^×p4Á<âVØ”aóˆãµÆtOÖ;Ó-Cá]…mTál*æø]a¤9v•\rÿ†©À¶¤æ£·ï&5lÜ à*€‡†ëƒõš\0	@.©	\\bÊCa8ÙâC‹±‹‘+¨Ñ5 »rÎœ–ï«Â€İ·ñS#\rw(¥zæ:…)pƒÆ3l†ô—îeƒààˆ@¡JTÒ4¶()Œ!…ynÄ½Šâ†Ğ½’KÙx&½…~\n/iE\"”+ğ¯ì\"\0«Ó)Ä–2r®ıüS@‰&˜û½òö4ñè¯&40Ó=É‹ÜÑJ\0™´\$xÑcmc71QEt4íÄ¥ä:ÛÆö90|A9yˆõ>Ô	R{ÅU5ĞïAF5‘m3©ÀùèíHß\0qg#¢(ñ3cÑÑmÁtø/şFá£Úñ@LĞş=¼G¿ö=cæ÷L_2cÑ^+2ä,’³F]DR˜ûä?d?ÙÃ®+ó‘ïä%ÄyAÇîCpXÊYş?@€²ÑFCÀ«KókèRLÅ\nLq@%ãy\$}±ÆAL_ÑqG3DQHã€¡>XôÂ{LĞ{Ç&H0ñG7ŞIûã•Œs{Ç]&H0†ã‘†H8ÿc_şIÀä¼ğ{älpÙ ä>ÌeĞ{ä#’äVà«\0¥–J™.É¯“`úP^d3ôyäòøàĞÅä÷'98äÛšŸA÷‘>PY:äU\nNÃB‰<“ğÂBNP†Ck>4¹!c×nS&ÃÃ\r'ù'§”&9)åC?P¤Âc’Ô;Ğ˜ä	Œğ˜äÇT&93ÉÏ	My\\dá•>Np˜û“¼!™LÃa	Ü¹@åO‘XùDeO‘\\(püÀ\n3å£í\$ß\nCCñüHã\ntRÂµ\"´íÂÔø¬¦²@ÃQ”8ÔÌC&l¾ÃI›ÜoøE®8£óE5èÿ¨ÍÉ¡—ªHq|Á³Ä{ñ«¿ó–ìKQŸA>ÿ<\nà>J|¬Ñ€d'¨úy4Acc7Ïâe˜fAÙ‡Ã:Î\\\09Oelş<:y‹ÁŠu“¢áƒ~äèxk_¹i¬ÕÒò__™Lú>²ıühao\0´’“ñ™­B¨hT&ºÉB­\npQÆYTf1u£9¬_@FO”1äÅ/“DR¤´?)3D#ò†	2»Ÿt­Êâ€ìËE<ÍOCõ F|\r‘•Åù@ü˜ùÊ¹2˜ùÂÍÜáÓ„Î/-˜3‰ĞÔ%Q1–ÑÛR¼€\r“ÙŞŒäS’Ï?99§ùNV	\\ÙÓöÏD­ “ÑNa9ûÍ© F•-:Œ Í ¾3İ8¹à¬Î€`—Ò]pc²±]¹3üÎó:ƒèÒ+ÈMØt~Kªºµ\"srÙƒ6´ŞcÓÑ•3„­yÚ	,¼‚aÓÿ9ÕP\rîg'MK3øÀft	=¥\"´ËqƒNgopT3dÍ-geî–“Ò\rÌ±åG::%ó şM˜DTÚyãÿ7k.U8şcA¶MÎøÆ HÏåMå€6óœÎé?]+7Ÿ=\\Ø9ü\\_ŸÙ•ùä†©>T´óåOb2ª}‰\$/!>Ve³7X¡J-ñ™–ÎŸR:Áú	„›œtìÓòRV\"õFÁ5‚82aµtP	Hp'\rNî0ñÌúhA7P7&ĞË%9 É ğÛKi­Wà3N÷€6úÏr\n\\ıâíN3ÏO>ÆWÔ¢\$=`=%u[K%IØ•URheÆ‰YÀHŒ’µ²¸u2§]™ğTÎRí.İ7s}\nı4M&t834²õÜS2åuÎÅ£u·İèİy“¦_Ë Œ€Là5Ûq-Ìæà1ËMPş…Â/„¡pn&ĞÌİJ]óìN]‰…óóAi˜h#¥òévˆæ…ñi'YÀE4£é/>T»:GÚ?±ÜóÔéDu8G3˜n«ÈJÙD•\$öÔ˜õDÄı« ¬u-eS²¹İS,Ğ¥ÍE¹à:]¼#EØÏ€Ó72_ˆóNé„aÅ÷É”Ãg–7Î·—¡eáC×S¦xRice\$k½k¦u@<i•¦{´2ØQcE^œtWQq§-t^;ÍEõ4WéÛ¦+á8_cv!=hÿ™5¬÷æF½	Y’Úİ§ã‹¡3ÌÃ6ÔNãSö ˜±„­]•M³`¼‰3î úÍô-“šg–ÔĞIµÌj\0æP-•KPĞmnzŒà\n† :Ğévc¦ô]+ït†–êÏíf=Ó6XZ¤TN¥ÓU¸i©‘`Ö(9/U]‰õ#…©§A3ê6\$¥ª:œÜ&1}ZúœZ§ª=İpê‹ª^¤Ú¸\neÅRÓŸÙ¶ë%\rá\0ÓRVymÓj²]&«•K8;4°Åú­jÃxßÚ²­«Îö»Ï«V¬Ú¶ßÈæ®¶[Lé®zª=)¨#{S³ÊÎ\"î¤Óº¼†ysº5Ç¬°· h\rˆ5ÚÀêİ=8–3§f±5(œ×p£úÄU-;¥\nmçĞs¬®­hpë5ªhc|æsk!„åù¼S6#©ºÔ‚£­[czÖ¤¯­{\0Âæmr&#ú;Ğô\r~‹šª‚²U¡—QN]X=–öëw©5ë\"í¼bnybµWjµRšæ‚T2åWšèÕ,7ølµ€ñ8æyzÛë·T,ÕØk»§Ş»ú[D¹åëËT]!ÊjM¯]E¬ëºØğ\r¶Ö\\©]Ç”?Õ®%óÎk÷®»ĞUœÇ.®­ÏEj¯üô¡'W¯ëª;5zuR×”ë™®¸Æ—JjLgAxWDÔß°¸›ºGwõ ØêM.¤é»i)Dy{l0ÜşÃ÷´1±y{İŠó}»U-±–Ã@Õì]z¦Ã›Tã±©ñ«½Óù-9+»Ó–ö3x¢S\n>+ÁkÑõOLoâ¿²x°äÕ6äÜ½Æû&âÁPUTçmS¡FË[*y±•û0‚ê^ÎËw…674ÌÀ–²‹Y@‡ÜÍ³](û)l³>Ê{3•nÚE-ÌÅ³¶Í;7ËÖÇ.Ÿ“+ÍVÊœã;6ĞÒ¦Ğ•À…³ø%[<‚Y´Çá&X5´‚Ä›;í'´ÖÒ·àT¨óo•è»kê±:ÒRÚpË–MÃ4=hZ›9Ñt4yP´E®‚ó”ès€µ»Rmi¡Ã—·”ß%BeÎW\rĞ}Ëhu›Şc´¢i;Flå«~ÑûdPÕ´i5[G…G-xT@¢¼- ›w%ÌÆÓáe2Ñ_ùf°¬o˜pŒd~¸Q ÍE²¿¬]\\×!j@8`³s\\õ,ûböªmæÌR.EOI,›‡sQİ!µÕJÍuz*¶ÛÕ<%¤Öl?¢íé â\0ôÕŸ»PÔ›~e5œ^ áT¯OŞgNÊ´&Ö©K6’Ø˜§ ëè•U^'!OÙ2Èeµ.Å4Œ].iáe:MÓi…šg	5[Ã3Œ˜Ö–a²ë7t·­ÛvÏh„ëİƒ‘°%…Aå€3Œû‘¬Põõ²·z„òÔè›dåÕ7\$Ó[hƒ¢Ğ§{‹É÷öbÕ·<ùÁ;Ù£·]³€ã]i´îµg\$µV{¸]©»YOâ¹õ,6ä äĞıõÖk\0Æ2åÊÀÛ‚\"±-R 2à%şğ€úo\rTR31h]¼eÄC£_¼EÖvT†É‹­åUßÜÙyS¢/Ëºê WÑ–NmJø!7¨€ğ@–ÙP­X\r`9M¨{s#|X›½önÎ³½Åï!¡ùwVõtınÇtäÜ:?’=´ÛÌ×çı§´ıøßcBÖíèÏù`Æ}ÓOİÜPe:{èXÓºØI–T˜NËëéCSåóÒØNÏRáoúÍÙ­-Ûv˜õ`¸¡PŞq>8CÁ!]CUj•TúNíû‚ì,B…{SY½‰´úuOH&¤ÄÔ¿ÈDTÿŞc\\ÕQÌûµæ¶¡U\n’¹rÖ‘ií5›·fñÀ¾í¶~N;t¤ë5'k’èıŠ[k5Ï5Bèú.İ|Üà0ïUQákËËIw•BğG¨é‚£!@ ¶Ú¼ƒ@íŠœŞá·§µ']dâ:?J0]T-îYhbI×¸l¯ÁfØ´zÖíZ‰œİT•IÌ¸ğ¿c€`A/ğ5T-uëÀ\r…gËpGSEü2p§Â×ÚUqRsˆ›oÏÕ{EÊ”nµß=Tğ2Ïíı`‰•÷=-p\rÓ\r•wOz±qy4Ï÷\\—SvÅ¢0èe\\Êûxg¡_ãˆã+P¯HŸ8nFö1xÖóÅ(hKİVoX0¡jß?YòÛ§Oÿ«}< ®…CÅuùôğÑéÅùíqñeÅÅ»w\0ËÅßM…Vö—¼bÍtá…_Ÿ¿o@\\84æTlÜîs-ÅSg8FHıT<lL¹¼¡&¶çÆôáÄÛSÇ¹¸KÁDqÈu7Ú±Íû¥• ×&œËs]Q\0¯\0â3§ÓÓ³¥œ{…ü“œ|Ô\r[Ï VãíÏÈtÖ¼—¨àä:ÀƒÎ<OóCİÂ¹ç\0ğïÆê1İ‹ÇT4à;k3ÄQúGMJ–¥Pizöõì_|µ÷zmQy-İ7©ßUÀ¥İÛ/T;å¡…Q|!=—ü›İ´uñ—qÏÄM’›¼Şr`SeÖˆrW¸¶¸ÛŒå_FÒœwï¿WDµ»4ò¥ÆéuÒ±ò£qWû‰UÊØIœ¬U?-‡,OJÆö·3´¿-µ Å©nîKËIÌ5ráMÀ*W¯ \ruAüyM,2­­µphuÖÈ7&¨8®üüÂ²©WÑøÚ­Zìù<Âm\\à¦\"÷6[@íD\$‚î€èî¤UspCtHj î’Y>é åƒ	\0Åöo¬ƒÅFé5+Ş14‹¯¼®Ø>%W·ˆsiOO-ÛKóUÊm¬×—ªÜá[V2iIÜ×\\Uk3×8m¯ï;8wœåZÓ<\rWÃeP[Îl¬ô;Zcf\rºu”Y«¤±_Vï¶³¥?;;9Zè+5´c`˜Ì9•À„(FÒ›H81³æ 2†!F€¶Ïª…€¨_„ËFø6`ŞcZ€€¶Ğ\0'ƒFW`ç²XÃÅh[¸<ƒI…_ø?sĞ3}a ß=„£Kù'UÏ›KúóïƒVm14Ğ£M¸>´0.f4cĞ£N?áWÑsOd\$4úÓª€<a‘…r„f9´é…›4£½8A¤¸¦=SÑÛQ<ô“<ì^¢¹™]Ò.¸mÈtí°ô¨G@Â{µÔnÖµò6ÙÒßJã6RØ—K„t6\"Ú‡JuªtÍ¬»]ı+tÔ0Ã‰í‰\$©Ò¦°mÊ7ßÓ)AÁ¯tìàÿKtôß—Nı*qmÓû†OLt‘ÒĞEmôÒoQGa¦!p+®êu\0ì¾/9j‰Ô3Ó]t\rÑ¿IoPõcŸJ`\\Ø})u0¡ëØ=ô,Ñ£]H°ÀÕãÙXVS›ÏOAôC`Î”mÒL²“Œ}Eù*3™Kuy\nnV¾å‰T'yBÂ	”ÎQùiÃ;\nL+#éÇH’“ŞdµeÙ|3beñ&‚:qŸc¹K9€«˜+ñ¹ ¾{D|°qÆmfFÅôQ¹‰?q‘TGïÎ?ıo^PF”ıü\0¯ØÆq\0T}|Ä÷\0+Ş×õı\0N5à¾túÜ }¿×ããƒ¿äùôxó4U×?’:Au\"{æ’OÆå”øêÅ7#pb¤E!doğeÇ´ò-@­ÄsÙ%Ç;#ŞOÑ¢ÆyóüòûFƒìhFÙäjP˜CØÑyr‚½±>C½£öuì}ñíG±ûDf4AbMòz´UÚ¬ClæCQ¬R© <(ÓÅı d9H%\"lM’ÆöŒøü‘ËDÍTz(ØÇ/\$ü_ˆØÈe\nä—1±C…\r´ˆ±s\0ù(ûCò#£7\"|ŠÒ)Eã\$4}IÑT^I&A£ÜtOÊÉ\"4’m³ƒ%”ĞÁÅ—%ArlI\\ı‘kEùä˜é§\\\røÛãc—D1°Ô¿&„š‚wE\n.7MÅ7&²3ìõû\0<_lÄ°Ğü¦Y„D®Îd‚™ƒÀß*[ñ€ˆÍ¿IÄ¶»›Q;àà;˜MI]¡S/[hS¥î˜ÍŞ!ÔÔ	…üİğOŞïü‘{œ¼åÓŒ–ÿ2”¶Ó*fÕ4j”‡÷™NÈÖ…MågŒÓôˆÇØ}åq®5>€İÜotºò6 ;¹NpaOx.Då³Ñg%¡fê[7ÁH°K³\$“WÎ,äî@‚\"á*°™+”“@P‘¥­º\\U°VÈiãì‹‚Ö3@Š=ŸÕ^3´èW!´—{·»\\©t˜h^S¾	lÛöqÖ‚°Dÿ›•íi{]QÌr\rï+nM?ø²Ss¤‘ùOÃ|[AÍ‹’\rïâºÅÑw3\rfÊ?(´ÑÌäá‘_•û¿ğcÕBxÍKWiÃUEÛBõ§¼íò±vŸ+·«ŞS@İBäÍNX«èé—'tÙ½\\Ùê2l~İõ\\„Ñ¿eX!{ïƒë7sö9#¯¯‹|ÒPN`QAº)ò^ãšÚy9Q†ÿ’ÖZÀë#f¼jaCÿ”³L‚g5Tí’»w·YµÇt ÎYùSÊÅêõk¹åBN <Oj¯GoT`‡¼£r[yuyÔÇ;ÊuZs;q—uïÏ];{9uæ‚I\0–ãq[¼ólÕF3}tnÏ0ò Á‰å\ræÌCJ&ô3„Ÿ=ìü§ÍÏÏDÍ2\rˆe™5}såÑ@.İ\0ÛÑ¢Ê^zYÑÀ'€.ô*†CùÎÕ7S¸fæ \rË)8#G€gë%‚V)Ï\0a‰Lìf(s˜ \0b¸\$¨Ñz8¸\0€hŸ¤@9ú:À`¡øâß¥K8\0jŞ”ú:°\0\0ké·¤€úIéç¤à\0oé²Ì€ú[ê \0z…é·¨@z“ê`ş–ú‡èß¦>–zsêbÎ\0\0sê€ z_èà–\0mêÿ¥@€n°”z©èè \0nçÏª úuêg£ş¹ú×ê®@zyëBÎ¬\0oêW§€úÓéß®ş«z§é‡£à€rŸ¯^»úNÏ®úr—±¾Ä,Éê×°Äz=é²¾‘úN·¦­\0Ä°~ÁúÉèï¤€ú·íŞ³zìÎÜÒ\0aì§µ~Íz›í?¨^¿ûCí·«¾ÃúÀ‚k>ÚúÀÏ¥ÌúÁég±¦\0sëÿ³¾˜€d¯©~»úÜ‡·~‘úÑí/§€úgì¬ \0kî7®3ˆúéë—·ä{«é¸™úyê—­^Äz£è÷´ş³{H¢B@1û(‡¬şİ±_ï¿©^ßzËìŸ¾ÂúÓï÷£¾àzÃêç®Ş÷zÏê©à\0sí¯¶>³z´™‡®şÖûµêg­Şû³éÇ¾>“€gïµ¿üAîï«^¿\0sñª>¨ü)ì×µ |ìĞ\$©¬úyî ¿\0Ä¨\$±üQî û‰ğ'§>Åû…éˆ {¿êç±~¤{ñ_³ßz§Áş¤N#ï/®^îz­ñG»_{” ŞÈúÏêOÀ¢ú]êg´¹z¹ó­~¿üîo²^Ò{qğ—Íø|£óOÊ{¥ï—«–üãò/Î~Û\0iïÇÊ@ûÏé_Á\0ièï°>ê|_é±ŸûYğ—¤ÿ-ûIì¹AúÍé÷Éô{gô¨_\"ûãîĞ^öúÁê°»ü‹íÏ?T|+ğŸª£|­ó§œ€iïÆ¿4|ëGÈœ{“õ7±_ zİô?®Ÿ({¹ñ8_EúÊ§¤ÿíÉì_Ğşz¡ìWÍû)îW¦~—ü#ëxczëî£•şûzóÿÅÿkı‹ò÷ÃÿúÀÆ¿aüïoÜ^¾ıMéŸÓ>Ô\0gğÒ@oz“î÷Ìí|GêoÔ_\"{µò÷¨?7úÿö×©¾Ùügé/àÅziòÄÿXûg÷^™N#òµÅı9íoÖ~¬}ô—¥şıı¿õ)¿{}ë_¨¾ñ|õß¶ßü	ô¿Ù {—ø¢ÎÅ~)îĞ\$¿•€gòçß¿ŠıÙ›€còç¯`’şaéÀŸ•ıÿú7Ç‚z­ñ°?z]öÁşê|Ÿğ¿Ôß#}•íµÀ~géÈ>öş=óÆŞÙ{Ÿôç¨_¢úéî‡Òßd~ùç´~ÒûŸòÛ>´ú™ìëß{z•í?²ë2zöÑzÛğo¿î{[öŸ®ÿKşaëoÊ—\0mø¢Ì¥}ãôº^Ÿ¶{ê—æ(|ú¯ñ?\nûüßşúûî³‡¶¿¯û¯ùwï_\nû—ù_°_ª{5é§¸ŸÒ}-éoô¾÷~oî_¨?üò/åF|¡ö°_Éúsı¿Ù8¬áéó_¾}[ş7ğ¿ş™ê7¬ß=üqîçá_v~±êÌß:Yü÷©ß{aûo­?w|Yê7÷Ùzóúá¾Âÿ•şÀ¡úoîÆ|÷ñïÎ?ÅúşOÈß2{Kó­?³}yëÚŸG{,õ¥ô›Ú'Ùpé@}Š÷)ô»êĞ¯Î_R>¡Ğú	û«ßwÃĞ_ê½ššùíöCï²ï÷>¸{âõ¡ëCŞ·Û/nÛr?|»\0!éûêg©ÏãŞÉ¿·|ÔúÅút‡ñïvŸú½w}ĞôyëóØ'Úú^ú½cz¢ù&³Û¨OIŸ\r½f{Öô‘øKÕ×ıïß`'~÷øËü˜Ï…Sˆ¿9~bş]íà(Oş_Æ=i}ğöê‹ãç¯ïâŸø¿~ØôÉö+ï·/t^Í>•€Ô÷î{íGæïVÈ?0z²ùyñ«ûGäZ_z?!€|ùıó‹Õ½P?A€tù¥òûóª/jŸ ¿™|Xøö\0cówªï…^?0~^ûiëù/GÅ² -@†{qş\0D\0·ÄÏ§¾€|Òôåî×HJ^¹=&:÷Iîüg²A?¯|zûíîÔgñp!ŞÛ>Üz€ùUôò¸ß¾Ñ{ş-óËúØï Ÿ %}çÃæ—Æ¯ê@ºzÜøúëç×¬âŞ§?A€°÷î¤gÏï—’ÀÏ5}ë+ë‡Ú/YàA¿ÿz[©öÌÇç°8ß‚=€âùÑúl±œ¾}bô™øƒã‡ºßÂ¾Ø{”õ9ğëèwËZ=%”÷¹ì÷¸obŸ½Ä€æşj\0ãê7¥ÏÖŞ“>#€|ûvü\n—Í/Zt>­ôöié<wÅ[Ÿ7½Œ‚*ùì9Š÷ûP>_\rÁ\"ÜÿùèãÔXš_\0002zàüİé3÷÷ÎŸà¾=|€ú]òóà÷ÆOh–>'~Öşèôg¦F^•=E~ANœ­¯¥Ÿ,À~µü#ıø&Í¹ˆ½:µ¤	#ï²^ãß?d}fÿá÷œ	÷²e`¾'N#\0aêëñ§êPSb?‘Ìÿ•ñcÙ\"°O^ =nHô±ñXÎ—Ç¯[ ¼‚”ƒõyüÛ÷¸)ğ^¿½ñ‚ú}òëøø30K_s=1\0\0ìÌdà_½,\0ùıîÌ\0·Ö3Ÿ|Á{4üşÛŞç§0`0@z‚ ÷Qód¨d½ ®=ĞPøÅó#Õ§î¬à5?›€¬ü*Ôgù/¶^®@¼zFô–tˆš_rÀ]zmú,	‡¯Ÿb?pz“îcÕ£Ğf¤¾o}˜üşóä×­ÏÛ>Å~ ÿŠè÷ú‹à™>FzÂÿ…í+ØÇåoƒŞì@{zŒÿÅëåè ^òAìƒóùó»ÿ85ïXß=¿4z°úù€WÆ¯«_…½w„%yï{ìÕP/`É½Ç\0Â4h2/ò`¿@î‚–ÿ}úéë÷›~Ğy²Qî²8çÄt ˆDˆ’?)í4]AóÏˆ³>?f‹­*1H1Ğ›!áu¤’ú¨}\$fĞa\"¡ˆAb™F´Ë™‰jC\r	9ÂD—]hX¡-¢ÆCÂII‹”XNÏı\0(d^‹	ÛqõK°š‚!äL.ƒ™Öû%´P@¬¡!b„àÆµØÁı”P!33CEŞÍ\n@\0)‰kÕº3]\0„IÍr.´Lqh¢Hf˜~Ø>È~àj @€L®}¬?y ¦FgÚÑöÂœGt†…¼\$øKGÖÑö æ\0¦eAÄ™ğ–Q~\$ŸA	\n ?#ºøUˆÏ­¡ÜEy\nÕ‘â.63çÂ¡;±â„å	ìûZ/âT'í‰)%fßä8\"Y—ƒ…4ae8ˆ'–kˆ†E ú‡Ø?@ÊHübXÔ®\nVÎ;œ…ªÌ@>¼-ôy(aœ H„ÊëPRBÀ¡€(G,˜y“áïçYP™Y¨ƒT=Ê€ØJ×al×¡ >\"yƒ*8LP½’z'Hj{¤ÿ2.2Mì´CòÃ\0‡\nLÄ0äx,´!‡²}†Œ(£-hR@a[u/´Ô1”.\r<Mü‰òr.‘Ödº€ÕŒ¢€†‡\nd%ğË\r…>Iâc-˜g(.!\"£¨í5@E†äM¾¥f+(†Zb¨]¨œ°³E…‹Œ\nBÀ\$­åŞÒÛLJÎŠô‘\$3T\\€Ğ\n ?\nî@¢t` \n!±äwDy—\"Nèf!û\0*€BB%'³4Xl¨ÑŠ!d\0„ŒaBa(b•¸FÆf*@†\\P¹!0CB@¬\r-9ÑOp¥QåVÑñ.bXàUè¬Q D-\n˜\\%\0	%QaB§…S\nÈ\n´9¤“¬ÑY Ã›ID‚Æò+6„¨P ¾L@%¥à„5§¾Ñ8 >C]a,9¨vljá*=?â.Ğúé4¡Ú££‡ŠÁ‹BALxQAŸ{\nëÁ(-ä7p¢E2…[`XŠ=”/(WĞáÑR²öEÆ“…0ÂÒ3ˆÈÚ!\r\0®Íœ7Ö\$iÎY²#p…ØµEë5ÓˆˆÃï\"wFp—ä\$”5îÀ@Â»¿¨¼İƒˆĞp.#Áª:İ…n\0¢ 314B(öÀ! Œˆë“„@TKÀaR ƒTDz|*Wy‘4ŸZ\0P•52DA¤a UÀ€LCÈZtÈ¸À,ÔGˆˆ¤ı³\$=L‘!tºådºFa¬\$”É`\nÙºòdúôi x]¨=ÃşB°…T%ªdCä8¡÷Oœ ±H4}*\"\$˜HğÚ¢²F…Š\"\"Rhi):¢,‡ÖdNIá\nxM ØĞ€O>z˜V\"Ë%8.ĞĞÃ#ÌG,Š'`8IÀİ†2]d¦ˆ\"ô7‰1YA»E£e\0l)¸ŒÄĞ&’\$†ĞG–#œ=È†Ì âBÄp@÷:\$[14\nq\ná€ù„Õ\r4I2Mè 5DY‰4IÁ@}ä°®™,¡‰ ~Ü÷[¼ßŒP\0D˜CFÆ\"Ì%ˆt0¨âHÂW@ö”ìıû(ˆ‹)S  ‘cÿ’KÈ‡hdâ²]BH’Î&+(3ó±âW2nL)ì%d9‡êQ DYC>‚á*cör\"kÈ‰’ÌL”EVH,›â ÷I¯e#Z\nXÇÂ¢t ùAc®#¢ˆQ\"`2r‰¢~&'B\"˜ˆ#\"sDF‡@\0®ÔOÓßP»\0&ÄY@ÖÉü( Ñ.¢f€+Kóe\n\$E˜zl·á™C<ˆ³•\"è`w	!ÄBcÍd@x£äfILÄ:EeöS)“7Áü\"!3„‹ü*¸–p»P˜Â‡?á9#E¥ĞÀ\")¢¶ˆj„Å8NĞôŸB7r)K)è1ÔDbˆÇ#0˜Ra\"ÄjŠ¨ÇÕHÔ7ñĞBDò‰y”ÌGta÷ĞDzŠg™\"\$y‘â«Åc\0‰\ns)˜‘±!É(DôAµ1ö˜‘Ìtâ´DŸ†]Y\0ìWÔ±&âV«Šñú%\n+TÅñaâSEwŠâÊz\$ìWƒê1,\"¼D²ŠÑ	‰›4ÃÈ³Ù(ŠÑ	“*È¬§¢ĞCCÜ~1	ŒLt\$Ğ¸b¼DË‹PÊd>ºHš•aß¡Å‰©\r+ÄMq-mOÃ\"ÀŠÑ¢,|\$Xœ1kÙODä‹‰	'<Wˆ1;À*ÄoŠÑ.*Ü+Àı‘W¢»3Ee}Ş.:HFè²\"ì‡ì‰ôb l\\øŸÑL¢ËÅ4e3\n(*ˆ­Aİd»\n…ÎË\n(d\\3Q{ÙOEŠñM²ô‚Z\"Œ2IµlıQØ±Ìz\"E%†×ò&ó0¨Frâ–BŒ¾ô+¼æ£!Àc¯Ğö›0¸¦ÑXĞ’QŠt|	˜ZFè®±OÆ1ïcG\$a”±RĞÅMˆÇ–#</¶=U£ ±ŠÄÇ¦.l]#ü±u\"ŸDŒg²#ÄVX—±…Äwo=|W´[q’\0«EˆC§\0<dÄ'è\"J!|?UJ2qşROb‘q±ı‹ÍDYÆ±+ã02%‹-˜\\Y¨—¿¢ø±è‹J„z%ü`6D±›âÿğŒKÍ%”Z¸ÎìÂâ×FR‹bH9ä[D0ÈÑËE¸ŒÇ9D[´0ÇÂ_ú„ÊÈAôMˆ·‘6á²Œ,\\8ÊQrcC¡2A}F2ë\"Xº\0U¢xE]IÛö3“0´p•£MÅØ‡î4ìaˆñ\"³Æ˜dEò4ë\"8ÊQCã[!ø?éô\n´_„/l—¡™ÆÀC\0Â(Ì_ôÆ°÷½—’JÂéX|ò8è##’	\0–}\"\n8¤‘µ¦C¶´@úÔaû@\$€IÇP>|`Èˆ'Ğ<š(D‘¶)‚[ğøcx¤IÚëJ7'Ì\0\0'BĞZ2Š.´¤h6Â™\0–ƒ„h1óël¨!—ÂºH”¨ûY…\0\n½Ì(C\0†*”)‚NQÆ¡ØFW>·8D)„qÂ\0/±ê…‚A|,Cô˜£{Æï…‚‘˜ŒÚ \"=QËãp‘©^N9iş˜æéÒü\"»L/qÆ5ñÎb!ÂÅc÷ò:2È×PbM¢ß\0œG:<hV±Ò!]#«Ñ(p\\±À/Ÿ\0œ”Î“%d¾©}ÃëŸœ@ıÎ;³´j(ÒQ°vl—á\n\n_X\\ÑÑõˆØ‘}7\0úÚ!uDl‰Ù´tH•°»¢K agô>’6¨ğÅÓ\0FŠ<C¤\\hïú€Bùº<´yóÙ¡oÆBFÿÖ)¡øóÀcGˆ¾şÑ!h©qê\$»\"A˜øìzÀ.È£ÒÂêE‘9›èŒDj\"	ÂîcØ]˜L{d†ÑØ\0'CÔG,{Éİ;!¨^ÑY#ÜG¯…ı®=#­(ùqô!Í#ëFfôÎ\\{´fhûi\0¾~^>â „ƒñ-Ğ/Çá¼I2\"/´@ñ÷¢Õ‹…íu#\"ØÃì×£øGtˆk5D0Hí¨K#ËÇüŠ¥?äy¤%‰#ş¢j	 \n@2øïğÈ5H\0Pî*7 ş!;ãòŒ#N‹¾!\\2)&âƒÅ~„’A\0ì€è¯ÑªÒz ñ°Œàô%ˆæÃì\0M>™	ázFØX±&ä#<c¸Š%œdr\rQm#À†ÇµäƒTj’a›!/‰«!â\$òéQ ÆFÎ‚2Bdnà	 Ï§#²4˜ôB7ğúRÓ£<2r3ÈóQÿÑ£;9FvŠöLtàúÒ ‡ı>)\r`ıTo)È¤9 meí<~8ı0™d<’§F\n‰Cz6\n€Ğ™²É!íè9Öá°H‚ĞLKT6ËÌVd/Ãd\\½\"V7”y§ph¸ã˜¢_‹úˆIÈX¤\$]…öDKLPTÃ bÃC‚ĞZ9)÷£Ü‰@Ãô²P‹•Z<:2”pàÕî#‡Ã\"õ•û0„N¡ô\$J¢uˆ<îBd9²HDpŸ€Ld€>F\\…è|2£š¢ÿEc#E\"é§ã\$?H‘» š7|x8sˆ:#DÄÙ‡,{•İp	ÉCañÃ”=Ë•\0zMD¤i’ÿHÛ‘â{âGœ}ô±º¤ál£2@%:ø’\0NAÂ-´Ç¹¤€é…öFÌ:tM(€¢åÇš\0 \\\"(v\\éˆ\$ŒGÖˆ¾\rPa èóDj· Y‡€™\n\n „N1Ød•ÇÅ‡j…®@Ì<ò7érCµCÄIŠÌZÈvF‰Ó \$’y’+*4‰Gq‘Ò…ûÈ?Ln\nèBá2£á„fú|u¤I*PÈÚ‘*“^G²VGÈ\$2CJ@oº@rS9±Ü!}Éb\$¥%„ŒäkÄ¨‘Š2H¡e¤²[€<Ç\"â–7Dh™ È#Y@ 7J•\n4i, aG e\$ÊUğ}™\n’\"Ğ?\0¬‰úLtvÔshŸ€*ò@o\rµÜ„t¨äË¡A.ƒ†Lôy©4ôÑâIWKòMTĞıÇå]ÊHíAÉã³Äòl¶»<“Xf±,*„2XP9HC“jMš\ryÒZ£}\"w„~ÈúB@„š¨#\"Ÿ„Ë­)ô‰ROlQ¡É·“\\È7;b3g¹!Ÿé4Q^NòˆóRxdš#HZ ,sãñ„tãwD…÷&D¬šxóIPc¶€V7bĞ€˜ À6 †d»3]“ì:OÄŸ ’[ä¸‹k\nŸ¦P8áv¤‡2-·Å\n•N8Û‡…Êr˜-š049ØëÎ½Æ{ÁH’ñäó±„‰@gD~1™¤4ØØiğP1\0Œ>(ÌğâfÁ&ÀÍœ=(ÌsC`3Æ‹CÊbŠÂĞ±Â¿wH¡›ÂG®Âü@àÕ=¥\0lOÜ9c{@ÀI\0\0/\0ÄüşĞ¢æ÷Ü,†Ø'[8ot¥ÃiÌ%/½I”ÂoZRèbğ¯€\re3±…6)+àiM®å/|\0o)ÎSL¦P%1…µ”Ê\0æSä¦ùOÀI\0’J[3)zRÈz šš%>ÊˆJB–T\\¦éPá‹å,€3•\\…8P’¥å2JY”Ù*FS¤©@\$²œ¥PJy”³)ŞU,¨ÙTOúeNJ~”³*UL¨)QÒ¡eXÊ“•2ıòUl«9RÇ¥FJ²•DıvUÈb÷´¯p%`€_•‡*ìiT«ÙVĞQ%EJ¼•%*b\n\$¬‰LR¯€/ÁD•-*ÖV„©©X°Q%OÊÎ•C+VU­·æ²¸¥VJØ”ÉU„­éO08ÀJÅ|—+6VL¬ùL’åiJÊ•0ù.V¼®©U@ß%Ê›•Í)ùò\\­Ù^2·ß%Ê¤•õ+Qò\\ª‰`ò­Ÿ%Ê{•ÿ)yò\\®™`r^ÁJ´–+İî¯	ZrÃ 8JÅzÑ+Xxbùcò½eyJ~–?+æXœ¯¹cò¿¥‹Êd–?,\nXÜ©‰còÁ¥”ÊÔ–?,*Y¬«icòÃ¥–Ë&~…,yî®Ùd à’K•í,ºXì´8\$’Ê%˜ËH~-÷Dµ	f’Óe?= –A,öRôµid’·å«KL–-VVÔ´8rÑ¥’Ê^€W-nSÌ¹kÒÙCÀ+–Y,æTÄ¹f×å³Já–Å+[¼®YkÛeŸËw–--ÂS#ÔéWß¥´Jû—-®Vü¸)mòÕ%ºËQ–ı-N[¤·Ç£ò±eÁK<—)ú\\±)q’ß -K”{g-’\\KÛ9p²µ „Kˆ–Òü>\\óÜùu2ä%¶\0_‚,â\\Üºç¶rå¥Ø–d–¯.^Rô»itr­¥ÛK¦•÷.Ú\\\\¹òí¥¹Ë­—m.²Vü»ivğ¥ÛK´—™-ö[Ü¼9h2±K2Kƒ—£/V]Ü©‰z²ï¥jKÕ—ƒ/ïL½G¸ò%<ËÕ——/èì¾'µRø¥ÎËC{/.‚SÈWÉvòìeùKÙ”à•ëL¬Y~R÷åoËò—‹/ö_Ä¾I_rü¥ó›å•)¶`4¿™R3eïÌ	—‹0&]dÀ™€§1@’ËÎ:0QúÔÀ‰‚’ßÎœÌ–É0ëlÁ¦ğ&€¡0”áD¾sæÌ˜'0_LÂ¹†æ’Ì#—Û+:`4é…¥ÑL;7´öÎ[\\Ã™³%ÕL2˜LôÒağ·¶sæ#Ì˜s,H—­¯´ hÌ˜m1Bb“ÙG¸/‹æ=¥˜’ÎäÅ÷­2É&.ÌA˜(üŞcáù3f½-˜Ó1:c<ÃIŠÓ	Ÿ?Ìb}1Úc\$ÁG¤ó¦!Ì#|1ÚcdÇI‰“\n^¥Lv˜å0ìÆ'¦s\"¦3L#zM2*`|ÁGĞS\"¦AÌ<{¡2*d<ÁG­Ÿ.Ìœ˜ó0í\$ÉÉ³	Lœ™0¥ílÉÉ(&LÌ#zA1‰ë|Ë	“ó	¨Ì°™G0¥îÔË	”ó³L°™W2ÒelÂg©ÓLÄ™g0¥édÌI–ó’ÌÄ™w0ıêÌI—ó2&`Ì),É1‰ì„Í‰˜óÅÌØ™—0ıñ<Í‰™óåÌØ™§3rf©Æ ¯“åBLì{g3ºdiÁ@\$“7ÀİÁi™İ3éSß‰Ó9Íí\$™Ó3ö`äÃYRõ¥x›å~ù3nhÏ…ß&z=*—0àæ+÷ÉŸß&JÍ\0™ù3Ö_\\Äi¡s\ræ‚Í˜u4jgSÕé¨f‘Í\rzÛ2E‡¼¹¤sEfz½”šG3şg¬Åé¤?_yÌìN#4ÚhTÎ©Læ˜Í(™å1ºiãÒ§±“M¦˜=*˜ë5ùüÁù¢/¬ævL{šû\"jlÓé¡o—&¦Í,š4^j4ÔWİĞ¦ˆM)|q3²d\\ÔˆsX&“=ßšÁ4MéğŞãÇ™€3A>‚U4kH,‰­`‚æ·=µšá,âk˜È'ÏÉ¦9Í™/5ŠjÔÉ¹©'fÁÍ™ë2†lÒi”³`æ‰Ì©›5aîÎÉ•óR&XÍ”›õ–iÌÏ×¯ód¦©LêzÏ6Jj³Ù)²SVŸÌì™“5!öÌÚi³³?^œÍ¦›C3^jDÍ™¶3eå&Ìì|‹6Úm\\ÏWé³m¦È>˜¿)fmüÎù¨0¦Ì»€µ46ÔÛÓu&àÍV€µ5bÔÔX'ÓW&°÷‚}5*n´Â¸r°&íÍÈš7Tà¤éŸO¦çL1š»7†hÌŞs…W¦êL›­4~oQÆ'«ÓeŞ¯MÅ\r8ûmüÄY¾&ö¯Mãzİ7ænƒÕ©L,cAyˆ”|êÕ‘*>ÆFçÍ#NÆ4Œf\r'j”°»À%ÅûŠp’ÌQ˜P6ÉáŒ¤)Š\nèØÒäHHÄ>ˆ…ş/´iÙÄ‚Zg|‡Ö\$¼iÖcq£Ù¤4Áu	È´§q”£öÉ:ŒÜ•iTgèÒ1¢¢Å‹;4³/ygË\0#¢âZË5lWÈØĞ©äáFRŠêÙ–)ü¹ÊĞ¼ç+FmdK%©Dâ—W‹c™Ë\$‚† T]òJxOsÆ9…t’~*˜v0®âR2]œ\n†\"ìƒ8‚1Cb ¢”BY­´è«(awCÔd¥8B2\\PÔrÁõÈà&ˆÒp¬lX¡“c/ÄYŒÄÉ‚pì_óˆOÄY%3\nı”Kí³‹	LÎ'œ_:ˆ÷JN¤S‹€«!DC‘fqœë6“Ğ{Î9œw6u´YÂ;Dw\"]Îqæ?tëóò³b†Ã»‰µv,iyÒq‚'%1Æû95ÜN„?Ñ;g(E\r?I:úv\\^‚JQz¢†Ådş„ârÔíÙË“·gM2A“ÂŠşuäPÙ-H=çÂè‹P˜\ns4G&Pqâğ ŒŠ€íf¬Wˆé“âù!mâ1¼èX­å‰%Î‰úŠÍ&dèØ~óÁç\nN8b.³)˜ÌN±OÕNŠñ:rqğyÓîï\"´N+U:šuk±H²³¨çÎ¬\0W:¹„‰ùàó¬b¼N6?ûâuÌ]ÓğÓ°\$E©œy•Ä;cßhWçdO‹€ÊâTìæ=““¢å2‘…â.P˜½2*§ƒÅìe…9fzDôÙÜsÓbø¡;e;¢/3)é-L³c_³^Bë=ü¦h§¼Ó#±ÀEg²Ë1y0ôP›Ã9B¡\ra\nÔ‰éÉh c\\Cz‡Á1\0–ˆü²Nä‘²íFQ@T=‡vÈ¤¤¯ÃŞ’¿¹ÒQ´:©!ñ\"€‹€ÇFŒH¨1â¦úW’ÎR|»qÄñ`'ËŠX2NP@\\–}æïSzÏ¢Là£[š~öt	›™ĞFşiˆŸ©R1(%n‚Ÿ“åì…\np>ò¯5àoÓïğKLœ%-0¹ƒsVÕÿµ¶––˜îºgÙø£çä¹GKj•Á¼8ek™®³Sä\n)-2˜€q3öT·ƒBŸ²š~ú~¶ÊTçì©Kï?•½¬ı•y)¿BHÏã-å?e¥ãCÄÊ§hÚx5¶|¢v}ôÿfŸ‰{´ÿhÖØ¦bYNLÅ8;@KbxW€şBÉP²³ÉYy%+¹ÍK2Ö“Ä¡Ã@À1\0c\0º–í?¼0>\0ÊD'9@…¿;5ÕhÀqŒ•Ãºky›šï#A»Ğ.=<ò6iDR³şh4†rE9Êq‰ôªY“ ©_1@ñUºJ(GPK:\n´ö~ZiÃ@Áª,KAUl\\ú\nÃüSO¶Ó2šd¸*jô¢›,dh¯Á\\ğDÊ\r4º'WVÊ=®ÊVØhàŒ®+e\"\\­”uƒ¢\0Q•ÏÖú´Ñ¡Ú¶S4 „1«eMf­•6²œ\$×4ŠÜ€xKæÅœ\n_9õ\"8A‚¥óO½ŞÉÔu``V@;P|\nÈÎíX´´(A\0'kVØ=Acn°fPP§sRm¡B%5Nô+ÉªVŸd«å°}`&”+P…¡p4uÇ‚ô²)²NrğX\\@`©¿ÚÃ\nÉC)q2–Ê¾hN«¡;ø3pºá`ÕPÜi¢¢q^\ræ0`ğÖí”g¡Ä\n*‡ ÷T7šPìÆåâ¨K@æ”<ş®Ÿt Ê†â«¸+7F‹¡9zã¾‡Í	— kJ4š¢Cøè­²…jAâQ¡öu’‡‹Ğ;!Ph\0…xzŸ–ˆº75\0Õ(p©À:†¥]£5Ñ>@À•&œ¢8†‰ Š\$Êp\0×QML¾‰X¦Qb)º°Ñ.\"®Ïlma1€È¶Ñ672!¦Â¨07 ¢…“<zH|Ó4ëLFœM6Úp‹'i½	ğÜAE5¿Kƒ¢Qg\rEY}yô§]Â,Ö1EbŠê‚xq‚™hC©À¡5œD²z™ÿí¨Ã<áèk:]wÂƒĞ“Mÿ?´óÀúÃYÀ8Éw¥B`±*­Fh*ÂZRàÂŒdŞÎg/XV:Ğ1z§\n1Ôbå/,Õ£æpjû2t_×-TÒ8h\nËiš2ò—›€‚L FQªEF¡fÃÕ²Q¨›F©Ç8›iñ”a“C™£6Ó¢Œz‹%ônMHw%€¬v‰èÖp.ªÇMI®ì&¬pÕ\rÑ¬ôqLG¦£–ŸØL3Yz´sÖŞP)Tâş bğ+sòÎõ5y£¹G‹j;'­\0¢™h£³?ò}¹õ`aYĞQxfZŸD³@0Ê©kÃÁ¥‰NrŸ*£nª>OçÒ´ AG±¿ dz@\0À¨fN¡œŸ*øEPÊ®^(äR¤OB½ 0Gt‚gÚ¥À¡ˆÒp!Êİ¶€~èõ'¦¡\0K‚- :-ä©›gêæë˜0#®`Àâ´\0ô\rÔ°¸UĞÿÃŸÑ5¤dµ€m	êséYÒ22”Bˆ­™ş Õ'úQ¿\n¢ö~Å\$w€\nÈ	†næ\rR	®êJ\0Qe\$§¤¦%XèŠ`\nQªS,w(&’Äş\nL‡@ğÒWx§@ğÌÔç4šAõR`\\!I\\`PÚÚJíd”ŒRsk DÇ-%sWô‹gSójP«u&:”í¹êt0Á€Ò¡A·C†–\\û0¬;v” E¡&ªe#‚'Mœ\$¢ÿÃ²\0iLÈ“ò·É/óÑFk@Ì5©7,D0W¢æ¶\0(­&rI¬X2è@âHÑHb>a~•˜b4@ÓG9¥p¾ş•İ)\084«ZzÒ²¥€\nPªoğô®@:\0O8Æ\$9o\nÆ€2ÒÄ:[K0áÄàCÙ°‹)AÁ¥\nè!äRjuø)•g÷…yxŞ{;u\0M€Â»ß ÀS\$èÁÔu2	·Á)¦aOÄ©|£h•iÃk\\3VH£å=ˆ<¯\0");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôa8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wş\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹”ªÓ²Ş»\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($t){$Kd=substr($t,-1);return
str_replace($Kd.$Kd,$Kd,substr($t,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($Bf,$Ec=false){if(get_magic_quotes_gpc()){while(list($x,$X)=each($Bf)){foreach($X
as$Bd=>$W){unset($Bf[$x][$Bd]);if(is_array($W)){$Bf[$x][stripslashes($Bd)]=$W;$Bf[]=&$Bf[$x][stripslashes($Bd)];}else$Bf[$x][stripslashes($Bd)]=($Ec?$W:stripslashes($W));}}}}function
bracket_escape($t,$La=false){static$mh=array(':'=>':1',']'=>':2','['=>':3');return
strtr($t,($La?array_flip($mh):$mh));}function
h($P){return
htmlspecialchars(str_replace("\0","",$P),ENT_QUOTES);}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($C,$Y,$Za,$Id="",$Je="",$eb=""){$J="<input type='checkbox' name='$C' value='".h($Y)."'".($Za?" checked":"").($Je?' onclick="'.h($Je).'"':'').">";return($Id!=""||$eb?"<label".($eb?" class='$eb'":"").">$J".h($Id)."</label>":$J);}function
optionlist($Oe,$mg=null,$Gh=false){$J="";foreach($Oe
as$Bd=>$W){$Pe=array($Bd=>$W);if(is_array($W)){$J.='<optgroup label="'.h($Bd).'">';$Pe=$W;}foreach($Pe
as$x=>$X)$J.='<option'.($Gh||is_string($x)?' value="'.h($x).'"':'').(($Gh||is_string($x)?(string)$x:$X)===$mg?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($C,$Oe,$Y="",$Ie=true){if($Ie)return"<select name='".h($C)."'".(is_string($Ie)?' onchange="'.h($Ie).'"':"").">".optionlist($Oe,$Y)."</select>";$J="";foreach($Oe
as$x=>$X)$J.="<label><input type='radio' name='".h($C)."' value='".h($x)."'".($x==$Y?" checked":"").">".h($X)."</label>";return$J;}function
select_input($Ha,$Oe,$Y="",$of=""){return($Oe?"<select$Ha><option value=''>$of".optionlist($Oe,$Y,true)."</select>":"<input$Ha size='10' value='".h($Y)."' placeholder='$of'>");}function
confirm(){return" onclick=\"return confirm('".'Are you sure?'."');\"";}function
print_fieldset($s,$Pd,$Rh=false,$Je=""){echo"<fieldset><legend><a href='#fieldset-$s' onclick=\"".h($Je)."return !toggle('fieldset-$s');\">$Pd</a></legend><div id='fieldset-$s'".($Rh?"":" class='hidden'").">\n";}function
bold($Ta,$eb=""){return($Ta?" class='active $eb'":($eb?" class='$eb'":""));}function
odd($J=' class="odd"'){static$r=0;if(!$J)$r=-1;return($r++%2?$J:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($x,$X=null){static$Fc=true;if($Fc)echo"{";if($x!=""){echo($Fc?"":",")."\n\t\"".addcslashes($x,"\r\n\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'undefined');$Fc=false;}else{echo"\n}\n";$Fc=true;}}function
ini_bool($od){$X=ini_get($od);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
set_password($Nh,$N,$V,$G){$_SESSION["pwds"][$Nh][$N][$V]=($_COOKIE["adminer_key"]&&is_string($G)?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$J=get_session("pwds");if(is_array($J))$J=($_COOKIE["adminer_key"]?decrypt_string($J[0],$_COOKIE["adminer_key"]):false);return$J;}function
q($P){global$l;return$l->quote($P);}function
get_vals($H,$e=0){global$g;$J=array();$I=$g->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$e];}return$J;}function
get_key_vals($H,$h=null,$ch=0){global$g;if(!is_object($h))$h=$g;$J=array();$h->timeout=$ch;$I=$h->query($H);$h->timeout=0;if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$h=null,$m="<p class='error'>"){global$g;$qb=(is_object($h)?$h:$g);$J=array();$I=$qb->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($h)&&$m&&defined("PAGE_HEADER"))echo$m.error()."\n";return$J;}function
unique_array($K,$v){foreach($v
as$u){if(preg_match("~PRIMARY|UNIQUE~",$u["type"])){$J=array();foreach($u["columns"]as$x){if(!isset($K[$x]))continue
2;$J[$x]=$K[$x];}return$J;}}}function
where($Z,$o=array()){global$w;$J=array();$Pc='(^[\w\(]+('.str_replace("_",".*",preg_quote(idf_escape("_"))).')?\)+$)';foreach((array)$Z["where"]as$x=>$X){$x=bracket_escape($x,1);$e=(preg_match($Pc,$x)?$x:idf_escape($x));$J[]=$e.(($w=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X))||$w=="mssql"?" LIKE ".q(addcslashes($X,"%_\\")):" = ".unconvert_field($o[$x],q($X)));if($w=="sql"&&preg_match('~char|text~',$o[$x]["type"])&&preg_match("~[^ -@]~",$X))$J[]="$e = ".q($X)." COLLATE utf8_bin";}foreach((array)$Z["null"]as$x)$J[]=(preg_match($Pc,$x)?$x:idf_escape($x))." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$o=array()){parse_str($X,$Ya);remove_slashes(array(&$Ya));return
where($Ya,$o);}function
where_link($r,$e,$Y,$Ke="="){return"&where%5B$r%5D%5Bcol%5D=".urlencode($e)."&where%5B$r%5D%5Bop%5D=".urlencode(($Y!==null?$Ke:"IS NULL"))."&where%5B$r%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($f,$o,$M=array()){$J="";foreach($f
as$x=>$X){if($M&&!in_array(idf_escape($x),$M))continue;$Ea=convert_field($o[$x]);if($Ea)$J.=", $Ea AS ".idf_escape($x);}return$J;}function
cookie($C,$Y,$Rd=2592000){global$ba;$F=array($C,(preg_match("~\n~",$Y)?"":$Y),($Rd?time()+$Rd:0),preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;return
call_user_func_array('setcookie',$F);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($x){return$_SESSION[$x][DRIVER][SERVER][$_GET["username"]];}function
set_session($x,$X){$_SESSION[$x][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Nh,$N,$V,$k=null){global$Sb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Sb))."|username|".($k!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($Nh!="server"||$N!=""?urlencode($Nh)."=".urlencode($N)."&":"")."username=".urlencode($V).($k!=""?"&db=".urlencode($k):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($A,$ge=null){if($ge!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($A!==null?$A:$_SERVER["REQUEST_URI"]))][]=$ge;}if($A!==null){if($A=="")$A=".";header("Location: $A");exit;}}function
query_redirect($H,$A,$ge,$Lf=true,$rc=true,$zc=false,$bh=""){global$g,$m,$b;if($rc){$Ag=microtime(true);$zc=!$g->query($H);$bh=format_time($Ag);}$zg="";if($H)$zg=$b->messageQuery($H,$bh);if($zc){$m=error().$zg;return
false;}if($Lf)redirect($A,$ge.$zg);return
true;}function
queries($H){global$g;static$Ff=array();static$Ag;if(!$Ag)$Ag=microtime(true);if($H===null)return
array(implode("\n",$Ff),format_time($Ag));$Ff[]=(preg_match('~;$~',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H).";";return$g->query($H);}function
apply_queries($H,$S,$nc='table'){foreach($S
as$Q){if(!queries("$H ".$nc($Q)))return
false;}return
true;}function
queries_redirect($A,$ge,$Lf){list($Ff,$bh)=queries(null);return
query_redirect($Ff,$A,$ge,$Lf,false,!$Lf,$bh);}function
format_time($Ag){return
sprintf('%.3f s',max(0,microtime(true)-$Ag));}function
remove_from_uri($cf=""){return
substr(preg_replace("~(?<=[?&])($cf".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Ab){return" ".($E==$Ab?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($x,$Hb=false){$Cc=$_FILES[$x];if(!$Cc)return
null;foreach($Cc
as$x=>$X)$Cc[$x]=(array)$X;$J='';foreach($Cc["error"]as$x=>$m){if($m)return$m;$C=$Cc["name"][$x];$jh=$Cc["tmp_name"][$x];$sb=file_get_contents($Hb&&preg_match('~\\.gz$~',$C)?"compress.zlib://$jh":$jh);if($Hb){$Ag=substr($sb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Ag,$Rf))$sb=iconv("utf-16","utf-8",$sb);elseif($Ag=="\xEF\xBB\xBF")$sb=substr($sb,3);$J.=$sb."\n\n";}else$J.=$sb;}return$J;}function
upload_error($m){$de=($m==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($m?'Unable to upload a file.'.($de?" ".sprintf('Maximum allowed file size is %sB.',$de):""):'File does not exist.');}function
repeat_pattern($mf,$y){return
str_repeat("$mf{0,65535}",$y/65535)."$mf{0,".($y%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($P,$y=80,$Hg=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$y).")($)?)u",$P,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$y).")($)?)",$P,$B);return
h($B[1]).$Hg.(isset($B[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",','),preg_split('~~u','0123456789',-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($Bf,$hd=array()){while(list($x,$X)=each($Bf)){if(!in_array($x,$hd)){if(is_array($X)){foreach($X
as$Bd=>$W)$Bf[$x."[$Bd]"]=$W;}else
echo'<input type="hidden" name="'.h($x).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($Q,$_c=false){$J=table_status($Q,$_c);return($J?$J:array("Name"=>$Q));}function
column_foreign_keys($Q){global$b;$J=array();foreach($b->foreignKeys($Q)as$p){foreach($p["source"]as$X)$J[$X][]=$p;}return$J;}function
enum_input($U,$Ha,$n,$Y,$hc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$n["length"],$Yd);$J=($hc!==null?"<label><input type='$U'$Ha value='$hc'".((is_array($Y)?in_array($hc,$Y):$Y===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($Yd[1]as$r=>$X){$X=stripcslashes(str_replace("''","'",$X));$Za=(is_int($Y)?$Y==$r+1:(is_array($Y)?in_array($r+1,$Y):$Y===$X));$J.=" <label><input type='$U'$Ha value='".($r+1)."'".($Za?' checked':'').'>'.h($b->editVal($X,$n)).'</label>';}return$J;}function
input($n,$Y,$q){global$g,$vh,$b,$w;$C=h(bracket_escape($n["field"]));echo"<td class='function'>";if(is_array($Y)&&!$q){$Ca=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Ca[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Ca);$q="json";}$Uf=($w=="mssql"&&$n["auto_increment"]);if($Uf&&!$_POST["save"])$q=null;$Qc=(isset($_GET["select"])||$Uf?array("orig"=>'original'):array())+$b->editFunctions($n);$Ha=" name='fields[$C]'";if($n["type"]=="enum")echo
nbsp($Qc[""])."<td>".$b->editInput($_GET["edit"],$n,$Ha,$Y);else{$Fc=0;foreach($Qc
as$x=>$X){if($x===""||!$X)break;$Fc++;}$Ie=($Fc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($n["field"])))."]']; if ($Fc > f.selectedIndex) f.selectedIndex = $Fc;\" onkeyup='keyupChange.call(this);'":"");$Ha.=$Ie;$Yc=(in_array($q,$Qc)||isset($Qc[$q]));echo(count($Qc)>1?"<select name='function[$C]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($Qc,$q===null||$Yc?$q:"")."</select>":nbsp(reset($Qc))).'<td>';$qd=$b->editInput($_GET["edit"],$n,$Ha,$Y);if($qd!="")echo$qd;elseif($n["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$n["length"],$Yd);foreach($Yd[1]as$r=>$X){$X=stripcslashes(str_replace("''","'",$X));$Za=(is_int($Y)?($Y>>$r)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$r]' value='".(1<<$r)."'".($Za?' checked':'')."$Ie>".h($b->editVal($X,$n)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$n["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$Ie>";elseif(($Zg=preg_match('~text|lob~',$n["type"]))||preg_match("~\n~",$Y)){if($Zg&&$w!="sqlite")$Ha.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$Ha.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$Ha>".h($Y).'</textarea>';}elseif($q=="json")echo"<textarea$Ha cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$fe=(!preg_match('~int~',$n["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$n["length"],$B)?((preg_match("~binary~",$n["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$n["unsigned"]?1:0)):($vh[$n["type"]]?$vh[$n["type"]]+($n["unsigned"]?0:1):0));if($w=='sql'&&$g->server_info>=5.6&&preg_match('~time~',$n["type"]))$fe+=7;echo"<input".((!$Yc||$q==="")&&preg_match('~(?<!o)int~',$n["type"])?" type='number'":"")." value='".h($Y)."'".($fe?" maxlength='$fe'":"").(preg_match('~char|binary~',$n["type"])&&$fe>20?" size='40'":"")."$Ha>";}}}function
process_input($n){global$b;$t=bracket_escape($n["field"]);$q=$_POST["function"][$t];$Y=$_POST["fields"][$t];if($n["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($n["auto_increment"]&&$Y=="")return
null;if($q=="orig")return($n["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($n["field"]):false);if($q=="NULL")$Y=null;if($n["type"]=="set")return
array_sum((array)$Y);if($q=="json"){$q="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$n["type"])&&ini_bool("file_uploads")){$Cc=get_file("fields-$t");if(!is_string($Cc))return
false;return
q($Cc);}return$b->processInput($n,$Y,$q);}function
fields_from_edit(){global$l;$J=array();foreach((array)$_POST["field_keys"]as$x=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$x];$_POST["fields"][$X]=$_POST["field_vals"][$x];}}foreach((array)$_POST["fields"]as$x=>$X){$C=bracket_escape($x,1);$J[$C]=array("field"=>$C,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($x==$l->primary),);}return$J;}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Lc=false;foreach(table_status('',true)as$Q=>$R){$C=$b->tableName($R);if(isset($R["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$I=$g->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($Q),array())),1));if(!$I||$I->fetch_row()){if(!$Lc){echo"<ul>\n";$Lc=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Lc?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($fd,$pe=false){global$b;$J=$b->dumpHeaders($fd,$pe);$af=$_POST["output"];if($af!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($fd).".$J".($af!="file"&&!preg_match('~[^0-9a-z]~',$af)?".$af":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$x=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$x]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($q,$e){return($q?($q=="unixepoch"?"DATETIME($e, '$q')":($q=="count distinct"?"COUNT(DISTINCT ":strtoupper("$q("))."$e)"):$e);}function
get_temp_dir(){$J=ini_get("upload_tmp_dir");if(!$J){if(function_exists('sys_get_temp_dir'))$J=sys_get_temp_dir();else{$Dc=@tempnam("","");if(!$Dc)return
false;$J=dirname($Dc);unlink($Dc);}}return$J;}function
password_file($yb){$Dc=get_temp_dir()."/adminer.key";$J=@file_get_contents($Dc);if($J||!$yb)return$J;$Nc=@fopen($Dc,"w");if($Nc){$J=rand_string();fwrite($Nc,$J);fclose($Nc);}return$J;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$n,$ah){global$b,$ba;if(is_array($X)){$J="";foreach($X
as$Bd=>$W)$J.="<tr>".($X!=array_values($X)?"<th>".h($Bd):"")."<td>".select_value($W,$_,$n,$ah);return"<table cellspacing='0'>$J</table>";}if(!$_)$_=$b->selectLink($X,$n);if($_===null){if(is_mail($X))$_="mailto:$X";if($Df=is_url($X))$_=(($Df=="http"&&$ba)||preg_match('~WebKit~i',$_SERVER["HTTP_USER_AGENT"])?$X:"$Df://www.adminer.org/redirect/?url=".urlencode($X));}$J=$b->editVal($X,$n);if($J!==null){if($J==="")$J="&nbsp;";elseif($ah!=""&&is_shortable($n)&&is_utf8($J))$J=shorten_utf8($J,max(0,+$ah));else$J=h($J);}return$b->selectVal($J,$_,$n,$X);}function
is_mail($ec){$Fa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Rb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$mf="$Fa+(\\.$Fa+)*@($Rb?\\.)+$Rb";return
is_string($ec)&&preg_match("(^$mf(,\\s*$mf)*\$)i",$ec);}function
is_url($P){$Rb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Rb?\\.)+$Rb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$B)?strtolower($B[1]):"");}function
is_shortable($n){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string~',$n["type"]);}function
count_rows($Q,$Z,$wd,$Tc){global$w;$H=" FROM ".table($Q).($Z?" WHERE ".implode(" AND ",$Z):"");return($wd&&($w=="sql"||count($Tc)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$Tc).")$H":"SELECT COUNT(*)".($wd?" FROM (SELECT 1$H$Uc) x":$H));}function
slow_query($H){global$b,$T;$k=$b->database();$ch=$b->queryTimeout();if(support("kill")&&is_object($h=connect())&&($k==""||$h->select_db($k))){$Gd=$h->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$T,'&kill=',$Gd,'\');
}, ',1000*$ch,');
</script>
';}else$h=null;ob_flush();flush();$J=@get_key_vals($H,$h,$ch);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
get_token(){$If=rand(1,1e6);return($If^$_SESSION["token"]).":$If";}function
verify_token(){list($T,$If)=explode(":",$_POST["token"]);return($If^$_SESSION["token"])==$T;}function
lzw_decompress($Pa){$Ob=256;$Qa=8;$gb=array();$Wf=0;$Xf=0;for($r=0;$r<strlen($Pa);$r++){$Wf=($Wf<<8)+ord($Pa[$r]);$Xf+=8;if($Xf>=$Qa){$Xf-=$Qa;$gb[]=$Wf>>$Xf;$Wf&=(1<<$Xf)-1;$Ob++;if($Ob>>$Qa)$Qa++;}}$Nb=range("\0","\xFF");$J="";foreach($gb
as$r=>$fb){$dc=$Nb[$fb];if(!isset($dc))$dc=$Vh.$Vh[0];$J.=$dc;if($r)$Nb[]=$Vh.$dc[0];$Vh=$dc;}return$J;}function
on_help($lb,$ug=0){return" onmouseover='helpMouseover(this, event, ".h($lb).", $ug);' onmouseout='helpMouseout(this, event);'";}function
edit_form($a,$o,$K,$Ch){global$b,$w,$T,$m;$Mg=$b->tableName(table_status1($a,true));page_header(($Ch?'Edit':'Insert'),$m,array("select"=>array($a,$Mg)),$Mg);if($K===false)echo"<p class='error'>".'No rows.'."\n";echo'<div id="message"></div>
<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$o)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($o
as$C=>$n){echo"<tr><th>".$b->fieldName($n);$Ib=$_GET["set"][bracket_escape($C)];if($Ib===null){$Ib=$n["default"];if($n["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Ib,$Rf))$Ib=$Rf[1];}$Y=($K!==null?($K[$C]!=""&&$w=="sql"&&preg_match("~enum|set~",$n["type"])?(is_array($K[$C])?array_sum($K[$C]):+$K[$C]):$K[$C]):(!$Ch&&$n["auto_increment"]?"":(isset($_GET["select"])?false:$Ib)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$n);$q=($_POST["save"]?(string)$_POST["function"][$C]:($Ch&&$n["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$n["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$q="now";}input($n,$Y,$q);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($o){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Ch?'Save and continue edit'."' onclick='return !ajaxForm(this.form, \"".'Saving'.'...", this)':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n";}echo($Ch?"<input type='submit' name='delete' value='".'Delete'."'".confirm().">\n":($_POST||!$o?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$T,'">
</form>
';}global$b,$g,$Sb,$ac,$kc,$m,$Qc,$Vc,$ba,$pd,$w,$ca,$Jd,$He,$nf,$Eg,$Zc,$T,$oh,$vh,$Bh,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$F=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;call_user_func_array('session_set_cookie_params',$F);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Ec);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($nh,$ze=null){if(is_array($nh)){$qf=($ze==1?0:1);$nh=$nh[$qf];}$nh=str_replace("%d","%s",$nh);$ze=format_number($ze);return
sprintf($nh,$ze);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$qf=array_search("SQL",$b->operators);if($qf!==false)unset($b->operators[$qf]);}function
dsn($Xb,$V,$G){try{parent::__construct($Xb,$V,$G);}catch(Exception$pc){auth_error($pc->getMessage());}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($H,$wh=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$n=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$n];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$Sb=array();class
Min_SQL{var$_conn;function
Min_SQL($g){$this->_conn=$g;}function
quote($Y){return($Y===null?"NULL":$this->_conn->quote($Y));}function
select($Q,$M,$Z,$Tc,$Qe=array(),$z=1,$E=0,$yf=false){global$b,$w;$wd=(count($Tc)<count($M));$H=$b->selectQueryBuild($M,$Z,$Tc,$Qe,$z,$E);if(!$H)$H="SELECT".limit(($_GET["page"]!="last"&&+$z&&$Tc&&$wd&&$w=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$M)."\nFROM ".table($Q),($Z?"\nWHERE ".implode(" AND ",$Z):"").($Tc&&$wd?"\nGROUP BY ".implode(", ",$Tc):"").($Qe?"\nORDER BY ".implode(", ",$Qe):""),($z!=""?+$z:null),($E?$z*$E:0),"\n");$Ag=microtime(true);$J=$this->_conn->query($H);if($yf)echo$b->selectQuery($H,format_time($Ag));return$J;}function
delete($Q,$Gf,$z=0){$H="FROM ".table($Q);return
queries("DELETE".($z?limit1($H,$Gf):" $H$Gf"));}function
update($Q,$O,$Gf,$z=0,$og="\n"){$Lh=array();foreach($O
as$x=>$X)$Lh[]="$x = $X";$H=table($Q)." SET$og".implode(",$og",$Lh);return
queries("UPDATE".($z?limit1($H,$Gf):" $H$Gf"));}function
insert($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":" DEFAULT VALUES"));}function
insertUpdate($Q,$L,$wf){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$Sb["sqlite"]="SQLite 3";$Sb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$tf=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
Min_SQLite($Dc){$this->_link=new
SQLite3($Dc);$Oh=$this->_link->version();$this->server_info=$Oh["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($P){return(is_utf8($P)?"'".$this->_link->escapeString($P)."'":"x'".reset(unpack('H*',$P))."'");}function
store_result(){return$this->_result;}function
result($H,$n=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$n];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$U=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Dc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Dc);}function
query($H,$wh=false){$me=($wh?"unbufferedQuery":"query");$I=@$this->_link->$me($H,SQLITE_BOTH,$m);$this->error="";if(!$I){$this->error=$m;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($P){return"'".sqlite_escape_string($P)."'";}function
store_result(){return$this->_result;}function
result($H,$n=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$n];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$x=>$X)$J[($x[0]=='"'?idf_unescape($x):$x)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$mf='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($mf\\.)?$mf\$~",$C,$B)){$Q=($B[3]!=""?$B[3]:idf_unescape($B[2]));$C=($B[5]!=""?$B[5]:idf_unescape($B[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$Q,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($Dc){$this->dsn(DRIVER.":$Dc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($Dc){if(is_readable($Dc)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Dc)?$Dc:dirname($_SERVER["SCRIPT_FILENAME"])."/$Dc")." AS a")){$this->Min_SQLite($Dc);return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$wf){$Lh=array();foreach($L
as$O)$Lh[]="(".implode(", ",$O).")";return
queries("REPLACE INTO ".table($Q)." (".implode(", ",array_keys(reset($L))).") VALUES\n".implode(",\n",$Lh));}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($H,$Z,$z,$D=0,$og=" "){return" $H$Z".($z!==null?$og."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1):" $H$Z");}function
db_collation($k,$jb){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($j){return
array();}function
table_status($C=""){global$g;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){$K["Oid"]=1;$K["Auto_increment"]="";$K["Rows"]=$g->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($C!=""?$J[$C]:$J);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($Q){global$g;$J=array();$wf="";foreach(get_rows("PRAGMA table_info(".table($Q).")")as$K){$C=$K["name"];$U=strtolower($K["type"]);$Ib=$K["dflt_value"];$J[$C]=array("field"=>$C,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Ib,$B)?str_replace("''","'",$B[1]):($Ib=="NULL"?null:$Ib)),"null"=>!$K["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);if($K["pk"]){if($wf!="")$J[$wf]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$J[$C]["auto_increment"]=true;$wf=$C;}}$zg=$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$zg,$Yd,PREG_SET_ORDER);foreach($Yd
as$B){$C=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));if($J[$C])$J[$C]["collation"]=trim($B[3],"'");}return$J;}function
indexes($Q,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$zg=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$zg,$B)){$J[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$B[1],$Yd,PREG_SET_ORDER);foreach($Yd
as$B){$J[""]["columns"][]=idf_unescape($B[2]).$B[4];$J[""]["descs"][]=(preg_match('~DESC~i',$B[5])?'1':null);}}if(!$J){foreach(fields($Q)as$C=>$n){if($n["primary"])$J[""]=array("type"=>"PRIMARY","columns"=>array($C),"lengths"=>array(),"descs"=>array(null));}}$_g=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($Q),$h);foreach(get_rows("PRAGMA index_list(".table($Q).")",$h)as$K){$C=$K["name"];$u=array("type"=>($K["unique"]?"UNIQUE":"INDEX"));$u["lengths"]=array();$u["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")",$h)as$eg){$u["columns"][]=$eg["name"];$u["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($C).' ON '.idf_escape($Q),'~').' \((.*)\)$~i',$_g[$C],$Rf)){preg_match_all('/("[^"]*+")+( DESC)?/',$Rf[2],$Yd);foreach($Yd[2]as$x=>$X){if($X)$u["descs"][$x]='1';}}if(!$J[""]||$u["type"]!="UNIQUE"||$u["columns"]!=$J[""]["columns"]||$u["descs"]!=$J[""]["descs"]||!preg_match("~^sqlite_~",$C))$J[$C]=$u;}return$J;}function
foreign_keys($Q){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($Q).")")as$K){$p=&$J[$K["id"]];if(!$p)$p=$K;$p["source"][]=$K["from"];$p["target"][]=$K["to"];}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($k){return
false;}function
error(){global$g;return
h($g->error);}function
check_sqlite_name($C){global$g;$yc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($yc)\$~",$C)){$g->error=sprintf('Please use one of the extensions %s.',str_replace("|",", ",$yc));return
false;}return
true;}function
create_database($k,$d){global$g;if(file_exists($k)){$g->error='File exists.';return
false;}if(!check_sqlite_name($k))return
false;try{$_=new
Min_SQLite($k);}catch(Exception$pc){$g->error=$pc->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($j){global$g;$g->Min_SQLite(":memory:");foreach($j
as$k){if(!@unlink($k)){$g->error='File exists.';return
false;}}return
true;}function
rename_database($C,$d){global$g;if(!check_sqlite_name($C))return
false;$g->Min_SQLite(":memory:");$g->error='File exists.';return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($Q,$C,$o,$Hc,$nb,$ic,$d,$Ja,$hf){$Fh=($Q==""||$Hc);foreach($o
as$n){if($n[0]!=""||!$n[1]||$n[2]){$Fh=true;break;}}$c=array();$Ye=array();foreach($o
as$n){if($n[1]){$c[]=($Fh?$n[1]:"ADD ".implode($n[1]));if($n[0]!="")$Ye[$n[0]]=$n[1][0];}}if(!$Fh){foreach($c
as$X){if(!queries("ALTER TABLE ".table($Q)." $X"))return
false;}if($Q!=$C&&!queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)))return
false;}elseif(!recreate_table($Q,$C,$c,$Ye,$Hc))return
false;if($Ja)queries("UPDATE sqlite_sequence SET seq = $Ja WHERE name = ".q($C));return
true;}function
recreate_table($Q,$C,$o,$Ye,$Hc,$v=array()){if($Q!=""){if(!$o){foreach(fields($Q)as$x=>$n){$o[]=process_field($n,$n);$Ye[$x]=idf_escape($x);}}$xf=false;foreach($o
as$n){if($n[6])$xf=true;}$Vb=array();foreach($v
as$x=>$X){if($X[2]=="DROP"){$Vb[$X[1]]=true;unset($v[$x]);}}foreach(indexes($Q)as$Ed=>$u){$f=array();foreach($u["columns"]as$x=>$e){if(!$Ye[$e])continue
2;$f[]=$Ye[$e].($u["descs"][$x]?" DESC":"");}if(!$Vb[$Ed]){if($u["type"]!="PRIMARY"||!$xf)$v[]=array($u["type"],$Ed,$f);}}foreach($v
as$x=>$X){if($X[0]=="PRIMARY"){unset($v[$x]);$Hc[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($Q)as$Ed=>$p){foreach($p["source"]as$x=>$e){if(!$Ye[$e])continue
2;$p["source"][$x]=idf_unescape($Ye[$e]);}if(!isset($Hc[" $Ed"]))$Hc[]=" ".format_foreign_key($p);}queries("BEGIN");}foreach($o
as$x=>$n)$o[$x]="  ".implode($n);$o=array_merge($o,array_filter($Hc));if(!queries("CREATE TABLE ".table($Q!=""?"adminer_$C":$C)." (\n".implode(",\n",$o)."\n)"))return
false;if($Q!=""){if($Ye&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$Ye).") SELECT ".implode(", ",array_map('idf_escape',array_keys($Ye)))." FROM ".table($Q)))return
false;$sh=array();foreach(triggers($Q)as$qh=>$dh){$ph=trigger($qh);$sh[]="CREATE TRIGGER ".idf_escape($qh)." ".implode(" ",$dh)." ON ".table($C)."\n$ph[Statement]";}if(!queries("DROP TABLE ".table($Q)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$v))return
false;foreach($sh
as$ph){if(!queries($ph))return
false;}queries("COMMIT");}return
true;}function
index_sql($Q,$U,$C,$f){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($Q."_"))." ON ".table($Q)." $f";}function
alter_indexes($Q,$c){foreach($c
as$wf){if($wf[0]=="PRIMARY")return
recreate_table($Q,$Q,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($Q,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($S){return
apply_queries("DELETE FROM",$S);}function
drop_views($Qh){return
apply_queries("DROP VIEW",$Qh);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
move_tables($S,$Qh,$Ug){return
false;}function
trigger($C){global$g;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$t='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$rh=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$t\\s*(".implode("|",$rh["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($t))?\\s+ON\\s*$t\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$g->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($C)),$B);$Ae=$B[3];return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]).($Ae?" OF":""),"Of"=>($Ae[0]=='`'||$Ae[0]=='"'?idf_unescape($Ae):$Ae),"Trigger"=>$C,"Statement"=>$B[4],);}function
triggers($Q){$J=array();$rh=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*('.implode("|",$rh["Timing"]).')\\s*(.*)\\s+ON\\b~iU',$K["sql"],$B);$J[$K["name"]]=array($B[1],$B[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$H){return$g->query("EXPLAIN $H");}function
found_rows($R,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($ig){return
true;}function
create_sql($Q,$Ja){global$g;$J=$g->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($Q));foreach(indexes($Q)as$C=>$u){if($C=='')continue;$J.=";\n\n".index_sql($Q,$u['type'],$C,"(".implode(", ",array_map('idf_escape',$u['columns'])).")");}return$J;}function
truncate_sql($Q){return"DELETE FROM ".table($Q);}function
use_sql($Db){}function
trigger_sql($Q,$Fg){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q)));}function
show_variables(){global$g;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$x)$J[$x]=$g->result("PRAGMA $x");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$Ne){list($x,$X)=explode("=",$Ne,2);$J[$x]=$X;}return$J;}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
support($Ac){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Ac);}$w="sqlite";$vh=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Eg=array_keys($vh);$Bh=array();$Le=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$Qc=array("hex","length","lower","round","unixepoch","upper");$Vc=array("avg","count","count distinct","group_concat","max","min","sum");$ac=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Sb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$tf=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($lc,$m){if(ini_bool("html_errors"))$m=html_entity_decode(strip_tags($m));$m=preg_replace('~^[^:]*: ~','',$m);$this->error=$m;}function
connect($N,$V,$G){global$b;$k=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($k!=""?addcslashes($k,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$k!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Oh=pg_version($this->_link);$this->server_info=$Oh["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($P){return"'".pg_escape_string($this->_link,$P)."'";}function
select_db($Db){global$b;if($Db==$b->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($Db,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$wh=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($I)){$this->affected_rows=pg_affected_rows($I);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$n=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
pg_fetch_result($I->_result,0,$n);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;$this->num_rows=pg_num_rows($I);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$e=$this->_offset++;$J=new
stdClass;if(function_exists('pg_field_table'))$J->orgtable=pg_field_table($this->_result,$e);$J->name=pg_field_name($this->_result,$e);$J->orgname=$J->name;$J->type=pg_field_type($this->_result,$e);$J->charsetnr=($J->type=="bytea"?63:0);return$J;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($N,$V,$G){global$b;$k=$b->database();$P="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$P dbname='".($k!=""?addcslashes($k,"'\\"):"postgres")."'",$V,$G);return
true;}function
select_db($Db){global$b;return($b->database()==$Db);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$wf){global$g;foreach($L
as$O){$Ch=array();$Z=array();foreach($O
as$x=>$X){$Ch[]="$x = $X";if(isset($wf[idf_unescape($x)]))$Z[]="$x = $X";}if(!(($Z&&queries("UPDATE ".table($Q)." SET ".implode(", ",$Ch)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")")))return
false;}return
true;}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2])){if($g->server_info>=9)$g->query("SET application_name = 'Adminer'");return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($H,$Z,$z,$D=0,$og=" "){return" $H$Z".($z!==null?$og."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return" $H$Z";}function
db_collation($k,$jb){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($j){return
array();}function
table_status($C=""){$J=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids::int AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
".($C!=""?"AND relname = ".q($C):"ORDER BY relname"))as$K)$J[$K["Name"]]=$K;return($C!=""?$J[$C]:$J);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$J=array();$Aa=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($Q)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$K){preg_match('~([^([]+)(\((.*)\))?((\[[0-9]*])*)$~',$K["full_type"],$B);list(,$U,$y,$K["length"],$Da)=$B;$K["length"].=$Da;$K["type"]=($Aa[$U]?$Aa[$U]:$U);$K["full_type"]=$K["type"].$y.$Da;$K["null"]=!$K["attnotnull"];$K["auto_increment"]=preg_match('~^nextval\\(~i',$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$K["default"],$B))$K["default"]=($B[1][0]=="'"?idf_unescape($B[1]):$B[1]).$B[2];$J[$K["field"]]=$K;}return$J;}function
indexes($Q,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$Ng=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($Q));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Ng AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption FROM pg_index i, pg_class ci WHERE i.indrelid = $Ng AND ci.oid = i.indexrelid",$h)as$K){$Sf=$K["relname"];$J[$Sf]["type"]=($K["indisprimary"]?"PRIMARY":($K["indisunique"]?"UNIQUE":"INDEX"));$J[$Sf]["columns"]=array();foreach(explode(" ",$K["indkey"])as$ld)$J[$Sf]["columns"][]=$f[$ld];$J[$Sf]["descs"]=array();foreach(explode(" ",$K["indoption"])as$md)$J[$Sf]["descs"][]=($md&1?'1':null);$J[$Sf]["lengths"]=array();}return$J;}function
foreign_keys($Q){global$He;$J=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($Q)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$B)){$K['source']=array_map('trim',explode(',',$B[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$B[2],$Xd)){$K['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$Xd[2]));$K['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$Xd[4]));}$K['target']=array_map('trim',explode(',',$B[3]));$K['on_delete']=(preg_match("~ON DELETE ($He)~",$B[4],$Xd)?$Xd[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($He)~",$B[4],$Xd)?$Xd[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
view($C){global$g;return
array("select"=>$g->result("SELECT pg_get_viewdef(".q($C).")"));}function
collations(){return
array();}function
information_schema($k){return($k=="information_schema");}function
error(){global$g;$J=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$J,$B))$J=$B[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($B[3]).'})(.*)~','\\1<b>\\2</b>',$B[2]).$B[4];return
nl_br($J);}function
create_database($k,$d){return
queries("CREATE DATABASE ".idf_escape($k).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($j){global$g;$g->close();return
apply_queries("DROP DATABASE",$j,'idf_escape');}function
rename_database($C,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($Q,$C,$o,$Hc,$nb,$ic,$d,$Ja,$hf){$c=array();$Ff=array();foreach($o
as$n){$e=idf_escape($n[0]);$X=$n[1];if(!$X)$c[]="DROP $e";else{$Kh=$X[5];unset($X[5]);if(isset($X[6])&&$n[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($n[0]=="")$c[]=($Q!=""?"ADD ":"  ").implode($X);else{if($e!=$X[0])$Ff[]="ALTER TABLE ".table($Q)." RENAME $e TO $X[0]";$c[]="ALTER $e TYPE$X[1]";if(!$X[6]){$c[]="ALTER $e ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $e ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($n[0]!=""||$Kh!="")$Ff[]="COMMENT ON COLUMN ".table($Q).".$X[0] IS ".($Kh!=""?substr($Kh,9):"''");}}$c=array_merge($c,$Hc);if($Q=="")array_unshift($Ff,"CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($Ff,"ALTER TABLE ".table($Q)."\n".implode(",\n",$c));if($Q!=""&&$Q!=$C)$Ff[]="ALTER TABLE ".table($Q)." RENAME TO ".table($C);if($Q!=""||$nb!="")$Ff[]="COMMENT ON TABLE ".table($C)." IS ".q($nb);if($Ja!=""){}foreach($Ff
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($Q,$c){$yb=array();$Tb=array();$Ff=array();foreach($c
as$X){if($X[0]!="INDEX")$yb[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$Tb[]=idf_escape($X[1]);else$Ff[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q)." (".implode(", ",$X[2]).")";}if($yb)array_unshift($Ff,"ALTER TABLE ".table($Q).implode(",",$yb));if($Tb)array_unshift($Ff,"DROP INDEX ".implode(", ",$Tb));foreach($Ff
as$H){if(!queries($H))return
false;}return
true;}function
truncate_tables($S){return
queries("TRUNCATE ".implode(", ",array_map('table',$S)));return
true;}function
drop_views($Qh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Qh)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Qh,$Ug){foreach($S
as$Q){if(!queries("ALTER TABLE ".table($Q)." SET SCHEMA ".idf_escape($Ug)))return
false;}foreach($Qh
as$Q){if(!queries("ALTER VIEW ".table($Q)." SET SCHEMA ".idf_escape($Ug)))return
false;}return
true;}function
trigger($C){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$L=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($C));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($Q))as$K)$J[$K["trigger_name"]]=array($K["condition_timing"],$K["event_manipulation"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
last_id(){return
0;}function
explain($g,$H){return$g->query("EXPLAIN $H");}function
found_rows($R,$Z){global$g;if(preg_match("~ rows=([0-9]+)~",$g->result("EXPLAIN SELECT * FROM ".idf_escape($R["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$Rf))return$Rf[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($hg){global$g,$vh,$Eg;$J=$g->query("SET search_path TO ".idf_escape($hg));foreach(types()as$U){if(!isset($vh[$U])){$vh[$U]=0;$Eg['User types'][]=$U;}}return$J;}function
use_sql($Db){return"\connect ".idf_escape($Db);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$g;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($g->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
support($Ac){return
preg_match('~^(database|table|columns|sql|indexes|comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$~',$Ac);}$w="pgsql";$vh=array();$Eg=array();foreach(array('Numbers'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Date and time'=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),'Strings'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Binary'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Network'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometry'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$x=>$X){$vh+=$X;$Eg[$x]=array_keys($X);}$Bh=array();$Le=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Qc=array("char_length","lower","round","to_hex","to_timestamp","upper");$Vc=array("avg","count","count distinct","max","min","sum");$ac=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Sb["oracle"]="Oracle";if(isset($_GET["oracle"])){$tf=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($lc,$m){if(ini_bool("html_errors"))$m=html_entity_decode(strip_tags($m));$m=preg_replace('~^[^:]*: ~','',$m);$this->error=$m;}function
connect($N,$V,$G){$this->_link=@oci_new_connect($V,$G,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$m=oci_error();$this->error=$m["message"];return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Db){return
true;}function
query($H,$wh=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$m=oci_error($this->_link);$this->errno=$m["code"];$this->error=$m["message"];return
false;}set_error_handler(array($this,'_error'));$J=@oci_execute($I);restore_error_handler();if($J){if(oci_num_fields($I))return
new
Min_Result($I);$this->affected_rows=oci_num_rows($I);}return$J;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$n=1){$I=$this->query($H);if(!is_object($I)||!oci_fetch($I->_result))return
false;return
oci_result($I->_result,$n);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$x=>$X){if(is_a($X,'OCI-Lob'))$K[$x]=$X->load();}return$K;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$e=$this->_offset++;$J=new
stdClass;$J->name=oci_field_name($this->_result,$e);$J->orgname=$J->name;$J->type=oci_field_type($this->_result,$e);$J->charsetnr=(preg_match("~raw|blob|bfile~",$J->type)?63:0);return$J;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($N,$V,$G){$this->dsn("oci:dbname=//$N;charset=AL32UTF8",$V,$G);return
true;}function
select_db($Db){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($H,$Z,$z,$D=0,$og=" "){return($D?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($z+$D).") WHERE rnum > $D":($z!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($z+$D):" $H$Z"));}function
limit1($H,$Z){return" $H$Z";}function
db_collation($k,$jb){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($j){return
array();}function
table_status($C=""){$J=array();$jg=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $jg":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $jg":"")."
ORDER BY 1")as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($Q)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$y="$K[DATA_PRECISION],$K[DATA_SCALE]";if($y==",")$y=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($y?"($y)":""),"type"=>strtolower($U),"length"=>$y,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($Q,$h=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($Q)."
ORDER BY uc.constraint_type, uic.column_position",$h)as$K){$jd=$K["INDEX_NAME"];$J[$jd]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$jd]["columns"][]=$K["COLUMN_NAME"];$J[$jd]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);$J[$jd]["descs"][]=($K["DESCEND"]?'1':null);}return$J;}function
view($C){$L=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($L);}function
collations(){return
array();}function
information_schema($k){return
false;}function
error(){global$g;return
h($g->error);}function
explain($g,$H){$g->query("EXPLAIN PLAN FOR $H");return$g->query("SELECT * FROM plan_table");}function
found_rows($R,$Z){}function
alter_table($Q,$C,$o,$Hc,$nb,$ic,$d,$Ja,$hf){$c=$Tb=array();foreach($o
as$n){$X=$n[1];if($X&&$n[0]!=""&&idf_escape($n[0])!=$X[0])queries("ALTER TABLE ".table($Q)." RENAME COLUMN ".idf_escape($n[0])." TO $X[0]");if($X)$c[]=($Q!=""?($n[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($Q!=""?")":"");else$Tb[]=idf_escape($n[0]);}if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($Q)."\n".implode("\n",$c)))&&(!$Tb||queries("ALTER TABLE ".table($Q)." DROP (".implode(", ",$Tb).")"))&&($Q==$C||queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)));}function
foreign_keys($Q){return
array();}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Qh){return
apply_queries("DROP VIEW",$Qh);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$g;return$g->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($ig){global$g;return$g->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($ig));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$L=get_rows('SELECT * FROM v$instance');return
reset($L);}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
support($Ac){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Ac);}$w="oracle";$vh=array();$Eg=array();foreach(array('Numbers'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Date and time'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Strings'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Binary'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$x=>$X){$vh+=$X;$Eg[$x]=array_keys($X);}$Bh=array();$Le=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Qc=array("length","lower","round","upper");$Vc=array("avg","count","count distinct","max","min","sum");$ac=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Sb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$tf=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$m){$this->errno=$m["code"];$this->error.="$m[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$G){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$nd=sqlsrv_server_info($this->_link);$this->server_info=$nd['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Db){return$this->query("USE ".idf_escape($Db));}function
query($H,$wh=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
false;}return$this->store_result($I);}function
multi_query($H){$this->_result=sqlsrv_query($this->_link,$H);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($I=null){if(!$I)$I=$this->_result;if(sqlsrv_field_metadata($I))return
new
Min_Result($I);$this->affected_rows=sqlsrv_rows_affected($I);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($H,$n=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->fetch_row();return$K[$n];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$x=>$X){if(is_a($X,'DateTime'))$K[$x]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$n=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$n["Name"];$J->orgname=$n["Name"];$J->type=($n["Type"]==1?254:0);return$J;}function
seek($D){for($r=0;$r<$D;$r++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$G){$this->_link=@mssql_connect($N,$V,$G);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Db){return
mssql_select_db($Db);}function
query($H,$wh=false){$I=mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
false;}if($I===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($H,$n=0){$I=$this->query($H);if(!is_object($I))return
false;return
mssql_result($I->_result,0,$n);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($I){$this->_result=$I;$this->num_rows=mssql_num_rows($I);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$J=mssql_fetch_field($this->_result);$J->orgtable=$J->table;$J->orgname=$J->name;return$J;}function
seek($D){mssql_data_seek($this->_result,$D);}function
__destruct(){mssql_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$wf){foreach($L
as$O){$Ch=array();$Z=array();foreach($O
as$x=>$X){$Ch[]="$x = $X";if(isset($wf[idf_unescape($x)]))$Z[]="$x = $X";}if(!queries("MERGE ".table($Q)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Ch)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($t){return"[".str_replace("]","]]",$t)."]";}function
table($t){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($t);}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($H,$Z,$z,$D=0,$og=" "){return($z!==null?" TOP (".($z+$D).")":"")." $H$Z";}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($k,$jb){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($k));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($j){global$g;$J=array();foreach($j
as$k){$g->select_db($k);$J[$k]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$J;}function
table_status($C=""){$J=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="VIEW";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($Q))as$K){$U=$K["type"];$y=(preg_match("~char|binary~",$U)?$K["max_length"]:($U=="decimal"?"$K[precision],$K[scale]":""));$J[$K["name"]]=array("field"=>$K["name"],"full_type"=>$U.($y?"($y)":""),"type"=>$U,"length"=>$y,"default"=>$K["default"],"null"=>$K["is_nullable"],"auto_increment"=>$K["is_identity"],"collation"=>$K["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$K["is_identity"],);}return$J;}function
indexes($Q,$h=null){$J=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($Q),$h)as$K){$C=$K["name"];$J[$C]["type"]=($K["is_primary_key"]?"PRIMARY":($K["is_unique"]?"UNIQUE":"INDEX"));$J[$C]["lengths"]=array();$J[$C]["columns"][$K["key_ordinal"]]=$K["column_name"];$J[$C]["descs"][$K["key_ordinal"]]=($K["is_descending_key"]?'1':null);}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$J=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$d)$J[preg_replace('~_.*~','',$d)][]=$d;return$J;}function
information_schema($k){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
create_database($k,$d){return
queries("CREATE DATABASE ".idf_escape($k).(preg_match('~^[a-z0-9_]+$~i',$d)?" COLLATE $d":""));}function
drop_databases($j){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$j)));}function
rename_database($C,$d){if(preg_match('~^[a-z0-9_]+$~i',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($Q,$C,$o,$Hc,$nb,$ic,$d,$Ja,$hf){$c=array();foreach($o
as$n){$e=idf_escape($n[0]);$X=$n[1];if(!$X)$c["DROP"][]=" COLUMN $e";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($n[0]=="")$c["ADD"][]="\n  ".implode("",$X).($Q==""?substr($Hc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($e!=$X[0])queries("EXEC sp_rename ".q(table($Q).".$e").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($Q=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$c["ADD"])."\n)");if($Q!=$C)queries("EXEC sp_rename ".q(table($Q)).", ".q($C));if($Hc)$c[""]=$Hc;foreach($c
as$x=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $x".implode(",",$X)))return
false;}return
true;}function
alter_indexes($Q,$c){$u=array();$Tb=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$Tb[]=idf_escape($X[1]);else$u[]=idf_escape($X[1])." ON ".table($Q);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q):"ALTER TABLE ".table($Q)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$u||queries("DROP INDEX ".implode(", ",$u)))&&(!$Tb||queries("ALTER TABLE ".table($Q)." DROP ".implode(", ",$Tb)));}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$H){$g->query("SET SHOWPLAN_ALL ON");$J=$g->query($H);$g->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($R,$Z){}function
foreign_keys($Q){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($Q))as$K){$p=&$J[$K["FK_NAME"]];$p["table"]=$K["PKTABLE_NAME"];$p["source"][]=$K["FKCOLUMN_NAME"];$p["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Qh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Qh)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Qh,$Ug){return
apply_queries("ALTER SCHEMA ".idf_escape($Ug)." TRANSFER",array_merge($S,$Qh));}function
trigger($C){if($C=="")return
array();$L=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($C));$J=reset($L);if($J)$J["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$J["text"]);return$J;}function
triggers($Q){$J=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($Q))as$K)$J[$K["name"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!="")return$_GET["ns"];return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($hg){return
true;}function
use_sql($Db){return"USE ".idf_escape($Db);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
support($Ac){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Ac);}$w="mssql";$vh=array();$Eg=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Date and time'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Strings'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Binary'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$x=>$X){$vh+=$X;$Eg[$x]=array_keys($X);}$Bh=array();$Le=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Qc=array("len","lower","round","upper");$Vc=array("avg","count","count distinct","max","min","sum");$ac=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Sb["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$tf=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($Db){return($Db=="domain");}function
query($H,$wh=false){$F=array('SelectExpression'=>$H,'ConsistentRead'=>'true');if($this->next)$F['NextToken']=$this->next;$I=sdb_request_all('Select','Item',$F,$this->timeout);if($I===false)return$I;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$H)){$Ig=0;foreach($I
as$_d)$Ig+=$_d->Attribute->Value;$I=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$Ig,))));}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
Min_Result($I){foreach($I
as$_d){$K=array();if($_d->Name!='')$K['itemName()']=(string)$_d->Name;foreach($_d->Attribute
as$Ga){$C=$this->_processValue($Ga->Name);$Y=$this->_processValue($Ga->Value);if(isset($K[$C])){$K[$C]=(array)$K[$C];$K[$C][]=$Y;}else$K[$C]=$Y;}$this->_rows[]=$K;foreach($K
as$x=>$X){if(!isset($this->_rows[0][$x]))$this->_rows[0][$x]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($dc){return(is_object($dc)&&$dc['encoding']=='base64'?base64_decode($dc):(string)$dc);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$x=>$X)$J[$x]=$K[$x];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Fd=array_keys($this->_rows[0]);return(object)array('name'=>$Fd[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$wf="itemName()";function
_chunkRequest($gd,$ua,$F,$tc=array()){global$g;foreach(array_chunk($gd,25)as$cb){$df=$F;foreach($cb
as$r=>$s){$df["Item.$r.ItemName"]=$s;foreach($tc
as$x=>$X)$df["Item.$r.$x"]=$X;}if(!sdb_request($ua,$df))return
false;}$g->affected_rows=count($gd);return
true;}function
_extractIds($Q,$Gf,$z){$J=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$Gf,$Yd))$J=array_map('idf_unescape',$Yd[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($Q).$Gf.($z?" LIMIT 1":"")))as$_d)$J[]=$_d->Name;}return$J;}function
select($Q,$M,$Z,$Tc,$Qe=array(),$z=1,$E=0,$yf=false){global$g;$g->next=$_GET["next"];$J=parent::select($Q,$M,$Z,$Tc,$Qe,$z,$E,$yf);$g->next=0;return$J;}function
delete($Q,$Gf,$z=0){return$this->_chunkRequest($this->_extractIds($Q,$Gf,$z),'BatchDeleteAttributes',array('DomainName'=>$Q));}function
update($Q,$O,$Gf,$z=0,$og="\n"){$Jb=array();$rd=array();$r=0;$gd=$this->_extractIds($Q,$Gf,$z);$s=idf_unescape($O["`itemName()`"]);unset($O["`itemName()`"]);foreach($O
as$x=>$X){$x=idf_unescape($x);if($X=="NULL"||($s!=""&&array($s)!=$gd))$Jb["Attribute.".count($Jb).".Name"]=$x;if($X!="NULL"){foreach((array)$X
as$Bd=>$W){$rd["Attribute.$r.Name"]=$x;$rd["Attribute.$r.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Bd)$rd["Attribute.$r.Replace"]="true";$r++;}}}$F=array('DomainName'=>$Q);return(!$rd||$this->_chunkRequest(($s!=""?array($s):$gd),'BatchPutAttributes',$F,$rd))&&(!$Jb||$this->_chunkRequest($gd,'BatchDeleteAttributes',$F,$Jb));}function
insert($Q,$O){$F=array("DomainName"=>$Q);$r=0;foreach($O
as$C=>$Y){if($Y!="NULL"){$C=idf_unescape($C);if($C=="itemName()")$F["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$F["Attribute.$r.Name"]=$C;$F["Attribute.$r.Value"]=(is_array($Y)?$X:idf_unescape($Y));$r++;}}}}return
sdb_request('PutAttributes',$F);}function
insertUpdate($Q,$L,$wf){foreach($L
as$O){if(!$this->update($Q,$O,"WHERE `itemName()` = ".q($O["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}}function
connect(){return
new
Min_DB;}function
support($Ac){return
preg_match('~sql~',$Ac);}function
logged_user(){global$b;$i=$b->credentials();return$i[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($k,$jb){}function
tables_list(){global$g;$J=array();foreach(sdb_request_all('ListDomains','DomainName')as$Q)$J[(string)$Q]='table';if($g->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$J;}function
table_status($C="",$_c=false){$J=array();foreach(($C!=""?array($C=>true):tables_list())as$Q=>$U){$K=array("Name"=>$Q,"Auto_increment"=>"");if(!$_c){$le=sdb_request('DomainMetadata',array('DomainName'=>$Q));if($le){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$x=>$X)$K[$x]=(string)$le->$X;}}if($C!="")return$K;$J[$Q]=$K;}return$J;}function
explain($g,$H){}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($R){}function
indexes($Q,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($Q){return
fields_from_edit();}function
foreign_keys($Q){return
array();}function
table($t){return
idf_escape($t);}function
idf_escape($t){return"`".str_replace("`","``",$t)."`";}function
limit($H,$Z,$z,$D=0,$og=" "){return" $H$Z".($z!==null?$og."LIMIT $z":"");}function
unconvert_field($n,$J){return$J;}function
fk_support($R){}function
engines(){return
array();}function
alter_table($Q,$C,$o,$Hc,$nb,$ic,$d,$Ja,$hf){return($Q==""&&sdb_request('CreateDomain',array('DomainName'=>$C)));}function
drop_tables($S){foreach($S
as$Q){if(!sdb_request('DeleteDomain',array('DomainName'=>$Q)))return
false;}return
true;}function
count_tables($j){foreach($j
as$k)return
array($k=>count(tables_list()));}function
found_rows($R,$Z){return($Z?null:$R["Rows"]);}function
last_id(){}function
hmac($_a,$Bb,$x,$Kf=false){$Sa=64;if(strlen($x)>$Sa)$x=pack("H*",$_a($x));$x=str_pad($x,$Sa,"\0");$Cd=$x^str_repeat("\x36",$Sa);$Dd=$x^str_repeat("\x5C",$Sa);$J=$_a($Dd.pack("H*",$_a($Cd.$Bb)));if($Kf)$J=pack("H*",$J);return$J;}function
sdb_request($ua,$F=array()){global$b,$g;list($dd,$F['AWSAccessKeyId'],$kg)=$b->credentials();$F['Action']=$ua;$F['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$F['Version']='2009-04-15';$F['SignatureVersion']=2;$F['SignatureMethod']='HmacSHA1';ksort($F);$H='';foreach($F
as$x=>$X)$H.='&'.rawurlencode($x).'='.rawurlencode($X);$H=str_replace('%7E','~',substr($H,1));$H.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$dd)."\n/\n$H",$kg,true)));@ini_set('track_errors',1);$Cc=@file_get_contents((preg_match('~^https?://~',$dd)?$dd:"http://$dd"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$H,'ignore_errors'=>1,))));if(!$Cc){$g->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$Wh=simplexml_load_string($Cc);if(!$Wh){$m=libxml_get_last_error();$g->error=$m->message;return
false;}if($Wh->Errors){$m=$Wh->Errors->Error;$g->error="$m->Message ($m->Code)";return
false;}$g->error='';$Tg=$ua."Result";return($Wh->$Tg?$Wh->$Tg:true);}function
sdb_request_all($ua,$Tg,$F=array(),$ch=0){$J=array();$Ag=($ch?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$F['SelectExpression'],$B)?$B[1]:0);do{$Wh=sdb_request($ua,$F);if(!$Wh)break;foreach($Wh->$Tg
as$dc)$J[]=$dc;if($z&&count($J)>=$z){$_GET["next"]=$Wh->NextToken;break;}if($ch&&microtime(true)-$Ag>$ch)return
false;$F['NextToken']=$Wh->NextToken;if($z)$F['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($J),$F['SelectExpression']);}while($Wh->NextToken);return$J;}$w="simpledb";$Le=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$Qc=array();$Vc=array("count");$ac=array(array("json"));}$Sb["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$tf=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($N,$V,$G){global$b;$k=$b->database();$Oe=array();if($V!=""){$Oe["username"]=$V;$Oe["password"]=$G;}if($k!="")$Oe["db"]=$k;try{$this->_link=@new
MongoClient("mongodb://$N",$Oe);return
true;}catch(Exception$pc){$this->error=$pc->getMessage();return
false;}}function
query($H){return
false;}function
select_db($Db){try{$this->_db=$this->_link->selectDB($Db);return
true;}catch(Exception$pc){$this->error=$pc->getMessage();return
false;}}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
Min_Result($I){foreach($I
as$_d){$K=array();foreach($_d
as$x=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$x]=63;$K[$x]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$K;foreach($K
as$x=>$X){if(!isset($this->_rows[0][$x]))$this->_rows[0][$x]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$x=>$X)$J[$x]=$K[$x];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Fd=array_keys($this->_rows[0]);$C=$Fd[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}}class
Min_Driver
extends
Min_SQL{public$wf="_id";function
quote($Y){return($Y===null?$Y:parent::quote($Y));}function
select($Q,$M,$Z,$Tc,$Qe=array(),$z=1,$E=0,$yf=false){$M=($M==array("*")?array():array_fill_keys($M,true));$wg=array();foreach($Qe
as$X){$X=preg_replace('~ DESC$~','',$X,1,$xb);$wg[$X]=($xb?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($Q)->find(array(),$M)->sort($wg)->limit(+$z)->skip($E*$z));}function
insert($Q,$O){try{$J=$this->_conn->_db->selectCollection($Q)->insert($O);$this->_conn->errno=$J['code'];$this->_conn->error=$J['err'];$this->_conn->last_id=$O['_id'];return!$J['err'];}catch(Exception$pc){$this->_conn->error=$pc->getMessage();return
false;}}}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
error(){global$g;return
h($g->error);}function
logged_user(){global$b;$i=$b->credentials();return$i[1];}function
get_databases($Gc){global$g;$J=array();$Gb=$g->_link->listDBs();foreach($Gb['databases']as$k)$J[]=$k['name'];return$J;}function
collations(){return
array();}function
db_collation($k,$jb){}function
count_tables($j){global$g;$J=array();foreach($j
as$k)$J[$k]=count($g->_link->selectDB($k)->getCollectionNames(true));return$J;}function
tables_list(){global$g;return
array_fill_keys($g->_db->getCollectionNames(true),'table');}function
table_status($C="",$_c=false){$J=array();foreach(tables_list()as$Q=>$U){$J[$Q]=array("Name"=>$Q);if($C==$Q)return$J[$Q];}return$J;}function
information_schema(){}function
is_view($R){}function
drop_databases($j){global$g;foreach($j
as$k){$Vf=$g->_link->selectDB($k)->drop();if(!$Vf['ok'])return
false;}return
true;}function
indexes($Q,$h=null){global$g;$J=array();foreach($g->_db->selectCollection($Q)->getIndexInfo()as$u){$Mb=array();foreach($u["key"]as$e=>$U)$Mb[]=($U==-1?'1':null);$J[$u["name"]]=array("type"=>($u["name"]=="_id_"?"PRIMARY":($u["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($u["key"]),"lengths"=>array(),"descs"=>$Mb,);}return$J;}function
fields($Q){return
fields_from_edit();}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
foreign_keys($Q){return
array();}function
fk_support($R){}function
engines(){return
array();}function
found_rows($R,$Z){global$g;return$g->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($Q,$C,$o,$Hc,$nb,$ic,$d,$Ja,$hf){global$g;if($Q==""){$g->_db->createCollection($C);return
true;}}function
drop_tables($S){global$g;foreach($S
as$Q){$Vf=$g->_db->selectCollection($Q)->drop();if(!$Vf['ok'])return
false;}return
true;}function
truncate_tables($S){global$g;foreach($S
as$Q){$Vf=$g->_db->selectCollection($Q)->remove();if(!$Vf['ok'])return
false;}return
true;}function
alter_indexes($Q,$c){global$g;foreach($c
as$X){list($U,$C,$O)=$X;if($O=="DROP")$J=$g->_db->command(array("deleteIndexes"=>$Q,"index"=>$C));else{$f=array();foreach($O
as$e){$e=preg_replace('~ DESC$~','',$e,1,$xb);$f[$e]=($xb?-1:1);}$J=$g->_db->selectCollection($Q)->ensureIndex($f,array("unique"=>($U=="UNIQUE"),"name"=>$C,));}if($J['errmsg']){$g->error=$J['errmsg'];return
false;}}return
true;}function
last_id(){global$g;return$g->last_id;}function
table($t){return$t;}function
idf_escape($t){return$t;}function
support($Ac){return
preg_match("~database|indexes~",$Ac);}$w="mongo";$Le=array("=");$Qc=array();$Vc=array();$ac=array(array("json"));}$Sb["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$tf=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($kf,$sb=array(),$me='GET'){@ini_set('track_errors',1);$Cc=@file_get_contents($this->_url.'/'.ltrim($kf,'/'),false,stream_context_create(array('http'=>array('method'=>$me,'content'=>json_encode($sb),'ignore_errors'=>1,))));if(!$Cc){$this->error=$php_errormsg;return$Cc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Cc;return
false;}$J=json_decode($Cc,true);if(!$J){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$rb=get_defined_constants(true);foreach($rb['json']as$C=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$C)){$this->error=$C;break;}}}}return$J;}function
query($kf,$sb=array(),$me='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($kf,'/'),$sb,$me);}function
connect($N,$V,$G){$this->_url="http://$V:$G@$N/";$J=$this->query('');if($J)$this->server_info=$J['version']['number'];return(bool)$J;}function
select_db($Db){$this->_db=$Db;return
true;}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows;function
Min_Result($L){$this->num_rows=count($this->_rows);$this->_rows=$L;reset($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);next($this->_rows);return$J;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($Q,$M,$Z,$Tc,$Qe=array(),$z=1,$E=0,$yf=false){global$b;$Bb=array();$H="$Q/_search";if($M!=array("*"))$Bb["fields"]=$M;if($Qe){$wg=array();foreach($Qe
as$hb){$hb=preg_replace('~ DESC$~','',$hb,1,$xb);$wg[]=($xb?array($hb=>"desc"):$hb);}$Bb["sort"]=$wg;}if($z){$Bb["size"]=+$z;if($E)$Bb["from"]=($E*$z);}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""){$Xg=array("match"=>array(($X["col"]!=""?$X["col"]:"_all")=>$X["val"]));if($X["op"]=="=")$Bb["query"]["filtered"]["filter"]["and"][]=$Xg;else$Bb["query"]["filtered"]["query"]["bool"]["must"][]=$Xg;}}if($Bb["query"]&&!$Bb["query"]["filtered"]["query"])$Bb["query"]["filtered"]["query"]=array("match_all"=>array());$Ag=microtime(true);$jg=$this->_conn->query($H,$Bb);if($yf)echo$b->selectQuery("$H: ".print_r($Bb,true),format_time($Ag));if(!$jg)return
false;$J=array();foreach($jg['hits']['hits']as$cd){$K=array();$o=$cd['_source'];if($M!=array("*")){$o=array();foreach($M
as$x)$o[$x]=$cd['fields'][$x];}foreach($o
as$x=>$X)$K[$x]=(is_array($X)?json_encode($X):$X);$J[]=$K;}return
new
Min_Result($J);}}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
support($Ac){return
preg_match("~database|table|columns~",$Ac);}function
logged_user(){global$b;$i=$b->credentials();return$i[1];}function
get_databases(){global$g;$J=$g->rootQuery('_aliases');if($J)$J=array_keys($J);return$J;}function
collations(){return
array();}function
db_collation($k,$jb){}function
count_tables($j){global$g;$J=$g->query('_mapping');if($J)$J=array_map('count',$J);return$J;}function
tables_list(){global$g;$J=$g->query('_mapping');if($J)$J=array_fill_keys(array_keys(reset($J)),'table');return$J;}function
table_status($C="",$_c=false){global$g;$jg=$g->query("_search?search_type=count",array("facets"=>array("count_by_type"=>array("terms"=>array("field"=>"_type",)))),"POST");$J=array();if($jg){foreach($jg["facets"]["count_by_type"]["terms"]as$Q)$J[$Q["term"]]=array("Name"=>$Q["term"],"Engine"=>"table","Rows"=>$Q["count"],);if($C!=""&&$C==$Q["term"])return$J[$C];}return$J;}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($R){}function
indexes($Q,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($Q){global$g;$Wd=$g->query("$Q/_mapping");$J=array();if($Wd){foreach($Wd[$Q]['properties']as$C=>$n)$J[$C]=array("field"=>$C,"full_type"=>$n["type"],"type"=>$n["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
foreign_keys($Q){return
array();}function
table($t){return$t;}function
idf_escape($t){return$t;}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
fk_support($R){}function
found_rows($R,$Z){return
null;}function
create_database($k){global$g;return$g->rootQuery(urlencode($k),array(),'PUT');}function
drop_databases($j){global$g;return$g->rootQuery(urlencode(implode(',',$j)),array(),'DELETE');}function
drop_tables($S){global$g;$J=true;foreach($S
as$Q)$J=$J&&$g->query(urlencode($Q),array(),'DELETE');return$J;}$w="elastic";$Le=array("=","query");$Qc=array();$Vc=array();$ac=array(array("json"));}$Sb=array("server"=>"MySQL")+$Sb;if(!defined("DRIVER")){$tf=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($N,$V,$G){mysqli_report(MYSQLI_REPORT_OFF);list($dd,$pf)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$dd:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$G!=""?$G:ini_get("mysqli.default_pw")),null,(is_numeric($pf)?$pf:ini_get("mysqli.default_port")),(!is_numeric($pf)?$pf:null));if($J){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$J;}function
result($H,$n=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$n];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($Db){return
mysql_select_db($Db,$this->_link);}function
query($H,$wh=false){$I=@($wh?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$n=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$n);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$V,$G){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);$this->query("SET NAMES utf8");return
true;}function
select_db($Db){return$this->query("USE ".idf_escape($Db));}function
query($H,$wh=false){$this->setAttribute(1000,!$wh);return
parent::query($H,$wh);}}}class
Min_Driver
extends
Min_SQL{function
insert($Q,$O){return($O?parent::insert($Q,$O):queries("INSERT INTO ".table($Q)." ()\nVALUES ()"));}function
insertUpdate($Q,$L,$wf){$f=array_keys(reset($L));$uf="INSERT INTO ".table($Q)." (".implode(", ",$f).") VALUES\n";$Lh=array();foreach($f
as$x)$Lh[$x]="$x = VALUES($x)";$Hg="\nON DUPLICATE KEY UPDATE ".implode(", ",$Lh);$Lh=array();$y=0;foreach($L
as$O){$Y="(".implode(", ",$O).")";if($Lh&&(strlen($uf)+$y+strlen($Y)+strlen($Hg)>1e6)){if(!queries($uf.implode(",\n",$Lh).$Hg))return
false;$Lh=array();$y=0;}$Lh[]=$Y;$y+=strlen($Y)+2;}return
queries($uf.implode(",\n",$Lh).$Hg);}}function
idf_escape($t){return"`".str_replace("`","``",$t)."`";}function
table($t){return
idf_escape($t);}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2])){$g->query("SET sql_quote_show_create = 1, autocommit = 1");return$g;}$J=$g->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($fg=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$fg;return$J;}function
get_databases($Gc){global$g;$J=get_session("dbs");if($J===null){$H=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Gc?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$z,$D=0,$og=" "){return" $H$Z".($z!==null?$og."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($k,$jb){global$g;$J=null;$yb=$g->result("SHOW CREATE DATABASE ".idf_escape($k),1);if(preg_match('~ COLLATE ([^ ]+)~',$yb,$B))$J=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$yb,$B))$J=$jb[$B[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(preg_match("~YES|DEFAULT~",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals($g->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($j){$J=array();foreach($j
as$k)$J[$k]=count(get_vals("SHOW TABLES IN ".idf_escape($k)));return$J;}function
table_status($C="",$_c=false){global$g;$J=array();foreach(get_rows($_c&&$g->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]===null;}function
fk_support($R){return
preg_match('~InnoDB|IBMDB2I~i',$R["Engine"]);}function
fields($Q){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$B);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($K["Default"]!=""||preg_match("~char|set~",$B[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$K["Extra"],$B)?$B[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(preg_split('~, *~',$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($Q,$h=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$h)as$K){$J[$K["Key_name"]]["type"]=($K["Key_name"]=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?"INDEX":"UNIQUE")));$J[$K["Key_name"]]["columns"][]=$K["Column_name"];$J[$K["Key_name"]]["lengths"][]=$K["Sub_part"];$J[$K["Key_name"]]["descs"][]=null;}return$J;}function
foreign_keys($Q){global$g,$He;static$mf='`(?:[^`]|``)+`';$J=array();$zb=$g->result("SHOW CREATE TABLE ".table($Q),1);if($zb){preg_match_all("~CONSTRAINT ($mf) FOREIGN KEY \\(((?:$mf,? ?)+)\\) REFERENCES ($mf)(?:\\.($mf))? \\(((?:$mf,? ?)+)\\)(?: ON DELETE ($He))?(?: ON UPDATE ($He))?~",$zb,$Yd,PREG_SET_ORDER);foreach($Yd
as$B){preg_match_all("~$mf~",$B[2],$xg);preg_match_all("~$mf~",$B[5],$Ug);$J[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$xg[0]),"target"=>array_map('idf_unescape',$Ug[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$x=>$X)asort($J[$x]);return$J;}function
information_schema($k){global$g;return($g->server_info>=5&&$k=="information_schema")||($g->server_info>=5.5&&$k=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
error_line(){global$g;if(preg_match('~ at line ([0-9]+)$~',$g->error,$Rf))return$Rf[1]-1;}function
create_database($k,$d){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($k).($d?" COLLATE ".q($d):""));}function
drop_databases($j){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$j,'idf_escape');}function
rename_database($C,$d){if(create_database($C,$d)){$Tf=array();foreach(tables_list()as$Q=>$U)$Tf[]=table($Q)." TO ".idf_escape($C).".".table($Q);if(!$Tf||queries("RENAME TABLE ".implode(", ",$Tf))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Ka=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$u){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$u["columns"],true)){$Ka="";break;}if($u["type"]=="PRIMARY")$Ka=" UNIQUE";}}return" AUTO_INCREMENT$Ka";}function
alter_table($Q,$C,$o,$Hc,$nb,$ic,$d,$Ja,$hf){$c=array();foreach($o
as$n)$c[]=($n[1]?($Q!=""?($n[0]!=""?"CHANGE ".idf_escape($n[0]):"ADD"):" ")." ".implode($n[1]).($Q!=""?$n[2]:""):"DROP ".idf_escape($n[0]));$c=array_merge($c,$Hc);$Bg="COMMENT=".q($nb).($ic?" ENGINE=".q($ic):"").($d?" COLLATE ".q($d):"").($Ja!=""?" AUTO_INCREMENT=$Ja":"").$hf;if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n) $Bg");if($Q!=$C)$c[]="RENAME TO ".table($C);$c[]=$Bg;return
queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$c));}function
alter_indexes($Q,$c){foreach($c
as$x=>$X)$c[$x]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($Q).implode(",",$c));}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Qh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Qh)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Qh,$Ug){$Tf=array();foreach(array_merge($S,$Qh)as$Q)$Tf[]=table($Q)." TO ".idf_escape($Ug).".".table($Q);return
queries("RENAME TABLE ".implode(", ",$Tf));}function
copy_tables($S,$Qh,$Ug){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($S
as$Q){$C=($Ug==DB?table("copy_$Q"):idf_escape($Ug).".".table($Q));if(!queries("\nDROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($Q))||!queries("INSERT INTO $C SELECT * FROM ".table($Q)))return
false;}foreach($Qh
as$Q){$C=($Ug==DB?table("copy_$Q"):idf_escape($Ug).".".table($Q));$Ph=view($Q);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Ph[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$g,$kc,$pd,$vh;$Aa=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$uh="((".implode("|",array_merge(array_keys($vh),$Aa)).")\\b(?:\\s*\\(((?:[^'\")]|$kc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$mf="\\s*(".($U=="FUNCTION"?"":$pd).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$uh";$yb=$g->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$mf\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$uh\\s+":"")."(.*)~is",$yb,$B);$o=array();preg_match_all("~$mf\\s*,?~is",$B[1],$Yd,PREG_SET_ORDER);foreach($Yd
as$cf){$C=str_replace("``","`",$cf[2]).$cf[3];$o[]=array("field"=>$C,"type"=>strtolower($cf[5]),"length"=>preg_replace_callback("~$kc~s",'normalize_enum',$cf[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$cf[8] $cf[7]"))),"null"=>1,"full_type"=>$cf[4],"inout"=>strtoupper($cf[1]),"collation"=>strtolower($cf[9]),);}if($U!="FUNCTION")return
array("fields"=>$o,"definition"=>$B[11]);return
array("fields"=>$o,"returns"=>array("type"=>$B[12],"length"=>$B[13],"unsigned"=>$B[15],"collation"=>$B[16]),"definition"=>$B[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$H){return$g->query("EXPLAIN ".($g->server_info>=5.1?"PARTITIONS ":"").$H);}function
found_rows($R,$Z){return($Z||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($hg){return
true;}function
create_sql($Q,$Ja){global$g;$J=$g->result("SHOW CREATE TABLE ".table($Q),1);if(!$Ja)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($Db){return"USE ".idf_escape($Db);}function
trigger_sql($Q,$Fg){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")),null,"-- ")as$K)$J.="\n".($Fg=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($n){if(preg_match("~binary~",$n["type"]))return"HEX(".idf_escape($n["field"]).")";if($n["type"]=="bit")return"BIN(".idf_escape($n["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$n["type"]))return"AsWKT(".idf_escape($n["field"]).")";}function
unconvert_field($n,$J){if(preg_match("~binary~",$n["type"]))$J="UNHEX($J)";if($n["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$n["type"]))$J="GeomFromText($J)";return$J;}function
support($Ac){global$g;return!preg_match("~scheme|sequence|type|view_trigger".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|routine|trigger|view":""):"")."~",$Ac);}$w="sql";$vh=array();$Eg=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometry'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$x=>$X){$vh+=$X;$Eg[$x]=array_keys($X);}$Bh=array("unsigned","zerofill","unsigned zerofill");$Le=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Qc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Vc=array("avg","count","count distinct","group_concat","max","min","sum");$ac=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.1.0";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' target='_blank' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($yb=false){return
password_file($yb);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){return
DB;}function
databases($Gc=true){return
get_databases($Gc);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$Sb;echo'<table cellspacing="0">
<tr><th>System<td>',html_select("auth[driver]",$Sb,DRIVER,"loginDriver(this);"),'<tr><th>Server<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>Username<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Password<td><input type="password" name="auth[password]">
<tr><th>Database<td><input name="auth[db]" value="',h($_GET["db"]);?>" autocapitalize="off">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
focus(username);
username.form['auth[driver]'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".'Login'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
login($Ud,$G){return
true;}function
tableName($Lg){return
h($Lg["Name"]);}function
fieldName($n,$Qe=0){return'<span title="'.h($n["full_type"]).'">'.h($n["field"]).'</span>';}function
selectLinks($Lg,$O=""){echo'<p class="links">';$Td=array("select"=>'Select data');if(support("table")||support("indexes"))$Td["table"]='Show structure';if(support("table")){if(is_view($Lg))$Td["view"]='Alter view';else$Td["create"]='Alter table';}if($O!==null)$Td["edit"]='New item';foreach($Td
as$x=>$X)echo" <a href='".h(ME)."$x=".urlencode($Lg["Name"]).($x=="edit"?$O:"")."'".bold(isset($_GET[$x])).">$X</a>";echo"\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$Kg){return
array();}function
backwardKeysPrint($Ma,$K){}function
selectQuery($H,$bh){global$w;return"<p><code class='jush-$w'>".h(str_replace("\n"," ",$H))."</code> <span class='time'>($bh)</span>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($H)."'>".'Edit'."</a>":"")."</p>";}function
rowDescription($Q){return"";}function
rowDescriptions($L,$Ic){return$L;}function
selectLink($X,$n){}function
selectVal($X,$_,$n,$Xe){$J=($X===null?"<i>NULL</i>":(preg_match("~char|binary~",$n["type"])&&!preg_match("~var~",$n["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$n["type"])&&!is_utf8($X))$J=lang(array('%d byte','%d bytes'),strlen($Xe));return($_?"<a href='".h($_)."'".(is_url($_)?" rel='noreferrer'":"").">$J</a>":$J);}function
editVal($X,$n){return$X;}function
selectColumnsPrint($M,$f){global$Qc,$Vc;print_fieldset("select",'Select',$M);$r=0;$M[""]=array();foreach($M
as$x=>$X){$X=$_GET["columns"][$x];$e=select_input(" name='columns[$r][col]' onchange='".($x!==""?"selectFieldChange(this.form)":"selectAddRow(this)").";'",$f,$X["col"]);echo"<div>".($Qc||$Vc?"<select name='columns[$r][fun]' onchange='helpClose();".($x!==""?"":" this.nextSibling.nextSibling.onchange();")."'".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).">".optionlist(array(-1=>"")+array_filter(array('Functions'=>$Qc,'Aggregation'=>$Vc)),$X["fun"])."</select>"."($e)":$e)."</div>\n";$r++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$f,$v){print_fieldset("search",'Search',$Z);foreach($v
as$r=>$u){if($u["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$u["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$r]' value='".h($_GET["fulltext"][$r])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$r]",1,isset($_GET["boolean"][$r]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Xa="this.nextSibling.onchange();";for($r=0;$r<=count($_GET["where"]);$r++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$r][col]' onchange='$Xa'",$f,$X["col"],"(".'anywhere'.")"),html_select("where[$r][op]",$this->operators,$X["op"],$Xa),"<input type='search' name='where[$r][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($Qe,$f,$v){print_fieldset("sort",'Sort',$Qe);$r=0;foreach((array)$_GET["order"]as$x=>$X){if($X!=""){echo"<div>".select_input(" name='order[$r]' onchange='selectFieldChange(this.form);'",$f,$X),checkbox("desc[$r]",1,isset($_GET["desc"][$x]),'descending')."</div>\n";$r++;}}echo"<div>".select_input(" name='order[$r]' onchange='selectAddRow(this);'",$f),checkbox("desc[$r]",1,false,'descending')."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($z)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($ah){if($ah!==null){echo"<fieldset><legend>".'Text length'."</legend><div>","<input type='number' name='text_length' class='size' value='".h($ah)."'>","</div></fieldset>\n";}}function
selectActionPrint($v){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>"," <span id='noindex' title='".'Full table scan'."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$f=array();foreach($v
as$u){if($u["type"]!="FULLTEXT")$f[reset($u["columns"])]=1;}$f[""]=1;foreach($f
as$x=>$X)json_row($x);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($fc,$f){}function
selectColumnsProcess($f,$v){global$Qc,$Vc;$M=array();$Tc=array();foreach((array)$_GET["columns"]as$x=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$Qc)||in_array($X["fun"],$Vc)))){$M[$x]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$Vc))$Tc[]=$M[$x];}}return
array($M,$Tc);}function
selectSearchProcess($o,$v){global$w;$J=array();foreach($v
as$r=>$u){if($u["type"]=="FULLTEXT"&&$_GET["fulltext"][$r]!="")$J[]="MATCH (".implode(", ",array_map('idf_escape',$u["columns"])).") AGAINST (".q($_GET["fulltext"][$r]).(isset($_GET["boolean"][$r])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$pb=" $X[op]";if(preg_match('~IN$~',$X["op"])){$id=process_length($X["val"]);$pb.=" ".($id!=""?$id:"(NULL)");}elseif($X["op"]=="SQL")$pb=" $X[val]";elseif($X["op"]=="LIKE %%")$pb=" LIKE ".$this->processInput($o[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$pb.=" ".$this->processInput($o[$X["col"]],$X["val"]);if($X["col"]!="")$J[]=idf_escape($X["col"]).$pb;else{$kb=array();foreach($o
as$C=>$n){$yd=preg_match('~char|text|enum|set~',$n["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$n["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$yd)){$C=idf_escape($C);$kb[]=($w=="sql"&&$yd&&!preg_match('~^utf8~',$n["collation"])?"CONVERT($C USING utf8)":$C);}}$J[]=($kb?"(".implode("$pb OR ",$kb)."$pb)":"0");}}}return$J;}function
selectOrderProcess($o,$v){$J=array();foreach((array)$_GET["order"]as$x=>$X){if($X!="")$J[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$x])?" DESC":"");}return$J;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Ic){return
false;}function
selectQueryBuild($M,$Z,$Tc,$Qe,$z,$E){return"";}function
messageQuery($H,$bh){global$w;restart_session();$ad=&get_session("queries");$s="sql-".count($ad[$_GET["db"]]);if(strlen($H)>1e6)$H=preg_replace('~[\x80-\xFF]+$~','',substr($H,0,1e6))."\n...";$ad[$_GET["db"]][]=array($H,time(),$bh);return" <span class='time'>".@date("H:i:s")."</span> <a href='#$s' onclick=\"return !toggle('$s');\">".'SQL command'."</a>"."<div id='$s' class='hidden'><pre><code class='jush-$w'>".shorten_utf8($H,1000).'</code></pre>'.($bh?" <span class='time'>($bh)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($ad[$_GET["db"]])-1)).'">'.'Edit'.'</a>':'').'</div>';}function
editFunctions($n){global$ac;$J=($n["null"]?"NULL/":"");foreach($ac
as$x=>$Qc){if(!$x||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Qc
as$mf=>$X){if(!$mf||preg_match("~$mf~",$n["type"]))$J.="/$X";}if($x&&!preg_match('~set|blob|bytea|raw|file~',$n["type"]))$J.="/SQL";}}if($n["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$J='Auto Increment';return
explode("/",$J);}function
editInput($Q,$n,$Ha,$Y){if($n["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ha value='-1' checked><i>".'original'."</i></label> ":"").($n["null"]?"<label><input type='radio'$Ha value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ha,$n,$Y,0);return"";}function
processInput($n,$Y,$q=""){if($q=="SQL")return$Y;$C=$n["field"];$J=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$q))$J="$q()";elseif(preg_match('~^current_(date|timestamp)$~',$q))$J=$q;elseif(preg_match('~^([+-]|\\|\\|)$~',$q))$J=idf_escape($C)." $q $J";elseif(preg_match('~^[+-] interval$~',$q))$J=idf_escape($C)." $q ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$J);elseif(preg_match('~^(addtime|subtime|concat)$~',$q))$J="$q(".idf_escape($C).", $J)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$q))$J="$q($J)";return
unconvert_field($n,$J);}function
dumpOutput(){$J=array('text'=>'open','file'=>'save');if(function_exists('gzencode'))$J['gz']='gzip';return$J;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($k){}function
dumpTable($Q,$Fg,$zd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Fg)dump_csv(array_keys(fields($Q)));}elseif($Fg){if($zd==2){$o=array();foreach(fields($Q)as$C=>$n)$o[]=idf_escape($C)." $n[full_type]";$yb="CREATE TABLE ".table($Q)." (".implode(", ",$o).")";}else$yb=create_sql($Q,$_POST["auto_increment"]);if($yb){if($Fg=="DROP+CREATE"||$zd==1)echo"DROP ".($zd==2?"VIEW":"TABLE")." IF EXISTS ".table($Q).";\n";if($zd==1)$yb=remove_definer($yb);echo"$yb;\n\n";}}}function
dumpData($Q,$Fg,$H){global$g,$w;$ae=($w=="sqlite"?0:1048576);if($Fg){if($_POST["format"]=="sql"){if($Fg=="TRUNCATE+INSERT")echo
truncate_sql($Q).";\n";$o=fields($Q);}$I=$g->query($H,1);if($I){$rd="";$Va="";$Fd=array();$Hg="";$Bc=($Q!=''?'fetch_assoc':'fetch_row');while($K=$I->$Bc()){if(!$Fd){$Lh=array();foreach($K
as$X){$n=$I->fetch_field();$Fd[]=$n->name;$x=idf_escape($n->name);$Lh[]="$x = VALUES($x)";}$Hg=($Fg=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$Lh):"").";\n";}if($_POST["format"]!="sql"){if($Fg=="table"){dump_csv($Fd);$Fg="INSERT";}dump_csv($K);}else{if(!$rd)$rd="INSERT INTO ".table($Q)." (".implode(", ",array_map('idf_escape',$Fd)).") VALUES";foreach($K
as$x=>$X){$n=$o[$x];$K[$x]=($X!==null?unconvert_field($n,preg_match('~(^|[^o])int|float|double|decimal~',$n["type"])&&$X!=''?$X:q($X)):"NULL");}$fg=($ae?"\n":" ")."(".implode(",\t",$K).")";if(!$Va)$Va=$rd.$fg;elseif(strlen($Va)+4+strlen($fg)+strlen($Hg)<$ae)$Va.=",$fg";else{echo$Va.$Hg;$Va=$rd.$fg;}}}if($Va)echo$Va.$Hg;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($fd){return
friendly_url($fd!=""?$fd:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($fd,$pe=false){$af=$_POST["output"];$wc=(preg_match('~sql~',$_POST["format"])?"sql":($pe?"tar":"csv"));header("Content-Type: ".($af=="gz"?"application/x-gzip":($wc=="tar"?"application/x-tar":($wc=="sql"||$af!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($af=="gz")ob_start('ob_gzencode',1e6);return$wc;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.'Alter database'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Alter schema':'Create schema')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'Database schema'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'Privileges'."</a>\n":"");return
true;}function
navigation($oe){global$ia,$w,$Sb,$g;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="http://www.adminer.org/#download" target="_blank" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($oe=="auth"){$Fc=true;foreach((array)$_SESSION["pwds"]as$Nh=>$sg){foreach($sg
as$N=>$Ih){foreach($Ih
as$V=>$G){if($G!==null){if($Fc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Fc=false;}$Gb=$_SESSION["db"][$Nh][$N][$V];foreach(($Gb?array_keys($Gb):array(""))as$k)echo"<a href='".h(auth_url($Nh,$N,$V,$k))."'>($Sb[$Nh]) ".h($V.($N!=""?"@$N":"").($k!=""?" - $k":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$oe&&DB!=""){$g->select_db(DB);$S=table_status('',true);}if(support("sql")){echo'<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=jush.js&amp;version=4.1.0",'"></script>
<script type="text/javascript">
';if($S){$Td=array();foreach($S
as$Q=>$U)$Td[]=preg_quote($Q,'/');echo"var jushLinks = { $w: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$Td).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$w;\n";}echo'bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');
</script>
';}$this->databasesPrint($oe);if(DB==""||!$oe){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".'SQL command'."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".'Import'."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Dump'."</a>\n";}if($_GET["ns"]!==""&&!$oe&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Create table'."</a>\n";if(!$S)echo"<p class='message'>".'No tables.'."\n";else$this->tablesPrint($S);}}}function
databasesPrint($oe){global$b,$g;$j=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Eb=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo"<span title='".'database'."'>DB</span>: ".($j?"<select name='db'$Eb>".optionlist(array(""=>"")+$j,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".'Use'."'".($j?" class='hidden'":"").">\n";if($oe!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".'Schema'.": <select name='ns'$Eb>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($S){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($S
as$Q=>$Bg){echo'<a href="'.h(ME).'select='.urlencode($Q).'"'.bold($_GET["select"]==$Q||$_GET["edit"]==$Q).">".'select'."</a> ";$C=$this->tableName($Bg);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($Q).'"'.bold(in_array($Q,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($Bg)?"view":""))." title='".'Show structure'."'>$C</a>":"<span>$C</span>")."<br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$Le;function
page_header($eh,$m="",$Ua=array(),$fh=""){global$ca,$ia,$b,$Sb,$w;page_headers();$gh=$eh.($fh!=""?": $fh":"");$hh=strip_tags($gh.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$hh,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.1.0",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.1.0",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.1.0",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.1.0",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ia');\""),'>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="help" class="jush-',$w,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Ua!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$Sb[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):'Server');if($Ua===false)echo"$N\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ua)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Ua)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Ua
as$x=>$X){$Lb=(is_array($X)?$X[1]:h($X));if($Lb!="")echo"<a href='".h(ME."$x=").urlencode(is_array($X)?$X[0]:$X)."'>$Lb</a> &raquo; ";}}echo"$eh\n";}}echo"<h2>$gh</h2>\n";restart_session();page_messages($m);$j=&get_session("dbs");if(DB!=""&&$j&&!in_array(DB,$j,true))$j=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($m){$Dh=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$ke=$_SESSION["messages"][$Dh];if($ke){echo"<div class='message'>".implode("</div>\n<div class='message'>",$ke)."</div>\n";unset($_SESSION["messages"][$Dh]);}if($m)echo"<div class='error'>$m</div>\n";}function
page_footer($oe=""){global$b,$T;echo'</div>

';if($oe!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="',$T,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($oe);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($re){while($re>=2147483648)$re-=4294967296;while($re<=-2147483649)$re+=4294967296;return(int)$re;}function
long2str($W,$Sh){$fg='';foreach($W
as$X)$fg.=pack('V',$X);if($Sh)return
substr($fg,0,end($W));return$fg;}function
str2long($fg,$Sh){$W=array_values(unpack('V*',str_pad($fg,4*ceil(strlen($fg)/4),"\0")));if($Sh)$W[]=strlen($fg);return$W;}function
xxtea_mx($Yh,$Xh,$Ig,$Bd){return
int32((($Yh>>5&0x7FFFFFF)^$Xh<<2)+(($Xh>>3&0x1FFFFFFF)^$Yh<<4))^int32(($Ig^$Xh)+($Bd^$Yh));}function
encrypt_string($Dg,$x){if($Dg=="")return"";$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Dg,true);$re=count($W)-1;$Yh=$W[$re];$Xh=$W[0];$Ef=floor(6+52/($re+1));$Ig=0;while($Ef-->0){$Ig=int32($Ig+0x9E3779B9);$Zb=$Ig>>2&3;for($bf=0;$bf<$re;$bf++){$Xh=$W[$bf+1];$qe=xxtea_mx($Yh,$Xh,$Ig,$x[$bf&3^$Zb]);$Yh=int32($W[$bf]+$qe);$W[$bf]=$Yh;}$Xh=$W[0];$qe=xxtea_mx($Yh,$Xh,$Ig,$x[$bf&3^$Zb]);$Yh=int32($W[$re]+$qe);$W[$re]=$Yh;}return
long2str($W,false);}function
decrypt_string($Dg,$x){if($Dg=="")return"";if(!$x)return
false;$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Dg,false);$re=count($W)-1;$Yh=$W[$re];$Xh=$W[0];$Ef=floor(6+52/($re+1));$Ig=int32($Ef*0x9E3779B9);while($Ig){$Zb=$Ig>>2&3;for($bf=$re;$bf>0;$bf--){$Yh=$W[$bf-1];$qe=xxtea_mx($Yh,$Xh,$Ig,$x[$bf&3^$Zb]);$Xh=int32($W[$bf]-$qe);$W[$bf]=$Xh;}$Yh=$W[$re];$qe=xxtea_mx($Yh,$Xh,$Ig,$x[$bf&3^$Zb]);$Xh=int32($W[0]-$qe);$W[0]=$Xh;$Ig=int32($Ig-0x9E3779B9);}return
long2str($W,true);}$g='';$Zc=$_SESSION["token"];if(!$Zc)$_SESSION["token"]=rand(1,1e6);$T=get_token();$nf=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($x)=explode(":",$X);$nf[$x]=$X;}}function
add_invalid_login(){global$b;$Dc=get_temp_dir()."/adminer.invalid";$Nc=@fopen($Dc,"r+");if(!$Nc){$Nc=@fopen($Dc,"w");if(!$Nc)return;}flock($Nc,LOCK_EX);$ud=unserialize(stream_get_contents($Nc));$bh=time();if($ud){foreach($ud
as$vd=>$X){if($X[0]<$bh)unset($ud[$vd]);}}$td=&$ud[$b->bruteForceKey()];if(!$td)$td=array($bh+30*60,0);$td[1]++;$qg=serialize($ud);rewind($Nc);fwrite($Nc,$qg);ftruncate($Nc,strlen($qg));flock($Nc,LOCK_UN);fclose($Nc);}$Ia=$_POST["auth"];if($Ia){$ud=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$td=$ud[$b->bruteForceKey()];$xe=($td[1]>30?$td[0]-time():0);if($xe>0)auth_error(lang(array('Too many unsuccessful logins, try again in %d minute.','Too many unsuccessful logins, try again in %d minutes.'),ceil($xe/60)));session_regenerate_id();$l=$Ia["driver"];$N=$Ia["server"];$V=$Ia["username"];$G=(string)$Ia["password"];$k=$Ia["db"];set_password($l,$N,$V,$G);$_SESSION["db"][$l][$N][$V][$k]=true;if($Ia["permanent"]){$x=base64_encode($l)."-".base64_encode($N)."-".base64_encode($V)."-".base64_encode($k);$zf=$b->permanentLogin(true);$nf[$x]="$x:".base64_encode($zf?encrypt_string($G,$zf):"");cookie("adminer_permanent",implode(" ",$nf));}if(count($_POST)==1||DRIVER!=$l||SERVER!=$N||$_GET["username"]!==$V||DB!=$k)redirect(auth_url($l,$N,$V,$k));}elseif($_POST["logout"]){if($Zc&&!verify_token()){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$x)set_session($x,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($nf&&!$_SESSION["pwds"]){session_regenerate_id();$zf=$b->permanentLogin();foreach($nf
as$x=>$X){list(,$db)=explode(":",$X);list($Nh,$N,$V,$k)=array_map('base64_decode',explode("-",$x));set_password($Nh,$N,$V,decrypt_string(base64_decode($db),$zf));$_SESSION["db"][$Nh][$N][$V][$k]=true;}}function
unset_permanent(){global$nf;foreach($nf
as$x=>$X){list($Nh,$N,$V,$k)=array_map('base64_decode',explode("-",$x));if($Nh==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$k==DB)unset($nf[$x]);}cookie("adminer_permanent",implode(" ",$nf));}function
auth_error($m){global$b,$Zc;$tg=session_name();if(!$_COOKIE[$tg]&&$_GET[$tg]&&ini_bool("session.use_only_cookies"))$m='Session support must be enabled.';elseif(isset($_GET["username"])){if(($_COOKIE[$tg]||$_GET[$tg])&&!$Zc)$m='Session expired, please login again.';else{add_invalid_login();$G=get_password();if($G!==null){if($G===false)$m.='<br>'.sprintf('Master password expired. <a href="http://www.adminer.org/en/extension/" target="_blank">Implement</a> %s method to make it permanent.','<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}$F=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$F["lifetime"]);page_header('Login',$m,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$tf)),false);page_footer("auth");exit;}$g=connect();}$l=new
Min_Driver($g);if(!is_object($g)||!$b->login($_GET["username"],get_password()))auth_error((is_string($g)?$g:'Invalid credentials.'));if($Ia&&$_POST["token"])$_POST["token"]=$T;$m='';if($_POST){if(!verify_token()){$od="max_input_vars";$ee=ini_get($od);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$x){$X=ini_get($x);if($X&&(!$ee||$X<$ee)){$od=$x;$ee=$X;}}}$m=(!$_POST["token"]&&$ee?sprintf('Maximum number of allowed fields exceeded. Please increase %s.',"'$od'"):'Invalid CSRF token. Send the form again.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$m=sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.',"'post_max_size'");if(isset($_GET["sql"]))$m.=' '.'You can upload a big SQL file via FTP and import it from server.';}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
select($I,$h=null,$Te=array()){global$w;$Td=array();$v=array();$f=array();$Ra=array();$vh=array();$J=array();odd('');for($r=0;$K=$I->fetch_row();$r++){if(!$r){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Ad=0;$Ad<count($K);$Ad++){$n=$I->fetch_field();$C=$n->name;$Se=$n->orgtable;$Re=$n->orgname;$J[$n->table]=$Se;if($Te&&$w=="sql")$Td[$Ad]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($Se!=""){if(!isset($v[$Se])){$v[$Se]=array();foreach(indexes($Se,$h)as$u){if($u["type"]=="PRIMARY"){$v[$Se]=array_flip($u["columns"]);break;}}$f[$Se]=$v[$Se];}if(isset($f[$Se][$Re])){unset($f[$Se][$Re]);$v[$Se][$Re]=$Ad;$Td[$Ad]=$Se;}}if($n->charsetnr==63)$Ra[$Ad]=true;$vh[$Ad]=$n->type;echo"<th".($Se!=""||$n->name!=$Re?" title='".h(($Se!=""?"$Se.":"").$Re)."'":"").">".h($C).($Te?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($C))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($K
as$x=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ra[$x]&&!is_utf8($X))$X="<i>".lang(array('%d byte','%d bytes'),strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($vh[$x]==254)$X="<code>$X</code>";}if(isset($Td[$x])&&!$f[$Td[$x]]){if($Te&&$w=="sql"){$Q=$K[array_search("table=",$Td)];$_=$Td[$x].urlencode($Te[$Q]!=""?$Te[$Q]:$Q);}else{$_="edit=".urlencode($Td[$x]);foreach($v[$Td[$x]]as$hb=>$Ad)$_.="&where".urlencode("[".bracket_escape($hb)."]")."=".urlencode($K[$Ad]);}$X="<a href='".h(ME.$_)."'>$X</a>";}echo"<td>$X";}}echo($r?"</table>":"<p class='message'>".'No rows.')."\n";return$J;}function
referencable_primary($ng){$J=array();foreach(table_status('',true)as$Mg=>$Q){if($Mg!=$ng&&fk_support($Q)){foreach(fields($Mg)as$n){if($n["primary"]){if($J[$Mg]){unset($J[$Mg]);break;}$J[$Mg]=$n;}}}}return$J;}function
textarea($C,$Y,$L=10,$kb=80){global$w;echo"<textarea name='$C' rows='$L' cols='$kb' class='sqlarea jush-$w' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($x,$n,$jb,$Jc=array()){global$Eg,$vh,$Bh,$He;$U=$n["type"];echo'<td><select name="',$x,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);"',on_help("getTarget(event).value",1),'>';if($U&&!isset($vh[$U])&&!isset($Jc[$U]))array_unshift($Eg,$U);if($Jc)$Eg['Foreign keys']=$Jc;echo
optionlist($Eg,$U),'</select>
<td><input name="',$x,'[length]" value="',h($n["length"]),'" size="3" onfocus="editingLengthFocus(this);"',(!$n["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' onchange="editingLengthChange(this);" onkeyup="this.onchange();"><td class="options">';echo"<select name='$x"."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.'collation'.')'.optionlist($jb,$n["collation"]).'</select>',($Bh?"<select name='$x"."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($Bh,$n["unsigned"]).'</select>':''),(isset($n['on_update'])?"<select name='$x"."[on_update]'".(preg_match('~timestamp|datetime~',$U)?"":" class='hidden'").'>'.optionlist(array(""=>"(".'ON UPDATE'.")","CURRENT_TIMESTAMP"),$n["on_update"]).'</select>':''),($Jc?"<select name='$x"."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".'ON DELETE'.")".optionlist(explode("|",$He),$n["on_delete"])."</select> ":" ");}function
process_length($y){global$kc;return(preg_match("~^\\s*\\(?\\s*$kc(?:\\s*,\\s*$kc)*+\\s*\\)?\\s*\$~",$y)&&preg_match_all("~$kc~",$y,$Yd)?"(".implode(",",$Yd[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$y)));}function
process_type($n,$ib="COLLATE"){global$Bh;return" $n[type]".process_length($n["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$n["type"])&&in_array($n["unsigned"],$Bh)?" $n[unsigned]":"").(preg_match('~char|text|enum|set~',$n["type"])&&$n["collation"]?" $ib ".q($n["collation"]):"");}function
process_field($n,$th){global$w;$Ib=$n["default"];return
array(idf_escape(trim($n["field"])),process_type($th),($n["null"]?" NULL":" NOT NULL"),(isset($Ib)?" DEFAULT ".((preg_match('~time~',$n["type"])&&preg_match('~^CURRENT_TIMESTAMP$~i',$Ib))||($n["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Ib))||($w=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Ib))?$Ib:q($Ib)):""),(preg_match('~timestamp|datetime~',$n["type"])&&$n["on_update"]?" ON UPDATE $n[on_update]":""),(support("comment")&&$n["comment"]!=""?" COMMENT ".q($n["comment"]):""),($n["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$x=>$X){if(preg_match("~$x|$X~",$U))return" class='$x'";}}function
edit_fields($o,$jb,$U="TABLE",$Jc=array(),$ob=false){global$g,$pd;echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($U=="TABLE"?'Column name':'Parameter name'),'<td>Type<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Length
<td>Options
';if($U=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td>Default values
',(support("comment")?"<td".($ob?"":" class='hidden'").">".'Comment':"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($o))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.1.0' alt='+' title='".'Add next'."'>",'<script type="text/javascript">row_count = ',count($o),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($o
as$r=>$n){$r++;$Ue=$n[($_POST?"orig":"field")];$Pb=(isset($_POST["add"][$r-1])||(isset($n["field"])&&!$_POST["drop_col"][$r]))&&(support("drop_col")||$Ue=="");echo'<tr',($Pb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$r][inout]",explode("|",$pd),$n["inout"]):""),'<th>';if($Pb){echo'<input name="fields[',$r,'][field]" value="',h($n["field"]),'" onchange="editingNameChange(this);',($n["field"]!=""||count($o)>1?'':' editingAddRow(this);" onkeyup="if (this.value) editingAddRow(this);'),'" maxlength="64" autocapitalize="off">';}echo'<input type="hidden" name="fields[',$r,'][orig]" value="',h($Ue),'">
';edit_type("fields[$r]",$n,$jb,$Jc);if($U=="TABLE"){echo'<td>',checkbox("fields[$r][null]",1,$n["null"],"","","block"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$r,'"';if($n["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }"></label><td><?php
echo
checkbox("fields[$r][has_default]",1,$n["has_default"]),'<input name="fields[',$r,'][default]" value="',h($n["default"]),'" onkeyup="keyupChange.call(this);" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($ob?"":" class='hidden'")."><input name='fields[$r][comment]' value='".h($n["comment"])."' maxlength='".($g->server_info>=5.5?1024:255)."'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.1.0' alt='+' title='".'Add next'."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=4.1.0' alt='^' title='".'Move up'."'>&nbsp;"."<input type='image' class='icon' name='down[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=4.1.0' alt='v' title='".'Move down'."'>&nbsp;":""),($Ue==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.1.0' alt='x' title='".'Remove'."' onclick=\"return !editingRemoveRow(this, 'fields\$1[field]');\">":""),"\n";}}function
process_fields(&$o){ksort($o);$D=0;if($_POST["up"]){$Kd=0;foreach($o
as$x=>$n){if(key($_POST["up"])==$x){unset($o[$x]);array_splice($o,$Kd,0,array($n));break;}if(isset($n["field"]))$Kd=$D;$D++;}}elseif($_POST["down"]){$Lc=false;foreach($o
as$x=>$n){if(isset($n["field"])&&$Lc){unset($o[key($_POST["down"])]);array_splice($o,$D,0,array($Lc));break;}if(key($_POST["down"])==$x)$Lc=$n;$D++;}}elseif($_POST["add"]){$o=array_values($o);array_splice($o,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($B){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($B[0][0].$B[0][0],$B[0][0],substr($B[0],1,-1))),'\\'))."'";}function
grant($Rc,$Af,$f,$Ge){if(!$Af)return
true;if($Af==array("ALL PRIVILEGES","GRANT OPTION"))return($Rc=="GRANT"?queries("$Rc ALL PRIVILEGES$Ge WITH GRANT OPTION"):queries("$Rc ALL PRIVILEGES$Ge")&&queries("$Rc GRANT OPTION$Ge"));return
queries("$Rc ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$f, ",$Af).$f).$Ge);}function
drop_create($Tb,$yb,$Ub,$Yg,$Wb,$A,$je,$he,$ie,$De,$ue){if($_POST["drop"])query_redirect($Tb,$A,$je);elseif($De=="")query_redirect($yb,$A,$ie);elseif($De!=$ue){$_b=queries($yb);queries_redirect($A,$he,$_b&&queries($Tb));if($_b)queries($Ub);}else
queries_redirect($A,$he,queries($Yg)&&queries($Wb)&&queries($Tb)&&queries($yb));}function
create_trigger($Ge,$K){global$w;$dh=" $K[Timing] $K[Event]".($K["Event"]=="UPDATE OF"?" ".idf_escape($K["Of"]):"");return"CREATE TRIGGER ".idf_escape($K["Trigger"]).($w=="mssql"?$Ge.$dh:$dh.$Ge).rtrim(" $K[Type]\n$K[Statement]",";").";";}function
create_routine($bg,$K){global$pd;$O=array();$o=(array)$K["fields"];ksort($o);foreach($o
as$n){if($n["field"]!="")$O[]=(preg_match("~^($pd)\$~",$n["inout"])?"$n[inout] ":"").idf_escape($n["field"]).process_type($n,"CHARACTER SET");}return"CREATE $bg ".idf_escape(trim($K["name"]))." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($K["returns"],"CHARACTER SET"):"").($K["language"]?" LANGUAGE $K[language]":"").rtrim("\n$K[definition]",";").";";}function
remove_definer($H){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$H);}function
format_foreign_key($p){global$He;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$p["source"])).") REFERENCES ".table($p["table"])." (".implode(", ",array_map('idf_escape',$p["target"])).")".(preg_match("~^($He)\$~",$p["on_delete"])?" ON DELETE $p[on_delete]":"").(preg_match("~^($He)\$~",$p["on_update"])?" ON UPDATE $p[on_update]":"");}function
tar_file($Dc,$ih){$J=pack("a100a8a8a8a12a12",$Dc,644,0,0,decoct($ih->size),decoct(time()));$bb=8*32;for($r=0;$r<strlen($J);$r++)$bb+=ord($J[$r]);$J.=sprintf("%06o",$bb)."\0 ";echo$J,str_repeat("\0",512-strlen($J));$ih->send();echo
str_repeat("\0",511-($ih->size+511)%512);}function
ini_bytes($od){$X=ini_get($od);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($lf){global$w,$g;$Eh=array('sql'=>"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/",'sqlite'=>"http://www.sqlite.org/",'pgsql'=>"http://www.postgresql.org/docs/".substr($g->server_info,0,3)."/static/",'mssql'=>"http://msdn.microsoft.com/library/",'oracle'=>"http://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($lf[$w]?"<a href='$Eh[$w]$lf[$w]' target='_blank' rel='noreferrer'><sup>?</sup></a>":"");}function
ob_gzencode($P){return
gzencode($P);}function
db_size($k){global$g;if(!$g->select_db($k))return"?";$J=0;foreach(table_status()as$R)$J+=$R["Data_length"]+$R["Index_length"];return
format_number($J);}function
connect_error(){global$b,$g,$T,$m,$Sb;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header('Database'.": ".h(DB),'Invalid database.',true);}else{if($_POST["db"]&&!$m)queries_redirect(substr(ME,0,-1),'Databases have been dropped.',drop_databases($_POST["db"]));page_header('Select database',$m,false);echo"<p class='links'>\n";foreach(array('database'=>'Create new database','privileges'=>'Privileges','processlist'=>'Process list','variables'=>'Variables','status'=>'Status',)as$x=>$X){if(support($x))echo"<a href='".h(ME)."$x='>$X</a>\n";}echo"<p>".sprintf('%s version: %s through PHP extension %s',$Sb[DRIVER],"<b>".h($g->server_info)."</b>","<b>$g->extension</b>")."\n","<p>".sprintf('Logged as: %s',"<b>".h(logged_user())."</b>")."\n";$j=$b->databases();if($j){$ig=support("scheme");$jb=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".'Database'." - <a href='".h(ME)."refresh=1'>".'Refresh'."</a>"."<td>".'Collation'."<td>".'Tables'."<td>".'Size'." - <a href='".h(ME)."dbsize=1' onclick=\"return !ajaxSetHtml('".js_escape(ME)."script=connect');\">".'Compute'."</a>"."</thead>\n";$j=($_GET["dbsize"]?count_tables($j):array_flip($j));foreach($j
as$k=>$S){$ag=h(ME)."db=".urlencode($k);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$k,in_array($k,(array)$_POST["db"])):""),"<th><a href='$ag'>".h($k)."</a>";$d=nbsp(db_collation($k,$jb));echo"<td>".(support("database")?"<a href='$ag".($ig?"&amp;ns=":"")."&amp;database=' title='".'Alter database'."'>$d</a>":$d),"<td align='right'><a href='$ag&amp;schema=' id='tables-".h($k)."' title='".'Database schema'."'>".($_GET["dbsize"]?$S:"?")."</a>","<td align='right' id='size-".h($k)."'>".($_GET["dbsize"]?db_size($k):"?"),"\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".'Selected'." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^db/));\">\n"."<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n"."</div></fieldset>\n":""),"<script type='text/javascript'>tableCheck();</script>\n","<input type='hidden' name='token' value='$T'>\n","</form>\n";}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header('Schema'.": ".h($_GET["ns"]),'Invalid schema.',true);page_footer("ns");exit;}}$He="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
TmpFile(){$this->handler=tmpfile();}function
write($tb){$this->size+=strlen($tb);fwrite($this->handler,$tb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$kc="'(?:''|[^'\\\\]|\\\\.)*'";$pd="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$o=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$M=array(idf_escape($_GET["field"]));$I=$l->select($a,$M,array(where($_GET,$o)),$M);$K=($I?$I->fetch_row():array());echo$K[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$o=fields($a);if(!$o)$m=error();$R=table_status1($a,true);page_header(($o&&is_view($R)?'View':'Table').": ".h($a),$m);$b->selectLinks($R);$nb=$R["Comment"];if($nb!="")echo"<p>".'Comment'.": ".h($nb)."\n";if($o){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Column'."<td>".'Type'.(support("comment")?"<td>".'Comment':"")."</thead>\n";foreach($o
as$n){echo"<tr".odd()."><th>".h($n["field"]),"<td title='".h($n["collation"])."'>".h($n["full_type"]).($n["null"]?" <i>NULL</i>":"").($n["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(isset($n["default"])?" [<b>".h($n["default"])."</b>]":""),(support("comment")?"<td>".nbsp($n["comment"]):""),"\n";}echo"</table>\n";}if(!is_view($R)){if(support("indexes")){echo"<h3 id='indexes'>".'Indexes'."</h3>\n";$v=indexes($a);if($v){echo"<table cellspacing='0'>\n";foreach($v
as$C=>$u){ksort($u["columns"]);$yf=array();foreach($u["columns"]as$x=>$X)$yf[]="<i>".h($X)."</i>".($u["lengths"][$x]?"(".$u["lengths"][$x].")":"").($u["descs"][$x]?" DESC":"");echo"<tr title='".h($C)."'><th>$u[type]<td>".implode(", ",$yf)."\n";}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.'Alter indexes'."</a>\n";}if(fk_support($R)){echo"<h3 id='foreign-keys'>".'Foreign keys'."</h3>\n";$Jc=foreign_keys($a);if($Jc){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Source'."<td>".'Target'."<td>".'ON DELETE'."<td>".'ON UPDATE'."<td>&nbsp;</thead>\n";foreach($Jc
as$C=>$p){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$p["source"]))."</i>","<td><a href='".h($p["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($p["db"]),ME):($p["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($p["ns"]),ME):ME))."table=".urlencode($p["table"])."'>".($p["db"]!=""?"<b>".h($p["db"])."</b>.":"").($p["ns"]!=""?"<b>".h($p["ns"])."</b>.":"").h($p["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$p["target"]))."</i>)","<td>".nbsp($p["on_delete"])."\n","<td>".nbsp($p["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($C)).'">'.'Alter'.'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.'Add foreign key'."</a>\n";}}if(support(is_view($R)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".'Triggers'."</h3>\n";$sh=triggers($a);if($sh){echo"<table cellspacing='0'>\n";foreach($sh
as$x=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($x)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($x))."'>".'Alter'."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.'Add trigger'."</a>\n";}}elseif(isset($_GET["schema"])){page_header('Database schema',"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$Og=array();$Pg=array();$C="adminer_schema";$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$C-".DB]?"$C-".DB:$C)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$Yd,PREG_SET_ORDER);foreach($Yd
as$r=>$B){$Og[$B[1]]=array($B[2],$B[3]);$Pg[]="\n\t'".js_escape($B[1])."': [ $B[2], $B[3] ]";}$kh=0;$Oa=-1;$hg=array();$Pf=array();$Od=array();foreach(table_status('',true)as$Q=>$R){if(is_view($R))continue;$qf=0;$hg[$Q]["fields"]=array();foreach(fields($Q)as$C=>$n){$qf+=1.25;$n["pos"]=$qf;$hg[$Q]["fields"][$C]=$n;}$hg[$Q]["pos"]=($Og[$Q]?$Og[$Q]:array($kh,0));foreach($b->foreignKeys($Q)as$X){if(!$X["db"]){$Md=$Oa;if($Og[$Q][1]||$Og[$X["table"]][1])$Md=min(floatval($Og[$Q][1]),floatval($Og[$X["table"]][1]))-1;else$Oa-=.1;while($Od[(string)$Md])$Md-=.0001;$hg[$Q]["references"][$X["table"]][(string)$Md]=array($X["source"],$X["target"]);$Pf[$X["table"]][$Q][(string)$Md]=$X["target"];$Od[(string)$Md]=true;}}$kh=max($kh,$hg[$Q]["pos"][0]+2.5+$qf);}echo'<div id="schema" style="height: ',$kh,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$Pg)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$kh,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($hg
as$C=>$Q){echo"<div class='table' style='top: ".$Q["pos"][0]."em; left: ".$Q["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a>";foreach($Q["fields"]as$n){$X='<span'.type_class($n["type"]).' title="'.h($n["full_type"].($n["null"]?" NULL":'')).'">'.h($n["field"]).'</span>';echo"<br>".($n["primary"]?"<i>$X</i>":$X);}foreach((array)$Q["references"]as$Vg=>$Qf){foreach($Qf
as$Md=>$Mf){$Nd=$Md-$Og[$C][1];$r=0;foreach($Mf[0]as$xg)echo"\n<div class='references' title='".h($Vg)."' id='refs$Md-".($r++)."' style='left: $Nd"."em; top: ".$Q["fields"][$xg]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Nd)."em;'></div></div>";}}foreach((array)$Pf[$C]as$Vg=>$Qf){foreach($Qf
as$Md=>$f){$Nd=$Md-$Og[$C][1];$r=0;foreach($f
as$Ug)echo"\n<div class='references' title='".h($Vg)."' id='refd$Md-".($r++)."' style='left: $Nd"."em; top: ".$Q["fields"][$Ug]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=4.1.0'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Nd)."em;'></div></div>";}}echo"\n</div>\n";}foreach($hg
as$C=>$Q){foreach((array)$Q["references"]as$Vg=>$Qf){foreach($Qf
as$Md=>$Mf){$ne=$kh;$ce=-10;foreach($Mf[0]as$x=>$xg){$rf=$Q["pos"][0]+$Q["fields"][$xg]["pos"];$sf=$hg[$Vg]["pos"][0]+$hg[$Vg]["fields"][$Mf[1][$x]]["pos"];$ne=min($ne,$rf,$sf);$ce=max($ce,$rf,$sf);}echo"<div class='references' id='refl$Md' style='left: $Md"."em; top: $ne"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($ce-$ne)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">Permanent link</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$m){$wb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$x)$wb.="&$x=".urlencode($_POST[$x]);cookie("adminer_export",substr($wb,1));$S=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$wc=dump_headers((count($S)==1?key($S):DB),(DB==""||count($S)>1));$xd=preg_match('~sql~',$_POST["format"]);if($xd){echo"-- Adminer $ia ".$Sb[DRIVER]." dump\n\n";if($w=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";$g->query("SET time_zone = '+00:00';");}}$Fg=$_POST["db_style"];$j=array(DB);if(DB==""){$j=$_POST["databases"];if(is_string($j))$j=explode("\n",rtrim(str_replace("\r","",$j),"\n"));}foreach((array)$j
as$k){$b->dumpDatabase($k);if($g->select_db($k)){if($xd&&preg_match('~CREATE~',$Fg)&&($yb=$g->result("SHOW CREATE DATABASE ".idf_escape($k),1))){if($Fg=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($k).";\n";echo"$yb;\n";}if($xd){if($Fg)echo
use_sql($k).";\n\n";$Ze="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$bg){foreach(get_rows("SHOW $bg STATUS WHERE Db = ".q($k),null,"-- ")as$K)$Ze.=($Fg!='DROP+CREATE'?"DROP $bg IF EXISTS ".idf_escape($K["Name"]).";;\n":"").remove_definer($g->result("SHOW CREATE $bg ".idf_escape($K["Name"]),2)).";;\n\n";}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$K)$Ze.=($Fg!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($K["Name"]).";;\n":"").remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($K["Name"]),3)).";;\n\n";}if($Ze)echo"DELIMITER ;;\n\n$Ze"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Qh=array();foreach(table_status('',true)as$C=>$R){$Q=(DB==""||in_array($C,(array)$_POST["tables"]));$Bb=(DB==""||in_array($C,(array)$_POST["data"]));if($Q||$Bb){if($wc=="tar"){$ih=new
TmpFile;ob_start(array($ih,'write'),1e5);}$b->dumpTable($C,($Q?$_POST["table_style"]:""),(is_view($R)?2:0));if(is_view($R))$Qh[]=$C;elseif($Bb){$o=fields($C);$b->dumpData($C,$_POST["data_style"],"SELECT *".convert_fields($o,$o)." FROM ".table($C));}if($xd&&$_POST["triggers"]&&$Q&&($sh=trigger_sql($C,$_POST["table_style"])))echo"\nDELIMITER ;;\n$sh\nDELIMITER ;\n";if($wc=="tar"){ob_end_flush();tar_file((DB!=""?"":"$k/")."$C.csv",$ih);}elseif($xd)echo"\n";}}foreach($Qh
as$Ph)$b->dumpTable($Ph,$_POST["table_style"],1);if($wc=="tar")echo
pack("x512");}}}if($xd)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header('Export',$m,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Fb=array('','USE','DROP+CREATE','CREATE');$Qg=array('','DROP+CREATE','CREATE');$Cb=array('','TRUNCATE+INSERT','INSERT');if($w=="sql")$Cb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$K);if(!$K)$K=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($K["events"])){$K["routines"]=$K["events"]=($_GET["dump"]=="");$K["triggers"]=$K["table_style"];}echo"<tr><th>".'Output'."<td>".html_select("output",$b->dumpOutput(),$K["output"],0)."\n";echo"<tr><th>".'Format'."<td>".html_select("format",$b->dumpFormat(),$K["format"],0)."\n";echo($w=="sqlite"?"":"<tr><th>".'Database'."<td>".html_select('db_style',$Fb,$K["db_style"]).(support("routine")?checkbox("routines",1,$K["routines"],'Routines'):"").(support("event")?checkbox("events",1,$K["events"],'Events'):"")),"<tr><th>".'Tables'."<td>".html_select('table_style',$Qg,$K["table_style"]).checkbox("auto_increment",1,$K["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$K["triggers"],'Triggers'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$Cb,$K["data_style"]),'</table>
<p><input type="submit" value="Export">
<input type="hidden" name="token" value="',$T,'">

<table cellspacing="0">
';$vf=array();if(DB!=""){$Za=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$Za onclick='formCheck(this, /^tables\\[/);'>".'Tables'."</label>","<th style='text-align: right;'><label class='block'>".'Data'."<input type='checkbox' id='check-data'$Za onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Qh="";$Rg=tables_list();foreach($Rg
as$C=>$U){$uf=preg_replace('~_.*~','',$C);$Za=($a==""||$a==(substr($a,-1)=="%"?"$uf%":$C));$yf="<tr><td>".checkbox("tables[]",$C,$Za,$C,"checkboxClick(event, this); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$Qh.="$yf\n";else
echo"$yf<td align='right'><label class='block'><span id='Rows-".h($C)."'></span>".checkbox("data[]",$C,$Za,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$vf[$uf]++;}echo$Qh;if($Rg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Database'."</label></thead>\n";$j=$b->databases();if($j){foreach($j
as$k){if(!information_schema($k)){$uf=preg_replace('~_.*~','',$k);echo"<tr><td>".checkbox("databases[]",$k,$a==""||$a=="$uf%",$k,"formUncheck('check-databases');","block")."\n";$vf[$uf]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Fc=true;foreach($vf
as$x=>$X){if($x!=""&&$X>1){echo($Fc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$x%")."'>".h($x)."</a>";$Fc=false;}}}elseif(isset($_GET["privileges"])){page_header('Privileges');$I=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$Rc=$I;if(!$I)$I=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($Rc?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".'Username'."<th>".'Server'."<th>&nbsp;</thead>\n";while($K=$I->fetch_assoc())echo'<tr'.odd().'><td>'.h($K["User"])."<td>".h($K["Host"]).'<td><a href="'.h(ME.'user='.urlencode($K["User"]).'&host='.urlencode($K["Host"])).'">'.'Edit'."</a>\n";if(!$Rc||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".'Edit'."'>\n";echo"</table>\n","</form>\n",'<p class="links"><a href="'.h(ME).'user=">'.'Create user'."</a>";}elseif(isset($_GET["sql"])){if(!$m&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$bd=&get_session("queries");$ad=&$bd[DB];if(!$m&&$_POST["clear"]){$ad=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?'Import':'SQL command'),$m);if(!$m&&$_POST){$Nc=false;if(!isset($_GET["import"]))$H=$_POST["query"];elseif($_POST["webfile"]){$Nc=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$H=($Nc?fread($Nc,1e6):false);}else$H=get_file("sql_file",true);if(is_string($H)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($H)+memory_get_usage()+8e6));if($H!=""&&strlen($H)<1e6){$Ef=$H.(preg_match("~;[ \t\r\n]*\$~",$H)?"":";");if(!$ad||reset(end($ad))!=$Ef){restart_session();$ad[]=array($Ef,time());set_session("queries",$bd);stop_session();}}$yg="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\r?\n)";$Kb=";";$D=0;$hc=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$mb=0;$mc=array();$Sd=0;$ef='[\'"'.($w=="sql"?'`#':($w=="sqlite"?'`[':($w=="mssql"?'[':''))).']|/\\*|-- |$'.($w=="pgsql"?'|\\$[^$]*\\$':'');$lh=microtime(true);parse_str($_COOKIE["adminer_export"],$va);$Yb=$b->dumpFormat();unset($Yb["sql"]);while($H!=""){if(!$D&&preg_match("~^$yg*DELIMITER\\s+(\\S+)~i",$H,$B)){$Kb=$B[1];$H=substr($H,strlen($B[0]));}else{preg_match('('.preg_quote($Kb)."\\s*|$ef)",$H,$B,PREG_OFFSET_CAPTURE,$D);list($Lc,$qf)=$B[0];if(!$Lc&&$Nc&&!feof($Nc))$H.=fread($Nc,1e5);else{if(!$Lc&&rtrim($H)=="")break;$D=$qf+strlen($Lc);if($Lc&&rtrim($Lc)!=$Kb){while(preg_match('('.($Lc=='/*'?'\\*/':($Lc=='['?']':(preg_match('~^-- |^#~',$Lc)?"\n":preg_quote($Lc)."|\\\\."))).'|$)s',$H,$B,PREG_OFFSET_CAPTURE,$D)){$fg=$B[0][0];if(!$fg&&$Nc&&!feof($Nc))$H.=fread($Nc,1e5);else{$D=$B[0][1]+strlen($fg);if($fg[0]!="\\")break;}}}else{$hc=false;$Ef=substr($H,0,$qf);$mb++;$yf="<pre id='sql-$mb'><code class='jush-$w'>".shorten_utf8(trim($Ef),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$yf;ob_flush();flush();}$Ag=microtime(true);if($g->multi_query($Ef)&&is_object($h)&&preg_match("~^$yg*USE\\b~isU",$Ef))$h->query($Ef);do{$I=$g->store_result();$bh=" <span class='time'>(".format_time($Ag).")</span>".(strlen($Ef)<1000?" <a href='".h(ME)."sql=".urlencode(trim($Ef))."'>".'Edit'."</a>":"");if($g->error){echo($_POST["only_errors"]?$yf:""),"<p class='error'>".'Error in query'.($g->errno?" ($g->errno)":"").": ".error()."\n";$mc[]=" <a href='#sql-$mb'>$mb</a>";if($_POST["error_stops"])break
2;}elseif(is_object($I)){$Te=select($I,$h);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($I->num_rows?lang(array('%d row','%d rows'),$I->num_rows):"").$bh;$s="export-$mb";$vc=", <a href='#$s' onclick=\"return !toggle('$s');\">".'Export'."</a><span id='$s' class='hidden'>: ".html_select("output",$b->dumpOutput(),$va["output"])." ".html_select("format",$Yb,$va["format"])."<input type='hidden' name='query' value='".h($Ef)."'>"." <input type='submit' name='export' value='".'Export'."'><input type='hidden' name='token' value='$T'></span>\n";if($h&&preg_match("~^($yg|\\()*SELECT\\b~isU",$Ef)&&($uc=explain($h,$Ef))){$s="explain-$mb";echo", <a href='#$s' onclick=\"return !toggle('$s');\">EXPLAIN</a>$vc","<div id='$s' class='hidden'>\n";select($uc,$h,$Te);echo"</div>\n";}else
echo$vc;echo"</form>\n";}}else{if(preg_match("~^$yg*(CREATE|DROP|ALTER)$yg+(DATABASE|SCHEMA)\\b~isU",$Ef)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),$g->affected_rows)."$bh\n";}$Ag=microtime(true);}while($g->next_result());$Sd+=substr_count($Ef.$Lc,"\n");$H=substr($H,$D);$D=0;}}}}if($hc)echo"<p class='message'>".'No commands to execute.'."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('%d query executed OK.','%d queries executed OK.'),$mb-count($mc))," <span class='time'>(".format_time($lh).")</span>\n";}elseif($mc&&$mb>1)echo"<p class='error'>".'Error in query'.": ".implode("",$mc)."\n";}else
echo"<p class='error'>".upload_error($H)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$rc="<input type='submit' value='".'Execute'."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$Ef=$_GET["sql"];if($_POST)$Ef=$_POST["query"];elseif($_GET["history"]=="all")$Ef=$ad;elseif($_GET["history"]!="")$Ef=$ad[$_GET["history"]][0];echo"<p>";textarea("query",$Ef,20);echo($_POST?"":"<script type='text/javascript'>focus(document.getElementsByTagName('textarea')[0]);</script>\n"),"<p>$rc\n";}else{echo"<fieldset><legend>".'File upload'."</legend><div>",(ini_bool("file_uploads")?'<input type="file" name="sql_file[]" multiple> (&lt; '.ini_get("upload_max_filesize").'B)':'File uploads are disabled.'),"\n$rc","</div></fieldset>\n","<fieldset><legend>".'From server'."</legend><div>",sprintf('Webserver file %s',"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Run file'.'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),'Stop on error')."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),'Show only errors')."\n","<input type='hidden' name='token' value='$T'>\n";if(!isset($_GET["import"])&&$ad){print_fieldset("history",'History',$_GET["history"]!="");for($X=end($ad);$X;$X=prev($ad)){$x=key($ad);list($Ef,$bh,$cc)=$X;echo'<a href="'.h(ME."sql=&history=$x").'">'.'Edit'."</a>"." <span class='time' title='".@date('Y-m-d',$bh)."'>".@date("H:i:s",$bh)."</span>"." <code class='jush-$w'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$Ef)))),80,"</code>").($cc?" <span class='time'>($cc)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".'Clear'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Edit all'."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$o=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$o):""):where($_GET,$o));$Ch=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($o
as$C=>$n){if(!isset($n["privileges"][$Ch?"update":"insert"])||$b->fieldName($n)=="")unset($o[$C]);}if($_POST&&!$m&&!isset($_GET["select"])){$A=$_POST["referer"];if($_POST["insert"])$A=($Ch?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$A))$A=ME."select=".urlencode($a);$v=indexes($a);$yh=unique_array($_GET["where"],$v);$Hf="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($A,'Item has been deleted.',$l->delete($a,$Hf,!$yh));else{$O=array();foreach($o
as$C=>$n){$X=process_input($n);if($X!==false&&$X!==null)$O[idf_escape($C)]=$X;}if($Ch){if(!$O)redirect($A);queries_redirect($A,'Item has been updated.',$l->update($a,$O,$Hf,!$yh));if(is_ajax()){page_headers();page_messages($m);exit;}}else{$I=$l->insert($a,$O);$Ld=($I?last_id():0);queries_redirect($A,sprintf('Item%s has been inserted.',($Ld?" $Ld":"")),$I);}}}$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($o
as$C=>$n){if(isset($n["privileges"]["select"])){$Ea=convert_field($n);if($_POST["clone"]&&$n["auto_increment"])$Ea="''";if($w=="sql"&&preg_match("~enum|set~",$n["type"]))$Ea="1*".idf_escape($C);$M[]=($Ea?"$Ea AS ":"").idf_escape($C);}}$K=array();if(!support("table"))$M=array("*");if($M){$I=$l->select($a,$M,array($Z),$M,array(),(isset($_GET["select"])?2:1));$K=$I->fetch_assoc();if(!$K)$K=false;if(isset($_GET["select"])&&(!$K||$I->fetch_assoc()))$K=null;}}if(!support("table")&&!$o){if(!$Z){$I=$l->select($a,array("*"),$Z,array("*"));$K=($I?$I->fetch_assoc():false);if(!$K)$K=array($l->primary=>"");}if($K){foreach($K
as$x=>$X){if(!$Z)$K[$x]=null;$o[$x]=array("field"=>$x,"null"=>($x!=$l->primary),"auto_increment"=>($x==$l->primary));}}}edit_form($a,$o,$K,$Ch);}elseif(isset($_GET["create"])){$a=$_GET["create"];$ff=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$x)$ff[$x]=$x;$Of=referencable_primary($a);$Jc=array();foreach($Of
as$Mg=>$n)$Jc[str_replace("`","``",$Mg)."`".str_replace("`","``",$n["field"])]=$Mg;$We=array();$R=array();if($a!=""){$We=fields($a);$R=table_status($a);if(!$R)$m='No tables.';}$K=$_POST;$K["fields"]=(array)$K["fields"];if($K["auto_increment_col"])$K["fields"][$K["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($K["fields"])&&!$m){if($_POST["drop"])queries_redirect(substr(ME,0,-1),'Table has been dropped.',drop_tables(array($a)));else{$o=array();$Ba=array();$Fh=false;$Hc=array();ksort($K["fields"]);$Ve=reset($We);$za=" FIRST";foreach($K["fields"]as$x=>$n){$p=$Jc[$n["type"]];$th=($p!==null?$Of[$p]:$n);if($n["field"]!=""){if(!$n["has_default"])$n["default"]=null;if($x==$K["auto_increment_col"])$n["auto_increment"]=true;$Cf=process_field($n,$th);$Ba[]=array($n["orig"],$Cf,$za);if($Cf!=process_field($Ve,$Ve)){$o[]=array($n["orig"],$Cf,$za);if($n["orig"]!=""||$za)$Fh=true;}if($p!==null)$Hc[idf_escape($n["field"])]=($a!=""&&$w!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Jc[$n["type"]],'source'=>array($n["field"]),'target'=>array($th["field"]),'on_delete'=>$n["on_delete"],));$za=" AFTER ".idf_escape($n["field"]);}elseif($n["orig"]!=""){$Fh=true;$o[]=array($n["orig"]);}if($n["orig"]!=""){$Ve=next($We);if(!$Ve)$za="";}}$hf="";if($ff[$K["partition_by"]]){$if=array();if($K["partition_by"]=='RANGE'||$K["partition_by"]=='LIST'){foreach(array_filter($K["partition_names"])as$x=>$X){$Y=$K["partition_values"][$x];$if[]="\n  PARTITION ".idf_escape($X)." VALUES ".($K["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$hf.="\nPARTITION BY $K[partition_by]($K[partition])".($if?" (".implode(",",$if)."\n)":($K["partitions"]?" PARTITIONS ".(+$K["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$R["Create_options"]))$hf.="\nREMOVE PARTITIONING";$ge='Table has been altered.';if($a==""){cookie("adminer_engine",$K["Engine"]);$ge='Table has been created.';}$C=trim($K["name"]);queries_redirect(ME.(support("table")?"table=":"select=").urlencode($C),$ge,alter_table($a,$C,($w=="sqlite"&&($Fh||$Hc)?$Ba:$o),$Hc,$K["Comment"],($K["Engine"]&&$K["Engine"]!=$R["Engine"]?$K["Engine"]:""),($K["Collation"]&&$K["Collation"]!=$R["Collation"]?$K["Collation"]:""),($K["Auto_increment"]!=""?+$K["Auto_increment"]:""),$hf));}}page_header(($a!=""?'Alter table':'Create table'),$m,array("table"=>$a),h($a));if(!$_POST){$K=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($vh["int"])?"int":(isset($vh["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$K=$R;$K["name"]=$a;$K["fields"]=array();if(!$_GET["auto_increment"])$K["Auto_increment"]="";foreach($We
as$n){$n["has_default"]=isset($n["default"]);$K["fields"][]=$n;}if(support("partitioning")){$Oc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$I=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Oc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($K["partition_by"],$K["partitions"],$K["partition"])=$I->fetch_row();$if=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Oc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$if[""]="";$K["partition_names"]=array_keys($if);$K["partition_values"]=array_values($if);}}}$jb=collations();$jc=engines();foreach($jc
as$ic){if(!strcasecmp($ic,$K["Engine"])){$K["Engine"]=$ic;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo'Table name: <input name="name" maxlength="64" value="',h($K["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo($jc?"<select name='Engine' onchange='helpClose();'".on_help("getTarget(event).value",1).">".optionlist(array(""=>"(".'engine'.")")+$jc,$K["Engine"])."</select>":""),' ',($jb&&!preg_match("~sqlite|mssql~",$w)?html_select("Collation",array(""=>"(".'collation'.")")+$jb,$K["Collation"]):""),' <input type="submit" value="Save">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$ob=($_POST?$_POST["comments"]:$K["Comment"]!="");if(!$_POST&&!$ob){foreach($K["fields"]as$n){if($n["comment"]!=""){$ob=true;break;}}}edit_fields($K["fields"],$jb,"TABLE",$Jc,$ob);echo'</table>
<p>
Auto Increment: <input type="number" name="Auto_increment" size="6" value="',h($K["Auto_increment"]),'">
',checkbox("defaults",1,true,'Default values',"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($ob?" checked":"").">".'Comment'."</label>".' <input name="Comment" id="Comment" value="'.h($K["Comment"]).'" maxlength="'.($g->server_info>=5.5?2048:60).'"'.($ob?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="Save">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}if(support("partitioning")){$gf=preg_match('~RANGE|LIST~',$K["partition_by"]);print_fieldset("partition",'Partition by',$K["partition_by"]);echo'<p>
',"<select name='partition_by' onchange='partitionByChange(this);'".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).">".optionlist(array(""=>"")+$ff,$K["partition_by"])."</select>",'(<input name="partition" value="',h($K["partition"]),'">)
Partitions: <input type="number" name="partitions" class="size',($gf||!$K["partition_by"]?" hidden":""),'" value="',h($K["partitions"]),'">
<table cellspacing="0" id="partition-table"',($gf?"":" class='hidden'"),'>
<thead><tr><th>Partition name<th>Values</thead>
';foreach($K["partition_names"]as$x=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($x==count($K["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($K["partition_values"][$x]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$kd=array("PRIMARY","UNIQUE","INDEX");$R=table_status($a,true);if(preg_match('~MyISAM|M?aria'.($g->server_info>=5.6?'|InnoDB':'').'~i',$R["Engine"]))$kd[]="FULLTEXT";$v=indexes($a);$wf=array();if($w=="mongo"){$wf=$v["_id_"];unset($kd[0]);unset($v["_id_"]);}$K=$_POST;if($_POST&&!$m&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($K["indexes"]as$u){$C=$u["name"];if(in_array($u["type"],$kd)){$f=array();$Qd=array();$Mb=array();$O=array();ksort($u["columns"]);foreach($u["columns"]as$x=>$e){if($e!=""){$y=$u["lengths"][$x];$Lb=$u["descs"][$x];$O[]=idf_escape($e).($y?"(".(+$y).")":"").($Lb?" DESC":"");$f[]=$e;$Qd[]=($y?$y:null);$Mb[]=$Lb;}}if($f){$sc=$v[$C];if($sc){ksort($sc["columns"]);ksort($sc["lengths"]);ksort($sc["descs"]);if($u["type"]==$sc["type"]&&array_values($sc["columns"])===$f&&(!$sc["lengths"]||array_values($sc["lengths"])===$Qd)&&array_values($sc["descs"])===$Mb){unset($v[$C]);continue;}}$c[]=array($u["type"],$C,$O);}}}foreach($v
as$C=>$sc)$c[]=array($sc["type"],$C,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),'Indexes have been altered.',alter_indexes($a,$c));}page_header('Indexes',$m,array("table"=>$a),h($a));$o=array_keys(fields($a));if($_POST["add"]){foreach($K["indexes"]as$x=>$u){if($u["columns"][count($u["columns"])]!="")$K["indexes"][$x]["columns"][]="";}$u=end($K["indexes"]);if($u["type"]||array_filter($u["columns"],'strlen'))$K["indexes"][]=array("columns"=>array(1=>""));}if(!$K){foreach($v
as$x=>$u){$v[$x]["name"]=$x;$v[$x]["columns"][]="";}$v[]=array("columns"=>array(1=>""));$K["indexes"]=$v;}?>

<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th>Index Type
<th><input type="submit" style="left: -1000px; position: absolute;">Column (length)
<th>Name
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME)) . "?file=plus.gif&amp;version=4.1.0' alt='+' title='Add next'></noscript>&nbsp;
</thead>
<?php
if($wf){echo"<tr><td>PRIMARY<td>";foreach($wf["columns"]as$x=>$e){echo
select_input(" disabled",$o,$e),"<label><input disabled type='checkbox'>".'descending'."</label> ";}echo"<td><td>\n";}$Ad=1;foreach($K["indexes"]as$u){if(!$_POST["drop_col"]||$Ad!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Ad][type]",array(-1=>"")+$kd,$u["type"],($Ad==count($K["indexes"])?"indexesAddRow(this);":1)),"<td>";ksort($u["columns"]);$r=1;foreach($u["columns"]as$x=>$e){echo"<span>".select_input(" name='indexes[$Ad][columns][$r]' onchange=\"".($r==count($u["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($w=="sql"?"":$_GET["indexes"]."_")."');\"",($o?array_combine($o,$o):$o),$e),($w=="sql"||$w=="mssql"?"<input type='number' name='indexes[$Ad][lengths][$r]' class='size' value='".h($u["lengths"][$x])."'>":""),($w!="sql"?checkbox("indexes[$Ad][descs][$r]",1,$u["descs"][$x],'descending'):"")," </span>";$r++;}echo"<td><input name='indexes[$Ad][name]' value='".h($u["name"])."' autocapitalize='off'>\n","<td><input type='image' class='icon' name='drop_col[$Ad]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.1.0' alt='x' title='".'Remove'."' onclick=\"return !editingRemoveRow(this, 'indexes\$1[type]');\">\n";}$Ad++;}echo'</table>
<p>
<input type="submit" value="Save">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["database"])){$K=$_POST;if($_POST&&!$m&&!isset($_POST["add_x"])){restart_session();$C=trim($K["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Database has been dropped.',drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($C),'Database has been renamed.',rename_database($C,$K["collation"]));}else{$j=explode("\n",str_replace("\r","",$C));$Gg=true;$Kd="";foreach($j
as$k){if(count($j)==1||$k!=""){if(!create_database($k,$K["collation"]))$Gg=false;$Kd=$k;}}queries_redirect(ME."db=".urlencode($Kd),'Database has been created.',$Gg);}}else{if(!$K["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($C).(preg_match('~^[a-z0-9_]+$~i',$K["collation"])?" COLLATE $K[collation]":""),substr(ME,0,-1),'Database has been altered.');}}page_header(DB!=""?'Alter database':'Create database',$m,array(),h(DB));$jb=collations();$C=DB;if($_POST)$C=$K["name"];elseif(DB!="")$K["collation"]=db_collation(DB,$jb);elseif($w=="sql"){foreach(get_vals("SHOW GRANTS")as$Rc){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$Rc,$B)&&$B[1]){$C=stripcslashes(idf_unescape("`$B[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input name="name" id="name" value="'.h($C).'" maxlength="64" autocapitalize="off">')."\n".($jb?html_select("collation",array(""=>"(".'collation'.")")+$jb,$K["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="Save">
<?php
if(DB!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.1.0' alt='+' title='".'Add next'."'>\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["scheme"])){$K=$_POST;if($_POST&&!$m){$_=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$_,'Schema has been dropped.');else{$C=trim($K["name"]);$_.=urlencode($C);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($C),$_,'Schema has been created.');elseif($_GET["ns"]!=$C)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($C),$_,'Schema has been altered.');else
redirect($_);}}page_header($_GET["ns"]!=""?'Alter schema':'Create schema',$m);if(!$K)$K["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($K["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="Save">
<?php
if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header('Call'.": ".h($da),$m);$bg=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$id=array();$Ze=array();foreach($bg["fields"]as$r=>$n){if(substr($n["inout"],-3)=="OUT")$Ze[$r]="@".idf_escape($n["field"])." AS ".idf_escape($n["field"]);if(!$n["inout"]||substr($n["inout"],0,2)=="IN")$id[]=$r;}if(!$m&&$_POST){$Wa=array();foreach($bg["fields"]as$x=>$n){if(in_array($x,$id)){$X=process_input($n);if($X===false)$X="''";if(isset($Ze[$x]))$g->query("SET @".idf_escape($n["field"])." = $X");}$Wa[]=(isset($Ze[$x])?"@".idf_escape($n["field"]):$X);}$H=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$Wa).")";echo"<p><code class='jush-$w'>".h($H)."</code> <a href='".h(ME)."sql=".urlencode($H)."'>".'Edit'."</a>\n";if(!$g->multi_query($H))echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$I=$g->store_result();if(is_object($I))select($I,$h);else
echo"<p class='message'>".lang(array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),$g->affected_rows)."\n";}while($g->next_result());if($Ze)select($g->query("SELECT ".implode(", ",$Ze)));}}echo'
<form action="" method="post">
';if($id){echo"<table cellspacing='0'>\n";foreach($id
as$x){$n=$bg["fields"][$x];$C=$n["field"];echo"<tr><th>".$b->fieldName($n);$Y=$_POST["fields"][$C];if($Y!=""){if($n["type"]=="enum")$Y=+$Y;if($n["type"]=="set")$Y=array_sum($Y);}input($n,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Call">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$C=$_GET["name"];$K=$_POST;if($_POST&&!$m&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$ge=($_POST["drop"]?'Foreign key has been dropped.':($C!=""?'Foreign key has been altered.':'Foreign key has been created.'));$A=ME."table=".urlencode($a);$K["source"]=array_filter($K["source"],'strlen');ksort($K["source"]);$Ug=array();foreach($K["source"]as$x=>$X)$Ug[$x]=$K["target"][$x];$K["target"]=$Ug;if($w=="sqlite")queries_redirect($A,$ge,recreate_table($a,$a,array(),array(),array(" $C"=>($_POST["drop"]?"":" ".format_foreign_key($K)))));else{$c="ALTER TABLE ".table($a);$Tb="\nDROP ".($w=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($C);if($_POST["drop"])query_redirect($c.$Tb,$A,$ge);else{query_redirect($c.($C!=""?"$Tb,":"")."\nADD".format_foreign_key($K),$A,$ge);$m='Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.'."<br>$m";}}}page_header('Foreign key',$m,array("table"=>$a),h($a));if($_POST){ksort($K["source"]);if($_POST["add"])$K["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$K["target"]=array();}elseif($C!=""){$Jc=foreign_keys($a);$K=$Jc[$C];$K["source"][]="";}else{$K["table"]=$a;$K["source"]=array("");}$xg=array_keys(fields($a));$Ug=($a===$K["table"]?$xg:array_keys(fields($K["table"])));$Nf=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($K["db"]==""&&$K["ns"]==""){echo'Target table:
',html_select("table",$Nf,$K["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Change"></noscript>
<table cellspacing="0">
<thead><tr><th>Source<th>Target</thead>
';$Ad=0;foreach($K["source"]as$x=>$X){echo"<tr>","<td>".html_select("source[".(+$x)."]",array(-1=>"")+$xg,$X,($Ad==count($K["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$x)."]",$Ug,$K["target"][$x]);$Ad++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+explode("|",$He),$K["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+explode("|",$He),$K["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add column"></noscript>
';}if($C!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$K=$_POST;if($_POST&&!$m){$C=trim($K["name"]);$Ea=" AS\n$K[select]";$A=ME."table=".urlencode($C);$ge='View has been altered.';if(!$_POST["drop"]&&$a==$C&&$w!="sqlite")query_redirect(($w=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($C).$Ea,$A,$ge);else{$Wg=$C."_adminer_".uniqid();drop_create("DROP VIEW ".table($a),"CREATE VIEW ".table($C).$Ea,"DROP VIEW ".table($C),"CREATE VIEW ".table($Wg).$Ea,"DROP VIEW ".table($Wg),($_POST["drop"]?substr(ME,0,-1):$A),'View has been dropped.',$ge,'View has been created.',$a,$C);}}if(!$_POST&&$a!=""){$K=view($a);$K["name"]=$a;if(!$m)$m=$g->error;}page_header(($a!=""?'Alter view':'Create view'),$m,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>Name: <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("select",$K["select"]);echo'<p>
<input type="submit" value="Save">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$sd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Cg=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$K=$_POST;if($_POST&&!$m){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),'Event has been dropped.');elseif(in_array($K["INTERVAL_FIELD"],$sd)&&isset($Cg[$K["STATUS"]])){$gg="\nON SCHEDULE ".($K["INTERVAL_VALUE"]?"EVERY ".q($K["INTERVAL_VALUE"])." $K[INTERVAL_FIELD]".($K["STARTS"]?" STARTS ".q($K["STARTS"]):"").($K["ENDS"]?" ENDS ".q($K["ENDS"]):""):"AT ".q($K["STARTS"]))." ON COMPLETION".($K["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?'Event has been altered.':'Event has been created.'),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$gg.($aa!=$K["EVENT_NAME"]?"\nRENAME TO ".idf_escape($K["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($K["EVENT_NAME"]).$gg)."\n".$Cg[$K["STATUS"]]." COMMENT ".q($K["EVENT_COMMENT"]).rtrim(" DO\n$K[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?'Alter event'.": ".h($aa):'Create event'),$m);if(!$K&&$aa!=""){$L=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$K=reset($L);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Name<td><input name="EVENT_NAME" value="',h($K["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">Start<td><input name="STARTS" value="',h("$K[EXECUTE_AT]$K[STARTS]"),'">
<tr><th title="datetime">End<td><input name="ENDS" value="',h($K["ENDS"]),'">
<tr><th>Every<td><input type="number" name="INTERVAL_VALUE" value="',h($K["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$sd,$K["INTERVAL_FIELD"]),'<tr><th>Status<td>',html_select("STATUS",$Cg,$K["STATUS"]),'<tr><th>Comment<td><input name="EVENT_COMMENT" value="',h($K["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$K["ON_COMPLETION"]=="PRESERVE",'On completion preserve'),'</table>
<p>';textarea("EVENT_DEFINITION",$K["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="Save">
';if($aa!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$bg=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$K=$_POST;$K["fields"]=(array)$K["fields"];if($_POST&&!process_fields($K["fields"])&&!$m){$Wg="$K[name]_adminer_".uniqid();drop_create("DROP $bg ".idf_escape($da),create_routine($bg,$K),"DROP $bg ".idf_escape($K["name"]),create_routine($bg,array("name"=>$Wg)+$K),"DROP $bg ".idf_escape($Wg),substr(ME,0,-1),'Routine has been dropped.','Routine has been altered.','Routine has been created.',$da,$K["name"]);}page_header(($da!=""?(isset($_GET["function"])?'Alter function':'Alter procedure').": ".h($da):(isset($_GET["function"])?'Create function':'Create procedure')),$m);if(!$_POST&&$da!=""){$K=routine($da,$bg);$K["name"]=$da;}$jb=get_vals("SHOW CHARACTER SET");sort($jb);$cg=routine_languages();echo'
<form action="" method="post" id="form">
<p>Name: <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',($cg?'Language'.": ".html_select("language",$cg,$K["language"]):""),'<input type="submit" value="Save">
<table cellspacing="0" class="nowrap">
';edit_fields($K["fields"],$jb,$bg);if(isset($_GET["function"])){echo"<tr><td>".'Return type';edit_type("returns",$K["returns"],$jb);}echo'</table>
<p>';textarea("definition",$K["definition"]);echo'<p>
<input type="submit" value="Save">
';if($da!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$K=$_POST;if($_POST&&!$m){$_=substr(ME,0,-1);$C=trim($K["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$_,'Sequence has been dropped.');elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($C),$_,'Sequence has been created.');elseif($fa!=$C)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($C),$_,'Sequence has been altered.');else
redirect($_);}page_header($fa!=""?'Alter sequence'.": ".h($fa):'Create sequence',$m);if(!$K)$K["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($K["name"]),'" autocapitalize="off">
<input type="submit" value="Save">
';if($fa!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$K=$_POST;if($_POST&&!$m){$_=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$_,'Type has been dropped.');else
query_redirect("CREATE TYPE ".idf_escape(trim($K["name"]))." $K[as]",$_,'Type has been created.');}page_header($ga!=""?'Alter type'.": ".h($ga):'Create type',$m);if(!$K)$K["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";else{echo"<input name='name' value='".h($K['name'])."' autocapitalize='off'>\n";textarea("as",$K["as"]);echo"<p><input type='submit' value='".'Save'."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$C=$_GET["name"];$rh=trigger_options();$K=(array)trigger($C)+array("Trigger"=>$a."_bi");if($_POST){if(!$m&&in_array($_POST["Timing"],$rh["Timing"])&&in_array($_POST["Event"],$rh["Event"])&&in_array($_POST["Type"],$rh["Type"])){$Ge=" ON ".table($a);$Tb="DROP TRIGGER ".idf_escape($C).($w=="pgsql"?$Ge:"");$A=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($Tb,$A,'Trigger has been dropped.');else{if($C!="")queries($Tb);queries_redirect($A,($C!=""?'Trigger has been altered.':'Trigger has been created.'),queries(create_trigger($Ge,$_POST)));if($C!="")queries(create_trigger($Ge,$K+array("Type"=>reset($rh["Type"]))));}}$K=$_POST;}page_header(($C!=""?'Alter trigger'.": ".h($C):'Create trigger'),$m,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Time<td>',html_select("Timing",$rh["Timing"],$K["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>Event<td>',html_select("Event",$rh["Event"],$K["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$rh["Event"])?" <input name='Of' value='".h($K["Of"])."' class='hidden'>":""),'<tr><th>Type<td>',html_select("Type",$rh["Type"],$K["Type"]),'</table>
<p>Name: <input name="Trigger" value="',h($K["Trigger"]);?>" maxlength="64" autocapitalize="off">
<script type="text/javascript">document.getElementById('form')['Timing'].onchange();</script>
<p><?php textarea("Statement",$K["Statement"]);echo'<p>
<input type="submit" value="Save">
';if($C!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$Af=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$K){foreach(explode(",",($K["Privilege"]=="Grant option"?"":$K["Context"]))as$ub)$Af[$ub][$K["Privilege"]]=$K["Comment"];}$Af["Server Admin"]+=$Af["File access on server"];$Af["Databases"]["Create routine"]=$Af["Procedures"]["Create routine"];unset($Af["Procedures"]["Create routine"]);$Af["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$Af["Columns"][$X]=$Af["Tables"][$X];unset($Af["Server Admin"]["Usage"]);foreach($Af["Tables"]as$x=>$X)unset($Af["Databases"][$x]);$te=array();if($_POST){foreach($_POST["objects"]as$x=>$X)$te[$X]=(array)$te[$X]+(array)$_POST["grants"][$x];}$Sc=array();$Ee="";if(isset($_GET["host"])&&($I=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($K=$I->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$K[0],$B)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$B[1],$Yd,PREG_SET_ORDER)){foreach($Yd
as$X){if($X[1]!="USAGE")$Sc["$B[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$K[0]))$Sc["$B[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$K[0],$B))$Ee=$B[1];}}if($_POST&&!$m){$Fe=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $Fe",ME."privileges=",'User has been dropped.');else{$ve=q($_POST["user"])."@".q($_POST["host"]);$jf=$_POST["pass"];if($jf!=''&&!$_POST["hashed"]){$jf=$g->result("SELECT PASSWORD(".q($jf).")");$m=!$jf;}$_b=false;if(!$m){if($Fe!=$ve){$_b=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $ve IDENTIFIED BY PASSWORD ".q($jf));$m=!$_b;}elseif($jf!=$Ee)queries("SET PASSWORD FOR $ve = ".q($jf));}if(!$m){$Yf=array();foreach($te
as$_e=>$Rc){if(isset($_GET["grant"]))$Rc=array_filter($Rc);$Rc=array_keys($Rc);if(isset($_GET["grant"]))$Yf=array_diff(array_keys(array_filter($te[$_e],'strlen')),$Rc);elseif($Fe==$ve){$Ce=array_keys((array)$Sc[$_e]);$Yf=array_diff($Ce,$Rc);$Rc=array_diff($Rc,$Ce);unset($Sc[$_e]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$_e,$B)&&(!grant("REVOKE",$Yf,$B[2]," ON $B[1] FROM $ve")||!grant("GRANT",$Rc,$B[2]," ON $B[1] TO $ve"))){$m=true;break;}}}if(!$m&&isset($_GET["host"])){if($Fe!=$ve)queries("DROP USER $Fe");elseif(!isset($_GET["grant"])){foreach($Sc
as$_e=>$Yf){if(preg_match('~^(.+)(\\(.*\\))?$~U',$_e,$B))grant("REVOKE",array_keys($Yf),$B[2]," ON $B[1] FROM $ve");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'User has been altered.':'User has been created.'),!$m);if($_b)$g->query("DROP USER $ve");}}page_header((isset($_GET["host"])?'Username'.": ".h("$ha@$_GET[host]"):'Create user'),$m,array("privileges"=>array('','Privileges')));if($_POST){$K=$_POST;$Sc=$te;}else{$K=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$K["pass"]=$Ee;if($Ee!="")$K["hashed"]=true;$Sc[(DB==""||$Sc?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($K["host"]),'" autocapitalize="off">
<tr><th>Username<td><input name="user" maxlength="16" value="',h($K["user"]),'" autocapitalize="off">
<tr><th>Password<td><input name="pass" id="pass" value="',h($K["pass"]),'">
';if(!$K["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$K["hashed"],'Hashed',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".'Privileges'.doc_link(array('sql'=>"grant.html#priv_level"));$r=0;foreach($Sc
as$_e=>$Rc){echo'<th>'.($_e!="*.*"?"<input name='objects[$r]' value='".h($_e)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$r]' value='*.*' size='10'>*.*");$r++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Database',"Tables"=>'Table',"Columns"=>'Column',"Procedures"=>'Routine',)as$ub=>$Lb){foreach((array)$Af[$ub]as$_f=>$nb){echo"<tr".odd()."><td".($Lb?">$Lb<td":" colspan='2'").' lang="en" title="'.h($nb).'">'.h($_f);$r=0;foreach($Sc
as$_e=>$Rc){$C="'grants[$r][".h(strtoupper($_f))."]'";$Y=$Rc[strtoupper($_f)];if($ub=="Server Admin"&&$_e!=(isset($Sc["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".'Grant'."<option value='0'".($Y=="0"?" selected":"").">".'Revoke'."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$C value='1'".($Y?" checked":"").($_f=="All privileges"?" id='grants-$r-all'":($_f=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$r-all');\""))."></label>";$r++;}}}echo"</table>\n",'<p>
<input type="submit" value="Save">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$m){$Hd=0;foreach((array)$_POST["kill"]as$X){if(queries("KILL ".(+$X)))$Hd++;}queries_redirect(ME."processlist=",lang(array('%d process has been killed.','%d processes have been killed.'),$Hd),$Hd||!$_POST["kill"]);}page_header('Process list',$m);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$r=-1;foreach(process_list()as$r=>$K){if(!$r){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($K
as$x=>$X)echo"<th>$x".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($x),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$K["Id"],0):"");foreach($K
as$x=>$X)echo"<td>".(($w=="sql"&&$x=="Info"&&preg_match("~Query|Killed~",$K["Command"])&&$X!="")||($w=="pgsql"&&$x=="current_query"&&$X!="<IDLE>")||($w=="oracle"&&$x=="sql_text"&&$X!="")?"<code class='jush-$w'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($K["db"]!=""?"db=".urlencode($K["db"])."&":"")."sql=".urlencode($X)).'">'.'Clone'.'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($r+1)."/".sprintf('%d in total',$g->result("SELECT @@max_connections")),"<p><input type='submit' value='".'Kill'."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$R=table_status1($a);$v=indexes($a);$o=fields($a);$Jc=column_foreign_keys($a);$Be="";if($R["Oid"]){$Be=($w=="sqlite"?"rowid":"oid");$v[]=array("type"=>"PRIMARY","columns"=>array($Be));}parse_str($_COOKIE["adminer_import"],$wa);$Zf=array();$f=array();$ah=null;foreach($o
as$x=>$n){$C=$b->fieldName($n);if(isset($n["privileges"]["select"])&&$C!=""){$f[$x]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($n))$ah=$b->selectLengthProcess();}$Zf+=$n["privileges"];}list($M,$Tc)=$b->selectColumnsProcess($f,$v);$wd=count($Tc)<count($M);$Z=$b->selectSearchProcess($o,$v);$Qe=$b->selectOrderProcess($o,$v);$z=$b->selectLimitProcess();$Oc=($M?implode(", ",$M):"*".($Be?", $Be":"")).convert_fields($f,$o,$M)."\nFROM ".table($a);$Uc=($Tc&&$wd?"\nGROUP BY ".implode(", ",$Tc):"").($Qe?"\nORDER BY ".implode(", ",$Qe):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$zh=>$K){$Ea=convert_field($o[key($K)]);$M=array($Ea?$Ea:idf_escape(key($K)));$Z[]=where_check($zh,$o);$J=$l->select($a,$M,$Z,$M);if($J)echo
reset($J->fetch_row());}exit;}if($_POST&&!$m){$Uh=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$ab=array();foreach($_POST["check"]as$Ya)$ab[]=where_check($Ya,$o);$Uh[]="((".implode(") OR (",$ab)."))";}$Uh=($Uh?"\nWHERE ".implode(" AND ",$Uh):"");$wf=$Ah=null;foreach($v
as$u){if($u["type"]=="PRIMARY"){$wf=array_flip($u["columns"]);$Ah=($M?$wf:array());break;}}foreach((array)$Ah
as$x=>$X){if(in_array(idf_escape($x),$M))unset($Ah[$x]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Ah===array())$H="SELECT $Oc$Uh$Uc";else{$xh=array();foreach($_POST["check"]as$X)$xh[]="(SELECT".limit($Oc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$o).$Uc,1).")";$H=implode(" UNION ALL ",$xh);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($Z,$Jc)){if($_POST["save"]||$_POST["delete"]){$I=true;$xa=0;$O=array();if(!$_POST["delete"]){foreach($f
as$C=>$X){$X=process_input($o[$C]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));}}if($_POST["delete"]||$O){if($_POST["clone"])$H="INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a);if($_POST["all"]||($Ah===array()&&is_array($_POST["check"]))||$wd){$I=($_POST["delete"]?$l->delete($a,$Uh):($_POST["clone"]?queries("INSERT $H$Uh"):$l->update($a,$O,$Uh)));$xa=$g->affected_rows;}else{foreach((array)$_POST["check"]as$X){$Th="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$o);$I=($_POST["delete"]?$l->delete($a,$Th,1):($_POST["clone"]?queries("INSERT".limit1($H,$Th)):$l->update($a,$O,$Th)));if(!$I)break;$xa+=$g->affected_rows;}}}$ge=lang(array('%d item has been affected.','%d items have been affected.'),$xa);if($_POST["clone"]&&$I&&$xa==1){$Ld=last_id();if($Ld)$ge=sprintf('Item%s has been inserted.'," $Ld");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$ge,$I);if(!$_POST["delete"]){edit_form($a,$o,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$m='Ctrl+click on a value to modify it.';else{$I=true;$xa=0;foreach($_POST["val"]as$zh=>$K){$O=array();foreach($K
as$x=>$X){$x=bracket_escape($x,1);$O[idf_escape($x)]=(preg_match('~char|text~',$o[$x]["type"])||$X!=""?$b->processInput($o[$x],$X):"NULL");}$I=$l->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($zh,$o),!($wd||$Ah===array())," ");if(!$I)break;$xa+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$xa),$I);}}elseif(!is_string($Cc=get_file("csv_file",true)))$m=upload_error($Cc);elseif(!preg_match('~~u',$Cc))$m='File must be in UTF-8 encoding.';else{cookie("adminer_import","output=".urlencode($wa["output"])."&format=".urlencode($_POST["separator"]));$I=true;$kb=array_keys($o);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Cc,$Yd);$xa=count($Yd[0]);$l->begin();$og=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$L=array();foreach($Yd[0]as$x=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$og]*)$og~",$X.$og,$Zd);if(!$x&&!array_diff($Zd[1],$kb)){$kb=$Zd[1];$xa--;}else{$O=array();foreach($Zd[1]as$r=>$hb)$O[idf_escape($kb[$r])]=($hb==""&&$o[$kb[$r]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$hb))));$L[]=$O;}}$I=(!$L||$l->insertUpdate($a,$L,$wf));if($I)$l->commit();queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$xa),$I);$l->rollback();}}}$Mg=$b->tableName($R);if(is_ajax()){page_headers();ob_start();}else
page_header('Select'.": $Mg",$m);$O=null;if(isset($Zf["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){if(count($Jc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($R,$O);if(!$f&&support("table"))echo"<p class='error'>".'Unable to select the table'.($o?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$f);$b->selectSearchPrint($Z,$f,$v);$b->selectOrderPrint($Qe,$f,$v);$b->selectLimitPrint($z);$b->selectLengthPrint($ah);$b->selectActionPrint($v);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$Mc=$g->result(count_rows($a,$Z,$wd,$Tc));$E=floor(max(0,$Mc-1)/$z);}$lg=$M;if(!$lg){$lg[]="*";if($Be)$lg[]=$Be;}$vb=convert_fields($f,$o,$M);if($vb)$lg[]=substr($vb,2);$I=$l->select($a,$lg,$Z,$Tc,$Qe,$z,$E,true);if(!$I)echo"<p class='error'>".error()."\n";else{if($w=="mssql"&&$E)$I->seek($z*$E);$gc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$w=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last"&&+$z&&$Tc&&$wd&&$w=="sql")$Mc=$g->result(" SELECT FOUND_ROWS()");if(!$L)echo"<p class='message'>".'No rows.'."\n";else{$Na=$b->backwardKeys($a,$Mg);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Tc&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'Modify'."</a>");$se=array();$Qc=array();reset($M);$Jf=1;foreach($L[0]as$x=>$X){if($x!=$Be){$X=$_GET["columns"][key($M)];$n=$o[$M?($X?$X["col"]:current($M)):$x];$C=($n?$b->fieldName($n,$Jf):($X["fun"]?"*":$x));if($C!=""){$Jf++;$se[$x]=$C;$e=idf_escape($x);$ed=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($x);$Lb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($ed.($Qe[0]==$e||$Qe[0]==$x||(!$Qe&&$wd&&$Tc[0]==$e)?$Lb:'')).'">';echo
apply_sql_function($X["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($ed.$Lb)."' title='".'descending'."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($x)).'\'); return false;" title="'.'Search'.'" class="text jsonly"> =</a>';echo"</span>";}$Qc[$x]=$X["fun"];next($M);}}$Qd=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$x=>$X)$Qd[$x]=max($Qd[$x],min(40,strlen(utf8_decode($X))));}}echo($Na?"<th>".'Relations':"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Jc)as$re=>$K){$yh=unique_array($L[$re],$v);if(!$yh){$yh=array();foreach($L[$re]as$x=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$x))$yh[$x]=$X;}}$zh="";foreach($yh
as$x=>$X){if(($w=="sql"||$w=="pgsql")&&strlen($X)>64){$x="MD5(".(strpos($x,'(')?$x:idf_escape($x)).")";$X=md5($X);}$zh.="&".($X!==null?urlencode("where[".bracket_escape($x)."]")."=".urlencode($X):"null%5B%5D=".urlencode($x));}echo"<tr".odd().">".(!$Tc&&$M?"":"<td>".checkbox("check[]",substr($zh,1),in_array(substr($zh,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($wd||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$zh)."'>".'edit'."</a>"));foreach($K
as$x=>$X){if(isset($se[$x])){$n=$o[$x];if($X!=""&&(!isset($gc[$x])||$gc[$x]!=""))$gc[$x]=(is_mail($X)?$se[$x]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$n["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($x).$zh;if(!$_&&$X!==null){foreach((array)$Jc[$x]as$p){if(count($Jc[$x])==1||end($p["source"])==$x){$_="";foreach($p["source"]as$r=>$xg)$_.=where_link($r,$p["target"][$r],$L[$re][$xg]);$_=($p["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($p["db"]),ME):ME).'select='.urlencode($p["table"]).$_;if(count($p["source"])==1)break;}}}if($x=="COUNT(*)"){$_=ME."select=".urlencode($a);$r=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$yh))$_.=where_link($r++,$W["col"],$W["val"],$W["op"]);}foreach($yh
as$Bd=>$W)$_.=where_link($r++,$Bd,$W);}$X=select_value($X,$_,$n,$ah);$s=h("val[$zh][".bracket_escape($x)."]");$Y=$_POST["val"][$zh][bracket_escape($x)];$bc=!is_array($K[$x])&&is_utf8($X)&&$L[$re][$x]==$K[$x]&&!$Qc[$x];$Zg=preg_match('~text|lob~',$n["type"]);if(($_GET["modify"]&&$bc)||$Y!==null){$Wc=h($Y!==null?$Y:$K[$x]);echo"<td>".($Zg?"<textarea name='$s' cols='30' rows='".(substr_count($K[$x],"\n")+1)."'>$Wc</textarea>":"<input name='$s' value='$Wc' size='$Qd[$x]'>");}else{$Vd=strpos($X,"<i>...</i>");echo"<td id='$s' onclick=\"selectClick(this, event, ".($Vd?2:($Zg?1:0)).($bc?"":", '".h('Use edit link to modify this value.')."'").");\">$X";}}}if($Na)echo"<td>";$b->backwardKeysPrint($Na,$L[$re]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($L||$E)&&!is_ajax()){$qc=true;if($_GET["page"]!="last"){if(!+$z)$Mc=count($L);elseif($w!="sql"||!$wd){$Mc=($wd?false:found_rows($R,$Z));if($Mc<max(1e4,2*($E+1)*$z))$Mc=reset(slow_query(count_rows($a,$Z,$wd,$Tc)));else$qc=false;}}if(+$z&&($Mc===false||$Mc>$z||$E)){echo"<p class='pages'>";$be=($Mc===false?$E+(count($L)>=$z?2:1):floor(($Mc-1)/$z));if($w!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($E+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$E).($E>5?" ...":"");for($r=max(1,$E-4);$r<min($be,$E+5);$r++)echo
pagination($r,$E);if($be>0){echo($E+5<$be?" ...":""),($qc&&$Mc!==false?pagination($be,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$be'>".'last'."</a>");}echo(($Mc===false?count($L)+1:$Mc-$E*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.'Loading'.'...\');" class="loadmore">'.'Load more data'.'</a>':'');}else{echo'Page'.":",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($be>$E?pagination($E+1,$E).($be>$E+1?" ...":""):"");}}echo"<p class='count'>\n",($Mc!==false?"(".($qc?"":"~ ").lang(array('%d row','%d rows'),$Mc).") ":"");$Qb=($qc?"":"~ ").$Mc;echo
checkbox("all",1,0,'whole result',"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$Qb' : checked); selectCount('selected2', this.checked || !checked ? '$Qb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>Modify</legend><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Ctrl+click on a value to modify it.'.'"'),'>
</div></fieldset>
<fieldset><legend>Selected <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete"',confirm(),'>
</div></fieldset>
';}$Kc=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($Kc['sql']);break;}}if($Kc){print_fieldset("export",'Export'." <span id='selected2'></span>");$af=$b->dumpOutput();echo($af?html_select("output",$af,$wa["output"])." ":""),html_select("format",$Kc,$wa["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}echo(!$Tc&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",'Import',!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$wa["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($gc,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$T'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$Bg=isset($_GET["status"]);page_header($Bg?'Status':'Variables');$Mh=($Bg?show_status():show_variables());if(!$Mh)echo"<p class='message'>".'No rows.'."\n";else{echo"<table cellspacing='0'>\n";foreach($Mh
as$x=>$X){echo"<tr>","<th><code class='jush-".$w.($Bg?"status":"set")."'>".h($x)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Jg=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$C=>$R){$s=js_escape($C);json_row("Comment-$s",nbsp($R["Comment"]));if(!is_view($R)){foreach(array("Engine","Collation")as$x)json_row("$x-$s",nbsp($R[$x]));foreach($Jg+array("Auto_increment"=>0,"Rows"=>0)as$x=>$X){if($R[$x]!=""){$X=format_number($R[$x]);json_row("$x-$s",($x=="Rows"&&$X&&$R["Engine"]==($zg=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($Jg[$x]))$Jg[$x]+=($R["Engine"]!="InnoDB"||$x!="Data_free"?$R[$x]:0);}elseif(array_key_exists($x,$R))json_row("$x-$s");}}}foreach($Jg
as$x=>$X)json_row("sum-$x",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$g->query("KILL ".(+$_POST["kill"]));else{foreach(count_tables($b->databases())as$k=>$X){json_row("tables-$k",$X);json_row("size-$k",db_size($k));}json_row("");}exit;}else{$Sg=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Sg&&!$m&&!$_POST["search"]){$I=true;$ge="";if($w=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$I=truncate_tables($_POST["tables"]);$ge='Tables have been truncated.';}elseif($_POST["move"]){$I=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ge='Tables have been moved.';}elseif($_POST["copy"]){$I=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ge='Tables have been copied.';}elseif($_POST["drop"]){if($_POST["views"])$I=drop_views($_POST["views"]);if($I&&$_POST["tables"])$I=drop_tables($_POST["tables"]);$ge='Tables have been dropped.';}elseif($w!="sql"){$I=($w=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$ge='Tables have been optimized.';}elseif(!$_POST["tables"])$ge='No tables.';elseif($I=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($K=$I->fetch_assoc())$ge.="<b>".h($K["Table"])."</b>: ".h($K["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$ge,$I);}page_header(($_GET["ns"]==""?'Database'.": ".h(DB):'Schema'.": ".h($_GET["ns"])),$m,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".'Tables and views'."</h3>\n";$Rg=tables_list();if(!$Rg)echo"<p class='message'>".'No tables.'."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".'Search data in tables'." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Search'."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">','<th>'.'Table','<td>'.'Engine','<td>'.'Collation','<td>'.'Data Length','<td>'.'Index Length','<td>'.'Data Free','<td>'.'Auto Increment','<td>'.'Rows',(support("comment")?'<td>'.'Comment':''),"</thead>\n";$S=0;foreach($Rg
as$C=>$U){$Ph=($U!==null&&!preg_match('~table~i',$U));echo'<tr'.odd().'><td>'.checkbox(($Ph?"views[]":"tables[]"),$C,in_array($C,$Sg,true),"","formUncheck('check-all');"),'<th>'.(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($C).'" title="'.'Show structure'.'">'.h($C).'</a>':h($C));if($Ph){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.'Alter view'.'">'.'View'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.'Select data'.'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",'Alter table'),"Index_length"=>array("indexes",'Alter indexes'),"Data_free"=>array("edit",'New item'),"Auto_increment"=>array("auto_increment=1&create",'Alter table'),"Rows"=>array("select",'Select data'),)as$x=>$_){$s=" id='$x-".h($C)."'";echo($_?"<td align='right'>".(support("table")||$x=="Rows"||(support("indexes")&&$x!="Data_length")?"<a href='".h(ME."$_[0]=").urlencode($C)."'$s title='$_[1]'>?</a>":"<span$s>?</span>"):"<td id='$x-".h($C)."'>&nbsp;");}$S++;}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d in total',count($Rg)),"<td>".nbsp($w=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$x)echo"<td align='right' id='sum-$x'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$Jh="<input type='submit' value='".'Vacuum'."'".on_help("'VACUUM'")."> ";$Me="<input type='submit' name='optimize' value='".'Optimize'."'".on_help($w=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'")."> ";echo"<fieldset><legend>".'Selected'." <span id='selected'></span></legend><div>".($w=="sqlite"?$Jh:($w=="pgsql"?$Jh.$Me:($w=="sql"?"<input type='submit' value='".'Analyze'."'".on_help("'ANALYZE TABLE'")."> ".$Me."<input type='submit' name='check' value='".'Check'."'".on_help("'CHECK TABLE'")."> "."<input type='submit' name='repair' value='".'Repair'."'".on_help("'REPAIR TABLE'")."> ":"")))."<input type='submit' name='truncate' value='".'Truncate'."'".confirm().on_help($w=="sqlite"?"'DELETE'":"'TRUNCATE".($w=="pgsql"?"'":" TABLE'"))."> "."<input type='submit' name='drop' value='".'Drop'."'".confirm().on_help("'DROP TABLE'").">\n";$j=(support("scheme")?$b->schemas():$b->databases());if(count($j)!=1&&$w!="sqlite"){$k=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Move to other database'.": ",($j?html_select("target",$j,$k):'<input name="target" value="'.h($k).'" autocapitalize="off">')," <input type='submit' name='move' value='".'Move'."'>",(support("copy")?" <input type='submit' name='copy' value='".'Copy'."'>":""),"\n";}echo"<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $S);":"")."\">\n";echo"<input type='hidden' name='token' value='$T'>\n","</div></fieldset>\n";}echo"</form>\n","<script type='text/javascript'>tableCheck();</script>\n";}echo'<p class="links"><a href="'.h(ME).'create=">'.'Create table'."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.'Create view'."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".'Routines'."</h3>\n";$dg=routines();if($dg){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Name'.'<td>'.'Type'.'<td>'.'Return type'."<td>&nbsp;</thead>\n";odd('');foreach($dg
as$K){echo'<tr'.odd().'>','<th><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($K["ROUTINE_NAME"]).'">'.h($K["ROUTINE_NAME"]).'</a>','<td>'.h($K["ROUTINE_TYPE"]),'<td>'.h($K["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($K["ROUTINE_NAME"]).'">'.'Alter'."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'Create procedure'.'</a>':'').'<a href="'.h(ME).'function=">'.'Create function'."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".'Sequences'."</h3>\n";$pg=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($pg){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($pg
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".'Create sequence'."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".'User types'."</h3>\n";$Hh=types();if($Hh){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($Hh
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".'Create type'."</a>\n";}if(support("event")){echo"<h3 id='events'>".'Events'."</h3>\n";$L=get_rows("SHOW EVENTS");if($L){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."<td>".'Schedule'."<td>".'Start'."<td>".'End'."<td></thead>\n";foreach($L
as$K){echo"<tr>","<th>".h($K["Name"]),"<td>".($K["Execute at"]?'At given time'."<td>".$K["Execute at"]:'Every'." ".$K["Interval value"]." ".$K["Interval field"]."<td>$K[Starts]"),"<td>$K[Ends]",'<td><a href="'.h(ME).'event='.urlencode($K["Name"]).'">'.'Alter'.'</a>';}echo"</table>\n";$oc=$g->result("SELECT @@event_scheduler");if($oc&&$oc!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($oc)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.'Create event'."</a>\n";}if($Rg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();