<?php
    require("conn.php");	
	$sql = "SELECT * FROM case_specific ORDER BY id DESC";
	$res = $db->query($sql);	
?>
<!doctype html>
<html lang="zh-cn">
    <head>
        <meta charset="utf-8">
        <title>果粒网-用户说</title>
        <meta name="keywords" content="户外,徒步,骑行,人文,亲子,滑雪">
	    <meta name="google-site-verification" content="ZRIqJ5yEOtfzmyJCs5FaiyFFQe1RsDLysEiiTGERVAU">
        <link rel="stylesheet" href="../css/layout.css">
        <link rel="stylesheet" href="../css/case.css">
        <style>
            .n_content_left ul a:nth-of-type(4) li {
                background-color: rgb(255,153,51);
            }
        </style>
    </head>
    <body>
	   	<div id="header"></div>
	   	<div id="case_content">
	   		<?php 
			while($arr = mysqli_fetch_assoc($res)){
				// 每一次循环都能拿到一条记录，作为表格的一行显示
			?>
	        <div class="C_box say_list">
	            <div class="C_B_left">
	                <a href="specific.php?page=<?php echo $arr["id"]; ?>" target="_blank" title="<?php echo $arr["h1"]?>">
	                    <img src="../imgs/case/<?php echo $arr["pic"]?>" width="580" height="350" title="<?php echo $arr["h1"]?>"/>
	                </a>
	                <div class="C_B_logo">
	                    <img  src="../imgs/case/<?php echo $arr["logo"]?>" alt="" title="<?php echo $arr["team"]?>"/>
	                </div>
	            </div>
	            <div class="C_B_right">
	                <h3>
	                    <a href="specific.php?page=<?php echo $arr["id"]; ?>"><?php echo $arr["h1"]?></a>
	                </h3>
	                <ul class="C_tags">
	                	<?php
	                		$tags = json_decode($arr["tags"], true);
	                		for ($i = 0; $i < count($tags); $i++) {
	                	?>
	                	<li><?php echo $tags[$i]; ?></li>
	                	<?php
	                		}
	                	?>	                    
	                </ul>
	                <p class="C_info">人数：<?php echo $arr["person"]?>人  ｜  天数：<?php echo $arr["time"]?>   ｜  车程：<?php echo $arr["distance"]?></p>
	                <dl class="C_user_say">
	                    <dt>客户说：</dt>
	                    <dd><?php echo $arr["user_txt"]?></dd>
	                </dl>
	                <a class="view_btn" href="specific.php?page=<?php echo $arr["id"]; ?>" target="_blank" title="<?php echo $arr["h1"]?>">查看案例</a>
	            </div>
	        </div>
	        <?php
	        }
	        ?>
	        <!--<div class="C_box say_list">
	            <div class="C_B_left">
	                <a href="case/10.html" target="_blank" title="中欧玄奘之路徒步熔炼之旅+天人合一心愿同行">
	                    <img src="../imgs/case/1_161122095027557.png" width="580" height="350" title="中欧玄奘之路徒步熔炼之旅+天人合一心愿同行"/>
	                </a>
	                <div class="C_B_logo">
	                    <img  src="../imgs/case/1_161122104106386.png" alt="" title="中欧国际工商学院"/>
	                </div>
	            </div>
	            <div class="C_B_right">
	                <h3>
	                    <a href="case/10.html">中欧玄奘之路徒步熔炼之旅+天人合一心愿同行</a>
	                </h3>
	                <ul class="C_tags">
	                    <li>徒步</li>
	                    <li>戈壁</li>
	                    <li>感悟</li>
	                    <li>升华</li>
	                </ul>
	                <p class="C_info">人数：20人  ｜  天数：7天6晚   ｜  车程：</p>
	                <dl class="C_user_say">
	                    <dt>客户说：</dt>
	                    <dd>“ 非常感谢果粒网完善的后勤保障、专业专注的户外领队、工作人员细致负责的服务意识，烈日炙烤着戈壁、内心却感到了丝丝甘泉流入到每个人的心田。我们享受行走、享受戈壁、享受当下的一切！”</dd>
	                </dl>
	                <a class="view_btn" href="case/10.html" target="_blank" title="中欧玄奘之路徒步熔炼之旅+天人合一心愿同行">查看案例</a>
	            </div>
	        </div>
	        <div class="C_box say_list">
	            <div class="C_B_left">
	                <a href="case/9.html" target="_blank" title="马克华菲 库布齐沙漠生存穿越+团队建设">
	                    <img src="../imgs/case/1_161121110948315.jpg" width="580" height="350" title="马克华菲 库布齐沙漠生存穿越+团队建设"/>
	                </a>
	                <div class="C_B_logo">
	                    <img  src="../imgs/case/1_161122104207449.png"" alt="" title="马克华菲(上海)商业有限公司"/>
	                </div>
	            </div>
	            <div class="C_B_right">
	                <h3>
	                    <a href="case/9.html">马克华菲 库布齐沙漠生存穿越+团队建设</a>
	                </h3>
	                <ul class="C_tags">
	                    <li>沙漠穿越</li>
	                    <li>生存挑战</li>
	                    <li>团建活动</li>
	                </ul>
	                <p class="C_info">人数：35人  ｜  天数：6天5晚   ｜  车程：</p>
	                <dl class="C_user_say">
	                    <dt>客户说：</dt>
	                    <dd>“ 挑战赛的结果和自己期待的一样，团队经历了不寻常的“痛楚”磨炼后才能真正的审视自己的工作和生活，才能真正的和自己心灵来一次对话。这次活动对公司影响深远，对个人亦如此。我们踏上了戈壁、选择勇敢面对没有退缩，我们竞争、但我们更注重合作与帮助、一起欣然接受来自未来的挑战！”</dd>
	                </dl>
	                <a class="view_btn" href="case/9.html" target="_blank" title="马克华菲 库布齐沙漠生存穿越+团队建设">查看案例</a>
	            </div>
	        </div>
	        <div class="C_box say_list">
	            <div class="C_B_left">
	                <a href="case/8.html" target="_blank" title="东原地产余姚拓展+北溪溯溪、漂流">
	                    <img src="../imgs/case/1_161121111301408.jpg" width="580" height="350" title="东原地产余姚拓展+北溪溯溪、漂流"/>
	                </a>
	                <div class="C_B_logo">
	                    <img  src="../imgs/case/1_161122104002467.png" alt="" title="东原地产"/>
	                </div>
	            </div>
	            <div class="C_B_right">
	                <h3>
	                    <a href="case/8.html">东原地产余姚拓展+北溪溯溪、漂流</a>
	                </h3>
	                <ul class="C_tags">
	                    <li>拓展</li>
	                    <li>溯溪</li>
	                    <li>漂流</li>
	                    <li>会议</li>
	                </ul>
	                <p class="C_info">人数：55人  ｜  天数：2天1晚   ｜  车程：3小时</p>
	                <dl class="C_user_say">
	                    <dt>客户说：</dt>
	                    <dd>“伙伴们在活动中踊跃参与，积极学习，增强了团队的凝聚力和团队合作精神，懂得了倾听与沟通在工作中的重要性。激情漂流也让我们身心得到了充分的放松，体验返璞归真的自然神秘，在湍急的河流上体验惊险刺激的漂流乐趣！”</dd>
	                </dl>
	                <a class="view_btn" href="case/8.html" target="_blank" title="东原地产余姚拓展+北溪溯溪、漂流">查看案例</a>
	            </div>
	        </div>
	        <div class="C_box say_list">
	            <div class="C_B_left">
	                <a href="case/7.html" target="_blank" title="上海爱好建德绿道徒步定向+千岛湖团建">
	                    <img src="../imgs/case/1_161121110404278.jpg" width="580" height="350" title="上海爱好建德绿道徒步定向+千岛湖团建"/>
	                </a>
	                <div class="C_B_logo">
	                    <img  src="../imgs/case/1_161117134334409.png" alt="" title="上海爱好儿童康复培训中心"/>
	                </div>
	            </div>
	            <div class="C_B_right">
	                <h3>
	                    <a href="case/7.html">上海爱好建德绿道徒步定向+千岛湖团建</a>
	                </h3>
	                <ul class="C_tags">
	                    <li>徒步</li>
	                    <li>定向赛</li>
	                    <li>拓展活动</li>
	                </ul>
	                <p class="C_info">人数：30人  ｜  天数：2天1晚   ｜  车程：4.5小时</p>
	                <dl class="C_user_say">
	                    <dt>客户说：</dt>
	                    <dd>“ 很满意此次活动效果，不同于以往的常规培训，这次把培训的课堂选在了户外，同事们在欣赏大自然美景的同时还能提高自己的能力。这次课程的安排也让同事们感到很受益、不仅趣味性、对本职工作和特殊的工作性质有了更深的认识。活动中的一些体验可以结合我们的工作，让我们在爱的路上走的更坚实！”</dd>
	                </dl>
	                <a class="view_btn" href="case/7.html" target="_blank" title="上海爱好建德绿道徒步定向+千岛湖团建">查看案例</a>
	            </div>
	        </div>-->
	        <div class="page_list">
	            <div class="pagination">
	                <div class="page-bottom">
	                    <div>
	                        <span class="C_current">1</span>
	                        <!--<a class="C_num" href="/case/index/p/2.html">2</a>-->
	                        <!--<a class="C_next" href="/case/index/p/2.html">>></a>-->
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div id="footer"></div>
    </body>
    <script src="../js/jquery.js"></script>
    <script src="../js/load_HeaderFooter.js" type="text/javascript" charset="utf-8"></script>
</html>