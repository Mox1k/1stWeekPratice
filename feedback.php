<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
?> 

<section class="hero">
                <div class="container">
                    <div class="hero-inner">
						<div class="hero-copy">
							<div class="login-box">
								<h2>Задайте нам вопрос</h2>
								<form action="addfeedback.php" method="POST">
									<div class="user-box">
										<input type="text" name="username" required="">
										<label>Имя</label>
									</div>
									<div class="user-box">
										<input type="text" name="useremail" required="">
										<label>Email</label>
									</div>
									<div class="user-box">
										<input type="text" name="usermessage" required="">
										<label>Сообщение</label>
									</div>
									<input id="sub" type="submit" value="Отправить">
								</form>
								</div>
							</div>
						<div class="hero-figure anime-element">
							<svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
								<rect width="528" height="396" style="fill:transparent;" />
							</svg>
							<div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
							<div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
							<div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
							<div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
							<div class="hero-figure-box hero-figure-box-05"></div>
							<div class="hero-figure-box hero-figure-box-06"></div>
							<div class="hero-figure-box hero-figure-box-07"></div>
							<div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
							<div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
							<div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
						</div>
                    </div>
                </div>
            </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>