<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.6.1
*/error_reporting(6135);$mc=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($mc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$W){$qg=filter_input_array(constant("INPUT$W"),FILTER_UNSAFE_RAW);if($qg)$$W=$qg;}}if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo"\000\000\000\000\000\000\000(\000\000\000\000\000(\000\000\000\000\000\000 \000\000\000\000\000\000\000\000\000¿\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000ˇˇˇ\000\000\000ˇ\000aN\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\00031\000\000\0001\000\000\0001\000\000\0001\000\000\0001\000\000\0001\000\000\0003331!31\000!\000\000\000!\000\000\000\000!\"\000\000\000\000\000\000\000\000\000\000\000\000ˇˇ’\000¿ˇ’\000Ä\000\000Ä\000Ä§\000ÄÄ\000Ä\000\000Ä\000\000Ä\000\000Äˇ\000Äˇ\000¿\000ˇ\000˛\000ˇ\000ˇ\000ˇÅ’\000ˇˇ’\000";}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1ÃáìŸåﬁl7úáB1Ñ4vb0òÕfsëºÍn2BÃ—±Ÿòﬁn:á#(ºb.\rDc)»»a7EÑë§¬l¶√±îËi1Ãésò¥Á-4ôáf”	»Œi7Ü≥ÈÜÑéåF√©ñ®aç'3I– d´¬!S±Êæ:4Áß+MdÂgØã¨«É°Óˆtô∞cëÜ£ı„È†b{èH(∆ì—ît1…)t⁄}F¶p0ôï8Ë\\82õDL>Ç9`'C°º€ó889§» éxQÿ˛\000Óe4ôÕQ òl¡≠P±øVâ≈bÒëóΩT4≤\\ûW/ôÊÈ’\nêÄ` 7\"hƒqπË4ZM6£T÷\r≠r\\ñ∂C{h€7\r”x67Œ©∫J á2.3êÂ9àKûÎ¢H¢,å!mî∆Üo\$„π.[\r&Ó#\$≤<¡àfÕ)èZ£\000=œr®è9√‹jŒ™J†Ë0´c,|Œ=ë√‚˘ΩÍö°Rs_6£Ñ›∑≠˚Ç·…ÌÄZ6£2Bæp\\-á1s2…“>éÉ X:\r‹∫ñ»3ªbö√ºÕ-8SLı¿Ìº…K.¸¥-‹“•\rH@ml·:¢Îµ;Æ˙˛¶ÓJ£0LR–2¥!Ëø´ÂAÍà∆2§	mMT7ÛåÁS’5]2Ï√Ó‰Eç)ÿ»£Ø≠Ê8\rÉÚ*`‹Ø.i˙Ç6Uıu*—è›”¥ìN÷«Ôe∆’◊U&¿MÑ˝DÕ\n†·#∆œÌ%%∑W`˙4ç£8˜j®	Ω≥XáCk|2Ll©Œ\r˝˘)É¿Z;∑”†t¯æC√7âTÒJCå?Í¡NŒƒ<Ì°nÛ: (TÖ.+ùU9eàÛóÆí[US56ÓeWíÔzH≈Ù®®Ë-éÉ»‡2á∑‡¬3å¢Ì˛ñ⁄ÿCÇ`Õ>ÖÀö»èÆ®PFÍÜÛS À¡ºﬁ\rCù&4`ı†X1[ç'∏£„b	eYñtWi™õÜ‰:C®⁄7cÄﬁ≤0ÍåâÈJıì”ñıGR´ˇV“|Ùurç¡l™¥•-º\r„ª\n8f{ª◊=ÑÈ9åùgiyé˚¢Ã£4òt8.¸/wôè}Í 2¯ã,Ê√{ZäÆêäªåêÂÅîc3øÈ^†@1d¥’Çç#êÆ'≈^Ñ[∞\r£(Ê°Íõ(tä;√wµÃh˜\nÙ»Kw~/Õ©§g6J‚?«©¢Øv2éXcà\r5˚!0nàs`%Âö\n¡rﬂ¯nqPVÑh@ÿP)§Îß∞·Hπ-]üê∞å\raº7p≠Í	0÷Y›ãÜRaçSë(ÄØôÛÁk\r∞˜‚˝ã!<Vœ©6†nfõ\000f\"·ç»™≈\\÷ ä|9n–ƒKbÒÄåπè8X6Oó‚FSÒÆ1G\n”Z{…b°†Û™–v≈#-(7Öƒ“ÿxpr-»£¶π§|>1˙@H)	!ú)'‰ı!f<Và;ŸlÃ8¨“ÓU§¨| ·∑î…*Lπ˜cLu>üfBﬂå\"qÆ<≤Üì‰»;ïÅâ&Æ»∑“h Fi0∫pdkU!!*r¿Éï-.†uŒc©¸j◊\"H3Ã(ÿõ3j°ì*s¨™D∞ƒ√€:AòÑr‡›_–}d Œá0X“Eû)ﬂ¨∑úä›ÿ;ûS—÷É©mgl¸*\r»ôPàò(£Â{jpç¢9ˆ√9/∞—Ûòßûú^Ö•lÆ¶•†ï95é”u ©Ûa4æ*'lñ≠*TCëº!N8®`ÂDi\"g%Õ˚B˘ÙAï© há≤gÆ¥rê›sÜ^ØÉ·1hâ0_Œ9»S™;Ê	fô≤% Õ⁄Td¥EDû”GTÁ–˙Rú20‰‚ü%yî·;7^~e„ë¨ÓRµ:rß[™¡≠§èq†◊&?4+Ä-≤∆]s’£¯{ÍÀ§=≥\$˙À)⁄c†È÷¶∆Ñ”ìIäÙTi©Åh\$4ÁkbßRuµÉ¶⁄zamNaŒ\"í¨È˙a\$ Ÿåÿä b∫ÕìexÜ–ﬁÅhu(Ê∆Fò42·Xb\reñÏ›≤åNÓı)ù∑Sî≈'@SvJd)C•Ño‚âs≥” ¯Ä«P*gW:^À˙–W+T˙ΩóIówº]√r≥ûìπ,0õ\000rÅ∞¶gè§∂7Uz·¨8æ&UT\\2‚ú6§‡\000r≈ÿp@7Ëë≠F™˜7‚GT5R¥UT¯c£>£O‡1òµ|˘ØáäÅ{W˙¿∫›C√x;é¨^–Œ#€iRb:«∏r}÷,fp%»u ◊*áHLµ'ÿ`@~&å0Õ≤kT≥*èü˘§=∏ö≥ÌÑÌ»\n–æ‹ä›Vk’| ëõ5¶#.ÍÏ3µà:E€ápÓù{…w÷\r‡ºÙXtË}");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:õågCIº‹\n:ÃÊsaîPi2\nOgc	»e6LÜÛ‘⁄e7∆s)–ã\rè»HGíIí∆∆3aÑÊs'c„—D i6úNå£—Ëú—2H„Ò8úuF§RÖ#≥îîÍr7á#©îv}Ä@†ê`Qåﬁo5öa‘Iú‹,2O'8îR-q:PÕ∆S∏(àaºä*wÉ(∏Á%ø‡pí<F)‹nx8‰zA\"≥Z-C€e∏V'àßÉÅ¶™s¢‰q’˚;NFì1‰≠≤9ÎGºÕ¶'0ô\r¶õŸ»ø±9n`√—ÄúX1©›ÅG3Ã‡tçee9äÆ:NeÌä˝N±–OSÚz¯cëåzlé`5‚„Å»ﬂ	≥3‚Òyﬂ¸8.ä\r„êŒπP‹˙\rÉ@ç£Æÿ\\1\r„ Û\000Ç@2j8ÿó=.∫¶∞ -r»√°®¨0çäËQ®Íä∫hƒbºåÅÏ`Å¿éª^9ãq⁄E!£ í7)#¿∫™* ¿Q∆»ã\000äÿ“1´»Ê\"ëh >Éÿ˙∞––∆⁄-C \"í‰XÆáS`\\ºè§F÷¨h8‡ä≤‚†¬3ß£`X:OÒö,™á´⁄˙)£8ä“<BN–É;>9¡8“Ûácº<á*¨Ê2éc•9œÈ >¢H¿zôOj™B'B™˙™éä∫≤å5ë,ÚÑPÏb5–45Ä÷3Ïˇ@ÖÅ:∑N+iöjõ’J¢ü⁄ä\\™é	®∆á·@º>ã†∆4Xr(QrèÅ RŸ° dÛÖu=œtÕA8A{åc\\äß)≥Ω|◊ÅC4\n6ÿWÌò7(V4l6µ	ñ9\r°vÀéaﬁ&:CKòç!Ê-°£pŒ:\r\000V¢M†QÜ#ıK@º\000“.ÖŸÄÀVy∑õ¶wE˚\"’„fÉ|jﬁbgŸºF>ƒã	BHnñ›∫Z¢‘B≤B∆\$…F0ïœ√=™ÒkC-9ç„∏˛C¥‰âOîç9^Z3\r«rÖ7‡÷0Í®uŸw˘ïM∏g˘≈∞†’v2∂‘qI∞ºÛ≤ÏˆpÂµ¿∏‰h5c„Py«ÖŸ.Êç[∞˜•hV'-çY¿Ã”T∞Ë”Ö›õí:v–˛ü®O&&6ä®Zó·»Œª	rn˚∂ï•æBc£o⁄ Õ0˙MÉ„£§≤xz]‘åô’çÍ«!ÄvÈdz/sÉ‚€CåÌë¶=ıd9KπeVXŸs:pÃ—à8ñr√A0&iÆ)÷§R\$˙Y_VÈ4¨æÖz˜»;ia∞4∞† lIÁÉãÙûÓqÿwlM(ßî¿‰·b)O&êÊ√xl&°¿√ìÿF`˘óUí¶Ç◊√ôÌy∆]N©PAx^+`êÜòLî™’gå∫(ÇÜ“|8Å¡,áƒË°Ë)äëY-*h∞™XkwT·–<°†BQ[Úú=´ÖtW„»on¥»@c›d“BÉ◊Æ»}U ¡>+5jW‰õFwN’&Ÿ6Ô\$Î o1~™◊©√\\	'“†¡=4@•D™hƒR,DFÎ≈+ÁIi êK\$Åêr≤#»áª\000¿!&Oö>¡BæÀ¶)Ü(·ò:∞ `LOóØà2&	∑Sk:(ì.8ë4h˙	‰ﬂ_\000˛u44⁄˙—[+ßE˚Ë»\rB…\$-ïf,Á\000CO;`âoÕ≤G>x£YSáIø@ŒAÌ_¡ëç9÷⁄˛Â	üÌì?÷ÍˇÿÏˆK ˆç3dñÀ®‘'sç£L∆]CY3-§Fbpÿ-.UDt¢ôîFäò(’>¢P:dä`»êb;°Æ@:⁄gí∂jJHP˜P— ºx\ríPêhl%‡∞4V\000ÿÚN àO5˘G†KàÅSöû¢÷Z¬Q	IveÏà≥÷ç>É¢¥)0‘7PêhL(†ò7 ÊŸ†™ÜøXK\rb,Uv\rêI®¢bï®P\rÊÊÃs§-SŒ‹áIìËUC±°Ã)•x9LC›®pF	´í∞-‘≥¿)=íI¬ÉAU¿≤‚ÜY!„ê!Üƒ‰'ãö\n`M◊w\$2Ü`VO.lw%0\\”Suì¯eß@ß©√‡œë◊p3€È¶%!‘'úÖô1V0aUÚ!π9DﬁBaçp0™ÜÕ6\r\r·ò3pË.ËtxK\na`ÆD@>¡∂¡\\'ÖI.å¢ShËCP!»«¿;î[bn\\\rí≥™˛˝ÑÙ≤±l™•8¿7„,hQC\nY\rˆJ¸£XdC d\nAº;ÇáfF+ÓWw–4LPÔ…ªHAµ!Ù;óâ&VÃ≤yÉ¢65öÂzÁÕ=ı£CÌçr“mƒä’i`ÀâbÒ\\gy‘ã\$#QùËmt–s«\\‡rsƒY˚≤\000y°®„ß£‰KC@i≈ßZ[ãyp∞¬C–]Ål.@Vº8\$¿≈Njpõ:Ic·ˆêœ}ï4Kï†é^É˙4ß)Êæ”8≤\000S4Äƒ‚§°ohR£®√\nﬂo:õTj≠Y´µÜ≤÷ïÀgmFpóJÈE4Oj∏µ´∫çfpœvyòP¬ÜP€Ω%Ÿ›Ô\\3ÚGÉpM\rˆŒ÷®-‹√g6ÖOaπà¥jŸ∞ß∆ås6?/i&¥´!‚ú3e∑GU7¯m\rŒ6¢˛Iñë@ãZsì¿nN¡?!\r N£-7ó√„≥ô5!B¬*πŸáı•Ø.Û…a.˘Á”œ√Búï|®°o§Hv·ªÌËΩâ£MˇX‹ZãÈnƒ‹hÔ§”±Æ≥I∞8/HQVˆ'rÌ%∑M±g\$\$VóÅGvì˚ËîIôRÉ(a©çBîNœ«HóÇÔÈ7%ÂPÅﬂíw~S.g9Z{¥ﬂÔOºéá??ìP¢ö¡ÊÜ‚{!¡bXJ§«W'Ä‚hrqDê«@√¶ö\$9œW6fä˛0‡§î@b˝‰B˘_0°É–b.¿&ôXMYØ~‹B#Í„ÇnÂc1£ç&1S>È…}—%¡‹≠’˚o‰’Jº≠eﬁ»ÑÜ‚\$˛\"Dx`∂ˇÇqIXDb0≤ê\000}Ê(0¿ÍCÜTƒFèÀ~ëÈ#Ç≤™+ÑWÔR˘ià∫!Ï;	£\000¢âî≠¨ıËÑ¯èåöNHi¶˚¿Ú˚0éÑ4(É«\"ËäØ‹çÖHpF˛iÀgÜ¿¢J(†æj¨º\rc@¬¿®\r\">‡eLÃ/ˇ∞ì\000\r‡†X˚´ÇH†“ ÜLıo[àB®∞‘\$O¶V¢àÄa ]\rÔö†f≤¯b∑È∞˚I¢˚Ø ¸&æ¸`¬ıojàêH¿êLâ¢˜œÄ–É¶∂ ü\r∞ÍöÔ© `)ÇˆN´jj™`ÍÉÎd∂ë(d FÖ]mÍ>â*∞%jH1NÍNo0õ(¢äoﬂhÊÿ†RLh±eL•YË§L‰®ﬁÏ≥\"|ì¨JH@)+D¥Éuë^ƒ†Sœêà©EkãB¥pÀ0G¶xbC*Ù–&ÇÄA≈lö{q∞– è\\ò•ö8ÉCÕi\nb⁄*p1'∞V“LvxPƒÃÏæJdX ÇHP\r§ÇÖ≠¨[` [≠≤\\\000ºø-`ÈÉœ≤(FÓ˛EƒÑãf•\$\n-†ö √“ß Úª£à®í`6`œ&rjÄ–§äf¿€&ílt‡˙•\"™\r¨ä†ÇJ£fˆC(‡t∆PSã&Æ1%Úã&2)Ñ√ò¶IÔ(“≈&Ú{&R”)R,Ä¬\rRhÆ‡ƒX\rÄƒ€ ÷.\000%å*†‚+•J'àNI\rÄ´‡Ë00ÜÂS	ì1ÄÀ1∆f t\nÖ \\#\\6 ∞	‡ƒ\rDo2¯S@ ìE4ìL cƒ	®:>¿Ê¬bE2k\nÄ†<‡uEX¿Û0DÏô≥0\$@ﬁCO\\2˙)Ä†	‡¶\nÜ\000‡ã:\000RíÍÆF/˝8ìÑ0¬K1≥Ñ	)-\$Ëp\$#.†®é¶‘Y≠Ó[®:æ.F\000Z?¿ÓßÜ≤Í\$Ã) …+SÉsºì¡sƒ8#d<@∞¥\nT§ä¨?+%õ7´2”äSîT©^;§,T£ŒLæë–ƒ7f]C\"ECÄÛ É(.ÚÚaTLi‰ô8≥ºIîPëﬁ∑¬≥D–6`í„&àXäæ¨2Ë¯¢%!4~äPL√F*ãDÃ\\0fX”¥¿dX<Cƒt†4ÎP·Ä \nè‘3‡RÏÑh˘N0 Û¥”äº¨¿P˘R¯PÄ∂˘Qå≥ç˙W‰ÑÜ™∏Á\\ãû2Â˝HÂ	Ó˝\$ÍOÄ√ffâ<Úi;«ô¥tódi,àEä†M£à≤Îi/‘™‘L\000^éFÄu(aäœJÇypZ;¢Ú¯º˝Bòåı`\ré‹íŒ œîı¥DÉ®±	8iä≥:ÿ	äôÒl¿êÏ˙†dÔ¡–\\ıpËqÌ˚ÄŸêÈ—ˇı0∞£d∞ÎµJEà%Kt˜æLÊ	Ï:\$±\$›≠Qo7QØ∫LTdÎ<‚Ú\$5Ì[£ãLÍdä»L`ÑÏW(rfe—IUÓëÉ.≈FPΩ`hÄd˚>ˆ¿Ëœ/Ï®5\000bŒ§Ω#“@€UB‰`Œê∞è∂:∑ïlK%∑c†zŒÊ3)fÒ^tÄÍ\000`#õ_Æ∏r«0(J†2∞\rfÚ¬õXœ;HÑHC_/ÏÊËÑ%iÀ‰:Ø/ §Û“Œrç)‡®\rÎD8à‹¿ñ\$ ±O¶øl†Ë)ËPÏÊVckÄ»≥‡æklæV∫66æ¯\000p‚a]VÛ@`äI¬\$#≈p†…o§ê9◊\$Çß\\˜∂ÙåÓ:+ıÔS5æ≥\r·^Ûﬁﬂ):!Íge∞ØÙoŒ(ÄeHÒ·I PΩÛ‰ækî3‡LRs¯V†™\n@íá\000€K£.ã’0\"#>(∂QDtùD≥/;¥<W\"ËŸ≤œf‘∂Tî∫0ˆˇ`RŒúW2¢Ü†ßrãf’·z÷]{É|ÜÖ£_ER\000YG|ìºÜC_qW‘c&]UHë|œi7'jVõ~ƒj√k2'oIo`ÀqCƒŒU‘JG6ÄZ•5‡„†V∑X0§ÑÛÚﬁ ‰Ñ	Äﬁ8.*†P XÉê#Ñ86Îpk0 !£8≤◊7Sc§æòVæÏs@Â\\>Ç°ÃæÇ\$¡≤õ)Ú¢J“®<KÈC[.TîæóãWîù~éå\$ØÄ≠Ê–üÊ‘LòiÜÀøz+ ◊®˝Q%fF?ãWßKÔ’dMHo%ƒ\\è¸t`‰ˆOe6eeìÅc†yÑPÀá±\\VQ`∞x~6-ıÉ™†ˆ¡∏`æòÕ\$&Ú’†Väòñ≥À—r WX\"Ω Wc‰∆xg[ÿksÇÇÇFû…©ã ìèW±Èi≤\n\nÏ∏≥‰UØ{ï9VOÛ‰Û™œÜÀ≈æ\rÄÖÁ™\rÇC§\rKf\r¶>„ﬁ>\$Úµ„Ó#àr?c˙?‰'`‰@ÑÓE Ä∆„@ı*848&87û®πÖZYã8ix8Ä◊V”Uò\n≠£ƒ∂†*yÂ#¬2<l^TÖ–\$£Aû∞p(eú˝@^boüπ’vK∫πÀòÇŒ√@O°bg†Ø3iÜæËˆÄÿ∏â<cŒ‹ƒ199t9Âm£¶:£‘;ú&y›U√«§ÉÆ÷∫XHc€°Yáú„?¢\000‘p£•È_áse&]XhU°b%¢¸/ øûCP_P∏Pö&†‹\r`D™# D¥î6B™@D4!.§∂`‚\rÄø¨\n™;∫¯∫ø¨-Õ¶U§⁄º0⁄¬¬⁄◊¨È!Æ	!öÎg≠bçB†t?Çí“å.z¬&`ﬁ\r†^B\000^πRé‰e&A#^?b@‡H˘C@¥‡œ¨Çä¨≥ØπûÖKtÄŒ4˚@§B\000Áõ@W±¬?wñÉπ¥uá≠⁄–>õ/¨ æk¨∫ÿ\reÆªq¨ö◊∑˙¬R˚)∂€≠˚Ö¨ªÉ∑#>+ÇC\nã‘,¿‹v`Œª&öÎÊ¨¿F‡™{¨÷å®\000]°`ôùWõ®ãf! €®˚Õ∑{À©ˆg¢é‡–ÉõËÄæR∏V£ù†dC8¿›EñF,ªD:|oªßÑäÇÕw¢/(‘‰ëy¿2<84SöÊv”öt ⁄yÇ⁄&≠Fø∫;tÙE˙_î0ƒ`¶Ãå∞ ∆|Æ~≠(m¿y	6ä»Â\000MBÍØ.Uy#¶q.w≈y˛\nÄ‰\n%«»Î\000Áäè˛@Ú≤π˛'úùäïb˝QE…<ó+VÏËvLX.C‡„àÉfø¿…Õ#dq√íY^üú÷Î#dY¶“†6d¢≠\$m∂>m„í„´◊«GV9.\\ÊÕﬁo:…†À¬ÜgŒcêÚ©Ê)Çé \"îΩºTÉ˝U\r Óı–mÜe’~öCiè¡5Øp¯¯ΩT¿ï¥öË‰˘11\000z(Âl,Ü\$n5¯í•C◊”◊˘}É◊„™á\"G=qÿËukÎ!vm⁄ﬂÇêT≠\$\000YÿÏ3‡∏<≈)∏}™+hΩ∂®\r◊*}Ñùt≥›z!›µíΩ≤ç4:ì‹›ò\rùúG]ÚH§ôGR™©0™≤ª‹±•ØåÑÎ›Ô#¢óÀ}÷´ù›ﬁÜóR˝∫4H%îÊøY7TÁír¥~.~|Ù‚Ê=œ¶EÆºr”jã&~Ω`∫(ê\000îŒP`œJïØÒH%„2Á±·!ŒxÖº\\Ã‹Õ'ÜX¬–'ñR◊§≤5ì¢Õáh-VæNÏ¶B§∑/ÂÕìÈË\r^ê tå˝TÕß«µ!π~j•È|q\nêÀ“Ω◊Ë[Í·ÍN\"ÎÓ&“E¥.	ÁÍá.\0005≈ÍÁÌ∆Õ1ÂßUÓàdG^Î»ü#.˝⁄rRFQ%(‡Ë\\‡zã•<6C\neÉÚÄ∫p£FF?.\$GÃ¿ˇ4\\˛ï*ı†–`b£?8‡∫ÙÊ:D∫ë‹áˆüm˜\000NKøv‹˝¶¿„ÛLÙŒI(pEÆDi≤ä\000ò	 ñ†¯\n@ã:@∞\n è‡˘¸\000(ø´˙|ƒ∫h\"+* P˚Ó‡J<ÊyÌBª‡c‡£ÚL∫\"^‹ÛÛ∆\r‡¥|Ëäå¯GËÄ∏eÅa}#ÈÄ˙Ñåô%∆`¯ÄŒ‡„Å´,¡†úÜ`ÅÅÒÔÀt˚tñÏƒ´@†8Ä|w\\&@0¸åÚoÄHsÔï,˚>Ã0Á~g√Ú¸tÏxÆá2\000~Hó¯¿l\$!K\nhüå}gçíåá(»rXlüør∫ä\000‡l~a\nF¸˜¬åÒˇÔÎŒœ≥@@Ã\"N4)_ôBË¡n¢HÇ¸&uºh™i	@W¿RJ”)¨@'-àˆ«¨)É\000˝\$`‡ß¯(†.\\qïq¡ç8¨),v»Ääò+âtå Îu ¢Ñ3‡_òü¯©`Œ\000Æ¿|}¸,@ƒ˛¿9?∏˚sxM,õ>H,sπ†ßQÇ@¿E°Ω›·\na]\000ÄKfÿY \r`\0000%iîGXC1ÿ\$ÙÉ5ãúFyHÎ∏°äÌuî¿ÄKEk»\$ÂQ·Ω%–‰åÇ>-≥˝˜m\"N9>\n†û¡â‰c%2Ò÷ÆıKCë{lÙ?N–i†Ä¥b∆Ä ∏`ê0\000¢\"}DCûæÌ8 ÄÖˆÑr/Äí ‚åy\\A◊àzƒ@d@òZƒz\$±sÚC\rAp@*¬Õ9IƒS¶?èà\n¸°Ç&^ø	ˆËí9ê_Ñ!%çeäÅ®áÀ≈FC¨êlåU«ëp\ní+â'|@Eá@>°—\r¡r„©¯⁄J°1ÿ\$¢ß2ÖxFbﬁ80BmÓùÑ¯aB\"»Ø4á2^ê\"(æ≈¸‡–våÜ ã8ì∏I» n\$Ac\"04ÄÓ(≈S)|eÉ¯Ä‚Äx)¥gÉVœÛ8ΩŒÖ[t¬!∫e)Pz]Ã®\$Uî#¥éQ∂∏ëHgxKÑÖ,ëº*#œ†»(äã¨’–‡ôêƒpq≥…ˇM¨“(“?⁄ıäx@	)√ô⁄–Å€Ìb†y\000GÅx@'o\000tåÓÁ=Ú6év€HåÓ∑D–œ∆Ä*ãHÖ*kÚ=‡ÎœT\r¯êëRhˇ«‡ ãzêƒñÑhÚ)ë∆•è˚÷«U ìOV?ÚåN–m@Ä‰œ∏x\000Ó°?ÅÃDçÆ§64	Üçs)Yâ∞\$˜©ΩZA25ºÉ†h©=T¶rS9=‚ﬁŸyõB,ßq¥Ö_?ÒóHº⁄.>íÄæE´n§9#‰ÜÄ≥`<;ﬁI.)¨§Ω%0ù…I#≤à\$E\"AxHúÓ&´OÄ¯gò¥;`|+—íUÆ.Ú…™Gıìó›¶Ö“.I–À†s¸ü@Î'˜Ô 	Ú)ëX–	—†>»l⁄ßùpBà≈[\r¬áV·î“ú¿˙C`\"µ¡≤+qwD\nË˚Ä∞—ùwb,‡ÇÛÖ)Ø9e“ú	\"ÆŸ)ÙsåöTQ™]=Ã‹Rô\\#∏+ÒÍ.¯	√õ*Ä;«√@+w¸4^Ñ‚∏◊8QâN\râîÃ´AcÂ¯áîuf ∏z∆“Mic;aŸW%≤±DlYßL @∂gò}ÖNà≠cËX˛gï»πƒYqÛ—@VW'\$Ä!E-\000^ﬁ0Ùµí&¿tOZVì\rπ`Åûb≤˛ñ#?·≈!®Ä\n<N‰vƒj!÷î Ä⁄? ùÅƒ©Ÿ/¢ã>&Bë\000BK…J7\$Ú¥F¢f¶är!\\Õ¨x`°C·hØªVk¿1*U P/9)/f6}ëpÕi#öY%®Ò1†\$Å`Ifòã…ßLΩ·=t◊-5ıDÕacFY≤“`—6Ö ÅPÚÔ_“NBïåÍãîiwd¸I¢önhC	–Öwô¨ã”4qåﬁÄNπG+^orõX—…‹¯2L˙'Ûéÿ~Bj'ò}ñTÂ·Cö1ó@‰®@:\":l†möËù¶¨@B,)Óì\nIÃ vãbñ∏˙sÅ\r»[Ñã:©ãd'lh[ùÿq:êç†<!≤|äY6Å√Œ∆	°Pt§Ìñï7ÉÍŒp ”}pàgÄJs™O÷ö∏ùc°=9⁄I»±≠ï\000…íí2Ä#.ö`!TQ#ç‰ç≤KërlìföÙÎ‹*B‘ï êœE∞E*'Ànsª´ÃÔB¨t7ÿƒÒ  z 'öÿ@[È\">˛!O…çs‹ÇxE¿(S4\"üÃﬂ˙˜ıÃå“@1c˙·ÿ∫∏∞\r‰S,n`ïD!2I∞)¥4j› ù<Ò§âµs‚Hc¸k•Ùg	ÉÄ∫a!5ò\\!¸\n—&âar\n(qn6†ò√pÙÖ≥`¥∆!ª>4E¶í¢2e≈A‘Vûî06\"¢gõ2%Tg%°=[R\" ¨ïëf∞sƒªÕ™6áyU EõCÄ–ˆáÍßá%àm0™*Å∫äÙP¢’#ãD…ÜQ=G§¡É∞¿—!ÙFŒn„√ñ~£§áä5…¯3[N…#y\r¢>≤K8À\"Zvß(ú¢ñ\rr¿S9ÿ; |3§DÏß©;T≠9åV,ù\rxJÂFd”ÑVôÅÛ/@^  Å9:@|~™s‡Ø@Àt*hÏ†¿OL¥s±q˜á)ûÈ)–'öjœ,Ñ 4å@È ®úÕ“Œ!:-) ›Jös”Jù nkùƒ…:2T\nûXüE>a¥‚∫wÜæXgû-1ùå©e\n\000|ì®8|˜√A\$ ÿj=Iq6––\000üï®3âhà∫~∫WÜ`îÛ·‹∆102Ö¥\r—∞ñÒöå±≥8TŒWƒ3î©„›Qzï,œ1Ù(~™>+S@ìÕFÜëÂ?§K…L¡œs24≥‚“ÑË#[L˛¨&¢£Ú… ,–ö»÷ØëëÅDäkê—öÓ©\"Ä™Y?år&J!¥}ƒı1s!ÖIS»ŸOŒïBYMQ™,cZπ‘¯CıL®Ï~Í°⁄©Ω÷™¥ª;\000x™≥KG≈=÷B√ˇ´’k;!⁄≤ãÇØ¿s5[\"ç¬k:µê»Âˆ5€”°¸hä eÍ—q≥÷¶q+¢|Hr3Â{AµÎB7ö—÷î‹Ò≠BÈQRÄØ÷&Æµ-´ÀÍ¯d⁄— é\"¨RüF;9†Üï'›Rå÷Áj_UZH2{‚\$ÜuA%÷–£D¨ÿ±ñm2ÿ-æq0AWÄD´ŒFa¡\n™C¿3Ç\000°…VEëãÅÙÄ.Q¨\000∫±ùCÓ&∆ÈÆ∏@∫˚Å®\r·ƒ+!êJ—∆¬∫gÆ™]Ék≥X1„-Eß—£%t†Ì]RÊ*¡∆n|pçÁÏeÑåÀﬁB⁄ìeÄÏ\n,€√Í,é¢H≈=î‘C%ˆàﬁ≠Ò£C√Ä9S3œæL‡/¬+júg˙«‘Ü»œè9ïx§phÍ¨õö b7´G,.◊“W’ıƒ7ñƒyZ¡ıV∏¶–v≤µ,E5\$:_…(•&“J-óËˇfoŸå÷5≈_er+ï]˙^îπ´°å!õÏadÅçdÀ§à¿\000Û	óLP]	G8¡“>C\000!∞ö%´8Ì6qsÄËö2‡>qˇÌ4P∆ê¯d∫Ç¬dbs`öÄ;ò]™¬‘,–\\ñjÌò¢q–√i{⁄P‡aáñ·k@ÏÎ{Eë‹©9+ŸQ>`4¢H!§‘	·≈•kp:(.D‡/;”èmV¿-™◊(5∂‡Q\$vr®Z.Õ¥º;ë(Æ§æΩGf;}{JävwB”\rMWê∑È\\Ç±-¡§ÔxbëÇî⁄s∫ùºÄ≈q\narì˛˚Éã“ﬂ@Ñ1#∆Dﬂ«π°.Â\n5Á!p°†2t!±ﬁM«Æ&3ãëOxW≤ﬁë[k\000íª:‹®_}Ëç-¶@Äı–#Õ…»j&Ÿ6xπ@.à–À\000[\000£pŸï~w ¡ΩHÔp<Ü]ÖW0ÕŒV€¡?æVE›~nnó@‹˙â77}’C>›2›uï=ªl‚kv|Äπ`√(π’Õ¿cvp6∂VÊ∆[Ö’“çaGl\\‹• ~ÿ?u±òfÏ§‘ïﬁ.”r€µéfÌÕ¢M‹“áuÎæ^9iEI⁄êF~Dc ÜäÙßÛÆ}q[†Ä∫ıWDàΩ—Ëˆ,“Â≤^∞é qÓrêP»›™ÊΩú5∑oj∏^‚Íªπï∑nñu¢]8Ì◊ê7©ˇ”èx’ò›p⁄µıÔ# ˚…õVâ\"ËiY@{w·¿ô †1æ•!AKºÖ~˙◊â∂¢ÎÃ2ªª_ûÌ\000;ø]‹R}¿]b¬ó„ÛÔÂ~õwÑñÛÔ3Hp‘P0∑dπΩÊ∞\$;˚[~˜Ë1—œ-ÇJÜnáØÑ)JãÄ˚e[1'e}∂yÌ£rR—√Ê›U&Wë'*J®√—ßiÊ`[=}µ√/n1wáÇ÷[U∂∞r—%‡>Ÿpt∂iE~o6)ò8ëHj5Õ9,ÿV\000¨˘Aü\nx\nÓ¸bº‹s	∏)SëπÄT}uù`¯`Y–g»˜Ök¸¨ø8(_oÖ¸0·ãÉÍËƒBªÖ›.ÒwÀàj˚∏ËWqõõ3™Ùó®§É¿jvyπ†Ï0g´!§ÿ∞/\000ı˜cÄ∆Cz†Ò3D8≠c¿∏E&@1/R`s`€¸–");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF87a\000\000°\000\000ÓÓÓ\000\000\000ôôô\000\000\000,\000\000\000\000\000\000\000!Ñè©ÀÌMÒÃ*)æo˙Ø) qï°eàµÓ#ƒÚLÀ\000;";break;case"cross.gif":echo"GIF87a\000\000°\000\000ÓÓÓ\000\000\000ôôô\000\000\000,\000\000\000\000\000\000\000#Ñè©ÀÌ#\na÷Fo~y√.Å_waî·1Á±JÓG¬L◊6]\000\000;";break;case"up.gif":echo"GIF87a\000\000°\000\000ÓÓÓ\000\000\000ôôô\000\000\000,\000\000\000\000\000\000\000 Ñè©ÀÌMQN\nÔ}Ùûa8äyöa≈∂Æ\000«Ú\000;";break;case"down.gif":echo"GIF87a\000\000°\000\000ÓÓÓ\000\000\000ôôô\000\000\000,\000\000\000\000\000\000\000 Ñè©ÀÌMÒÃ*)æ[W˛\\¢«L&Ÿú∆∂ï\000«Ú\000;";break;case"arrow.gif":echo"GIF89a\000\n\000Ä\000\000ÄÄÄˇˇˇ!˘\000\000\000,\000\000\000\000\000\n\000\000Çiñ±ãûî™”≤ﬁª\000\000;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($r){$gd=substr($r,-1);return
str_replace($gd.$gd,$gd,substr($r,1,-1));}function
escape_string($W){return
substr(q($W),1,-1);}function
remove_slashes($Le,$mc=false){if(get_magic_quotes_gpc()){while(list($v,$W)=each($Le)){foreach($W
as$Zc=>$V){unset($Le[$v][$Zc]);if(is_array($V)){$Le[$v][stripslashes($Zc)]=$V;$Le[]=&$Le[$v][stripslashes($Zc)];}else$Le[$v][stripslashes($Zc)]=($mc?$V:stripslashes($V));}}}}function
bracket_escape($r,$Ca=false){static$cg=array(':'=>':1',']'=>':2','['=>':3');return
strtr($r,($Ca?array_flip($cg):$cg));}function
h($M){return
htmlspecialchars(str_replace("\0","",$M),ENT_QUOTES);}function
nbsp($M){return(trim($M)!=""?h($M):"&nbsp;");}function
nl_br($M){return
str_replace("\n","<br>",$M);}function
checkbox($_,$X,$Pa,$ed="",$Xd="",$Yc=false){static$q=0;$q++;$G="<input type='checkbox' name='$_' value='".h($X)."'".($Pa?" checked":"").($Xd?' onclick="'.h($Xd).'"':'').($Yc?" class='jsonly'":"")." id='checkbox-$q'>";return($ed!=""?"<label for='checkbox-$q'>$G".h($ed)."</label>":$G);}function
optionlist($be,$of=null,$wg=false){$G="";foreach($be
as$Zc=>$V){$ce=array($Zc=>$V);if(is_array($V)){$G.='<optgroup label="'.h($Zc).'">';$ce=$V;}foreach($ce
as$v=>$W)$G.='<option'.($wg||is_string($v)?' value="'.h($v).'"':'').(($wg||is_string($v)?(string)$v:$W)===$of?' selected':'').'>'.h($W);if(is_array($V))$G.='</optgroup>';}return$G;}function
html_select($_,$be,$X="",$Wd=true){if($Wd)return"<select name='".h($_)."'".(is_string($Wd)?' onchange="'.h($Wd).'"':"").">".optionlist($be,$X)."</select>";$G="";foreach($be
as$v=>$W)$G.="<label><input type='radio' name='".h($_)."' value='".h($v)."'".($v==$X?" checked":"").">".h($W)."</label>";return$G;}function
confirm($ib=""){return" onclick=\"return confirm('".'Are you sure?'.($ib?" (' + $ib + ')":"")."');\"";}function
print_fieldset($q,$ld,$Cg=false,$Xd=""){echo"<fieldset><legend><a href='#fieldset-$q' onclick=\"".h($Xd)."return !toggle('fieldset-$q');\">$ld</a></legend><div id='fieldset-$q'".($Cg?"":" class='hidden'").">\n";}function
bold($Ja){return($Ja?" class='active'":"");}function
odd($G=' class="odd"'){static$p=0;if(!$G)$p=-1;return($p++%2?$G:'');}function
js_escape($M){return
addcslashes($M,"\r\n'\\/");}function
json_row($v,$W=null){static$nc=true;if($nc)echo"{";if($v!=""){echo($nc?"":",")."\n\t\"".addcslashes($v,"\r\n\"\\").'": '.($W!==null?'"'.addcslashes($W,"\r\n\"\\").'"':'undefined');$nc=false;}else{echo"\n}\n";$nc=true;}}function
ini_bool($Oc){$W=ini_get($Oc);return(eregi('^(on|true|yes)$',$W)||(int)$W);}function
sid(){static$G;if($G===null)$G=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$G;}function
q($M){global$g;return$g->quote($M);}function
get_vals($E,$e=0){global$g;$G=array();$F=$g->query($E);if(is_object($F)){while($H=$F->fetch_row())$G[]=$H[$e];}return$G;}function
get_key_vals($E,$h=null){global$g;if(!is_object($h))$h=$g;$G=array();$F=$h->query($E);if(is_object($F)){while($H=$F->fetch_row())$G[$H[0]]=$H[1];}return$G;}function
get_rows($E,$h=null,$k="<p class='error'>"){global$g;$eb=(is_object($h)?$h:$g);$G=array();$F=$eb->query($E);if(is_object($F)){while($H=$F->fetch_assoc())$G[]=$H;}elseif(!$F&&!is_object($h)&&$k&&defined("PAGE_HEADER"))echo$k.error()."\n";return$G;}function
unique_array($H,$t){foreach($t
as$s){if(ereg("PRIMARY|UNIQUE",$s["type"])){$G=array();foreach($s["columns"]as$v){if(!isset($H[$v]))continue
2;$G[$v]=$H[$v];}return$G;}}$G=array();foreach($H
as$v=>$W){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$v))$G[$v]=$W;}return$G;}function
where($Z){global$u;$G=array();foreach((array)$Z["where"]as$v=>$W)$G[]=idf_escape(bracket_escape($v,1)).(($u=="sql"&&ereg('\\.',$W))||$u=="mssql"?" LIKE ".exact_value(addcslashes($W,"%_\\")):" = ".exact_value($W));foreach((array)$Z["null"]as$v)$G[]=idf_escape($v)." IS NULL";return
implode(" AND ",$G);}function
where_check($W){parse_str($W,$Oa);remove_slashes(array(&$Oa));return
where($Oa);}function
where_link($p,$e,$X,$Yd="="){return"&where%5B$p%5D%5Bcol%5D=".urlencode($e)."&where%5B$p%5D%5Bop%5D=".urlencode(($X!==null?$Yd:"IS NULL"))."&where%5B$p%5D%5Bval%5D=".urlencode($X);}function
cookie($_,$X){global$ba;$qe=array($_,(ereg("\n",$X)?"":$X),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$qe[]=true;return
call_user_func_array('setcookie',$qe);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($v){return$_SESSION[$v][DRIVER][SERVER][$_GET["username"]];}function
set_session($v,$W){$_SESSION[$v][DRIVER][SERVER][$_GET["username"]]=$W;}function
auth_url($Bb,$K,$U,$j=null){global$Cb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Cb))."|username|".($j!==null?"db|":"").session_name()),$z);return"$z[1]?".(sid()?SID."&":"").($Bb!="server"||$K!=""?urlencode($Bb)."=".urlencode($K)."&":"")."username=".urlencode($U).($j!=""?"&db=".urlencode($j):"").($z[2]?"&$z[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($pd,$_d=null){if($_d!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($pd!==null?$pd:$_SERVER["REQUEST_URI"]))][]=$_d;}if($pd!==null){if($pd=="")$pd=".";header("Location: $pd");exit;}}function
query_redirect($E,$pd,$_d,$Qe=true,$bc=true,$ic=false){global$g,$k,$b;if($bc)$ic=!$g->query($E);$xf="";if($E)$xf=$b->messageQuery("$E;");if($ic){$k=error().$xf;return
false;}if($Qe)redirect($pd,$_d.$xf);return
true;}function
queries($E=null){global$g;static$Oe=array();if($E===null)return
implode(";\n",$Oe);$Oe[]=(ereg(';$',$E)?"DELIMITER ;;\n$E;\nDELIMITER ":$E);return$g->query($E);}function
apply_queries($E,$Q,$Wb='table'){foreach($Q
as$O){if(!queries("$E ".$Wb($O)))return
false;}return
true;}function
queries_redirect($pd,$_d,$Qe){return
query_redirect(queries(),$pd,$_d,$Qe,false,!$Qe);}function
remove_from_uri($pe=""){return
substr(preg_replace("~(?<=[?&])($pe".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($B,$nb){return" ".($B==$nb?$B+1:'<a href="'.h(remove_from_uri("page").($B?"&page=$B":"")).'">'.($B+1)."</a>");}function
get_file($v,$tb=false){$kc=$_FILES[$v];if(!$kc||$kc["error"])return$kc["error"];$G=file_get_contents($tb&&ereg('\\.gz$',$kc["name"])?"compress.zlib://$kc[tmp_name]":($tb&&ereg('\\.bz2$',$kc["name"])?"compress.bzip2://$kc[tmp_name]":$kc["tmp_name"]));if($tb){$yf=substr($G,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$yf,$Xe))$G=iconv("utf-16","utf-8",$G);elseif($yf=="\xEF\xBB\xBF")$G=substr($G,3);}return$G;}function
upload_error($k){$yd=($k==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($k?'Unable to upload a file.'.($yd?" ".sprintf('Maximum allowed file size is %sB.',$yd):""):'File does not exist.');}function
repeat_pattern($xe,$w){return
str_repeat("$xe{0,65535}",$w/65535)."$xe{0,".($w%65535)."}";}function
is_utf8($W){return(preg_match('~~u',$W)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$W));}function
shorten_utf8($M,$w=80,$Df=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$w).")($)?)u",$M,$z))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$w).")($)?)",$M,$z);return
h($z[1]).$Df.(isset($z[2])?"":"<i>...</i>");}function
friendly_url($W){return
preg_replace('~[^a-z0-9_]~i','-',$W);}function
hidden_fields($Le,$Jc=array()){while(list($v,$W)=each($Le)){if(is_array($W)){foreach($W
as$Zc=>$V)$Le[$v."[$Zc]"]=$V;}elseif(!in_array($v,$Jc))echo'<input type="hidden" name="'.h($v).'" value="'.h($W).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($O){global$b;$G=array();foreach($b->foreignKeys($O)as$n){foreach($n["source"]as$W)$G[$W][]=$n;}return$G;}function
enum_input($S,$za,$l,$X,$Ob=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$td);$G=($Ob!==null?"<label><input type='$S'$za value='$Ob'".((is_array($X)?in_array($Ob,$X):$X===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($td[1]as$p=>$W){$W=stripcslashes(str_replace("''","'",$W));$Pa=(is_int($X)?$X==$p+1:(is_array($X)?in_array($p+1,$X):$X===$W));$G.=" <label><input type='$S'$za value='".($p+1)."'".($Pa?' checked':'').'>'.h($b->editVal($W,$l)).'</label>';}return$G;}function
input($l,$X,$o){global$T,$b,$u;$_=h(bracket_escape($l["field"]));echo"<td class='function'>";$Ze=($u=="mssql"&&$l["auto_increment"]);if($Ze&&!$_POST["save"])$o=null;$yc=(isset($_GET["select"])||$Ze?array("orig"=>'original'):array())+$b->editFunctions($l);$za=" name='fields[$_]'";if($l["type"]=="enum")echo
nbsp($yc[""])."<td>".$b->editInput($_GET["edit"],$l,$za,$X);else{$nc=0;foreach($yc
as$v=>$W){if($v===""||!$W)break;$nc++;}$Wd=($nc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($l["field"])))."]']; if ($nc > f.selectedIndex) f.selectedIndex = $nc;\"":"");$za.=$Wd;echo(count($yc)>1?html_select("function[$_]",$yc,$o===null||in_array($o,$yc)||isset($yc[$o])?$o:"","functionChange(this);"):nbsp(reset($yc))).'<td>';$Qc=$b->editInput($_GET["edit"],$l,$za,$X);if($Qc!="")echo$Qc;elseif($l["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$td);foreach($td[1]as$p=>$W){$W=stripcslashes(str_replace("''","'",$W));$Pa=(is_int($X)?($X>>$p)&1:in_array($W,explode(",",$X),true));echo" <label><input type='checkbox' name='fields[$_][$p]' value='".(1<<$p)."'".($Pa?' checked':'')."$Wd>".h($b->editVal($W,$l)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$_'$Wd>";elseif(($Sf=ereg('text|lob',$l["type"]))||ereg("\n",$X)){if($Sf&&$u!="sqlite")$za.=" cols='50' rows='12'";else{$I=min(12,substr_count($X,"\n")+1);$za.=" cols='30' rows='$I'".($I==1?" style='height: 1.2em;'":"");}echo"<textarea$za>".h($X).'</textarea>';}else{$zd=(!ereg('int',$l["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$l["length"],$z)?((ereg("binary",$l["type"])?2:1)*$z[1]+($z[3]?1:0)+($z[2]&&!$l["unsigned"]?1:0)):($T[$l["type"]]?$T[$l["type"]]+($l["unsigned"]?0:1):0));echo"<input value='".h($X)."'".($zd?" maxlength='$zd'":"").(ereg('char|binary',$l["type"])&&$zd>20?" size='40'":"")."$za>";}}}function
process_input($l){global$b;$r=bracket_escape($l["field"]);$o=$_POST["function"][$r];$X=$_POST["fields"][$r];if($l["type"]=="enum"){if($X==-1)return
false;if($X=="")return"NULL";return+$X;}if($l["auto_increment"]&&$X=="")return
null;if($o=="orig")return($l["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($l["field"]):false);if($o=="NULL")return"NULL";if($l["type"]=="set")return
array_sum((array)$X);if(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads")){$kc=get_file("fields-$r");if(!is_string($kc))return
false;return
q($kc);}return$b->processInput($l,$X,$o);}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$tc=false;foreach(table_status()as$O=>$P){$_=$b->tableName($P);if(isset($P["Engine"])&&$_!=""&&(!$_POST["tables"]||in_array($O,$_POST["tables"]))){$F=$g->query("SELECT".limit("1 FROM ".table($O)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($O),array())),1));if(!$F||$F->fetch_row()){if(!$tc){echo"<ul>\n";$tc=true;}echo"<li>".($F?"<a href='".h(ME."select=".urlencode($O)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$_</a>\n":"$_: <span class='error'>".error()."</span>\n");}}}echo($tc?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($Ic,$Hd=false){global$b;$G=$b->dumpHeaders($Ic,$Hd);$ne=$_POST["output"];if($ne!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Ic).".$G".($ne!="file"&&!ereg('[^0-9a-z]',$ne)?".$ne":""));session_write_close();return$G;}function
dump_csv($H){foreach($H
as$v=>$W){if(preg_match("~[\"\n,;\t]~",$W)||$W==="")$H[$v]='"'.str_replace('"','""',$W).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$H)."\r\n";}function
apply_sql_function($o,$e){return($o?($o=="unixepoch"?"DATETIME($e, '$o')":($o=="count distinct"?"COUNT(DISTINCT ":strtoupper("$o("))."$e)"):$e);}function
password_file(){$zb=ini_get("upload_tmp_dir");if(!$zb){if(function_exists('sys_get_temp_dir'))$zb=sys_get_temp_dir();else{$lc=@tempnam("","");if(!$lc)return
false;$zb=dirname($lc);unlink($lc);}}$lc="$zb/adminer.key";$G=@file_get_contents($lc);if($G)return$G;$vc=@fopen($lc,"w");if($vc){$G=md5(uniqid(mt_rand(),true));fwrite($vc,$G);fclose($vc);}return$G;}function
is_mail($Lb){$ya='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Ab='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$xe="$ya+(\\.$ya+)*@($Ab?\\.)+$Ab";return
preg_match("(^$xe(,\\s*$xe)*\$)i",$Lb);}function
is_url($M){$Ab='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Ab?\\.)+$Ab(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$M,$z)?strtolower($z[1]):"");}function
slow_query($E){global$b,$R;$j=$b->database();if(support("kill")&&is_object($h=connect())&&($j==""||$h->select_db($j))){$cd=$h->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$R,'&kill=',$cd,'\');
}, ',1000*$b->queryTimeout(),');
</script>
';}else$h=null;ob_flush();flush();$G=@get_key_vals($E,$h);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($G);}function
lzw_decompress($Ga){$yb=256;$Ha=8;$Ta=array();$af=0;$bf=0;for($p=0;$p<strlen($Ga);$p++){$af=($af<<8)+ord($Ga[$p]);$bf+=8;if($bf>=$Ha){$bf-=$Ha;$Ta[]=$af>>$bf;$af&=(1<<$bf)-1;$yb++;if($yb>>$Ha)$Ha++;}}$xb=range("\0","\xFF");$G="";foreach($Ta
as$p=>$Sa){$Kb=$xb[$Sa];if(!isset($Kb))$Kb=$Gg.$Gg[0];$G.=$Kb;if($p)$xb[]=$Gg.$Kb[0];$Gg=$Kb;}return$G;}global$b,$g,$Cb,$Ib,$Sb,$k,$yc,$Cc,$ba,$Pc,$u,$ca,$fd,$Vd,$ye,$Bf,$R,$eg,$T,$sg,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$qe=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$qe[]=true;call_user_func_array('session_set_cookie_params',$qe);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$mc);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($dg,$Od){$_e=($Od==1?0:1);$dg=str_replace("%d","%s",$dg[$_e]);$Od=number_format($Od,0,".",',');return
sprintf($dg,$Od);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){global$b;$_e=array_search("",$b->operators);if($_e!==false)unset($b->operators[$_e]);}function
dsn($Fb,$U,$C,$ac='auth_error'){set_exception_handler($ac);parent::__construct($Fb,$U,$C);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($E,$mg=false){$F=parent::query($E);$this->error="";if(!$F){$Ub=$this->errorInfo();$this->error=$Ub[2];return
false;}$this->store_result($F);return$F;}function
multi_query($E){return$this->_result=$this->query($E);}function
store_result($F=null){if(!$F)$F=$this->_result;if($F->columnCount()){$F->num_rows=$F->rowCount();return$F;}$this->affected_rows=$F->rowCount();return
true;}function
next_result(){$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($E,$l=0){$F=$this->query($E);if(!$F)return
false;$H=$F->fetch();return$H[$l];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$H=(object)$this->getColumnMeta($this->_offset++);$H->orgtable=$H->table;$H->orgname=$H->name;$H->charsetnr=(in_array("blob",(array)$H->flags)?63:0);return$H;}}}$Cb=array();$Cb["sqlite"]="SQLite 3";$Cb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Ce=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite"])?"sqlite3":"sqlite")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($lc){$this->_link=new
SQLite3($lc);$Ag=$this->_link->version();$this->server_info=$Ag["versionString"];}function
query($E){$F=@$this->_link->query($E);$this->error="";if(!$F){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($F->numColumns())return
new
Min_Result($F);$this->affected_rows=$this->_link->changes();return
true;}function
quote($M){return(is_utf8($M)?"'".$this->_link->escapeString($M)."'":"x'".reset(unpack('H*',$M))."'");}function
store_result(){return$this->_result;}function
result($E,$l=0){$F=$this->query($E);if(!is_object($F))return
false;$H=$F->_result->fetchArray();return$H[$l];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($F){$this->_result=$F;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$S=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$S,"charsetnr"=>($S==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($lc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($lc);}function
query($E,$mg=false){$Ed=($mg?"unbufferedQuery":"query");$F=@$this->_link->$Ed($E,SQLITE_BOTH,$k);$this->error="";if(!$F){$this->error=$k;return
false;}elseif($F===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($F);}function
quote($M){return"'".sqlite_escape_string($M)."'";}function
store_result(){return$this->_result;}function
result($E,$l=0){$F=$this->query($E);if(!is_object($F))return
false;$H=$F->_result->fetch();return$H[$l];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($F){$this->_result=$F;if(method_exists($F,'numRows'))$this->num_rows=$F->numRows();}function
fetch_assoc(){$H=$this->_result->fetch(SQLITE_ASSOC);if(!$H)return
false;$G=array();foreach($H
as$v=>$W)$G[($v[0]=='"'?idf_unescape($v):$v)]=$W;return$G;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$_=$this->_result->fieldName($this->_offset++);$xe='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($xe\\.)?$xe\$~",$_,$z)){$O=($z[3]!=""?$z[3]:idf_unescape($z[2]));$_=($z[5]!=""?$z[5]:idf_unescape($z[4]));}return(object)array("name"=>$_,"orgname"=>$_,"orgtable"=>$O,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($lc){$this->dsn(DRIVER.":$lc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($lc){if(is_readable($lc)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\\\]|:)",$lc)?$lc:dirname($_SERVER["SCRIPT_FILENAME"])."/$lc")." AS a")){$this->Min_SQLite($lc);return
true;}return
false;}function
multi_query($E){return$this->_result=$this->query($E);}function
next_result(){return
false;}}}function
idf_escape($r){return'"'.str_replace('"','""',$r).'"';}function
table($r){return
idf_escape($r);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($E,$Z,$x,$A=0,$qf=" "){return" $E$Z".($x!==null?$qf."LIMIT $x".($A?" OFFSET $A":""):"");}function
limit1($E,$Z){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($E,$Z,1):" $E$Z");}function
db_collation($j,$Wa){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($i){return
array();}function
table_status($_=""){global$g;$G=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($_!=""?" AND name = ".q($_):""))as$H){$H["Oid"]="t";$H["Auto_increment"]="";$H["Rows"]=$g->result("SELECT COUNT(*) FROM ".idf_escape($H["Name"]));$G[$H["Name"]]=$H;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$H)$G[$H["name"]]["Auto_increment"]=$H["seq"];return($_!=""?$G[$_]:$G);}function
is_view($P){return$P["Engine"]=="view";}function
fk_support($P){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($O){$G=array();foreach(get_rows("PRAGMA table_info(".table($O).")")as$H){$S=strtolower($H["type"]);$ub=$H["dflt_value"];$G[$H["name"]]=array("field"=>$H["name"],"type"=>(eregi("int",$S)?"integer":(eregi("char|clob|text",$S)?"text":(eregi("blob",$S)?"blob":(eregi("real|floa|doub",$S)?"real":"numeric")))),"full_type"=>$S,"default"=>(ereg("'(.*)'",$ub,$z)?str_replace("''","'",$z[1]):($ub=="NULL"?null:$ub)),"null"=>!$H["notnull"],"auto_increment"=>eregi('^integer$',$S)&&$H["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$H["pk"],);}return$G;}function
indexes($O,$h=null){$G=array();$Fe=array();foreach(fields($O)as$l){if($l["primary"])$Fe[]=$l["field"];}if($Fe)$G[""]=array("type"=>"PRIMARY","columns"=>$Fe,"lengths"=>array());foreach(get_rows("PRAGMA index_list(".table($O).")")as$H){if(!ereg("^sqlite_",$H["name"])){$G[$H["name"]]["type"]=($H["unique"]?"UNIQUE":"INDEX");$G[$H["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($H["name"]).")")as$if)$G[$H["name"]]["columns"][]=$if["name"];}}return$G;}function
foreign_keys($O){$G=array();foreach(get_rows("PRAGMA foreign_key_list(".table($O).")")as$H){$n=&$G[$H["id"]];if(!$n)$n=$H;$n["source"][]=$H["from"];$n["target"][]=$H["to"];}return$G;}function
view($_){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($_))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($j){return
false;}function
error(){global$g;return
h($g->error);}function
exact_value($W){return
q($W);}function
check_sqlite_name($_){global$g;$hc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($hc)\$~",$_)){$g->error=sprintf('Please use one of the extensions %s.',str_replace("|",", ",$hc));return
false;}return
true;}function
create_database($j,$d){global$g;if(file_exists($j)){$g->error='File exists.';return
false;}if(!check_sqlite_name($j))return
false;$y=new
Min_SQLite($j);$y->query('PRAGMA encoding = "UTF-8"');$y->query('CREATE TABLE adminer (i)');$y->query('DROP TABLE adminer');return
true;}function
drop_databases($i){global$g;$g->Min_SQLite(":memory:");foreach($i
as$j){if(!@unlink($j)){$g->error='File exists.';return
false;}}return
true;}function
rename_database($_,$d){global$g;if(!check_sqlite_name($_))return
false;$g->Min_SQLite(":memory:");$g->error='File exists.';return@rename(DB,$_);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($O,$_,$m,$pc,$ab,$Qb,$d,$Aa,$ue){$vg=($O==""||$pc);foreach($m
as$l){if($l[0]!=""||!$l[1]||$l[2]){$vg=true;break;}}$c=array();$le=array();$Ge=false;foreach($m
as$l){if($l[1]){if($l[1][6])$Ge=true;$c[]=($vg?"  ":"ADD ").implode($l[1]);if($l[0]!="")$le[$l[0]]=$l[1][0];}}if($vg){if($O!=""){queries("BEGIN");foreach(foreign_keys($O)as$n){$f=array();foreach($n["source"]as$e){if(!$le[$e])continue
2;$f[]=$le[$e];}$pc[]="  FOREIGN KEY (".implode(", ",$f).") REFERENCES ".table($n["table"])." (".implode(", ",array_map('idf_escape',$n["target"])).") ON DELETE $n[on_delete] ON UPDATE $n[on_update]";}$t=array();foreach(indexes($O)as$ad=>$s){$f=array();foreach($s["columns"]as$e){if(!$le[$e])continue
2;$f[]=$le[$e];}$f="(".implode(", ",$f).")";if($s["type"]!="PRIMARY")$t[]=array($s["type"],$ad,$f);elseif(!$Ge)$pc[]="  PRIMARY KEY $f";}}$c=array_merge($c,$pc);if(!queries("CREATE TABLE ".table($O!=""?"adminer_$_":$_)." (\n".implode(",\n",$c)."\n)"))return
false;if($O!=""){if($le&&!queries("INSERT INTO ".table("adminer_$_")." (".implode(", ",$le).") SELECT ".implode(", ",array_map('idf_escape',array_keys($le)))." FROM ".table($O)))return
false;$jg=array();foreach(triggers($O)as$hg=>$Vf){$fg=trigger($hg);$jg[]="CREATE TRIGGER ".idf_escape($hg)." ".implode(" ",$Vf)." ON ".table($_)."\n$fg[Statement]";}if(!queries("DROP TABLE ".table($O)))return
false;queries("ALTER TABLE ".table("adminer_$_")." RENAME TO ".table($_));if(!alter_indexes($_,$t))return
false;foreach($jg
as$fg){if(!queries($fg))return
false;}queries("COMMIT");}}else{foreach($c
as$W){if(!queries("ALTER TABLE ".table($O)." $W"))return
false;}if($O!=$_&&!queries("ALTER TABLE ".table($O)." RENAME TO ".table($_)))return
false;}if($Aa)queries("UPDATE sqlite_sequence SET seq = $Aa WHERE name = ".q($_));return
true;}function
alter_indexes($O,$c){foreach($c
as$W){if(!queries($W[2]=="DROP"?"DROP INDEX ".idf_escape($W[1]):"CREATE $W[0] ".($W[0]!="INDEX"?"INDEX ":"").idf_escape($W[1]!=""?$W[1]:uniqid($O."_"))." ON ".table($O)." $W[2]"))return
false;}return
true;}function
truncate_tables($Q){return
apply_queries("DELETE FROM",$Q);}function
drop_views($Y){return
apply_queries("DROP VIEW",$Y);}function
drop_tables($Q){return
apply_queries("DROP TABLE",$Q);}function
move_tables($Q,$Y,$Qf){return
false;}function
trigger($_){global$g;if($_=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($_)),$z);return
array("Timing"=>strtoupper($z[1]),"Event"=>strtoupper($z[2]),"Trigger"=>$_,"Statement"=>$z[3]);}function
triggers($O){$G=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($O))as$H){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$H["sql"],$z);$G[$H["name"]]=array($z[1],$z[2]);}return$G;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($_,$S){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($O,$L){return
queries("INSERT INTO ".table($O).($L?" (".implode(", ",array_keys($L)).")\nVALUES (".implode(", ",$L).")":"DEFAULT VALUES"));}function
insert_update($O,$L,$Fe){return
queries("REPLACE INTO ".table($O)." (".implode(", ",array_keys($L)).") VALUES (".implode(", ",$L).")");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$E){return$g->query("EXPLAIN $E");}function
found_rows($P,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($mf){return
true;}function
create_sql($O,$Aa){global$g;return$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($O));}function
truncate_sql($O){return"DELETE FROM ".table($O);}function
use_sql($qb){}function
trigger_sql($O,$N){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($O)));}function
show_variables(){global$g;$G=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$v)$G[$v]=$g->result("PRAGMA $v");return$G;}function
show_status(){$G=array();foreach(get_vals("PRAGMA compile_options")as$ae){list($v,$W)=explode("=",$ae,2);$G[$v]=$W;}return$G;}function
convert_field($l){}function
unconvert_field($l,$G){return$G;}function
support($jc){return
ereg('^(view|trigger|variables|status|dump|move_col|drop_col)$',$jc);}$u="sqlite";$T=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Bf=array_keys($T);$sg=array();$Zd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$yc=array("hex","length","lower","round","unixepoch","upper");$Cc=array("avg","count","count distinct","group_concat","max","min","sum");$Ib=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Cb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Ce=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($Tb,$k){if(ini_bool("html_errors"))$k=html_entity_decode(strip_tags($k));$k=ereg_replace('^[^:]*: ','',$k);$this->error=$k;}function
connect($K,$U,$C){global$b;$j=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($K,"'\\"))."' user='".addcslashes($U,"'\\")."' password='".addcslashes($C,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($j!=""?addcslashes($j,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$j!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Ag=pg_version($this->_link);$this->server_info=$Ag["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($M){return"'".pg_escape_string($this->_link,$M)."'";}function
select_db($qb){global$b;if($qb==$b->database())return$this->_database;$G=@pg_connect("$this->_string dbname='".addcslashes($qb,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($G)$this->_link=$G;return$G;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($E,$mg=false){$F=@pg_query($this->_link,$E);$this->error="";if(!$F){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($F)){$this->affected_rows=pg_affected_rows($F);return
true;}return
new
Min_Result($F);}function
multi_query($E){return$this->_result=$this->query($E);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($E,$l=0){$F=$this->query($E);if(!$F||!$F->num_rows)return
false;return
pg_fetch_result($F->_result,0,$l);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($F){$this->_result=$F;$this->num_rows=pg_num_rows($F);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$e=$this->_offset++;$G=new
stdClass;if(function_exists('pg_field_table'))$G->orgtable=pg_field_table($this->_result,$e);$G->name=pg_field_name($this->_result,$e);$G->orgname=$G->name;$G->type=pg_field_type($this->_result,$e);$G->charsetnr=($G->type=="bytea"?63:0);return$G;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($K,$U,$C){global$b;$j=$b->database();$M="pgsql:host='".str_replace(":","' port='",addcslashes($K,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$M dbname='".($j!=""?addcslashes($j,"'\\"):"postgres")."'",$U,$C);return
true;}function
select_db($qb){global$b;return($b->database()==$qb);}function
close(){}}}function
idf_escape($r){return'"'.str_replace('"','""',$r).'"';}function
table($r){return
idf_escape($r);}function
connect(){global$b;$g=new
Min_DB;$mb=$b->credentials();if($g->connect($mb[0],$mb[1],$mb[2])){if($g->server_info>=9)$g->query("SET application_name = 'Adminer'");return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($E,$Z,$x,$A=0,$qf=" "){return" $E$Z".($x!==null?$qf."LIMIT $x".($A?" OFFSET $A":""):"");}function
limit1($E,$Z){return" $E$Z";}function
db_collation($j,$Wa){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($i){return
array();}function
table_status($_=""){$G=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($_!=""?" AND relname = ".q($_):""))as$H)$G[$H["Name"]]=$H;return($_!=""?$G[$_]:$G);}function
is_view($P){return$P["Engine"]=="view";}function
fk_support($P){return
true;}function
fields($O){$G=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($O)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$H){ereg('(.*)(\\((.*)\\))?',$H["full_type"],$z);list(,$H["type"],,$H["length"])=$z;$H["full_type"]=$H["type"].($H["length"]?"($H[length])":"");$H["null"]=($H["attnotnull"]=="f");$H["auto_increment"]=eregi("^nextval\\(",$H["default"]);$H["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~^(.*)::.+$~',$H["default"],$z))$H["default"]=($z[1][0]=="'"?idf_unescape($z[1]):$z[1]);$G[$H["field"]]=$H;}return$G;}function
indexes($O,$h=null){global$g;if(!is_object($h))$h=$g;$G=array();$Kf=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($O));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Kf AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $Kf AND ci.oid = i.indexrelid",$h)as$H){$G[$H["relname"]]["type"]=($H["indisprimary"]=="t"?"PRIMARY":($H["indisunique"]=="t"?"UNIQUE":"INDEX"));$G[$H["relname"]]["columns"]=array();foreach(explode(" ",$H["indkey"])as$Mc)$G[$H["relname"]]["columns"][]=$f[$Mc];$G[$H["relname"]]["lengths"]=array();}return$G;}function
foreign_keys($O){global$Vd;$G=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($O)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$H){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$H['definition'],$z)){$H['source']=array_map('trim',explode(',',$z[1]));$H['table']=$z[2];if(preg_match('~(.+)\.(.+)~',$z[2],$sd)){$H['ns']=$sd[1];$H['table']=$sd[2];}$H['target']=array_map('trim',explode(',',$z[3]));$H['on_delete']=(preg_match("~ON DELETE ($Vd)~",$z[4],$sd)?$sd[1]:'NO ACTION');$H['on_update']=(preg_match("~ON UPDATE ($Vd)~",$z[4],$sd)?$sd[1]:'NO ACTION');$G[$H['conname']]=$H;}}return$G;}function
view($_){global$g;return
array("select"=>$g->result("SELECT pg_get_viewdef(".q($_).")"));}function
collations(){return
array();}function
information_schema($j){return($j=="information_schema");}function
error(){global$g;$G=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$G,$z))$G=$z[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($z[3]).'})(.*)~','\\1<b>\\2</b>',$z[2]).$z[4];return
nl_br($G);}function
exact_value($W){return
q($W);}function
create_database($j,$d){return
queries("CREATE DATABASE ".idf_escape($j).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($i){global$g;$g->close();return
apply_queries("DROP DATABASE",$i,'idf_escape');}function
rename_database($_,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($_));}function
auto_increment(){return"";}function
alter_table($O,$_,$m,$pc,$ab,$Qb,$d,$Aa,$ue){$c=array();$Oe=array();foreach($m
as$l){$e=idf_escape($l[0]);$W=$l[1];if(!$W)$c[]="DROP $e";else{$yg=$W[5];unset($W[5]);if(isset($W[6])&&$l[0]=="")$W[1]=($W[1]=="bigint"?" big":" ")."serial";if($l[0]=="")$c[]=($O!=""?"ADD ":"  ").implode($W);else{if($e!=$W[0])$Oe[]="ALTER TABLE ".table($O)." RENAME $e TO $W[0]";$c[]="ALTER $e TYPE$W[1]";if(!$W[6]){$c[]="ALTER $e ".($W[3]?"SET$W[3]":"DROP DEFAULT");$c[]="ALTER $e ".($W[2]==" NULL"?"DROP NOT":"SET").$W[2];}}if($l[0]!=""||$yg!="")$Oe[]="COMMENT ON COLUMN ".table($O).".$W[0] IS ".($yg!=""?substr($yg,9):"''");}}$c=array_merge($c,$pc);if($O=="")array_unshift($Oe,"CREATE TABLE ".table($_)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($Oe,"ALTER TABLE ".table($O)."\n".implode(",\n",$c));if($O!=""&&$O!=$_)$Oe[]="ALTER TABLE ".table($O)." RENAME TO ".table($_);if($O!=""||$ab!="")$Oe[]="COMMENT ON TABLE ".table($_)." IS ".q($ab);if($Aa!=""){}foreach($Oe
as$E){if(!queries($E))return
false;}return
true;}function
alter_indexes($O,$c){$jb=array();$Db=array();foreach($c
as$W){if($W[0]!="INDEX")$jb[]=($W[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($W[1]):"\nADD $W[0] ".($W[0]=="PRIMARY"?"KEY ":"").$W[2]);elseif($W[2]=="DROP")$Db[]=idf_escape($W[1]);elseif(!queries("CREATE INDEX ".idf_escape($W[1]!=""?$W[1]:uniqid($O."_"))." ON ".table($O)." $W[2]"))return
false;}return((!$jb||queries("ALTER TABLE ".table($O).implode(",",$jb)))&&(!$Db||queries("DROP INDEX ".implode(", ",$Db))));}function
truncate_tables($Q){return
queries("TRUNCATE ".implode(", ",array_map('table',$Q)));return
true;}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($Q){return
queries("DROP TABLE ".implode(", ",array_map('table',$Q)));}function
move_tables($Q,$Y,$Qf){foreach($Q
as$O){if(!queries("ALTER TABLE ".table($O)." SET SCHEMA ".idf_escape($Qf)))return
false;}foreach($Y
as$O){if(!queries("ALTER VIEW ".table($O)." SET SCHEMA ".idf_escape($Qf)))return
false;}return
true;}function
trigger($_){if($_=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$I=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($_));return
reset($I);}function
triggers($O){$G=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($O))as$H)$G[$H["trigger_name"]]=array($H["condition_timing"],$H["event_manipulation"]);return$G;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
begin(){return
queries("BEGIN");}function
insert_into($O,$L){return
queries("INSERT INTO ".table($O).($L?" (".implode(", ",array_keys($L)).")\nVALUES (".implode(", ",$L).")":"DEFAULT VALUES"));}function
insert_update($O,$L,$Fe){global$g;$tg=array();$Z=array();foreach($L
as$v=>$W){$tg[]="$v = $W";if(isset($Fe[idf_unescape($v)]))$Z[]="$v = $W";}return($Z&&queries("UPDATE ".table($O)." SET ".implode(", ",$tg)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($O)." (".implode(", ",array_keys($L)).") VALUES (".implode(", ",$L).")");}function
last_id(){return
0;}function
explain($g,$E){return$g->query("EXPLAIN $E");}function
found_rows($P,$Z){global$g;if(ereg(" rows=([0-9]+)",$g->result("EXPLAIN SELECT * FROM ".idf_escape($P["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$Xe))return$Xe[1];return
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
set_schema($lf){global$g,$T,$Bf;$G=$g->query("SET search_path TO ".idf_escape($lf));foreach(types()as$S){if(!isset($T[$S])){$T[$S]=0;$Bf['User types'][]=$S;}}return$G;}function
use_sql($qb){return"\connect ".idf_escape($qb);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){return
get_rows("SELECT * FROM pg_stat_activity ORDER BY procpid");}function
show_status(){}function
convert_field($l){}function
unconvert_field($l,$G){return$G;}function
support($jc){return
ereg('^(comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$',$jc);}$u="pgsql";$T=array();$Bf=array();foreach(array('Numbers'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Date and time'=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),'Strings'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Binary'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Network'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometry'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$v=>$W){$T+=$W;$Bf[$v]=array_keys($W);}$sg=array();$Zd=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$yc=array("char_length","lower","round","to_hex","to_timestamp","upper");$Cc=array("avg","count","count distinct","max","min","sum");$Ib=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Cb["oracle"]="Oracle";if(isset($_GET["oracle"])){$Ce=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($Tb,$k){if(ini_bool("html_errors"))$k=html_entity_decode(strip_tags($k));$k=ereg_replace('^[^:]*: ','',$k);$this->error=$k;}function
connect($K,$U,$C){$this->_link=@oci_new_connect($U,$C,$K,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$k=oci_error();$this->error=$k["message"];return
false;}function
quote($M){return"'".str_replace("'","''",$M)."'";}function
select_db($qb){return
true;}function
query($E,$mg=false){$F=oci_parse($this->_link,$E);$this->error="";if(!$F){$k=oci_error($this->_link);$this->error=$k["message"];return
false;}set_error_handler(array($this,'_error'));$G=@oci_execute($F);restore_error_handler();if($G){if(oci_num_fields($F))return
new
Min_Result($F);$this->affected_rows=oci_num_rows($F);}return$G;}function
multi_query($E){return$this->_result=$this->query($E);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($E,$l=1){$F=$this->query($E);if(!is_object($F)||!oci_fetch($F->_result))return
false;return
oci_result($F->_result,$l);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($F){$this->_result=$F;}function
_convert($H){foreach((array)$H
as$v=>$W){if(is_a($W,'OCI-Lob'))$H[$v]=$W->load();}return$H;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$e=$this->_offset++;$G=new
stdClass;$G->name=oci_field_name($this->_result,$e);$G->orgname=$G->name;$G->type=oci_field_type($this->_result,$e);$G->charsetnr=(ereg("raw|blob|bfile",$G->type)?63:0);return$G;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($K,$U,$C){$this->dsn("oci:dbname=//$K;charset=AL32UTF8",$U,$C);return
true;}function
select_db($qb){return
true;}}}function
idf_escape($r){return'"'.str_replace('"','""',$r).'"';}function
table($r){return
idf_escape($r);}function
connect(){global$b;$g=new
Min_DB;$mb=$b->credentials();if($g->connect($mb[0],$mb[1],$mb[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($E,$Z,$x,$A=0,$qf=" "){return($A?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $E$Z) t WHERE rownum <= ".($x+$A).") WHERE rnum > $A":($x!==null?" * FROM (SELECT $E$Z) WHERE rownum <= ".($x+$A):" $E$Z"));}function
limit1($E,$Z){return" $E$Z";}function
db_collation($j,$Wa){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($i){return
array();}function
table_status($_=""){$G=array();$nf=q($_);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($_!=""?" AND table_name = $nf":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($_!=""?" WHERE view_name = $nf":""))as$H){if($_!="")return$H;$G[$H["Name"]]=$H;}return$G;}function
is_view($P){return$P["Engine"]=="view";}function
fk_support($P){return
true;}function
fields($O){$G=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($O)." ORDER BY column_id")as$H){$S=$H["DATA_TYPE"];$w="$H[DATA_PRECISION],$H[DATA_SCALE]";if($w==",")$w=$H["DATA_LENGTH"];$G[$H["COLUMN_NAME"]]=array("field"=>$H["COLUMN_NAME"],"full_type"=>$S.($w?"($w)":""),"type"=>strtolower($S),"length"=>$w,"default"=>$H["DATA_DEFAULT"],"null"=>($H["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$G;}function
indexes($O,$h=null){$G=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($O)."
ORDER BY uc.constraint_type, uic.column_position",$h)as$H){$G[$H["INDEX_NAME"]]["type"]=($H["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($H["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$G[$H["INDEX_NAME"]]["columns"][]=$H["COLUMN_NAME"];$G[$H["INDEX_NAME"]]["lengths"][]=($H["CHAR_LENGTH"]&&$H["CHAR_LENGTH"]!=$H["COLUMN_LENGTH"]?$H["CHAR_LENGTH"]:null);}return$G;}function
view($_){$I=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($_));return
reset($I);}function
collations(){return
array();}function
information_schema($j){return
false;}function
error(){global$g;return
h($g->error);}function
exact_value($W){return
q($W);}function
explain($g,$E){$g->query("EXPLAIN PLAN FOR $E");return$g->query("SELECT * FROM plan_table");}function
found_rows($P,$Z){}function
alter_table($O,$_,$m,$pc,$ab,$Qb,$d,$Aa,$ue){$c=$Db=array();foreach($m
as$l){$W=$l[1];if($W&&$l[0]!=""&&idf_escape($l[0])!=$W[0])queries("ALTER TABLE ".table($O)." RENAME COLUMN ".idf_escape($l[0])." TO $W[0]");if($W)$c[]=($O!=""?($l[0]!=""?"MODIFY (":"ADD ("):"  ").implode($W).($O!=""?")":"");else$Db[]=idf_escape($l[0]);}if($O=="")return
queries("CREATE TABLE ".table($_)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($O)."\n".implode("\n",$c)))&&(!$Db||queries("ALTER TABLE ".table($O)." DROP (".implode(", ",$Db).")"))&&($O==$_||queries("ALTER TABLE ".table($O)." RENAME TO ".table($_)));}function
foreign_keys($O){return
array();}function
truncate_tables($Q){return
apply_queries("TRUNCATE TABLE",$Q);}function
drop_views($Y){return
apply_queries("DROP VIEW",$Y);}function
drop_tables($Q){return
apply_queries("DROP TABLE",$Q);}function
begin(){return
true;}function
insert_into($O,$L){return
queries("INSERT INTO ".table($O)." (".implode(", ",array_keys($L)).")\nVALUES (".implode(", ",$L).")");}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$g;return$g->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($mf){global$g;return$g->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($mf));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$I=get_rows('SELECT * FROM v$instance');return
reset($I);}function
convert_field($l){}function
unconvert_field($l,$G){return$G;}function
support($jc){return
ereg("view|scheme|processlist|drop_col|variables|status",$jc);}$u="oracle";$T=array();$Bf=array();foreach(array('Numbers'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Date and time'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Strings'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Binary'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$v=>$W){$T+=$W;$Bf[$v]=array_keys($W);}$sg=array();$Zd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$yc=array("length","lower","round","upper");$Cc=array("avg","count","count distinct","max","min","sum");$Ib=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Cb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Ce=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$k)$this->error.="$k[message]\n";$this->error=rtrim($this->error);}function
connect($K,$U,$C){$this->_link=@sqlsrv_connect($K,array("UID"=>$U,"PWD"=>$C,"CharacterSet"=>"UTF-8"));if($this->_link){$Nc=sqlsrv_server_info($this->_link);$this->server_info=$Nc['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($M){return"'".str_replace("'","''",$M)."'";}function
select_db($qb){return$this->query("USE $qb");}function
query($E,$mg=false){$F=sqlsrv_query($this->_link,$E);$this->error="";if(!$F){$this->_get_error();return
false;}return$this->store_result($F);}function
multi_query($E){$this->_result=sqlsrv_query($this->_link,$E);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($F=null){if(!$F)$F=$this->_result;if(sqlsrv_field_metadata($F))return
new
Min_Result($F);$this->affected_rows=sqlsrv_rows_affected($F);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($E,$l=0){$F=$this->query($E);if(!is_object($F))return
false;$H=$F->fetch_row();return$H[$l];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($F){$this->_result=$F;}function
_convert($H){foreach((array)$H
as$v=>$W){if(is_a($W,'DateTime'))$H[$v]=$W->format("Y-m-d H:i:s");}return$H;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$l=$this->_fields[$this->_offset++];$G=new
stdClass;$G->name=$l["Name"];$G->orgname=$l["Name"];$G->type=($l["Type"]==1?254:0);return$G;}function
seek($A){for($p=0;$p<$A;$p++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($K,$U,$C){$this->_link=@mssql_connect($K,$U,$C);if($this->_link){$F=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$H=$F->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$H[0]] $H[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($M){return"'".str_replace("'","''",$M)."'";}function
select_db($qb){return
mssql_select_db($qb);}function
query($E,$mg=false){$F=mssql_query($E,$this->_link);$this->error="";if(!$F){$this->error=mssql_get_last_message();return
false;}if($F===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($F);}function
multi_query($E){return$this->_result=$this->query($E);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($E,$l=0){$F=$this->query($E);if(!is_object($F))return
false;return
mssql_result($F->_result,0,$l);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($F){$this->_result=$F;$this->num_rows=mssql_num_rows($F);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$G=mssql_fetch_field($this->_result);$G->orgtable=$G->table;$G->orgname=$G->name;return$G;}function
seek($A){mssql_data_seek($this->_result,$A);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($r){return"[".str_replace("]","]]",$r)."]";}function
table($r){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($r);}function
connect(){global$b;$g=new
Min_DB;$mb=$b->credentials();if($g->connect($mb[0],$mb[1],$mb[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($E,$Z,$x,$A=0,$qf=" "){return($x!==null?" TOP (".($x+$A).")":"")." $E$Z";}function
limit1($E,$Z){return
limit($E,$Z,1);}function
db_collation($j,$Wa){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($j));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($i){global$g;$G=array();foreach($i
as$j){$g->select_db($j);$G[$j]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$G;}function
table_status($_=""){$G=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($_!=""?" AND name = ".q($_):""))as$H){if($_!="")return$H;$G[$H["Name"]]=$H;}return$G;}function
is_view($P){return$P["Engine"]=="VIEW";}function
fk_support($P){return
true;}function
fields($O){$G=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($O))as$H){$S=$H["type"];$w=(ereg("char|binary",$S)?$H["max_length"]:($S=="decimal"?"$H[precision],$H[scale]":""));$G[$H["name"]]=array("field"=>$H["name"],"full_type"=>$S.($w?"($w)":""),"type"=>$S,"length"=>$w,"default"=>$H["default"],"null"=>$H["is_nullable"],"auto_increment"=>$H["is_identity"],"collation"=>$H["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$H["is_identity"],);}return$G;}function
indexes($O,$h=null){$G=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($O),$h)as$H){$G[$H["name"]]["type"]=($H["is_primary_key"]?"PRIMARY":($H["is_unique"]?"UNIQUE":"INDEX"));$G[$H["name"]]["lengths"]=array();$G[$H["name"]]["columns"][$H["key_ordinal"]]=$H["column_name"];}return$G;}function
view($_){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($_))));}function
collations(){$G=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$d)$G[ereg_replace("_.*","",$d)][]=$d;return$G;}function
information_schema($j){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
exact_value($W){return
q($W);}function
create_database($j,$d){return
queries("CREATE DATABASE ".idf_escape($j).(eregi('^[a-z0-9_]+$',$d)?" COLLATE $d":""));}function
drop_databases($i){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$i)));}function
rename_database($_,$d){if(eregi('^[a-z0-9_]+$',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($_));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($O,$_,$m,$pc,$ab,$Qb,$d,$Aa,$ue){$c=array();foreach($m
as$l){$e=idf_escape($l[0]);$W=$l[1];if(!$W)$c["DROP"][]=" COLUMN $e";else{$W[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$W[1]);if($l[0]=="")$c["ADD"][]="\n  ".implode("",$W).($O==""?substr($pc[$W[0]],16+strlen($W[0])):"");else{unset($W[6]);if($e!=$W[0])queries("EXEC sp_rename ".q(table($O).".$e").", ".q(idf_unescape($W[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$W)][]="";}}}if($O=="")return
queries("CREATE TABLE ".table($_)." (".implode(",",(array)$c["ADD"])."\n)");if($O!=$_)queries("EXEC sp_rename ".q(table($O)).", ".q($_));if($pc)$c[""]=$pc;foreach($c
as$v=>$W){if(!queries("ALTER TABLE ".idf_escape($_)." $v".implode(",",$W)))return
false;}return
true;}function
alter_indexes($O,$c){$s=array();$Db=array();foreach($c
as$W){if($W[2]=="DROP"){if($W[0]=="PRIMARY")$Db[]=idf_escape($W[1]);else$s[]=idf_escape($W[1])." ON ".table($O);}elseif(!queries(($W[0]!="PRIMARY"?"CREATE $W[0] ".($W[0]!="INDEX"?"INDEX ":"").idf_escape($W[1]!=""?$W[1]:uniqid($O."_"))." ON ".table($O):"ALTER TABLE ".table($O)." ADD PRIMARY KEY")." $W[2]"))return
false;}return(!$s||queries("DROP INDEX ".implode(", ",$s)))&&(!$Db||queries("ALTER TABLE ".table($O)." DROP ".implode(", ",$Db)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($O,$L){return
queries("INSERT INTO ".table($O).($L?" (".implode(", ",array_keys($L)).")\nVALUES (".implode(", ",$L).")":"DEFAULT VALUES"));}function
insert_update($O,$L,$Fe){$tg=array();$Z=array();foreach($L
as$v=>$W){$tg[]="$v = $W";if(isset($Fe[idf_unescape($v)]))$Z[]="$v = $W";}return
queries("MERGE ".table($O)." USING (VALUES(".implode(", ",$L).")) AS source (c".implode(", c",range(1,count($L))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$tg)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($L)).") VALUES (".implode(", ",$L).");");}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$E){$g->query("SET SHOWPLAN_ALL ON");$G=$g->query($E);$g->query("SET SHOWPLAN_ALL OFF");return$G;}function
found_rows($P,$Z){}function
foreign_keys($O){$G=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($O))as$H){$n=&$G[$H["FK_NAME"]];$n["table"]=$H["PKTABLE_NAME"];$n["source"][]=$H["FKCOLUMN_NAME"];$n["target"][]=$H["PKCOLUMN_NAME"];}return$G;}function
truncate_tables($Q){return
apply_queries("TRUNCATE TABLE",$Q);}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($Q){return
queries("DROP TABLE ".implode(", ",array_map('table',$Q)));}function
move_tables($Q,$Y,$Qf){return
apply_queries("ALTER SCHEMA ".idf_escape($Qf)." TRANSFER",array_merge($Q,$Y));}function
trigger($_){if($_=="")return
array();$I=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($_));$G=reset($I);if($G)$G["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$G["text"]);return$G;}function
triggers($O){$G=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($O))as$H)$G[$H["name"]]=array($H["Timing"],$H["Event"]);return$G;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!="")return$_GET["ns"];return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($lf){return
true;}function
use_sql($qb){return"USE ".idf_escape($qb);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($l){}function
unconvert_field($l,$G){return$G;}function
support($jc){return
ereg('^(scheme|trigger|view|drop_col)$',$jc);}$u="mssql";$T=array();$Bf=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Date and time'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Strings'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Binary'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$v=>$W){$T+=$W;$Bf[$v]=array_keys($W);}$sg=array();$Zd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$yc=array("len","lower","round","upper");$Cc=array("avg","count","count distinct","max","min","sum");$Ib=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Cb=array("server"=>"MySQL")+$Cb;if(!defined("DRIVER")){$Ce=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($K,$U,$C){mysqli_report(MYSQLI_REPORT_OFF);list($Gc,$ze)=explode(":",$K,2);$G=@$this->real_connect(($K!=""?$Gc:ini_get("mysqli.default_host")),($K.$U!=""?$U:ini_get("mysqli.default_user")),($K.$U.$C!=""?$C:ini_get("mysqli.default_pw")),null,(is_numeric($ze)?$ze:ini_get("mysqli.default_port")),(!is_numeric($ze)?$ze:null));if($G){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$G;}function
result($E,$l=0){$F=$this->query($E);if(!$F)return
false;$H=$F->fetch_array();return$H[$l];}function
quote($M){return"'".$this->escape_string($M)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($K,$U,$C){$this->_link=@mysql_connect(($K!=""?$K:ini_get("mysql.default_host")),("$K$U"!=""?$U:ini_get("mysql.default_user")),("$K$U$C"!=""?$C:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($M){return"'".mysql_real_escape_string($M,$this->_link)."'";}function
select_db($qb){return
mysql_select_db($qb,$this->_link);}function
query($E,$mg=false){$F=@($mg?mysql_unbuffered_query($E,$this->_link):mysql_query($E,$this->_link));$this->error="";if(!$F){$this->error=mysql_error($this->_link);return
false;}if($F===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($F);}function
multi_query($E){return$this->_result=$this->query($E);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($E,$l=0){$F=$this->query($E);if(!$F||!$F->num_rows)return
false;return
mysql_result($F->_result,0,$l);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($F){$this->_result=$F;$this->num_rows=mysql_num_rows($F);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$G=mysql_fetch_field($this->_result,$this->_offset++);$G->orgtable=$G->table;$G->orgname=$G->name;$G->charsetnr=($G->blob?63:0);return$G;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($K,$U,$C){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$K)),$U,$C);$this->query("SET NAMES utf8");return
true;}function
select_db($qb){return$this->query("USE ".idf_escape($qb));}function
query($E,$mg=false){$this->setAttribute(1000,!$mg);return
parent::query($E,$mg);}}}function
idf_escape($r){return"`".str_replace("`","``",$r)."`";}function
table($r){return
idf_escape($r);}function
connect(){global$b;$g=new
Min_DB;$mb=$b->credentials();if($g->connect($mb[0],$mb[1],$mb[2])){$g->query("SET sql_quote_show_create = 1, autocommit = 1");return$g;}$G=$g->error;if(function_exists('iconv')&&!is_utf8($G)&&strlen($jf=iconv("windows-1250","utf-8",$G))>strlen($G))$G=$jf;return$G;}function
get_databases($oc){global$g;$G=get_session("dbs");if($G===null){$E=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$G=($oc?slow_query($E):get_vals($E));restart_session();set_session("dbs",$G);stop_session();}return$G;}function
limit($E,$Z,$x,$A=0,$qf=" "){return" $E$Z".($x!==null?$qf."LIMIT $x".($A?" OFFSET $A":""):"");}function
limit1($E,$Z){return
limit($E,$Z,1);}function
db_collation($j,$Wa){global$g;$G=null;$jb=$g->result("SHOW CREATE DATABASE ".idf_escape($j),1);if(preg_match('~ COLLATE ([^ ]+)~',$jb,$z))$G=$z[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$jb,$z))$G=$Wa[$z[1]][-1];return$G;}function
engines(){$G=array();foreach(get_rows("SHOW ENGINES")as$H){if(ereg("YES|DEFAULT",$H["Support"]))$G[]=$H["Engine"];}return$G;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($i){$G=array();foreach($i
as$j)$G[$j]=count(get_vals("SHOW TABLES IN ".idf_escape($j)));return$G;}function
table_status($_=""){$G=array();foreach(get_rows("SHOW TABLE STATUS".($_!=""?" LIKE ".q(addcslashes($_,"%_")):""))as$H){if($H["Engine"]=="InnoDB")$H["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$H["Comment"]);if(!isset($H["Rows"]))$H["Comment"]="";if($_!="")return$H;$G[$H["Name"]]=$H;}return$G;}function
is_view($P){return!isset($P["Rows"]);}function
fk_support($P){return
eregi("InnoDB|IBMDB2I",$P["Engine"]);}function
fields($O){$G=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($O))as$H){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$H["Type"],$z);$G[$H["Field"]]=array("field"=>$H["Field"],"full_type"=>$H["Type"],"type"=>$z[1],"length"=>$z[2],"unsigned"=>ltrim($z[3].$z[4]),"default"=>($H["Default"]!=""||ereg("char",$z[1])?$H["Default"]:null),"null"=>($H["Null"]=="YES"),"auto_increment"=>($H["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$H["Extra"],$z)?$z[1]:""),"collation"=>$H["Collation"],"privileges"=>array_flip(explode(",",$H["Privileges"])),"comment"=>$H["Comment"],"primary"=>($H["Key"]=="PRI"),);}return$G;}function
indexes($O,$h=null){$G=array();foreach(get_rows("SHOW INDEX FROM ".table($O),$h)as$H){$G[$H["Key_name"]]["type"]=($H["Key_name"]=="PRIMARY"?"PRIMARY":($H["Index_type"]=="FULLTEXT"?"FULLTEXT":($H["Non_unique"]?"INDEX":"UNIQUE")));$G[$H["Key_name"]]["columns"][]=$H["Column_name"];$G[$H["Key_name"]]["lengths"][]=$H["Sub_part"];}return$G;}function
foreign_keys($O){global$g,$Vd;static$xe='`(?:[^`]|``)+`';$G=array();$kb=$g->result("SHOW CREATE TABLE ".table($O),1);if($kb){preg_match_all("~CONSTRAINT ($xe) FOREIGN KEY \\(((?:$xe,? ?)+)\\) REFERENCES ($xe)(?:\\.($xe))? \\(((?:$xe,? ?)+)\\)(?: ON DELETE ($Vd))?(?: ON UPDATE ($Vd))?~",$kb,$td,PREG_SET_ORDER);foreach($td
as$z){preg_match_all("~$xe~",$z[2],$vf);preg_match_all("~$xe~",$z[5],$Qf);$G[idf_unescape($z[1])]=array("db"=>idf_unescape($z[4]!=""?$z[3]:$z[4]),"table"=>idf_unescape($z[4]!=""?$z[4]:$z[3]),"source"=>array_map('idf_unescape',$vf[0]),"target"=>array_map('idf_unescape',$Qf[0]),"on_delete"=>($z[6]?$z[6]:"RESTRICT"),"on_update"=>($z[7]?$z[7]:"RESTRICT"),);}}return$G;}function
view($_){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($_),1)));}function
collations(){$G=array();foreach(get_rows("SHOW COLLATION")as$H){if($H["Default"])$G[$H["Charset"]][-1]=$H["Collation"];else$G[$H["Charset"]][]=$H["Collation"];}ksort($G);foreach($G
as$v=>$W)asort($G[$v]);return$G;}function
information_schema($j){global$g;return($g->server_info>=5&&$j=="information_schema")||($g->server_info>=5.5&&$j=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
error_line(){global$g;if(ereg(' at line ([0-9]+)$',$g->error,$Xe))return$Xe[1]-1;}function
exact_value($W){return
q($W)." COLLATE utf8_bin";}function
create_database($j,$d){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($j).($d?" COLLATE ".q($d):""));}function
drop_databases($i){set_session("dbs",null);return
apply_queries("DROP DATABASE",$i,'idf_escape');}function
rename_database($_,$d){if(create_database($_,$d)){$Ye=array();foreach(tables_list()as$O=>$S)$Ye[]=table($O)." TO ".idf_escape($_).".".table($O);if(!$Ye||queries("RENAME TABLE ".implode(", ",$Ye))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Ba=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$s){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$s["columns"],true)){$Ba="";break;}if($s["type"]=="PRIMARY")$Ba=" UNIQUE";}}return" AUTO_INCREMENT$Ba";}function
alter_table($O,$_,$m,$pc,$ab,$Qb,$d,$Aa,$ue){$c=array();foreach($m
as$l)$c[]=($l[1]?($O!=""?($l[0]!=""?"CHANGE ".idf_escape($l[0]):"ADD"):" ")." ".implode($l[1]).($O!=""?$l[2]:""):"DROP ".idf_escape($l[0]));$c=array_merge($c,$pc);$zf="COMMENT=".q($ab).($Qb?" ENGINE=".q($Qb):"").($d?" COLLATE ".q($d):"").($Aa!=""?" AUTO_INCREMENT=$Aa":"").$ue;if($O=="")return
queries("CREATE TABLE ".table($_)." (\n".implode(",\n",$c)."\n) $zf");if($O!=$_)$c[]="RENAME TO ".table($_);$c[]=$zf;return
queries("ALTER TABLE ".table($O)."\n".implode(",\n",$c));}function
alter_indexes($O,$c){foreach($c
as$v=>$W)$c[$v]=($W[2]=="DROP"?"\nDROP INDEX ".idf_escape($W[1]):"\nADD $W[0] ".($W[0]=="PRIMARY"?"KEY ":"").($W[1]!=""?idf_escape($W[1])." ":"").$W[2]);return
queries("ALTER TABLE ".table($O).implode(",",$c));}function
truncate_tables($Q){return
apply_queries("TRUNCATE TABLE",$Q);}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($Q){return
queries("DROP TABLE ".implode(", ",array_map('table',$Q)));}function
move_tables($Q,$Y,$Qf){$Ye=array();foreach(array_merge($Q,$Y)as$O)$Ye[]=table($O)." TO ".idf_escape($Qf).".".table($O);return
queries("RENAME TABLE ".implode(", ",$Ye));}function
copy_tables($Q,$Y,$Qf){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($Q
as$O){$_=($Qf==DB?table("copy_$O"):idf_escape($Qf).".".table($O));if(!queries("DROP TABLE IF EXISTS $_")||!queries("CREATE TABLE $_ LIKE ".table($O))||!queries("INSERT INTO $_ SELECT * FROM ".table($O)))return
false;}foreach($Y
as$O){$_=($Qf==DB?table("copy_$O"):idf_escape($Qf).".".table($O));$Bg=view($O);if(!queries("DROP VIEW IF EXISTS $_")||!queries("CREATE VIEW $_ AS $Bg[select]"))return
false;}return
true;}function
trigger($_){if($_=="")return
array();$I=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($_));return
reset($I);}function
triggers($O){$G=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($O,"%_")))as$H)$G[$H["Trigger"]]=array($H["Timing"],$H["Event"]);return$G;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($_,$S){global$g,$Sb,$Pc,$T;$ua=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$lg="((".implode("|",array_merge(array_keys($T),$ua)).")\\b(?:\\s*\\(((?:[^'\")]*|$Sb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$xe="\\s*(".($S=="FUNCTION"?"":$Pc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$lg";$jb=$g->result("SHOW CREATE $S ".idf_escape($_),2);preg_match("~\\(((?:$xe\\s*,?)*)\\)\\s*".($S=="FUNCTION"?"RETURNS\\s+$lg\\s+":"")."(.*)~is",$jb,$z);$m=array();preg_match_all("~$xe\\s*,?~is",$z[1],$td,PREG_SET_ORDER);foreach($td
as$pe){$_=str_replace("``","`",$pe[2]).$pe[3];$m[]=array("field"=>$_,"type"=>strtolower($pe[5]),"length"=>preg_replace_callback("~$Sb~s",'normalize_enum',$pe[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$pe[8] $pe[7]"))),"full_type"=>$pe[4],"inout"=>strtoupper($pe[1]),"collation"=>strtolower($pe[9]),);}if($S!="FUNCTION")return
array("fields"=>$m,"definition"=>$z[11]);return
array("fields"=>$m,"returns"=>array("type"=>$z[12],"length"=>$z[13],"unsigned"=>$z[15],"collation"=>$z[16]),"definition"=>$z[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($O,$L){return
queries("INSERT INTO ".table($O)." (".implode(", ",array_keys($L)).")\nVALUES (".implode(", ",$L).")");}function
insert_update($O,$L,$Fe){foreach($L
as$v=>$W)$L[$v]="$v = $W";$tg=implode(", ",$L);return
queries("INSERT INTO ".table($O)." SET $tg ON DUPLICATE KEY UPDATE $tg");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$E){return$g->query("EXPLAIN $E");}function
found_rows($P,$Z){return($Z||$P["Engine"]!="InnoDB"?null:$P["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($lf){return
true;}function
create_sql($O,$Aa){global$g;$G=$g->result("SHOW CREATE TABLE ".table($O),1);if(!$Aa)$G=preg_replace('~ AUTO_INCREMENT=\\d+~','',$G);return$G;}function
truncate_sql($O){return"TRUNCATE ".table($O);}function
use_sql($qb){return"USE ".idf_escape($qb);}function
trigger_sql($O,$N){$G="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($O,"%_")),null,"-- ")as$H)$G.="\n".($N=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($H["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($H["Trigger"])." $H[Timing] $H[Event] ON ".table($H["Table"])." FOR EACH ROW\n$H[Statement];;\n";return$G;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($l){if(ereg("binary",$l["type"]))return"HEX(".idf_escape($l["field"]).")";if(ereg("geometry|point|linestring|polygon",$l["type"]))return"AsWKT(".idf_escape($l["field"]).")";}function
unconvert_field($l,$G){if(ereg("binary",$l["type"]))$G="unhex($G)";if(ereg("geometry|point|linestring|polygon",$l["type"]))$G="GeomFromText($G)";return$G;}function
support($jc){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$jc);}$u="sql";$T=array();$Bf=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometry'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$v=>$W){$T+=$W;$Bf[$v]=array_keys($W);}$sg=array("unsigned","zerofill","unsigned zerofill");$Zd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$yc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Cc=array("avg","count","count distinct","group_concat","max","min","sum");$Ib=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="3.6.1";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
databases($oc=true){return
get_databases($oc);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$Cb;echo'<table cellspacing="0">
<tr><th>System<td>',html_select("auth[driver]",$Cb,DRIVER,"loginDriver(this);"),'<tr><th>Server<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]">
<tr><th>Username<td><input id="username" name="auth[username]" value="',h($_GET["username"]),'">
<tr><th>Password<td><input type="password" name="auth[password]">
<tr><th>Database<td><input name="auth[db]" value="',h($_GET["db"]);?>">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
username.focus();
username.form['auth[driver]'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".'Login'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
login($qd,$C){return
true;}function
tableName($If){return
h($If["Name"]);}function
fieldName($l,$de=0){return'<span title="'.h($l["full_type"]).'">'.h($l["field"]).'</span>';}function
selectLinks($If,$L=""){echo'<p class="tabs">';$od=array("select"=>'Select data',"table"=>'Show structure');if(is_view($If))$od["view"]='Alter view';else$od["create"]='Alter table';if($L!==null)$od["edit"]='New item';foreach($od
as$v=>$W)echo" <a href='".h(ME)."$v=".urlencode($If["Name"]).($v=="edit"?$L:"")."'".bold(isset($_GET[$v])).">$W</a>";echo"\n";}function
foreignKeys($O){return
foreign_keys($O);}function
backwardKeys($O,$Hf){return
array();}function
backwardKeysPrint($Da,$H){}function
selectQuery($E){global$u;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Last page'."'>&gt;&gt;</a> <code class='jush-$u'>".h(str_replace("\n"," ",$E))."</code> <a href='".h(ME)."sql=".urlencode($E)."'>".'Edit'."</a></p>\n";}function
rowDescription($O){return"";}function
rowDescriptions($I,$qc){return$I;}function
selectVal($W,$y,$l){$G=($W===null?"<i>NULL</i>":(ereg("char|binary",$l["type"])&&!ereg("var",$l["type"])?"<code>$W</code>":$W));if(ereg('blob|bytea|raw|file',$l["type"])&&!is_utf8($W))$G=lang(array('%d byte','%d bytes'),strlen($W));return($y?"<a href='$y'>$G</a>":$G);}function
editVal($W,$l){return$W;}function
selectColumnsPrint($J,$f){global$yc,$Cc;print_fieldset("select",'Select',$J);$p=0;$xc=array('Functions'=>$yc,'Aggregation'=>$Cc);foreach($J
as$v=>$W){$W=$_GET["columns"][$v];echo"<div>".html_select("columns[$p][fun]",array(-1=>"")+$xc,$W["fun"]),"(<select name='columns[$p][col]' onchange='selectFieldChange(this.form);'><option>".optionlist($f,$W["col"],true)."</select>)</div>\n";$p++;}echo"<div>".html_select("columns[$p][fun]",array(-1=>"")+$xc,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$p][col]' onchange='selectAddRow(this);'><option>".optionlist($f,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($Z,$f,$t){print_fieldset("search",'Search',$Z);foreach($t
as$p=>$s){if($s["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$s["columns"]))."</i>) AGAINST"," <input name='fulltext[$p]' value='".h($_GET["fulltext"][$p])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$p]",1,isset($_GET["boolean"][$p]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Na="this.nextSibling.onchange();";for($p=0;$p<=count($_GET["where"]);$p++){list(,$W)=each($_GET["where"]);if(!$W||("$W[col]$W[val]"!=""&&in_array($W["op"],$this->operators))){echo"<div><select name='where[$p][col]' onchange='$Na'><option value=''>(".'anywhere'.")".optionlist($f,$W["col"],true)."</select>",html_select("where[$p][op]",$this->operators,$W["op"],$Na),"<input name='where[$p][val]' value='".h($W["val"])."' onchange='".($W?"selectFieldChange(this.form)":"selectAddRow(this)").";'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($de,$f,$t){print_fieldset("sort",'Sort',$de);$p=0;foreach((array)$_GET["order"]as$v=>$W){if(isset($f[$W])){echo"<div><select name='order[$p]' onchange='selectFieldChange(this.form);'><option>".optionlist($f,$W,true)."</select>",checkbox("desc[$p]",1,isset($_GET["desc"][$v]),'descending')."</div>\n";$p++;}}echo"<div><select name='order[$p]' onchange='selectAddRow(this);'><option>".optionlist($f,null,true)."</select>","<label><input type='checkbox' name='desc[$p]' value='1'>".'descending'."</label></div>\n";echo"</div></fieldset>\n";}function
selectLimitPrint($x){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input name='limit' size='3' value='".h($x)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($Tf){if($Tf!==null){echo"<fieldset><legend>".'Text length'."</legend><div>",'<input name="text_length" size="3" value="'.h($Tf).'">',"</div></fieldset>\n";}}function
selectActionPrint($t){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>"," <span id='noindex' title='".'Full table scan'."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$f=array();foreach($t
as$s){if($s["type"]!="FULLTEXT")$f[reset($s["columns"])]=1;}$f[""]=1;foreach($f
as$v=>$W)json_row($v);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($Mb,$f){}function
selectColumnsProcess($f,$t){global$yc,$Cc;$J=array();$Ac=array();foreach((array)$_GET["columns"]as$v=>$W){if($W["fun"]=="count"||(isset($f[$W["col"]])&&(!$W["fun"]||in_array($W["fun"],$yc)||in_array($W["fun"],$Cc)))){$J[$v]=apply_sql_function($W["fun"],(isset($f[$W["col"]])?idf_escape($W["col"]):"*"));if(!in_array($W["fun"],$Cc))$Ac[]=$J[$v];}}return
array($J,$Ac);}function
selectSearchProcess($m,$t){global$u;$G=array();foreach($t
as$p=>$s){if($s["type"]=="FULLTEXT"&&$_GET["fulltext"][$p]!="")$G[]="MATCH (".implode(", ",array_map('idf_escape',$s["columns"])).") AGAINST (".q($_GET["fulltext"][$p]).(isset($_GET["boolean"][$p])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$W){if("$W[col]$W[val]"!=""&&in_array($W["op"],$this->operators)){$db=" $W[op]";if(ereg('IN$',$W["op"])){$Kc=process_length($W["val"]);$db.=" (".($Kc!=""?$Kc:"NULL").")";}elseif(!$W["op"])$db.=$W["val"];elseif($W["op"]=="LIKE %%")$db=" LIKE ".$this->processInput($m[$W["col"]],"%$W[val]%");elseif(!ereg('NULL$',$W["op"]))$db.=" ".$this->processInput($m[$W["col"]],$W["val"]);if($W["col"]!="")$G[]=idf_escape($W["col"]).$db;else{$Xa=array();foreach($m
as$_=>$l){$Vc=ereg('char|text|enum|set',$l["type"]);if((is_numeric($W["val"])||!ereg('int|float|double|decimal|bit',$l["type"]))&&(!ereg("[\x80-\xFF]",$W["val"])||$Vc)){$_=idf_escape($_);$Xa[]=($u=="sql"&&$Vc&&!ereg('^utf8',$l["collation"])?"CONVERT($_ USING utf8)":$_);}}$G[]=($Xa?"(".implode("$db OR ",$Xa)."$db)":"0");}}}return$G;}function
selectOrderProcess($m,$t){$G=array();foreach((array)$_GET["order"]as$v=>$W){if(isset($m[$W])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$W))$G[]=(isset($m[$W])?idf_escape($W):$W).(isset($_GET["desc"][$v])?" DESC":"");}return$G;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$qc){return
false;}function
selectQueryBuild($J,$Z,$Ac,$de,$x,$B){return"";}function
messageQuery($E){global$u;static$ib=0;restart_session();$q="sql-".($ib++);$Ec=&get_session("queries");if(strlen($E)>1e6)$E=ereg_replace('[\x80-\xFF]+$','',substr($E,0,1e6))."\n...";$Ec[$_GET["db"]][]=array($E,time());return" <span class='time'>".@date("H:i:s")."</span> <a href='#$q' onclick=\"return !toggle('$q');\">".'SQL command'."</a><div id='$q' class='hidden'><pre><code class='jush-$u'>".shorten_utf8($E,1000).'</code></pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($Ec[$_GET["db"]])-1)).'">'.'Edit'.'</a></div>';}function
editFunctions($l){global$Ib;$G=($l["null"]?"NULL/":"");foreach($Ib
as$v=>$yc){if(!$v||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($yc
as$xe=>$W){if(!$xe||ereg($xe,$l["type"]))$G.="/$W";}if($v&&!ereg('set|blob|bytea|raw|file',$l["type"]))$G.="/=";}}return
explode("/",$G);}function
editInput($O,$l,$za,$X){if($l["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$za value='-1' checked><i>".'original'."</i></label> ":"").($l["null"]?"<label><input type='radio'$za value=''".($X!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$za,$l,$X,0);return"";}function
processInput($l,$X,$o=""){if($o=="=")return$X;$_=$l["field"];$G=($l["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$X)?$X:q($X));if(ereg('^(now|getdate|uuid)$',$o))$G="$o()";elseif(ereg('^current_(date|timestamp)$',$o))$G=$o;elseif(ereg('^([+-]|\\|\\|)$',$o))$G=idf_escape($_)." $o $G";elseif(ereg('^[+-] interval$',$o))$G=idf_escape($_)." $o ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$X)?$X:$G);elseif(ereg('^(addtime|subtime|concat)$',$o))$G="$o(".idf_escape($_).", $G)";elseif(ereg('^(md5|sha1|password|encrypt)$',$o))$G="$o($G)";return
unconvert_field($l,$G);}function
dumpOutput(){$G=array('text'=>'open','file'=>'save');if(function_exists('gzencode'))$G['gz']='gzip';if(function_exists('bzcompress'))$G['bz2']='bzip2';return$G;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable($O,$N,$Wc=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($N)dump_csv(array_keys(fields($O)));}elseif($N){$jb=create_sql($O,$_POST["auto_increment"]);if($jb){if($N=="DROP+CREATE")echo"DROP ".($Wc?"VIEW":"TABLE")." IF EXISTS ".table($O).";\n";if($Wc)$jb=remove_definer($jb);echo($N!="CREATE+ALTER"?$jb:($Wc?substr_replace($jb," OR REPLACE",6,0):substr_replace($jb," IF NOT EXISTS",12,0))).";\n\n";}if($N=="CREATE+ALTER"&&!$Wc){$E="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($O)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$m=array();$ta="";foreach(get_rows($E)as$H){$ub=$H["COLUMN_DEFAULT"];$H["default"]=($ub!==null?q($ub):"NULL");$H["after"]=q($ta);$H["alter"]=escape_string(idf_escape($H["COLUMN_NAME"])." $H[COLUMN_TYPE]".($H["COLLATION_NAME"]?" COLLATE $H[COLLATION_NAME]":"").($ub!==null?" DEFAULT ".($ub=="CURRENT_TIMESTAMP"?$ub:$H["default"]):"").($H["IS_NULLABLE"]=="YES"?"":" NOT NULL").($H["EXTRA"]?" $H[EXTRA]":"").($H["COLUMN_COMMENT"]?" COMMENT ".q($H["COLUMN_COMMENT"]):"").($ta?" AFTER ".idf_escape($ta):" FIRST"));echo", ADD $H[alter]";$m[]=$H;$ta=$H["COLUMN_NAME"];}echo"';
	DECLARE columns CURSOR FOR $E;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	SET @alter_table = '';
	OPEN columns;
	REPEAT
		FETCH columns INTO _column_name, _column_default, _is_nullable, _collation_name, _column_type, _extra, _column_comment;
		IF NOT done THEN
			SET set_after = 1;
			CASE _column_name";foreach($m
as$H)echo"
				WHEN ".q($H["COLUMN_NAME"])." THEN
					SET add_columns = REPLACE(add_columns, ', ADD $H[alter]', IF(
						_column_default <=> $H[default] AND _is_nullable = '$H[IS_NULLABLE]' AND _collation_name <=> ".(isset($H["COLLATION_NAME"])?"'$H[COLLATION_NAME]'":"NULL")." AND _column_type = ".q($H["COLUMN_TYPE"])." AND _extra = '$H[EXTRA]' AND _column_comment = ".q($H["COLUMN_COMMENT"])." AND after = $H[after]
					, '', ', MODIFY $H[alter]'));";echo"
				ELSE
					SET @alter_table = CONCAT(@alter_table, ', DROP ', _column_name);
					SET set_after = 0;
			END CASE;
			IF set_after THEN
				SET after = _column_name;
			END IF;
		END IF;
	UNTIL done END REPEAT;
	CLOSE columns;
	IF @alter_table != '' OR add_columns != '' THEN
		SET alter_command = CONCAT(alter_command, 'ALTER TABLE ".table($O)."', SUBSTR(CONCAT(add_columns, @alter_table), 2), ';\\n');
	END IF;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;

";}}}function
dumpData($O,$N,$E){global$g,$u;$vd=($u=="sqlite"?0:1048576);if($N){if($_POST["format"]=="sql"&&$N=="TRUNCATE+INSERT")echo
truncate_sql($O).";\n";if($_POST["format"]=="sql")$m=fields($O);$F=$g->query($E,1);if($F){$Rc="";$La="";$bd=array();$Df="";while($H=$F->fetch_row()){if(!$bd){$zg=array();foreach($H
as$W){$l=$F->fetch_field();$bd[]=$l->name;$v=idf_escape($l->name);$zg[]="$v = VALUES($v)";}$Df=($N=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$zg):"").";\n";}if($_POST["format"]!="sql"){if($N=="table"){dump_csv($bd);$N="INSERT";}dump_csv($H);}else{if(!$Rc)$Rc="INSERT INTO ".table($O)." (".implode(", ",array_map('idf_escape',$bd)).") VALUES";foreach($H
as$v=>$W)$H[$v]=($W!==null?(ereg('int|float|double|decimal|bit',$m[$bd[$v]]["type"])?$W:q($W)):"NULL");$jf=($vd?"\n":" ")."(".implode(",\t",$H).")";if(!$La)$La=$Rc.$jf;elseif(strlen($La)+4+strlen($jf)+strlen($Df)<$vd)$La.=",$jf";else{echo$La.$Df;$La=$Rc.$jf;}}}if($La)echo$La.$Df;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($Ic){return
friendly_url($Ic!=""?$Ic:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($Ic,$Hd=false){$ne=$_POST["output"];$fc=($_POST["format"]=="sql"?"sql":($Hd?"tar":"csv"));header("Content-Type: ".($ne=="bz2"?"application/x-bzip":($ne=="gz"?"application/x-gzip":($fc=="tar"?"application/x-tar":($fc=="sql"||$ne!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($ne=="bz2")ob_start('bzcompress',1e6);if($ne=="gz")ob_start('gzencode',1e6);return$fc;}function
homepage(){echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.'Alter database'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Alter schema':'Create schema')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'Database schema'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'Privileges'."</a>\n":"");return
true;}function
navigation($Gd){global$ia,$R,$u,$Cb;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Gd=="auth"){$nc=true;foreach((array)$_SESSION["pwds"]as$Bb=>$tf){foreach($tf
as$K=>$xg){foreach($xg
as$U=>$C){if($C!==null){if($nc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$nc=false;}$sb=$_SESSION["db"][$Bb][$K][$U];foreach(($sb?array_keys($sb):array(""))as$j)echo"<a href='".h(auth_url($Bb,$K,$U,$j))."'>($Cb[$Bb]) ".h($U.($K!=""?"@$K":"").($j!=""?" - $j":""))."</a><br>\n";}}}}}else{echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$Gd){echo"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])).">".'SQL command'."</a>\n";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Dump'."</a>\n";}echo'<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="',$R,'">
</p>
</form>
';$this->databasesPrint($Gd);if($_GET["ns"]!==""&&!$Gd&&DB!=""){echo'<p><a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Create new table'."</a>\n";$Q=tables_list();if(!$Q)echo"<p class='message'>".'No tables.'."\n";else{$this->tablesPrint($Q);$od=array();foreach($Q
as$O=>$S)$od[]=preg_quote($O,'/');echo"<script type='text/javascript'>\n","var jushLinks = { $u: [ '".js_escape(ME)."table=\$&', /\\b(".implode("|",$od).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$W)echo"jushLinks.$W = jushLinks.$u;\n";echo"</script>\n";}}}}function
databasesPrint($Gd){global$g;$i=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();echo($i?html_select("db",array(""=>"(".'database'.")")+$i,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="Use"',($i?" class='hidden'":""),'>
';if($Gd!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".html_select("ns",array(""=>"(".'schema'.")")+schemas(),$_GET["ns"],"this.form.submit();");if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}function
tablesPrint($Q){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($Q
as$O=>$S){echo'<a href="'.h(ME).'select='.urlencode($O).'"'.bold($_GET["select"]==$O).">".'select'."</a> ",'<a href="'.h(ME).'table='.urlencode($O).'"'.bold($_GET["table"]==$O)." title='".'Show structure'."'>".$this->tableName(array("Name"=>$O))."</a><br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$Zd;function
page_header($Wf,$k="",$Ka=array(),$Xf=""){global$ca,$b,$g,$Cb;header("Content-Type: text/html; charset=utf-8");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$Yf=$Wf.($Xf!=""?": ".h($Xf):"");$Zf=strip_tags($Yf.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Zf,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.6.1",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.6.1",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.6.1",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($Ka!==null){$y=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($y?$y:".").'">'.$Cb[DRIVER].'</a> &raquo; ';$y=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$K=(SERVER!=""?h(SERVER):'Server');if($Ka===false)echo"$K\n";else{echo"<a href='".($y?h($y):".")."' accesskey='1' title='Alt+Shift+1'>$K</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ka)))echo'<a href="'.h($y."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Ka)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Ka
as$v=>$W){$wb=(is_array($W)?$W[1]:$W);if($wb!="")echo'<a href="'.h(ME."$v=").urlencode(is_array($W)?$W[0]:$W).'">'.h($wb).'</a> &raquo; ';}}echo"$Wf\n";}}echo"<h2>$Yf</h2>\n";restart_session();$ug=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Dd=$_SESSION["messages"][$ug];if($Dd){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Dd)."</div>\n";unset($_SESSION["messages"][$ug]);}$i=&get_session("dbs");if(DB!=""&&$i&&!in_array(DB,$i,true))$i=null;stop_session();if($k)echo"<div class='error'>$k</div>\n";define("PAGE_HEADER",1);}function
page_footer($Gd=""){global$b;echo'</div>

<div id="menu">
';$b->navigation($Gd);echo'</div>
';}function
int32($Jd){while($Jd>=2147483648)$Jd-=4294967296;while($Jd<=-2147483649)$Jd+=4294967296;return(int)$Jd;}function
long2str($V,$Dg){$jf='';foreach($V
as$W)$jf.=pack('V',$W);if($Dg)return
substr($jf,0,end($V));return$jf;}function
str2long($jf,$Dg){$V=array_values(unpack('V*',str_pad($jf,4*ceil(strlen($jf)/4),"\0")));if($Dg)$V[]=strlen($jf);return$V;}function
xxtea_mx($Ig,$Hg,$Ff,$Zc){return
int32((($Ig>>5&0x7FFFFFF)^$Hg<<2)+(($Hg>>3&0x1FFFFFFF)^$Ig<<4))^int32(($Ff^$Hg)+($Zc^$Ig));}function
encrypt_string($Af,$v){if($Af=="")return"";$v=array_values(unpack("V*",pack("H*",md5($v))));$V=str2long($Af,true);$Jd=count($V)-1;$Ig=$V[$Jd];$Hg=$V[0];$D=floor(6+52/($Jd+1));$Ff=0;while($D-->0){$Ff=int32($Ff+0x9E3779B9);$Hb=$Ff>>2&3;for($oe=0;$oe<$Jd;$oe++){$Hg=$V[$oe+1];$Id=xxtea_mx($Ig,$Hg,$Ff,$v[$oe&3^$Hb]);$Ig=int32($V[$oe]+$Id);$V[$oe]=$Ig;}$Hg=$V[0];$Id=xxtea_mx($Ig,$Hg,$Ff,$v[$oe&3^$Hb]);$Ig=int32($V[$Jd]+$Id);$V[$Jd]=$Ig;}return
long2str($V,false);}function
decrypt_string($Af,$v){if($Af=="")return"";$v=array_values(unpack("V*",pack("H*",md5($v))));$V=str2long($Af,false);$Jd=count($V)-1;$Ig=$V[$Jd];$Hg=$V[0];$D=floor(6+52/($Jd+1));$Ff=int32($D*0x9E3779B9);while($Ff){$Hb=$Ff>>2&3;for($oe=$Jd;$oe>0;$oe--){$Ig=$V[$oe-1];$Id=xxtea_mx($Ig,$Hg,$Ff,$v[$oe&3^$Hb]);$Hg=int32($V[$oe]-$Id);$V[$oe]=$Hg;}$Ig=$V[$Jd];$Id=xxtea_mx($Ig,$Hg,$Ff,$v[$oe&3^$Hb]);$Hg=int32($V[0]-$Id);$V[0]=$Hg;$Ff=int32($Ff-0x9E3779B9);}return
long2str($V,true);}$g='';$R=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$ye=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$W){list($v)=explode(":",$W);$ye[$v]=$W;}}$_a=$_POST["auth"];if($_a){session_regenerate_id();$_SESSION["pwds"][$_a["driver"]][$_a["server"]][$_a["username"]]=$_a["password"];$_SESSION["db"][$_a["driver"]][$_a["server"]][$_a["username"]][$_a["db"]]=true;if($_a["permanent"]){$v=base64_encode($_a["driver"])."-".base64_encode($_a["server"])."-".base64_encode($_a["username"])."-".base64_encode($_a["db"]);$Ie=$b->permanentLogin();$ye[$v]="$v:".base64_encode($Ie?encrypt_string($_a["password"],$Ie):"");cookie("adminer_permanent",implode(" ",$ye));}if(count($_POST)==1||DRIVER!=$_a["driver"]||SERVER!=$_a["server"]||$_GET["username"]!==$_a["username"]||DB!=$_a["db"])redirect(auth_url($_a["driver"],$_a["server"],$_a["username"],$_a["db"]));}elseif($_POST["logout"]){if($R&&$_POST["token"]!=$R){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$v)set_session($v,null);unset_permanent();redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($ye&&!$_SESSION["pwds"]){session_regenerate_id();$Ie=$b->permanentLogin();foreach($ye
as$v=>$W){list(,$Ra)=explode(":",$W);list($Bb,$K,$U,$j)=array_map('base64_decode',explode("-",$v));$_SESSION["pwds"][$Bb][$K][$U]=decrypt_string(base64_decode($Ra),$Ie);$_SESSION["db"][$Bb][$K][$U][$j]=true;}}function
unset_permanent(){global$ye;foreach($ye
as$v=>$W){list($Bb,$K,$U)=array_map('base64_decode',explode("-",$v));if($Bb==DRIVER&&$K==SERVER&&$j==$_GET["username"])unset($ye[$v]);}cookie("adminer_permanent",implode(" ",$ye));}function
auth_error($Zb=null){global$g,$b,$R;$uf=session_name();$k="";if(!$_COOKIE[$uf]&&$_GET[$uf]&&ini_bool("session.use_only_cookies"))$k='Session support must be enabled.';elseif(isset($_GET["username"])){if(($_COOKIE[$uf]||$_GET[$uf])&&!$R)$k='Session expired, please login again.';else{$C=&get_session("pwds");if($C!==null){$k=h($Zb?$Zb->getMessage():(is_string($g)?$g:'Invalid credentials.'));$C=null;}unset_permanent();}}page_header('Login',$k,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$Ce)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$b->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$R=$_SESSION["token"];if($_a&&$_POST["token"])$_POST["token"]=$R;$k=($_POST?($_POST["token"]==$R?"":'Invalid CSRF token. Send the form again.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.','"post_max_size"')));if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_cache_limiter("");session_write_close();}function
connect_error(){global$b,$g,$R,$k,$Cb;$i=array();if(DB!="")page_header('Database'.": ".h(DB),'Invalid database.',true);else{if($_POST["db"]&&!$k)queries_redirect(substr(ME,0,-1),'Databases have been dropped.',drop_databases($_POST["db"]));page_header('Select database',$k,false);echo"<p><a href='".h(ME)."database='>".'Create new database'."</a>\n";foreach(array('privileges'=>'Privileges','processlist'=>'Process list','variables'=>'Variables','status'=>'Status',)as$v=>$W){if(support($v))echo"<a href='".h(ME)."$v='>$W</a>\n";}echo"<p>".sprintf('%s version: %s through PHP extension %s',$Cb[DRIVER],"<b>$g->server_info</b>","<b>$g->extension</b>")."\n","<p>".sprintf('Logged as: %s',"<b>".h(logged_user())."</b>")."\n";$Ve="<a href='".h(ME)."refresh=1'>".'Refresh'."</a>\n";$i=$b->databases();if($i){$mf=support("scheme");$Wa=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);'>\n","<thead><tr><td>&nbsp;<th>".'Database'."<td>".'Collation'."<td>".'Tables'."</thead>\n";foreach($i
as$j){$ef=h(ME)."db=".urlencode($j);echo"<tr".odd()."><td>".checkbox("db[]",$j,in_array($j,(array)$_POST["db"])),"<th><a href='$ef'>".h($j)."</a>","<td><a href='$ef".($mf?"&amp;ns=":"")."&amp;database=' title='".'Alter database'."'>".nbsp(db_collation($j,$Wa))."</a>","<td align='right'><a href='$ef&amp;schema=' id='tables-".h($j)."' title='".'Database schema'."'>?</a>","\n";}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","<p><input type='submit' name='drop' value='".'Drop'."'".confirm("formChecked(this, /db/)").">\n","<input type='hidden' name='token' value='$R'>\n",$Ve,"</form>\n";}else
echo"<p>$Ve";}page_footer("db");if($i)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){page_header('Schema'.": ".h($_GET["ns"]),'Invalid schema.',true);page_footer("ns");exit;}}function
select($F,$h=null,$Hc="",$ge=array()){$od=array();$t=array();$f=array();$Ia=array();$T=array();$G=array();odd('');for($p=0;$H=$F->fetch_row();$p++){if(!$p){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Xc=0;$Xc<count($H);$Xc++){$l=$F->fetch_field();$_=$l->name;$fe=$l->orgtable;$ee=$l->orgname;$G[$l->table]=$fe;if($Hc)$od[$Xc]=($_=="table"?"table=":($_=="possible_keys"?"indexes=":null));elseif($fe!=""){if(!isset($t[$fe])){$t[$fe]=array();foreach(indexes($fe,$h)as$s){if($s["type"]=="PRIMARY"){$t[$fe]=array_flip($s["columns"]);break;}}$f[$fe]=$t[$fe];}if(isset($f[$fe][$ee])){unset($f[$fe][$ee]);$t[$fe][$ee]=$Xc;$od[$Xc]=$fe;}}if($l->charsetnr==63)$Ia[$Xc]=true;$T[$Xc]=$l->type;$_=h($_);echo"<th".($fe!=""||$l->name!=$ee?" title='".h(($fe!=""?"$fe.":"").$ee)."'":"").">".($Hc?"<a href='$Hc".strtolower($_)."' target='_blank' rel='noreferrer'>$_</a>":$_);}echo"</thead>\n";}echo"<tr".odd().">";foreach($H
as$v=>$W){if($W===null)$W="<i>NULL</i>";elseif($Ia[$v]&&!is_utf8($W))$W="<i>".lang(array('%d byte','%d bytes'),strlen($W))."</i>";elseif(!strlen($W))$W="&nbsp;";else{$W=h($W);if($T[$v]==254)$W="<code>$W</code>";}if(isset($od[$v])&&!$f[$od[$v]]){if($Hc){$O=$H[array_search("table=",$od)];$y=$od[$v].urlencode($ge[$O]!=""?$ge[$O]:$O);}else{$y="edit=".urlencode($od[$v]);foreach($t[$od[$v]]as$Ua=>$Xc)$y.="&where".urlencode("[".bracket_escape($Ua)."]")."=".urlencode($H[$Xc]);}$W="<a href='".h(ME.$y)."'>$W</a>";}echo"<td>$W";}}echo($p?"</table>":"<p class='message'>".'No rows.')."\n";return$G;}function
referencable_primary($pf){$G=array();foreach(table_status()as$Jf=>$O){if($Jf!=$pf&&fk_support($O)){foreach(fields($Jf)as$l){if($l["primary"]){if($G[$Jf]){unset($G[$Jf]);break;}$G[$Jf]=$l;}}}}return$G;}function
textarea($_,$X,$I=10,$Xa=80){echo"<textarea name='$_' rows='$I' cols='$Xa' class='sqlarea' spellcheck='false' wrap='off' onkeydown='return textareaKeydown(this, event);'>";if(is_array($X)){foreach($X
as$W)echo
h($W[0])."\n\n\n";}else
echo
h($X);echo"</textarea>";}function
format_time($yf,$Pb){return" <span class='time'>(".sprintf('%.3f s',max(0,array_sum(explode(" ",$Pb))-array_sum(explode(" ",$yf)))).")</span>";}function
edit_type($v,$l,$Wa,$rc=array()){global$Bf,$T,$sg,$Vd;echo'<td><select name="',$v,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$l["type"]||isset($T[$l["type"]])?array():array($l["type"]))+$Bf+($rc?array('Foreign keys'=>$rc):array()),$l["type"]),'</select>
<td><input name="',$v,'[length]" value="',h($l["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td class="options">',"<select name='$v"."[collation]'".(ereg('(char|text|enum|set)$',$l["type"])?"":" class='hidden'").'><option value="">('.'collation'.')'.optionlist($Wa,$l["collation"]).'</select>',($sg?"<select name='$v"."[unsigned]'".(!$l["type"]||ereg('(int|float|double|decimal)$',$l["type"])?"":" class='hidden'").'><option>'.optionlist($sg,$l["unsigned"]).'</select>':''),($rc?"<select name='$v"."[on_delete]'".(ereg("`",$l["type"])?"":" class='hidden'")."><option value=''>(".'ON DELETE'.")".optionlist(explode("|",$Vd),$l["on_delete"])."</select> ":" ");}function
process_length($w){global$Sb;return(preg_match("~^\\s*(?:$Sb)(?:\\s*,\\s*(?:$Sb))*\\s*\$~",$w)&&preg_match_all("~$Sb~",$w,$td)?implode(",",$td[0]):preg_replace('~[^0-9,+-]~','',$w));}function
process_type($l,$Va="COLLATE"){global$sg;return" $l[type]".($l["length"]!=""?"(".process_length($l["length"]).")":"").(ereg('int|float|double|decimal',$l["type"])&&in_array($l["unsigned"],$sg)?" $l[unsigned]":"").(ereg('char|text|enum|set',$l["type"])&&$l["collation"]?" $Va ".q($l["collation"]):"");}function
process_field($l,$kg){return
array(idf_escape(trim($l["field"])),process_type($kg),($l["null"]?" NULL":" NOT NULL"),(isset($l["default"])?" DEFAULT ".(($l["type"]=="timestamp"&&eregi('^CURRENT_TIMESTAMP$',$l["default"]))||($l["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$l["default"]))?$l["default"]:q($l["default"])):""),($l["on_update"]?" ON UPDATE $l[on_update]":""),(support("comment")&&$l["comment"]!=""?" COMMENT ".q($l["comment"]):""),($l["auto_increment"]?auto_increment():null),);}function
type_class($S){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$v=>$W){if(ereg("$v|$W",$S))return" class='$v'";}}function
edit_fields($m,$Wa,$S="TABLE",$wa=0,$rc=array(),$bb=false){global$Pc;echo'<thead><tr class="wrap">
';if($S=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($S=="TABLE"?'Column name':'Parameter name'),'<td>Type<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Length
<td>Options
';if($S=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>
<td',($_POST["defaults"]?"":" class='hidden'"),'>Default values
',(support("comment")?"<td".($bb?"":" class='hidden'").">".'Comment':"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($m))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.6.1' alt='+' title='".'Add next'."'>",'<script type="text/javascript">row_count = ',count($m),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($m
as$p=>$l){$p++;$he=$l[($_POST?"orig":"field")];$_b=(isset($_POST["add"][$p-1])||(isset($l["field"])&&!$_POST["drop_col"][$p]))&&(support("drop_col")||$he=="");echo'<tr',($_b?"":" style='display: none;'"),'>
',($S=="PROCEDURE"?"<td>".html_select("fields[$p][inout]",explode("|",$Pc),$l["inout"]):""),'<th>';if($_b){echo'<input name="fields[',$p,'][field]" value="',h($l["field"]),'" onchange="',($l["field"]!=""||count($m)>1?"":"editingAddRow(this, $wa); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$p,'][orig]" value="',h($he),'">
';edit_type("fields[$p]",$l,$Wa,$rc);if($S=="TABLE"){echo'<td>',checkbox("fields[$p][null]",1,$l["null"]),'<td><input type="radio" name="auto_increment_col" value="',$p,'"';if($l["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td<?php echo($_POST["defaults"]?"":" class='hidden'"),'>',checkbox("fields[$p][has_default]",1,$l["has_default"]),'<input name="fields[',$p,'][default]" value="',h($l["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($bb?"":" class='hidden'")."><input name='fields[$p][comment]' value='".h($l["comment"])."' maxlength='255'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$p]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.6.1' alt='+' title='".'Add next'."' onclick='return !editingAddRow(this, $wa, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$p]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=3.6.1' alt='^' title='".'Move up'."'>&nbsp;"."<input type='image' class='icon' name='down[$p]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=3.6.1' alt='v' title='".'Move down'."'>&nbsp;":""),($he==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$p]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.6.1' alt='x' title='".'Remove'."' onclick='return !editingRemoveRow(this);'>":""),"\n";}}function
process_fields(&$m){ksort($m);$A=0;if($_POST["up"]){$gd=0;foreach($m
as$v=>$l){if(key($_POST["up"])==$v){unset($m[$v]);array_splice($m,$gd,0,array($l));break;}if(isset($l["field"]))$gd=$A;$A++;}}if($_POST["down"]){$tc=false;foreach($m
as$v=>$l){if(isset($l["field"])&&$tc){unset($m[key($_POST["down"])]);array_splice($m,$A,0,array($tc));break;}if(key($_POST["down"])==$v)$tc=$l;$A++;}}$m=array_values($m);if($_POST["add"])array_splice($m,key($_POST["add"]),0,array(array()));}function
normalize_enum($z){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($z[0][0].$z[0][0],$z[0][0],substr($z[0],1,-1))),'\\'))."'";}function
grant($zc,$Ke,$f,$Ud){if(!$Ke)return
true;if($Ke==array("ALL PRIVILEGES","GRANT OPTION"))return($zc=="GRANT"?queries("$zc ALL PRIVILEGES$Ud WITH GRANT OPTION"):queries("$zc ALL PRIVILEGES$Ud")&&queries("$zc GRANT OPTION$Ud"));return
queries("$zc ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$f, ",$Ke).$f).$Ud);}function
drop_create($Db,$jb,$pd,$Cd,$Ad,$Bd,$_){if($_POST["drop"])return
query_redirect($Db,$pd,$Cd,true,!$_POST["dropped"]);$Eb=$_!=""&&($_POST["dropped"]||queries($Db));$lb=queries($jb);if(!queries_redirect($pd,($_!=""?$Ad:$Bd),$lb)&&$Eb)redirect(null,$Cd);return$Eb;}function
remove_definer($E){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$E);}function
tar_file($lc,$fb){$G=pack("a100a8a8a8a12a12",$lc,644,0,0,decoct(strlen($fb)),decoct(time()));$Qa=8*32;for($p=0;$p<strlen($G);$p++)$Qa+=ord($G[$p]);$G.=sprintf("%06o",$Qa)."\0 ";return$G.str_repeat("\0",512-strlen($G)).$fb.str_repeat("\0",511-(strlen($fb)+511)%512);}function
ini_bytes($Oc){$W=ini_get($Oc);switch(strtolower(substr($W,-1))){case'g':$W*=1024;case'm':$W*=1024;case'k':$W*=1024;}return$W;}$Vd="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$Sb="'(?:''|[^'\\\\]|\\\\.)*+'";$Pc="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$m=fields($a);if(!$m)$k=error();$P=($m?table_status($a):array());page_header(($m&&is_view($P)?'View':'Table').": ".h($a),$k);$b->selectLinks($P);$ab=$P["Comment"];if($ab!="")echo"<p>".'Comment'.": ".h($ab)."\n";if($m){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Column'."<td>".'Type'.(support("comment")?"<td>".'Comment':"")."</thead>\n";foreach($m
as$l){echo"<tr".odd()."><th>".h($l["field"]),"<td title='".h($l["collation"])."'>".h($l["full_type"]).($l["null"]?" <i>NULL</i>":"").($l["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(isset($l["default"])?" [<b>".h($l["default"])."</b>]":""),(support("comment")?"<td>".nbsp($l["comment"]):""),"\n";}echo"</table>\n";if(!is_view($P)){echo"<h3>".'Indexes'."</h3>\n";$t=indexes($a);if($t){echo"<table cellspacing='0'>\n";foreach($t
as$_=>$s){ksort($s["columns"]);$He=array();foreach($s["columns"]as$v=>$W)$He[]="<i>".h($W)."</i>".($s["lengths"][$v]?"(".$s["lengths"][$v].")":"");echo"<tr title='".h($_)."'><th>$s[type]<td>".implode(", ",$He)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($a).'">'.'Alter indexes'."</a>\n";if(fk_support($P)){echo"<h3>".'Foreign keys'."</h3>\n";$rc=foreign_keys($a);if($rc){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Source'."<td>".'Target'."<td>".'ON DELETE'."<td>".'ON UPDATE'.($u!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($rc
as$_=>$n){echo"<tr title='".h($_)."'>","<th><i>".implode("</i>, <i>",array_map('h',$n["source"]))."</i>","<td><a href='".h($n["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($n["db"]),ME):($n["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($n["ns"]),ME):ME))."table=".urlencode($n["table"])."'>".($n["db"]!=""?"<b>".h($n["db"])."</b>.":"").($n["ns"]!=""?"<b>".h($n["ns"])."</b>.":"").h($n["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$n["target"]))."</i>)","<td>".nbsp($n["on_delete"])."\n","<td>".nbsp($n["on_update"])."\n",($u=="sqlite"?"":'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($_)).'">'.'Alter'.'</a>');}echo"</table>\n";}if($u!="sqlite")echo'<p><a href="'.h(ME).'foreign='.urlencode($a).'">'.'Add foreign key'."</a>\n";}if(support("trigger")){echo"<h3>".'Triggers'."</h3>\n";$jg=triggers($a);if($jg){echo"<table cellspacing='0'>\n";foreach($jg
as$v=>$W)echo"<tr valign='top'><td>$W[0]<td>$W[1]<th>".h($v)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($v))."'>".'Alter'."</a>\n";echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($a).'">'.'Add trigger'."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header('Database schema',"",array(),DB.($_GET["ns"]?".$_GET[ns]":""));$Lf=array();$Mf=array();$_="adminer_schema";$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$_-".DB]?"$_-".DB:$_)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$td,PREG_SET_ORDER);foreach($td
as$p=>$z){$Lf[$z[1]]=array($z[2],$z[3]);$Mf[]="\n\t'".js_escape($z[1])."': [ $z[2], $z[3] ]";}$ag=0;$Fa=-1;$lf=array();$Ue=array();$kd=array();foreach(table_status()as$P){if(!isset($P["Engine"]))continue;$_e=0;$lf[$P["Name"]]["fields"]=array();foreach(fields($P["Name"])as$_=>$l){$_e+=1.25;$l["pos"]=$_e;$lf[$P["Name"]]["fields"][$_]=$l;}$lf[$P["Name"]]["pos"]=($Lf[$P["Name"]]?$Lf[$P["Name"]]:array($ag,0));foreach($b->foreignKeys($P["Name"])as$W){if(!$W["db"]){$id=$Fa;if($Lf[$P["Name"]][1]||$Lf[$W["table"]][1])$id=min(floatval($Lf[$P["Name"]][1]),floatval($Lf[$W["table"]][1]))-1;else$Fa-=.1;while($kd[(string)$id])$id-=.0001;$lf[$P["Name"]]["references"][$W["table"]][(string)$id]=array($W["source"],$W["target"]);$Ue[$W["table"]][$P["Name"]][(string)$id]=$W["target"];$kd[(string)$id]=true;}}$ag=max($ag,$lf[$P["Name"]]["pos"][0]+2.5+$_e);}echo'<div id="schema" style="height: ',$ag,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$Mf)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$ag,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($lf
as$_=>$O){echo"<div class='table' style='top: ".$O["pos"][0]."em; left: ".$O["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($_).'"><b>'.h($_)."</b></a>";foreach($O["fields"]as$l){$W='<span'.type_class($l["type"]).' title="'.h($l["full_type"].($l["null"]?" NULL":'')).'">'.h($l["field"]).'</span>';echo"<br>".($l["primary"]?"<i>$W</i>":$W);}foreach((array)$O["references"]as$Rf=>$We){foreach($We
as$id=>$Re){$jd=$id-$Lf[$_][1];$p=0;foreach($Re[0]as$vf)echo"\n<div class='references' title='".h($Rf)."' id='refs$id-".($p++)."' style='left: $jd"."em; top: ".$O["fields"][$vf]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$jd)."em;'></div></div>";}}foreach((array)$Ue[$_]as$Rf=>$We){foreach($We
as$id=>$f){$jd=$id-$Lf[$_][1];$p=0;foreach($f
as$Qf)echo"\n<div class='references' title='".h($Rf)."' id='refd$id-".($p++)."' style='left: $jd"."em; top: ".$O["fields"][$Qf]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=3.6.1'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$jd)."em;'></div></div>";}}echo"\n</div>\n";}foreach($lf
as$_=>$O){foreach((array)$O["references"]as$Rf=>$We){foreach($We
as$id=>$Re){$Fd=$ag;$xd=-10;foreach($Re[0]as$v=>$vf){$Ae=$O["pos"][0]+$O["fields"][$vf]["pos"];$Be=$lf[$Rf]["pos"][0]+$lf[$Rf]["fields"][$Re[1][$v]]["pos"];$Fd=min($Fd,$Ae,$Be);$xd=max($xd,$Ae,$Be);}echo"<div class='references' id='refl$id' style='left: $id"."em; top: $Fd"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($xd-$Fd)."em;'></div></div>\n";}}}echo'</div>
<p><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">Permanent link</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST){$hb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$v)$hb.="&$v=".urlencode($_POST[$v]);cookie("adminer_export",substr($hb,1));$fc=dump_headers(($a!=""?$a:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));$Uc=($_POST["format"]=="sql");if($Uc)echo"-- Adminer $ia ".$Cb[DRIVER]." dump

".($u!="sql"?"":"SET NAMES utf8;
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET time_zone = ".q($g->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
");$N=$_POST["db_style"];$i=array(DB);if(DB==""){$i=$_POST["databases"];if(is_string($i))$i=explode("\n",rtrim(str_replace("\r","",$i),"\n"));}foreach((array)$i
as$j){if($g->select_db($j)){if($Uc&&ereg('CREATE',$N)&&($jb=$g->result("SHOW CREATE DATABASE ".idf_escape($j),1))){if($N=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($j).";\n";echo($N=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$jb):$jb).";\n";}if($Uc){if($N)echo
use_sql($j).";\n\n";if(in_array("CREATE+ALTER",array($N,$_POST["table_style"])))echo"SET @adminer_alter = '';\n\n";$me="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$ff){foreach(get_rows("SHOW $ff STATUS WHERE Db = ".q($j),null,"-- ")as$H)$me.=($N!='DROP+CREATE'?"DROP $ff IF EXISTS ".idf_escape($H["Name"]).";;\n":"").remove_definer($g->result("SHOW CREATE $ff ".idf_escape($H["Name"]),2)).";;\n\n";}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$H)$me.=($N!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($H["Name"]).";;\n":"").remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($H["Name"]),3)).";;\n\n";}if($me)echo"DELIMITER ;;\n\n$me"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Y=array();foreach(table_status()as$P){$O=(DB==""||in_array($P["Name"],(array)$_POST["tables"]));$ob=(DB==""||in_array($P["Name"],(array)$_POST["data"]));if($O||$ob){if(!is_view($P)){if($fc=="tar")ob_start();$b->dumpTable($P["Name"],($O?$_POST["table_style"]:""));if($ob)$b->dumpData($P["Name"],$_POST["data_style"],"SELECT * FROM ".table($P["Name"]));if($Uc&&$_POST["triggers"]&&$O&&($jg=trigger_sql($P["Name"],$_POST["table_style"])))echo"\nDELIMITER ;;\n$jg\nDELIMITER ;\n";if($fc=="tar")echo
tar_file((DB!=""?"":"$j/")."$P[Name].csv",ob_get_clean());elseif($Uc)echo"\n";}elseif($Uc)$Y[]=$P["Name"];}}foreach($Y
as$Bg)$b->dumpTable($Bg,$_POST["table_style"],true);if($fc=="tar")echo
pack("x512");}if($N=="CREATE+ALTER"&&$Uc){$E="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _table_name, _engine, _table_collation varchar(64);
	DECLARE _table_comment varchar(64);
	DECLARE done bool DEFAULT 0;
	DECLARE tables CURSOR FOR $E;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	OPEN tables;
	REPEAT
		FETCH tables INTO _table_name, _engine, _table_collation, _table_comment;
		IF NOT done THEN
			CASE _table_name";foreach(get_rows($E)as$H){$ab=q($H["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$H["TABLE_COMMENT"]):$H["TABLE_COMMENT"]);echo"
				WHEN ".q($H["TABLE_NAME"])." THEN
					".(isset($H["ENGINE"])?"IF _engine != '$H[ENGINE]' OR _table_collation != '$H[TABLE_COLLATION]' OR _table_comment != $ab THEN
						ALTER TABLE ".idf_escape($H["TABLE_NAME"])." ENGINE=$H[ENGINE] COLLATE=$H[TABLE_COLLATION] COMMENT=$ab;
					END IF":"BEGIN END").";";}echo"
				ELSE
					SET alter_command = CONCAT(alter_command, 'DROP TABLE `', REPLACE(_table_name, '`', '``'), '`;\\n');
			END CASE;
		END IF;
	UNTIL done END REPEAT;
	CLOSE tables;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;
";}if(in_array("CREATE+ALTER",array($N,$_POST["table_style"]))&&$Uc)echo"SELECT @adminer_alter;\n";}}if($Uc)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header('Export',"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$rb=array('','USE','DROP+CREATE','CREATE');$Nf=array('','DROP+CREATE','CREATE');$pb=array('','TRUNCATE+INSERT','INSERT');if($u=="sql"){$rb[]='CREATE+ALTER';$Nf[]='CREATE+ALTER';$pb[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$H);if(!$H)$H=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($H["events"])){$H["routines"]=$H["events"]=($_GET["dump"]=="");$H["triggers"]=$H["table_style"];}echo"<tr><th>".'Output'."<td>".html_select("output",$b->dumpOutput(),$H["output"],0)."\n";echo"<tr><th>".'Format'."<td>".html_select("format",$b->dumpFormat(),$H["format"],0)."\n";echo($u=="sqlite"?"":"<tr><th>".'Database'."<td>".html_select('db_style',$rb,$H["db_style"]).(support("routine")?checkbox("routines",1,$H["routines"],'Routines'):"").(support("event")?checkbox("events",1,$H["events"],'Events'):"")),"<tr><th>".'Tables'."<td>".html_select('table_style',$Nf,$H["table_style"]).checkbox("auto_increment",1,$H["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$H["triggers"],'Triggers'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$pb,$H["data_style"]),'</table>
<p><input type="submit" value="Export">

<table cellspacing="0">
';$Ee=array();if(DB!=""){$Pa=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$Pa onclick='formCheck(this, /^tables\\[/);'>".'Tables'."</label>","<th style='text-align: right;'><label>".'Data'."<input type='checkbox' id='check-data'$Pa onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Y="";foreach(table_status()as$P){$_=$P["Name"];$De=ereg_replace("_.*","",$_);$Pa=($a==""||$a==(substr($a,-1)=="%"?"$De%":$_));$He="<tr><td>".checkbox("tables[]",$_,$Pa,$_,"checkboxClick(event, this); formUncheck('check-tables');");if(is_view($P))$Y.="$He\n";else
echo"$He<td align='right'><label>".($P["Engine"]=="InnoDB"&&$P["Rows"]?"~ ":"").$P["Rows"].checkbox("data[]",$_,$Pa,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$Ee[$De]++;}echo$Y;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Database'."</label></thead>\n";$i=$b->databases();if($i){foreach($i
as$j){if(!information_schema($j)){$De=ereg_replace("_.*","",$j);echo"<tr><td>".checkbox("databases[]",$j,$a==""||$a=="$De%",$j,"formUncheck('check-databases');")."</label>\n";$Ee[$De]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$nc=true;foreach($Ee
as$v=>$W){if($v!=""&&$W>1){echo($nc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$v%")."'>".h($v)."</a>";$nc=false;}}}elseif(isset($_GET["privileges"])){page_header('Privileges');$F=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$zc=$F;if(!$F)$F=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($zc?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".'Username'."<th>".'Server'."<th>&nbsp;</thead>\n";while($H=$F->fetch_assoc())echo'<tr'.odd().'><td>'.h($H["User"])."<td>".h($H["Host"]).'<td><a href="'.h(ME.'user='.urlencode($H["User"]).'&host='.urlencode($H["Host"])).'">'.'Edit'."</a>\n";if(!$zc||DB!="")echo"<tr".odd()."><td><input name='user'><td><input name='host' value='localhost'><td><input type='submit' value='".'Edit'."'>\n";echo"</table>\n","</form>\n",'<p><a href="'.h(ME).'user=">'.'Create user'."</a>";}elseif(isset($_GET["sql"])){if(!$k&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$Fc=&get_session("queries");$Ec=&$Fc[DB];if(!$k&&$_POST["clear"]){$Ec=array();redirect(remove_from_uri("history"));}page_header('SQL command',$k);if(!$k&&$_POST){$vc=false;$E=$_POST["query"];if($_POST["webfile"]){$vc=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$E=($vc?fread($vc,1e6):false);}elseif($_FILES&&$_FILES["sql_file"]["error"]!=UPLOAD_ERR_NO_FILE)$E=get_file("sql_file",true);if(is_string($E)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($E)+memory_get_usage()+8e6));if($E!=""&&strlen($E)<1e6){$D=$E.(ereg(";[ \t\r\n]*\$",$E)?"":";");if(!$Ec||reset(end($Ec))!=$D){restart_session();$Ec[]=array($D,time());set_session("queries",$Fc);stop_session();}}$wf="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\n)";$vb=";";$A=0;$Ob=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$Za=0;$Vb=array();$nd=0;$re='[\'"'.($u=="sql"?'`#':($u=="sqlite"?'`[':($u=="mssql"?'[':''))).']|/\\*|-- |$'.($u=="pgsql"?'|\\$[^$]*\\$':'');$bg=microtime();parse_str($_COOKIE["adminer_export"],$pa);$Gb=$b->dumpFormat();unset($Gb["sql"]);while($E!=""){if(!$A&&preg_match("~^$wf*DELIMITER\\s+(\\S+)~i",$E,$z)){$vb=$z[1];$E=substr($E,strlen($z[0]));}else{preg_match('('.preg_quote($vb)."\\s*|$re)",$E,$z,PREG_OFFSET_CAPTURE,$A);list($tc,$_e)=$z[0];if(!$tc&&$vc&&!feof($vc))$E.=fread($vc,1e5);else{if(!$tc&&rtrim($E)=="")break;$A=$_e+strlen($tc);if($tc&&rtrim($tc)!=$vb){while(preg_match('('.($tc=='/*'?'\\*/':($tc=='['?']':(ereg('^-- |^#',$tc)?"\n":preg_quote($tc)."|\\\\."))).'|$)s',$E,$z,PREG_OFFSET_CAPTURE,$A)){$jf=$z[0][0];if(!$jf&&$vc&&!feof($vc))$E.=fread($vc,1e5);else{$A=$z[0][1]+strlen($jf);if($jf[0]!="\\")break;}}}else{$Ob=false;$D=substr($E,0,$_e);$Za++;$He="<pre id='sql-$Za'><code class='jush-$u'>".shorten_utf8(trim($D),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$He;ob_flush();flush();}$yf=microtime();if($g->multi_query($D)&&is_object($h)&&preg_match("~^$wf*USE\\b~isU",$D))$h->query($D);do{$F=$g->store_result();$Pb=microtime();$Uf=format_time($yf,$Pb).(strlen($D)<1000?" <a href='".h(ME)."sql=".urlencode(trim($D))."'>".'Edit'."</a>":"");if($g->error){echo($_POST["only_errors"]?$He:""),"<p class='error'>".'Error in query'.": ".error()."\n";$Vb[]=" <a href='#sql-$Za'>$Za</a>";if($_POST["error_stops"])break
2;}elseif(is_object($F)){$ge=select($F,$h);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($F->num_rows?lang(array('%d row','%d rows'),$F->num_rows):"").$Uf;$q="export-$Za";$ec=", <a href='#$q' onclick=\"return !toggle('$q');\">".'Export'."</a><span id='$q' class='hidden'>: ".html_select("output",$b->dumpOutput(),$pa["output"])." ".html_select("format",$Gb,$pa["format"])."<input type='hidden' name='query' value='".h($D)."'>"." <input type='submit' name='export' value='".'Export'."'><input type='hidden' name='token' value='$R'></span>\n";if($h&&preg_match("~^($wf|\\()*SELECT\\b~isU",$D)&&($dc=explain($h,$D))){$q="explain-$Za";echo", <a href='#$q' onclick=\"return !toggle('$q');\">EXPLAIN</a>$ec","<div id='$q' class='hidden'>\n";select($dc,$h,($u=="sql"?"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/explain-output.html#explain_":""),$ge);echo"</div>\n";}else
echo$ec;echo"</form>\n";}}else{if(preg_match("~^$wf*(CREATE|DROP|ALTER)$wf+(DATABASE|SCHEMA)\\b~isU",$D)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),$g->affected_rows)."$Uf\n";}$yf=$Pb;}while($g->next_result());$nd+=substr_count($D.$tc,"\n");$E=substr($E,$A);$A=0;}}}}if($Ob)echo"<p class='message'>".'No commands to execute.'."\n";elseif($_POST["only_errors"])echo"<p class='message'>".lang(array('%d query executed OK.','%d queries executed OK.'),$Za-count($Vb)).format_time($bg,microtime())."\n";elseif($Vb&&$Za>1)echo"<p class='error'>".'Error in query'.": ".implode("",$Vb)."\n";}else
echo"<p class='error'>".upload_error($E)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
<p>';$D=$_GET["sql"];if($_POST)$D=$_POST["query"];elseif($_GET["history"]=="all")$D=$Ec;elseif($_GET["history"]!="")$D=$Ec[$_GET["history"]][0];textarea("query",$D,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>".(ini_bool("file_uploads")?'File upload'.': <input type="file" name="sql_file"'.($_FILES&&$_FILES["sql_file"]["error"]!=4?'':' onchange="this.form[\'only_errors\'].checked = true;"').'> (&lt; '.ini_get("upload_max_filesize").'B)':'File uploads are disabled.'),'<p>
<input type="submit" value="Execute" title="Ctrl+Enter">
<input type="hidden" name="token" value="',$R,'">
',checkbox("error_stops",1,$_POST["error_stops"],'Stop on error')."\n",checkbox("only_errors",1,$_POST["only_errors"],'Show only errors')."\n";print_fieldset("webfile",'From server',$_POST["webfile"],"document.getElementById('form')['only_errors'].checked = true; ");$cb=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$v=>$W){if(extension_loaded($W))$cb[]=".$v";}echo
sprintf('Webserver file %s',"<code>adminer.sql".($cb?"[".implode("|",$cb)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Run file'.'">',"</div></fieldset>\n";if($Ec){print_fieldset("history",'History',$_GET["history"]!="");foreach($Ec
as$v=>$W){list($D,$Uf)=$W;echo'<a href="'.h(ME."sql=&history=$v").'">'.'Edit'."</a> <span class='time'>".@date("H:i:s",$Uf)."</span> <code class='jush-$u'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$D)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Clear'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Edit all'."</a>\n","</div></fieldset>\n";}echo'
</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$tg=(isset($_GET["select"])?$_POST["edit"]:$Z);$m=fields($a);foreach($m
as$_=>$l){if(!isset($l["privileges"][$tg?"update":"insert"])||$b->fieldName($l)=="")unset($m[$_]);}if($_POST&&!$k&&!isset($_GET["select"])){$pd=$_POST["referer"];if($_POST["insert"])$pd=($tg?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$pd))$pd=ME."select=".urlencode($a);if(isset($_POST["delete"]))query_redirect("DELETE".limit1("FROM ".table($a)," WHERE $Z"),$pd,'Item has been deleted.');else{$L=array();foreach($m
as$_=>$l){$W=process_input($l);if($W!==false&&$W!==null)$L[idf_escape($_)]=($tg?"\n".idf_escape($_)." = $W":$W);}if($tg){if(!$L)redirect($pd);query_redirect("UPDATE".limit1(table($a)." SET".implode(",",$L),"\nWHERE $Z"),$pd,'Item has been updated.');}else{$F=insert_into($a,$L);$hd=($F?last_id():0);queries_redirect($pd,sprintf('Item%s has been inserted.',($hd?" $hd":"")),$F);}}}$Jf=$b->tableName(table_status($a));page_header(($tg?'Edit':'Insert'),$k,array("select"=>array($a,$Jf)),$Jf);$H=null;if($_POST["save"])$H=(array)$_POST["fields"];elseif($Z){$J=array();foreach($m
as$_=>$l){if(isset($l["privileges"]["select"])){$xa=convert_field($l);if($_POST["clone"]&&$l["auto_increment"])$xa="''";if($u=="sql"&&ereg("enum|set",$l["type"]))$xa="1*".idf_escape($_);$J[]=($xa?"$xa AS ":"").idf_escape($_);}}$H=array();if($J){$I=get_rows("SELECT".limit(implode(", ",$J)." FROM ".table($a)," WHERE $Z",(isset($_GET["select"])?2:1)));$H=(isset($_GET["select"])&&count($I)!=1?null:reset($I));}}if($H===false)echo"<p class='error'>".'No rows.'."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($m){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($m
as$_=>$l){echo"<tr><th>".$b->fieldName($l);$ub=$_GET["set"][bracket_escape($_)];$X=($H!==null?($H[$_]!=""&&$u=="sql"&&ereg("enum|set",$l["type"])?(is_array($H[$_])?array_sum($H[$_]):+$H[$_]):$H[$_]):(!$tg&&$l["auto_increment"]?"":(isset($_GET["select"])?false:($ub!==null?$ub:$l["default"]))));if(!$_POST["save"]&&is_string($X))$X=$b->editVal($X,$l);$o=($_POST["save"]?(string)$_POST["function"][$_]:($tg&&$l["on_update"]=="CURRENT_TIMESTAMP"?"now":($X===false?null:($X!==null?'':'NULL'))));if($l["type"]=="timestamp"&&$X=="CURRENT_TIMESTAMP"){$X="";$o="now";}input($l,$X,$o);echo"\n";}echo"</table>\n";}echo'<p>
';if($m){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($tg?'Save and continue edit':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n";}echo($tg?"<input type='submit' name='delete' value='".'Delete'."' onclick=\"return confirm('".'Are you sure?'."');\">\n":($_POST||!$m?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["create"])){$a=$_GET["create"];$se=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$Te=referencable_primary($a);$rc=array();foreach($Te
as$Jf=>$l)$rc[str_replace("`","``",$Jf)."`".str_replace("`","``",$l["field"])]=$Jf;$je=array();$ke=array();if($a!=""){$je=fields($a);$ke=table_status($a);}if($_POST&&!$_POST["fields"])$_POST["fields"]=array();if($_POST&&!$k&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"])query_redirect("DROP TABLE ".table($a),substr(ME,0,-1),'Table has been dropped.');else{$m=array();$va=array();$vg=false;$pc=array();ksort($_POST["fields"]);$ie=reset($je);$ta=" FIRST";foreach($_POST["fields"]as$v=>$l){$n=$rc[$l["type"]];$kg=($n!==null?$Te[$n]:$l);if($l["field"]!=""){if(!$l["has_default"])$l["default"]=null;$ub=eregi_replace(" *on update CURRENT_TIMESTAMP","",$l["default"]);if($ub!=$l["default"]){$l["on_update"]="CURRENT_TIMESTAMP";$l["default"]=$ub;}if($v==$_POST["auto_increment_col"])$l["auto_increment"]=true;$Me=process_field($l,$kg);$va[]=array($l["orig"],$Me,$ta);if($Me!=process_field($ie,$ie)){$m[]=array($l["orig"],$Me,$ta);if($l["orig"]!=""||$ta)$vg=true;}if($n!==null)$pc[idf_escape($l["field"])]=($a!=""&&$u!="sqlite"?"ADD":" ")." FOREIGN KEY (".idf_escape($l["field"]).") REFERENCES ".table($rc[$l["type"]])." (".idf_escape($kg["field"]).")".(ereg("^($Vd)\$",$l["on_delete"])?" ON DELETE $l[on_delete]":"");$ta=" AFTER ".idf_escape($l["field"]);}elseif($l["orig"]!=""){$vg=true;$m[]=array($l["orig"]);}if($l["orig"]!=""){$ie=next($je);if(!$ie)$ta="";}}$ue="";if(in_array($_POST["partition_by"],$se)){$ve=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$v=>$W){$X=$_POST["partition_values"][$v];$ve[]="\nPARTITION ".idf_escape($W)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($X!=""?" ($X)":" MAXVALUE");}}$ue.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($ve?" (".implode(",",$ve)."\n)":($_POST["partitions"]?" PARTITIONS ".(+$_POST["partitions"]):""));}elseif(support("partitioning")&&ereg("partitioned",$ke["Create_options"]))$ue.="\nREMOVE PARTITIONING";$_d='Table has been altered.';if($a==""){cookie("adminer_engine",$_POST["Engine"]);$_d='Table has been created.';}$_=trim($_POST["name"]);queries_redirect(ME."table=".urlencode($_),$_d,alter_table($a,$_,($u=="sqlite"&&($vg||$pc)?$va:$m),$pc,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$ke["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$ke["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?+$_POST["Auto_increment"]:""),$ue));}}page_header(($a!=""?'Alter table':'Create table'),$k,array("table"=>$a),$a);$H=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($T["int"])?"int":(isset($T["integer"])?"integer":"")))),"partition_names"=>array(""),);if($_POST){$H=$_POST;if($H["auto_increment_col"])$H["fields"][$H["auto_increment_col"]]["auto_increment"]=true;process_fields($H["fields"]);}elseif($a!=""){$H=$ke;$H["name"]=$a;$H["fields"]=array();if(!$_GET["auto_increment"])$H["Auto_increment"]="";foreach($je
as$l){$l["has_default"]=isset($l["default"]);if($l["on_update"])$l["default"].=" ON UPDATE $l[on_update]";$H["fields"][]=$l;}if(support("partitioning")){$wc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$F=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $wc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($H["partition_by"],$H["partitions"],$H["partition"])=$F->fetch_row();$H["partition_names"]=array();$H["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $wc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$if){$H["partition_names"][]=$if["PARTITION_NAME"];$H["partition_values"][]=$if["PARTITION_DESCRIPTION"];}$H["partition_names"][]="";}}$Wa=collations();$Ef=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($Ef&&count($H["fields"])>$Ef)echo"<p class='error'>".h(sprintf('Maximum number of allowed fields exceeded. Please increase %s and %s.','suhosin.post.max_vars','suhosin.request.max_vars'))."\n";$Rb=engines();foreach($Rb
as$Qb){if(!strcasecmp($Qb,$H["Engine"])){$H["Engine"]=$Qb;break;}}echo'
<form action="" method="post" id="form">
<p>
Table name: <input name="name" maxlength="64" value="',h($H["name"]),'">
';if($a==""&&!$_POST){?><script type='text/javascript'>document.getElementById('form')['name'].focus();</script><?php }echo($Rb?html_select("Engine",array(""=>"(".'engine'.")")+$Rb,$H["Engine"]):""),' ',($Wa&&!ereg("sqlite|mssql",$u)?html_select("Collation",array(""=>"(".'collation'.")")+$Wa,$H["Collation"]):""),' <input type="submit" value="Save">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$bb=($_POST?$_POST["comments"]:$H["Comment"]!="");if(!$_POST&&!$bb){foreach($H["fields"]as$l){if($l["comment"]!=""){$bb=true;break;}}}edit_fields($H["fields"],$Wa,"TABLE",$Ef,$rc,$bb);echo'</table>
<p>
Auto Increment: <input name="Auto_increment" size="6" value="',h($H["Auto_increment"]),'">
<label class="jsonly"><input type="checkbox" name="defaults" value="1"',($_POST["defaults"]?" checked":""),' onclick="columnShow(this.checked, 5);">Default values</label>
',(support("comment")?checkbox("comments",1,$bb,'Comment',"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();",true).' <input id="Comment" name="Comment" value="'.h($H["Comment"]).'" maxlength="60"'.($bb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="Save">
';if($_GET["create"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
';if(support("partitioning")){$te=ereg('RANGE|LIST',$H["partition_by"]);print_fieldset("partition",'Partition by',$H["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$se,$H["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($H["partition"]),'">)
Partitions: <input name="partitions" size="2" value="',h($H["partitions"]),'"',($te||!$H["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($te?"":" class='hidden'"),'>
<thead><tr><th>Partition name<th>Values</thead>
';foreach($H["partition_names"]as$v=>$W){echo'<tr>','<td><input name="partition_names[]" value="'.h($W).'"'.($v==count($H["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($H["partition_values"][$v]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$Lc=array("PRIMARY","UNIQUE","INDEX");$P=table_status($a);if(eregi("MyISAM|M?aria",$P["Engine"]))$Lc[]="FULLTEXT";$t=indexes($a);if($u=="sqlite"){unset($Lc[0]);unset($t[""]);}if($_POST&&!$k&&!$_POST["add"]){$c=array();foreach($_POST["indexes"]as$s){$_=$s["name"];if(in_array($s["type"],$Lc)){$f=array();$md=array();$L=array();ksort($s["columns"]);foreach($s["columns"]as$v=>$e){if($e!=""){$w=$s["lengths"][$v];$L[]=idf_escape($e).($w?"(".(+$w).")":"");$f[]=$e;$md[]=($w?$w:null);}}if($f){$cc=$t[$_];if($cc){ksort($cc["columns"]);ksort($cc["lengths"]);if($s["type"]==$cc["type"]&&array_values($cc["columns"])===$f&&(!$cc["lengths"]||array_values($cc["lengths"])===$md)){unset($t[$_]);continue;}}$c[]=array($s["type"],$_,"(".implode(", ",$L).")");}}}foreach($t
as$_=>$cc)$c[]=array($cc["type"],$_,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),'Indexes have been altered.',alter_indexes($a,$c));}page_header('Indexes',$k,array("table"=>$a),$a);$m=array_keys(fields($a));$H=array("indexes"=>$t);if($_POST){$H=$_POST;if($_POST["add"]){foreach($H["indexes"]as$v=>$s){if($s["columns"][count($s["columns"])]!="")$H["indexes"][$v]["columns"][]="";}$s=end($H["indexes"]);if($s["type"]||array_filter($s["columns"],'strlen')||array_filter($s["lengths"],'strlen'))$H["indexes"][]=array("columns"=>array(1=>""));}}else{foreach($H["indexes"]as$v=>$s){$H["indexes"][$v]["name"]=$v;$H["indexes"][$v]["columns"][]="";}$H["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>Index Type<th>Column (length)<th>Name</thead>
';$Xc=1;foreach($H["indexes"]as$s){echo"<tr><td>".html_select("indexes[$Xc][type]",array(-1=>"")+$Lc,$s["type"],($Xc==count($H["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($s["columns"]);$p=1;foreach($s["columns"]as$v=>$e){echo"<span>".html_select("indexes[$Xc][columns][$p]",array(-1=>"")+$m,$e,($p==count($s["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($u=="sql"?"":$_GET["indexes"]."_")."');"),"<input name='indexes[$Xc][lengths][$p]' size='2' value='".h($s["lengths"][$v])."'> </span>";$p++;}echo"<td><input name='indexes[$Xc][name]' value='".h($s["name"])."'>\n";$Xc++;}echo'</table>
<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add next"></noscript>
<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$k&&!isset($_POST["add_x"])){restart_session();$_=trim($_POST["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Database has been dropped.',drop_databases(array(DB)));}elseif(DB!==$_){if(DB!=""){$_GET["db"]=$_;queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($_),'Database has been renamed.',rename_database($_,$_POST["collation"]));}else{$i=explode("\n",str_replace("\r","",$_));$Cf=true;$gd="";foreach($i
as$j){if(count($i)==1||$j!=""){if(!create_database($j,$_POST["collation"]))$Cf=false;$gd=$j;}}queries_redirect(ME."db=".urlencode($gd),'Database has been created.',$Cf);}}else{if(!$_POST["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($_).(eregi('^[a-z0-9_]+$',$_POST["collation"])?" COLLATE $_POST[collation]":""),substr(ME,0,-1),'Database has been altered.');}}page_header(DB!=""?'Alter database':'Create database',$k,array(),DB);$Wa=collations();$_=DB;$Va=null;if($_POST){$_=$_POST["name"];$Va=$_POST["collation"];}elseif(DB!="")$Va=db_collation(DB,$Wa);elseif($u=="sql"){foreach(get_vals("SHOW GRANTS")as$zc){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$zc,$z)&&$z[1]){$_=stripcslashes(idf_unescape("`$z[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($_,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($_).'</textarea><br>':'<input id="name" name="name" value="'.h($_).'" maxlength="64">')."\n".($Wa?html_select("collation",array(""=>"(".'collation'.")")+$Wa,$Va):"");?>
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="submit" value="Save">
<?php
if(DB!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.6.1' alt='+' title='".'Add next'."'>\n";echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["scheme"])){if($_POST&&!$k){$y=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$y,'Schema has been dropped.');else{$_=trim($_POST["name"]);$y.=urlencode($_);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($_),$y,'Schema has been created.');elseif($_GET["ns"]!=$_)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($_),$y,'Schema has been altered.');else
redirect($y);}}page_header($_GET["ns"]!=""?'Alter schema':'Create schema',$k);$H=$_POST;if(!$H)$H=array("name"=>$_GET["ns"]);echo'
<form action="" method="post">
<p><input id="name" name="name" value="',h($H["name"]);?>">
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="submit" value="Save">
<?php
if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header('Call'.": ".h($da),$k);$ff=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Kc=array();$me=array();foreach($ff["fields"]as$p=>$l){if(substr($l["inout"],-3)=="OUT")$me[$p]="@".idf_escape($l["field"])." AS ".idf_escape($l["field"]);if(!$l["inout"]||substr($l["inout"],0,2)=="IN")$Kc[]=$p;}if(!$k&&$_POST){$Ma=array();foreach($ff["fields"]as$v=>$l){if(in_array($v,$Kc)){$W=process_input($l);if($W===false)$W="''";if(isset($me[$v]))$g->query("SET @".idf_escape($l["field"])." = $W");}$Ma[]=(isset($me[$v])?"@".idf_escape($l["field"]):$W);}$E=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$Ma).")";echo"<p><code class='jush-$u'>".h($E)."</code> <a href='".h(ME)."sql=".urlencode($E)."'>".'Edit'."</a>\n";if(!$g->multi_query($E))echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$F=$g->store_result();if(is_object($F))select($F,$h);else
echo"<p class='message'>".lang(array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),$g->affected_rows)."\n";}while($g->next_result());if($me)select($g->query("SELECT ".implode(", ",$me)));}}echo'
<form action="" method="post">
';if($Kc){echo"<table cellspacing='0'>\n";foreach($Kc
as$v){$l=$ff["fields"][$v];$_=$l["field"];echo"<tr><th>".$b->fieldName($l);$X=$_POST["fields"][$_];if($X!=""){if($l["type"]=="enum")$X=+$X;if($l["type"]=="set")$X=array_sum($X);}input($l,$X,(string)$_POST["function"][$_]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Call">
<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];if($_POST&&!$k&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"])query_redirect("ALTER TABLE ".table($a)."\nDROP ".($u=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($a),'Foreign key has been dropped.');else{$vf=array_filter($_POST["source"],'strlen');ksort($vf);$Qf=array();foreach($vf
as$v=>$W)$Qf[$v]=$_POST["target"][$v];query_redirect("ALTER TABLE ".table($a).($_GET["name"]!=""?"\nDROP ".($u=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$vf)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$Qf)).")".(ereg("^($Vd)\$",$_POST["on_delete"])?" ON DELETE $_POST[on_delete]":"").(ereg("^($Vd)\$",$_POST["on_update"])?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($a),($_GET["name"]!=""?'Foreign key has been altered.':'Foreign key has been created.'));$k='Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.'."<br>$k";}}page_header('Foreign key',$k,array("table"=>$a),$a);$H=array("table"=>$a,"source"=>array(""));if($_POST){$H=$_POST;ksort($H["source"]);if($_POST["add"])$H["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$H["target"]=array();}elseif($_GET["name"]!=""){$rc=foreign_keys($a);$H=$rc[$_GET["name"]];$H["source"][]="";}$vf=array_keys(fields($a));$Qf=($a===$H["table"]?$vf:array_keys(fields($H["table"])));$Se=array();foreach(table_status()as$_=>$P){if(fk_support($P))$Se[]=$_;}echo'
<form action="" method="post">
<p>
';if($H["db"]==""&&$H["ns"]==""){echo'Target table:
',html_select("table",$Se,$H["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Change"></noscript>
<table cellspacing="0">
<thead><tr><th>Source<th>Target</thead>
';$Xc=0;foreach($H["source"]as$v=>$W){echo"<tr>","<td>".html_select("source[".(+$v)."]",array(-1=>"")+$vf,$W,($Xc==count($H["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$v)."]",$Qf,$H["target"][$v]);$Xc++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+explode("|",$Vd),$H["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+explode("|",$Vd),$H["on_update"]),'<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add column"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$Eb=false;if($_POST&&!$k){$_=trim($_POST["name"]);$Eb=drop_create("DROP VIEW ".table($a),"CREATE VIEW ".table($_)." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($_)),'View has been dropped.','View has been altered.','View has been created.',$a);}page_header(($a!=""?'Alter view':'Create view'),$k,array("table"=>$a),$a);$H=$_POST;if(!$H&&$a!=""){$H=view($a);$H["name"]=$a;}echo'
<form action="" method="post">
<p>Name: <input name="name" value="',h($H["name"]),'" maxlength="64">
<p>';textarea("select",$H["select"]);echo'<p>
';if($Eb){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Save">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$Sc=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$_f=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$k){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),'Event has been dropped.');elseif(in_array($_POST["INTERVAL_FIELD"],$Sc)&&isset($_f[$_POST["STATUS"]])){$kf="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?'Event has been altered.':'Event has been created.'),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$kf.($aa!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$kf)."\n".$_f[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"]).rtrim(" DO\n$_POST[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?'Alter event'.": ".h($aa):'Create event'),$k);$H=$_POST;if(!$H&&$aa!=""){$I=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$H=reset($I);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Name<td><input name="EVENT_NAME" value="',h($H["EVENT_NAME"]),'" maxlength="64">
<tr><th>Start<td><input name="STARTS" value="',h("$H[EXECUTE_AT]$H[STARTS]"),'">
<tr><th>End<td><input name="ENDS" value="',h($H["ENDS"]),'">
<tr><th>Every<td><input name="INTERVAL_VALUE" value="',h($H["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$Sc,$H["INTERVAL_FIELD"]),'<tr><th>Status<td>',html_select("STATUS",$_f,$H["STATUS"]),'<tr><th>Comment<td><input name="EVENT_COMMENT" value="',h($H["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$H["ON_COMPLETION"]=="PRESERVE",'On completion preserve'),'</table>
<p>';textarea("EVENT_DEFINITION",$H["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="Save">
';if($aa!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$ff=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$gf=routine_languages();$Eb=false;if($_POST&&!$k&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$L=array();$m=(array)$_POST["fields"];ksort($m);foreach($m
as$l){if($l["field"]!="")$L[]=(ereg("^($Pc)\$",$l["inout"])?"$l[inout] ":"").idf_escape($l["field"]).process_type($l,"CHARACTER SET");}$Eb=drop_create("DROP $ff ".idf_escape($da),"CREATE $ff ".idf_escape(trim($_POST["name"]))." (".implode(", ",$L).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"").(in_array($_POST["language"],$gf)?" LANGUAGE $_POST[language]":"").rtrim("\n$_POST[definition]",";").";",substr(ME,0,-1),'Routine has been dropped.','Routine has been altered.','Routine has been created.',$da);}page_header(($da!=""?(isset($_GET["function"])?'Alter function':'Alter procedure').": ".h($da):(isset($_GET["function"])?'Create function':'Create procedure')),$k);$Wa=get_vals("SHOW CHARACTER SET");sort($Wa);$H=array("fields"=>array());if($_POST){$H=$_POST;$H["fields"]=(array)$H["fields"];process_fields($H["fields"]);}elseif($da!=""){$H=routine($da,$ff);$H["name"]=$da;}echo'
<form action="" method="post" id="form">
<p>Name: <input name="name" value="',h($H["name"]),'" maxlength="64">
',($gf?'Language'.": ".html_select("language",$gf,$H["language"]):""),'<table cellspacing="0" class="nowrap">
';edit_fields($H["fields"],$Wa,$ff);if(isset($_GET["function"])){echo"<tr><td>".'Return type';edit_type("returns",$H["returns"],$Wa);}echo'</table>
<p>';textarea("definition",$H["definition"]);echo'<p>
<input type="submit" value="Save">
';if($da!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}if($Eb){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];if($_POST&&!$k){$y=substr(ME,0,-1);$_=trim($_POST["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$y,'Sequence has been dropped.');elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($_),$y,'Sequence has been created.');elseif($fa!=$_)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($_),$y,'Sequence has been altered.');else
redirect($y);}page_header($fa!=""?'Alter sequence'.": ".h($fa):'Create sequence',$k);$H=$_POST;if(!$H)$H=array("name"=>$fa);echo'
<form action="" method="post">
<p><input name="name" value="',h($H["name"]),'">
<input type="submit" value="Save">
';if($fa!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];if($_POST&&!$k){$y=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$y,'Type has been dropped.');else
query_redirect("CREATE TYPE ".idf_escape(trim($_POST["name"]))." $_POST[as]",$y,'Type has been created.');}page_header($ga!=""?'Alter type'.": ".h($ga):'Create type',$k);$H=$_POST;if(!$H)$H=array("as"=>"AS ");echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";else{echo"<input name='name' value='".h($H['name'])."'>\n";textarea("as",$H["as"]);echo"<p><input type='submit' value='".'Save'."'>\n";}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$ig=trigger_options();$gg=array("INSERT","UPDATE","DELETE");$Eb=false;if($_POST&&!$k&&in_array($_POST["Timing"],$ig["Timing"])&&in_array($_POST["Event"],$gg)&&in_array($_POST["Type"],$ig["Type"])){$Vf=" $_POST[Timing] $_POST[Event]";$Ud=" ON ".table($a);$Eb=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($u=="pgsql"?$Ud:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($u=="mssql"?$Ud.$Vf:$Vf.$Ud).rtrim(" $_POST[Type]\n$_POST[Statement]",";").";",ME."table=".urlencode($a),'Trigger has been dropped.','Trigger has been altered.','Trigger has been created.',$_GET["name"]);}page_header(($_GET["name"]!=""?'Alter trigger'.": ".h($_GET["name"]):'Create trigger'),$k,array("table"=>$a));$H=$_POST;if(!$H)$H=trigger($_GET["name"])+array("Trigger"=>$a."_bi");echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Time<td>',html_select("Timing",$ig["Timing"],$H["Timing"],"if (/^".preg_quote($a,"/")."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".js_escape($a)."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Event<td>',html_select("Event",$gg,$H["Event"],"this.form['Timing'].onchange();"),'<tr><th>Type<td>',html_select("Type",$ig["Type"],$H["Type"]),'</table>
<p>Name: <input name="Trigger" value="',h($H["Trigger"]),'" maxlength="64">
<p>';textarea("Statement",$H["Statement"]);echo'<p>
<input type="submit" value="Save">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}if($Eb){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$Ke=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$H){foreach(explode(",",($H["Privilege"]=="Grant option"?"":$H["Context"]))as$gb)$Ke[$gb][$H["Privilege"]]=$H["Comment"];}$Ke["Server Admin"]+=$Ke["File access on server"];$Ke["Databases"]["Create routine"]=$Ke["Procedures"]["Create routine"];unset($Ke["Procedures"]["Create routine"]);$Ke["Columns"]=array();foreach(array("Select","Insert","Update","References")as$W)$Ke["Columns"][$W]=$Ke["Tables"][$W];unset($Ke["Server Admin"]["Usage"]);foreach($Ke["Tables"]as$v=>$W)unset($Ke["Databases"][$v]);$Ld=array();if($_POST){foreach($_POST["objects"]as$v=>$W)$Ld[$W]=(array)$Ld[$W]+(array)$_POST["grants"][$v];}$_c=array();$Sd="";if(isset($_GET["host"])&&($F=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($H=$F->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$H[0],$z)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$z[1],$td,PREG_SET_ORDER)){foreach($td
as$W){if($W[1]!="USAGE")$_c["$z[2]$W[2]"][$W[1]]=true;if(ereg(' WITH GRANT OPTION',$H[0]))$_c["$z[2]$W[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$H[0],$z))$Sd=$z[1];}}if($_POST&&!$k){$Td=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");$Md=q($_POST["user"])."@".q($_POST["host"]);$we=q($_POST["pass"]);if($_POST["drop"])query_redirect("DROP USER $Td",ME."privileges=",'User has been dropped.');else{$lb=false;if($Td!=$Md){$lb=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Md IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $we");$k=!$lb;}elseif($_POST["pass"]!=$Sd||!$_POST["hashed"])queries("SET PASSWORD FOR $Md = ".($_POST["hashed"]?$we:"PASSWORD($we)"));if(!$k){$cf=array();foreach($Ld
as$Pd=>$zc){if(isset($_GET["grant"]))$zc=array_filter($zc);$zc=array_keys($zc);if(isset($_GET["grant"]))$cf=array_diff(array_keys(array_filter($Ld[$Pd],'strlen')),$zc);elseif($Td==$Md){$Rd=array_keys((array)$_c[$Pd]);$cf=array_diff($Rd,$zc);$zc=array_diff($zc,$Rd);unset($_c[$Pd]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Pd,$z)&&(!grant("REVOKE",$cf,$z[2]," ON $z[1] FROM $Md")||!grant("GRANT",$zc,$z[2]," ON $z[1] TO $Md"))){$k=true;break;}}}if(!$k&&isset($_GET["host"])){if($Td!=$Md)queries("DROP USER $Td");elseif(!isset($_GET["grant"])){foreach($_c
as$Pd=>$cf){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Pd,$z))grant("REVOKE",array_keys($cf),$z[2]," ON $z[1] FROM $Md");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'User has been altered.':'User has been created.'),!$k);if($lb)$g->query("DROP USER $Md");}}page_header((isset($_GET["host"])?'Username'.": ".h("$ha@$_GET[host]"):'Create user'),$k,array("privileges"=>array('','Privileges')));if($_POST){$H=$_POST;$_c=$Ld;}else{$H=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$H["pass"]=$Sd;if($Sd!="")$H["hashed"]=true;$_c[(DB!=""&&!isset($_GET["host"])?idf_escape(addcslashes(DB,"%_")):"").".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($H["host"]),'">
<tr><th>Username<td><input name="user" maxlength="16" value="',h($H["user"]),'">
<tr><th>Password<td><input id="pass" name="pass" value="',h($H["pass"]),'">
';if(!$H["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$H["hashed"],'Hashed',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/grant.html#priv_level' target='_blank' rel='noreferrer'>".'Privileges'."</a>";$p=0;foreach($_c
as$Pd=>$zc){echo'<th>'.($Pd!="*.*"?"<input name='objects[$p]' value='".h($Pd)."' size='10'>":"<input type='hidden' name='objects[$p]' value='*.*' size='10'>*.*");$p++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Database',"Tables"=>'Table',"Columns"=>'Column',"Procedures"=>'Routine',)as$gb=>$wb){foreach((array)$Ke[$gb]as$Je=>$ab){echo"<tr".odd()."><td".($wb?">$wb<td":" colspan='2'").' lang="en" title="'.h($ab).'">'.h($Je);$p=0;foreach($_c
as$Pd=>$zc){$_="'grants[$p][".h(strtoupper($Je))."]'";$X=$zc[strtoupper($Je)];if($gb=="Server Admin"&&$Pd!=(isset($_c["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$_><option><option value='1'".($X?" selected":"").">".'Grant'."<option value='0'".($X=="0"?" selected":"").">".'Revoke'."</select>";else
echo"<td align='center'><input type='checkbox' name=$_ value='1'".($X?" checked":"").($Je=="All privileges"?" id='grants-$p-all'":($Je=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$p-all');\"")).">";$p++;}}}echo"</table>\n",'<p>
<input type="submit" value="Save">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$k){$dd=0;foreach((array)$_POST["kill"]as$W){if(queries("KILL ".(+$W)))$dd++;}queries_redirect(ME."processlist=",lang(array('%d process has been killed.','%d processes have been killed.'),$dd),$dd||!$_POST["kill"]);}page_header('Process list',$k);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" class="nowrap checkable">
';$p=-1;foreach(process_list()as$p=>$H){if(!$p)echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"")."<th>".implode("<th>",array_keys($H))."</thead>\n";echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$H["Id"],0):"");foreach($H
as$v=>$W)echo"<td>".(($u=="sql"&&$v=="Info"&&ereg("Query|Killed",$H["Command"])&&$W!="")||($u=="pgsql"&&$v=="current_query"&&$W!="<IDLE>")||($u=="oracle"&&$v=="sql_text"&&$W!="")?"<code class='jush-$u'>".shorten_utf8($W,100,"</code>").' <a href="'.h(ME.($H["db"]!=""?"db=".urlencode($H["db"])."&":"")."sql=".urlencode($W)).'">'.'Edit'.'</a>':nbsp($W));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($p+1)."/".sprintf('%d in total',$g->result("SELECT @@max_connections")),"<p><input type='submit' value='".'Kill'."'>\n";}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$P=table_status($a);$t=indexes($a);$m=fields($a);$rc=column_foreign_keys($a);$Qd="";if($P["Oid"]=="t"){$Qd=($u=="sqlite"?"rowid":"oid");$t[]=array("type"=>"PRIMARY","columns"=>array($Qd));}parse_str($_COOKIE["adminer_import"],$qa);$df=array();$f=array();$Tf=null;foreach($m
as$v=>$l){$_=$b->fieldName($l);if(isset($l["privileges"]["select"])&&$_!=""){$f[$v]=html_entity_decode(strip_tags($_));if(ereg('text|lob|geometry|point|linestring|polygon',$l["type"]))$Tf=$b->selectLengthProcess();}$df+=$l["privileges"];}list($J,$Ac)=$b->selectColumnsProcess($f,$t);$Tc=count($Ac)<count($J);$Z=$b->selectSearchProcess($m,$t);$de=$b->selectOrderProcess($m,$t);$x=$b->selectLimitProcess();$wc=($J?implode(", ",$J):"*".($Qd?", $Qd":""));if($u=="sql"){foreach($f
as$v=>$W){$xa=convert_field($m[$v]);if($xa)$wc.=", $xa AS ".idf_escape($v);}}$wc.="\nFROM ".table($a);$Bc=($Ac&&$Tc?"\nGROUP BY ".implode(", ",$Ac):"").($de?"\nORDER BY ".implode(", ",$de):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$pg=>$H){$xa=convert_field($m[key($H)]);echo$g->result("SELECT".limit(($xa?$xa:idf_escape(key($H)))." FROM ".table($a)," WHERE ".where_check($pg).($Z?" AND ".implode(" AND ",$Z):"").($de?" ORDER BY ".implode(", ",$de):""),1));}exit;}if($_POST&&!$k){$Fg="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Fe=$rg=null;foreach($t
as$s){if($s["type"]=="PRIMARY"){$Fe=array_flip($s["columns"]);$rg=($J?$Fe:array());break;}}foreach((array)$rg
as$v=>$W){if(in_array(idf_escape($v),$J))unset($rg[$v]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$rg===array()){$Eg=$Z;if(is_array($_POST["check"]))$Eg[]="($Fg)";$E="SELECT $wc".($Eg?"\nWHERE ".implode(" AND ",$Eg):"").$Bc;}else{$ng=array();foreach($_POST["check"]as$W)$ng[]="(SELECT".limit($wc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($W).$Bc,1).")";$E=implode(" UNION ALL ",$ng);}$b->dumpData($a,"table",$E);exit;}if(!$b->selectEmailProcess($Z,$rc)){if($_POST["save"]||$_POST["delete"]){$F=true;$ra=0;$E=table($a);$L=array();if(!$_POST["delete"]){foreach($f
as$_=>$W){$W=process_input($m[$_]);if($W!==null){if($_POST["clone"])$L[idf_escape($_)]=($W!==false?$W:idf_escape($_));elseif($W!==false)$L[]=idf_escape($_)." = $W";}}$E.=($_POST["clone"]?" (".implode(", ",array_keys($L)).")\nSELECT ".implode(", ",$L)."\nFROM ".table($a):" SET\n".implode(",\n",$L));}if($_POST["delete"]||$L){$Ya="UPDATE";if($_POST["delete"]){$Ya="DELETE";$E="FROM $E";}if($_POST["clone"]){$Ya="INSERT";$E="INTO $E";}if($_POST["all"]||($rg===array()&&$_POST["check"])||$Tc){$F=queries("$Ya $E".($_POST["all"]?($Z?"\nWHERE ".implode(" AND ",$Z):""):"\nWHERE $Fg"));$ra=$g->affected_rows;}else{foreach((array)$_POST["check"]as$W){$F=queries($Ya.limit1($E,"\nWHERE ".where_check($W)));if(!$F)break;$ra+=$g->affected_rows;}}}$_d=lang(array('%d item has been affected.','%d items have been affected.'),$ra);if($_POST["clone"]&&$F&&$ra==1){$hd=last_id();if($hd)$_d=sprintf('Item%s has been inserted.'," $hd");}queries_redirect(remove_from_uri("page"),$_d,$F);}elseif(!$_POST["import"]){if(!$_POST["val"])$k='Double click on a value to modify it.';else{$F=true;$ra=0;foreach($_POST["val"]as$pg=>$H){$L=array();foreach($H
as$v=>$W){$v=bracket_escape($v,1);$L[]=idf_escape($v)." = ".(ereg('char|text',$m[$v]["type"])||$W!=""?$b->processInput($m[$v],$W):"NULL");}$E=table($a)." SET ".implode(", ",$L);$Eg=" WHERE ".where_check($pg).($Z?" AND ".implode(" AND ",$Z):"");$F=queries("UPDATE".($Tc?" $E$Eg":limit1($E,$Eg)));if(!$F)break;$ra+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$ra),$F);}}elseif(is_string($kc=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($qa["output"])."&format=".urlencode($_POST["separator"]));$F=true;$Xa=array_keys($m);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$kc,$td);$ra=count($td[0]);begin();$qf=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($td[0]as$v=>$W){preg_match_all("~((\"[^\"]*\")+|[^$qf]*)$qf~",$W.$qf,$ud);if(!$v&&!array_diff($ud[1],$Xa)){$Xa=$ud[1];$ra--;}else{$L=array();foreach($ud[1]as$p=>$Ua)$L[idf_escape($Xa[$p])]=($Ua==""&&$m[$Xa[$p]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ua))));$F=insert_update($a,$L,$Fe);if(!$F)break;}}if($F)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$ra),$F);queries("ROLLBACK");}else$k=upload_error($kc);}}$Jf=$b->tableName($P);if(is_ajax())ob_start();page_header('Select'.": $Jf",$k);$L=null;if(isset($df["insert"])){$L="";foreach((array)$_GET["where"]as$W){if(count($rc[$W["col"]])==1&&($W["op"]=="="||(!$W["op"]&&!ereg('[_%]',$W["val"]))))$L.="&set".urlencode("[".bracket_escape($W["col"])."]")."=".urlencode($W["val"]);}}$b->selectLinks($P,$L);if(!$f)echo"<p class='error'>".'Unable to select the table'.($m?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($J,$f);$b->selectSearchPrint($Z,$f,$t);$b->selectOrderPrint($de,$f,$t);$b->selectLimitPrint($x);$b->selectLengthPrint($Tf);$b->selectActionPrint($t);echo"</form>\n";$B=$_GET["page"];if($B=="last"){$uc=$g->result("SELECT COUNT(*) FROM ".table($a).($Z?" WHERE ".implode(" AND ",$Z):""));$B=floor(max(0,$uc-1)/$x);}$E=$b->selectQueryBuild($J,$Z,$Ac,$de,$x,$B);if(!$E)$E="SELECT".limit((+$x&&$Ac&&$Tc&&$u=="sql"?"SQL_CALC_FOUND_ROWS ":"").$wc,($Z?"\nWHERE ".implode(" AND ",$Z):"").$Bc,($x!=""?+$x:null),($B?$x*$B:0),"\n");echo$b->selectQuery($E);$F=$g->query($E);if(!$F)echo"<p class='error'>".error()."\n";else{if($u=="mssql")$F->seek($x*$B);$Nb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$I=array();while($H=$F->fetch_assoc()){if($B&&$u=="oracle")unset($H["RNUM"]);$I[]=$H;}if($_GET["page"]!="last")$uc=(+$x&&$Ac&&$Tc?($u=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($E) x")):count($I));if(!$I)echo"<p class='message'>".'No rows.'."\n";else{$Ea=$b->backwardKeys($a,$Jf);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Ac&&$J?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'edit'."</a>");$Kd=array();$yc=array();reset($J);$Pe=1;foreach($I[0]as$v=>$W){if($v!=$Qd){$W=$_GET["columns"][key($J)];$l=$m[$J?($W?$W["col"]:current($J)):$v];$_=($l?$b->fieldName($l,$Pe):"*");if($_!=""){$Pe++;$Kd[$v]=$_;$e=idf_escape($v);$Hc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($v);$wb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($Hc.($de[0]==$e||$de[0]==$v||(!$de&&$Tc&&$Ac[0]==$e)?$wb:'')).'">';echo(!$J||$W?apply_sql_function($W["fun"],$_):h(current($J)))."</a>";echo"<span class='column hidden'>","<a href='".h($Hc.$wb)."' title='".'descending'."' class='text'> ‚Üì</a>";if(!$W["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($v)).'\'); return false;" title="'.'Search'.'" class="text jsonly"> =</a>';echo"</span>";}$yc[$v]=$W["fun"];next($J);}}$md=array();if($_GET["modify"]){foreach($I
as$H){foreach($H
as$v=>$W)$md[$v]=max($md[$v],min(40,strlen(utf8_decode($W))));}}echo($Ea?"<th>".'Relations':"")."</thead>\n";if(is_ajax()){if($x%2==1&&$B%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($I,$rc)as$Jd=>$H){$og=unique_array($I[$Jd],$t);$pg="";foreach($og
as$v=>$W)$pg.="&".($W!==null?urlencode("where[".bracket_escape($v)."]")."=".urlencode($W):"null%5B%5D=".urlencode($v));echo"<tr".odd().">".(!$Ac&&$J?"":"<td>".checkbox("check[]",substr($pg,1),in_array(substr($pg,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Tc||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$pg)."'>".'edit'."</a>"));foreach($H
as$v=>$W){if(isset($Kd[$v])){$l=$m[$v];if($W!=""&&(!isset($Nb[$v])||$Nb[$v]!=""))$Nb[$v]=(is_mail($W)?$Kd[$v]:"");$y="";$W=$b->editVal($W,$l);if($W!==null){if(ereg('blob|bytea|raw|file',$l["type"])&&$W!="")$y=h(ME.'download='.urlencode($a).'&field='.urlencode($v).$pg);if($W==="")$W="&nbsp;";elseif(is_utf8($W)){if($Tf!=""&&ereg('text|lob|geometry|point|linestring|polygon',$l["type"]))$W=shorten_utf8($W,max(0,+$Tf));else$W=h($W);}if(!$y){foreach((array)$rc[$v]as$n){if(count($rc[$v])==1||end($n["source"])==$v){$y="";foreach($n["source"]as$p=>$vf)$y.=where_link($p,$n["target"][$p],$I[$Jd][$vf]);$y=h(($n["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($n["db"]),ME):ME).'select='.urlencode($n["table"]).$y);if(count($n["source"])==1)break;}}}if($v=="COUNT(*)"){$y=h(ME."select=".urlencode($a));$p=0;foreach((array)$_GET["where"]as$V){if(!array_key_exists($V["col"],$og))$y.=h(where_link($p++,$V["col"],$V["val"],$V["op"]));}foreach($og
as$Zc=>$V)$y.=h(where_link($p++,$Zc,$V));}}if(!$y){if(is_mail($W))$y="mailto:$W";if($Ne=is_url($H[$v]))$y=($Ne=="http"&&$ba?$H[$v]:"$Ne://www.adminer.org/redirect/?url=".urlencode($H[$v]));}$q=h("val[$pg][".bracket_escape($v)."]");$X=$_POST["val"][$pg][bracket_escape($v)];$Dc=h($X!==null?$X:$H[$v]);$rd=strpos($W,"<i>...</i>");$Jb=is_utf8($W)&&$I[$Jd][$v]==$H[$v]&&!$yc[$v];$Sf=ereg('text|lob',$l["type"]);echo(($_GET["modify"]&&$Jb)||$X!==null?"<td>".($Sf?"<textarea name='$q' cols='30' rows='".(substr_count($H[$v],"\n")+1)."'>$Dc</textarea>":"<input name='$q' value='$Dc' size='$md[$v]'>"):"<td id='$q' ondblclick=\"".($Jb?"selectDblClick(this, event".($rd?", 2":($Sf?", 1":"")).")":"alert('".h('Use edit link to modify this value.')."')").";\">".$b->selectVal($W,$y,$l));}}if($Ea)echo"<td>";$b->backwardKeysPrint($Ea,$I[$Jd]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n",(!$Ac&&$J?"":"<script type='text/javascript'>tableCheck();</script>\n");}if(($I||$B)&&!is_ajax()){$Yb=true;if($_GET["page"]!="last"&&+$x&&!$Tc&&($uc>=$x||$B)){$uc=found_rows($P,$Z);if($uc<max(1e4,2*($B+1)*$x))$uc=reset(slow_query("SELECT COUNT(*) FROM ".table($a).($Z?" WHERE ".implode(" AND ",$Z):"")));else$Yb=false;}echo"<p class='pages'>";if(+$x&&($uc===false||$uc>$x)){$wd=($uc===false?$B+(count($I)>=$x?2:1):floor(($uc-1)/$x));echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($B+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$B).($B>5?" ...":"");for($p=max(1,$B-4);$p<min($wd,$B+5);$p++)echo
pagination($p,$B);echo($B+5<$wd?" ...":"").($Yb&&$uc!==false?pagination($wd,$B):' <a href="'.h(remove_from_uri("page")."&page=last").'">'.'last'."</a>");}echo($uc!==false?" (".($Yb?"":"~ ").lang(array('%d row','%d rows'),$uc).")":""),(+$x&&($uc===false?count($I)+1:$uc-$B*$x)>$x?' <a href="'.h(remove_from_uri("page")."&page=".($B+1)).'" onclick="return !selectLoadMore(this, '.(+$x).', \''.'Loading'.'\');">'.'Load more data'.'</a>':'')," ".checkbox("all",1,0,'whole result')."\n";if($b->selectCommandPrint()){echo'<fieldset><legend>Edit</legend><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Double click on a value to modify it.'.'" class="jsonly"');?>>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure? (' + (this.form['all'].checked ? <?php echo$uc,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$sc=$b->dumpFormat();if($sc){print_fieldset("export",'Export');$ne=$b->dumpOutput();echo($ne?html_select("output",$ne,$qa["output"])." ":""),html_select("format",$sc,$qa["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}}if($b->selectImportPrint()){print_fieldset("import",'Import',!$I);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$qa["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","<input type='hidden' name='token' value='$R'>\n","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($Nb,'strlen'),$f);echo"</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$zf=isset($_GET["status"]);page_header($zf?'Status':'Variables');$_g=($zf?show_status():show_variables());if(!$_g)echo"<p class='message'>".'No rows.'."\n";else{echo"<table cellspacing='0'>\n";foreach($_g
as$v=>$W){echo"<tr>","<th><code class='jush-".$u.($zf?"status":"set")."'>".h($v)."</code>","<td>".nbsp($W);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Gf=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$P){$q=js_escape($P["Name"]);json_row("Comment-$q",nbsp($P["Comment"]));if(!is_view($P)){foreach(array("Engine","Collation")as$v)json_row("$v-$q",nbsp($P[$v]));foreach($Gf+array("Auto_increment"=>0,"Rows"=>0)as$v=>$W){if($P[$v]!=""){$W=number_format($P[$v],0,'.',',');json_row("$v-$q",($v=="Rows"&&$W&&$P["Engine"]==($xf=="pgsql"?"table":"InnoDB")?"~ $W":$W));if(isset($Gf[$v]))$Gf[$v]+=($P["Engine"]!="InnoDB"||$v!="Data_free"?$P[$v]:0);}elseif(array_key_exists($v,$P))json_row("$v-$q");}}}foreach($Gf
as$v=>$W)json_row("sum-$v",number_format($W,0,'.',','));json_row("");}elseif($_GET["script"]=="kill")$g->query("KILL ".(+$_POST["kill"]));else{foreach(count_tables($b->databases())as$j=>$W)json_row("tables-".js_escape($j),$W);json_row("");}exit;}else{$Pf=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Pf&&!$k&&!$_POST["search"]){$F=true;$_d="";if($u=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$F=truncate_tables($_POST["tables"]);$_d='Tables have been truncated.';}elseif($_POST["move"]){$F=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$_d='Tables have been moved.';}elseif($_POST["copy"]){$F=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$_d='Tables have been copied.';}elseif($_POST["drop"]){if($_POST["views"])$F=drop_views($_POST["views"]);if($F&&$_POST["tables"])$F=drop_tables($_POST["tables"]);$_d='Tables have been dropped.';}elseif($u!="sql"){$F=($u=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$_d='Tables have been optimized.';}elseif($_POST["tables"]&&($F=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($H=$F->fetch_assoc())$_d.="<b>".h($H["Table"])."</b>: ".h($H["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$_d,$F);}page_header(($_GET["ns"]==""?'Database'.": ".h(DB):'Schema'.": ".h($_GET["ns"])),$k,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3>".'Tables and views'."</h3>\n";$Of=tables_list();if(!$Of)echo"<p class='message'>".'No tables.'."\n";else{echo"<form action='' method='post'>\n","<p>".'Search data in tables'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Search'."'>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">','<th>'.'Table','<td>'.'Engine','<td>'.'Collation','<td>'.'Data Length','<td>'.'Index Length','<td>'.'Data Free','<td>'.'Auto Increment','<td>'.'Rows',(support("comment")?'<td>'.'Comment':''),"</thead>\n";foreach($Of
as$_=>$S){$Bg=($S!==null&&!eregi("table",$S));echo'<tr'.odd().'><td>'.checkbox(($Bg?"views[]":"tables[]"),$_,in_array($_,$Pf,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($_).'" title="'.'Show structure'.'">'.h($_).'</a>';if($Bg){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($_).'" title="'.'Alter view'.'">'.'View'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($_).'" title="'.'Select data'.'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",'Alter table'),"Index_length"=>array("indexes",'Alter indexes'),"Data_free"=>array("edit",'New item'),"Auto_increment"=>array("auto_increment=1&create",'Alter table'),"Rows"=>array("select",'Select data'),)as$v=>$y)echo($y?"<td align='right'><a href='".h(ME."$y[0]=").urlencode($_)."' id='$v-".h($_)."' title='$y[1]'>?</a>":"<td id='$v-".h($_)."'>&nbsp;");}echo(support("comment")?"<td id='Comment-".h($_)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d in total',count($Of)),"<td>".nbsp($u=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$v)echo"<td align='right' id='sum-$v'>&nbsp;";echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n";if(!information_schema(DB)){echo"<p>".(ereg('^(sql|sqlite|pgsql)$',$u)?($u!="sqlite"?"<input type='submit' value='".'Analyze'."'> ":"")."<input type='submit' name='optimize' value='".'Optimize'."'> ":"").($u=="sql"?"<input type='submit' name='check' value='".'Check'."'> <input type='submit' name='repair' value='".'Repair'."'> ":"")."<input type='submit' name='truncate' value='".'Truncate'."'".confirm("formChecked(this, /tables/)")."> <input type='submit' name='drop' value='".'Drop'."'".confirm("formChecked(this, /tables|views/)").">\n";$i=(support("scheme")?schemas():$b->databases());if(count($i)!=1&&$u!="sqlite"){$j=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Move to other database'.": ",($i?html_select("target",$i,$j):'<input name="target" value="'.h($j).'">')," <input type='submit' name='move' value='".'Move'."'>",(support("copy")?" <input type='submit' name='copy' value='".'Copy'."'>":""),"\n";}echo"<input type='hidden' name='token' value='$R'>\n";}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.'Create table'."</a>\n";if(support("view"))echo'<a href="'.h(ME).'view=">'.'Create view'."</a>\n";if(support("routine")){echo"<h3>".'Routines'."</h3>\n";$hf=routines();if($hf){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Name'.'<td>'.'Type'.'<td>'.'Return type'."<td>&nbsp;</thead>\n";odd('');foreach($hf
as$H){echo'<tr'.odd().'>','<th><a href="'.h(ME).($H["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($H["ROUTINE_NAME"]).'">'.h($H["ROUTINE_NAME"]).'</a>','<td>'.h($H["ROUTINE_TYPE"]),'<td>'.h($H["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($H["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($H["ROUTINE_NAME"]).'">'.'Alter'."</a>";}echo"</table>\n";}echo'<p>'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'Create procedure'.'</a> ':'').'<a href="'.h(ME).'function=">'.'Create function'."</a>\n";}if(support("sequence")){echo"<h3>".'Sequences'."</h3>\n";$rf=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($rf){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($rf
as$W)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($W)."'>".h($W)."</a>\n";echo"</table>\n";}echo"<p><a href='".h(ME)."sequence='>".'Create sequence'."</a>\n";}if(support("type")){echo"<h3>".'User types'."</h3>\n";$T=types();if($T){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($T
as$W)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($W)."'>".h($W)."</a>\n";echo"</table>\n";}echo"<p><a href='".h(ME)."type='>".'Create type'."</a>\n";}if(support("event")){echo"<h3>".'Events'."</h3>\n";$I=get_rows("SHOW EVENTS");if($I){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."<td>".'Schedule'."<td>".'Start'."<td>".'End'."</thead>\n";foreach($I
as$H){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($H["Name"]).'">'.h($H["Name"])."</a>","<td>".($H["Execute at"]?'At given time'."<td>".$H["Execute at"]:'Every'." ".$H["Interval value"]." ".$H["Interval field"]."<td>$H[Starts]"),"<td>$H[Ends]";}echo"</table>\n";$Xb=$g->result("SELECT @@event_scheduler");if($Xb&&$Xb!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($Xb)."\n";}echo'<p><a href="'.h(ME).'event=">'.'Create event'."</a>\n";}if($Of)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();